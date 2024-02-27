<?php
include('../connect.php');
session_start();

$id = $_GET['id'];


$query = "DELETE FROM AddressBook WHERE address_ID ='$id'";
$result = sqlsrv_query($conn, $query);

if($result){
    ?>
    <script type="text/javascript">
    alert("Address successfully deleted.");
    window.location.href = '../AddressBook.php';
    </script>
    <?php
}   else {
?>
    <script type="text/javascript">
    alert("ERROR ENCOUNTERED");
    window.location.href = '../AddressBook.php';
    </script>
<?php
}



?>