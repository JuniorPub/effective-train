<?php 
    include_once 'header.php';
?>


    <section class="signup-form">
        <div id="signup" class="signup-form-form">
            <form class="box" action="includes/signup.inc.php" method="post">
                <h1> Sign Up </h1>
                <input type="text" name="uid" placeholder="Username"> 
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat password">
                <button type="submit" name="submit">Sign Up</button>
            </form>

            
        </div>

        <?php
            if (isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput") {
                    echo "<p>Udfyld alle fælter!</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Vælge et bedre Brugernavn!</p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords matcher ikke!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Noget gik galt, prøv igen!</p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                    echo "<p>username allerede taget!</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
        ?>
    </section>



<?php 
    include_once 'footer.php';
?>