<?php
session_start();
session_destroy();
header('location: /ruko/admin/index.php');
?>