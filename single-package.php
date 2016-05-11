<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post();?> 
	<div class="jumbotron" style="background:url(<?php echo wp_get_attachment_image_src(get_field("cover"), 'full')[0]?>);min-height:325px;color:#fff;background-size: cover; background-position:center center;">
		<div class="container" style="text-align:center">
			<h1><?php the_title(); ?></h1>
			<p>(<?php the_field("location")?>)</p>
			<p><a>with Mark</a></p>
			<div class="">
				<img src="<?php bloginfo("template_url");?>/img/mock/profile.png" class="img-circle guide-img ">	
			</div>
			
		</div>
	</div>

	<!-- Trip information Row -->
	<div class="block-single trip-info" >
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 style="text-align:left">Overview</h3>
					<div class="text-left package-overview"><?php the_field("overview");?></div>
				</div>
				<div class="col-md-5">
					<h3 class="text-left">Your Insider <small><span class="label label-success"><i class="glyphicon glyphicon-ok-sign"></i> Verified</span></small></h3>
					<div class="guide-rating text-left">
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
					</div>
					<div class="skill-list">
						<div class="label label-primary" style="font-size: 12px; margin: 3px 2px; float:left ">English</div>
						<div class="label label-default" style="font-size: 12px;  margin: 3px 2px; float:left ">Biking</div>
						<div class="label label-info" style="font-size: 12px;  margin: 3px 2px; float:left ">Runing</div>
						<div class="label label-warning" style="font-size: 12px;  margin: 3px 2px; float:left ">Writing</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel panel-default guide-bio text-left">
						<div class="panel-body">
							My friends and I started an "I love Thai food" fan page on Facebook back in 2009. That page evolved into a blog and about Thai food and now Thai food tours. I love connecting people with great Thai food experiences! Full profile
						</div>
					</div>
					<button type="button" class="btn btn-success btn-block btn-lg" id="btn-book-schedule" data-target="#bookingdialog" data-toggle="modal">Book now for $<?php the_field("price");?></button>
				</div>
			</div>
		</div>
	</div>

	<!-- Guide information Row -->
	<div class="block-single package-content-section" >
		<div class="container">
		<?php if(have_rows("section")) : while(have_rows("section")) : the_row();?> 
			<div class="row">
				<div class="col-md-8 text-left"><?php the_sub_field("context");?></div>
				<div class="col-md-4"><a href="<?php echo wp_get_attachment_image_src(get_sub_field("photo"), 'full')[0]; ?>" class="image-modal" rel="package-gallery"><?php echo wp_get_attachment_image(get_sub_field('photo'), "medium");?></a></div>
			</div>
		<?php endwhile; endif;?>
			<div class="row package-schedule">
				<div class="col-md-2"></div>
				<div class="col-md-8 text-left">
					<h3>Trip</h3>
					<div class="table-responsive">
						<table class="table table-condensed table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th width="10%"></th>
									<th width="37%" class="text-center">Start</th>
									<th width="37%" class="text-center">End</th>
									<th width="16%"></th>
								</tr>
							</thead>
							<tbody>
		<?php if(have_rows("tour_schedule")) : $i = 1; $trip = array(); while(have_rows("tour_schedule")) : the_row(); ?> 
		<?php 
		$start = get_sub_field("tour_start");
		$end = get_sub_field("tour_end");
		$trip[] = date("F j, Y", strtotime($start))." - ".date("F j, Y", strtotime($end));
		?>
								<tr>
									<td class="text-center"><?php echo $i; ?></td>
									<td class="text-center"><?php echo date("F j, Y", strtotime($start));?></td>
									<td class="text-center"><?php echo date("F j, Y", strtotime($end));?></td>
									<td class="text-center">
										<button type="button" class="btn btn-success btn-sm" id="btn-book-schedule" data-target="#bookingdialog" data-toggle="modal" data-trip="<?php echo$i-1;?>">Book now</button>
									</td>
								</tr>
		<?php $i++; endwhile; endif; ?> 
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
	
	<!-- Image's Guide Row -->
	<!--
	<div class="package-user-gallery">
		<div class="container">
			123
		</div>
	</div>
	-->
	<!-- Review Row [ Facebook Review ] -->
	<div class="block-single" >
		<div>
			<div class="container">
				<h3>Review</h3>
				<div class="row line-review">
					<div class="col-md-1"></div>
					<div class="col-md-2">
						<div>
							<img src="https://dv8ioedqdle5b.cloudfront.net/images/avatar_sample7.jpg?1-77392077289024340213156938901548417643" alt="" class="img-circle guest-info">
							<div style = "margin:5px; font-weight:bolder">Guest 1</div>
						</div>
					</div>
					<div class="col-md-8">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row line-review">
					<div class="col-md-1"></div>
					<div class="col-md-2">
						<div>
							<img src="https://dv8ioedqdle5b.cloudfront.net/images/avatar_sample7.jpg?1-77392077289024340213156938901548417643" alt="" class="img-circle guest-info">
							<div style = "margin:5px; font-weight:bolder">Guest 1</div>
						</div>
					</div>
					<div class="col-md-8">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row line-review">
					<div class="col-md-1"></div>
					<div class="col-md-2">
						<div>
							<img src="https://dv8ioedqdle5b.cloudfront.net/images/avatar_sample7.jpg?1-77392077289024340213156938901548417643" alt="" class="img-circle guest-info">
							<div style = "margin:5px; font-weight:bolder">Guest 1</div>
						</div>
					</div>
					<div class="col-md-8">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		 </div>
	</div>
	<div class="modal fade" id="bookingdialog" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="exampleModalLabel">Booking Management</h4>
				</div>
				<form action="" role="form" class="horizontal">
					<input type="hidden" name="package-id" value="<?php the_ID();?>">
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-2 control-label">Package</label>
							<div class="col-md-10">
								<p class="form-static-control"><?php the_title(); ?></p>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 control-label">Price</label>
							<div class="col-md-10">
								<p class="form-static-control">$<?php the_field("price"); ?></p>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 control-label">Trip</label>
							<div class="col-md-10">
								<select class="form-control" name="order-trip">
								<?php foreach($trip as $key => $value) :?>
									<option value="<?php echo $key;?>"><?php echo $value;?></option>
								<?php endforeach; ?> 
								</select>
							</div>
						</div>
						<?php if (get_field('tour_type') == 'Group Tour') : ?> 
						<div class="form-group row">
							<label class="col-md-2 control-label">Person</label>
							<div class="col-md-10">
								<input type="number" class="form-control" name="order-person">
							</div>
						</div>
						<?php endif;?> 
						<div class="alert alert-success hidden book-success">
							<strong>Your trip has been booked</strong> We will confirm trip with Trippa Host and will notice you soon.
						</div>
						<div class="alert alert-danger hidden book-fail">
							<strong>Error!</strong> Something occurs while processing your order.
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary btn-book-now">Book now</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $pkId = get_the_ID(); endwhile; else :?> 

