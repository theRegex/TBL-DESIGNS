<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Name</title>
  

	<title><?php bloginfo('name');?></title>
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

<header>
	<?php wp_nav_menu(array('theme_location'=>'primaryHeader')); ?>
</header><!-- /header -->