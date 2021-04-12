<?php
  echo '<h2>'.$titre.'</h2>';

  $home='http://localhost:80/RTAI/compagnie-guides-backoffice/';

  echo '<ul>' ;
  echo '<li><a href="'.$home.'index.php/abris">Les abris</a></li>';
  echo '<li><a href="'.$home.'index.php/abris/creer">Ajouter un abri</a></li>';
  echo '<li><a href="'.$home.'index.php/guides">Les guides</a></li>';
  echo '<li><a href="'.$home.'index.php/guides/creer">Ajouter un guide</a></li>';
  echo '<li><a href="'.$home.'index.php/sommets">Les sommets</a></li>';
  echo '<li><a href="'.$home.'index.php/sommets/creer">Ajouter un sommet</a></li>';
  echo '<li><a href="'.$home.'index.php/vallees">Les vallées</a></li>';
  echo '<li><a href="'.$home.'index.php/vallees/creer">Ajouter une vallée</a></li>';
  echo '<li><a href="'.$home.'index.php/ascensions">Les ascensions</a></li>';
  echo '<li><a href="'.$home.'index.php/ascensions/creer">Ajouter une ascension</a></li>';
  echo '</ul>' ;

?>
