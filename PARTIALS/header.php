<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Maison des Ligues de Lorraine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">M2L</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Qui sommes-nous ? <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="A_propos.php">A propos de la M2L</a></li>
          <li><a href="locaux.php"> Nos Locaux</a></li>
          <li><a href="services.php">Services Proposés</a></li>
          <li class = "divider"></li>
          <li><a href="personnel.php">Notre Personnel</a></li>
          <li><a href="parc_informatique.php">Parc Informatique</a></li>
          <li class = "divider"></li>
          <li><a href="statut_juridique.php">Statut Juridique</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="HTML/ligues.html"> Les Ligues <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="ligues.php">Nos Ligues</a></li>
          <li class = "divider"></li>
          <li><a href="#">Athlétisme</a></li>
          <li><a href="http://www.llbb.fr/accueil.html">Basketball</a></li>

          <li><a href="http://lorraine.fff.fr/cg/5600/www/index.shtml">Football</a></li>
          <li><a href="#">Golf</a></li>
          <li><a href="#">Handball</a></li>
          <li><a href="#">Judo</a></li>
          <li><a href="http://lorraine.ffnatation.fr/script/index.php">Natation</a></li>
          <li><a href="http://www.ligue.fft.fr/lorraine/lorraine_a/cms/index_public.php?us_action=show_note_site&login_off=1&ui_id_site=1">Tennis</a></li>
          <li><a href="#">Volleyball</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reservations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="reserver.php">Reserver une salle</a></li>
          <li><a href="reservation.php">Fonctionnement de reservation</a></li>
        </ul>
      </li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contactez-nous</a></li>
        <li><a href="connect.php">Connectez vous</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../SOSPARTNERS/index.php"><span class="glyphicon glyphicon-log-in"></span> SOS PARTNERS </a></li>
      </ul>
    </div>
  </div>
</nav>
