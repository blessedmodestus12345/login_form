<?Php
    include_once 'header.php';
?>
    <form action="includes/login.inc.php" method="post">
        <h2>Login Here</h2>
        <input type="text" name="uid" placeholder="Username/Email"><br>
        <input type="password" name="pwd" placeholder="Enter password "><br>
        <button type="submit" name="submit">Log In</button> 
        <?php
            if (isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput"){
                    echo "<p> Fill in all field</p>";
                }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login details!</p>";
                }
                
            }
        ?>
    </form>
    <?Php
    include_once 'footer.php';
?>