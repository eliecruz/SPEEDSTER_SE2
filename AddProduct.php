<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="AddProduct.css">
    <link rel="stylesheet" type="text/css" href="AdminHeader.css">
    <title>Add Products</title>
</head>
<body>
    <?php
        include('AdminHeader.php');
    ?>

    <div class="Main-Container">
        <nav class="side-navbar">
            <ul>
                <li><a href="#"><img src="Images\Dashboard.png">Dashboard</a></li>
                <li><a href="ManageProducts.php"><img src="Images\Products.png">Products</a></li>
                <li><a href="ManageOrders.php"><img src="Images\Orders.png">Orders</a></li>
                <li><a href="ManageAccounts.php"><img src="Images\Accounts.png">Accounts</a></li>
                <li><a href="ManageTickets.php"><img src="Images\Tickets.png">Tickets</a></li>
                <li><a href="Feedbacks.php"><img src="Images\Feedbacks.png">Feedbacks</a></li>
                <li><a href="#"><img src="Images\Promotion.png">Promotions</a></li>
                <li><a href="#"><img src="Images\Settings.png">Settings</a></li>
            </ul>
        </nav>

        <div class="Form-Container">
            <h2>Add Products</h2>


            <form class="Product-Info" method="post" enctype="multipart/form-data">
                
                <div class="Product-Field">
                    <div class="Label-input">
                        <label for="product-name">Price</label>
                        <input type="text" id="product-name" placeholder="Name">
                    </div>

                    <div class="Label-input">
                        <label for="product-brand">Brand</label>
                            <select id="product-brand">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                            </select>
                            
                    </div>

                    <div class="Label-input">
                        <label for="product-category">Category</label>
                        <select id="product-category">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                        </select>
                    </div>
                </div>

                <div class="Quantity-Field">
                    <div class="Label-input">
                        <label for="product-price">Price</label>
                        <input type="text" id="product-price" placeholder="Price">
                    </div>

                    <div class="Label-input">
                        <label for="product-stocks">Stocks</label>
                        <input type="text" id="product-stocks" placeholder="Stocks">
                    </div>

                    <div class="Label-input">
                        <label for="product-image">Image</label>
                        <input type="file" class="product-image" id="product-image">
                    </div>
                </div> 

                <div class="Description-Field">
                    <div class="Label-input">
                        <label for="product-description">Description</label>
                        <br>
                        <textarea id="product-description" placeholder="Description"></textarea>
                    </div>
                </div>
               
                
            
                <div class="Buttons">
                    <button class="add" type="submit">Add</button>
                    <button class="cancel">Cancel</button>
                </div>
                

            </form>

           

        </div>
    </div>

   
</body>
</html>