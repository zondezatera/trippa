<?php get_header(); ?>
	<div class="container page-content" id="search-result">
		<div class="page-header">
			<h1>Search Result <small><?php echo $_GET['s'];?></small></h1>
		</div>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="col-sm-6 col-md-4">
		<a href="<?php the_permalink(); ?>" class="home-package-item">
	    	<div class="thumbnail">
	    		<?php the_post_thumbnail("home-package-item"); ?>
				<div class="caption">
	            	<h3 class="tour_title"><?php the_title(); ?></h3>
	            	<p class="tour_content">
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
    
<?php endwhile; else : ?>
		
<?php endif; ?>
	</div>
<?php get_footer(); ?>