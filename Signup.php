<?php
session_start();
if(isset($_SESSION['user_id'])){
    ?>
      <script type="text/javascript">
      window.location.href = 'Home.php';
      </script>

      <?php 
}
else {

    session_unset();
    session_destroy();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="Signup.css" />
</head>
<body> 
    <?php
    include('header.php');
    ?>
    
    <div class="Signup-Section">
        <div class="Signup-Container">
            <h2>Sign Up</h2>
            <form action ="backend/auth.php" method = "POST">

                <div class="name-fields">
                    <div>
                        <label for="first-name">First Name</label>
                        <input type="text" name="first-name" placeholder="First Name" required>
                    </div>
                    <div>
                        <label for="last-name">Last Name</label>
                        <input type="text" name="last-name" placeholder="Last Name" required>
                    </div>
                </div>
            
                <label for="email">Email Address</label>
                <input type="text" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" name="email" placeholder="Email" required>
            
                <label for="password">Password</label>
                <input type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="password" placeholder="Password" required>
                <span class="password-info">It must be a combination of minimum 8 letters(uppercase and lowercase), numbers, and symbols.</span>
            
                <button type="submit" name = "signup_form" ><i class="fa-solid fa-plus"></i>Create Account</button>
                <button class="google-btn"><i class="fa-brands fa-google"></i> Sign up with Google</button>
                
            </form>
            <hr class="Custom-line">
            <p><a href="Login.php">Already have an account?</a></p>
        </div>
    </div>
    


    <?php
include('Footer.php');
?>


</body>

</html>
<?php 
    }
   ?>

