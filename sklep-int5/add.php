<?php
include_once 'session.php';
include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="header-name">
            <span id="media-color">media</span>
            <span id="tech">tech</span>
            <span id="media-triangle">&#x25BA;</span>
        </h1>
        <button onclick="redirectToIndex()" class="back-to-store"  >Back to store</button>
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
    <div class="content">
        <div class="available-activities">
           
            <div class="add-new-product-form">
                <h3 id="h3-title">Add product to the database</h3>
                <form action="" method="POST">
                  
                    <input type="text" id="add-form" name="name" placeholder="Product name*" required><br>
                    <input type="text" id="add-form" name="description" placeholder="Product description*" required><br>
                    <input type="text" id="add-form" name="img_path" placeholder="Image path*" required><br>
                  
                    <input type="number" id="add-form" name="price" placeholder="Price*" required><br>
                    <input type="text" id="add-form" name="category" placeholder="Category" required><br>
                    <input type="submit" id="add-product-submit" value="Add product to database" name="add"><br>
                </form>
                
            </div>
          
        </div>
    </div>
    <?php
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === true){
    if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $img_path = $_POST['img_path'];
    $price = $_POST['price'];
    $category = $_POST['category'];
   
    $sql = "INSERT INTO device (name, description, img_path, price, category) 
                      VALUES ('$name', '$description', '$img_path', '$price', '$category')";
    mysqli_query($conn, $sql);
    

    exit();
    }
}


?>


    <script src="admin-menu.js"></script>

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