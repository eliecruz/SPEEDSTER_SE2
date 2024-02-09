<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wishlist</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="Wishlist.css" />
</head>
<body>
    <?php
    include('Header.php')
    ?>

    <div class="Wishlist-Section">
        <div class="Breadcrumb-Nav">
            <ol>
                <li><a href="Home.php">Home</a></li>
                <li>Wishlist</li>
            </ol>
        </div>
        <div class="Wishlist-Container">
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
                        <td>Add to Cart</td>
                        <td>Delete</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class ="AddtoCart-Container">
            <div class="AddtoCart-Actions">
                <div class="ProductSelection">
                <label><input type="checkbox" id="selectAll"> Select All</label>
                <p>Delete</p>
                </div>
                <div class="Add-Cart">
                    <button id="AddtoCartButton">Add to Cart</button>
                </div>
            </div>
        </div>

    </div>



    <?php
    include('Footer.php');
    ?>

</body>


</html>