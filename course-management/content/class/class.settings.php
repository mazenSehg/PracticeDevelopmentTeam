<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Settings') ):
	class Settings{
		public $user__id;
		private $user;
		private $user__class;
		private $database;
		

		function __construct(){
			global $db,$User;
			$this->database = $db;
			$this->user__class = $User;
			$this->user__id = get_current_user_id();
			$this->user = get_user_by( 'id' ,$this->user__id);
		}

        
        
        
        public function all__course__page(){
			ob_start();
			if(!is_admin()):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: 
                    $alert = get_tabledata(TBL_ALERT,true,array('ID'=> 1));
                    $attend = explode("-",$alert->attend);
                    $collect = explode("-",$alert->collect);
                    $return = explode("-",$alert->return);

            ?>
				<form class="general-setting submit-form" method="post" autocomplete="off">
                    <div class="form-group">
                        Please select the courses which require the additional fields: 
                        <li>Date book received</li>
                        <li>Collected</li>
                        <li>Date book returned</li>
                        <li>Attendace</li>
                        <li>Completed</li>
                    </div>
<?php
            				$booking = get_tabledata(TBL_C_SET,true,array('ID'=> 1));
//            print_r(unserialize(array_keys($booking->course_type)));
        	$courses = unserialize($booking->course_type);
            $good = array_keys($courses);
            print_r($good);
            
//            foreach($num as $a);
//            if($a==0){
//                echo "---".$a;
//                $a=rand(0,100);
//            }
//            $nom = array_flip($num);
//            print_r($num);
            
?>
					<div class="form-group">
						<label for="admins"><?php _e('Course Type');?>&nbsp;<span class="required">*</span></label>
						<select name="code[]" class="form-control select_single " data-placeholder="Choose course Type" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_COURSE_TYPE,false,array(),'',' ID, CONCAT_WS(" | ", course_ID , name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
				            echo get_options_list($option_data,maybe_unserialize($good));
							?>
						</select>
  
                        
					</div>



					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_course_setting"/>
						<button class="btn btn-success btn-md" type="submit"><?php _e('Save Alert Setting');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;            
        }
        
        		public function all__alerts__page(){
			ob_start();
			if(!is_admin()):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: 
                    $alert = get_tabledata(TBL_ALERT,true,array('ID'=> 1));
                    $attend = explode("-",$alert->attend);
                    $collect = explode("-",$alert->collect);
                    $return = explode("-",$alert->return);

            ?>
				<form class="general-setting submit-form" method="post" autocomplete="off">


					<div class="form-group">
                        <label for="username">Alert to notify user to attend Course<span class="required">*</span></label>
					<div class="row">
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Years');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="att_y" class="form-control require" min="0" max="10"value="<?php echo $attend[0]; ?>"/>
						</div>
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Months');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="att_m" class="form-control require" min="0" max = "12"value="<?php echo $attend[1]; ?>"/>
						</div>
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Days');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="att_d" class="form-control require" min="0" max = "31" value="<?php echo $attend[2]; ?>"/>
                                                    <div>before course date.</div>
						</div>

					</div>
                        <br>
                        <br>
                        <label for="username">Reminder to Collect book<span class="required">*</span></label>
					<div class="row">
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Years');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="coll_y" class="form-control require" min="0" max="10"value="<?php echo $collect[0]; ?>"/>
						</div>
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Months');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="coll_m" class="form-control require" min="0" max = "12"value="<?php echo $collect[1]; ?>"/>
						</div>
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Days');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="coll_d" class="form-control require" min="0" max = "31" value="<?php echo $collect[2]; ?>"/>
                            <div>After a trainee has received their book.</div>
						</div>
					</div>
                        
                                            <br>
                        <br>
                        <label for="username">Reminder to Return book<span class="required">*</span></label>
					<div class="row">
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Years');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="ret_y" class="form-control require" min="0" max="10"value="<?php echo $return[0]; ?>"/>
						</div>
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Months');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="ret_m" class="form-control require" min="0" max = "12"value="<?php echo $return[1]; ?>"/>
						</div>
						<div class="form-group col-sm-2 col-xs-12">
							<label for="retrain_date"><?php _e('Days');?>&nbsp;<span class="required">*</span></label>
							<input type="number" name="ret_d" class="form-control require" min="0" max = "31" value="<?php echo $return[2]; ?>"/>
                        <div>After a trainee has collected their book.</div>
                            
						</div>
					</div>    
                        
					</div>



					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_alert_setting"/>
						<button class="btn btn-success btn-md" type="submit"><?php _e('Save Alert Setting');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
        
        
        
        
        
        
        
        
        
        
		public function general__settings__page(){
			ob_start();
			if(!is_admin()):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="general-setting submit-form" method="post" autocomplete="off">
					<div class="form-group">
						<label for="site_name"><?php _e('Website Name');?> <span class="required">*</span></label>
						<input type="text" name="site_name" class="form-control require" value="<?php echo get_site_name();?>" placeholder="E.g. : Website Name"/>
					</div>
					<div class="form-group">
						<label for="site_name"><?php _e('Website Description');?> <span class="required">*</span></label>
						<input type="text" name="site_description" class="form-control require" value="<?php echo get_site_description();?>" placeholder="E.g. : The earth is spinning"/>
					</div>
					<div class="form-group">
						<label for="admin_email"><?php _e('Admin Email');?> <span class="required">*</span></label>
						<input type="text" name="admin_email" class="form-control require" value="<?php echo get_option('admin_email');?>" placeholder="E.g. : johndoe@example.com"/>
					</div>
					<div class="form-group">
						<label for="admin_email"><?php _e('Website Contact Email');?> <span class="required">*</span></label>
						<input type="text" name="site_contact_email" class="form-control require" value="<?php echo get_option('site_contact_email');?>" placeholder="E.g. : johndoe@example.com"/>
						<span class="help-block"><?php _e('This email will be used in email templete in footer information.');?></span>
					</div>
					<div class="form-group">
						<label for="admin_email"><?php _e('Website Contact Phone');?> <span class="required">*</span></label>
						<input type="text" name="site_contact_phone" class="form-control require" value="<?php echo get_option('site_contact_phone');?>" placeholder="E.g. : 0123456789"/>
						<span class="help-block"><?php _e('This phone number will be used in email templete in footer information.');?></span>
					</div>
					<div class="form-group">
						<label for="admin_email"><?php _e('Website Domain Url');?> <span class="required">*</span></label>
						<input type="text" name="site_domain" class="form-control require" value="<?php echo get_option('site_domain');?>" placeholder="E.g. : www.example.com"/>
						<span class="help-block"><?php _e('This url will be used in email templete in footer information.');?></span>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_general_setting"/>
						<button class="btn btn-success btn-md" type="submit"><?php _e('Save Setting');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function manage__roles__page(){
			ob_start();
			if(!is_admin()):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else:
				$users_capabilities = unserialize(get_option('users_capabilities'));
				$all_capabilities = all_users_capabilities();
				$roles = get_roles();
				unset($roles['admin']);
				?>
				<form class="manage-roles submit-form" method="post" autocomplete="off">
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th rowspan="2" class="text-center"><?php _e('Capabilities');?></th>
									<th class="text-center" colspan="3"><?php _e('Roles');?></th>
								</tr>
								<tr>
									<?php foreach($roles as $role_key => $role): ?>
									<th class="text-center"><?php _e($role);?></th>
									<?php endforeach; ?>
								</tr>
							</thead>
							<tbody>
								<?php foreach($all_capabilities as $key => $data): ?>
									<tr class="text-center">
										<td class="text-left"><?php _e($data);?></td>
										<?php foreach($roles as $role_key => $role): ?>
										<td><input type="checkbox" class="flat" value="1" name="<?php echo $role_key.'_'.$key;?>" <?php checked($users_capabilities[$role_key][$key], 1);?>></td>
										<?php endforeach; ?>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>

					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_manage_roles"/>
						<button class="btn btn-success btn-md" type="submit"><?php _e('Update Capabilities');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function update__general__setting(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not saved settings, Please try again!'),
				'reset_form' => 0
			);
            //coll
            //ret
            //att
			if(is_admin()){
				update_option('site_name',$site_name);
				update_option('site_description',$site_description);
				update_option('admin_email',$admin_email);
				update_option('site_contact_email',$site_contact_email);
				update_option('site_contact_phone',$site_contact_phone);
				update_option('site_domain',$site_domain);

				$notification_args = array(
					'title' => __('General Setting updated'),
					'notification'=> __('You have successfully updated website general settings.'),
				);

				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Settings have been successfully updated.');
			}
			return json_encode($return);
		}
        
            //TBL_C_SET
        	public function update__course__setting(){
			extract($_POST);
                
			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not update Course Settings, Please try again.'),
				'reset_form' => 0
			);
                
			if( user_can('edit_booking') ):
                    $booking = get_tabledata(TBL_C_SET,true,array('ID' => 1));
					$old_enroll = maybe_unserialize($booking->course_type);
					$enroll = array();
					foreach($code as $nurse){

						$enroll[$nurse] = isset($old_enroll[$nurse]) ? $old_enroll[$nurse] : 0;
					}
					$result = $this->database->update(TBL_C_SET,
						array(
							'course_type' => $enroll,
						),
						array(
							'ID'=> 1
						)
					);

					if($result):
						$notification_args = array(
							'title' => __('Booking updated'),
							'notification'=> __('You have successfully updated Course settings.'),
						);

						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = __('Course Settings has been updated successfully.');
				endif;
			endif;
			
			return json_encode($return);
		}
        
        		public function update__alert__setting(){
			extract($_POST);

			$return = array(
				'status' => 0,
				'message_heading'=> __('Failed !'),
				'message' => __('Could not update Alert settings, Please try again'),
				'reset_form' => 0
			);

                $collect = $coll_y."-".$coll_m."-".$coll_d;
                $return = $ret_y."-".$ret_m."-".$ret_d;
                $attend = $att_y."-".$att_m."-".$att_d;
                    
				$result = $this->database->update(TBL_ALERT,
					array(
						'attend' => $attend,
						'collect' => $collect,
						'return' => $return,
					),
					array('ID'=> 1)
				);

                $notification_args = array(
					'title' => __('Alert Setting updated'),
					'notification'=> __('You have successfully updated the Alert settings.'),
				);
					add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = __('Success !');
					$return['message'] = __('Alert settings have been successfully updated.');

			return json_encode($return);
		}
		public function update__manage__roles(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading' => __('Failed !'),
				'message' => __('Could not saved settings, Please try again!'),
				'reset_form' => 0
			);

			if(is_admin()){
				$users_capabilities = array();
				$capabilities = all_users_capabilities();
				$roles = array_diff( get_roles(), array('admin') );
				foreach($roles as $role => $value):
					$args = array();
					foreach($capabilities as $key => $capability):
						$value = $role.'_'.$key;
						$args[$key] = (isset($$value)) ? 1 : 0;
					endforeach;
					$users_capabilities[$role] = $args;
				endforeach;
				update_option('users_capabilities',$users_capabilities);
				$notification_args = array(
					'title' => __('Users Capabilities updated'),
					'notification'=> __('You have successfully updated users capabilities.'),
				);
				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Settings have been successfully updated.');
			}
			return json_encode($return);
		}
	}
endif;
?>