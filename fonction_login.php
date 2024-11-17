<?php

session_start();


include("connex_bdd.php");


if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["user_mail"]) && isset($_POST["password"])) {
  $email = filter_var(trim($_POST["user_mail"]), FILTER_SANITIZE_EMAIL);
  $password = trim($_POST["password"]);


  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "email invalide";
    exit;
  }

  // ajouter bloc securite preg match


  function recupUserBdd($email, $pdo)
  {
    $query = "SELECT * from Utilisateurs where email=:email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    $stmt->execute();
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    return $utilisateur;
  }

  function addUserBdd($email, $hashedPassword, $pdo)
  {
    $query = "INSERT INTO utilisateurs (nom,prenom,email,mot_de_passe,numero_permis,role) VALUES(:nom,:prenom,:email,:mot_de_passe,:numero_permis,:role)";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':nom', 'ab', PDO::PARAM_STR);
    $stmt->bindValue(':prenom', 'ab', PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':mot_de_passe', $hashedPassword, PDO::PARAM_STR);
    $stmt->bindValue(':numero_permis', '11111', PDO::PARAM_INT);
    $stmt->bindValue(':role', 'utilisateur', PDO::PARAM_STR);

    if ($stmt->execute()) {
      return true;
    } else {
      echo "pb d'insertion dans la bdd";
      return false;
    }
  }

  function locationRole($utilisateur)  {
    if (isset($utilisateur)){
          print_r($utilisateur);

        if (password_verify($_POST["password"], $utilisateur["mot_de_passe"])){
        $_SESSION["id_utilisateur"] = $utilisateur["id_utilisateur"];
        $_SESSION["email"] = $utilisateur["email"];
        $_SESSION["role"] = $utilisateur["role"];
        $role = $utilisateur["role"];

        switch ($role) {

          case "admin":
            header("location:admin.php");
            exit;
          case "employe":
            header("location:gestion_cars.php");
            exit;
          case "utilisateur":
            header("location:home.php");
          default:
            echo "probleme de role";
            exit;
        }
      } else {
        echo "mot de passe incorrect";
        exit();
      }
    }
  }
  





  $utilisateur = recupUserBdd($email, $pdo);



  if ($utilisateur) {

    locationRole($utilisateur);
  } else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    if (addUserBdd($email, $hashedPassword, $pdo)) {

      $utilisateur = recupUserBdd($email, $pdo);

      
      locationRole($utilisateur);
    } else {
      echo "erreur d'enregistrement";
      exit();
    }
  }
} else {
  echo " tout les champs doivent etre remplis";
  exit();
}
