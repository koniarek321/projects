<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    
    <title>Document</title>
    
    <?php 
        include 'session.php';
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
        <nav>
        <div>
            <a href="crypto.php">Check crypto </a>
        </div>
        <div>
            <a href="aboutUs.php">About us </a>
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
                <button>Log in</button>
            </div>
            <div class="sign">
                <button>Sign up</button>
            </div>
            ';}
            ?>
            <div class="basket-img">
                <img src="images/shopping-cart.png" alt="basket">
            </div>
            <span>Cart</span>
        </div>
    </header>
    <div class="container">
        <div class="outer-category-container">
            <div class="category-title">
                <h2>Categories</h2>
            </div>
            <div class="inner-category-container">
                <form method="post" action="index.php">
                    <button name="all">All</button>
                    <button name="Huawei">Huawei</button>
                    <button name="Samsung">Samsung</button>
                    <button name="Iphone">Iphone</button>
                    <button name="Redmi">Redmi</button>
                </form>
            </div>
        </div>
        <div class="products">
        <?php

        //-------------------------------------
        

    
        //-------------------------------------

if (isset($_POST['all'])) { // Sprawdzenie, czy przycisk został kliknięty
    // Twój kod SQL
    $sql = "SELECT id, name, description, img_path, price FROM device";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $img_path = $row["img_path"];
            $price = $row["price"];
            $price_sale = round($price * 1.23, 2);

            echo '<div class="product-item on-sale" id="'.$id.'">
                <img src="'.$img_path.'" alt="">
                <p class="product-name">'.$name.'</p>
                <p class="product-description">'.$description.'</p>
                <div class="product-price">
                    <span class="price">'.$price_sale.'€</span>
                    <span class="price-sale">'.$price.'€</span>
                </div>
            </div>';
        }
    } else {
        echo "No data found.";
    }

    mysqli_close($conn);
}
else if (isset($_POST['Huawei'])) { // Sprawdzenie, czy przycisk został kliknięty
    // Twój kod SQL
    $sql = "SELECT id, name, description, img_path, price FROM device WHERE category='Huawei'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $img_path = $row["img_path"];
            $price = $row["price"];
            $price_sale = round($price * 1.23, 2);

            echo '<div class="product-item on-sale" id="'.$id.'">
                <img src="'.$img_path.'" alt="">
                <p class="product-name">'.$name.'</p>
                <p class="product-description">'.$description.'</p>
                <div class="product-price">
                    <span class="price">'.$price_sale.'€</span>
                    <span class="price-sale">'.$price.'€</span>
                </div>
            </div>';
        }
    } else {
        echo "No data found.";
    }

    mysqli_close($conn);
}
else if (isset($_POST['Samsung'])) { // Sprawdzenie, czy przycisk został kliknięty
    // Twój kod SQL
    $sql = "SELECT id, name, description, img_path, price FROM device WHERE category='Samsung'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $img_path = $row["img_path"];
            $price = $row["price"];
            $price_sale = round($price * 1.23, 2);

            echo '<div class="product-item on-sale" id="'.$id.'">
                <img src="'.$img_path.'" alt="">
                <p class="product-name">'.$name.'</p>
                <p class="product-description">'.$description.'</p>
                <div class="product-price">
                    <span class="price">'.$price_sale.'€</span>
                    <span class="price-sale">'.$price.'€</span>
                </div>
            </div>';
        }
    } else {
        echo "No data found.";
    }

    mysqli_close($conn);
}
else if (isset($_POST['Iphone'])) { // Sprawdzenie, czy przycisk został kliknięty
    // Twój kod SQL
    $sql = "SELECT id, name, description, img_path, price FROM device WHERE category='Iphone'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $img_path = $row["img_path"];
            $price = $row["price"];
            $price_sale = round($price * 1.23, 2);

            echo '<div class="product-item on-sale" id="'.$id.'">
                <img src="'.$img_path.'" alt="">
                <p class="product-name">'.$name.'</p>
                <p class="product-description">'.$description.'</p>
                <div class="product-price">
                    <span class="price">'.$price_sale.'€</span>
                    <span class="price-sale">'.$price.'€</span>
                </div>
            </div>';
        }
    } else {
        echo "No data found.";
    }

    mysqli_close($conn);
}
else if (isset($_POST['Redmi'])) { // Sprawdzenie, czy przycisk został kliknięty
    // Twój kod SQL
    $sql = "SELECT id, name, description, img_path, price FROM device WHERE category='Redmi'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $img_path = $row["img_path"];
            $price = $row["price"];
            $price_sale = round($price * 1.23, 2);

            echo '<div class="product-item on-sale" id="'.$id.'">
                <img src="'.$img_path.'" alt="">
                <p class="product-name">'.$name.'</p>
                <p class="product-description">'.$description.'</p>
                <div class="product-price">
                    <span class="price">'.$price_sale.'€</span>
                    <span class="price-sale">'.$price.'€</span>
                </div>
            </div>';
        }
    } else {
        echo "No data found.";
    }

    mysqli_close($conn);
}
else {
    $sql = "SELECT id, name, description, img_path, price FROM device";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $img_path = $row["img_path"];
            $price = $row["price"];
            $price_sale = round($price * 1.23, 2);

            echo '<div class="product-item on-sale" id="'.$id.'">
                <img src="'.$img_path.'" alt="">
                <p class="product-name">'.$name.'</p>
                <p class="product-description">'.$description.'</p>
                <div class="product-price">
                    <span class="price">'.$price_sale.'€</span>
                    <span class="price-sale">'.$price.'€</span>
                </div>
            </div>';
        }
    } else {
        echo "No data found.";
    }
}
 
        ?>
        </div>
    </div>
    
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

        window.onscroll = function() {
      const header = document.querySelector('header');
      if (window.pageYOffset > 200) {
        header.classList.add('sticky');
      } else {
        header.classList.remove('sticky');
      }
    };

        </script>
<script src="main.js"></script>

<script src = "product.js"></script>
</body>
</html>