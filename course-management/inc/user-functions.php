<?php 
// if accessed directly than exit
if (!defined('ABSPATH')) exit;

if ( !function_exists('get_roles') ) :
	function get_roles(){
		$data = array(
			'admin' => 'Admin',
			'course_admin' => 'Trainer',
			'nurse' => 'Trainee'
		);
		return $data;
	}
endif;

if ( !function_exists('set_current_user') ) :
	function set_current_user($id, $email = '', $password = '') {
		if($id == null && $id == ''){
			return false;
		}else{
			$_SESSION['current_user_id'] = $id;
		}		
		if($email != '')
			$_SESSION['current_user_email'] = $email;			
		if($password != '')
			$_SESSION['current_user_password'] = $password;
	}
endif;

if ( !function_exists('remove_current_user') ) :
	function remove_current_user() {
		$_SESSION['current_user_email'] = $_SESSION['current_user_id'] = $_SESSION['current_user_password'] = '';
		session_destroy();
	}
endif;

if ( !function_exists('get_current_user') ) :
	function get_current_user() {
		$current_user = get_currentuserinfo();
		return $current_user;
	}
endif;

if ( !function_exists('get_currentuserinfo') ) :
	function get_currentuserinfo() {
		global $db;
		
		if( !is_user_logged_in() ) return false;
		
		$id = $_SESSION['current_user_id'];
		$email = $_SESSION['current_user_email'];
		$password = $_SESSION['current_user_password'];
		if($id == '') return false;
		
		if($email != '' & $password != ''){
			$current_user = $db->get_row( sprintf("SELECT * FROM ".TBL_USERS." WHERE `user_email` = '%s' AND `user_pass` = '%s' ",$email,$password) ) ;
			if(!empty($current_user)){
				return $current_user;
			}else{
				return false;
			}
		}else{
			$current_user = get_userdata($id);
			if(!empty($current_user)){
				return $current_user;
			}else{
				return false;
			}
		}
	}
endif;

if ( !function_exists('get_current_user_id') ) :
	function get_current_user_id() {
		if(is_user_logged_in()){
			$user = get_currentuserinfo();
			return $user->ID;
		}
		return false;
	}
endif;

if ( !function_exists('is_user_logged_in') ) :
	function is_user_logged_in(){
		global $con;
		if(isset($_SESSION['current_user_id']) && $_SESSION['current_user_id'] != ''):
			$user = get_user_by('id',$_SESSION['current_user_id']);
			if($user):
				set_current_user($user->ID,$user->user_email,$user->user_pass);
				return true;
			else:
				remove_current_user();
				return false;		
			endif;
		else:	
			return false;
		endif;		
	}
endif;

if ( !function_exists('get_userdata') ) :
	function get_userdata( $user_id ) {
		return get_user_by( 'id', $user_id );
	}
endif;

if ( !function_exists('get_user_by') ) :
	function get_user_by( $field, $value ) {
		$userdata = get_data_by( $field, $value );
		if ( !$userdata )
			return false;
		return $userdata ;
	}
endif;

if ( !function_exists('get_data_by') ) :
	function get_data_by( $field, $value ) {
		global $db;
		// 'ID' is an alias of 'id'.
		if ( 'ID' === $field ) {
			$field = 'id';
		}

		if ( 'id' == $field ) {			
			if ( ! is_numeric( $value ) )
				return false;
			$value = $value;
			if ( $value < 1 )
				return false;
		} else {
			$value = trim( $value );
		}

		if ( !$value )
			return false;

		switch ( $field ) {
			case 'id':
				$user_id = $value;
				$db_field = 'ID';
				break;
			case 'email':
				$db_field = 'user_email';
				break;
			case 'username':
				$db_field = 'username';
				break;
			case 'login':
				/*$value = sanitize_user( $value );*/
				$db_field = 'user_login';
				break;
			default:
				return false;
		}
		if ( !$user = $db->get_row( sprintf("SELECT * FROM ".TBL_USERS." WHERE `$db_field` = '%s'", $value) ) )
			return false;
			
		return $user;
	}
endif;

if ( !function_exists('email_exists') ) :
	function email_exists( $email ) {
		if( $user = get_user_by( 'email', $email) ) {
			return $user->ID;
		}
		return false;
	}
