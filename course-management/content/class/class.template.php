<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;

if( !class_exists('Template') ):
	class Template{
		private $database;
		
		public function __construct(){
			global $db;
			$this->database = $db;
		}
		
		public function templates_settings_args(){
			$args = array(
				'after_account_created' => array(
					'label' => __('After account created'),
					'description' => __('This email will be sent after user account is created.')
				),
				'after_user_added_to_course_booking' => array(
					'label' => __('After user added to course booking'),
					'description' => __('This email will be sent after user is added to couse booking.')
				),
				'booking_reminder' => array(
					'label' => __('Booking reminder'),
					'description' => __('This email will be sent when the reminder button will be triggered.')
				),
				'course_complete' => array(
					'label' => __('User couse complete'),
					'description' => __('This email will be sent when the complete course button will be triggered.')
				),
				'after_join_coursse_request' => array(
					'label' => __('After join course request'),
					'description' => __('This email will be sent after user is request for joining a course.')
				),
				'after_course_request_accepted' => array(
					'label' => __('After course request accepted'),
					'description' => __('This email will be sent after course request is accepted')
				),
				'after_course_request_rejected' => array(
					'label' => __('After course request rejected'),
					'description' => __('This email will be sent after course request is rejected')
				),
			);
			
			return $args;
		}

		public function add__template__page(){
			ob_start();
			if( !is_admin() ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-template submit-form" method="post" autocomplete="off">
				<div class="form-group">
					<label for="title"><?php _e('Title');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="title" class="form-control require" />
				</div>
						
				<div class="form-group">
					<label for="subject"><?php _e('Email Subject');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="subject" class="form-control require" />
				</div>
				<div class="form-group">
					<label for="subject"><?php _e('Email Body');?></label>
					<?php echo text_editor('body'); ?>
				</div>
				
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="action" value="add_new_template" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Create New Template');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
			
		public function edit__template__page(){
			ob_start();
			$template__id = $_GET['id'];
			$template = get_tabledata(TBL_TEMPLATES, true, array('ID' => $template__id));
			if( !is_admin() ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$template):
				echo page_not_found('Oops ! Template Details Not Found.', 'Please go back and check again !');
			else:
			?>
			<form class="edit-template submit-form" method="post" autocomplete="off">
				<div class="form-group">
					<label for="title"><?php _e('Title');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="title" class="form-control require" value="<?php echo stripslashes($template->title);?>"/>
				</div>
						
				<div class="form-group">
					<label for="subject"><?php _e('Email Subject');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="subject" class="form-control require" value="<?php echo stripslashes($template->subject);?>"/>
				</div>
				<div class="form-group">
					<label for="subject"><?php _e('Email Body');?></label>
					<?php echo text_editor( 'body', stripslashes($template->body) ); ?>
				</div>
				
				<div class="form-group">
					<div class="ln_solid"></div>
					<input type="hidden" name="template_id" value="<?php echo $template__id; ?>" />
					<input type="hidden" name="action" value="edit_template" />
					<button class="btn btn-success btn-md" type="submit"><?php _e('Update Template');?></button>
				</div>
			</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__templates__page(){
			ob_start();
			$args = array();
			$templates = get_tabledata(TBL_TEMPLATES, false, $args);
			if( !user_can('view_template') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$templates):
				echo page_not_found("Oops! There is no New templates record found", ' ', false);
			else:
			?>
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('Title');?></th>
						<th><?php _e('Subject');?></th>
						<th><?php _e('Created On');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php if($templates): foreach($templates as $template): ?>
					<tr>	
						<td><?php _e($template->title);?></td>
						<td><?php _e($template->subject);?></td>
						<td><?php echo date('M d, Y', strtotime($template->created_on));?></td>
						<td class="text-center">
							<a href="<?php the_permalink('edit-template', array('id' => $template->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
							<a href="#" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $template->ID;?>" data-action="delete_template"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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
		public function add__template__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not create template, Please try again.', 
				'reset_form' => 0
			);
			if( is_admin() ):
				$guid = get_guid(TBL_TEMPLATES);
				$result = $this->database->insert(TBL_TEMPLATES, 
					array(
						'ID' => $guid, 
						'title' => $title, 
						'subject' => $subject, 
						'body' => $body,
					)
				);
				if($result):
					$notification_args = array(
						'title' => 'New template created', 
						'notification' => 'You have successfully created a new template ('.$title.').', 
					);

					add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = 'Success !';
					$return['message'] = 'Template has been created successfully.';
					$return['reset_form'] = 1;
				endif;
			endif;
			return json_encode($return);
		}

		public function update__template__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading' => 'Failed !', 
				'message' => 'Could not update template, Please try again.', 
				'reset_form' => 0
			);
			if( is_admin() ):
				$result = $this->database->update(TBL_TEMPLATES, 
					array(
						'title' => $title, 
						'subject' => $subject, 
						'body' => $body,
					), 
					array(
						'ID' => $template_id
					)
				);

				if($result):
					$notification_args = array(
						'title' => 'Template updated', 
						'notification' => 'You have successfully updated template ('.$title.').', 
					);
					add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = 'Success !';
					$return['message'] = 'Template has been updated successfully.';
				endif;
			endif;
			return json_encode($return);
		}

		public function delete__template__process(){
			extract($_POST);
			$id = trim($id);
			if( is_admin() ):
				$data = get_tabledata(TBL_TEMPLATES, true, array('ID' => $id) ) ;
				$args = array('ID' => $id);
				$result = $this->database->delete(TBL_TEMPLATES, $args);
				if($result):
					$notification_args = array(
						'title' => 'Template deleted', 
						'notification' => 'You have successfully deleted ('.$data->title.') template.', 
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
	$Template = new Template();
endif;
?>