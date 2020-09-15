@extends('layouts.teacher')
@section('teacher')
	<!-- Body Start -->
			<div class="container-fluid">			
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-dollar-sign"></i> Earning</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-md-4">						
						<div class="earning_steps">						
							<p>Sales earnings this month (April), after edututs+ fees, & before taxes:</p>
							<h2>$1146.78</h2>
						</div>
					</div>
					<div class="col-md-4">						
						<div class="earning_steps">						
							<p>Your balance:</p>
							<h2>$1146.78</h2>
						</div>
					</div>
					<div class="col-md-4">						
						<div class="earning_steps">						
							<p>Total value of your sales, before taxes:</p>
							<h2>$95895.54</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="top_countries mt-50">
							<div class="top_countries_title">
								<h2>Your Top Countries</h2>
							</div>
							<ul class="country_list">
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>United States</span>
										</div>
										<div class="country_item_right">
											<span>$48</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Bulgaria</span>
										</div>
										<div class="country_item_right">
											<span>$35</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Dominica</span>
										</div>
										<div class="country_item_right">
											<span>$25</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Italy</span>
										</div>
										<div class="country_item_right">
											<span>$18</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Korea, Republic of</span>
										</div>
										<div class="country_item_right">
											<span>$18</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Malaysia</span>
										</div>
										<div class="country_item_right">
											<span>$10</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Netherlands</span>
										</div>
										<div class="country_item_right">
											<span>$8</span>
										</div>
									</div>
								</li>
								<li>
									<div class="country_item">
										<div class="country_item_left">
											<span>Thailand</span>
										</div>
										<div class="country_item_right">
											<span>$5</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="date_selector">
							<div class="ui selection dropdown skills-search vchrt-dropdown">
								<input name="date" type="hidden" value="default">
								<i class="dropdown icon d-icon"></i>
								<div class="text">Item Sales</div>
								<div class="menu">
									<div class="item" data-value="0">Total Sales</div>
									<div class="item" data-value="1">2020</div>
								</div>
							</div>
							<div class="date_list152">
								<a href="#">All Time</a> /
								<a href="#">2020</a> /
								<a href="#">April</a>
							</div>
						</div>
						<div class="table-responsive mt-30">
							<table class="table ucp-table earning__table">
								<thead class="thead-s">
									<tr>
										<th scope="col">Date</th>
										<th scope="col">Item Sales Count</th>
										<th scope="col">Earning</th>									
									</tr>
								</thead>
								<tbody>
									<tr>										
										<td>1, Wednesday</td>	
										<td>3</td>	
										<td>$120.50</td>	
									</tr>
									<tr>										
										<td>2, Thursday</td>	
										<td>2</td>	
										<td>$84.00</td>	
									</tr>
									<tr>										
										<td>4, Saturday</td>	
										<td>4</td>	
										<td>$150.50</td>	
									</tr>
									<tr>										
										<td>5, Sunday</td>	
										<td>3</td>	
										<td>$102.24</td>	
									</tr>
									<tr>										
										<td>6, Monday</td>	
										<td>2</td>	
										<td>$80.50</td>	
									</tr>
									<tr>										
										<td>7, Tuesday</td>	
										<td>3</td>	
										<td>$70.50</td>	
									</tr>
									<tr>										
										<td>8, Wednesday</td>	
										<td>5</td>	
										<td>$130.00</td>	
									</tr>
									<tr>										
										<td>9, Thursday</td>	
										<td>3</td>	
										<td>$95.50</td>	
									</tr>
									<tr>										
										<td>10, Friday</td>	
										<td>4</td>	
										<td>$152.50</td>	
									</tr>
									<tr>										
										<td>11, Saturday</td>	
										<td>3</td>	
										<td>$100.40</td>	
									</tr>
									<tr>										
										<td>12, Sunday</td>	
										<td>2</td>	
										<td>$60.14</td>	
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<td>Total</td>
										<td>34</td>
										<td>$1146.78</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
@stop