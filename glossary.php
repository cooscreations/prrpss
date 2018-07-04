<?php  

// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
/* ////// */     session_start ();     /* ////// */
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
//   now check the user is OK to view this page  //
              require ('page_access.php');
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////

$page_ID = "77";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>					

<!-- start: page -->
<div class="row">
    <div class="col">
    
      <div class="table-responsive">
    	<table class="">
    	  <thead>
    	  	<tr>
    	  	  <th>ID</th>
    	  	  <th>Acronym</th>
    	  	  <th>Word</th>
    	  	  <th>Intro</th>
    	  	  <th>Links</th>
    	  	</tr>
    	  </thead>
    	  <tbody>
    	  	
    	  	
    	  	
    	  	<?php 
              
              $get_glossary_SQL = "SELECT * FROM  `glossary` WHERE `status` = 2 ORDER BY  `acronym` ASC";
									
			   $total_records = 0;
		   
			   $result_get_glossary = mysqli_query($con,$get_glossary_SQL);
			   // while loop
			   while($row_get_glossary = mysqli_fetch_array($result_get_glossary)) {
				   
					   // now print each deposit:
					   $glossary_ID			= $row_get_glossary['ID'];
					   $glossary_acronym	= $row_get_glossary['acronym'];
					   $glossary_nane		= $row_get_glossary['name'];
					   $glossary_intro		= $row_get_glossary['intro'];
					   $glossary_text		= $row_get_glossary['text'];
					   $glossary_link_1		= $row_get_glossary['link_1'];
					   $glossary_link_2		= $row_get_glossary['link_2'];
					   $glossary_status		= $row_get_glossary['status'];
					   
              		  // now print it:
              		  ?>
              		  
              		  
              		  
    	  	<tr>
    	  	  <td><a href="glossary.php?ID=<?php echo $glossary_ID; ?>"><?php echo $glossary_ID; ?></a></td>
    	  	  <td><a href="glossary.php?ID=<?php echo $glossary_ID; ?>"><?php echo $glossary_acronym; ?></a></td>
    	  	  <td><a href="glossary.php?ID=<?php echo $glossary_ID; ?>"><?php echo $glossary_nane; ?></a></td>
    	  	  <td><?php echo $glossary_intro; ?></td>
    	  	  <td>
    	  	    <?php if ($glossary_link_1 != '') { ?>
    	  	  	<a href="<?php echo $glossary_link_1; ?>" target="_blank">
    	  	  		<i class="fa fa-external-link"></i>
    	  	  	</a>
    	  	  	<?php } 
    	  	  	if ($glossary_link_2 != '') {
    	  	  	?>
    	  	  	 | 
    	  	  	 <a href="<?php echo $glossary_link_2; ?>" target="_blank">
    	  	  	  	<i class="fa fa-external-link"></i>
    	  	  	 </a>
    	  	  	 <?php } ?>
    	  	  	</td>
    	  	</tr>
              		  <?php
              		  
              		  
              		   $total_records++;
              		   
              		   
              }
              ?>
    	  	
    	  	
    	  	
    	  	
    	  </tbody>
    	  <tfoot>
    	  	<tr>
    	  	  <th>ID</th>
    	  	  <th>Acronym</th>
    	  	  <th>Word</th>
    	  	  <th>Intro</th>
    	  	  <th>Links</th>
    	  	</tr>
    	  </tfoot>	
    	</table>
    	
    	<h4>Total Records: <?php echo $total_records; ?></h4>
    	
      </div>
    
    </div>

<!-- end: page -->
				
				
		<?php 

page_foot($page_ID);
?>