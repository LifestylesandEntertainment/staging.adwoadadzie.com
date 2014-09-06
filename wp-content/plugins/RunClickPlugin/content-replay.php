<?php

global $wpdb;
$blog_url=$post->guid;
$layout=get_post_meta($post->ID, "g_hangout_replan_layout_type", true);
$webinar_type=get_post_meta(get_the_ID(),"hangout_type",true);
$year = date("Y",time());
$replay_hits	=	get_post_meta(get_the_ID(), "ghanghout_replay_hits", true);
$curr_replay_hits	=	$replay_hits+1;
update_post_meta(get_the_ID(),'ghanghout_replay_hits',$curr_replay_hits);

// code for Stats
$ip_addr = $_SERVER['REMOTE_ADDR'];
$stat_result	=	$wpdb->get_results("select * from ".$wpdb->prefix."ghangout_stats where IP='".$ip_addr."' and replay='1' and post_id='".get_the_ID()."'");
if(count($stat_result) <= 0 )
{
	$wpdb->query("INSERT INTO ".$wpdb->prefix."ghangout_stats Values('','".get_the_ID()."','".$ip_addr."','0','0','0','1')");	
}
// code for Stats
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" >

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<title><?php the_title(); ?></title>
<!-- Fonts +++++++++++++ -->	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kristi|Crafty+Girls|Yesteryear|Finger+Paint|Press+Start+2P|Spirax|Bonbon|Over+the+Rainbow" />	
<!-- Style +++++++++++++ -->
   <link rel="stylesheet" href="<?php echo plugins_url('RunClickPlugin/css/font-awesome.css')?>">
    <!--[if IE 7]>
	<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->

<!-- Js +++++++++++++ -->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo plugins_url('RunClickPlugin/js/hangout_custom.js')?>"></script>
    
<link rel='stylesheet' id='prefix-style-countdown-css-css'  href='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/css/countdown.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='hangout-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='g_hangout_skin-css'  href='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/skins/basic/style.min.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/css/bootstrap.css' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo site_url();?>/wp-includes/js/comment-reply.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='<?php echo site_url();?>/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>
<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/jquery.easing.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/jquery.autosize.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/cookie.min.js?ver=3.5.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var g_hangout = {"ajaxurl": "<?php echo site_url(); ?>\/wp-admin\/admin-ajax.php","plugin_url":"<?php echo site_url(); ?>\/wp-content\/plugins\/RunClickPlugin","tr_no_one_online":"No one is online","tr_logout":"Logout","tr_sending":"Sending","tr_in_chat_header":"Now Chatting","tr_offline_header":"Contact us","use_css_anim":"1","delay":"2","is_admin":"","is_op":"1"};
var site_url	=	"<?php echo site_url(); ?>";
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo site_url();?>/wp-content/plugins/RunClickPlugin/assets/js/App.min.js?ver=3.5.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo site_url();?>/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo site_url();?>/wp-includes/wlwmanifest.xml" /> 

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>

<style type="text/css">
.g-hangout-toolbar, .sc-cnv-wrap, .sc-msg-wrap, .g-hangout-wrapper, #g_hangout_box textarea.f-chat-line, #g_hangout_box p.sc-lead, #g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea {
    background-color: #FFFFFF;
    color: #222222;
}
.g-hangout-toolbar a {
    color: #B9B9B9;
}
.g-hangout-toolbar a:hover {
    color: #878787;
}
#g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea, #g_hangout_box textarea.f-chat-line {
    border-color: #CDCDCD;
}
#g_hangout_box .g-hangout-wrapper input:focus, #g_hangout_box .g-hangout-wrapper textarea:focus {
    background-color: #F5F5F5;
    border-color: #B9B9B9;
}
#g_hangout_box textarea.f-chat-line:focus {
    background-color: #FAFAFA;
    border-color: #B9B9B9;
}
#g_hangout_box .g-hangout-wrapper label {
    color: #878787;
}
#g_hangout_box form.g-hangout-reply {
    background-color: #F5F5F5;
    border-top: 1px solid #CDCDCD;
}
#g_hangout_box {
    width: 300px;
}
#g_hangout_box textarea.f-chat-line {
    width: 258px;
}
#g_hangout_box div.g-hangout-header {
    border-radius: 4px 4px 0 0;
}
.g-hangout-notification.warning, #g_hangout_box .g-hangout-wrapper .sc-start-chat-btn a, #g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea {
    border-radius: 4px 4px 4px 4px;
}
#g_hangout_box .g-hangout-wrapper input, #g_hangout_box .g-hangout-wrapper textarea {
    width: 230px;
}
.g-hangout-wrapper {
    border-color: #EBEBEB;
    max-height: 380px;
}
.sc-cnv-wrap {
    border-color: #EBEBEB;
    max-height: 350px;
}
#g_hangout_box .g-hangout-wrapper .sc-start-chat-btn > a {
    background-color: #3A99D1;
    color: #FFFFFF;
}
#g_hangout_box .g-hangout-wrapper .sc-start-chat-btn > a:hover {
    background-color: #BF3723;
    color: #FFFFFF;
}
#g_hangout_box div.g-hangout-header {
    background-color: #BF3723;
    color: #FFFFFF;
}
.g-hangout-css-anim {
    transition: bottom 0.2s ease 0s;
}	
</style>	
<!-- Developed By Ravi Prakash
25 May 2013 -->
<!-- new video code added by Arun Srivastava on 11/4/14 -->
<link rel="stylesheet" href="<?php echo plugins_url('RunClickPlugin/css/reveal.css');?>">
<script type="text/javascript">
var PLUGIN_URL = "<?php echo plugins_url('RunClickPlugin/');?>";
var eid        = "<?php echo $post->ID;?>";
</script>
<script>

	var thankyou_url	=	"<?php  echo get_permalink( $post->ID ) ?>?thankyou=true";

	var site_url="<?php  echo site_url(); ?>";
	</script>
	

