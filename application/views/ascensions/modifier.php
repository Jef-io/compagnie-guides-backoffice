<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($ascensions as $ascension){
    echo form_open('ascensions/modifier/'.$ascension->code_Sommets.'&'.$ascension->code_Abris); //Ouvre la balise form et crée la cible vers la route employes/creer

    echo '<label for="code_Sommets">Sommet</label>
    <select name="code_Sommets" required>
      <option value="">--Please choose an option--</option>' ;
      $value = $ascension->code_Sommets ;
      foreach($sommets as $sommet){
        if ($sommet->code_Sommets == $value) {
          echo '<option value="'.$sommet->code_Sommets.'" selected>'.$sommet->nom_Sommets.'</option>' ;
        } else {
          echo '<option value="'.$sommet->code_Sommets.'">'.$sommet->nom_Sommets.'</option>' ;
        }
      }
    echo '</select>' ;

    echo '<label for="code_Abris">Abris</label>
    <select name="code_Abris" required>
      <option value="">--Please choose an option--</option>' ;
      $value = $ascension->code_Abris ;
      foreach($abris as $abri){
        if ($abri->code_Abris == $value) {
          echo '<option value="'.$abri->code_Abris.'" selected>'.$abri->nom_Abris.'</option>' ;
        } else {
          echo '<option value="'.$abri->code_Abris.'">'.$abri->nom_Abris.'</option>' ;
        }
      }
    echo '</select>' ;

    echo '<label for="difficulte_Ascension">Niveau de difficulté</label>
    <select name="difficulte_Ascension" required>
      <option value="">--Please choose an option--</option>' ;
      $value = $ascension->difficulte_Ascension ;
      if ($value == 'debutant') {
        echo '<option value="debutant" selected>débutant</option>' ;
      } else if ($value == 'confirmé') {
        echo '<option value="confirmé" selected>confirmé</option>' ;
      } else if ($value == 'expert') {
        echo '<option value="expert" selected>expert</option>' ;
      }
    echo '</select>' ;

    echo '<label for="duree_Ascension">Durée</label>';
    echo '<input type="number" name="duree_Ascension" value="'.$ascension->duree_Ascension.'"/>';
}
?>
  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>