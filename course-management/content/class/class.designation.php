<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Designation') ):

	class Designation{
		private $database;
		function __construct(){
			global $db;
			$this->database = $db;
		}

		public function add__designation__page(){
			ob_start();
			if( !user_can( 'add_designation') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-designation submit-form" method="post" autocomplete="off">
										<div class="form-group">
						<label for="name"><?php _e('Code');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="code" class="form-control require" />
					</div>
					<div class="form-group">
						<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="name" class="form-control require" />
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="add_new_designation" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Designation');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function edit__designation__page(){
			ob_start();
			$designation__id = $_GET['id'];
				$designation = get_tabledata(TBL_DESIGNATIONS,true,array('ID'=> $designation__id));
			if( !user_can( 'edit_designation') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$designation):
				echo page_not_found('Oops ! Designation Details Not Found.','Please go back and check again !');
			else:
			?>
				<form class="add-designation submit-form" method="post" autocomplete="off">
					<div class="form-group">
						<label for="name"><?php _e('Code');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="code" class="form-control require" value="<?php _e($designation->code);?>"/>
					</div>
					<div class="form-group">
						<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="name" class="form-control require" value="<?php _e($designation->name);?>"/>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_designation" />
						<input type="hidden" name="designation_id" value="<?php echo $designation->ID;?>" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Update Designation');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__designations__page(){
			ob_start();
			$args = array();
			$designations = get_tabledata(TBL_DESIGNATIONS,false,$args);
			if( !user_can('view_designation') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$designations):
				echo page_not_found("Oops! THERE ARE NO NEW designations record found",' ',false);
			else:
			?>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('Name');?></th>
							<th><?php _e('Created On');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($designations): foreach($designations as $designation): ?>
						<tr>
							<td><?php _e($designation->name);?></td>
							<td><?php echo date('M d,Y',strtotime($designation->created_on));?></td>
							
							<td class="text-center">
								<?php if( user_can('edit_designation') ): ?>
								<a href="<?php the_permalink('edit-designation',array('id' => $designation->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_designation') ): ?>
								<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $designation->ID;?>" data-action="delete_designation"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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
		public function add__designation__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not create designation, Please try again.',
				'reset_form' => 0
			);
			if( user_can('add_designation') ):
				$validation_args = array(
					'code' => $code,
					'name' => $name,
				);

				if(is_value_exists(TBL_DESIGNATIONS,$validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Designation name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$guid = get_guid(TBL_DESIGNATIONS);
					$result = $this->database->insert(TBL_DESIGNATIONS,
						array(
							'ID' => $guid,
							'code' => $code,
							'name' => $name
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New designation created',
							'notification'=> 'You have successfully created a new designation ('.$name.').',
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Designation has been created successfully.';
						$return['reset_form'] = 1;
					endif;
				endif;
			endif;
			return json_encode($return);
		}

		public function update__designation__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not update designation, Please try again.',
				'reset_form' => 0
			);
			if( user_can('edit_designation') ):
				$validation_args = array(
					'name'=> $name,
				);

				if(is_value_exists(TBL_DESIGNATIONS,$validation_args,$designation_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Designation name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_DESIGNATIONS,
						array(
							'name' => $name
						),
						array(
							'ID'=> $designation_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Designation updated',
							'notification'=> 'You have successfully updated designation ('.$name.').',
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Designation has been updated successfully.';
					endif;
				endif;
			endif;

			return json_encode($return);
		}

		public function delete__designation__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_designation') ):
				$data = get_tabledata(TBL_DESIGNATIONS,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_DESIGNATIONS,$args);
				if($result):
					$notification_args = array(
						'title' => 'Designation deleted',
						'notification'=> 'You have successfully deleted ('.$data->name.') designation.',
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