<?php
function page_head($page_ID) {

include 'db_conn.php';
include 'menu_functions.php'; // calling gloabl main menu etc.
include 'data_menu.php'; // calling gloabl main menu etc.



?>
<!DOCTYPE html>
<html class="dark">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>PRRPSS - Life with Purpose - <?php echo $page_name; ?></title>	

		<meta name="keywords" content="PRRPSS - Life with Purpose" />
		<meta name="description" content="PRRPSS - Life with Purpose">
		<meta name="author" content="PRRPSS.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="demo/vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
		<div class="body">

			<!-- START HEADER -->
			<header id="header" class="header-narrow header-full-width"  data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.php">
											<img alt="PRRPSS" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href="about.php"><i class="fas fa-angle-right"></i> About Us</a>
											</li>
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href="contact.php"><i class="fas fa-angle-right"></i> Contact Us</a>
											</li>
										</ul>
									</nav>
									<div class="header-search d-none d-md-block">
										<form id="searchForm" action="search.php" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-append">
													<button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<!-- START MAIN MENU -->
								<div class="header-row">
									<div class="header-nav">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<?php main_menu($page_ID); ?>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									
								</div>
								<!-- END MAIN MENU -->
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- END HEADER -->
			
			<div role="main" class="main" style="background: #171717">
			
					<section class="page-header">
						<div class="container">
							<div class="row">
								<div class="col">
									<ul class="breadcrumb">
										<li><a href="#">Home</a></li>
										<?php echo $add_breadcrumbs; ?>
										<li class="active"><?php echo $page_name; ?></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<h1><?php echo $page_name; ?></h1>
								</div>
							</div>
						</div>
					</section>
					
					
					<?php echo $sub_nav; ?>
					
<!-- START PAGE -->
<div class="container">

<?

}

////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

