<?php
session_start();



$title = "Login";
include("header.php");

?>
<div class="login">

<p><?php if (isset($_SESSION["error"])){
    $errors=$_SESSION["error"];
    foreach ($errors as $error) 
        echo $error . "<br/>";
}
unset($_SESSION["error"]);
?></p>

<div><h1>Bienvenue sur Gamos, les plus belles voitures entre vos mains</h1></div>

<div class="form_login">
<form class="form_login" action="fonction_login.php" method="post">
    
    <label for="email">E-mail:</label>
    <input type="email" id="mail" name="user_mail" required/>
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required/>
    <button class="button_login" type="submit">Se connecter</button>
   
</form>
</div>


</div>

<?php

include("footer.php");

?>