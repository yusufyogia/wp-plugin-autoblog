<?php

if($appendTR) $returnHtml .= '<tr id="trtask'.$task->id.'">';

$returnHtml .= '<th class="ajaxload" scope="row" ><input type="checkbox" name="ids[]" value="'.$task->id.'"  /></th>';
$returnHtml .= '<td class="ajaxload">';


if(isset($isNewTask)){
   $returnHtml .= '<a href="admin.php?page=autoblog-task-setting&id='.$task->id.'" class="popoverNew" tabindex="0" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="'.__('Add New Task Success','autoblog').'" data-content="'.__('Click the task name for set','autoblog').'" ><span style="font-size:14px;"><strong>'.$task->name.'</strong></span></a>';
}else{

   $returnHtml .= '<a href="admin.php?page=autoblog-task-setting&id='.$task->id.'" ><span style="font-size:14px;"><strong>'.$task->name.'</strong></span></a>';

}



if(($task->running_status)==1){ 



}else{
  $returnHtml .=	'<div class="row-actions">
          <a href="#" class="opt-link" title="'.__('Edit this item inline','autoblog').'" data-toggle="modal" data-target="#qchangeModal" data-taskid="'.$task->id.'" data-taskname="'.$task->name.'" data-groupid="'.$task->group_id.'">'.__('Quick Edit','autoblog').'</a> 
		  |
		  <a href="#" class="opt-link" title="'.__('Copy this item','autoblog').'" data-toggle="modal" data-target="#newTaskModal" data-taskid="'.$task->id.'" data-taskname="'.$task->name.'" data-groupid="'.$task->group_id.'">'.__('Copy','autoblog').'</a>
		  |
		  <a class="opt-link-red" href="#" data-toggle="modal" data-target="#trashModal" data-taskid="'.$task->id.'" data-taskname="'.$task->name.'">'.__('Trash','autoblog').'</a></span> 
		  |
		  <a class="opt-link" id="fetchbnt'.$task->id.'" href="#" data-toggle="modal" data-target="#fetchModal" data-id="'.$task->id.'" data-name="'.$task->name.'">'.__('Fetch Now','autoblog').'</a> 
		 </div>
	   </td>';
}

if(($task->group_id)==0){
  $group_name = '<a href="?page=autoblog-tasks&filterGroup=0" >'.__('Default Group','autoblog').'</a>';
}else{
  $group_name = '<a href="?page=autoblog-tasks&filterGroup='.$task->group_id.'" >'.$task->group_name.'</a>';
}


$returnHtml .= ' <td class="ajaxload">
	   '.$group_name.'
	   </td >';


$returnHtml .= ' <td class="ajaxload">
	    Log
	   </td>';



$returnHtml .= ' <td class="ajaxload">';
if(($task->auto_fetch)==1){ 	 
   $returnHtml .= '<input type="hidden" id="fetchMothod'.$task->id.'"  value="1"/>';
   
   $returnHtml .=  __('Automatically','autoblog'); 
   $returnHtml .= '<div class="row-actions">
		   <a class="opt-link" id="changebnt'.$task->id.'" href="javascript:;" onclick="changeFetchMothod('.$task->id.',0)" data-loading-text="Loading...">'.__('Change','wp-autopost').'</a>
		 </div>';
	 
}else{
	  $returnHtml .= '<input type="hidden" id="fetchMothod'.$task->id.'" value="0"/>';	  
	  $returnHtml .= __('Manually','autoblog');
      $returnHtml .= '<div class="row-actions">
		     <a class="opt-link" id="changebnt'.$task->id.'" href="javascript:;" onclick="changeFetchMothod('.$task->id.',1)" data-loading-text="Loading...">'.__('Change','wp-autopost').'</a>
		   </div>';
} 
$returnHtml .=  '</td>';


if($appendTR) $returnHtml .= '</tr>';