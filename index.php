<?php get_header(); ?>

	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
			<?php if(have_posts()) : while(have_posts()): the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?> 
			<?php endwhile; else : ?> 
					<h3>404 Not Found</h3>
			<?php endif; ?> 
				</div>
			</div>

		</div>
</div>


 <?php
    
 ?>
<?php get_footer(); ?>