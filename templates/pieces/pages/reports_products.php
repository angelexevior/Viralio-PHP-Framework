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
                <strong>Products</strong>

                <table class="table table-model-2 table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th> 
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Burger</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Fries</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Water</td>
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
                                    {day: "January", Products: 3},
                                    {day: "February", Products: 2},
                                    {day: "March", Products: 3},
                                    {day: "April", Products: 4},
                                    {day: "May", Products: 6},
                                    {day: "June", Products: 11},
                                    {day: "July", Products: 4},
                                    {day: "August", Products: 4},
                                    {day: "September", Products: 4},
                                    {day: "October", Products: 4},
                                    {day: "November", Products: 4},
                                    {day: "December", Products: 4}
                                ],
                                series: {
                                    argumentField: "month",
                                    valueField: "Products",
                                    name: "Products",
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
