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
</head>

<body>
  <h1>GESTION DES VEHICULES</h1>
  <div class="d-flex flex-row-reverse">

  <div class="d-flex align-items-start">
    <label for="utilisateurs">Type utilisateurs :</label>
    <option selected><p class="fs-6">Sélectionner votre statut </p></option>
    <select class="form-select form-select-sm" aria-label="Small select example" style="max-width: 200px; font-size: 0.875rem; height: 35px;">
      <option value="salarié">salariés</option>
      <option value="Admin">Admin</option>
    </select>
  </div>
</div>

<h2>Liste de tous les comptes</h2>

  <ul class="list-group">
  <li class="list-group-item">Harold B</li><button type="button" class="btn btn-warning">Mettre à jour</button><button type="button" class="btn btn-danger">Supprimer</button>
  <li class="list-group-item">Anis M</li><button type="button" class="btn btn-warning">Mettre à jour</button><button type="button" class="btn btn-danger">Supprimer</button>
  <li class="list-group-item">Abdelkrim B</li><button type="button" class="btn btn-warning">Mettre à jour</button><button type="button" class="btn btn-danger">Supprimer</button>
  <li class="list-group-item">Emmanuel P</li><button type="button" class="btn btn-warning">Mettre à jour</button><button type="button" class="btn btn-danger">Supprimer</button>
  <li class="list-group-item">Cedric L</li><button type="button" class="btn btn-warning">Mettre à jour</button><button type="button" class="btn btn-danger">Supprimer</button>

</ul>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>








<?php

include("footer.php");

?>