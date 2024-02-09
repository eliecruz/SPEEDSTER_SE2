<!DOCTYPE html>
<html lang="en">

<head>
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
            <form>
                <label for="email">Email Address</label>
                <input type="text" id="email" placeholder="Email" required>
    
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" required>
                <span class="password-info">It must be a combination of minimum 8 letters, numbers, and symbols.</span>
    
                <div class="checkbox-forgot">
                    <input type="checkbox" id="remember-me" class="checkb">
                    <label for="remember-me">Remember me</label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit">Login</button>
                <button class="google-btn"><i class="fa-brands fa-google"></i> Login with Google</button>
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
