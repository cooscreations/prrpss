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


$page_ID = "17";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);

$this_industry = 'manufacturing';

$link_name_1 	= 'factories';
$full_name_1 	= "Factories";
$this_icon_1 	= "warehouse";
$intro_para_1	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_1	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_2 	= 'farms';
$full_name_2 	= "Farms";
$this_icon_2 	= "cannabis";
$intro_para_2	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_2	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_3 	= 'labs';
$full_name_3 	= "Labs";
$this_icon_3 	= "flask";
$intro_para_3	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_3	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_4 	= 'diy';
$full_name_4 	= "DIY";
$this_icon_4 	= "screwdriver";
$intro_para_4	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_4	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';

$link_name_5 	= 'logistics';
$full_name_5 	= "Logistics";
$this_icon_5 	= "truck";
$intro_para_5	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_5	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';


$link_name_6 	= 'quality';
$full_name_6 	= "Quality Assurance (QA)";
$this_icon_6 	= "search";
$intro_para_6	= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus.";
$modal_text_6	= '	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			';

?>

					

<!-- start: page -->

<div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
	<div class="row">
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fas fa-<?php 
echo $this_icon_1; ?>"></i>
					<h4><?php
echo $full_name_1; ?></h4>
					<p><?php
echo $intro_para_1; ?></p>
					<p>
						<a href="#<?php
echo $link_name_1; ?>" class="lnk-primary learn-more" data-toggle="modal" data-target="#<?php 
echo $link_name_1; ?>">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_1; ?>">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
						
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
<!-- /////////////////////////////////////////////////////////////////////// -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fas fa-<?php 
echo $this_icon_2; ?>"></i>
					<h4><?php
echo $full_name_2; ?></h4>
					<p><?php
echo $intro_para_2; ?></p>
					<p>
						<a href="#<?php
echo $link_name_2; ?>" class="lnk-primary learn-more" data-toggle="modal" data-target="#<?php 
echo $link_name_2; ?>">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_2; ?>">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
						
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
<!-- /////////////////////////////////////////////////////////////////////// -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fas fa-<?php 
echo $this_icon_3; ?>"></i>
					<h4><?php
echo $full_name_3; ?></h4>
					<p><?php
echo $intro_para_3; ?></p>
					<p>
						<a href="#<?php
echo $link_name_3; ?>" class="lnk-primary learn-more" data-toggle="modal" data-target="#<?php 
echo $link_name_3; ?>">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_3; ?>">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
						
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
<!-- /////////////////////////////////////////////////////////////////////// -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fas fa-<?php 
echo $this_icon_4; ?>"></i>
					<h4><?php
echo $full_name_4; ?></h4>
					<p><?php
echo $intro_para_4; ?></p>
					<p>
						<a href="#<?php
echo $link_name_4; ?>" class="lnk-primary learn-more" data-toggle="modal" data-target="#<?php 
echo $link_name_4; ?>">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_4; ?>">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
						
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
<!-- /////////////////////////////////////////////////////////////////////// -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fas fa-<?php 
echo $this_icon_5; ?>"></i>
					<h4><?php
echo $full_name_5; ?></h4>
					<p><?php
echo $intro_para_5; ?></p>
					<p>
						<a href="#<?php
echo $link_name_5; ?>" class="lnk-primary learn-more" data-toggle="modal" data-target="#<?php 
echo $link_name_5; ?>">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_5; ?>">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
						
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
<!-- /////////////////////////////////////////////////////////////////////// -->
		
		<!-- START NEW ICON BOX: -->
		<div class="col-lg-4 col-sm-6">
			<div class="featured-box featured-box-primary featured-box-effect-3">
				<div class="box-content">
					<i class="icon-featured fas fa-<?php 
echo $this_icon_6; ?>"></i>
					<h4><?php
echo $full_name_6; ?></h4>
					<p><?php
echo $intro_para_6; ?></p>
					<p>
						<a href="#<?php
echo $link_name_6; ?>" class="lnk-primary learn-more" data-toggle="modal" data-target="#<?php 
echo $link_name_6; ?>">Learn More <i class="fas fa-angle-right"></i></a>
						<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_6; ?>">
						<button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
						</a>
						
					</p>
				</div>
			</div>
		</div>
		<!-- END NEW ICON BOX -->
<!-- /////////////////////////////////////////////////////////////////////// -->
		
		
	</div>
</div>


<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////// -->
				
