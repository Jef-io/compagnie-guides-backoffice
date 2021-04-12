<?php

    $home='http://localhost:80/RTAI/compagnie-guides-backoffice/index.php';

    echo '<h1>'.$titre.'</h1>';

    echo '<table><thead><tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Actions</th></tr></thead><tbody>' ;
    foreach ($guides as $guide){
        echo '<tr>' ;
        echo '<td>'.$guide->nom_Guides.'</td>';
        echo '<td>'.$guide->prenom_Guides.'</td>';
        echo '<td>'.$guide->email_Guides.'</td>';
        echo '<td><a href="'.$home.'/guides/modifier/'.$guide->code_Guides.'">Modifier</a> | ';
        echo '<a href="'.$home.'/guides/supprimer/'.$guide->code_Guides.'">Supprimer</a></td>';
        echo '</tr>' ;
    }
    echo '</tbody></table>' ;
?>
