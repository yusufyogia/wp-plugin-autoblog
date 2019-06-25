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



$newGroupName = trim($_POST['newGroupName']);

$data=array();

if($newGroupName!=''&&$newGroupName!=null){
  $wpdb->query($wpdb->prepare("insert into $t_autoblog_task_group (group_name) values(%s)",$newGroupName)); 
  $id = $wpdb->get_var("SELECT LAST_INSERT_ID()");
  $group = $wpdb->get_row($wpdb->prepare("select * from $t_autoblog_task_group where id = %d",$id));
  
  $taskcount = 0;

  $appendTR=true;
  $isNewGroup=true;
  $returnHtml = '';

  include_once 'modules.ajax.group.row.php';
  
  $data['status'] = 1;
  $data['html'] =$returnHtml;
  
}else{
  $alertDanger = '<strong>'.__('Please Enter Group Name.','autoblog').'</strong>';
  $data['status'] = 0;
  $data['html'] =$alertDanger;
}


echo json_encode($data);


