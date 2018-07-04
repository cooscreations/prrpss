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


$page_ID = "38";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>



<!-- start: page -->

 <h2>Introduction</h2>
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>
 <h2>Solution Design</h2>
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>
 <h2>Implementation, Maintenance &amp; Support</h2>
 
 <h3>Implementation</h3>
 <p>...</p>
 <h3>Maintenance</h3>
 <p>...</p>
 <h3>Support</h3>
 <p>...</p>
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>
 <h2>Account Management</h2>
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>
 <h2>Developers</h2>
 <h3>Codebase</h3>
 <p>...</p>
 <h3>API</h3>
 <p>...</p>
 <h3>Accrediation</h3>
 <p>...</p>
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>
 <h2>Industry Leaders</h2>
 <p>The following organisations inspire us to greatness. It should be assumed that they are in no way officially associated with the PRRPSS project, however for many of them, we engage in a miriad of activities with them as often as we can.</p>
 
 
 				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

<!-- end: page -->


		<?php

page_foot($page_ID);
?>
