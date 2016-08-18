<div class="container">
	<div class="row">
		<?php if (isset($errors) && $errors != null): ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Erreur</strong> <?php echo $errors; ?>
			</div>
		<?php endif ?>
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
			<?php 
				echo form_open('user/login', array(
												    'class' => 'form-horizontal', 
												    'role' => 'form'
										    		)
				);
    		?>
					<div class="form-group">
						<legend>Connexion</legend>
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
							<button type="submit" class="btn btn-primary">Se connecter</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>