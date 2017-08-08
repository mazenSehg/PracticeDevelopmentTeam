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

		
				public function add__course__type__page(){
			ob_start();
			if( !user_can( 'add_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
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
		
		
		
		
		public function add__course__page(){
			ob_start();
			if( !user_can( 'add_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-course submit-form" method="post" autocomplete="off">					
					<div class="form-group">
						<label for="admins"><?php _e('Course Type');?>&nbsp;<span class="required">*</span></label>
						<select name="code" class="form-control select_single require" data-placeholder="Choose course Type" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_COURSE_TYPE,false,array(),'',' ID, CONCAT_WS(" | ", course_ID , name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="name"><?php _e('Additional Name');?>&nbsp;<span class="required">*</span></label>
						<input type="text" name="name" class="form-control require" />
					</div>
					
					<div class="form-group">
						<label for="admins"><?php _e('Course Trainers(s)');?>&nbsp;<span class="required">*</span></label>
						<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course Trainer(s)" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'course_admin'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
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
							$data = get_tabledata(TBL_LOCATIONS,false);
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data);
							?>
						</select>
					</div>
					
					
									<div class="form-group">
					<label for="date_from"><?php _e('Booking Date From');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="date_from" class="form-control input-datepicker" readonly="readonly"/>
				</div>
				<div class="form-group">
					<label for="date_to"><?php _e('Booking Date To');?>&nbsp;<span class="required">*</span></label>
					<input type="text" name="date_to" class="form-control input-datepicker" readonly="readonly" />
				</div>
				<div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
						<?php
						$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
						$option_data = get_option_data($data,array('ID','name'));
						echo get_options_list($option_data);
							?>
						</select>
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
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			else: ?>
				<form class="add-course submit-form" method="post" autocomplete="off">
					<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
						<label for="name"><?php _e('Name');?></label>
						<input type="text" name="name" class="form-control" />
					</div>
					
									<div class="form-group col-sm-6 col-xs-12">
										<label for="band">
											<?php _e('Cohort Type');?>
										</label>
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
										<label for="dob">
											<?php _e('Starting Date');?>
										</label>
										<input type="text" name="start" class="form-control input-datepicker" readonly="readonly"/> 
						</div>
						
					<div class="form-group col-sm-2 col-xs-12">
						<label for="retrain_date"><?php _e('Years');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="years" class="form-control require" min="0" max="10"value="0"/>
					</div>
					<div class="form-group col-sm-2 col-xs-12">
						<label for="retrain_date"><?php _e('Months');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="months" class="form-control require" min="0" max = "12"value="0"/>
					</div>
					<div class="form-group col-sm-2 col-xs-12">
						<label for="retrain_date"><?php _e('Days');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="days" class="form-control require" min="0" max = "31" value="0"/>
					</div>
					</div>
					
					<br>
					<br>
					<br>





					<div class="ln_solid"></div>
					<div class="form-group">
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
				$course = get_tabledata(TBL_COHORTS,true,array('ID'=> $course__id));
			if( !user_can( 'edit_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$course):
				echo page_not_found('Oops ! Cohort Details Not Found.','Please go back and check again !');
			else:
			?>
				<form class="add-course submit-form" method="post" autocomplete="off">
						<div class="form-group col-sm-6 col-xs-12">
						<label for="name"><?php _e('Name');?></label>
						<input type="text" name="name" class="form-control" value="<?php echo $course->name?>"/>
					</div>
					
									<div class="form-group col-sm-6 col-xs-12">
										<label for="band">
											<?php _e('Cohort Type');?>
										</label>
										<select name="type" class="form-control select_single" tabindex="-1" data-placeholder="Choose Cohort">
											<?php
								$option_data = $this->cohort_types();
								echo get_options_list($option_data,$course->type,'type');
								?>
										</select>
									</div>
					</div>
					
					<div class="row">
					<div class="form-group col-sm-6 col-xs-12">
										<label for="dob">
											<?php _e('Starting Date');?>
										</label>
										<input type="text" name="start" class="form-control input-datepicker" readonly="readonly" value ="<?php echo date('M d, Y', strtotime($course->date)); ?>"/> 
						</div>
						
					<div class="form-group col-sm-2 col-xs-12">
						<label for="retrain_date"><?php _e('Years');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="years" class="form-control require" min="0" max="10"value="<?php echo $course->y; ?>"/>
					</div>
					<div class="form-group col-sm-2 col-xs-12">
						<label for="retrain_date"><?php _e('Months');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="months" class="form-control require" min="0" max = "12"value="<?php echo $course->m; ?>"/>
					</div>
					<div class="form-group col-sm-2 col-xs-12">
						<label for="retrain_date"><?php _e('Days');?>&nbsp;<span class="required">*</span></label>
						<input type="number" name="days" class="form-control require" min="0" max = "31" value="<?php echo $course->d; ?>"/>
					</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_cohort" />
						<input type="hidden" name="course_id" value="<?php echo $course->ID;?>" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Update Cohort');?></button>
					</div>
				</form>
			<?php endif;
			$content = ob_get_clean();
			return $content;
		}
		
		
		
		
		
		
		
				public function edit__course__type__page(){
			ob_start();
			$course__id = $_GET['id'];
				$course = get_tabledata(TBL_COURSE_TYPE,true,array('ID'=> $course__id));
			if( !user_can( 'edit_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$course):
				echo page_not_found('Oops ! Course Details Not Found.','Please go back and check again !');
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
					
					
					<div class="ln_solid"></div>
					<div class="form-group">
						<input type="hidden" name="action" value="update_course_type" />
						<input type="hidden" name="course_id" value="<?php echo $course->ID;?>" />
						<button class="btn btn-success btn-md" type="submit"><?php _e('Update Course');?></button>
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
						<input type="hidden" name="ID" value="<?php _e($course__id);?>" class="form-control require" />
					</div>
					
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
						<select name="admins[]" class="form-control select_single require" data-placeholder="Choose course Trainer(s)" multiple="multiple">
							<?php
							$data = get_tabledata(TBL_USERS,false,array('user_role' => 'course_admin'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
							$option_data = get_option_data($data,array('ID','name'));
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
							$data = get_tabledata(TBL_LOCATIONS,false);
							$option_data = get_option_data($data,array('ID','name'));
							echo get_options_list($option_data, maybe_unserialize($course->location));
							?>
						</select>
					</div>
					
					
									<div class="form-group">
					<label for="date_from"><?php _e('Booking Date From');?>&nbsp;<span class="required">*</span></label>
					<?php $dob = $course->date_from != '' ? date('M d, Y', strtotime(trim($course->date_from))) : ''; ?>
					<input type="text" name="date_from" value= "<?php echo $dob;?>"class="form-control input-datepicker" readonly="readonly"/>
				</div>
				<div class="form-group">
					<label for="date_to"><?php _e('Booking Date To');?>&nbsp;<span class="required">*</span></label>
					<?php $dob = $course->date_to != '' ? date('M d, Y', strtotime(trim($course->date_to))) : ''; ?>
					<input type="text" name="date_to" value="<?php echo $dob;?>" class="form-control input-datepicker" readonly="readonly" />
				</div>
				<div class="form-group">
					<label for="nurses"><?php _e('Trainee(s)');?>&nbsp;</label>
					<select name="nurses[]" class="form-control select_single" data-placeholder="Choose trainee(s)" multiple="multiple">
						<?php
								$data = get_tabledata(TBL_USERS,false,array('user_role' => 'nurse'),'',' ID, CONCAT_WS(" ", first_name , last_name) AS name ');
								$option_data = get_option_data($data,array('ID','name'));
								echo get_options_list($option_data,maybe_unserialize($course->nurses));
								?>
						</select>
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

		
		
		
		
		
		
				public function all__courses__types__page(){
			ob_start();
			$args = array();
			$courses = get_tabledata(TBL_COURSE_TYPE,false,$args);
			if( !user_can('view_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$courses):
				echo page_not_found("Oops! THERE ARE NO NEW courses record found",' ',false);
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
							<td>
								<?php _e($course->course_ID);?>
							</td>							
							<td>
								<?php _e($course->name);?>
							</td>
							<td class="text-center">
								<?php if( user_can('edit_course') ): ?>
								<a href="<?php the_permalink('edit-course-type',array('id' => $course->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_course_type') ): ?>
								<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $course->ID;?>" data-action="delete_course_type"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		public function all__courses__page(){
			ob_start();
			$args = array();
			$courses = get_tabledata(TBL_COURSES,false,$args);
			if( !user_can('view_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$courses):
				echo page_not_found("Oops! THERE ARE NO NEW courses record found",' ',false);
			else:
			?>
		<div class="row custom-filters">
						
			<div class="form-group col-sm-4 col-xs-6">
			<label for="fault-type">Course Type</label>
			<select name="fault_type" class="form-control select_single" tabindex="-1" data-placeholder="Choose Course Type">
				<?php
				$data = get_tabledata(TBL_COURSE_TYPE,false,array(), 'ORDER BY `name` ASC');
				$option_data = get_option_data($data,array('ID','name'));
				echo get_options_list($option_data);
				?>
			</select>
		</div>
			<div class="form-group col-sm-2 col-xs-6 col 2">
					<label for="date_of_fault">
					<?php _e('Fault Date From');?>
					</label>
					<input type="text" name="date_from" class="form-control input-datepicker-today" /> </div>
				<div class="form-group col-sm-2 col-xs-6 col 2">
					<label for="date_of_fault">
					<?php _e('Fault Date To');?>
					</label>
					<input type="text" name="date_to" class="form-control input-datepicker-today" /> </div>
				<div class="col-xs-6 col-sm-2 col-sm-pull-4">
			</div>
		</div>
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
							
							<td>						<label>
							<input type="checkbox" class="js-switch" <?php checked($course->active, 1);?> onClick="javascript:approve_switch(this);" data-id="<?php echo $course->ID;?>" data-action="course_approve_change"/>
						</label></td>
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
									echo ($count < $users_count) ? '' : ', <br> ';
								endforeach; endif;
								?>
							</td>

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
		
		
		
				public function all__cohorts__page(){
			ob_start();
			$args = array();
			$courses = get_tabledata(TBL_COHORTS,false,$args);
			if( !user_can('view_course') ):
				echo page_not_found('Oops ! You are not allowed to view this page.','Please check other pages !');
			elseif(!$courses):
				echo page_not_found("Oops! THERE ARE NO NEW courses record found",' ',false);
			else:
			?>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap datatable-buttons" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><?php _e('Name');?></th>
							<th><?php _e('Cohort Type');?></th>
							<th><?php _e('Starting Period');?></th>
							<th><?php _e('Frequency of Cohort');?></th>
							<th class="text-center"><?php _e('Actions');?></th>
						</tr>
					</thead>
					<tbody>
						<?php if($courses): foreach($courses as $course): ?>
						<tr>
							<td><?php _e($course->name);?></td>
							<td><?php _e($course->type);?></td>
							
							<td><?php echo date('M d,Y',strtotime($course->date));?></td>
							<td><?php echo "Days: ".($course->d)."<br>"."Months: ".($course->m)."<br>"."Years: ".($course->y);?></td>
							<td class="text-center">
								<?php if( user_can('edit_course') ): ?>
								<a href="<?php the_permalink('edit-cohort',array('id' => $course->ID));?>" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i>&nbsp;<?php _e('Edit');?></a>
								<?php endif; ?>
								
								<?php if( user_can('delete_course') ): ?>
								<a href="javascript:void(0)" class="btn btn-danger btn-xs" onclick="javascript:delete_function(this);" data-id="<?php echo $course->ID;?>" data-action="delete_cohort"><i class="fa fa-trash"></i>&nbsp;<?php _e('Delete');?></a>
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
					'course_ID' => $code,
				);

            					$ayyy = get_guid(TBL_COURSES);
			
					$enroll = array();
					if(isset($nurses)){
					foreach($nurses as $nurse){
						$enroll[$nurse] = 0;
						$attendance[$nurse] = 0;	  
					}
					}else{
						$nurses = NULL;
						$attendance = NULL;
					}
            
            

			$bob = get_tabledata(TBL_COURSE_TYPE,true,array('ID'=>$code));
			$names = $bob->course_ID."_".$bob->name."_".$name;
			
					$result = $this->database->insert(TBL_COURSES,
						array(
							'ID' => $ayyy,
							'course_ID' => $code,
							'name' => $names,
							'admins' => $admins,
							'description' => $description,
							'location' => $location,
							'nurses' => $nurses,
							'enroll' => $enroll,
							'attendance' => $attendance,
							'date_from' => date('Y-m-d', strtotime($date_from)),
							'date_to' => date('Y-m-d', strtotime($date_to)),
						)
					);

            //INSERT INTO TBL_CHK
					
					$guid = get_guid(TBL_BOOKINGS);
					$result = $this->database->insert(TBL_BOOKINGS,
						array(
							'ID' => $guid,
							'course_ID' =>$code,
							'course' => $ayyy,
							'nurses' => $nurses,
							'enroll' => $enroll,
							'attendance' => $attendance,
							'created_by' => get_current_user_id(),
							'date_from' => date('Y-m-d', strtotime($date_from)),
							'date_to' => date('Y-m-d', strtotime($date_to)),
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
			return json_encode($return);
		}
		
		//Process functions starts here
		public function add__course__type__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not create course type, Please try again.',
				'reset_form' => 0
			);
			if( user_can('add_course') ):
				$validation_args = array(
					'course_ID' => $code,
				);

				if(is_value_exists(TBL_COURSE_TYPE,$validation_args)):
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
							'notification'=> 'You have successfully created a new course type: ('.$name.').',
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

		
				//Process functions starts here
		public function add__cohort__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not create Cohort, Please try again.',
				'reset_form' => 0
			);
			if( user_can('add_course') ):
				$validation_args = array(
					'name' => $name,
				);

				if(is_value_exists(TBL_COHORTS,$validation_args)):
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
							'date' => date('Y-m-d h:i:s',strtotime($start)),
						'y' => $years,
						'm' => $months,
						'd' => $days,
						)
					);
					if($result):
						$notification_args = array(
							'title' => 'New Cohort created',
							'notification'=> 'You have successfully created a new Cohort ('.$name.').',
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
		
		
		public function update__course__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not update course, Please try again.',
				'reset_form' => 0
			);
			if( user_can('edit_course') ):
			
			if(isset($nurses)){
					$booking = get_tabledata(TBL_BOOKINGS,true,array('course' => $ID));
					$old_enroll = maybe_unserialize($booking->enroll);
					$old_attendance = maybe_unserialize($booking->attendance);
					$enroll = array();
					foreach($nurses as $nurse){
						$enroll[$nurse] = isset($old_enroll[$nurse]) ? $old_enroll[$nurse] : 0;
						$attendance[$nurse] = isset($old_attendance[$nurse]) ? $old_attendance[$nurse] : 0;
					}
					}else{
						$attendance = NULL;
						$nurses = NULL;
						$enroll = NULL;
					}
					
					$result = $this->database->update(TBL_BOOKINGS,
						array(
							'course' => $ID,
							'nurses' => $nurses,
							'enroll' => $enroll,
							'attendance' => $attendance,
							'date_from' => date('Y-m-d', strtotime($date_from)),
							'date_to' => date('Y-m-d', strtotime($date_to)),
						),
						array(
							'course'=> $ID
						)
					);
			
			
					$booking = get_tabledata(TBL_COURSES,true,array('ID' => $ID));
					$old_enroll = maybe_unserialize($booking->enroll);
					$old_attendance = maybe_unserialize($booking->attendance);
					$enroll = array();
					if(isset($nurse)){
					foreach($nurses as $nurse){
						$enroll[$nurse] = isset($old_enroll[$nurse]) ? $old_enroll[$nurse] : 0;
						$attendance[$nurse] = isset($old_attendance[$nurse]) ? $old_attendance[$nurse] : 0;
					}
					}else{
						$attendance = NULL;
						$nurses = NULL;
						$enroll = NULL;
					}
					$result = $this->database->update(TBL_COURSES,
						array(
							'name' => $name,
							'course_ID' => $code,
							'admins' => $admins,
							'description' => $description,
							'location' => $location,
							'nurses' => $nurses,
							'enroll' => $enroll,
							'attendance' => $attendance,
							'date_from' => date('Y-m-d', strtotime($date_from)),
							'date_to' => date('Y-m-d', strtotime($date_to)),
						),
						array(
							'ID'=> $ID
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

			return json_encode($return);
		}
		
		public function update__course__type__process(){
			extract($_POST);
			$return = array(
				'status' => 0,
				'message_heading'=> 'Failed !',
				'message' => 'Could not update course type, Please try again.',
				'reset_form' => 0
			);
			if( user_can('edit_course') ):
				$validation_args = array(
					'course_ID'=> $code,
				);

				if(is_value_exists(TBL_COURSE_TYPE,$validation_args,$course_id)):
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
							'ID'=> $course_id
						)
					);

					if($result):
						$notification_args = array(
							'title' => 'Course updated',
							'notification'=> 'You have successfully updated course type ('.$name.').',
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
				'message_heading'=> 'Failed !',
				'message' => 'Could not update Cohort, Please try again.',
				'reset_form' => 0
			);
			if( user_can('edit_course') ):
				$validation_args = array(
					'name'=> $name,
				);

				if(is_value_exists(TBL_COHORTS,$validation_args,$course_id)):
					$return['status'] = 2;
					$return['message_heading'] = 'Failed !';
					$return['message'] = 'Course name you entered is already exists, please try another name.';
					$return['fields'] = array('name');
				else:
					$result = $this->database->update(TBL_COHORTS,
						array(
							'name' => $name,
							'type' => $type,
							'date' => date('Y-m-d h:i:s',strtotime($start)),
						'y' => $years,
						'm' => $months,
						'd' => $days,
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
		
		public function delete__course__type__process(){
			extract($_POST);
			$id = trim($id);
			if( user_can('delete_course') ):
				$data = get_tabledata(TBL_COURSE_TYPE,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_COURSE_TYPE,$args);
				if($result):
					$notification_args = array(
						'title' => 'Course deleted',
						'notification'=> 'You have successfully deleted ('.$data->name.') course Type.',
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
				$data = get_tabledata(TBL_COHORTS,true,array('ID'=> $id) ) ;
				$args = array('ID'=> $id);
				$result = $this->database->delete(TBL_COHORTS,$args);
				if($result):
					$notification_args = array(
						'title' => 'Course deleted',
						'notification'=> 'You have successfully deleted ('.$data->name.') Cohort.',
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
		
		
		public function activate_course(){
				{
		extract($_POST);
		$id = trim($id);
		$return = array(
			'status' => 0,
			'message_heading'=> 'Failed !',
			'message' => 'Could not update course details, Please try again ',
			'reset_form' => 0
		);

		$centre = get_tabledata(TBL_COURSES, true, array('ID'=> $id) );
		$args = array('ID'=> $id);
		$result = $this->database->update(TBL_COURSES,array('active'=> $status),$args);

		if($result):
		if($status == 0)
		{
			$notification_args = array(
				'title' => 'Centre (' .$centre->name.') is disables now',
				'notification'=> 'You have successfully disabled (' .$centre->name.') centre.',
			);
			$return['message'] = 'You have successfully disabled (' .$centre->name.') centre.';
		}
		else
		{
			$notification_args = array(
				'title' => 'Centre (' .$centre->name.') is approved now',
				'notification'=> 'You have successfully approved (' .$centre->name.') centre.',
			);
			$return['message'] = 'You have successfully approved (' .$centre->name.') centre.';
		}
		add_user_notification($notification_args);
		$return['status'] = 1;
		$return['message_heading'] = 'Success !';
		endif;
		return json_encode($return);
	
		}
		
	}
	}

endif;
?>