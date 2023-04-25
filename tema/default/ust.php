<?php

?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<link rel="shortcut icon" href="<?php echo URL.TEMA_URL;?>/img/fav.html" type="image/png">

	<?php echo metatag($title,$des,$key);?>

	<meta name="author" content="www.keykubad.com">

	<!--[if lt IE 10]><script src="js/modernizr.custom.65274.js"></script><![endif]-->

	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'>
	<link href='<?php echo URL.TEMA_URL;?>/css/bootstrap.css' rel='stylesheet' type='text/css'>
	<link href="<?php echo URL.TEMA_URL;?>/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	<link href="<?php echo URL.TEMA_URL;?>/css/tinyscrollbar.css" rel="stylesheet" type='text/css'>
	<!--[if IE 7]><link type='text/css' rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
	<link href='<?php echo URL.TEMA_URL;?>/css/custom.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo URL.TEMA_URL;?>/css/sliderim.css' rel='stylesheet' type='text/css'>
	<!--[if lte IE 9]>
	<link type='text/css' rel="stylesheet" href="css/fonts/ie-google-webfont.css">
	<link type='text/css' rel="stylesheet" href="css/lte-ie9.css">
	<![endif]-->
	<!--[if lte IE 7]>
	<link type='text/css' rel="stylesheet" href="css/lte-ie8.css">
	<![endif]-->


	<!-- Scripts -->
	<script src="<?php echo URL.TEMA_URL;?>/js/jquery.js"></script>
	<!--[if (gte IE 6)&(lte IE 8)]><script src="js/selectivizr-min.js"></script><![endif]-->
	<script src="<?php echo URL.TEMA_URL;?>/js/bootstrap.js"></script>
	<script src="<?php echo URL.TEMA_URL;?>/js/retina.js"></script>
	<script src="<?php echo URL.TEMA_URL;?>/js/tinyscrollbar.js"></script>
	<script src="<?php echo URL.TEMA_URL;?>/js/caroufredsel.js"></script>
	<script src="<?php echo URL.TEMA_URL;?>/js/slider.js"></script>
	<!--[if lte IE 10]>
	<script src="js/jquery.color.js"></script>
	<script src="js/custom-lte-ie10.js"></script>
	<![endif]-->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo URL.TEMA_URL;?>/js/gmaps.js"></script>
	<script src="<?php echo URL.TEMA_URL;?>/js/nicescroll.js"></script>
	<script src="<?php echo URL.TEMA_URL;?>/js/custom.js"></script>




<!-- Banner-->


</head>
<body class="clearfix" data-smooth-scrolling="1">
<div class="n_page_wrapper">

	<header class="clearfix">

		<div class="n_content clearfix">

			<div class="row-fluid">
				<div class="span12">
					<a href="index.html" class="n_logo_container pull-left">
						<img src="<?php echo URL."/".logo();?>"  />
					</a><!-- Site Logo -->
					<ul class="n_mini_menu pull-right clearfix">
					<?php echo reklamlar(1);?>
					</ul>

					<div class="n_invisible_splitter"></div>