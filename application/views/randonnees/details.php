<?php

    // $home='http://localhost:80/RTAI/compagnie-guides-backoffice/index.php';

    echo '<h1>'.$titre.'</h1>';

    foreach ($randonnees as $randonnee) {
        echo '<table><thead><tr>
                <th>Nom Complet du Guide</th>
                <th>Nombre de personnes</th>
                <th>Date début</th>
                <th>Date fin</th>
                </tr></thead><tbody>';
        echo '<tr>';
        foreach ($guides[$randonnee->code_Guides]['nom_Guides'] as $guide) {
            echo "<td>".$guide->nom_Guides." ".$guide->prenom_Guides."</td>";
        }
        echo "<td>Nombre de personnes : ".$randonnee->nbPersonnes_Randonnees."</td>";
        echo "<td>".$randonnee->dateDebut_Randonnees."</td>";
        echo "<td>".$randonnee->dateFin_Randonnees."</td>";
        echo '</tr>';
        echo '</tbody></table>';

        echo '<br>';
        echo '<table><thead><tr>
                <th>Nom du sommet</th>
                <th>Difficulté</th>
                <th>Nom de l\'abris</th>
                <th>Prix de l\'abris</th>
                <th>Status</th>
                <th>Téléphone gardien</th>
                </tr></thead><tbody>';
        foreach ($infos[$randonnee->code_Randonnees]['infos'] as $info) {
            echo '<tr>';
            echo "<td>".$info->nom_Sommets.' - '.$info->altitude_Sommets." m</td>";
            echo "<td>".$info->difficulte_Ascension.' - '.$info->duree_Ascension." h</td>";
            echo "<td>".$info->nom_Abris.' - '.$info->type_Abris.'<br>'.$info->places_Abris." places</td>";
            echo "<td>".'Nuit : '.$info->prixNuit_Abris.'€<br>Repas : '.$info->prixRepas_Abris."€</td>";
            echo "<td>".$info->date_Reserver.' - '.$info->statut_Reserver."</td>";
            echo "<td>".$info->telGardien_Abris."</td>";
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
    // foreach ($randonnees as $randonnee){
    //     echo '<tr>' ;
    //     foreach($guides[$randonnee->code_Guides]['nom_Guides'] as $guide){
    //         echo '<td>'.$guide->nom_Guides." ".$guide->prenom_Guides.'</td>';
    //     }
    //     echo '<td>'.$randonnee->nbPersonnes_Randonnees.'</td>';
    //     echo '<td>'.$randonnee->dateDebut_Randonnees.'</td>';
    //     echo '<td>'.$randonnee->dateFin_Randonnees.'</td>';
    //     echo '<td><a style="color: #F1F1E6;" href="'.$home.'/randonnees/'.$randonnee->code_Randonnees.'">Consuler</a></td>';
    //     echo '</tr>' ;
    // }
    // echo '</tbody></table>' ;
?>