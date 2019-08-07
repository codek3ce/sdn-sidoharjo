<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
	<head>
		<title><?php echo $title; ?></title>

		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/css/bootstrap.min.css">

		<!-- App CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/css/target-admin.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/css/custom.css">
		<script><?php if($message == 0){?>alert("Username / Password Salah !!")<?php } ?></script>


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="account-bg">

		<div class="navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-cogs"></i>
					</button>
					<a class="navbar-brand navbar-brand-image" href="index-2.html">
						<img src="<?php echo base_url(); ?>assets/a/img/logo.png" alt="Site Logo">
					</a>
				</div> <!-- /.navbar-header -->

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">   
						<li>
							<a href="">
								<i class="fa fa-angle-double-left"></i> 
								&nbsp;Back to Homepage
							</a>
						</li> 
					</ul>
				</div> <!--/.navbar-collapse -->
			</div> <!-- /.container -->

		</div> <!-- /.navbar -->

		<hr class="account-header-divider">

		<div class="account-wrapper">

			<div class="account-logo">
				<img src="<?php echo base_url(); ?>assets/a/img/logo-login.png" alt="Target Admin">
			</div>

			<div class="account-body">

				<form class="form account-form" method="POST" action="<?php echo base_url(); ?>index.php/blank/p_login">

					<div class="form-group">
						<label for="login-username" class="placeholder-hidden">Username</label>
						<input type="text" name="username" class="form-control" id="login-username" placeholder="Username" tabindex="1">
					</div> <!-- /.form-group -->

					<div class="form-group">
						<label for="login-password" class="placeholder-hidden">Password</label>
						<input type="password" name="password" class="form-control" id="login-password" placeholder="Password" tabindex="2">
					</div> <!-- /.form-group -->


					<div class="form-group clearfix">
						<div class="pull-left">         
							<label class="checkbox-inline">
								<input type="checkbox" class="" value="" tabindex="3">Remember me
							</label>
						</div>
					</div> <!-- /.form-group -->

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">Signin &nbsp; <i class="fa fa-play-circle"></i></button>
				</div> <!-- /.form-group -->

				</form>
			</div> <!-- /.account-body -->
		</div> <!-- /.account-wrapper -->

		<script src="<?php echo base_url(); ?>assets/a/js/libs/jquery-1.10.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/a/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/a/js/libs/bootstrap.min.js"></script>

		<!--[if lt IE 9]>
		<script src="./js/libs/excanvas.compiled.js"></script>
		<![endif]-->
		<!-- App JS -->
		<script src="<?php echo base_url(); ?>assets/a/js/target-admin.js"></script>

		<!-- Plugin JS -->
		<script src="<?php echo base_url(); ?>assets/a/js/target-account.js"></script>

	</body>
</html>
