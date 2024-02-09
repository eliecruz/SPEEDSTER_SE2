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
                <li><a href="#">Order History</a></li>
                <li><a href="#">Wishlist</a></li>
                <li><a href="#">Submit Ticket</a></li>
                <li><a href="#">Account Settings</a></li>
            </ul>
        </div>
        <div class="Button-Section">
        <button class="Logout-Button">Log out</button>
        </div>
    </div>

    <div class="Main-Container">
        <h1>Address Book</h1>
        <hr>
        <div class="AddressContainer">
                    <div class="UserDetails">
                        <p>Full Name:</p>
                        <p>Address:</p>
                        <p>Postcode:</p>
                        <p>Phone Number:</p>
                    </div>
                    <div class="Home-Edit">
                        <p class="Description">Home</p>
                        <p class="Edit">Edit</p>
                    </div>
                </div>
        
        <div class="Buttons">
            <button class="AddAddress-Button">Add New Address</button>
        </div>

    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>