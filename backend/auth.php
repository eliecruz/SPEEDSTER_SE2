<?php
include('../connect.php');


if(isset($_POST['signup_form'])) {

    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        ?>
        <script type="text/javascript">
            alert("Invalid Email");
        </script>
    <?php

      }

    else {

        $query = "SELECT email_Add FROM Customers WHERE email_Add = '$email'";
        $result = sqlsrv_query($conn, $query);
        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

        if($row){
            ?>
            <script type="text/javascript">
                alert("You already have an account.");
            </script>
            <?php

        }



        else {
            session_start();
            $_SESSION['first_Name'] = $firstName;
            $_SESSION['last_Name'] = $lastName;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
                ?>
                    <script type="text/javascript">
                        window.location.href = '../Validation.php';
                    </script>

                <?php 

            /*$query = "INSERT INTO Customers(first_Name, last_Name, username, password, email_Add)
            VALUES ('$firstName' , '$lastName', '$email',  '$password', '$email' );";
            $result = sqlsrv_query($conn, $query);
            if($result){
                ?>
                <script type="text/javascript">
                alert("Sign up Successful\nPLEASE GO TO THE LOGIN PAGE");
                </script>
                <?php
        }   else {
            ?>
                <script type="text/javascript">
                alert("ERROR ENCOUNTERED \n CHECK YOUR CREDENTIALS");
                </script>
            <?php
        }
    */}
    }

        ?>
            <script type="text/javascript">
                window.location.href = '../Signup.php';
            </script>

        <?php 
}


else if (isset($_POST['login_form'])) {
   $userName = $_POST['email'];
   $password = $_POST['password'];


   $query = "SELECT customer_ID, password FROM Customers WHERE email_Add = '$userName'";
   $result = sqlsrv_query($conn, $query);
   $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);


    if($row) {


        if(password_verify($password, $row['password'])){

            session_start();
            $_SESSION['user_id'] = $row['customer_ID'];

            ?>
                <script type="text/javascript">
                    window.location.href = '../Home.php';
                </script>
        <?php 
        } 
        else{
            ?>
            <script type="text/javascript">
                alert("Wrong Password");
                window.location.href = '../Login.php';
            </script>
            <?php
            }
    }

    else {
        ?>
        <script type="text/javascript">
                alert("Account Does Not Exist");
                window.location.href = '../Login.php';
        </script>
            <?php
    }
      
}

else if(isset($_POST['validation'])){
    session_start();
    $otp = $_POST['otp'];
    $firstName = $_SESSION["first_Name"];
    $lastName = $_SESSION["last_Name"];
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

    if($_SESSION['otp'] == $otp){
        $query = "INSERT INTO Customers(first_Name, last_Name, username, password, email_Add)
            VALUES ('$firstName' , '$lastName', '$email',  '$password', '$email' );";
            $result = sqlsrv_query($conn, $query);
            if($result){
                session_unset();
                session_destroy();
                ?>
                <script type="text/javascript">
                alert("Sign up Successful\nPLEASE GO TO THE LOGIN PAGE");
                window.location.href = '../Signup.php';
                </script>
                <?php
        }   else {
            ?>
                <script type="text/javascript">
                alert("ERROR ENCOUNTERED \n CHECK YOUR CREDENTIALS");
                </script>
            <?php
        }
    }
    else {
        ?>
            <script type="text/javascript">
                    alert("The code is incorrect.");
                    window.location.replace('../Validation.php');
            </script>
        <?php
    }
}

else if(isset($_POST['forgetPassword'])){

    session_start();
    $email = $_SESSION['email'];

    $query = "SELECT * FROM Customers WHERE email_Add = '$email'";
    $result = sqlsrv_query($conn, $query);
    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

    if(password_verify($_POST["newPassword"], $row['password'])){
        $_SESSION['again'] = 1;
        ?>
            

            <script type="text/javascript">
                    alert("You cannot use your old password.");
                    window.location.replace('../ChangePassword.php');
            </script>

        <?php
    }
    else {
        $newPassword = password_hash($_POST["newPassword"],PASSWORD_DEFAULT);

        $query = "UPDATE Customers SET password = '$newPassword' WHERE email_Add = '$email'";
        $result = sqlsrv_query($conn, $query);
        

        if($result){

            session_unset();
            session_destroy();

            ?>

                <script type="text/javascript">
                        alert("Password has been changed");
                        window.location.replace('../Login.php');
                </script>

            <?php
        }
    }   

}


else if(isset($_POST['changePassword'])){
    session_start();
    $old = $_POST['old'];
    $new = $_POST['new'];
    $customer_ID = $_SESSION['user_id'];

    $query = "SELECT password FROM Customers WHERE customer_ID = '$customer_ID'";
    $result = sqlsrv_query($conn, $query);
    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

    if(password_verify($old, $row['password'])){

        $newPass = password_hash($new, PASSWORD_DEFAULT);
        $query = "UPDATE Customers SET password = '$newPass' WHERE customer_ID = '$customer_ID' ";
        $result = sqlsrv_query($conn, $query);

        if($result){
            ?>

                <script type="text/javascript">
                        alert("Password has been changed");
                        window.location.replace('../Profile.php');
                </script>

            <?php
        }
        else {
            ?>

                <script type="text/javascript">
                        alert("Error Occured");
                        window.location.replace('../Profile.php');
                </script>

            <?php
        }

    }

    else {
        ?>

            <script type="text/javascript">
                    alert("Password incorrect");
                    window.location.replace('../ChangePassword.php');
            </script>

        <?php
    }



}

?>

