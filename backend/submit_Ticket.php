<?php

include('../connect.php');
session_start();
$customerID = $_SESSION['user_id'];
$tag = $_POST['tag'];
$subject = $_POST['subject'];
$desc = $_POST['description'];


$query = "INSERT INTO Tickets
            VALUES ('$customerID' , '$tag', '$subject',  '$desc');";
$result = sqlsrv_query($conn, $query);


if($result){
    ?>
    <script type="text/javascript">
    alert("Ticket Submitted");
    window.location.href = '../Ticket.php';
    </script>
    <?php
}   

else {
?>
    <script type="text/javascript">
    alert("ERROR ENCOUNTERED \n CHECK YOUR INPUT");
    window.location.href = '../Ticket.php';
    </script>
<?php
}

?>