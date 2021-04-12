<?php
    echo '<h1>'.$titre.'</h1>';

    echo '<table><thead><tr><th>Nom</th><th>Altitude</th></tr></thead><tbody>' ;
    foreach ($sommets as $sommet){
        echo '<tr>' ;
        echo '<td>'.$sommet->nom_Sommets.'</td>';
        echo '<td>'.$sommet->altitude_Sommets.'</td>';
        echo '</tr>' ;
    }
    echo '</tbody></table>' ;
?>