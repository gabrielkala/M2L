<?php
require('PARTIALS/header.php');
?>
<br />
<div class="main-content">
    <div class="container">
<form method="post" action="cible.php"class="well col-md-6">
  <div class="form-group">
    <label for="email">Nom:</label>
    <input type="text" name="nom" class="form-control" id="nom">
  </div>
  <div class="form-group">
    <label for="pwd">Prénom:</label>
    <input type="text" name="prenom" class="form-control" id="prenom">
  </div>
  <p>
Votre âge:
<select name="age">
<option value="20">20
<option value="30">30
<option value="40">40
</select><p>

  <button type="submit" class="btn btn-default">Envoyer</button>
</form>
  </div>
</div>




















<?php
require('PARTIALS/footer.php');
?>


</body>
</html>