endif;

if ( !function_exists('username_exists') ) :
	function username_exists( $username ) {
		if ( $user = get_user_by( 'login', $username ) ) {
			return $user->ID;
		}
		return false;
	}
endif;


if ( !function_exists('is_user_active') ) :
	function is_user_active($uid){
		if($user = get_user_by('id',$uid)):
			if($user->user_status == 1):
				return true;
			else:
				return false;
			endif;
		endif;
		
		return false;
	}
endif;

if ( !function_exists('is_admin') ) :
	function is_admin(){
		if(get_current_user_role() == 'admin'){
			return true;
		}else{
			return false;
		}
	}
endif;

if ( !function_exists('get_current_user_role') ) :
	function get_current_user_role(){
		if($user = get_currentuserinfo()):
			return $user->user_role;
		else:
			return false;
		endif;
	}
endif;

if ( !function_exists('get_current_user_name') ) :
	function get_current_user_name(){
		
		if($user = get_currentuserinfo())
			return $user->first_name.' '.$user->last_name;
			
		return false;
	}
endif;

if ( !function_exists('get_user_name') ) :
	function get_user_name( $user = null ){
		if($user == null || $user == '')
			return false;
			
		if(is_object($user))
			return $user->first_name.' '.$user->last_name;
		
		if($user_data = get_userdata($user))
			return $user_data->first_name.' '.$user_data->last_name;
			
		return false;
	}
endif;

if ( !function_exists('get_current_user_hospital') ) :
	function get_current_user_hospital(){
		
		if($user = get_currentuserinfo())
			return $user->hospital;
			
		return false;
	}
endif;

if ( !function_exists('get_current_user_profile_image') ) :
	function get_current_user_profile_image($site_path = true){
		global $con;
		
		$uid = get_current_user_id();
		$profile_pic = get_user_meta($uid,'profile_img',true);
		if($profile_pic != ''):	
			$profile_pic = site_url().$profile_pic;
		else:
			$profile_pic = IMAGE_URL.'user.png';
		endif;
		
		if(!$site_path){
			$profile_pic = str_replace(site_url(),'',$profile_pic);
		}
		return $profile_pic;
	}
endif;

if ( !function_exists('get_user_profile_image') ) :
	function get_user_profile_image($uid, $site_path = true){
		global $con;
		
		$profile_pic = get_user_meta($uid,'profile_img',true);
		if($profile_pic != ''):	
			$profile_pic = site_url().$profile_pic;
		else:
			$profile_pic = IMAGE_URL.'user.png';
		endif;
		
		if(!$site_path){
			$profile_pic = str_replace(site_url(),'',$profile_pic);
			
		}
		return $profile_pic;
	}
endif;

if ( !function_exists('add_user_meta') ) :
	function add_user_meta($user_id, $meta_key, $meta_value) {
		global $db;
		
		if ( ! $meta_key || !is_numeric( $user_id ) ) {
			return false;
		}

		$user_id = $user_id;
		if ( ! $user_id) {
			return false;
		}
		
		if($db->get_var( sprintf("SELECT COUNT(*) FROM ".TBL_USERMETA." WHERE meta_key = %s AND `user_id` = %d",$meta_key, $user_id ) ) )
			return false;
		
		$meta_value = maybe_serialize( $meta_value );
		
		$result = $db->insert( TBL_USERMETA, array(
			'user_id' => $user_id,
			'meta_key' => $meta_key,
			'meta_value' => maybe_serialize($meta_value)
		) );

		if ( ! $result )
			return false;

		return $result;
	}
endif;

if ( !function_exists('delete_user_meta') ) :
	function delete_user_meta($user_id, $meta_key) {
		global $db;
		
		if ( ! $meta_key || !is_numeric( $user_id ) ) {
			return false;
		}

		$user_id = $user_id;
		if ( ! $user_id) {
			return false;
		}
		
		$row = get_user_meta($user_id, $meta_key);
		
		if(empty($row)) return false;
		
		$result = $db->delete( TBL_USERMETA, array(
				'user_id' => $user_id,
				'meta_key' => $meta_key,
			)
		);

		if ( ! $result )
			return false;
			
		return true;
	}
endif;

