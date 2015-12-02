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
                        </th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 10px;">#</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 150px;">Name </th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 150px;">Price</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Telephone: activate to sort column ascending" style="width: 75px;">Quantity</th><th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 10px;">Actions</th></tr>
                </thead>

                <tbody class="middle-align">

                    <tr role="row" class="odd">
                        <td class="sorting_1">
                            <div class="cbr-replaced"><div class="cbr-input"><input type="checkbox" class="cbr cbr-done"></div><div class="cbr-state"><span></span></div></div>
                        </td>
                        <td>1</td>
                        <td>Burger</td>
                        <td>15EURO</td>
                        <td>50</td>
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
                        <td>Water</td>
                        <td>0.50EURO</td>
                        <td>300</td>
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
                        <td>Pizza</td>
                        <td>8EURO</td>
                        <td>10</td>
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
							<h3 class="panel-title">Product Performance</h3>
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
										{ country: "China", year2007: 0.1732, year2008: -0.1588 },
										{ country: "Germany", year2007: 0.0964, year2008: -0.2231 },
										{ country: "United States", year2007: 0.1187, year2008: -0.1878 },
										{ country: "Japan", year2007: 0.1081, year2008: -0.2614 },
										{ country: "France", year2007: 0.1014, year2008: -0.2222 },
										{ country: "Netherlands", year2007: 0.1355, year2008: -0.2015 }
									];
									
									$("#bar-4").dxChart({
										rotated: true,
										dataSource: dataSource,
										commonSeriesSettings: {
											argumentField: "country",
											type: "bar",
											hoverMode: "allArgumentPoints",
											selectionMode: "allArgumentPoints",
											label: {
												visible: true,
												format: "percent",
												precision: 1
											}
										},
										valueAxis: {
											label: {
												format: "percent",
												precision: 1
											}
										},
										series: [
											{ valueField: "year2007", name: "2007 - 2008", color: "#0e62c7" },
											{ valueField: "year2008", name: "2008 - 2009", color: "#00b19d" }
										],
										title: {
											text: "Product Sales by Country"
										},
										legend: {
											verticalAlignment: "bottom",
											horizontalAlignment: "center"
										},
										pointClick: function(point) {
											point.select();
										},
										seriesClick: function(series) {
											series.isVisible() ? series.hide() : series.show(); 
										}
									});
								});
							</script>
							<div id="bar-4" style="height: 450px; width: 100%;" class="dx-visibility-change-handler"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="none" stroke="none" stroke-width="0" class="dxc dxc-chart" style="line-height:normal;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);display:block;overflow:hidden;touch-action:pan-x pan-y pinch-zoom;-ms-touch-action:pan-x pan-y pinch-zoom;" direction="ltr" width="1063" height="450" onclick="void(0)"><defs><clipPath id="DevExpress_61"><rect x="0" y="0" width="1063" height="450" transform="translate(0,0)"></rect></clipPath><pattern id="DevExpress_62" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_63" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_64" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#00b19d" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#00b19d" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_65" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#00b19d" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#00b19d" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_70" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#0e62c7" opacity="0.75"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_71" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#0e62c7" opacity="0.5"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_72" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#00b19d" opacity="0.75"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#00b19d" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_73" width="5" height="5" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="5" height="5" transform="translate(0,0)" fill="#00b19d" opacity="0.5"></rect><path d="M 2.5 -2.5 L -2.5 2.5 M 0 5 L 5 0 M 7.5 2.5 L 2.5 7.5" stroke-width="2" stroke="#00b19d" transform="translate(0,0)"></path></pattern><clipPath id="DevExpress_74"><rect x="81" y="59" width="982" height="311" transform="translate(0,0)"></rect></clipPath><clipPath id="DevExpress_75"><rect x="81" y="59" width="982" height="311" transform="translate(0,0)"></rect></clipPath><clipPath id="DevExpress_76"><rect x="81" y="0" width="982" height="450" transform="translate(0,0)"></rect></clipPath><pattern id="DevExpress_77" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_78" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#0e62c7" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#0e62c7" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_79" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#00b19d" opacity="0.75"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#00b19d" transform="translate(0,0)"></path></pattern><pattern id="DevExpress_80" width="6" height="6" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="6" height="6" transform="translate(0,0)" fill="#00b19d" opacity="0.5"></rect><path d="M 3 -3 L -3 3 M 0 6 L 6 0 M 9 3 L 3 9" stroke-width="2" stroke="#00b19d" transform="translate(0,0)"></path></pattern></defs><rect x="0" y="0" width="1063" height="450" transform="translate(0,0)" fill="gray" opacity="0.0001"></rect><g class="dxc-background"></g><g class="dxc-strips-group"><g class="dxc-val-strips" clip-path="url(#DevExpress_74)"></g><g class="dxc-arg-strips" clip-path="url(#DevExpress_74)"></g></g><g class="dxc-grids-group"><g class="dxc-arg-grid"></g><g class="dxc-val-grid"><path d="M 108 370 L 108 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 163 370 L 163 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 217 370 L 217 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 272 370 L 272 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 327 370 L 327 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 381 370 L 381 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 436 370 L 436 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 490 370 L 490 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 545 370 L 545 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 599 370 L 599 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 654 370 L 654 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 708 370 L 708 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 763 370 L 763 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 818 370 L 818 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 872 370 L 872 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 927 370 L 927 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 981 370 L 981 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path><path d="M 1036 370 L 1036 59" transform="translate(0.5,0)" stroke="#d3d3d3" stroke-width="1"></path></g></g><g class="dxc-axes-group"><g class="dxc-val-axis" clip-path="url(#DevExpress_61)"><g class="dxc-val-elements"><text x="108" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-30.0 %</text><text x="163" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-27.0 %</text><text x="217" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-24.0 %</text><text x="272" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-21.0 %</text><text x="327" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-18.0 %</text><text x="381" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-15.0 %</text><text x="436" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-12.0 %</text><text x="490" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-9.0 %</text><text x="545" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-6.0 %</text><text x="599" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">-3.0 %</text><text x="654" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">0.0 %</text><text x="708" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">3.0 %</text><text x="763" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">6.0 %</text><text x="818" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">9.0 %</text><text x="872" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">12.0 %</text><text x="927" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">15.0 %</text><text x="981" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">18.0 %</text><text x="1036" y="393" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">21.0 %</text></g><g class="dxc-val-line"></g><g class="dxc-val-title"></g></g><g class="dxc-arg-axis" clip-path="url(#DevExpress_61)"><g class="dxc-arg-elements"><text x="71" y="348" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">China</text><text x="71" y="296" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">Germany</text><text x="71" y="244" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">United States</text><text x="71" y="193" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">Japan</text><text x="71" y="141" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">France</text><text x="71" y="89" transform="translate(0,0)" style="fill:#a8a8a8;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="end">Netherlands</text></g><g class="dxc-arg-line"></g><g class="dxc-arg-title"></g></g></g><g class="dxc-constant-lines-group"><g class="dxc-val-constant-lines"></g><g class="dxc-arg-constant-lines"></g></g><g class="dxc-strips-labels-group"><g class="dxc-val-axis-labels"></g><g class="dxc-arg-axis-labels"></g></g><g class="dxc-border"></g><g class="dxc-series-group"><g class="dxc-series"><g fill="#0e62c7" stroke="#0e62c7" stroke-width="0" class="dxc-markers" opacity="1" clip-path="" transform="translate(0,0) scale(1,1)"><rect x="654" y="326" width="315" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="654" y="274" width="175" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="654" y="171" width="196" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="654" y="119" width="184" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="654" y="222" width="216" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="654" y="67" width="246" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect></g><g class="dxc-error-bars" stroke="#000000" stroke-width="2" opacity="1" stroke-linecap="square" clip-path="url(#DevExpress_76)" transform="translate(0,0)"></g></g><g class="dxc-series"><g fill="#00b19d" stroke="#00b19d" stroke-width="0" class="dxc-markers" opacity="1" clip-path="" transform="translate(0,0) scale(1,1)"><rect x="365" y="346" width="289" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="248" y="294" width="406" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="178" y="191" width="476" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="250" y="139" width="404" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="312" y="242" width="342" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect><rect x="287" y="87" width="367" height="16" transform="translate(0,0)" rx="0" ry="0" stroke-width="0"></rect></g><g class="dxc-error-bars" stroke="#000000" stroke-width="2" opacity="1" stroke-linecap="square" clip-path="url(#DevExpress_76)" transform="translate(0,0)"></g></g></g><g class="dxc-labels-group"><g class="dxc-labels" visibility="visible" clip-path="url(#DevExpress_75)" opacity="1" transform="translate(0,0)"><g visibility="visible"><g transform="translate(987,339)"><rect x="-8" y="-17" width="52" height="25" transform="translate(0,0)" fill="#0e62c7" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">17.3 %</text></g></g><g visibility="visible"><g transform="translate(847,287)"><rect x="-8" y="-17" width="45" height="25" transform="translate(0,0)" fill="#0e62c7" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">9.6 %</text></g></g><g visibility="visible"><g transform="translate(888,235)"><rect x="-8" y="-17" width="52" height="25" transform="translate(0,0)" fill="#0e62c7" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">11.9 %</text></g></g><g visibility="visible"><g transform="translate(868,184)"><rect x="-8" y="-17" width="52" height="25" transform="translate(0,0)" fill="#0e62c7" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">10.8 %</text></g></g><g visibility="visible"><g transform="translate(856,132)"><rect x="-8" y="-17" width="52" height="25" transform="translate(0,0)" fill="#0e62c7" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">10.1 %</text></g></g><g visibility="visible"><g transform="translate(918,80)"><rect x="-8" y="-17" width="52" height="25" transform="translate(0,0)" fill="#0e62c7" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">13.6 %</text></g></g></g><g class="dxc-labels" visibility="visible" clip-path="url(#DevExpress_75)" opacity="1" transform="translate(0,0)"><g visibility="visible"><g transform="translate(307,359)"><rect x="-8" y="-17" width="56" height="25" transform="translate(0,0)" fill="#00b19d" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">-15.9 %</text></g></g><g visibility="visible"><g transform="translate(190,307)"><rect x="-8" y="-17" width="56" height="25" transform="translate(0,0)" fill="#00b19d" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">-22.3 %</text></g></g><g visibility="visible"><g transform="translate(254,255)"><rect x="-8" y="-17" width="56" height="25" transform="translate(0,0)" fill="#00b19d" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">-18.8 %</text></g></g><g visibility="visible"><g transform="translate(120,204)"><rect x="-8" y="-17" width="56" height="25" transform="translate(0,0)" fill="#00b19d" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">-26.1 %</text></g></g><g visibility="visible"><g transform="translate(192,152)"><rect x="-8" y="-17" width="56" height="25" transform="translate(0,0)" fill="#00b19d" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">-22.2 %</text></g></g><g visibility="visible"><g transform="translate(229,100)"><rect x="-8" y="-17" width="56" height="25" transform="translate(0,0)" fill="#00b19d" stroke-width="0" stroke="none" isEmpty="false"></rect><text x="0" y="0" transform="translate(0,0)" style="fill:#ffffff;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;">-20.2 %</text></g></g></g></g><g class="dxc-crosshair-cursor"></g><g class="dxc-title"><g transform="translate(532,41)"><text x="0" y="0" transform="translate(0,0)" style="font-size:28px;font-family:'Segoe UI Light', 'Helvetica Neue Light', 'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:200;fill:#232323;cursor:default;" text-anchor="middle">Products performance by Country</text></g></g><g class="dxc-legend" clip-path="url(#DevExpress_61)" transform="translate(0,0)"><g transform="translate(458,407)"><rect x="0" y="0" width="12" height="12" transform="translate(26,0)" fill="#0e62c7"></rect><text x="0" y="0" transform="translate(32,29)" style="fill:#767676;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">2007 - 2008</text><rect x="0" y="0" width="12" height="12" transform="translate(110,0)" fill="#00b19d"></rect><text x="0" y="0" transform="translate(116,29)" style="fill:#767676;font-family:'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana;font-weight:400;font-size:12px;cursor:default;" text-anchor="middle">2008 - 2009</text></g></g></svg></div>
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
