<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta Name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="MyOrders.css" />
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
                <li><a href="#">Submit Ticket</a></li>
                <li><a href="#">Account Settings</a></li>
            </ul>
        </div>
        <div class="Button-Section">
        <button class="Logout-Button">Log out</button>
        </div>
    </div>

    <div class="Main-Container">
        <h1>My Orders</h1>
        <hr>
        <div class="MyOrders-Container">
            <div class="OrderDetails">
                <h3>Epson L3210</h3>
                    <div class="Items">
                        <img src="http://localhost/InbillaDraft/Images/Epson L3210.png">
                        <div class="Details">
                            <p>Quantity: 1x</p>
                            <p>Price:₱ 5,200.00</p>
                            <p>Delivered on January 4,2024</p>
                        </div>
                    </div>
            </div>
            <div class="OrderDetails">
                        <h3>Gprinter 1324D direct thermal barcode (usb) printer</h3>
                            <div class="Items">
                                <img src="http://localhost/InbillaDraft/Images/Gprinter 1324D direct thermal barcode (usb) printer.png">
                                <div class="Details">
                                    <p>Quantity: 1x</p>
                                    <p>Price:₱ 2,515.00</p>
                                    <p>Delivered on January 4,2024</p>
                                </div>
                            </div>
                    </div>
        </div>
    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>
