<?php
session_start();
require_once('load.php');
$uri = site_url();
$uri .= (is_user_logged_in()) ? '/dashboard/' : '/login/';
header("location:".$uri);
die();
?>