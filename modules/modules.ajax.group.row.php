<?php

if($appendTR)$returnHtml .= '<tr id="trgroup'.$group->id.'">';

$returnHtml .= '<th class="ajaxload" scope="row" ><input type="checkbox" name="ids[]" value="'.$group->id.'"  /></th>';
$returnHtml .= '<td class="ajaxload">';

if(isset($isNewGroup)){
   $returnHtml .= '<a class="popoverNew normal-font" tabindex="0" role="button" data-toggle="tooltip" data-placement="right" data-trigger="focus" title="'.__('Add New Group Success','autoblog').'">';
}	   

$returnHtml .=	'<strong>'.$group->group_name.'</strong>';


if(isset($isNewGroup)){
  $returnHtml .= '</a>';
}

$returnHtml .=   '<div class="row-actions">
          <a href="#" class="opt-link" title="'.__('Edit this item inline','autoblog').'" data-toggle="modal" data-target="#qchangeModal"  data-groupid="'.$group->id.'"  data-groupname="'.$group->group_name.'" data-taskcount="'.$taskcount.'">'.__('Edit','autoblog').'</a> |
		  <a class="opt-link-red" href="#" data-toggle="modal" data-target="#deleteModal" data-groupid="'.$group->id.'"  data-groupname="'.$group->group_name.'">'.__('Delete','autoblog').'</a></span>
		</div>
	  </td>';
$returnHtml .= ' <td class="ajaxload">
	    '.$taskcount.'
	   </td >';
if($appendTR)$returnHtml .= '</tr>';