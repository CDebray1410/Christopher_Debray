<?php
session_start();


try{
  $bdd= new PDO('mysql:host=files.000webhost.com;dbname=id15288518_mon_site;charset=utf8', 'handicapped-breasts', 'Pz)kpMw6jtp)e4ZAP877', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
  die('Erreur : ' . $e->getmessage());
}

if(isset($_COOKIE['id']) && isset($_COOKIE['pseudo'])) {
  $_SESSION['id'] = $_COOKIE['id'];
  $_SESSION['pseudo'] = $_COOKIE['pseudo'];
}
?>

<!DOCTYPE html>

<html lang="fr">
  <head>
    <title> Site de jeux vidéos</title>

    <meta charset="UTF-8">
    <meta name="author" content="Christopher Debray">
    <meta name="description" content="Site parlant de jeux vidéos">
    <meta name="keywords" content="jeux vidéos, video games">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    <?php include('parts_of_code/header.php') ?>
    <main class="main">
      <fieldset>
        <form method="POST" action="inscription_post.php" id="inscription_form">
          <p><label for="pseudo">Pseudonyme :  <input type="text" name="pseudo" id="pseudo" minlength="3" maxlength="40" required /> </label></p>
          <p><label for="mail">E-mail :  <input type="email" name="mail" id="mail" required /> </label></p>
          <p><label for="pass">Mot de passe :  <input type="password" name="pass" id="pass" required /> </label></p>
          <p><label for="pass_verification">Vérification du mot de passe :  <input type="password" name="pass_verification" id="pass_verification" required /> </label></p>

          <input type="submit" />

          <p><a href="connexion.php"> Déjà inscrit ? Connectez-vous ! </a></p>
        </form>
      </fieldset>
    </main>
  </body>
</html>