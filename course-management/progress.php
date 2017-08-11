
<?php
session_start();
//Load all functions
require_once('load.php');

login_check();
?>

<!DOCTYPE html>
<html>
<head>
	<title>All Trainee Users &mdash; <?php echo get_site_name();?></title>
	
	<?php echo $Header->head();?>
</head>
 <body class="nav-md">
	<div class="container body">
		<div class="main_container">
		
		<?php echo $Header->header();?>
		
		<!-- page content -->
		<div class="right_col" role="main">
			<div class="">
				<?php echo $Header->page__header('All Trainees Progress'); ?>
				
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<a href="<?php echo site_url();?>/new-trainees/" class="btn btn-dark btn-sm">Add New Trainee</a>
							<?php if( user_can('add_user') ): ?>

							<?php endif; ?>
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