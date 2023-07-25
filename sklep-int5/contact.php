<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
    </style>
    <link rel="stylesheet" href="contact.css">
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
                <a href="aboutUs.php">About us </a>
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
    <section>
            <div class="container">
                <div class="contactInfo"> 
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="images2/location.png" ></span>
                                <span>Lipińskiego 50, 38-551 Rzeszów<br>
                                    Rzeszów, Poland<br>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <span><img src="images2/mail.png"></span>
                               
                                <span><a href = "mailto: JanKowalski@gmail.com">JanKowalski@gmail.com</a></span>
                            </li>
                            <li>
                                <span><img src="images2/call.png"></span>
                                <span>123 456 789</span>
                            </li>

                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/"><img src="images2/1.png"></a></li>
                        <li><a href="https://www.instagram.com/"><img src="images2/3.png"></a></li>
                        <li><a href="https://twitter.com/"><img src="images2/2.png"></a></li>
                        <li><a href="https://www.linkedin.com/"><img src="images2/5.png"></a></li>
                        
                    </ul>
                </div>
                <form action="#">
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
                </form>
                    
                    
             
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