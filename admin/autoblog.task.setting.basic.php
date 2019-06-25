

<div style="margin:16px;"></div>  
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
  <div id="post-body-content">
  
  <div class="panel panel-primary">

   <div class="panel-heading panel-toggle">
      <h5 class="panel-title"><?php echo __("Basic Settings","wp-autoblog"); ?></h5>
   </div>

      <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==1))echo 'style="display:none;"' ?>>
        <form id="form1"  method="post" action="admin.php?page=autoblog-task-setting">
          <input type="hidden" name="action" value="form1" />
          <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
          <input type="hidden" name="save_to_group" value="0" />

          <div class="panel-body" style="padding:0;margin:0;">
            <table class="table settingTable">
              <tr>
                <td class="setName">
                  <label><?php echo __("Task Name","wp-autoblog"); ?></label>
                </td>
                <td>
                  <input type="text"  name="name" class="form-control" placeholder="<?php echo __("Task Name","wp-autoblog"); ?>" value="<?php echo $E5U174Z8UD370YT381OQLFS31274Q6X24GS2478F3A4C51824AD23CB50C1C60670C0F3236->name; ?>" />
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Task Group","wp-autoblog"); ?></label>
                </td>
                <td>
                  <select class="input-default" name="group_id" >
                    <option value="0"   <?php if(($E5U174Z8UD370YT381OQLFS31274Q6X24GS2478F3A4C51824AD23CB50C1C60670C0F3236->group_id)=='0') echo 'selected="true"'; ?> ><?php echo __('Default Group','autoblog'); ?></option>
                    <?php foreach($O8W73DX722S9918AMA2PZJXZT2HHF9M040X3J7079U93BGC2Y7K2M181UNEG09TKDU43QQOILW333K7WOF06CLM0V59R81V2PBK54CM87T480F3Y5GPB4N02612331D76F19471C03755301E836A951781 as $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249){ ?>
                      <option value="<?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->id ?>" <?php if(($E5U174Z8UD370YT381OQLFS31274Q6X24GS2478F3A4C51824AD23CB50C1C60670C0F3236->group_id)==($CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->id)) echo 'selected="true"'; ?> ><?php echo $CN1YLY5P589NFEPVDVA4X237K2W0LV050X7BHSYX7LESA733310CYG2010OW1J05817O4V1VN609892DBF93B3B84A94AA24823428CF9873D991249->group_name ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("The max extraction post numbers for each time","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("0 means no limit","wp-autoblog"); ?></p>
                </td>
                <td>
                  <?php
 $CXL0BW8GKH512CX25P37X7B97374DX091235ND084B2V3510F33CTOA51UPX0CL29SL78PX3PN82F994U21IYY185SQY9S1FL4E58833J7MAU5K8P3O3QA3AA80231107113BEC0BF00F4108ED389395 = @$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['max_fetch_post_num']; if($CXL0BW8GKH512CX25P37X7B97374DX091235ND084B2V3510F33CTOA51UPX0CL29SL78PX3PN82F994U21IYY185SQY9S1FL4E58833J7MAU5K8P3O3QA3AA80231107113BEC0BF00F4108ED389395==null){ $CXL0BW8GKH512CX25P37X7B97374DX091235ND084B2V3510F33CTOA51UPX0CL29SL78PX3PN82F994U21IYY185SQY9S1FL4E58833J7MAU5K8P3O3QA3AA80231107113BEC0BF00F4108ED389395 = 0; } ?>
                  <div class="input-group" style="width:100px;">
                    <input type="text" class="form-control"  name="max_fetch_post_num" id="max_fetch_post_num" value="<?php echo $CXL0BW8GKH512CX25P37X7B97374DX091235ND084B2V3510F33CTOA51UPX0CL29SL78PX3PN82F994U21IYY185SQY9S1FL4E58833J7MAU5K8P3O3QA3AA80231107113BEC0BF00F4108ED389395; ?>" placeholder="">
                  </div>

                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Run Interval","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("In Automatically Task How long Intervals running once","wp-autoblog"); ?></p>
                </td>
                <td>
                  <div class="input-group" style="width:300px;">
                    <input type="text" class="form-control"  name="run_interval" id="run_interval" value="<?php echo $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['run_interval']; ?>" placeholder="<?php echo __("Minute","wp-autoblog"); ?>">
                    <div class="input-group-addon"><?php echo __("Minute","wp-autoblog"); ?></div>
                  </div>
                </td>
              </tr>


              <tr>
                <td class="setName">
                  <label><?php echo __("Charset","wp-autoblog"); ?></label>
                </td>
                <td>

                  <div class="btn-group">
                    <label class="btn btn-default <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['charset']==1){ echo 'active'; } ?>">
                      <input type="radio" name="charset" class="charset"  value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['charset']==1){ echo 'checked'; } ?> /> <?php echo __("Automatic Detection","wp-autoblog"); ?>
                    </label>
                    <label class="btn btn-default <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['charset']!=1){ echo 'active'; } ?>">
                      <input type="radio" name="charset" class="charset"  value="2" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['charset']!=1){ echo 'checked'; } ?> /> <?php echo __("Manually Enter","wp-autoblog"); ?>

                    </label>
                  </div>

                  <input type="text" id="charset_name" name="charset_name" class="setInput" value="<?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['charset']!=1){ echo $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['charset']; } ?>" placeholder="<?php echo __("For Example: UTF-8","wp-autoblog"); ?>"   <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['charset']==1){ ?>  style="display: none;"  <?php }?> />
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Manually Selective Extraction","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("Manually select which article can be posted in your site","wp-autoblog"); ?></p>
                </td>
                <td>
                  <select class="input-default" id="manually_extraction" name="manually_extraction">
                    <option value="0"   <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['manually_extraction']=='0') echo 'selected="true"'; ?> ><?php echo __('No'); ?></option>
                    <option value="1"   <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['manually_extraction']=='1') echo 'selected="true"'; ?> ><?php echo __('Yes'); ?></option>
                  </select>
                </td>
              </tr>


              <tr>
                <td class="setName">
                  <label><?php echo __("Check Extracted Method","wp-autoblog"); ?></label>
                </td>
                <td>
                  <div class="btn-group">
                    <label class="btn btn-default <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['check_duplicate']==0){ echo 'active'; } ?>"  >
                      <input type="radio" name="check_duplicate" value="0"  <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['check_duplicate']==0){ echo 'checked'; } ?>/> <?php echo __("URL","wp-autoblog"); ?>
                    </label>
                    <label class="btn btn-default <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['check_duplicate']==1){ echo 'active'; } ?>" >
                      <input type="radio" name="check_duplicate" value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['check_duplicate']==1){ echo 'checked'; } ?> > <?php echo __("URL + Title","wp-autoblog"); ?>
                    </label>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Use Proxy","wp-autoblog"); ?></label>
                  <p class="desc"><a href="admin.php?page=wp-autoblog/wp-autopost-proxy.php" target="_blank"><?php echo __('Proxy Options','wp-autoblog'); ?></a></p>
                </td>
                <td>
                  <select id="use_proxy" name="use_proxy" class="input-default">
                    <option value="0" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['use_proxy']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>

                    <?php
 $A2XK1360VZ0P69383N0P5KRH9MM3157OH2XUX787Q3ZB2G0CSWKYDK98TI1574P40OM864P616LI5D595C5476527EE5059B2D5F1B34E1ABB7546 =$M1626VQNP65B249Q7N89B764SW85M9YQ87QCMAE5I5437G68563Z0X9Y87G7849U38D4U0Z3LW2678LUZ3YM04MRKE26PX85OH162E7M8ZP28A42A13179659E53A0D71D8959D88398F40E2077441[9]; if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['use_proxy']==0){ $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['proxy_key']=''; } ?>

                    <?php foreach($A2XK1360VZ0P69383N0P5KRH9MM3157OH2XUX787Q3ZB2G0CSWKYDK98TI1574P40OM864P616LI5D595C5476527EE5059B2D5F1B34E1ABB7546 as $Z467702E35LX79G5V4R1K0EP1Q3253MRD9LA7732B068931CC450442B63F5B3D276EA42974653 =>$O871735Y8WJ4P57GF8TA67521JV0X4S15IY5VCQ8S4M0RDRPFP1O284164H2H1C1Z1SC22L9V30053NMG1S7JB3662TZ68B6Y846A03AEV9DC3E79E116AFCD8122B319ACA2CD79FA8637){ ?>
                      <option value="<?php echo $Z467702E35LX79G5V4R1K0EP1Q3253MRD9LA7732B068931CC450442B63F5B3D276EA42974653; ?>" <?php selected( $Z467702E35LX79G5V4R1K0EP1Q3253MRD9LA7732B068931CC450442B63F5B3D276EA42974653, $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['proxy_key']); ?> > <?php echo __('Proxy Name','wp-autoblog'); ?> : <?php echo $Z467702E35LX79G5V4R1K0EP1Q3253MRD9LA7732B068931CC450442B63F5B3D276EA42974653; ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Enable Cookie","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __('Some few sites need to open this feature can normal extracted contents','wp-autoblog'); ?></p>
                </td>
                <td>
                  <select id="enable_cookie" name="enable_cookie" class="input-default" >
                    <option value="0" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['enable_cookie']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                    <option value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['enable_cookie']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                  </select>
                </td>
              </tr>

<!--
              <tr>
                <td class="setName">
                  <label><?php echo __("When extract error set the status to","wp-autoblog"); ?></label>
                  <p class="desc"></p>
                </td>
                <td>
                  <select id="err_status" name="err_status" class="input-default">
                    <option value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['err_status']==1) echo 'selected="true"'; ?>><?php echo __('Not set','wp-autoblog'); ?></option>
                    <option value="0" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['err_status']==0) echo 'selected="true"'; ?>><?php echo __('Pending Extraction','wp-autoblog'); ?></option>
                    <option value="-1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['err_status']==-1) echo 'selected="true"'; ?>><?php echo __('Ignored','wp-autoblog'); ?></option>
                  </select>
                </td>
              </tr>
