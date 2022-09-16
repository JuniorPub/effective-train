<?php 
    include_once 'header.php';
?>

    <form class="box" action="includes/login.inc.php" method="post">
        <div id="login" class="login-form-form">
                <h1>
                login
                </h1>

            <input type="text" name="" placeholder="Indtast Brugernavn" id="brugernavn">
            <input type="password" name="" placeholder="Indtast Password" id="password"><br>
            <button type="submit" name="submit">Login</button>
            <div id="fejl"></div>
        </div>
    </form>
    

</body>
</html>