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


$data=array();
$taskName = trim($_POST['taskName']);

$copyId = trim($_POST['copyId']);


if($copyId==0 && $taskName!=''){
  $wpdb->query($wpdb->prepare("insert into $t_autoblog_task (name,group_id) values(%s,%d)",$taskName,$_POST['groupId']));
  
  $id = $wpdb->get_var("SELECT LAST_INSERT_ID()");
  $task = $wpdb->get_row($wpdb->prepare("select t1.id,t1.name,t1.group_id,t1.auto_fetch,t1.running_status,t2.group_name from $t_autoblog_task t1 left join $t_autoblog_task_group t2 on t1.group_id=t2.id where t1.id = %d",$id));
  
  $appendTR=true;
  $isNewTask=true;
  $returnHtml = '';

  include_once 'modules.ajax.task.row.php';
  
  $data['status'] = 1;
  $data['html'] =$returnHtml;
}


elseif( $copyId > 0 && $taskName!=''){
  
  $wpdb->query($wpdb->prepare("insert into $t_autoblog_task (name,group_id,auto_fetch,m_extract,running_status) 
      select %s,%d,auto_fetch,m_extract,running_status from $t_autoblog_task 
	  where id = %d",$taskName,$_POST['groupId'],$copyId));
  
  
  $id = $wpdb->get_var("SELECT LAST_INSERT_ID()");
  $task = $wpdb->get_row($wpdb->prepare("select t1.id,t1.name,t1.group_id,t1.auto_fetch,t1.running_status,t2.group_name from $t_autoblog_task t1 left join $t_autoblog_task_group t2 on t1.group_id=t2.id where t1.id = %d",$id));
  
  $appendTR=true;
  $isNewTask=true;
  $returnHtml = '';

  include_once 'modules.ajax.task.row.php';
  
  $data['status'] = 1;
  $data['html'] =$returnHtml;
  

}else{
  $alertDanger = '<strong>'.__('Please Enter Task Name.','autoblog').'</strong>';

  $data['status'] = 0;
  $data['html'] =$alertDanger;
}

echo json_encode($data);







