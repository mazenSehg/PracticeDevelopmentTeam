<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Header') ):

	class Header{
		
		private $database;
		private $profile;
		
		public function __construct(){
			global $db,$Profile;
			$this->database = $db;
			$this->profile = $Profile;
		}

		public function head(){
			ob_start();
			?>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<!-- Meta, title, CSS, favicons, etc. -->
			<meta charset="utf-8"/>
			<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>

			<!-- Bootstrap -->
			<link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css' />
			<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'/>
			<link href="<?php echo CSS_URL;?>bootstrap.min.css" rel="stylesheet"/>
			<!-- jQuery ui-->
			<link href="<?php echo CSS_URL;?>jquery-ui.css" rel="stylesheet"/>
			<!-- Font Awesome -->
			<link href="<?php echo CSS_URL;?>font-awesome.min.css" rel="stylesheet"/>
			<!-- iCheck -->
			<link href="<?php echo CSS_URL;?>green.css" rel="stylesheet"/>
			<!-- bootstrap-progressbar -->
			<link href="<?php echo CSS_URL;?>bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"/>
			<!-- jVectorMap -->
			<link href="<?php echo CSS_URL;?>jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>dataTables.bootstrap.min.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>buttons.bootstrap.min.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>fixedHeader.bootstrap.min.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>responsive.bootstrap.min.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>scroller.bootstrap.min.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>prettify.min.css" rel="stylesheet"/>
			<!-- Select2 -->
			<link href="<?php echo CSS_URL;?>select2.min.css" rel="stylesheet"/>
			<!-- Switchery -->
			<link href="<?php echo CSS_URL;?>switchery.min.css" rel="stylesheet"/>
			<!-- starrr -->
			<link href="<?php echo CSS_URL;?>starrr.css" rel="stylesheet"/>
			<!-- P Notify -->
			<link href="<?php echo CSS_URL;?>pnotify.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>pnotify.buttons.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>pnotify.nonblock.css" rel="stylesheet"/>
			<!--Full Calendar-->
			<link href="<?php echo CSS_URL;?>fullcalendar.min.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>fullcalendar.print.css" rel="stylesheet" media="print"/>
			<!-- Custom Theme Style -->
			<link href="<?php echo CSS_URL;?>custom.css" rel="stylesheet"/>
			<link href="<?php echo CSS_URL;?>styles.css" rel="stylesheet"/>

			<script>
				var site_url = '<?php echo site_url();?>';
				var ajax_url = '<?php echo PROCESS_URL;?>';
			</script>
			<?php echo $this->scripts(); ?>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function scripts(){
			ob_start();
			?>
			<!-- jQuery -->
			<script src="<?php echo JS_URL;?>jquery.min.js"></script>
			<!-- jQuery -->
			<script src="<?php echo JS_URL;?>jquery-ui.js"></script>
			<!-- canvas dot -->
			<script src="<?php echo JS_URL;?>canvasdots.js"></script>
			<!-- Bootstrap -->
			<script src="<?php echo JS_URL;?>bootstrap.min.js"></script>
			<!-- FastClick -->
			<script src="<?php echo JS_URL;?>fastclick.js"></script>
			<!-- NProgress -->
			<script src="<?php echo JS_URL;?>nprogress.js"></script>
			<!-- morris.js -->
			<script src="<?php echo JS_URL;?>raphael.min.js"></script>
			<script src="<?php echo JS_URL;?>morris.min.js"></script>
			<!-- Chart.js -->
			<script src="<?php echo JS_URL;?>Chart.min.js"></script>
			<!-- gauge.js -->
			<script src="<?php echo JS_URL;?>gauge.min.js"></script>
			<!-- bootstrap-progressbar -->
			<script src="<?php echo JS_URL;?>bootstrap-progressbar.min.js"></script>
			<!-- iCheck -->
			<script src="<?php echo JS_URL;?>icheck.min.js"></script>
			<!-- Skycons -->
			<script src="<?php echo JS_URL;?>skycons.js"></script>
			<!-- Flot -->
			<script src="<?php echo JS_URL;?>jquery.flot.js"></script>
			<script src="<?php echo JS_URL;?>jquery.flot.pie.js"></script>
			<script src="<?php echo JS_URL;?>jquery.flot.time.js"></script>
			<script src="<?php echo JS_URL;?>jquery.flot.stack.js"></script>
			<script src="<?php echo JS_URL;?>jquery.flot.resize.js"></script>
			<!-- Flot plugins -->
			<script src="<?php echo JS_URL;?>jquery.flot.orderBars.js"></script>
			<script src="<?php echo JS_URL;?>date.js"></script>
			<script src="<?php echo JS_URL;?>jquery.flot.spline.js"></script>
			<script src="<?php echo JS_URL;?>curvedLines.js"></script>
			<!-- jVectorMap -->
			<script src="<?php echo JS_URL;?>jquery-jvectormap-2.0.3.min.js"></script>
			<!-- bootstrap-daterangepicker -->
			<script src="<?php echo JS_URL;?>moment.min.js"></script>
			<script src="<?php echo JS_URL;?>fullcalendar.min.js"></script>
			<script src="<?php echo JS_URL;?>daterangepicker.js"></script>
			<!-- datatables -->
			<script src="<?php echo JS_URL;?>jquery.dataTables.min.js"></script>
			<script src="<?php echo JS_URL;?>dataTables.bootstrap.min.js"></script>
			<script src="<?php echo JS_URL;?>dataTables.buttons.min.js"></script>
			<script src="<?php echo JS_URL;?>buttons.bootstrap.min.js"></script>
			<script src="<?php echo JS_URL;?>buttons.flash.min.js"></script>
			<script src="<?php echo JS_URL;?>buttons.html5.min.js"></script>
			<script src="<?php echo JS_URL;?>buttons.print.min.js"></script>
			<script src="<?php echo JS_URL;?>dataTables.fixedHeader.min.js"></script>
			<script src="<?php echo JS_URL;?>dataTables.keyTable.min.js"></script>
			<script src="<?php echo JS_URL;?>dataTables.responsive.min.js"></script>
			<script src="<?php echo JS_URL;?>responsive.bootstrap.js"></script>
			<script src="<?php echo JS_URL;?>datatables.scroller.min.js"></script>
			<script src="<?php echo JS_URL;?>jszip.min.js"></script>
			<script src="<?php echo JS_URL;?>pdfmake.min.js"></script>
			<script src="<?php echo JS_URL;?>vfs_fonts.js"></script>
			<script src="<?php echo JS_URL;?>bootstrap-wysiwyg.min.js"></script>
			<script src="<?php echo JS_URL;?>jquery.hotkeys.js"></script>
			<script src="<?php echo JS_URL;?>prettify.js"></script>
			<!-- jQuery Tags Input -->
			<script src="<?php echo JS_URL;?>jquery.tagsinput.js"></script>
			<!-- Switchery -->
			<script src="<?php echo JS_URL;?>switchery.min.js"></script>
			<!-- Select2 -->
			<script src="<?php echo JS_URL;?>select2.full.min.js"></script>
			<!-- Parsley -->
			<script src="<?php echo JS_URL;?>parsley.min.js"></script>
			<!-- Autosize -->
			<script src="<?php echo JS_URL;?>autosize.min.js"></script>
			<!-- jQuery autocomplete -->
			<script src="<?php echo JS_URL;?>jquery.autocomplete.min.js"></script>
			<!-- starrr -->
			<script src="<?php echo JS_URL;?>starrr.js"></script>
			<!-- p notify -->
			<script src="<?php echo JS_URL;?>pnotify.js">
			</script>
			<script src="<?php echo JS_URL;?>pnotify.buttons.js"></script>
			<script src="<?php echo JS_URL;?>pnotify.nonblock.js"></script>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function header(){
			ob_start();
			echo $this->sidebar();
			echo $this->top_bar();
			$content = ob_get_clean();
			return $content;
		}

		public function sidebar(){
			ob_start();
			?>
			<!--Sidebar start-->
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?php the_permalink('dashboard');?>" class="site_title">
							<i class="fa fa-ravelry"></i>
							<span><?php echo get_site_name();?></span>
						</a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="<?php echo get_current_user_profile_image();?>" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span><?php _e('Welcome');?>,</span>
							<h2><?php echo get_current_user_name();?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<div class="clearfix"></div>
					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<!--<h3>General</h3>-->
							<ul class="nav side-menu">
								<li>
									<a><i class="fa fa-home"></i><?php _e('Home');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?php the_permalink('dashboard');?>"><?php _e('Dashboard');?></a></li>
										<li>
											<a href="<?php the_permalink('notifications');?>">
												<?php _e('Notification');?>
												<?php $notifications_count = get_unread_notification_count();
												if($notifications_count > 0): ?>
													<span class="label label-success"><?php _e('New');?></span>
												<?php endif; ?>
											</a>
										</li>
									</ul>
								</li>

								<li>
									<a><i class="fa fa-trello"></i><?php _e('My Profile');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?php the_permalink('edit-profile');?>"><?php _e('Edit Profile');?></a></li>
										<li><a href="<?php the_permalink('change-password');?>"><?php _e('Change Password');?></a></li>
										<li><a href="<?php the_permalink('access-log');?>"><?php _e('Access Log');?></a></li>
									</ul>
								</li>

								<?php if( user_can('view_user') || user_can('edit_user') || user_can('add_user')): ?>
								<li>
									<a><i class="fa fa-user"></i><?php _e('Manage Users');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php if( user_can('view_user') ): ?>
										<li><a href="<?php the_permalink('trainers');?>"><?php _e('All Trainers');?></a></li>
										<li><a href="<?php the_permalink('trainees');?>"><?php _e('All Trainees');?></a></li>
										<?php endif;?>
										
										<?php if( user_can('edit_user') || user_can('add_user')): ?>
										<li><a href="<?php the_permalink('add-new-user');?>"><?php _e('Add New User');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-user');?>"></a></li>
										<?php endif;?>
										
										<?php if( user_can('view_user') ): ?>
										<li class="hidden"><a href="<?php the_permalink('view-user');?>"></a></li>
										<?php endif;?>
									</ul>
								</li>
								<?php endif; ?>
								
								
								<?php if( user_can('view_user') || user_can('edit_user') || user_can('add_user')): ?>
								
                                <li>
									<a href="<?php the_permalink('progress');?>"><i class="fa fa-user"></i><?php _e('Manage Training');?></a>
								<li class="hidden"><a href="<?php the_permalink('new-trainees');?>"></a></li>
								</li>
								
								
								<?php endif; ?>

								<?php if( user_can('view_course') || user_can('edit_course') || user_can('add_course')): ?>
								<li>
									<a><i class="fa fa-book"></i><?php _e('Courses');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php if( user_can('view_course') ): ?>
										<li><a href="<?php the_permalink('courses');?>"><?php _e('All Courses');?></a></li>
										<?php endif;?>
										
										<?php if( user_can('edit_course') || user_can('add_course')): ?>
										<li><a href="<?php the_permalink('add-new-course');?>"><?php _e('Add New Course');?></a></li>
                                        <li><a href="<?php the_permalink('view-booking-calendar');?>"><?php _e('View Calendar');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-course');?>"></a></li>
										<?php endif;?>
									</ul>
								</li>
								<?php endif; ?>

								<?php if(is_admin()): ?>
								<li>
									<a><i class="fa fa-book"></i><?php _e('Cohort');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php if( user_can('view_designation') ): ?>
										<li><a href="<?php the_permalink('cohorts');?>"><?php _e('All Cohorts');?></a></li>
										<?php endif;?>
										
										<?php if( user_can('edit_designation') || user_can('add_designation')): ?>
										<li><a href="<?php the_permalink('add-new-cohorts');?>"><?php _e('Add New Cohort');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-cohorts');?>"></a></li>
										<?php endif;?>
									</ul>
								</li>
								<?php endif; ?>
								
								
								
<!--
								
								<?php //if( user_can('view_booking') || user_can('edit_booking') || user_can('add_booking')): ?>
								<li>
									<a><i class="fa fa-book"></i><?php// _e('Bookings');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php// if( user_can('view_booking') ): ?>
										<li><a href="<?php //the_permalink('bookings');?>"><?php// _e('All Bookings');?></a></li>
										<?php// endif;?>
										
										<?php// if( user_can('edit_booking') || user_can('add_booking')): ?>
										<li><a href="<?php// the_permalink('add-new-booking');?>"><?php// _e('Add New Booking');?></a></li>
										<li class="hidden"><a href="<?php //the_permalink('edit-booking');?>"></a></li>
										<?php// endif;?>
										
										<?php //if( user_can('view_booking') ): ?>
										<li><a href="<?php //the_permalink('view-booking-calendar');?>"><?php// _e('View Calendar');?></a></li>
										<?php// endif;?>
									</ul>
								</li>
								<?php //endif; ?>
--->
								<li>
								<a>
									<i class="fa fa-certificate">
									</i>General Management
									<span class="fa fa-chevron-down">
									</span>
								</a>
								<ul class="nav child_menu">
									<?php
		
		if(is_admin()){ ?>
									<li>
<?php if(is_admin()): ?>
								<li>
									<a><i class="fa fa-book"></i><?php _e('Designations');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php if( user_can('view_designation') ): ?>
										<li><a href="<?php the_permalink('designations');?>"><?php _e('All Designations');?></a></li>
										<?php endif;?>
										
										<?php if( user_can('edit_designation') || user_can('add_designation')): ?>
										<li><a href="<?php the_permalink('add-new-designation');?>"><?php _e('Add New Designation');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-designation');?>"></a></li>
										<?php endif;?>
									</ul>
								</li>
                                    
								<li>
									<a><i class="fa fa-book"></i><?php _e('Rules');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?php the_permalink('rules');?>"><?php _e('Designation Rules');?></a></li>
										

										<li><a href="<?php the_permalink('add-new-designation-rules');?>"><?php _e('Add New Designation Rule');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-designation-rules');?>"></a></li>
									</ul>
								</li>
								<?php endif; ?>
								
									
									<?php if(user_can('view_course')) : ?>
									
									
																	<li>
									<a><i class="fa fa-book"></i><?php _e('Course Types');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
																<?php if( user_can('view_course') ): ?>
										<li><a href="<?php the_permalink('course-types');?>"><?php _e('All Course Types');?></a></li>
										<?php endif;?>
										
										<?php if( user_can('edit_course') || user_can('add_course')): ?>
										<li><a href="<?php the_permalink('add-new-course-type');?>"><?php _e('Add New Course Type');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-course-type');?>"></a></li>
										<?php endif;?>
									</ul>
								</li>
									
									
									
		
									
									
										<?php endif;?>
									
									
									
								<?php if( user_can('view_location') || user_can('edit_location') || user_can('add_location')): ?>
								<li>
									<a><i class="fa fa-book"></i><?php _e('Locations');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php if( user_can('view_location') ): ?>
										<li><a href="<?php the_permalink('locations');?>"><?php _e('All Locations');?></a></li>
										<?php endif;?>
										
										<?php if( user_can('edit_location') || user_can('add_location')): ?>
										<li><a href="<?php the_permalink('add-new-location');?>"><?php _e('Add New Location');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-location');?>"></a></li>
										<?php endif;?>
									</ul>
								</li>
																<li>
									<a><i class="fa fa-book"></i><?php _e('Work Area');?> <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<?php if( user_can('view_work_area') ): ?>
										<li><a href="<?php the_permalink('work-area');?>"><?php _e('All Work Areas');?></a></li>
										<?php endif;?>
										
										<?php if( user_can('edit_work_area') || user_can('add_work_area')): ?>
										<li><a href="<?php the_permalink('add-new-work-area');?>"><?php _e('Add New Work Area');?></a></li>
										<li class="hidden"><a href="<?php the_permalink('edit-work-area');?>"></a></li>
										<?php endif;?>
									</ul>
								</li>
								<?php endif; ?>
									</li>
							</ul>
									<?php
					   
							}?>
							</li>
								<?php if(is_admin()): ?>
								<li>
									<a><i class="fa fa-cog"></i><?php _e('Setting');?><span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?php the_permalink('general-setting');?>"><?php _e('General');?></a></li>
										<li><a href="<?php the_permalink('manage-roles');?>"><?php _e('Manage Roles');?></a></li>
									</ul>
								</li>
								<?php endif; ?>
								
								

						</div>
					</div>
					<!-- /sidebar menu -->
				</div>
			</div><!--Sidebar end-->
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function top_bar(){
			ob_start();
			?>
			<div class="top_nav">
				<div class="nav_menu">
					<nav class="" role="navigation">
						<div class="nav toggle"><a id="menu_toggle"><i class="fa fa-bars"></i></a></div>
						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:void(0);" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo get_current_user_profile_image();?>" alt=""><?php echo get_current_user_name();?><span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="<?php the_permalink('profile');?>"><?php _e('Profile');?></a></li>
									<li><a href="<?php the_permalink('change-password');?>"><?php _e('Change Password');?></a></li>
									<li><a href="javascript:void(0);"><?php _e('Help');?></a></li>
									<li><a href="<?php the_permalink('logout');?>" class="link-logout"><i class="fa fa-sign-out pull-right"></i><?php _e('Log Out');?></a></li>
								</ul>
							</li>

							<?php echo $this->profile->notifications__top__bar(); ?>
						</ul>
					</nav>
				</div>
			</div>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function page__header($title,$status = true){
			ob_start();
			?>
			<div class="page-title">
				<div class="title_left"><h3><?php _e($title);?></h3></div>
				<?php if($status === true): ?>
					<div class="title_right">

					</div>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function home__page__header(){
			ob_start();
			?>
			<nav>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1><?php echo get_site_name();?></h1>
							<p><?php echo get_site_description();?></p>
						</div>
					</div>
				</div>
			</nav>
			<?php
			$content = ob_get_clean();
			return $content;
		}
	}
endif;
?>