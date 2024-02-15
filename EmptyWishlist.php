<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empty Wishlist</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="EmptyWishlist.css" />
</head>
<body>
    <?php
    include('Header.php')
    ?>

    <div class="EmptyWishlist-Section">
        <div class="Breadcrumb-Nav">
            <ol>
                <li><a href="Home.php">Home</a></li>
                <li>Wishlist</li>
            </ol>
        </div>
        <div class="EmptyWishlist-Container">
            <img src="http://localhost/InbillaDraft/Images/EmptyWishlist.png" width="412px" height="309px">
            <p>Your Wishlist is empty</p>
            <a href="Home.php">Discover More</a>
        </div>

    </div>



    <?php
    include('Footer.php');
    ?>

</body>


</html>
