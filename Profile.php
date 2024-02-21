<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta Name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="Profile.css" />
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
        <h1>Account Informartion</h1>
        <hr>
        <form class="User-Info">
            <div class="Name-fields">
                <div class="Label-Input">
                    <label for="first-Name">First Name</label>
                    <input type="text" id="first-Name" placeholder="First Name">
                </div>
                <div class="Label-Input">
                    <label for="last-Name">Last Name</label>
                    <input type="text" id="last-Name" placeholder="Last Name">
                </div>
            </div>

                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Email">

            <div class="Id-Field">
                <div class="Label-Input">
                    <Label for="Mobile-Num">Mobile Number</Label>
                    <input type="text" id="Mobile-Num" placeholder="Mobile Number">
                </div>
                <div class="Label-Input">
                    <Label for="Acc-ID">Account ID</Label>
                    <input type="text" id="Acc-ID" placeholder="Account ID">
                </div>
            </div>

            <div class="BdayGender-Field">
                <div class="Label-Input">
                    <Label for="Birthday">Birthday</Label>
                    <input type="text" id="Birthday" placeholder="Birthday">
                </div>
                <div class="Label-Input">
                    <Label for="Gender">Gender</Label>
                    <input type="text" id="Gender" placeholder="Gender">
                </div>
            </div>
        </form>

        <div class="Buttons">
        <a href="EditProfile.php" class="ChangePass">Change Password</a>
        <button class="Edit">Edit Profile</button>
        </div>

    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>
