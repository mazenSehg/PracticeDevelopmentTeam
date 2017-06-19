<?php
session_start();
//Load all functions
require_once('load.php');

login_check();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo get_site_name();?></title>
		<?php echo $Header->head();?>
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php echo $Header->header();?>
				
				<!-- page content -->
				<div class="right_col" role="main">
					<?php if(get_current_user_role() == 'nurse'): ?>
					
										<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h1 class="text-center"><?php _e('User profile progress'); ?></h1>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    40%
  </div>
</div>
									
									
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h1 class="text-center"><?php _e('Available Bookings'); ?></h1>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<?php echo $Booking->view__nurse__calendar__page(); ?>
								</div>
							</div>
						</div>
					</div>
					<?php else: ?>
					<!-- top tiles -->
					<div class="row top_tiles">
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tile-stats">
								<div class="icon"> <i class="fa fa-users"></i> </div>
								<div class="count"><?php echo count( get_tabledata(TBL_USERS,false));?></div>
								<h3><?php _e('Total Users');?></h3>
							</div>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tile-stats">
								<div class="icon"> <i class="fa fa-exclamation-circle"> </i> </div>
								<div class="count"><?php echo count( get_tabledata(TBL_COURSES,false));?></div>
								<h3><?php _e('Total Courses');?></h3>
							</div>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tile-stats">
								<div class="icon"> <i class="fa fa-users"></i> </div>
								<div class="count"><?php echo count( get_tabledata(TBL_USERS,false));?></div>
								<h3><?php _e('Total Users');?></h3>
							</div>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tile-stats">
								<div class="icon"> <i class="fa fa-exclamation-circle"> </i> </div>
								<div class="count"><?php echo count( get_tabledata(TBL_COURSES,false));?></div>
								<h3><?php _e('Total Courses');?></h3>
							</div>
						</div>
					</div>
					<!-- /top tiles -->
					<?php endif; ?>
				</div>
				<!-- /page content -->
				<!-- footer content -->
				<?php echo $Footer->footer();?>
				<!-- /footer content -->
			</div>
		</div>
	</body>
</html>