<script src="<?php echo plugins_url('RunClickPlugin/js/jquery.reveal.js');?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('RunClickPlugin/js/modernizr.custom.js');?>" type="text/javascript" ></script>
<script src="http://afarkas.github.io/webshim/js-webshim/minified/polyfiller.js"></script>
<script src="<?php echo plugins_url('RunClickPlugin/js/videoplayer_custom.js');?>" type="text/javascript"></script>
<!-- new video code added by Arun Srivastava on 11/4/14 -->
<style type="text/css">
<?php 
if($webinar_type=="Record_hangout"){
			$youtube_video_size = get_post_meta($post->ID,'replay_youtube_video_size',true);
			}else{
			$youtube_video_size = get_post_meta($post->ID,'youtube_video_size',true);
			}
	$width ='430px';
if($youtube_video_size!=''){
	$widtharr = explode(' x ', $youtube_video_size);
	$width = $widtharr[0].'px';
}
			?>
.player {
	margin: auto;
	padding: 10px;
	width: <?php echo $width;?>;
	max-width: 900px;
	min-width: 320px;
}
.mediaplayer {
	position: relative;
	height: 0;
	width: 100%;
	padding-bottom: 56.25%;
	/* 16/9 */
}
.mediaplayer video, .mediaplayer .polyfill-video {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
}
</style>
</head>


<?php
include('ghangout-style.php');
include_once('plugin_function.php');
$uploads = wp_upload_dir();
$uploads_dir = $uploads['baseurl'];
$enable_header=get_post_meta($post->ID, "ghanghout_replay_enable_header", true);
$enable_sharing=get_post_meta($post->ID, "ghanghout_replay_enable_sharing", true);

$logo_src=get_post_meta($post->ID, "ghanghout_replay_logo", true);
if($logo_src!=''){
	$logo =  $uploads_dir.'/'.$logo_src;
}
$logo_text=get_post_meta($post->ID, "ghanghout_replay_logo_text", true);
$logo_family=get_post_meta($post->ID, "ghanghout_replay_logo_family", true);
$logo_size=get_post_meta($post->ID, "ghanghout_replay_logo_size", true);
$logo_style=get_post_meta($post->ID, "ghanghout_replay_logo_style", true);
$logo_color=get_post_meta($post->ID, "ghanghout_replay_logo_color", true);
$logo_height=get_post_meta($post->ID, "ghanghout_replay_logo_height", true);
$logo_spacing=get_post_meta($post->ID, "ghanghout_replay_logo_spacing", true);
$logo_shadow=get_post_meta($post->ID, "ghanghout_replay_logo_shadow", true);

if($logo_style=='Normal')$logo_style='normal';$logo_weight='normal';
if($logo_style=='Italic')$logo_style='italic';$logo_weight='normal';
if($logo_style=='Bold')$logo_style='normal';$logo_weight='bold';
if($logo_style=='Bold/Italic')$logo_style='italic';$logo_weight='bold';

