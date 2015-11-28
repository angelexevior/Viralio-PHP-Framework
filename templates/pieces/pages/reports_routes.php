<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        defined('_SECURED') or die('Restricted access');
        ?>
    <div class="panel-body panel-border">

        <div class="row">
            <div class="col-sm-12">

                <!-- Table Model 2 -->
                <strong>Routes</strong>

                <table class="table table-model-2 table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Address</th> 
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Arxiepiskopou Makariou</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Griva Digeni</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Larnakos</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-sm-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Standard Bar</h3>
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
                                    {day: "January", Routes: 3},
                                    {day: "February", Routes: 2},
                                    {day: "March", Routes: 3},
                                    {day: "April", Routes: 4},
                                    {day: "May", Routes: 6},
                                    {day: "June", Routes: 11},
                                    {day: "July", Routes: 4},
                                    {day: "August", Routes: 4},
                                    {day: "September", Routes: 4},
                                    {day: "October", Routes: 4},
                                    {day: "November", Routes: 4},
                                    {day: "December", Routes: 4}
                                ],
                                series: {
                                    argumentField: "month",
                                    valueField: "Routes",
                                    name: "Routes",
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
