<?php

$title = "Login";
include("header.php");

?>
<div class="login">
<div><h1>Bienvenue sur Gamos, les plus belles voitures entre vos mains</h1></div>

<div class="form_login">
<form class="form_login" action="home.php" metho="post">
    
    <label for="email">E-mail:</label>
    <input type="email" id="mail" name="user_mail" />
    <label for="password">Mot de passe:</label>
    <input type="password" id="name" name="user_name" />
    <button class="button_login" type="button">Se connecter</button>
   
</form>
</div>

</div>









<?php

include("footer.php");

?>