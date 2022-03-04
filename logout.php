<?php
include 'configstu.php';
session_start();
session_unset();
session_destroy();
header("Location:http://localhost/pro/studentpanel/studentlogin.php");
?>