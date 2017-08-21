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
						<label for="admins"><?php _e('Course Type');?>&nbsp;<span class="required">*</span></label>
						<select name="code" class="form-control select_single require" data-placeholder="Choose course Type" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_COURSE_TYPE,false,array(),'',' ID, CONCAT_WS(" | ", course_ID , name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="name"><?php _e('Additional Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="name" class="form-control require" />
					</div>
					
					<div class="form-group">
						<label for="admins"><?php _e('Course Trainers(s)');?>&nbsp;<span class="required">*</span></label>
						<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course Trainer(s)" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'course_admin'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="description"><?php _e('Notes');?></label>
						<textarea name="description" class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="location"><?php _e('Location');?>&nbsp;<span class="required">*</span></label>
						<select name="location" class="form-control select_single require" data-placeholder="Choose location">
							<?php
							$data = get_tabledata(TBL_LOCATIONS,false);
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>  
				<div class="form-group">
					<label for="date_from"><?php _e('Booking Date From');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="date_from" class="form-control input-datepicker" readonly="readonly"/>
				</div>
				<div class="form-group">
					<label for="date_to"><?php _e('Booking Date To');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="date_to" class="form-control input-datepicker" readonly="readonly" />
				</div>
				<div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data,array('ID','name'));
						echo get_options_list($option_data);
							?>
						</select>
					</div>
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="add_new_booking" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Create New course');?></button>
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
						<input type="hidden" name="code" value="<?php _e($booking->course_ID);?>" class="form-control require" />
					</div>
					
					<div class="form-group">
						<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="name" class="form-control require" value="<?php _e($booking->name);?>"/>
					</div>
					
					<div class="form-group">
						<label for="admins"><?php _e('Course Admin(s)');?>&nbsp;<span class="required">*</span></label>
						<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course Trainer(s)" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'course_admin'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data, maybe_unserialize($booking->admins));
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="description"><?php _e('Notes');?></label>
						<textarea name="description" class="form-control" rows="3"><?php _e($booking->description);?></textarea>
					</div>
					<div class="form-group">
						<label for="location"><?php _e('Location');?>&nbsp;<span class="required">*</span></label>
						<select name="location" class="form-control select_single require" data-placeholder="Choose location">
							<?php
							$data = get_tabledata(TBL_LOCATIONS,false);
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data, maybe_unserialize($booking->location));
							?>
						</select>
					</div>
                
				<div class="form-group">
					<label for="date_from"><?php _e('Booking Date From ');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="date_from" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($booking->date_from) ? date('M d, Y', strtotime($booking->date_from)) : '';?>"/>
				</div>
				<div class="form-group">
					<label for="date_to"><?php _e('Booking Date To ');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="date_to" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($booking->date_to) ? date('M d, Y', strtotime($booking->date_to)) : '';?>"/>
				</div>
				<div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
						<?php
								$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
								$option_data = get_option_data($data,array('ID','name'));
								echo get_options_list($option_data,maybe_unserialize($booking->nurses));
								?>
						</select>
					</div>
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="update_booking" />
					<input type="hidden" name="booking_id" value="<?php echo $booking->ID;?>" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update Course');?></button>
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
			<form action="<?php echo site_url();?>/bookings/" method="POST">
				<div class="row custom-filters">
					<div class="form-group col-sm-2 col-xs-6">
						<label for="courses"><?php _e('Course');?></label>
						<select name="course" class="form-control select_single" data-placeholder="Choose course">
						<?php
							$data = get_tabledata(TBL_COURSE_TYPES,false,array(),'',' ID, CONCAT_WS(" | ", course_ID, name) AS name');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
						?>
						</select> 
					</div>						
				</div>
			</form>
				
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive ajax-datatable-buttons" cellspacing="0" width="100%" data-table="fetch_all_bookings" data-order-column="1">
				<thead>
					<tr>
						<th><?php _e('Course Name');?></th>
						<th><?php _e('Booking Date');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				
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
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Attendees Details');?></h1>
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
				<div class="modal-dialog modal-lg">
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
		
		public function add__booking__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="add-booking-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Add Booking');?></h1>
						</div>
						<div class="modal-body">
							<?php echo $this->add__booking__page(); ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden add-booking-modal-btn" data-toggle="modal" data-target="#add-booking-modal"></div>
			<?php
			return ob_get_clean();
		}
		
		public function view__calendar__page(){
			ob_start(); ?>
			<form action="<?php echo site_url();?>/view-booking-calendar/" method="GET">
				<div class="row calendar-custom-filters">
					<div class="form-group col-sm-2 col-xs-6">
						<label for="courses"><?php _e('Course Types');?></label>
						<select name="course" class="form-control select_single" data-placeholder="Choose course" onchange="this.form.submit();">
						<?php
							$data = get_tabledata(TBL_COURSE_TYPES,false,array(),'',' ID, CONCAT_WS(" | ", course_ID, name) AS name');
							$option_data = get_option_data($data,array('ID','name'));
							$selected = isset($_GET['course']) ? $_GET['course'] : '';
							echo get_options_list($option_data, $selected);
						?>
						</select> 
					</div>						
				</div>
			</form>
			<div id='calendar'></div>
			<?php
			echo $this->view__calendar__scripts();
			echo $this->booking__data__modal();
			echo $this->nurses__data__modal();
			echo $this->add__booking__modal();
			return ob_get_clean();
		}
		
		public function view__calendar__scripts(){
			ob_start();
			?>
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
						select: function(start, end) {
							var s_date = new Date(start._d);
							var e_date = new Date(end._d);
							var modal = $("#add-booking-modal");
							modal.find('form input[name="date_from"]').val(moment(s_date).format('MMMM DD,YYYY'));
							modal.find('form input[name="date_to"]').val(moment(e_date).subtract(1, 'days').format('MMMM DD,YYYY'));
							$('.add-booking-modal-btn').click();
						},
						eventClick: function(calEvent, jsEvent, view) {
							$('.fc_create').click();
							var date = new Date(calEvent._start._d);
							var schedule_date = date.toString('yyyy-MM-dd');
							get_available_bookings(schedule_date, 'fetch_available_bookings');
			  				calendar.fullCalendar('unselect');
						},
						editable: true,
						<?php if($this->get__calender__booking__data()): ?>
						events: <?php echo $this->get__calender__booking__data(); ?>,
						<?php endif; ?>
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
			if( isset($_GET['course']) && $_GET['course'] != ''){
				$args['course'] = $_GET['course'];
                $args = array('course_ID' => $_GET['course']);
			}
			
			$results = get_tabledata(TBL_BOOKINGS,false,$args,'GROUP BY `date_from`',array('COUNT(ID) as count' , 'date_from', 'date_to'));
			if($results):
				$return = array();
				foreach($results as $data):
					array_push($return, array('title' => 'Courses booked ('.$data->count.')' , 'start' => date('Y-m-d',strtotime($data->date_from ) ) , 'end' => isset($data->date_to) && $data->date_to != '' ? $this->add_date($data->date_to, '1 day') : $this->add_date($data->date_from, '1 day') ) );
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
						<?php if($this->get__nurse__calender__booking__data()): ?>
						events: <?php echo $this->get__nurse__calender__booking__data(); ?>,
						<?php endif; ?>
					});
				});
			</script>
			<!-- /FullCalendar -->
			<?php
			return ob_get_clean();
		}
		
		public function get__nurse__calender__booking__data(){
			$nurse_id = get_current_user_id();
			$query = " WHERE `nurses` LIKE '%".$nurse_id."%' GROUP BY `date_from` ";
			$results = get_tabledata(TBL_BOOKINGS,false,array(),$query,array('COUNT(ID) as count' , 'date_from', 'date_to'));
			if($results):
				$return = array();
				foreach($results as $data):
					array_push($return, array('title' => 'Available Bookings ('.$data->count.')' , 'start' => date('Y-m-d',strtotime($data->date_from ) ) , 'end' => isset($data->date_to) && $data->date_to != '' ? $this->add_date($data->date_to, '1 day') : $this->add_date($data->date_from, '1 day') ) );
				endforeach;
				return json_encode($return);
			else:
				return false;
			endif;
		}
		
		public function add_date($d,$str){
			$d = date('Y-m-d',strtotime($d) );
			$date = date_create($d);
			date_add($date,date_interval_create_from_date_string($str));
			return date_format($date,"Y-m-d");
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


					$return['status'] = 2;
					$return['message_heading'] = __('Failed !');
					$return['message'] = __('This booking is already exists, Please try different booking date or course');
					$return['fields'] = array('name');
					$enroll = array();
					foreach($nurses as $nurse){
						$enroll[$nurse] = 0;
						$attendance[$nurse] = 0;
						$date_book_received[$nurse] = '';
						$date_book_returned[$nurse] = '';
						$collected[$nurse] = 0;
						$result = $this->database->update(TBL_CHK,
							array(
								'booked' => 1,
							),
							array(
								'user_ID' => $nurse,
								'course_ID' => $code,
							)
						);	
                        
                        

                        
					}
					
					$guid = get_guid(TBL_BOOKINGS);
            
                $course = get_tabledata(TBL_COURSE_TYPE,true,array('ID' => $code));
                $bb = $course->course_ID ." | ". $course->name  . " | ". $name;

					$result = $this->database->insert(TBL_BOOKINGS,
						array(
							'ID' => $guid,
                        
							'course_ID' => $code,
							'name' => $bb,
							'admins' => $admins,
							'description' => $description,
							'location' => $location,
                        
							'nurses' => $nurses,
							'date_book_received' => $date_book_received,
							'date_book_returned' => $date_book_returned,
							'collected' => $collected,
							'enroll' => $enroll,
							'attendance' => $attendance,
							'created_by' => get_current_user_id(),
							'date_from' => date('Y-m-d', strtotime($date_from)),
							'date_to' => date('Y-m-d', strtotime($date_to)),
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
						$return['reload'] = 1;
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
					'course_ID' => $code,
				);

				if(is_value_exists(TBL_BOOKINGS,$validation_args,$booking_id)):
					$return['status'] = 2;
					$return['message_heading'] = __('Failed !');
					$return['message'] = __('Booking name you entered is already exists, please try another name.');
					$return['fields'] = array('name');
				else:
					$booking = get_tabledata(TBL_BOOKINGS,true,array('ID' => $booking_id));
					$old_enroll = maybe_unserialize($booking->enroll);
					$old_attendance = maybe_unserialize($booking->attendance);
					$enroll = array();

					foreach($nurses as $nurse){

						$enroll[$nurse] = isset($old_enroll[$nurse]) ? $old_enroll[$nurse] : 0;
						$attendance[$nurse] = isset($old_attendance[$nurse]) ? $old_attendance[$nurse] : 0;
						$collected[$nurse] = isset($old_collected[$nurse]) ? $old_collected[$nurse] : 0;
						$date_book_returned[$nurse] = isset($old_date_book_returned[$nurse]) ? $old_date_book_returned[$nurse] : '';
						$date_book_received[$nurse] = isset($old_date_book_received[$nurse]) ? $old_date_book_received[$nurse] : '';

					}
					$result = $this->database->update(TBL_BOOKINGS,
						array(
							'course_ID' => $code,
                        
							'name' => $name,
                        	'admins' => $admins,
							'description' => $description,
							'location' => $location,
                        
							'nurses' => $nurses,
							'date_book_received' => $date_book_received,
							'date_book_returned' => $date_book_returned,
							'collected' => $collected,
							'enroll' => $enroll,
							'attendance' => $attendance,
							'date_from' => date('Y-m-d', strtotime($date_from)),
							'date_to' => date('Y-m-d', strtotime($date_to)),
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
		
		public function fetch__all__bookings__process(){
			$orders_columns = array(
				2 => 'date_from',
			);

			$recordsTotal = $recordsFiltered = 0;
			$draw = $_POST["draw"];
			$orderByColumnIndex = $_POST['order'][0]['column'];
			$orderBy = ( array_key_exists( $orderByColumnIndex , $orders_columns ) ) ? $orders_columns[$orderByColumnIndex] : 'created_on';
			$orderType = $_POST['order'][0]['dir'];
			$start = $_POST["start"];
			$length = $_POST['length'];
			
			$query = "";
			
			if(!is_admin()){
				$query = "WHERE `created_by` = ".get_current_user_id()." ";
			}
			
			$sql = sprintf(" ORDER BY %s %s LIMIT %d , %d ", $orderBy, $orderType ,$start , $length);
			$data = array();
			if(!empty($_POST['search']['value'])){
				$columns = array('ID');
				for($i = 0 ; $i < count($columns);$i++){
					$column = $columns[$i];
					$where[] = "$column LIKE '%".$_POST['search']['value']."%'";
				}
				$where = implode(" OR " , $where);
				$query .= ($query != '') ? ' AND ' : ' WHERE ';
				$query .= $where;
			}
			
			if(isset($_POST['course']) && $_POST['course'] != '' &&  $_POST['course'] != 'undefined'){
				$query .= ($query != '') ? ' AND ' : ' WHERE ';
				$query .= " `course_ID` ='".$_POST['course']."' ";
			}
			
			$recordsTotal = get_tabledata(TBL_BOOKINGS,true,array(), $query, 'COUNT(ID) as count');
			$recordsTotal = $recordsTotal->count;
			$data_list = get_tabledata(TBL_BOOKINGS,false,array(),$query.$sql);
			$recordsFiltered = $recordsTotal;
					
			if($data_list):
				foreach($data_list as $booking):
					$course = get_tabledata(TBL_COURSE_TYPE,true,array('ID' => $booking->course_ID));
					$row = array();
					$booking_name = __('Booking (#').$booking->ID.')';
					$booking_date = date('M d,Y',strtotime($booking->date_from)).' - '. date('M d,Y',strtotime($booking->date_to));
					array_push($row, $course->name);
					array_push($row, $booking_date);
					ob_start();
					?>
					<div class="text-center">
						<?php if( user_can('edit_booking') ): ?>
						<button type="button" class="btn btn-success btn-xs view-nurses" data-toggle="modal" data-target="#nurse-data-modal" data-booking="<?php echo $booking->ID;?>" onclick="get_nurses(this);"><i class="fa fa-view"></i>&nbsp;<?php _e('View Trainee(s)');?></button>
						<a href="<?php the_permalink('edit-booking',array('id' => $booking->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
						<?php endif; ?>
							
						<?php if( user_can('delete_booking') ): ?>
						<button type="button" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $booking->ID;?>" data-action="delete_booking"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></button>
						<?php endif; ?>
					</div>
					<?php 
					$action = ob_get_clean();
					array_push($row, $action);
					$data[] = $row;
				endforeach;
			endif;
			
			/* Response to client before JSON encoding */
			$response = array(
				'draw' => intval($draw),
				'recordsTotal' => $recordsTotal,
				'recordsFiltered'=> $recordsFiltered,
				'data' => $data,
				'xxx' => $query
			);
			return json_encode($response);
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
				$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
				$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
				$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
				$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
				$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();
				if(!empty($nurses)):
					ob_start(); ?>
					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
						<thead>
							<tr>
								<th><?php _e('Trainee Name'); ?></th>
								<th><?php _e('Date Book Received'); ?></th>
								<th><?php _e('Collected'); ?></th>
								<th><?php _e('Date book Returned'); ?></th>
								<th><?php _e('Attendance'); ?></th>
								<th><?php _e('Complete'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($nurses as $nurse): ?>
							<tr>
								<td><?php echo get_user_name($nurse);?></td>
								<td>
									<input type="text" readonly="readonly" name="date_book_received" class="form-control nurse-modal-datepicker" value="<?php echo (isset($date_book_received[$nurse]) && $date_book_received[$nurse] != '') ? date('M d,Y',strtotime($date_book_received[$nurse])) : '';?>" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>"/>
								</td>
								<td>
									<label><input type="checkbox" class="js-switch" <?php if(isset($collected[$nurse])) checked($collected[$nurse] , 1);?> onclick="javascript:nurse_modal_approve_switch(this);" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>" data-action="collected"/></label>
								</td>
								<td>
									<input type="text" readonly="readonly" name="date_book_returned" class="form-control nurse-modal-datepicker" value="<?php echo (isset($date_book_returned[$nurse]) && $date_book_returned[$nurse] != '') ? date('M d,Y',strtotime($date_book_returned[$nurse])) : '';?>" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>"/>
								</td>
								<td>
									<label><input type="checkbox" class="js-switch" <?php if(isset($attendance[$nurse] )) checked($attendance[$nurse] , 1);?> onclick="javascript:nurse_modal_approve_switch(this);" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>" data-action="attendance"/></label>
								</td>
								<td>
									<label><input type="checkbox" class="js-switch" <?php if(isset($enroll[$nurse])) checked($enroll[$nurse] , 1);?> onclick="javascript:nurse_modal_approve_switch(this);" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>" data-action="complete"/></label>
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
			$query = " WHERE `date_from` = '".$date."' ";
			if(!is_admin()){
				$query .= " AND `created_by` = ".get_current_user_id()." ";
			}
			$bookings = get_tabledata(TBL_BOOKINGS,false,array(), $query);
			if($bookings): 
			ob_start(); ?>
			<table class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('Course Name');?></th>
						<th><?php _e('Created On');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($bookings as $booking): $course = get_tabledata(TBL_COURSE_TYPE,true,array('ID' => $booking->course_ID));?>
					<tr>
						<td><?php _e($course->course_ID .' | '. $booking->name);?></td>
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
			$query = " WHERE GROUP BY `date_from` ";
			$return['html'] = '';
			$query = " WHERE `date_from` = '".$date."' AND `nurses` LIKE '%".$nurse_id."%' ";
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
					<?php foreach($bookings as $booking): $course = get_tabledata(TBL_COURSES,true,array('ID' => $booking->course_ID));?>
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
		
		public function nurse__modal__approve__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not update details, Please try again'),
				'reload' => 0
			);
			
			$type = trim($type);
			$booking_id = trim($booking_id);
			$user_id = trim($user_id);
			$return['status'] = 0;
			$return['html'] = '';
			$booking = get_tabledata(TBL_BOOKINGS,true,array('ID' => $booking_id));
			
			if($booking):
				if($type == 'date_book_received'){
					$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
					$date_book_received[$user_id] = date( 'Y-m-d',strtotime($status) );
					$update = $this->database->update(TBL_BOOKINGS, array('date_book_received' => $date_book_received), array('ID' => $booking->ID));
					if($update){
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User Booking details has been updated';
					}
				}
				
				if($type == 'date_book_returned'){
					$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
					$date_book_returned[$user_id] = date( 'Y-m-d',strtotime($status) );
					$update = $this->database->update(TBL_BOOKINGS, array('date_book_returned' => $date_book_returned), array('ID' => $booking->ID));
					if($update){
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User Booking details has been updated';
					}
				}
				
				if($type == 'collected'){
					$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
					$collected[$user_id] = $status;
					$update = $this->database->update(TBL_BOOKINGS, array('collected' => $collected), array('ID' => $booking->ID));
					if($update){
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User Booking details has been updated';
					}
				}
				
				if($type == 'attendance'){
					$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
					$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();
					$attendance[$user_id] = $status;
					$update = $this->database->update(TBL_BOOKINGS, array('attendance' => $attendance), array('ID' => $booking->ID));
					if($update){
						if($status == 0){
							$enroll[$user_id] = $status;
							$update = $this->database->update(TBL_BOOKINGS, array('enroll' => $enroll), array('ID' => $booking->ID));
							$return['reload'] = 1;
						}
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User Booking details has been updated';
					}
				}
				
				if($type == 'complete'){
					$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();
					$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
					if(!empty($attendance) && isset($attendance[$user_id]) && $attendance[$user_id] == 1):
						$enroll[$user_id] = $status;
						$update = $this->database->update(TBL_BOOKINGS, array('enroll' => $enroll), array('ID' => $booking->ID));
						if($update):
							$return['status'] = 1;
							$return['message_heading'] = __('Success !');
							$return['message'] = 'User Booking details has been updated';
						endif;
					else:
						$return['message'] = 'User booking attendance status is not complete yet.';
						$return['reload'] = 1;
					endif;
				}
			endif;
			
			return json_encode($return);
		}
	}
endif;
?>