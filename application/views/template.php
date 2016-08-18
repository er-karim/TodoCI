<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TaskList<?php echo (isset($title)) ? " - $title" : ""; ?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">TaskList</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Acceuil</a></li>
						<li><a href="<?php echo site_url('register'); ?>"><span class="glyphicon glyphicon-save"></span> S'inscrire</a></li>
						<li><a href="<?php echo site_url('login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Karim <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> Voir mes tâches</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-edit"></span> Modifier mes information</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="<?php echo site_url('logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<?php echo $content; ?>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>