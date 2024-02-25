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
            <form>
                <label for="code">Enter Verification Code</label>
                <input type="text" id="inp-code" placeholder="Code" required>
     
                <button type="submit">Submit Code</button>
            </form>
            <p class="bottom-text"><a href="">Resend Code</a></p>
        </div>
    </div>

    <?php
include('Footer.php');
?>


</body>

</html>
