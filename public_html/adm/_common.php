<?php
define('G5_IS_ADMIN', true);
include_once ('../common.php');
include_once(G5_ADMIN_PATH.'/admin.lib.php');

if( isset($token) ){
    $token = @htmlspecialchars(strip_tags($token), ENT_QUOTES);
}

function headMenuCompanyIP()
{
	if ($_SERVER['REMOTE_ADDR'] == "182.227.139.77" || $_SERVER['REMOTE_ADDR'] == "220.79.167.35"){
		return true;
	}else{
		return false;
	}
}

run_event('admin_common');