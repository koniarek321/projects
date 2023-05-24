<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Registration</title>
    <?php
        include 'connect.php';
    ?>
</head>
<body>
    <header>
        <h1 class="header-name">
            <span id="media-color">media</span>
            <span id="tech">tech</span>
            <span id="media-triangle">&#x25BA;</span>
        </h1>
        <button class="back-to-store">Back to store</button>
        </div>
        <div class="display-options">
            <button class="log-in-btn">Log in</button>
            <button class="register-btn">Register</button>
        </div>
        <div class="basket-bar">
            <div class="basket-img">
                <img src="images/shopping-cart.png" alt="basket">
            </div>
            <span>Cart</span>
        </div>
    </header>
    <div class="content">
        <div class="lower-container">
            <div class="set-up">
                <h2>Create new account</h2>
                <iframe style="display:none" name="frame"></iframe>
                <div class="registration-form">
                    <form class="form"  method="POST"   target="frame">
                    <input type="text" id="firstname" name="firstname" placeholder="First name*" required><br>
                    <input type="text" id="lastname" name="lastname" placeholder="Last name*" required><br>
                    <input type="email" id="email" name="email" placeholder="Email*" required><br>
                    <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone number*" required><br>
                    <input type="password" id="password" name="pswd"  placeholder="Password*" required><br>
                    <div class="terms">
                        <input type="checkbox" id="showpassword" name="check">
                        <label for="showpassword">Show password</label>
                        <br><br>
                        <input type="checkbox" id="check" name="check" required>
                        <label for="terms">  <b>I have read and agree with <a href="#" target="_blank">terms and conditions</a> on this webiste.</b></label><br> <br>
                    </div>
                        <input type="submit" id="submit" value="Create an account"><br>
                    </form>
                    </div>
            </div>
            <div class="benefits">
                <h2>Enjoy the following benefits:</h2>
                <div class="benefits-container">
                    <i class="fa-sharp fa-solid fa-check fa-2xl" style="color: #02d906;"></i>
                    <span>Fast ordering process</span><br>
                    <i class="fa-sharp fa-solid fa-check fa-2xl" style="color: #02d906;"></i>
                    <span>Full history   of all orders</span><br>
                    <i class="fa-sharp fa-solid fa-check fa-2xl" style="color: #02d906;"></i>
                    <span>Special discount codes</span><br>
                    <i class="fa-sharp fa-solid fa-check fa-2xl" style="color: #02d906;"></i>
                    <span>Access to unique promotions</span><br>
                </div>
            </div>
        </div>
    </div>
    <div class="created-account-info">
        <h4>Congratulations</h4>
        <span>Your account has been created successfully.</span>
        
        <button>OK</button>
    </div>
    <script src="register.js"></script>
</body>


<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $pswd = $_POST['pswd'];
        
        $sql1 = "CREATE TABLE IF NOT EXISTS users(
            ID int AUTO_INCREMENT,
            firstname varchar(255) NOT NULL,
            lastname varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            phonenumber varchar(255) NOT NULL,
            pswd varchar(255) NOT NULL,
            PRIMARY KEY  (ID)
            )";
         $result = mysqli_query($conn, $sql1);
         $sql2 = "INSERT INTO users (firstname, lastname, email, phonenumber, pswd) 
                    VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$pswd')";
        $result2 = mysqli_query($conn, $sql2);
        header("Location: login.php");
        exit();
    }
    mysqli_close($conn);
?>



</html>