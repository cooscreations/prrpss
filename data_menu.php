<?php 

// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
/* ////// */     session_start ();     /* ////// */
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
//   now check the user is OK to view this page  //
/* ///// */  require ('page_access.php');  /*////*/
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////


$add_breadcrumbs 	= '';
$sub_nav 			= '';
$industry 			= '';
$app 				= '';
// get page info from the DB:
$page_name = "Page Not Set";

if ($page_ID == '1') {
	$page_name = 'Home';

}
else if ($page_ID == '2') {
	$page_name = 'Search';

}
else if ($page_ID == '3') {
	$page_name = 'Wallet';

}
else if ($page_ID == '4') {
	$page_name = 'Profile';
	$add_breadcrumbs = '<li>
							<a href="users.php">
								<i class="fab fa-users"></i>
							</a>
						</li>';

}
else if ($page_ID == '5') {
	$page_name = 'Compose New Message';
	$add_breadcrumbs = '<li>
							<a href="messages.php">
								<i class="fab fa-envelope"></i>
							</a>
						</li>';
}
else if ($page_ID == '6') {
	$page_name = 'Messages';
}
else if ($page_ID == '7') {
	$page_name = 'Message View';
	$add_breadcrumbs = '<li>
							<a href="messages.php">
								<i class="fab fa-envelope"></i>
							</a>
						</li>';
}

