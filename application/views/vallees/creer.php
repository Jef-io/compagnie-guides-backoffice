<?php
  echo '<h1>'.$titre.'</h1>';

  echo form_open('vallees/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>
    <label for="nom_Vallees">Nom</label>
    <input type="text" name="nom_Vallees" required/>

    <input type="submit" name="submit" value="Créer une vallée" />
</form>