 <?php
 require('PARTIALS/header.php');

 ?>
 <div class="breadcrumb">
  <div class="container webpage">
  <div id="breadcrumb"><a href="index.php">Accueil</a>  >  <a href="A_propos.php">Qui sommes-nous ?</a>  >  <span>Notre Personnel</span></div>
</div>
</div>
<br />
<br />

  <!--Insertion de la barre de navigation-->

<div class = "container">   <!--Ouverture du container-->

    <div class = "jumbotron"> <!--Encadré du Titre-->
        <center><h2>Notre personnel</h2></center>
    </div>

    <div class="jumbotron">   <!--Encadré de la partie de l'interviex + Tableau-->
        <i>Interview du Directeur Lucien Sapin.</i>
        <br /><br />

        <h4>Pouvez-vous nous parler du personnel de la M2L et de leurs missions ?</h4>

        <p>Les personnes qui travaillent ici sont de différentes catégories. Il y a d’abord ceux que j’appelle
            les «professionnels». Il y a deux employés du Conseil Régional (des factotums). Il y a sept ETP (Équivalents
            Temps Plein) employés par le CROSL ; il y a le personnel des prestataires (gardiennage, ménage) et les
            salariés des ligues. Ensuite, il y a les bénévoles qui sont les élus des associations : CROSL, CDOS, ligues,
            comités départementaux. Il y a également les élus du Conseil Régional et enfin tous les autres : visiteurs,
            stagiaires, etc.</p>

        <h4>Quelles sont les missions des personnels « Région » et « CROSL » ?</h4>

        <p>Nous avons 2,25 ETP « région », les deux factotums dont je vous parlais précédemment, et moi, qui suis
            employé, pour un quart de mon poste, par le conseil régional. Cela s’explique par le fait que je ne pourrais
            avoir logiquement d’autorité sur les personnels « Région » si je n’en fais pas partie moi-même.
            Les autres ETP du CROSL sont les suivants :</p>

        <div class="table-responsive">  <!--Début Teableau responsive-->
            <table class="table">
                <tr>
                    <th>Valeur</th>
                    <th>Type</th>
                    <th>Poste</th>
                </tr>
                <tr>
                    <td>0,75</td>
                    <td>ETP</td>
                    <td>Poste de direction</td>
                </tr>
                <tr>
                    <td>0,8</td>
                    <td>ETP</td>
                    <td>Plan impact Emploi Association</td>
                </tr>
                <tr>
                    <td>0,5</td>
                    <td>ETP</td>
                    <td>Gestion, Comptabilité, Facturation du CROSL et CR</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ETP</td>
                    <td>Formation, Communication, Secrétariat</td>
                </tr>
                <tr>
                    <td>0,80</td>
                    <td>ETP</td>
                    <td>Domaine "SAPHIR" (Les aspects médicaux liés au mouvements sportifs)</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ETP</td>
                    <td>Infographiste et gestion des photocopieuses numérique</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ETP</td>
                    <td>Accueil (qui va passer en deux fois 0,5 ETP)</td>
                </tr>
                <tr>
                    <td colspan="3"><h5>ETP: Equivalents Temps Plein <br /> CR: Conseil régional <br /> CROSL: Comité Régional Olympique et Sportif de Lorraine</h5></td> <!--Légende du tableau dans les 3 colonnesfusionnées-->
                </tr>
            </table>
        </div>      <!--Fin tableau responsive-->
    </div>
  </div>
  
  <?php
	require('PARTIALS/footer.php');

  ?>


