<?php
require('PARTIALS/header.php');

?>

<div class="breadcrumb">
  <div class="container webpage">
  <div id="breadcrumb"><a href="index.php">Accueil</a>  >  <a href="A_propos.php">Qui sommes-nous ?</a>  >  <span>Parc Informatique</span></div>
</div>
</div>
<br />
<br />
  <center>
  <div class = "container">

    <div class = "jumbotron"> <!-- Debut jumbotron -->
        <center><h2>Parc Informatique</h2></center><!-- Titre centré -->
    </div> <!-- Fin Jumbotron -->

    <div class = "jumbotron"> <!-- Debut Jumbotron -->
        <h3>Équipement en matériel informatique des espaces</h3><br />
        <p>Pour ce qui est des ordinateurs et des outils d'impression,
            la M2L ne dispose que de ses propres équipements,
            dans les bureaux d'administration du CROSL et dans la salle multimédia.
            Les bureaux des ligues sont équipés par les ligues elles-mêmes (hors mobilier de base).
            Des ressources d'impression mutualisées payantes sont néanmoins disponibles à l'administration de la M2L.</p>

        <i>Connectique fournie selon les espaces</i><br/>
        <p>Chaque bureau de ligue du bâtiment A dispose de deux prises Ethernet de catégorie 5 et d'une prise téléphonique. Dans le nouveau bâtiment C,
            ce sont trois prises Ethernet de catégorie 6 qui sont disponibles dans chaque bureau pour connecter du matériel informatique ou un appareil de téléphonie IP.</p>

        <p>Chaque salle de réunion dispose d'une prise Ethernet pour la connexion d'un PC portable au réseau (de catégorie 5 dans le bâtiment B et 6 dans le bâtiment D).
            Elle dispose en outre d'un système fixe de vidéo projection, mais pas d'ordinateur à demeure.</p>

        <p>La salle de formation multimédia dispose de 26 prises Ethernet de catégorie 5, une pour chacun des 25 PC (24 PC "stagiaires" et un PC "formateur"), et la dernière pour une imprimante réseau.</p>

        <p>L'amphithéâtre dispose de 4 prises Ethernet de catégorie 5 sur le pupitre. Il dispose également d'un système de vidéo projection sur grand écran. Une prise Ethernet est disponible également dans la régie.</p>

        <p>Les bureaux d'administration de la M2L disposent en tout de 27 prises de catégorie 6, pour les neuf bureaux.
            La salle de reprographie est dotée de 4 prises Ethernet de catégorie 6 pour les systèmes d’impression numériques connectés.</p><br />

        <i>Implantation des écrans du réseau d'affichage et des bornes Wifi</i><br/>

        <p>Un système de diffusion d'informations est installé sur 3 écrans 42" dans les espaces de circulation.
            Ils servent essentiellement à l'information des visiteurs sur les lieux de réunion.
            Les écrans d'information sont renseignés depuis l'administration de la M2L.</p>

        <p>Un réseau Wifi gratuit est disponible pour les visiteurs dans les espaces de réunion du rez-de-chaussée,
            mais également dans les étages des bureaux des ligues (les bornes y sont positionnées en quinconce d'un étage à l'autre).</p>

        <i>Schéma d'implantation des bornes Wifi et du réseau d'affichage</i>
            <img src="image/schema_wifi_affichage.png" class="img-responsive"/>

        <br />

        <i>Implantation des baies de brassage</i><br/>

        <p>Il y a eu un laps de temps important entre la construction des bâtiments A et B
            (construits au début des années 90) et C et D (tout dernièrement construits, en 2010).</p>

        <p>Pour le bâtiment A, on trouve une armoire de brassage secondaire pour chacun des 4 niveaux d'implantation des bureaux de ligues.
            Chacune de ces armoires regroupe 22 prises Ethernet :
            20 vers les bureaux, une vers la borne Wifi et une vers la salle de réunion.
            On trouve un commutateur 26 ports dans chacune de ces armoires (24 ports 10/100 et deux ports Giga combo RJ-45 / SFP).
            Ces armoires de brassage sont connectées à une armoire centralisatrice au rez-de-chaussée, dans un petit local climatisé du bâtiment B.</p>

        <p>Pour le nouveau bâtiment C, on a positionné une seule armoire de brassage au niveau quasi central du second étage du bâtiment.
            Cette armoire réunit 128 prises, 32 par étage (3 par bureau, une prise pour la salle de réunion et une pour la borne wifi).
            On y trouve 4 commutateurs 48 ports, dont tous les ports sont utilisables en gigabits/s.
            Cette armoire est connectée en fibre optique à l'armoire centralisatrice du bâtiment B.</p>

        <p>Les salles du RDC des nouveaux bâtiments C et D (salles à réservations, bureaux d'administration de la M2L,
            la salle de reprographie) ainsi que les bornes Wifi et
            les 3 écrans d'information sont tous connectés à l'armoire de brassage principale du bâtiment B
            dans laquelle on trouve 2 commutateurs à 24 ports et un routeur.
            C'est également le lieu d'implantation de l'armoire à serveurs.</p>

        <i>Schéma d'implantation des bornes Wifi et du réseau d'affichage</i>
            <i>Au Rez-de-chaussée (du bâtiment B)</i>
            <img src="image/brassage_bat_b.png" class="img-responsive"/> <!-- Image brassage batiment B -->

        <br />
        <i>Dans un étage du bâtiment A</i>
            <img src="image/brassage_bat_a.png" class="img-responsive"/> <!-- Image brassage batiment A -->

        <br />

        <p>C'est au rez-de-chaussée, dans la baie de brassage principale du bâtiment B que sont regroupés les différents réseaux au moyen de
            2 commutateurs-routeurs 24 ports empilés, l'accès Internet et l'accès téléphonique standard et IP.</p>

    </div> <!-- Fin Jumbotron -->

</div>
</center>

<?php
require('PARTIALS/footer.php');

?>
