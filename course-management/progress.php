<?php
session_start();
//Load all functions
require_once('load.php');

login_check();
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo sprintf('All Users &mdash; %s', get_site_name()); ?></title>
		<?php echo $Header->head();?>
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php echo $Header->header();?>
				
				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<?php echo $Header->page__header('All Trainee Progress'); ?>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<a href="<?php echo site_url();?>/new-trainees/" class="btn btn-dark btn-sm"><?php _e('Add New Trainee');?></a>
									<div class="x_content">
										<?php echo $User->all__progress__page(); ?>
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