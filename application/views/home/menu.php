<?php
  echo '<h2>'.$titre.'</h2>';

  $home='http://localhost:80/2021/Demo_CI/';

  echo '<h2>Les employés : </h2><br>';
  echo '<a href="'.$home.'index.php/employes">Tous</a><br>';
  echo '<a href="'.$home.'index.php/employes/competences">Tous avec les compétences</a><br>';
  echo '<a href="'.$home.'index.php/employes/creer">Ajouter un employé</a><br>';
  echo '<br>';
  echo '<h2>Les compétences : </h2><br>';
  echo '<a href="'.$home.'index.php/competences">Toutes</a><br>';
  echo '<a href="'.$home.'index.php/competences/creer">Ajouter une compétence</a><br>';


?>
