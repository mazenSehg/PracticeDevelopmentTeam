
<?php
session_start();
//Load all functions
require_once('load.php');

login_check();

//SET DEFAULT RULES FOR INFORMATION FOR ALL TRAINEES
$sql1 = "SELECT * FROM tbl_users WHERE user_role='nurse'";
$res1 = $db->get_results($sql1);
foreach($res1 as $a):

$sql2 = "INSERT INTO tbl_rules (ID, user_ID, preceptorship, hca, flap, record,mentorship) VALUES (NULL, $a->ID, 0,0,0,0,0)";

$res2 = $db->query($sql2);

endforeach;

?>