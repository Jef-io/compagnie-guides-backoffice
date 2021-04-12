<?php
  echo '<h1>'.$titre.'</h1>';

  echo '<table><thead><tr><th>Nom</th><th>Prénom</th><th>Email</th></tr></thead><tbody>' ;
  foreach ($guides as $g){
    echo '<tr>';
    echo '<td>'.$g->nom_Guides."</td>" ;
    echo '<td>'.$g->prenom_Guides."</td>" ;
    echo "<td>".$g->email_Guides."</td>";
    echo '</tr>' ;
  }
  echo '</tbody></table>' ;
?>
