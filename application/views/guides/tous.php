<?php
  echo '<h1>'.$titre.'</h1>';

  foreach ($guides as $g){
    echo $g->nom_Guides." ".$g->prenom_Guides." ".$g->email_Guides."<br>";
  }
?>
