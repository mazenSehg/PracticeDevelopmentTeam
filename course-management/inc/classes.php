<?php 
// if accessed directly than exit
if (!defined('ABSPATH')) exit;

require_once( ABSPATH . CONTENT . '/class/class.user.php');
require_once( ABSPATH . CONTENT . '/class/class.profile.php');
require_once( ABSPATH . CONTENT . '/class/class.settings.php');
require_once( ABSPATH . CONTENT . '/class/class.course.php');
require_once( ABSPATH . CONTENT . '/class/class.booking.php');
require_once( ABSPATH . CONTENT . '/class/class.header.php');
require_once( ABSPATH . CONTENT . '/class/class.footer.php');
$User = new User();
$Profile = new Profile();
$Settings = new Settings();
$Course = new Course();
$Booking = new Booking();
$Header = new Header();
$Footer = new Footer();
?>