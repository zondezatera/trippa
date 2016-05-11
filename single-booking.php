<?php
get_header();
?>
	<div class="container page-content" id="user-dashboard">
		<div class="page-header">
			<h1>My Bookings</small></h1>
		</div>
		<div class="row">
			<div class="col-md-9">
				<p>
					<a href="<?php echo get_link_from_template("page-templates/user-booking.php")[0]; ?>" class="btn btn-default">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back
					</a>
					<a href="#" class="btn btn-primary disabled pull-right">
						<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Pay
					</a> 
				</p>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
	<?php
		if(is_object(get_field("tour_package"))){
			$pkName = get_field("tour_package")->post_title;
			$pkId = get_field("tour_package")->ID;
		}else{
			$pkName = get_post(get_field("tour_package"))->post_title;
			$pkId = get_post(get_field("tour_package"))->ID;
		}
	?>
				<div class="booking-detail-container table-responsive">
					<table class="table table-condensed table-bordered">
						<tbody>
							<tr>
								<td>Order ID</td>
								<td><?php the_ID(); ?></td>
							</tr>
							<tr>
								<td>Traveler</td>
								<td><?php the_field("full_name");?></td>
							</tr>
							<tr>
								<td width="30%">Package</td>
								<td><?php echo $pkName; ?> (<a href="<?php echo get_permalink($pkId); ?>">Detail</a>)</td>
							</tr>
							<tr>
								<td>Order Status</td>
								<td><?php the_field("status");?></td>
							</tr>
							<tr>
								<td>Period</td>
								<td><?php echo date("F j, Y", strtotime(get_field("tour_start")));?> - <?php echo date("F j, Y", strtotime(get_field("tour_end")));?></td>
							</tr>
						</tbody>
					</table>
				</div>
<?php endwhile; else: ?> 

<?php endif; ?> 
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