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

$wpdb->query($wpdb->prepare("update $t_autoblog_task set
			   group_id = %d			   
			   where group_id = %d",0,$_POST['groupid']));     
$re = $wpdb->query($wpdb->prepare("delete from  $t_autoblog_task_group where id = %d",$_POST['groupid']));
if($re==1){
  $alertSuccess = '<strong>'.__('Delete Success.','autoblog').'</strong>';
}
echo $alertSuccess;