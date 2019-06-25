<?php
global $wpdb; global $S0680UDT9036K4173389KRD3W2U160D17NL37GLQJQV659BMHQ42HXEO9I1U449QSQA9X356S869M6792ZXC0D3V70W3B81744J34RLI0R171585DC640CB4D004B6702C0AC600324128,$M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650,$A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526; ?>

<div class="wrap">
 <div class="icon32" id="icon-wp-autopost"><br/></div>


 <div style="margin:20px;"></div>

<?php
@$O00T0S92I7I38DP8U2I3270Q7E72526WHECEEG5F9W14F4X9WE4V18634W87LPJL7N6K1699N87AJ7F0F89501C432F61C9A14E0774113B72CE5670 = $_REQUEST['saction']; switch($O00T0S92I7I38DP8U2I3270Q7E72526WHECEEG5F9W14F4X9WE4V18634W87LPJL7N6K1699N87AJ7F0F89501C432F61C9A14E0774113B72CE5670){ case 'changePerPage': $IITA77O9DDF6Q03H5N496G5EN1B3GSJ94NH8Q81NW03T1YI8640J8663775WHAJEAE960237Y1Z54BEX23LZ7Z671208TJNE9474W6Y085X6K7041CIA26ZUG9X2GA41329DA45802A46FD5AC8AE67646B0FEE57695 = get_option('wp_autoblog_per_page'); $IITA77O9DDF6Q03H5N496G5EN1B3GSJ94NH8Q81NW03T1YI8640J8663775WHAJEAE960237Y1Z54BEX23LZ7Z671208TJNE9474W6Y085X6K7041CIA26ZUG9X2GA41329DA45802A46FD5AC8AE67646B0FEE57695['group'] = $_POST['groupPerPage']; update_option('wp_autoblog_per_page',$IITA77O9DDF6Q03H5N496G5EN1B3GSJ94NH8Q81NW03T1YI8640J8663775WHAJEAE960237Y1Z54BEX23LZ7Z671208TJNE9474W6Y085X6K7041CIA26ZUG9X2GA41329DA45802A46FD5AC8AE67646B0FEE57695); break; case 'bulkDelete': $W19TT74KQSQ0VV1242E7O5Z7HIT983121S3102C790Q50I1G7ZLY9BT5BF516925BB37A8544C8EE19A24E15C054307 = $_POST['ids']; foreach($W19TT74KQSQ0VV1242E7O5Z7HIT983121S3102C790Q50I1G7ZLY9BT5BF516925BB37A8544C8EE19A24E15C054307 as $UX23109CUR0533GS17LRZD529J2ZWCHO09002W1T725IJPO56DDST62H412N72428BJ9B80BB7740288FDA1F201890375A60C8F8485){ $wpdb->query($wpdb->prepare("update $M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650 set
			   group_id = %d			   
			   where group_id = %d",0,$UX23109CUR0533GS17LRZD529J2ZWCHO09002W1T725IJPO56DDST62H412N72428BJ9B80BB7740288FDA1F201890375A60C8F8485)); $wpdb->query($wpdb->prepare("delete from  $A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526 where id = %d",$UX23109CUR0533GS17LRZD529J2ZWCHO09002W1T725IJPO56DDST62H412N72428BJ9B80BB7740288FDA1F201890375A60C8F8485)); } $A03BQ2R4N02GV3H341014M4UM6U9VL5X1K4826U6CG73Y2RWQ34U6IWGLU91BE8701J5SV131N635W619HWLC522Z7IW8HR5GPG0L48480YE78749BC91A6E08788BEFC0344F868459DA860320 = '<strong>'.__('Delete Success.','autoblog').'</strong>'; break; } ?>


<?php  if(!isset($_REQUEST['paged'])){ $H81O4JKHV63L122J642VC96C50NWTCOV9A4EH3VLAQM843HFDC546382E92E8D476D33132FBB72DF79561 = 1; } else { $H81O4JKHV63L122J642VC96C50NWTCOV9A4EH3VLAQM843HFDC546382E92E8D476D33132FBB72DF79561 = $_REQUEST['paged']; } $IITA77O9DDF6Q03H5N496G5EN1B3GSJ94NH8Q81NW03T1YI8640J8663775WHAJEAE960237Y1Z54BEX23LZ7Z671208TJNE9474W6Y085X6K7041CIA26ZUG9X2GA41329DA45802A46FD5AC8AE67646B0FEE57695 = get_option('wp_autoblog_per_page'); if($IITA77O9DDF6Q03H5N496G5EN1B3GSJ94NH8Q81NW03T1YI8640J8663775WHAJEAE960237Y1Z54BEX23LZ7Z671208TJNE9474W6Y085X6K7041CIA26ZUG9X2GA41329DA45802A46FD5AC8AE67646B0FEE57695['group']==null) $XEZ238R681IN449S3F235124382EE2W43B3N7FZX44DA448293179E9A897ECDE61E86457499208=10; else $XEZ238R681IN449S3F235124382EE2W43B3N7FZX44DA448293179E9A897ECDE61E86457499208=$IITA77O9DDF6Q03H5N496G5EN1B3GSJ94NH8Q81NW03T1YI8640J8663775WHAJEAE960237Y1Z54BEX23LZ7Z671208TJNE9474W6Y085X6K7041CIA26ZUG9X2GA41329DA45802A46FD5AC8AE67646B0FEE57695['group']; $S1O6E9Q7XQ7J30W9I215HW84HA9W05CJ978R7HM007UV0A99RT3J6FY425236Z25M4OL9G8B08K8JV6TD98A07F84921B24EE30F86FD8CD85C3C4698 = (($H81O4JKHV63L122J642VC96C50NWTCOV9A4EH3VLAQM843HFDC546382E92E8D476D33132FBB72DF79561 * $XEZ238R681IN449S3F235124382EE2W43B3N7FZX44DA448293179E9A897ECDE61E86457499208) - $XEZ238R681IN449S3F235124382EE2W43B3N7FZX44DA448293179E9A897ECDE61E86457499208); $WO93U451T7Z51Q1NB80D9R0K71H9M05KA8Y9W6JVX267M3R693L8AS7N35M9V5WQA06AANL8J632J17NLMZ7P76L0N8RJQ527HQ1DV6MFWP769S6XK83YL76FR8Y8W8XIIIJNRLC4PGJ15KBVLZFBB44B4487415B134BCE9C790A27FE5E0054 = $wpdb->get_var('SELECT count(*) FROM '.$A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526); $IU1O60IB510J1V3Q02329153E08O4T9D437U7CD55D1480H04G38SUMT2GMDJ532R77B6LGLBN58N9AE0FE0CC7E778FABF61F9217886EB31D5191 = ceil($WO93U451T7Z51Q1NB80D9R0K71H9M05KA8Y9W6JVX267M3R693L8AS7N35M9V5WQA06AANL8J632J17NLMZ7P76L0N8RJQ527HQ1DV6MFWP769S6XK83YL76FR8Y8W8XIIIJNRLC4PGJ15KBVLZFBB44B4487415B134BCE9C790A27FE5E0054 / $XEZ238R681IN449S3F235124382EE2W43B3N7FZX44DA448293179E9A897ECDE61E86457499208); $O8W73DX722S9918AMA2PZJXZT2HHF9M040X3J7079U93BGC2Y7K2M181UNEG09TKDU43QQOILW333K7WOF06CLM0V59R81V2PBK54CM87T480F3Y5GPB4N02612331D76F19471C03755301E836A951781 = $wpdb->get_results('SELECT id,group_name FROM '.$A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526.' ORDER BY id DESC LIMIT '.$S1O6E9Q7XQ7J30W9I215HW84HA9W05CJ978R7HM007UV0A99RT3J6FY425236Z25M4OL9G8B08K8JV6TD98A07F84921B24EE30F86FD8CD85C3C4698.','.$XEZ238R681IN449S3F235124382EE2W43B3N7FZX44DA448293179E9A897ECDE61E86457499208); ?>



<?php if($A03BQ2R4N02GV3H341014M4UM6U9VL5X1K4826U6CG73Y2RWQ34U6IWGLU91BE8701J5SV131N635W619HWLC522Z7IW8HR5GPG0L48480YE78749BC91A6E08788BEFC0344F868459DA860320!=null){ ?>
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $A03BQ2R4N02GV3H341014M4UM6U9VL5X1K4826U6CG73Y2RWQ34U6IWGLU91BE8701J5SV131N635W619HWLC522Z7IW8HR5GPG0L48480YE78749BC91A6E08788BEFC0344F868459DA860320; ?>
</div>
<?php } ?>

<?php if($AWI12O8S101L88OY92O0SS8T88A6K5II6NN29C435SRJBH836U10CK12718EI086ZSNDZC5P482ANERA5B4D63Y18X2X8837263EE3GV90R0QD0764AR0KJBM1481A6B31EF26E52B6D4D4D9DC32F00C0552B7759!=null){ ?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $AWI12O8S101L88OY92O0SS8T88A6K5II6NN29C435SRJBH836U10CK12718EI086ZSNDZC5P482ANERA5B4D63Y18X2X8837263EE3GV90R0QD0764AR0KJBM1481A6B31EF26E52B6D4D4D9DC32F00C0552B7759; ?>
</div>
<?php } ?>


<form class="form-inline" id="form1"  method="post" action="admin.php?page=autoblog-groups">  
   <input type="hidden" name="saction" id="form1-saction" value="" />
   <div class="form-group "> 
    <div class="input-group ">   <!-- input-group-sm -->      
	  <div class="btn-group "> <!-- btn-group-sm -->
        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
         <?php echo __('Bulk Actions','wp-autoblog'); ?>
         <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li class="dropdown-menu-danger" ><a class="dropdown-menu-danger" href="javascript:;" onclick="DH12G4UOTY02F4199Q81N8LY0AC7057L58OV1T4AU8RJ9GM60Q036E311497426E272381BAD8A27EA011187F16B59057136()"><?php echo __('Delete','wp-autoblog'); ?></a></li>
        </ul>
      </div>

    </div>
  </div>
  
 
  <div class="form-group pull-right">   
  <div class="input-group ">
	  <span class="input-group-addon"><?php echo __('New Group','wp-autoblog'); ?> : </span>
      <input type="text" class="form-control" placeholder="<?php echo __('Group Name','wp-autoblog'); ?>" name="newGroupName" id="newGroupName" size="25" value=""/>
	  <span class="input-group-btn">
        <a class="btn btn-default" id="submitNewGroup" data-loading-text="Loading..." type="submit" onclick = "S762Q38F7RQZ1DGIS63N95F639A6X62F5P23452740TVI841B5F87S03Y1D00L6918777F5AC3E861794155CF9EC91496F1DB68797()" ><?php echo __('Submit'); ?> </a>
      </span>
  </div>
  </div>
</form>






<div style="margin:5px;"></div>


<form id="form2" method="post" action="admin.php?page=autoblog-groups">  
<input type="hidden" name="saction" id="form2-saction" value="" />
<div class="panel panel-primary">
 <div class="panel-heading">
    <h3 class="panel-title"><?php echo __('All Task-Groups','wp-autoblog'); ?></h3>
  </div>
  <table class="table">
   <thead>
    <tr>
     <th width="1%" >
      <input type="checkbox" name="All" id="checkAll" class="checkbox" onchange="Z1HN1633602M8KS59E0Z314U7J3B89PA940WF1G2TF5B6GMFC0Z40DLDD9B848C851BCB6CF881750E9689CB8A1943()" />
	 </th>
     <th><?php echo __('Group Name','wp-autoblog'); ?></th>
     <th width="20%"><?php echo __('Task Count','wp-autoblog'); ?></th>
    </tr>
   </thead>
   <tbody>

   <tr id="trgroup0" >
     <th scope="row">
	   <input type="checkbox" class="checkbox" disabled="true" value="0"  />
	 </th>
	 <td>
	    <strong><?php echo __('Default Group','wp-autoblog'); ?></strong>
		<div class="row-actions">
		  <a  disabled="true" class="opt-link"  ><?php echo __('Edit','wp-autoblog'); ?></a> |
		  <a  disabled="true" class='opt-link-red opt-link' ><?php echo __('Delete','wp-autoblog'); ?></a></span>
		</div>	
	 </td>
	 <td>
	    <?php $HS5KD6J6321HI23U84790621A0016P0872ZD8N9656000E2942A04780E223B215EB8B663CF53536714 = $wpdb->get_var('SELECT count(*) FROM '.$M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650.' WHERE group_id = 0' ); ?>
		<?php echo $HS5KD6J6321HI23U84790621A0016P0872ZD8N9656000E2942A04780E223B215EB8B663CF53536714; ?>
	 </td>
   </tr>

<?php  foreach ($O8W73DX722S9918AMA2PZJXZT2HHF9M040X3J7079U93BGC2Y7K2M181UNEG09TKDU43QQOILW333K7WOF06CLM0V59R81V2PBK54CM87T480F3Y5GPB4N02612331D76F19471C03755301E836A951781 as $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249){ $IZ1L2M3B1879P65H3TQ9R68KDVS7GVWHSEQXT114E6FBF7BB53D55B9FB93A0457ACDEBA0BE136285 = $wpdb->get_var('SELECT count(*) FROM '.$M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650.' WHERE group_id = '.($CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->id) ); ?>
    <tr id="trgroup<?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->id; ?>" >
     <th scope="row">
	   <input type="checkbox" name="ids[]" class="checkbox" value="<?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->id; ?>"  />
	 </th>
     <td>
	   <a class="normal-font" tabindex="0" role="button" ><strong><?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->group_name; ?></strong></a>   
		<div class="row-actions">
		  <a href="#" class="opt-link" title="<?php echo __('Edit this item inline','wp-autoblog'); ?>" data-toggle="modal" data-target="#qchangeModal"  data-groupid="<?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->id; ?>"  data-groupname="<?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->group_name; ?>" data-taskcount="<?php echo $IZ1L2M3B1879P65H3TQ9R68KDVS7GVWHSEQXT114E6FBF7BB53D55B9FB93A0457ACDEBA0BE136285; ?>"><?php echo __('Edit','wp-autoblog'); ?></a> |
		  <a class='opt-link-red' href="#" data-toggle="modal" data-target="#deleteModal" data-groupid="<?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->id; ?>"  data-groupname="<?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->group_name; ?>"><?php echo __('Delete','wp-autoblog'); ?></a></span>
		</div>	
	  </td>
      <td>
		  <?php echo $IZ1L2M3B1879P65H3TQ9R68KDVS7GVWHSEQXT114E6FBF7BB53D55B9FB93A0457ACDEBA0BE136285; ?>
	  </td>
    </tr>
<?php
 } ?>   
   </tbody>
  </table>
</div><!-- end <div class="panel panel-primary"> -->
</form>


<div class="btn-toolbar">   
  <?php
 $W124DM5LHOE86Q345TA7W3LCQ49IX2D98W041P053Z68A273QU0049807193302LERRS04PFDSL85OCV23I3F7Z758G4BEAOC880IDM8UZ5MY137QDFI3115SLAZQ245Z3Y3R71860C77C6745379B0D44304D66B6A137735 = "admin.php?page=autoblog-groups"; $V8OP724IS9I3KL351GEAA27P8M6C4X1OBG21S24M2S202KK60I66BBBFD3579F01D11B6F7FB3241FDBC0F4438 = '&paged='; $D4742M6X198V3D9VLVN3L99A0UZO84CCW96I4L27TC3CR723533SBBC8S20Z11109851Z227F3M2O589KOLOO0WQ6L6B80MF8652RYW11GOZ3H01F2MJ4CRIXUGJ44BG48893UW80NAD88C7F7A0B5A1EAE34382FFD432C6C300220 = $IU1O60IB510J1V3Q02329153E08O4T9D437U7CD55D1480H04G38SUMT2GMDJ532R77B6LGLBN58N9AE0FE0CC7E778FABF61F9217886EB31D5191; $P3W549AT18UE0Z65YB74LD4CKD4M5K228I0E25A7T3K4RW743B5C9175984C071F30B873FDCE0A0003937 = $H81O4JKHV63L122J642VC96C50NWTCOV9A4EH3VLAQM843HFDC546382E92E8D476D33132FBB72DF79561; $IF219B40NE74L32B133MWT1QG4DFQ2853SXNWBM03CWI2473FFM7169J48CA60BJV152517155BLFK48KY092B4T3181KG432059VV50160R7I1235H3WP0V5JVG3AA9BLJ52XO45096GD9XQ5M8H1153BE6049F09917AC42DD4B9053CC1E29489 = $WO93U451T7Z51Q1NB80D9R0K71H9M05KA8Y9W6JVX267M3R693L8AS7N35M9V5WQA06AANL8J632J17NLMZ7P76L0N8RJQ527HQ1DV6MFWP769S6XK83YL76FR8Y8W8XIIIJNRLC4PGJ15KBVLZFBB44B4487415B134BCE9C790A27FE5E0054; $T2ARBFOZ94O39DJMUMD7SLGR5F393J999715EN598489F5A861885N8PGC9OCG0RV04X09HLD6AI3Q3L9P1R91832W02PZ7HYN55TGQRDHKS337KHF7N4D5IXTF081C5X7EOK400BAC2AFE8E223ADD752D7404481B75367826 = array ( ); $DJJ226XQ4T192354AXT8A10X45M2XMA2PJ7U3NCGC0J4U77U39HH3Z1519S9LCGK82451J75NGQ1XDK5TJ9W9Q0P54N3RYFJ05P08XM33P064PJ8493H38S8CBB81506A7FE3EF03F7A89C76C52131A6558 = new J19YA368HW392MA228731TIB1P7WBP3317V955G6Q2AF63D350F58363261B36B04B7121A091959(); $DJJ226XQ4T192354AXT8A10X45M2XMA2PJ7U3NCGC0J4U77U39HH3Z1519S9LCGK82451J75NGQ1XDK5TJ9W9Q0P54N3RYFJ05P08XM33P064PJ8493H38S8CBB81506A7FE3EF03F7A89C76C52131A6558->Z7W25W0WRP839155O0W68ZN838280AM95P307BN33L62W2K4D4157S16VS36BO1YGFL911O4VJ00H4A3083S60BNJJ38H6WLF0Y71AB8M926XRUX8P0LL4OB265367A6593F390389116F9038ECA3B1197($W124DM5LHOE86Q345TA7W3LCQ49IX2D98W041P053Z68A273QU0049807193302LERRS04PFDSL85OCV23I3F7Z758G4BEAOC880IDM8UZ5MY137QDFI3115SLAZQ245Z3Y3R71860C77C6745379B0D44304D66B6A137735,$V8OP724IS9I3KL351GEAA27P8M6C4X1OBG21S24M2S202KK60I66BBBFD3579F01D11B6F7FB3241FDBC0F4438,$D4742M6X198V3D9VLVN3L99A0UZO84CCW96I4L27TC3CR723533SBBC8S20Z11109851Z227F3M2O589KOLOO0WQ6L6B80MF8652RYW11GOZ3H01F2MJ4CRIXUGJ44BG48893UW80NAD88C7F7A0B5A1EAE34382FFD432C6C300220,$P3W549AT18UE0Z65YB74LD4CKD4M5K228I0E25A7T3K4RW743B5C9175984C071F30B873FDCE0A0003937,$IF219B40NE74L32B133MWT1QG4DFQ2853SXNWBM03CWI2473FFM7169J48CA60BJV152517155BLFK48KY092B4T3181KG432059VV50160R7I1235H3WP0V5JVG3AA9BLJ52XO45096GD9XQ5M8H1153BE6049F09917AC42DD4B9053CC1E29489,$T2ARBFOZ94O39DJMUMD7SLGR5F393J999715EN598489F5A861885N8PGC9OCG0RV04X09HLD6AI3Q3L9P1R91832W02PZ7HYN55TGQRDHKS337KHF7N4D5IXTF081C5X7EOK400BAC2AFE8E223ADD752D7404481B75367826); ?>
  
  <form id="myform_NumPerPage" method="post" action="admin.php?page=autoblog-groups">   
  <input type="hidden" name="saction" value="changePerPage" />
  <div class="form-inline" style="float:right">
  <div class="input-group input-group-sm">
	  <span class="input-group-addon"><?php echo __('Number per page','wp-autoblog'); ?> : </span>
      <input type="text" class="form-control" size="6" name="groupPerPage" value="<?php echo $XEZ238R681IN449S3F235124382EE2W43B3N7FZX44DA448293179E9A897ECDE61E86457499208; ?>"/>
	  <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="perPageBtn" data-loading-text="Loading..."><?php echo __('Submit'); ?> </button>
      </span>
  </div>
  </div>
  </form>
  
</div><!-- end <div class="btn-toolbar"> -->


</div> <!-- end <div class="wrap"> -->


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"><?php echo __('Alert','wp-autoblog'); ?></h3>
      </div>
      <div class="modal-body">
        <form id="form3" method="post" action="admin.php?page=autoblog-groups">  
		  <input type="hidden" name="saction" id="form3-saction" value="delteGroup" />
		  <input type="hidden" class="form-control" id="delete-group-id" name="delete-group-id">
          <input type="hidden" class="form-control" id="delete-group-name" name="delete-group-name">		  
		  <div class="alert alert-danger" role="alert">
		    <strong><?php echo __('Confirm Delete','wp-autoblog'); ?> <?php echo __('Group','wp-autoblog'); ?></strong> : <span class="confirm-delete-name"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('Cancel','wp-autoblog'); ?></button>
        <button type="button" class="btn btn-danger" onclick="Q015JCKM88L08KT38BI888FP048K922B8BMRIE5WJ915O93LU7IE828433B7835U3B3U8W0Z58VO3G3D74161QR25OC1I8414QVFNPXN46K1PC9JA96CR2492NGIV68FC593B908B5390F14E64E1D56F250EA9665()" id="delelteGroupBtn" data-loading-text="Loading..." ><?php echo __('Delete','wp-autoblog'); ?></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="qchangeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"></h3>
      </div>
      <div class="modal-body">
        <form id="form4" method="post" action="admin.php?page=autoblog-groups">
		  <input type="hidden" name="saction" id="form4-saction" value="qedit" />
		  <input type="hidden" class="form-control" id="qedit-group-id" name="qedit-group-id">
		  <input type="hidden" class="form-control" id="qedit-taskcount" name="qedit-taskcount"> 	  
		  <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo __('Group Name','wp-autoblog'); ?> : </label>
            <input type="text" class="form-control" id="qedit-group-name" name="qedit-group-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="I13Y04C5VD8FPKFVXBUN9AET2YP340KL2ZR7687GZ264DNM0740OL6VS5O3845F86B7B0A48B5F2C529F12D1AB5DA994806()" id="qeditsubmit" data-loading-text="Loading...">Submit</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="bulkDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"><?php echo __('Alert','wp-autoblog'); ?></h3>
      </div>
      <div class="modal-body">		  
		  <div class="alert alert-danger" role="alert">
		    <strong><?php echo __('Confirm Delete Selected Items.','wp-autoblog'); ?></strong>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('Cancel','wp-autoblog'); ?></button>
        <button type="button" class="btn btn-danger" onclick="E7265H7H52UMG14PB823NFF6UK3ZU81ZB57I567G4ST588C162B63786C541220CE608C5842F430007()" id="bulkDelelteGroupBtn" data-loading-text="Loading..."><?php echo __('Delete','wp-autoblog'); ?></button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="ajaxAlertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"><?php echo __('Alert','wp-autoblog'); ?></h3>
      </div>
      <div class="modal-body">		  
		  <div class="alert alert-danger" role="alert" id="ajaxAlertMsg"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('OK','wp-autoblog'); ?></button>
      </div>
    </div>
  </div>
</div>





<script type="text/javascript">
$('#perPageBtn').on('click', function () {
    var $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152 = $(this).button('loading')  
    document.getElementById("myform_NumPerPage").submit();
});



$('#qchangeModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); 
  var groupid = button.data('groupid');
  var groupname = button.data('groupname');
  var taskcount = button.data('taskcount');
  
  var modal = $(this);  
  modal.find('.modal-title').text('<?php echo __("Edit","autoblog"); ?> : '+groupname);  
  modal.find('.modal-body #qedit-group-id').val(groupid);
  modal.find('.modal-body #qedit-group-name').val(groupname);
  modal.find('.modal-body #qedit-taskcount').val(taskcount);
  
});


$('#deleteModal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget); 
  var groupid = button.data('groupid');
  var groupname = button.data('groupname');
  
  var modal = $(this);
  modal.find('.confirm-delete-name').text(groupname); 
  modal.find('.modal-body #delete-group-id').val(groupid);
  modal.find('.modal-body #delete-group-name').val(groupname);
  
});


function DH12G4UOTY02F4199Q81N8LY0AC7057L58OV1T4AU8RJ9GM60Q036E311497426E272381BAD8A27EA011187F16B59057136(){
  
  var canSubmit=false;
  var boxes = document.getElementsByName("ids[]");
  for(i=0;i<boxes.length;i++){
     if(boxes[i].checked == true){
       canSubmit=true;
	 }
  }
  
  if(canSubmit==true){
    $('#bulkDeleteModal').modal('show');
  }else{
	$('#checkAll').focus();
  }

}


function S762Q38F7RQZ1DGIS63N95F639A6X62F5P23452740TVI841B5F87S03Y1D00L6918777F5AC3E861794155CF9EC91496F1DB68797(){
  var newGroupName = document.getElementById("newGroupName").value;
  if(newGroupName == ''){
    document.getElementById("newGroupName").focus();
	return;
  }  
  var $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152 = $('#submitNewGroup').button('loading'); 
  
  jQuery.ajax({
     type: "GET",

     url: "<?php echo get_option('home'); ?>",
     data: "ab=newgroup&newGroupName="+newGroupName,

	 dataType: "json", 
	 beforeSend: function(data){    	 
	 },
	 success: function(data){
	  if(data.status==1){
        $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152.button('reset');
		document.getElementById("newGroupName").value='';
        $("#trgroup0").after(data.html);		
		$(".ajaxload").hide();
        $(".ajaxload").addClass("newrow");
	    $(".ajaxload").fadeIn(1000,function (){
          $(".ajaxload").removeClass("ajaxload newrow");       
		  $('[data-toggle="tooltip"]').tooltip();
          $(".popoverNew").focus();		  
		  $('.popoverNew').on('hidden.bs.tooltip', function () {
             $(".popoverNew").tooltip('destroy');
			 $(".popoverNew").removeClass("popoverNew");
          });		
		});	
	  }else{
        $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152.button('reset');
		document.getElementById("newGroupName").value='';
		document.getElementById("newGroupName").focus();
		$("#ajaxAlertMsg").html(data.html);
		$('#ajaxAlertModal').modal('show');	
	  }					
	 }
  });
}




function Q015JCKM88L08KT38BI888FP048K922B8BMRIE5WJ915O93LU7IE828433B7835U3B3U8W0Z58VO3G3D74161QR25OC1I8414QVFNPXN46K1PC9JA96CR2492NGIV68FC593B908B5390F14E64E1D56F250EA9665(){
  var $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152 = $('#delelteGroupBtn').button('loading');  
  var groupid = document.getElementById("delete-group-id").value;
  
  jQuery.ajax({
     type: "GET",

    url: "<?php echo get_option('home'); ?>",
    data: "ab=deletegroup&groupid="+groupid,

	 beforeSend: function(data){    	 
	 }, 
	 success: function(r_msg){		
       $("#deleteModal").removeClass("fade");
       $('#deleteModal').modal('hide');
       $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152.button('reset');
       $("#trgroup"+groupid).addClass("delete");
       $("#trgroup"+groupid).fadeOut(500);
	   $("#deleteModal").addClass("fade");		 
	 }
  });

}

function E7265H7H52UMG14PB823NFF6UK3ZU81ZB57I567G4ST588C162B63786C541220CE608C5842F430007(){  
  var $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152 = $('#bulkDelelteGroupBtn').button('loading');
  document.getElementById("form2-saction").value = 'bulkDelete';
  document.getElementById("form2").submit();
}


function I13Y04C5VD8FPKFVXBUN9AET2YP340KL2ZR7687GZ264DNM0740OL6VS5O3845F86B7B0A48B5F2C529F12D1AB5DA994806(){

   var $PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152 = $('#qeditsubmit').button('loading');
   var groupid = document.getElementById("qedit-group-id").value;
   var groupname = document.getElementById("qedit-group-name").value;
   var taskcount = document.getElementById("qedit-taskcount").value;
      
   jQuery.ajax({
     type: "GET",

     url: "<?php echo get_option('home'); ?>",
     data: "ab=qeditgroup&groupid="+groupid+"&groupname="+groupname+"&taskcount="+taskcount,

	 dataType: "json",
	 beforeSend: function(data){    	 
	 }, 
	 success: function(data){     
      if(data.status==1){   
		$("#qchangeModal").removeClass("fade");
		$('#qchangeModal').modal('hide');		
		$PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152.button('reset');		
        $("#trgroup"+groupid).html(data.html);		
		$(".ajaxload").hide();
        $(".ajaxload").addClass("info");
	    $(".ajaxload").fadeIn(1000,function (){
          $(".ajaxload").removeClass("ajaxload info");
		  $("#qchangeModal").addClass("fade");
        });
	  }else{
        $("#qchangeModal").removeClass("fade");
		$('#qchangeModal').modal('hide');		
		$PO6Z05DTT40460686CTQGF631EE95MYE7X320IA922M019338ITQ07D4F5C2C94881B8DB27F83BE1703BFBEF0152.button('reset');
		$("#ajaxAlertMsg").html(data.html);
		$('#ajaxAlertModal').modal('show');		
	  }
	 }
 
  });
}

function Z1HN1633602M8KS59E0Z314U7J3B89PA940WF1G2TF5B6GMFC0Z40DLDD9B848C851BCB6CF881750E9689CB8A1943(){  
  var the_checked_var = document.getElementById("checkAll").checked;  
  var boxes = document.getElementsByName("ids[]");
  if(the_checked_var==true){
    for(i=0;i<boxes.length;i++){
        boxes[i].checked =true;
	}
  }else{  
    for(i=0;i<boxes.length;i++){
        boxes[i].checked =false;
	}
  }
}
</script>