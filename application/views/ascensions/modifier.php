<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($ascensions as $ascension){
    echo form_open('ascensions/modifier/'.$ascension->code_Sommets.'&'.$ascension->code_Abris); //Ouvre la balise form et crée la cible vers la route employes/creer

    echo '<label for="code_Sommets">Sommet</label>
    <select name="code_Sommets" required>
      <option value="">--Please choose an option--</option>' ;
      foreach($sommets as $sommet){
        echo '<option value="'.$sommet->code_Sommets.'">'.$sommet->nom_Sommets.'</option>' ;
      }
    echo '</select>' ;

    echo '<label for="code_Abris">Abris</label>
    <select name="code_Abris" required>
      <option value="">--Please choose an option--</option>' ;
      foreach($abris as $abri){
        echo '<option value="'.$abri->code_Abris.'">'.$abri->nom_Abris.'</option>' ;
      }
    echo '</select>' ;

    echo '<label for="difficulte_Ascension">Niveau de difficulté</label>
    <select name="difficulte_Ascension" required>
      <option value="">--Please choose an option--</option>
      <option value="debutant"'.if ($ascension->difficulte_Ascension == 'debutant') { echo 'selected'}.'>débutant</option>
      <option value="confirmé"'.if ($ascension->difficulte_Ascension == 'confirmé') { echo 'selected'}.'>confirmé</option>
      <option value="expert"'.if ($ascension->difficulte_Ascension == 'expert') { echo 'selected'}.'>expert</option>
    </select>' ;

    echo '<label for="difficulte_Ascension">Difficulté</label>';
    echo '<input type="text" name="prenom" value="'.$ascension->difficulte_Ascension.'"/>';

    echo '<label for="email">Email</label>';
    echo '<input type="text" name="email" value="'.$ascension->duree_Ascension.'"/>';
}
?>
  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>