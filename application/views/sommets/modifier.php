<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($sommets as $sommet){
    echo form_open('sommets/modifier/'.$sommet->code_Sommets); //Ouvre la balise form et crée la cible vers la route employes/creer

    echo '<label for="code">code</label>';
    echo '<input type="text" disabled name="code" value="'.$sommet->code_Sommets.'" />';
    
    echo '<label for="nom">Nom</label>';
    echo '<input type="text" name="nom_Sommets" value="'.$sommet->nom_Sommets.'"/>';

    echo '<label for="altitude">Altitude</label>';
    echo '<input type="text" name="altitude_Sommets" value="'.$sommet->altitude_Sommets.'"/>';
}
?>
  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>