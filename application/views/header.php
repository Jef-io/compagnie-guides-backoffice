<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projet RTAI - Back-office</title>
    <link href="http://localhost:80/RTAI/compagnie-guides-backoffice/css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <?php   
      $home='http://localhost:80/RTAI/compagnie-guides-backoffice/';
      echo '<header>';
      if ($this->session->userdata('email_Administrateurs')) {
        echo '<a href="'.$home.'index.php">Home</a>';
        echo '<a href="'.$home.'index.php/connexion/deconnecter">Se déconnecter</a>';
      }
      echo '</header>';
    ?>
    <main>
