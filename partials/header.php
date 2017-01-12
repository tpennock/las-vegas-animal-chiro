<?php

$base_url = '/lvac/';

$site_title = 'Las Vegas Animal Chiro: Chiropractic Care for the Large and Small Animal';

$pages = array(
	$base_url . 'index.php' => 'Home',
	$base_url . 'about.php' => 'About',
	$base_url . 'services.php' => 'Services',
	$base_url . 'faqs.php' => 'FAQs',
	$base_url . 'contact.php' => 'Contact Us',
	$base_url . 'calendar.php' => 'Calendar',
	$base_url . 'testimonials.php' => 'Testimonials',
);

$active_page = $_SERVER['PHP_SELF'];

$lvac_phone = '(702) 798-8201';
$lvac_email = 'lasvegasanimalchiro@gmail.com';

?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Las Vegas Animal Chiro" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="css/colors.css" type="text/css" />
	<link rel="stylesheet" href="css/custom.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title><?php echo $site_title . ' - ' . $pages[$active_page]; ?></title>

</head>

<body data-speed-in="900" data-speed-out="100">
	<?php include 'js/sctag.html'; ?>


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php include 'partials/nav-bar.php';?>

		<!-- Page Title
		============================================= -->
		<?php //if ($active_page != $base_url . 'index.php') : ?>
		<!-- <section id="page-title" class="page-title-mini">

			<div class="container clearfix">
				<h1><?php echo $pages[$active_page]; ?></h1>
			</div>

		</section> -->
		<?php //endif; ?>
		<!-- #page-title end -->
