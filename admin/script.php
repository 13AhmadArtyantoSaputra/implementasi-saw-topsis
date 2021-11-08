<?php
error_reporting(0);
session_start();
include_once ($_SERVER['DOCUMENT_ROOT']."/ruko/includes/class.inc.php");
$jc = new jcore();
switch($_GET['page']){
case "login":
	switch($_GET['action']){
	case "submit":
		if($jc->cekUser($_POST['username'],$_POST['userpass'])>0){
			$jc->gotox("wait.php");
		}else{
		    $jc->alert('Username atau Password Salah');
			$jc->gotox("login.php");
		}
	break;
	}
break;
}

if (!isset($_SESSION["login"])) {
	session_destroy();
}
?>
