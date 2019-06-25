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
			   auto_fetch = %d 
			   where id = %d",$_POST['fetchMethod'],$_POST['id']));


$task = $wpdb->get_row($wpdb->prepare("select t1.id,t1.name,t1.group_id,t1.auto_fetch,t1.running_status,t2.group_name from $t_autoblog_task t1 left join $t_autoblog_task_group t2 on t1.group_id=t2.id where t1.id = %d",$_POST['id']));


$appendTR=false;
$returnHtml = '';

include_once 'modules.ajax.task.row.php';

echo $returnHtml;
