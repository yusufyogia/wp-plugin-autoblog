

<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder columns-2">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">中文 简体/繁体 转换</h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==18))echo 'style="display:none;"' ?>>
          <form id="form18"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form18" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td colspan="2">
                    <label>将中文简体文章转换为繁体（或将中文繁体文章转换为简体），获取唯一性和可读性都具备的文章。</label>
                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label>转换为:</label>
                  </td>
                  <td>
                    <?php
 if(!isset($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['zh_conversion'])){ $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['zh_conversion'] = 0; } ?>
                    <select class="input-default" name="zh_conversion" >
                      <option value="0" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['zh_conversion']==0) echo 'selected="true"'; ?>>不转换</option>
                      <option value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['zh_conversion']==1) echo 'selected="true"'; ?>>简体中文</option>
                      <option value="2" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['zh_conversion']==2) echo 'selected="true"'; ?>>繁體中文</option>
                      <option value="3"   <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['zh_conversion']==3) echo 'selected="true"'; ?>>港澳繁體</option>
                      <option value="4"   <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['zh_conversion']==4) echo 'selected="true"'; ?>>台灣正體</option>
                    </select>
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
          <h5 class="panel-title"><?php echo __('Rewrite (Spinning)','wp-autoblog'); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==19))echo 'style="display:none;"' ?>>
          <form id="form19"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form19" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __('Use Rewriter','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <?php
 if(!isset($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite'])){ $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite'] = 0; } ?>
                    <select class="input-default" name="rewrite" id="rewrite_select">
                      <option value="0" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']==1) echo 'selected="true"'; ?>><?php echo __('Google Translator','wp-autoblog'); ?></option>
                      <option value="5" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']==5) echo 'selected="true"'; ?>><?php echo __('YouDao Translator','wp-autoblog'); ?></option>
                      <option value="2" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']==2) echo 'selected="true"'; ?>><?php echo __('Baidu Translator','wp-autoblog'); ?></option>
                      <option value="3" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']==3) echo 'selected="true"'; ?>><?php echo __('WordAi'); ?></option>
                      <option value="4" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']==4) echo 'selected="true"'; ?>><?php echo __('Spin Rewriter'); ?></option>
                    </select>
                  </td>
                </tr>
              </table>

              <table class="table settingTable" id="googleTranslator" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']!=1){ echo 'style="display:none;"'; } ?> >
                <?php
 if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']!=1){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734 = 'zh'; $PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402 = 'en'; else: $IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734 = 'en'; $PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402 = 'zh'; endif; }else{ $IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_origi_language']; $PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_trans_language']; } ?>
                <tr>
                  <td colspan="2">
                    <label><?php echo __("Use Google Translator can get very unique article.",'wp-autoblog'); ?></label>

                    <p><code><?php echo __('Will first translate into','wp-autoblog'); ?> <strong><span id="rewrite_trans_language_span_baidu"><?php echo BFUA2TUJS7817B7TH395UK5J4PY0K9U5354P565U9N9M2XYTE85IQS0FP9LC43C724C0BAF67BF52A6EA8CED4BC3075269::QY6QB0KUM0B3T950E2DUZU0W3L6776Q7M0B7T20FBB0D4D9A6B4E3300F65906130AEBD3960($PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402); ?></span></strong> <?php echo __('and then translated back to','wp-autoblog'); ?> <strong><span id="rewrite_origi_language_span_baidu"><?php echo BFUA2TUJS7817B7TH395UK5J4PY0K9U5354P565U9N9M2XYTE85IQS0FP9LC43C724C0BAF67BF52A6EA8CED4BC3075269::QY6QB0KUM0B3T950E2DUZU0W3L6776Q7M0B7T20FBB0D4D9A6B4E3300F65906130AEBD3960($IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734); ?></span></strong></code></p>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_origi_language_google" id="rewrite_origi_language_google">
                      <?php echo BFUA2TUJS7817B7TH395UK5J4PY0K9U5354P565U9N9M2XYTE85IQS0FP9LC43C724C0BAF67BF52A6EA8CED4BC3075269::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translate Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_trans_language_google" id="rewrite_trans_language_google">
                      <?php echo BFUA2TUJS7817B7TH395UK5J4PY0K9U5354P565U9N9M2XYTE85IQS0FP9LC43C724C0BAF67BF52A6EA8CED4BC3075269::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not rewrite','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="rewrite_protected_words_google" id="rewrite_protected_words_google" ><?php echo @$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="baiduTranslator"  -->

              <table class="table settingTable" id="baiduTranslator" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']!=2){ echo 'style="display:none;"'; } ?> >
                <?php
 if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite']!=2){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734 = 'zh'; $PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402 = 'en'; else: $IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734 = 'en'; $PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402 = 'zh'; endif; }else{ $IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_origi_language']; $PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_trans_language']; } ?>
                <tr>
                  <td colspan="2">
                    <label><?php echo __("Use Baidu Translator can get very unique article, <strong>and is absolutely free</strong>.",'wp-autoblog'); ?></label>

                    <p><code><?php echo __('Will first translate into','wp-autoblog'); ?> <strong><span id="rewrite_trans_language_span_baidu"><?php echo FJP6X769ZS3H4F26025B8E1KAV4Y10I223W3AL1A1Y25O0X13JE0M45966YX2XZ344I02Z2BYTR98BJ0AR7VB3S3J4S27314GZ6082HW166X2LNVJ18FXNO7DN65C88VZ3OD61139318A9F387E8FAD2DCA5268E5BD3615::QY6QB0KUM0B3T950E2DUZU0W3L6776Q7M0B7T20FBB0D4D9A6B4E3300F65906130AEBD3960($PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402); ?></span></strong> <?php echo __('and then translated back to','wp-autoblog'); ?> <strong><span id="rewrite_origi_language_span_baidu"><?php echo FJP6X769ZS3H4F26025B8E1KAV4Y10I223W3AL1A1Y25O0X13JE0M45966YX2XZ344I02Z2BYTR98BJ0AR7VB3S3J4S27314GZ6082HW166X2LNVJ18FXNO7DN65C88VZ3OD61139318A9F387E8FAD2DCA5268E5BD3615::QY6QB0KUM0B3T950E2DUZU0W3L6776Q7M0B7T20FBB0D4D9A6B4E3300F65906130AEBD3960($IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734); ?></span></strong></code></p>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_origi_language_baidu" id="rewrite_origi_language_baidu">
                      <?php echo FJP6X769ZS3H4F26025B8E1KAV4Y10I223W3AL1A1Y25O0X13JE0M45966YX2XZ344I02Z2BYTR98BJ0AR7VB3S3J4S27314GZ6082HW166X2LNVJ18FXNO7DN65C88VZ3OD61139318A9F387E8FAD2DCA5268E5BD3615::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($IZ0PV902ICE9E47BJM1TCZ53919E19L0C0A941P27HU15BHM1U2A5ADM0H99PG2SY3H524DQZP896F4L64DIRJ02087544R70W2X35J2R83D59AZ077T4K37054I7R60940A3AAAFE91DD45C888141B2FC054BAF7734); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translate Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_trans_language_baidu" id="rewrite_trans_language_baidu">
                      <?php echo FJP6X769ZS3H4F26025B8E1KAV4Y10I223W3AL1A1Y25O0X13JE0M45966YX2XZ344I02Z2BYTR98BJ0AR7VB3S3J4S27314GZ6082HW166X2LNVJ18FXNO7DN65C88VZ3OD61139318A9F387E8FAD2DCA5268E5BD3615::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($PT12N572X571L18W6HBK55A6QN98W75C81F625R2F52B298269XHN03784A129J2R26VJQF4I74003897813VXH58O20J321665283B21E14672D8E5FB5400DE5462EC270402); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not rewrite','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="rewrite_protected_words_baidu" id="rewrite_protected_words_baidu" ><?php echo @$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="baiduTranslator"  -->


              <table class="table settingTable" >
                <tr>
                  <td class="setName">
                    <label><?php echo __('Also Rewrite The Title','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_title" >
                      <option value="0" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_title']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_title']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('When Rewrite Failure Will Not Publish','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_failure" >
                      <option value="0" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_failure']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['rewrite_failure']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                    </select>
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
          <h5 class="panel-title"><?php echo __('Translate','wp-autoblog'); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($A8A5611471495O43R1RB0TYXR38C2U9075E208S16PC9070VMG8FXJ9D20E6NNVS1N015Z576E2BAAF3B97DBEEF01C0043275F9A0E78239['showBox']==20))echo 'style="display:none;"' ?>>
          <form id="form20"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form20" />
            <input type="hidden" name="id" value="<?php echo $NL625401Y3WNGK83X5CP34655B614W327C6HQYLBCE02TL9QR03OCO50S1X4P69JPNW2JCREG014H760649U3148C00I51A4D12667CJ14F9V20M9R490C6SLWK73D57746CC8160496AEFC9FB306B6BA24E38413; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __('Use Translator','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <?php
 if(!isset($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans'])){ $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans'] = 0; } ?>
                    <select class="input-default" name="trans" id="trans_select">
                      <option value="0" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']==1) echo 'selected="true"'; ?>><?php echo __('Google Translator','wp-autoblog'); ?></option>
                      <option value="3" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']==3) echo 'selected="true"'; ?>><?php echo __('YouDao Translator','wp-autoblog'); ?></option>
                      <option value="2" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']==2) echo 'selected="true"'; ?>><?php echo __('Baidu Translator','wp-autoblog'); ?></option>
                    </select>
                  </td>
                </tr>
              </table>

              <table class="table settingTable" id="googleTranslator_trans" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']!=1){ echo 'style="display:none;"'; } ?> >
                <?php
 if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']!=1){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996 = 'zh'; $PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711 = 'en'; else: $Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996 = 'en'; $PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711 = 'zh'; endif; }else{ $Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_origi_language']; $PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_trans_language']; } ?>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_origi_language_google" id="trans_origi_language_google">
                      <?php echo BFUA2TUJS7817B7TH395UK5J4PY0K9U5354P565U9N9M2XYTE85IQS0FP9LC43C724C0BAF67BF52A6EA8CED4BC3075269::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translated into','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_trans_language_google" id="trans_trans_language_google">
                      <?php echo BFUA2TUJS7817B7TH395UK5J4PY0K9U5354P565U9N9M2XYTE85IQS0FP9LC43C724C0BAF67BF52A6EA8CED4BC3075269::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not translated','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="trans_protected_words_google" id="trans_protected_words_google" ><?php echo @$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="googleTranslator"  -->

              <table class="table settingTable" id="baiduTranslator_trans" <?php if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']!=2){ echo 'style="display:none;"'; } ?> >
                <?php
 if($VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans']!=2){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996 = 'zh'; $PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711 = 'en'; else: $Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996 = 'en'; $PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711 = 'zh'; endif; }else{ $Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_origi_language']; $PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711 = $VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_trans_language']; } ?>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_origi_language_baidu" id="trans_origi_language_baidu">
                      <?php echo FJP6X769ZS3H4F26025B8E1KAV4Y10I223W3AL1A1Y25O0X13JE0M45966YX2XZ344I02Z2BYTR98BJ0AR7VB3S3J4S27314GZ6082HW166X2LNVJ18FXNO7DN65C88VZ3OD61139318A9F387E8FAD2DCA5268E5BD3615::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($Q63Z8TP7NQ8N173WJ225408R44H19M82MGR74ZIC5B6D05SH7GJT4383I06306K57B5GN1807M9I36W2F7388N41JL91Z6D7X53517770EDD814212FC71221DCEE7122C7996); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translated into','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_trans_language_baidu" id="trans_trans_language_baidu">
                      <?php echo FJP6X769ZS3H4F26025B8E1KAV4Y10I223W3AL1A1Y25O0X13JE0M45966YX2XZ344I02Z2BYTR98BJ0AR7VB3S3J4S27314GZ6082HW166X2LNVJ18FXNO7DN65C88VZ3OD61139318A9F387E8FAD2DCA5268E5BD3615::T87LL6FJ7JY2C0TI34EMM33BZ877055OWKUR50T5QQB2606GXVJ07091X42TX9TH9637507F14BD49ADF1E9076223AC9DE25237($PT1TO7191B569D414346640N91OS72AE760O101956FD8C12EBD2869745E9EBFA1F29363711); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not translated','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="trans_protected_words_baidu" id="trans_protected_words_baidu" ><?php echo @$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="baiduTranslator"  -->


              <table class="table settingTable" >
                <tr>
                  <td class="setName">
                    <label><?php echo __('Translate Method','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_method" >
                      <option value="0" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_method']==0) echo 'selected="true"'; ?>><?php echo __('Translate All','wp-autoblog'); ?></option>
                      <option value="1" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_method']==1) echo 'selected="true"'; ?>><?php echo __('Only Translate Title','wp-autoblog'); ?></option>
                      <option value="2" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_method']==2) echo 'selected="true"'; ?>><?php echo __('Only Translate Content','wp-autoblog'); ?></option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('When Translate Failure Will Not Publish','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_failure" >
                      <option value="0" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_failure']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if(@$VGAFPC62HBWR2P0NBLW842SMR1X77PB78Y7Z27P314B9BRFNS066VL1HX487MJKGN6O4PCIH012916608B1CA731C61B3742CC3023289246['trans_failure']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                    </select>
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