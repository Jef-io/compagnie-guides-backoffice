<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($ascensions as $ascension){
    echo form_open('ascensions/modifier/'.$ascension->code_Sommets.'/'.$ascension->code_Abris); //Ouvre la balise form et crée la cible vers la route employes/creer

    echo '<label for="code_Sommets">Sommet</label>
    <select name="code_Sommets" required>
      <option value="">--Please choose an option--</option>' ;
      $value = $ascension->code_Sommets ;
      foreach($sommets as $sommet){
          echo '<option value="'.$sommet->code_Sommets.'" '.($sommet->code_Sommets = $value ? 'selected' : '').'>'.$sommet->nom_Sommets.'</option>' ;
      }
    echo '</select>' ;

    echo '<label for="code_Abris">Abris</label>
    <select name="code_Abris" required>
      <option value="">--Please choose an option--</option>' ;
      $value = $ascension->code_Abris ;
      foreach($abris as $abri){
        echo '<option value="'.$abri->code_Abris.'" '.($abri->code_Abris = $value ? 'selected' : '').'>'.$abri->nom_Abris.'</option>' ;
      }
    echo '</select>' ;

    echo '<label for="difficulte_Ascension">Niveau de difficulté</label>
    <select name="difficulte_Ascension" required>
      <option value="">--Please choose an option--</option>
      <option value="debutant"'. ($ascension->difficulte_Ascension = 'debutant' ? 'selected' : '') .'>débutant</option>
      <option value="confirmé"'. ($ascension->difficulte_Ascension = 'confirmé' ? 'selected' : '').'>confirmé</option>
      <option value="expert"'. ($ascension->difficulte_Ascension = 'expert' ? 'selected' : '').'>expert</option>
    </select>' ;

    echo '<label for="duree_Ascension">Durée</label>';
    echo '<input type="number" name="duree_Ascension" value="'.$ascension->duree_Ascension.'"/>';
}
?>
  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>