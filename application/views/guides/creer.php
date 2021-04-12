<?php
  echo '<h1>'.$titre.'</h1>';

  echo form_open('guides/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>
  <label for="nom">Nom</label>
  <input type="text" name="nom" />

  <label for="prenom">Prénom</label>
  <input type="text" name="prenom" />

  <label for="email">Email</label>
  <input type="text" name="email" />

  <label for="mdp">Mot de passe</label>
  <input type="text" name="mdp" />

  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>