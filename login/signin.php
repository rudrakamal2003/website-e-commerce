<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
        $query = "select * from form where email = '$email' limit 1";
        $result = mysqli_query($con, $query);
        
        if($result)
         {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['pass'] == $password)
                {
                    header("location: index.php");
                    die;

                }
            }
         }
         echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";
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
        <div class="signin">
            <h1>Sign In</h1>
            <form method="POST">
                <label>Email</label>
                <input type="email" name="email" required>
                <label>Password</label>
                <input type="password" name="pass" required>
                <input type="submit" name="" value="Submit">
            </form>
            <p>Not have an account? <a href="signup.php">Sign Up here</a>
            </p>

        </div>
    </section>
    
</body>
</html>