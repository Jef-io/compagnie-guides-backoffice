<?php
  echo '<h1>'.$titre.'</h1>';

  echo form_open('abris/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>
    <label for="nom_Abris">Nom</label>
    <input type="text" name="nom_Abris" required/>

    <label for="type_Abris">Type d'abris</label>
    <select name="type_Abris" required>
        <option value="">--Please choose an option--</option>
        <option value="cabane">cabane</option>
        <option value="refuge">refuge</option>  
    </select>

    <label for="altitude_Abris">Altitude</label>
    <input type="text" name="altitude_Abris" required/>

    <label for="places_Abris">Nombre de places</label>
    <input type="text" name="places_Abris" />

    <label for="prixNuit_Abris">Prix à la nuit</label>
    <input type="text" name="prixNuit_Abris" />

    <label for="prixRepas_Abris">Prix du repas</label>
    <input type="text" name="prixRepas_Abris" />

    <label for="telGardien_Abris">Téléphone du gardien</label>
    <input type="text" name="telGardien_Abris" />

    <label for="code_Vallees">Code de la vallée</label>
    <input type="text" name="code_Vallees" required/>

    <input type="submit" name="submit" value="Créer un abri" />
</form>