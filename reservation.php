<?php

$title = "reservation";
include("header.php");

?>
<style>

.firstline {
  display: flex;
}

</style>

<div class="firstline">
    <form action="/traitement.php" method="post">

        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <label for="floatingInputGrid">Nom :</label>
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Nom" required>
                    
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <label for="floatingInputGrid">Prénom :</label>
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Prénom" required>
                    
                </div>
            </div>
            <div class="col-md">
                <input type="phone" class="form-control" id="floatingInputGrid" placeholder="Numéro de téléphone" required>
                
            </div>
            <div class="col-md">
                <input type="date" class="form-control" id="floatingInputGrid" placeholder="Veuillez saisir votre date de naissance " required>
                
</div>
        <!-- Champs pour le paiement -->
        <!-- l'attribut data-strip permet d'informer stripe du rôle de chaque input -->
        <div class="col-md">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="Code de carte bleue" data-stripe="number" required>
        </div>
        <input type="text" class="form-control" id="floatingInputGrid" placeholder="MM" data-stripe="exp_month" required>
        <div class="col-md">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="YY" data-stripe="exp_year" required>
        </div>
        <div class="col-md">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="CVC" data-stripe="cvc" required>
        </div>
        <button class="btn btn-primary" type="submit">Valider</button>
    </form>
</div>







<?php

include("footer.php");

?>