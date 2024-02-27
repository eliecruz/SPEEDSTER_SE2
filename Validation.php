<?php

session_start();
if(isset($_SESSION['email'])) {
    if(isset($_POST['sendCode'])){
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
        <p>Dear Customer, </p> <p> Thank you for registering. </p> <h3>Your verification OTP code is $otp <br></h3>
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
    <link rel="stylesheet" href="Validation.css" />
</head>
<body>
   <?php
   include('Header.php')
   ?>
    
    <div class="Valid-Section">
        <div class="Valid-Container">
            <h2>Email Verification</h2>
            <form action="backend/auth.php" method="post">
                <label for="code">Enter Verification Code</label>
                <input type="text" id="inp-code" name="otp" placeholder="Code" required>
                <button type="submit" name="validation" >Submit Code</button>
            </form>
            <form action="" method="post">
                <button type="submit" name="sendCode" >Send Code</button>
            </form>
            <p class="bottom-text"><a href="Signup.php">Back to Signup</a></p>
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
