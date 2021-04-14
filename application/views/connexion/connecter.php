<?php
  echo '<h1>'.$titre.'</h1>';
  echo '<div id="login">' ;
  echo form_open('connexion/connecter');
?>

    <label for="email">Email</label>
    <input type="text" name="email" />

    <label for="mdp">Mot de passe</label>
    <input type="password" name="mdp" />

    <input type="submit" name="submit" value="Se connecter" />
</form>
</div>