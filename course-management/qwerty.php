
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





if(isset($_POST['SubmitButtonEquipment'])){ 


       
$table = 'tbl_notes';
            
            
            
            
            
            
            
            
$file = 'export';
		
		$i = null;
		$csv_output = null;
 
$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
mysql_select_db($db) or die("Can not connect.");
 

  $csv_output .= "Equipment Code\tCentre Code\tEquipment Type\tx-ray Subtype\tSupplier\tManfacturer\tModel\tLocation\tLocal ID\t ID Number\tYear Manufactured\tInstallation Year\tDecommisioned\tYear Decommisioned\tSpare\tComment\tServicing Agent ";
	 
	 
  $i = 17;
$csv_output .= "\n";

						$query = NULL;
if(isset($_POST['centre']) && $_POST['centre'] != '' && $_POST['centre'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= " `centre` = '".$_POST['centre']."' ";
		}

		if(isset($_POST['manufacturer']) && $_POST['manufacturer'] != '' &&  $_POST['manufacturer'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= " `manufacturer` = '".$_POST['manufacturer']."' ";
		}

		if(isset($_POST['equipment_type']) && $_POST['equipment_type'] != '' && $_POST['equipment_type'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= " `equipment_type` = '".$_POST['equipment_type']."' ";
		}

		if(isset($_POST['model']) && $_POST['model'] != '' && $_POST['model'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= " `model` = '".$_POST['model']."' ";
		}

		if(isset($_POST['approved']) && $_POST['approved'] != '' &&  $_POST['approved'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= " `approved` = '".$_POST['approved']."' ";
		}
		
		if(isset($_POST['decommed']) && $_POST['decommed'] != '' &&  $_POST['decommed'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= " `decommed` = '".$_POST['decommed']."' ";
		}

		if(isset($_POST['fault_date_from']) && $_POST['fault_date_from'] != '' && $_POST['fault_date_from'] != 'undefined' && isset($_POST['fault_date_to']) && $_POST['fault_date_to'] != '' &&  $_POST['fault_date_to'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= " ( `date_of_fault` >= '".date( 'Y-m-d', strtotime($_POST['fault_date_from']) )."' AND `date_of_fault` <= '".date( 'Y-m-d', strtotime($_POST['fault_date_to']) )."' ) ";
		}else if(isset($_POST['fault_date_from']) && $_POST['fault_date_from'] != '' &&  $_POST['fault_date_from'] != 'undefined' && ( !isset($_POST['fault_date_to']) || $_POST['fault_date_to'] == '' ||  $_POST['fault_date_to'] == 'undefined' ) ){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= "  `date_of_fault` >= '".date( 'Y-m-d', strtotime($_POST['fault_date_from']) )."' ";
		}else if( (!isset($_POST['fault_date_from']) || $_POST['fault_date_from'] == '' || $_POST['fault_date_from'] == 'undefined' ) && isset($_POST['fault_date_to']) && $_POST['fault_date_to'] != '' &&  $_POST['fault_date_to'] != 'undefined'){
			$query .= ($query != '') ? ' AND ' : ' WHERE ';
			$query .= "  `date_of_fault` <= '".date( 'Y-m-d', strtotime($_POST['fault_date_to']) )."' ";
		}				

$values = mysql_query("SELECT equipment_code,centre,type_name,x_ray, supplier, manufacturer, model, location, location_id, serial_number, year_manufacturered, year_installed, decommed, year_decommisoned, spare, comment, service_agent FROM tbl_equipment " . $query."");
			
while ($rowr = mysql_fetch_row($values)) {
 for ($j=0;$j<$i;$j++) {
	 if($rowr[$j]!=null||$rowr[$j]!=""||strlen($rowr[$j])>0){
		 $field = preg_replace('/[\n\r]+/', '', trim($rowr[$j]));
		 if($j==1){
			 $data = mysql_query("SELECT centre_code AS name FROM tbl_centres WHERE ID = ".$field.";");
			 while ($da = mysql_fetch_row($data)) {
			$code =  $da[0];	 
			 }
			 $csv_output .= $code."\t";
		 }else if($j==4){
			 $data = mysql_query("SELECT name AS name FROM tbl_supplier WHERE ID = ".$field.";");
			 while ($da = mysql_fetch_row($data)) {
			$code =  $da[0];	 
			 }
			 $csv_output .= $code."\t";
		 }else if($j==5){
			 $data = mysql_query("SELECT name AS name FROM tbl_manufacturer WHERE ID = ".$field.";");
			 while ($da = mysql_fetch_row($data)) {
			$code =  $da[0];	 
			 }
			 $csv_output .= $code."\t";
		 }else if($j==6){
			 $data = mysql_query("SELECT name AS name FROM tbl_model WHERE ID = ".$field.";");
			 while ($da = mysql_fetch_row($data)) {
			$code =  $da[0];	 
			 }
			 $csv_output .= $code."\t";
		 }else if($j==16){
			 $data = mysql_query("SELECT name AS name FROM tbl_service_agent WHERE ID = ".$field.";");
			 while ($da = mysql_fetch_row($data)) {
			$code =  $da[0];	 
			 }
			 $csv_output .= $code."\t";
		 }else{
  		$csv_output .= $field."\t";  			 
		 }
}else{
	  $csv_output .=""."\t";
}
 }
 $csv_output .= "\n";
}
 
$filename = $file."_".date("Y-m-d_H-i",time());
header("Content-type: application/xls");
header("Content-disposition: csv" . date("Y-m-d") . ".xls");
header("Content-disposition: filename=".$filename.".xls");
print $csv_output;

		}


?>