<!-- START MODAL POP-UP -->
<div class="modal fade" id="<?php 
echo $link_name_1; ?>" tabindex="100" role="dialog" aria-labelledby="<?php 
echo $link_name_1; ?>Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="<?php 
echo $link_name_1; ?>Label">
				  <i class="icon-featured fas fa-<?php 
echo $this_icon_1; ?>"></i> <?php
echo $full_name_1; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php
echo $modal_text_1; ?>
			</div>
			<div class="modal-footer">
				<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_1; ?>">
				  <button type="button" class="mb-1 mt-1 mr-1 btn btn-success"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL POP-UP -->
<!-- /////////////////////////////////////////////////////////////////////// -->
				
<!-- START MODAL POP-UP -->
<div class="modal fade" id="<?php 
echo $link_name_2; ?>" tabindex="100" role="dialog" aria-labelledby="<?php 
echo $link_name_2; ?>Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="<?php 
echo $link_name_2; ?>Label">
				  <i class="icon-featured fas fa-<?php 
echo $this_icon_2; ?>"></i> <?php
echo $full_name_2; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php
echo $modal_text_2; ?>
			</div>
			<div class="modal-footer">
				<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_2; ?>">
				  <button type="button" class="mb-1 mt-1 mr-1 btn btn-success"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL POP-UP -->
<!-- /////////////////////////////////////////////////////////////////////// -->
				
<!-- START MODAL POP-UP -->
<div class="modal fade" id="<?php 
echo $link_name_3; ?>" tabindex="100" role="dialog" aria-labelledby="<?php 
echo $link_name_3; ?>Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="<?php 
echo $link_name_3; ?>Label">
				  <i class="icon-featured fas fa-<?php 
echo $this_icon_3; ?>"></i> <?php
echo $full_name_3; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php
echo $modal_text_3; ?>
			</div>
			<div class="modal-footer">
				<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_3; ?>">
				  <button type="button" class="mb-1 mt-1 mr-1 btn btn-success"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL POP-UP -->
<!-- /////////////////////////////////////////////////////////////////////// -->
				
<!-- START MODAL POP-UP -->
<div class="modal fade" id="<?php 
echo $link_name_4; ?>" tabindex="100" role="dialog" aria-labelledby="<?php 
echo $link_name_4; ?>Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="<?php 
echo $link_name_4; ?>Label">
				  <i class="icon-featured fas fa-<?php 
echo $this_icon_4; ?>"></i> <?php
echo $full_name_4; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php
echo $modal_text_4; ?>
			</div>
			<div class="modal-footer">
				<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_4; ?>">
				  <button type="button" class="mb-1 mt-1 mr-1 btn btn-success"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL POP-UP -->
<!-- /////////////////////////////////////////////////////////////////////// -->
				
<!-- START MODAL POP-UP -->
<div class="modal fade" id="<?php 
echo $link_name_5; ?>" tabindex="100" role="dialog" aria-labelledby="<?php 
echo $link_name_5; ?>Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="<?php 
echo $link_name_5; ?>Label">
				  <i class="icon-featured fas fa-<?php 
echo $this_icon_5; ?>"></i> <?php
echo $full_name_5; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php
echo $modal_text_5; ?>
			</div>
			<div class="modal-footer">
				<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_5; ?>">
				  <button type="button" class="mb-1 mt-1 mr-1 btn btn-success"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL POP-UP -->
<!-- /////////////////////////////////////////////////////////////////////// -->
				
<!-- START MODAL POP-UP -->
<div class="modal fade" id="<?php 
echo $link_name_6; ?>" tabindex="100" role="dialog" aria-labelledby="<?php 
echo $link_name_6; ?>Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="<?php 
echo $link_name_6; ?>Label">
				  <i class="icon-featured fas fa-<?php 
echo $this_icon_6; ?>"></i> <?php
echo $full_name_6; ?>
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<?php
echo $modal_text_6; ?>
			</div>
			<div class="modal-footer">
				<a href="demo/?industry=<?php echo $this_industry; ?>&sector=<?php 
echo $link_name_6; ?>">
				  <button type="button" class="mb-1 mt-1 mr-1 btn btn-success"><i class="fas fa-external-link-alt"></i> VIEW DEMO</button>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL POP-UP -->
<!-- /////////////////////////////////////////////////////////////////////// -->
						

<!-- end: page -->
				
<?php 
page_foot($page_ID);
?>		