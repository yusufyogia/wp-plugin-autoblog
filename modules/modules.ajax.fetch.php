<?php
header("Content-Encoding: none\r\n"); 
/*
if (!function_exists('add_action')) {
	$wp_root = '../../../..';
	if (file_exists($wp_root.'/wp-load.php')) {
		require_once($wp_root.'/wp-load.php');
	} else {
		require_once($wp_root.'/wp-config.php');
	}
}

define('WP_USE_THEMES', false);
//require('wp-load.php');
*/


//echo 'AAAA:'.$_POST['qtaskid'].'<br/>';
//echo 'BBBB:'.$_POST['taskname'].'<br/>';



//header( 'Content-type: text/html; charset=utf-8' );


echo 'TaskId:'.$_GET['id'].'<br/>';

for($i=0;$i<5;$i++){
 echo str_repeat(" ",4096);
 echo $i;
 //ob_flush(); 
 flush();//��ÿ��1s���һ�����֣����ʹ��ob_flush()���ȴ�5sһ�����

 sleep(1);
} 


?>