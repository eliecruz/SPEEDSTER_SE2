<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Details</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="OrderDetails.css" />
</head>
<body>
    <?php
    include('Header.php')
    ?>

    <div class="CheckoutSection">
        <div class="CheckoutContainer">
            <div class="CheckoutDetails">
                <h1>Checkout</h1>
                <hr>
                <p class="Info">Shipping Address</p>
                
                <div class="ShippingAddressContainer">
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
                <p class="Info">Items</p>

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
                <p class="Info">Payment Method</p>

                <div class="MethodContainers">
                    <label class="Selection">
                        <img src="http://localhost/InbillaDraft/Images/COD.svg" width="29px" height="29px">
                        <div class="PaymentText">
                            <bold>Cash On Delivery</bold>
                            <p>Pay as you receive the item</p>
                        </div>
                        <input type="checkbox">
                    </label>

                    <label class="Selection">
                        <img src="http://localhost/InbillaDraft/Images/GCASH.svg" width="29px" height="29px">
                        <div class="PaymentText">
                            <bold>GCash e-Wallet</bold>
                            <p>Pay using GCash e-Wallet</p>
                        </div>
                        <input type="checkbox">
                    </label>
                </div>

                <p class="Info">Delivery Method</p>

                <div class="MethodContainers">
                    <label class="Selection">
                        <img src="http://localhost/InbillaDraft/Images/Pickup.svg" width="29px" height="29px">
                        <div class="PaymentText">
                            <bold>Pick-Up</bold>
                            <p>Pick-up item on Main Office</p>
                        </div>
                        <input type="checkbox">
                    </label>

                    <label class="Selection">
                        <img src="http://localhost/InbillaDraft/Images/Lalamove.svg" width="29px" height="29px">
                        <div class="PaymentText">
                            <bold>Lalamove</bold>
                            <p>Delivery through Lalamove</p>
                        </div>
                        <input type="checkbox">
                    </label>
                </div>

            </div>
        </div>

        <div class="OrderSummaryContainer">
            <h3>Order Summary</h3>
                <div class="Order-Details">
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
                <div class="ButtonSection">
                <button class="PlaceOrder">Place Order</button>
                </div>
                
        </div>



    </div>



    <?php
    include('Footer.php');
    ?>

</body>


</html>
