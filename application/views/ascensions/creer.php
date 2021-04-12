<?php
  echo '<h1>'.$titre.'</h1>';

  echo form_open('ascensions/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>
    <label for="code_Sommets">Sommet</label>
    <select name="code_Sommets" required>
      <option value="">--Please choose an option--</option>
      <?php
        foreach($sommets as $sommet){
          echo '<option value="'.$sommet->code_Sommets.'">'.$sommet->nom_Sommets.'</option>' ;
        }
      ?>
    </select>

    <label for="code_Abris">Abris</label>
    <select name="code_Abris" required>
      <option value="">--Please choose an option--</option>
      <?php
        foreach($abris as $abri){
          echo '<option value="'.$abri->code_Abris.'">'.$abri->nom_Abris.'</option>' ;
        }
      ?>
    </select>

    <label for="difficulte_Ascension">Niveau de difficulté</label>
    <select name="difficulte_Ascension" required>
      <option value="">--Please choose an option--</option>
      <option value="debutant">débutant</option>
      <option value="confirmé">confirmé</option>
      <option value="expert">expert</option>
    </select>

    <label for="duree_Ascension">Durée de l'ascension (en min)</label>
    <input type="number" name="duree_Ascension" />

    <input type="submit" name="submit" value="Créer une ascension" />
</form>