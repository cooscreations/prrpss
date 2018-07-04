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

$page_ID = "75";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>					

<!-- start: page -->
<div class="row">
    <div class="col-1">&nbsp;</div>
	<div class="col">
	
		
		
		<!-- ////////////////////////////////// -->
		
		<div class="row">
			<div class="col-lg-12">
			
				
				<div class="divider divider-solid divider-style-4 taller">
					<i class="fas fa-chevron-down"></i>
				</div>

				<div class="whitepaper_holder">
			
					<h1 name="summary" id="summary">1. Executive Summary</h1>
				
					<div class="row">
					  <div class="col-lg-6">
						<p><span class="badge badge-dark">1.1.a State of the World</span> In today's faced-paced and rapidly expanding universe, we try to balance privacy, security and transparency with efficiency and the reduction of waste. Whilst it feels like the walls are caving in on every side, we believe that life with PRRPSS (pronounced "Purpose") can help to both alliveate some of the pains, whilst drastically accelerating desired results.</p>
						<p><span class="badge badge-dark">1.1.b Dreams &amp; Desires</span> For the most part, people inherently want to do well. They want to learn and grow and be rewarded - one way or another - for their procress and success. They want to be recognised and see their dreams become a reality. PRRPSS is a transparent solution, offering anyone who chooses to join us, a way to contribute to societies both small and large, combining core business principles with cutting-edge technology, in order to delight and amaze our users.</p>
						<p><span class="badge badge-dark">1.1.c Value-Add Solution</span> PRRPSS is a brand new data management platform, offering people a way to manage their data in a safe and secure way. The platform is built from the ground-up with security in mind, as well as the overall impact our actions have on the human state-of-mind. We drive positive change by delivering real-time, world-class business solutions to companies of all sizes, across all industries and geographical locations.</p>
					  	<blockquote class="blockquote-reverse">
								<p>May we always be <strong>completely transparent about our truths</strong> and <strong>unify as heros</strong> to <strong>accelerate our evolution</strong> on our path to whatever <strong>paradise</strong> you can imagine, so that we may realise that, <strong>here on earth, in this moment, we have already arrived</strong>.</p>
								<footer>Mark Clulow <cite title="Source Title">Founder, PRRPSS</cite></footer>
						</blockquote>
						</div>
					  <div class="col-lg-6">
						<p><span class="badge badge-dark">1.1.d Technology</span> Exponential advances in all aspects of technology, have resulted in an amazing new array of tools being made available to visionairies. We are excited to share our vision for how we may stand on the shoulders of giants and organise those tools in a way that ushers in an entirely new era of doing business. We welcome you to browse our full technology outline in the coming pages to understand why we are so excited to be right here, right now.</p>
						<p><span class="badge badge-dark">1.1.e Resources</span> We recognise that our lofty aspirations carry heavy resource burdens, including, but not limited to time, money and proudction energy. We vow to always be mindful of the consumptive aspect of our operations and do anything that we can to minimise the impact of our actions. This also stands as an underlying success principle to the entire platform and is one we will continuelly impress upon our users.</p>
						<p><span class="badge badge-dark">1.1.f People</span> Our focus is on those that benefit most from our platform, our 'Heros'. We are dedicated to listening to you all, managing known-issues quickly and effectively without fear of change, implementing new features in a timely manner, protecting your privacy and helping you achieve whatever you set out to do, with PRRPSS.</p>
						<p><span class="badge badge-dark">1.1.g This Document</span> In recognition of the ominous Mr Satoshi Nakamoto and all those who have continued to blaze a trail into a wild new world behind him, we present this whitepaper to outline what we believe to be a viable framework for huge added value, increased accuracy, reduced waste and the ability to generate true wealth through labour that is both challenging yet fair, and for the right reward. By openly and honestly presenting the entire ecosystem here within these pages, we hope to not only delight and inspire you with the infinite possibilities of PRRPSS, but also to declare those areas of our dream where we alone are not good enough to complete this mammoth task without help - you help. You are a Hero with PRRPSS and this whitepaper is for you.</p>
					  <p><span class="badge badge-danger">1.1.h Changes To This Document</span> Please refer to the <a href="#updates">Changelog</a> for all updates to this document.</p>
            </div>
					</div>
				
				
				
					<h2>1.2 Features</h2>
					<ul>
					  <li><span class="badge badge-dark">1.2.a Secure</span> Security &amp; compliance. GDPR compliance as standard.</li>
					  <li><span class="badge badge-dark">1.2.b Flexible</span> Every business is unique. Use PRRPSS the way you want to, but have the opportunity to learn from those around you as to how they grow.</li>
					  <li><span class="badge badge-dark">1.2.c Powerful</span> On your phone, on your PC and in the clound, PRRPSS is optimised to run quickly and give you access to your data, in any way you want to see it. </li>
					  <li><span class="badge badge-dark">1.2.d Educated</span> The education aspect of the platform is two-fold: 1. Integrated reward-based learning modules that help to reduce the up-time required to use the system to its best potential; and 2. A careful and considerate use of big data, well documented artificial intelligence and transparent algorithms to identify trends, automate processes that can be and guide the future growth and expansion of the platform and all those who benefit from it.</li>
					  <li><span class="badge badge-dark">1.2.e Decentralised</span> From governance to activity auditing, PRRPSS employs a range of blockchain methodologies to deliver on its' promises, helping to advance collective human evolution, as well as protect you and your organisation from anyone who may mean to cause you harm.</li>
					</ul>

					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

					<h1 name="status" id="status">2. Status Quo</h1>
					<p><span class="badge badge-dark">2.1.a Knowledge &amp; Resources</span> Time and again, small businesses express their disapointment with the knowledge &amp; resource barriers for entry when it comes to getting the most from their business data. This barrier is heightened further when they want to do something constructive with that data, such as create a specific report, or automate an aspect of their business operations.</p>
          <p><span class="badge badge-dark">2.1.b</span> Being unable to afford the high fees associated with Enterprise-level solutions designed and implemented by teams of partners, small businesses turn to disjointed out-of-the-box solutions as their needs grow, often starting with financial and sales systems. This often stunts growth or causes huge bottlenecks in operations at a time when it is often too late to make such core organisational and operational changes.</p>
          <p><span class="badge badge-dark">2.1.c</span> Instead of being a celebrated aspect of doing business in the modern world, reporting is often relegated to a last-minute and rushed after-thought for many workers, either denying business leaders of valuable insight, or worse yet - leaving them completely in the dark.</p>
          <p><span class="badge badge-dark">2.1.d</span> Recent changes in European legislation, as well as a general global awareness of data security, large service providers are becoming harder to trust, as it becomes clear that they have no intention of operating a trasnaprent organisation, adding fuel to the already well-stoken fire that is our gloabl culture of fear.</p>
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

					<h1 name="current" id="current">3. Current Solutions</h1>
					<p><span class="badge badge-dark">3.1.a Pen &amp; Paper</span> Since the earliest lines in the sand, to slate blocks and chalk chips, human evolution has been spurred on by our ability to write things down. </p>
					<p><span class="badge badge-dark">3.1.b Spreadsheets</span> Championed by the likes of Microsoft, Google, Zoho, Apple and OpenOffice, spreadsheets allow data to become sortable, filterable and sharable in electronic format. Files can be locked by password for added security, and as time goes on, documents made by one software vendor are becoming more interoperable with other vendors' products and services (for example viewing an Open Office file in Apple Sheets).</p>
					<p><span class="badge badge-dark">3.1.c Silo Systems</span> As companies grow and add more knowledge and capabilities to their team, often come specific software silos to allow certain employees or business units to grow. Most common starting-points are in Finance and Customer Relationship Management. A list of these vendors is provided in the Appendices as part of the market &amp; competitive review.</p>
					<p><span class="badge badge-dark">3.1.d Integrations</span> 'Bridges' between one system and a another can be formed to try to bring some congruency between multiple silo systems, for example feeding your sales data into your accounting software. Often this will patch an immediate need for a company, but more often that not leads to further complications at later stages of a company's growth and can be much more costly in the long-run. As advances in <acronym title="Application Programming Interface">API</acronym> standards (such as OAuth) allow systems to better communicate with each other, this experience is becoming more seamless, however the question still remains: "Why do I need to run multiple systems to operate my company?"</p>
					<p><span class="badge badge-dark">3.1.e Enterprise Solutions</span> the systems that run the likes of Walmart, Exxon Mobil and Apple, these are often solutions that must be carefully designed by company leaders and specially trained consultants over a long period, at a considerable cost, in order to automate and digitize as many aspects of the business operations as possible. Often referred to as ERP (Enterprise Resource Planning) systems, whilst they present huge scalability options for companies, they are often reserved for larger companies who have the resources and man-power to implement and maintain such systems.</p>
					
					
					
          <h2>3.2 Correlation Between Cost, Complexity, Capability and Security</h2>
					<p><span class="badge badge-warning">3.2.1 DIAGRAM</span> This diagram will show the correlation between systems becoming more complex and more expensive, whilst becoming more powerful and secure.</p>

				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

					<h1 name="opportunity" id="opportunity">4. Opportunity</h1>
					<p><span class="badge badge-dark">4.1.a An Ever-Increasing Market</span> As the global population continues to grow at an exponential rate, we are aware of an increasing need for ways to improve efficiency whilst reducing waste, in every aspect of our life. We believe the market is only set to grow. Currrent players in this space currently report the following success numbers:</p>
					
					<div class="table-responsive">
					  <table>
					  	<thead>
					  	  <tr>
					  	    <th>Name</th>
					  	    <th>HQ</th>
					  	    <th></th>
					  	  </tr>
					  	Revenue	Increase €23.46 billion (2017)[1]
