<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Booking') ):

	class Booking{
		
		private $database;
		
		function __construct(){
			global $db;
			$this->database = $db;
		}

		public function add__booking__page(){
			ob_start();
			if( !user_can( 'add_booking') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-booking submit-form" method="post" autocomplete="off">
					<div class="form-group">
						<label for="course"><?php _e('Course');?>&nbsp;<span class="required">*</span></label>
						<select name="course" class="form-control select_single require fetch-course-nurses-data" data-placeholder="Choose course">
							<?php
							$query = ''; 
							if(!is_admin()){
								$query = " WHERE `admins` LIKE '%".get_current_user_id()."%' ";
								
							}
			//$data = get_tabledata(TBL_COURSES,false,array(),'',' ID, CONCAT_WS(" | ", course_ID, name) AS name');
							$data = get_tabledata(TBL_COURSES,false, array(), $query);
							$option_data = get_option_data($data,array('ID','course_ID'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="booking-date"><?php _e('Booking Date');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="booking_date" class="form-control require input-datepicker" readonly="readonly"/>
					</div>
					<div class="form-group">
						<label for="nurses"><?php _e('Nurse(s)');?>&nbsp;<span class="required">*</span></label>
						<select name="nurses[]" class="form-control select_single require select-nurses" data-placeholder="Choose nurse(s)" multiple="multiple">
						</select>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="add_new_booking" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Booking');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function edit__booking__page(){
			ob_start();
			$booking__id = $_GET['id'];
				$booking = get_tabledata(TBL_BOOKINGS,true,array('ID'=> $booking__id));
			if( !user_can( 'edit_booking') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$booking):
				echo page_not_found('Oops ! Booking Details Not Found.','Please go back and check again !');
			else:
			?>
				<form class="add-booking submit-form" method="post" autocomplete="off">
					<div class="form-group">
						<label for="course"><?php _e('Course');?>&nbsp;<span class="required">*</span></label>
						<select name="course" class="form-control select_single require fetch-course-nurses-data" data-placeholder="Choose course">
							<?php
							$query = ''; 
							if(!is_admin()){
								$query = " WHERE `admins` LIKE '%".get_current_user_id()."%' ";
							}
							$data = get_tabledata(TBL_COURSES,false, array(), $query);
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data,maybe_unserialize($booking->course));
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="booking-date"><?php _e('Booking Date');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="booking_date" class="form-control require input-datepicker" readonly="readonly" value="<?php _e(date('M d, Y', strtotime($booking->booking_date)));?>"/>
					</div>
					<div class="form-group">
						<label for="nurses"><?php _e('Nurse(s)');?>&nbsp;<span class="required">*</span></label>
						<select name="nurses[]" class="form-control select_single require select-nurses" data-placeholder="Choose nurse(s)" multiple="multiple">
							<?php
							$select = ' ID, CONCAT_WS(" ", first_name , last_name) AS name ';
							$query = " WHERE `courses` LIKE '%".$booking->course."%' AND `user_role` = 'nurse' ";
							$data = get_tabledata(TBL_USERS, false, array() , $query , $select);
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data, maybe_unserialize($booking->nurses));
							?>
						</select>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_booking" />
						<input type="hidden" name="booking_id" value="<?php echo $booking->ID;?>" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Update Booking');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__bookings__page(){
			ob_start();
			$args = array();
			if(!is_admin()){
				$args = array('created_by' => get_current_user_id());
			}
			$bookings = get_tabledata(TBL_BOOKINGS,false,$args);
			if( !user_can('view_booking') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$bookings):
				echo page_not_found("Oops! There is no New bookings record found",' ',false);
			else:
			?>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('#Booking');?></th>
							<th><?php _e('Course Name');?></th>
							<th><?php _e('Booking Date');?></th>
							<th><?php _e('Created On');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($bookings): foreach($bookings as $booking):
							$course = get_tabledata(TBL_COURSES,true,array('ID' => $booking->course));
						?>
						<tr>
							<td><?php echo __('Booking (#').$booking->ID.')';?></td>
							<td><?php _e($course->name);?></td>
							<td><?php echo date('M d,Y',strtotime($booking->booking_date));?></td>
							<td><?php echo date('M d,Y',strtotime($booking->created_on));?></td>
							<td class="text-center">
								<?php if( user_can('edit_booking') ): ?>
								<button type="button" class="btn btn-success btn-xs view-nurses" data-toggle="modal" data-target="#nurse-data-modal" data-booking="<?php echo $booking->ID;?>" onclick="get_nurses(this);"><i class="fa fa-view"></i>&nbsp;<?php _e('View Nurse(s)');?></button>
								<a href="<?php the_permalink('edit-booking',array('id' => $booking->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_booking') ): ?>
								<button type="button" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $booking->ID;?>" data-action="delete_booking"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></button>
								<?php endif; ?>
							</td>
						</tr>
						<?php endforeach; endif; ?>
					</tbody>
				</table>
				<?php echo $this->nurses__data__modal(); ?>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
		
		public function nurses__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="nurse-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Booking Details');?></h1>
						</div>
						<div class="modal-body">
							<div id="nurse-data-modal-body"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<?php
			return ob_get_clean();
		}
		
		public function booking__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="booking-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Available Bookings');?></h1>
						</div>
						<div class="modal-body">
							<div id="booking-data-modal-body"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden fc_create" data-toggle="modal" data-target="#booking-data-modal"></div>
			<?php
			return ob_get_clean();
		}
		
		public function view__calendar__page(){
			ob_start(); ?>
			<div id='calendar'></div>
			<?php
			echo $this->view__calendar__scripts();
			echo $this->booking__data__modal();
			echo $this->nurses__data__modal();
			return ob_get_clean();
		}
		
		public function view__calendar__scripts(){
			ob_start(); ?>
			<!-- FullCalendar -->
			 <script>
				$(window).load(function() {
					var date = new Date(),
					d = date.getDate(),
					m = date.getMonth(),
					y = date.getFullYear(),
					started,
					categoryClass;

					var calendar = $('#calendar').fullCalendar({
						header: {
							left: 'prev,next today',
							center: 'title',
						},
						selectable: true,
						selectHelper: true,
						select: false,
						eventClick: function(calEvent, jsEvent, view) {
							$('.fc_create').click();
							var date = new Date(calEvent._start._d);
							var schedule_date = date.toString('yyyy-MM-dd');
							get_available_bookings(schedule_date, 'fetch_available_bookings');
			  				calendar.fullCalendar('unselect');
						},
						editable: true,
						events: <?php echo $this->get__calender__booking__data(); ?>
					});
				});
			</script>
			<!-- /FullCalendar -->
			<?php
			return ob_get_clean();
		}
		
		public function get__calender__booking__data(){
			$args = array();
			if(!is_admin()){
				$args = array('created_by' => get_current_user_id());
			}
			$results = get_tabledata(TBL_BOOKINGS,false,$args,'GROUP BY `booking_date`',array('COUNT(ID) as count' , 'booking_date'));
			if($results):
				$return = array();
				foreach($results as $data):
					array_push($return, array('title' => 'Available Bookings ('.$data->count.')' , 'start' => date('Y-m-d',strtotime($data->booking_date ) ) ) );
				endforeach;
				return json_encode($return);
			else:
				return false;
			endif;
		}

		public function view__nurse__calendar__page(){
			ob_start(); ?>
			<div id='calendar'></div>
			<?php
			echo $this->view__nurse__calendar__scripts();
			echo $this->booking__data__modal();
			return ob_get_clean();
		}
		
		public function view__nurse__calendar__scripts(){
			ob_start(); ?>
			<!-- FullCalendar -->
			 <script>
				$(window).load(function() {
					var date = new Date(),
					d = date.getDate(),
					m = date.getMonth(),
					y = date.getFullYear(),
					started,
					categoryClass;

					var calendar = $('#calendar').fullCalendar({
						header: {
							left: 'prev,next today',
							center: 'title',
						},
						selectable: true,
						selectHelper: true,
						select: false,
						eventClick: function(calEvent, jsEvent, view) {
							$('.fc_create').click();
							var date = new Date(calEvent._start._d);
							var schedule_date = date.toString('yyyy-MM-dd');
							get_available_bookings(schedule_date, 'fetch_available_nurse_bookings');
			  				calendar.fullCalendar('unselect');
						},
						editable: true,
						events: <?php echo $this->get__nurse__calender__booking__data(); ?>
					});
				});
			</script>
			<!-- /FullCalendar -->
			<?php
			return ob_get_clean();
		}
		
		public function get__nurse__calender__booking__data(){
			$nurse_id = get_current_user_id();
			$query = " WHERE `nurses` LIKE '%".$nurse_id."%' GROUP BY `booking_date` ";
			$results = get_tabledata(TBL_BOOKINGS,false,array(),$query,array('COUNT(ID) as count' , 'booking_date'));
			if($results):
				$return = array();
				foreach($results as $data):
					array_push($return, array('title' => 'Available Bookings ('.$data->count.')' , 'start' => date('Y-m-d',strtotime($data->booking_date ) ) ) );
				endforeach;
				return json_encode($return);
			else:
				return false;
			endif;
		}
		
		//Process functions starts here
		public function add__booking__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not create booking, Please try again.'),
				'reset_form' => 0
			);
			if( user_can('add_booking') ):
				$validation_args = array(
					'course' => $course,
					'booking_date' => date('Y-m-d', strtotime($booking_date))
				);

				if(is_value_exists(TBL_BOOKINGS,$validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = __('Failed !');
					$return['message'] = __('This booking is already exists, Please try different booking date or course');
					$return['fields'] = array('name');
				else:
					$enroll = array();
					foreach($nurses as $nurse){$enroll[$nurse] = 0;}
						
					$guid = get_guid(TBL_BOOKINGS);
					$result = $this->database->insert(TBL_BOOKINGS,
						array(
							'ID' => $guid,
							'course' => $course,
							'booking_date' => date('Y-m-d', strtotime($booking_date)),
							'nurses' => $nurses,
							'enroll' => $enroll,
							'created_by' => get_current_user_id(),
						)
					);
					if($result):
						$notification_args = array(
							'title' => __('New booking created'),
							'notification'=> __('You have successfully created a new booking.'),
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = __('Booking has been created successfully.');
						$return['reset_form'] = 1;
					endif;
				endif;
			endif;
			return json_encode($return);
		}

		public function update__booking__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not update booking, Please try again.'),
				'reset_form' => 0
			);
			if( user_can('edit_booking') ):
				$validation_args = array(
					'course' => $course,
					'booking_date' => date('Y-m-d', strtotime($booking_date))
				);

				if(is_value_exists(TBL_BOOKINGS,$validation_args,$booking_id)):
					$return['status'] = 2;
					$return['message_heading'] = __('Failed !');
					$return['message'] = __('Booking name you entered is already exists, please try another name.');
					$return['fields'] = array('name');
				else:
					$booking = get_tabledata(TBL_BOOKINGS,true,array('ID' => $booking_id));
					$old_enroll = maybe_unserialize($booking->enroll);
					$enroll = array();
					foreach($nurses as $nurse){
						$enroll[$nurse] = isset($old_enroll[$nurse]) ? $old_enroll[$nurse] : 0;
					}
					$result = $this->database->update(TBL_BOOKINGS,
						array(
							'course' => $course,
							'booking_date' => date('Y-m-d', strtotime($booking_date)),
							'nurses' => $nurses,
							'enroll' => $enroll,
						),
						array(
							'ID'=> $booking_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => __('Booking updated'),
							'notification'=> __('You have successfully updated booking.'),
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = __('Booking has been updated successfully.');
					endif;
				endif;
			endif;
			
			return json_encode($return);
		}

		public function delete__booking__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_booking') ):
				$data = get_tabledata(TBL_BOOKINGS,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_BOOKINGS,$args);
				if($result):
					$notification_args = array(
						'title' => __('Booking deleted'),
						'notification'=> __('You have successfully deleted booking.'),
					);
					add_user_notification($notification_args);
					return 1;
				else:
					return 0;
				endif;
			else:
				return 0;
			endif;
		}
		
		public function fetch__course__nurses__process(){
			extract($_POST);
			$course_id = trim($course_id);
			$return = array();
			$select = ' ID, CONCAT_WS(" ", first_name , last_name) AS name ';
			$query = " WHERE `courses` LIKE '%".$course_id."%' AND `user_role` = 'nurse' ";
			$data = get_tabledata(TBL_USERS, false, array() , $query , $select);
			$option_data = get_option_data($data,array('ID','name'));
			$return['nurses_html'] = get_options_list($option_data);
			return json_encode($return);
		}

		public function fetch__booking__nurses__process(){
			extract($_POST);
			$booking_id = trim($booking_id);
			$return['html'] = '';
			$booking = get_tabledata(TBL_BOOKINGS,true,array('ID' => $booking_id));
			if($booking):
				$nurses = maybe_unserialize($booking->nurses);
				$enroll = maybe_unserialize($booking->enroll);
				if(!empty($nurses)):
					ob_start(); ?>
					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
						<thead>
							<tr>
								<th><?php _e('Trainee Name'); ?></th>
								<th><?php _e('Complete Status'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($nurses as $nurse): ?>
							<tr>
								<td><?php echo get_user_name($nurse);?></td>
								<td class="text-center">
									<?php if($enroll[$nurse] == 0) : ?>
									<button type="button" class="btn btn-xs btn-success complete-nurse" data-booking="<?php echo $booking->ID;?>" data-user="<?php echo $nurse; ?>" onclick="nurse_complete(this);"><?php _e('Complete'); ?></button>
									<?php else: ?>
									<label class="label label-success"><?php _e('Completed'); ?></label>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?php
					$return['html'] = ob_get_clean();
				endif;
			endif;
			return json_encode($return);
		}
		
		public function fetch__available__bookings__process(){
			extract($_POST);
			$return['html'] = '';
			$query = " WHERE `booking_date` = '".$date."' ";
			if(!is_admin()){
				$query .= " AND `created_by` = ".get_current_user_id()." ";
			}
			$bookings = get_tabledata(TBL_BOOKINGS,false,array(), $query);
			if($bookings): 
			ob_start(); ?>
			<table class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('#Booking');?></th>
						<th><?php _e('Course Name');?></th>
						<th><?php _e('Created On');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($bookings as $booking): $course = get_tabledata(TBL_COURSES,true,array('ID' => $booking->course));?>
					<tr>
						<td><?php echo __('Booking (#').$booking->ID.')';?></td>
						<td><?php _e($course->name);?></td>
						<td><?php echo date('M d,Y',strtotime($booking->created_on));?></td>
						<td class="text-center">
							<?php if( user_can('edit_booking') ): ?>
							<button type="button" class="btn btn-success btn-xs view-nurses" data-toggle="modal" data-target="#nurse-data-modal" data-booking="<?php echo $booking->ID;?>" onclick="get_nurses(this);"><i class="fa fa-view"></i>&nbsp;<?php _e('View Nurse(s)');?></button>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php endif;
			$return['html'] = ob_get_clean();
			return json_encode($return);
		}
		
		public function fetch__available__nurse__bookings__process(){
			extract($_POST);
			$nurse_id = get_current_user_id();
			$query = " WHERE GROUP BY `booking_date` ";
			$return['html'] = '';
			$query = " WHERE `booking_date` = '".$date."' AND `nurses` LIKE '%".$nurse_id."%' ";
			$bookings = get_tabledata(TBL_BOOKINGS,false,array(), $query);
			if($bookings): 
			ob_start(); ?>
			<table class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('#Booking');?></th>
						<th><?php _e('Course Name');?></th>
						<th><?php _e('Created On');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($bookings as $booking): $course = get_tabledata(TBL_COURSES,true,array('ID' => $booking->course));?>
					<tr>
						<td><?php echo __('Booking (#').$booking->ID.')';?></td>
						<td><?php _e($course->name);?></td>
						<td><?php echo date('M d,Y',strtotime($booking->created_on));?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php endif;
			$return['html'] = ob_get_clean();
			return json_encode($return);
		}
		
		
		public function nurse__complete__process(){
			extract($_POST);
			$booking_id = trim($booking_id);
			$user_id = trim($user_id);
			$return['status'] = 0;
			$return['html'] = '';
			$booking = get_tabledata(TBL_BOOKINGS,true,array('ID' => $booking_id));
			
			if($booking):
				$enroll = maybe_unserialize($booking->enroll);
				if(!empty($enroll) && isset($enroll[$user_id]) ):
					$enroll[$user_id] = 1;
					$update = $this->database->update(TBL_BOOKINGS, array('enroll' => $enroll), array('ID' => $booking->ID));
					if($update){
						$return['status'] = 1;
						$return['html'] = '<label class="label label-success">'.__('Completed').'</label>';
					}
				endif;
			endif;
			return json_encode($return);
		}
	}

endif;
?>