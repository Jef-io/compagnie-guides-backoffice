<?php

    $home='http://localhost:80/RTAI/compagnie-guides-backoffice/index.php';

    echo '<h1>'.$titre.'</h1>';

    echo '<table><thead><tr><th>Nom du Guide</th><th>Nombre de personnes</th><th>Date début</th><th>Date fin</th><th>Action</th></tr></thead><tbody>' ;
    foreach ($randonnees as $randonnee){
        echo '<tr>' ;
        foreach($guides[$randonnee->code_Guides]['nom_Guides'] as $guide){
            echo '<td>'.$guide->nom_Guides." ".$guide->prenom_Guides.'</td>';
        }
        echo '<td>'.$randonnee->nbPersonnes_Randonnees.'</td>';
        echo '<td>'.$randonnee->dateDebut_Randonnees.'</td>';
        echo '<td>'.$randonnee->dateFin_Randonnees.'</td>';
        echo '<td><a style="color: #F1F1E6;" href="'.$home.'/randonnees/'.$randonnee->code_Randonnees.'">Consuler</a></td>';
        echo '</tr>' ;
    }
    echo '</tbody></table>' ;
?>
