<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
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

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/js/plugins/morris/morris.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/js/plugins/icheck/skins/minimal/blue.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/js/plugins/select2/select2.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/js/plugins/fullcalendar/fullcalendar.css">

		<!-- App CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/css/target-admin.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/a/css/custom.css">


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-cogs"></i>
					</button>
					<a class="navbar-brand navbar-brand-image" href="<?=base_url()?>">
						<img src="<?php echo base_url(); ?>assets/a/img/logo.png" alt="Site Logo">
					</a>
				</div> <!-- /.navbar-header -->

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">      
						<li class="dropdown navbar-profile">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
							<?php echo $session['user_nama'];?>
							<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu" role="menu">

								<li>
									<a href="<?php echo base_url(); ?>blank/session_off" onclick="return confirm('yakin mau keluar ?');" title="logout">
									<i class="fa fa-sign-out fa-fw"></i> 
									Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div> <!--/.navbar-collapse -->
			</div> <!-- /.container -->
		</div> <!-- /.navbar -->


		<div class="mainbar">

			<div class="container">
				<button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
				  <i class="fa fa-bars"></i>
				</button>

				<div class="mainbar-collapse collapse">

					<ul class="nav navbar-nav mainbar-nav">

						<li  <?php $id=$this->uri-> segment(2); if ($id=="") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank">
								<i class="fa fa-dashboard"></i>
								Dashboard
							</a>
						</li>

						<li class="dropdown <?php $id=$this->uri-> segment(2); if ($id=="posts" || $id=="categories" || $id=="new_posts"|| $id=="editposts") { echo 'active'; } ?>">
							<a href="#Posts" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-newspaper-o"></i>
								News
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">   
								<li <?php $id=$this->uri-> segment(2); if ($id=="new_posts") { ?> class="active" <?php } ?>>
								<a href="<?php echo base_url(); ?>blank/new_posts"><i class="fa fa-plus nav-icon"></i> Add News</a></li>
								<li <?php $id=$this->uri-> segment(2); if ($id=="posts") { ?> class="active" <?php } ?>>
								<a href="<?php echo base_url(); ?>blank/posts"><i class="fa fa-newspaper-o nav-icon"></i> All News</a></li>
								<li <?php $id=$this->uri-> segment(2); if ($id=="category") { ?> class="active" <?php } ?>>
								<a href="<?php echo base_url(); ?>blank/category"><i class="fa fa-folder-open nav-icon"></i> Category</a></li>
							</ul>
						</li>

						<li <?php $id=$this->uri-> segment(2); if ($id=="news") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank/testimoni">
								<i class="fa fa-comments-o"></i>
								Testimoni
							</a>
						</li>

						<li <?php $id=$this->uri-> segment(2); if ($id=="event") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank/event">
								<i class="fa fa-calendar"></i> 
								Event
							</a>
						</li>
						
						
						
						<li <?php $id=$this->uri-> segment(2); if ($id=="page") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank/page">
								<i class="fa fa-copy"></i> 
								Pages
							</a>
						</li>
						
						<li <?php $id=$this->uri-> segment(2); if ($id=="download") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank/download">        		
								<i class="fa fa-cloud-download"></i>
								Download
							</a>
						</li>
					   
						
						<li class="dropdown <?php $id=$this->uri-> segment(2); if ($id=="foto" || $id=="video" || $id=="album"|| $id=="editalbum") { echo 'active'; } ?>">
							<a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
								<i class="fa fa-camera-retro"></i>
								Gallery
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu">   
								<li <?php $id=$this->uri-> segment(2); if ($id=="photo") { ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>blank/photo"><i class="fa fa-picture-o nav-icon"></i> Photo</a></li>
								<li <?php $id=$this->uri-> segment(2); if ($id=="video") { ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>blank/video"><i class="fa fa-film nav-icon"></i> Video</a></li>
								<li <?php $id=$this->uri-> segment(2); if ($id=="album" || $id=="editalbum") { ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>blank/album"><i class="fa fa-folder-open nav-icon"></i> Album</a></li>
							</ul>
						</li>

						<li <?php $id=$this->uri-> segment(2); if ($id=="slide") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank/slide">        		
								<i class="fa fa-image"></i>
								Slide Home
							</a>
						</li>

						<li <?php $id=$this->uri-> segment(2); if ($id=="menu") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank/menu">
								<i class="fa fa-bars"></i> 
								Menu
							</a>
						</li>

						<li <?php $id=$this->uri-> segment(2); if ($id=="setting") { ?> class="active" <?php } ?>>
							<a href="<?php echo base_url(); ?>blank/setting">
								<i class="fa fa-gear"></i> 
								Setting
							</a>
						</li>
						
					</ul>
			

				</div> <!-- /.navbar-collapse -->   

			</div> <!-- /.container --> 

		</div> <!-- /.mainbar -->
