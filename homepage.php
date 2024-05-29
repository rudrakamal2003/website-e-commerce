<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>

<body>
    <section id="header">
        <a href="#"><img src="images/logo5.png" class="logo" alt=""></a>
        <h3 class="logo2">Krishloom Saree</h3>

        <div>
            <ul id="navbar">
                <li><a class="active" href="homepage.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><img src="images/cart1.png" class="cart" alt=""></i></a></li>
                <button id="loginBtn">
                    <li class="icon"><i class="fa-regular fa-user"></i></li>
                </button>
            </ul>
        </div>

        <div id="loginPopup" class="popup">
            <span class="close" onclick="closePopup()">&times;</span>
            <button id="signInBtn" onclick="signIn()">Logout</button>
        </div>

    </section>

    <section id="hero">
        <div class="shopnow">
            <button id="shopnow"><a href="shop.php" class="shop">Shop Now</a></button>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/freeshipping2.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/onlineorder2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/savemoney2.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/promotion2.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/happysale2.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/support2.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="images/s1.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Tant Women's Pure Cotton exclusive Tant Saree In pista Green with orange zari border without
                        blouse piece.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;1452</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s2.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Tant cotton silk handloom cotton saree pushpomaa with bblouse piece(grey/red)</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;1575</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s3.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Pine green with magenta pallu silk cotton saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;1156</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s4.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Women self design multi colour saree with blouse piece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;1500</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s5.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Bengal's Pride Premium Hand Woven Jangla Jaal Work Cotton Dhakai Jamdani Saree in Light
                        Turquoise Green and Multicolored Thread Work </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;3100</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s6.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>'Mandakini' Old Rose Pink Pure Cotton Jamdani Real Zari Banarasi Handloom Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;5000</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s7.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Pure Green And White Cotton Jamdani Sarees With Blouse Piece</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;16999</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s8.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>White Handwoven Dongria Khadi Cotton Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;2799</h4>
                </div>
                <a href="shop.php"><img src="images/cart.png" class="cart1"></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>30% off</span> - all the Products</h2>
        <button id="viewMoreBtn" class="normal"><a href="shop.html" class="viewMore">Explore More</a></button>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
    </section>



    <script>
        function openPopup() {
            document.getElementById('loginPopup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('loginPopup').style.display = 'none';
        }

        function signIn() {
            alert('Sign In button clicked!');
            // You can add sign-in functionality here
        }

        function signUp() {
            alert('Sign Up button clicked!');
            // You can add sign-up functionality here
        }

        document.getElementById('loginBtn').addEventListener('click', openPopup);

        function signIn() {
            // Assuming 'signin.html' is the URL of the sign-in page
            window.location.href = 'logout.php';
        }

        // function signUp() {
        //     // Assuming 'signup.html' is the URL of the sign-up page
        //     window.location.href = 'login/index.php';
        // }
    </script>
</body>

</html>

<?php
include("footer.php");
?>