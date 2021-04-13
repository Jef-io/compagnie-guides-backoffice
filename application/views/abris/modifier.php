<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($abris as $abri){
    echo form_open('abris/modifier/'.$abri->code_Abris); //Ouvre la balise form et crée la cible vers la route employes/creer

    echo '<label for="code_Abris">Code</label>';
    echo '<input type="text" name="code_Abris" value="'.$abri->code_Abris.'" disabled/>';

    echo '<label for="nom_Abris">Nom</label>';
    echo '<input type="text" name="nom_Abris" value="'.$abri->nom_Abris.'"/>';

    echo '<label for="type_Abris">Type</label>
      <select name="difficulte_Ascension" required>
        <option value="">--Please choose an option--</option>
        <option value="cabane"'. ($abri->type_Abris = 'cabane' ? 'selected' : '') .'>cabane</option>
        <option value="refuge"'. ($abri->type_Abris = 'refuge' ? 'selected' : '').'>refuge</option>
      </select>' ;

    echo '<label for="altitude_Abris">Altitude</label>
    <input type="number" name="altitude_Abris" value="'.$abri->altitude_Abris.'"required/>' ;

    echo '<label for="places_Abris">Nombre de places</label>
    <input type="number" name="places_Abris" value="'.$abri->places_Abris.'"/>' ;

    echo '<label for="prixNuit_Abris">Prix à la nuit</label>
    <input type="number" name="prixNuit_Abris" value="'.$abri->prixNuit_Abris.'"/>' ;

    echo '<label for="prixRepas_Abris">Prix du repas</label>
    <input type="number" name="prixRepas_Abris" value="'.$abri->prixRepas_Abris.'"/>' ;

    echo '<label for="telGardien_Abris">Téléphone du gardien</label>
    <input type="tel" name="telGardien_Abris" value="'.$abri->telGardien_Abris.'"/>' ;

    echo '<label for="code_Vallees">Vallée</label>
    <select name="code_Vallees" required>
      <option value="">--Please choose an option--</option>' ;
      foreach($vallees as $vallee){
        $value = $abri->code_Abris ;
        if ($abri->code_Vallees === $vallee->code_Vallees) {
          echo '<option value="'.$vallee->code_Vallees.'" selected>'.$vallee->nom_Vallees.'</option>' ;
        } else {
          echo '<option value="'.$vallee->code_Vallees.'">'.$vallee->nom_Vallees.'</option>' ;
        }
      }
    echo '</select>' ;
}
?>
  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>