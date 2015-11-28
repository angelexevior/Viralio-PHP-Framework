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
                <strong>Clients</strong>

                <table class="table table-model-2 table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th> 
                            <th>Surname</th> 
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andreas</td>
                            <td>Andreou</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Giorgos</td>
                            <td>Georgiou</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Kostas</td>
                            <td>Kosta</td>
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
