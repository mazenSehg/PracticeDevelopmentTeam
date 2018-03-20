<?php
if( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

if( file_exists( ABSPATH . 'config.php') )
	require_once( ABSPATH . 'config.php' );

if( file_exists( ABSPATH . INC .  '/functions.php') )
	require_once( ABSPATH . INC . '/functions.php' );

//Initialize DB
require_db();

//Call the all constant
require_once( ABSPATH . INC . '/constant.php');

//Call the all global classes
require_once( ABSPATH . CONTENT . '/class/class.template.php');
require_once( ABSPATH . CONTENT . '/class/class.designation.php');
require_once( ABSPATH . CONTENT . '/class/class.user.php');
require_once( ABSPATH . CONTENT . '/class/class.profile.php');
require_once( ABSPATH . CONTENT . '/class/class.settings.php');
require_once( ABSPATH . CONTENT . '/class/class.course.php');
require_once( ABSPATH . CONTENT . '/class/class.location.php');
require_once( ABSPATH . CONTENT . '/class/class.booking.php');
require_once( ABSPATH . CONTENT . '/class/class.pending-bookings.php');
require_once( ABSPATH . CONTENT . '/class/class.header.php');
require_once( ABSPATH . CONTENT . '/class/class.footer.php');


if(IS_PDT){
$db->update(TBL_OPTION,array('option_value'=>'PDT'),array('option_name'=>'site_name'));
$db->update(TBL_OPTION,array('option_value'=>'Professional Development Tracker'),array('option_name'=>'site_description'));
}else{
$db->update(TBL_OPTION,array('option_value'=>'Resus'),array('option_name'=>'site_name'));
$db->update(TBL_OPTION,array('option_value'=>'Resusitation Description'),array('option_name'=>'site_description'));
}
?>
