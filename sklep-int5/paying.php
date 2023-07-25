<?php
include_once 'session.php';
include_once 'connect.php';

if (isset($_POST['usunKoszyk'])) {
    // Usuń zawartość koszyka
    unset($_SESSION['koszyk']);
    echo '<script>alert("Zamówiono.");</script>';
}

if (isset($_GET['delete']) && isset($_SESSION['koszyk'])) {
    $id = $_GET['delete'];

    // Sprawdź, czy produkt o podanym ID istnieje w koszyku
    if (($key = array_search($id, $_SESSION['koszyk'])) !== false) {
        // Usuń produkt z koszyka
        unset($_SESSION['koszyk'][$key]);
        header('Location: paying.php');
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paying.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="header-name">
            <span id="media-color">media</span>
            <span id="tech">tech</span>
            <span id="media-triangle">&#x25BA;</span>
        </h1>
        <nav>
            <div>
                <a href="about-us.php">O nas </a>
            </div>
            <div>
                <a href="contact.php">Kontakt</a>
            </div>
            
        </nav>
        <div class="display-options">
            <button class="log-in-btn">Log in</button>
            <button class="register-btn">Register</button>
        </div>
        <div class="basket-bar">
        <?php 
            if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo'
                <div class="log">
                   <a href = "logout.php">Logout</a>
               </div>
               ';
            }
            else
            {
            echo'
            <div class="log">
                <button onclick="redirectToLogin()">Log in</button>
            </div>
            <div class="sign">
                <button onclick="redirectToRegister()">Sign up</button>
            </div>
            ';}
            ?>
            
            <div class="basket-img">
                <img src="images/shopping-cart.png" alt="basket">
            </div>
            <span>Cart</span>
        </div>
    </header>
    <section>
        <div class="container">
            <button class="back" onclick="redirectToIndex()">Back to store</button>
            <?php
            if (isset($_SESSION['koszyk']) && count($_SESSION['koszyk']) > 0) {
                foreach ($_SESSION['koszyk'] as $id) {
                    $sql = "SELECT * FROM device WHERE id = $id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        ?>

                        <div class="product">
                            <img src="<?php echo $row['img_path']; ?>" alt="">
                            <p class="product-name"><?php echo $row['name']; ?></p>
                            <div class="product-price">
                                <span class="price"><?php echo $row['price']; ?>€</span>
                            </div>
                            <button onclick="usunPozycje(<?php echo $id; ?>)" class="add-to-basket-btn">Delete from cart</button>

                        </div>

                    <?php
                    }
                }
            } else {
                echo '<h2 style="text-align:center; padding-top: 2em;">Your cart is empty!</h2>';
            }
?>
        <form method="post">
                <input type="submit" name="usunKoszyk" class="order" value="Order and pay">
        </form>
  
    </section>
    
    <script>
        function redirectToIndex() {
          window.location.href = 'index.php';
        }
        function order() {
            alert('The order has been placed');
            window.location.href = 'index.php';
        }
        function usunPozycje(rowerID) {
                    window.location.href = "paying.php?delete=" + rowerID;
                }

        </script>
        <footer>
        <div class="leftf">
        <h1>
            <span id="media-color">media</span>
            <span style="color:#ffffff" id="tech">tech</span>
            <span style="background-color:#ffffff; padding-left:5px;border-radius:10px" id="media-triangle">&#x25BA;</span>
        </h1>
        <p>Welcome to Mediatech, a dynamic company specializing in the sale of the latest technological solutions, with a particular focus on mobile phones.</p>
        </div>
        <div class="midf">
            <h2>Links</h2>
            <div>
                <a href="aboutus.php">About us</a>
                <a href="contact.php">Contact</a>
                <a href="index.php">Store</a>
                <a href="login.php">Log in</a>
                <a href="register.php">Sign up</a>
            </div>
        </div>
        <div class="rightf">
            <h2>Newsletter</h2>
            <div>
                <form action="">
                    <input type="text" placeholder="E-mail">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </footer>
    <script>
        function redirectToIndex() {
          window.location.href = 'index.php';
        }
        function redirectToLogin() {
          window.location.href = 'login.php';
        }
        function redirectToRegister() {
          window.location.href = 'register.php';
        }
        function redirectToIndex() {
          window.location.href = 'index.php';
        }
        </script>
</body>
</html>