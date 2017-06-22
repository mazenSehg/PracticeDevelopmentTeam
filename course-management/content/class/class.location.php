<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Location') ):

	class Location{
		private $database;
		function __construct(){
			global $db;
			$this->database = $db;
		}
		public function extras_options(){
			return array(
				'chairs' => 'Chairs',
				'computers' => 'Computers',
				'clipboard' => 'Flipboard',
				'laptop_connector' => 'Laptop Connector',
				'project_screen' => 'Project & Screen',
				'tables' => 'Tables',
				'sink' => 'Sink',
				'interactive_whiteboard' => 'Interactive whiteboard',
				'hospital_beds' => 'Hospital beds'
			);
		}
		
		public function add__location__page(){
			ob_start();
			if( !user_can( 'add_location') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-location submit-form" method="post" autocomplete="off">
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="name"><?php _e('Location Code');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="code" class="form-control require" />
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="name" class="form-control require" />
						</div>
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="phone"><?php _e('Phone');?></label>
							<input type="text" name="phone" class="form-control " />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_contact"><?php _e('Booking Contact No.');?></label>
							<input type="text" name="booking_contact" class="form-control " />
						</div>
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_phone"><?php _e('Booking Telephone No.');?></label>
							<input type="text" name="booking_phone" class="form-control " />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<label for="notes"><?php _e('Notes');?></label>
							<textarea name="notes" class="form-control " rows="5"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<?php foreach($this->extras_options() as $key => $extra_option): ?>
							<div class="checkbox-inline">
								<label><input type="checkbox" name="extra[]" class="flat" value="<?php echo $key; ?>">&nbsp;<?php echo $extra_option; ?></label>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<div class="ln_solid"></div>
							<input type="hidden" name="action" value="add_new_location" />
							<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Location');?></button>
						</div>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		
		
				public function add__work_area__page(){
			ob_start();
			if( !user_can( 'add_location') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-location submit-form" method="post" autocomplete="off">
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="name" class="form-control require" />
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_contact"><?php _e('Telephone No.1');?></label>
							<input type="text" name="phone1" class="form-control " />
						</div>
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_phone"><?php _e('Telephone No.2');?></label>
							<input type="text" name="phone2" class="form-control " />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_contact"><?php _e('Bleep');?></label>
							<input type="text" name="bleep" class="form-control " />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<label for="name"><?php _e('Ward Manager First Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="first" class="form-control require" />
						</div>
												<div class="col-xs-12 col-sm-12 form-group">
							<label for="name"><?php _e('Ward Manager Last Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="last" class="form-control require" />
						</div>
												<div class="col-xs-12 col-sm-12 form-group">
							<label for="name"><?php _e('Ward Manager email');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="email" class="form-control require" />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<div class="ln_solid"></div>
							<input type="hidden" name="action" value="add_new_work_area" />
							<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Work Areas');?></button>
						</div>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
		
		
		
		public function edit__location__page(){
			ob_start();
			$location__id = $_GET['id'];
				$location = get_tabledata(TBL_LOCATIONS,true,array('ID'=> $location__id));
			if( !user_can( 'edit_location') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$location):
				echo page_not_found('Oops ! Location Details Not Found.','Please go back and check again !');
			else:
			?>
				<form class="add-location submit-form" method="post" autocomplete="off">
					
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="name"><?php _e('Location Code');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="code" class="form-control require" value="<?php _e($location->location_code);?>"/>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="name" class="form-control require" value="<?php _e($location->name);?>" />
						</div>
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="phone"><?php _e('Phone');?></label>
							<input type="text" name="phone" class="form-control" value="<?php _e($location->phone);?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_contact"><?php _e('Booking Contact No.');?></label>
							<input type="text" name="booking_contact" class="form-control" value="<?php _e($location->booking_contact);?>" />
						</div>
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_phone"><?php _e('Booking Telephone No.');?></label>
							<input type="text" name="booking_phone" class="form-control" value="<?php _e($location->booking_phone);?>" />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<label for="notes"><?php _e('Notes');?></label>
							<textarea name="notes" class="form-control " rows="5"><?php _e($location->notes);?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<?php foreach($this->extras_options() as $key => $extra_option): ?>
							<?php $extras = maybe_unserialize($location->extras); $checked = (in_array($key, $extras) && !empty($extras)) ? 'checked' : ''; ?>
							<div class="checkbox-inline">
								<label><input type="checkbox" name="extras[]" class="flat" value="<?php echo $key; ?>" <?php echo $checked; ?>>&nbsp;<?php echo $extra_option; ?></label>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<div class="ln_solid"></div>
							<input type="hidden" name="action" value="update_location" />
							<input type="hidden" name="location_id" value="<?php echo $location->ID;?>" />
							<button class="btn btn-success btn-md" type="submit"><?php _e('Update Location');?></button>
						</div>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
		
				public function edit__work_area__page(){
			ob_start();
			$location__id = $_GET['id'];
				$location = get_tabledata(TBL_WORKS,true,array('ID'=> $location__id));
			if( !user_can( 'edit_location') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$location):
				echo page_not_found('Oops ! Location Details Not Found.','Please go back and check again !');
			else:
			?>
				<form class="add-location submit-form" method="post" autocomplete="off">
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="name"><?php _e('Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="name" class="form-control require"value="<?php _e($location->name);?>" />
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_contact"><?php _e('Telephone No.1');?></label>
							<input type="text" name="phone1" class="form-control " value="<?php _e($location->phone1);?>"/>
						</div>
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_phone"><?php _e('Telephone No.2');?></label>
							<input type="text" name="phone2" class="form-control " value="<?php _e($location->phone2);?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 form-group">
							<label for="booking_contact"><?php _e('Bleep');?></label>
							<input type="text" name="bleep" class="form-control "value="<?php _e($location->bleep);?>" />
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<label for="name"><?php _e('Ward Manager First Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="first" class="form-control require" value="<?php _e($location->first_name);?>"/>
						</div>
												<div class="col-xs-12 col-sm-12 form-group">
							<label for="name"><?php _e('Ward Manager Last Name');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="last" class="form-control require" value="<?php _e($location->last_name);?>"/>
						</div>
												<div class="col-xs-12 col-sm-12 form-group">
							<label for="name"><?php _e('Ward Manager email');?>&nbsp;<span class="required">*</span></label>
							<input type="text" name="email" class="form-control require" value="<?php _e($location->email);?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 form-group">
							<div class="ln_solid"></div>
							<input type="hidden" name="action" value="update_work_area" />
							<input type="hidden" name="location_id" value="<?php echo $location->ID;?>" />
							<button class="btn btn-success btn-md" type="submit"><?php _e('Update Work Area');?></button>
						</div>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__locations__page(){
			ob_start();
			$args = array();
			$locations = get_tabledata(TBL_LOCATIONS,false,$args);
			if( !user_can('view_location') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$locations):
				echo page_not_found("Oops! There is no New locations record found",' ',false);
			else:
			?>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('Name');?></th>
							<th><?php _e('Phone');?></th>
							<th><?php _e('Booking Contact No.');?></th>
							<th><?php _e('Booking Telephone No.');?></th>
							<th><?php _e('Created On');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($locations): foreach($locations as $location): ?>
						<tr>
							<td><?php _e($location->name);?></td>
							<td><?php _e($location->phone);?></td>
							<td><?php _e($location->booking_contact);?></td>
							<td><?php _e($location->booking_phone);?></td>
							<td><?php echo date('M d,Y',strtotime($location->created_on));?></td>
							<td class="text-center">
								<?php if( user_can('edit_location') ): ?>
								<a href="<?php the_permalink('edit-location',array('id' => $location->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_location') ): ?>
								<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $location->ID;?>" data-action="delete_location"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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
		
		
				public function all__work_area__page(){
			ob_start();
			$args = array();
			$locations = get_tabledata(TBL_WORKS,false,$args);
			if( !user_can('view_work_areas') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$locations):
				echo page_not_found("Oops! There is no New work Areas record found",' ',false);
			else:
			?>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('code');?></th>
							<th><?php _e('Name');?></th>
							<th><?php _e('phone1.');?></th>
							<th><?php _e('phone2.');?></th>
							<th><?php _e('Created On');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($locations): foreach($locations as $location): ?>
						<tr>
							<td><?php _e($location->code);?></td>
							<td><?php _e($location->name);?></td>
							<td><?php _e($location->phone1);?></td>
							<td><?php _e($location->phone2);?></td>
							<td><?php echo date('M d,Y',strtotime($location->created_on));?></td>
							<td class="text-center">
								<?php if( user_can('edit_location') ): ?>
								<a href="<?php the_permalink('edit-work-area',array('id' => $location->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_location') ): ?>
								<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $location->ID;?>" data-action="delete_work_area"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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
		public function add__location__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not create location, Please try again.',
				'reset_form' => 0
			);
			if( user_can('add_location') ):
				$validation_args = array(
					'location_code' => $code,
				);
				
				$extras = isset($extras) ? $extras : array();

				if(is_value_exists(TBL_LOCATIONS,$validation_args)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Location name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$guid = get_guid(TBL_LOCATIONS);
					$result = $this->database->insert(TBL_LOCATIONS,
						array(
							'ID' => $guid,
							'location_code'=>$code,
							'name' => $name,
							'phone' => $phone,
							'booking_contact' => $booking_contact,
							'booking_phone' => $booking_phone,
							'notes' => $notes,
							'extras' => $extras,
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New location created',
							'notification'=> 'You have successfully created a new location ('.$name.').',
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Location has been created successfully.';
						$return['reset_form'] = 1;
					endif;
				endif;
			endif;
			return json_encode($return);
		}
		
		
				//Process functions starts here
		public function add__work_area__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not create work area, Please try again.',
				'reset_form' => 0
			);
			if( user_can('add_location') ):
				$validation_args = array(
					'name' => $name,
				);
				
			$code =  str_replace(' ', '', $name);
			$code = $code ."_001";
				$extras = isset($extras) ? $extras : array();
					$guid = get_guid(TBL_WORKS);
					$result = $this->database->insert(TBL_WORKS,
						array(
							'ID' => $guid,
							'code' => $code,
							'name' => $name,
							'phone1' => $phone1,
							'phone2' => $phone2,
							'bleep' => $bleep,
							'first_name' => $first,
							'last_name' => $last,
							'email' => $email,

						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New location created',
							'notification'=> 'You have successfully created a new location ('.$name.').',
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Location has been created successfully.';
						$return['reset_form'] = 1;
					endif;
				endif;
			return json_encode($return);
		}


		public function update__location__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not update location, Please try again.',
				'reset_form' => 0
			);
			if( user_can('edit_location') ):
				$validation_args = array(
					'location_code'=> $code,
				);
				
				$extras = isset($extras) ? $extras : array();

				if(is_value_exists(TBL_LOCATIONS,$validation_args,$location_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Location name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_LOCATIONS,
						array(
							'name' => $name,
							'location_code' => $code,
							'phone' => $phone,
							'booking_contact' => $booking_contact,
							'booking_phone' => $booking_phone,
							'notes' => $notes,
							'extras' => $extras,
						),
						array(
							'ID'=> $location_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Location updated',
							'notification'=> 'You have successfully updated location ('.$name.').',
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Location has been updated successfully.';
					endif;
				endif;
			endif;

			return json_encode($return);
		}
		
		
		public function update__work_area__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not update work area, Please try again.',
				'reset_form' => 0
			);
				
			
				$code =  str_replace(' ', '', $name);
			$code = $code ."_001";
			
					$result = $this->database->update(TBL_WORKS,
						array(
							'code' => $code,
							'name' => $name,
							'phone1' => $phone1,
							'phone2' => $phone2,
							'bleep' => $bleep,
							'first_name' => $first,
							'last_name' => $last,
							'email' => $email,
						),
						array(
							'ID'=> $location_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Location updated',
							'notification'=> 'You have successfully updated Work Area ('.$name.').',
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = 'Success !';
						$return['message'] = 'Work Area has been updated successfully.';
			endif;

			return json_encode($return);
		}

		public function delete__location__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_location') ):
				$data = get_tabledata(TBL_LOCATIONS,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_LOCATIONS,$args);
				if($result):
					$notification_args = array(
						'title' => 'Location deleted',
						'notification'=> 'You have successfully deleted ('.$data->name.') location.',
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
		
		public function delete__work_area__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_work_area') ):
				$data = get_tabledata(TBL_WORKS,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_WORKS,$args);
				if($result):
					$notification_args = array(
						'title' => 'Location deleted',
						'notification'=> 'You have successfully deleted ('.$data->name.') Work Area.',
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