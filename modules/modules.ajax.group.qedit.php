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


$newGroupName = trim($_POST['groupname']);
$data=array();
if($newGroupName!=''&&$newGroupName!=null){
  $wpdb->query($wpdb->prepare("update $t_autoblog_task_group set
			   group_name = %s			   
			   where id = %d",$newGroupName,$_POST['groupid']));
  $group = $wpdb->get_row($wpdb->prepare("select * from $t_autoblog_task_group where id = %d",$_POST['groupid']));
  if(isset($_POST['taskcount'])){
    $taskcount = $_POST['taskcount'];
  }else{
    $taskcount = 0;
  }
  $appendTR=false;
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
