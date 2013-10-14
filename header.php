<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(); ?></title>
<meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1;">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/estilo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/iconize.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/estilo_print.css" type="text/css" media="print" />

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.full-min.js" type="text/javascript"></script>
<?php wp_enqueue_style('thickbox'); ?>
<?php wp_enqueue_script('jquery'); ?>
<?php wp_enqueue_script('thickbox'); ?>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon"> 
<link href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-precomposed.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed" sizes="57x57" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60-precomposed.png" rel="apple-touch-icon-precomposed" sizes="60x60" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-76x76-precomposed.png" rel="apple-touch-icon-precomposed" sizes="76x76" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-120x120-precomposed.png" rel="apple-touch-icon-precomposed" sizes="120x120" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-152x152-precomposed.png" rel="apple-touch-icon-precomposed" sizes="152x152" />

<link href="humans.txt" rel="author" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>
<body>
<div id="wrapper">
<header>
<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
<hr />
<?php wp_nav_menu( array('theme_location' => 'principal' ) ); ?>
<hr />
<?php wp_nav_menu( array('theme_location' => 'secundario' ) ); ?>

<aside id="buscador"> 
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/"> 
<input type="text" placeholder="Buscar…" value="<?php the_search_query(); ?>" name="s" id="s" /> 
<input type="submit" class="icon-only"  id="searchsubmit" value="Buscar" />
</form>
</aside>

</header>

<div id="inner-wrapper">
