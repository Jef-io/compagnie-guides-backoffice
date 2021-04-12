<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($guides as $guide){
    echo form_open('guides/modifier/'.$guide->code_Guides); //Ouvre la balise form et crée la cible vers la route employes/creer

    echo '<label for="code">code</label>';
    echo '<input type="text" disabled name="code" value="'.$guide->code_Guides.'" />';
    
    echo '<label for="nom">Nom</label>';
    echo '<input type="text" name="nom" value="'.$guide->nom_Guides.'"/>';

    echo '<label for="prenom">Prénom</label>';
    echo '<input type="text" name="prenom" value="'.$guide->prenom_Guides.'"/>';

    echo '<label for="email">Email</label>';
    echo '<input type="text" name="email" value="'.$guide->email_Guides.'"/>';

    echo '<label for="mdp">Mot de passe</label>';
    echo '<input type="text" name="mdp" value="'.$guide->motdepasse_Guides.'"/>';
}
?>
  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>