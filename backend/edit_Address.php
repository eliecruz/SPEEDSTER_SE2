<?php
include('../connect.php');
session_start();

$id = $_SESSION['address_ID'];
$customer_ID = $_SESSION['user_id'];
$houseNum = $_POST['Location'];
$city = $_POST['City'];
$barangay = $_POST['barangay'];
$postalCode = $_POST['postalCode'];

$query = "UPDATE AddressBook SET house_Num = '$houseNum', barangay = '$barangay', city = '$city', postal_Code = '$postalCode' WHERE address_ID = '$id';";
$result = sqlsrv_query($conn, $query);

if($result){
    ?>
    <script type="text/javascript">
    alert("Address successfully edited.");
    window.location.href = '../AddressBook.php';
    </script>
    <?php
}   else {
?>
    <script type="text/javascript">
    alert("ERROR ENCOUNTERED \n CHECK YOUR INPUT");
    window.location.href = '../AddressBook.php';
    </script>
<?php
}



?>