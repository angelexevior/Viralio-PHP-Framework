<?php
defined( '_SECURED' ) or die( 'Restricted access' );
?>
<h1>Production</h1>

This is the production interface 
<html lang="en">
 <body class="page-body">
 
<div class="main-content">			
			<!-- Table Styles -->
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Orders</h3>
							
							<div class="panel-options">
								<a href="#">
									<i class="linecons-cog"></i>
								</a>
								
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								
								<a href="#" data-toggle="reload">
									<i class="fa-rotate-right"></i>
								</a>
								
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<div class="row">
								<div class="col-sm-12">
								
									<!-- Basic Table -->
                                                                      
                                                                        <strong>Order1  </strong>
                                                                        <p>
                                                                        <strong><input type="checkbox" name="Receive Order">Receive Order<br>
                                                                       <input type="checkbox" name="Receive Order">Order Complete<br>
                                                                       </strong>
                                                                       </p>
                                                                          
                                                                   
                                                                   
									<table class="table table-model-2 table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Product</th>
												<th>Prepare Time</th>
                                                                                                <th>Start Product</th>
                                                                                                <th>Finish Product</th>
                                                                                                <th>Cancel Product</th>
                                                                                                <th>Progress Product</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>1</td>
												<td>Burger</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
                                                                                                     
										</div></td>
											</tr>
											
                                                                                        
											<tr>
												<td>2</td>
												<td>Wing Street</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
											
											<tr>
												<td>3</td>
												<td>Souvlaki</td>
												<td>15 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
										</tbody>
									</table>
									
								</div>
								<div class="col-sm-12">
								
									<!-- Hover Table -->
									<strong>Order2</strong>
                                                                          <p>
                                                                        <strong><input type="checkbox" name="Receive Order">Receive Order<br>
                                                                       <input type="checkbox" name="Receive Order">Order Complete<br>
                                                                       </strong>
                                                                       </p>
									
									<table class="table table-model-2 table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Product</th>
												<th>Prepare Time</th>
                                                                                                <th>Start Product</th>
                                                                                                <th>Finish Product</th>
                                                                                                <th>Cancel Product</th>
                                                                                                <th>Progress Product</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>1</td>
												<td>Burger</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
                                                                                                     
										</div></td>
											</tr>
											
											<tr>
												<td>2</td>
												<td>Wing Street</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
											
											<tr>
												<td>3</td>
												<td>Souvlaki</td>
												<td>15 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
										</tbody>
									</table>
									
								</div>
							</div>
							
							<div class="vspacer v3"></div>
						
						</div>
						<div class="panel-body panel-border">
							
							<div class="row">
								<div class="col-sm-12">
								
									<!-- Striped Table -->
									<strong>Order3</strong>
                                                                          <p>
                                                                        <strong><input type="checkbox" name="Receive Order">Receive Order<br>
                                                                       <input type="checkbox" name="Receive Order">Order Complete<br>
                                                                       </strong>
                                                                       </p>
									
									<table class="table table-model-2 table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Product</th>
												<th>Prepare Time</th>
                                                                                                <th>Start Product</th>
                                                                                                <th>Finish Product</th>
                                                                                                <th>Cancel Product</th>
                                                                                                <th>Progress Product</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>1</td>
												<td>Burger</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
                                                                                                     
										</div></td>
											</tr>
											
											<tr>
												<td>2</td>
												<td>Wing Street</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
											
											<tr>
												<td>3</td>
												<td>Souvlaki</td>
												<td>15 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
										</tbody>
									</table>
								
								</div>
								<div class="col-sm-12">
								
									<!-- Bordered + Striped Table -->
									<strong>Order4</strong>
                                                                          <p>
                                                                        <strong><input type="checkbox" name="Receive Order">Receive Order<br>
                                                                       <input type="checkbox" name="Receive Order">Order Complete<br>
                                                                       </strong>
                                                                       </p>
									
									<table class="table table-model-2 table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Product</th>
												<th>Prepare Time</th>
                                                                                                <th>Start Product</th>
                                                                                                <th>Finish Product</th>
                                                                                                <th>Cancel Product</th>
                                                                                                <th>Progress Product</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>1</td>
												<td>Burger</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
                                                                                                     
										</div></td>
											</tr>
											
											<tr>
												<td>2</td>
												<td>Wing Street</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
											
											<tr>
												<td>3</td>
												<td>Souvlaki</td>
												<td>15 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
										</tbody>
									</table>
								
								</div>
							</div>
							
						</div>
						<div class="panel-body panel-border">
						
							<div class="row">
								<div class="col-sm-12">
								
									<!-- Condensed Table -->
									<strong>Order5</strong>
                                                                          <p>
                                                                        <strong><input type="checkbox" name="Receive Order">Receive Order<br>
                                                                       <input type="checkbox" name="Receive Order">Order Complete<br>
                                                                       </strong>
                                                                       </p>
									
									<table class="table table-model-2 table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Product</th>
												<th>Prepare Time</th>
                                                                                                <th>Start Product</th>
                                                                                                <th>Finish Product</th>
                                                                                                <th>Cancel Product</th>
                                                                                                <th>Progress Product</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												<td>1</td>
												<td>Burger</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
                                                                                                     
										</div></td>
											</tr>
											
											<tr>
												<td>2</td>
												<td>Wing Street</td>
												<td>10 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
											
											<tr>
												<td>3</td>
												<td>Souvlaki</td>
												<td>15 minutes</td>
                                                                                                <td><input type="checkbox" name="Receive Order"></td>
                                                                                                <td><button class="btn btn-white btn-block">Finish</button></td>
                                                                                                <td><button class="btn btn-purple btn-block">Cancel</button></td>
                                                                                                <td><div class="progress">
                                                                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
												<span class="sr-only">20% Complete</span>
                                                                                                </div>
											</tr>
										</tbody>
									</table>
								
								</div>
								
							</div>
						
						</div>	
					</div>
					
				</div>
			</div>
			
			<!-- Tables and Panels -->
			
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">

					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
     
    
     
     
     
     
     
     
     
     
 </body>
 </html>