-->

              <tr>
                <td class="setName">
                  <label><?php echo __("Max retry times when extraction failed","wp-autoblog"); ?></label>
                  <p class="desc"></p>
                </td>
                <td>
                  <?php
 $O2835C30BE8KB16SEG2132N7L5730SP31WM1K44565NK57057DT9989422490I3LRYWY6I108BOVJU78490P7GE90QFC50BC00HN3X943EME20N117UI46620CJ7B050ZL567D166A5C1050A671E1185A3B67BD0D8148 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['max_retry_num']; if($O2835C30BE8KB16SEG2132N7L5730SP31WM1K44565NK57057DT9989422490I3LRYWY6I108BOVJU78490P7GE90QFC50BC00HN3X943EME20N117UI46620CJ7B050ZL567D166A5C1050A671E1185A3B67BD0D8148==null){ $O2835C30BE8KB16SEG2132N7L5730SP31WM1K44565NK57057DT9989422490I3LRYWY6I108BOVJU78490P7GE90QFC50BC00HN3X943EME20N117UI46620CJ7B050ZL567D166A5C1050A671E1185A3B67BD0D8148 = 5; } ?>
                  <div class="input-group" style="width:100px;">
                    <input type="text" class="form-control"  name="max_retry_num" id="max_retry_num" value="<?php echo $O2835C30BE8KB16SEG2132N7L5730SP31WM1K44565NK57057DT9989422490I3LRYWY6I108BOVJU78490P7GE90QFC50BC00HN3X943EME20N117UI46620CJ7B050ZL567D166A5C1050A671E1185A3B67BD0D8148; ?>" placeholder="">
                  </div>

                </td>
              </tr>




            </table>
          </div> <!-- /panel-body -->

        </form>


        <div class="panel-footer">
          <a class="btn btn-primary" data-loading-text="Loading..." onclick="S2HYXBGEQ76LA376V6P4PE03Y5KM9OB550276I9F2242H6F604XGH7A66SWS2MY24R5V3F60J3H39C2BC284BAAECB183049388F3BCA77748244(0)" ><?php echo __('Save'); ?> </a>
          <a class="btn btn-primary" data-loading-text="Loading..." onclick="S2HYXBGEQ76LA376V6P4PE03Y5KM9OB550276I9F2242H6F604XGH7A66SWS2MY24R5V3F60J3H39C2BC284BAAECB183049388F3BCA77748244(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
        </div>
      </div> <!-- /panel-all -->

  </div> <!-- /panel -->


  <div class="panel panel-primary">
   <div class="panel-heading panel-toggle">
     <h5 class="panel-title"><?php echo __("Other Settings","wp-autoblog"); ?></h5>
   </div>
   <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==16))echo 'style="display:none;"' ?>>

     <form id="form16"  method="post" action="admin.php?page=autoblog-task-setting">
       <input type="hidden" name="action" value="form16" />
       <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
       <input type="hidden" name="save_to_group" value="0" />

       <div class="panel-body" style="padding:0;margin:0;">
         <table class="table settingTable">

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML comments","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html element like &lt!-- *** -->','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $Q11G7U96ZP913544H6N9L442299439A10368URBQPU379SG1GSW8R03I8FT462449013O2763R7126D34EC22B94F4EDD16F32EF4F9FE43FA9711 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['remove_comments']; if($Q11G7U96ZP913544H6N9L442299439A10368URBQPU379SG1GSW8R03I8FT462449013O2763R7126D34EC22B94F4EDD16F32EF4F9FE43FA9711==null){ $Q11G7U96ZP913544H6N9L442299439A10368URBQPU379SG1GSW8R03I8FT462449013O2763R7126D34EC22B94F4EDD16F32EF4F9FE43FA9711 = 1; } ?>
               <select id="remove_comments" name="remove_comments" class="input-default" >
                 <option value="0" <?php if($Q11G7U96ZP913544H6N9L442299439A10368URBQPU379SG1GSW8R03I8FT462449013O2763R7126D34EC22B94F4EDD16F32EF4F9FE43FA9711==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($Q11G7U96ZP913544H6N9L442299439A10368URBQPU379SG1GSW8R03I8FT462449013O2763R7126D34EC22B94F4EDD16F32EF4F9FE43FA9711==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML ID attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like id=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $X6C51618K5X4LZESHDNW3VG9Q5294V48C19052PP6YXV8J8M24726S1Z0DH0O80CQ51CH30K977480AF1CFDF8F080A15D56968579FA72814BCA0858 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['remove_id_attr']; if($X6C51618K5X4LZESHDNW3VG9Q5294V48C19052PP6YXV8J8M24726S1Z0DH0O80CQ51CH30K977480AF1CFDF8F080A15D56968579FA72814BCA0858==null){ $X6C51618K5X4LZESHDNW3VG9Q5294V48C19052PP6YXV8J8M24726S1Z0DH0O80CQ51CH30K977480AF1CFDF8F080A15D56968579FA72814BCA0858 = 1; } ?>
               <select id="remove_id_attr" name="remove_id_attr" class="input-default" >
                 <option value="0" <?php if($X6C51618K5X4LZESHDNW3VG9Q5294V48C19052PP6YXV8J8M24726S1Z0DH0O80CQ51CH30K977480AF1CFDF8F080A15D56968579FA72814BCA0858==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($X6C51618K5X4LZESHDNW3VG9Q5294V48C19052PP6YXV8J8M24726S1Z0DH0O80CQ51CH30K977480AF1CFDF8F080A15D56968579FA72814BCA0858==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML CLASS attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like class=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $GGF06OV641861O963263B61043ZR6S6B9IM807NNT2O42W3L01877863L496R201WB0500F481E883AF5811EF7E97ED359D9D8224 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['remove_class_attr']; if($GGF06OV641861O963263B61043ZR6S6B9IM807NNT2O42W3L01877863L496R201WB0500F481E883AF5811EF7E97ED359D9D8224==null){ $GGF06OV641861O963263B61043ZR6S6B9IM807NNT2O42W3L01877863L496R201WB0500F481E883AF5811EF7E97ED359D9D8224 = 1; } ?>
               <select id="remove_class_attr" name="remove_class_attr" class="input-default" >
                 <option value="0" <?php if($GGF06OV641861O963263B61043ZR6S6B9IM807NNT2O42W3L01877863L496R201WB0500F481E883AF5811EF7E97ED359D9D8224==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($GGF06OV641861O963263B61043ZR6S6B9IM807NNT2O42W3L01877863L496R201WB0500F481E883AF5811EF7E97ED359D9D8224==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML STYLE attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like style=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <select id="remove_style_attr" name="remove_style_attr" class="input-default" >
                 <option value="0" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['remove_style_attr']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['remove_style_attr']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

         </table>
       </div>

     </form>

     <div class="panel-footer">
       <a class="btn btn-primary" data-loading-text="Loading..." onclick="GTO2T377H8S2ZXTIL6K82V2U9NOT6180I3P5HN65H46698B6X7E2W8GOFG21441I392990AC1DA6B155944EE9BB50C8249AE9DA018211(0)" ><?php echo __('Save'); ?> </a>
       <a class="btn btn-primary" data-loading-text="Loading..." onclick="GTO2T377H8S2ZXTIL6K82V2U9NOT6180I3P5HN65H46698B6X7E2W8GOFG21441I392990AC1DA6B155944EE9BB50C8249AE9DA018211(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
     </div>
   </div>
  </div>





  </div> <!-- /post-body-content -->

<!--
  <div id="postbox-container-1" class="postbox-container">
    <div id="side-sortables" class="meta-box-sortables">

      <div class="panel panel-default">
        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">Panel title</h5>
        </div>
        <div class="panel-body">
          Panel content aaaa

          <br/>

          Panel content aaaa
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">Panel title</h5>
        </div>
        <div class="panel-body">
          Panel content bbb

          <br/>

          Panel content bbb
        </div>
      </div>
    </div>

  </div>

  -->

</div><!-- /post-body -->
</div><!-- /poststuff -->