if ( !function_exists('get_user_meta') ) :
	function get_user_meta($user_id, $key = '', $single = true) {
		global $db;
		
		if ( !is_numeric( $user_id ) ) {
			return false;
		}

		$user_id = $user_id;
		if ( ! $user_id) {
			return false;
		}
		
		$query = (sprintf("SELECT * FROM ".TBL_USERMETA." WHERE `user_id` = '%s' ",$user_id ) );
		if($key != '')
			$query .= (" AND `meta_key` = '$key' " );
			
		$row = $db->get_row( $query, ARRAY_A);
		
		if ( !empty($row) ) {
			if ( $single )
				return maybe_unserialize( $row['meta_value'] );
			else
				return array_map('maybe_unserialize', $row);
		}

		if ($single)
			return '';
		else
			return array();
	}
endif;

if ( !function_exists('update_user_meta') ) :
	function update_user_meta($user_id, $meta_key, $meta_value) {
		global $db;
		
		if ( ! $meta_key || !is_numeric( $user_id ) ) {
			return false;
		}

		$user_id = $user_id;
		if ( ! $user_id) {
			return false;
		}
		
		$meta_value = maybe_serialize( $meta_value );
		
		$meta_ids = $db->get_row( sprintf("SELECT * FROM ".TBL_USERMETA." WHERE meta_key = '%s' AND `user_id` = '%s'", $meta_key, $user_id ) );
		if ( empty( $meta_ids ) ) {
			return add_user_meta($user_id, $meta_key, maybe_serialize($meta_value));
		}
		
		$result = $db->update( TBL_USERMETA, array(
				'meta_value' => maybe_serialize($meta_value)
			),
			array(
				'user_id' => $user_id,
				'meta_key' => $meta_key,
			)
		);

		if ( ! $result )
			return false;
			
		return $result;
	}
endif;

if ( !function_exists('is_value_exists') ) :
	function is_value_exists($table,$conditions,$id = ''){
		global $db;
		foreach($conditions as $key => $value):
			$condition[] = "`" . $key . "` = '".maybe_serialize($value)."'";
		endforeach;
		
		$query = "SELECT * FROM $table WHERE ".implode("AND",$condition);
		
		if($id != ''){
			$query .= " AND `ID` != '$id' ";
		}
		$result = $db->get_results($query);
		if($result){
			return true;
		}else{
			return false;
		}
	}
endif;

if ( !function_exists('all_users_capabilities') ) :
	function all_users_capabilities(){
		$users_capabilities = array(
			'view_user' => 'Can View Users',
			'add_user' => 'Can Add Users',
			'edit_user' => 'Can Edit Users',
			'view_course' => 'Can View Courses',
			'add_course' => 'Can Add Courses',
			'edit_course' => 'Can Edit Courses',
			'delete_course' => 'Can Delete Courses',
			'view_location' => 'Can View Locations',
			'add_location' => 'Can Add Locations',
			'edit_location' => 'Can Edit Locations',
			
			'view_work_area' => 'Can View Work Area',
			'add_work_area' => 'Can Add Work Area',
			'edit_work_area' => 'Can Edit Work Area',
			
			'delete_location' => 'Can Delete Locations',
			'view_booking' => 'Can View Bookings',
			'add_booking' => 'Can Add Bookings',
			'edit_booking' => 'Can Edit Bookings',
			'delete_booking' => 'Can Delete Bookings',
		);
		return $users_capabilities;
	}
endif;

if ( !function_exists('user_can') ) :
	function user_can($key = ''){
		
		if( !is_user_logged_in() ) return false;
		
		if( is_admin() ) return true;
		
		if($key == '' || $key == NULL) return false;

		$users_capabilities = unserialize(get_option('users_capabilities'));
		
		if($users_capabilities[get_current_user_role()][$key] == 1) return true;
		
		return false;
	}
endif;

