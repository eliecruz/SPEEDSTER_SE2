<?php
    session_start();
    if(isset($_SESSION['user_id'])) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta Name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Address</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="AddAddress.css" />
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
        <button class="Logout-Button">Log out</button>
        </div>
    </div>

    <div class="Main-Container">
        <h1>Add New Address</h1>
        <hr>

        <form class="UserAddressInfo" action="backend/insert_Address.php" method="post">
            <div class="Field1">
                <div class="Label-Input">
                    <label for="full-Name">Full Name</label>
                    <input type="text" id="full-Name" disabled placeholder="Full Name" value = "<?php echo $row['first_Name'] ?> <?php echo $row['last_Name'] ?> ">
                </div>
                <div class="Label-Input">
                    <label for="Mobile-Num">Mobile Number</label>
                    <input type="text" id="Mobile-Num" disabled placeholder="Mobile Number" value = "<?php echo $row['contact_Num'] ?> " >
                </div>
            </div>

                <label for="Location">House/Unit/Floor No., Building Name,, Block or Lot No.</label>
                <input type="text" name="Location" required placeholder="House/Unit/Floor No., Building Name,, Block or Lot No.">
                
        <div class="Field2">
            <div class="Label-Input">
                <label for="city">City/Municipality, Province</label>
                <input type="text" name="City" required placeholder="City/Municipality, Province">
                   
                
            </div>
            <div class="Label-Input">
                <label for="Barangay">Barangay</label>
                <input type="text" name="barangay" required placeholder="Barangay">
               
                
            </div>
        </div>

        <div class="Field3">
            <div class="Label-Input">
                <label for="postal">Postal Code</label>
                <input type="text" pattern="[0-9]{4}" name="postalCode" required placeholder="Postal Code">
        
            </div>
            <div class="Label-Input">
                <label for="deliveryCategory">Select Category for Effective Delivery</label>
                <select id="deliveryCategory" name="deliveryCategory">
                    <option value="home">Home</option>
                    <option value="office">Office</option>
                  
                </select>
            </div>
        </div>

        
        <div class="Buttons">
        
        <button class="SaveButton">Save</button>
        </div>
        </form>
        <div class="Buttons">
        
        <form action="AddressBook.php">
        <button class="CancelButton">Cancel</button>
        </form>
        </div>
    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>
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
