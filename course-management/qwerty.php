
<?php
session_start();
//Load all functions
require_once('load.php');

login_check();
$sql = "SELECT * FROM tbl_users WHERE user_role = 'nurse'";
$res = $db->get_results($sql);

foreach($res as $a):


$sql3 = "INSERT INTO tbl_rules SET user_ID='$a->ID', preceptorship=0,hca = 0 ,flap = 0 , record = 0, mentorship = 0";
$res3 = $db->query($sql3);
endforeach;


?>