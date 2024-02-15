<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta Name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Order Details</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="MyOrderDetails.css" />
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
        <h1>Order Details</h1>
        <hr>
        <div class="ShippingDetails">
            <p>Order Number: 1234-1234-1234</p>
            <p>Order Date: January 1, 2024</p>
            <p>Payment Method: Cash on Delivery</p>
            <p>Estimated Delivery Date: January 4 - January 7, 2024</p>
        </div>
        <h3>Items</h3>
        <table class="ItemsContainer">
            <tr>
            <td class="Items">
                <img src="http://localhost/InbillaDraft/Images/Printer.jpg" class="Product-image"><p>Epson L3210</p>
            </td>
                <td class ="ItemDetails">
                    <p>Quantity: 1x</p>
                    <p>Price: ₱ 5,200.00</p>
                </td>
            </tr>
            <tr>
            <td class="Items">
                <img src="http://localhost/InbillaDraft/Images/Printer.jpg" class="Product-image"><p>Epson L3210</p>
            </td>
                <td class ="ItemDetails">
                    <p>Quantity: 1x</p>
                    <p>Price: ₱ 5,200.00</p>
                </td>
            </tr>
        </table>
        <h3>Order Summary</h3>
        
        <div class="OrderDetails">
            <div class="Details"> 
                <p>Subtotal (2 items): </p>
                <p>Shipping Fee: </p>
            </div>
            <div class="Fees">
                <p>₱ 7,715.00</p>
                <p>₱ 100.00</p>
            </div>
        </div>  
            <hr>
            <div class="Total">
                <p>Total:</p>
                <p>₱ 7,815.00</p>
            </div>

        <h3>Order Status</h3>
        <p>Delivered: January 4,2024</p>
    </div>
        
    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>
