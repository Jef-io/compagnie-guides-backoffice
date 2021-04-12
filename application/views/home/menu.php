<?php
  echo '<h1>'.$titre.'</h1>';

  $home='http://localhost:80/RTAI/compagnie-guides-backoffice/';

  echo '<nav>';
  echo '<h2>Consulter :</h2>' ;
  echo '<ul>' ;
  echo '<li>
          Abris
          <ul>
            <li><a href="'.$home.'index.php/abris">Les abris</a></li>
            <li><a href="'.$home.'index.php/abris/creer">Ajouter un abri</a></li>
          </ul>
        </li>';
  echo '<li><a href="'.$home.'index.php/guides">Les guides</a></li>';
  echo '<li><a href="'.$home.'index.php/sommets">Les sommets</a></li>';
  echo '<li><a href="'.$home.'index.php/vallees">Les vallées</a></li>';
  echo '<li><a href="'.$home.'index.php/ascensions">Les ascensions</a></li>';
  echo '</ul>' ;

  echo '<h2>Ajouter :</h2>' ;
  echo '<ul>' ;
  echo '<li><a href="'.$home.'index.php/abris/creer">Ajouter un abri</a></li>';
  echo '<li><a href="'.$home.'index.php/guides/creer">Ajouter un guide</a></li>';
  echo '<li><a href="'.$home.'index.php/sommets/creer">Ajouter un sommet</a></li>';
  echo '<li><a href="'.$home.'index.php/vallees/creer">Ajouter une vallée</a></li>';
  echo '<li><a href="'.$home.'index.php/ascensions/creer">Ajouter une ascension</a></li>';
  echo '</ul>' ;
  echo '</nav>';

?>
