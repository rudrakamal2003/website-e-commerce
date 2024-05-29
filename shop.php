<?php
include("header.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishloom saree</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="images/logo5.png" class="logo" alt=""></a>
        <h3 class="logo2">Krishloom Saree</h3>

        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
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

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="images/s1.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Tant Women's Pure Cotton exclusive Tant Saree In pista Green with orange zari border without blouse piece.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;1452</h4>
                </div>
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s5.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Bengal's Pride Premium Hand Woven Jangla Jaal Work Cotton Dhakai Jamdani Saree in Light Turquoise Green and Multicolored Thread Work </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;3100</h4>
                </div>
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s9.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Light Pink Khadi Cotton Saree With Bright Woven Floral Design Border</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;4349</h4>
                </div>
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s1.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Tant Women's Pure Cotton exclusive Tant Saree In pista Green with orange zari border without blouse piece.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;1452</h4>
                </div>
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s5.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Bengal's Pride Premium Hand Woven Jangla Jaal Work Cotton Dhakai Jamdani Saree in Light Turquoise Green and Multicolored Thread Work </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;3100</h4>
                </div>
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
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
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
            </div>
            <div class="pro">
                <img src="images/s9.jpg" alt="">
                <div class="des">
                    <span>Krishloom</span>
                    <h5>Light Pink Khadi Cotton Saree With Bright Woven Floral Design Border</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>&#x20B9;4349</h4>
                </div>
                <a href="#"><img src="images/cart.png" class="cart1"></i></a>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">Next</a>
    </section>



    <script src="script.js"></script>

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