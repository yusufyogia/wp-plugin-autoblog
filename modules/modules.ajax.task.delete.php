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


$re = $wpdb->query($wpdb->prepare("delete from $t_autoblog_task where id = %d",$_POST['taskid']));
if($re==1){
  $alertSuccess = '<strong>'.__('Delete Success.','autoblog').'</strong>';
}
echo  $alertSuccess; 