<?Php
    include_once 'header.php';
?>
    <form action="includes/signup.inc.php" method="post">
        <h2>Sign up</h2>
        <input type="text" name="name" placeholder="Enter Name"><br>
        <input type="text" name="email" placeholder="Enter EMail"><br>
        <input type="text" name="uid" placeholder="Enter Username"><br>
        <input type="password" name="pwd" placeholder="Enter Password"><br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password "><br>
        <button type="submit" name="submit">Sign Up</button>
        <?php
            if(isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput"){
                    echo "<p> Fill in all fields</p>";
                }
                else if ($_GET["error"] == "invaliduid"){
                    echo "<p>Choose a proper username</p>";
                }
                else if ($_GET["error"] == "invalidemail"){
                    echo "<p> Choose a proper email</p>";
                }
                else if ($_GET["error"] == "invalidpassword"){
                    echo "<p>password doesn't match</p>";
                }
                else if ($_GET["error"] == "stmtfailed"){
                    echo "<p>Somethng went wrong, try again!</p>";
                }
                else if ($_GET["error"] == "usernametaken"){
                    echo "<p>username already taken!</p>";
                }
                else if ($_GET["error"] == "none"){
                    echo "<p>You have signed up!</p>";
                }
            }
        ?>
    </form>

    <?Php
    include_once 'footer.php';
?>