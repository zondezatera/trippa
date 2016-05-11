<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="">

    	<title>Trippa</title>

		<!-- Bootstrap core CSS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fancybox/helpers/jquery.fancybox-media.js"></script>
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
	<nav class="navbar navbar-fixed-top" role="navigation">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo("template_url");?>/img/logo.png" alt="" height="30"></a></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<?php render_user_nav(); ?>
			<!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
    <div class="nav_bottom"></div>
