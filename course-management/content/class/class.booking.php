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
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-booking submit-form" method="post" autocomplete="off">
				<div class="form-group">
					<label for="admins"><?php _e('Course Type');?>&nbsp;<span class="required">*</span></label>
					<select name="code" class="form-control select_single require" id="choose_course_type" data-placeholder="Choose course Type" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_COURSE_TYPE, false, array(), '', ' ID, CONCAT_WS(" | ", course_ID , name) AS name ');
						$option_data = get_option_data($data, array('ID', 'name'));
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
						$data = get_tabledata(TBL_USERS, false, array('user_role'=> 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data, array('ID', 'name'));
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
						$data = get_tabledata(TBL_LOCATIONS, false);
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data);
						?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="date_from">
						<?php _e('Booking Date From');?>&nbsp;<span class="required">*</span>
					</label>
					<input type="text" name="date_from" class="form-control input-datepicker" readonly="readonly"/>
				</div>
				
				<div class="form-group">
					<label for="date_to"><?php _e('Booking Date To');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="date_to" class="form-control input-datepicker" readonly="readonly" />
				</div>

				<div class="form-group">
					<label for="max_trainee"><?php _e('Max Trainees');?>&nbsp;<span class="required">*</span></label>
					<input type="number" name="max_trainee" class="form-control require" min="0" max = "100" value="0"/>
				</div>

				<div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" id="choose_trainees" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_USERS, false, array('user_role'=> 'nurse'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data);
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="colour"><?php _e('Assigned Colour');?>&nbsp;</label>
					<input name = "colour" class="jscolor" value="ab2567">
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
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking__id));
			if( !user_can( 'edit_booking') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$booking):
				echo page_not_found('Oops ! Booking Details Not Found.', 'Please go back and check again !');
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
						$data = get_tabledata(TBL_USERS, false, array('user_role'=> 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data, maybe_unserialize($booking->admins));
						?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="description"><?php _e('Notes');?></label>
					<textarea name="description" class="form-control" rows="3"><?php _e($booking->description);?></textarea>
				</div>
				
				<div class="form-group">
					<label for="location"><?php _e('Location(s)');?>&nbsp;<span class="required">*</span></label>
					<select name="location" class="form-control select_single require" data-placeholder="Choose location">
						<?php
						$data = get_tabledata(TBL_LOCATIONS, false);
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data, maybe_unserialize($booking->location));
						?>
					</select>
                    <div id="go">
                    </div>
                    <button id="another" onclick="anotherLink()" type="button">Add new Location</button>
                    
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
					<label for="max_trainee">
						<?php _e('Max Trainees');?>&nbsp;<span class="required">*</span>
					</label>
					<input type="number" name="max_trainee" class="form-control require" min="0" max = "100" value="<?php echo $booking->max_num; ?>"/>
				</div>
				
				<div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_USERS, false, array('user_role'=> 'nurse'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data, maybe_unserialize($booking->nurses));
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="colour"><?php _e('Assigned Colour');?>&nbsp;</label>
					<input name = "colour" class="jscolor" value="<?php echo $booking->colour_ID; ?>">
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
				$args = array('created_by'=> get_current_user_id());
			}
			$bookings = get_tabledata(TBL_BOOKINGS, false, $args);
			if( !user_can('view_booking') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$bookings):
				echo page_not_found("Oops! There is no New bookings record found", ' ', false);
			else:
			?>
			<form action="<?php the_permalink('bookings');?>" method="GET">
				<div class="row custom-filters">
					<div class="form-group col-sm-2 col-xs-6">
						<label for="courses"><?php _e('Course');?></label>
						<select name="course" class="form-control select_single" data-placeholder="Choose course">
							<?php
							$data = get_tabledata(TBL_COURSE_TYPES, false, array(), '', ' ID, CONCAT_WS(" | ", course_ID, name) AS name');
							$option_data = get_option_data($data, array('ID', 'name'));
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
						<th><?php _e('Capacity');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>

			</table>
			<?php
			echo $this->booking__data__modal();
			echo $this->nurses__data__modal();
            echo $this->enrol__data__modal();
			echo $this->additional__information__data__modal();
			echo $this->add__booking__modal();
			echo $this->remove__trainee__modal();
			endif;
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
        
        public function enrol__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="enrol-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Add Attendees');?></h1>
						</div>
						<div class="modal-body">
							<div id="enrol-data-modal-body"></div>
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

		public function additional__information__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="additional-information-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Additional Information');?></h1>
						</div>
						<div class="modal-body">
							<div id="additional-information-data-modal-body"></div>
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
						<div class="modal-body"><?php echo $this->add__booking__page(); ?></div>
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
		
		public function remove__trainee__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="remove-trainee-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Remove trainee');?></h1>
						</div>
						<div class="modal-body">
							<form class="submit-form remove-trainee-modal-form" method="post" action="">
								<div class="form-group">
									<label><?php _e('Please give a reason for removing trainee');?></label>
									<textarea name="reason" class="form-control require" placeholder="Enter the reason..." rows="5"></textarea>
								</div>
								<div class="form-group">
									<input type="hidden" name="booking_id" value=""/>
									<input type="hidden" name="user_id" value=""/>
									<input type="hidden" name="action" value="nurse_modal_remove"/>
									<button class="btn btn-block btn-success" type="submit"><?php _e('Submit');?></button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden remove-trainee-modal-btn" data-toggle="modal" data-target="#remove-trainee-modal"></div>
			<?php
			return ob_get_clean();
		}
		
		public function view__calendar__page(){
			ob_start(); ?>
			<form action="<?php the_permalink('view-booking-calendar');?>" method="GET">
				<div class="row calendar-custom-filters">
					<div class="form-group col-sm-2 col-xs-6">
						<label for="courses"><?php _e('Course Types');?></label>
						<select name="course" class="form-control select_single" data-placeholder="Choose course" onchange="this.form.submit();">
							<?php
							$data = get_tabledata(TBL_COURSE_TYPES, false, array(), '', ' ID, course_ID AS name');
							$option_data = get_option_data($data, array('ID', 'name'));
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
			echo $this->additional__information__data__modal();
			echo $this->add__booking__modal();
			echo $this->remove__trainee__modal();
			return ob_get_clean();
		}

		public function view__calendar__scripts(){
			ob_start();
			?>
			<!-- FullCalendar -->
			<script>
				$(window).load(function(){
					var date = new Date(), 
					d = date.getDate(), 
					m = date.getMonth(), 
					y = date.getFullYear(), 
					started, 
					categoryClass;
					var calendar = $('#calendar').fullCalendar({
						header: {
							left: 'prev, next today, month, agendaWeek, agendaDay, ', 
							center: 'title', 
							right: 'listDay, listWeek, listMonth, listYear, agendaFourMonth'
						},

						// customize the button names, 
						// otherwise they'd all just say "list"
						views: {
							listDay: { buttonText: 'list day' },
							listWeek: { buttonText: 'list week' },
							listMonth: { buttonText: 'list month' },
							listYear: { buttonText: 'list year' },
							agendaFourMonth: {
								type: 'list', 
								duration: { months: 4 },
								buttonText: 'list 4 months'
							}
						},
						
						selectable: true, 
						selectHelper: true, 
						select: function(start, end){
							var s_date = new Date(start._d);
							var e_date = new Date(end._d);
							var modal = $("#add-booking-modal");
							modal.find('form input[name="date_from"]').val(moment(s_date).format('MMMM DD, YYYY'));
							modal.find('form input[name="date_to"]').val(moment(e_date).subtract(1, 'days').format('MMMM DD, YYYY'));
							$('.add-booking-modal-btn').click();
						},
						eventClick: function(calEvent, jsEvent, view){
							$('.fc_create').click();
							var date = new Date(calEvent.start._i);
							var schedule_date = date.toString('yyyy-MM-dd');
							MainJs.get_available_bookings(schedule_date, 'fetch_available_bookings');
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
				$args = array('created_by'=> get_current_user_id());
			}
			if( isset($_GET['course']) && $_GET['course'] != ''){
				$args['course'] = $_GET['course'];
				$args = array('course_ID'=> $_GET['course']);
			}

			$results = get_tabledata(TBL_BOOKINGS, false, $args, 'GROUP BY `date_from`', array('COUNT(ID) as count' , 'date_from', 'date_to'));
			if($results):
				$return = array();
				foreach($results as $data):
					array_push($return, array('title'=> 'Courses booked ('.$data->count.')' , 'start'=> date('Y-m-d', strtotime($data->date_from ) ) , 'end' => isset($data->date_to) && $data->date_to != '' ? $this->add_date($data->date_to, '1 day') : $this->add_date($data->date_from, '1 day') ) );
				endforeach;
				return json_encode($return);
			else:
				return false;
			endif;
		}

		public function view__nurse__calendar__page(){
			ob_start(); ?>
			<div id="calendar"></div>
			<?php
			echo $this->view__nurse__calendar__scripts();
			echo $this->booking__data__modal();
			return ob_get_clean();
		}

		public function view__nurse__calendar__scripts(){
			ob_start(); ?>
			<!-- FullCalendar -->
			<script>
				$(window).load(function(){
					var date = new Date(), 
					d = date.getDate(), 
					m = date.getMonth(), 
					y = date.getFullYear(), 
					started, 
					categoryClass;

					var calendar = $('#calendar').fullCalendar({
						header: {
							left: 'prev, next today, month, agendaWeek, agendaDay, ', 
							center: 'title', 
							right: 'listDay, listWeek, listMonth, listYear, agendaFourMonth'
						},

						// customize the button names, 
						// otherwise they'd all just say "list"
						views: {
							listDay: { buttonText: 'list day' },
							listWeek: { buttonText: 'list week' },
							listMonth: { buttonText: 'list month' },
							listYear: { buttonText: 'list year' },
							agendaFourMonth: {
								type: 'list', 
								duration: { months: 4 },
								buttonText: 'list 4 months'
							}
						},
						selectable: true, 
						selectHelper: true, 
						select: false, 
						eventClick: function(calEvent, jsEvent, view){
							$('.fc_create').click();
							var date = new Date(calEvent.start._i);
							var schedule_date = date.toString('yyyy-MM-dd');
							MainJs.get_available_bookings(schedule_date, 'fetch_available_nurse_bookings');
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
			$results = get_tabledata(TBL_BOOKINGS, false, array(), $query, array('COUNT(ID) as count' , 'date_from', 'date_to'));
			if($results):
				$return = array();
				foreach($results as $data):
					array_push($return, array('title'=> 'Available Bookings ('.$data->count.')' , 'start'=> date('Y-m-d', strtotime($data->date_from ) ) , 'end' => isset($data->date_to) && $data->date_to != '' ? $this->add_date($data->date_to, '1 day') : $this->add_date($data->date_from, '1 day') ) );
				endforeach;
				return json_encode($return);
			else:
				return false;
			endif;
		}

		public function add_date($d, $str){
			$d = date('Y-m-d', strtotime($d) );
			$date = date_create($d);
			date_add($date, date_interval_create_from_date_string($str));
			return date_format($date, "Y-m-d");
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
							'booked'=> 1, 
						), 
						array(
							'user_ID' => $nurse, 
							'course_ID'=> $code, 
						)
					);
				}

				$guid = get_guid(TBL_BOOKINGS);
				$course = get_tabledata(TBL_COURSE_TYPE, true, array('ID'=> $code));
				$bb = $course->course_ID ." | ". $course->name . " | ". $name;

				$result = $this->database->insert(TBL_BOOKINGS, 
					array(
						'ID' => $guid, 
						'course_ID' => $code, 
						'name' => $bb, 
						'colour_ID' => $colour, 
						'admins' => $admins, 
						'description' => $description, 
						'location' => $location, 
						'nurses' => $nurses, 
						'max_num' => $max_trainee, 
						'date_book_received'=> $date_book_received, 
						'date_book_returned'=> $date_book_returned, 
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
					'course_ID'=> $code, 
				);

				$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));
				$old_enroll = maybe_unserialize($booking->enroll);
				$old_attendance = maybe_unserialize($booking->attendance);
				$old_collected = maybe_unserialize($booking->collected);
				$old_date_book_returned = maybe_unserialize($booking->date_book_returned);
				$old_date_book_received = maybe_unserialize($booking->date_book_received);
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
						'colour_ID' => $colour, 
						'nurses' => $nurses, 
						'max_num' => $max_trainee, 
						'date_book_received'=> $date_book_received, 
						'date_book_returned'=> $date_book_returned, 
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

			return json_encode($return);
		}
        
        public function update__attendees__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update booking, Please try again.'), 
				'reset_form' => 0
			);
            
            error_log(json_encode($nurses));
            
			/*if( user_can('edit_booking') ):
				$validation_args = array(
					'course_ID'=> $code, 
				);

				$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));
				$old_enroll = maybe_unserialize($booking->enroll);
				$old_attendance = maybe_unserialize($booking->attendance);
				$old_collected = maybe_unserialize($booking->collected);
				$old_date_book_returned = maybe_unserialize($booking->date_book_returned);
				$old_date_book_received = maybe_unserialize($booking->date_book_received);
				$enroll = array();
				foreach($nurses as $nurse){
					$enroll[$nurse] = isset($old_enroll[$nurse]) ? $old_enroll[$nurse] : 0;
					$attendance[$nurse] = isset($old_attendance[$nurse]) ? $old_attendance[$nurse] : 0;
					$collected[$nurse] = isset($old_collected[$nurse]) ? $old_collected[$nurse] : 0;
					$date_book_returned[$nurse] = isset($old_date_book_returned[$nurse]) ? $old_date_book_returned[$nurse] : '';
					$date_book_received[$nurse] = isset($old_date_book_received[$nurse]) ? $old_date_book_received[$nurse] : '';
				}*/
            
				$result = $this->database->update(TBL_BOOKINGS, 
					array(
						'nurses' => $nurses, 
					), 
					array(
						'ID'=> $booking_id
					)
				);
				
				if($result):
					$notification_args = array(
						'title' => __('Booking updated'), 
						'notification'=> __('You have successfully updated attendees.'), 
					);

					add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = __('Success !');
					$return['message'] = __('Attendees has been updated successfully.');
				endif;

			return json_encode($return);
		}
        
        
        

		public function delete__booking__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_booking') ):
				$data = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_BOOKINGS, $args);
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
				2=> 'date_from', 
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

			$sql = sprintf(" ORDER BY %s %s LIMIT %d , %d ", $orderBy, $orderType , $start , $length);
			$data= array();
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

			if(isset($_POST['course']) && $_POST['course'] != '' && $_POST['course'] != 'undefined'){
				$query .= ($query != '') ? ' AND ' : ' WHERE ';
				$query .= " `course_ID` ='".$_POST['course']."' ";
			}

			$recordsTotal = get_tabledata(TBL_BOOKINGS, true, array(), $query, 'COUNT(ID) as count');
			$recordsTotal = $recordsTotal->count;
			$data_list = get_tabledata(TBL_BOOKINGS, false, array(), $query.$sql);
			$recordsFiltered = $recordsTotal;

			if($data_list):
				foreach($data_list as $booking):
					$course = get_tabledata(TBL_COURSE_TYPE, true, array('ID'=> $booking->course_ID));
					$row = array();
					$booking_name = __('Booking (#').$booking->ID.')';
                    $nurses = null;
                    if(isset($booking->nurses)){
                       $nurses = maybe_unserialize($booking->nurses); 
                    }
					
					$i = 0;
                    if($nurses){
                        foreach($nurses as $nurse):
                            $i += 1;
                        endforeach;
                    }
					
					$attend = $i."/".$booking->max_num;

					$booking_date = date('M d, Y', strtotime($booking->date_from)).' - '. date('M d, Y', strtotime($booking->date_to));
					array_push($row, $booking->name);
					array_push($row, $booking_date);
					array_push($row, $attend);
					ob_start();
					?>
					<div class="text-center">
						<?php if( user_can('edit_booking') ): ?>
						<button type="button" class="btn btn-success btn-xs get-nurses" data-toggle="modal" data-target="#nurse-data-modal" data-booking="<?php echo $booking->ID;?>" data-course="<?php echo $booking->course_ID;?>">
							<i class="fa fa-view"></i>&nbsp;<?php _e('View Trainee(s)');?>
						</button>
                        <button type="button" class="btn btn-success btn-xs enrol-nurses" data-toggle="modal" data-target="#enrol-data-modal" data-booking="<?php echo $booking->ID;?>">
							<i class="fa fa-view"></i>&nbsp;<?php _e('Enrol Trainee(s)');?>
						</button>
                        <button type="button" class="btn btn-success btn-xs print-register" booking_id="<?php echo $booking->ID;?>">
							<i class="fa fa-view"></i>&nbsp;<?php _e('Print Register');?>
						</button>
						<a href="<?php the_permalink('edit-booking', array('id'=> $booking->ID));?>" class="btn btn-dark btn-xs">
							<i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?>
						</a>
						<?php endif; ?>

						<?php if( user_can('delete_booking') ): ?>
						<button type="button" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $booking->ID;?>" data-action="delete_booking">
							<i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?>
						</button>
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

		public function fetch__booking__nurses__process(){
			extract($_POST);
			$booking_id = trim($booking_id);
			$return['html'] = '';
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));
			if($booking):
				$nurses = maybe_unserialize($booking->nurses);
                $admins = maybe_unserialize($booking->admins);
				$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
				$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
				$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
				$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
				$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();
				if(!empty($nurses)):
					ob_start();
					//checks if the settings under 'course settings' contains the course which requires additional information
					$settings = get_tabledata(TBL_C_SET, true, array('ID'=> 1));
					$c1 = unserialize($settings->course_type);
					$found = array_key_exists($booking->course_ID, $c1) ? 1 : 0;
					?>
					<a href="<?php the_permalink('edit-booking', array('id'=> $booking->ID));?>" class="btn btn-dark btn-xs">
						<i class="fa fa-edit"></i>&nbsp;<?php _e('Modify Trainee(s)');?>
					</a>
                    
					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
                        <thead>
                            <tr>
                                <th>Mentor(s)</th>
                                <th>Course Director(s)</th>
                                <th>Medical Director(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php foreach($admins as $admin): echo get_user_name($admin);?><br><?php endforeach;?></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <form class="update_mentor_student_numbers submit-form" method="post" autocomplete="off">
					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
						<thead>
							<tr>
								<th><?php _e('Trainee Name'); ?></th>
								<th><?php _e('Attendance'); ?></th>
								<th><?php _e('Complete'); ?></th>
                                <?php if($course_id=='10000102735'):?>
                                <th><?php _e('Students Mentored'); ?></th>
                                <th><?php _e('Completed Triennial Review'); ?></th>
                                <?php endif; ?>
								<th><?php _e('Reminder'); ?></th>
								<th><?php _e('Additional Information');?></th>
								<th><?php _e('Remove'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($nurses as $nurse): ?>
							<tr>
								<td><?php echo get_user_name($nurse);?></td>
								<td><label><input type="checkbox" class="js-switch nurse-modal-approve-switch" <?php if(isset($attendance[$nurse] )) checked($attendance[$nurse] , 1);?> data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>" data-action="attendance"/></label></td>
								<td><label><input type="checkbox" class="js-switch nurse-modal-approve-switch" <?php if(isset($enroll[$nurse])) checked($enroll[$nurse] , 1);?> data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>" data-action="complete"/></label></td>
                                <?php if($course_id=='10000102735'):
                                $mentor = get_tabledata(TBL_MENTORS, true, array('user_ID'=> $nurse));
                                $students = array();
                                $studentNum;
                                $found=false;
                                $triennial_review;
                                $bookingdate=$booking->date_from;
                                if($mentor->students){
                                    $students = maybe_unserialize($mentor->students);
                                }
                                $triennial_review=$mentor->triennial_review;
                                foreach($students as $record){
                                    $formatted = explode("///",$record);
                                    if($formatted[0]==$bookingdate){
                                        $studentNum=$formatted[1];
                                        $found=true;
                                    }
                                }
                                ?>
                                <td><input type="text" name="<?php echo $mentor->user_ID;?>" value="<?php echo ($found) ? $studentNum : '';?>"/></td>
                                <td><label><input type="checkbox" class="js-switch nurse-modal-approve-switch" <?php checked($triennial_review , 1);?> data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>" data-action="triennial_review"/></label></td>
                                <?php endif; ?>
								<td><label><button type="button" class="btn btn-dark btn-xs remind-nurse-btn" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>"><?php _e('Send');?></button></label></td>
								<td><label><button type="button" class="btn btn-info btn-xs get-additional-information" data-toggle="modal" data-target="#additional-information-data-modal" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>"><?php _e('View');?></button></label></td>
								<td><label><button type="button" class="btn btn-danger btn-xs remove-nurse-btn" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>"><?php _e('Remove');?></button></label></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
                    <div class="form-group">
                        <div class="ln_solid"></div>
                        <input type="hidden" name="action" value="update_mentor_student_numbers" />
                        <input type="hidden" name="booking_id" value="<?php echo $booking_id;?>" />
                        <button class="btn btn-success btn-md" type="submit"><?php _e('Update');?></button>
                    </div>
                </form>
                <?php
					$return['html'] = ob_get_clean();
				endif;
			endif;
			return json_encode($return);
		}
        
        public function enrol__nurses__process(){
			extract($_POST);
			$booking_id = trim($booking_id);
			$return['html'] = '';
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));
			if($booking):
				$nurses = maybe_unserialize($booking->nurses);
                $admins = maybe_unserialize($booking->admins);
				$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
				$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
				$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
				$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
				$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();
					ob_start();
            ?>
                <form class="update-attendees submit-form" method="post" autocomplete="off">
                    <div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
						<?php
                        if($booking->course_ID=='10000102735'){
                            $ret = $this->get__mentor__list();
                            $option_data = json_decode($ret)->mentors;
                            $option_data = get_option_data($option_data, array('ID', 'name'));
                            error_log("OPTION DATA ".json_encode($option_data));
                        }else{
                            $data = get_tabledata(TBL_USERS, false, array('user_role'=> 'nurse'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
                            $option_data = get_option_data($data, array('ID', 'name'));
                        }
                        if($nurses){
                            echo get_options_list($option_data, maybe_unserialize($booking->nurses));
                        }else{
                            echo get_options_list($option_data);
                        }
						
						?>
					</select>
				</div>

                <div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="update_attendees" />
					<input type="hidden" name="booking_id" value="<?php echo $booking->ID;?>" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update Attendees');?></button>
				</div>
			</form>
					<?php
					$return['html'] = ob_get_clean();
			endif;
			return json_encode($return);
		}
        
        
        public function get__register__process(){
            extract($_POST);
			$booking_id = trim($booking_id);
			$return['html'] = '';
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));
			if($booking):
				$nurses = maybe_unserialize($booking->nurses);
                $name = $booking->name;
				if(!empty($nurses)):
					ob_start();
                    ?>
                    <h1><?php echo $name; ?></h1>
					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Signature</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($nurses as $nurse): echo "<tr>
                                <td>".get_user_name($nurse)."</td>
                                <td></td><td></td></tr>";
                            endforeach;?>
                        </tbody>
                    </table>
                    <br>
					<?php
					$return['html'] = ob_get_clean();
				endif;
			endif;
			return json_encode($return);
		}
        
        

		public function fetch__booking__additional__information__process(){
			extract($_POST);
			$booking_id = trim($booking_id);
			$return['html'] = '';
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));
			if($booking):
				$nurses = maybe_unserialize($booking->nurses);
				$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
				$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
				$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
				$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
				$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();
				if(!empty($nurses) && in_array($user_id, $nurses ) ):
					$nurse = $user_id;
					ob_start();
					?>
					<a href="<?php the_permalink('edit-booking', array('id'=> $booking->ID));?>" class="btn btn-dark btn-xs">
						<i class="fa fa-edit"></i>&nbsp;<?php _e('Modify Trainee(s)');?>
					</a>
					<button type="button" class="btn btn-info btn-xs get-nurses" data-toggle="modal" data-target="#nurse-data-modal" data-booking="<?php echo $booking->ID;?>">
						<?php _e('View Trainee(s)');?>
					</button>
					<div>&nbsp;</div>
					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
						<thead>
							<tr>
								<th><?php _e('Trainee Name'); ?></th>
								<th><?php _e('Date Book Received'); ?></th>
								<th><?php _e('Collected'); ?></th>
								<th><?php _e('Date book Returned'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo get_user_name($nurse);?></td>
								<td><input type="text" readonly="readonly" name="date_book_received" class="form-control nurse-modal-datepicker" value="<?php echo (isset($date_book_received[$nurse]) && $date_book_received[$nurse] != '') ? date('M d, Y', strtotime($date_book_received[$nurse])) : '';?>" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>"/></td>
								<td><label><input type="checkbox" class="js-switch nurse-modal-approve-switch" <?php if(isset($collected[$nurse])) checked($collected[$nurse] , 1);?> data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>" data-action="collected"/></label></td>
								<td><input type="text" readonly="readonly" name="date_book_returned" class="form-control nurse-modal-datepicker" value="<?php echo (isset($date_book_returned[$nurse]) && $date_book_returned[$nurse] != '') ? date('M d, Y', strtotime($date_book_returned[$nurse])) : '';?>" data-booking="<?php echo $booking_id;?>" data-user="<?php echo $nurse;?>"/></td>
							</tr>
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
			if( !is_admin() && is_user_logged_in()){
				$query .= " AND `created_by` = ".get_current_user_id()." ";
			}
			$bookings = get_tabledata(TBL_BOOKINGS, false, array(), $query);
			if($bookings):
				ob_start(); ?>
				<table class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('Course Colour');?></th>
							<th><?php _e('Course Name');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($bookings as $booking):
							$course = get_tabledata(TBL_COURSE_TYPE, true, array('ID'=> $booking->course_ID));?>
						<tr>
							<td width ="1" bgcolor="<?php echo $booking->colour_ID;?>"></td>
							<td><?php _e($course->course_ID .' | '. $booking->name);?></td>
							<td class="text-center">
								<?php if( user_can('edit_booking') ): ?>
								<button type="button" class="btn btn-success btn-xs get-nurses" data-toggle="modal" data-target="#nurse-data-modal" data-booking="<?php echo $booking->ID;?>">
									<i class="fa fa-view"></i>&nbsp;<?php _e('View Trainee(s)');?>
								</button>
								<?php endif;
								$now = new DateTime();
								$date = new DateTime($booking->date_to);
								$nurses = maybe_unserialize($booking->nurses);
								$i = count($nurses);
								$space = $booking->max_num - $i;
								if( $date < $now){
									echo "This course has ended.";
								} else{
									if($space > 0){ ?>
									<button type="button" class="btn btn-dark btn-xs add-pending-bookings" data-booking="<?php echo $booking->ID; ?>" data-course="<?php echo $booking->course_ID;?>" data-name="<?php _e($course->course_ID .' | '. $course->name);?>"><i class="fa fa-plus"></i>&nbsp;<?php _e('Enroll');?></button>
									<?php } else{
										echo "No space available.";
									}
								} ?>
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
			$return['html'] = '';
			$nurse_id = get_current_user_id();
			$query = " WHERE `date_from` = '".$date."' AND `nurses` LIKE '%".$nurse_id."%' ";
			$bookings = get_tabledata(TBL_BOOKINGS, false, array(), $query);
			if($bookings):
				ob_start(); ?>
				<table class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('Course colour');?></th>
							<th><?php _e('#Booking');?></th>
							<th><?php _e('Course Name');?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($bookings as $booking):
							$course = get_tabledata(TBL_COURSE_TYPE, true, array('ID'=> $booking->course_ID));?>
						<tr>
							<td width ="1" bgcolor="<?php echo $booking->colour_ID;?>"></td>
							<td><?php echo __('Booking (#').$booking->ID.')';?></td>
							<td><?php _e($course->course_ID .' | '. $booking->name);?></td>
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
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));

			if($booking):
				if($type == 'date_book_received'){
					$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
					$date_book_received[$user_id] = date( 'Y-m-d', strtotime($status) );
					$update = $this->database->update(TBL_BOOKINGS, array('date_book_received'=> $date_book_received), array('ID'=> $booking->ID));
					if($update){
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User Booking details has been updated';
					}
				}

				if($type == 'date_book_returned'){
					$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
					$date_book_returned[$user_id] = date( 'Y-m-d', strtotime($status) );
					$update = $this->database->update(TBL_BOOKINGS, array('date_book_returned'=> $date_book_returned), array('ID'=> $booking->ID));
					if($update){
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User Booking details has been updated';
					}
				}

				if($type == 'collected'){
					$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
					$collected[$user_id] = $status;
					$update = $this->database->update(TBL_BOOKINGS, array('collected'=> $collected), array('ID'=> $booking->ID));
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
					$update = $this->database->update(TBL_BOOKINGS, array('attendance'=> $attendance), array('ID'=> $booking->ID));
					if($update){
						if($status == 0){
							$enroll[$user_id] = $status;
							$update = $this->database->update(TBL_BOOKINGS, array('enroll'=> $enroll), array('ID'=> $booking->ID));
							$return['reload'] = 1;
						}
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User Booking details has been updated';
					}
				}

				if( $type == 'complete' ){
					$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();
					$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
					if(!empty($attendance) && isset($attendance[$user_id]) && $attendance[$user_id] == 1):
						$enroll[$user_id] = $status;
						$update = $this->database->update(TBL_BOOKINGS, array( 'enroll'=> $enroll ), array('ID'=> $booking->ID));
						if($update):
							/*============= Send email to user =============*/
							$template_id = get_option('course_complete');
							if( $template_id != '' && $status == 1){
								$email_subject = get_table_column_data( TBL_TEMPLATES, 'subject', array( 'ID' => $template_id) );
								$email_body = get_table_column_data( TBL_TEMPLATES, 'body', array( 'ID' => $template_id) );
								if($email_body && $email_subject){
									$user_data = get_userdata( $user_id );
									$email_body = get_replaced_string( $email_body, 
										array(
											'{{first_name}}' => $user_data->first_name, 
											'{{last_name}}' => $user_data->last_name,
											'{{user_email}}' => $user_data->user_email,
										)
									);
									$email_sent = send_email($user_data->user_email, $email_subject, $email_body);
								}
							}
							/*============= Send email to user =============*/
							$return['status'] = 1;
							$return['message_heading'] = __('Success !');
							$return['message'] = 'User Booking details has been updated';
						endif;
					else:
						$return['message'] = 'User booking attendance status is not complete yet.';
						$return['reload'] = 1;
					endif;
				}

				if($type == 'reminder'){
					$email_sent = false;
					/*============= Send email to user =============*/
					$template_id = get_option('booking_reminder');
					if( $template_id != ''){
						$email_subject = get_table_column_data( TBL_TEMPLATES, 'subject', array( 'ID' => $template_id) );
						$email_body = get_table_column_data( TBL_TEMPLATES, 'body', array( 'ID' => $template_id) );
						if($email_body && $email_subject){
							$user_data = get_userdata( $user_id );
							$email_body = get_replaced_string( $email_body, 
								array(
									'{{first_name}}' => $user_data->first_name, 
									'{{last_name}}' => $user_data->last_name,
									'{{user_email}}' => $user_data->user_email,
								)
							);
							$email_sent = send_email($user_data->user_email, $email_subject, $email_body);
						}
					}
					/*============= Send email to user =============*/
					if( $email_sent ){
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'Reminder has been sent.';
					}else{
						$return['message_heading'] = __('Nope !');
						$return['message'] = 'Reminder not sent';
					}
				}
                if($type == 'triennial_review'){
                    $update = $this->database->update(TBL_MENTORS, array('triennial_review'=> $status), array('user_ID'=> $user_id));
					if($update){
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = 'User has been updated';
					}
                }
			endif;
			return json_encode($return);
		}

		public function nurse__modal__remove__process(){
			extract($_POST);

			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not remove trainee., Please try again'), 
				'reset_form' => 0
			);
		
			$booking_id = trim($booking_id);
			$user_id = trim($user_id);
			$booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $booking_id));

			if($booking):
				$nurses = maybe_unserialize($booking->nurses);
				$enroll = maybe_unserialize($booking->enroll);
				$attendance = maybe_unserialize($booking->attendance);
				$collected = maybe_unserialize($booking->collected);
				$date_book_returned = maybe_unserialize($booking->date_book_returned);
				$date_book_received = maybe_unserialize($booking->date_book_received);
				
				$insert = $this->database->insert( TBL_REMOVED_USERS, 
					array(
						'course_ID' => $booking->course_ID, 
						'user_ID' => $user_id, 
						'booking_ID' => $booking->ID, 
						'reason' => stripslashes($reason)
					)
				);
				
				if($insert):
					$last_insert_id = $this->database->insert_id;
					
					if( !empty($nurses) && ($key = array_search($user_id, $nurses)) !== false){
						unset($nurses[$key]);
						unset($enroll[$user_id]);
						unset($attendance[$user_id]);
						unset($collected[$user_id]);
						unset($date_book_returned[$user_id]);
						unset($date_book_received[$user_id]);
						
						$result = $this->database->update(TBL_BOOKINGS, 
							array(
								'nurses' => $nurses, 
								'date_book_received'=> $date_book_received, 
								'date_book_returned'=> $date_book_returned, 
								'collected' => $collected, 
								'enroll' => $enroll, 
								'attendance' => $attendance, 
							), 
							array(
								'ID'=> $booking_id
							)
						);
						
						if($result){
							$return['status'] = 1;
							$return['reset_form'] = 1;
							$return['reload'] = 1;
							$return['message_heading'] = __('Success !');
							$return['message'] = 'Trainee has been removed from booking.';
						}else{
							$this->database->delete( TBL_REMOVED_USERS, array( 'ID' => $last_insert_id));
						}
					}
				endif;
			endif;

			return json_encode($return);
		}
        
        public function get__mentor__list(){
            extract($_POST);
            $data = get_tabledata(TBL_MENTORS, false);
            $mentor_ids=array();
            foreach($data as $mentor):
                $mentor_ids[] = $mentor->user_ID;
            endforeach;
            $data = get_tabledata(TBL_USERS, false, array('ID'=> $mentor_ids), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS    name ');
             if(!isset($freshList)):
            $return['mentors']=$data;                 
            else:          
             $option_data = get_option_data($data, array('ID', 'name'));
            $return['mentors'] = get_options_list($option_data);          
            endif;
           
           
            return json_encode($return);

        }
        
        public function update__mentor__student__numbers(){
            $return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update booking, Please try again.'), 
				'reset_form' => 0
			);
            $bookingdate;
            if (isset($_POST['booking_id'])){
                $booking = get_tabledata(TBL_BOOKINGS, true, array('ID'=> $_POST['booking_id']));
                $bookingdate=$booking->date_from;
                unset($_POST['booking_id']);
            }
            foreach ($_POST as $key => $value) {
                $mentor = get_tabledata(TBL_MENTORS, true, array('user_ID'=> $key));
                $students=array();
                if($mentor){
                    $found = false;
                    
                    if($mentor->students){
                        $students = maybe_unserialize($mentor->students);
                    }
                    foreach($students as $record){
                        $formatted = explode("///",$record);
                        if($formatted[0]==$bookingdate){
                            $index = array_search($record,$students);
                            $students[$index]="$bookingdate///$value";
                            $found=true;
                        }
                    }
                    if(!$found){
                        array_push($students,"$bookingdate///$value");
                    }
                    
                    //do something
                    $result = $this->database->update(TBL_MENTORS, 
                        array(
                            'students'=> $students, 
                        ), 
                        array(
                            'user_ID' => $key, 
                        )
                        );
                    if($result):
                    $notification_args = array(
                        'title' => __('Student numbers updated'), 
                        'notification'=> __('You have successfully updated student numbers for mentors.'), 
                    );
                    add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = __('Success !');
                    $return['message'] = __('Mentor student numbers have been successfully updated.');
                    endif;
                }
                
            }
            
            return json_encode($return);
        }
	}
	$Booking = new Booking();
endif;
?>