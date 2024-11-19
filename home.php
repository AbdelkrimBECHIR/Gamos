<?php

$title = "home";
include("header.php");

?>
<style>
    .form_home{
        
        background-color: blue;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    .form_homeDiv {
        
        display: flex;
        height: 30px;
        gap: 150px;              
    }

    .lieu{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .date{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    

</style>






<form  class="form_home" action="home.php" method="post">

    <div class="form_homeDiv">

        <div class="lieu">
                <label for="date">Choisissez une lieu depart:</label>
                <select name="lieu_depart" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Lieu de départ</option>
                <option value="Lyon"><Canvas>Lyon</Canvas></option>
                <option value="Paris">Paris</option>
                <option value="Marseille">Marseille</option>
            </select>    
        </div>

        <div class="lieu">
                <label for="date">Choisissez une lieu retour:</label>
                <select name="lieu_retour" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Lieu de retour</option>
                <option value="Lyon"><Canvas>Lyon</Canvas></option>
                <option value="Paris">Paris</option>
                <option value="Marseille">Marseille</option>
            </select>   
        </div>
   
    </div>

    <div class="form_homeDiv">
        <div class="date">
                <label for="date">Choisissez une date depart:</label>
                <input type="date" id="date" name="date_depart" min="2024-11-15" required>      
        </div>

        <div class="date">        
                <label for="date">Choisissez une date retour:</label>
                <input type="date" id="date" name="date_retour" min="2024-11-15" required>
        </div>
    </div>

    <div>
        
        <button type="submit">Voir les voitures</button>
    </div>

    </form>








<?php

include("footer.php");

?>