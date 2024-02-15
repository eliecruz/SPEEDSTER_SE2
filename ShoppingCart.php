<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="ShoppingCart.css" />
</head>
<body>
    <?php
    include('Header.php')
    ?>

    <div class="ShoppingCart-Section">
        <div class="Breadcrumb-Nav">
            <ol>
                <li><a href="Home.php">Home</a></li>
                <li>Shopping Cart</li>
            </ol>
        </div>
        <div class="ShoppingCart-Container">
            <table class="Cart-Table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox"><img src="http://localhost/InbillaDraft/Images/Printer.jpg" class="product-image"> Epson L3210
                        </td>
                        <td>₱ 5,200.00</td>
                        <td>1</td>
                        <td>Add to Wishlist</td>
                        <td>Delete</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class ="Checkout-Container">
            <div class="Checkout-Actions">
                <div class="ProductSelection">
                <label><input type="checkbox" id="selectAll"> Select All</label>
                <p>Delete</p>
                </div>
                <div class="Total-Amount">
                    <p>Total (0 item) <strong>₱0</strong></p>
                    <a href="OrderDetails.php" id="checkoutButton">Check Out</a>
                </div>
            </div>
        </div>

    </div>



    <?php
    include('Footer.php');
    ?>

</body>


</html>
