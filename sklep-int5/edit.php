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
        <button class="back-to-store">Back to store</button>
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
    <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $name= $_GET['name'];
    $description = $_GET['description'];
    $img_path = $_GET['img_path'];
    $price = $_GET['price'];
    $category = $_GET['category'];
    


 


?>

<?php

echo '<form method="post" action="edit.php">';
echo '<input type="hidden" name="id" value="' . $id . '">';
echo '<input type="text" name="name" value="' . $name . '" placeholder="name" required>';
echo '<input type="text" name="description" value="' . $description . '" placeholder="description" required>';
echo '<input type="text" name="img_path" value="' . $img_path . '" placeholder="img_path" required>';
echo '<input type="text" name="price" value="' . $price . '" placeholder="price" required>';
echo '<input type="text" name="category" value="' . $category . '" placeholder="category" required>';

echo '<button type="submit" name="submit">Update</button>';
echo '</form>';

    
} else {
    echo "Invalid ID.";
}
?>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $img_path = $_POST["img_path"];
    $price = $_POST["price"];
    $category = $_POST["category"];

    $sql = "UPDATE device SET name = '$name', description = '$description', img_path = '$img_path', price = '$price', category = '$category' WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: admin-menu.php");
        exit();
    } else {
        echo "Error updating 'device' table: " . mysqli_error($conn);
    }
}
?>


    </div>
        </div>
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
