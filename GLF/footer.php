<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">
								<img src="images/greetlabs_footer_logo.png" alt="" class="footer-logo">
								<p>Over a decade with an industry experience we offer a excess of client centric service by enabling users achieve competitive advantage through lithe and next generation global delivery models.
								</p>
							</div>

						</div>

						<div class="col_one_third">

							<div class="widget  clearfix">
							  <h4>Address</h4>
								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Office:</strong><br>
										#5, 3rd Floor, Raj Square, Vijaya Bank Colony(ORR),Banasawadi,<br>
										Bangalore - 560 043<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 9591 61 91 91<br>
									<abbr title="Fax"><strong>Land Line:</strong></abbr> (08) 4370 8244<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> meet@greetlabs.com
								</div>
								

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget widget_links clearfix">
								<h4>Menu</h4>

								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="about-us.php">About Us</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="portfolio.php">Portfolio</a></li>
									<li><a href="jobs.php">Careers</a></li>
									<li><a href="hire-us.php">Hire Us</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact-us.php">Contact us</a></li>
								</ul>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<!--<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="30" data-to="60" data-refresh-interval="60" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Projects</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="20" data-to="50" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>-->

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News. Let’s get to know new services.</h5>
							<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<script type="text/javascript">
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

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="https://www.facebook.com/greetlabs" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.facebook.com/greetlabs"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="https://twitter.com/greetlabs" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="https://twitter.com/greetlabs"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Twitter</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2018 All Rights Reserved by &nbsp;<a><span style="background-color:#f3732b; color:#ffffff; "><b>Greet labs Pvt Ltd.</b></span></a><br>
				    <div class="copyright-links">
					<a href="terms-of-use.php">Terms of Use</a> / 
					<a href="privacy-statement.php">Privacy Policy</a> /
					<a href="sitemap.php">Site Map</a> /
					<a href="payments.php"><span style="background-color:#f3732b; color:#ffffff; ">Payments</span></a>
					</div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/greetlabs" target="_blank" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="https://twitter.com/greetlabs" target="_blank" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="https://plus.google.com/109756971201836218990" target="_blank" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="https://www.pinterest.com/greetlabs/" target="_blank" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="https://www.linkedin.com/company/greet-labs-pvt-ltd" target="_blank" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> meet@greetlabs.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-08- 4370-82-44 <span class="middot">&middot;</span> <i class="icon-skype2"></i> Greetlabs
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>