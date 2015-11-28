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
                    <h3 class="panel-title">Stats</h3>
                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">	
                    <script type="text/javascript">
                        jQuery(document).ready(function ($)
                        {
                            if (!$.isFunction($.fn.dxChart))
                                return;

                            $("#bar-1").dxChart({
                                dataSource: [
                                    {day: "January", Clients: 3},
                                    {day: "February", Clients: 2},
                                    {day: "March", Clients: 3},
                                    {day: "April", Clients: 4},
                                    {day: "May", Clients: 6},
                                    {day: "June", Clients: 11},
                                    {day: "July", Clients: 4},
                                    {day: "August", Clients: 4},
                                    {day: "September", Clients: 4},
                                    {day: "October", Clients: 4},
                                    {day: "November", Clients: 4},
                                    {day: "December", Clients: 4}
                                ],
                                series: {
                                    argumentField: "month",
                                    valueField: "Clients",
                                    name: "Clients",
                                    type: "bar",
                                    color: '#68b828'
                                }
                            });


                        });


                    </script>
                    <div id="bar-1" style="height: 440px; width: 100%;"></div>
                    <br />
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
