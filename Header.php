
    <header>
        <div class="Logo">
            <span class="Inbilla"><a href="Home.php"><img src= "http://localhost/InbillaDraft/Images/Inbilla Logo.png" width="60" height="65"></a></span>
            <div class="InbillaText">
                <h1>INBILLA</h1>
                <h5>TRADING</h5>
            </div>
            
        </div>
        <ul class="NavList">
            <li>
                <a href="Home.php">Home</a>
            </li>
            <li class="Dropdown">
                <a href="#">Products</a>
                <div class="DropdownContent">
                    <a href="#">Printers</a>
                    <a href="#">Consumables</a>
                    <a href="#">Office Supplies</a>
                    <a href="#">Accessories</a>
                </div>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>

    <div class="NavIcons">
        <div class="Search">
            <input type="text" placeholder="Search..">
            <a href="#">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <div class="Cart">
            <a href="EmptyCart.php">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>
        <?php
            

            if(isset($_SESSION['user_id'])){ 


                ?>
                <div class="Profile">
                <a href="Login.php"><i class="fa-regular fa-user"></i></a>
                </div>
                <?php
                
            }
          
            
            else{

                ?>       
                <div class="Login-Button">
                <a href="Login.php" id=Login>LOGIN</a>
                </div>
                <?php
            }

            ?>
        </div>
    </div>
    </header>