<?php 
    include_once 'header.php';
?>
    <section class="signup-form">
        
        <div id="signup" class="signup-form-form">
            <form class="box" action="signup.inc.php" method="post">
                <h1> Sign Up </h1>
                <input type="text" name="uid" placeholder="Brugernavn"> 
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat password">
                <button type="button" onclick="login()">Login</button>
            </form>
        </div>
    </section>
