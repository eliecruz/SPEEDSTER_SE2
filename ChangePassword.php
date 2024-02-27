<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validation</title>
    <link rel="stylesheet" href="Header&Footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="ChangePassword.css" />
</head>
<body>

   <?php
   include('Header.php');

   if(isset($_POST['forgetPasswordValidation']) or isset($_SESSION['again']) ) {

        if(isset($_POST['forgetPasswordValidation'])) {
            $_SESSION['otp_input'] = $_POST['otp'];
        }


        if($_SESSION['otp'] == $_SESSION['otp_input']){
    ?>
            <div class="Valid-Section">
                <div class="Valid-Container">
                    <h2>New Password</h2>
                    <form action="backend/auth.php" method="post">
                        <label for="code">Enter New Password</label>
                        <input type="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="newPassword" placeholder="New Password" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                        <button type="submit" name="forgetPassword" >Submit</button>
                    </form>
                    <p class="bottom-text"><a href="Login.php">Back to Login</a></p>
                </div>
            </div>
         <?php
        }
        else {
            ?>
            <script type="text/javascript">
                alert("The code is incorrect.");
                window.location.replace('ChangePassword.php');
            </script>
            <?php
        }
   }

   else if(isset($_SESSION['user_id'])){

    ?>
    
    <div class="Valid-Section">
        <div class="Valid-Container">
            <h2>Email Verification</h2>
            <form method="post" action="backend/auth.php"  onsubmit="return check()" >

                <label for="code">Enter Old Password</label>
                <input type="password" id="password1" name="old" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Old Password" required  >
                <i class="bi bi-eye-slash" id="togglePassword1"></i>
                <label for="code">Enter New Password</label>
                <input type="password" id="password2" name="new" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="New Password" required>
                <i class="bi bi-eye-slash" id="togglePassword2"></i>
                <button type="submit" name="changePassword">Submit</button>
                
                <span id="passwordMatchError" style="color: red; display: none;">New password should not match old password.</span>

            </form>

            <p class="bottom-text"><a href="Profile.php">Back to Profile</a></p>
        </div>
    </div>

    <?php


   }
      else {

        if(isset($_SESSION['user_id'])){
            ?>
                <script type="text/javascript">
                    window.location.replace('Home.php');
                </script>
            <?php
        }
   ?>
    
    <div class="Valid-Section">
        <div class="Valid-Container">
            <h2>Forget Password Email Verification</h2>
            <form action="ChangePasswordAuth.php" method="post">
                <label for="code">Enter Email</label>
                <input type="text" id="inp-code" name="email" placeholder="Email" required>
                <button type="submit" name="forgetPassword" >Submit</button>
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
<script>
    function check() {
        var oldPassword = document.getElementById("password1").value;
        var newPassword = document.getElementById("password2").value;

        if (oldPassword === newPassword) {
            document.getElementById("passwordMatchError").style.display = "block";
            return false;
        } else {
            return true;
        }
    }

    function togglePasswordVisibility(toggle, password) {
        toggle.addEventListener('click', function() {
            if (password.type === "password") {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
            this.classList.toggle('bi-eye');
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        togglePasswordVisibility(toggle, password);

        const toggle1 = document.getElementById('togglePassword1');
        const password1 = document.getElementById('password1');
        togglePasswordVisibility(toggle1, password1);

        const toggle2 = document.getElementById('togglePassword2');
        const password2 = document.getElementById('password2');
        togglePasswordVisibility(toggle2, password2);
    });
</script>