else if ($page_ID == '8') {
	$page_name = 'About';
}
else if ($page_ID == '9') {
	$page_name = 'Help';
}
else if ($page_ID == '10') {
	$page_name 	= 'Tradespeople';
	$industry 	= 2;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '11') {
	$page_name = 'Food & Beverage';
	$industry 	= 3;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '12') {
	$page_name = 'Services';
	$industry 	= 4;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '13') {
	$page_name = 'Entertainment';
	$industry 	= 5;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '14') {
	$page_name = 'Fashion & Retail';
	$industry 	= 6;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '15') {
	$page_name = 'Health & Wellness';
	$industry 	= 7;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '16') {
	$page_name = 'Sports & Recreation';
	$industry 	= 8;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '17') {
	$page_name = 'Manufacturing';
	$industry 	= 9;
	$add_breadcrumbs = '<li>
							<a href="industries.php">
								Industries
							</a>
						</li>';
}
else if ($page_ID == '18') {
	$page_name 	= 'Human Resources';
	$app 		= 1;
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '19') {
	$page_name = 'Corporate';
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '20') {
	$page_name = 'Customer Service (CRM)';
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '21') {
	$page_name = 'Procurement';
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '22') {
	$page_name = 'Production';
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '23') {
	$page_name = 'eCommerce';
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '24') {
	$page_name = 'Distribution';
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '25') {
	$page_name = 'Sales';
	$add_breadcrumbs = '<li>
							<a href="apps.php">
								Apps
							</a>
						</li>';
}
else if ($page_ID == '26') {
	$page_name = 'Power';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '27') {
	$page_name = 'Network';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '28') {
	$page_name = 'Hardware';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '29') {
	$page_name = 'Data Storage';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '30') {
	$page_name = 'Security';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '31') {
	$page_name = 'User Interface (UI)';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '32') {
	$page_name = 'Blockchain';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '33') {
	$page_name = 'User Experience (UX)';
	$add_breadcrumbs = '<li>
							<a href="technology.php">
								Technology
							</a>
						</li>';
}
else if ($page_ID == '34') {
	$page_name = 'Purchase';
}
else if ($page_ID == '35') {
	$page_name = 'Marketplace';
}
else if ($page_ID == '36') {
	$page_name = 'Performance Related Pay';
}
else if ($page_ID == '37') {
	$page_name = 'Research';
}
else if ($page_ID == '38') {
	$page_name = 'Partners';
}
else if ($page_ID == '39') {
	$page_name = 'Developers';
}
else if ($page_ID == '40') {
	$page_name = 'Advisors';
}
else if ($page_ID == '41') {
	$page_name = 'Core Team';
}
else if ($page_ID == '42') {
	$page_name = 'Notifications';
}
else if ($page_ID == '43') {
	$page_name = 'User Settings';
}
else if ($page_ID == '44') {
	$page_name = 'Log Out';
}
else if ($page_ID == '45') {
	$page_name = 'Dashboard';
}
else if ($page_ID == '46') {
	$page_name = 'Customers';
}
else if ($page_ID == '47') {
	$page_name = 'Orders';
}
else if ($page_ID == '48') {
	$page_name = 'Customer Profile';
}
else if ($page_ID == '49') {
	$page_name = 'Quotes';
}
else if ($page_ID == '50') {
	$page_name = 'Payments';
}
else if ($page_ID == '51') {
	$page_name = 'Feedback';
}
else if ($page_ID == '52') {
	$page_name = 'Social';
}
else if ($page_ID == '53') {
	$page_name = 'Projects';
}
else if ($page_ID == '54') {
	$page_name = 'Project Profile';
}
else if ($page_ID == '55') {
	$page_name = 'Project Types';
}
else if ($page_ID == '56') {
	$page_name = 'Appointments';
}
else if ($page_ID == '57') {
	$page_name = 'Calls';
}
else if ($page_ID == '58') {
	$page_name = 'Emails';
}
else if ($page_ID == '59') {
	$page_name = 'Suppliers';
}
else if ($page_ID == '60') {
	$page_name = 'Supplier Profile';
	$add_breadcrumbs = '<li>
							<a href="suppliers.php">
								<i class="fab fa-industry"></i>
							</a>
						</li>';
}
else if ($page_ID == '61') {
	$page_name = 'Quality Assurance (QA)';
}
else if ($page_ID == '62') {
	$page_name = 'Whitelist';
}
else if ($page_ID == '63') {
	$page_name = 'Order Profile';
}
else if ($page_ID == '64') {
	$page_name = 'Invoice';
}
else if ($page_ID == '65') {
	$page_name = 'Training';
}
else if ($page_ID == '66') {
	$page_name = 'Order History';
}
else if ($page_ID == '67') {
	$page_name = 'Users';
}
else if ($page_ID == '68') {
	$page_name = 'Staff';
	$add_breadcrumbs = '<li>
							<a href="users.php">
								<i class="fab fa-users"></i>
							</a>
						</li>';
}
else if ($page_ID == '69') {
	$page_name = 'Easter Egg';
}
else if ($page_ID == '70') {
	$page_name = 'Settings';
}
else if ($page_ID == '71') {
	$page_name = 'Donate';
}
else if ($page_ID == '72') {
	$page_name = 'PRRPSS System';
}
else if ($page_ID == '73') {
	$page_name = 'Industries';
}
else if ($page_ID == '74') {
	$page_name = 'Finances';
}
else if ($page_ID == '75') {
	$page_name = 'Whitepaper';
	$add_breadcrumbs = '<li>
							<a href="research.php">
								Research
							</a>
						</li>';
	$sub_nav = '
	
				<section class="page-header custom-product">
					<div class="container">
						<div class="row">
							<div class="col-sm-7 py-4">
								<h1>Introducing the PRRPSS <strong>whitepaper</strong>.</h1>
								<p class="lead">We welcome you to discover the inspiration &amp; design behind the PRRPSS ecosystem, and we hope that it inspires thoughts &amp; feelings within you to apply PRRPSS to your own life.</p>
								<a href="#dl_whitepaper" class="btn btn-light btn-lg mb-5">Download Now!</a> <span class="arrow hlt" style="top: 10px;"></span>
							</div>
							<div class="col-sm-5 align-items-end justify-content-end d-flex">
								<img class="img-fluid" alt="" src="img/custom-header.png">
							</div>
						</div>
					</div>
				</section>
	
	
	
	
	
	<aside class="nav-secondary dark" id="navSecondary" data-plugin-sticky data-plugin-options="{\'minWidth\': 991, \'padding\': {\'top\': 91}}">


	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="nav nav-pills justify-content-center">
					<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#summary"><span class="badge badge-info">1</span> Executive Summary</a></li>
					<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#status"><span class="badge badge-info">2</span> Status Quo</a></li>
					<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#current"><span class="badge badge-info">3</span> Current Solutions</a></li>
					<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#opportunity"><span class="badge badge-info">4</span> Opportunity</a></li>
					<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#blockchain"><span class="badge badge-info">5</span> Blockchain</a></li>
					<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#technology"><span class="badge badge-info">6</span> Technology</a></li>
					<li class="nav-item"><a class="nav-link" data-hash data-hash-offset="170" href="#studies"><span class="badge badge-info">7</span> Case Studies</a></li>
				</ul>
			</div>
		</div>
	</div>
</aside>';					
}
else if ($page_ID == '76') {
	$page_name = 'Apps';
}
else if ($page_ID == '77') {
	$page_name = 'Glossary';
}
else if ($page_ID == '78') {
	$page_name = 'Financial Clarity';
}
else if ($page_ID == '79') {
	$page_name = 'PRRPSS Branding';
}
else if ($page_ID == '80') {
	$page_name = 'Developer Notes';
}
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
if ($industry != '') {
	if ($industry == 1) {
		
	}
}


?>