<?php endif;?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
	jQuery(document).ready(function(){
		jQuery(".image-modal").fancybox();
		jQuery(".btn-book-now").click(function(e){
			e.preventDefault();
			jQuery(this).addClass("disabled");
			jQuery.post(
					"<?php echo admin_url("admin-ajax.php")?>?action=booking",
					{
						pid: <?php echo $pkId; ?>,
						trip: 0
					}
				).done(function(data){
					console.log(data);
					if(data !== false){
						jQuery(".book-success").removeClass("hidden");
					}else{
						jQuery(".book-fail").removeClass("hidden");
					}
				});
		});
	});
	function initialize() {
		var mapOptions = {
			zoom: 4,
			center: new google.maps.LatLng(-25.363882, 131.044922),
			scrollwheel:false
		};

		var map = new google.maps.Map(document.getElementById('map-canvas'),
				mapOptions);

		var marker = new google.maps.Marker({
			position: map.getCenter(),
			map: map,
			title: 'Click to zoom'
		});

		google.maps.event.addListener(map, 'center_changed', function() {
			// 3 seconds after the center of the map has changed, pan back to the
			// marker.
			window.setTimeout(function() {
				map.panTo(marker.getPosition());
			}, 3000);
		});

		google.maps.event.addListener(marker, 'click', function() {
			map.setZoom(8);
			map.setCenter(marker.getPosition());
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php get_footer(); ?>