if($logo_shadow=='Small'){$logo_shadow="1px 1px #777";}
elseif($logo_shadow=='Medium'){$logo_shadow="2px 2px #777";}
elseif($logo_shadow=='Large'){$logo_shadow="3px 3px #777";}
else{$logo_shadow = 'false';} 
if(get_post_meta($post->ID,'show_optin_form',true)==0){
							$AWeberFormIn="";
							$AWeberFormOut="";
							}else{
							$AWeberFormIn  = get_post_meta($post->ID,'hangout_aweber_display', true);
							$AWeberFormOut = get_post_meta($post->ID,'hangout_aweber_hide', true);
							}
							if(get_post_meta($post->ID,'show_by_button',true)==0){
							$BuyButtonIn="";
							$BuyButtonOut="";
							}else{
							$BuyButtonIn   = get_post_meta($post->ID,'hangout_buybutton_display', true);
							$BuyButtonOut  = get_post_meta($post->ID,'hangout_buybutton_hide', true);
							}
							if(get_post_meta($post->ID,'show_vote_form',true)==0){
							$VoteFormIn="";
							$VoteFormOut="";
							}else{
							$VoteFormIn    = get_post_meta($post->ID,'hangout_vote_display', true);
							$VoteFormOut   = get_post_meta($post->ID,'hangout_vote_hide', true);
							}


?>
<style type="text/css">
	.logoText {
		font-family:<?php echo $logo_family; ?>; font-size:<?php echo $logo_size; ?>; font-weight:<?php echo $logo_weight; ?>; text-shadow:<?php echo $logo_shadow; ?>; line-height:<?php echo $logo_height; ?>; letter-spacing:<?php echo $logo_spacing; ?>px; color:<?php echo $logo_color; ?>;
	}
