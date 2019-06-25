<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder ">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Extracted Content Filtering","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==9))echo 'style="display:none;"' ?>>
          <form id="form9"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form9" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the content selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="css_content_filter_div" class="margin-b-8">
                      <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['css_content_filter'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['css_content_filter'] as $JUXYLVE34PKJ62Q4IP81238H6XZMY0239K71UMF30O7VGF6500FZTH296909FD1BDFA0EA84E2C4ADC0EDA7697A4791){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 310px;" class="form-control" name="css_content_filter_selector[]"  value="<?php echo htmlspecialchars($JUXYLVE34PKJ62Q4IP81238H6XZMY0239K71UMF30O7VGF6500FZTH296909FD1BDFA0EA84E2C4ADC0EDA7697A4791['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 80px;" class="form-control" name="css_content_filter_index[]"  value="<?php echo htmlspecialchars($JUXYLVE34PKJ62Q4IP81238H6XZMY0239K71UMF30O7VGF6500FZTH296909FD1BDFA0EA84E2C4ADC0EDA7697A4791['index']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" style="width: 180px;" name="css_content_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$JUXYLVE34PKJ62Q4IP81238H6XZMY0239K71UMF30O7VGF6500FZTH296909FD1BDFA0EA84E2C4ADC0EDA7697A4791['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$JUXYLVE34PKJ62Q4IP81238H6XZMY0239K71UMF30O7VGF6500FZTH296909FD1BDFA0EA84E2C4ADC0EDA7697A4791['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>

                              <option value="0" <?php selected( 0,$JUXYLVE34PKJ62Q4IP81238H6XZMY0239K71UMF30O7VGF6500FZTH296909FD1BDFA0EA84E2C4ADC0EDA7697A4791['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                                <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$JUXYLVE34PKJ62Q4IP81238H6XZMY0239K71UMF30O7VGF6500FZTH296909FD1BDFA0EA84E2C4ADC0EDA7697A4791['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 310px;" class="form-control" name="css_content_filter_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 80px;" class="form-control" name="css_content_filter_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" style="width: 180px;" name="css_content_filter_apply_to[]">
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

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_css_filter_rules_btn" onclick="Z7KWU74PV817J320E63K52L13YGB1RLF4PZX0A834556FW5X4E8YQ8C41Q5E96D034QC5I45Z15K66ORWEJ0882TN9XK8654FE13C9C2B2E6B62DECA806E0AB320193()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the content between the two key words",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    Tips: <?php echo __('Keyword 2 can be empty, which means that delete everything after the keyword 1','wp-autoblog'); ?>; <?php echo __('(*) is Wildcards','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="keyword_content_filter_div" class="margin-b-8">
                      <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['keyword_content_filter'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['keyword_content_filter'] as $EPT6N9K58Z854RF2AR8F2R3K37DUE713D23HG73BEHQ2KBDD74B4F4OXT18F242BR8Z5W0L8G1B90FD663AA6CEC193AD7DE0B37CDF8320782){ ?>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 1: </div>
                            <input type="text"  class="form-control" name="keyword_content_filter_k1[]"  value="<?php echo htmlspecialchars($EPT6N9K58Z854RF2AR8F2R3K37DUE713D23HG73BEHQ2KBDD74B4F4OXT18F242BR8Z5W0L8G1B90FD663AA6CEC193AD7DE0B37CDF8320782['k1']); ?>" >
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 2: </div>
                            <input type="text"  class="form-control" name="keyword_content_filter_k2[]"  value="<?php echo htmlspecialchars($EPT6N9K58Z854RF2AR8F2R3K37DUE713D23HG73BEHQ2KBDD74B4F4OXT18F242BR8Z5W0L8G1B90FD663AA6CEC193AD7DE0B37CDF8320782['k2']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_content_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$EPT6N9K58Z854RF2AR8F2R3K37DUE713D23HG73BEHQ2KBDD74B4F4OXT18F242BR8Z5W0L8G1B90FD663AA6CEC193AD7DE0B37CDF8320782['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$EPT6N9K58Z854RF2AR8F2R3K37DUE713D23HG73BEHQ2KBDD74B4F4OXT18F242BR8Z5W0L8G1B90FD663AA6CEC193AD7DE0B37CDF8320782['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$EPT6N9K58Z854RF2AR8F2R3K37DUE713D23HG73BEHQ2KBDD74B4F4OXT18F242BR8Z5W0L8G1B90FD663AA6CEC193AD7DE0B37CDF8320782['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                                <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$EPT6N9K58Z854RF2AR8F2R3K37DUE713D23HG73BEHQ2KBDD74B4F4OXT18F242BR8Z5W0L8G1B90FD663AA6CEC193AD7DE0B37CDF8320782['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 1: </div>
                          <input type="text"  class="form-control" name="keyword_content_filter_k1[]"  value="" placeholder='<?php echo __('For example','wp-autoblog'); ?>: <div class="copyright" id="(*)">' >
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 2: </div>
                          <input type="text"  class="form-control" name="keyword_content_filter_k2[]"  value=""  placeholder='<?php echo __('For example','wp-autoblog'); ?>: </div>'>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_content_filter_apply_to[]">
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

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_keyword_filter_rules_btn" onclick="ZNL4GY0FQ3D982AFR2KJIQ074J12G3DY0I27Q3L471ZET65B0675A85E7BFBF53DC40C5E02CA91E63366()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


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
          <h5 class="panel-title"><?php echo __("HTML tags Filtering","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==11))echo 'style="display:none;"' ?>>
          <form id="form11"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form11" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the HTML tags selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('For example','wp-autopost'); ?>, <?php echo __('If you want to filter out html &lta> tag, only need to fill out &nbsp; " a "','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="html_tag_filter_div" class="margin-b-8">
                      <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['html_tag_filter'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['html_tag_filter'] as $SK46Q9J834M8SB23300Y44G5VI0CC048490DFT3P07ZA3H13B6F0V00V93ZOQ8V21IK15679O2BJAR1IUA55326PFYA44039F6D84BHC106Z2RF4BA9614DD93ED4F2A75BE79ADB21C69F9518){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 310px;" class="form-control" name="html_tag_filter_selector[]"  value="<?php echo htmlspecialchars($SK46Q9J834M8SB23300Y44G5VI0CC048490DFT3P07ZA3H13B6F0V00V93ZOQ8V21IK15679O2BJAR1IUA55326PFYA44039F6D84BHC106Z2RF4BA9614DD93ED4F2A75BE79ADB21C69F9518['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 80px;" class="form-control" name="html_tag_filter_index[]"  value="<?php echo htmlspecialchars($SK46Q9J834M8SB23300Y44G5VI0CC048490DFT3P07ZA3H13B6F0V00V93ZOQ8V21IK15679O2BJAR1IUA55326PFYA44039F6D84BHC106Z2RF4BA9614DD93ED4F2A75BE79ADB21C69F9518['index']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" style="width: 180px;" name="html_tag_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$SK46Q9J834M8SB23300Y44G5VI0CC048490DFT3P07ZA3H13B6F0V00V93ZOQ8V21IK15679O2BJAR1IUA55326PFYA44039F6D84BHC106Z2RF4BA9614DD93ED4F2A75BE79ADB21C69F9518['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$SK46Q9J834M8SB23300Y44G5VI0CC048490DFT3P07ZA3H13B6F0V00V93ZOQ8V21IK15679O2BJAR1IUA55326PFYA44039F6D84BHC106Z2RF4BA9614DD93ED4F2A75BE79ADB21C69F9518['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$SK46Q9J834M8SB23300Y44G5VI0CC048490DFT3P07ZA3H13B6F0V00V93ZOQ8V21IK15679O2BJAR1IUA55326PFYA44039F6D84BHC106Z2RF4BA9614DD93ED4F2A75BE79ADB21C69F9518['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                                <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$SK46Q9J834M8SB23300Y44G5VI0CC048490DFT3P07ZA3H13B6F0V00V93ZOQ8V21IK15679O2BJAR1IUA55326PFYA44039F6D84BHC106Z2RF4BA9614DD93ED4F2A75BE79ADB21C69F9518['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 310px;" class="form-control" name="html_tag_filter_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 80px;" class="form-control" name="html_tag_filter_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" style="width: 180px;" name="html_tag_filter_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                              <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_html_tag_rules_btn" onclick="CH5DK78WCE18SZ61723T9002P17RB8329324A2LZ86H928W8C6KHF7766O0N7524AC1380CCA3F6C66629FE09F5ECF6609709()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


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
          <h5 class="panel-title"><?php echo __("Extracted Content Replacement","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==12))echo 'style="display:none;"' ?>>
          <form id="form12"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form12" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Replace the content selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$P68KNL34CS388Z9JSU12SAP4ZLX4RY4T5256O71O0AI0QW19HFLT50UHF4773FGGZK12QZO339698T72M2IW730N0W04X471N12I9YMK5VNI057T295W3818R7W4YPY4072PA1H602U63802CD5BB3C2AD65A7632FD1BBCE8F4FE2367==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/><br/></div>

                    <div id="css_replace_div" class="margin-b-8">
                      <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['css_replace'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['css_replace'] as $E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765){ ?>
                          <div>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" class="form-control" name="css_replace_selector[]"  value="<?php echo htmlspecialchars($E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text"  size="1" class="form-control" name="css_replace_index[]"  value="<?php echo $E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765['index']; ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" name="css_replace_apply_to[]">
                              <option value="b" <?php selected( 'b',$E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                              <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                                <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                              <?php } ?>
                            </select>
                            <span class="input-group-btn inputdeleteBtn1">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <textarea class="form-control " name="css_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"><?php echo htmlspecialchars($E42KXHZ44Z0GX222N2GM32VDGU7KQS9810HBI3PJ34D585A6KR86M8M531K24993AH29S22B3D94E9B87109256C9FFC310FBE8EC854D7765['replace_with']); ?></textarea><br/></div>
                          <?php
 } }else{ ?>
                        <div>
                        <div class="input-group margin-b-8 ">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text"  class="form-control" name="css_replace_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text"  size="1" class="form-control" name="css_replace_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" name="css_replace_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                              <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>"><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn1">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <textarea class="form-control " name="css_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"></textarea><br/></div>

                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_css_replace_rules_btn" onclick="VN4PWM09190HI083IN91Q3K8N0E57M07CAU9FN46S200A5RD15E5ZMNPTL0I35TEN05Z6858LWHADU94DK0BDMCH58JQ3N0L2YEJVIEKFLKEFW075NRTEV2T85Y65JL0CAE58A5B6E3BAB36300598D6D08B3C660780()"><?php echo __('Add More','wp-autoblog'); ?></a>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __("Replace the content used by keywords",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$P68KNL34CS388Z9JSU12SAP4ZLX4RY4T5256O71O0AI0QW19HFLT50UHF4773FGGZK12QZO339698T72M2IW730N0W04X471N12I9YMK5VNI057T295W3818R7W4YPY4072PA1H602U63802CD5BB3C2AD65A7632FD1BBCE8F4FE2367==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span></div>
                    <div class="margin-t-8"><span class="gray">
    Tips: <?php echo __('Replace with can be empty, which means that delete the keyword','wp-autoblog'); ?>; <?php echo __('(*) is Wildcards','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="keyword_replace_div" class="margin-b-8">
                      <?php
 if(count(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['keyword_replace'])>0){ foreach($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['keyword_replace'] as $ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620){ ?>
                            <div>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?>: </div>
                            <input type="text"  class="form-control" name="keyword_replace_keyword[]"  value="<?php echo htmlspecialchars($ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['keyword']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Replace Attribute Contents','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_replace_attribute[]">
                              <option value="1" <?php selected( 1,$ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['replace_attribute'] ); ?>><?php echo __('Yes'); ?></option>
                              <option value="0" <?php selected( 0,$ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['replace_attribute'] ); ?>><?php echo __('No'); ?></option>
                            </select>
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_replace_apply_to[]">
                              <option value="b" <?php selected( 'b',$ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                              <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                                <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>" <?php selected( $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152,$ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['apply_to'] ); ?> ><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                              <?php } ?>
                            </select>
                            <span class="input-group-btn inputdeleteBtn1">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                              <textarea class="form-control " name="keyword_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"><?php echo htmlspecialchars($ECC5MSV5IUTJ3CP7746W240GA4MKY652I03FL88UN2181W33118K9W6QQ6CDBB2B080334247CFE18C6851F9F4551620['replace_with']); ?></textarea><br/>
                            </div>
                          <?php
 } }else{ ?>
                        <div>
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?>: </div>
                          <input type="text"  class="form-control" name="keyword_replace_keyword[]"  value="" placeholder='<?php echo __('For example','wp-autoblog'); ?>: <div class="copyright">(*)</div>' >
                          <div class="input-group-addon" ><?php echo __('Replace Attribute Contents','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_replace_attribute[]">
                            <option value="1"><?php echo __('Yes','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('No','wp-autoblog'); ?></option>
                          </select>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_replace_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($Q3DIMP6F860249946PHMO61Y7RAMTV5ZSF501172KBTXFC84L51RL790981KF28Z915ACQ303ECXK48YI8311D16343EFGV1UG458IQGZ769C0A94CBFF4150B3A2B26145BE311D5FC9241795 as $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152=>$UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202){ ?>
                              <option value="<?php echo $K3O09L2ZEL1VIB12T08R24K11X9SZ8C7GM660475K94OF63318345015347K1C1G789BE1V58D1Y5RYT63471OIU6M911DQ37KWWW4U3FV5D3C6E0B8A9C15224A8228B9A98CA1531D9152; ?>"><?php echo $UO77AE19S818P95119A6YY526270RX00459475M687GR283C77A4GRZR5W3R9261T01W8J9ZJ2MO8PE8L52063C1608D6E0BAF80249C42E2BE58043202; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn1">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                          <textarea class="form-control " name="keyword_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"></textarea><br/>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_keyword_replace_rules_btn" onclick="WN502K9J2YOP7PWP668KU5114B9337681AQV26C469J876H55636N2QB5PQ37N71908SARZF81VA1W1782CG04B353YEVHM882T90LX0Q80WZ9Y8D7WK9MQWJ7H7A862TJU8HED4863RE8720165950B8BDAE50AA8C9723B8358D08871()"><?php echo __('Add More','wp-autoblog'); ?></a>


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

    </div> <!-- /post-body-content -->

  </div><!-- /post-body -->
</div><!-- /poststuff -->