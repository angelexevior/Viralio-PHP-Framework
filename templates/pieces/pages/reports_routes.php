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
                        </th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 150px;">Name </th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 150px;">Distance</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Telephone: activate to sort column ascending" style="width: 75px;">Weight</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 10px;">Actions</th></tr>
                </thead>

                <tbody class="middle-align">

                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            <div class="cbr-replaced"><div class="cbr-input"><input type="checkbox" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                        </td>
                        <td>1</td>
                        <td>Makariou</td>
                        <td>5000meters</td>
                        <td>10</td>
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
                        <td>Larnakos</td>
                        <td>1000meters</td>
                        <td>0</td>
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
                        <td>Griva Digeni</td>
                        <td>2000meters</td>
                        <td>0</td>
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
							<h3 class="panel-title">Routes Stats</h3>
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
										
									var dataSource = [
										{ state: "China", oil: 4.95, gas: 2.85, coal: 45.56 },
										{ state: "Russia", oil: 12.94, gas: 17.66, coal: 4.13 },
										{ state: "USA", oil: 8.51, gas: 19.87, coal: 15.84 },
										{ state: "Iran", oil: 5.3, gas: 4.39 },
										{ state: "Canada", oil: 4.08, gas: 5.4 },
										{ state: "Saudi Arabia", oil: 12.03 },
										{ state: "Mexico", oil: 3.86 }
									];
									
									$("#bar-2").dxChart({
										equalBarWidth: false,
										dataSource: dataSource,
										commonSeriesSettings: {
										    argumentField: "state",
										    type: "bar"
										},
										series: [
										    { valueField: "oil", name: "Oil Production", color: "#0e62c7" },
										    { valueField: "gas", name: "Gas Production", color: "#2c2e2f" },
										    { valueField: "coal", name: "Coal Production", color: "#7c38bc" }
										],
										legend: {
										    verticalAlignment: "bottom",
										    horizontalAlignment: "center"
										},
										title: "Routes Delivered"
									});
								});
							</script>
							<div id="bar-2" style="height: 400px; width: 100%;" class="dx-visibility-change-handler"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="none" stroke="none" stroke-width="0" class="dxc dxc-chart" style="line-height:normal;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);display:block;overflow:hidden;touch-action:pan-x pan-y pinch-zoom;-ms-touch-action:pan-x pan-y pinch-zoom;" direction="ltr" width="1063" height="400" onclick="void(0)"><defs><clipPath id="DevExpress_15"><rect x="0" y="0" width="1063" height="400" transform="translate(0,0)"></rect></clipPath><pattern id="DevExpress_16" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_17" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_18" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#2c2e2f" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#2c2e2f" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_19" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#2c2e2f" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#2c2e2f" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_20" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#7c38bc" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#7c38bc" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_21" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#7c38bc" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#7c38bc" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_28" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#0e62c7" opacity="0.75"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_29" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#0e62c7" opacity="0.5"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_30" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#2c2e2f" opacity="0.75"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#2c2e2f" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_31" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#2c2e2f" opacity="0.5"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#2c2e2f" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_32" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#7c38bc" opacity="0.75"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#7c38bc" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_33" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#7c38bc" opacity="0.5"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#7c38bc" transform="translate(0,0)"></path></pattern><clipPath id="DevExpress_34"><rect x="23" y="59" width="1040" height="261" transform="translate(0,0)"></rect></clipPath><clipPath id="DevExpress_35"><rect x="23" y="59" width="1040" height="261" transform="translate(0,0)"></rect></clipPath><clipPath id="DevExpress_36"><rect x="0" y="59" width="1063" height="261" transform="translate(0,0)"></rect></clipPath><pattern id="DevExpress_37" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_38" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_39" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#2c2e2f" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#2c2e2f" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_40" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#2c2e2f" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#2c2e2f" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_41" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#7c38bc" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#7c38bc" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_42" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#7c38bc" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#7c38bc" transform="translate(0,0)"></path></pattern></defs><rect x="0" y="0" width="1063" height="400" transform="translate(0,0)" fill="gray" opacity="0.0001"></rect><g class="dxc-background"></g><g class="dxc-strips-group"><g class="dxc-arg-strips" clip-path="url(#DevExpress_34)"></g><g class="dxc-val-strips" clip-path="url(#DevExpress_34)"></g></g><g class="dxc-grids-group"><g class="dxc-val-grid"><path d="M 23 320 L 1063 320" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 273 L 1063 273" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 225 L 1063 225" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 178 L 1063 178" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 130 L 1063 130" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 23 83 L 1063 83" transform="translate(0,0.5)" stroke="#d3d3d3" stroke-width="1"></path></g><g class="dxc-arg-grid"></g></g><g class="dxc-axes-group"><g class="dxc-arg-axis" clip-path="url(#DevExpress_15)"><g class="dxc-arg-elements"><text x="97" y="343" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">China</text><text x="246" y="343" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Russia</text><text x="394" y="343" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">USA</text><text x="543" y="343" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Iran</text><text x="692" y="343" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Canada</text><text x="840" y="343" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Saudi Arabia</text><text x="989" y="343" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Mexico</text></g><g class="dxc-arg-line"></g><g class="dxc-arg-title"></g></g><g class="dxc-val-axis" clip-path="url(#DevExpress_15)"><g class="dxc-val-elements"><text x="13" y="324" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">0</text><text x="13" y="277" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">10</text><text x="13" y="229" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">20</text><text x="13" y="182" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">30</text><text x="13" y="134" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">40</text><text x="13" y="87" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">50</text></g><g class="dxc-val-line"></g><g class="dxc-val-title"></g></g></g><g class="dxc-constant-lines-group"><g class="dxc-arg-constant-lines"></g><g class="dxc-val-constant-lines"></g></g><g class="dxc-strips-labels-group"><g class="dxc-arg-axis-labels"></g><g class="dxc-val-axis-labels"></g></g><g class="dxc-border"></g><g class="dxc-series-group"><g class="dxc-series"><g fill="#0e62c7" stroke="#0e62c7" stroke-width="0" class="dxc-markers" opacity="1" clip-path="" transform="translate(0,0) scale(1,1)"><rect x="45" y="297" width="30" height="23" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="194" y="259" width="30" height="61" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="342" y="280" width="30" height="40" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="491" y="295" width="47" height="25" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="640" y="301" width="47" height="19" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="788" y="263" width="104" height="57" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="937" y="302" width="104" height="18" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect></g><g class="dxc-error-bars" stroke="#000000" stroke-width="2" opacity="1" stroke-linecap="square" clip-path="url(#DevExpress_36)" transform="translate(0,0)"></g></g><g class="dxc-series"><g fill="#2c2e2f" stroke="#2c2e2f" stroke-width="0" class="dxc-markers" opacity="1" clip-path="" transform="translate(0,0) scale(1,1)"><rect x="82" y="306" width="30" height="14" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="231" y="236" width="30" height="84" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="379" y="226" width="30" height="94" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="548" y="299" width="47" height="21" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="697" y="294" width="47" height="26" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect></g><g class="dxc-error-bars" stroke="#000000" stroke-width="2" opacity="1" stroke-linecap="square" clip-path="url(#DevExpress_36)" transform="translate(0,0)"></g></g><g class="dxc-series"><g fill="#7c38bc" stroke="#7c38bc" stroke-width="0" class="dxc-markers" opacity="1" clip-path="" transform="translate(0,0) scale(1,1)"><rect x="119" y="104" width="30" height="216" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="268" y="300" width="30" height="20" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="416" y="245" width="30" height="75" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect></g><g class="dxc-error-bars" stroke="#000000" stroke-width="2" opacity="1" stroke-linecap="square" clip-path="url(#DevExpress_36)" transform="translate(0,0)"></g></g></g><g class="dxc-labels-group"><g class="dxc-labels" visibility="hidden" clip-path="url(#DevExpress_35)" opacity="1" transform="translate(0,0)"></g><g class="dxc-labels" visibility="hidden" clip-path="url(#DevExpress_35)" opacity="1" transform="translate(0,0)"></g><g class="dxc-labels" visibility="hidden" clip-path="url(#DevExpress_35)" opacity="1" transform="translate(0,0)"></g></g><g class="dxc-crosshair-cursor"></g><g class="dxc-title"><g transform="translate(532,41)"><text x="0" y="0" transform="translate(0,0)" style="font-size:28px;font-family:'Segoe UI Light', 'Helvetica Neue Light', 'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:200;fill:#232323;cursor:default;" text-anchor="middle">Deliveries by Location</text></g></g><g class="dxc-legend" clip-path="url(#DevExpress_15)" transform="translate(0,0)"><g transform="translate(389,357)"><rect x="0" y="0" width="12" height="12" transform="translate(33,0)" fill="#0e62c7"></rect><text x="0" y="0" transform="translate(39,29)" style="fill:#767676;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Delayed</text><rect x="0" y="0" width="12" height="12" transform="translate(133,0)" fill="#2c2e2f"></rect><text x="0" y="0" transform="translate(139,29)" style="fill:#767676;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">On time</text><rect x="0" y="0" width="12" height="12" transform="translate(237,0)" fill="#7c38bc"></rect><text x="0" y="0" transform="translate(243,29)" style="fill:#767676;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">Completed</text></g></g></svg></div>
						</div>
					</div>
						
				</div>
			</div>



    <!-- Imported scripts on this page -->
    <script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
    <script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

</body>
</head>
</html>
