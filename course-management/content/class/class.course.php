<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Course') ):
	class Course{
		private $database;
		
		function __construct(){
			global $db;
			$this->database = $db;
		}

		public function add__course__page(){
			ob_start();
			if( !user_can( 'add_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-course submit-form" method="post" autocomplete="off">
				<div class="form-group">
					<label for="name"><?php _e('Course Code');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="code" class="form-control require" />
				</div>
						
				<div class="form-group">
					<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="name" class="form-control require" />
				</div>
						
				<div class="form-group">
					<label for="admins"><?php _e('Course Admin(s)');?>&nbsp;<span class="required">*</span></label>
					<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course admin(s)" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_USERS, false, array('user_role' => 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
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
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="add_new_course" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Course');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
			
		public function add__course__type__page(){
			ob_start();
			if( !user_can( 'add_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-course submit-form" method="post" autocomplete="off">
				<div class="form-group">
					<label for="name"><?php _e('Course Code');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="code" class="form-control require" />
				</div>
						
				<div class="form-group">
					<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="name" class="form-control require" />
				</div>
				<div class="ln_solid"></div>
				<div class="form-group">
					<input type="hidden" name="action" value="add_new_course_type" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Course Type');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function cohort_types(){
			return array(
				'adult' => 'adult', 
				'child' => 'Child', 
				'midwifery' => 'Midwifery', 
				'Paramedic' => 'Paramedic', 
				'Erasmus' => 'Erasmus', 
				'R2P ' => 'R2P', 
				'Overseas Adaptive' => 'Overseas Adaptive', 
				'OPD' => 'OPD', 
			);
		}
			
		public function add__cohort__page(){
			ob_start();
			if( !user_can( 'add_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-course submit-form" method="post" autocomplete="off">
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="name"><?php _e('Name');?></label>
						<input type="text" name="name" class="form-control" />
					</div>
							
					<div class="form-group col-sm-6 col-xs-12">
						<label for="band"><?php _e('Cohort Type');?></label>
						<select name="type" class="form-control select_single" tabindex="-1" data-placeholder="Choose Cohort">
							<?php
							$option_data = $this->cohort_types();
							echo get_options_list($option_data);
							?>
						</select>
					</div>
				</div>
						
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="start"><?php _e('Starting Date');?></label>
						<input type="text" name="start" class="form-control input-datepicker" readonly="readonly"/> 
					</div>
                    <div class="form-group col-sm-6 col-xs-12">
						<label for="sd1"><?php _e('Study Day 1');?></label>
						<input type="text" name="sd1" class="form-control input-datepicker" readonly="readonly"/> 
					</div>
				</div>
                <div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="sd2"><?php _e('Study Day 2');?></label>
						<input type="text" name="sd2" class="form-control input-datepicker" readonly="readonly"/> 
					</div>
                    <div class="form-group col-sm-6 col-xs-12">
						<label for="sd3"><?php _e('Study Day 3');?></label>
						<input type="text" name="sd3" class="form-control input-datepicker" readonly="readonly"/> 
					</div>
				</div>
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="add_new_cohort" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Cohort');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
		
		public function edit__cohort__page(){
			ob_start();
			$course__id = $_GET['id'];
			$course = get_tabledata(TBL_COHORTS, true, array('ID' => $course__id));
			if( !user_can( 'edit_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$course):
				echo page_not_found('Oops ! Cohort Details Not Found.', 'Please go back and check again !');
			else:
			?>
			<form class="add-course submit-form" method="post" autocomplete="off">
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="name"><?php _e('Name');?></label>
						<input type="text" name="name" class="form-control" value="<?php echo $course->name?>"/>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="band"><?php _e('Cohort Type');?></label>
						<select name="type" class="form-control select_single" tabindex="-1" data-placeholder="Choose Cohort">
							<?php
							$option_data = $this->cohort_types();
							echo get_options_list($option_data, $course->type, 'type');
							?>
						</select>
					</div>
				</div>
						
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="dob"><?php _e('Starting Date');?></label>
						<input type="text" name="start" class="form-control input-datepicker" readonly="readonly" value ="<?php echo date('M d, Y', strtotime($course->date)); ?>"/> 
					</div>
                    <div class="form-group col-sm-6 col-xs-12">
						<label for="sd1"><?php _e('Study Day 1');?></label>
						<input type="text" name="sd1" class="form-control input-datepicker" readonly="readonly" value ="<?php echo date('M d, Y', strtotime($course->sd1)); ?>"/> 
					</div>
				</div>
                <div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="sd2"><?php _e('Study Day 2');?></label>
						<input type="text" name="sd2" class="form-control input-datepicker" readonly="readonly" value ="<?php echo date('M d, Y', strtotime($course->sd2)); ?>"/> 
					</div>
                    <div class="form-group col-sm-6 col-xs-12">
						<label for="sd3"><?php _e('Study Day 3');?></label>
						<input type="text" name="sd3" class="form-control input-datepicker" readonly="readonly" value ="<?php echo date('M d, Y', strtotime($course->sd3)); ?>"/> 
					</div>
				</div>
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="update_cohort" />
					<input type="hidden" name="course_id" value="<?php echo $course->ID;?>" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update Cohort');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
			
		public function edit__course__page(){
			ob_start();
			$course__id = $_GET['id'];
			$course = get_tabledata(TBL_COURSES, true, array('ID' => $course__id));
			if( !user_can( 'edit_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$course):
				echo page_not_found('Oops ! Course Details Not Found.', 'Please go back and check again !');
			else:
			?>
			<form class="add-course submit-form" method="post" autocomplete="off">
						
				<div class="form-group">
					<label for="name"><?php _e('Course Code');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="code" value="<?php _e($course->course_ID);?>" class="form-control require" />
				</div>
						
				<div class="form-group">
					<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="name" class="form-control require" value="<?php _e($course->name);?>"/>
				</div>
						
				<div class="form-group">
					<label for="admins"><?php _e('Course Admin(s)');?>&nbsp;<span class="required">*</span></label>
					<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course admin(s)" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_USERS, false, array('user_role' => 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data, maybe_unserialize($course->admins));
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="description"><?php _e('Notes');?></label>
					<textarea name="description" class="form-control" rows="3"><?php _e($course->description);?></textarea>
				</div>
				<div class="form-group">
					<label for="location"><?php _e('Location');?>&nbsp;<span class="required">*</span></label>
					<select name="location" class="form-control select_single require" data-placeholder="Choose location">
						<?php
						$data = get_tabledata(TBL_LOCATIONS, false);
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data, maybe_unserialize($course->location));
						?>
					</select>
				</div>
						
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="update_course" />
					<input type="hidden" name="course_id" value="<?php echo $course->ID;?>" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update Course');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function edit__course__type__page(){
			ob_start();
			$course__id = $_GET['id'];
			$course = get_tabledata(TBL_COURSE_TYPE, true, array('ID' => $course__id));
			if( !user_can( 'edit_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$course):
				echo page_not_found('Oops ! Course Details Not Found.', 'Please go back and check again !');
			else:
			?>
			<form class="add-course submit-form" method="post" autocomplete="off">
						
				<div class="form-group">
					<label for="name"><?php _e('Course Code');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="code" value="<?php _e($course->course_ID);?>" class="form-control require" />
				</div>
						
				<div class="form-group">
					<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="name" class="form-control require" value="<?php _e($course->name);?>"/>
				</div>
				
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="update_course_type" />
					<input type="hidden" name="course_id" value="<?php echo $course->ID;?>" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update Course');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__courses__page(){
			ob_start();
			$args = array();
			$courses = get_tabledata(TBL_COURSES, false, $args);
			if( !user_can('view_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$courses):
				echo page_not_found("Oops! There is no New courses record found", ' ', false);
			else:
			?>
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('Active');?></th>
						<th><?php _e('Name');?></th>
						<th><?php _e('Course Trainer(s)');?></th>
						<th><?php _e('Description');?></th>
						<th><?php _e('Created On');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php if($courses): foreach($courses as $course): ?>
					<tr>	
						<td>	
							<label><input type="checkbox" class="js-switch approve-switch" <?php checked($course->active, 1);?> data-id="<?php echo $course->ID;?>" data-action="course_approve_change"/></label>
						</td>
						<td><?php _e($course->name);?></td>
						<td>
							<?php
							$users = maybe_unserialize($course->admins);
							$users = (is_array($users)) ? $users : (array)$users;
							$users_count = count($users);
							$count = 1;
							if($users): foreach($users as $user_id):
								$count += 1;
								echo get_user_name($user_id);
								echo ($count < $users_count) ? ', <br> ' : '';
							endforeach; endif;
							?>
						</td>
						<td><?php _e($course->description);?></td>
						<td><?php echo date('M d, Y', strtotime($course->created_on));?></td>
						<td class="text-center">
							<?php if( user_can('edit_course') ): ?>
							<a href="<?php the_permalink('edit-course', array('id' => $course->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
							<?php endif; ?>
							<?php if( user_can('delete_course') ): ?>
							<a href="#" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $course->ID;?>" data-action="delete_course"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; ?>
				</tbody>
			</table>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
			
		public function all__cohorts__page(){
			ob_start();
			$args = array();
			$courses = get_tabledata(TBL_COHORTS, false, $args);
			if( !user_can('view_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$courses):
				echo page_not_found("Oops! There is no New courses record found", ' ', false);
			else:
			?>
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('Name');?></th>
						<th><?php _e('Cohort Type');?></th>
						<th><?php _e('Starting Period');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php if($courses): foreach($courses as $course): ?>
					<tr>
						<td><?php _e($course->name);?></td>
						<td><?php _e($course->type);?></td>
						<td><?php echo date('M d, Y', strtotime($course->date));?></td>
						<td class="text-center">
                            <button type="button" class="btn btn-success btn-xs get-cohort" data-toggle="modal" data-target="#view-cohort-data-modal" data-cohort="<?php echo $course->ID;?>">
									<i class="fa fa-view"></i>&nbsp;<?php _e('View Cohort');?>
								</button>
                            <button type="button" class="btn btn-success btn-xs add-to-cohort" data-toggle="modal" data-target="#add-to-cohort-data-modal" data-cohort="<?php echo $course->ID;?>">
                                <i class="fa fa-view"></i>&nbsp;<?php _e('Add Student(s) to Cohort');?>
                            </button>
							<?php if( user_can('edit_course') ): ?>
							<a href="<?php the_permalink('edit-cohort', array('id' => $course->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
							<?php endif; ?>
							<?php if( user_can('delete_course') ): ?>
							<a href="#" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $course->ID;?>" data-action="delete_cohort"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; ?>
				</tbody>
			</table>
			<?php endif;
            echo $this->add__to__cohort__data__modal();
            echo $this->view__cohort__data__modal();
			$content = ob_get_clean();
			return $content;
		}

		//Process functions starts here
		public function add__course__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not create course, Please try again.', 
				'reset_form' => 0
			);
			if( user_can('add_course') ):
				$validation_args = array(
					'course_ID' => $code, 
				);
				if(is_value_exists(TBL_COURSES, $validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$guid = get_guid(TBL_COURSES);
					$result = $this->database->insert(TBL_COURSES, 
						array(
							'ID' => $guid, 
							'course_ID' => $code, 
							'name' => $name, 
							'admins' => $admins, 
							'description' => $description, 
							'location' => $location, 
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New course created', 
							'notification' => 'You have successfully created a new course ('.$name.').', 
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Course has been created successfully.';
						$return['reset_form'] = 1;
					endif;
				endif;
			endif;
			return json_encode($return);
		}

		public function add__course__type__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not create course type, Please try again.', 
				'reset_form' => 0
			);
			if( user_can('add_course') ):
				$validation_args = array(
					'course_ID' => $code, 
				);

				if(is_value_exists(TBL_COURSE_TYPE, $validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course type name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$guid = get_guid(TBL_COURSE_TYPE);
					$result = $this->database->insert(TBL_COURSE_TYPE, 
						array(
							'ID' => $guid, 
							'course_ID' => $code, 
							'name' => $name, 
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New course created', 
							'notification' => 'You have successfully created a new course type: ('.$name.').', 
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Course Type has been created successfully.';
						$return['reset_form'] = 1;
					endif;
				endif;
			endif;
			return json_encode($return);
		}
        
        
        public function view__cohort__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="view-cohort-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('View Cohort');?></h1>
						</div>
						<div class="modal-body">
							<div id="view-cohort-data-modal-body"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden fc_create" data-toggle="modal" data-target="#view-cohort-data-modal"></div>
			<?php
			return ob_get_clean();
		}
        
        public function add__to__cohort__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="add-to-cohort-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Add to Cohort');?></h1>
						</div>
						<div class="modal-body">
							<div id="add-to-cohort-data-modal-body"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden fc_create" data-toggle="modal" data-target="#add-to-cohort-data-modal"></div>
			<?php
			return ob_get_clean();
		}

		//Process functions starts here
		public function add__cohort__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not create Cohort, Please try again.', 
				'reset_form' => 0
			);
			if( user_can('add_course') ):
				$validation_args = array(
					'name' => $name, 
				);

				if(is_value_exists(TBL_COHORTS, $validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Cohort name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$guid = get_guid(TBL_COHORTS);
					$result = $this->database->insert(TBL_COHORTS, 
						array(
							'ID' => $guid, 
							'name' => $name, 
							'type' => $type, 
							'date' => date('Y-m-d h:i:s', strtotime($start)),
                            'sd1' => date('Y-m-d h:i:s', strtotime($sd1)),
                            'sd2' => date('Y-m-d h:i:s', strtotime($sd2)),
                            'sd3' => date('Y-m-d h:i:s', strtotime($sd3))
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New Cohort created', 
							'notification' => 'You have successfully created a new Cohort ('.$name.').', 
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Cohort has been created successfully.';
						$return['reset_form'] = 1;
					endif;
				endif;
			endif;
			return json_encode($return);
		}
        
        public function add__to__cohort__process(){
			extract($_POST);
			$cohort_id = trim($cohort_id);
			$return['html'] = '';
			$users = get_tabledata(TBL_USERS, false, array('cohort'=> $cohort_id), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
            $selected_data = get_option_data($users, array('name', 'ID'));
            $selected_data = maybe_unserialize($selected_data);
            
			
            error_log("Should be selected: ".json_encode($selected_data));
				/*$nurses = maybe_unserialize($booking->nurses);
                $admins = maybe_unserialize($booking->admins);
				$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
				$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
				$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
				$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
				$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();*/
					ob_start();
            ?>
                <form class="add-to-cohort-form submit-form" method="post" autocomplete="off">
                    <div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_USERS, false, array('user_role'=> 'nurse'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data, array('ID', 'name'));
						echo get_options_list($option_data, $selected_data);
						?>
					</select>
				</div>

                <div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="update_cohort_nurses" />
					<input type="hidden" name="cohort_id" value="<?php echo $cohort_id;?>" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update Cohort');?></button>
				</div>
			</form>
					<?php
					$return['html'] = ob_get_clean();
                /*error_log(json_encode($users));*/
			
			return json_encode($return);
		}
        
        
        
        public function get__cohort__process(){
			extract($_POST);
			$cohort_id = trim($cohort_id);
			$return['html'] = '';
			$users = get_tabledata(TBL_USERS, false, array('cohort'=> $cohort_id));
				/*$nurses = maybe_unserialize($booking->nurses);
                $admins = maybe_unserialize($booking->admins);
				$date_book_received = isset($booking->date_book_received) ? maybe_unserialize($booking->date_book_received) : array();
				$collected = isset($booking->collected) ? maybe_unserialize($booking->collected) : array();
				$date_book_returned = isset($booking->date_book_returned) ? maybe_unserialize($booking->date_book_returned) : array();
				$attendance = isset($booking->attendance) ? maybe_unserialize($booking->attendance) : array();
				$enroll = isset($booking->enroll) ? maybe_unserialize($booking->enroll) : array();*/
					ob_start();
            ?>
                					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
						<thead>
							<tr>
								<th><?php _e('Name'); ?></th>
								<th><?php _e('Nurse Type'); ?></th>
								<th><?php _e('Currently Employed'); ?></th>
								<th><?php _e('Email'); ?></th>
                                <th><?php _e('Study Day 1');?></th>
                                <th><?php _e('Study Day 2');?></th>
                                <th><?php _e('Study Day 3');?></th>
								<th><?php _e('Actions');?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($users as $user): 
                                $prog = get_tabledata(TBL_PROG, true, array('user_ID'=> $user->ID));
                                $std1=0;
                                $std2=0;
                                $std3=0;
                                if($prog){
                                    $stud = $prog->stud;
                                    $stud = maybe_unserialize($stud);
                                    $stud = maybe_unserialize($stud);
                                    $std1 = $stud['stud_d1'];
                                    $std2 = $stud['stud_d2'];
                                    $std3 = $stud['stud_d3'];
                                }
                                
                            
                            ?>
							<tr>
								<td><?php echo get_user_name($user);?></td>
								<td><?php echo $user->user_role;?></td>
								<td><label><input type="checkbox" class="js-switch user-modal-approve-switch" <?php checked($user->currently_employed , 1);?> data-action="complete"/></label></td>
								<td><?php echo $user->user_email?></td>
                                <td><input id = "stud_d1" type="checkbox" name="stud_d1" class="js-switch" <?php if ($std1 == 1){?> checked="checked" <?php } ?>/></td>
                                <td><input id = "stud_d2" type="checkbox" name="stud_d2" class="js-switch" <?php if ($std2 == 1){?> checked="checked" <?php } ?>/></td>
                                <td><input id = "stud_d3" type="checkbox" name="stud_d3" class="js-switch" <?php if ($std3 == 1){?> checked="checked" <?php } ?>/></td>
								<td><a href="<?php the_permalink('view-progress', array('user_id'=> $user->ID));?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i>&nbsp;<?php _e('View');?></a></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?php
					$return['html'] = ob_get_clean();
                /*error_log(json_encode($users));*/
			
			return json_encode($return);
		}
			
		public function update__course__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not update course, Please try again.', 
				'reset_form' => 0
			);
			if( user_can('edit_course') ):
				$validation_args = array(
					'course_ID' => $code, 
				);

				if(is_value_exists(TBL_COURSES, $validation_args, $course_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_COURSES, 
						array(
							'name' => $name, 
							'course_ID' => $code, 
							'admins' => $admins, 
							'description' => $description, 
							'location' => $location, 
						), 
						array(
							'ID' => $course_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Course updated', 
							'notification' => 'You have successfully updated course ('.$name.').', 
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Course has been updated successfully.';
					endif;
				endif;
			endif;
			return json_encode($return);
		}

		public function update__course__type__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not update course type, Please try again.', 
				'reset_form' => 0
			);
			if( user_can('edit_course') ):
				$validation_args = array(
					'course_ID' => $code, 
				);

				if(is_value_exists(TBL_COURSE_TYPE, $validation_args, $course_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course type name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_COURSE_TYPE, 
						array(
							'name' => $name, 
							'course_ID' => $code, 
						), 
						array(
							'ID' => $course_id
						)
					);

					if($result):
					$notification_args = array(
						'title' => 'Course updated', 
						'notification' => 'You have successfully updated course type ('.$name.').', 
					);

					add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = 'Success !';
					$return['message'] = 'Course type has been updated successfully.';
					endif;
				endif;
			endif;

			return json_encode($return);
		}

		public function update__cohort__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not update Cohort, Please try again.', 
				'reset_form' => 0
			);
			if( user_can('edit_course') ):
				$validation_args = array(
					'name' => $name, 
				);

				if(is_value_exists(TBL_COHORTS, $validation_args, $course_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_COHORTS, 
						array(
							'name' => $name, 
							'type' => $type, 
							'date' => date('Y-m-d h:i:s', strtotime($start)),
                            'sd1' => date('Y-m-d h:i:s', strtotime($sd1)),
                            'sd2' => date('Y-m-d h:i:s', strtotime($sd2)),
                            'sd3' => date('Y-m-d h:i:s', strtotime($sd3)),
						), 
						array(
							'ID' => $course_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Course updated', 
							'notification' => 'You have successfully updated course ('.$name.').', 
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Course has been updated successfully.';
					endif;
				endif;
			endif;
			return json_encode($return);
		}
        
        public function update__cohort__nurses__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update booking, Please try again.'), 
				'reset_form' => 0
			);
            
            error_log("Nurses to update: ".json_encode($nurses));
            
			
				$validation_args = array(
					'cohort_id'=> $cohort_id, 
				);

            $result = $this->database->update(TBL_USERS,array('cohort' => '0'),array('cohort'=>$cohort_id));
				foreach($nurses as $nurse){
					$result = $this->database->update(TBL_USERS, 
                    array(
                    'cohort' => $cohort_id, 
                    ), 
                    array(
                    'ID'=> $nurse
                    )
                    );
				}
                

				if($result):
					$notification_args = array(
						'title' => __('Booking updated'), 
						'notification'=> __('You have successfully updated cohort.'), 
					);

					add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = __('Success !');
					$return['message'] = __('Cohort has been updated successfully.');
                endif;

			return json_encode($return);
		}

		public function delete__course__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_course') ):
				$data = get_tabledata(TBL_COURSES, true, array('ID' => $id) ) ;
				$args = array('ID' => $id);
				$result = $this->database->delete(TBL_COURSES, $args);
				if($result):
					$notification_args = array(
						'title' => 'Course deleted', 
						'notification' => 'You have successfully deleted ('.$data->name.') course.', 
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
			
		public function delete__cohort__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_course') ):
				$data = get_tabledata(TBL_COHORTS, true, array('ID' => $id) ) ;
				$args = array('ID' => $id);
				$result = $this->database->delete(TBL_COHORTS, $args);
				if($result):
					$notification_args = array(
						'title' => 'Course deleted', 
						'notification' => 'You have successfully deleted ('.$data->name.') Cohort.', 
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

		public function all__courses__types__page(){
			ob_start();
			$args = array();
			$courses = get_tabledata(TBL_COURSE_TYPE, false, $args);
			if( !user_can('view_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$courses):
				echo page_not_found("Oops! THERE ARE NO NEW courses record found", ' ', false);
			else:
			?>
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('ID');?></th>
						<th><?php _e('Course Type ID');?></th>
						<th><?php _e('Course Type name');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php if($courses): foreach($courses as $course): ?>
					<tr>
						<td><?php _e($course->ID);?></td>
						<td><?php _e($course->course_ID);?></td>							
						<td><?php _e($course->name);?></td>
						<td class="text-center">
							<?php if( user_can('edit_course') ): ?>
							<a href="<?php the_permalink('edit-course-type', array('id' => $course->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
							<?php endif; ?>
							<?php if( user_can('delete_course_type') ): ?>
							<a href="#" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $course->ID;?>" data-action="delete_course_type"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; ?>
				</tbody>
			</table>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function activate_course(){
			extract($_POST);
			$id = trim($id);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not update course details, Please try again ', 
				'reset_form' => 0
			);

			$centre = get_tabledata(TBL_COURSES, true, array('ID' => $id) );
			$args = array('ID' => $id);
			$result = $this->database->update(TBL_COURSES, array('active' => $status), $args);

			if($result):
				if($status == 0){
					$notification_args = array(
						'title' => 'Centre (' .$centre->name.') is disables now', 
						'notification' => 'You have successfully disabled (' .$centre->name.') centre.', 
					);
					$return['message'] = 'You have successfully disabled (' .$centre->name.') centre.';
				}else{
					$notification_args = array(
						'title' => 'Centre (' .$centre->name.') is approved now', 
						'notification' => 'You have successfully approved (' .$centre->name.') centre.', 
					);
					$return['message'] = 'You have successfully approved (' .$centre->name.') centre.';
				}
				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = 'Success !';
			endif;
			return json_encode($return);
		}
			
		public function delete__course__type__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_course') ):
				$data = get_tabledata(TBL_COURSE_TYPE, true, array('ID' => $id) ) ;
				$args = array('ID' => $id);
				$result = $this->database->delete(TBL_COURSE_TYPE, $args);
				if($result):
					$notification_args = array(
						'title' => 'Course deleted', 
						'notification' => 'You have successfully deleted ('.$data->name.') course Type.', 
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
        
        
        
	}
	$Course = new Course();
endif;
?>