function page_foot($page_ID) {
include 'db_conn.php';

?>
</div>
<!-- end: page -->

			<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-9 col-lg-9">
								<div class="call-to-action-content">
									<h3>PRRPSS is <strong>everything</strong> you need to manage your <strong>data!</strong></h3>
									<p class="mb-0">Join hundreds of other  <strong>small businesses</strong>, by making the switch today</p>
								</div>
							</div>
							<div class="col-sm-3 col-lg-3">
								<div class="call-to-action-btn">
									<a href="register.php" target="_blank" class="btn btn-lg btn-primary">Register</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="left: 110%; top: -40px;"></span>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
 
				<footer class="footer" id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>News From PRRPSS</span>
						</div>
						<div class="col-lg-3">
							<div class="newsletter">
								<h4>Join Mailing List</h4>
								<p>Get the latest news and information first.</p>
			
								
								
								
								<!-- Begin MailChimp Signup Form -->
								<div id="mc_embed_signup">
								
								
								
								<form action="https://PRRPSS.us17.list-manage.com/subscribe/post?u=5156687f251c7f17c3172d935&amp;id=e60e95827d" method="post" id="mc-embedded-subscribe-form newsletterForm" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div class="input-group">
										<input class="required email form-control form-control-sm" placeholder="Email Address" name="EMAIL" id="newsletterEmail" type="text" id="mce-EMAIL">
										<span class="input-group-append">
											<button class="btn btn-light" type="submit" id="mc-embedded-subscribe">Go!</button>
										</span>
									</div>
									
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									
									<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5156687f251c7f17c3172d935_e60e95827d" tabindex="-1" value=""></div>
									
								</form>
								
								
								</div>

								<!--End mc_embed_signup-->
								
								
							</div>
							<hr />
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fas fa-map-marker"></i> <strong>Address:</strong> 30 Canton Road, HK0000, Hong Kong, PRC</p></li>
									<li><p><i class="fas fa-phone"></i> <strong>Phone:</strong> +852 8191 2667</p></li>
									<li><p><i class="fas fa-envelope"></i> <strong>Email:</strong> <a href="mailto:webmaster@prrpss.com">webmaster@prrpss.com</a></p></li>
								</ul>
							</div>
							<hr />
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								<li class="social-icons-github"><a href="http://www.github.com/cooscreations/prrpss" target="_blank" title="Github"><i class="fab fa-github"></i></a></li>
							</ul>
							
						</div>
						<div class="col-lg-9">
							<h4>Latest Tweets</h4>
							<a class="twitter-timeline" data-height="400" data-theme="dark" href="https://twitter.com/prrpss?ref_src=twsrc%5Etfw">Tweets by prrpss</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-fluid" src="img/logo-footer.png">
								</a>
							</div>
							<div class="col-lg-5">
								<p>© Copyright 2018. All Rights Reserved.</p>
							</div>
							<div class="col-lg-6">
								<nav id="sub-menu">
									<ul>
										<li><a data-toggle="modal" data-target="#devModal">Dev Notes</a></li>
										<li><a href="glossary.php">Glossary</a></li>
										<li><a href="legal.php">Legal</a></li>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.php">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="devModal" tabindex="-1" role="dialog" aria-labelledby="devModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="defaultModalLabel">Dev Notes</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<!-- START OUTPUT SERVER VARS -->
				<?php 
					$indicesServer = array('PHP_SELF', 
					'argv', 
					'argc', 
					'GATEWAY_INTERFACE', 
					'SERVER_ADDR', 
					'SERVER_NAME', 
					'SERVER_SOFTWARE', 
					'SERVER_PROTOCOL', 
					'REQUEST_METHOD', 
					'REQUEST_TIME', 
					'REQUEST_TIME_FLOAT', 
					'QUERY_STRING', 
					'DOCUMENT_ROOT', 
					'HTTP_ACCEPT', 
					'HTTP_ACCEPT_CHARSET', 
					'HTTP_ACCEPT_ENCODING', 
					'HTTP_ACCEPT_LANGUAGE', 
					'HTTP_CONNECTION', 
					'HTTP_HOST', 
					'HTTP_REFERER', 
					'HTTP_USER_AGENT', 
					'HTTPS', 
					'REMOTE_ADDR', 
					'REMOTE_HOST', 
					'REMOTE_PORT', 
					'REMOTE_USER', 
					'REDIRECT_REMOTE_USER', 
					'SCRIPT_FILENAME', 
					'SERVER_ADMIN', 
					'SERVER_PORT', 
					'SERVER_SIGNATURE', 
					'PATH_TRANSLATED', 
					'SCRIPT_NAME', 
					'REQUEST_URI', 
					'PHP_AUTH_DIGEST', 
					'PHP_AUTH_USER', 
					'PHP_AUTH_PW', 
					'AUTH_TYPE', 
					'PATH_INFO', 
					'ORIG_PATH_INFO') ; 

					echo '<table class="table table-responsive">
							<thead>
							  <th>Variable</th>
							  <th>Value</th>
							</thead>
					
					' ; 
					foreach ($indicesServer as $arg) { 
						if (isset($_SERVER[$arg])) { 
							echo '<tr><td class="text-right">'.$arg.'</td><th>' . $_SERVER[$arg] . '</th></tr>' ; 
						} 
						else { 
							echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
						} 
					} 
					echo '</table>' ; 
					?>
				<!-- END OUTPUT SERVER VARS -->	
							</div>
							<div class="modal-footer">
								<a href="settings.php?self=<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-lg btn-primary"><i class="fa fa-cogs"></i> Edit Page</a>
							</div>
						</div>
					</div>
				</div>
				

				
				
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		 
		 <!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-195932-46"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-195932-46');
			</script>

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/5156687f251c7f17c3172d935/03efdd546ab6b0d2f137f1af8.js");</script>


	</body>
</html>
	<?php
	

// now append the analytics table

    $record_pageview_SQL = "INSERT INTO `page_views`(`ID`, `page_ID`, `filename`, `date`, `user_ID`, `referrer`) VALUES (NULL,'" . $page_ID . "', '" . $_SERVER['PHP_SELF'] . "','" . date("Y-m-d H:i:s") . "','0', '" . $_SERVER['HTTP_REFERER'] . "')";
	// echo $record_pageview_SQL;

	if (mysqli_query($con, $record_pageview_SQL)) {
		// AWESOME! We added the change record to the database
		// OK

	}
	else {
		echo "<h4>Failed to record the change in the edit log with SQL: <br />" . $record_edit_SQL . "</h4>";
	}
}
?>