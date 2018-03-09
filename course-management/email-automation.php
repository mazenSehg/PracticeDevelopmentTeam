<?php
session_start();
//Load all functions
require_once('load.php');
			require_once('/var/www/html/NIALL/practisedevelopmentteam/course-management/inc/phpmailer/PHPMailerAutoload.php');
			$courses = get_tabledata(TBL_BOOKINGS,false);
			
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
				$nurses = maybe_unserialize($course->nurses);
				$nurses_data = get_tabledata(TBL_USERS,false,array('ID'=>$nurses));	
				$email = new PHPMailer();
                         $email->From      = 'rsc-tr.workforce@nhs.net';
                        $email->FromName  = 'Workforce';
                        $email->Subject   = 'TEST';
                        $email->Body      = 'testtesttest';
				foreach($nurses_data as $nurse_data){
					$email->AddAddress($nurse_data->user_email);
				}
				if($course->course_ID=='10000471378'||$course->course_ID=='10000961152'){
					$trainers = maybe_unserialize($course->admins);
					$trainers_data = get_tabledata(TBL_USERS,false,array('ID'=>$trainers));
					foreach($trainers_data as $trainer){
						echo "Sending trainer $trainer->first_name $trainer->last_name an availability email";
						echo "\r\n";
					}
				}
                        //$email-> Send();
			}else if($day<0){
                        	$interval = $today->diff($courseend);
                        	$day = $interval->format('%r%a');
				echo "dayspastend[$day]";
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
}
if(array_key_exists('declaration',$additional_info[$nurse])){
        echo 'declaration has been signed ';
}else{
        echo 'declaration 3 MONTHS OVER FAIL ';
}

								}else{
									echo 'book not returned 3 MONTHS OVER FAIL ';
									echo 'declaration not signed 3 MONTHS OVER FAIL ';
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
}
                                                                }else{
                                                                        echo 'book not returned 2 MONTHS OVER ';
                                                                }
                                                	}
					}

				}	
			}
			}
			}


$mentors = get_tabledata(TBL_MENTORS,false);
foreach($mentors as $mentor){
	$lastupdate = new DateTime($mentor->last_update);
	$interval = $today->diff($lastupdate);
                        $day = $interval->format('%r%a');
                        if($day<=-365){
				echo get_user_name($mentor->user_ID).' did not attend a mentor update in past 12 months';
			}else if($day<=-305 && $day>=-365){
				echo get_user_name($mentor->user_ID).' must attend a mentor update within the next two months ';
			}
}

?>
