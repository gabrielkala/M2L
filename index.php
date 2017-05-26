<?php
  require('PARTIALS/header.php');

?>

<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/carouss1.jpg" alt="Tennis">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="image/carouss2.jpg" alt="Natation">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="image/carouss3.png" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="image/carouss4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="image/carouss5.jpg" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br /> 
<div class="row">
      <div class="contenair-fluid col-sm-12 col-lg-8 col-lg-offset-2 margin_top no_padding">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="actualites.php"><h3>Les Actualités</h3></a>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="thumbnail">
                           <a href="actualites_JO.php"> <img class="img-responsive"  src="image/jo1.jpg" alt="" ></a>
                            <div class="caption">
                                <a href="actualites_JO.php"><h3 class="caption-label">C'est parti pour les JO à Rio </h3></a>
                                <p>Samedi 6 août à 1 heure du matin (heure française), le coup d'envoi des JO 2016 a été lancé dans le stade Maracana de Rio de Janeiro. C'est la première fois...</p>
                                <p><a href="actualites_JO.php" class="btn btn-primary">Voir plus...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="thumbnail">
                            <a href="actualites_pogba.php"><img class="img-responsive"  src="image/pogba.jpg" alt="" ></a>
                            <div class="caption">
                                <a href="actualites_pogba.php"><h3 class="caption-label">Officiel: Pogba à Manchester</h3></a>
                                <p>Manchester United a officialisé dans la nuit de lundi à mardi la signature de Paul Pogba en provenance de la Juventus Turin. Le milieu de terrain français a signé un contrat de...</p>
                                <p><a href="actualites_pogba.php" class="btn btn-primary">Voir plus...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="thumbnail">
                            <a href="actualites_basket.php"><img class="img-responsive"  src="image/basket.jpg" alt="" ></a>
                            <div class="caption">
                                <a href="actualites_basket.php"><h3 class="caption-label">l'Equipe de France de Basket</h3></a>
                                <p>La France a évité de peu une défaite humiliante contre la Roumanie (76-67) à l’Euro-2015 dames de basket, dimanche à Timisoara (Roumanie), mais n’a pas préparé...</p>
                                <p><a href="actualites_basket.php" class="btn btn-primary">Voir plus...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


    <div class="row">
        <div class="contenair-fluid col-sm-12 col-lg-8 col-xs-12 col-lg-offset-2 margin_top no_padding">

            <div class="contenair-fluid col-sm-6 col-lg-6 col-xs-12" style="padding-left:0;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="evenements.php"><h3>Les Événements</h3></a>
                    </div>
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">

                            <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    <h4 class="panel-title">
                                    Florent Manaudou à la M2L 
                                    </h4>
                                </a>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <img class="img-responsive centerIn" src="image/ev1.jpg" alt="" style="center">
                                    <br />
                                    Quelques semaines avant les Jeux Olympiques à Rio, Florent Manaudou nous faisait l'honneur d'une visite au  Cercle des Nageurs à la M2L, club mythique qui permet à Flo d'être dans les meilleures conditions pour travailler et ramener des titres. 

                                    Il nous parle notamment de son programme de musculation à quelques jours d'une grande compétition. 


                                </div>
                                
                            </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        <h4 class="panel-title">
                                        Le Ministre des sports inaugure les locaux de la M2L
                                        </h4>
                                    </a>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <img class="img-responsive centerIn"  src="image/ministre.jpg" alt="">
                                        <br />
                                        Patrick Kanner, ministre de la Ville, de la Jeunesse et des Sports, a participé, le vendredi 22 avril 2013, à l’inauguration des nouveaux locaux de la Maison des Ligues de Lorraine (M2L).
                                         Il a souligné la qualité architecturale de ce nouvel équipement, implanté dans le quartier de Tomblaine Sud. Dans le cadre des opérations de renouvellement urbain, le centre aquatique, dessiné par le cabinet lillois Béal & Blanckaert, en partenariat avec l’agence Paysages pour le volet jardin, révèle une silhouette faite de courbes et de transparences. Il offre, aux habitants de la région  et à la population de l’agglomération, un bassin sportif avec six couloirs de 25 mètres, un bassin ludique de 240 m2 et un espace détente avec sauna, hammam, hydrothérapie et zone de relaxation.
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        <h4 class="panel-title">
                                        Evénement de Basket à la M2L 
                                        </h4>
                                    </a>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <img class="img-responsive centerIn"  src="image/enfant.jpg" alt="">
                                        <br />
                                        L’animation de la commune de Tomblaine est le fruit d’une volonté politique qui s’inscrit pleinement dans une démarche d’éducation populaire, devant permettre au plus grand nombre l’accès à la culture, au sport et aux loisirs.
                                        Elle résulte aussi d’un partenariat fort avec le monde associatif et ses bénévoles, qui donnent de leur temps et s’investissent au quotidien dans le fonctionnement des associations et l’organisation de ces manifestations.
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenair-fluid col-sm-6 col-lg-6 col-xs-12" style="padding-right:0;">
                    <div class="contenair-fluid col-sm-12 col-lg-12 col-xs-12 no_padding">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="formation-emploi.php"><h3>Formations & Offres d'emploi</h3></a>
                            </div>
                            <div class="panel-body">
                                <div class="panel-group">
                                    <div class="panel background_color_formation">
                                    <div class="panel-heading">
                                        <a>
                                            <h4 class="panel-title">
                                            Formation : Initiation au Football • Débutant • 27/07
                                            </h4>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="panel panel background_color_offredemploi">
                                    <div class="panel-heading">
                                        <a>
                                            <h4 class="panel-title">
                                            Poste : Développeur Web • CDI • H/F • 24/07
                                            </h4>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="panel background_color_offredemploi">
                                    <div class="panel-heading">
                                        <a>
                                            <h4 class="panel-title">
                                            Poste : Assistante administrative • Alternance • H/F • 15/06
                                            </h4>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="panel background_color_formation">
                                    <div class="panel-heading">
                                        <a>
                                            <h4 class="panel-title">
                                            Formation : Initiation au Volley Ball • Débutant • 14/06
                                            </h4>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="panel background_color_formation">
                                    <div class="panel-heading">
                                        <a>
                                            <h4 class="panel-title">
                                            Formation : Stratégies au Tenis de table • Expert • 07/06
                                            </h4>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="panel panel background_color_offredemploi">
                                    <div class="panel-heading">
                                        <a>
                                            <h4 class="panel-title">
                                            Poste : Agent d'accueil • CDI • H/F • 01/06
                                            </h4>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenair-fluid col-lg-12 hidden-md hidden-sm hidden-xs no_padding">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Où sommes nous?</h3>
                            </div>
                            <div class="panel-body">
                                    <div class="panel-group">
                                        <div class="panel panel">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.4047462067288!2d6.2119645156687096!3d48.697744379272095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794983386479251%3A0xc58bc09976474b86!2s13+Rue+Jean+Moulin%2C+54510+Tomblaine!5e0!3m2!1sfr!2sfr!4v1470765401011" width="586" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row">

        <div class="contenair-fluid col-md-12 hidden-lg hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Où sommes nous?</h3>
                </div>
                <div class="panel-body">
                        <div class="panel-group">
                            <div class="panel panel">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.4047462067288!2d6.2119645156687096!3d48.697744379272095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794983386479251%3A0xc58bc09976474b86!2s13+Rue+Jean+Moulin%2C+54510+Tomblaine!5e0!3m2!1sfr!2sfr!4v1470765401011" width="1146" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenair-fluid col-xs-12 hidden-lg hidden-sm hidden-md">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Où sommes nous?</h3>
                </div>
                <div class="panel-body">
                        <div class="panel-group">
                            <div class="panel panel">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.4047462067288!2d6.2119645156687096!3d48.697744379272095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794983386479251%3A0xc58bc09976474b86!2s13+Rue+Jean+Moulin%2C+54510+Tomblaine!5e0!3m2!1sfr!2sfr!4v1470765401011" width="691" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenair-fluid col-sm-12 hidden-lg hidden-md hidden-xs">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Où sommes nous?</h3>
                </div>
                <div class="panel-body">
                        <div class="panel-group">
                            <div class="panel panel">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59089.11981804358!2d6.163538471518884!3d49.117136088701564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1458403071709" width="903" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-lg-offset-2 col-md-12 col-xs-12 margin_top no_padding">
            <div class="panel panel-default" id="images">
                <div class="panel-heading">
                    <h3>Galerie d'images </h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <img  class="col-lg-2 col-md-4 col-sm-4 col-xs-6" src="image/carousel7.jpg" class="img-rounded">
                        <img  class="col-lg-2 col-md-4 col-sm-4 col-xs-6" src="image/carousel5.jpg" class="img-rounded">
                        <img  class="col-lg-2 col-md-4 col-sm-4 col-xs-6" src="image/carousel4.jpg" class="img-rounded">
                        <img  class="col-lg-2 col-md-4 col-sm-4 col-xs-6" src="image/carousel18.jpg" class="img-rounded">
                        <img  class="col-lg-2 col-md-4 col-sm-4 col-xs-6" src="image/carousel9.jpeg" class="img-rounded">
                        <img  class="col-lg-2 col-md-4 col-sm-4 col-xs-6" src="image/carousel6.jpg" class="img-rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
require('PARTIALS/footer.php');

?>


</body>
</html>

