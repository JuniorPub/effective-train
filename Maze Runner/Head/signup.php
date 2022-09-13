<?php 
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="navn" placeholder="Fulde navn...">
            <input type="text" name="email" placeholder="Fulde navn...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button type="enter" name="enter>Sign Up</button>


        </form>
    </section>


<?php 
    include_once 'footer.php';
?>