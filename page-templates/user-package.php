<?php
/* Template name: User Selling Packages */
get_header();
?>
	<div class="container page-content" id="user-dashboard">
		<div class="page-header">
			<h1>My Experiences <small><a href="<?php echo get_link_from_template("page-templates/user-addpackage.php")[0]; ?>" class="btn btn-primary btn-xs">Add New Experience</a></small></h1>
		</div>
		<div class="row">
			<div class="col-md-9">

			</div>
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo get_link_from_template("page-templates/user-dashboard.php")[0]; ?>">Dashboard</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-profile.php")[0]; ?>">My Profile</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-booking.php")[0]; ?>">My Bookings</a></li>
					<li class="active"><a href="<?php echo get_link_from_template("page-templates/user-package.php")[0]; ?>">My Experiences</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php get_footer(); ?>