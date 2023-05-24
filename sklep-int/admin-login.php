<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Admin Login</title>
   
    <?php
        include_once 'session.php';
        include_once 'connect.php';
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
        
            <div class="logging">
                <h2>Log in</h2>
                <div class="login-form">
                    <form method="post" action="admin-login.php">
                        <input type="email" id="email" name="email" placeholder="Email*" required><br>
                        <input type="password" id="password" name="pswd"  placeholder="Password*" required><br>
                        <input type="checkbox" id="showpassword" name="check">
                        <label for="showpassword">Show password</label> <br> <br>
                        <input type="submit" name="loginbtn" id="submit" value="Log in"><br>
                    </form>
                </div>
            </div>
            <div class="new-client">
                <h2>For a new client</h2>
                <h3>Create an account in our store and gain access to:</h3>
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

    <?php
    
    if (isset($_POST['email'])) {

        $email = $_POST['email'];
        $pswd = $_POST['pswd'];

    $sql1 = "SELECT * FROM admins WHERE email = '$email' and pswd = '$pswd'";
    $result = mysqli_query($conn, $sql1);
    $rows = mysqli_fetch_array($result);
    echo $rows;
    if(is_array($rows)){
        $_SESSION["email"] = $rows['email'];
        $_SESSION["pswd"] = $rows['pswd'];
            // Przekieruj do glownej
            echo "dziala";
        $_SESSION['loggedIn'] = true;

        session_start();
        header("Location: admin-menu.php");
        exit();
    }
    else{
        echo "<div id='frg'>
    <h3>Hasło lub login niepoprawny.
    <br/><br/>kliknij tu aby przypomnieć hasło <a href='forgot.php'>Login</a></h3></div>";
        }
        if(isset($_SESSION["Username"])) {
            header("Location: admin-menu.php");
    }
    }


    // Zakończenie połączenia z bazą danych
    mysqli_close($conn);
?>


    <script src="admin-login.js"></script>

    
</body>
</html>