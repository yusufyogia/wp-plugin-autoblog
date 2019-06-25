<?php
if (!function_exists('add_action')) {
	$wp_root = '../../../..';
	if (file_exists($wp_root.'/wp-load.php')) {
		require_once($wp_root.'/wp-load.php');
	} else {
		require_once($wp_root.'/wp-config.php');
	}
}
define('WP_USE_THEMES', false);


$re = $wpdb->query($wpdb->prepare("update $t_autoblog_task set in_trash = 1 where id = %d",$_POST['taskid']));
if($re==1){
  $alertSuccess = '<strong>'.__('Trash Success.','autoblog').'</strong>';
}
echo  $alertSuccess; 