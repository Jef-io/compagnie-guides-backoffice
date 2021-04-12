<?php
  echo '<h1>'.$titre.'</h1>';

  echo form_open('sommets/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>

    <label for="nom_Sommets">Nom</label>
    <input type="text" name="nom_Sommets" required/>

    <label for="altitude_Sommets">Altitude</label>
    <input type="text" name="altitude_Sommets" required/>

    <input type="submit" name="submit" value="Créer un sommet" />
</form>