<?php
    require("adminconnect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="signIn">
        <h1 class="form-title">Admin Login</h1>
        <form method="POST">
            <div class="input-group">
                <i class="fa-solid fa-user-tie"></i>
                <input type="text" placeholder="Admin Name" name="AdminName">
                <label for="AdminName">Admin Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Admin Password" name="AdminPassword">
                <label for="AdminPassword">Admin Password</label>
            </div>
            <button type="submit" name="SignIn" class="signin">Sign In</button>
        </form>

        <?php
            if(isset($_POST['SignIn']))
            {
                $query="SELECT * FROM `login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result)==1)
                {
                   session_start();
                   $_SESSION['AdminLoginId']=$_POST['AdminName'];
                   header("location: ../adminpage/dashboard.php");
                }
                else
                {
                    echo "<script>alert('Incorrect Password')</script>";
                }

            }
        ?>
</body>
</html>