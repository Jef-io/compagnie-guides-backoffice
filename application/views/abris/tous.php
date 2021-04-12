<?php
    echo '<h1>'.$titre.'</h1>';

    echo '<table><thead><tr><th>Nom</th><th>Type</th><th>Altitude</th><th>Nombre de places</th><th>Prix de la nuit</th>' ;
    echo '<th>Prix du repas</th><th>Téléphone du gardien</th><th>Code de la vallée</th></tr></thead><tbody>' ;
    foreach ($abris as $abri){
        echo '<tr>' ;
        echo '<td>'.$abri->nom_Abris.'</td>';
        echo '<td>'.$abri->type_Abris.'</td>';
        echo '<td>'.$abri->altitude_Abris.'</td>';
        echo '<td>'.$abri->places_Abris.'</td>';
        echo '<td>'.$abri->prixNuit_Abris.'</td>';
        echo '<td>'.$abri->prixRepas_Abris.'</td>';
        echo '<td>'.$abri->telGardien_Abris.'</td>';
        echo '<td>'.$abri->code_Vallees.'</td>';
        echo '</tr>' ;
    }
    echo '</tbody></table>' ;
?>