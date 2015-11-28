<?php ?>
<h1>Orders</h1>



<div class="row">

    <div class="col-md-12">

        <ul class="nav nav-tabs nav-tabs-justified">
            <li class="active">
                <a href="#home-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-home"></i></span>
                    <span class="hidden-xs">New Order</span>
                </a>
            </li>
            <li>
                <a href="#profile-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-user"></i></span>
                    <span class="hidden-xs">Pending Orders</span>
                </a>
            </li>
            <li>
                <a href="#messages-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-envelope-o"></i></span>
                    <span class="hidden-xs">Archived Orders</span>
                </a>
            </li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home-3">

                <div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="panel-title">
                                Input validation
                            </div>


                        </div>

                        <div class="panel-body">

                            <form role="form" id="form1" method="post" class="validate">

                                <div class="form-group">
                                    <label class="control-label">Telephone Number</label>

                                    <input type="text" class="form-control" name="name" data-validate="" data-message-required="" placeholder="Insert number here" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Address</label>

                                    <input type="text" class="form-control" name="" data-validate="" placeholder="Insert Address here" />
                                </div>

                                <div class="form-group">
                                    <button  class="btn btn-link">
                                        <i class="linecons-search"></i>
                                    </button>

                                    <label class="control-label">Products</label>


                                    <form name="userinfo_search_form" method="get" action="extra-search.html">
                                        <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />


                                    </form>
                                    <div class="panel panel-default">

                                        <div class="panel-body">



                                            <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Preparation Time</th>
                                                        <th>Cost</th>

                                                    </tr>
                                                </thead>

                                                <tfoot>
                                                    <tr>
                                                        <th>Total Number of Products</th>
                                                        <th>Total Preparation Time</th>
                                                        <th>Total Cost</th>

                                                    </tr>
                                                </tfoot>

                                                <tbody>
                                                    <tr>
                                                        <td>Burger</td>
                                                        <td>15</td>
                                                        <td>5.50</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Fries Medium</td>
                                                        <td>5</td>
                                                        <td>2.50</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Coke Large</td>
                                                        <td>-</td>
                                                        <td>1.30</td>

                                                    </tr>

                                                    <tr>
                                                        <td>Insert New</td>
                                                        <td>Insert New</td>
                                                        <td>Insert New</td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success">Confirm</button>
                                <button type="reset" class="btn btn-white">Reset</button>
                                <button type="reset" class="btn btn-red">Cancel</button>
                        </div>

                        </form>

                    </div>

                </div>


            </div>

            <div class="tab-pane" id="profile-3">
                <h5>Pending Orders</h5>

                <div class="row">
                    <p> Order 1 
                        <button class="btn btn-icon btn-warning">
                            <i class="fa-wrench"></i>
                        </button>
                        <button class="btn btn-icon btn-red">
                            <i class="fa-remove"></i>
                        </button>
                    </p>
                    <div class="col-md-12">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (blue)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p> Order 2 



                        <button class="btn btn-icon btn-warning">
                            <i class="fa-wrench"></i>
                        </button>
                        <button class="btn btn-icon btn-red">
                            <i class="fa-remove"></i>
                        </button>
                    </p>

                    <div class="col-md-12">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                <span class="sr-only">75% Complete (green)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p> Order 3
                        <button class="btn btn-icon btn-warning">
                            <i class="fa-wrench"></i>
                        </button>
                        <button class="btn btn-icon btn-red">
                            <i class="fa-remove"></i>
                        </button>
                    </p>
                    <div class="col-md-12">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete (red)</span>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

            <div class="tab-pane" id="messages-3">

                <div class="panel panel-default">

                    <div class="panel-body">


                        <button type="submit" class="btn btn-link">
                            <i class="linecons-search"></i>
                        </button>
                        <form name="userinfo_search_form" method="get" action="extra-search.html">
                            <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />


                        </form>





                        <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Client's Phone Number</th>
                                    <th>Date</th>
                                    <th>Order Cost</th>

                                </tr>
                            </thead>



                            <tbody>
                                <tr>
                                    <td>1156899</td>
                                    <td>99123456</td>
                                    <td>10/10/15</td>
                                    <td>34.80</td>

                                </tr>
                                <tr>
                                    <td>1156900</td>
                                    <td>99568941</td>
                                    <td>10/10/15</td>
                                    <td>49.99</td>

                                </tr>
                                <tr>
                                    <td>1156901</td>
                                    <td>99654721</td>
                                    <td>11/10/15</td>
                                    <td>23.00</td>

                                </tr>
                                <tr>
                                    <td>1156902</td>
                                    <td>96325417</td>
                                    <td>11/10/15</td>
                                    <td>60.30</td>

                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>






    </div>


</div>
</div>
