<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="Product.css">
    <link rel="stylesheet" type="text/css" href="Header&Footer.css">
    <title>Product</title>
</head>
<body>
    <?php
    include("Header.php");
    ?>

    <div class="product">
        <div class="product-container">
            <img src="">
        </div>
        <div class="desc-container">
            <h1>Product Name</h1>
            <p class="price">₱XXXXX</p>
            <p class="type">Types</p>
            <hr class="line"></hr>

            <div class="quantity-container">
                <div class="quantity">Quantity</div>
                <div class="btn-quantity">
                    <div class="minus">-</div>
                    <div class="number">1</div>
                    <div class="plus">+</div>
                </div>
            </div>
            
            <button type="button" class="btn-buy">Buy Now</button>
            <button type="button" class="btn-cart-wishlist"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</button>
            <button type="button" class="btn-cart-wishlist"><i class="fa-solid fa-heart"></i>Add to Wishlist</button>
        </div>
    </div>

    <div class="tabs">
        <div class="tabs-container">
            <a href="#specs">Specifications</a>
            <a href="#compatibles">Compatibilities</a>   
        </div>
    </div>

    <hr class="page-line"></hr>

    <div class="specs" id="specs">
        <h1>Specification</h1>
        <div class="specs-container">
            <ol>
                <li>Printer Type: Inkjet</li>
                <li>Functions: Print, Copy, Scan</li>
                <li>Ink Type: EcoTank Ink Bottles</li>
                <li>Print Resolution: Up to 5760 x 1440 dpi</li>
                <li>Print Speed:
                    <ul>
                        <li>Black: Up to 33 pages per minute (ppm)</li>
                        <li>Color: Up to 15 ppm</li>
                    </ul>
                </li>
                <li>Scan Resolution: 1200 x 2400 dpi (flatbed)</li>
                <li>Copying Speed:
                    <ul>
                        <li>Black: Approx. 7.7 cpm</li>
                        <li>Color: Approx. 3.8 cpm</li>
                    </ul>
                </li>
                <li>Paper Handling:
                    <ul>
                        <li>Paper Tray Capacity: Up to 100 sheets</li>
                        <li>Paper Size: A4, A5, A6, B5, 10x15 cm (4x6 in), 13x18 cm (5x7 in), 9x13 cm (3.5x5 in), Letter (8.5x11 in), Legal (8.5x14 in), Half Letter (5.5x8.5 in), 13x20 cm (5x8 in), 20x25 cm (8x10 in), 16:9 wide size, 100x148 mm</li>
                    </ul>
                </li>
                <li>Connectivity: USB, Wi-Fi</li>
                <li>Compatible Operating Systems: Windows, Mac OS</li>
                <li>Mobile Printing: Epson Connect (Epson iPrint, Epson Email Print, Remote Print Driver)</li>
                <li>Display: No display screen (basic control buttons)</li>
                <li>Power Consumption: Approx. 12 W (printing), Approx. 3.9 W (standby), Approx. 0.3 W (power off)</li>
            </ol>
        </div>
    </div>

    <hr class="page-line"></hr>

    <div class="compatibility" id="compatibles">
        <h1>Compatibilities</h1>
        <div class="compatibility-container">
            <ol>
                <li>Black Ink Bottle - 003</li>
                <li>Cyan Ink Bottle - 003</li>
                <li>Magenta Ink Bottle - 003</li>
                <li>Yellow Ink Bottle - 003</li>
            </ol>
        </div>
    </div>

    <?php
    include("Footer.php");
    ?>
</body>
</html> 