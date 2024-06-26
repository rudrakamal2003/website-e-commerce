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
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
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

    <section id="page-header" class="contact-headar">

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-map"></i>
                    <p>type address</p>
                </li>
                <li>
                    <i class="fa-regular fa-envelope"></i>
                    <p>type mail id</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>type phone no.</p>
                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>type timing</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.3794523833058!2d88.49324737408199!3d23.22927510858526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8dd746ad2c235%3A0x72dbefc1a75b388e!2sPhulia%20Station%20Rd%2C%20Nadia%2C%20Chatkatala%2C%20Phulia%2C%20West%20Bengal%20741402!5e0!3m2!1sen!2sin!4v1713545017690!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <br>
            <input type="text" placeholder="E-mail">
            <br>
            <input type="text" placeholder="Subject">
            <br>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <br>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="images/people" alt="">
                <p><span> Name</span>Director <br> phone: +91 1234567890 <br>Email: contact@example.com</p>
            </div>
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