<?php
    echo '<h1>'.$titre.'</h1>';

    echo '<table><thead><tr><th>Nom</th></tr></thead><tbody>' ;
    foreach ($vallees as $vallee){
        echo '<tr>' ;
        echo '<td>'.$vallee->nom_Vallees.'</td>';
        echo '</tr>' ;
    }
    echo '</tbody></table>' ;
?>