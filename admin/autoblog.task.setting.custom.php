<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Custom HTML Attribute","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==13))echo 'style="display:none;"' ?>>
          <form id="form13"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form13" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">

                <tr>
                  <!--
                  <td class="setName">
                    <label><?php echo __("Custom HTML Attribute Set",'wp-autoblog'); ?></label>
                    <p class="desc"><?php echo __("Can add any Attributes to any HTML Element (or modify any HTML Element's Attribute)",'wp-autoblog'); ?></p>
                  </td>
                  -->
                  <td>
                    <p class="desc"><?php echo __("Can add any Attributes to any HTML Element (or modify any HTML Element's Attribute)",'wp-autoblog'); ?></p>
                    <div class="margin-t-8">
                      <span class="gray"><?php echo __('For example','wp-autoblog'); ?> : <?php echo __('If you want to all images align center, we just need to set the following','wp-autoblog'); ?>:<br/>
   <code><b><?php echo __('CSS Selector','wp-autoblog'); ?>:</b> img &nbsp;&nbsp;&nbsp;
     <b><?php echo __('Attribute','wp-autoblog'); ?>:</b> style &nbsp;&nbsp;&nbsp;
     <b><?php echo __('Value'); ?>:</b> display:block; margin-left:auto; margin-right:auto; </code>
   <br/><?php echo __('Of course, if you konw CSS, you also can use CLASS attribute','wp-autoblog'); ?></span></div>

                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if need to remove a attribute, leave the value is empty','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$P68KNL34CS388Z9JSU12SAP4ZLX4RY4T5256O71O0AI0QW19HFLT50UHF4773FGGZK12QZO339698T72M2IW730N0W04X471N12I9YMK5VNI057T295W3818R7W4YPY4072PA1H602U63802CD5BB3C2AD65A7632FD1BBCE8F4FE2367==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
   </span><br/><br/></div>


                    <div id="attr_set_div" class="margin-b-8">
                      <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['attr_set'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['attr_set'] as $P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 150px;" class="form-control" name="attr_set_selector[]"  value="<?php echo htmlspecialchars($P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 36px;" class="form-control" name="attr_set_index[]"  value="<?php echo htmlspecialchars($P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['index']); ?>" >
                            <div class="input-group-addon"><?php echo __('Attribute','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 150px;" class="form-control" name="attr_set_attribute[]"   value="<?php echo htmlspecialchars($P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['attr']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Value','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 230px;" class="form-control" name="attr_set_value[]"  value="<?php echo htmlspecialchars($P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['value']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select style="width: 164px;" class="form-control input-default"  name="attr_set_apply_to[]">
                              <option value="b" <?php selected( 'b',$P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                                <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$P129HP0973A02X1A618P8X07NTV59819217FFEB2695E721CF62D30ADB3ED681CC7324['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800" >
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 150px;" class="form-control" name="attr_set_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 36px;" class="form-control" name="attr_set_index[]"  value="0" >
                          <div class="input-group-addon"><?php echo __('Attribute','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 150px;" class="form-control" name="attr_set_attribute[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Value','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 230px;" class="form-control" name="attr_set_value[]"  value="" >

                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select style="width: 164px;" class="form-control input-default"  name="attr_set_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                              <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>"><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_attr_set_rules_btn" onclick="C1E21IAN6E16X61N579AM61946Z6UH84GR69YPV9P81T494579M26JF4YQ8673948B374C4AC4514B8A2A865AE2CEC11752()"><?php echo __('Add More','wp-autoblog'); ?></a>


                  </td>
                </tr>
              </table>
            </div> <!-- /panel-body -->

          </form>

          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>

        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Insert Content In Anywhere","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==14))echo 'style="display:none;"' ?>>
          <form id="form14"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form14" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable" id="insert_content_table">
                <tr>
                  <td>
                    <div><?php echo __('Find the specified HTML Element, then insert content in front of the HTML Element ( or behind it )','wp-autoblog'); ?><br/></div>
                    <p><span class="gray"><?php echo __('For example','wp-autoblog'); ?> : <?php echo __('If you want to insert some content( like &lt;!-- more --> )  behind the first paragraph, We just need to set the following','wp-autoblog'); ?>:<br/>
  <code>
    <b><?php echo __('CSS Selector','wp-autoblog'); ?>:</b> p &nbsp;&nbsp;&nbsp;
    <b><?php echo __('Index','wp-autoblog'); ?>:</b> 1 &nbsp;&nbsp;&nbsp;
    <b><?php echo __('Outer - Behind','wp-autoblog'); ?></b></code>
  <br/>
  <code><b><?php echo __('Content','wp-autoblog'); ?>:</b> &lt;!-- more --></code>
  </span></p>

                         <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$P68KNL34CS388Z9JSU12SAP4ZLX4RY4T5256O71O0AI0QW19HFLT50UHF4773FGGZK12QZO339698T72M2IW730N0W04X471N12I9YMK5VNI057T295W3818R7W4YPY4072PA1H602U63802CD5BB3C2AD65A7632FD1BBCE8F4FE2367==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
   </span><br/><br/></div>

                    <div class="margin-t-8">
                      <?php echo __('<code><em>[Outer-Front]</em></code> &lt;tag> <code><em>[Inner-Front]</em></code> some text <code><em>[Inner-Behind]</em></code> &lt;/tag> <code><em>[Outer-Behind]</em></code>','wp-autoblog'); ?>
                    </div>

                  </td>
                </tr>

                <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['insert_content'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['insert_content'] as $BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577){ ?>
                    <tr><td>
                    <div class="w800">
                    <div class="input-group margin-b-8">
                      <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 150px;" class="form-control" name="insert_content_selector[]"  value="<?php echo htmlspecialchars($BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['selector']); ?>" >
                      <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 36px;" class="form-control" name="insert_content_index[]"  value="<?php echo htmlspecialchars($BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['index']); ?>" >

                      <div class="input-group-addon"><?php echo __('Position','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_position[]">
                        <option value="1" <?php selected( 1,$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['ZUF5ONFMG464G0U0YXHEC85K27PBE4YBE3383NEN7115JEF5AZ1NWU6C61L28L05OGT8HOG7NP8162TJK66QOAJ3DI24757FE07FD492A8BE0EA6A760D683D6E3956']); ?> ><?php echo __('Outer - Behind','wp-autoblog'); ?></option>
                        <option value="2" <?php selected( 2,$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['ZUF5ONFMG464G0U0YXHEC85K27PBE4YBE3383NEN7115JEF5AZ1NWU6C61L28L05OGT8HOG7NP8162TJK66QOAJ3DI24757FE07FD492A8BE0EA6A760D683D6E3956']); ?> ><?php echo __('Outer - Front','wp-autoblog'); ?></option>
                        <option value="3" <?php selected( 3,$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['ZUF5ONFMG464G0U0YXHEC85K27PBE4YBE3383NEN7115JEF5AZ1NWU6C61L28L05OGT8HOG7NP8162TJK66QOAJ3DI24757FE07FD492A8BE0EA6A760D683D6E3956']); ?> ><?php echo __('Inner - Behind','wp-autoblog'); ?></option>
                        <option value="4" <?php selected( 4,$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['ZUF5ONFMG464G0U0YXHEC85K27PBE4YBE3383NEN7115JEF5AZ1NWU6C61L28L05OGT8HOG7NP8162TJK66QOAJ3DI24757FE07FD492A8BE0EA6A760D683D6E3956']); ?> ><?php echo __('Inner - Front','wp-autoblog'); ?></option>
                      </select>


                      <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_apply_to[]">
                        <option value="b" <?php selected( 'b',$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                        <option value="a" <?php selected( 'a',$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                        <option value="0" <?php selected( 0,$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                        <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                          <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                        <?php } ?>

                      </select>
                            <span class="input-group-btn trdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                    </div>
                      <textarea class="form-control " name="insert_content_html[]"  rows="3" placeholder="HTML Code"><?php echo htmlspecialchars($BPN9WY5G34890271Z703P4VQ39ZG43RQ5ZL701V385S59X66K98I92U38K187EE47MQS0IH9T51E6A9E7P7QDPS1VR1V7738771MY6240R86J3FUP6765R57K02E9E9B295F4CE5E5E9942D8315FD7F571577['html']); ?></textarea>
                    </div>
                    </td></tr>
                    <?php
 } }else{ ?>
                <tr><td>
                  <div class="w800">
                    <div class="input-group margin-b-8">
                      <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 150px;" class="form-control" name="insert_content_selector[]"  value="" >
                      <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 36px;" class="form-control" name="insert_content_index[]"  value="0" >
                      <div class="input-group-addon"><?php echo __('Position','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_position[]">
                        <option value="1" ><?php echo __('Outer - Behind','wp-autoblog'); ?></option>
                        <option value="2" ><?php echo __('Outer - Front','wp-autoblog'); ?></option>
                        <option value="3" ><?php echo __('Inner - Behind','wp-autoblog'); ?></option>
                        <option value="4" ><?php echo __('Inner - Front','wp-autoblog'); ?></option>
                      </select>
                      <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_apply_to[]">
                        <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                        <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                        <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                        <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                          <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>"><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                        <?php } ?>
                      </select>
                    <span class="input-group-btn trdeleteBtn">
                      <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                    </span>
                    </div>
                    <textarea class="form-control " name="insert_content_html[]"  rows="3" placeholder="HTML Code"></textarea>
                  </div>
                </td></tr>
                  <?php
 } ?>




              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">

            <a class="btn btn-default" data-loading-text="Loading..." id="add_insert_content_rules_btn" onclick="U1Q96VE916JJEFO76K1IWH2VJ1E4R93X16KQ412Q65O1PM1FF2K9H0640GG577JGL3O759D43MDU0683854MS6WNL8KAKDRX79C60R2C4896E3CE9E44AC0037F896FE8E0E8DBB2049()" ><?php echo __('Add More','wp-autoblog'); ?> </a>

          </div>


          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>

        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Prefix / Suffix',"wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==15))echo 'style="display:none;"' ?>>
          <form id="form15"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form15" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable" id="prefix_suffix_table">
                <tr>
                  <td>
                    <div class="margin-t-8 margin-b-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$P68KNL34CS388Z9JSU12SAP4ZLX4RY4T5256O71O0AI0QW19HFLT50UHF4773FGGZK12QZO339698T72M2IW730N0W04X471N12I9YMK5VNI057T295W3818R7W4YPY4072PA1H602U63802CD5BB3C2AD65A7632FD1BBCE8F4FE2367==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/></div>

                  </td>
                </tr>

                <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['prefix_suffix'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['prefix_suffix'] as $L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747){ ?>
                    <tr><td>
                        <div class="w800">
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Prefix / Suffix','wp-autoblog'); ?>: </div>
                            <select  class="form-control input-default"  name="prefix_suffix_mode[]">
                              <option value="1" <?php selected( 1,$L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747['mode'] ); ?>><?php echo __('Prefix','wp-autoblog'); ?></option>
                              <option value="2" <?php selected( 2,$L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747['mode'] ); ?>><?php echo __('Suffix','wp-autoblog'); ?></option>
                            </select>
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="prefix_suffix_apply_to[]">
                              <option value="b" <?php selected( 'b',$L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                                <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn trdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <textarea class="form-control " name="prefix_suffix_html[]"  rows="3" placeholder="HTML Code"><?php echo htmlspecialchars($L277353Q8R0N18Q3DQ1B870P36SIGW2462UE5BT3GYM171AG1YV4MZIO1N15AX389E9H16ZW00N7VM93CE8WU6NDYJKIY1L61AVQ6K1L6WQKYD3D6F41F80B2B3B263BA9600424E78290747['html']); ?></textarea>
                        </div>
                      </td></tr>
                    <?php
 } }else{ ?>
                  <tr><td>
                      <div class="w800">
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Prefix / Suffix','wp-autoblog'); ?>: </div>
                          <select  class="form-control input-default"  name="prefix_suffix_mode[]">
                            <option value="1" ><?php echo __('Prefix','wp-autoblog'); ?></option>
                            <option value="2" ><?php echo __('Suffix','wp-autoblog'); ?></option>
                          </select>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select  class="form-control input-default"  name="prefix_suffix_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                              <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>"><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                            <?php } ?>
                          </select>
                    <span class="input-group-btn trdeleteBtn">
                      <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                    </span>
                        </div>
                        <textarea class="form-control " name="prefix_suffix_html[]"  rows="3" placeholder="HTML Code"></textarea>
                      </div>
                    </td></tr>
                  <?php
 } ?>




              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">

            <a class="btn btn-default" data-loading-text="Loading..." id="add_prefix_suffix_rules_btn" onclick="HJF889NKUS54TAQ9780J1O894E0VHB7D8J8XJ8D2AD7113HB6FF94C1Q23417C332D6046F4520860C6F4B40D4678834()" ><?php echo __('Add More','wp-autoblog'); ?> </a>

          </div>

          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Custom Content Template',"wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==17))echo 'style="display:none;"' ?>>
          <form id="form17"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form17" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td>
                    <div class="margin-t-8 margin-b-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_content}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$P68KNL34CS388Z9JSU12SAP4ZLX4RY4T5256O71O0AI0QW19HFLT50UHF4773FGGZK12QZO339698T72M2IW730N0W04X471N12I9YMK5VNI057T295W3818R7W4YPY4072PA1H602U63802CD5BB3C2AD65A7632FD1BBCE8F4FE2367==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/></div>

                  </td>
                </tr>

                    <tr><td>
                        <?php
 if(isset($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['content_tpl'])){ $X45M4IR9Q340M1856TL9218ZQG3CJD3MT478M0U2AFU76283FUE38LO03YI0X15085PKYJE76K14186N6096636I8I2A20ZWXZ1LMAIDNB02NE5KPP6ZOSSUK85CIN57490DV1VIA34L93G381914648AFF73AB91E1BA9BB788FFC34941017 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['content_tpl']; }else{ $X45M4IR9Q340M1856TL9218ZQG3CJD3MT478M0U2AFU76283FUE38LO03YI0X15085PKYJE76K14186N6096636I8I2A20ZWXZ1LMAIDNB02NE5KPP6ZOSSUK85CIN57490DV1VIA34L93G381914648AFF73AB91E1BA9BB788FFC34941017 = ''; } ?>
                        <textarea class="form-control " name="content_tpl"  rows="10" placeholder="HTML Code"><?php echo htmlspecialchars($X45M4IR9Q340M1856TL9218ZQG3CJD3MT478M0U2AFU76283FUE38LO03YI0X15085PKYJE76K14186N6096636I8I2A20ZWXZ1LMAIDNB02NE5KPP6ZOSSUK85CIN57490DV1VIA34L93G381914648AFF73AB91E1BA9BB788FFC34941017); ?></textarea>
                      </td></tr>

              </table>
            </div> <!-- /panel-body -->

          </form>

          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->




    </div> <!-- /post-body-content -->

  </div><!-- /post-body -->
</div><!-- /poststuff -->