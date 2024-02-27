<?php
session_start();
include('connect.php');
 if(isset($_POST['sendCodeForget']) or isset($_POST['sendCodeChange']) ){
    require "Mail/phpmailer/PHPMailerAutoload.php";
    
    $otp = rand(100000,999999);
    $_SESSION['otp'] = $otp;
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'inbillatrading2007@gmail.com';
    $mail->Password = 'unax nggw foya unev';

    $mail->setFrom('inbillatrading2007@gmail.com', 'OTP Verification');
    $mail->addAddress($_SESSION['email']);

    $mail->isHTML(true);
    $mail->Subject = "Verification Code";
    $mail->Body = "
    <p>Dear Customer, </p> <p> Enter this code to change your password. </p> <h3>Your verification OTP code is $otp <br></h3>
    <br><br>
    <p>Looking forward to serve you,</p>
    <b>Inbilla Trading</b>
    ";

    // Attempt to send the email
    if (!$mail->send()) {
    // Handle failure
    ?>
    <script> alert($mail->ErrorInfo); </script>
    <?php

    } else {
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validation</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="ChangePasswordAuth.css" />
</head>
<body>
   <?php
   include('Header.php')
   ?>

   <?php
      if(isset($_POST['forgetPassword']) or isset($_POST['sendCodeForget'])) {

        if(isset($_POST['forgetPassword'])) {
            $_SESSION['email'] = $_POST['email'];
        }

        $email = $_SESSION['email'];
        $query = "SELECT email_Add FROM Customers WHERE email_Add = '$email'";
        $result = sqlsrv_query($conn, $query);
        $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

        if($row){

            ?>
                <div class="Valid-Section">
                    <div class="Valid-Container">
                        <h2>Email Verification</h2>
                        <form action="ChangePassword.php" method="post">
                            <label for="code">Enter Verification Code</label>
                            <input type="text" id="inp-code" name="otp" placeholder="Code" required>
                            <button type="submit" name="forgetPasswordValidation" >Submit Code</button>
                        </form>
                        <form action="" method="post">
                            <button type="submit" name="sendCodeForget" >Send Code</button>
                        </form>
                        <p class="bottom-text"><a href="Login.php">Back to Login</a></p>
                    </div>
                </div>
            <?php
        }
        else {
                ?>
                    <script type="text/javascript">
                        alert("Invalid Email");
                        window.location.href = "ChangePassword.php";
                    </script>
                <?php
        }
   }

   else if(isset($_POST['change']) or isset($_POST['sendCodeChange']) ){

     ?>
    
                <div class="Valid-Section">
                    <div class="Valid-Container">
                        <h2>Change Password - Email Verification</h2>
                        <form action="backend/auth.php" method="post">
                            <label for="code">Enter Verification Code</label>
                            <input type="text" id="inp-code" name="otp" placeholder="Code" required>
                            <button type="submit" name="changePassword" >Submit Code</button>
                        </form>
                        <form action="" method="post">
                            <button type="submit" name="sendCodeChange" >Send Code</button>
                        </form>
                        <p class="bottom-text"><a href="Login.php">Back to Login</a></p>
                    </div>
                </div>
    <?php


   }

    ?>
    <?php
include('Footer.php');
?>


</body>

</html>