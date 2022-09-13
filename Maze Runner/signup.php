<?php 
    include_once 'header.php';
?>
    <section class="signup-form">
            <form class="box" action="signup.inc.php" method="post">
                <h1>
                Sign Up 
                </h1>
             
                <input type="text" name="navn" placeholder="Fulde navn...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username..."> 
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <button type="button" onclick="login()">Login</button>
            </form>
        </div>
    </section>
