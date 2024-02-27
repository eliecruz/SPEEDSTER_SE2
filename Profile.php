<?php
    session_start();
    if(isset($_SESSION['user_id'])) {

?>


<?php
    include('connect.php');
    $customerID = $_SESSION['user_id'];
            


            if(isset($_POST['update'])){

                $fName = $_POST['first-Name'];
                $lName = $_POST['last-Name'];
                $email = $_POST['email'];
                $contactNum = $_POST['Mobile-Num'];
                $gender = $_POST['Gender'];

                $query = "UPDATE Customers SET
                            first_Name = '$fName',
                            last_Name = '$lName',
                            email_Add = '$email',
                            contact_Num = '$contactNum',
                            gender = '$gender' WHERE customer_ID = '$customerID'";
                $result = sqlsrv_query($conn, $query);

                $query = "SELECT * FROM Customers WHERE customer_ID = '$customerID'";
                $result = sqlsrv_query($conn, $query);
                $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
            }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta Name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="Profile.css" />
</head>
<body>
    <?php
    include('Header.php');
  
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
        <form action="backend/logout.php">
            <button class="Logout-Button" type="submit" value>Logout</button>
        </form>
        </div>
    </div>

    <div class="Main-Container">
        <h1>Account Information</h1>
        <hr>

        <?php

        $customer_ID = $_SESSION['user_id'];
        
        
        $query = "SELECT * FROM Customers WHERE customer_ID = '$customer_ID'";
        $result = sqlsrv_query($conn, $query);
        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);
        

        
        
        ?>


        <form class="User-Info" action="Profile.php" method='post'>

            <?php
            
                //$row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

            ?>

            <div class="Name-fields">
                <div class="Label-Input">
                    <label for="first-Name">First Name</label>
                    <input type="text" required name="first-Name"<?php if(isset($_POST['edit'])){ } else {?> disabled <?php }  ?>  value = "<?php echo $row['first_Name']; ?>" onchange="myFunction(this.value)" placeholder="First Name">
                </div>
                <div class="Label-Input">
                    <label for="last-Name">Last Name</label>
                    <input type="text" required name="last-Name" <?php if(isset($_POST['edit'])){ } else {?> disabled <?php } ?> value = "<?php echo $row['last_Name']?>" onchange="myFunction(this.value)" placeholder="Last Name">
                </div>
            </div>

                    <label for="email">Email Address</label>
                    <input type="text" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required name="email" <?php if(isset($_POST['edit'])){ } else {?> disabled <?php } ?> value = <?php echo $row['email_Add']?> placeholder="Email">

            <div class="Id-Field">
                <div class="Label-Input">
                    <Label for="Mobile-Num">Mobile Number</Label>
                    <input type="tel" pattern="[0]{1}[9]{1}[0-9]{9}" name="Mobile-Num" required placeholder="Mobile Number" <?php if(isset($_POST['edit'])){ } else {?> disabled <?php } ?> value=<?php if (isset($row['contact_Num'])) {
                                                                            echo $row['contact_Num'];
                                                                            }
                                                                            ?> >
                </div>
                <div class="Label-Input">
                    <Label for="Acc-ID">Account ID</Label>
                    <input type="text" id="Acc-ID" disabled value = <?php if (isset($row['customer_ID'])) {
                                                                            echo $row['customer_ID'];
                                                                            }
                                                                            else {
                                                                            ?> placeholder="Account ID"
                                                                            <?php
                                                                            }
                                                                            ?>  >
                </div>
            </div>

            <div class="BdayGender-Field">
                <div class="Label-Input">
                    <Label for="Birthday">Birthday</Label>
                    <input type="text" id="Birthday"placeholder="Birthday" disabled value=<?php if (isset($row['gender'])) {
                                                                            echo $row['gender'];
                                                                            }
                                                                            ?> >
                </div>
                <div class="Label-Input">
                    <Label for="Gender">Gender</Label>
                    <input type="text" name="Gender" required placeholder="Gender" <?php if(isset($_POST['edit'])){ } else {?> disabled <?php } ?> value=<?php if (isset($row['gender'])) {
                                                                            echo $row['gender'];
                                                                            }
                                                                            ?> >
                </div>
            </div>
            <div class="Buttons">
            
                                                                        
            <?php
                if(isset($_POST['edit'])){
                    ?>
                    <button class="Edit" type="submit" name="update" value="update">Update</button>
                    <?php
                }
                else if(isset($_POST['update'])) {
                    ?>
                    <button class="Edit" type="submit" name="edit" value="edit">Edit Profile</button>
                    <?php
                }
                else {
                    ?>
                    <button class="Edit" type="submit" name="edit" value="edit">Edit Profile</button>
                    <?php
                }
            ?>                                                                   
           
            </div>
        </form>

        <div class="Buttons">
            <form action="ChangePassword.php" method="post">
                <button class="ChangePass" name="change" >Change Password</button>
            </form>
        </div>

    </div>
</div>

    <?php
    include('Footer.php');
    ?>

</body>


</html>
<?php 
    }
    else {

      ?>
      <script type="text/javascript">
      window.location.href = 'Home.php';
      </script>

      <?php 

    }


?>
