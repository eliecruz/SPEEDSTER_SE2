<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="ProductList.css">
    <link rel="stylesheet" type="text/css" href="Header&Footer.css">
    <title>Product List</title>
</head>
<body>
    <?php
    include("Header.php");
    ?>

    <div class="Breadcrumb-Nav">
        <ol>
            <li><a href="Home.php">Home</a></li>
            <li>Product List</li>
        </ol>
    </div>

    <div class="product-list">
        
        <div class="sort-container">
        <h1>Printers</h1>
        <div class="sort">
            <p>Sort by</p>
            <select name="" id="">
                <option value="">Alphabetical (Ascending)</option>
                <option value="">Alphabetical (Descending)</option>
            </select>
        </div>
        </div>
        

        <div class="product-list-container">
            <div class="sidebar-container">
                <form action="">
                    <div class="filter">    
                        <p>Filter</p>
                    </div>

                    <div class="filter-title">
                        <p>Brand</p>
                    </div>

                    <div class="filter-container">
                        <div class="checkbox">
                            <input type="checkbox" id="" name="" value="">
                            <label for="">Brother</label><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="" name="" value="">
                            <label for="">Epson</label><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="" name="" value="">
                            <label for="">Brand 3</label><br>
                        </div>
                        
                    </div>

                    <div class="filter-title">
                        <p>Category</p>
                    </div>

                    <div class="filter-container">
                        <div class="checkbox">
                            <input type="checkbox" id="" name="" value="">
                            <label for="">Printers</label><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="" name="" value="">
                            <label for="">Consumables</label><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="" name="" value="">
                            <label for="">Office Supplies</label><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="" name="" value="">
                            <label for="">Accessories</label><br>
                        </div>
                    </div>

                    <div class="clear-filter">
                        <input type="reset" value="Clear Filter">
                    </div>
                </form>
            </div>

            <div class="list-container">
                <div class="product-container">
                    <div class="product" id="product">
                        <img src="" alt="">
                        <div class="info" id="info">
                            <p class="name">Epson M100 Mono Ink Tank Printer</p>
                            <p class="brand">EPSON</p>
                            <p class="price">₱6,815.00</p>
                        </div>
                        
                        <div class="view-container">
                            <div class="view-btn">
                                <p>View Product</p>
                            </div>
                        </div>
                    </div>

                    <div class="product" id="product">
                        <img src="" alt="">
                        <div class="info" id="info">
                            <p class="name">Epson L3210</p> 
                            <p class="brand">EPSON</p>
                            <p class="price">₱5,200.00</p>
                        </div>
                        <div class="view-container">
                            <div class="view-btn">
                                <p>View Product</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="product"  id="product">
                        <img src="" alt="">
                        <div class="info" id="info">
                            <p class="name">Brother DCP-T420W- Wireless All in One Printer</p>
                            <p class="brand">BROTHER</p>
                            <p class="price">₱7,380.00</p>
                        </div>
                        <div class="view-container">
                            <div class="view-btn">
                                <p>View Product</p>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
        </div>
       
    </div>

    <?php
    include("Footer.php");
    ?>
</body>
</html>
