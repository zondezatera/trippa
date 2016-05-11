<?php
/* Template name: User Dashboard */
get_header();
?>
	<div class="container page-content" id="user-dashboard">
		<div class="page-header">
			<h1>Dashboard</small></h1>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-3">User Avatar</div>
					<div class="col-md-9">
						<p>Jirayu Yingthawornsuk</p>
						<p>Traveler</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3>Recents</h3>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo get_link_from_template("page-templates/user-dashboard.php")[0]; ?>">Dashboard</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-profile.php")[0]; ?>">My Profile</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-booking.php")[0]; ?>">My Bookings</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-package.php")[0]; ?>">My Experience</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php get_footer(); ?>