<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="partnership.php">Partnership</a></li>
							<li><a href="portfolio.php">Portfolio</a></li>
							<li><a href="blog.php">Blog</a></li>
							
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="https://www.facebook.com/greetlabs" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="https://twitter.com/greetlabs" class="si-twitter" target="_blank"><span class="ts-icon" target="_blank"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="https://dribbble.com/greetlabs/" class="si-dribbble" target="_blank"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
							<li><a href="https://www.pinterest.com/greetlabs/" class="si-pinterest" target="_blank"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
							<li><a href="tel:+91.80.65 66 91 91" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.08.65 66 91 91</span></a></li>
							<li><a href="mailto:meet@greetlabs.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">meet@greetlabs.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Greet Labs Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Greet LabsLogo"></a>
					
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							 <li <?php if($current == 'index') {echo 'class="current"';} ?>><a href="index.php"><div>Home</div><span>Lets Start</span></a>
							 </li>							
							  <li <?php if($current == 'company') {echo 'class="current"';} ?> class="">
								<a href="about-us.php">Company<!--<b class="caret"></b>--><span>caption</span></a>
								<ul>				
									<li><a href="why-us.php">Why Greet Labs</a></li>
									<li><a href="our-quality-policy.php">Quality Policy</a></li> 
								</ul>
							</li>
							 <li <?php if($current == 'services') {echo 'class="current mega-menu"';} ?> class="mega-menu"><a href="services.php"><div>Services</div><span>caption</span></a>
								<div class="mega-menu-content style-2 col-4 clearfix">
									<ul>
										<li class="mega-menu-title"><a href="#"><div>Web Development</div></a>
											<ul>
												<li><a href="php-development.php"><div>PHP Development</div></a></li>
												<li><a href="laravel-web-application-development.php"><div>Laravel Web Development</div></a></li>
												<li><a href="ruby-on-rails-development.php"><div>Ruby on Rails Development</div></a></li>
												<li><a href="nodejs-development.php"><div>Node JS Development</div></a></li>
												<li><a href="mean-js-full-stack-development.php"><div>MEAN Stack Development</div></a></li>
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="mega-menu-title"><a href="#"><div>CMS & ECOMMERCE</div></a>
											<ul>
												<li><a href="drupal-cms-development.php"><div>Drupal Development</div></a></li>
												<li><a href="magento-development.php"><div>Magento Development</div></a></li>
												<li><a href="wordpress-development.php"><div>Wordpress Development</div></a></li>
												<li><a href="aspdotnetstorefront-development.php"><div>AspDotNetStorefront</div></a></li>
												<li><a href="website-designing.php"><div>Website Designing</div></a></li>
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="mega-menu-title"><a href="#"><div>Mobile App Development</div></a>
											<ul>
												<li><a href="android-application-development.php"><div>Android App Development</div></a></li>
												<li><a href="hire-iphone-application-developer.php"><div>IPhone App Development</div></a></li>
												<li><a href="swift-app-development-company-india.php"><div>Swift App Development</div></a></li>
												<li><a href="windows-mobile-application-development.php"><div>Windows App Development</div></a></li>
												<li><a href="phone-gap-application-development.php"><div>Phone Gap Application</div></a></li>
												
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="mega-menu-title"><a href="#"><div>Enterprise</div></a>
											<ul>
												<li><a href="custom-software-development.php"><div>Custom Software Development</div></a></li>
												<li><a href="mvc-asp-net-development.php"><div>MVC ASP.Net</div></a></li>
												<li><a href="big-data-analytics.php"><div>Big Data Services</div></a></li>
												<li><a href="#"><div>Salesforce CRM </div></a></li>
												<li><a href="testing-services.php"><div>Testing Services</div></a></li>
												
												
											</ul>
										</li>
									</ul>
								</div>
							</li>
							
							<li <?php if($current == 'careers') {echo 'class="current"';} ?>class="">
							<a href="jobs.php"><div>careers</div><span>Caption</span></a>
							</li>
							<li <?php if($current == 'contact-us') {echo 'class="current mega-menu"';} ?>class=""><a href="contact-us.php"><div>Contact Us</div><span>Caption</span></a></li>
							
							
						</ul>
						<ul>
						   
							<li> <a href="hire-us.php"><div>Hire Us</div><span>Caption</span></a></li>
							
						</ul>
						
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header>