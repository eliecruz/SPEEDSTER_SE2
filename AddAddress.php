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
                <li><a href="#">Submit Ticket</a></li>
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

        <form class="UserAddressInfo">
            <div class="Field1">
                <div class="Label-Input">
                    <label for="full-Name">Full Name</label>
                    <input type="text" id="full-Name" placeholder="Full Name">
                </div>
                <div class="Label-Input">
                    <label for="Mobile-Num">Mobile Number</label>
                    <input type="text" id="Mobile-Num" placeholder="Mobile Number">
                </div>
            </div>

                <label for="Location">House/Unit/Floor No., Building Name,, Block or Lot No.</label>
                <input type="text" id="Location" placeholder="House/Unit/Floor No., Building Name,, Block or Lot No.">
                
        <div class="Field2">
            <div class="Label-Input">
                <label for="province">Province</label>
                <select id="province" name="province">
                    <option value="province1">Province 1</option>
                    <option value="province2">Province 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="Label-Input">
                <label for="cityMunicipality">City/Municipality</label>
                <select id="cityMunicipality" name="cityMunicipality">
                    <option value="city1">City 1</option>
                    <option value="city2">City 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>

        <div class="Field3">
            <div class="Label-Input">
                <label for="barangay">Barangay</label>
                <select id="barangay" name="barangay">
                    <option value="barangay1">Barangay 1</option>
                    <option value="barangay2">Barangay 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="Label-Input">
                <label for="deliveryCategory">Select Category for Effective Delivery</label>
                <select id="deliveryCategory" name="deliveryCategory">
                    <option value="home">Home</option>
                    <option value="office">Office</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>
        </form>

        <div class="Buttons">
        <button class="CancelButton">Cancel</button>
        <button class="SaveButton">Save</button>
        </div>

    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>
