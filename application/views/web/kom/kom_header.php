<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$title?><?php echo $setting[0]['web_title']; ?></title>
    	        <meta name="description" content="<?php echo $setting[0]['web_description']; ?>" />
    	        <meta name="keywords" content="<?php echo $setting[0]['web_keyword']; ?>" />
                <link href="http://sdnsidoharjo1lamongan.sch.id/assets/images/favicon.png" rel="shortcut icon" />
		<!-- Bootstrap -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome-4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fancybox/jquery.fancybox.css" media="screen"/>
    	<link type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $setting[0]['google_seo']; ?>', 'auto');
  ga('send', 'pageview');

</script>
		<script type="text/javascript">
        	$(function(){
            		$('.box').jScrollPane();
        	});
    		</script>
		<style type="text/css">
		<?php echo $setting[0]['custom_css']; ?>
		</style>
	</head>
	<body>

		<div class="blog-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<img class="logo img-responsive" src="<?php echo base_url();?>assets/images/logo.png" />
					</div>
					<div class="col-sm-4"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default navbar-static-top">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
									<?php if (!isset($data_menu)){  
									echo "error!!!";	
									}else{  
									foreach ($data_menu as $row) {
									?>
									<li><a href="<?=$row['menu_link']?>"> <?=$row['menu_title']?> </a></li>
									<?php
									}
									}?>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>

			<div class="container">
				<div class="row">
	                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	                    <!-- Wrapper for slides -->
	                    <div class="carousel-inner" role="listbox">
	                        <?php if (!isset($data_slide_1)){  
	                        echo "";    
	                        }else{ 
	                            foreach ($data_slide_1 as $row) {
	                            ?>

	                            <div class="item active">
	                                <img src="<?=$row['slide_image']?>" alt="...">
	                                <div class="carousel-caption">
	                                <?=$row['slide_title']?>
	                                </div>
	                            </div>
	                            <?php  
	                            }  
	                        }?>

	                        <?php if (!isset($data_slide_2)){  
	                        echo "";    
	                        }else{ 
	                            foreach ($data_slide_2 as $row) {
	                            ?>

	                            <div class="item">
	                                <img src="<?=$row['slide_image']?>" alt="...">
	                                <div class="carousel-caption">
	                                <?=$row['slide_title']?>
	                                </div>
	                            </div>
	                            <?php  
	                            }  
	                        }?>
	                    </div>
	                </div>
	            </div>
            </div>
		</div>

		<div class="container blog-masthead">
			<div class="row" style="margin-top:15px;">

		