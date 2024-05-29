<?php 
    include("header.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishloom saree</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="images/logo5.png" class="logo" alt=""></a>
        <h3 class="logo2">Krishloom Saree</h3>


        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="about.php">About</a></li>
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
    <section id="page-header" class="about-header">
        
    </section >
    
    <section id="about-head" class="section-p1">
        <img src="images/ban2.webp" alt="">
        <div>
            <h2>Weaving Tradition, Curating Style !</h2>
            <p>Krishloom Saree is more than just a saree store; we're your one-stop destination for celebrating the timeless beauty of the saree. We believe the saree is a powerful garment, steeped in heritage yet constantly evolving. Our passion lies in curating a collection that empowers you to embrace tradition in a way that reflects your unique style.</p>
            <p>At Krishloom Saree, we're dedicated to providing you with exceptional customer service. We believe in building trust and relationships with our customers. Whether you're a seasoned saree aficionado or a curious newcomer, we're here to guide you on your sartorial journey.</p>
            <p>Explore our exquisite collection and discover the saree that speaks to your unique sense of self. We invite you to weave tradition into your wardrobe and embrace the magic of the saree with Krishloom Saree.</p>
            <br><br>

            <marquee bgcolor="'#ccc" loop="-1" scrollamount="5" width="100%"> create stunning imageswith as much or as little control as you like thanks to a choice of Basic and Creative Modes </marquee>
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