if ( !function_exists('can_access') ) :
	function can_access($key = '', $id = ''){
		global $db;
		
		if( is_admin() ) return true;
		
		if($key == '' || $key == NULL || $id == '' || $id == NULL) return false;
		
		$current_user_hospital = get_current_user_hospital();
		
		switch($key){
			case 'hospital':
					$data = get_tabledata(TBL_HOSPITALS, true, array('ID' => $id));
					if($data):
						return ($data->ID == $current_user_hospital) ? true : false;
					else:
						return false;
					endif;
				break;
				
			case 'room':
					$room = get_tabledata(TBL_ROOMS, true, array('ID' => $id));
					if($room):
						return ($room->hospital == $current_user_hospital) ? true : false;
					else:
						return false;
					endif;
				break;
			
			case 'trial':
					$trial = get_tabledata(TBL_TRIALS, true, array('ID' => $id));
					if($trial):
						return ($trial->hospital == $current_user_hospital) ? true : false;
					else:
						return false;
					endif;
				break;
				
			case 'trial_type':
					$trial_type = get_tabledata(TBL_TRIAL_TYPES, true, array('ID' => $id));
					if($trial_type):
						return ($trial_type->hospital == $current_user_hospital) ? true : false;
					else:
						return false;
					endif;
				break;
				
			case 'treatment':
					$treatment = get_tabledata(TBL_TREATMENTS, true, array('ID' => $id));
					if($treatment):
						return ($treatment->hospital == $current_user_hospital) ? true : false;
					else:
						return false;
					endif;
				break;
			
			case 'clinic':
					$clinic = get_tabledata(TBL_CLINICS, true, array('ID' => $id));
					if($clinic):
						return ($clinic->hospital == $current_user_hospital) ? true : false;
					else:
						return false;
					endif;
				break;
				
			default:
					return false;
				break;
		}
		
		return false;
	}
endif;
if ( !function_exists('set_password') ) :
	function set_password($password, $id = null){
		if(!$id) {
			$id = get_current_user_id();
		}
		$row = get_userdata($id);
		$salt = base64_decode($row->{'user_salt'});
		$temp = hash('SHA256', encrypt($password, $salt));
		return $temp;
	}
endif;

if ( !function_exists('check_password') ) :
	function check_password($password,$user_id){
		global $db;
		if ( !$user = get_user_by( 'id', $user_id ) ) {
			return false;
		}
		$password = set_password($password, $user_id);
		if($user->user_pass == $password) {
			return true;
		} else {
			return false;
		}
	}
endif;

if(!function_exists('encrypt')):
	function encrypt($str, $iv = 'null'){
		$key = "supersecretkey00"; # Change this
		if($iv == 'null') {
			$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		}
		$str = pad($str);
		return chunk_split(base64_encode($iv . mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_CBC, $iv)));
	}
endif;

if(!function_exists('generateSalt')):
	function generateSalt() {
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		return $iv;
	}
endif;

if(!function_exists('encrypt_salt')):
	function encrypt_salt($str, $iv) {
		$key = "supersecretkey00"; # Change this
		$str = pad($str);
		return chunk_split(base64_encode($iv . mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_CBC, $iv)));
	}
endif;

if(!function_exists('decrypt')):
	function decrypt($str){
		$str = base64_decode($str);
		$key = "supersecretkey00"; # Change this
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
		$iv = substr($str, 0, $iv_size);
		$str = substr($str, $iv_size);
		$str = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_CBC, $iv);
		// remove padding
		return unpad($str);
	}
endif;

if(!function_exists('encrypt_const')):
	function encrypt_const($str){
		if(strlen($str) == 0) {
			throw new Exception("Attempted to encrypt a 0 length string!");
		}
		$key = "supersecretkey00"; # Change this
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
		$iv = '9xh8' .substr($str, 0, 1) . 'a0801kf84zp';
		$str = pad($str);
		return chunk_split(base64_encode($iv . mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_CBC, $iv)));
	}
endif;

if(!function_exists('pad')):
	function pad($str) {
		$padvals = array(0 => 0x01);
		$blocksize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
		$length = strlen($str);
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
		$paddingToAdd = $blocksize - ($length % $blocksize);
		$str = $str . str_repeat(chr($paddingToAdd), $paddingToAdd);
		return $str;
	}
endif;

if(!function_exists('unpad')):
	function unpad($str) {
		$bytes = unpack('C*', $str);
		$length = count($bytes);
		$numToRemove = $bytes[$length - 1];
		$bytes = array_splice($bytes, 0, $length - $numToRemove);
		$response = '';
		foreach ($bytes as $byte) {
			$response .= pack('C*', $byte);
		}
		return $response;
	}
endif;
?>