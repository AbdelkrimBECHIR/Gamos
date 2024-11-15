<?php

$title = "home";
include("header.php");

?>
<style>
    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-content: flex-start;
        width: 30px;
        height: 500px;
      
    }
    </style>
<select class="form-select form-select-sm" aria-label="Small select example">
  <option selected>Lieu de départ</option>
  <option value="1"><Canvas>Carcasonne</Canvas></option>
  <option value="2">Gennevilliers</option>
  <option value="3">Marseilles</option>
</select>

<select class="form-select form-select-sm" aria-label="Small select example">
  <option selected>Lieu de retour</option>
  <option value="1">Troyes</option>
  <option value="2">Champagne</option>
  <option value="3">Toulon</option>
</select>

<select class="form-select form-select-sm" aria-label="Small select example">
  <option selected>Date de départ</option>
  <label for="date">Choisissez une date :</label>
<input type="date" id="date" name="date" min="2024-11-15" required>

<script>
  // L'attribut "min" permet de définir la date minimale sélectionnable (ici, la date actuelle)
  const today = new Date().toISOString().split('T')[0];  // Format ISO (YYYY-MM-DD)
  document.getElementById('date').setAttribute('min', today); // Définir la date minimale à aujourd'hui
</script>

</select>

<select class="form-select form-select-sm" aria-label="Small select example">
  <option selected>Date de retour</option>
  <label for="date">Choisissez une date :</label>
<input type="date" id="date" name="date" min="2024-11-15" required>

<script>
  // L'attribut "min" permet de définir la date minimale sélectionnable (ici, la date actuelle)
  const today = new Date().toISOString().split('T')[0];  // Format ISO (YYYY-MM-DD)
  document.getElementById('date').setAttribute('min', today); // Définir la date minimale à aujourd'hui
</script>

</select>
</div>







<?php

include("footer.php");

?>