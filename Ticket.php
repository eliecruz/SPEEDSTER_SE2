<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta Name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ticket</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="Ticket.css" />
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
        <h1>Submit a Ticket</h1>
        <hr>
        <div class="Form-Container">

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
                <div class="Sub-Tag-fields">
                    <div class="Label-Input">
                        <label for="tag">Tag</label>
                        <select id="tag">
                            <!-- Add options for the dropdown as needed -->
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="Label-Input">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" placeholder="Subject">
                    </div>
                </div>

                
                    <textarea id="additionalInfo" placeholder="Write your concerns here"></textarea>
                    <button type="submit" class="Submit-Button">Submit</button>

            </form>
        </div>
    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>