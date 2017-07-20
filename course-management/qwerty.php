
<?php
session_start();
//Load all functions
require_once('load.php');

login_check();
/////////////////////////////////////////////////////
//METHOD TO ADD USERS TO THE PROGRESS TRACKING TABLE
/////////////////////////////////////////////////////

$sql1 = "SELECT * FROM tbl_users WHERE user_role = 'nurse'";
$res1 = $db->get_results($sql1);

foreach($res1 as $a):
$data = unserialize($a->courses);
	foreach($data as $b):
		echo $a->ID . " - ".$b;
		$sql2 = "SELECT COUNT(*) as num FROM tbl_course_user WHERE user_ID = '$a->ID' AND course_ID = '$b'";
		$res2 = $db->get_results($sql2);
if($res2[0]->num==0){
	
$sql3 = "INSERT INTO tbl_course_user SET user_ID='$a->ID', course_ID='$b',booked = 0 ,attended = 0 , uploaded = 0, passed = 0";
						$sql2 = $db->query($sql3);				
}
echo "<br>";
	endforeach;
endforeach;



?>
<br>
<br>
<br>
<br>
<br>







					<?php


/////////////////////////////////////////////////////
//METHOD TO UPDATE COHORT VALUES IF THEY HAVE PASSED
/////////////////////////////////////////////////////



					$sql1 = "SELECT * FROM tbl_cohort";
					$res1 = $db->get_results($sql1);
					foreach($res1 as $a):
					$effectiveDate = $today = date("Y-m-d");
					$today = $today = date("Y-m-d");


$sql2 = "SELECT * FROM tbl_cohort_ext WHERE Cohort_ID='$a->ID'";
$res2 = $db->get_results($sql2);

$count = 0;
foreach($res2 as $b):
if($b->over = 0){
$count +=1;	
}else{
	$sql3 = "DELETE FROM `tbl_cohort_ext` WHERE ID = '$b->ID'";
	$res3 = $db->query($sql3);
}


endforeach;


if($count<2){
	
						for($i = 0; $i<10;$i++){
						
					$effectiveDate = date('Y-m-d', strtotime("+".$a->y." years,+".$a->m." months, +".$a->d." days", strtotime($effectiveDate)));


if($effectiveDate < $today){
$passed = 1;	
}else{
	$passed = 0;
}	
						$sql3 = "SELECT COUNT(*) AS cunt FROM tbl_cohort_ext WHERE Cohort_ID='$a->ID' AND Cohort_date='$effectiveDate'";
						$res3 = $db->get_results($sql3);
					if($res3[0]->cunt!=0){
						
					}else{
						$sql2 = "INSERT INTO tbl_cohort_ext SET Cohort_ID='$a->ID', Cohort_date='$effectiveDate', over='$passed'";
						$sql2 = $db->query($sql2);
					}
					}
	
}

endforeach;

?>