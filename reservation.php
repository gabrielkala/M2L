	<?php
	require('PARTIALS/header.php');

	?>

	<!--Insertion de la barre de navigation-->
	
   <div class="breadcrumb">
  <div class="container webpage">
  <div id="breadcrumb"><a href="../index.html">Accueil</a>  >  <a href="about_M2L.html">Reserver une salle</a>  >  <span>Fonctionnement de reservation</span></div>
</div>
</div>

<div class = "container">   <!--Ouverture du container-->

    <div class = "jumbotron"> <!--Ouverture de l'encadré avec les questions de la FAQ-->
        <center><h2>Réservation de Salles</h2></center>
    </div>

    <div class="jumbotron">
        <h2>Le système de réservation de salles</h2>
        <p>Le système de reservation vous permet de consulter les informations
            relatives aux différentes salles que nous proposons dans nos locaux
            (Le type de salle, sa capacité, etc...). Puis, réserver une salle selon
            vos besoins.</p>
        <br/>
        <h3>Voici la FAQ</h3>

        <p>
        <ul>    <!--Liste des questions de la FAQ avec ancres-->
            <li> <a href="#Q1">Comment puis- je m'inscrire?</a> </li>
            <li> <a href="#Q2">Pourquoi ne puis- je pas supprimer / modifier une réservation?</a> </li>
            <li> <a href="#Q3">Comment puis-je faire une réunion récurrente ?</a> </li>
            <li> <a href="#Q4">Comment puis-je supprimer une instance d'une réunion récurrente ?</a> </li>
            <li> <a href="#Q5">Comment puis-je planifier chambres sur différents sites ?</a> </li>
            <li> <a href="#Q6">Ma rencontre n'a pas pu être créé à cause de trop d'entrées !</a> </li>
            <li> <a href="#Q7">Qu'advient-il si plusieurs personnes enregistrent la même réunion?</a> </li>
            <li> <a href="#Q8">Quelle est la différence entre interne et externe ?</a> </li>
            <li> <a href="#Q9">Combien a coûté le système ?</a> </li>
            <li> <a href="#Q10">Comment fonctionne le système et qui l'a écrit ?</a> </li>
        </ul>

        <p class="dessous">
            <a href = "mdl">Liens vers l'intranet: Système de réservation de salle</a> <!--Lien vers le système de réservation et donc intranet-->
        </p>
    </div>



    <div class="jumbotron">  <!--Début encadré avec les réponses à chaque question-->


        <h3 id="Q1">Comment puis- je m'inscrire?</h3>
        <p>Le système peut être configuré pour utiliser une des nombreuses méthodes d'authentification, y compris LDAP, Netware, et SMB.
            Consultez votre administrateur système si vous éprouvez des difficultés à vous connecter. Certaines fonctions sont restreintes à certains
            utilisateurs, et d'autres utilisateurs auront le message "Vous n'avez pas les droits d'accès pour modifier cet article". Consultez votre
            administrateur système si cela ne fonctionne pas correctement pour vous. Si le système est configuré pour utiliser l'authentification LDAP,
            cela signifie que vous vous connectez avec le même nom d'utilisateur et mot de passe que vous utilisez pour récupérer votre courrier électronique
            par exemple Mark Belanger et MonMotdePasse.</p><br/>

        <h3 id="Q2">Pourquoi ne puis-je pas supprimer / modifier une réservation?</h3>
        <p>Pour supprimer ou modifier une réservation, vous devez être connecté en tant que "la même personne" qui a fait la réunion . Contactez l'un des
            administrateurs de salle de réunion ou de la personne qui a initialement fait la réunion de l'avoir supprimé ou modifié .</p><br/>

        <h3 id="Q3">Comment puis-je faire une réunion récurrente ?</h3>
        <p>En cliquant sur ​​"l'heure désirée" cela vous amène dans l'écran de réservation. Sélectionnez le type de répétition approprié. La salle sera réservée
            à la même heure, jusqu'à la Date de Fin, les jours déterminés par le type de répétition. A qdes horaires de répétition chaque jour. A des
            horaires de répétition hebdomadaires pour les jours de la semaine que vous avez coché sur la ligne Jour. Par exemple, pour une périodicité hebdomadaire
            programmée pour chaque lundi, mardi, jeudi et vendredi, cochez ces jours sur la ligne Jour. Si vous ne cochez pas de jours sur la ligne Jour, le calendrier
            va répéter le même jour de chaque semaine, le premier jour prévu. Une répétition N_Weekly est le même que d'une répétition hebdomadaire, sauf que les
            réservations ne sont faites que pour chaque semaine Nième où N est entré sous Nombre de semaines. Par exemple, pour effectuer une réservation pour une semaine,
            utiliser 2 pour le nombre de semaines. A Mois crée une périodicité le même jour de chaque mois, par exemple, le 15 du mois. Si vous sélectionnez le 29,
            le 30 ou le 31 du mois , puis pendant un mois où il n'existe pas ce jour-là le dernier jour de ce mois sera utilisé à la place .A des horaires de répétition
            annuels le même mois et le jour du mois, par exemple chaque 15 Mars. Si vous sélectionnez le 29 Février, puis pour les années où il n'y a pas que la date
            du 28 Février sera utilisé à la place. Enfin, un mensuel, les horaires de répétition de jour correspondantes d'un jour chaque mois, le même jour de la semaine
            et la position ordinale dans le mois. Utilisez ce type pour créer des périodicité du premier lundi, le second jeudi ou le quatrième vendredi de chaque mois,
            par exemple. Si vous avez choisi le 29, le 30 ou le 31 du mois, soit le cinquième jour de la semaine d'un mois, puis pour les mois où il n'y a aucune cinquième
            jour correspondant, le quatrième jour sera utilisé à la place. (Il s'agit d'un moyen utile de réserver la dernière semaine de chaque mois).</p><br/>

        <h3 id="Q4">Comment puis-je supprimer une instance d'une réunion récurrente ?</h3>
        <p>Sélectionnez le jour / chambre / heure que vous souhaitez supprimer et sélectionnez Supprimer une entrée.</p><br/>

        <h3 id="Q5">Comment puis-je planifier chambres sur différents sites ?</h3>
        <p>Vous n'avez pas. Actuellement, le système ne peut pas réserver deux chambres différentes simultanément. Vous devez planifier chacun séparément. Assurez-vous
            que le temps que vous voulez est disponible sur les deux sites avant de faire une réservation.</p><br/>

        <h3 id="Q6">Ma rencontre n'a pas pu être créé à cause de trop d'entrées!</h3>
        <p>Pas de réunion peut créer plus de 365 entrées. Il doit y avoir une limite sur le nombre de réunions créées. Ce nombre peut être augmenté si nécessaire.</p><br/>

        <h3 id="Q7">Qu'advient-il si plusieurs personnes enregistrent la même réunion?</h3>
        <p>La réponse courte est : La première personne à cliquer sur le bouton Enregistrer gagne. Dans les coulisses, le système utilise un multi-utilisateur base
            de donnée relationnelle multi- fileté qui peut gérer plusieurs milliers d'utilisateurs simultanés.</p><br/>

        <h3 id="Q8">Quelle est la différence entre interne et externe ?</h3>
        <p>Par défaut, MRBS deux types de réunion. Signifie interne que la réunion ne sera assisté par les employés. Une réunion externe peut également être assisté
            par les clients, les fournisseurs, les investisseurs, etc Votre site peut définir jusqu'à un total de 10 types de réunion, en fonction de vos besoins.
            Les réunions sont mises en évidence dans la vue principale du calendrier avec une couleur correspondant à leur type, et une touche de couleur de tous les
            types définis figure en bas de la page principale du calendrier.</p><br/>

        <h3 id="Q9">Combien a coûté le système ?</h3>
        <p>Rien. Voir la section suivante pour plus d'informations.</p><br/>

        <h3 id="Q10">Comment fonctionne le système et qui l'a écrit ?</h3>
        <p>Le Meeting Room Booking System est un logiciel open source qui est distribué sous la licence publique GNU ( GPL ). Cela signifie que le logiciel est
            libre d'utiliser, de distribuer et modifier. Le système est écrite en PHP, qui est un langage de programmation open source qui peut être intégré dans
            des pages web similaires dans le concept de pages de serveur actives Microsoft. PHP est particulièrement bon dans l'accès des bases de données.
            La base de données utilisée pour le système est soit MySQL ou PostgreSQL. MySQL est un multi-thread, multi-utilisateurs très rapide et robuste SQL
            (Structured Query Language) serveur de base de données qui est aussi sous licence GPL. PostgreSQL est un multi-utilisateurs open source objet complet
            du serveur de base de données relationnelle SQL. Le système fonctionne sur plusieurs plates-formes , y compris l'architecture PC utilisant le système d'exploitation
            Linux. Linux, est un logiciel gratuit, open source, système d'exploitation Unix-like. Le serveur web utilisé est encore un autre morceau de logiciel libre
            et open source. Le serveur web Apache est le serveur Web le plus populaire au monde. La ligne de fond est la suivante: chaque pièce de ce système,
            du système d'exploitation et de l'application est complètement gratuit - code source et autres</p><br/>
    </div>
</div>
<?php
require('PARTIALS/footer.php');
?>