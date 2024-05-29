<?php
session_start();
include("login/connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h3 id="logName"> Welcome, <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                        while ($row = mysqli_fetch_array($query)) {
                            echo $row['firstName'] . ' ';
                        }
                    }
                    ?>
    </h3>

    <!-- <a href="logout.php">Logout</a> -->

</body>

</html>