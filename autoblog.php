<?php
/*
Plugin Name: WP-AutoBlog Trial Version
Plugin URI: http://wp-autoblog.net
Description: WP-AutoBlog Plugin can automatically post content from any other site. It is very simple to use, without complicated setting, and powerful enough.
Version: 1.2.1
Author: WP-AutoBlog.NET
Author URI: http://wp-autopblog.net
*/
 error_reporting(0); define('WPAB_PATH',WP_PLUGIN_DIR.'/wp-autoblog-trial'); $D587687TCWFS4YI565Y3G1O36692X6Z563QV365V9UKMP8U9W3L472TZKYY9M806V8FJIX03P89D8Q40Z3T3E694KK6083NW63HRYP9ENF4T6769J41SV09321636QA9ZIM59X3D57538FFC922FBC3124F0429CC0BF79356759 = 'wp-autoblog-trial'; $S0680UDT9036K4173389KRD3W2U160D17NL37GLQJQV659BMHQ42HXEO9I1U449QSQA9X356S869M6792ZXC0D3V70W3B81744J34RLI0R171585DC640CB4D004B6702C0AC600324128 = WP_PLUGIN_URL.'/wp-autoblog-trial/'; $D587687TCWFS4YI565Y3G1O36692X6Z563QV365V9UKMP8U9W3L472TZKYY9M806V8FJIX03P89D8Q40Z3T3E694KK6083NW63HRYP9ENF4T6769J41SV09321636QA9ZIM59X3D57538FFC922FBC3124F0429CC0BF79356759 = 'wp-autoblog'; $M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650 = $table_prefix.'autoblog_task'; $A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526 = $table_prefix.'autoblog_task_group'; $O1373GY774V9CRXGR6E262TPY50543S542419V33297P888IJZ1HVG6OO61U3LVC71BEWOG50L13669E3D0CF503ED7617A6E8CFF4DE6AAC8296 = $table_prefix.'autoblog_queue'; $H7K49Q0F07X72JI54B1ZK9F2TMVJ25J5KY9U1961G79AQ75Y33SM9ZQ5VZ8L9S3S7LT26FDL812Q6326NN7I3I5H23520N9F90549B7F001812C49C8CCCC9160F3AE2E000A5039 = $table_prefix.'autoblog_posts'; $X1W2NO3OS76F65LA21C91ZMN9E51V226VS07YKFUN0X3UZ526O5A32D238HN3630IYE5971W962479AVZ13N0B8N3Q9RES24R4WE0F87JAP8F9JLJU881ENH9U1JS250F738797E2A93367DFBB8AB76CA4B2F2012 = $table_prefix.'autoblog_objects'; $SX9GQ57O6ML2Z4EU992UYV293920T7F4S0R4P0N55966JI30A0845FLCQKVK08097XJ46270OYAW1CM720886NF681YJI78PY1800H978WXTP3380834D3OC78PEYDTG1436A47832A83062B69AD76A6A59D7362919=array(); $SX9GQ57O6ML2Z4EU992UYV293920T7F4S0R4P0N55966JI30A0845FLCQKVK08097XJ46270OYAW1CM720886NF681YJI78PY1800H978WXTP3380834D3OC78PEYDTG1436A47832A83062B69AD76A6A59D7362919[]='Did not find the article URL, Please check the [Article Source Settings => Article URL matching rules]'; $SX9GQ57O6ML2Z4EU992UYV293920T7F4S0R4P0N55966JI30A0845FLCQKVK08097XJ46270OYAW1CM720886NF681YJI78PY1800H978WXTP3380834D3OC78PEYDTG1436A47832A83062B69AD76A6A59D7362919[]='Will fetch and publish articles in the following order'; $SX9GQ57O6ML2Z4EU992UYV293920T7F4S0R4P0N55966JI30A0845FLCQKVK08097XJ46270OYAW1CM720886NF681YJI78PY1800H978WXTP3380834D3OC78PEYDTG1436A47832A83062B69AD76A6A59D7362919[]='All found articles in the following by use this [Article URL matching rules]'; $SX9GQ57O6ML2Z4EU992UYV293920T7F4S0R4P0N55966JI30A0845FLCQKVK08097XJ46270OYAW1CM720886NF681YJI78PY1800H978WXTP3380834D3OC78PEYDTG1436A47832A83062B69AD76A6A59D7362919[]='Did not find the title of the article, Please check the rules'; $SX9GQ57O6ML2Z4EU992UYV293920T7F4S0R4P0N55966JI30A0845FLCQKVK08097XJ46270OYAW1CM720886NF681YJI78PY1800H978WXTP3380834D3OC78PEYDTG1436A47832A83062B69AD76A6A59D7362919[]='Did not find the contents of the article, Please check the rules'; $SX9GQ57O6ML2Z4EU992UYV293920T7F4S0R4P0N55966JI30A0845FLCQKVK08097XJ46270OYAW1CM720886NF681YJI78PY1800H978WXTP3380834D3OC78PEYDTG1436A47832A83062B69AD76A6A59D7362919[]='The source HTML Code for debug'; function UI26G7ZPX97JOW432CTU77H26DL580QCC1SX64QPO8LNLL6VWL0IT8HU9I22PV0GOE889G7DX0D0EVCOM12MA273G6PDY1Z4373I8I080CK2Q3DS9UEJM023VP50G6DE39AC0B4D0AE438A73087CCBB8ECF14084(){ if ($_SERVER['HTTPS'] === 1) { return true; } elseif ($_SERVER['HTTPS'] === 'on') { return true; } elseif ($_SERVER['SERVER_PORT'] == 443) { return true; } return false; } load_plugin_textdomain('wp-autoblog', false, plugin_basename( dirname( __FILE__ ) ) . '/languages'); if (!function_exists('add_action')) { $GB23O4MI854E817T92HL8WS1X00I8271L8O070622O3V15B1S6874S4Z226A2FPL5783A1Y052WE9VMZID16581C666F10C44A78B3A24BD6BE27DA95B32730 = '../../..'; if (file_exists($GB23O4MI854E817T92HL8WS1X00I8271L8O070622O3V15B1S6874S4Z226A2FPL5783A1Y052WE9VMZID16581C666F10C44A78B3A24BD6BE27DA95B32730.'/wp-load.php')) { require_once($GB23O4MI854E817T92HL8WS1X00I8271L8O070622O3V15B1S6874S4Z226A2FPL5783A1Y052WE9VMZID16581C666F10C44A78B3A24BD6BE27DA95B32730.'/wp-load.php'); } else { require_once($GB23O4MI854E817T92HL8WS1X00I8271L8O070622O3V15B1S6874S4Z226A2FPL5783A1Y052WE9VMZID16581C666F10C44A78B3A24BD6BE27DA95B32730.'/wp-config.php'); } } function X1XSIV0I762MKI2U254E7XA4DU244K634161H134S2E90HRQBK8V04NTL060A8142B63C4F267FEE893389DFAEA73E1871(){ remove_submenu_page( 'autoblog-tasks', 'autoblog-groups' ); remove_submenu_page( 'autoblog-tasks', 'autoblog-task-setting' ); remove_submenu_page( 'autoblog-tasks', 'autoblog-options-watermark' ); remove_submenu_page( 'autoblog-tasks', 'autoblog-options-proxy' ); } add_action('admin_head', 'X1XSIV0I762MKI2U254E7XA4DU244K634161H134S2E90HRQBK8V04NTL060A8142B63C4F267FEE893389DFAEA73E1871'); function W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365() { echo '<link rel="stylesheet" type="text/css"  href="'.plugins_url( '/css/bootstrap.css' , __FILE__ ).'"/>'; echo '<script type="text/javascript" src="'.plugins_url( '/js/bootstrap.min.js' , __FILE__ ).'"></script>'; } function E841H78J510L5756C5F5ZWSL65XXC0VP11G49L9MB8ABA05B7934F073A9E427284F4D16005121() { wp_register_script( 'autoblogJS', plugins_url( '/js/bootstrap.min.js' , __FILE__ ), array('jquery'), '' ); wp_enqueue_script( 'autoblogJS' ); wp_register_style( 'autoblogCSS', plugins_url( '/css/bootstrap.css' , __FILE__ ), array(), '', 'all' ); wp_enqueue_style( 'autoblogCSS' ); } add_action('admin_menu', 'D89F7GWK5QZ3UY2199ZQ0L5OZ9P2H1578X01X89I6A02BF73JN641OCATZB6C3LR7S28B9X2095XUYL10CO0D23TJ03Y26E3AY0229VYQ1886DFD3BB95351E69F149AFA8E4F72B03531430'); function D89F7GWK5QZ3UY2199ZQ0L5OZ9P2H1578X01X89I6A02BF73JN641OCATZB6C3LR7S28B9X2095XUYL10CO0D23TJ03Y26E3AY0229VYQ1886DFD3BB95351E69F149AFA8E4F72B03531430() { if (function_exists('add_menu_page')) { $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 = add_menu_page(__( 'AutoBlog Trial','wp-autoblog'),__( 'AutoBlog Trial','wp-autoblog'), 'administrator', 'autoblog-tasks','P4GK6XB59AZ7KR7EO2OKVGP71NUN8LCD028953JZ5EZ9YL1P729YFAO1860D59900807F1EDEB83D4C22B64D7927A260CEF02272',WP_PLUGIN_URL.'/wp-autoblog-trial/images/menu_icon.png'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); } if (function_exists('add_submenu_page')) { $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 = add_submenu_page('autoblog-tasks', __('Task Groups'), __('Task Groups'), 'administrator', 'autoblog-groups','QPW3L980079RA7K0E4A88K2P6VZK34TPLQ60X500LP0AB02BN3FMJF1U6635UQJ15XTN86ONE64ESK6OM6OOWBUD87AA8E5C010ECCF90139163D97A23F926226'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 =add_submenu_page('autoblog-tasks', __('Task Setting'), __('Task Setting'), 'administrator', 'autoblog-task-setting','Z871NV835L8365083AP8079E638KXXPVR5Z61K92A7OPRJTCNXY351QLB694U6088ERLL0O4560H9L5G1FTAHI6W962OSQ6YXLU78X0IE9LM5Y19OHO273617Q96XVVM0F9DFB854B456F5ECDEAAB5154B2DD8C66550'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 =add_submenu_page('autoblog-tasks', __('Posts'), __('Posts'), 'administrator', 'autoblog-posts','R0BU48996D641VFZ85XMXSD2L1I390Y65KQ4B655EQ5C058EOQK00V82ED4FJOQ41AV424GKEH2TR483W8GW06J1HO9F65YM42906E09589EFB41E420D9A1BA12BA75EDB70676'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 =add_submenu_page('autoblog-tasks', __('Media Library'), __('Media Library'), 'administrator', 'autoblog-objects','QMU5BL9484V76HE6223V1C1N56KZZ6EV5FFQT06725RH7Z5P29798WP0550PI6NRC4ALT42O3FBP5I45H13525QO56GM011JA61JJKG75H09L16757TB4D2MS441M82I533F6D7F84941C0BA74C662CC1EF545C6D64D3470'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 =add_submenu_page('autoblog-tasks', __('Options','wp-autoblog'), __('Options','wp-autoblog'), 'administrator', 'autoblog-options','H8097465L07448B7HO6KK837F47X70WV0O3R0HUEL79VS0W0JM5F44T6X8QMDSW050Q04G1QDT0R8N5D1YKUS84112610F0135P58YD2C537591848AE36D1C0EF1700F6759013163036'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 =add_submenu_page('autoblog-tasks', __('watermark'), __('watermark'), 'administrator', 'autoblog-options-watermark','H3825D226B1169271114JXH8V52X7RHO49LB9UBI3TCM73Y16527SF98G49I142FLQZ74C37210CC3A5BE90FF0B642E03E701A53964'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 =add_submenu_page('autoblog-tasks', __('proxy'), __('proxy'), 'administrator', 'autoblog-options-proxy','BIRZ354J80C779T84LYO9QAW66T51TS8AP2I2462T2KC9821JST793OP174I703DII0HHM9A61Y4ETXM902091G352AE0C89F8C287F8E2E0E5639718457CDBA7252'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774 =add_submenu_page('autoblog-tasks', __('自媒体号采集'), __('自媒体号采集'), 'administrator', 'autoblog-sn-task','T0A4Y52XK686H5GI44PEQZV907Y8CJ0LI0396E59GNELLOZ1BD90MWKYV049R683350731863483A185ABFC2E139C0E0EF19206'); add_action( 'admin_head-'. $W422B38Q173FQ4013255C318J2BPHI1QLQ886HW21CKSCU5SNL9SBZ0DE3B671X3S5H38PM10C55R9T7CGFQ77K36NRY446K7T3L4W009N6PO999311OD555Y09QA4A7CB8639D324028939D7FF53B2A011F05774, 'W7D6I9226MGH8838596Y28AHJ1ES4Q31TN48DORJFFLZ2ZKO3L49ED0745FFAFE84821EDD04DBEA57A52D1365' ); } } function P4GK6XB59AZ7KR7EO2OKVGP71NUN8LCD028953JZ5EZ9YL1P729YFAO1860D59900807F1EDEB83D4C22B64D7927A260CEF02272(){ include_once WPAB_PATH.'/admin/autoblog.tasks.php'; } function R0BU48996D641VFZ85XMXSD2L1I390Y65KQ4B655EQ5C058EOQK00V82ED4FJOQ41AV424GKEH2TR483W8GW06J1HO9F65YM42906E09589EFB41E420D9A1BA12BA75EDB70676(){ include_once WPAB_PATH.'/admin/autoblog.posts.php'; } function QMU5BL9484V76HE6223V1C1N56KZZ6EV5FFQT06725RH7Z5P29798WP0550PI6NRC4ALT42O3FBP5I45H13525QO56GM011JA61JJKG75H09L16757TB4D2MS441M82I533F6D7F84941C0BA74C662CC1EF545C6D64D3470(){ include_once WPAB_PATH.'/admin/autoblog.objects.php'; } function QPW3L980079RA7K0E4A88K2P6VZK34TPLQ60X500LP0AB02BN3FMJF1U6635UQJ15XTN86ONE64ESK6OM6OOWBUD87AA8E5C010ECCF90139163D97A23F926226(){ include_once WPAB_PATH.'/admin/autoblog.groups.php'; } function Z871NV835L8365083AP8079E638KXXPVR5Z61K92A7OPRJTCNXY351QLB694U6088ERLL0O4560H9L5G1FTAHI6W962OSQ6YXLU78X0IE9LM5Y19OHO273617Q96XVVM0F9DFB854B456F5ECDEAAB5154B2DD8C66550(){ include_once WPAB_PATH.'/admin/autoblog.task.setting.php'; } function H8097465L07448B7HO6KK837F47X70WV0O3R0HUEL79VS0W0JM5F44T6X8QMDSW050Q04G1QDT0R8N5D1YKUS84112610F0135P58YD2C537591848AE36D1C0EF1700F6759013163036(){ include_once WPAB_PATH.'/admin/autoblog.options.php'; } function H3825D226B1169271114JXH8V52X7RHO49LB9UBI3TCM73Y16527SF98G49I142FLQZ74C37210CC3A5BE90FF0B642E03E701A53964(){ include_once WPAB_PATH.'/admin/autoblog.options.watermark.php'; } function BIRZ354J80C779T84LYO9QAW66T51TS8AP2I2462T2KC9821JST793OP174I703DII0HHM9A61Y4ETXM902091G352AE0C89F8C287F8E2E0E5639718457CDBA7252(){ include_once WPAB_PATH.'/admin/autoblog.options.proxy.php'; } function T0A4Y52XK686H5GI44PEQZV907Y8CJ0LI0396E59GNELLOZ1BD90MWKYV049R683350731863483A185ABFC2E139C0E0EF19206(){ include_once WPAB_PATH.'/admin/autoblog.sn.tasks.php'; } function SATW9O926H41RE916NFMPCH0W8S33FKKA4L30E41RWL79T34C6413LB478A64B2G0E24M1N24R2M667E64129FE4027C174242B9C8156A9C6A6404() { global $wpdb,$table_prefix; $U6VK2007QK2724H67T886HQR25E05ER66N27JA57959819846D72O9987AN1P0U9BYSQ180AO11G22CHUYLAKB95UOR0NW296F7P334111619W8L4Q42H211TGK980A8K6GQD26PFD8415AB048E102B5FE34E7BE81D8A49CF72134 = '4.0.0'; $M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650 = $table_prefix.'autoblog_task'; $A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526 = $table_prefix.'autoblog_task_group'; $H7K49Q0F07X72JI54B1ZK9F2TMVJ25J5KY9U1961G79AQ75Y33SM9ZQ5VZ8L9S3S7LT26FDL812Q6326NN7I3I5H23520N9F90549B7F001812C49C8CCCC9160F3AE2E000A5039 = $table_prefix.'autoblog_posts'; $X1W2NO3OS76F65LA21C91ZMN9E51V226VS07YKFUN0X3UZ526O5A32D238HN3630IYE5971W962479AVZ13N0B8N3Q9RES24R4WE0F87JAP8F9JLJU881ENH9U1JS250F738797E2A93367DFBB8AB76CA4B2F2012 = $table_prefix.'autoblog_objects'; $V8J2WENX1U1G177B5W69A9T20RE2EP458UW8V78611644TTM7XU695Q935886N51DYP30359FA7EB8CD515540267FB41576E7ABE1980 = $table_prefix.'autoblog_updated_posts'; $OW21F49TM69QJA8P8TZ0ATY445622ZOXTM40N9KK12KQWGEO7A47668Y0J7ZERL8689639XZ1F650FZ4659FWRS42579H5YQBE431D8BF3FF8EBA3C9F2D78AAA5329F6561 = get_option('wp_autoblog_db_version'); require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); if(($wpdb->get_var("SHOW TABLES LIKE '$M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650'") != $M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650)||$U6VK2007QK2724H67T886HQR25E05ER66N27JA57959819846D72O9987AN1P0U9BYSQ180AO11G22CHUYLAKB95UOR0NW296F7P334111619W8L4Q42H211TGK980A8K6GQD26PFD8415AB048E102B5FE34E7BE81D8A49CF72134!=$OW21F49TM69QJA8P8TZ0ATY445622ZOXTM40N9KK12KQWGEO7A47668Y0J7ZERL8689639XZ1F650FZ4659FWRS42579H5YQBE431D8BF3FF8EBA3C9F2D78AAA5329F6561){ $Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396 = "CREATE TABLE " . $M1MY7976IB66YUN408957Y1Y9156WNE7G9S34633034H9256ZGX40640T4Y4392316VE3O9KE2394VD6ZG92J6H3G5MOGH759LGKDAD335D3718B6DD87D9EE07E43DF3C1C8650 . " (
    id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(200) NULL DEFAULT NULL,
	group_id SMALLINT(5) UNSIGNED NULL DEFAULT NULL,
	auto_fetch TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
	m_extract TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
	running_status TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
	in_trash TINYINT(3) NULL DEFAULT '0',
	last_check_time INT(11) NULL DEFAULT '0',
	run_interval INT(11) NULL DEFAULT '0',
	source_url VARCHAR(1000) NOT NULL DEFAULT '',
	task_options LONGTEXT NULL,
	PRIMARY KEY (id),
	INDEX group_id (group_id)
     ) COLLATE='utf8_unicode_ci' ENGINE=MyISAM"; dbDelta($Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396); } if(($wpdb->get_var("SHOW TABLES LIKE '$A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526'") != $A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526)||$U6VK2007QK2724H67T886HQR25E05ER66N27JA57959819846D72O9987AN1P0U9BYSQ180AO11G22CHUYLAKB95UOR0NW296F7P334111619W8L4Q42H211TGK980A8K6GQD26PFD8415AB048E102B5FE34E7BE81D8A49CF72134!=$OW21F49TM69QJA8P8TZ0ATY445622ZOXTM40N9KK12KQWGEO7A47668Y0J7ZERL8689639XZ1F650FZ4659FWRS42579H5YQBE431D8BF3FF8EBA3C9F2D78AAA5329F6561){ $Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396 = "CREATE TABLE " . $A1LWF87B52K49892253O2NCLA6O7OMAMH55C5RJ26C08MUS1729704OIJCOR1PT33DH95D4D3ZAE5I17D3RB6O07A4Z623365A02463058999AF939ABC8E32D16526 . " (
    id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	group_name VARCHAR(200) NOT NULL,
	PRIMARY KEY (id)
     ) COLLATE='utf8_unicode_ci' ENGINE=MyISAM"; dbDelta($Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396); } if(($wpdb->get_var("SHOW TABLES LIKE '$H7K49Q0F07X72JI54B1ZK9F2TMVJ25J5KY9U1961G79AQ75Y33SM9ZQ5VZ8L9S3S7LT26FDL812Q6326NN7I3I5H23520N9F90549B7F001812C49C8CCCC9160F3AE2E000A5039'") != $H7K49Q0F07X72JI54B1ZK9F2TMVJ25J5KY9U1961G79AQ75Y33SM9ZQ5VZ8L9S3S7LT26FDL812Q6326NN7I3I5H23520N9F90549B7F001812C49C8CCCC9160F3AE2E000A5039)||$U6VK2007QK2724H67T886HQR25E05ER66N27JA57959819846D72O9987AN1P0U9BYSQ180AO11G22CHUYLAKB95UOR0NW296F7P334111619W8L4Q42H211TGK980A8K6GQD26PFD8415AB048E102B5FE34E7BE81D8A49CF72134!=$OW21F49TM69QJA8P8TZ0ATY445622ZOXTM40N9KK12KQWGEO7A47668Y0J7ZERL8689639XZ1F650FZ4659FWRS42579H5YQBE431D8BF3FF8EBA3C9F2D78AAA5329F6561){ $Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396 = "CREATE TABLE " . $H7K49Q0F07X72JI54B1ZK9F2TMVJ25J5KY9U1961G79AQ75Y33SM9ZQ5VZ8L9S3S7LT26FDL812Q6326NN7I3I5H23520N9F90549B7F001812C49C8CCCC9160F3AE2E000A5039 . " (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	task_id INT(10) UNSIGNED NOT NULL DEFAULT '0',
	queue_id INT(10) UNSIGNED NOT NULL DEFAULT '0',
	url_unique CHAR(32) NOT NULL,
	title_unique CHAR(32) NULL DEFAULT NULL,
	url VARCHAR(1000) NOT NULL,
	title VARCHAR(255) NULL DEFAULT NULL,
	post_id INT(10) UNSIGNED NOT NULL DEFAULT '0',
	date_time INT(10) UNSIGNED NOT NULL DEFAULT '0',
	url_status TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
	error_code TINYINT(3) UNSIGNED NULL DEFAULT NULL,
	error_msg VARCHAR(50) NULL DEFAULT NULL,
	re_try_num TINYINT(3) UNSIGNED NULL DEFAULT NULL,
	refresh TINYINT(3) UNSIGNED NULL DEFAULT NULL,
	PRIMARY KEY (id),
	UNIQUE INDEX url_unique (url_unique),
	INDEX title_unique (title_unique),
	INDEX task_id (task_id),
	INDEX queue_id (queue_id)
     ) COLLATE='utf8_unicode_ci' ENGINE=MyISAM"; dbDelta($Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396); } if(($wpdb->get_var("SHOW TABLES LIKE '$X1W2NO3OS76F65LA21C91ZMN9E51V226VS07YKFUN0X3UZ526O5A32D238HN3630IYE5971W962479AVZ13N0B8N3Q9RES24R4WE0F87JAP8F9JLJU881ENH9U1JS250F738797E2A93367DFBB8AB76CA4B2F2012'") != $X1W2NO3OS76F65LA21C91ZMN9E51V226VS07YKFUN0X3UZ526O5A32D238HN3630IYE5971W962479AVZ13N0B8N3Q9RES24R4WE0F87JAP8F9JLJU881ENH9U1JS250F738797E2A93367DFBB8AB76CA4B2F2012)||$U6VK2007QK2724H67T886HQR25E05ER66N27JA57959819846D72O9987AN1P0U9BYSQ180AO11G22CHUYLAKB95UOR0NW296F7P334111619W8L4Q42H211TGK980A8K6GQD26PFD8415AB048E102B5FE34E7BE81D8A49CF72134!=$OW21F49TM69QJA8P8TZ0ATY445622ZOXTM40N9KK12KQWGEO7A47668Y0J7ZERL8689639XZ1F650FZ4659FWRS42579H5YQBE431D8BF3FF8EBA3C9F2D78AAA5329F6561){ $Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396 = "CREATE TABLE " . $X1W2NO3OS76F65LA21C91ZMN9E51V226VS07YKFUN0X3UZ526O5A32D238HN3630IYE5971W962479AVZ13N0B8N3Q9RES24R4WE0F87JAP8F9JLJU881ENH9U1JS250F738797E2A93367DFBB8AB76CA4B2F2012 . " (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	ab_post_id BIGINT(20) UNSIGNED NOT NULL DEFAULT '0',
	post_id BIGINT(20) UNSIGNED NOT NULL DEFAULT '0',
	save_type TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
	cloud_key VARCHAR(200) NULL DEFAULT NULL,
	local_key VARCHAR(200) NULL DEFAULT NULL,
	in_local TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
	PRIMARY KEY (id),
	INDEX ab_post_id (ab_post_id)
     ) COLLATE='utf8_unicode_ci' ENGINE=MyISAM"; dbDelta($Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396); } if(($wpdb->get_var("SHOW TABLES LIKE '$V8J2WENX1U1G177B5W69A9T20RE2EP458UW8V78611644TTM7XU695Q935886N51DYP30359FA7EB8CD515540267FB41576E7ABE1980'") != $V8J2WENX1U1G177B5W69A9T20RE2EP458UW8V78611644TTM7XU695Q935886N51DYP30359FA7EB8CD515540267FB41576E7ABE1980)||$U6VK2007QK2724H67T886HQR25E05ER66N27JA57959819846D72O9987AN1P0U9BYSQ180AO11G22CHUYLAKB95UOR0NW296F7P334111619W8L4Q42H211TGK980A8K6GQD26PFD8415AB048E102B5FE34E7BE81D8A49CF72134!=$OW21F49TM69QJA8P8TZ0ATY445622ZOXTM40N9KK12KQWGEO7A47668Y0J7ZERL8689639XZ1F650FZ4659FWRS42579H5YQBE431D8BF3FF8EBA3C9F2D78AAA5329F6561){ $Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396 = "CREATE TABLE " . $V8J2WENX1U1G177B5W69A9T20RE2EP458UW8V78611644TTM7XU695Q935886N51DYP30359FA7EB8CD515540267FB41576E7ABE1980 . " (
   	id BIGINT(20) NOT NULL AUTO_INCREMENT,
	post_id BIGINT(20) NOT NULL,
	PRIMARY KEY (id),
	UNIQUE INDEX post_id (post_id)
     ) COLLATE='utf8_unicode_ci' ENGINE=MyISAM"; dbDelta($Z96VV2O113H36R0W5A08IHH9Y6114YP494D678W37T13C480VK7YL947KSQSUP4DWQ4LARRIMM0QRDHNUYC282E354HN36M8737975M7ZNW7A8U45AC5C74B64B4B8352EF2F181AFFB5AC2A4396); } $U5H8G4034QP0EL5GFH0I65ZS3P7AR856Y0S94118231O40R5F2UNEM4X8T9652L6425OUF9A32L0U209223VSL82727ITW4RU9CY49XN7U60840DAC048YJ4K793DA65A9FD0004D9477AEAC024E08E152696 = unserialize(get_option('wp-autoblog-options')); $U5H8G4034QP0EL5GFH0I65ZS3P7AR856Y0S94118231O40R5F2UNEM4X8T9652L6425OUF9A32L0U209223VSL82727ITW4RU9CY49XN7U60840DAC048YJ4K793DA65A9FD0004D9477AEAC024E08E152696[0] = 0; $U5H8G4034QP0EL5GFH0I65ZS3P7AR856Y0S94118231O40R5F2UNEM4X8T9652L6425OUF9A32L0U209223VSL82727ITW4RU9CY49XN7U60840DAC048YJ4K793DA65A9FD0004D9477AEAC024E08E152696[1] = 0; $U5H8G4034QP0EL5GFH0I65ZS3P7AR856Y0S94118231O40R5F2UNEM4X8T9652L6425OUF9A32L0U209223VSL82727ITW4RU9CY49XN7U60840DAC048YJ4K793DA65A9FD0004D9477AEAC024E08E152696[2] = 1; update_option('wp-autoblog-options',serialize($U5H8G4034QP0EL5GFH0I65ZS3P7AR856Y0S94118231O40R5F2UNEM4X8T9652L6425OUF9A32L0U209223VSL82727ITW4RU9CY49XN7U60840DAC048YJ4K793DA65A9FD0004D9477AEAC024E08E152696)); update_option("wp_autoblog_db_version", $U6VK2007QK2724H67T886HQR25E05ER66N27JA57959819846D72O9987AN1P0U9BYSQ180AO11G22CHUYLAKB95UOR0NW296F7P334111619W8L4Q42H211TGK980A8K6GQD26PFD8415AB048E102B5FE34E7BE81D8A49CF72134); } register_activation_hook( __FILE__,'SATW9O926H41RE916NFMPCH0W8S33FKKA4L30E41RWL79T34C6413LB478A64B2G0E24M1N24R2M667E64129FE4027C174242B9C8156A9C6A6404'); remove_action('init', 'kses_init'); remove_action('set_current_user', 'kses_init'); require_once WPAB_PATH.'/libs/libs.php'; require_once WPAB_PATH.'/libs/action.php'; ?>