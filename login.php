<?php 
    include_once 'header.php';
?>


    <section class="login-form">
        <div id="signup" class="login-form-form">
            <form class="box" action="includes/login.inc.php" method="post">
                <h1> Login </h1>
                <input type="text" name="uid" placeholder="Username"> 
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
            </form>

            
        </div>

        <?php
                // Error besked hvis man ikke udfylde felterne. 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                echo "<p>Udfyld alle fælter!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                echo "<p>Forkert login!</p>";
                }
            }
        ?>
    </section>



<?php 
    include_once 'footer.php';
?>