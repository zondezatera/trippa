<?php 
/* Template name: Home */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trippa</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/typeahead.jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/app.js" type="text/javascript" charset="utf-8" async defer></script>

		<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
		<style>
			html{height: 100%}
			body{padding:0px; margin:0px; height: 100%}
			#welcome {
				height:97%; 
				background-color: #000;
				background-image:  url("<?php bloginfo("template_url");?>/img/mock/welcome<?php echo rand(1,2);?>.png");
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center;
			}

			#welcome-nav {
				border-radius: 0px;
				background-color:rgba(0,0,0,0.0);
				border:0px;
				padding:20px 0px;
				color:#fff;
				position: relative;
				box-shadow: none;
			}

			#welcome-nav a {color:#fff;}
			#welcome-nav a:hover {color:#a8a8a8;}
			#welcome-search {max-width: 800px; margin:5% auto 0px auto;}
			#welcome-search h1 {text-align: center; color:#fff; text-transform: uppercase; text-shadow: #969696 2px 0px 3px; margin-bottom: 60px; font-size: 48px;}
			#welcome-search #searchsubmit {margin-left: 0px;}
			.inputs{
				margin: 20px 20px 20px 20px;
				padding: 20px 0 20px 0;
				background-color: rgba(245, 243, 235, 0.85);
			}

			#testimonial {
				padding-top: 50px;
				padding-bottom: 30px;
				border-bottom: 1px solid #e5e4e1;
			}
			#discover{
				background-color: #f4f3ee;
			}
			#discover .home-package-item:hover {text-decoration: none;}
			/*#discover .home-package-item:hover .thumbnail {box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.095);}*/
		</style>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top" id="main-nav" role="navigation" style="display:none;">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo("template_url");?>/img/logo.png" alt="" height="30"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php render_user_nav(); ?>
				<!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="welcome">
			<nav class="navbar navbar-default" id="welcome-nav" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo("template_url");?>/img/logo-white.png" alt=""></a>
					</div>
					<?php render_user_nav(); ?>
				</div> 
			</nav>
			<div id="welcome-search">
				<h1>Experience Creative Traveling!</h1>
				<form action="" id="search_form">
					<input type="hidden" name="post_type" value="package" />
					<div class="inputs row">
						<div class="col-md-5">
							<div id="search_word">
								<input type="text" class="form-control input-lg" name="whereu" id="s" placeholder="Where do you want to go?">
							</div>
						</div>
						<div class="col-md-5">
							<div >
								<input type="text" class="form-control input-lg" name="s" id="s" placeholder="What do you want to do?">
							</div>
						</div>
						<div class="col-md-2">
							<button class="btn btn-small btn-success btn-block btn-lg" id="searchsubmit" type="submit">
								<span class="glyphicon glyphicon-search"></i>
							</button>
						</div>
						<div class="col-md-12">
							<!-- <p class="text-center" id="front-directory"><a href="<?php echo get_post_type_archive_link("package"); ?>">Still have no idea? Visit our directory!</a></p> -->
							<p class="text-center" id="front-directory" style="margin-top:15px;"><a href="#discover">Still have no idea? Visit our directory!</a></p>
						</div>
					</div>
					<input type="hidden" name="post_type" value="package" />
				</form>
			</div>
		</div>
		<div id="testimonial">
			<div class="container">
				<div class="col-sm-6 col-md-6 intro-block">
					<img class="img-circle intro" src="<?php echo get_template_directory_uri(); ?>/img/mark.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<p class="intro intro-article clearfix">
					This website is really cool and I really like it. When I travel next time, I definitely use and have a awesome experience. I guess this service is the number one idea in Startup Weekend in Bangkok. I hope they will make it.
					</p>
					<p class="intro-name">Mark Zackerburg</p>
				</div>

				<div class="col-sm-6 col-md-6 intro-block">
					<img class="img-circle intro" src="<?php echo get_template_directory_uri(); ?>/img/morgan.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<p class="intro intro-article">
						Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
					</p>
					<p class="intro-name">Morgan Freeman</p>
				</div>

			</div>
		</div>
		<div id="discover">
			<div class="container">
			<h4 class="index_middle_title">Book Your Creative Experience</h4>

			<div class="row">

			<?php $loop = new WP_Query(array("post_type" => "package", "posts_per_page" => 6 ));
			if($loop->have_posts()) :
			while($loop->have_posts()): $loop->the_post(); ?>

			<div class="col-sm-6 col-md-4">
				<a href="<?php the_permalink(); ?>" class="home-package-item">
			    	<div class="thumbnail">
			    		<?php the_post_thumbnail("home-package-item"); ?>
						<div class="caption">
			            	<h3 class="tour_title"><?php the_title(); ?></h3>
			            	<p class="tour_content">
					            <span class="rating">
									<input type="radio" class="rating-input"id="rating-input-1-5" name="rating-input-1"/>
									<label for="rating-input-1-5" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1"/>
									<label for="rating-input-1-4" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1"/>
									<label for="rating-input-1-3" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1"/>
									<label for="rating-input-1-2" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
									<label for="rating-input-1-1" class="rating-star"></label>
								</span>
			            	</p>
			            	<div class="label_bottom">
					    		<?php 
					    			if (get_field('tour_type') == 'Group Tour'){
					    				echo "<span class='tour_group label label-warning'>";
					    				echo 'Group';
					    				echo "</span>";
					    			} else{
					    				echo "<span class='tour_private label label-primary'>";
					    				echo 'Private';
					    				echo "</span>";
					    			}
					    		?>
					    		<?php if(get_field('price') != ""){ ?>
						    		<span class="tour_price"><?php echo get_field('price'); ?> $</span>
								<?php } ?>
			            	</div>
			          	</div>
			        </div>
			    </a>
		    </div>

			<?php endwhile; ?>
			
			<?php else :?>
				no post found
			<?php endif; ?>
			</div>

			</div>
		</div>
		<div class="container">
			<hr>
			<footer>
				<p>&copy; Trippa</p>
			</footer>
		</div>
		<script>
			jQuery("#welcome").stellar();
			jQuery(window).load(function(){
				jQuery(window).scroll(function(){
					if(jQuery(document).scrollTop() > 100){
						jQuery("#main-nav").fadeIn('fast');
					}else{
						jQuery("#main-nav").fadeOut('fast');
					}
				});
			});
		</script>
	</body>
</html>