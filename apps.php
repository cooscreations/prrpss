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

$page_ID = "76";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>


<!-- start: page -->
<div class="container">

<ul class="nav nav-pills sort-source" data-sort-id="apps" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
	<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
	<li class="nav-item" data-option-value=".corp"><a class="nav-link" href="#">Corporate</a></li>
	<li class="nav-item" data-option-value=".HR"><a class="nav-link" href="#">Human Resources</a></li>
	<li class="nav-item" data-option-value=".CRM"><a class="nav-link" href="#">Customer Services</a></li>
	<li class="nav-item" data-option-value=".proc"><a class="nav-link" href="#">Procurement</a></li>
	<li class="nav-item" data-option-value=".prod"><a class="nav-link" href="#">Production</a></li>
	<li class="nav-item" data-option-value=".ecom"><a class="nav-link" href="#">e-Commerce</a></li>
	<li class="nav-item" data-option-value=".dist"><a class="nav-link" href="#">Distribution</a></li>
	<li class="nav-item" data-option-value=".sales"><a class="nav-link" href="#">Sales</a></li>
</ul>
          
<!-- corp HR CRM proc prod ecom dist sales -->

<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
	<div class="row portfolio-list no-gutters sort-destination" data-sort-id="apps">
  
  
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM ecom sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=accounts">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/accounting.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Accounts</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-user-circle"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 ecom">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=booking">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/bookings.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Booking</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-calendar-alt"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- START MASONRY ITEM: -->
<?php 
// SET VARS:
$this_tag_list	= 'corp CRM ecom sales';
$this_URL		= 'broadcast';
$this_title		= 'Broadcast Message';
$this_icon		= 'broadcast-tower';
?>

		<div class="col-lg-3 isotope-item m-0 p-0 <?php echo $this_tag_list; ?>">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=<?php echo $this_URL; ?>">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/<?php echo $this_URL; ?>.png" class="img-fluid" alt="<?php echo $this_title; ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?php echo $this_title; ?></span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-<?php echo $this_icon; ?>"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- START MASONRY ITEM: -->
<?php 
// SET VARS:
$this_tag_list	= 'corp HR CRM proc prod ecom dist sales';
$this_URL		= 'calendar';
$this_title		= 'Calendar';
$this_icon		= 'calendar-alt';
?>

		<div class="col-lg-3 isotope-item m-0 p-0 <?php echo $this_tag_list; ?>">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=<?php echo $this_URL; ?>">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/<?php echo $this_URL; ?>.png" class="img-fluid" alt="<?php echo $this_title; ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?php echo $this_title; ?></span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-<?php echo $this_icon; ?>"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM ecom sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=clients">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/clients.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Clients</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-user"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM ecom sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=discipline">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/discipline.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Discipline &amp; Dismissal</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-exclamation-triangle"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 dist">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=drivers">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/drivers.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Drivers</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-user-astronaut"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 prod">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=equipment">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/equipment.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Equipment</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-wrench"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 prod">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=forecasting">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/forecasting.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Forecasting</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-chart-line"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=forms_docs">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/files_and_docs.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Forms &amp; Documents</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-file-contract"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=forms_docs">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/gov_rels.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Government Relations</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-id-badge"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM ecom sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=leave">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/leave.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Leave</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-plane"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 proc prod ecom dist">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=logisitics">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/logistics.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Logisitics</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-truck"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- START MASONRY ITEM: -->
<?php 
// SET VARS:
$this_tag_list	= 'corp HR CRM proc prod ecom dist sales';
$this_URL		= 'messages';
$this_title		= 'Messaging';
$this_icon		= 'envelope';
?>

		<div class="col-lg-3 isotope-item m-0 p-0 <?php echo $this_tag_list; ?>">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=<?php echo $this_URL; ?>">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/<?php echo $this_URL; ?>.png" class="img-fluid" alt="<?php echo $this_title; ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?php echo $this_title; ?></span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-<?php echo $this_icon; ?>"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=mission">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
              <img src="img/apps/vision.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Mission &amp; Vision</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-rocket"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=orders">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/orders.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Orders</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-file-invoice-dollar"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->  
  
<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=payroll">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/payroll.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Payroll</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-money-bill-wave"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM ecom sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=products">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/products.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Products</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-shopping-cart"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

  
  
<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=policies">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/policies.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Policies &amp; Procedures</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-tasks"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->
<?php 
// SET VARS:
$this_tag_list	= 'proc';
$this_URL		= 'purchaseorders';
$this_title		= 'Purchase Orders';
$this_icon		= 'file-invoice-dollar';
?>

		<div class="col-lg-3 isotope-item m-0 p-0 <?php echo $this_tag_list; ?>">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=<?php echo $this_URL; ?>">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/<?php echo $this_URL; ?>.png" class="img-fluid" alt="<?php echo $this_title; ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?php echo $this_title; ?></span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-<?php echo $this_icon; ?>"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->                     
                  
<!-- START MASONRY ITEM: -->
<?php 
// SET VARS:
$this_tag_list	= 'prod';
$this_URL		= 'projects';
$this_title		= 'Projects';
$this_icon		= 'project-diagram';
?>

		<div class="col-lg-3 isotope-item m-0 p-0 <?php echo $this_tag_list; ?>">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=<?php echo $this_URL; ?>">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/<?php echo $this_URL; ?>.png" class="img-fluid" alt="<?php echo $this_title; ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?php echo $this_title; ?></span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-<?php echo $this_icon; ?>"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->                  
                  
                  
<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM ecom sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=pos">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/POS.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">On-Site POS</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-map-marker-alt"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 prod">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=quality">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/quality.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Quality</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-clipboard-check"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 HR">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=recruiting">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/recruiting.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Recruiting</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=reporting">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/reports.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Reporting</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 CRM ecom">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=services">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/services.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Services</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-list-ol"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 proc prod">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=suppliers">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/suppliers.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Suppliers</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-industry"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->
<?php 
// SET VARS:
$this_tag_list	= 'proc';
$this_URL		= 'supplieraudit';
$this_title		= 'Supplier Audit';
$this_icon		= 'sort-amount-up';
?>

		<div class="col-lg-3 isotope-item m-0 p-0 <?php echo $this_tag_list; ?>">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=<?php echo $this_URL; ?>">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/<?php echo $this_URL; ?>.png" class="img-fluid" alt="<?php echo $this_title; ?>">
							<span class="thumb-info-title">
								<span class="thumb-info-inner"><?php echo $this_title; ?></span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-<?php echo $this_icon; ?>"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=taxes">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/taxes.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Taxes &amp; Charity</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-share-square"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=training">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/training.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Training &amp; Development</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-chalkboard-teacher"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 dist">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=vehicles">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/vehicles.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Vehicles</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-taxi"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- START MASONRY ITEM: -->

		<div class="col-lg-3 isotope-item m-0 p-0 corp HR CRM proc prod ecom dist sales">
			<div class="portfolio-item m-0">
				<a href="/demo/?app=DIY">
					<span class="thumb-info thumb-info-centered-info m-0">
						<span class="thumb-info-wrapper">
							<img src="img/apps/DIY.png" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">Build Your Own</span>
								<span class="thumb-info-type">View Demo</span>
							</span>
							<span class="thumb-info-action">
								<span class="thumb-info-action-icon"><i class="fas fa-wrench"></i></span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
<!-- FINISH MASONRY ITEM -->						
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////// -->

	</div>
</div>			

</div>
<!-- END PAGE -->

				
				
		<?php 

page_foot($page_ID);
?>		