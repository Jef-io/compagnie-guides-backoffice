<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($vallees as $vallee){
    echo form_open('vallees/modifier/'.$vallee->code_Vallees); //Ouvre la balise form et crée la cible vers la route employes/creer

    echo '<label for="code">code</label>';
    echo '<input type="text" disabled name="code" value="'.$vallee->code_Vallees.'" />';
    
    echo '<label for="nom">Nom</label>';
    echo '<input type="text" name="nom_Vallees" value="'.$vallee->nom_Vallees.'"/>';
}
?>
  <input type="submit" name="submit" value="Enregistrer" /><br>
</form>