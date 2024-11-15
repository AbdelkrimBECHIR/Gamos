<?php
include 'connex_bdd.php';
$title = "Admin";
include("header.php");
include 'functionAdmin.php'


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Gamos location de voiture haut de gamme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        .gestionvl {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            width: 100%;
        }

        .tilte_admin {
            display: flex;
            gap: 150px;
        }

        .add_admin {
            display: flex;
            gap: 150px;
           

        }

        .liste_admin {
            border: solid;
            height: 300px;
            width: 800px;
            overflow: auto;
        }

          
        .li_admin{
            display: flex;
            flex-direction: row;
            gap: 50px;
        }
    </style>
</head>

<body>

    <div class="gestionvl">
        <div class="tilte_admin">
            <div>
                <h2>Liste des utilisateurs</h2>
            </div>
            <div>
                <a href="gestion_cars.php">Gestion des vehicules</a>
            </div>
        </div>

        <div class="add_admin">
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Sélectionner un role</option>
                    <option value="1">Admin</option>
                    <option value="2">Employé</option>
                    <option value="3">utilisateurs</option>
                </select>
            </div>

            <div>
                <button type="button" class="btn btn-warning">Ajouter un utilisateur</button>
            </div>
        </div>


        <h3>admins/employes/utilisateurs</h3>

        <div class="liste_admin">
            <!-- faire une liste avec un foreach qui affiche tout les noms selon le role  -->
            
                <ul>
                    <li class="li_admin">
                        <p>Harold le chef bootstrap</p>
                        <button type="button" class="btn btn-warning">Mettre à jour</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </li>
                </ul>
           
        </div>

    </div>


</body>

</html>





<?php

include("footer.php");

?>