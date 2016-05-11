<?php
/* Template name: User Booking History */
get_header();
?>
	<div class="container page-content" id="user-dashboard">
		<div class="page-header">
			<h1>My Bookings</small></h1>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-condensed table-striped">
						<thead>
							<tr>
								<th width="15%" class="text-center">Order ID</th>
								<th class="text-center">Package name</th>
								<th width="15%" class="text-center">Status</th>
								<th width="10%"></th>
							</tr>
						</thead>
						<tbody>
<?php
	$args = array(
			'post_type' => 'booking',
			'nopaging' => true,
			'author' => get_current_user_id()
		);

	$booking = new WP_Query($args);
	if($booking->have_posts() && get_current_user_id() != 0) : while($booking->have_posts()) : $booking->the_post();
		if(is_object(get_field("tour_package"))){
			$pkName = get_field("tour_package")->post_title;
		}else{
			$pkName = get_post(get_field("tour_package"))->post_title;
		}
?>
							<tr>
								<td class="text-center"><?php the_ID(); ?></td>
								<td><?php echo $pkName; ?></td>
								<td class="text-center"><?php the_field("status"); ?></td>
								<td class="text-center"><a href="<?php the_permalink(); ?>">View</a></td>
							</tr>
<?php endwhile; else : ?>
							<tr>
								<td colspan="4" class="text-center">No Booking Found</td>
							</tr>
<?php endif;?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo get_link_from_template("page-templates/user-dashboard.php")[0]; ?>">Dashboard</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-profile.php")[0]; ?>">My Profile</a></li>
					<li class="active"><a href="<?php echo get_link_from_template("page-templates/user-booking.php")[0]; ?>">My Bookings</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-package.php")[0]; ?>">My Experiences</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php get_footer(); ?>