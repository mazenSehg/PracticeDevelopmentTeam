<?php
// define site details
global $db;

define( 'INC_URL' , site_url() . '/' . INC );
define( 'CONTENT_URL' , site_url() . '/' . CONTENT );
define( 'CSS_URL' , site_url() . '/' . CONTENT .'/assets/css/' );
define( 'JS_URL' , site_url() . '/' . CONTENT .'/assets/js/' );
define( 'IMAGE_URL' , site_url() . '/' . CONTENT .'/assets/img/' );
define( 'PROCESS_URL' , site_url() . '/' . INC .'/process.php' );

define( 'BLOG_NAME' ,'Fault Management' );
define( 'ADMIN_EMAIL' ,'info@prospectstrails.com' );
define( 'NO_REPLY' ,'no-reply@prospectstrails.com' );

define( 'TBL_USERS' , $db->prefix. 'users' );
define( 'TBL_USERMETA' , $db->prefix. 'usermeta' );
define( 'TBL_OPTION' , $db->prefix. 'options' );
define( 'TBL_ACCESS_LOG' , $db->prefix. 'access_log' );
define( 'TBL_NOTIFICATIONS' , $db->prefix. 'notifications' );
define( 'TBL_COURSES' , $db->prefix. 'courses' );
define( 'TBL_BOOKINGS' , $db->prefix. 'bookings' );
define( 'TBL_DESIGNATIONS' , $db->prefix. 'designations' );
define( 'TBL_LOCATIONS' , $db->prefix. 'locations' );
define( 'TBL_WORKS' , $db->prefix. 'work_area' );
define( 'TBL_INFO' , $db->prefix. 'user_info' );
define( 'TBL_NOTES' , $db->prefix. 'notes' );
define( 'TBL_COHORTS' , $db->prefix. 'cohort' );
define( 'TBL_COHORTS_EXT' , $db->prefix. 'cohort_ext' );
?>