<?php

    $home='http://localhost:80/RTAI/compagnie-guides-backoffice/index.php';
    echo '<h1>'.$titre.'</h1>';

    echo '<table><thead><tr><th>Nom</th><th>Actions</th></tr></thead><tbody>' ;
    foreach ($vallees as $vallee){
        echo '<tr>' ;
        echo '<td>'.$vallee->nom_Vallees.'</td>';
        echo '<td><a style="color: #F1F1E6;" href="'.$home.'/vallees/modifier/'.$vallee->code_Vallees.'">Modifier</a>';
        echo '</br><a style="color: #F1F1E6;" href="'.$home.'/vallees/supprimer/'.$vallee->code_Vallees.'">Supprimer</a></td>';
        echo '</tr>' ;
    }
    echo '</tbody></table>' ;
?>