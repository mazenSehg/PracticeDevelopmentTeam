<?php
// if accessed directly than exit
if(!defined('ABSPATH')) exit;
date_default_timezone_set('Europe/London');
if( !class_exists('User') ):

	class User{
		private $database;
		private $current__user__id;
		private $current__user;

		function __construct(){
			global $db;
			$this->database = $db;
			$this->current__user__id = get_current_user_id();
			$this->current__user = get_userdata($this->current__user__id);
		}

		public function user__bands(){
			return array(
				'1' => '1', 
				'2' => '2', 
				'3' => '3', 
				'4' => '4', 
				'5' => '5', 
				'6 '=> '6', 
				'7' => '7', 
				'8' => '8', 
				'a' => 'a', 
				'8b'=> '8b', 
				'8c'=> '8c', 
				'8d'=> '8d', 
				'8e'=> '8e', 
				'9' => '9', 
			);
		}

		public function forgot__page(){
			ob_start();
			?>
			<div class="row">
				<div class=" main-box">
					<div class="col-md-4 col-xs-12 pull-right">
						<form class="forgot-form" method="get" autocomplete="off">
							<h3 class="form-title">
								Forgot Password
								<i class="fa fa-lock"></i>
							</h3>
							<p>Please input your email in the form below and an email will be sent with a new password</p>
							<p>Once you have logged in with the new password you are free to change it.</p>
							<br>
							<br>
							<div class="form-group">
								<label for="user_name">
									email address:
									<span class="required">*</span></label>
								<input type="text" name="user_name" class="form-control input-sm" placeholder="" />
							</div>
							<span style="height:5px;display: block;">
								&nbsp;
							</span>
							<div class="form-group">
								<input type="hidden" name="action" value="pword_login" />
								<button class="btn btn-block btn-success btn-sm" type="submit">
									<i class="fa fa-lock"></i>Reset password</button>
							</div>
							<div class="form-group">
								<div class="alert alert-success">
									Please allow a few minutes for a new password to be generated and sent to your email address provided.</div>
								<div class="alert alert-danger"></div>
							</div>
							<div class="form-group">
								<span style="height:5px;display: block;">&nbsp;</span>
								<a href="<?php echo site_url();?>/login/" class="btn btn-block btn-warning btn-sm">
									Back to Login page
								</a>
							</div>
						</form>
					</div>
					<div class="col-md-7 col-xs-12 text-center hidden-xs ">
						<h1 class=" big-title">
							Welcome to the NCCPM online Fault Reporting System.
						</h1>
						<div class="ln_solid"></div>
						<p>Please login to access the equipment and fault management services.</p>
					</div>
					<div class="col-md-1">
					</div>
				</div>
			</div>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function browse__page(){
			ob_start();
			?>
			<div class="row">
				<div class=" main-box">
					<div class="col-md-12 text-center">
						<h1 class=" big-title"><?php (IS_PDT)?_e('Professional Development Tracker'):_e('Resusitation course booking and management');?>&nbsp;</h1>
						<div class="ln_solid"></div>
					</div>
				</div>
			</div>
			<?php
			$content = ob_get_clean();
			return $content;
		}
			
		public function login__page(){
			ob_start();
			?>
			<div class="row">
				<div class="main-box">
					<div class="col-md-12 text-center">
			                     <h1 class=" big-title"><?php (IS_PDT)?_e('Professional Development Tracker'):_e('Resusitation course booking and management');?>&nbsp;</h1>
						<div class="ln_solid"></div>
					</div>
					<?php if(!IS_PDT): ?>
					<div class="col-md-4 col-xs-12 pull-left">
						<form class="browse-form" method="get" autocomplete="off">
							<h3 class="form-title">
								<?php _e('Browse Courses');?>&nbsp;
								<i class="fa fa-search"></i>
							</h3>
							<span style="height:5px;display: block;">&nbsp;</span>
							<div class="form-group">
								<a class="btn btn-block btn-success btn-sm" href="<?php the_permalink('browse-courses');?>"><?php _e('Browse Courses');?></a>
							</div>
							<div class="form-group">
								<div class="alert alert-success"><?php _e('Loading course, please wait...');?></div>
								<div class="alert alert-danger"></div>
							</div>
						</form>
					</div>
					<?php endif; ?>
					<div class="col-md-4 col-xs-12 pull-right">
						<form class="login-form" method="get" autocomplete="off">
							<h3 class="form-title">
								<?php _e('Sign In');?>&nbsp;
								<i class="fa fa-lock"></i>
							</h3>
							<div class="form-group">
								<label for="user_name"><?php _e('User name');?>&nbsp;
									<span class="required">*</span></label>
								<input type="text" name="user_name" class="form-control input-sm" placeholder="" />
							</div>
							<div class="form-group">
								<label for="user_pass"><?php _e('Password');?>&nbsp;
									<span class="required">*</span></label>
								<input type="password" name="user_pass" class="form-control input-sm" placeholder="" />
							</div>
							<span style="height:5px;display: block;">
								&nbsp;
							</span>
							<div class="form-group">
								<input type="hidden" name="action" value="user_login" />
								<button class="btn btn-block btn-success btn-sm" type="submit">
									<i class="fa fa-lock"></i>&nbsp;
									<?php _e('Login');?></button>
							</div>
							<div class="form-group">
								<div class="alert alert-success"><?php _e('Welcome Back, Successfully loggedin.');?></div>
								<div class="alert alert-danger"></div>
							</div>
							<div class="form-group">
								<div class="text-center">
									<strong>
										<?php _e('OR');?>
									</strong>
								</div>
								<span style="height:5px;display: block;">&nbsp;</span>
								<button class="btn btn-block btn-warning btn-sm" type="button"><?php _e('Having problem in login ?');?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function upload__image__section(){
			ob_start();
			?>
			<div class="modal fade" id="upload-image-modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title green" id="myModalLabel">
								<?php _e('Upload Profile Image');?>
							</h4>
						</div>
						<form class="upload-profile-image" method="post" autocomplete="off">
							<div class="modal-body">
								<div class="form-group">
									<label for="question"><?php _e('Choose an image for upload');?>&nbsp;<span class="required">*</span></label>
									<input type="file" name="photo" accept="image/*" />
									<span class="help-block green"><?php _e('Supported image formats: jpeg, png, jpg');?></span>
									<span class="help-block green"><?php _e('Recommended profile image size: 300 x 300 pixels');?></span>
								</div>
								<div class="form-group">
									<div class="alert alert-success">
										<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>&nbsp;
										<?php _e('Image is being upload, please do not close upload box ..');?>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="hidden" name="action" value="upload_profile_image" />
								<!--<button class="btn btn-success" type="submit">Submit</button>-->
								<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close');?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function activity__and__access__log__section( $user__id ){
			ob_start();
			$user = get_user_by('id', $user__id);
			/*Notifications Query*/
			$notifications__query = " ORDER BY `ID` DESC LIMIT 0, 5";
			$notifications__args = array('user_id'=> $user__id);
			$notifications__result = get_tabledata(TBL_NOTIFICATIONS, false, $notifications__args, $notifications__query);

			/*Access Log Query*/
			$access__log__query = " ORDER BY `ID` DESC LIMIT 0, 10";
			$access__log__args = array('user_id'=> $user__id);
			$access__log__result = get_tabledata(TBL_ACCESS_LOG, false, $access__log__args, $access__log__query);
			?>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="profile_title">
					<div class="col-md-6">
						<h2><?php _e('User Activity Report');?></h2>
					</div>
				</div>
				<div class="" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#tab_content1" role="tab" data-toggle="tab" aria-expanded="true">
								<?php _e('Recent Activity');?>
							</a>
						</li>
						<li role="presentation" class="">
							<a href="#tab_content2" role="tab" data-toggle="tab" aria-expanded="false">
								<?php _e('Recent Access Log');?>
							</a>
						</li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
							<!-- start recent activity -->
							<ul class="messages list-unstyled">
								<?php
								if($notifications__result):
								foreach($notifications__result as $user__notifications): ?>
								<li>
									<img src="<?php echo get_user_profile_image($user__notifications->user_id);?>" class="avatar" alt="Avatar">
									<div class="message_date">
										<h3 class="date text-info">
											<?php echo date('d', strtotime($user__notifications->date));?>
										</h3>
										<p class="month">
											<?php echo date('M', strtotime($user__notifications->date));?>
										</p>
									</div>
									<div class="message_wrapper">
										<h4 class="heading">
											<?php echo $user__notifications->title;?>
											<small>
												<?php echo date('M d, Y h:i a', strtotime($user__notifications->date));?>
											</small>
										</h4>
										<blockquote class="message">
											<?php _e(htmlspecialchars_decode($user__notifications->notification));?>
										</blockquote>
										<br/>
									</div>
								</li>
								<?php endforeach; else: ?>
								<li>
									<h5><?php _e('There is no recent activity details');?></h5>
								</li>
								<?php endif; ?>
							</ul>
							<!-- end recent activity -->
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
							<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th><?php _e('Last Login');?></th>
										<th><?php _e('Location');?></th>
										<th><?php _e('Device');?></th>
									</tr>
								</thead>
								<tbody>
									<?php if($access__log__result): foreach($access__log__result as $access__log__row): ?>
									<tr>
										<td><?php echo date('M d, Y h:i A', strtotime($access__log__row->date));?></td>
										<td><?php echo $access__log__row->ip_address;?></td>
										<td><a href="#" data-toggle="tooltip" title="<?php echo $access__log__row->user_agent;?>"><?php echo $access__log__row->device;?></a></td>
									</tr>
									<?php endforeach; endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function activity__and__progress__log__section( $user__id ){
			ob_start();
			$user = get_user_by('id', $user__id);
			$courses = get_tabledata(TBL_USERS, false, array('ID'=>$user__id));
			$courses = get_tabledata(TBL_USERS, false, array('ID'=>$user__id));
			$rules = get_tabledata(TBL_RULES, false, array('user_ID'=>$user__id));
			if(!$courses):
				echo page_not_found("Oops! There is no courses assigned to this user", ' ', false);
			endif;
			?>
			<div class="row">
				<div class="col-md-7">
					<div class="panel with-nav-tabs panel-default">
						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li><a href="#tab1default" data-toggle="tab">Profile</a></li>
								<li class="active"><a href="#tab2default" data-toggle="tab">Course</a></li>
								<?php if($rules[0]->preceptorship != 0) ?>
								<li><a href="#tab3default" data-toggle="tab">Preceptorship Progress</a></li>
								<?php if($rules[0]->hca != 0) ?>
								<li><a href="#tab4default" data-toggle="tab">HCA Induction Progress</a></li>
								<?php if($rules[0]->flap != 0) ?>
								<li><a href="#tab5default" data-toggle="tab">FD/AP Training Record</a></li>
								<?php if($rules[0]->record != 0) ?>
								<li><a href="#tab6default" data-toggle="tab">Student Record</a></li>
								<?php if($rules[0]->mentorship != 0) ?>
								<li><a href="#tab7default" data-toggle="tab">Mentorship</a></li>
							</ul>
						</div>
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane fade" id="tab1default">
									<ul class="messages list-unstyled">
										<?php
										$user = get_userdata($user__id);
										?>
										<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
											<div class="profile_img">
												<div id="crop-avatar">
													<img class="img-responsive avatar-view" src="<?php echo get_user_profile_image($user__id);?>" alt="Avatar">
												</div>
											</div>
											<h3><?php echo $user->first_name.' '.$user->last_name;?></h3>
											<strong>Date of Birth:</strong> <?php echo date('M d, Y', strtotime(get_user_meta($user->ID, 'dob', true)));?><br><br />
											<a class="btn btn-success btn-sm" href="<?php the_permalink('edit-user', array('user_id'=> $user__id));?>">
												<i class="fa fa-edit m-right-xs"></i>&nbsp;<?php _e('Edit User Details');?></a>
										</div>
										<div class="col-sm-4 col-xs-12 profile_left">
											<div class="profile_img"></div>
											<h3>Contact Details</h3>
											<strong>Email</strong>: <?php echo $user->user_email;?><br>
											<strong>Phone:</strong><?php echo get_user_meta($user->ID, 'user_phone', true);?><br>
											<strong>Work Extension:</strong><?php echo get_user_meta($user->ID, 'work_extension', true);?><br>
											<strong>Beep:</strong><?php echo get_user_meta($user->ID, 'beep', true);?><br>
										</div>
										<div class="col-sm-5 col-xs-12 profile_left">
											<div class="profile_img">
												<?php
												$w_area = get_tabledata(TBL_WORKS, true, array('ID'=> $user->work_area_ID));
												$a = get_user_meta($user->ID, 'user_designation', true);
												$desig = get_tabledata(TBL_DESIGNATIONS, true, array('ID'=> $a));
												?>
											</div>
												
											<h3>Work Details</h3>
											<strong>Currently Employed:</strong>
											<?php echo $user->currently_employed != 0 ?"Yes" : "No";?>
											<br>
											<strong>Work Area</strong>: <?php echo $w_area->name;?><br>
											<strong>Designation:</strong><?php echo $desig->name;?><br>
											<strong>Band:</strong><?php echo get_user_meta($user->ID, 'band', true);;?>
											<br>
											<br/>
											<strong>External Candidate Number:</strong><?php echo $user->external_candidate;?><br>
											<strong>RAG Status:</strong><?php echo $user->rag_status;?><br>
											<strong>RAG Status:</strong><?php
											if($user->extended_support == 0){
												echo "Red";
											}elseif($user->extended_support == 1){
												echo "Amber";
											}elseif($user->extended_support == 3){
												echo "Green";
											};?>
											<br>
											<strong>Extended Support:</strong><?php
											if($user->extended_support != 0){
												echo "Yes";
											}else{
												echo "No";
											};?><br>
											<strong>Support Since:</strong><?php echo $user->support_since;?><br>
										</div>
									</ul>
								</div>
								<div class="tab-pane fade in active" id="tab2default">
									<ul class="messages list-unstyled">
										<h1>Courses</h1>
										<?php
										$user = get_user_by('id', $user__id);
										$bookings = get_tabledata(TBL_BOOKINGS, false, array());
										if(!$bookings):
											echo page_not_found("Thia user is not currently booked for any courses.", ' ', false);
										else:
										?>
										<table class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><?php _e('Course Name(s)');?></th>
													<th><?php _e('Course Booked');?></th>
													<th><?php _e('Attended');?></th>
													<th><?php _e('Documents uploaded');?></th>
													<th><?php _e('Course Completed');?></th>
												</tr>
											</thead>
											<tbody>
												<?php
												if($bookings):
												foreach($bookings as $booking):
													$data = unserialize($booking->nurses);
													$data2 = unserialize($booking->attendance);
													$data3 = unserialize($booking->enroll);
													$match = 0;
													$attended;
													foreach($data as $i):
														if($user->ID == $i){
															$match = 1;
															$attended = $data2[$user->ID];
															$completed= $data3[$user->ID];
														}
													endforeach;
												//$corse = get_tabledata(TBL_COURSES, true, array('ID' => $booking->course_ID));
												?>
												<tr bgcolor="<?php if($completed != 0): echo "#E0F8E0"; else: echo "#F78181"; endif; ?>">
													<?php if($match != 0):
													$course = get_tabledata(TBL_COURSES, false, array('ID'=>$booking->course_ID)); ?>
													<td><?php echo $booking->name; ?></td>
													<td><?php echo date('M d, Y', strtotime($booking->date_from)); ?></td>
													<td><?php echo ($attended != 0) ? "yes" : "no."; ?></td>
													<td></td>
													<td><?php echo ($completed != 0) ? "yes" : "no."; ?></td>
													<?php endif;?>
												</tr>
												<?php endforeach; endif; ?>
											</tbody>
										</table>
										<?php endif; ?>
									</ul>
								</div>
								<div class="tab-pane fade" id="tab3default">
									<!-- connect to tbl_user_progress -->
									<?php $userProg = get_tabledata(TBL_PROG,true,array('user_ID'=>$user__id));
									$prec;
									if($userProg){
									$prec = $userProg->prec;
									$prec = unserialize(unserialize($prec));
									}

									error_log(json_encode($prec));
									?>
									<form class="submit-form" method="post" autocomplete="off">
										<div class="row" id="<?php echo $prec['prec_intro']; ?>">
											<div class="form-group col-sm-4 col-xs-12">
												<label for="p_intro"><?php _e('Preceptorship Intro');?></label>
												<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($prec['prec_intro']) ? date('M d, Y', strtotime($prec['prec_intro'])) : '';?>" />
											</div>
                                                                                        <div class="form-group col-sm-4 col-xs-12">
                                                                                                <label for="admins"><?php _e('Allocated Preceptor');?>&nbsp;<span class="required">*</span></label>
                                                                                                <select name="trainers" class="form-control select_single require">
                                                                                                        <?php
                                                                                                        $data = get_tabledata(TBL_USERS, false, array('user_role'=> 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
                                                                                                        $option_data = get_option_data($data, array('ID', 'name'));
                                                                                                        echo get_options_list($option_data, maybe_unserialize($prec['prec_trainer']));
                                                                                                        ?>
                                                                                                </select>
                                                                                        </div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="p_location"><?php _e('Place of Training');?></label>
												<input type="text" name="p_location" class="form-control " value="<?php echo isset($prec['p_location']) ? $prec['p_location'] : '';?>" />
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-3 col-xs-12">
												<label for="p_current"><?php _e('Current Preceptee');?></label>
												<br/>
												<label><input type="checkbox" name="p_current" class="js-switch" <?php isset($prec['current_prec']) ? checked($prec['current_prec'], 1) : '';?> /></label>
											</div>
											
										</div>
										<div class="row">
											<div class="form-group col-sm-4 col-xs-12">
												<label for="q_date"><?php _e('Qualification Date');?></label>
												<input type="text" name="q_date" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($prec['q_date']) ? date('M d, Y', strtotime($prec['q_date'])): '';?>" />
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="p_regdate"><?php _e('Professional Registration Date');?></label>
												<input type="text" name="p_regdate" class="form-control input-datepicker" readonly="readonly"  value="<?php echo isset($prec['p_regdate']) ? date('M d, Y', strtotime($prec['p_regdate'])) : '';?>" />
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="p_country"><?php _e('Country of Registration');?></label>
												<input type="text" name="p_country" class="form-control" value="<?php echo isset($prec['p_country']) ? $prec['p_country'] : '';?>" />
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-4 col-xs-12">
												<label for=""><?php _e('Sign off Period');?></label>
												<br/>
												<label><input type="radio" class="flat" name="p_period" value="6" <?php isset($prec['sign_off']) ? checked($prec['sign_off'], '6') : ''; ?> /> <?php _e('6 Months');?></label>
												<label>&nbsp;</label>
												<label><input type="radio" class="flat" name="p_period" value="12" <?php isset($prec['sign_off']) ? checked($prec['sign_off'], '12') : ''; ?> /> <?php _e('12 Months');?></label>
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="p_rag"><?php _e('RAG Status');?></label>
												<select  name="p_rag" class="form-control select_single require"/><option value="red">Red</option><option value="amber">Amber</option><option value="green">Green</option></select>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-12 col-xs-12">
												<label for="description-of-fault">Notes</label>
												<textarea name="p_notes" class="form-control" rows="4"><?php echo isset($prec['prec_notes']) ? $prec['prec_notes']: '';?></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="ln_solid"></div>
											<input type="hidden" name="user_id3" class="form-control require" value="<?php echo $user__id;?>" readonly="readonly" />
											<input type="hidden" name="action" value="update_preceptorship" />
											<button class="btn btn-success btn-md" type="submit"><?php _e('Update Preceptor Progress');?></button>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="tab4default">
									<form class="submit-form" method="post" autocomplete="off">
										<?php $data = get_tabledata(TBL_INFO, false, array('user_ID'=>$user__id)); ?>
										<div class="row">
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Course Start Date');?></label>
												<input type="text" name="hca_start" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($fault->hca_start) ? date('M d, Y', strtotime($fault->hca_start)) : '';?>" />
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Manager Name');?></label>
												<input type="text" name="hca_manager" class="form-control" value="<?php echo isset($fault->hca_manager) ? $fault->hca_manager : '';?>" />
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Manager Email');?></label>
												<input type="text" name="hca_email" class="form-control " value="<?php echo isset($fault->hca_email) ? $fault->hca_email : '';?>" />
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-6 col-xs-12">
												<label for="decommed"><?php _e('New to care');?></label>
												<br/>
												<label><input type="checkbox" name="hca_new_care" class="js-switch" <?php isset($fault->hca_new_care) ? checked($fault->hca_new_care, '1') : ''; ?>/></label>
											</div>
											<div class="form-group col-sm-6 col-xs-12">
												<label for="decommed"><?php _e('Current PD Team Clinet');?></label>
												<br/>
												<label><input type="checkbox" name="hca_current_client" class="js-switch" <?php isset($fault->hca_current_client) ? checked($fault->hca_current_client, '1') : ''; ?>/></label>
											</div>
											<div class="form-group col-sm-6 col-xs-12">
												<label for="decommed"><?php _e('Fundamental Adult Care Cluster Book complete');?></label>
												<br/>
												<label><input type="checkbox" name="hca_fundamental_care" class="js-switch" <?php isset($fault->hca_fundamental_care) ? checked($fault->hca_fundamental_care, '1') : ''; ?>/></label>
											</div>
											<div class="form-group col-sm-6 col-xs-12">
												<label for="decommed"><?php _e('Care certificate Complete');?></label>
												<br/>
												<label><input type="checkbox" name="hca_care" class="js-switch" <?php isset($fault->hca_care) ? checked($fault->hca_care, '1') : ''; ?> /></label>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-12 col-xs-12">
												<label for="admins"><?php _e('Allocated trainer');?>&nbsp;<span class="required">*</span></label>
												<select name="hca_trainer" class="form-control select_single require">
													<?php
													$data = get_tabledata(TBL_USERS, false, array('user_role'=> 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
													$option_data = get_option_data($data, array('ID', 'name'));
													echo get_options_list($option_data, maybe_unserialize($fault->hca_trainer));
													?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-12 col-xs-12">
												<label for="description-of-fault"><?php _e('Notes');?></label>
												<textarea name="hca_notes" class="form-control" rows="3"><?php echo isset($fault->hca_notes) ? ($fault->hca_notes) : ''; ?></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="ln_solid"></div>
											<input type="hidden" name="user_id3" class="form-control require" value="<?php echo $user__id;?>" readonly="readonly" />
											<input type="hidden" name="action" value="update_mca" />
											<button class="btn btn-success btn-md" type="submit"><?php _e('Update HCA Induction');?></button>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="tab5default">
									<form class="submit-form" method="post" autocomplete="off">
										<div class="row">
											
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('FD Course Start Date');?></label>
												<input type="text" name="fd_start" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($fault->fd_start) ? date('M d, Y', strtotime($fault->fd_start)) : '';?>" />
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Graduation Date');?></label>
												<input type="text" name="fd_graduate" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($fault->fd_graduate) ? date('M d, Y', strtotime($fault->fd_graduate)) : '';?>" />
											</div>
											
										</div>
										<div class="row">
											<div class="form-group col-sm-2 col-xs-12">
												<label for="decommed"><?php _e('Course Interrupt');?></label>
												<br/>
												<label><input type="checkbox" name="fd_inturrupt" class="js-switch" <?php isset($fault->fd_inturrupt) ? checked($fault->fd_inturrupt, '1') : ''; ?>/></label>
											</div>
											<div class="form-group col-sm-2 col-xs-12">
												<label for="decommed"><?php _e('Study Day 1');?></label>
												<br/>
												<label><input type="checkbox" name="fd_sd1" class="js-switch" <?php isset($fault->fd_sd1) ? checked($fault->fd_sd1, '1') : ''; ?>/></label>
											</div>
											<div class="form-group col-sm-2 col-xs-12">
												<label for="decommed"><?php _e('Study Day 2');?></label>
												<br/>
												<label><input type="checkbox" name="fd_sd2" class="js-switch" <?php isset($fault->fd_sd2) ? checked($fault->fd_sd2, '1') : ''; ?>/></label>
											</div>
											<div class="form-group col-sm-2 col-xs-12">
												<label for="decommed"><?php _e('Study Day 3');?></label>
												<br/>
												<label><input type="checkbox" name="fd_sd3" class="js-switch" <?php isset($fault->fd_sd3) ? checked($fault->fd_sd3, '1') : ''; ?>/></label>
											</div>
											<div class="form-group col-sm-2 col-xs-12">
												<label for="decommed"><?php _e('CURRENT FD');?></label>
												<br/>
												<label><input type="checkbox" name="fd_current" class="js-switch" <?php isset($fault->fd_current) ? checked($fault->fd_current, '1') : ''; ?>/></label>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-12 col-xs-12">
												<label for="description-of-fault"><?php _e('Other Study');?></label>
												<textarea name="fd_other" class="form-control" rows="3"><?php echo isset($fault->fd_other) ? $fault->fd_other : '';?></textarea>
											</div>
											<div class="form-group col-sm-12 col-xs-12">
												<label for="admins"><?php _e('Allocated trainer');?>&nbsp;<span class="required">*</span></label>
												<select name="fd_trainer" class="form-control select_single require">
													<?php
													$data = get_tabledata(TBL_USERS, false, array('user_role'=> 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
													$option_data = get_option_data($data, array('ID', 'name'));
													echo get_options_list($option_data, maybe_unserialize($fault->fd_trainer));
													?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-12 col-xs-12">
												<label for="description-of-fault"><?php _e('Notes');?></label>
												<textarea name="fd_notes" class="form-control" rows="4"><?php echo isset($fault->fd_notes) ? $fault->fd_notes : '';?></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="ln_solid"></div>
											<input type="hidden" name="user_id3" class="form-control require" value="<?php echo $user__id;?>" readonly="readonly" />
											<input type="hidden" name="action" value="update_fdap" />
											<button class="btn btn-success btn-md" type="submit"><?php _e('Update FD/AP Training Records');?></button>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="tab6default">
                                    <?php
                                        $user_cohort=$user->cohort;
            
                                        $prog = get_tabledata(TBL_PROG, true, array('user_ID'=> $user__id));
                                        $stud = $prog->stud;
                                        $stud = maybe_unserialize($stud);
                                        $stud = maybe_unserialize($stud);
                                        $std1 = $stud['stud_d1'];
                                        $std2 = $stud['stud_d2'];
                                        $std3 = $stud['stud_d3'];
                                        $prognotes = $stud['stud_notes'];
            
                                    ?>
									<form class="submit-form" method="post" autocomplete="off">
										<div class="row">
											<div class="form-group col-sm-6 col-xs-12">
												<label for="date-of-fault"><?php _e('Cohort');?></label>
												<select name="stud_cohort" class="form-control fetch-cohort-dates-data select_single require" value="<?php echo $user_cohort; ?>">
													<?php
													$data = get_tabledata(TBL_COHORTS, false, array());
													$option_data = get_option_data($data, array('ID', 'name'));
													echo get_options_list($option_data);
													?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Study Day 1');?></label>
                                                <br>
                                                <label><input id = "stud_d1" type="checkbox" name="stud_d1" class="js-switch" <?php if ($std1 == 1){?> checked="checked" <?php } ?>/></label>
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Study Day 2');?></label>
                                                <br>
												<label><input id = "stud_d2" type="checkbox" name="stud_d2" class="js-switch" <?php if ($std2 == 1){?> checked="checked" <?php } ?> /></label>
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Study Day 3');?></label>
                                                <br>
												<label><input id = "stud_d3" type="checkbox" name="stud_d3" class="js-switch" <?php if ($std3 == 1){?> checked="checked" <?php } ?>/></label>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-12 col-xs-12">
												<label for="description-of-fault"><?php _e('Notes');?></label>
												<textarea name="stud_notes" class="form-control" rows="4"><?php echo $prognotes ?></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="ln_solid"></div>
											<input type="hidden" name="user_id3" class="form-control require" value="<?php echo $user__id;?>" readonly="readonly" />
											<input type="hidden" name="action" value="update_student_prog" />
											<button class="btn btn-success btn-md" type="submit"><?php _e('Update student Progress');?></button>
										</div>
									</form>
								</div>									
								<div class="tab-pane fade" id="tab7default">
									<form class="submit-form" method="post" autocomplete="off">
										<div class="row">
											<div class="form-group col-sm-4 col-xs-12">
												<label for="decommed"><?php _e('Current Mentor');?></label>
												<br/>
												<label><input type="checkbox" name="mentor_current" class="js-switch" <?php isset($fault->mentor_current) ? checked($fault->mentor_current, '1') : ''; ?> /></label>
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="date-of-fault"><?php _e('Update Renewal Due');?></label>
												<input type="text" name="mentor_renew" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($fault->mentor_renew) ? date('M d, Y', strtotime($fault->mentor_renew)) : '';?>" />
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="decommed"><?php _e('Sign off Mentor');?></label>
												<br/>
												<label><input type="checkbox" name="mentor_sign_off" class="js-switch" <?php isset($fault->mentor_sign_off) ? checked($fault->mentor_sign_off, '1') : ''; ?>/></label>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-sm-12 col-xs-12">
												<label for="description-of-fault"><?php _e('Notes');?></label>
												<textarea name="mentor_notes" class="form-control" rows="3"><?php echo isset($fault->mentor_notes) ? $fault->mentor_notes : '';?></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="ln_solid"></div>
											<input type="hidden" name="user_id3" class="form-control require" value="<?php echo $user__id;?>" readonly="readonly" />
											<input type="hidden" name="action" value="update_mentor_prog" />
											<button class="btn btn-success btn-md" type="submit"><?php _e('Update Mentor Progress');?></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="panel with-nav-tabs panel-info">
						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab1info" data-toggle="tab">Notes</a></li>
							</ul>
						</div>
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane fade in active" id="tab1info">
									<ul class="messages list-unstyled">
										<form class="submit-form" method="post" autocomplete="off">
											<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th><?php _e('Date of Note');?></th>
														<th><?php _e('Note');?></th>
														<th><?php _e('Attachments');?></th>
														<th><?php _e('Note Posted By');?></th>
													</tr>
												</thead>
												<tbody>
													<?php
													$notez = get_tabledata(TBL_NOTES, false, array('to'=>$user__id));
													foreach($notez as $noty): ?>
													<tr>
														<td>	<?php echo $noty->date?></td>
														<td>	<?php echo $noty->note?></td>
														<td>	<?php
															function filePathParts($arg1){
																return $arg1['basename'];
															}
															$xmlFile = pathinfo($noty->filepath);
															$name = filePathParts($xmlFile);
															?>
															<a href="<?php echo $noty->filepath; ?>" download>Download<br>(<?php echo $name;?>)</a></td>
                                                        <td>	<?php $user = get_userdata($noty->from);echo $user->first_name . " ". $user->last_name?></td>
                                                        <td><button type="button" class="get-note btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#note-data-modal" data-note="<?php echo $noty->ID;?>"><span class="glyphicon glyphicon-pencil"></span></button></td>

													</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
											<div class="row">
												<div class="form-group col-sm-12 col-xs-12">
													<label for="description-of-fault"><?php _e('Notes');?></label>
													<textarea name="note" class="form-control" rows="4"></textarea>
												</div>
												<div class="form-group col-sm-12 col-xs-12">
													<label for="description-of-fault"><?php _e('Attachments');?></label>
													<input type="file" name="file" accept="">
												</div>
											</div>
											
											
											<div class="form-group">
												<div class="ln_solid"></div>
												<input type="hidden" name="user_id3" class="form-control require" value="<?php echo $user__id;?>" readonly="readonly" />
												<input type="hidden" name="action" value="update_notes" />
												<button class="btn btn-success btn-md" type="submit"><?php _e('Add note');?></button>
											</div>
										</form>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			$content = ob_get_clean();
			return $content;
		}

		public function view__profile__page(){
			ob_start();
			$user__id = $_GET['user_id'];
			$user = get_userdata($user__id);
			if(!user_can('view_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$user):
				echo page_not_found('Oops ! User Details Not Found.', 'Please go back and check again !');
			else: ?>
			<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
				<div class="profile_img">
					<div id="crop-avatar">
						<img class="img-responsive avatar-view" src="<?php echo get_user_profile_image($user__id);?>" alt="Avatar">
					</div>
				</div>
				<h3>
					<?php echo $user->first_name.' '.$user->last_name;?>
				</h3>
				<ul class="list-unstyled user_data">
					<li>
						<i class="fa fa-envelope-o"></i>&nbsp;<?php _e($user->user_email);?>
					</li>
					<li>
						<i class="fa fa-<?php echo strtolower(get_user_meta($user->ID, 'gender', true));?>"></i>&nbsp;<?php _e(get_user_meta($user->ID, 'gender', true));?>
					</li>
					<?php
					if(get_user_meta($user->ID, 'user_phone', true) != ''): ?>
					<li>
						<i class="fa fa-phone"></i><?php echo get_user_meta($user->ID, 'user_phone', true);?>
					</li>
					<?php endif; ?>
					<li class="m-top-xs">
						<i class="fa fa-child"></i>&nbsp;<?php echo date('M d, Y', strtotime(get_user_meta($user->ID, 'dob', true)));?>
					</li>
				</ul>
				<br/>
				<a class="btn btn-success btn-sm" href="<?php the_permalink('edit-user', array('user_id'=> $user__id));?>">
					<i class="fa fa-edit m-right-xs"></i>&nbsp;<?php _e('Edit User');?>
				</a>
			</div>
			<?php echo $this->activity__and__access__log__section( $user->ID );
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function view__progress__page(){
			ob_start();
			$user__id = $_GET['user_id'];
			$user = get_userdata($user__id);
			?>
			<h3>Progress review for: <?php echo $user->first_name.' '.$user->last_name;?></h3>
			<div class="col-md-12 col-xs-12 profile_left"></div>
			<?php
			if(!user_can('view_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$user):
				echo page_not_found('Oops ! User Details Not Found.', 'Please go back and check again !');
			else:
				echo $this->activity__and__progress__log__section( $user->ID );
			endif;
            echo $this->note__data__modal();
			$content = ob_get_clean();
			return $content;
		}

		public function add__trainee__page(){
			ob_start();
			if(!user_can('add_user')):
			echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-user user-form" method="post" autocomplete="off">
				<div class="row">
					<div class="form-group col-sm-4 col-xs-12">
						<label for="username">Username<span class="required">*</span></label>
						<input type="text" name="username" class="form-control require" />
					</div>
					<div class="form-group col-sm-4 col-xs-12">
						<label for="first_name"><?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="first_name" class="form-control require" />
					</div>
					<div class="form-group col-sm-4 col-xs-12">
						<label for="last_name"><?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="last_name" class="form-control require" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="email"><?php _e('Email');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="user_email" class="form-control require" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="dob"><?php _e('Date of birth');?></label>
						<input type="text" name="dob" class="form-control input-datepicker-today" readonly="readonly" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="gender"><?php _e('Gender');?>&nbsp;<span class="required">*</span></label>
						<select name="gender" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
							<option value=""></option>
							<option value="Male"><?php _e('Male');?></option>
							<option value="Female"><?php _e('Female');?></option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="phone"><?php _e('Phone');?></label>
						<input type="text" name="user_phone" class="form-control" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="work_extension"><?php _e('Work extension');?></label>
						<input type="text" name="work_extension" class="form-control" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="beep"><?php _e('Beep');?></label>
						<input type="text" name="beep" class="form-control" />
					</div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                                <label for="ward_manager"><?php _e('Ward Manager Email');?><span class="required">*</span></label>
                                                <input type="text" name="ward_manager" class="form-control require" />
                                        </div>
				</div>

				<div class="form-group">
					<input type="hidden" id="purpose" name="user_role" value = "nurse" class="form-control" tabindex="-1" data-placeholder="Choose role">
				</div>

				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user_designation"><?php _e('Designation');?>&nbsp;<span class="required">*</span></label>
						<select name="user_designation" class="form-control select_single require" tabindex="-1" data-placeholder="Choose designation"><?php
							$data = get_tabledata(TBL_DESIGNATIONS, false);
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>

					<div class="form-group col-sm-6 col-xs-12">
						<label for="user_designation"><?php _e('Work Area');?>&nbsp;<span class="required">*</span></label>
						<select name="work_area" class="form-control select_single" tabindex="-1" data-placeholder="Choose Work Area"><?php
							$data = get_tabledata(TBL_WORKS, false, array(), '', ' ID, CONCAT_WS(" | ", code, name) as name');
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="band"><?php _e('Band');?></label>
						<select name="band" class="form-control select_single" tabindex="-1" data-placeholder="Choose band"><?php
							$option_data = $this->user__bands();
							echo get_options_list($option_data);
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 form-goup">
						<label><?php _e('Upload Profile Image');?></label>
						<input type="text" name="profile_img" class="form-control" value="" placeholder="Uploaded image url" readonly="readonly" />
						<br/>
						<a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#upload-image-modal">
							<i class="fa fa-camera"></i>&nbsp;<?php _e('Upload Image');?>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 form-group">
						<div class="profile-image-preview-box">
							<img src="" class="img-responsive img-thumbnail" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">Currently Employed?</label>
						<br/>
						<label><input type="radio" class="flat" name="current_employed" value="1" /> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="current_employed" value="0" /> No</label>
					</div>
				</div>
				<div class="form-group col-sm-6 col-xs-12">
					<label for="name">External Candidate No.</label>
					<input type="text" name="ex_cand" class="form-control " />
				</div>
				<div class="form-group col-sm-6 col-xs-12">
					<label for="gender">RAG Status</label>
					<select name="rag_status" class="form-control select_single" tabindex="-1" data-placeholder="Choose a gender">
						<option value="">
						</option>
						<option value="0">Red</option>
						<option value="1">Amber</option>
						<option value="2">Green</option>
					</select>
				</div>
				<div class="form-group col-sm-6 col-xs-12">
					<label for="current_employed">Extended support Underway</label><br/>
					<label><input type="radio" class="flat" name="extended_support" value="1" /> Yes</label>
					<label>&nbsp;</label>
					<label><input type="radio" class="flat" name="extended_support" value="0" /> No</label>
				</div>
				<div class="form-group col-sm-6 col-xs-12">
					<label for="name">Extended Support Since:</label>
					<input type="text" name="support_since" class="form-control " />
				</div>

				<div class="row">
					<br><br>
					<h2>Training information Required:</h2><br><br>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">Preceptorship progress</label><br/>
						<label><input type="radio" class="flat" name="preceptorship" value="1" /> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="preceptorship" value="0" /> No</label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">HCA Induction Progress</label><br/>
						<label><input type="radio" class="flat" name="hca" value="1" /> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="hca" value="0" /> No</label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">FD/AP Training Record</label><br/>
						<label><input type="radio" class="flat" name="fdap" value="1" /> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="fdap" value="0" /> No</label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">Student Record</label><br/>
						<label><input type="radio" class="flat" name="record" value="1" /> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="record" value="0" /> No</label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">Mentorship</label><br/>
						<label><input type="radio" class="flat" name="mentorship" value="1" /> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="mentorship" value="0" /> No</label>
					</div>
				</div>
				<div class="ln_solid"></div>
				<div class="form-group">
					<input type="hidden" name="action" value="add_new_user" />
					<button class="btn btn-success btn-md" type="submit">
						<?php _e('Add New User');?>
					</button>
				</div>
			</form>
			<?php
			echo $this->upload__image__section();
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function add__user__page(){
			ob_start();
			if(!user_can('add_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-user user-form" method="post" autocomplete="off">
				<div class="row">
					<div class="form-group col-sm-4 col-xs-12">
						<label for="username"><?php _e('Username');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="username" class="form-control require" />
					</div>
					<div class="form-group col-sm-4 col-xs-12">
						<label for="first_name"><?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="first_name" class="form-control require" />
					</div>
					<div class="form-group col-sm-4 col-xs-12">
						<label for="last_name"><?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="last_name" class="form-control require" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="email"><?php _e('Email');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="user_email" class="form-control require" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="dob"><?php _e('Date of birth');?></label>
						<input type="text" name="dob" class="form-control input-datepicker-today" readonly="readonly" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="gender"><?php _e('Gender');?>&nbsp;<span class="required">*</span></label>
						<select name="gender" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
							<option value=""></option>
							<option value="Male"><?php _e('Male');?></option>
							<option value="Female"><?php _e('Female');?></option>
						</select>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="phone"><?php _e('Phone');?></label>
						<input type="text" name="user_phone" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="work_extension"><?php _e('Work extension');?></label>
						<input type="text" name="work_extension" class="form-control" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="beep"><?php _e('Beep');?></label>
						<input type="text" name="beep" class="form-control" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user-role"><?php _e('Role');?>&nbsp;<span class="required">*</span></label>
						<select id="purpose" name="user_role" class="form-control select_single require" tabindex="-1" data-placeholder="Choose role"><?php echo get_options_list(get_roles()); ?>
						</select>
					</div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                                <label for="ward_manager"><?php _e('Ward Manager Email');?><span class="required"> *</span></label>
                                                <input type="text" name="ward_manager" class="form-control require" />
                                        </div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user_designation"><?php _e('Designation');?>&nbsp;<span class="required">*</span></label>
						<select name="user_designation" class="form-control select_single require" tabindex="-1" data-placeholder="Choose designation"><?php
							$data = get_tabledata(TBL_DESIGNATIONS, false);
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="work_area"><?php _e('Work Area');?>&nbsp;<span class="required">*</span></label>
						<select name="work_area" class="form-control select_single" tabindex="-1" data-placeholder="Choose Work Area"><?php
							$data = get_tabledata(TBL_WORKS, false, array(), '', ' ID, CONCAT_WS(" | ", code, name) as name');
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="band"><?php _e('Band');?></label>
						<select name="band" class="form-control select_single" tabindex="-1" data-placeholder="Choose band"><?php
							$option_data = $this->user__bands();
							echo get_options_list($option_data);
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 form-goup">
						<label><?php _e('Upload Profile Image');?></label>
						<input type="text" name="profile_img" class="form-control" value="" placeholder="Uploaded image url" readonly="readonly" />
						<br/>
						<a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#upload-image-modal">
							<i class="fa fa-camera"></i>&nbsp;<?php _e('Upload Image');?>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 form-group">
						<div class="profile-image-preview-box">
							<img src="" class="img-responsive img-thumbnail" />
						</div>
					</div>
				</div>
				<div class="row nav-sub-wrapper" style="display: none;">
					<div class="col-xs-12 col-sm-12 form-goup">
						<script>
							$(document).ready(function(){$("#purpose").on("change", function(){"nurse"==this.value?$(".nav-sub-wrapper").toggle():$(".nav-sub-wrapper").hide()})});
						</script>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label for="current_employed">Currently Employed?</label>
								<br/>
								<label><input type="radio" class="flat" name="current_employed" value="1" /> Yes</label>
								<label>&nbsp;</label>
								<label><input type="radio" class="flat" name="current_employed" value="0" /> No</label>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label for="name">External Candidate No.</label>
								<input type="text" name="ex_cand" class="form-control " />
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label for="gender">RAG Status</label>
								<select name="rag_status" class="form-control select_single" tabindex="-1" data-placeholder="Choose a gender">
									<option value=""></option>
									<option value="0">Red</option>
									<option value="1">Amber</option>
									<option value="2">Green</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6 col-xs-12">
								<label for="current_employed">Extended support Underway</label>
								<br/>
								<label><input type="radio" class="flat" name="extended_support" value="1" /> Yes</label>
								<label>&nbsp;</label>
								<label><input type="radio" class="flat" name="extended_support" value="0" /> No</label>
							</div>
							<div class="form-group col-sm-6 col-xs-12">
								<label for="name">Extended Support Since:</label>
								<input type="text" name="support_since" class="form-control " />
							</div>
						</div>

						<br><br>
						<h2>Training information Required:</h2><br><br>
						<div class="form-group col-sm-6 col-xs-12">
							<label for="current_employed">Preceptorship progress</label><br/>
							<label><input type="radio" class="flat" name="preceptorship" value="1" /> Yes</label>
							<label>&nbsp;</label>
							<label><input type="radio" class="flat" name="preceptorship" value="0" /> No</label>
						</div>
						<div class="form-group col-sm-6 col-xs-12">
							<label for="current_employed">HCA Induction Progress</label><br/>
							<label><input type="radio" class="flat" name="hca" value="1" /> Yes</label>
							<label>&nbsp;</label>
							<label><input type="radio" class="flat" name="hca" value="0" /> No</label>
						</div>
						<div class="form-group col-sm-6 col-xs-12">
							<label for="current_employed">FD/AP Training Record</label><br/>
							<label><input type="radio" class="flat" name="fdap" value="1" /> Yes</label>
							<label>&nbsp;</label>
							<label><input type="radio" class="flat" name="fdap" value="0" /> No</label>
						</div>
						<div class="form-group col-sm-6 col-xs-12">
							<label for="current_employed">Student Record</label><br/>
							<label><input type="radio" class="flat" name="record" value="1" /> Yes</label>
							<label>&nbsp;</label>
							<label><input type="radio" class="flat" name="record" value="0" /> No</label>
						</div>
						<div class="form-group col-sm-6 col-xs-12">
							<label for="current_employed">Mentorship</label><br/>
							<label><input type="radio" class="flat" name="mentorship" value="1" /> Yes</label>
							<label>&nbsp;</label>
							<label><input type="radio" class="flat" name="mentorship" value="0" /> No</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 form-goup">
						<div class="ln_solid"></div>
						<input type="hidden" name="action" value="add_new_user" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Add New User');?></button>
					</div>
				</div>
			</form>
			<?php
			echo $this->upload__image__section();
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function edit__user__page(){
			ob_start();
			$user__id = $_GET['user_id'];
			$user = get_userdata($user__id);
			$designation = get_tabledata(TBL_RULES, true, array('user_ID'=> $user__id));
			if(!user_can('edit_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$user):
				echo page_not_found('Oops ! User Details Not Found.', 'Please go back and check again !');
			else: ?>
			<form class="user-form" method="post" autocomplete="off">
				<div class="row">
					<div class="form-group col-sm-4 col-xs-12">
						<label for="username"><?php _e('Username');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="username" class="form-control require" value="<?php _e($user->username);?>" />
					</div>
					<div class="form-group col-sm-4 col-xs-12">
						<label for="first_name"><?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="first_name" class="form-control require" value="<?php _e($user->first_name);?>" />
					</div>
					<div class="form-group col-sm-4 col-xs-12">
						<label for="last_name"><?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="last_name" class="form-control require" value="<?php _e($user->last_name);?>" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="email"><?php _e('Email');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="user_email" class="form-control require" value="<?php _e($user->user_email);?>" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="dob"><?php _e('Date of birth');?></label>
						<?php $dob = (get_user_meta($user->ID, 'dob') != '') ? date('M d, Y', strtotime(trim(get_user_meta($user->ID, 'dob')))) : ''; ?>
						<input type="text" name="dob" class="form-control input-datepicker-today" readonly="readonly" value="<?php echo $dob;?>" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="gender"><?php _e('Gender');?>&nbsp;<span class="required">*</span></label>
						<select name="gender" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
							<option value=""></option>
							<option value="Male" <?php selected(get_user_meta($user->ID, 'gender'), 'Male');?>>Male</option>
							<option value="Female" <?php selected(get_user_meta($user->ID, 'gender'), 'Female');?>>Female</option>
						</select>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="phone"><?php _e('Phone');?></label>
						<input type="text" name="user_phone" class="form-control" value="<?php echo get_user_meta($user__id, 'user_phone');?>" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="company"><?php _e('Role');?>&nbsp;<span class="required">*</span></label>
						<select name="user_role" class="form-control select_single require" tabindex="-1" data-placeholder="Choose role"><?php echo get_options_list(get_roles(), array($user->user_role)); ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user_designation"><?php _e('Designation');?>&nbsp;<span class="required">*</span></label>
						<select name="user_designation" class="form-control select_single require" tabindex="-1" data-placeholder="Choose designation"><?php
							$data = get_tabledata(TBL_DESIGNATIONS, false);
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data, get_user_meta($user->ID, 'user_designation'));
							?>
						</select>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="work_extension"><?php _e('Work extension');?></label>
						<input type="text" name="work_extension" class="form-control" value="<?php echo get_user_meta($user->ID, 'work_extension');?>" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user_designation"><?php _e('Work Area');?>&nbsp;<span class="required">*</span></label>
						<select name="work_area" class="form-control select_single" tabindex="-1" data-placeholder="Choose Work Area"><?php
							$data = get_tabledata( TBL_WORKS, false, array(), '', ' ID, CONCAT_WS(" | ", code, name) as name');
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data, maybe_unserialize($user->work_area_ID));
							?>
						</select>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="beep"><?php _e('Beep');?></label>
						<input type="text" name="beep" class="form-control" value="<?php echo get_user_meta($user->ID, 'beep');?>" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="band"><?php _e('Band');?></label>
						<select name="band" class="form-control select_single" tabindex="-1" data-placeholder="Choose band"><?php
							$option_data = $this->user__bands();
							echo get_options_list($option_data, get_user_meta($user->ID, 'band'));
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 form-goup">
						<label><?php _e('Upload Profile Image');?></label>
						<input type="text" name="profile_img" class="form-control" value="<?php echo get_user_profile_image($user->ID, false);?>" placeholder="Uploaded image url" readonly="readonly" />
						<br/>
						<a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#upload-image-modal">
							<i class="fa fa-camera"></i>&nbsp;<?php _e('Upload Image');?>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 form-group">
						<div class="profile-image-preview-box">
							<img src="<?php echo get_user_profile_image($user->ID);?>" class="img-responsive img-thumbnail" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user_pass"><?php _e('Reset Password');?></label>
						<input type="text" name="user_pass" value="" class="form-control" />
						<div>&nbsp;</div>
						<button class="btn btn-default generate-password"><?php _e('Generate Password');?></button>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for=""><?php _e('Disable Account');?></label><br/>
						<label><input type="radio" class="flat" name="user_status" value="0" <?php checked($user->user_status , 0);?>><?php _e('Yes');?></label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="user_status" value="1" <?php checked($user->user_status , 1);?>><?php _e('No');?></label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">
							Currently Employed?</label><br/>
						<label><input type="radio" class="flat" name="employed" value="1" <?php checked($user->currently_employed , 1);?> /> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="employed" value="0" <?php checked($user->currently_employed , 0);?> /> No</label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="name">
							External Candidate No.</label>
						<input type="text" name="ex_cand" class="form-control " value="<?php echo $user->external_candidate;?>" />
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="gender">
							RAG Status</label>
						<select name="rag_status" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
							<option value=""></option>
							<option value="0" <?php selected($user->rag_status, '0');?>>Red</option>
							<option value="1" <?php selected($user->rag_status, '1');?>>Amber</option>
							<option value="2" <?php selected($user->rag_status, '2');?>>Green</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed">
							Extended support Underway</label><br/>
						<label><input type="radio" class="flat" name="extended_support" value="1" <?php checked($user->extended_support , 1);?>/> Yes</label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="extended_support" value="0" <?php checked($user->currently_employed , 0);?>/> No</label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="name">Extended Support Since:</label>
						<input type="text" name="support_since" class="form-control " value="<?php echo $user->support_since;?>" />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed"><?php _e('Preceptorship progress');?></label><br/>
						<label><input type="radio" class="flat" name="preceptorship" value="1" <?php checked($designation->preceptorship, 1);?> /> <?php _e('Yes');?></label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="preceptorship" value="0" <?php checked($designation->preceptorship, 0);?> /> <?php _e('No');?></label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed"><?php _e('HCA Induction Progress');?></label><br/>
						<label><input type="radio" class="flat" name="hca" value="1" <?php checked($designation->hca , 1);?>/> <?php _e('Yes');?></label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="hca" value="0" <?php checked($designation->hca , 0);?>/> <?php _e('No');?></label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed"><?php _e('FD/AP Training Record');?></label><br/>
						<label><input type="radio" class="flat" name="fdap" value="1" <?php checked($designation->flap , 1);?>/> <?php _e('Yes');?></label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="fdap" value="0" <?php checked($designation->flap , 0);?>/> <?php _e('No');?></label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed"><?php _e('Student Record');?></label><br/>
						<label><input type="radio" class="flat" name="record" value="1" <?php checked($designation->record , 1);?>/> <?php _e('Yes');?></label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="record" value="0" <?php checked($designation->record , 0);?>/> <?php _e('No');?></label>
					</div>
					<div class="form-group col-sm-6 col-xs-12">
						<label for="current_employed"><?php _e('Mentorship');?></label><br/>
						<label><input type="radio" class="flat" name="mentorship" value="1" <?php checked($designation->mentorship , 1);?> /> <?php _e('Yes');?></label>
						<label>&nbsp;</label>
						<label><input type="radio" class="flat" name="mentorship" value="0"<?php checked($designation->mentorship , 0);?> /> <?php _e('No');?></label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12 col-xs-12">
						<div class="ln_solid"></div>
						<input type="hidden" name="action" value="edit_user" />
						<input type="hidden" name="user_id" value="<?php echo $user__id;?>" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Update User');?></button>
					</div>
				</div>
			</form>
			<?php
			echo $this->upload__image__section();
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__users__page( $role = ''){
			ob_start();
			$args = !is_admin() ? array( 'created_by'=> $this->current__user__id ) : array();
			if( $role != '' ){
				$args['user_role'] = $role;
			}
			$users_list = get_tabledata(TBL_USERS, false, $args);
			if(!user_can('view_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$users_list):
				echo page_not_found("Oops! There is no New Users in website", ' ', false);
			else: ?>
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th></th>
						<th><?php _e('Name');?></th>
						<th><?php _e('Email');?></th>
						<th><?php _e('Registered On');?></th>
						<?php if(is_admin()): ?>
						<th class="text-center"><?php _e('Status');?></th>
						<?php endif; ?>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					if($users_list):
					foreach($users_list as $single_user):
					$admin_label = ($single_user->user_role == 'admin') ? '<label class="label label-success">admin</label>' : ''; ?>
					<tr>
						<td class="text-center">
							<img src="<?php echo get_user_profile_image($single_user->ID);?>" class="avatar center-block" alt="Avatar"></td>
						<td><?php echo __($single_user->first_name.' '.$single_user->last_name.' '.$admin_label);?></td>
						<td><?php _e($single_user->user_email);?></td>
						<td><?php echo date('M d, Y', strtotime($single_user->registered_at));?></td>
						<?php if(is_admin()): ?>
						<td class="text-center">
							<label><input type="checkbox" class="js-switch approve-switch" <?php checked($single_user->user_status , 1);?> data-id="<?php echo $single_user->ID;?>" data-action="user_account_status_change"/></label></td>
						<?php endif; ?>
						<td class="text-center">
							<a href="<?php the_permalink('view-user', array('user_id'=> $single_user->ID));?>" class="btn btn-success btn-xs">
								<i class="fa fa-eye"></i>&nbsp;<?php _e('View');?>
							</a>
							                <button type="button" class="btn btn-success btn-xs email-user" data-toggle="modal" data-target="#email-user-data-modal" data-user="<?php echo $single_user->ID;?>"><i class="fa fa-envelope"></i>&nbsp;<?php _e('Email');?>
                                                                </button>
							<a href="<?php the_permalink('edit-user', array('user_id'=> $single_user->ID));?>" class="btn btn-dark btn-xs">
								<i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?>
							</a>
							<a href="#" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $single_user->ID;?>" data-action="delete_user">
								<i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?>
							</a>
						</td>
					</tr>
					<?php endforeach; endif; ?>
				</tbody>
			</table>
			<?php
			echo $this->email__user__data__modal(); 
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__progress__page(){
			ob_start();
			$args = array('user_role'=>'nurse');
			$users_list = get_tabledata(TBL_USERS, false, $args);
			if(!user_can('view_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$users_list):
				echo page_not_found("Oops! There is no New Users in website", ' ', false);
			else: ?>
			<form action="<?php echo site_url();?>/progress/" method="POST">
				<div class="row custom-filters">
					<div class="form-group col-sm-2 col-xs-6">
						<label for="courses"><?php _e('Course');?></label>
						<select name="course" class="form-control select_single" data-placeholder="Choose course"><?php
							$data = get_tabledata(TBL_BOOKINGS, false, array(), '', ' ID, name');
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>

					<div class="form-group col-sm-2 col-xs-6">
						<label for="user_designation"><?php _e('Designation');?></label>
						<select name="user_designation" class="form-control select_single" tabindex="-1" data-placeholder="Choose designation"><?php
							$data = get_tabledata(TBL_DESIGNATIONS, false);
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>

					<div class="form-group col-sm-2 col-xs-6">
						<label for="work_area"><?php _e('Work Area');?></label>
						<select name="work_area" class="form-control select_single" tabindex="-1" data-placeholder="Choose Work Area"><?php
							$data = get_tabledata(TBL_WORKS, false, array(), '', ' ID, CONCAT_WS(" | ", code, name) as name');
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
				</div>
			</form>

			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap ajax-datatable-buttons" cellspacing="0" width="100%" data-table="fetch_all_trainees" data-order-column="1">
				<thead>
					<tr>
						<th></th>
						<th><?php _e('Name');?></th>
						<th><?php _e('Email');?></th>
						<th><?php _e('Registered On');?></th>
						<?php if(is_admin()): ?>
						<th class="text-center"><?php _e('Status');?></th>
						<?php endif; ?>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>

			</table>
			<?php endif;
			echo $this->add__to__booking__modal();
			$content = ob_get_clean();
			return $content;
		}
		

		 public function email__user__data__modal($mentor=false){
                        ob_start(); ?>
                        <!-- calendar modal -->
                        <div id="email-user-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h1 class="modal-title text-center text-uppercase"><?php ($mentor)?_e('Email Mentors(s)'):_e('Email User(s)');?></h1>
                                                </div>
                                                <div class="modal-body">
                                                        <div id="email-user-data-modal-body"></div>
                                                </div>
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><?php _e('Cancel');?></button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="hidden fc_create" data-toggle="modal" data-target="#email-user-data-modal"></div>
                        <?php
                        return ob_get_clean();
                }
	
		public function add__to__booking__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="add-to-booking-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Trainees Details');?></h1>
						</div>
						<form class="update-bookings submit-form" method="post" autocomplete="off">
							<div class="modal-body">
								<div id="add-to-booking-modal-body">
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="first_name"><?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
											<input type="text" name="first_name" class="form-control require" />
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="last_name"><?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
											<input type="text" name="last_name" class="form-control require" />
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-12 col-xs-12">
											<label for="bookings"><?php _e('Booking(s)');?></label>
											<select name="bookings[]" class="form-control select_single select-bookings" data-placeholder="Choose booking(s)" multiple="multiple"></select> 
											<input type="hidden" name="action" value="update_user_booking" />
											<input type="hidden" name="user_id" value="" />
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success btn-md" type="submit"><?php _e('Update Bookings');?></button>
								<button type="button" class="btn btn-dark btn-md" data-dismiss="modal"><?php _e('Cancel');?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php
			return ob_get_clean();
		}
		
		public function all__mentors__page(){
			ob_start();
			$args = array();
			$selected = $query = $where = '';
			$selected = isset($_GET['course']) ? $_GET['course'] : '';
			
			if( get_current_user_role() == 'course_admin'){
				$args['user_ID'] = get_current_user_id();
			}else{
				$where = ' WHERE ';
			}
				
			
			$users_list = get_tabledata(TBL_MENTORS , false, $args );
			
			if(!( is_admin() || get_current_user_role() == 'course_admin') ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$users_list):
				echo page_not_found("Oops! There is no mentors in website", ' ', false);
			else:
				$users_list = get_tabledata(TBL_MENTORS , false, $args, $query);
			?>
			
			
			
			<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th><?php _e('Name');?></th>
						<th><?php _e('Due an Update Before');?></th>
						<th class="text-center"><?php _e('Actions');?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					if($users_list): foreach($users_list as $single_user):
						$user = get_userdata($single_user->user_ID);

					?>
					<tr>
						<td><?php _e($user->first_name.' '.$user->last_name);?></td>
						<td><?php echo date('M d, Y', strtotime("$single_user->last_update + 1 year"));?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success btn-xs get-mentor" data-toggle="modal" data-target="#mentor-data-modal" data-mentor="<?php     echo $single_user->user_ID;?>">
                                <i class="fa fa-view"></i>&nbsp;<?php _e('View Mentor');?>
                            </button>
				                <button type="button" class="btn btn-success btn-xs email-mentor" data-toggle="modal" data-target="#email-user-data-modal" data-mentor="<?php echo $user->ID;?>"><i class="fa fa-envelope"></i>&nbsp;<?php _e('Email');?>
                                                                </button>
							<a href="<?php the_permalink('edit-mentor', array('id'=> $single_user->user_ID));?>" class="btn btn-dark btn-xs">
								<i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?>
							</a>
							<a href="#" class="btn btn-danger btn-xs delete-record" data-id="<?php echo $single_user->ID;?>" data-action="delete_mentor">
								<i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?>
							</a>
						</td>
					</tr>
					<?php endforeach; endif; ?>
				</tbody>
			</table>
			<?php 
            echo $this->mentor__data__modal();
	    echo $this->email__user__data__modal(true);
            endif;
			$content = ob_get_clean();
			return $content;
		}
		
		public function add__mentor__page(){
			ob_start();
			if(!user_can('add_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			else: ?>
			<form class="add-mentor submit-form" method="post" autocomplete="off">
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user"><?php _e('User');?>&nbsp;<span class="required">*</span></label>
						<select name="user" class="form-control select_single require" tabindex="-1" data-placeholder="Choose an User">
							<?php
							$data = get_tabledata(TBL_USERS, false, array( 'user_role' => 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name, last_name) as name');
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
                    <div class="form-group col-sm-6 col-xs-12">
						<label for="type"><?php _e('Type');?>&nbsp;<span class="required">*</span></label>
						<select name="type" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a Type">
							<option value=""></option>
                            <option value="1">Co-Mentor</option>
                            <option value="2">Mentor</option>
                            <option value="3">Sign-off Mentor in Training</option>
                            <option value="4">Sign-off Mentor</option>
						</select>
					</div>
				</div>
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="last_mentor_update"><?php _e('Last Mentor Update');?></label>
                        <input type="text" name="last_mentor_update" class="form-control input-datepicker" readonly="readonly"/>
                    </div>   
                </div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 form-goup">
						<div class="ln_solid"></div>
						<input type="hidden" name="action" value="add_new_mentor" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Add New mentor');?></button>
					</div>
				</div>
			</form>
			<?php
			endif;
			$content = ob_get_clean();
			return $content;
		}
		
		public function edit__mentor__page(){
			ob_start();
			$mentor__id = $_GET['id'];
			$mentor = get_tabledata(TBL_MENTORS, true, array('user_ID'=> $mentor__id));
			if( !( is_admin() || ( get_current_user_role() == 'course_admin' && $mentor && $mentor->user_ID == get_current_user_id()) ) ):
				echo page_not_found('Oops ! You are not allowed to view this page.', 'Please check other pages !');
			elseif(!$mentor):
				echo page_not_found('Oops ! Mentor Details Not Found.', 'Please go back and check again !');
			else: ?>
			<form class="edit-mentor submit-form" method="post" autocomplete="off">
				<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="user"><?php _e('User');?>&nbsp;<span class="required">*</span></label>
						<select name="user" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a User">
							<?php
							$data = get_tabledata(TBL_USERS, false, array( 'user_role' => 'course_admin'), '', ' ID, CONCAT_WS(" ", first_name, last_name) as name');
							$option_data = get_option_data($data, array('ID', 'name'));
							echo get_options_list($option_data, $mentor->user_ID);
							?>
						</select>
					</div>
                    <div class="form-group col-sm-6 col-xs-12">
						<label for="type"><?php _e('Type');?>&nbsp;<span class="required">*</span></label>
						<select name="type" class="form-control select_single require" tabindex="-1" data-placeholder="Choose an Type">
							<?php
                            error_log("Mentor_ID: $mentor__id");
							$data = get_tabledata(TBL_MENTORS, true, array( 'user_ID' => $mentor__id));
							$option_data = array('1'=>'Co-Mentor','2'=>'Mentor','3'=>'Sign-off Mentor in Training','4'=>'Sign-off Mentor');
							echo get_options_list($option_data, $data->mentor_type);
							?>
						</select>
					</div>
				</div>
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-12">
                        <label for="last_mentor_update"><?php _e('Last Mentor Update');?></label>
                        <input type="text" name="last_mentor_update" class="form-control input-datepicker" readonly="readonly" value="<?php echo isset($data->last_update) ? date('M d, Y', strtotime($data->last_update)) : '';?>"/>
                    </div>   
                </div>
				<div class="row">
					<div class="form-group col-sm-12 col-xs-12">
						<div class="ln_solid"></div>
						<input type="hidden" name="action" value="edit_mentor" />
						<input type="hidden" name="mentor_id" value="<?php echo $mentor__id;?>" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Update Mentor');?></button>
					</div>
				</div>
			</form>
			<?php
			echo $this->upload__image__section();
			endif;
			$content = ob_get_clean();
			return $content;
		}
		
		//Process functions starts here
		public function user__login__process(){
			global $device;
			extract($_POST);
			$return = 0;
				
			if(preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2, 3})$^", $user_name)){
				if(email_exists($user_name)){
					$user = get_user_by('email', $user_name);
					error_log($user_pass." : ".$user->ID);
					if(check_password($user_pass, $user->ID)){
						if(!is_user_active($user->ID)){
							$return = 2;
						} else{
							set_current_user($user->ID);
							$this->database->insert(TBL_ACCESS_LOG, 
								array(
									'user_id' => $user->ID, 
									'ip_address'=> $_SERVER['REMOTE_ADDR'], 
									'device' => $device, 
									'user_agent'=> $_SERVER ['HTTP_USER_AGENT']
								)
							);
							$return = 1;
						}
					}
				}
			}else{
				if(username_exists($user_name)){
					$user = get_user_by('username', $user_name);
					if(check_password($user_pass, $user->ID)){
						if(!is_user_active($user->ID)){
							$return = 2;
						} else{
							set_current_user($user->ID);
							$this->database->insert(TBL_ACCESS_LOG, 
								array(
									'user_id' => $user->ID, 
									'ip_address'=> $_SERVER['REMOTE_ADDR'], 
									'device' => $device, 
									'user_agent'=> $_SERVER ['HTTP_USER_AGENT']
								)
							);
							$return = 1;
						}
					}
				}
			}
				
			return $return;
		}

		public function reset__login__process(){
			global $device;
			extract($_POST);
			if(email_exists($user_name)){
				$user = get_user_by('email', $user_name);
				$user_pass = password_generator();
				$record_pass = $user_pass;
				$salt = generateSalt();
				$user_pass = hash('SHA256', encrypt($user_pass, $salt));
				$salt = base64_encode($salt);
				//$pword = set_password($user_pass);
				$result1 = $this->database->update(TBL_USERS, array('user_pass'=> $user_pass, 'user_salt'=> $salt), array('user_email'=> $user_name));
                
				//MAILER
				$subject = "NCCPM Fault Management System - Login Details";
				$body = "Welcome, your login email address is: ". $user_name . " and your password is: " . $record_pass . ". The password can be changed once logged in.";
                $admn = "admin@admin.com";
			send_email($admn,$user_name,$user_name, $subject, $body);
				
				return 1;
			}else{
				return 0;
			}
		}

		public function add__user__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not create account, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				$temp_user_pass = password_generator();
				$salt = generateSalt();
				$user_pass = hash('SHA256', encrypt($temp_user_pass, $salt));
				$salt = base64_encode($salt);
				$guid = get_guid(TBL_USERS);

				if($user_role != "admin" && $user_role != "nurse"){
					$first = $first_name[0];
					$trainer_ID = $last_name."_".$first."_001";

					$result = $this->database->insert(TBL_USERS, 
						array(
							'ID' => $guid, 
							'trainer_ID' => $trainer_ID, 
							'first_name' => $first_name, 
							'last_name' => $last_name, 
							'user_email' => $user_email, 
							'user_role' => $user_role, 
							'username' => $username, 
							'work_area_ID'=> $work_area, 
							'user_status' => 1, 
							'user_pass' => set_password($user_pass), 
							'user_salt' => $salt, 
							'created_by' => $this->current__user__id,
							'ward_manager' => $ward_manager 
						)
					);
				}else{
					$trainer_ID = NULL;
					$result = $this->database->insert(TBL_USERS, 
						array(
							'ID' => $guid, 
							'trainer_ID' => $trainer_ID, 
							'first_name' => $first_name, 
							'last_name' => $last_name, 
							'user_email' => $user_email, 
							'user_role' => $user_role, 
							'username' => $username, 
							'user_status' => 1, 
							'user_pass' => set_password($user_pass), 
							'user_salt' => $salt, 
							'created_by' => $this->current__user__id, 
							'currently_employed'=> $current_employed, 
							'external_candidate'=> $ex_cand, 
							'work_area_ID' => $work_area, 
							'rag_status' => $rag_status, 
							'extended_support' => $extended_support, 
							'support_since' => $support_since,
							'ward_manager' => $ward_manager 
						)
					);

					$guid2 = get_guid(TBL_RULES);
					$result= $this->database->insert(TBL_RULES, 
						array(
							'ID' => $guid2, 
							'user_ID' => $guid, 
							'preceptorship'=> $preceptorship, 
							'hca' => $hca, 
							'flap' => $fdap, 
							'record' => $record, 
							'mentorship' => $mentorship, 
						)
					);
				}

				if($result):
					$user__id = $guid;
					update_user_meta($user__id, 'gender', $gender);
					update_user_meta($user__id, 'dob', date('Y-m-d h:i:s', strtotime($dob) ) );
					update_user_meta($user__id, 'user_phone', $user_phone);
					update_user_meta($user__id, 'profile_img', $profile_img);
					update_user_meta($user__id, 'user_designation', $user_designation);
					update_user_meta($user__id, 'work_extension', $work_extension);
					update_user_meta($user__id, 'beep', $beep);
					update_user_meta($user__id, 'band', $band);
					$notification_args = array(
						'title' => __('New Account Created'), 
						'notification'=> __('You have successfully created a new account').' ('.ucfirst($first_name).' '.ucfirst($last_name).').', 
					);
					add_user_notification($notification_args);
					
					/*============= Send email to user =============*/
					$template_id = get_option('after_account_created');
					if( $template_id != ''){
						$email_subject = get_table_column_data( TBL_TEMPLATES, 'subject', array( 'ID' => $template_id) );
						$email_body = get_table_column_data( TBL_TEMPLATES, 'body', array( 'ID' => $template_id) );
						if($email_body && $email_subject){
							$email_body = get_replaced_string( $email_body, 
								array(
									'{{first_name}}' => $first_name, 
									'{{last_name}}' => $last_name,
									'{{user_email}}' => $user_email,
									'{{user_password}}' => $temp_user_pass
								)
							);
							$email_sent = send_email($user_email, $email_subject, $email_body);
						}
					}
					/*============= Send email to user =============*/
					$return['status'] = 1;
					$return['message_heading'] = __('Success !');
					$return['message'] = __('Account has been successfully created.');
					$return['reset_form'] = 1;
				endif;
			endif;
			return json_encode($return);
		}

		public function update__preceptor__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update training details, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				$p_current = ( isset($p_current) ) ? 1 : 0;
				$p_pin = ( isset($p_pin) ) ? 1 : 0;
				$p_delay = ( isset($p_delay) ) ? 1 : 0;
				$p_nurse = ( isset($p_nurse) ) ? 1 : 0;
				$age = array(							
					"prec_intro" => date("Y-m-d h:i:s", strtotime($p_intro)), 
					"p_location" => $p_location,
					"q_date"=>date("Y-m-d h:i:s", strtotime($q_date)),
					"p_regdate"=>date("Y-m-d h:i:s", strtotime($p_regdate)),
					"current_prec"=> $p_current, 
					"pin" => $p_pin, 
					"delay" => $p_delay, 
					"prec_name" => $p_name, 
					"int_nurse" => $p_nurse, 
					"WTE" => $p_wte, 
					"p_email" => $p_email, 
					"p_country" => $p_country, 
					"sign_off" => $p_period, 
					"awards" => $p_awards, 
					"link" => $p_link, 
					"prec_trainer"=> $trainers, 
					"prec_notes" => $p_notes
				);
				$precep = serialize($age);$guid = get_guid(TBL_PROG);
				if( is_value_exists(TBL_PROG, array('user_ID' => $user_id3), $user_id3) ){
					$result = $this->database->update(TBL_PROG, 
						array(
							'prec'=>$precep, 
						), 
						array('user_ID'=> $user_id3)
					);
				}else{
					$result = $this->database->insert(TBL_PROG, 
						array(
							'ID' => $guid, 
							'user_ID' => $user_id3, 
							'prec'=>$precep, 
						)
					);
				}
				
				$notification_args = array(
					'title' => __('Account Information'), 
					'notification'=> __('You have successfully updated preceptor progress'), 
				);

				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Account details have been successfully update.');
				$return['reset_form'] = 1;
			endif;
			return json_encode($return);
		}

		public function update__mca__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not create update account details, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				$hca_new_care = ( isset($hca_new_care) ) ? 1 : 0;
				$hca_current_client = ( isset($hca_current_client) ) ? 1 : 0;
				$hca_fundamental_care = ( isset($hca_fundamental_care) ) ? 1 : 0;
				$hca_care = ( isset($hca_care) ) ? 1 : 0;
				$age = array(
					"hca_start" => date("Y-m-d h:i:s", strtotime($hca_start)), 
					"hca_manager" => $hca_manager, 
					"hca_email" => $hca_email, 
					"hca_new_care" => $hca_new_care, 
					"hca_current_client" => $hca_current_client, 
					"hca_fundamental_care"=> $hca_fundamental_care, 
					"hca_care" => $hca_care, 
					"hca_trainer" => $hca_trainer, 
					"hca_notes" => $hca_notes
				);
				$hca = serialize($age);
				$guid = get_guid(TBL_PROG);
				if( is_value_exists(TBL_PROG, array('user_ID' => $user_id3), $user_id3) ){
					$result = $this->database->update(TBL_PROG, 
						array(
							'hca' =>$hca, 
						), 
						array('user_ID'=> $user_id3)
					);
				}else{
					$result = $this->database->insert(TBL_PROG, 
						array(
							'ID' => $guid, 
							'user_ID' => $user_id3, 
							'hca' => $hca
						)
					);
				}

				$notification_args = array(
					'title' => __('Account Information'), 
					'notification'=> __('You have successfully updated HCA progress'), 
				);

				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Account has been successfully updated.');
				$return['reset_form'] = 1;
			endif;
			return json_encode($return);
		}

               public function email__user__process(){
                        extract($_POST);
                        $user_id = trim($user_id);
                        $return['html'] = '';
                        $user = get_tabledata(TBL_USERS, true, array('ID'=> $user_id));
                        if($user):

                                ob_start();
            ?>
                <form class="email-attendees submit-form" method="post" autocomplete="off">

                                 <div class="form-group">
                                        <label for="recipient"><?php _e('Trainee(s)');?>&nbsp;</label>
                                        <select name="recipients[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
                                                <?php
                            $data = get_tabledata(TBL_USERS,false, array(), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
                            $option_data = get_option_data($data, array('ID', 'name'));
                            echo get_options_list($option_data, array($user_id));

                                                ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="templates"><?php _e('Email Template');?>&nbsp;</label>
                                        <select name="templates[]" id="templates" class="form-control select_single" data-placeholder="Choose template">
                                                <?php
                            $data = get_tabledata(TBL_TEMPLATES,false);
                            $option_data = get_option_data($data, array('ID', 'title'));
                            echo get_options_list($option_data);
                                                ?>
                                        </select>
                                </div>
                                <div class="form-group body-div">
                                </div>
                <div class="form-group">
                                        <div class="ln_solid"></div>
                                        <input type="hidden" id="subject"  name="subject">
                                        <input type="hidden" name="action" value="send_email" />
                                        <button class="btn btn-success btn-md" type="submit"><?php _e('Send Email');?></button>
                                </div>
                        </form>
                                        <?php
                                        $return['html'] = ob_get_clean();
                        endif;
                        return json_encode($return);
                }

               public function email__mentor__process(){
                        extract($_POST);
                        $user_id = trim($user_id);
                        $return['html'] = '';
                        $user = get_tabledata(TBL_USERS, true, array('ID'=> $user_id));
                        if($user):

                                ob_start();
            ?>
                <form class="email-attendees submit-form" method="post" autocomplete="off">

                                 <div class="form-group">
                                        <label for="recipient"><?php _e('Trainee(s)');?>&nbsp;</label>
                                        <select name="recipients[]" class="form-control select_single" data-placeholder="Choose mentor(s)" multiple="multiple">
                                                <?php
                            $data = get_tabledata(TBL_MENTORS,false, array(), '', 'user_ID');
				$mentorIDs=array();
				foreach($data as $d):
					$mentorIDs[]=$d->user_ID;
				endforeach;
			    $data = get_tabledata(TBL_USERS,false, array("ID"=>$mentorIDs), '', ' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
                            $option_data = get_option_data($data, array('ID', 'name'));
                            echo get_options_list($option_data, array($user_id));

                                                ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="templates"><?php _e('Email Template');?>&nbsp;</label>
                                        <select name="templates[]" id="templates" class="form-control select_single" data-placeholder="Choose template">
                                                <?php
                            $data = get_tabledata(TBL_TEMPLATES,false);
                            $option_data = get_option_data($data, array('ID', 'title'));
                            echo get_options_list($option_data);
                                                ?>
                                        </select>
                                </div>
                                <div class="form-group body-div">
                                </div>
                <div class="form-group">
                                        <div class="ln_solid"></div>
                                        <input type="hidden" id="subject"  name="subject">
                                        <input type="hidden" name="action" value="send_email" />
                                        <button class="btn btn-success btn-md" type="submit"><?php _e('Send Email');?></button>
                                </div>
                        </form>
                                        <?php
                                        $return['html'] = ob_get_clean();
                        endif;
                        return json_encode($return);
                }


		public function update__fdap__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not create account, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				$fd_inturrupt = ( isset($fd_inturrupt) ) ? 1 : 0;
				$fd_sd1 = ( isset($fd_sd1) ) ? 1 : 0;
				$fd_sd2 = ( isset($fd_sd2) ) ? 1 : 0;
				$fd_sd3 = ( isset($fd_sd3) ) ? 1 : 0;
				$fd_current = ( isset($fd_current) ) ? 1 : 0;
				$age = array(
					"fd_start" => date("Y-m-d h:i:s", strtotime($fd_start)), 
					"fd_graduate" => date("Y-m-d h:i:s", strtotime($fd_graduate)), 
					"fd_inturrupt"=> $fd_inturrupt, 
					"fd_sd1" => $fd_sd1, 
					"fd_sd2" => $fd_sd2, 
					"fd_sd3" => $fd_sd3, 
					"fd_other" => $fd_other, 
					"fd_current" => $fd_current, 
					"fd_trainer" => $fd_trainer, 
					"fd_notes" => $fd_notes, 
				);
								
				$fdap = serialize($age);
				$guid = get_guid(TBL_PROG);
						
				if( is_value_exists(TBL_PROG, array('user_ID' => $user_id3), $user_id3) ){
					$result = $this->database->update(TBL_PROG, 
						array(
							'fdap' => $fdap, 
						), 
						array('user_ID'=> $user_id3)
					);
				}else{
					$result = $this->database->insert(TBL_PROG, 
						array(
							'ID' => $guid, 
							'user_ID' => $user_id3, 
							'fdap' => $fdap, 
						)
					);
				}

				$notification_args = array(
					'title' => __('Account Information'), 
					'notification'=> __('You have successfully updated preceptor progress'), 
				);

				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Account has been successfully created.');
				$return['reset_form'] = 1;
			endif;
			return json_encode($return);
		}

		public function update__student__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not create account, Please try again.'), 
				'reset_form' => 0
			);
				
            $stud_d1 = (isset($stud_d1)) ? 1 : 0;
            $stud_d2 = (isset($stud_d1)) ? 1 : 0;
            $stud_d3 = (isset($stud_d1)) ? 1 : 0;
			$age = array( 
				"stud_d1" => $stud_d1, 
				"stud_d2" => $stud_d2, 
				"stud_d3" => $stud_d3, 
				"stud_notes" => $stud_notes, 
			);
				
			$ages = serialize($age);
	 
			if(user_can('add_user')):
				$guid = get_guid(TBL_PROG);
				if( is_value_exists(TBL_PROG, array('user_ID' => $user_id3), $user_id3)){
					$result1 = $this->database->update(TBL_PROG, 
						array(
							'stud'=>$ages
						), 
						array('user_ID'=> $user_id3)
					);
				}else{
					$result = $this->database->insert(TBL_PROG, 
						array(
							'ID' => $guid, 
							'user_ID' => $user_id3, 
							'stud'=>$ages, 
						)
					);
				}
                $result2 = $this->database->update(TBL_USERS,
                        array(
                            'cohort' => $stud_cohort
                        ),array(
                            'ID' => $user_id3
                        ));
				$notification_args = array(
					'title' => __('Account Information'), 
					'notification'=> __('You have successfully updated preceptor progress'), 
				);
				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Account has been successfully created.');
				$return['reset_form'] = 1;
			endif;
			return json_encode($return);
		}

		public function update__mentor__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not create account, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				$mentor_current = ( isset($mentor_current) ) ? 1 : 0;
				$mentor_sign_off = ( isset($mentor_sign_off) ) ? 1 : 0;
				$age = array(
					'mentor_current' => $mentor_current, 
					'mentor_renew' => date('Y-m-d h:i:s', strtotime($mentor_renew)), 
					'mentor_sign_off'=> $mentor_sign_off, 
					'mentor_notes' => $mentor_notes, 
				);
				$ages = serialize($age);
				$guid = get_guid(TBL_PROG);
				if( is_value_exists(TBL_PROG, array('user_ID' => $user_id3), $user_id3)){
					$result = $this->database->update(TBL_PROG, 
						array(
							'ment'=>$ages, 
						), 
						array(
							'user_ID' => $user_id3
						)
					);
				}else{
					$result = $this->database->insert(TBL_PROG, 
						array(
							'ID' => $guid, 
							'user_ID' => $user_id3, 
							'ment'=>$ages, 
						)
					);
				}

				$notification_args = array(
					'title' => __('Account Information'), 
					'notification'=> __('You have successfully updated preceptor progress'), 
				);

				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Account has been successfully created.');
				$return['reset_form'] = 1;
			endif;

			return json_encode($return);
		}

        
        public function edit__note__process(){
			extract($_POST);
			$note_id = trim($note_id);
			$return['html'] = '';
			$note = get_tabledata(TBL_NOTES, true, array('ID'=> $note_id));
            $text = $note->note;
            $active = $note->active;
			/*if($note):
				
					ob_start();
					?>
<!--					<a href="<?/*php the_permalink('edit-note', array('id'=> $booking->ID));?>" class="btn btn-dark btn-xs">
						<i class="fa fa-edit"></i>&nbsp;<?php _e('Modify Trainee(s)');*/?>
					<!--</a>-->
                    
					<form class="submit-form" method="post" autocomplete="off">
											<div class="row">
												<div class="form-group col-sm-12 col-xs-12">
													<label for="description-of-fault"><?php _e('Notes');?></label>
													<textarea name="note" class="form-control" rows="4"><?php echo $text; ?></textarea>
												</div>
												<div class="form-group col-sm-12 col-xs-12">
													<label for="description-of-fault"><?php _e('Attachments');?></label>
													<input type="file" name="file" accept="">
												</div>
                                                <div class="form-group col-sm-12 col-xs-12">
                                                    <label><input id="active" name="active" type="checkbox" class="js-switch" <?php checked($note->active, 1);?>/></label>
                                                </div>
											</div>
											
											<input type="hidden" name="note_id" value="<?php echo $note_id?>">
											<div class="form-group">
												<div class="ln_solid"></div>
												<input type="hidden" name="action" value="update_note" />
												<button class="btn btn-success btn-md" type="submit"><?php _e('Update note');?></button>
											</div>
										</form>

					<?php
					$return['html'] = ob_get_clean();
				/*endif;*/
			/*endif;*/
			return json_encode($return);
		}
        
        public function note__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="note-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Note Details');?></h1>
						</div>
						<div class="modal-body">
							<div id="note-data-modal-body"></div>
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
          
        public function mentor__data__modal(){
			ob_start(); ?>
			<!-- calendar modal -->
			<div id="mentor-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title text-center text-uppercase"><?php _e('Mentor Details');?></h1>
						</div>
						<div class="modal-body">
							<div id="mentor-data-modal-body"></div>
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
        
        
		public function update__notes__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not create account, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				$guid = get_guid(TBL_NOTES);
				$target_dir = ABSPATH . CONTENT . "/uploads/user_info/";
				$target_file= $target_dir . basename($_FILES["file"]["name"]);
				$uploadOk = 1;
				$target_file= str_replace(' ', '_', $target_file);
				$full_dir = $target_dir."/".$user_id3;
				if(!file_exists($full_dir)) mkdir($full_dir, 0755, true);
				move_uploaded_file($_FILES["file"]["name"], $full_dir);
				$result = $this->database->insert(TBL_NOTES, 
					array(
						'to' => $user_id3, 
						'from' => $this->current__user__id, 
						'note' => $note, 
						'filepath'=> $target_file,
                        'active'=>'1'
					)
				);

				$notification_args = array(
					'title' => __('Account Information'), 
					'notification'=> __('You have successfully updated preceptor progress'), 
				);
				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Account has been successfully created.');
				$return['reset_form'] = 1;
			endif;
			return json_encode($return);
		}
        
        
        public function update__note__process(){
			extract($_POST);
            error_log(json_encode($_POST));
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not create account, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				$actv = (isset($_POST['active'])) ? 1 : 0;
				/*$target_dir = ABSPATH . CONTENT . "/uploads/user_info/";
				$target_file= $target_dir . basename($_FILES["file"]["name"]);
				$uploadOk = 1;
				$target_file= str_replace(' ', '_', $target_file);
				$full_dir = $target_dir."/".$user_id3;
				if(!file_exists($full_dir)) mkdir($full_dir, 0755, true);
				move_uploaded_file($_FILES["file"]["name"], $full_dir);*/
				$result = $this->database->update(TBL_NOTES, 
					array(
						'note' => $note, 
						'active' => $actv,
					),array(
                        'ID' => $note_id
                    )
				);

				$notification_args = array(
					'title' => __('Account Information'), 
					'notification'=> __('You have successfully updated note'), 
				);
				add_user_notification($notification_args);
				$return['status'] = 1;
				$return['message_heading'] = __('Success !');
				$return['message'] = __('Note has been successfully updated.');
				$return['reset_form'] = 1;
			endif;
			return json_encode($return);
		}

		public function update__user__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update account details, Please try again'), 
				'reset_form' => 0
			);

			if(user_can('edit_user')):
				$user = get_userdata($user_id);
				$designation = get_tabledata(TBL_RULES, true, array('user_ID'=> $user_id));
						
				if(1==0 ):
					$return['status'] = 2;
					$return['message_heading'] = __('Email Already Exist');
					$return['message'] = __('Email address you entered is already exists, please try another email address.');
					$return['fields'] = array('user_email');
				else:
					$check = false;
					if(!isset($centre))
						$centre = '';

					if($user_role == "course_admin"){
						$first = $first_name[0];
						$trainer_ID = $last_name."_".$first."_001";
					}else{
						$trainer_ID = NULL;
					}

					$result = $this->database->update(TBL_USERS, 
						array(
							'trainer_ID' => $trainer_ID, 
							'first_name' => $first_name, 
							'last_name' => $last_name, 
							'user_email' => $user_email, 
							'username' => $username, 
							'user_status' => $user_status, 
							'work_area_ID'=> $work_area, 
							'user_role' => $user_role, 
						), 
						array('ID'=> $user_id)
					);
								
					if($designation):
						$d_result = $this->database->update(TBL_RULES, 
							array(
								'preceptorship'=> isset($preceptorship) ? 1 : 0, 
								'hca' => isset($hca) ? 1 : 0, 
								'flap' => isset($fdap) ? 1 : 0, 
								'record' => isset($record) ? 1 : 0, 
								'mentorship' => isset($mentorship) ? 1 : 0, 
							), 
							array(
								'user_ID'=> $user_id, 
							)
						);
					else:
						$d_result = $this->database->insert(TBL_RULES, 
							array(
								'preceptorship'=> isset($preceptorship) ? 1 : 0, 
								'hca' => isset($hca) ? 1 : 0, 
								'flap' => isset($fdap) ? 1 : 0, 
								'record' => isset($record) ? 1 : 0, 
								'mentorship' => isset($mentorship) ? 1 : 0, 
								'user_ID'=> $user_id, 
							)
						);
					endif;

					$check = ($result) ? true : false;

					$result1 = false;
					if($user_pass != ''){
/*<<<<<<< Updated upstream*/
                        				        $salt = generateSalt();
                        				        $user_pass = hash('SHA256', encrypt($user_pass, $salt));
                                                $salt = base64_encode($salt);
						$result1 = $this->database->update(TBL_USERS, array('user_pass'=> $user_pass,'user_salt'=>$salt), array('ID'=> $user_id));
                /**
                        
                        
                $user_pass = password_generator();
				$record_pass = $user_pass;
				$salt = generateSalt();
				$user_pass = hash('SHA256', encrypt($user_pass, $salt));
				$salt = base64_encode($salt);
				//$pword = set_password($user_pass);
				$result1 = $this->database->update(TBL_USERS, array('user_pass'=> $user_pass, 'user_salt'=> $salt), array('user_email'=> $user_name));
                        **/
/*=======*/
						$result1 = $this->database->update(TBL_USERS, array('user_pass'=> set_password($user_pass,$user_id)), array('ID'=> $user_id));
/*>>>>>>> Stashed changes*/
					}
								
					$check = ($result1) ? true : $check;
								
					if($result1){
						//update_user_meta($user_id, 'reset_password', 1);
						$notification_args = array(
							'title' => __('Account Password Reset'), 
							'notification'=> __('You have successfully changed').' ('.ucfirst($first_name).' '.ucfirst($last_name).') account password.', 
						);
						add_user_notification($notification_args);
					}

					if($check):
						if( $user->work_area_ID != $work_area){
							$notification_args = array(
								'title' => __('WorkArea Changed'), 
								'notification'=> sprintf( __('(%s) workarea has been changed from %s to %s.'), ucfirst($first_name).' '.ucfirst($last_name), get_table_column_data( TBL_WORKS , 'name', array( 'ID' => $user->work_area_ID) ), get_table_column_data( TBL_WORKS , 'name', array( 'ID' => $work_area) ) ), 
							);
							add_user_notification($notification_args);
						}
						update_user_meta($user_id, 'gender', $gender);
						update_user_meta($user_id, 'dob', date('Y-m-d h:i:s', strtotime($dob) ) );
						update_user_meta($user_id, 'user_phone', $user_phone);
						update_user_meta($user_id, 'profile_img', $profile_img);
						update_user_meta($user_id, 'user_designation', $user_designation);
						update_user_meta($user_id, 'work_extension', $work_extension);
						update_user_meta($user_id, 'beep', $beep);
						update_user_meta($user_id, 'band', $band);
						$notification_args = array(
							'title' => __('Account Details updated'), 
							'notification'=> __('You have successfully updated').' ('.ucfirst($first_name).' '.ucfirst($last_name).') account details.', 
						);
						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = __('Account has been successfully updated.');
					endif;
				endif;
			endif;

			return json_encode($return);
		}

		public function upload__image__process(){
			$upload_str = '/uploads/profile_images/'.date('Y').'/'.date('m').'/';
			$upload_img = ABSPATH . CONTENT . $upload_str;
			$upload_url = '/content/'.$upload_str;
			if(!file_exists($upload_img))
			mkdir($upload_img, 0755, true);

			if(isset($_FILES["photo"]) && $_FILES["photo"]["size"] > 0){
				$sourcePath = $_FILES["photo"]["tmp_name"];
				$file = pathinfo($_FILES['photo']['name']);
				$fileType = $file["extension"];
				$full_img = 'profile-img-'.time().'.'.$fileType;
				createThumb($sourcePath, $upload_img.$full_img, $fileType, 300, 300, 300);
				return $upload_url.$full_img;
			}else{
				return 0;
			}
		}

		public function update__user__booking__process(){
			extract($_POST);

			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update booking details, Please try again'), 
				'reset_form' => 0
			);

			if(user_can('edit_user')):
				$user = get_userdata($user_id);
				$check = false;
				$bookings = isset($bookings) ? $bookings : array();
						
				$data = get_tabledata(TBL_BOOKINGS, false, array() , '' );
				foreach($data as $booking_data):
					$booking_id = $booking_data->ID;
					$_booking = get_tabledata(TBL_BOOKINGS, true, array('ID' => $booking_id));
					$nurses = ($_booking->nurses != '') ? maybe_unserialize($_booking->nurses) : array();
					$enroll = ($_booking->enroll != '') ? maybe_unserialize($_booking->enroll) : array();
					$attendance = ($_booking->attendance != '') ? maybe_unserialize($_booking->attendance ) : array();
					$collected = ($_booking->collected != '') ? maybe_unserialize($_booking->collected) : array();
					$date_book_returned = ($_booking->date_book_returned != '') ? maybe_unserialize($_booking->date_book_returned ) : array();
					$date_book_received = ($_booking->date_book_received != '') ? maybe_unserialize($_booking->date_book_received) : array();		
					if(!empty($bookings) && in_array($booking_id, $bookings)):
						if( ( $key = array_search($user_id, $nurses) ) === false):
							$nurses[] = $user_id;
							$enroll[$user_id] = 0;
							$attendance[$user_id] = 0;
							$collected[$user_id] = 0;
							$date_book_returned[$user_id] = '';
							$date_book_received[$user_id] = '';
						endif;
					else:
						if( ( $key = array_search($user_id, $nurses) ) !== false):
							unset($nurses[$key]);
							unset($enroll[$user_id]);
							unset($attendance[$user_id]);
							unset($collected[$user_id]);
							unset($date_book_returned[$user_id]);
							unset($date_book_received[$user_id]);
						endif;
					endif;
								
					$result = $this->database->update(TBL_BOOKINGS, 
						array(
							'nurses' => array_unique($nurses), 
							'date_book_received' => $date_book_received, 
							'date_book_returned' => $date_book_returned, 
							'collected' => $collected, 
							'enroll' => $enroll, 
							'attendance' => $attendance, 
						), 
						array(
							'ID'=> $booking_id
						)
					);
				endforeach;
						
				$check = true;
						
				if($check):
					$notification_args = array(
						'title' => __('User Booking Details updated'), 
						'notification'=> __('You have successfully updated').' ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') booking details.', 
					);
					add_user_notification($notification_args);
					
					/*============= Send email to user =============*/
					$template_id = get_option('after_user_added_to_course_booking');
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
					
					$return['status'] = 1;
					$return['message_heading'] = __('Success !');
					$return['message'] = __('User Bookings has been successfully updated.');
					
				endif;
			endif;

			return json_encode($return);
		}
			
		public function account__status__change__process(){
			extract($_POST);
			$id = trim($id);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update user account details, Please try again'), 
				'reset_form' => 0
			);
			if(is_admin() && $this->current__user__id != $id):
				$user = get_userdata($id);
				$args = array('ID'=> $id);
				$result = $this->database->update(TBL_USERS, array('user_status'=> $status), $args);

				if($result):
					if($status == 0){
						$notification_args = array(
							'title' => ucfirst($user->user_role).' Account Disabled', 
							'notification'=> 'You have successfully disbled ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') account.', 
						);
						$return['message'] = 'You have successfully disbled ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') account.';
					}else{
						$notification_args = array(
							'title' => ucfirst($user->user_role).' Account Enabled', 
							'notification'=> 'You have successfully enabled ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') account.', 
						);
						$return['message'] = 'You have successfully enabled ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') account.';
					}
					add_user_notification($notification_args);
					$return['status'] = 1;
					$return['message_heading'] = __('Success !');
				endif;
			endif;
			return json_encode($return);
		}

		public function fetch__cohort__date__process(){
			extract($_POST);
			$course_id = trim($course_id);
			$return = array();
			$select = ' ID, Cohort_date AS name';
			$query = " WHERE `Cohort_ID` = '".$course_id."' AND `over` = '0' ";
			$data = get_tabledata(TBL_COHORTS_EXT, false, array() , $query , $select);
			$option_data = get_option_data($data, array('ID', 'name'));
			$return['nurses_html'] = get_options_list($option_data);
			return json_encode($return);
		}

		public function delete__user__process(){
			extract($_POST);
			$id = trim($id);
			if(is_admin() && $this->current__user__id != $id):
				$user = get_userdata($id);
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_USERS, $args);
				if($result):
					$this->database->delete(TBL_USERMETA, array('user_id'=> $id));
					$notification_args = array(
						'title' => __('Account deleted'), 
						'notification'=> 'You have successfully deleted ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') account.', 
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
			
		public function fetch__add__to__booking__data__process(){
			extract($_POST);
			$return = array();
			$user = get_userdata($user_id);
			$data = get_tabledata(TBL_COURSES, false, array(), '', ' ID, CONCAT_WS(" | ", course_ID, name) AS name');
			$option_data = get_option_data($data, array('ID', 'name'));
			$return['first_name'] = $user->first_name;
			$return['last_name'] = $user->last_name;
			$return['bookings'] = '';
				
			$select = ' ID , name , nurses';
			$data = get_tabledata(TBL_BOOKINGS, false, array() , '' , $select);
			$selected = array();
			if(!empty($data)):
				foreach($data as $booking):
					$nurses = maybe_unserialize($booking->nurses);
					if(!empty($nurses) && in_array($user_id, $nurses)):
						$selected[] = $booking->ID;
					endif;
				endforeach;
			endif;
			$option_data = get_option_data($data, array('ID', 'name'));
			$return['bookings'] = get_options_list($option_data, maybe_unserialize($selected));
			return json_encode($return);
		}
			
		public function fetch__all__trainees__process(){
			if(is_admin()){
				$orders_columns = array(
					0=> 'first_name', 
					1=> 'user_email', 
					2=> 'registered_at', 
					3=> 'user_status', 
				);
			}else{
				$orders_columns = array(
					0=> 'first_name', 
					1=> 'user_email', 
					2=> 'registered_at', 
				);
			}

			$recordsTotal = $recordsFiltered = 0;
			$draw = $_POST["draw"];
			$orderByColumnIndex = $_POST['order'][0]['column'];
			$orderBy = ( array_key_exists( $orderByColumnIndex , $orders_columns ) ) ? $orders_columns[$orderByColumnIndex] : 'created_on';
			$orderType = $_POST['order'][0]['dir'];
			$start = $_POST["start"];
			$length = $_POST['length'];

			$query = "WHERE `user_role` = 'nurse' ";

			$sql = sprintf(" ORDER BY %s %s LIMIT %d , %d ", $orderBy, $orderType , $start , $length);
			$data = array();
			if(!empty($_POST['search']['value'])){
				$columns = array('ID', 'first_name', 'last_name', 'user_email');
				for($i = 0 ; $i < count($columns);$i++){
					$column = $columns[$i];
					$where[] = "$column LIKE '%".$_POST['search']['value']."%'";
				}
				$where = implode(" OR " , $where);
				$query .= ($query != '') ? ' AND ' : ' WHERE ';
				$query .= $where;
			}

			if(isset($_POST['user_designation']) && $_POST['user_designation'] != '' && $_POST['user_designation'] != 'undefined'){
				$query .= ($query != '') ? ' AND ' : ' WHERE ';
				$query .= " `user_designation` = '".$_POST['user_designation']."' ";
			}

			if(isset($_POST['course']) && $_POST['course'] != '' && $_POST['course'] != 'undefined'){
				$query .= ($query != '') ? ' AND ' : ' WHERE ';
				$query .= " `courses` LIKE '%".$_POST['course']."%' ";
			}

			if(isset($_POST['work_area']) && $_POST['work_area'] != '' && $_POST['work_area'] != 'undefined'){
				$query .= ($query != '') ? ' AND ' : ' WHERE ';
				$query .= " `work_area_ID` = '".$_POST['work_area']."' ";
			}

			$recordsTotal = get_tabledata(TBL_USERS, true, array(), $query, 'COUNT(ID) as count');
			$recordsTotal = $recordsTotal->count;
			$data_list = get_tabledata(TBL_USERS, false, array(), $query.$sql);
			$recordsFiltered = $recordsTotal;

			if($data_list):
				foreach($data_list as $single_user):
					$admin_label = ($single_user->user_role == 'admin') ? '<label class="label label-success">admin</label>' : '';
					$row = array();
					$img = '<img src="'.get_user_profile_image($single_user->ID).'" class="avatar center-block" alt="Avatar">';
					array_push($row, $img);
					array_push($row, __($single_user->first_name.' '.$single_user->last_name.' '.$admin_label));
					array_push($row, __($single_user->user_email));
					array_push($row, date('M d, Y', strtotime($single_user->registered_at)));
					if(is_admin()):
						ob_start();
						?>
						<div class="text-center">
							<label><input type="checkbox" class="js-switch approve-switch" <?php checked($single_user->user_status , 1);?> data-id="<?php echo $single_user->ID;?>" data-action="user_account_status_change"/></label>
						</div>
						<?php
						$checkbox = ob_get_clean();
						array_push($row, $checkbox);
					endif;

					ob_start();
					?>
						<div class="text-center">
							<a href="<?php the_permalink('view-progress', array('user_id'=> $single_user->ID));?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i>&nbsp;<?php _e('Manage Training');?></a>
							<button type="button" class="btn btn-success btn-xs add-to-courses-btn" data-toggle="modal" data-target="#add-to-booking-modal" data-user="<?php echo $single_user->ID;?>"><i class="fa fa-view"></i>&nbsp;<?php _e('Add to Booking');?></button>
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
			);
			return json_encode($response);
		}
		
		public function add__mentor__teach__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not add mentor teach, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('add_user')):
				if( is_value_exists(TBL_MENTORS, array('user_ID' => $user) ) ):
					$return['status'] = 2;
					$return['message_heading'] = __('Mentor record already exists.');
					$return['message'] = __('The user you selected already exists in mentor record.');
				else:
					$guid = get_guid(TBL_MENTORS);
					$result = $this->database->insert(TBL_MENTORS, 
						array(
							'ID' => $guid, 
							'user_ID' => $user, 
                            'mentor_type'=>$type,
                            'last_update'=>date("Y-m-d h:i:s", strtotime($last_mentor_update))
						)
					);
					if($result):
						$notification_args = array(
							'title' => __('Mentor Teach Record Created'), 
							'notification'=> sprintf( __('You have successfully created a mentor teach record for user %s'), get_table_column_data( TBL_USERS, 'first_name', array( 'ID' => $user) ) . get_table_column_data( TBL_USERS, 'last_name', array( 'ID' => $user) ) ), 
						);
						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = __('Mentor Teach successfully created.');
						$return['reset_form'] = 1;
					endif;
				endif;
			endif;
			return json_encode($return);
		}
		
        public function view__mentor__process(){
			extract($_POST);
			$mentor_id = trim($mentor_id);
			$return['html'] = '';
			$mentor = get_tabledata(TBL_MENTORS, true, array('user_ID'=> $mentor_id));
			if($mentor):
					ob_start();
					?>
					<table class="table table-striped table-condensed table-bordered" style="margin-bottom: 0px;">
						<thead>
							<tr>
								<th><?php _e('Trainee Name'); ?></th>
                                <td><?php _e('Last Update'); ?> </td>
                                <th><?php _e('Students Mentored'); ?></th>
                                <th><?php _e('Completed Triennial Review'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo get_user_name($mentor_id);?></td>
								<td><?php echo date('M d, Y', strtotime($mentor->last_update));?></td>
                                <?php
                                $students = array();
                                $studentNum=0;
                                $found=false;
                                $triennial_review;
                                if($mentor->students){
                                    $students = maybe_unserialize($mentor->students);
                                }
                                $triennial_review=$mentor->triennial_review;
                                foreach($students as $record){
                                    $formatted = explode("///",$record);
                                    $studentNum+=$formatted[1];
                                }
                                ?>
                                <td><?php echo $studentNum; ?></td>
                                <td><label><input type="checkbox" class="js-switch nurse-modal-approve-switch" <?php checked($triennial_review , 1);?> data-booking="niall" data-user="<?php echo $mentor_id;?>" data-action="triennial_review" disabled/></label></td>
							</tr>
						</tbody>
					</table>
                <?php
					$return['html'] = ob_get_clean();
			endif;
			return json_encode($return);
		}
        
        
		public function update__mentor__teach__process(){
			extract($_POST);
			$return = array(
				'status' => 0, 
				'message_heading'=> __('Failed !'), 
				'message' => __('Could not update mentor teach, Please try again.'), 
				'reset_form' => 0
			);

			if(user_can('edit_user')):
/*				if( is_value_exists(TBL_MENTORS, array('user_ID' => $user), $mentor_id) ):
					$return['status'] = 2;
					$return['message_heading'] = __('Mentor record already exists.');
					$return['message'] = __('The user you selected already exists in mentor record.');
				else:*/
                    error_log("Type = $type, last_update=".date("Y-m-d", strtotime($last_mentor_update)).", user_id=$mentor_id");
					$result = $this->database->update(TBL_MENTORS, 
						array(
                            'mentor_type'=>$type,
                            'last_update'=>date("Y-m-d", strtotime($last_mentor_update))
						), 
						array(
							'user_ID' => $mentor_id, 
						)
					);
					if($result):
						$notification_args = array(
							'title' => __('Mentor Teach Record Updated'), 
							'notification'=> sprintf( __('You have successfully updated a mentor teach record for user %s'), get_table_column_data( TBL_USERS, 'first_name', array( 'ID' => $user) ) . get_table_column_data( TBL_USERS, 'last_name', array( 'ID' => $user) ) ), 
						);
						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = __('Mentor Teach successfully updated.');
					endif;
/*				endif;*/
			endif;
			return json_encode($return);
		}
		
		public function delete__mentor__teach__process(){
			extract($_POST);
			$id = trim($id);
			if( is_admin() ):
				$mentor = get_tabledata(TBL_MENTORS, true, array( 'ID' => $id ) );
				$user = get_userdata($mentor->user_ID);
				$args = array( 'ID'=> $id );
				$result = $this->database->delete(TBL_MENTORS, $args);
				if($result):
					$notification_args = array(
						'title' => __('Mentor record deleted'), 
						'notification'=> sprintf( __( 'You have successfully deleted (%) mentor record.'), ucfirst($user->first_name).' '.ucfirst($user->last_name) ), 
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
	$User = new User();
endif;
?>
