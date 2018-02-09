<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Pending_Bookings') ):
	class Pending_Bookings	{

		private $database;
		private $current__user__id;
		private $current__user;

		function __construct(){
			global $db;
			$this->database = $db;
			$this->current__user__id = get_current_user_id();
			$this->current__user = get_userdata($this->current__user__id);
		}
		
		public function add__booking__page(){
			ob_start();
			?>
			<form class="add-pending-booking submit-form" method="post" autocomplete="off">
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="title"><?php _e('Title');?>&nbsp;<span class="required">*</span></label>
						<select name="title" class="form-control select_single require" data-placeholder="Choose Title">
							<?php
							$option_data = array('Mr' => 'Mr', 'Mrs' => 'Mrs', 'Dr' => 'Dr', 'Ms' => 'Ms');
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					<div class="col-sm-4 form-group">
						<label for="first_name"><?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="first_name" class="form-control require" value=""/>
					</div>
					<div class="col-sm-4 form-group">
						<label for="last_name"><?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="last_name" class="form-control require" value=""/>
					</div>
				</div>
				<div class="row">
                    
					<div class="col-sm-4 form-group">
						<label for="preferred_name"><?php _e('Preferred Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="preferred_name" class="form-control require" value=""/>
					</div>
					<div class="col-sm-4 form-group">
						<label for="professional_registeration_no"><?php _e('Professional Registeration No');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="professional_registeration_no" class="form-control require" value=""/>
					</div>
					<div class="col-sm-4 form-group">
						<label for="email"><?php _e('Email');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="email" class="form-control require" value="" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="telephone_no"><?php _e('Telephone No');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="telephone_no" class="form-control require" value="" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="address"><?php _e('Address');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="address" class="form-control require" value="" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="postcode"><?php _e('Postcode');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="postcode" class="form-control require" value="" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="employer"><?php _e('Employer');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="employer" class="form-control require" value="" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="current_role"><?php _e('Current Role');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="current_role" class="form-control require" value="" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="specialty"><?php _e('Specialty');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="specialty" class="form-control require" value="" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 form-group">
						<label for="employer_address"><?php _e('Employer Address');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="employer_address" class="form-control require" value="" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="employer_postcode"><?php _e('Employer Postcode');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="employer_postcode" class="form-control require" value="" />
					</div>
				</div>
				
				<div class="form-group">
					<label for="employer_postcode"><?php _e('Course Applied For');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="course_name" class="form-control require" value="" readonly=""/>
					<input type="hidden" name="course_id" value="" />
					<input type="hidden" name="booking_id" value="" />
				</div>
				
				<div class="form-group">
					<label><input type="checkbox" class="flat require" name="paid" checked="checked" value="1">&nbsp;<?php _e('I\'ve paid using a debit/credit card ( Please call us on xxxx).');?></label>
				</div>
				
				<div class="row">
					<div class="col-sm-12 form-group">
						<h4><?php _e('Digital Signature');?></h4>
						<p><?php _e('By filling out your full name below, this acts as a digital signature and that you can confirm all of the information provided above is correct and valid. You are also confirming that you have made a payment for this course.');?>
						</p>
					</div>
					<div class="col-sm-6 form-group">
						<label for="full_name"><?php _e('Full Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="full_name" class="form-control require" value=""/>
					</div>
					<div class="col-sm-6 form-group">
						<label for="current_date"><?php _e('Date');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="current_date" class="form-control require" value="<?php echo date('d M , Y');?>" readonly="readonly"/>
					</div>
				</div>

				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="add_new_pending_booking" />
					<button class="btn btn-success btn-md btn-block" type="submit"><?php _e('Submit');?></button>
				</div>
			</form>			
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function edit__booking__page(){
			ob_start();
			$booking__id = $_GET['id'];
			$booking = get_tabledata(TBL_PENDING_BOOKINGS,true,array('ID'=> $booking__id));
			$bookingz = get_tabledata(TBL_BOOKINGS,true,array('ID'=> $booking->booking_id));
			
			if( !is_admin() ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$booking):
				echo page_not_found('Oops ! Booking Details Not Found.','Please go back and check again !');
			else:
				$course = get_tabledata(TBL_COURSE_TYPE,true,array('ID'=> $booking->course_id));
				$course_name = $course->course_ID .' | '. $course->name;
				$booking_name = $bookingz->name;
			?>
			<form class="edit-pending-booking submit-form" method="post" autocomplete="off">
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="title"><?php _e('Title');?>&nbsp;<span class="required">*</span></label>
						<select name="title" class="form-control select_single require" data-placeholder="Choose Title">
							<?php
							$option_data = array('Mr' => 'Mr', 'Mrs' => 'Mrs', 'Dr' => 'Dr', 'Ms' => 'Ms');
							echo get_options_list($option_data, $booking->title);
							?>
						</select>
					</div>
					<div class="col-sm-4 form-group">
						<label for="first_name"><?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="first_name" class="form-control require" value="<?php echo $booking->first_name;?>"/>
					</div>
					<div class="col-sm-4 form-group">
						<label for="last_name"><?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="last_name" class="form-control require" value="<?php echo $booking->last_name;?>"/>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="preferred_name"><?php _e('Preferred Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="preferred_name" class="form-control require" value="<?php echo $booking->preferred_name;?>"/>
					</div>
					<div class="col-sm-4 form-group">
						<label for="professional_registeration_no"><?php _e('Professional Registeration No');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="professional_registeration_no" class="form-control require" value="<?php echo $booking->professional_registeration_no;?>"/>
					</div>
					<div class="col-sm-4 form-group">
						<label for="email"><?php _e('Email');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="email" class="form-control require" value="<?php echo $booking->email;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="telephone_no"><?php _e('Telephone No');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="telephone_no" class="form-control require" value="<?php echo $booking->telephone_no;?>" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="address"><?php _e('Address');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="address" class="form-control require" value="<?php echo $booking->address;?>" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="postcode"><?php _e('Postcode');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="postcode" class="form-control require" value="<?php echo $booking->postcode;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="employer"><?php _e('Employer');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="employer" class="form-control require" value="<?php echo $booking->employer;?>" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="current_role"><?php _e('Current Role');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="current_role" class="form-control require" value="<?php echo $booking->current_role;?>" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="specialty"><?php _e('Specialty');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="specialty" class="form-control require" value="<?php echo $booking->specialty;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 form-group">
						<label for="employer_address"><?php _e('Employer Address');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="employer_address" class="form-control require" value="<?php echo $booking->employer_address;?>" />
					</div>
					<div class="col-sm-4 form-group">
						<label for="employer_postcode"><?php _e('Employer Postcode');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="employer_postcode" class="form-control require" value="<?php echo $booking->employer_postcode;?>" />
					</div>
				</div>
				
				<div class="form-group">
					<label for="employer_postcode"><?php _e('Course Applied For');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="course_name" class="form-control require" value="<?php echo $booking_name;?>" readonly=""/>
					<input type="hidden" name="course_id" value="<?php echo $booking->course_id;?>" />
				</div>
				
				<div class="form-group">
					<label><input type="checkbox" class="flat require" name="paid" <?php checked($booking->paid, 1);?> value="1">&nbsp;<?php _e('I\'ve paid using a debit/credit card ( Please call us on xxxx).');?></label>
				</div>
				
				<div class="row">
					<div class="col-sm-6 form-group">
						<label for="full_name"><?php _e('Full Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="full_name" class="form-control require" value="<?php echo $booking->full_name;?>"/>
					</div>
					<div class="col-sm-6 form-group">
						<label for="current_date"><?php _e('Date');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="current_date" class="form-control require input-datepicker-today" value="<?php echo date('d M, Y', strtotime($booking->current_date));?>" readonly="readonly"/>
					</div>
				</div>

				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="update_pending_booking" />
					<input type="hidden" name="booking_id" value="<?php echo $booking->ID;?>" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update');?></button>
				</div>
			</form>
			
			<?php if( $booking->response_status == 0): ?>
			<h1><?php _e('Reason of rejection');?></h1>
			<div class="ln_solid"></div>
			<p><?php echo nl2br($booking->reason_of_rejection);?></p>
			<?php endif; ?>
			
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__bookings__page(){
			ob_start();
			$args = array();
			$bookings = get_tabledata(TBL_PENDING_BOOKINGS,false,$args);
			if( !user_can('view_booking') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$bookings):
				echo page_not_found("Oops! There is no New bookings record found",' ',false);
			else:
			?>

			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive datatable-buttons" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('Booking For');?></th>
						<th><?php _e('First Name');?></th>
						<th><?php _e('Last Name');?></th>
						<th><?php _e('Professional Registeration No');?></th>
						<th><?php _e('Request Date');?></th>
						<?php if( user_can('edit_booking') ): ?>
						<th><?php _e('Response');?></th>
						<?php endif; ?>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($bookings as $booking):
						$course = get_tabledata(TBL_COURSE_TYPE,true,array('ID'=> $booking->course_id));
						$bookingz = get_tabledata(TBL_BOOKINGS,true,array('ID'=> $booking->booking_id));
						$course_name = $course->course_ID .' | '. $course->name;
						$booking_name = $bookingz->name;
						?>
						<tr>
							<td><?php echo $booking_name;?></td>
							<td><?php echo $booking->first_name;?></td>
							<td><?php echo $booking->last_name;?></td>
							<td><?php echo $booking->professional_registeration_no;?></td>
							<td><?php echo date('d M, Y' , strtotime($booking->created_on));?></td>
							<?php if( user_can('edit_booking') ): ?>
							<td class="text-center">
								<?php if( $booking->response_status == 2): ?>
								<button type="button" class="btn btn-success btn-xs respond-pending-booking-btn" data-id="<?php echo $booking->ID;?>" data-action="accept">
									<i class="fa fa-check"></i>&nbsp;<?php _e('Accept');?>
								</button>
								<button type="button" class="btn btn-warning btn-xs respond-pending-booking-btn" data-id="<?php echo $booking->ID;?>" data-action="reject">
									<i class="fa fa-close"></i>&nbsp;<?php _e('Reject');?>
								</button>
								<?php elseif( $booking->response_status == 1): ?>
									<label class="label label-success"><i class="fa fa-check"></i>&nbsp;<?php _e('Accepted');?></label>
								<?php elseif( $booking->response_status == 0): ?>
									<label class="label label-warning"><i class="fa fa-close"></i>&nbsp;<?php _e('Rejected');?></label>
								<?php endif; ?>
							</td>
							<?php endif; ?>
							
							<td class="text-center">
								<?php if( user_can('edit_booking') ): ?>
								<a href="<?php the_permalink('edit-pending-booking',array('id'=> $booking->ID));?>" class="btn btn-dark btn-xs">
									<i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?>
								</a>
								<?php endif; ?>

								<?php if( user_can('delete_booking') ): ?>
								<button type="button" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $booking->ID;?>" data-action="delete_pending_booking">
									<i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?>
								</button>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php endif;
			echo $this->reject__booking__modal();
			$content = ob_get_clean();
			return $content;
		}
		
		public function add__booking__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="add-pending-booking-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Registeration Form');?></h1>
						</div>
						<div class="modal-body"><?php echo $this->add__booking__page();?></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden add-pending-booking-modal-btn" data-toggle="modal" data-target="#add-pending-booking-modal"></div>
			<?php
			return ob_get_clean();
		}
		
		public function reject__booking__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="reject-pending-booking-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Reject Booking Enroll');?></h1>
						</div>
						<div class="modal-body">
							<form class="reject-pending-booking-form submit-form" method="post" autocomplete="off">
								<div class="form-group">
									<label for="reason_of_rejection"><?php _e('Reason of rejection');?>&nbsp;<span class="required">*</span></label>
									<textarea name="reason_of_rejection" class="form-control require" rows="5" placeholder="Enter the reason of rejection"></textarea>
								</div>
								<div class="form-group">
									<input type="hidden" name="booking_id" value=""/>
									<input type="hidden" name="action" value="reject_pending_booking">
									<button type="submit" class="btn btn-success btn-block"><?php _e('Submit');?></button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden reject-pending-booking-modal-btn" data-toggle="modal" data-target="#reject-pending-booking-modal"></div>
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
		
		public function view__calendar__page(){
			ob_start(); ?>
			<form action="<?php echo get_permalink('browse-courses');?>" method="GET">
				<div class="row calendar-custom-filters">
					<div class="form-group col-sm-2 col-xs-6">
						<label for="courses"><?php _e('Course Types');?></label>
						<select name="course" class="form-control select_single" data-placeholder="Choose course" onchange="this.form.submit();">
							<?php
							$data = get_tabledata(TBL_COURSE_TYPES,false,array(),'',' ID, course_ID AS name');
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
			echo $this->add__booking__modal();
			echo $this->booking__data__modal();
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
							left: 'prev,next today,month,agendaWeek,agendaDay,',
							center: 'title',
							right: 'listDay,listWeek,listMonth,listYear,agendaFourMonth'
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
							modal.find('form input[name="date_from"]').val(moment(s_date).format('MMMM DD,YYYY'));
							modal.find('form input[name="date_to"]').val(moment(e_date).subtract(1, 'days').format('MMMM DD,YYYY'));
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
			
			if( isset($_GET['course']) && $_GET['course'] != ''){
				$args['course'] = $_GET['course'];
				$args = array('course_ID'=> $_GET['course']);
			}

			$results = get_tabledata(TBL_BOOKINGS,false,$args,'GROUP BY `date_from`',array('COUNT(ID) as count' ,'date_from','date_to'));
			if($results):
				$return = array();
				foreach($results as $data):
					array_push($return, array('title'=> 'Courses booked ('.$data->count.')' ,'start'=> date('Y-m-d',strtotime($data->date_from ) ) ,'end' => isset($data->date_to) && $data->date_to != '' ? $this->add_date($data->date_to, '1 day') : $this->add_date($data->date_from, '1 day') ) );
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
			
			$guid = get_guid(TBL_PENDING_BOOKINGS);

			$result = $this->database->insert(TBL_PENDING_BOOKINGS,
				array(
					'ID' => $guid,
					'booking_id' => $booking_id,
					'course_id' => $course_id,
					'title' => $title,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'preferred_name' => $preferred_name,
					'professional_registeration_no' => $professional_registeration_no,
					'email' => $email,
					'telephone_no' => $telephone_no,
					'address' => $address,
					'postcode'=> $postcode,
					'employer'=> $employer,
					'current_role' => $current_role,
					'specialty' => $specialty,
					'employer_address' => $employer_address,
					'employer_postcode' => $employer_postcode,
					'paid' => isset($paid) ? 1 : 0,
					'full_name' => $full_name,
					'current_date' => date('Y-m-d', strtotime($current_date)),
				)
			);
			if($result):
				if(is_user_logged_in()):
					$notification_args = array(
						'title' => __('New booking enrolled'),
						'notification'=> __('You have successfully created a new booking.'),
					);
					add_user_notification($notification_args);
				endif;
				
				/*============= Send email to user =============*/
				$template_id = get_option('after_join_coursse_request');
				if( $template_id != ''){
					$email_subject = get_table_column_data( TBL_TEMPLATES, 'subject', array( 'ID' => $template_id) );
					$email_body = get_table_column_data( TBL_TEMPLATES, 'body', array( 'ID' => $template_id) );
					if($email_body && $email_subject){
						$user_data = get_table_data( TBL_PENDING_BOOKINGS, true, array( 'ID' => $guid ) );
						$email_body = get_replaced_string( $email_body, 
							array(
								'{{first_name}}' => $user_data->first_name, 
								'{{last_name}}' => $user_data->last_name,
								'{{user_email}}' => $user_data->email,
							)
						);
						$email_sent = send_email($user_data->email, $email_subject, $email_body);
					}
				}
				/*============= Send email to user =============*/
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Request for booking sent successfully.');
				$return['reset_form'] = 1;
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
				$result = $this->database->update(TBL_PENDING_BOOKINGS,
					array(
						'title' => $title,
						'first_name' => $first_name,
						'last_name' => $last_name,
						'preferred_name' => $preferred_name,
						'professional_registeration_no' => $professional_registeration_no,
						'email' => $email,
						'telephone_no' => $telephone_no,
						'address' => $address,
						'postcode'=> $postcode,
						'employer'=> $employer,
						'current_role' => $current_role,
						'specialty' => $specialty,
						'employer_address' => $employer_address,
						'employer_postcode' => $employer_postcode,
						'paid' => isset($paid) ? 1 : 0,
						'full_name' => $full_name,
						'current_date' => date('Y-m-d', strtotime($current_date)),
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

		public function delete__booking__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_booking') ):
				$data = get_tabledata(TBL_PENDING_BOOKINGS,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_PENDING_BOOKINGS,$args);
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
		
		public function accept__booking__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not accept booking, Please try again.'),
				'reset_form' => 0
			);
			
			if( user_can('edit_booking') && user_can('add_user') ):
				$booking = get_tabledata(TBL_PENDING_BOOKINGS,true,array('ID'=> $booking_id));
				
				if( is_value_exists(TBL_USERS,array('user_email' => $booking->email) ) ):
					$return['status'] = 0;
					$return['message_heading'] = __('Email Already Exist');
					$return['message'] = __('User Email address is already exists.');
					return json_encode($return);
				endif;
				
				$user_pass = password_generator();
				$salt = generateSalt();
				$user_pass = hash('SHA256', encrypt($user_pass, $salt));
				$salt = base64_encode($salt);
				$guid = get_guid(TBL_USERS);
				
				$username = sanitize_user($booking->first_name."".$booking->last_name , true);
				$user = true;
				while( $user ){
					$user = get_tabledata(TBL_USERS, true, array('username' => $username) );
					if($user)
						$username = $username.'1';
				}
				
				$trainer_ID = $booking->last_name."_".$booking->first_name."_001";

				$user_result = $this->database->insert(TBL_USERS,
					array(
						'ID' => $guid,
						'trainer_ID' => $trainer_ID,
						'first_name' => $booking->first_name,
						'last_name' => $booking->last_name,
						'user_email' => $booking->email,
						'user_role' => 'nurse',
						'username' => $username,
						'work_area_ID'=> '',
						'user_status' => 1,
						'user_pass' => set_password($user_pass),
						'user_salt' => $salt,
						'created_by' => $this->current__user__id,
					)
				);

				if($user_result):
					$user__id = $guid;
					update_user_meta($user__id,'user_phone',$booking->telephone_no);
					$notification_args = array(
						'title' => __('New Account Created'),
						'notification'=> __('You have successfully created a new account').' ('.ucfirst($booking->first_name).' '.ucfirst($booking->last_name).').',
					);
					add_user_notification($notification_args);
					
					$main_booking = get_tabledata(TBL_BOOKINGS,true,array('ID'=> $booking->booking_id));
					if($main_booking):
						$nurses = maybe_unserialize($main_booking->nurses);
						$old_enroll = maybe_unserialize($main_booking->enroll);
						$old_attendance = maybe_unserialize($main_booking->attendance);
						$old_collected = maybe_unserialize($main_booking->collected);
						$old_date_book_returned = maybe_unserialize($main_booking->date_book_returned);
						$old_date_book_received = maybe_unserialize($main_booking->date_book_received);
						$nurses[] = $user__id;
						$nurses = array_unique($nurses);
						
						foreach($nurses as $nurse){
							$enroll[$nurse] = isset($old_enroll[$nurse]) ? $old_enroll[$nurse] : 0;
							$attendance[$nurse] = isset($old_attendance[$nurse]) ? $old_attendance[$nurse] : 0;
							$collected[$nurse] = isset($old_collected[$nurse]) ? $old_collected[$nurse] : 0;
							$date_book_returned[$nurse] = isset($old_date_book_returned[$nurse]) ? $old_date_book_returned[$nurse] : '';
							$date_book_received[$nurse] = isset($old_date_book_received[$nurse]) ? $old_date_book_received[$nurse] : '';
						}
						
						$booking_result = $this->database->update(TBL_BOOKINGS,
							array(
								'nurses' => $nurses,
								'date_book_received'=> $date_book_received,
								'date_book_returned'=> $date_book_returned,
								'collected' => $collected,
								'enroll' => $enroll,
								'attendance' => $attendance
							),
							array(
								'ID'=> $booking->booking_id
							)
						);
						
						if($booking_result):
							$result = $this->database->update(TBL_PENDING_BOOKINGS,
								array(
									'response_status' => 1,
								),
								array(
									'ID'=> $booking_id
								)
							);
							
							if($result):
								$notification_args = array(
									'title' => __('Booking accepted'),
									'notification'=> __('You have successfully accepted booking.'),
								);

								add_user_notification($notification_args);
								
								/*============= Send email to user =============*/
								$template_id = get_option('after_course_request_accepted');
								if( $template_id != ''){
									$email_subject = get_table_column_data( TBL_TEMPLATES, 'subject', array( 'ID' => $template_id) );
									$email_body = get_table_column_data( TBL_TEMPLATES, 'body', array( 'ID' => $template_id) );
									if($email_body && $email_subject){
										$user_data = get_userdata( $user__id );
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
								$return['reload'] = 1;
								$return['message_heading'] = __('Success !');
								$return['message'] = __('Booking has been accepted successfully.');
							endif;
						endif;
					endif;
				endif;
			endif;

			return json_encode($return);
		}
		
		public function reject__booking__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not reject booking, Please try again.'),
				'reset_form' => 0
			);
			
			if( user_can('edit_booking') ):
				$result = $this->database->update(TBL_PENDING_BOOKINGS,
					array(
						'response_status' => 0,
						'reason_of_rejection' => $reason_of_rejection,
					),
					array(
						'ID'=> $booking_id
					)
				);
				
				if($result):
					$notification_args = array(
						'title' => __('Booking rejected'),
						'notification'=> __('You have successfully rejected booking.'),
					);

					add_user_notification($notification_args);
					
					/*============= Send email to user =============*/
					$template_id = get_option('after_course_request_rejected');
					if( $template_id != ''){
						$email_subject = get_table_column_data( TBL_TEMPLATES, 'subject', array( 'ID' => $template_id) );
						$email_body = get_table_column_data( TBL_TEMPLATES, 'body', array( 'ID' => $template_id) );
						if($email_body && $email_subject){
							$user_data = get_tabledata( TBL_PENDING_BOOKINGS, true, array( 'ID' => $booking_id ) );
							$email_body = get_replaced_string( $email_body, 
								array(
									'{{first_name}}' => $user_data->first_name, 
									'{{last_name}}' => $user_data->last_name,
									'{{user_email}}' => $user_data->email,
								)
							);
							$email_sent = send_email($user_data->email, $email_subject, $email_body);
						}
					}
					/*============= Send email to user =============*/
					
					$return['status'] = 1;
					$return['reset_form'] = 1;
					$return['reload'] = 1;
					$return['message_heading'] = __('Success !');
					$return['message'] = __('Booking has been rejected successfully.');
				endif;
			endif;

			return json_encode($return);
		}
	}
	$Pending_Bookings = new Pending_Bookings();
endif;
?>