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

        
        
		public function add__designation__rules__page(){
			ob_start();
			if( !user_can( 'add_designation') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-designation submit-form" method="post" autocomplete="off">
										<div class="form-group">
										<label for="user_designation">
											<?php _e('Designation');?>&nbsp;<span class="required">*</span></label>
										<select name="user_designation" class="form-control select_single require" tabindex="-1" data-placeholder="Choose designation">
											<?php
								$data = get_tabledata(TBL_DESIGNATIONS,false);
								$option_data = get_option_data($data,array('ID','name'));
								echo get_options_list($option_data);
								?>
										</select>
					</div>
					<div class="form-group">
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Preceptorship progress
												<br/>
												<label>
													<input type="radio" class="flat" name="preceptorship" value="1" /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="preceptorship" value="0" /> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">HCA Induction Progress
												<br/>
												<label>
													<input type="radio" class="flat" name="hca" value="1" /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="hca" value="0" /> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">FD/AP Training Record
												<br/>
												<label>
													<input type="radio" class="flat" name="fdap" value="1" /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="fdap" value="0" /> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Student Record
												<br/>
												<label>
													<input type="radio" class="flat" name="record" value="1" /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="record" value="0" /> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Mentorship
												<br/>
												<label>
													<input type="radio" class="flat" name="mentorship" value="1" /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="mentorship" value="0" /> No</label>
										</div>
									</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="add_new_designation_rule" />
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

        
        
		public function edit__designation__rules__page(){
			ob_start();
			$designation__id = $_GET['id'];
				$designation = get_tabledata(TBL_RULES,true,array('ID'=> $designation__id));
			if( !user_can( 'edit_designation') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$designation):
				echo page_not_found('Oops ! Designation Details Not Found.','Please go back and check again !');
			else:
			?>
				<form class="add-designation submit-form" method="post" autocomplete="off">
<div class="form-group">
										<label for="user_designation">
											<?php _e('Designation');?>&nbsp;<span class="required">*</span></label>
														<select name="user_designation" class="form-control select_single require" tabindex="-1" data-placeholder="Choose designation">
												<?php
								$data = get_tabledata(TBL_DESIGNATIONS,false);
								$option_data = get_option_data($data,array('ID','name'));
								echo get_options_list($option_data, $designation->designation,'ID');
								?>
											</select>
					</div>
					<div class="form-group">
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Preceptorship progress
												<br/>
												<label>
													<input type="radio" class="flat" name="preceptorship" value="1" <?php checked($designation->preceptorship , 1);?> /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="preceptorship" value="0" <?php checked($designation->preceptorship , 0);?> /> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">HCA Induction Progress
												<br/>
												<label>
													<input type="radio" class="flat" name="hca" value="1" <?php checked($designation->hca , 1);?>/> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="hca" value="0" <?php checked($designation->hca , 0);?>/> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">FD/AP Training Record
												<br/>
												<label>
													<input type="radio" class="flat" name="fdap" value="1" <?php checked($designation->fdap , 1);?>/> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="fdap" value="0" <?php checked($designation->fdap , 0);?>/> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Student Record
												<br/>
												<label>
													<input type="radio" class="flat" name="record" value="1" <?php checked($designation->record , 1);?>/> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="record" value="0" <?php checked($designation->record , 0);?>/> No</label>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Mentorship
												<br/>
												<label>
													<input type="radio" class="flat" name="mentorship" value="1" <?php checked($designation->mentorship , 1);?> /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="mentorship" value="0"<?php checked($designation->mentorship , 0);?> /> No</label>
										</div>
									</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_designation_role" />
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
        
		public function all__designations__rules__page(){
			ob_start();
			$args = array();
			$designations = get_tabledata(TBL_RULES,false,$args);
			if( !user_can('view_designation') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$designations):
				echo page_not_found("Oops! THERE ARE NO NEW designations record found",' ',false);
			else:
			?>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('Designation');?></th>
							<th><?php _e('Rules');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($designations): foreach($designations as $designation): 
                        $des = get_tabledata(TBL_DESIGNATIONS,false,array('ID'=>$designation->designation));
                        ?>
						<tr>
							<td><?php echo $des[0]->name;?></td>
							<td><?php echo  "Preceptorship Progress: " . $designation->preceptorship . "<br>HCA Induction Progress: " . $designation->hca . "<br>FD/AP Training Record: " . $designation->fdap . "<br>Student Record: " . $designation->record . "<br>Mentorship: " . $designation->mentorship ;?></td>
							
							<td class="text-center">
								<?php if( user_can('edit_designation') ): ?>
								<a href="<?php the_permalink('edit-designation-rules',array('id' => $designation->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_designation') ): ?>
								<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $designation->ID;?>" data-action="delete_designation_rules"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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
        
        
        
		public function add__designation__rules__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not create designation, Please try again.',
				'reset_form' => 0
			);
			if( user_can('add_designation') ):
				$validation_args = array(
					'designation' => $user_designation,
				);

				if(is_value_exists(TBL_RULES,$validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Rule for this Designation Already Exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$guid = get_guid(TBL_RULES);
					$result = $this->database->insert(TBL_RULES,
						array(
							'ID' => $guid,
							'designation' => $user_designation,
							'preceptorship' => $preceptorship,
							'hca' => $hca,
							'fdap' => $fdap,
							'record' => $record,
							'mentorship' => $mentorship,
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New designation created',
							'notification'=> 'You have successfully created a new designation Rules.',
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Designation rule has been created successfully.';
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

        
		public function update__designation__role__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not update designation rule, Please try again.',
				'reset_form' => 0
			);
			if( user_can('edit_designation') ):
				$validation_args = array(
					'designation'=> $user_designation,
				);

				if(is_value_exists(TBL_RULES,$validation_args,$designation_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Designation name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_RULES,
						array(
							'designation' => $user_designation,
							'preceptorship' => $preceptorship,
							'hca' => $hca,
							'fdap' => $fdap,
							'record' => $record,
							'mentorship' => $mentorship,
						),
						array(
							'ID'=> $designation_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Designation updated',
							'notification'=> 'You have successfully updated designation rule.',
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
        
		public function delete__designation__rules__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_designation') ):
				$data = get_tabledata(TBL_RULES,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_RULES,$args);
				if($result):
					$notification_args = array(
						'title' => 'Designation deleted',
						'notification'=> 'You have successfully deleted ('.$data->name.') designation rule.',
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