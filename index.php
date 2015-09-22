<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
if($deviceType == 'phone'){
	include 'index_phone.php';
}else{
	include 'index_tablet.php';
}
?>