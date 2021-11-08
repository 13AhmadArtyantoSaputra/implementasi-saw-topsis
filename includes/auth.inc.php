<?php
error_reporting(0);
include_once $_SERVER['DOCUMENT_ROOT']."/ruko/includes/class.inc.php";
$auth = new jcore();
$ok = $auth->ceklogin();
if(!$ok){
	header('location: /ruko/admin/login.php');
	exit;
}
?>