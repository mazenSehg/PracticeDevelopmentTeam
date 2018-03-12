<?php
session_start();
//Load all functions
require_once('load.php');
			require_once('/var/www/html/NIALL/practisedevelopmentteam/course-management/inc/phpmailer/PHPMailerAutoload.php');
			$courses = get_tabledata(TBL_BOOKINGS,false);
			$emails = array();
			$today = new DateTime();
			foreach($courses as $course){
					echo "\r\n";	
					echo 'c_id: '.($course->course_ID).' ';
			$coursestart = new DateTime($course->date_from);
			$courseend = new DateTime($course->date_to);
			$interval = $today->diff($coursestart);
			$day = $interval->format('%r%a');
			echo "days[$day]";
			if($day<14&&$day>=0){
				$reminder = get_tabledata(TBL_REMINDERS,true,array('booking'=>$course->ID,'automated'=>'1'));
				if($reminder){
					break;
				}
				$nurses = maybe_unserialize($course->nurses);
				$nurses_data = get_tabledata(TBL_USERS,false,array('ID'=>$nurses));	
				$email = new PHPMailer();
                         $email->From      = 'rsc-tr.workforce@nhs.net';
                        $email->FromName  = 'Workforce';
                        $email->Subject   = 'TEST';
                        $email->Body      = 'testtesttest';
				foreach($nurses_data as $nurse_data){
					$email->AddAddress($nurse_data->user_email);
					$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID,'user'=>$nurse_data->ID,'template'=>'10000006215','automated'=>'1'));
				}
				$emails[]=$email;
				 $email = new PHPMailer();
                         $email->From      = 'rsc-tr.workforce@nhs.net';
                        $email->FromName  = 'Workforce';
				if($course->course_ID=='10000471378'||$course->course_ID=='10000961152'){
				$temp = get_tabledata(TBL_TEMPLATES,true,array('ID'=>'10000369257'));
				$email->Subject = $temp->subject;
				$email->Body = $temp->body;
					$trainers = maybe_unserialize($course->admins);
					$trainers_data = get_tabledata(TBL_USERS,false,array('ID'=>$trainers));
					foreach($trainers_data as $trainer){
						echo "Sending trainer $trainer->first_name $trainer->last_name an availability email";
						echo "\r\n";
						$email->AddAddress($trainer->user_email);
						$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID,'user'=>$trainer->ID,'template'=>'10000369257','automated'=>'1'));
					}
					$emails[]=$email;
				}
                        //$email-> Send();
			}else if($day<0){
                        	$interval = $today->diff($courseend);
                        	$day = $interval->format('%r%a');
				echo "dayspastend[$day]";
				$email = new PHPMailer();
                         $email->From      = 'rsc-tr.workforce@nhs.net';
                        $email->FromName  = 'Workforce';
				$email1 = $email;
				$email2 = $email;
				$temp1 = get_tabledata(TBL_TEMPLATES,true,array('ID'=>'10000000872'));
				$email1->Subject = $temp1->subject;
				$email1->Body = $temp1->body;
				$temp2 = get_tabledata(TBL_TEMPLATES,true,array('ID'=>'10000675093'));
				$email2->Subject = $temp2->subject;
				$email2->Body = $temp2->body;
				if($day<0){
					$attendance = maybe_unserialize($course->attendance);
					foreach($attendance as $key=>$value){
						if($value==0){
							echo  get_user_name($key).' did not attend '.($course->name).' ';
						}
					}
	             	                if($course->course_ID=='10000471378'){
						if($days<=-90){
							$nurses = maybe_unserialize($course->nurses);
                                			$nurses_data = get_tabledata(TBL_USERS,false,array('ID'=>$nurses));
							$additional_info = maybe_unserialize($course->additional_info);
							foreach($nurses as $nurse){
								echo "\r\n";
								echo get_user_name($nurse).': ';
								if(array_key_exists($nurse,$additional_info)){
									if(array_key_exists('date_book_returned',$additional_info[$nurse])){
	echo 'book has been returned ';
}else{
	echo 'book not returned 3 MONTHS OVER FAIL';
	$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID,'user'=>$nurse,'template'=>'10000000872','automated'=>'1'));
	$email1->AddAddress(get_user_email($nurse));
}
if(array_key_exists('declaration',$additional_info[$nurse])){
        echo 'declaration has been signed ';
}else{
        echo 'declaration 3 MONTHS OVER FAIL ';
	$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID,'user'=>$nurse,'template'=>'10000675093','automated'=>'1'));
	$email2->AddAddress(get_user_email($nurse));
}

								}else{
									echo 'book not returned 3 MONTHS OVER FAIL ';
									echo 'declaration not signed 3 MONTHS OVER FAIL ';
									$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID,'user'=>$nurse,'template'=>'10000675093','automated'=>'1'));
									$email2->AddAddress(get_user_email($nurse));
									$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID, 'user'=>$nurse,'template'=>'10000000872','automated'=>'1'));
									$email1->AddAddress(get_user_email($nurse));
								}	
							}
	                       			}else if($days<=-60){
							 $nurses = maybe_unserialize($course->nurses);
                                                	 $nurses_data = get_tabledata(TBL_USERS,false,array('ID'=>$nurses));
                                                       	 $additional_info = maybe_unserialize($course->additional_info);
                                                        foreach($nurses as $nurse){
                                                                if(array_key_exists($nurse,$additional_info)){
                                                                        if(array_key_exists('date_book_returned',$additional_info[$nurse])){
        echo 'book has been returned ';
}else{
        echo 'book not returned 2 MONTHS OVER ';
	$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID,'user'=>$nurse->ID,'template'=>'10000000872','automated'=>'1'));
	$email1->AddAddress(get_user_email($nurse));
}
                                                                }else{
                                                                        echo 'book not returned 2 MONTHS OVER ';
									$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'booking'=>$course->ID, 'user'=>$nurse->ID,'template'=>'10000000872','automated'=>'1'));
									$email1->AddAddress(get_user_email($nurse));
                                                                }
                                                	}
					}

				}	
			}
			$emails[]=$email1;
			$emails[]=$email2;
			}
			}


$mentors = get_tabledata(TBL_MENTORS,false);
$email = new PHPMailer();
 $email->From      = 'rsc-tr.workforce@nhs.net';
                        $email->FromName  = 'Workforce';
$temp = get_tabledata(TBL_TEMPLATES,true,array('ID'=>'10000325070'));
$email->Subject = $temp->subject;
$email->Body = $temp->body;
foreach($mentors as $mentor){
	$lastupdate = new DateTime($mentor->last_update);
	$interval = $today->diff($lastupdate);
                        $day = $interval->format('%r%a');
                        if($day<=-365){
				echo get_user_name($mentor->user_ID).' did not attend a mentor update in past 12 months';
			}else if($day<=-305 && $day>=-365){
				echo get_user_name($mentor->user_ID).' must attend a mentor update within the next two months ';
				$db->insert(TBL_REMINDERS,array('date_sent'=>date("Y-m-d"),'user'=>$mentor->user_ID,'template'=>'10000325070','automated'=>'1'));
				$email->AddAddress($mentor->user_email);	
			}
}
$emails[] = $email;
foreach($emails as $email){
if($email->getToAddresses()){
	echo "\r\n";	
	print_r($email);
//	$email->Send();	
}
}
?>