</style>
<?php $post_id = $post->ID;	
$editorval =	get_post_meta($post_id,"ghanghout_replay_option1editor",true);	
 if($webinar_type=="Record_hangout"){
		$hangoutvideourl = get_post_meta($post->ID,'hangout_title', true);
		
		if($youtube_video_size!=''){
								$widtharr = explode(' x ', $youtube_video_size);
								$width = $widtharr[0].'px';
							}
$get_url=fatch_youtube_key($hangoutvideourl);
//parse_str( parse_url( $hangoutvideourl, PHP_URL_QUERY ), $my_array_of_vars );
//$hangoutvideokey = $my_array_of_vars['v'];
$hangoutvideokey = $get_url;
		?>
		<body>
	
	<!-- Start Header -->
	<div id="ho_header">
	<div id="ho_content">
		<div class="container">
		<div class="row-fluid ss_sh">
				<div class="ho_contentin">
				<div class="ho_vedio">				
				<div id="google_hangout_video_url" style="text-align:center; margin:0 auto;">
					<div class="player">
						<div class="mediaplayer">
							<video poster="http://i1.ytimg.com/vi/<?php echo $hangoutvideokey; ?>/0.jpg" controls preload="none">
								<source src="https://www.youtube.com/watch?v=<?php echo $hangoutvideokey; ?>"/>
							</video>
						</div>
					</div>
					<input type="hidden" id="AWeberFormIn" value="<?php echo $AWeberFormIn; ?> ">
				<input type="hidden" id="AWeberFormOut" value="<?php echo $AWeberFormOut; ?>">
				
				<input type="hidden" id="BuyButtonIn" value="<?php echo $BuyButtonIn; ?>">
				<input type="hidden" id="BuyButtonOut" value="<?php echo $BuyButtonOut; ?>">
				
				<input type="hidden" id="VoteFormIn" value="<?php echo $VoteFormIn; ?>">
				<input type="hidden" id="VoteFormOut" value="<?php echo $VoteFormOut; ?>">
				</div></div></div></div>
				</div>
				</div>
				</div>
				<div class="clear"></div>
		<!--echo do_shortcode('[live_hangout]');-->
		<div id="ho_footer">
		<div class="container">
			<div class="row-fluid">
				<?php 
					$attribution_link = get_option('attribution_link');
					if($attribution_link=='1'){
						$link = get_option('hangout_youtube_affiliate_link');
						if(get_option('hangout_youtube_affiliate_link')==''){
							$link = 'http://runclick.com';
						}
				?>
						<div class="ho_copy"><a href="<?php echo $link;?>" target="_blank">Powered By runclick.com </a></div>
				<?php } ?>
			</div>
		</div>
	</div>
		<?php 
		
} elseif($layout==1){



$headline=get_post_meta($post->ID, "ghanghout_replay_headline", true);
$headline = str_replace("\n","<br>", $headline);

$headline_family=get_post_meta($post->ID, "ghanghout_replay_headline_family", true);
$headline_size=get_post_meta($post->ID, "ghanghout_replay_headline_size", true);
$headline_style=get_post_meta($post->ID, "ghanghout_replay_headline_style", true);
$headline_color=get_post_meta($post->ID, "ghanghout_replay_headline_color", true);
$headline_height=get_post_meta($post->ID, "ghanghout_replay_headline_height", true);
$headline_spacing=get_post_meta($post->ID, "ghanghout_replay_headline_spacing", true);
$headline_shadow=get_post_meta($post->ID, "ghanghout_replay_headline_shadow", true);

if($headline_style=='Normal')$headline_style='normal';$headline_weight='normal';
if($headline_style=='Italic')$headline_style='italic';$headline_weight='normal';
if($headline_style=='Bold')$headline_style='normal';$headline_weight='bold';
if($headline_style=='Bold/Italic')$headline_style='italic';$headline_weight='bold';

if($headline_shadow=='Small'){$headline_shadow="1px 1px #777";}
elseif($headline_shadow=='Medium'){$headline_shadow="2px 2px #777";}
elseif($headline_shadow=='Large'){$headline_shadow="3px 3px #777";}
else{$headline_shadow = 'false';}

$subhead=get_post_meta($post->ID, "ghanghout_replay_subhead", true);
$subhead = str_replace("\n","<br>", $subhead);
$subhead_family=get_post_meta($post->ID, "ghanghout_replay_subhead_family", true);
$subhead_size=get_post_meta($post->ID, "ghanghout_replay_subhead_size", true);
$subhead_style=get_post_meta($post->ID, "ghanghout_replay_subhead_style", true);
$subhead_color=get_post_meta($post->ID, "ghanghout_replay_subhead_color", true);
$subhead_height=get_post_meta($post->ID, "ghanghout_replay_subhead_height", true);
$subhead_spacing=get_post_meta($post->ID, "ghanghout_replay_subhead_spacing", true);
$subhead_shadow=get_post_meta($post->ID, "ghanghout_replay_subhead_shadow", true);

if($subhead_style=='Normal')$subhead_style='normal';$subhead_weight='normal';
if($subhead_style=='Italic')$subhead_style='italic';$subhead_weight='normal';
if($subhead_style=='Bold')$subhead_style='normal';$subhead_weight='bold';
if($subhead_style=='Bold/Italic')$subhead_style='italic';$subhead_weight='bold';

if($subhead_shadow=='Small'){$subhead_shadow="1px 1px #777";}
elseif($subhead_shadow=='Medium'){$subhead_shadow="2px 2px #777";}
elseif($subhead_shadow=='Large'){$subhead_shadow="3px 3px #777";}
else{$subhead_shadow = 'false';}


?>
<?php include "ghangout-style.php"; ?>
<style type="text/css">
	.ho_title_box h1{
		font-family:<?php echo $headline_family; ?>; font-size:<?php echo $headline_size; ?>; font-weight:<?php echo $headline_weight; ?>; text-shadow:<?php echo $headline_shadow; ?>; line-height:<?php echo $headline_height; ?>; letter-spacing:<?php echo $headline_spacing; ?>px; color:<?php echo $headline_color; ?>;
	}
	.ho_title_box h2{
		font-family:<?php echo $subhead_family; ?>; font-size:<?php echo $subhead_size; ?>; font-weight:<?php echo $subhead_weight; ?>; text-shadow:<?php echo $subhead_shadow; ?>; line-height:<?php echo $subhead_height; ?>; letter-spacing:<?php echo $subhead_spacing; ?>px; color:<?php echo $subhead_color; ?>;
	}
</style>
<body>
	<div id="wrap">
	<!-- Start Header -->
	<div id="ho_header">
		<div class="container">
			<div class="row-fluid">
				<div class="span4">
					<a class="logo" href="#">
					<?php if($logo){ ?>
							<?php if($enable_header == "checked"){ ?>
						  		<img border="0" src="<?php echo $logo; ?>">
						  	<?php } ?>		
						<?php }
						if($enable_header == "checked" and $logo=='' ) { ?>
						  <div class="logoText"><?php echo $logo_text; ?></div>
						<?php } ?>
					</a>
				</div>
				<div class="span8">
					<div class="ho_social_shear">
						<?php if($enable_sharing=='checked'){?>
						   <div class="sharing">
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(get_the_ID()); ?>" data-lang="en" data-related="anywhereTheJavascriptAPI">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								
									<!-- Facebook share button Start -->
									<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_permalink(get_the_ID());?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
									<!-- Facebook share button End -->
								
									<div class="g-plusone" data-href="<?php the_permalink(get_the_ID()); ?>" data-annotation="none" data-size="medium"></div>
									<script type="text/javascript">
									  window.___gcfg = {parsetags: 'onload'};
									  (function() {
										var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										po.src = 'https://apis.google.com/js/plusone.js';
										var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									  })();
									</script>
								</div>
						<?php } ?>
						<!-- AddThis Button END -->
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="row-fluid">
				<div class="ho_title_box">
					<?php if($headline){ ?>
						<h1><?php echo $headline; ?></h1>
					<?php } ?>	
					<?php if($subhead){ ?>
					<h2><?php echo $subhead; ?></h2>
					<?php } ?>	
				</div>
			</div>
		</div>
	</div>
	<!-- End Header -->
 	
	<!-- Start Content -->
	<div id="ho_content">
		<div class="container">
			<?php
			if($membership_pass=='1'){
				 $editorval = get_post_meta($post->ID,'ghanghout_replay_option1editor',true);

$hangout_lock_replay = get_post_meta($post->ID,'hangout_lock_replay',true);
$contentstr ='';
if($hangout_lock_replay==1){ $contentstr='style="display:none;"'; } 

				if(1)
				{
					 
					
						$youtube_video_size = get_post_meta($post->ID,'youtube_video_size',true);
						$width ='430px';
						if($youtube_video_size!=''){
							$widtharr = explode(' x ', $youtube_video_size);
							$width = $widtharr[0].'px';
						}
						
						 $hangoutvideourl = get_post_meta($post->ID,'hangout_title', true);



						//parse_str( parse_url( $hangoutvideourl, PHP_URL_QUERY ), $my_array_of_vars );
						$get_url=fatch_youtube_key($hangoutvideourl);
						//$hangoutvideokey = $my_array_of_vars['v'];
						$hangoutvideokey = $get_url;
						$content1 .= '<div class="row-fluid ss_sh">
										<div class="ho_contentin">
										<div class="ho_vedio" '. $contentstr .'>				
										<div style="text-align:center; margin:0 auto;" ><div class="player">

						<div class="mediaplayer">

							<video poster="http://i1.ytimg.com/vi/'.$hangoutvideokey.'/0.jpg" controls preload="none">

								<source src="https://www.youtube.com/watch?v='.$hangoutvideokey.'"/>

							</video>

						</div>

					</div><input type="hidden" id="AWeberFormIn" value="'.$AWeberFormIn.'">
				<input type="hidden" id="AWeberFormOut" value="'.$AWeberFormOut.'">
				
				<input type="hidden" id="BuyButtonIn" value="'.$BuyButtonIn.'">
				<input type="hidden" id="BuyButtonOut" value="'.$BuyButtonOut.'">
				
				<input type="hidden" id="VoteFormIn" value="'.$VoteFormIn.'">
				<input type="hidden" id="VoteFormOut" value="'.$VoteFormOut.'">';
						$content1 .= '</div></div></div>';
						$show_social_button =get_post_meta($post->ID,'show_social_button',true);
						if($show_social_button =='1'):
							  $content1 .= '<div class="sharing"><a href="https://twitter.com/share" class="twitter-share-button" data-counturl="'.get_permalink().'">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								
								<iframe src="//www.facebook.com/plugins/like.php?href='.get_permalink().'&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
								<g:plusone annotation="none" size="medium" href="'.get_permalink().'"></g:plusone></div><div>&nbsp;<br><br><br></div></div>';
						endif;
						 $content1 .= apply_filters('the_content', $editorval);
							echo $content1;
					
				} else {
							$youtube_video_size = get_post_meta($post->ID,'youtube_video_size',true);
							$width ='430px';
							if($youtube_video_size!=''){
								$widtharr = explode(' x ', $youtube_video_size);
								$width = $widtharr[0].'px';
							}
							
							$hangoutvideourl = get_post_meta($post->ID,'hangout_title', true);


						$get_url=fatch_youtube_key($hangoutvideourl);
						//parse_str( parse_url( $hangoutvideourl, PHP_URL_QUERY ), $my_array_of_vars );

						//$hangoutvideokey = $my_array_of_vars['v'];
						$hangoutvideokey = $get_url;
						$content1 .= '<div class="row-fluid ss_sh">
										<div class="ho_contentin">
										<div class="ho_vedio" '. $contentstr .'>				
										<div style="text-align:center; margin:0 auto;" ><div class="player">

						<div class="mediaplayer">

							<video poster="http://i1.ytimg.com/vi/'.$hangoutvideokey.'/0.jpg" controls preload="none">

								<source src="https://www.youtube.com/watch?v='.$hangoutvideokey.'"/>

							</video>

						</div>

					</div><input type="hidden" id="AWeberFormIn" value="'.$AWeberFormIn.'">
				<input type="hidden" id="AWeberFormOut" value="'.$AWeberFormOut.'">
				
				<input type="hidden" id="BuyButtonIn" value="'.$BuyButtonIn.'">
				<input type="hidden" id="BuyButtonOut" value="'.$BuyButtonOut.'">
				
				<input type="hidden" id="VoteFormIn" value="'.$VoteFormIn.'">
				<input type="hidden" id="VoteFormOut" value="'.$VoteFormOut.'">';
						$content1 .= '</div></div></div>';
							echo $content1;
				
				}

					} else { ?>
								<div class="row-fluid ff-hh">
									<div class="ho_contentin">
										<div class="ho_registation">
											
												<div class="ho_block"><h2><?php echo $member_msg; ?></h2></div>
												
												<div class="clear"></div>
											
										</div>
									</div>
								</div>
						<?php }
					
				
			?>					
		</div>
	</div>
	</div><div class="clear"></div>
	<!-- End Content -->
<!-- Start Footer -->
	<div id="ho_footer">
		<div class="container">
			<div class="row-fluid">
				<div class="ho_copy">
				<?php 
				$attribution_link = get_option('attribution_link');
				if($attribution_link=='1'){
					$link = get_option('hangout_youtube_affiliate_link');
					if(get_option('hangout_youtube_affiliate_link')==''){
						$link = 'http://runclick.com';
					}
					echo '<a href="'.$link.'" target="_blank">Powered By runclick.com </a>';
				}
				?> 
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer -->		
<?php }  else { ?>
<?php include "ghangout-style.php"; ?>
<?php		$full_banner=get_post_meta($post->ID, "ghanghout_replay_full_banner_image", true); ?>
<body style="background:url('<?php echo $uploads_dir.'/'. $full_banner; ?>') center center fixed no-repeat; 
-moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover;">
	<div id="wrap">
	<!-- Start Header -->
	<div id="ho_header">
		<div class="container">
			<div class="row-fluid">
				<div class="span4">
					<?php if($logo){ ?>
						<a class="logo" href="#"><img src="<?php echo $logo; ?>" alt="hangout" /></a>
					<?php } else { ?>
					  <div class="logoText"><?php echo $logo_text; ?></div>
					<?php } ?>
				</div>
				<div class="span8">
					<div class="ho_social_shear">
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<?if($enable_sharing=='checked'):?>
						   <div class="sharing">
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(get_the_ID()); ?>" data-lang="en" data-related="anywhereTheJavascriptAPI">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								
									<!-- Facebook share button Start -->
									<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo get_permalink(get_the_ID());?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
									<!-- Facebook share button End -->
								
									<div class="g-plusone" data-href="<?php the_permalink(get_the_ID()); ?>" data-annotation="none" data-size="medium"></div>
									<script type="text/javascript">
									  window.___gcfg = {parsetags: 'onload'};
									  (function() {
										var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										po.src = 'https://apis.google.com/js/plusone.js';
										var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									  })();
									</script>
								</div>
						<?endif;?>
						</div>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51af1019225062d6"></script>
						<!-- AddThis Button END -->
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- End Header -->
	<!-- Start Content -->
	<div id="ho_content" class="clearfix">
		<div class="container">

			<?php
			if($membership_pass=='1'){
				//$ghanghout_timer_position=get_post_meta($post->ID, "ghanghout_timer_position", true);
$hangout_lock_replay = get_post_meta($post->ID,'hangout_lock_replay',true);				
				$contentstr ='';
				if($hangout_lock_replay==1){ $contentstr='style="display:none;"'; } 
				
					if(1)
					{
						$youtube_video_size = get_post_meta($post->ID,'youtube_video_size',true);
						$width ='430px';
						if($youtube_video_size!=''){
							$widtharr = explode(' x ', $youtube_video_size);
							$width = $widtharr[0].'px';
						}
						
						$hangoutvideourl = get_post_meta($post->ID,'hangout_title', true);


							$get_url=fatch_youtube_key($hangoutvideourl);
						//parse_str( parse_url( $hangoutvideourl, PHP_URL_QUERY ), $my_array_of_vars );

						//$hangoutvideokey = $my_array_of_vars['v'];
						$hangoutvideokey = $get_url;
						$content1 .= '<div class="row-fluid ss_sh">
										<div class="ho_contentin">
										<div class="ho_vedio" '. $contentstr .'>				
										<div style="text-align:center; margin:0 auto;" ><div class="player">

						<div class="mediaplayer">

							<video poster="http://i1.ytimg.com/vi/'.$hangoutvideokey.'/0.jpg" controls preload="none">

								<source src="https://www.youtube.com/watch?v='.$hangoutvideokey.'"/>

							</video>

						</div>

					</div><input type="hidden" id="AWeberFormIn" value="'.$AWeberFormIn.'">
				<input type="hidden" id="AWeberFormOut" value="'.$AWeberFormOut.'">
				
				<input type="hidden" id="BuyButtonIn" value="'.$BuyButtonIn.'">
				<input type="hidden" id="BuyButtonOut" value="'.$BuyButtonOut.'">
				
				<input type="hidden" id="VoteFormIn" value="'.$VoteFormIn.'">
				<input type="hidden" id="VoteFormOut" value="'.$VoteFormOut.'">';
						$content1 .= '</div></div></div>';
						$show_social_button =get_post_meta($post->ID,'show_social_button',true);
						if($show_social_button =='1'):
							  $content1 .= '<div class="sharing"><a href="https://twitter.com/share" class="twitter-share-button" data-counturl="'.get_permalink().'">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								
								<iframe src="//www.facebook.com/plugins/like.php?href='.get_permalink().'&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
								<g:plusone annotation="none" size="medium" href="'.get_permalink().'"></g:plusone></div><div>&nbsp;<br><br><br></div></div>';
						endif;
						echo $content1;
					}
					else
					{
						$from = strtotime(get_post_meta($post->ID,"hangout_timezone_start_date",true));
						$to = strtotime(get_post_meta($post->ID,"hangout_timezone_end_date",true));
						$now = time();

						if($from <= $now && $to >= $now) {
							$youtube_video_size = get_post_meta($post->ID,'youtube_video_size',true);
							$width ='430px';
							if($youtube_video_size!=''){
								$widtharr = explode(' x ', $youtube_video_size);
								$width = $widtharr[0].'px';
							}
							
							$hangoutvideourl = get_post_meta($post->ID,'hangout_title', true);


						$get_url=fatch_youtube_key($hangoutvideourl);
						//parse_str( parse_url( $hangoutvideourl, PHP_URL_QUERY ), $my_array_of_vars );

						//$hangoutvideokey = $my_array_of_vars['v'];
						$hangoutvideokey = $get_url;
						$content1 .= '<div class="row-fluid ss_sh">
										<div class="ho_contentin">
										<div class="ho_vedio" '. $contentstr .'>				
										<div style="text-align:center; margin:0 auto;" ><div class="player">

						<div class="mediaplayer">

							<video poster="http://i1.ytimg.com/vi/'.$hangoutvideokey.'/0.jpg" controls preload="none">

								<source src="https://www.youtube.com/watch?v='.$hangoutvideokey.'"/>

							</video>

						</div>

					</div><input type="hidden" id="AWeberFormIn" value="'.$AWeberFormIn.'">
				<input type="hidden" id="AWeberFormOut" value="'.$AWeberFormOut.'">
				
				<input type="hidden" id="BuyButtonIn" value="'.$BuyButtonIn.'">
				<input type="hidden" id="BuyButtonOut" value="'.$BuyButtonOut.'">
				
				<input type="hidden" id="VoteFormIn" value="'.$VoteFormIn.'">
				<input type="hidden" id="VoteFormOut" value="'.$VoteFormOut.'">';
						$content1 .= '</div></div></div>';
							$show_social_button =get_post_meta($post->ID,'show_social_button',true);
							if($show_social_button =='1'):
								  $content1 .= '<div class="sharing"><a href="https://twitter.com/share" class="twitter-share-button" data-counturl="'.get_permalink().'">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									
									<iframe src="//www.facebook.com/plugins/like.php?href='.get_permalink().'&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
									<g:plusone annotation="none" size="medium" href="'.get_permalink().'"></g:plusone></div><div>&nbsp;<br><br><br></div></div>';
							endif;
							echo $content1;
						}
					}
				
				
					echo do_shortcode('[ghangout_replan_timer]'); 
					
				echo do_shortcode('[ghangout_replan_reg_form]');
				
				} else { ?>
								<div class="row-fluid ff-hh">
									<div class="ho_contentin">
										<div class="ho_registation">
											
												<div class="ho_block"><h2><?php echo $member_msg; ?></h2></div>
												
												<div class="clear"></div>
											
										</div>
									</div>
								</div>
						<?php }	?>
						</div>
	</div>
	</div><div class="clear"></div>
	<!-- End Content -->
	<!-- Start Footer -->
	<div id="ho_footer">
		<div class="container">
			<div class="row-fluid">
				<?php 
					$attribution_link = get_option('attribution_link');
					if($attribution_link=='1'){
						$link = get_option('hangout_youtube_affiliate_link');
						if(get_option('hangout_youtube_affiliate_link')==''){
							$link = 'http://runclick.com';
						}
				?>
						<div class="ho_copy"><a href="<?php echo $link;?>" target="_blank">Powered By runclick.com </a></div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End Footer -->
<?php																					
}	 
wp_google_hangout();
?>
<?php 

$buybuttonhtml       = get_post_meta($post->ID,'buybuttonhtml',true);



$vote_question       = get_post_meta($post->ID, "vote_question", true);

$vote_options        = get_post_meta($post->ID, "vote_options", true);

$vote_correct_option = get_post_meta($post->ID, "vote_correct_option", true);



		

$form .= '<a href="javascript:void(0);" data-reveal-id="myModal" id="clicktoopenpopup">&nbsp;</a>

			<div id="myModal" class="reveal-modal bottom" style="top:400px;" rel="0">

				<h1>Please Fill Optin Form</h1>';

				$form	.=	'<div class="row-fluid ff-hh">
			<div class="md_body">
			<div class="ho_contentin">

				<div class="ho_registation1">

				
					<form id="contact_popup_form" method="post" name="contact_popup_form">


						<div class="row">

							<div class="ho_block">

								<input class="span12" id="event_reg_name" name="event_reg_name" type="text" placeholder="Enter Your Full Name" />

							</div>

						</div>

						<div class="row">

							<div class="ho_block">

								<input class="span12" id="event_reg_email" name="event_reg_email" type="text" placeholder="Enter Your Email" />

															

								

							</div>

						</div>

						<div class="row">

							<div class="ho_block">

								<input type="hidden" name="g_hangout_id" value="'.$post->ID.'" >

								<button type="button" name="submit" id="reg_popup_form_submit" class="hangout_btn btn btn-warning span12"><i class="icon-share-alt"></i> Register Now</button>

							</div>

						</div>

						<div class="clear"></div>

					</form>	

				</div>

			</div>
			</div>

		</div>

		<div class="clear"></div>

			</div>

		

		

			<a href="javascript:void(0);" data-reveal-id="myModal2" id="clicktoopenpopup2">&nbsp;</a>

			<div id="myModal2" class="reveal-modal"  rel="0">
			
				

				'.$buybuttonhtml.'

				<a class="close-reveal-modal" style="display:none;">&nbsp;</a>
			
			</div>

			

			<a href="javascript:void(0);" data-reveal-id="myModal3" id="clicktoopenpopup3">&nbsp;</a>

			<div id="myModal3" class="reveal-modal bottom" rel="0" style="top:400px;">

				<h1>Please Vote</h1><div class="md_body">';

				$form   .= '<div id="vote_hangout_form"><div id="voteoutput"></div>';

				$form   .= '<span>'.$vote_question.'</span>'."<br />";

				$options = explode('__', $vote_options);

				foreach($options as $option)

				{

					$form   .= '<div class="hh_vote"><input type="radio" name="vote_answer" class="vote_options" value="'.$option.'">&nbsp;'.$option."</div>";

				}

				$form   .= '<input type="button" class="hangout_btn btn btn-warning" value="Vote" id="addvotefrompop">';

				$form   .= '</div></div>

			</div>';

			$content1 .= '<div id="ajax_loader" style="position: fixed; width:300px; height: 300px; z-index: 1070; top: 600px; left: 600px; display: none; background: none; border: 0px solid #259BB8;"><img src="'.plugin_dir_url(__FILE__).'images/ajax-loader.gif"></div>';





	$content .=  $form;

	

	//global $post;

	//var_dump($post);
if(get_post_meta($post->ID,'show_repay_pop_up_form',true)==1){
	echo $content;
}
if(get_post_meta($post->ID,'show_popup_on_video',true)==1){
	echo $content;
}






?>
</body>
</html>
