<?php
  echo '<h1>'.$titre.'</h1>';

  $home='http://localhost:80/RTAI/compagnie-guides-backoffice/';

  echo '<nav>';
  echo '<div>' ;
  echo '<h2>Consulter :</h2>' ;
  // echo '<ul>' ;
  echo '<a href="'.$home.'index.php/abris">Les abris</a>';
  echo '<a href="'.$home.'index.php/guides">Les guides</a>';
  echo '<a href="'.$home.'index.php/sommets">Les sommets</a>';
  echo '<a href="'.$home.'index.php/vallees">Les vallées</a>';
  echo '<a href="'.$home.'index.php/ascensions">Les ascensions</a>';
  echo '<a href="'.$home.'index.php/randonnees">Les randonnées</a>';
  // echo '</ul>' ;
  echo '</div>' ;

  echo '<div>' ;
  echo '<h2>Ajouter :</h2>' ;
  // echo '<ul>' ;
  echo '<a href="'.$home.'index.php/abris/creer">Ajouter un abri</a>' ;
  echo '<a href="'.$home.'index.php/guides/creer">Ajouter un guide</a>';
  echo '<a href="'.$home.'index.php/sommets/creer">Ajouter un sommet</a>';
  echo '<a href="'.$home.'index.php/vallees/creer">Ajouter une vallée</a>';
  echo '<a href="'.$home.'index.php/ascensions/creer">Ajouter une ascension</a>';
  // echo '</ul>' ;
  echo '</div>' ;
  echo '</nav>';

?>
