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

$page_ID = "0";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>


<!-- start: page -->
		
		
		<!-- ////////////////////////////////// -->
		
			<div class="col-lg-6">
				<h1 name="first" id="first">H1 Heading</h1>
				<p>Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>

				<h2>H2 Heading</h2>
				<p>Pellentesque pellentesque usce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus.  tellus eget tempor. Fusce lacinia tempor malesuada.</p>

				<h3 name="second" id="second">H3 Heading</h3>
				<p>Pellentesque tempor tellus eget pellentesque. usce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus.  Fusce lacinia tempor malesuada.</p>

				<h4>H4 Heading</h4>
				<p>Pellentesque pellentesque tempor tellus eget fermentum. usce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. </p>

				<h5 name="third" id="third">H5 Heading</h5>
				<p>Pellentesque pellentesque tempor llentesque pellentesque tempor tellus eget libero llentesque pellentesque tempor tellus eget libero tellus ementellentesque tempor tellus eget fermentum. usce lacllentesque eget tempor tellus ellenellentesque tempor tellus eget fermentum. usce lacllentesque eget tempor tellus ellenum.</p>

				<h6>H6 Heading</h6>
				<p>Pellentesque pellentesque tempor tellus eget libero</p>

			</div>

			<div class="col-lg-6">

				<h2>Heading Helper Classes</h2>
				<p><span class="badge badge-info">Heads up!</span> You can use helper classes in order to align better the titles.<br /><strong>Such as:</strong> short, mb-0, tall, taller, spaced, more-spaced and page-header.</p>

				<h2>Paragraph</h2>

				<p class="lead">Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate.</p>

				<p class="lead">Check the <span class="alternative-font">alternative</span> font style.</p>

				<p>Check the <span class="alternative-font">alternative</span> font style.</p>

				<p>Mauris <a data-tooltip data-placement="top" href="#" data-original-title="Tooltip!">tooltip</a> aliquet <a href="#">link</a> ultricies ante, non <strong>bold</strong> faucibus ante gravida sed. Sed ultrices <em>rendered as italicized text</em> pellentesque purus, vulputate volutpat ipsum hendrerit sed neque..</p>

				<p>
				  <small>This line of text is meant to be treated as fine print.</small>
				</p>

				<p class="text-muted">Muted fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
				<p class="text-primary">Primary nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p class="text-secondary">Secondary nullam id dolor nibh ultricies vehicula ut id elit.</p>
				<p class="text-tertiary">Tertiary nullam id dolor id ultricies vehicula ut id elit.</p>
				<p class="text-quaternary">Quaternary nullam id dolor id nibh vehicula ut id elit.</p>
				<p class="text-success">Sucess suis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
				<p class="text-info">Info maecenas sed diam eget risus varius blandit sit amet non magna.</p>
				<p class="text-warning">Warning tiam porta sem malesuada magna mollis euismod.</p>
				<p class="text-danger">Danger donec ullamcorper nulla non metus auctor fringilla.</p>

			</div>
		
		<!-- ////////////////////////////////// -->
		<!-- END PAGE -->

				
				
		<?php 

page_foot($page_ID);
?>		