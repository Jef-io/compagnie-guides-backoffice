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
    <input type="number" name="altitude_Abris" required/>

    <label for="places_Abris">Nombre de places</label>
    <input type="number" name="places_Abris" />

    <label for="prixNuit_Abris">Prix à la nuit</label>
    <input type="number" name="prixNuit_Abris" />

    <label for="prixRepas_Abris">Prix du repas</label>
    <input type="number" name="prixRepas_Abris" />

    <label for="telGardien_Abris">Téléphone du gardien</label>
    <input type="tel" name="telGardien_Abris" />

    <label for="code_Vallees">Vallée</label>
    <select name="code_Vallees" required>
      <option value="">--Please choose an option--</option>
      <?php
        foreach($vallees as $vallee){
          echo '<option value="'.$vallee->code_Vallees.'">'.$vallee->nom_Vallees.'</option>' ;
        }
      ?>
    </select>

    <input type="submit" name="submit" value="Créer un abri" />
</form>