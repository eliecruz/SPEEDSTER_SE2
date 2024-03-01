<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link rel="stylesheet" type="text/css" href="AdminHeader.css">
    <title>Dashboard</title>
</head>
<body>
    <?php
    include("AdminHeader.php");
    ?>

<div class="main-container">
        <nav class="side-navbar">
            <ul>
                <li><a href="#"><img src="Images\Dashboard.png">Dashboard</a></li>
                <li><a href="ManageProducts.php"><img src="Images\Products.png">Products</a></li>
                <li><a href="ManageOrders.php"><img src="Images\Orders.png">Orders</a></li>
                <li><a href="ManageAccounts.php"><img src="Images\Accounts.png">Accounts</a></li>
                <li><a href="ManageTickets.php"><img src="Images\Tickets.png">Tickets</a></li>
                <li><a href="Feedbacks.php"><img src="Images\Feedbacks.png">Feedbacks</a></li>
                <li><a href="#"><img src="Images\Settings.png">Settings</a></li>
            </ul>
        </nav>

        <div class="dashboard-container">
            <h2>Dashboard</h2>

            <div class="metrics-container">
                <div class="total-container">
                    <img src="Images/account-box.svg" alt="">
                    <p class="title">Total Sales</p>
                    <p class="number">₱ 10,000.00</p>
                </div>

                <div class="total-container">
                    <img src="Images/truck.svg" alt="">
                    <p class="title">Total Orders</p>
                    <p class="number">500</dipv>
                </div>

                <div class="total-container">
                    <img src="Images/inventory.svg" alt="">
                    <p class="title">Total Products</p>
                    <p class="number">10</p>
                </div>

                <div class="total-container">
                    <img src="Images/account-box.svg" alt="">
                    <p class="title">Total Users</p>
                    <p class="number">20</p>
                </div>

            </div>

            <div class="visual-container">
                <div class="total-container">  
                    <p class="title">Sales Trend</p>
                    <div class="trend">
                        <img src="Images/sales-trend.svg" alt="">
                    </div>
                </div>

                <div class="total-container">
                    <p class="title">Top-Selling Products</p>
                    <div class="top-sell">
                        <div class="product">
                            <img src="Images/product-1.svg" alt="">
                            <div class="details">Epson M100 Mono Ink Tank Printer</div>
                            <div class="details"  id="orders">Orders: 15</div>
                        </div>
                        <div class="product">
                        <img src="Images/product-2.svg" alt="">
                            <div class="details">Brother DCP-T420W- Wireless All in One Printer</div>
                            <div class="details" id="orders">Orders: 10</div>
                        </div>
                        <div class="product" id="product-3">
                        <img src="Images/product-3.svg" alt="">
                            <div class="details">Epson EcoTank L3210</div>
                            <div class="details"  id="orders">Orders: 5</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>