<?php
    include_once 'header.php';
?>

<section class="sigup-form">

    <form class ="box" action="includes/signup.inc.php" method="post">

        <h1>Opret bruger</h1>

        <input type="text" name="brugernavn" placeholder="Vælg et brugernavn">
        <input type="password" name ="password" placeholder="Indtast et password">
        <input type="password" name ="passwordrepeat" placeholder="Gentag password">
        <button type="submit" name ="submit">Opret bruger</button>
    </form>
    
    <?php
            if(isset($_GET["error"])) {
                if($_GET["error"] == "tommefelter") {
                    echo "<p class='error'>Udfyld alle felter!</p>";
                }
                else if($_GET["error"] == "forkertbrugernavn") {
                    echo "<p class='error'>Vælg at ordentligt brugernavn!</p>";
                }
                
                else if($_GET["error"] == "pwdmatch") {
                    echo "<p class='error'>Passwords er ikke ens!</p>";
                }
                else if($_GET["error"] == "brugernavnoptaget") {
                    echo "<p class='error'>Brugernavn er allerede optaget!</p>";
                }
                else if($_GET["error"] == "none") {
                    echo "<p class='error'>Du er blevet oprettet!</p>";
                }
            }
    ?>
</section>




<?php 
    include_once 'footer.php';
?>