Operating income
Increase €4.88 billion (2017)[1]
Net income
Increase €4.02 billion (2017)[1]
Total assets	Increase €42.5 billion (2017)[1]
Total equity	Increase €25.54 billion (2017)[1]
Number of employees
88,543 (2017)[1]
Website	www.sap.com
Wiki 
					  		<tr></tr>
					  	</thead>
					  	<tfoot>
					  	
					  	</tfoot>
					  	<tbody>
					  		<td></td>
					  	</tbody>
					  </table>
					</div>

			
			
			<h2>4.2 Additional Areas of Value-Add for Businesses</h2>
			<p><span class="badge badge-dark">4.2.a More than ERP</span> By putting the power of data relationship management in the hands of the end-user, we believe that purpose can impact infinitely more than just that of an ERP system, including, but not limited to:</p>
			<p><span class="badge badge-success">4.2.b LIST - Other Service Markets That PRRPSS May Impact</span></p>
			<ol>
			    <li>Accounting software</li>
				<li>Billing Management</li>
				<li>Business intelligence</li>
				<li>Business process management</li>
				<li>Content management system (CMS)</li>
				<li>Customer relationship management (CRM)</li>
				<li>Database</li>
				<li>Master data management (MDM)</li>
				<li>Enterprise resource planning (ERP)</li>
				<li>Enterprise asset management (EAM)</li>
				<li>Low-code development platforms (LCDP)</li>
				<li>Supply chain management (SCM)</li>
				<li>Backup software</li>
				<li>Product data management (PDM)</li>
				<li>Product lifecyle management (PLM)</li>
			</ol>
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

					<h1 name="blockchain" id="blockchain">5. Blockchain Technology</h1>
				
				
					<div class="row">
					  <div class="col-lg-4">
				
						<h2>5.1 Governance</h2>
						<p><span class="badge badge-dark">5.1.a</span> Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>

					  </div>
					  <div class="col-lg-4">
				  
						<h2>5.2 Trust & Reputation</h2>
						<p><span class="badge badge-dark">5.2.a</span> Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>

					  </div>
					  <div class="col-lg-4">

						<h2>5.3 Growth Management</h2>
						<p><span class="badge badge-dark">5.3.a</span> Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>

					  </div>
					</div>
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

					<h1 name="technology" id="technology">6. Technology</h1>
					<p><span class="badge badge-dark">6.1.a</span> Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>

          <h2>6.2 Security</h2>
					<p><span class="badge badge-dark">6.2.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/security.php" target="_blank">PRRPSS.com/security</a></p>
					<h2>6.3 Power</h2>
					<p><span class="badge badge-dark">6.3.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/power.php" target="_blank">PRRPSS.com/power</a></p>
					<h2>6.4 Network</h2>
					<p><span class="badge badge-dark">6.4.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/network.php" target="_blank">PRRPSS.com/network</a></p>
					<h2>6.5 Hardware</h2>
					<p><span class="badge badge-dark">6.5.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/hardware.php" target="_blank">PRRPSS.com/hardware</a></p>
					<h2>6.6 Software</h2>
					<p><span class="badge badge-dark">6.6.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/software.php" target="_blank">PRRPSS.com/software</a></p>
          <h2>6.7 Data Storage</h2>
					<p><span class="badge badge-dark">6.7.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/data.php" target="_blank">PRRPSS.com/data_storage</a></p>
					<h2>6.8 Marketplace</h2>
					<p><span class="badge badge-dark">6.8.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/marketplace.php" target="_blank">PRRPSS.com/marketplace</a></p>
					<h2>6.9 Currency</h2>
					<p><span class="badge badge-dark">6.9.a</span> Coming soon...</p>
          <p><span class="badge badge-primary"><i class="fa fa-external-link"></i> LINK: </span> <a href="http://www.PRRPSS.com/currency.php" target="_blank">PRRPSS.com/currency</a></p>


				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

					<h1 name="studies" id="studies">7. Case Studies</h1>
					<p><span class="badge badge-dark">7.1.a</span> Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada.</p>

					<h2>7.2 Landscape Gardener</h2>
					<p><span class="badge badge-dark">7.2.a</span> Coming soon...</p>
					<h2>7.3 HR & Training Company</h2>
					<p><span class="badge badge-dark">7.3.a</span> Coming soon...</p>
					<h2>7.4 Local Football League</h2>
					<p><span class="badge badge-dark">7.4.a</span> Coming soon...</p>
					<h2>7.5 Personal Trainer</h2>
					<p><span class="badge badge-dark">7.5.a</span> Coming soon...</p>
				
				
					<div class="divider divider-solid divider-style-4 taller">
						<i class="fas fa-chevron-down"></i>
					</div>

				
			</div>
		</div>
		
		<!-- ////////////////////////////////// -->
		
	</div>
    <div class="col-1">&nbsp;</div>
</div>

<!-- end: page -->
				
				
		<?php 

page_foot($page_ID);
?>