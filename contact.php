<?php
	session_start();
?>
<?php
  require('PARTIALS/header.php');

?>
<br />

<div class="container webpage">
    <p>Remplissez ce formulaire pour nous contacter:</p>
    <div class="jumbotron">

<div class="container">

	<div class="starter-template">

		<?php if(array_key_exists('errors', $_SESSION)): ?>
			<div class="alert alert-danger">
				<?= implode('<br>', $_SESSION['errors']); ?>
		    </div>
		<?php endif; ?>

		<?php if(array_key_exists('success', $_SESSION)): ?>
			<div class="alert alert-success">
				Votre message a bien été envoyé
		    </div>
		<?php endif; ?>

		<form action="post_contact.php" method="POST">
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label for="inputname">Votre nom</label>
						<input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
					</div>

				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label for="inputemail">Votre email</label>
						<input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
					</div>

				</div>

				<div class="col-xs-4">
					<label for="inputservice">Service</label>
					<select name="service" id="inputservice" class="form-control">
						<option value="0">les ressources humaines</option>
						<option value="1">le service informatique</option>
						<option value="2">la direction des sports</option>
					</select>
				</div>

				<div class="col-xs-12">
					<div class="form-group">
						<label for="inputmessage">Votre message</label>
						<textarea id="inputmessage" name="message" class="form-control" <?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?> rows="6"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Envoyer</button>
				</div>

			</div>
			
		</form>

	</div>

</div>
</div>
</div>
<br />



<?php
require('PARTIALS/footer.php');

?>

<?php

unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);

?>
