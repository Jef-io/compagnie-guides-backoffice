<?php

    $home='http://localhost:80/RTAI/compagnie-guides-backoffice/index.php';

    echo '<h1>'.$titre.'</h1>';
    echo '<a href="'.$home.'/ascensions/creer/">Ajouter une ascension</a>' ;
    echo '<table><thead><tr><th>Sommet</th><th>Abri</th><th>Difficulté</th><th>Durée</th><th>Actions</th></tr></thead><tbody>' ;
    $counter=0;
    foreach ($ascensions as $ascension){
        echo '<tr>' ;
        foreach($sommets[$counter]['nom_Sommets'] as $sommet){
            echo '<td>'.$sommet->nom_Sommets.'</td>';
        }
        foreach($abris[$counter]['nom_Abris'] as $abri){
            echo '<td>'.$abri->nom_Abris.'</td>';
        }
        echo '<td>'.$ascension->difficulte_Ascension.'</td>';
        echo '<td>'.$ascension->duree_Ascension.'</td>';

        echo '<td><a href="'.$home.'/ascensions/modifier/'.$ascension->code_Sommets.'/'.$ascension->code_Abris.'">Modifier</a> | ';
        echo '<a href="'.$home.'/ascensions/supprimer/'.$ascension->code_Sommets.'/'.$ascension->code_Abris.'">Supprimer</a></td>';
        echo '</tr>' ;
        $counter++;
    }
    echo '</tbody></table>' ;
?>