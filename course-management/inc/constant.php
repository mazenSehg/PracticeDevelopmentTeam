<?php
// define site details
global $db;

define( 'INC_URL', site_url() . '/' . INC );
define( 'CONTENT_URL', site_url() . '/' . CONTENT );
define( 'CSS_URL', site_url() . '/' . CONTENT .'/assets/css/' );
define( 'JS_URL', site_url() . '/' . CONTENT .'/assets/js/' );
define( 'IMAGE_URL', site_url() . '/' . CONTENT .'/assets/img/' );
define( 'PROCESS_URL', site_url() . '/' . INC .'/process.php' );

define( 'BLOG_NAME', 'Fault Management' );
define( 'ADMIN_EMAIL', 'info@prospectstrails.com' );
define( 'NO_REPLY', 'no-reply@prospectstrails.com' );

define( 'TBL_USERS', $db->prefix. 'users' );
define( 'TBL_USERMETA', $db->prefix. 'usermeta' );
define( 'TBL_REMINDERS', $db->prefix.'reminders');
define( 'TBL_OPTION', $db->prefix. 'options' );
define( 'TBL_ACCESS_LOG', $db->prefix. 'access_log' );
define( 'TBL_NOTIFICATIONS', $db->prefix. 'notifications' );
define( 'TBL_COURSES', $db->prefix. 'courses' );
define( 'TBL_BOOKINGS', $db->prefix. 'bookings' );
define( 'TBL_PENDING_BOOKINGS', $db->prefix. 'pending_bookings' );
define( 'TBL_DESIGNATIONS', $db->prefix. 'designations' );
define( 'TBL_LOCATIONS', $db->prefix. 'locations' );
define( 'TBL_WORKS', $db->prefix. 'work_area' );
define( 'TBL_INFO', $db->prefix. 'user_info' );
define( 'TBL_NOTES', $db->prefix. 'notes' );
define( 'TBL_COHORTS', $db->prefix. 'cohort' );
define( 'TBL_COHORTS_EXT', $db->prefix. 'cohort_ext' );
define( 'TBL_CHK', $db->prefix. 'course_user' );
define( 'TBL_RULES', $db->prefix. 'rules' );
define( 'TBL_COURSE_TYPE', $db->prefix. 'course_types' );
define( 'TBL_ALERT', $db->prefix. 'alert' );
define( 'TBL_C_SET', $db->prefix. 'course_settings');
define( 'TBL_PROG', $db->prefix. 'user_progress');
define( 'TBL_REMOVED_USERS', $db->prefix. 'removed_users');
define( 'TBL_MENTORS', $db->prefix. 'mentor_teach');
define( 'TBL_TEMPLATES', $db->prefix. 'templates');


/*============ SMTP OPTIONS ============*/
define('SMTP_ENABLE', true);
//define('SMTP_MAILER', 'smtp');
/*define('SMTP_HOST', 'smtp.live.com');
define('SMTP_PORT', 25);
define('SMTP_AUTH', true );
define('SMTP_SECURE', 'tls');
define('SMTP_USER', '');
define('SMTP_PASS', '');*/

define('SMTP_HOST', 'smtp.mailtrap.io');
define('SMTP_PORT', 2525);
define('SMTP_AUTH', true );
define('SMTP_SECURE', 'tls');
define('SMTP_USER', '86e3252dc9624d');
define('SMTP_PASS', '12c85d595f41fa');

?>
