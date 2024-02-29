<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="Contact.css">
    <link rel="stylesheet" type="text/css" href="Header&Footer.css">
    <title>Contact Us</title>
</head>
<body>
    <?php
    include("Header.php");
    ?>

    <div class="Breadcrumb-Nav">
            <ol>
                <li><a href="Home.php">Home</a></li>
                <li>Shopping Cart</li>
            </ol>
        </div>

    <div class="main-container">
        <div class="contact-container">
            <h1>Contact Us</h1>

            <div class="contact-contents" id="contact-contents">
                <div class="gmail-container" id="gmail-container">
                    <img src="Images/mail.svg" alt="">
                    <p>tradinginbilla@gmail.com</p>
                </div>
                <div class="telephone-container" id="telephone-container">
                    <img src="Images/telephone.svg" alt="">
                    <p>(02) 8732 3445</p>
                </div>
                <div class="location-container" id="location-container">
                    <img src="Images/location.svg" alt="">
                    <p>1453J Fajardo St, Sampaloc Manila, Philippines</p>
                </div>
            </div>
        </div>

        <div class="form-container">
            <h1>Give us a Feedback</h1>

            <div class="feedback-form">
                <form action="">
                    <div class="feedback-details">
                        <div class="details-row">
                            <div class="input-box">
                                <label for="first-name">First Name</label>
                                <input type="text" id="first-name" placeholder="First Name" required>
                            </div>
                            <div class="input-box">
                                <label for="">Last Name</label>
                                <input type="text" id="last-name" placeholder="Last Name" required>
                            </div>
                        </div>
                       
                        <div class="input-box">
                            <label for="email-input">Email Address</label>
                            <input type="text" id="email-input" placeholder="Email Address" required>
                        </div>

                        <div class="details-row">
                            <div class="input-box">
                                <label for="tag">Tag</label>
                                <select id="tag">
                                    <option value="option-1">Tag 1</option>
                                    <option value="option-2">Tag 2</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <label for="subject">Subject</label>
                                <select id="subject">
                                    <option value="option-1">Subject 1</option>
                                    <option value="option-2">Subject 2</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="input-box">
                            <label for="">Leave your feedback below</label>
                            <textarea type="text" placeholder="Feedback" required></textarea>
                        </div>
                    </div>

                    <button type="submit">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>



    <?php
    include("Footer.php");
    ?>    
</body>
</html>