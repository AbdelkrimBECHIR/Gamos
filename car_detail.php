<?php

$title = "détail car";
include("header.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="d-flex justify-content-start">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Recherche un véhicule</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Immatriculation</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Ajouter un véhicule</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>

    <div class="row mb-3">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Marque</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel" placeholder="Marque">
        </div>
        <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Modèle</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" placeholder="Modèle">
            </div>
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kilométrage</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" placeholder="Kilométrage">
            </div>
            <label for="colFormLabel" class="col-sm-2 col-form-label">Prix</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="colFormLabel" placeholder="Prix">
            </div>
            <label for="colFormLabel" class="col-sm-2 col-form-label">Modèle</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" placeholder="Modèle">
                <select class="form-select" id="inlineFormSelectPref">
                    <option selected>Carburant</option>
                    <option value="1">Essence</option>
                    <option value="2">Diesel</option>
                    <option value="3">GPL</option>
                    <option value="4">Hydrogène</option>
                    <option value="5">Electrique</option>
                </select>
                <div class="col-sm-10">
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Transmission</option>
                        <option value="1">Manuelle</option>
                        <option value="2">Automatique</option>
                    </select>
                    <div class="col-sm-10">
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected>Nombre de siège</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                            <option value="6">7</option>
                        </select>
                        <h3>Option:</h3>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Kilométrage illimité</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="Kilométrage illimité">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Assurance</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="Assurance">
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>








<?php

include("footer.php");

?>