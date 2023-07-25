<?php
include_once 'session.php';
include_once 'connect.php';

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];

    $deleteSql = "DELETE FROM device WHERE ID = $deleteId";
    mysqli_query($conn, $deleteSql);

    header("Location: admin-menu.php");
    exit();
}

$search = isset($_GET['search']) ? $_GET['search'] : '';
$condition = !empty($search) ? "WHERE name LIKE '%$search%' OR description LIKE '%$search%'" : "";
$sql = "SELECT * FROM device $condition";
$result = mysqli_query($conn, $sql);
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
        <button onclick="location.href='index.php'" class="back-to-store">Back to store</button>
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
            <button id="options-button" class="add-new-product" onclick="window.location.href = 'add.php';">Add new product</button>
            <h2>Search...</h2>

            <form method="GET" action="admin-menu.php">
                <input type="text" name="search" placeholder="Model">
                <button type="submit">Search</button>
            </form>
       

        <table style="width:100%">
            <tr>
                <td class="option-table">Name</td>
                <td class="option-table">Description</td>
                <td class="option-table">IMG</td>
                <td class="option-table">Price</td>
                <td class="option-table">Category</td>
                <td class="option-table">Delete</td>
                <td class="option-table">Edit</td>
            </tr>

            <?php
            if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $description = $row["description"];
                    $img_path = $row["img_path"];
                    $price = $row["price"];
                    $category = $row["category"];

                    echo '<tr>
                            <td>' . $name . ' </td>
                            <td class="one">' . $description . '</td>
                            <td class="im"><span>' . $img_path . '</span></td>
                            <td class="one">' . $price . '</td>
                            <td>' . $category . '</td>
                            <td class="one"><a href="?delete_id=' . $id . '">Delete</a></td>
                            <td><a href="edit.php?id=' . $id . '&name=' . urlencode($name) . '&description=' . urlencode($description). '&img_path=' . urlencode($img_path) . '&price=' . urlencode($price) . '&category=' . urlencode($category) .'">Edit</a></td>
                          </tr>';
                }
            } else {
                echo '<tr><td colspan="7">No data found.</td></tr>';
            }
        }
            ?>
        
        </table>
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
        </script>
    <script src="admin-menu.js"></script>
</body>
</html>
