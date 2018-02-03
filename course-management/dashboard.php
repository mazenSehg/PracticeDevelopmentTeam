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
								<div class="count"><?php echo count( get_tabledata(TBL_USERS,false,array('user_role'=>"course_admin")));?></div>
								<h3><?php _e('Total Trainers');?></h3>
							</div>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tile-stats">
								<div class="icon"> <i class="fa fa-users"></i> </div>
								<div class="count"><?php echo count( get_tabledata(TBL_USERS,false,array('user_role'=>"trainee")));?></div>
								<h3><?php _e('Total Trainees');?></h3>
							</div>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tile-stats">
								<div class="icon"> <i class="fa fa-exclamation-circle"> </i> </div>
								<div class="count"><?php echo count( get_tabledata(TBL_BOOKINGS,false));?></div>
								<h3><?php _e('Total Courses');?></h3>
							</div>
						</div>

						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="tile-stats">
								<div class="icon"> <i class="fa fa-exclamation-circle"> </i> </div>
								<div class="count"><?php echo count( get_tabledata(TBL_COHORTS,false));?></div>
								<h3><?php _e('Total Cohorts');?></h3>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 col-sm-10 col-xs-12">
							<div class="x_panel tile fixed_height_320">
								<div class="x_title">
									<h2>Pending Requests</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="dashboard-widget-content">
										<ul class="quick-list">
											<li> <i class="fa fa-calendar-o"></i> <a href="<?php echo site_url();?>/pending-bookings/"><?php echo count( get_tabledata(TBL_PENDING_BOOKINGS,false));?> Course Booking Requests</a> </li>
										</ul>
											
									</div>
								</div>
							</div>
							<div class="x_panel tile fixed_height_320">
								<div class="x_title">
									<h2>Quick Links</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="dashboard-widget-content">
										<ul class="quick-list">

											<li> <i class="fa fa-calendar-o"></i> <a href="<?php echo site_url();?>/general-setting/">Settings</a> </li>

											<li> <i class="fa fa-users"></i> <a href="<?php echo site_url();?>/add-new-user/">Add User</a> </li>

											<li> <i class="fa fa-bar-chart"></i> <a href="<?php echo site_url();?>/add-new-centre/">Add Centre</a> </li>

											<li> <i class="fa fa-line-chart"></i> <a href="<?php echo site_url();?>/add-new-region/">Add Region</a> </li>

											<li> <i class="fa fa-bar-chart"></i> <a href="<?php echo site_url();?>/add-new-equipment/">Add Equipment</a> </li>

											<li> <i class="fa fa-line-chart"></i> <a href="<?php echo site_url();?>/add-new-equipment-type/">Add Equipment Type</a> </li>

											<li> <i class="fa fa-area-chart"></i> <a href="<?php echo site_url();?>/add-new-service-agent/">Add Service Agent</a> </li>

										</ul>
										<ul class="quick-list">

											<li> <i class="fa fa-calendar-o"></i> <a href="<?php echo site_url();?>/add-new-manufacturer/">Add Manufacturer</a> </li>

											<li> <i class="fa fa-bars"></i> <a href="<?php echo site_url();?>/add-new-model/">Add Model</a> </li>
												
											<li> <i class="fa fa-bar-chart"></i> <a href="<?php echo site_url();?>/add-new-supplier/">Add Supplier</a> </li>
											
											<li> <i class="fa fa-line-chart"></i> <a href="<?php echo site_url();?>/add-new-fault/">Add Fault</a> </li>

											<li> <i class="fa fa-bar-chart"></i> <a href="<?php echo site_url();?>/add-new-fault-type/">Add Fault Type</a> </li>

											<li> <i class="fa fa-sign-out"></i> <a href="<?php echo site_url();?>/logout/" class="link-logout">Log Out</a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
							
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="x_panel fixed_height_300">
								<div class="x_title">
									<h2>Recent Activities</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="expand-link"><i class="fa fa-chevron-down"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<?php
									$notifications__query = " ORDER BY `ID` DESC LIMIT 0, 6";
									$notifications__args = array('user_id' => get_current_user_id(), 'hide' => 0 , 'read' => 0);
									$notifications__result = get_tabledata(TBL_NOTIFICATIONS,false,$notifications__args,$notifications__query);
									?>
									<div class="dashboard-widget-content">
										<ul class="list-unstyled timeline widget">
											<?php if($notifications__result): foreach($notifications__result as $notifications): ?>
											<li>
												<div class="block">
													<div class="block_content">
														<h2 class="title">
															<a><?php _e($notifications->title);?></a>
														</h2>
														<div class="byline"> <span><?php echo date('M d, Y h:i a',strtotime($notifications->date));?></span> </div>
														<p class="excerpt">
															<?php echo strip_tags(stripslashes(htmlspecialchars_decode($notifications->notification)));?>
														</p>
													</div>
												</div>
											</li>
											<?php endforeach;endif; ?>
										</ul>
									</div>
								</div>
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