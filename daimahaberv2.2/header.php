<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title(''); ?><?php if(wp_title(' ', false)) { echo ' &raquo; '; } ?><?php bloginfo("name"); ?></title>
<meta name="description" content="<?php 
if (is_home()) { bloginfo("description"); }
else if (is_search()) { the_search_query(''); echo " haberleri, "; the_search_query(''); echo " haberi, "; the_search_query(''); echo " ile ilgili haberler"; }
else if (is_single()) { while(have_posts()) : the_post(); the_excerpt_rss(); endwhile;  }
else if (is_page()) { wp_title(''); }
else if (is_category()) { single_cat_title(); echo " haberleri, "; single_cat_title(); echo " haberi, "; single_cat_title(); echo " ile ilgili haberler"; }
else if (is_tag()) { single_tag_title(''); echo " haberleri, "; single_tag_title(''); echo " haberi, "; single_tag_title(''); echo " ile ilgili haberler"; }
else { bloginfo("description"); } ?>" />
<meta name="keywords" content="<?php 
if (is_search()) { the_search_query(''); echo " haberleri, "; the_search_query(''); echo " haberi, "; the_search_query(''); echo " ile ilgili haberler";  }
else if (is_author()) { }
else if (is_single()) {
	$keywords = "";
	$tags = wp_get_post_tags($post->ID);
	foreach ($tags as $tag) {
		$keywords .= $tag->name . ", ";
		$keywords .= $tag->name . "haberleri, ";
		$keywords .= $tag->name . "haberi, ";
	}	echo $keywords;
 }
else if (is_page()) { wp_title(''); }
else if (is_category()) { single_cat_title(); echo " haberleri, "; single_cat_title(); echo " haberi, "; single_cat_title(); echo " ile ilgili haberler"; }
else if (is_tag()) { single_tag_title(''); echo " haberleri, "; single_tag_title(''); echo " haberi, "; single_tag_title(''); echo " ile ilgili haberler"; }
else { bloginfo("keywords");  } ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/reset.css" media="screen" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style.css" media="screen" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php get_option("er_favicon"); ?>" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&subset=latin,latin-ext" rel="stylesheet">
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/jquery-latest.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/slider.js"></script>
<!--
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/Neo_Sans_Pro_400-Neo_Sans_Pro_700.font.js"></script> 
!-->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/tabcontent.js"></script>

<script type="text/javascript">
Cufon.replace('', {
textShadow: '#999999 0.4px 0.4px'
});
Cufon.replace('.manset-title, .sidebar-manset-title', {
textShadow: '#000 1px 2px'
});
</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'tr'}
</script>
<?php wp_head(); ?>
</head>

<body>
<div id="sayfa">
<div id="headtop">
<div class="text-reklam"><?php echo stripslashes(get_option("er_reklam-headtop")); ?></div>
<?php wp_nav_menu("menu=top-menu"); ?>
</div>
<div id="header">
<div id="right">
<?php echo stripslashes(get_option("er_reklam-header")); ?>
</div>
<div id="logo"><a href="<?php bloginfo('wpurl'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option("er_logo"); ?>" alt="<?php bloginfo("name"); ?>" /></a>
</div>
</div>
<label for="show-menu" class="show-menu">Menüyü Göster</label>
<input type="checkbox" id="show-menu" role="button">
<div id="menu">
<?php wp_nav_menu("menu=site-menu"); ?>
</div>
<div class="clear"></div>
