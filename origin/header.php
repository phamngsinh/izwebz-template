<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
    <?php if(is_home()) { ?>
	<script src='<?php echo bloginfo('template_directory'); ?>/js/easyAccordion.js'></script>
    <script src="<?php echo bloginfo('template_directory'); ?>/js/utility.js"></script>
    <script src="<?php echo bloginfo('template_directory'); ?>/js/tooltips.js"></script>
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/featured.css" />
    <?php } ?>
    <?php if(is_page(11)) {?>
    <script src="<?php echo bloginfo('template_directory'); ?>/js/faqs.js"></script>
    <?php }?>
    <?php if(is_single()) {?>
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/comments.css" />
    <?php }?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		</div>
        <div id="top-bar" class="group">
            <?php wp_nav_menu(array('menu'=>'Page Menu', 'container'=>'')); ?>
            
            <div id="searchBox">
                <?php get_search_form(); ?>
            </div>
        </div><!--end top-bar-->