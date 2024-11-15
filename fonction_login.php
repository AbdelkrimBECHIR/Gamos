<?php
//lancement d'une session
session_start();

//connexion a la bdd
include("connex_bdd.php");

//verification du mail et password en post
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["user_mail"]) && isset($_POST["password"])){
$email = filter_var(trim($_POST["user_mail"]),FILTER_SANITIZE_EMAIL);
$password = trim($_POST["password"]);



// requete pdo avec preparation pour recup les donneés user
$query = "select * from Utilisateurs where email=:email";
$stmt=$pdo->prepare($query);
$stmt->bindParam('email',$email, PDO::PARAM_STR);

$stmt->execute();
$utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($utilisateur);
//verification du mot de passe
if ($utilisateur && $password === $utilisateur["mot_de_passe"]) {
    
    
    $_SESSION['nom'] = $utilisateur["nom"];
    $_SESSION['id'] = $utilisateur["id"];
    
     var_dump($utilisateur);   

    $role=$utilisateur["role"];
    switch ($role) {
       
        case "admin":
            header("location:admin.php");
            exit;
        case "employe":
            header("location:gestion_cars.php");
            exit;
        default:
            header("location:home.php");
        }
    }else{
         echo "l'email ou le mot de passe est incorrect";
    }
}else{
    echo "l'email et le mot de passe ne doivent pas etre vide";
}


?>