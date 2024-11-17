<?php

$title = "détail car";
include("header.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caractéristiques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .car_selected {
            display: flex;
            justify-content: space-between;
        }

        .princing {
            display: flex;
            align-items: flex-end;
        }
    </style>
</head>
<div class="row">
    <div class="col">
        <div class="car_selected">
            GAMOS SELECTED
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="pricing">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-light"> Prix sans option : </li><!-- function calcul prix total -->

                    <li class="list-group-item list-group-item-primary"> Options : </li>
                    <div class="form-check form-check-reverse">

                        <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                        <label class="form-check-label" for="reverseCheck1">
                            <li class="list-group-item">Kilométrage illimité : 15€/jour </li>
                        </label>
                        <div class="form-check form-check-reverse">
                            <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                            <label class="form-check-label" for="reverseCheck1">
                                <li class="list-group-item"> Assurance tiers : 15€/jour </li>
                            </label>
                            <div class="form-check form-check-reverse">
                                <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                <label class="form-check-label" for="reverseCheck1">
                                    <li class="list-group-item"> Nettoyage du véhicule : 45€ </li>
                                </label>
                                <div class="form-check form-check-reverse">
                                    <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                                    <label class="form-check-label" for="reverseCheck1">
                                        <li class="list-group-item"> Plein du Carburant : 100€ </li>
                                    </label>
                                </div>

                                </label>
                            </div>
                        </div>
                    </div>

            </div>

        </div>
        </ul>
    </div>







    <?php

    include("footer.php");

    ?>