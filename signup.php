<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Firstname = $_POST['fname']
        $Lastname = $_POST['lname']
        $Gmail = $_POST['email']
        $Password = $_POST['pass']

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {

            $query = "insert into form (fname, lname, email, pass) values ('$firstname','$lastname','$gmail','$password',)";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";

        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>"  
        }

    }
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
    <section id="registration">
        <div class="signup">
            <h1>Sign Up</h1>
            <h4>It's free and only take a minute</h4>
            <form method="POST">
                <label>First Name</label>
                <input type="text" name="fname" required>
                <label>Last Name</label>
                <input type="text" name="lname" required>
                <label>Email</label>
                <input type="email" name="email" required>
                <label>Password</label>
                <input type="password" name="pass" required>
                <input type="submit" name="" value="Submit">
            </form>
            <p>By clicking the Sign Up button, you agree to our <br>
                <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
            </p>
            <p>Already have account? <a href="signin.php">Login Here</a></p>
        </div>
    </section>
</body>

</html>