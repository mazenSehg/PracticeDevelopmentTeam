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

		public function demo(){
			ob_start();
			?>
	<?php
			$content = ob_get_clean();
			return $content;
		}
		
		public function user_bands(){
			return array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'5' => '5',
				'6 ' => '6',
				'7' => '7',
				'8' => '8',
				'a' => 'a',
				'8b' => '8b',
				'8c' => '8c',
				'8d' => '8d',
				'8e' => '8e',
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
						<h3 class="form-title">Forgot Password <i class="fa fa-lock"></i></h3>
						<p>Please input your email in the form below and an email will be sent with a new password</p>
						<p>Once you have logged in with the new password you are free to change it.</p>
						<br>
						<br>
						<div class="form-group">
							<label for="user_name">email address: <span class="required">*</span></label>
							<input type="text" name="user_name" class="form-control input-sm" placeholder="" /> </div> <span style="height:5px;display: block;">&nbsp;</span>
						<div class="form-group">
							<input type="hidden" name="action" value="pword_login" />
							<button class="btn btn-block btn-success btn-sm" type="submit"><i class="fa fa-lock"></i> Reset password</button>
						</div>
						<div class="form-group">
							<div class="alert alert-success">Please allow a few minutes for a new password to be generated and sent to your email address provided.</div>
							<div class="alert alert-danger"></div>
						</div>
						<div class="form-group"> <span style="height:5px;display: block;">&nbsp;</span> <a href="<?php echo site_url();?>/login/" <button class="btn btn-block btn-warning btn-sm" type="button">  Back to Login page </button></a> </div>
					</form>
				</div>
				<div class="col-md-7 col-xs-12 text-center hidden-xs ">
					<h1 class=" big-title">Welcome to the NCCPM online Fault Reporting System.</h1>
					<div class="ln_solid"></div>
					<p>Please login to access the equipment and fault management services.</p>
				</div>
				<div class="col-md-1"></div>
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
				<div class=" main-box">
					<div class="col-md-4 col-xs-12 pull-right">
						<form class="login-form" method="get" autocomplete="off">
							<h3 class="form-title"><?php _e('Sign In');?>&nbsp;<i class="fa fa-lock"></i></h3>
							<div class="form-group">
								<label for="user_name">
									<?php _e('User name');?>&nbsp;<span class="required">*</span></label>
								<input type="text" name="user_name" class="form-control input-sm" placeholder="" /> </div>
							<div class="form-group">
								<label for="user_pass">
									<?php _e('Password');?>&nbsp;<span class="required">*</span></label>
								<input type="password" name="user_pass" class="form-control input-sm" placeholder="" /> </div> <span style="height:5px;display: block;">&nbsp;</span>
							<div class="form-group">
								<input type="hidden" name="action" value="user_login" />
								<button class="btn btn-block btn-success btn-sm" type="submit"><i class="fa fa-lock"></i>&nbsp;
									<?php _e('Login');?>
								</button>
							</div>
							<div class="form-group">
								<div class="alert alert-success">
									<?php _e('Welcome Back, Successfully loggedin.');?>
								</div>
								<div class="alert alert-danger"></div>
							</div>
							<div class="form-group">
								<div class="text-center"> <strong><?php _e('OR');?></strong> </div> <span style="height:5px;display: block;">&nbsp;</span>
								<button class="btn btn-block btn-warning btn-sm" type="button">
									<?php _e('Having problem in login ?');?>
								</button>
							</div>
						</form>
					</div>
					<div class="col-md-7 col-xs-12 text-center hidden-xs ">
						<h1 class=" big-title"><?php _e('Do More with Online Management');?>&nbsp;</h1>
						<div class="ln_solid"></div>
					</div>
					<div class="col-md-1"></div>
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
								<button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span> </button>
								<h4 class="modal-title green" id="myModalLabel"><?php _e('Upload Profile Image');?></h4> </div>
							<form class="upload-profile-image" method="post" autocomplete="off">
								<div class="modal-body">
									<div class="form-group">
										<label for="question">
											<?php _e('Choose an image for upload');?>&nbsp;<span class="required">*</span></label>
										<input type="file" name="photo" accept="image/*" /> <span class="help-block green"><?php _e('Supported image formats: jpeg, png, jpg');?></span> <span class="help-block green"><?php _e('Recommended profile image size: 300 x 300 pixels');?></span> </div>
									<div class="form-group">
										<div class="alert alert-success"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>&nbsp;
											<?php _e('Image is being upload, please do not close upload box ..');?>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<input type="hidden" name="action" value="upload_profile_image" />
									<!--<button class="btn btn-success" type="submit">Submit</button>-->
									<button type="button" class="btn btn-default" data-dismiss="modal">
										<?php _e('Close');?>
									</button>
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
			$user = get_user_by('id',$user__id);
			/*Notifications Query*/
			$notifications__query = " ORDER BY `ID` DESC LIMIT 0, 5";
			$notifications__args = array('user_id'=> $user__id);
			$notifications__result = get_tabledata(TBL_NOTIFICATIONS,false,$notifications__args,$notifications__query);

			/*Access Log Query*/
			$access__log__query = " ORDER BY `ID` DESC LIMIT 0, 10";
			$access__log__args = array('user_id'=> $user__id);
			$access__log__result = get_tabledata(TBL_ACCESS_LOG,false,$access__log__args,$access__log__query);
			?>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="profile_title">
							<div class="col-md-6">
								<h2><?php _e('Progress Report');?></h2> </div>
						</div>
						<div class="" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="tab_content" class="nav nav-tabs bar_tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#tab_content01" role="tab" data-toggle="tab" aria-expanded="true">
										<?php _e('Preceptorship Progress');?>
									</a>
								</li>
								<li role="presentation" class="">
									<a href="#tab_content02" role="tab" data-toggle="tab" aria-expanded="false">
										<?php _e('HCA Induction Progress');?>
									</a>
								</li>
								<li role="presentation" class="">
									<a href="#tab_content3" role="tab" data-toggle="tab" aria-expanded="false">
										<?php _e('FD/AP Training Record');?>
									</a>
								</li>
								<li role="presentation" class="">
									<a href="#tab_content4" role="tab" data-toggle="tab" aria-expanded="false">
										<?php _e('Student Record');?>
									</a>
								</li>
								<li role="presentation" class="">
									<a href="#tab_content5" role="tab" data-toggle="tab" aria-expanded="false">
										<?php _e('ONP Course');?>
									</a>
								</li>
								<li role="presentation" class="">
									<a href="#tab_content6" role="tab" data-toggle="tab" aria-expanded="false">
										<?php _e('Mentorship');?>
									</a>
								</li>
								<li role="presentation" class="">
									<a href="#tab_content7" role="tab" data-toggle="tab" aria-expanded="false">
										<?php _e('Notes');?>
									</a>
								</li>
							</ul>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade active in" id="tab_content01" aria-labelledby="home-tab">
									<ul class="messages list-unstyled">
										<form class="add-user user-form" method="post" autocomplete="off">
											<br>
											<br>
											<h1>Preceptor Progress</h1>
											<br>
											<div class="row">
												<div class="form-group col-sm-4 col-xs-12">
													<label for="date-of-fault">Precptorship Intro</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('Current Preceptee');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('Awaiting Pin');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('Academic Delay');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-sm-4 col-xs-12">
													<label for="date-of-fault">Precptorship Name</label>
													<input type="text" name="date_of_fault" class="form-control" /> </div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('International Nurse');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">WTE</label>
													<input type="text" name="date_of_fault" class="form-control " /> </div>
											</div>
											<div class="row">
												<div class="form-group col-sm-4 col-xs-12">
													<label for="date-of-fault">Precptorship Email</label>
													<input type="text" name="date_of_fault" class="form-control " /> </div>
												<div class="form-group col-sm-4 col-xs-12">
													<label for="date-of-fault">Country of First Registeration</label>
													<input type="text" name="date_of_fault" class="form-control" /> </div>
											</div>
											<div class="row">
												<div class="form-group col-sm-4 col-xs-12">
													<label for="">Sign off Period</label>
													<br/>
													<label>
														<input type="radio" class="flat" name="approved" value="1" /> 6 Months</label>
													<label>&nbsp;</label>
													<label>
														<input type="radio" class="flat" name="approved" value="0" /> 12 Months</label>
												</div>
												<div class="form-group col-sm-4 col-xs-12">
													<label for="date-of-fault">Awards</label>
													<input type="text" name="date_of_fault" class="form-control" /> </div>
											</div>
											<div class="row">
												<div class="form-group col-sm-4 col-xs-12">
													<label for="date-of-fault">Links</label>
													<input type="text" name="date_of_fault" class="form-control " /> </div>
												<div class="form-group col-sm-4 col-xs-12">
													<label for="admins">
														<?php _e('Allocated trainer');?>&nbsp;<span class="required">*</span></label>
													<select name="admins[]" class="form-control select_single require">
														<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-sm-8 col-xs-12">
													<label for="description-of-fault">Notes</label>
													<textarea name="description_of_fault" class="form-control" rows="3"></textarea>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<input type="hidden" name="action" value="update_preceptorship_process" />
												<button class="btn btn-success btn-md" type="submit">
													<?php _e('Update Preceptor Progress');?>
												</button>
											</div>
										</form>
								</div>
								</ul>
								<div role="tabpanel" class="tab-pane fade" id="tab_content02" aria-labelledby="profile-tab">
									<ul class="messages list-unstyled">
										<form class="add-user user-form" method="post" autocomplete="off">
											<br>
											<br>
											<h1>HCA Induction</h1>
											<br>
											<div class="row">
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">Course Start Date</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-3 col-xs-12">
													<label for="date-of-fault">Manager Name</label>
													<input type="text" name="date_of_fault" class="form-control" /> </div>
												<div class="form-group col-sm-3 col-xs-12">
													<label for="date-of-fault">Manager Email</label>
													<input type="text" name="date_of_fault" class="form-control " /> </div>
											</div>
											<div class="row">
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('New to care');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('Current PD Team Clinet');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('Fundamental Adult Care Cluster Book complete');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('Care certificate Complete');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
											</div>
											<div class="form-group col-sm-4 col-xs-12"></div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="admins">
													<?php _e('Allocated trainer');?>&nbsp;<span class="required">*</span></label>
												<select name="admins[]" class="form-control select_single require">
													<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
												</select>
											</div>
											<div class="row">
												<div class="form-group col-sm-8 col-xs-12">
													<label for="description-of-fault">Notes</label>
													<textarea name="description_of_fault" class="form-control" rows="3"></textarea>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<input type="hidden" name="action" value="update_preceptorship_process" />
												<button class="btn btn-success btn-md" type="submit">
													<?php _e('Update HCA Induction');?>
												</button>
											</div>
										</form>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
									<ul class="messages list-unstyled">
										<form class="add-user user-form" method="post" autocomplete="off">
											<br>
											<br>
											<h1>FDs / AP Training Record</h1>
											<br>
											<div class="row">
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">FD Course Start Date</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-3 col-xs-12">
													<label for="date-of-fault">Graduation Date</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="decommed">
														<?php _e('Course Interrupt');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-sm-1 col-xs-12">
													<label for="decommed">
														<?php _e('Study Day 1');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-1 col-xs-12">
													<label for="decommed">
														<?php _e('Study Day 2');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-1 col-xs-12">
													<label for="decommed">
														<?php _e('Study Day 3');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-5 col-xs-12">
													<label for="description-of-fault">Other Study</label>
													<textarea name="description_of_fault" class="form-control" rows="3"></textarea>
												</div>
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="decommed">
													<?php _e('CURRENT FD');?>
												</label>
												<br/>
												<label>
													<input type="checkbox" name="doh" class="js-switch" /> </label>
											</div>
											<div class="form-group col-sm-4 col-xs-12">
												<label for="admins">
													<?php _e('Allocated trainer');?>&nbsp;<span class="required">*</span></label>
												<select name="admins[]" class="form-control select_single require">
													<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
												</select>
											</div>
											<div class="row">
												<div class="form-group col-sm-8 col-xs-12">
													<label for="description-of-fault">Notes</label>
													<textarea name="description_of_fault" class="form-control" rows="3"></textarea>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<input type="hidden" name="action" value="update_preceptorship_process" />
												<button class="btn btn-success btn-md" type="submit">
													<?php _e('Update FD/AP Training Records');?>
												</button>
											</div>
										</form>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
									<ul class="messages list-unstyled">
										<form class="add-user user-form" method="post" autocomplete="off">
											<br>
											<br>
											<h1>Student Progress</h1>
											<br>
											<div class="row">
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">Cohort</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">Study Day 1</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">Study Day 2</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">Study Day 3</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
											</div>
											<div class="row">
												<div class="form-group col-sm-8 col-xs-12">
													<label for="description-of-fault">Notes</label>
													<textarea name="description_of_fault" class="form-control" rows="3"></textarea>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<input type="hidden" name="action" value="update_preceptorship_process" />
												<button class="btn btn-success btn-md" type="submit">
													<?php _e('Update student Progress');?>
												</button>
											</div>
										</form>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
									<ul class="messages list-unstyled">
										<form class="add-user user-form" method="post" autocomplete="off">
											<br>
											<br>
											<h1>ONP Course Attendace</h1>
											<br>
											<div class="row">
												<div class="form-group col-sm-4 col-xs-12">
													<label for="date-of-fault">Cohort</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-4 col-xs-12">
													<label for="admins">
														<?php _e('Allocated trainer');?>&nbsp;<span class="required">*</span></label>
													<select name="admins[]" class="form-control select_single require">
														<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
													</select>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<input type="hidden" name="action" value="update_preceptorship_process" />
												<button class="btn btn-success btn-md" type="submit">
													<?php _e('Update course Attendance');?>
												</button>
											</div>
										</form>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
									<ul class="messages list-unstyled">
										<form class="add-user user-form" method="post" autocomplete="off">
											<br>
											<br>
											<h1>Mentor Progress</h1>
											<br>
											<div class="row">
												<div class="form-group col-sm-3 col-xs-12">
													<label for="decommed">
														<?php _e('Current Mentor');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
												<div class="form-group col-sm-2 col-xs-12">
													<label for="date-of-fault">Update Renewal Due</label>
													<input type="text" name="p_intro" class="form-control input-datepicker" readonly="readonly" /> </div>
												<div class="form-group col-sm-3 col-xs-12">
													<label for="decommed">
														<?php _e('Sign off Mentor');?>
													</label>
													<br/>
													<label>
														<input type="checkbox" name="doh" class="js-switch" /> </label>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-sm-8 col-xs-12">
													<label for="description-of-fault">Notes</label>
													<textarea name="description_of_fault" class="form-control" rows="3"></textarea>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<input type="hidden" name="action" value="update_preceptorship_process" />
												<button class="btn btn-success btn-md" type="submit">
													<?php _e('Update Mentor Progress');?>
												</button>
											</div>
										</form </ul>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">
									<ul class="messages list-unstyled"> 
									<form class="add-user user-form" method="post" autocomplete="off">
											<br>
											<br>
											<h1>Notes</h1>
											<br>
																			
<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>
													<?php _e('Date of Note');?>
												</th>
												<th>
													<?php _e('Note');?>
												</th>
												<th>
													<?php _e('Note Posted By');?>
												</th>
											</tr>
										</thead>
										<tbody>
											
												<tr>
													<td>
														
													</td>
													<td>
														
													</td>
													
													<td>
													</td>
												</tr>
										</tbody>
									</table>
																			
																			
	
											<div class="row">
												<div class="form-group col-sm-8 col-xs-12">
													<label for="description-of-fault">Notes</label>
													<textarea name="description_of_fault" class="form-control" rows="3"></textarea>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<input type="hidden" name="action" value="update_preceptorship_process" />
												<button class="btn btn-success btn-md" type="submit">
													<?php _e('Add note');?>
												</button>
											</div>
										</form>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="profile_title">
							<div class="col-md-6">
								<h2><?php _e('User Activity Report');?></h2> </div>
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
										<?php if($notifications__result):
									foreach($notifications__result as $user__notifications): ?>
											<li> <img src="<?php echo get_user_profile_image($user__notifications->user_id);?>" class="avatar" alt="Avatar">
												<div class="message_date">
													<h3 class="date text-info"><?php echo date('d',strtotime($user__notifications->date));?></h3>
													<p class="month">
														<?php echo date('M',strtotime($user__notifications->date));?>
													</p>
												</div>
												<div class="message_wrapper">
													<h4 class="heading">
												<?php echo $user__notifications->title;?>
												<small><?php echo date('M d, Y h:i a',strtotime($user__notifications->date));?></small>
											</h4>
													<blockquote class="message">
														<?php _e(htmlspecialchars_decode($user__notifications->notification));?>
													</blockquote>
													<br /> </div>
											</li>
											<?php endforeach;
								else: ?>
												<li>
													<h5><?php _e('There is no recent activity details');?></h5></li>
												<?php endif; ?>
									</ul>
									<!-- end recent activity -->
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
									<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>
													<?php _e('Last Login');?>
												</th>
												<th>
													<?php _e('Location');?>
												</th>
												<th>
													<?php _e('Device');?>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php if($access__log__result): foreach($access__log__result as $access__log__row): ?>
												<tr>
													<td>
														<?php echo date('M d, Y h:i A',strtotime($access__log__row->date));?>
													</td>
													<td>
														<?php echo $access__log__row->ip_address;?>
													</td>
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

		public function view__profile__page(){
			ob_start();
			$user__id = $_GET['user_id'];
			$user = get_userdata($user__id);
			if(!user_can('view_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$user):
				echo page_not_found('Oops ! User Details Not Found.','Please go back and check again !');
			else: ?>
						<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
							<div class="profile_img">
								<div id="crop-avatar"> <img class="img-responsive avatar-view" src="<?php echo get_user_profile_image($user__id);?>" alt="Avatar"> </div>
							</div>
							<h3><?php echo $user->first_name.' '.$user->last_name;?></h3>
							<ul class="list-unstyled user_data">
								<li><i class="fa fa-envelope-o"></i>&nbsp;
									<?php _e($user->user_email);?>
								</li>
								<li><i class="fa fa-<?php echo strtolower(get_user_meta($user->ID,'gender',true));?>"></i>&nbsp;
									<?php _e(get_user_meta($user->ID,'gender',true));?>
								</li>
								<?php if(get_user_meta($user->ID,'user_phone',true) != ''): ?>
									<li><i class="fa fa-phone"></i>
										<?php echo get_user_meta($user->ID,'user_phone',true);?>
									</li>
									<?php endif; ?>
										<li class="m-top-xs"><i class="fa fa-child"></i>&nbsp;
											<?php echo date('M d,Y',strtotime(get_user_meta($user->ID,'dob',true)));?>
										</li>
							</ul>
							<br /> <a class="btn btn-success btn-sm" href="<?php the_permalink('edit-user', array('user_id' => $user__id));?>"><i class="fa fa-edit m-right-xs"></i>&nbsp;<?php _e('Edit User');?></a> </div>
						<?php echo $this->activity__and__access__log__section( $user->ID );
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function add__user__page(){
			ob_start();
			if(!user_can('add_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
							<form class="add-user user-form" method="post" autocomplete="off">
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="username"> Username <span class="required">*</span> </label>
										<input type="text" name="username" class="form-control require" /> </div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="first_name">
											<?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
										<input type="text" name="first_name" class="form-control require" /> </div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="last_name">
											<?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
										<input type="text" name="last_name" class="form-control require" /> </div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="email">
											<?php _e('Email');?>&nbsp;<span class="required">*</span></label>
										<input type="text" name="user_email" class="form-control require" /> </div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="dob">
											<?php _e('Date of birth');?>
										</label>
										<input type="text" name="dob" class="form-control input-datepicker-today" readonly="readonly" /> </div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="gender">
											<?php _e('Gender');?>&nbsp;<span class="required">*</span></label>
										<select name="gender" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
											<option value=""></option>
											<option value="Male">
												<?php _e('Male');?>
											</option>
											<option value="Female">
												<?php _e('Female');?>
											</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="phone">
											<?php _e('Phone');?>
										</label>
										<input type="text" name="user_phone" class="form-control" /> </div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="work_extension">
											<?php _e('Work extension');?>
										</label>
										<input type="text" name="work_extension" class="form-control" /> </div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="beep">
											<?php _e('Beep');?>
										</label>
										<input type="text" name="beep" class="form-control" /> </div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="user-role">
											<?php _e('Role');?>&nbsp;<span class="required">*</span></label>
										<select id="purpose" name="user_role" class="form-control select_single require" tabindex="-1" data-placeholder="Choose role">
											<?php echo get_options_list(get_roles()); ?>
										</select>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="courses">
											<?php _e('Course(s)');?>
										</label>
										<select name="courses[]" class="form-control select_single" data-placeholder="Choose course(s)" multiple="multiple">
											<?php
								$data = get_tabledata(TBL_COURSES,false);
								$option_data = get_option_data($data,array('ID','name'));
								echo get_options_list($option_data);
								?>
										</select> <small class="help-block"><?php _e('Use this option only for <strong>Trainee</strong> users');?></small> </div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
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
								</div>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="band">
											<?php _e('Band');?>
										</label>
										<select name="band" class="form-control select_single" tabindex="-1" data-placeholder="Choose band">
											<?php
								$option_data = $this->user_bands();
								echo get_options_list($option_data);
								?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 form-goup">
										<label>
											<?php _e('Upload Profile Image');?>
										</label>
										<input type="text" name="profile_img" class="form-control" value="" placeholder="Uploaded image url" readonly="readonly" />
										<br/> <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#upload-image-modal"><i class="fa fa-camera"></i>&nbsp;<?php _e('Upload Image');?></a> </div>
									<div class="col-xs-12 col-sm-6 form-group">
										<div class="profile-image-preview-box"><img src="" class="img-responsive img-thumbnail" /></div>
									</div>
								</div>
								<script>
									$(document).ready(function () {
										$('#purpose').on('change', function () {
											if (this.value == 'trainee') {
												$(".nav-sub-wrapper").toggle();
											}
											else {
												$(".nav-sub-wrapper").hide();
											}
										});
									});
								</script>
								<div class="nav-sub-wrapper" style="display: none;">
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Currently Employed?
												<br/>
												<label>
													<input type="radio" class="flat" name="employed" value="1" /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="employed" value="0" /> No</label>
										</div>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="name">External Candidate No.</label>
										<input type="text" name="ex_cand" class="form-control " /> </div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="gender"> RAG Status</label>
										<select name="rag_status" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
											<option value=""> </option>
											<option value="0"> Red </option>
											<option value="1"> Amber </option>
											<option value="2"> Green </option>
										</select>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="current_employed">Extended support Underway
											<br/>
											<label>
												<input type="radio" class="flat" name="extended_support" value="1" /> Yes</label>
											<label>&nbsp;</label>
											<label>
												<input type="radio" class="flat" name="extended_support" value="0" /> No</label>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="name">Extended Support Since: </label>
										<input type="text" name="support_since" class="form-control " /> </div>
								</div>
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
							<?php echo $this->upload__image__section();
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function edit__user__page(){
			ob_start();
			$user__id = $_GET['user_id'];
			$user = get_userdata($user__id);
			if(!user_can('edit_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$user):
				echo page_not_found('Oops ! User Details Not Found.','Please go back and check again !');
			else: ?>
								<form class="edit-user user-form" method="post" autocomplete="off">
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="first_name"> Username <span class="required">*</span> </label>
											<input type="text" name="username" class="form-control require" value="<?php _e($user->username);?>" /> </div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="first_name">
												<?php _e('First Name');?>&nbsp;<span class="required">*</span></label>
											<input type="text" name="first_name" class="form-control require" value="<?php _e($user->first_name);?>" /> </div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="last_name">
												<?php _e('Last Name');?>&nbsp;<span class="required">*</span></label>
											<input type="text" name="last_name" class="form-control require" value="<?php _e($user->last_name);?>" /> </div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="email">
												<?php _e('Email');?>&nbsp;<span class="required">*</span></label>
											<input type="text" name="user_email" class="form-control require" value="<?php _e($user->user_email);?>" /> </div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="dob">
												<?php _e('Date of birth');?>
											</label>
											<?php $dob = (get_user_meta($user->ID,'dob') != '') ? date('M d, Y', strtotime(trim(get_user_meta($user->ID,'dob')))) : ''; ?>
												<input type="text" name="dob" class="form-control input-datepicker-today" readonly="readonly" value="<?php echo $dob;?>" /> </div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="gender">
												<?php _e('Gender');?>&nbsp;<span class="required">*</span></label>
											<select name="gender" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
												<option value=""></option>
												<option value="Male" <?php selected(get_user_meta($user->ID,'gender'), 'Male');?>>Male</option>
												<option value="Female" <?php selected(get_user_meta($user->ID,'gender'),'Female');?>>Female</option>
											</select>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="phone">
												<?php _e('Phone');?>
											</label>
											<input type="text" name="user_phone" class="form-control" value="<?php echo get_user_meta($user__id,'user_phone');?>" /> </div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="company">
												<?php _e('Role');?>&nbsp;<span class="required">*</span></label>
											<select name="user_role" class="form-control select_single require" tabindex="-1" data-placeholder="Choose role">
												<?php echo get_options_list(get_roles(),array($user->user_role)); ?>
											</select>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="courses">
												<?php _e('Course(s)');?>
											</label>
											<select name="courses[]" class="form-control select_single" data-placeholder="Choose course(s)" multiple="multiple">
												<?php
								$data = get_tabledata(TBL_COURSES,false);
								$option_data = get_option_data($data,array('ID','name'));
								echo get_options_list($option_data,maybe_unserialize($user->courses));
								?>
											</select> <span class="help-block"><?php _e('Use this option only for <strong>Nurse</strong> users');?></span> </div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="user_designation">
												<?php _e('Designation');?>&nbsp;<span class="required">*</span></label>
											<select name="user_designation" class="form-control select_single require" tabindex="-1" data-placeholder="Choose designation">
												<?php
								$data = get_tabledata(TBL_DESIGNATIONS,false);
								$option_data = get_option_data($data,array('ID','name'));
								echo get_options_list($option_data, get_user_meta($user->ID,'user_designation'));
								?>
											</select>
										</div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="work_extension">
												<?php _e('Work extension');?>
											</label>
											<input type="text" name="work_extension" class="form-control" value="<?php echo get_user_meta($user->ID,'work_extension');?>" /> </div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="beep">
												<?php _e('Beep');?>
											</label>
											<input type="text" name="beep" class="form-control" value="<?php echo get_user_meta($user->ID,'beep');?>" /> </div>
										<div class="form-group col-sm-6 col-xs-12">
											<label for="band">
												<?php _e('Band');?>
											</label>
											<select name="band" class="form-control select_single" tabindex="-1" data-placeholder="Choose band">
												<?php
								$option_data = $this->user_bands();
								echo get_options_list($option_data,get_user_meta($user->ID,'band'));
								?>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 form-goup">
											<label>
												<?php _e('Upload Profile Image');?>
											</label>
											<input type="text" name="profile_img" class="form-control" value="<?php echo get_user_profile_image($user->ID,false);?>" placeholder="Uploaded image url" readonly="readonly" />
											<br/> <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#upload-image-modal"><i class="fa fa-camera"></i>&nbsp;<?php _e('Upload Image');?></a> </div>
										<div class="col-xs-12 col-sm-6 form-group">
											<div class="profile-image-preview-box"><img src="<?php echo get_user_profile_image($user->ID);?>" class="img-responsive img-thumbnail" /></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="user_pass">
												<?php _e('Reset Password');?>
											</label>
											<input type="text" name="user_pass" value="" class="form-control" />
											<div>&nbsp;</div>
											<button class="btn btn-default generate-password">
												<?php _e('Generate Password');?>
											</button>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="">
												<?php _e('Disable Account');?>
											</label>
											<br/>
											<div class="radio-inline">
												<label>
													<input type="radio" class="flat" name="user_status" value="0" <?php checked($user->user_status , 0);?>>
													<?php _e('Yes');?>
												</label>
											</div>
											<div class="radio-inline">
												<label>
													<input type="radio" class="flat" name="user_status" value="1" <?php checked($user->user_status , 1);?>>
													<?php _e('No');?>
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6 col-xs-12">
											<label for="current_employed">Currently Employed?
												<br/>
												<label>
													<input type="radio" class="flat" name="employed" value="1" <?php checked($user->currently_employed , 1);?> /> Yes</label>
												<label>&nbsp;</label>
												<label>
													<input type="radio" class="flat" name="employed" value="0" <?php checked($user->currently_employed , 0);?> /> No</label>
										</div>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="name">External Candidate No.</label>
										<input type="text" name="ex_cand" class="form-control " value="<?php echo $user->external_candidate;?>" /> </div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="gender"> RAG Status</label>
										<select name="rag_status" class="form-control select_single require" tabindex="-1" data-placeholder="Choose a gender">
											<option value=""> </option>
											<option value="0" <?php selected($user->rag_status,'0');?>> Red </option>
											<option value="1" <?php selected($user->rag_status,'1');?>> Amber </option>
											<option value="2" <?php selected($user->rag_status,'2');?>> Green </option>
										</select>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="current_employed">Extended support Underway
											<br/>
											<label>
												<input type="radio" class="flat" name="extended_support" value="1" <?php checked($user->extended_support , 1);?>/> Yes</label>
											<label>&nbsp;</label>
											<label>
												<input type="radio" class="flat" name="extended_support" value="0" <?php checked($user->currently_employed , 0);?>/> No</label>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="name">Extended Support Since: </label>
										<input type="text" name="support_since" class="form-control " value="<?php echo $user->support_since;?>" /> </div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div>&nbsp;</div>
										<input type="hidden" name="action" value="edit_user" />
										<input type="hidden" name="user_id" value="<?php echo $user__id;?>" />
										<button class="btn btn-success btn-md" type="submit">
											<?php _e('Update User');?>
										</button>
									</div>
								</form>
								<?php echo $this->upload__image__section();
			endif;
			$content = ob_get_clean();
			return $content;
		}

		public function all__users__page(){
			ob_start();
			$args = (!is_admin()) ? array('created_by'=> $this->current__user__id) : array();
			$users_list = get_tabledata(TBL_USERS,false,$args);
			if(!user_can('view_user')):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$users_list):
				echo page_not_found("Oops! There is no New Users in website",' ',false);
			else: ?>
									<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th></th>
												<th>
													<?php _e('Name');?>
												</th>
												<th>
													<?php _e('Email');?>
												</th>
												<th>
													<?php _e('Registered On');?>
												</th>
												<?php if(is_admin()): ?>
													<th class="text-center">
														<?php _e('Status');?>
													</th>
													<?php endif; ?>
														<th class="text-center">
															<?php _e('Actions');?>
														</th>
											</tr>
										</thead>
										<tbody>
											<?php if($users_list): foreach($users_list as $single_user):
							$admin_label = ($single_user->user_role == 'admin') ? '<label class="label label-success">admin</label>' : '';
						?>
												<tr>
													<td class="text-center"><img src="<?php echo get_user_profile_image($single_user->ID);?>" class="avatar center-block" alt="Avatar"></td>
													<td>
														<?php echo __($single_user->first_name.' '.$single_user->last_name.' '.$admin_label);?>
													</td>
													<td>
														<?php _e($single_user->user_email);?>
													</td>
													<td>
														<?php echo date('M d,Y',strtotime($single_user->registered_at));?>
													</td>
													<?php if(is_admin()): ?>
														<td class="text-center">
															<label>
																<input type="checkbox" class="js-switch" <?php checked($single_user->user_status , 1);?> onClick="javascript:approve_switch(this);" data-id="
																<?php echo $single_user->ID;?>" data-action="user_account_status_change"/></label>
														</td>
														<?php endif; ?>
															<td class="text-center"> <a href="<?php the_permalink('view-user', array('user_id' => $single_user->ID));?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i>&nbsp;<?php _e('View');?></a> <a href="<?php the_permalink('edit-user', array('user_id' => $single_user->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a> <a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $single_user->ID;?>" data-action="delete_user"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a> </td>
												</tr>
												<?php endforeach; endif; ?>
										</tbody>
									</table>
									<?php endif;
			$content = ob_get_clean();
			return $content;
		}

		//Process functions starts here
public function user__login__process(){
			global $device;
			extract($_POST);
if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $user_name)) { 
				if(email_exists($user_name)){
				$user = get_user_by('email',$user_name);
				error_log($user_pass." : ".$user->ID);
				if(check_password($user_pass,$user->ID)){
					if(!is_user_active($user->ID)){
						return 2;
					}else{
						set_current_user($user->ID);
						$this->database->insert(TBL_ACCESS_LOG,
							array(
								'user_id' => $user->ID,
								'ip_address'=> $_SERVER['REMOTE_ADDR'],
								'device' => $device,
								'user_agent'=> $_SERVER ['HTTP_USER_AGENT']
							)
						);
						return 1;
					}
				}else{
					return 0;
				}
			}else{
				return 0;
			}
} 
else { 
			if(username_exists($user_name)){
				$user = get_user_by('username',$user_name);
				if(check_password($user_pass,$user->ID)){
					if(!is_user_active($user->ID)){
						return 2;
					}else{
						set_current_user($user->ID);
						$this->database->insert(TBL_ACCESS_LOG,
							array(
								'user_id' => $user->ID,
								'ip_address'=> $_SERVER['REMOTE_ADDR'],
								'device' => $device,
								'user_agent'=> $_SERVER ['HTTP_USER_AGENT']
							)
						);
						return 1;
					}
				}else{
					return 0;
				}
			}else{
				return 0;
			}
} 
		}



		public function reset__login__process(){
			global $device;
			extract($_POST);
			if(email_exists($user_name)){
				$user = get_user_by('email',$user_name);
				
			$user_pass = password_generator();
			$record_pass = $user_pass;
			$salt = generateSalt();
			$user_pass = hash('SHA256', encrypt($user_pass, $salt));
			$salt = base64_encode($salt);
			//$pword = set_password($user_pass);
				
			$result1 = $this->database->update(TBL_USERS,array('user_pass'=> $user_pass, 'user_salt' => $salt),array('user_email'=> $user_name));
				
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
				if(email_exists($user_email)):
					$return['status'] = 2;
					$return['message_heading'] = __('Email Already Exist');
					$return['message'] = __('Email address you entered is already exists, please try another email address.');
					$return['fields'] = array('user_email');
				else:
					
					$user_pass = password_generator();
					$salt = generateSalt();
					$user_pass = hash('SHA256', encrypt($user_pass, $salt));
					$salt = base64_encode($salt);
			
			
			if($user_role=="nurse"){
				$first = $first_name[0];
				$trainer_ID = $last_name."_".$first."_001";
			}else{
							$trainer_ID = NULL;
						}
					$guid = get_guid(TBL_USERS);
			
			
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
							'courses' => isset($courses) ? $courses : '',
							'currently_employed' => $currently_employed,
							'external_candidate' => $ex_cand,
							'rag_status' => $rag_status,
							'extended_support' => $extended_support,
							'support_since' => $support_since,
						
						)
					);
					if($result):
						$user__id = $guid;
						update_user_meta($user__id,'gender',$gender);
						update_user_meta($user__id,'dob',date('Y-m-d h:i:s',strtotime($dob) ) );
						update_user_meta($user__id,'user_phone',$user_phone);
						update_user_meta($user__id,'profile_img',$profile_img);
						update_user_meta($user__id,'user_designation',$user_designation);
						update_user_meta($user__id,'work_extension',$work_extension);
						update_user_meta($user__id,'beep',$beep);
						update_user_meta($user__id,'band',$band);
						$notification_args = array(
							'title' => __('New Account Created'),
							'notification'=> __('You have successfully created a new account').' ('.ucfirst($first_name).' '.ucfirst($last_name).').',
						);
						add_user_notification($notification_args);
						$return['status'] = 1;
						$return['message_heading'] = __('Success !');
						$return['message'] = __('Account has been successfully created.');
						$return['reset_form'] = 1;
					endif;
				endif;
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
				if( is_value_exists(TBL_USERS,array('user_email' => $user_email),$user_id) ):
				$return['status'] = 2;
				$return['message_heading'] = __('Email Already Exist');
				$return['message'] = __('Email address you entered is already exists, please try another email address.');
				$return['fields'] = array('user_email');
			else:
				$check = false;
				if(!isset($centre))
					$centre = '';

						if($user_role=="trainer"){
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
						'user_status'=> $user_status,
						'user_role' => $user_role,
						
						'courses' => isset($courses) ? $courses : ''
					),
					array('ID'=> $user_id)
				);
				$check = ($result) ? true : false;

				$result1 = false;
				if($user_pass != ''){
					$result1 = $this->database->update(TBL_USERS,array('user_pass'=> set_password($user_pass)),array('ID'=> $user_id));
				}
				$check = ($result1) ? true : $check;
				if($result1){
					//update_user_meta($user_id,'reset_password',1);
					$notification_args = array(
						'title' => __('Account Password Reset'),
						'notification'=> __('You have successfully changed').' ('.ucfirst($first_name).' '.ucfirst($last_name).') account password.',
					);
					add_user_notification($notification_args);
				}

				if($check):
					update_user_meta($user_id,'gender',$gender);
					update_user_meta($user_id,'dob',date('Y-m-d h:i:s',strtotime($dob) ) );
					update_user_meta($user_id,'user_phone',$user_phone);
					update_user_meta($user_id,'profile_img',$profile_img);
					update_user_meta($user_id,'user_designation',$user_designation);
					update_user_meta($user_id,'work_extension',$work_extension);
					update_user_meta($user_id,'beep',$beep);
					update_user_meta($user_id,'band',$band);
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
				createThumb($sourcePath, $upload_img.$full_img,$fileType,300,300,300);
				return $upload_url.$full_img;
			}else{
				return 0;
			}
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
				$result = $this->database->update(TBL_USERS,array('user_status'=> $status),$args);

				if($result):
					if($status == 0){
						$notification_args = array(
							'title' => ucfirst($user->user_role).' Account Disabled',
							'notification'=> 'You have successfully disbled ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') account.',
						);
						$return['message'] = 'You have successfully disbled ('.ucfirst($user->first_name).' '.ucfirst($user->last_name).') account.';
					}
					else{
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

		public function delete__user__process(){
			extract($_POST);
			$id = trim($id);
			if(is_admin() && $this->current__user__id != $id):
				$user = get_userdata($id);
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_USERS,$args);
				if($result):
					$this->database->delete(TBL_USERMETA,array('user_id'=> $id));
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
	}
endif;
?>