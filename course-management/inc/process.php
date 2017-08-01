<?php
	session_start();
	//Load all functions
	require_once('../load.php');
	
	global $db;
	$device = get_device_name();
	$website_link_shortcode = '<a href="'.site_url().'" target="_blank" style="color:#26B99A;text-decoration:none;">'.get_site_name().'</a>';
	$login_url_shortcode = '<a href="'.site_url().'/login/" target="_blank" style="color:#26B99A;text-decoration:none;">Click here for login url</a>';
	$contact_url_shortcode = '<a href="'.site_url().'/contact/" target="_blank" style="color:#26B99A;text-decoration:none;">click here</a>';
	$current_time_shortcode = date('M d, Y h:i A');
	$admin_email_shortcode = get_option('admin_email');
	$no_reply_email_shortcode = 'no-reply@example.com';
	
	
	if( isset($_POST['action']) ):
		switch($_POST['action']):
			case 'user_login' : 
				echo $User->user__login__process();
				break;
			
			case 'logout_request':
				remove_current_user();
				break;
			
			case 'update_general_setting':
				echo $Settings->update__general__setting();
				break;
				
			case 'update_manage_roles':
				echo $Settings->update__manage__roles();
				break;
			
			case 'user_password_change':
				echo $Profile->profile__password__change__process();	
				break;
			
			case 'edit_user_profile':
				echo $Profile->update__profile__process();
				break;
				
			case 'add_new_user':
				echo $User->add__user__process();
				break;
				
			/*ADDITIONAL FORMS FOR USER INFO*/				
							
			case 'update_preceptorship':
				echo $User->update__preceptor__process();
				break;
				
			case 'update_mca':
				echo $User->update__mca__process();
				break;
				
			case 'update_fdap':
				echo $User->update__fdap__process();
				break;
			
			case 'update_student_prog':
				echo $User->update__student__process();
				break;
				
			case 'update_mentor_prog':
				echo $User->update__mentor__process();
				break;

			case 'update_notes':
				echo $User->update__notes__process();
				break;
				
			case 'edit_user':
				echo $User->update__user__process();
				break;
			
			case 'generate_password':
				echo password_generator();
				break;
			
			case 'upload_profile_image':
				echo $User->upload__image__process();
				break;
				
			case 'user_account_status_change':
				echo $User->account__status__change__process();
				break;
			
			case 'delete_user':
				echo $User->delete__user__process();
				break;
				
			case 'read_notification':
				echo $Profile->read__notification__process();
				break;
			
			case 'hide_notification':
				echo $Profile->hide__notification__process();
				break;
		
			case 'add_new_course':
				echo $Course->add__course__process();
				break;

			case 'add_new_course_type':
				echo $Course->add__course__type__process();
				break;
				
			case 'add_new_cohort':
				echo $Course->add__cohort__process();
				break;
				
			case 'update_course':
				echo $Course->update__course__process();
				break;
				
			case 'delete_course':
				echo $Course->delete__course__process();
				break;
			
			case 'update_cohort':
				echo $Course->update__cohort__process();
				break;
				
			case 'delete_cohort':
				echo $Course->delete__cohort__process();
				break;

			case 'course_approve_change':
				echo $Course->activate_course();
				break;

			case 'add_new_designation':
				echo $Designation->add__designation__process();
				break;
				
			case 'update_designation':
				echo $Designation->update__designation__process();
				break;
				
			case 'delete_designation':
				echo $Designation->delete__designation__process();
				break;
				
			case 'add_new_location':
				echo $Location->add__location__process();
				break;

			case 'add_new_work_area':
				echo $Location->add__work_area__process();
				break;
				
			case 'update_location':
				echo $Location->update__location__process();
				break;			


			case 'update_work_area':
				echo $Location->update__work_area__process();
				break;
				
			case 'delete_location':
				echo $Location->delete__location__process();
				break;

			case 'delete_work_area':
				echo $Location->delete__work_area__process();
				break;
				
			case 'add_new_booking':
				echo $Booking->add__booking__process();
				break;
				
			case 'update_booking':
				echo $Booking->update__booking__process();
				break;
				
			case 'delete_booking':
				echo $Booking->delete__booking__process();
				break;
				
			case 'fetch_course_nurses_data':
				echo $Booking->fetch__course__nurses__process();
				break;			

			case 'fetch_cohort_date_data':
				echo $User->fetch__cohort__date__process();
				break;
				
			case 'fetch_booking_nurses':
				echo $Booking->fetch__booking__nurses__process();
				break;
			
			case 'fetch_available_bookings':
				echo $Booking->fetch__available__bookings__process();
				break;
			
			case 'fetch_available_nurse_bookings':
				echo $Booking->fetch__available__nurse__bookings__process();
				break;
				
			case 'nurse_complete':
				echo $Booking->nurse__complete__process();
				break;
				
			case 'attendance_complete':
				echo $Booking->nurse__attendance__process();
				break;
				
		endswitch;
	else:
		print_r($_POST);
	endif;
	
exit();
?>