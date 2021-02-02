<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow"/>
	

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
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Greet Labs - Web and Mobile Application Development Company</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<?php $current = 'hire-us'; ?>
        <?php include("header.php"); ?>

		<!-- Header
		============================================= -->
		<header id="header" class="no-sticky">

			<div id="header-wrap">

				<div class="container clearfix">

					<!-- Logo
					============================================= -->
					<div id="logo" class="divcenter">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img class="divcenter" src="images/logo.png" alt="greetlabs Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img class="divcenter" src="images/logo@2x.png" alt="greetlabs Logo"></a>
				</div><!-- #logo end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="heading-block title-center nobottomborder">
						<h1>Page Under Construction</h1>
						<span>Please check back again within Some Days as We're Pretty Close</span>
					</div>

					<div id="countdown-ex1" class="countdown countdown-large divcenter bottommargin" style="max-width:700px;"></div>

					<div class="clear"></div>

					<div class="progress progress-striped active topmargin divcenter" style="height: 10px; max-width:600px;">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						</div>
					</div>

					<div class="divider divider-center divider-short divider-margin"><i class="icon-time"></i></div>

					<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
					<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
						<div class="input-group input-group-lg divcenter" style="max-width:600px;">
							<span class="input-group-addon"><i class="icon-email2"></i></span>
							<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Subscribe Now</button>
							</span>
						</div>
					</form>

					<script>
						jQuery(document).ready( function($){
							var newDate = new Date(2016, 07, 11);
							$('#countdown-ex1').countdown({until: newDate});
						});
						$("#widget-subscribe-form").validate({
							submitHandler: function(form) {
								$(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
								$(form).ajaxSubmit({
									target: '#widget-subscribe-form-result',
									success: function() {
										$(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
										$('#widget-subscribe-form').find('.form-control').val('');
										$('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
										SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
									}
								});
							}
						});
					</script>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2016 All Rights Reserved by Greet Labs Pvt Ltd.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> meet@greetlabs.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-9591-61 91 91 <span class="middot">&middot;</span> <i class="icon-skype2"></i> greetlabsOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>