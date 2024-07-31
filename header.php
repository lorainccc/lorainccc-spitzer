<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCC Framework
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js"><!-- added .no-js to prevent FOUC on repsonsive nav -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<style>
/* Campus Status Styling */
 
 [ng-class]{
  display: none;
 }

.lc-active{
 display:block;
}

.lc-inactive{
 display:none;
}

 .lc-status{
  margin: 10px 0;
  min-height: 155px;	
 }

 .lc-status span.headline{
  font-family: 'Raleway', sans-serif;
  font-size: 30px;
  font-weight: 700;
 }
 
 .lc-status span.headline, .lc-status span.exclamation{
  color: #c00000;
 }

 .lc-status span.headline, .lc-status span.info{
  color: #0055a5;
 }
  .lc-status .lc-status-button-exclamation {
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c00000) );
	background:-moz-linear-gradient( center top, #f24537 5%, #c00000 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c00000');
	background-color:#f24537;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topleft:8px;
	border-top-left-radius:8px;
	-webkit-border-top-right-radius:8px;
	-moz-border-radius-topright:8px;
	border-top-right-radius:8px;
	-webkit-border-bottom-right-radius:8px;
	-moz-border-radius-bottomright:8px;
	border-bottom-right-radius:8px;
	-webkit-border-bottom-left-radius:8px;
	-moz-border-radius-bottomleft:8px;
	border-bottom-left-radius:8px;
	text-indent:0px;
	border:1px solid #d02718;
	display:inline-block;
	color:#ffffff;
	font-family:'Open Sans';
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	line-height:30px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #810e05;
 padding:0 15px;
}
  .lc-status .lc-status-button-exclamation:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c00000), color-stop(1, #f24537) );
	background:-moz-linear-gradient( center top, #c00000 5%, #f24537 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c00000', endColorstr='#f24537');
	background-color:#c00000;
}
  .lc-status .lc-status-button-exclamation:active {
	position:relative;
	top:1px;
 }
 
  .lc-status .lc-status-button-info, .lc-status .lc-status-button-info-alt {
	-moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #439ef2), color-stop(1, #0055a5) );
	background:-moz-linear-gradient( center top, #439ef2 5%, #0055a5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#439ef2', endColorstr='#0055a5');
	background-color:#439ef2;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topleft:8px;
	border-top-left-radius:8px;
	-webkit-border-top-right-radius:8px;
	-moz-border-radius-topright:8px;
	border-top-right-radius:8px;
	-webkit-border-bottom-right-radius:8px;
	-moz-border-radius-bottomright:8px;
	border-bottom-right-radius:8px;
	-webkit-border-bottom-left-radius:8px;
	-moz-border-radius-bottomleft:8px;
	border-bottom-left-radius:8px;
	text-indent:0;
	border:1px solid #337fed;
	display:inline-block;
	color:#ffffff;
	font-family:'Open Sans';
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	line-height:30px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #1570cd;
 padding:0 15px;
}
 .lc-status .lc-status-button-info:hover, .lc-status .lc-status-button-info-alt:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #0055a5), color-stop(1, #439ef2) );
	background:-moz-linear-gradient( center top, #0055a5 5%, #439ef2 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0055a5', endColorstr='#439ef2');
	background-color:#0055a5;
} .lc-status .lc-status-button-info:active, .lc-status .lc-status-button-info-alt:active {
	position:relative;
	top:1px;
}
  .lc-status .lc-status-button-info a, .lc-status .lc-status-button-info-alt a{
  color:#fff;
 } 
 .lc-notify-image{
	border:0;
 }
</style>
</head>
<body <?php body_class(); ?>>
	
	<div class="off-canvas-wrapper">
	
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			
			<div class="off-canvas position-right" id="offCanvas" data-position="right" data-off-canvas data-trap-focus="false">
			
				<?php get_template_part( 'template-parts/nav', 'offcanvas'); ?>
			
			</div>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<div id="page" class="hfeed site">

					<a class="show-on-focus hide-for-print" href="#content"><?php esc_html_e( 'skip to content', 'lccc-framework' ); ?>Skip to Content</a>

					<header id="masthead" class="site-header" role="banner">

						<?php get_template_part( 'template-parts/nav', 'topbar' ); ?>

					</header><!-- #masthead -->

					<div id="content" class="site-content">
						<div ng-app="app">
							<div ng-controller="lcStatusCtrl">
								<div class="row" ng-class="notify.active == '1' ? 'lc-active' : 'lc-inactive'">
									<div class="show-for-medium large-2 columns lc-status">
										<!--<img alt="LCCC Prepared" src="/wp-content/themes/lorainccc/images/campus-status-exclamation.png">-->
										<img src="/wp-content/themes/lorainccc/images/campus-status-{{notify.type}}.png" alt="{{notify.headline}}" />
									</div>
									<div class="small-12 large-10 columns lc-status">
										<span class="headline {{notify.type}}">{{notify.headline}}</span>
										<p>{{notify.text}}</p>
										<p><a href="{{notify.url}}" title="{{notify.buttontext}}" target="_blank" class="lc-status-button-{{notify.type}}">{{notify.buttontext}}</a></p>
									</div>
									<!-- Spacer -->
									<div style="height:4px; width:100%; display:inline-block;">&nbsp;</div>
								</div>
							</div>
						</div>