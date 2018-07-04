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


$page_ID = "78";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>



<!-- start: page -->
<h2>Overview</h2>
<p>The financial performance of a project or an organisation is a fact. Any attempt to present financial truths as anything but what they really are is a result of either incompetence, dishonesty or the strategic protection of information from competitors (in the short term, at least). To that end, we have decided to operate with financial clarity on PRRPSS, on purpose.</p>
<h2>Join The PRRPSS Team!</h2>
<p>We welcome the advice and input of those great masters of finance who work with numbers and indicators day-in, day-out, to help guide us and mentor us to become stronger in this aspect of the project. <a href="vacancies.php?BU=FIN">PRRPSS.com/vacancies</a></p>
<h2>Goals and Forecasts</h2>
<p>We openly publish our goals and forecasts, in order to 1. communicate where we aim to go; 2. track our progress and 3. communicate to all team members, clients and stakeholders how we are doing.</p>
<h2>Expectations</h2>
<p>If PRRPSS remains successful in adding value to people's lives, we have every faith that an open and honest method of financial accounting will prove to be one of the cornerstones of our ongoing success.</p>

<!-- end: page -->
		<?php

page_foot($page_ID);
?>
