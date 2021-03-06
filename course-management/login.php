<?php
error_reporting(E_ALL);
session_start();
//Load all functions
require_once('load.php');

if(is_user_logged_in()):
	$uri = site_url();
	header("location:".$uri);
	die();
endif;
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php _e('Login');?> &mdash; <?php echo get_site_name();?></title>
		<?php echo $Header->head();?>
	</head>
	<body class="home-page main">
		<section class="">
			<div class="canvas-block">
				<canvas id="myCanvas1"></canvas>
			</div>
		</section>
		<?php echo $Header->home__page__header();?>
		<section class="big-box">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php echo $User->login__page(); ?>
					</div>
				</div>
			</div>
		</section>
		<?php echo $Footer->home__page__footer('fixed');?>
		<?php echo $Footer->scripts(); ?>
	</body>
</html>
