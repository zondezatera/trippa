<?php
/* Template name: User Profile */
get_header();
?>
	<div class="container page-content" id="user-dashboard">
		<div class="page-header">
			<h1>My Profiles</small></h1>
		</div>
		<div class="row">
			<div class="col-md-9" id="user-profile-form">
				<form action="<?php echo get_permalink(); ?>" method="post" class="form-horizontal" role="form">
					<h3>Information</h3>
					<div class="form-group">
						<label for="firstname" class="col-md-2 control-label">First name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="firstname" placeholder="John">
						</div>
					</div>
					<div class="form-group">
						<label for="lastname" class="col-md-2 control-label">Last name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="lastname" placeholder="Smith">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-md-2 control-label">Email</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="email" placeholder="awesome@trappa.co">
						</div>
					</div>
					<div class="form-group">
						<label for="bio" class="col-md-2 control-label">Bio</label>
						<div class="col-md-10">
							<textarea name="bio" rows="3" class="form-control"></textarea>
						</div>
					</div>
					<hr>
					<h3>Billing Address</h3>
					<div class="form-group">
						<label for="billing-address-1" class="col-md-2 control-label">Address 1</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="billing-address-1">
						</div>
					</div>
					<div class="form-group">
						<label for="billing-address-2" class="col-md-2 control-label">Address 2</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="billing-address-2">
						</div>
					</div>
					<div class="form-group">
						<label for="billing-city" class="col-md-2 control-label">City</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="billing-city">
						</div>
					</div>
					<div class="form-group">
						<label for="billing-state" class="col-md-2 control-label">State</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="billing-state">
						</div>
					</div>
					<div class="form-group">
						<label for="billing-zip" class="col-md-2 control-label">Zip</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="billing-zip">
						</div>
					</div>
					<div class="form-group">
						<label for="billing-country" class="col-md-2 control-label">Country</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="billing-country">
						</div>
					</div>
					<hr>
					<div class="text-center">
						<input type="submit" class="btn btn-primary" name="submit" value="Save">
						<a href="#"class="btn btn-default">Cancel</a>
					</div>
				</form>
			</div>
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo get_link_from_template("page-templates/user-dashboard.php")[0]; ?>">Dashboard</a></li>
					<li class="active"><a href="<?php echo get_link_from_template("page-templates/user-profile.php")[0]; ?>">My Profile</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-booking.php")[0]; ?>">My Bookings</a></li>
					<li><a href="<?php echo get_link_from_template("page-templates/user-package.php")[0]; ?>">My Experiences</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php get_footer(); ?>