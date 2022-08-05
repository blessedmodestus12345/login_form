<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="nav-container">
    <a href="index.php">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <?php
        if(isset($_SESSION["useruid"])){
          echo "<a href='profile.php'>Profile Page</a>";  
          echo "<a href='includes/logout.inc.php'>Log Out</a> ";
        }
        else{
            echo "<a href= 'signup.php'>Sign Up</a>";
           echo "<a href= 'login.php'>Log In</a>";

        }
    ?>
    </div>
    </header>
    <div class="wrapper">