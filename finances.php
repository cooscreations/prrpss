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


$page_ID = "74";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>



<!-- start: page -->
						<div class="row">
							<div class="col">
						
										<h2 class="card-title">Sales Forecast @ $200 USD / month</h2>
										<p>We operate from a position of <a href="/financial_clarity.php">financial clarity</a> on PRRPSS</p>
									
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
													<th><span title="Year" style="cursor: help;">Y</span></th>
													<th><span title="Quarter" style="cursor: help;">Q</span></th>
													<th><span title="Month" style="cursor: help;">M</span></th>
													<th><span title="Number of Accounts" style="cursor: help;"># ACC.</span></th>
													<th>Income</th>
													<th><span title="Cumulative Total" style="cursor: help;">Cum. Total</span></th>
													<th><span title="Growth rate percentage when compared to previous period" style="cursor: help;">Growth %</span></th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th><span title="Year" style="cursor: help;">Y</span></th>
													<th><span title="Quarter" style="cursor: help;">Q</span></th>
													<th><span title="Month" style="cursor: help;">M</span></th>
													<th><span title="Number of Accounts" style="cursor: help;"># ACC.</span></th>
													<th>Income</th>
													<th><span title="Cumulative Total" style="cursor: help;">Cum. Total</span></th>
													<th><span title="Growth rate percentage when compared to previous period" style="cursor: help;">Growth %</span></th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">1</td>
													<td class="text-center">1</td>
													<td class="text-center">1</td>
													<td class="text-center">$200.00</td>
													<td class="text-center">$200.00</td>
													<td class="text-center">-</td>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">1</td>
													<td class="text-center">2</td>
													<td class="text-center">2</td>
													<td class="text-center">$400.00</td>
													<td class="text-center">$600.00</td>
													<td class="text-center">300%</td>
												</tr>

												<tr>
													<td class="text-center">1</td>
													<td class="text-center">1</td>
													<td class="text-center">3</td>
													<td class="text-center">3</td>
													<td class="text-center">$600.00</td>
													<td class="text-center">$1,200.00</td>
													<td class="text-center">200%</td>
												</tr>

												<tr>
													<td class="text-center">1</td>
													<td class="text-center">2</td>
													<td class="text-center">4</td>
													<td class="text-center">4</td>
													<td class="text-center">$800.00</td>
													<td class="text-center">$2,000.00</td>
													<td class="text-center">167%</td>
												</tr>

												<tr>
													<td class="text-center">1</td>
													<td class="text-center">2</td>
													<td class="text-center">5</td>
													<td class="text-center">5</td>
													<td class="text-center">$1,000.00</td>
													<td class="text-center">$3,000.00</td>
													<td class="text-center">150%</td>
												</tr>

												<tr>
													<td class="text-center">1</td>
													<td class="text-center">2</td>
													<td class="text-center">6</td>
													<td class="text-center">6</td>
													<td class="text-center">$1,200.00</td>
													<td class="text-center">$4,200.00</td>
													<td class="text-center">140%</td>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">3</td>
													<td class="text-center">7</td>
													<td class="text-center">7</td>
													<td class="text-center">$1,400.00</td>
													<td class="text-center">$5,600.00</td>
													<td class="text-center">133%</td>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">3</td>
													<td class="text-center">8</td>
													<td class="text-center">8</td>
													<td class="text-center">$1,600.00</td>
													<td class="text-center">$7,200.00</td>
													<td class="text-center">129%</td>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">3</td>
													<td class="text-center">9</td>
													<td class="text-center">9</td>
													<td class="text-center">$1,800.00</td>
													<td class="text-center">$9,000.00</td>
													<td class="text-center">125%</td>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">4</td>
													<td class="text-center">10</td>
													<td class="text-center">10</td>
													<td class="text-center">$2,000.00</td>
													<td class="text-center">$11,000.00</td>
													<td class="text-center">122%</td>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">4</td>
													<td class="text-center">11</td>
													<td class="text-center">11</td>
													<td class="text-center">$2,200.00</td>
													<td class="text-center">$13,200.00</td>
													<td class="text-center">120%</td>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td class="text-center">4</td>
													<td class="text-center">12</td>
													<td class="text-center">12</td>
													<td class="text-center">$2,400.00</td>
													<td class="text-center">$15,600.00</td>
													<td class="text-center">118%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">1</td>
													<td class="text-center">1</td>
													<td class="text-center">13</td>
													<td class="text-center">$2,600.00</td>
													<td class="text-center">$18,200.00</td>
													<td class="text-center">117%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">1</td>
													<td class="text-center">2</td>
													<td class="text-center">14</td>
													<td class="text-center">$2,800.00</td>
													<td class="text-center">$21,000.00</td>
													<td class="text-center">115%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">1</td>
													<td class="text-center">3</td>
													<td class="text-center">15</td>
													<td class="text-center">$3,000.00</td>
													<td class="text-center">$24,000.00</td>
													<td class="text-center">114%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">2</td>
													<td class="text-center">4</td>
													<td class="text-center">16</td>
													<td class="text-center">$3,200.00</td>
													<td class="text-center">$27,200.00</td>
													<td class="text-center">113%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">2</td>
													<td class="text-center">5</td>
													<td class="text-center">17</td>
													<td class="text-center">$3,400.00</td>
													<td class="text-center">$30,600.00</td>
													<td class="text-center">113%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">2</td>
													<td class="text-center">6</td>
													<td class="text-center">18</td>
													<td class="text-center">$3,600.00</td>
													<td class="text-center">$34,200.00</td>
													<td class="text-center">112%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">3</td>
													<td class="text-center">7</td>
													<td class="text-center">19</td>
													<td class="text-center">$3,800.00</td>
													<td class="text-center">$38,000.00</td>
													<td class="text-center">111%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">3</td>
													<td class="text-center">8</td>
													<td class="text-center">20</td>
													<td class="text-center">$4,000.00</td>
													<td class="text-center">$42,000.00</td>
													<td class="text-center">111%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">3</td>
													<td class="text-center">9</td>
													<td class="text-center">21</td>
													<td class="text-center">$4,200.00</td>
													<td class="text-center">$46,200.00</td>
													<td class="text-center">110%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">4</td>
													<td class="text-center">10</td>
													<td class="text-center">22</td>
													<td class="text-center">$4,400.00</td>
													<td class="text-center">$50,600.00</td>
													<td class="text-center">110%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">4</td>
													<td class="text-center">11</td>
													<td class="text-center">23</td>
													<td class="text-center">$4,600.00</td>
													<td class="text-center">$55,200.00</td>
													<td class="text-center">109%</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td class="text-center">4</td>
													<td class="text-center">12</td>
													<td class="text-center">24</td>
													<td class="text-center">$4,800.00</td>
													<td class="text-center">$60,000.00</td>
													<td class="text-center">109%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">1</td>
													<td class="text-center">1</td>
													<td class="text-center">25</td>
													<td class="text-center">$5,000.00</td>
													<td class="text-center">$65,000.00</td>
													<td class="text-center">108%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">1</td>
													<td class="text-center">2</td>
													<td class="text-center">50</td>
													<td class="text-center">$10,000.00</td>
													<td class="text-center">$75,000.00</td>
													<td class="text-center">115%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">1</td>
													<td class="text-center">3</td>
													<td class="text-center">100</td>
													<td class="text-center">$20,000.00</td>
													<td class="text-center">$95,000.00</td>
													<td class="text-center">127%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">2</td>
													<td class="text-center">4</td>
													<td class="text-center">150</td>
													<td class="text-center">$30,000.00</td>
													<td class="text-center">$125,000.00</td>
													<td class="text-center">132%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">2</td>
													<td class="text-center">5</td>
													<td class="text-center">200</td>
													<td class="text-center">$40,000.00</td>
													<td class="text-center">$165,000.00</td>
													<td class="text-center">132%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">2</td>
													<td class="text-center">6</td>
													<td class="text-center">250</td>
													<td class="text-center">$50,000.00</td>
													<td class="text-center">$215,000.00</td>
													<td class="text-center">130%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">3</td>
													<td class="text-center">7</td>
													<td class="text-center">300</td>
													<td class="text-center">$60,000.00</td>
													<td class="text-center">$275,000.00</td>
													<td class="text-center">128%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">3</td>
													<td class="text-center">8</td>
													<td class="text-center">350</td>
													<td class="text-center">$70,000.00</td>
													<td class="text-center">$345,000.00</td>
													<td class="text-center">125%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">3</td>
													<td class="text-center">9</td>
													<td class="text-center">400</td>
													<td class="text-center">$80,000.00</td>
													<td class="text-center">$425,000.00</td>
													<td class="text-center">123%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">4</td>
													<td class="text-center">10</td>
													<td class="text-center">500</td>
													<td class="text-center">$100,000.00</td>
													<td class="text-center">$525,000.00</td>
													<td class="text-center">124%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">4</td>
													<td class="text-center">11</td>
													<td class="text-center">750</td>
													<td class="text-center">$150,000.00</td>
													<td class="text-center">$675,000.00</td>
													<td class="text-center">129%</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td class="text-center">4</td>
													<td class="text-center">12</td>
													<td class="text-center">1,000</td>
													<td class="text-center">$200,000.00</td>
													<td class="text-center">$875,000.00</td>
													<td class="text-center">130%</td>
												</tr>
											</tbody>
										</table>
										
							</div>
						</div>

<!-- end: page -->
		<?php

page_foot($page_ID);
?>
