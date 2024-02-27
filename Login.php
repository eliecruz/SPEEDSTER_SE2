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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="Login.css" />




</head>
<body>
   <?php
   include('Header.php')
   ?>
    
    <div class="Login-Section">
        <div class="Login-Container">
            <h2>Log In</h2>
            <form action ="backend/auth.php" method = "POST">
                <label for="email">Email Address</label>
                <input type="text" name="email" placeholder="Email" required>
    
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <span class="password-info">It must be a combination of minimum 8 letters(uppercase and lowercase), numbers, and symbols.</span>
                

                <button type="submit" name = "login_form">Login</button>
            </form>

                <form action="ChangePassword.php" method="post">
                <button class="google-btn" name="forget" >Forget Password?</button>
                </form>

            <hr class="Custom-line">
            <p class="bottom-text"><a href="Signup.php">No account yet? Sign Up</a></p>
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
    <script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>
