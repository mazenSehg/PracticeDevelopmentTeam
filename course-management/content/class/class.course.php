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
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-course submit-form" method="post" autocomplete="off">
					<div class="form-group">
						<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="name" class="form-control require" />
					</div>
					
					<div class="form-group">
						<label for="admins"><?php _e('Course Admin(s)');?>&nbsp;<span class="required">*</span></label>
						<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course admin(s)" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="duration"><?php _e('Duration (days)');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="duration" class="form-control require" min="0"/>
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
						<label for="retrain_date"><?php _e('Retrain Date');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="retrain_date" class="form-control require" min="0"/>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="add_new_course" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Course');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function edit__course__page(){
			ob_start();
			$course__id = $_GET['id'];
				$course = get_tabledata(TBL_COURSES,true,array('ID'=> $course__id));
			if( !user_can( 'edit_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$course):
				echo page_not_found('Oops ! Course Details Not Found.','Please go back and check again !');
			else:
			?>
				<form class="add-course submit-form" method="post" autocomplete="off">
					<div class="form-group">
						<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="name" class="form-control require" value="<?php _e($course->name);?>"/>
					</div>
					
					<div class="form-group">
						<label for="admins"><?php _e('Course Admin(s)');?>&nbsp;<span class="required">*</span></label>
						<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course admin(s)" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'user_role'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data, maybe_unserialize($course->admins));
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="duration"><?php _e('Duration (days)');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="duration" class="form-control require" min="0" value="<?php _e($course->duration);?>"/>
					</div>
					<div class="form-group">
						<label for="description"><?php _e('Notes');?></label>
						<textarea name="description" class="form-control" rows="3"><?php _e($course->description);?></textarea>
					</div>
					<div class="form-group">
						<label for="location"><?php _e('Location');?>&nbsp;<span class="required">*</span></label>
						<select name="location" class="form-control select_single require" data-placeholder="Choose location">
							<?php
							$data = get_tabledata(TBL_LOCATIONS,false);
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data, maybe_unserialize($course->location));
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="retrain_date"><?php _e('Retrain Date');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="retrain_date" class="form-control require" min="0" value="<?php _e($course->retrain_date);?>"/>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_course" />
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
			$courses = get_tabledata(TBL_COURSES,false,$args);
			if( !user_can('view_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$courses):
				echo page_not_found("Oops! There is no New courses record found",' ',false);
			else:
			?>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('Name');?></th>
							<th><?php _e('Course Admin(s)');?></th>
							<th><?php _e('Duration(days)');?></th>
							<th><?php _e('Description');?></th>
							<th><?php _e('Created On');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($courses): foreach($courses as $course): ?>
						<tr>
							<td><?php _e($course->name);?></td>
							<td>
								<?php
								$users = maybe_unserialize($course->admins);
								$users = (is_array($users)) ? $users : (array)$users;
								$users_count = count($users);
								$count = 1;
								if($users): foreach($users as $user_id):
									echo get_user_name($user_id);
									echo ($count < $users_count) ? ', ' : '';
								endforeach; endif;
								?>
							</td>
							<td><?php _e($course->duration);?></td>
							<td><?php _e($course->description);?></td>
							<td><?php echo date('M d,Y',strtotime($course->created_on));?></td>
							
							<td class="text-center">
								<?php if( user_can('edit_course') ): ?>
								<a href="<?php the_permalink('edit-course',array('id' => $course->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_course') ): ?>
								<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $course->ID;?>" data-action="delete_course"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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


		//Process functions starts here
		public function add__course__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not create course, Please try again.',
				'reset_form' => 0
			);
			if( user_can('add_course') ):
				$validation_args = array(
					'name' => $name,
				);

				if(is_value_exists(TBL_COURSES,$validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
			
					$guid = get_guid(TBL_COURSES);
					$result = $this->database->insert(TBL_COURSES,
						array(
							'ID' => $guid,
							'name' => $name,
							'admins' => $admins,
							'duration' => $duration,
							'description' => $description,
							'location' => $location,
							'retrain_date' => $retrain_date,
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New course created',
							'notification'=> 'You have successfully created a new course ('.$name.').',
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

		public function update__course__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not update course, Please try again.',
				'reset_form' => 0
			);
			if( user_can('edit_course') ):
				$validation_args = array(
					'name'=> $name,
				);

				if(is_value_exists(TBL_COURSES,$validation_args,$course_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_COURSES,
						array(
							'name' => $name,
							'admins' => $admins,
							'duration' => $duration,
							'description' => $description,
							'location' => $location,
							'retrain_date' => $retrain_date,
						),
						array(
							'ID'=> $course_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Course updated',
							'notification'=> 'You have successfully updated course ('.$name.').',
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

		public function delete__course__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_course') ):
				$data = get_tabledata(TBL_COURSES,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_COURSES,$args);
				if($result):
					$notification_args = array(
						'title' => 'Course deleted',
						'notification'=> 'You have successfully deleted ('.$data->name.') course.',
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

endif;
?>