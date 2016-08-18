<div class="container">
	<div class="row">
		<?php if (isset($errors) && $errors != null): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Erreur</strong> <?php echo $errors; ?>
			</div>
		<?php endif ?>
		<?php if (isset($success) && $success != null): ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Félicitation</strong> <?php echo $success; ?>
				<a href="<?php echo site_url('login') ?>">Connectez-vous</a>
			</div>
		<?php endif ?>
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
			<?php 
				echo form_open('user/register', array(
												    'class' => 'form-horizontal', 
												    'role' => 'form'
										    		)
				);
    		?>
					<div class="form-group">
						<legend>Inscription</legend>
					</div>
			
					<div class="form-group">
					    <label for="inputNom" class="col-sm-3 control-label">Nom</label>
					    <div class="col-sm-9">
					    	<input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom">
					    </div>
					</div>
			
					<div class="form-group">
					    <label for="inputPrenom" class="col-sm-3 control-label">Prénom</label>
					    <div class="col-sm-9">
					    	<input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom">
					    </div>
					</div>
			
					<div class="form-group">
					    <label for="inputEmail" class="col-sm-3 control-label">Email</label>
					    <div class="col-sm-9">
					    	<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
					    </div>
					</div>
			
					<div class="form-group">
					    <label for="inputPassword" class="col-sm-3 control-label">Mot de passe</label>
					    <div class="col-sm-9">
					    	<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
					    </div>
					</div>
			
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">S'inscrire</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>