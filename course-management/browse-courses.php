<?php
session_start();
//Load all functions
require_once('load.php');
//login_check();
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php _e('All Bookings');?> &mdash; <?php echo get_site_name();?></title>
		<?php echo $Header->head();?>
	</head>
	 <body class="nav-md">
		<div class="container body">
			<div class="main_container">
			<?php if( is_user_logged_in() ): ?>
			<?php echo $Header->header();?>
			<?php else: ?>
			<style>@media (min-width: 768px){footer { margin-left: 0px;}}.nav-md .container.body .right_col{ margin-left: 0; }</style>
			<?php endif; ?>
			<!-- page content -->
			<div class="right_col" role="main" >
				<div class="">
					<?php echo $Header->page__header('Browse Courses' , false); ?>
					
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<?php echo $Pending_Bookings->view__calendar__page(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->
			<!-- footer content -->
			<?php echo $Footer->footer();?>
			<!-- /footer content -->
			</div>
		</div>
	</body>
</html>