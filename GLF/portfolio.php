<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>GreetLabs-Portfolio</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php $current = 'portfolio'; ?>
        <?php include("header.php"); ?>



		<!-- Page Title
		============================================= -->

		<section id="page-title" class="page-title-mini">
			<div class="container clearfix">
				<h1>Portfolio</h1>
				<span>Everything you need to know about our Company</span>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Portfolio</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul id="portfolio-filter" class="clearfix">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".wapp">Web Applications</a></li>
						<li><a href="#" data-filter=".web">Websites</a></li>
						<li><a href="#" data-filter=".apps">Apps</a></li>						
						<li><a href="#" data-filter=".mean">MEAN Stack Applications</a></li>
						<li><a href="#" data-filter=".case">Case Studies</a></li>

					</ul><!-- #portfolio-filter end -->

					

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="clearfix">

						<article class="portfolio-item mean pf-icons">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/eshop.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/eshop.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="eshop.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="eshop.php">E-shop</a></h3>
								<span>Web  : <a href="http://www.eshopcart.in/">http://www.eshopcart.in/</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/vlsig.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/vlsig.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="vlsiguru.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="vlsiguru.php">VLSIGURU</a></h3>
								<span>Web  : <a href="http://www.vlsiguru.com/">http://www.vlsiguru.com/</a></span>
							</div>
						</article>

						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/vivotex.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/vivotex.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="vivotex.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="vivotex.php">Vivotex</a></h3>
								<span>Web  : <a href="http://vivotexindia.com/">http://vivotexindia.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/da.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/da.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="datapps.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="datapps.php">Datapps</a></h3>
								<span>Web  : <a href="http://datappsinfotech.com/">http://datappsinfotech.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/dvr.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/dvr.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="dvr.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="dvr.php">DVR Pharma</a></h3>
								<span>Web  : <a href="http://www.dvrpharma.com/">http://www.dvrpharma.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/metro.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/metro.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="metro.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="metro.php">Metrocorp</a></h3>
								<span>Web  : <a href="http://www.metrocorp.in/">http://www.metrocorp.in/</a></span>
							</div>
						</article>
						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/rm.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/rm.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="rm.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="rm.php">RMINFRA</a></h3>
							<span>Web  : <a href="http://rminfra.com/">http://rminfra.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/mce.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/mce.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="mce.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="mce.php">Mother College of Education</a></h3>
							<span>Web  : <a href="#">http://www.mce.in/</a></span>
							</div>
						</article>
						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/sl.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/sl.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="spacelabs.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="spacelabs.php">SpaceLabs</a></h3>
								<span>Web  : <a href="http://spacelabstudio.in/">http://spacelabstudio.in/</a></span>
							</div>
						</article>
						<article class="portfolio-item pf-graphics web">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/ven.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/ven.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="ven.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="ven.php">Sri Venkateshwara College</a></h3>
								<span>Web  : <a href="#">http://www.greetlabs.in/</a></span>
							</div>
						</article>

					

					
					

					

						<article class="portfolio-item wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/blackpepper.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/blackpepper.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="bp.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="bp.php">BlackPepper Technologies</a></h3>
								<span>Web  : <a href="http://www.blackpeppertech.com/">http://www.blackpeppertech.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/pepperrites.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/pepperrites.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="pepperites.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="pepperites.php">Pepperites</a></h3>
							<span> <a href="http://www.blackpeppertech.com/pepperite/">www.blackpeppertech.com/pepperite/</a></span>
							</div>
						</article>
						<article class="portfolio-item wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/cb.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/cb.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="cricketbindass.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="cricketbindass.php">CricketBindass</a></h3>
								<span>Web  : <a href="#">http://www.greetlabs.in/</a></span>
							</div>
						</article>
						<article class="portfolio-item wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/nykaa.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/nykaa.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="nykaa.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="nykaa.php">Nykaa</a></h3>
								<span>Web  : <a href="http://www.nykaa.com/">http://www.nykaa.com/</a></span>
							</div>
						</article>
							<article class="portfolio-item pf-graphics wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/johal.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/johal.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="johal.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="johal.php">Johal Logistics</a></h3>
								<span>Web  : <a href="http://www.johallogistics.com/">http://www.johallogistics.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/ir.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/ir.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="indiarush.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="indiarush.php">India Rush</a></h3>
								<span>Web  : <a href="http://indiarush.com/">http://indiarush.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/coboster.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/coboster.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="kobster.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="kobster.php">Kobster</a></h3>
								<span>Web  : <a href="http://www.kobster.com/">http://www.kobster.com/</a></span>
							</div>
						</article>
						<article class="portfolio-item wapp">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="images/portfolio/small/pv.jpg" alt="Open Imagination">
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/large/pv.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="peppervine.php" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="peppervine.php">Pepper Vine</a></h3>
								<span><a href="http://www.blackpeppertech.com/pepper/">www.blackpeppertech.com/pepper/</a></span>
							</div>
						</article>

					
						

					</div><!-- #portfolio end -->

					<!-- Portfolio Script
					============================================= -->
					<script type="text/javascript">

						jQuery(window).load(function(){

							var $container = $('#portfolio');

							$container.isotope({ transitionDuration: '0.65s' });

							$('#portfolio-filter a').click(function(){
								$('#portfolio-filter li').removeClass('activeFilter');
								$(this).parent('li').addClass('activeFilter');
								var selector = $(this).attr('data-filter');
								$container.isotope({ filter: selector });
								return false;
							});

							$('#portfolio-shuffle').click(function(){
								$container.isotope('updateSortData').isotope({
									sortBy: 'random'
								});
							});

							$(window).resize(function() {
								$container.isotope('layout');
							});

						});

					</script><!-- Portfolio Script End -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
	<?php include("footer.php"); ?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>