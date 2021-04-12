<?php

    $home='http://localhost:80/RTAI/compagnie-guides-backoffice/index.php';
    echo '<h1>'.$titre.'</h1>';

    echo '<table><thead><tr><th>Nom</th><th>Altitude</th><th>Actions</th></tr></thead><tbody>' ;
    foreach ($sommets as $sommet){
        echo '<tr>' ;
        echo '<td>'.$sommet->nom_Sommets.'</td>';
        echo '<td>'.$sommet->altitude_Sommets.'</td>';
        echo '<td><a style="color: #F1F1E6;" href="'.$home.'/sommets/modifier/'.$sommet->code_Sommets.'">Modifier</a> | ';
        echo '<a style="color: #F1F1E6;" href="'.$home.'/sommets/supprimer/'.$sommet->code_Sommets.'">Supprimer</a></td>';
        echo '</tr>' ;
    }
    echo '</tbody></table>' ;
?>