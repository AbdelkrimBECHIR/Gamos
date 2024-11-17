<?php
session_start();

$_SESSION= array();
unset($_SESSION);
session_destroy();
header("location:login.php");
exit();





$title = "Déconnexion";
include("header.php");

?>

<div>
    <p>Vous etes bien déconnecté.</p>
    <p>A bientot sur Gamos</p>
</div>
<a href="login.php">se connecter</a>


<?php
include("footer.php");