<?php
    session_start();
    if(isset($_SESSION['user_id'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta Name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="AddressBook.css" />
</head>
<body>
    <?php
    include('Header.php')
    ?>
<div class="Profile-Container">
    <div class="SideMenu-Container">
        <div class="User">
            <img src="" class="User-img">
            <h4>Username</h4> 
        </div>

        <div class="Navigator">
            <ul>
                <li><a href="Profile.php">Account Information</a></li>
                <li><a href="AddressBook.php">Address Book</a></li>
                <li><a href="MyOrders.php">Order History</a></li>
                <li><a href="Wishlist.php">Wishlist</a></li>
                <li><a href="Ticket.php">Submit Ticket</a></li>
                <li><a href="#">Account Settings</a></li>
            </ul>
        </div>
        <div class="Button-Section">
        <form action="backend/logout.php">
            <button class="Logout-Button" type="submit">Logout</button>
        </form>
        </div>
    </div>

    <div class="Main-Container">
         <?php   
        $customer_ID = $_SESSION['user_id'];
        $query = "SELECT * FROM AddressBook INNER JOIN Customers ON 
        AddressBook.customer_ID = Customers.customer_ID WHERE Customers.customer_ID = '$customer_ID'";
        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $result = sqlsrv_query( $conn, $query , $params, $options );
        $row_count = sqlsrv_num_rows($result);

        ?>
        <h1>Address Book</h1>
        <h2><?php echo $row_count?>/5</h2>
        <hr>
        <?php
      
        
        $i = 0;

        while ($i < $row_count){
            while( $row= sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))  
            {  
                

        ?>
        <div class="AddressContainer">
                    <div class="UserDetails">
                        <p>Address ID:<?php echo $row['address_ID']?></p>
                        <p>Full Name: <?php echo $row['first_Name'] ," ", $row['last_Name']; ?></p>
                        <p>Address:<?php echo $row['house_Num'], " ", $row['barangay'], " ", $row['city'] ?></p>
                        <p>Postcode:<?php echo $row['postal_Code']?></p>
                        <p>Phone Number:<?php echo $row['contact_Num']?></p>
                    </div>
                    <div class="Home-Edit">
                        <p class="Description"><a onclick="deleteAddress(<?=$row['address_ID'] ?>)">Delete</p>
                        <p class="Edit"><a onclick="editAddress(<?=$row['address_ID'] ?>)">Edit</a></p>
                    </div>
                </div>
                <?php
                
                $i++;
            }
            }
            ?>
        
        <div class="Buttons">
            <?php 
            if ($row_count<5){

        
            ?>
            <a href="AddAddress.php" class="AddAddress-Button">Add New Address</a>
        <?php    
        } 
        
            else if ($row_count>=5)
                {
            ?>
            <a class="AddAddress-Button">Maximum Address Reached</a>

            
            <?php
                }
        ?> 
        </div>

    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>

<script type="text/javascript">
	function editAddress(id){
		window.location.href = 'EditAddress.php?id=' + id;
	}
    function deleteAddress(id){

        let text = "Do you want to delete this address?";
        if (confirm(text) == true) {
            window.location.href = 'backend/delete_Address.php?id=' + id;
         } else {
         }
        
    }
</script>
<?php 
    }
    else {

      ?>
      <script type="text/javascript">
      window.location.href = 'Home.php';
      </script>

      <?php 

    }


?>
