<?php
session_start();
//Load all functions
require_once('load.php');

login_check();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php _e('Edit Course');?> &mdash; <?php echo get_site_name();?></title>
		<?php echo $Header->head();?>
	</head>
    <script type="text/javascript">
        function anotherLink() {
           
            <?php
            $booking__id = $_GET['id'];
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking__id));
            ?>
            var text1 = document.createElement("select");
             text1.setAttribute("class","form-control select_single require");
            text1.setAttribute("name","location");
            text1.setAttribute("data-plaeholder","Choose location");
            text1.innerHTML = '<?php $data = get_tabledata(TBL_LOCATIONS, false); $option_data = get_option_data($data, array("ID", "name"));echo get_options_list($option_data, maybe_unserialize($booking->location)); ?>';
            document.getElementById("go").appendChild(text1);
            $("[name='location']").select2();
        }
    </script>
	 <body class="nav-md">
		<div class="container body">
			<div class="main_container">		
			<?php echo $Header->header();?>		
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<?php echo $Header->page__header('Edit Course'); ?>				
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_content">
									<?php echo $Booking->edit__booking__page(); ?>
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