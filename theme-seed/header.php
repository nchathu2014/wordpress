<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset=<?php blogInfo('charset')?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php blogInfo("name");?></title>
	<link rel="stylesheet" type="text/css"  href=<?php blogInfo("stylesheet_url");?>  media="screen">
</head>
<body>
 <h1>Seed Theme</h1>

 <div id="wrapper">
 	
 		<!-- Begin Header -->
 			<div id="header">
 				<h1><?php blogInfo('name');?></h1>
 				<p><?php blogInfo('description')?></p>
 				<!-- Begin Nav -->
		 			<ul id="nav">
		 				<li><a href="<?php echo get_settings('home'); ?>">HOME</a></li>
		 				<?php wp_list_pages('title_li=')?>
		 			</ul>
		 		<!-- End Nav -->

 			</div>
 		<!-- Enf Header-->

 		