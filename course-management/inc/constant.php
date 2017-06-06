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
?>