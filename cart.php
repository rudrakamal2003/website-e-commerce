<?php
include("header.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishloom saree</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="cart.php"><img src="images/cart1.png" class="cart" alt=""></i></a></li>
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

    <section id="page-header" class="blog-header">
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
            window.location.href = 'login/signin.php';
        }

        function signUp() {
            // Assuming 'signup.html' is the URL of the sign-up page
            window.location.href = 'login/signup.php';
        }
    </script>
</body>

</html>

<?php
include("footer.php");
?>