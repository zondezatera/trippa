<?php
/* Template name: User Add New Package */
acf_form_head();
get_header();
?>
	<div class="container page-content" id="user-add-package">
		<div class="page-header">
			<h1>My Experiences <small>Add New</small></h1>
		</div>
		<div class="row">
			<div class="col-md-9">
				<form action="<?php echo get_permalink();?>" method="post" role="form">
					<div class="form-group">
						<input type="text" name="post_title" class="form-control input-lg" placeholder="My Experience">
					</div>
					<h3>Cover</h3>
					
					<h3>Content</h3>
					<div class="section">
						<div class="row section-row">
							<div class="col-md-12 section-remove-btn-container">
								<a href="#" class="btn btn-danger btn-delete-section pull-right btn-xs">Remove</a>
							</div>
							<div class="col-md-9">
								<div class="form-contron">
									<textarea class="form-control section-content" rows="6"></textarea>
								</div>
							</div>
							<div class="col-md-3">
								<div class="section-thumbnail">
									<a href="#">
										<span class="glyphicon glyphicon-camera"></span><br/>
										<span class="add-photo-text">Add Photo</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-add-section pull-right">Add New Section</button>
						<div class="clearfix"></div>
					</div>
					<hr>
					<h3>Information</h3>
					<div class="panel panel-primary">
						<div class="panel-heading">Other Detail</div>
						<div class="panel-body form-horizontal">
							<div class="form-group">
								<label for="package-price" class="col-md-2 control-label">Price</label>
								<div class="col-md-10">
									<input type="text" name="package-price" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="package-type" class="col-md-2 control-label">Type</label>
								<div class="col-md-10">
									<label class="radio-inline">
										<input type="radio" class="inlineRadioOptions package-type-toggle" name="package-type" value="private"> Private
									</label>
									<label class="radio-inline">
										<input type="radio" class="inlineRadioOptions package-type-toggle" name="package-type" value="group"> Group
									</label>
								</div>
							</div>
							<div class="form-group max-person">
								<label for="package-person" class="col-md-2 control-label">Person</label>
								<div class="col-md-10">
									<input type="text" name="package-person" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Schedule</label>
								<div class="col-md-10 table-responsive">
									<table class="table table-bordered table-condensed table-striped">
										<thead>
											<tr>
												<th width="43%" class="text-center">Start</th>
												<th width="43%" class="text-center">End</th>
												<th width="14%"></th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<td colspan="3" class="text-right">
													<a href="#" class="btn btn-primary btn-add-schedule">Add</a>
												</td>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td>
													<div class="form-group">
														<div class="col-md-12">
																<input type="text" name="start[]" class="form-control">
														</div>
													</div>
												</td>
												<td>
													<div class="form-group">
														<div class="col-md-12">
															<input type="text" name="end[]" class="form-control">
														</div>
													</div>
												</td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</form>
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
	<script>
	jQuery(window).load(function(){
		jQuery(document).on("DOMNodeInserted", ".section-row", function(){
			jQuery(this).find("textarea").keyup(function(e){
				if(e.which == 13){
					jQuery(this).closest(".section-row").clone().insertAfter(jQuery(this).closest(".section-row")).find("textarea").focus();
				}
			});

			jQuery(".btn-delete-section").click(function(e){
				e.preventDefault();
				if(jQuery(".section-row").length > 1){
					jQuery(this).closest(".section-row").remove();
				}
			});
		})
		jQuery(".section-content").keyup(function(e){
			if(e.which == 13){
				jQuery(this).closest(".section-row").clone().insertAfter(jQuery(this).closest(".section-row")).find("textarea").focus();
			}
		});

		jQuery(".btn-delete-section").click(function(e){
			e.preventDefault();
			if(jQuery(".section-row").length > 1){
				jQuery(this).closest(".section-row").remove();
			}
		});

		jQuery(".btn-add-section").click(function(e){
			e.preventDefault();
			jQuery(".section-row:first-child").clone().appendTo(".section");
		});

		jQuery(".package-type-toggle").click(function(e){
			if(jQuery(this).prop("value") == 'group'){
				jQuery(".max-person").fadeIn('fast');
			}else{
				jQuery(".max-person").fadeOut('fast');
			}
		});
	});
	</script>
<?php get_footer(); ?> 