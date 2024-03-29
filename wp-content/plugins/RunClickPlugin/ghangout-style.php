<style type="text/css">
a { -webkit-transition: all 200ms linear; -moz-transition: all 200ms linear; -o-transition: all 200ms linear; transition:all 200ms linear; }
body { margin:0; padding:0; font:normal 14px/18px 'Source Sans Pro'; color:#666; background:#fff; }
html, body { margin:0; padding:0; }
a:active, a:focus { text-decoration:none; outline:none; }
a { color:#365C75; text-decoration:none; }
a:hover { color:#fB9337; }
img { margin:0; padding:0; outline:none; }
.clear { margin:0; padding:0; height:0; clear:both; }
html, body, #wrap { height: 100%; }
body > #wrap {height: auto; min-height: 100%;}
/* CLEAR FIX*/
.clearfix:after {content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;}
.clearfix {display: inline-block;}
/* Hides from IE-mac \*/
* html .clearfix { height: 1%;}
.clearfix {display: block;}
/* End hide from IE-mac */

body.full_bg { background:url("<?php echo plugins_url('RunClickPlugin/images/hang_out-img.jpg')?>") center center fixed no-repeat; 
-moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover; }
.hed_bg { background:#F3F2E9;  -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; padding:10px !important;  }

.container { display: block;  margin:0 auto; padding:0; width:960px; }
.row-fluid {
  width: 100%;
  *zoom: 1;
}
.row-fluid:before,
.row-fluid:after {
  display: table;
  content: "";
  line-height: 0;
}
.row-fluid:after {
  clear: both;
}
.row-fluid [class*="span"] {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  float: left;
  margin-left: 0%;
  *margin-left: -0.052083333333333336%;
}
.row-fluid [class*="span"]:first-child {
  margin-left: 0;
}
.row-fluid .controls-row [class*="span"] + [class*="span"] {
  margin-left: 0%;
}
.row-fluid .span12 {
  width: 99.99999999999999%;
  *width: 99.94791666666666%;
}
.row-fluid .span11 {
  width: 91.66666666666666%;
  *width: 91.61458333333333%;
}
.row-fluid .span10 {
  width: 83.33333333333331%;
  *width: 83.28124999999999%;
}
.row-fluid .span9 {
  width: 74.99999999999999%;
  *width: 74.94791666666666%;
}
.row-fluid .span8 {
  width: 66.66666666666666%;
  *width: 66.61458333333333%;
}
.row-fluid .span7 {
  width: 58.33333333333333%;
  *width: 58.28124999999999%;
}
.row-fluid .span6 {
  width: 49.99999999999999%;
  *width: 49.94791666666666%;
}
.row-fluid .span5 {
  width: 41.66666666666666%;
  *width: 41.61458333333332%;
}
.row-fluid .span4 {
  width: 33.33333333333333%;
  *width: 33.28124999999999%;
}
.row-fluid .span3 {
  width: 24.999999999999996%;
  *width: 24.947916666666664%;
}
.row-fluid .span2 {
  width: 16.666666666666664%;
  *width: 16.614583333333332%;
}
.row-fluid .span1 {
  width: 8.333333333333332%;
  *width: 8.281249999999998%;
}

@media (max-width: 767px) {
[class*="span"],
  .uneditable-input[class*="span"],
  .row-fluid [class*="span"] {
    float: none;
    display: block;
    width: 100%;
    margin-left: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
}

/*------------------------------  Start Header Header --------------------------------------------------------- */
#ho_header { display: block; margin:0; background:url("<?php echo plugins_url('RunClickPlugin/images/header-bg.png')?>") left top repeat-x; padding-top:50px;  }
#ho_header .logo { margin:0px; padding:0px;  }
#ho_header .ho_social_shear { margin:10px 20px 0px 0px; padding:0px; float:right;  }
#ho_header .ho_title_box { display:block; margin:20px 0px; padding:0px; text-align:center;}
/*
#ho_header .ho_title_box h1 { text-transform:uppercase; }
*/
/* #ho_header .ho_title_box h2 {  } */
/*------------------------------  End Header CSS --------------------------------------------------------- */
#ho_content { display: block; margin:0px; padding:0px; padding-bottom: 50px;}
#ho_content .ho_box { display: block; margin:0px 10px; padding:0px; -moz-box-shadow:2px 2px 5px rgba(0,0,0,0.06); -webkit-box-shadow:2px 2px 5px rgba(0,0,0,0.06); box-shadow:2px 2px 5px rgba(0,0,0,0.06); }
#ho_content .ho_vedio { display: block; margin:0; padding:0px;  -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; background:#fff; border:solid 10px #2d3b52; margin-bottom:20px; }
#ho_content .ho_right { display: block; margin:0px 10px; padding:10px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; 
-moz-box-shadow:0px 0px 10px rgba(0,0,0,0.06);  -webkit-box-shadow:0px 0px 10px rgba(0,0,0,0.06); box-shadow:0px 0px 10px rgba(0,0,0,0.06); background:#F3F2E9;  }
#ho_content .ho_right h3 { -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; margin:0px; padding:10px 0px 10px 10px; font:22px 'Roboto Condensed'; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3); }
#ho_content .ho_right form { margin-top:10px; }
#ho_content .ho_right input { display: block; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px; border:solid 1px #ddd; background:#fff; padding:5px; margin-bottom:20px; height:35px; font:normal 14px/18px 'Source Sans Pro'; color:#666; }
#ho_content .hangout_btn { font:16px 'Roboto Condensed'; text-shadow:1px 1px 1px rgba(0,0,0,0.3); display: inline-block; *display: inline; /* IE7 inline-block hack */ *zoom: 1; padding: 5px 10px; margin-bottom:10px; background:url("<?php echo plugins_url('RunClickPlugin/images/btn_bg.png')?>") center center repeat-x #FB9337; color:#FFFFFF; font:18px 'Roboto Condensed'; border: 1px solid #F0882C; -webkit-border-radius: 3px; text-decoration:none; -moz-border-radius: 3px; border-radius: 3px; -webkit-transition: all 200ms linear; -moz-transition: all 200ms linear; -o-transition: all 200ms linear; transition:all 200ms linear; cursor:pointer; }
#ho_content .hangout_btn:hover { background:url("<?php echo plugins_url('RunClickPlugin/images/btn_bg.png')?>") center center repeat-x #365C75; border:1px solid #2D3B52; }
#ho_content .ho_right a { display: block; margin-bottom:10px; }
.hide_show { display: block; height:50px; }

#ho_content .ho_right ul { display: block; margin:10px 0px; padding:0px; list-style:none; }
#ho_content .ho_right ul li { display: block; margin:0px; padding:8px 0px; border-bottom:solid 1px #ddd; color:#666; font:16px 'Roboto Condensed'; }
#ho_content .ho_right ul li i { color:#FB9337; }







#ho_content .ho_registation { display: block; margin:20px 0px; -moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px; border:solid 1px #ddd; background:#F3F2E9; padding:10px 10px; }
#ho_content .ho_registation h2 { display: block; margin:0px 0px 10px 0px; padding-bottom:10px; color:#FB9337; font:22px 'Roboto Condensed'; border-bottom:solid 1px #ddd; }
#ho_content .ho_registation input { display: block; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px; border:solid 1px #ddd; background:#fff; padding:5px; margin-bottom:10px; height:38px; font:normal 14px 'Source Sans Pro'; color:#666; }
#ho_content .ho_registation select { display: block; -moz-border-radius:3px; -webkit-border-radius:3px; border-radius:3px; border:solid 1px #ddd; background:#fff; padding:5px; margin-bottom:10px; height:38px; font:normal 14px 'Source Sans Pro'; color:#666; }
.ho_block { display: block; margin:0px 10px; padding:0px; }
#ho_content .ho_registation a { text-align:center; }

#ho_content .ho_timer { display: block; margin:20px 100px; text-align:center; -moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px; border:solid 1px #ddd; background:#F3F2E9; padding: 5px; }
#ho_content .ho_timer h2 {  display:inline-block; font-size:22px; cursor: default; }
#ho_content .ho_timer h2:hover { background:url("<?php echo plugins_url('RunClickPlugin/images/btn_bg.png')?>") center center repeat-x #FB9337; border: 1px solid #F0882C; }



.btn_ss  { background:url("<?php echo plugins_url('RunClickPlugin/images/plush_icon.png')?>") 0px 4px no-repeat; padding:1px 0px 1px 15px;  }
.btn_ss:hover  { background:url("<?php echo plugins_url('RunClickPlugin/images/plush_icon.png')?>") 0px -34px no-repeat;  }

.act  { background:url("<?php echo plugins_url('RunClickPlugin/images/minus_icon.png')?>") 0px 4px no-repeat !important; padding:1px 0px 1px 15px;  }
.act:hover  { background:url("<?php echo plugins_url('RunClickPlugin/images/minus_icon.png')?>") 0px -34px no-repeat !important;  }









#ho_footer { display: block; margin-top:20px; background:#2d3b52; position: relative;
	margin-top: -50px; /* negative value of footer height */
	height:50px;
	clear:both;   }
#ho_footer .ho_copy { display: block; margin:0; padding:15px 0px; text-align:center; color:#B5C4CE; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);  }
#ho_footer .ho_copy a { color:#B5C4CE; }
#ho_footer .ho_copy a:hover { color:#fff; }
/* Large desktop */
@media (min-width: 1200px) { }

/* Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 960px) { 
.container { display: block; margin:0; padding:0; width:100%; }
#ho_header .logo { display: block; text-align:center;  }	
  }

/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
.container { display: block; margin:0; padding:0; width:100%; }	
#ho_header .logo { display: block; text-align:center;  }
#ho_content .ho_right { margin-top:10px; }
#ho_header .ho_social_shear { float:none; display:block; text-align:center; }
 }

/* Landscape phones and down */
@media (max-width: 480px) { }

@media (max-width: 479px) { }
.ho_countdown { display:block; -webkit-border-radius:5px;  -moz-border-radius:5px; border-radius:5px; margin:20px 0px 0px 0px; padding:0px 10px;  background:#FB9337; }
.ho_countdown h4 { display: block; margin:0; padding:10px 0px; text-align:center; font-size:20px; font:18px 'Roboto Condensed'; color:#fff; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3); }
.countdownHolder{
	margin:0 auto;
	font: 20px/1.5 'Open Sans Condensed',sans-serif;
	text-align:center;
	letter-spacing:-3px;
}

.position{
	display: inline-block;
	height: 1.6em;
	overflow: hidden;
	position: relative;
	width: 1.05em;
}

.digit{
	position:absolute;
	display:block;
	width:1em;
	border-radius:0.2em;
	text-align:center;
	color:#444;
	letter-spacing:-1px;
}

.digit.static{
	background-image: linear-gradient(bottom, #3A3A3A 50%, #444444 50%);
	background-image: -o-linear-gradient(bottom, #3A3A3A 50%, #444444 50%);
	background-image: -moz-linear-gradient(bottom, #3A3A3A 50%, #444444 50%);
	background-image: -webkit-linear-gradient(bottom, #3A3A3A 50%, #444444 50%);
	background-image: -ms-linear-gradient(bottom, #3A3A3A 50%, #444444 50%);	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0.5, #3A3A3A),
		color-stop(0.5, #444444)
	);
}

/**
 * You can use these classes to hide parts
 * of the countdown that you don't need.
 */

.countDays{ /* display:none !important;*/ }
.countDiv0{ /* display:none !important;*/ }
.countHours{}
.countDiv1{}
.countMinutes{}
.countDiv2{}
.countSeconds{}


.countDiv{
	display:inline-block;
	width:16px;
	height:1.6em;
	position:relative;
}

.countDiv:before,
.countDiv:after{
	position:absolute;
	width:5px;
	height:5px;
	background-color:#444;
	border-radius:50%;
	left:50%;
	margin-left:-3px;
	top:0.5em;
	box-shadow:1px 1px 1px rgba(4, 4, 4, 0.5);
	content:'';
}

.countDiv:after{
	top:0.9em;
}
</style>
