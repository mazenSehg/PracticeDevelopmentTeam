
<?php
session_start();
//Load all functions
require_once('load.php');

login_check();

//METHOD TO ADD USERS TO THE PROGRESS TRACKING TABLE
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