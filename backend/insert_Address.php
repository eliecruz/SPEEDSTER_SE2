<?php
include('../connect.php');
session_start();

$customer_ID = $_SESSION['user_id'];
$houseNum = $_POST['Location'];
$city = $_POST['City'];
$barangay = $_POST['barangay'];
$postalCode = $_POST['postalCode'];

$query = "INSERT INTO AddressBook(customer_ID, house_Num, barangay, city, postal_Code)
            VALUES ('$customer_ID' , '$houseNum', '$barangay',  '$city', '$postalCode' );";
$result = sqlsrv_query($conn, $query);

if($result){
    ?>
    <script type="text/javascript">
    alert("Address successfully added.");
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