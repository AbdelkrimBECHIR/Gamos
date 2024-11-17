<?php

session_start();


include("connex_bdd.php");

/*recuperation du mail et password envoyé dans le serveur en post, 
creation d'una tableau d'erreur pour le recuperer en session et securisation
des données envoyés au serveur*/
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["user_mail"]) && isset($_POST["password"])) {
  $email = filter_var(trim($_POST["user_mail"]), FILTER_SANITIZE_EMAIL);
  $password = trim($_POST["password"]);
  $errors = [];

  if (empty($email)) {
    $errors[] = " le mail doit etre renseigné";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "email invalide";
  }

  if (empty($password)) {
    $errors[] = "le mot de passe doit etre rensiegné";
  }

  if (!preg_match("/^\d{3,6}$/", $password)) {
    $errors[] = "le mot de passe doit seulement entre 3 et 6 chiffres";
  }

  if (!empty($errors)) {
    $_SESSION["error"] = $errors;
    header("location:login.php");
    exit();
  }

  // fonction qui recupere les infos dans la bdd d'un utilisateur grace a son mail
  function recupUserBdd($email, $pdo)
  {
    $query = "SELECT * from Utilisateurs where email=:email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    $stmt->execute();
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    return $utilisateur;
  }

  //fonction qui ajoute un utilisateur avec nom,prenom,role et num de permis par defaut dans la bdd avec le password haché
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

  // fonction qui redirige l'utilisateur selon son role si son mail est deja en bdd et que le password correspond avec le post
  function locationRole($utilisateur)
  {
    if (isset($utilisateur)) {

      if (password_verify($_POST["password"], $utilisateur["mot_de_passe"])) {
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

  /*on recupere les infos user en bdd et si il est connu on le redirige selon son role sinon on hache son password
  et on l'ajoute en bdd puis on le redirige */
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
} 

