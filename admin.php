<?php

$title = "Admin";
include("header.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Gamos location de voiture haut de gamme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .gestionvl {
            width: 200px;
            padding-left: 20px;
            flex-direction: column;
            justify-content: start;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="gestionvl>
        <h3>Liste des utilisateurs</h3> 
        <button type=" button" class="btn btn-warning">Ajouter un utilisateur</button>

        <select class="form-select" aria-label="Default select example">
            <option selected>Sélectionner votre statut</option>
            <option value="1">Admin</option>
            <option value="2">Employé</option>
            <option value="3">utilisateurs</option>
        </select>
    </div>

    <div class="d-flex gap-3">
        <option value="1">Admin</option>
        <button type="button" class="btn btn-warning">Mettre à jour</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
    </div>

    <div class="d-flex gap-3">
        <option value="2">Employé</option>
        <button type="button" class="btn btn-warning">Mettre à jour</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
    </div>

    <div class="d-flex gap-3">
        <option value="3">utilisateurs</option>
        <button type="button" class="btn btn-warning">Mettre à jour</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>








<?php

include("footer.php");

?>