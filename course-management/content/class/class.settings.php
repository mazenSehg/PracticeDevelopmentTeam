<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Settings') ):
	class Settings{
		public $user__id;
		private $user;
		private $user__class;

		function __construct(){
			global $db,$User;
			$this->user__class = $User;
			$this->user__id = get_current_user_id();
			$this->user = get_user_by( 'id' ,$this->user__id);
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