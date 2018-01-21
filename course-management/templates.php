<?php
session_start();
//Load all functions
require_once('load.php');
login_check();
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo sprintf('All Templates &mdash; %s', get_site_name()); ?></title>
		<?php echo $Header->head();?>
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<?php echo $Header->header();?>
				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<?php echo $Header->page__header('All Templates'); ?>
					
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<?php if( is_admin() ): ?>
										<a href="<?php the_permalink('add-new-template');?>" class="btn btn-dark btn-sm"><?php _e('Add New Template');?></a>
										<?php endif; ?>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<?php echo $Template->all__templates__page(); ?>
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