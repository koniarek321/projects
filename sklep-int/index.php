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
    ?>
</head>
<body>
    <header>
        <h1 class="header-name">
            <span id="media-color">media</span>
            <span id="tech">tech</span>
            <span id="media-triangle">&#x25BA;</span>
        </h1>
        <div class="search-bar">
            <input type="text" class="search-bar-input" placeholder="Wyszukaj w sklepie">
            <button class="search-btn">
                <img src="images/search.png" alt="loupe">
            </button>
        </div>
        <div class="display-options">
            <button class="log-in-btn">Log in</button>
            <button class="register-btn">Register</button>
        </div>
        <div class="basket-bar">
            
            <button class="menu-list">
                <i class="fa-solid fa-bars fa-2xl" style="color: #ffff00;"></i>
            </button>
            
            <div class="logout">
                <form method="post" action="index.php">
                    <input name="logout-btn" type="submit" value="Log out" class="logout-btn"></input>
                </form>
                <button  class="user-btn">
                    <i class="fa-solid fa-user fa-2xl" style="color: #ffff00;"></i>
                </button>
                
            </div>
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
                <button>Category</button>
                <button>Category</button>
                <button>Category</button>
                <button>Category</button>
                <button>Category</button>
                
            </div>
        </div>
    
        <div class="products">
            <div class="product-item on-sale">
                <img src="images/huawei-1.jpg" alt="">
            <p class="product-name">Huawei p20</p>
            <p class="product-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                dolores eaque. Eligendi ab officia minus.
            </p>
            <div class="product-price">
                <span class="price">643.59 €</span>
                <span class="price-sale">512.60 €</span>
            </div>
            <button class="add-to-basket-btn">Add product to cart</button>
            <p class="product-item-sale-info">Promocja</p>
            </div>
            <div class="product-item">
                <img src="images/huawei-1.jpg" alt="">
            <p class="product-name">Huawei p20</p>
            <p class="product-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                dolores eaque. Eligendi ab officia minus.
            </p>
            <div class="product-price">
                <span class="price">643.59 €</span>
                <span class="price-sale">512.60 €</span>
            </div>
            <button class="add-to-basket-btn">Add product to cart</button>
            
            </div>
            <div class="product-item">
                <img src="images/huawei-1.jpg" alt="">
            <p class="product-name">Huawei p20</p>
            <p class="product-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                dolores eaque. Eligendi ab officia minus.
            </p>
            <div class="product-price">
                <span class="price">643.59 €</span>
                <span class="price-sale">512.60 €</span>
            </div>
            <button class="add-to-basket-btn">Add product to cart</button>
            
            </div>
        </div>
    </div>
    <div class="cookie-info">
        <h6>This website uses cookies</h6>
        <p>We use information saved using cookies to ensure maximum convenience in using our website. They can also be used by research and advertising companies cooperating with us. If you agree to save information contained in cookies, click on 'Accept' button below.
            If you do not agree, you can change the cookie settings in your browser.
        </p>
        <div class="cookie-buttons">
            <button class="accept-cookie">Accept</button>
            <button class="decline-cookie">Decline</button>
        </div>
    </div>
<script src="main.js"></script>

    <?php 
        if(isset($_POST['logout-btn']))
        { 
            session_destroy();
            $filename = "main.js";
            $content=file_get_contents($filename);
            $content_chunks=explode("isLogged()", $content);
            $content=implode("//isLogged()", $content_chunks);
            file_put_contents($filename, $content);

            
            echo "<script>window.location.href='index.php'</script>";
            exit();
        }
    ?>


</body>
</html>