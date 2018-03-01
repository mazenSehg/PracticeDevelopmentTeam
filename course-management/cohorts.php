<?php
error_reporting(E_ALL);
session_start();
//Load all functions
require_once('load.php');
login_check();
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php _e('All Cohorts');?> &mdash; <?php echo get_site_name();?></title>
		<?php echo $Header->head();?>
	</head>
	 <body class="nav-md">
		<div class="container body">
			<div class="main_container">
			<?php echo $Header->header();?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<?php echo $Header->page__header('All Cohorts'); ?>
					<?php
//					$sql1 = "SELECT * FROM tbl_cohort";
//					$res1 = $db->get_results($sql1);
//					foreach($res1 as $a):
//					$effectiveDate = $a->date;
//					$today = $today = date("Y-m-d");
//					for($i = 0; $i<10;$i++){
//						
//					$effectiveDate = date('Y-m-d', strtotime("+".$a->y." years,+".$a->m." months, +".$a->d." days", strtotime($effectiveDate)));
//
//
//if($effectiveDate < $today){
//$passed = 1;	
//}else{
//	$passed = 0;
//}	
//						$sql3 = "SELECT COUNT(*) AS cunt FROM tbl_cohort_ext WHERE Cohort_ID='$a->ID' AND Cohort_date='$effectiveDate'";
//						$res3 = $db->get_results($sql3);
//					if($res3[0]->cunt!=0){
//						
//					}else{
//						$sql2 = "INSERT INTO tbl_cohort_ext SET Cohort_ID='$a->ID', Cohort_date='$effectiveDate', over='$passed'";
//						$sql2 = $db->query($sql2);
//					}
//					}
//
//					echo "<br>";
//					
//					endforeach;
//					
					
					?>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<?php if( user_can('add_course') ): ?>
									<a href="<?php the_permalink('add-new-cohorts');?>" class="btn btn-dark btn-sm"><?php _e('Add New Cohort');?></a>
									<?php endif; ?>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<?php echo $Course->all__cohorts__page(); ?>
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
