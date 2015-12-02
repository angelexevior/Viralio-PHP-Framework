<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        defined('_SECURED') or die('Restricted access');
        ?>
    <div class="row"><div class="col-xs-6"><div class="dataTables_length" id="example-1_length"><label>Show <select name="example-1_length" aria-controls="example-1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div></div><div class="col-xs-6"><div id="example-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example-1"></label></div></div></div> 
    <div class="panel-body panel-border">

        <div id="example-2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><table class="table table-bordered table-striped dataTable no-footer" id="example-2" role="grid" aria-describedby="example-2_info">
                <thead>
                    <tr role="row"><th class="no-sorting sorting_asc" rowspan="1" colspan="1" aria-label="
                                       " style="width: 20px;">
                            <div class="cbr-replaced"><div class="cbr-input"><input type="checkbox" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                        </th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 150px;">Name </th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 150px;">Address</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Telephone: activate to sort column ascending" style="width: 75px;">Telephone</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 10px;">Actions</th></tr>
                </thead>

                <tbody class="middle-align">

                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            <div class="cbr-replaced"><div class="cbr-input"><input type="checkbox" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                        </td>
                        <td>1</td>
                        <td>Giorgos</td>
                        <td>Aglantzias</td>
                        <td>99111111</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Show Stats
                            </a>                         
                        </td>

                    </tr><tr role="row" class="even">
                        <td class="sorting_1">
                            <div class="cbr-replaced"><div class="cbr-input"><input type="checkbox" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                        </td>
                        <td>2</td>
                        <td>Andreas</td>
                        <td>Griva Digeni</td>
                        <td>99222222</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Show Stats
                            </a>
                           
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">
                            <div class="cbr-replaced"><div class="cbr-input"><input type="checkbox" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                        </td>
                        <td>3</td>
                        <td>Marios</td>
                        <td>Makariou</td>
                        <td>99333333</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
                                Show Stats
                            </a>
                        </td>
                    </tr></tbody>
            </table>
            <div class="row"><div class="col-xs-15"><div class="dataTables_info" id="example-2_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="example-2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="example-2" tabindex="0" id="example-2_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="example-2" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="example-2" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="example-2" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="example-2" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="example-2" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="example-2" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="example-2" tabindex="0" id="example-2_next"><a href="#">Next</a></li></ul></div></div></div></div>

    </div>

    
    
    
    <div class="row">
				<div class="col-sm-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Standard Bar</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">–</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									×
								</a>
							</div>
						</div>
						<div class="panel-body">	
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									if( ! $.isFunction($.fn.dxChart))
										return;
										
									$("#bar-1").dxChart({
										dataSource: [
											{day: "Monday", sales: 3},
											{day: "Tuesday", sales: 2},
											{day: "Wednesday", sales: 3},
											{day: "Thursday", sales: 4},
											{day: "Friday", sales: 6},
											{day: "Saturday", sales: 11},
											{day: "Sunday", sales: 4} 
										],
									 
										series: {
											argumentField: "day",
											valueField: "sales",
											name: "Sales",
											type: "bar",
											color: '#68b828'
										}
									});
									
									$("#bar-1-randomize").on('click', function(ev)
									{
										ev.preventDefault();
										
										$('#bar-1').dxChart('instance').option('dataSource', [
											{day: "Monday", sales: between(1,25)},
											{day: "Tuesday", sales: between(1,25)},
											{day: "Wednesday", sales: between(1,25)},
											{day: "Thursday", sales: between(1,25)},
											{day: "Friday", sales: between(1,25)},
											{day: "Saturday", sales: between(1,25)},
											{day: "Sunday", sales: between(1,25)} 
										]);
									});
								});
								
								function between(randNumMin, randNumMax)
								{
									var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);
									
									return randInt;
								}
							</script>
							<div id="bar-1" style="height: 440px; width: 100%;" class="dx-visibility-change-handler"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="none" stroke="none" stroke-width="0" class="dxc dxc-chart" style="line-height:normal;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);display:block;overflow:hidden;touch-action:pan-x pan-y pinch-zoom;-ms-touch-action:pan-x pan-y pinch-zoom;" direction="ltr" width="1063" height="440" onclick="void(0)"><defs><clipPath id="DevExpress_2"><rect x="0" y="0" width="1063" height="440" transform="translate(0,0)"></rect></clipPath><pattern id="DevExpress_3" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#68b828" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#68b828" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_4" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#68b828" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#68b828" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_7" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#68b828" opacity="0.75"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#68b828" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_8" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#68b828" opacity="0.5"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#68b828" transform="translate(0,0)"></path></pattern><clipPath id="DevExpress_9"><rect x="23" y="0" width="974" height="413" transform="translate(0,0)"></rect></clipPath><clipPath id="DevExpress_10"><rect x="23" y="0" width="974" height="413" transform="translate(0,0)"></rect></clipPath><clipPath id="DevExpress_11"><rect x="0" y="0" width="1063" height="413" transform="translate(0,0)"></rect></clipPath><pattern id="DevExpress_12" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#68b828" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#68b828" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_13" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#68b828" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#68b828" transform="translate(0,0)"></path></pattern></defs><rect x="0" y="0" width="1063" height="440" transform="translate(0,0)" fill="gray" opacity="0.0001"></rect><g class="dxc-background"></g><g class="dxc-strips-group"><g class="dxc-arg-strips" clip-path="url(#DevExpress_9)"></g><g class="dxc-val-strips" clip-path="url(#DevExpress_9)"></g></g><g class="dxc-grids-group"><g class="dxc-val-grid"><path d="M 23 413 L 997 413" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 377 L 997 377" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 341 L 997 341" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 305 L 997 305" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 269 L 997 269" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 233 L 997 233" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 198 L 997 198" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 162 L 997 162" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 126 L 997 126" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 90 L 997 90" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 54 L 997 54" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 18 L 997 18" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path></g><g class="dxc-arg-grid"></g></g><g class="dxc-axes-group"><g class="dxc-arg-axis" clip-path="url(#DevExpress_2)"><g class="dxc-arg-elements"><text x="93" y="436" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Monday</text><text x="232" y="436" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Tuesday</text><text x="371" y="436" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Wednesday</text><text x="510" y="436" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Thursday</text><text x="649" y="436" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Friday</text><text x="788" y="436" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Saturday</text><text x="927" y="436" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Sunday</text></g><g class="dxc-arg-line"></g><g class="dxc-arg-title"></g></g><g class="dxc-val-axis" clip-path="url(#DevExpress_2)"><g class="dxc-val-elements"><text x="13" y="417" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">0</text><text x="13" y="381" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">1</text><text x="13" y="345" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">2</text><text x="13" y="309" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">3</text><text x="13" y="273" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">4</text><text x="13" y="237" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">5</text><text x="13" y="202" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">6</text><text x="13" y="166" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">7</text><text x="13" y="130" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">8</text><text x="13" y="94" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">9</text><text x="13" y="58" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">10</text><text x="13" y="22" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">11</text></g><g class="dxc-val-line"></g><g class="dxc-val-title"></g></g></g><g class="dxc-constant-lines-group"><g class="dxc-arg-constant-lines"></g><g class="dxc-val-constant-lines"></g></g><g class="dxc-strips-labels-group"><g class="dxc-arg-axis-labels"></g><g class="dxc-val-axis-labels"></g></g><g class="dxc-border"></g><g class="dxc-series-group"><g class="dxc-series"><g fill="#68b828" stroke="#68b828" stroke-width="0" class="dxc-markers" opacity="1" clip-path="" transform="translate(0,0) scale(1,1)"><rect x="44" y="305" width="97" height="108" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="183" y="341" width="97" height="72" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="322" y="305" width="97" height="108" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="461" y="269" width="97" height="144" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="600" y="198" width="97" height="215" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="739" y="18" width="97" height="395" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="878" y="269" width="97" height="144" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect></g><g class="dxc-error-bars" stroke="#000000" stroke-width="2" opacity="1" stroke-linecap="square" clip-path="url(#DevExpress_11)" transform="translate(0,0)"></g></g></g><g class="dxc-labels-group"><g class="dxc-labels" visibility="hidden" clip-path="url(#DevExpress_10)" opacity="1" transform="translate(0,0)"></g></g><g class="dxc-crosshair-cursor"></g><g class="dxc-legend" clip-path="url(#DevExpress_2)" transform="translate(0,0)"><g transform="translate(1007,10)"><rect x="0" y="0" width="12" height="12" transform="translate(0,3)" fill="#68b828"></rect><text x="0" y="0" transform="translate(19,13)" style="fill:#767676;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="start">Sales</text></g></g></svg></div>
							<br>
							<a href="#" id="bar-1-randomize" class="btn btn-primary btn-small">Randomize</a>
						</div>
					</div>
						
				</div>
			</div>
    
    
</body>
</head>
</html>
