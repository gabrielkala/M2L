 <?php
    require('PARTIALS/header.php');

 ?>

 <!--Insertion de la barre de navigation-->
<br />
<div class = "container"> <!--Ouverture du container -->
    <div class = "jumbotron"> <!--Encadré du Titre-->
        <center><h2>Nos Ligues</h2></center>
    </div>

    <div class = "jumbotron"> <!--Encadré du Tableau-->
        <h2>Liste des ligues présentes dans nos locaux</h2>
        <p>La Maison a le plaisir d'héberger la majorité des ligues sportives régionales,
            de la ligue de tennis à des ligues de sports qui n’ont pas d’employés permanents,
            comme le bowling ou la plongée sous-marine.</p>
        <div class="table-responsive">  <!--Tableau responsive-->
            <table class="table">

                <tr class="center">
                    <td><a target="_blank" href="http://www.ligue.fft.fr/lorraine/lorraine_a/cms/index_public.php?PHPSESSID=cc357358652851790c12bedf1cdc3c2a&us_action=show_note_site&ui_id_site=1">Tennis FFTLorraine</a></td>
                    <td><a target="_blank" href="http://liguelorraine.athle.com/">Ligue Lorraine d'Athlétisme</a></td>
                </tr>
                <tr class="center">
                    <td><a target="_blank" href="http://www.llbb.fr/accueil.html">Ligue Basketball de Lorraine</a></td>
                    <td><a target="_blank" href="http://www.golf-lorraine.com/">Ligue de Golf de Lorraine</a></td>
                </tr>
                <tr class="center">
                    <td><a target="_blank" href="http://lorraine.fff.fr/cg/5600/www/index.shtml">Ligue Lorraine de Football</a></td>
                    <td><a target="_blank" href="http://www.lorraine-handball.com/llhb/index.php">Ligue Lorraine de Handball</a></td>
                </tr>
                <tr class="center">
                    <td><a target="_blank" href="http://www.lorrainejudo.fr/">Ligue Lorraine de Judo</a></td>
                    <td><a target="_blank" href="http://lorraine.ffnatation.fr/script/index.php">Ligue de Lorraine de Natation</a></td>
                </tr>
                <tr class="center">
                    <td><a target="_blank" href="http://www.llvb.fr/">Ligue Lorraine de Volley Ball</a></td>
                    <td><a target="_blank" href="http://www.lorraine-handball.com/">LL Handball</a></td>
                </tr>

            </table>
        </div>      <!--Fin tableau responsive-->
    </div>

    <div class = "jumbotron center"> <!--Insersion d'un vidéo de Youtube-->
        <h3>La beauté du sport</h3>
        <object width="640" height="360">
                <param name="movie" value="//www.youtube.com/v/XYm8v_eUIpQ?version=3&amp;hl=fr_FR&autoplay=1"></param>
                <param name="allowFullScreen" value="true"></param>
                <param name="allowscriptaccess" value="always"></param>
                <embed src="//www.youtube.com/v/XYm8v_eUIpQ?version=3&amp;hl=fr_FR&autoplay=1" type="application/x-shockwave-flash" width="640" height="360" allowscriptaccess="always" allowfullscreen="true"></embed>
            </center></object>    <!--Fin insertion Vidéo-->

        <!--[if lte IE 6 ]>
        <embed src="//www.youtube.com/v/XYm8v_eUIpQ?version=3&amp;hl=fr_FR&autoplay=1" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed>
        <![endif]-->    <!--Gestion de la compatibilité avec IE-->
    </div>



</div> <!--Fermeture du container-->

<?php
require('PARTIALS/footer.php');
?>



