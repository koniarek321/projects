<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about-us.css">
    <title>O nas</title>
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
                <a href="contact.php">Contact </a>
            </div>
            <div>
                <a href="index.php" onclick="redirectToIndex()">Back to store</a>
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
    <main>
        <div class="title">
            <h2>About our company</h2>
        </div>
        <section>
            <div class="left">
                <div class="left-cont">
                    <h2>About us</h2>
                    <h3>Mediatech Company - Your Trusted Technology Center</h3>
                    <p>Welcome to Mediatech, a dynamic company specializing in the sale of the latest technological solutions, with a particular focus on mobile phones. Our mission is to provide customers with not only the highest quality devices, but also comprehensive service that will make shopping in our center an unforgettable experience.<br><br>
                    We perfectly understand that in today's world, mobile phones are a key tool for communication, entertainment and work. That is why we focus on offering the latest models from reputable manufacturers that will meet the requirements of each customer. Whether you're looking for a smart smartphone, a professional camera or a powerful gaming device, Mediatech has what you need.<br><br>
                    Our team consists of enthusiasts of new technologies who follow the latest trends on the market with great commitment. Thanks to this, we can provide our customers not only with the most modern devices, but also with professional assistance in choosing the right model tailored to their individual needs. Our staff is always ready to answer any question and provide support at every stage of the purchase.<br><br>
                    At Mediatech, we care not only about the quality of our products, but also about the comfort of our customers. Our technology center is designed in a way that allows you to move around the store comfortably, and also allows you to familiarize yourself with the devices before making the final choice. In addition, we offer convenient payment options and the lowest price guarantee to ensure maximum shopping satisfaction for our customers.<br><br>
                    As a company committed to the community, we also engage in various charitable activities and promote the responsible use of technology. We strive to make technology available to everyone, and our activities contribute to the development of a digital society.
                </p>
                </div>

            </div>
            <div class="right">
                <div class="right-cont">
                    <h2>What we offer</h2>
                    <h3>We offer the latest technology</h3>
                    <ul>
                        <li>The latest models of smartphones from renowned manufacturers</li>
                        <li>Professional cameras in phones</li>
                        <li>Powerful mobile gaming devices</li>
                        <li>Advice on choosing the right phone model</li>
                        <li>Professional help and support at every stage of shopping</li>
                        <li>Technology center with a convenient layout to familiarize yourself with devices</li>
                        <li>Convenient payment options</li>
                        <li>Best Price Guarantee</li>
                        <li>Involvement in charitable activities</li>
                        <li>Promote responsible use of technology</li>
                    </ul>
                
                </div>
            </div>
        </section>
    </main>
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