<?php
include_once 'session.php';
include_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="product.css">

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
                <a href="aboutus.php">About us </a>
            </div>
            <div>
                <a href="contact.php">Contact</a>
            </div>
            
        </nav>
        
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
            <div class="left-cont">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM device WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $description = $row["description"];
                    $img_path = $row["img_path"];
                    $price = $row["price"];
                ?>
                
                <p class="product-name"><?php echo $name; ?></p>
                <p class="product-description"><?php echo $description; ?></p>
                <div class="product-price">
                    <span class="price"><?php echo $price; ?>€</span>
                </div>
                <?php
                if(isset($_SESSION['loggedIn']))
                {
                echo '<button onclick="dodajDoKoszyka('.$id.')" class="add-to-basket-btn">Add product to cart</button>'; 
                }
                else
                {
                    echo '<button class="add-to-basket-btn" onclick="window.location.href = \'login.php\';">First Log in</button>';

                }
                }
                
            }
             ?>
            </div>
            <div class="right-cont">
                <img src="<?php echo $img_path; mysqli_close($conn); ?>" alt="">
            </div>
        </div>
    </section>
    <script>
        function redirectToIndex() {
          window.location.href = 'index.php';
        }
        
        </script>
        <script>
        function dodajDoKoszyka(id) {
                    window.location.href = 'dodaj_do_koszyka.php?id=' + id;
                    
              
           
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