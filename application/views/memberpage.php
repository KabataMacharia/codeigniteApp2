
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Dashboard
                                <small>Content Overview</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                                <li class="pull-right">
                                    <div id="reportrange" class="btn btn-green btn-square date-picker">
                                        <i class="fa fa-calendar"></i>
                                        <span class="date-range"></span> <i class="fa fa-caret-down"></i>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE AREA -->

                <!-- begin DASHBOARD CIRCLE TILES -->
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Users
                                </div>
                                <div class="circle-tile-number text-faded">
                                    265
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading green">
                                    <i class="fa fa-money fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                    Revenue
                                </div>
                                <div class="circle-tile-number text-faded">
                                    $32,384
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-bell fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    Alerts
                                </div>
                                <div class="circle-tile-number text-faded">
                                    9 New
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    Tasks
                                </div>
                                <div class="circle-tile-number text-faded">
                                    10
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading red">
                                    <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                    Orders
                                </div>
                                <div class="circle-tile-number text-faded">
                                    24
                                    <span id="sparklineC"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading purple">
                                    <i class="fa fa-comments fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content purple">
                                <div class="circle-tile-description text-faded">
                                    Mentions
                                </div>
                                <div class="circle-tile-number text-faded">
                                    96
                                    <span id="sparklineD"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end DASHBOARD CIRCLE TILES -->

                <div class="row">

                    <div class="col-lg-3">
                        <div class="tile tile-img tile-time" style="height: 200px">
                            <p class="time-widget">
                                <span class="time-widget-heading">It Is Currently</span>
                                <br>
                                <strong>
                                    <span id="datetime"></span>
                                </strong>
                            </p>
                        </div>
                        <div class="tile dark-blue checklist-tile" style="height: 370px">
                            <h4><i class="fa fa-check-square-o"></i> To-Do List</h4>
                            <div class="checklist">
                                <label class="selected">
                                    <input type="checkbox" checked> <i class="fa fa-wrench fa-fw text-faded"></i> Software Update 2.1
                                    <span class="task-time text-faded pull-right">Yesterday</span>
                                </label>
                                <label class="selected">
                                    <input type="checkbox" checked> <i class="fa fa-wrench fa-fw text-faded"></i> Server #2 Hardward Upgrade
                                    <span class="task-time text-faded pull-right">9:39 AM</span>
                                </label>
                                <label class="selected">
                                    <input type="checkbox" checked> <i class="fa fa-warning fa-fw text-orange"></i> Call Ticket #2032
                                    <span class="task-time text-faded pull-right">9:53 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-warning fa-fw text-orange"></i> Emergency Maintenance
                                    <span class="task-time text-faded pull-right">10:14 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-file fa-fw text-faded"></i> Purchase Order #439
                                    <span class="task-time text-faded pull-right">10:20 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-pencil fa-fw text-faded"></i> March Content Update
                                    <span class="task-time text-faded pull-right">10:48 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-magic fa-fw text-faded"></i> Client #42 Data Scrubbing
                                    <span class="task-time text-faded pull-right">11:09 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-wrench fa-fw text-faded"></i> PHP Upgrade Server #6
                                    <span class="task-time text-faded pull-right">11:17 AM</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="tile green" style="height: 320px">
                                    <h4><i class="fa fa-usd"></i> Revenue Breakdown <a href="javascript:;"><i class="fa fa-refresh pull-right"></i></a>
                                    </h4>
                                    <p class="small text-faded">
                                        Today:
                                        <strong>$324.20 -</strong>
                                        Week:
                                        <strong>$1,230.43</strong>
                                    </p>
                                    <div id="morris-chart-dashboard"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tile light-gray" style="height: 320px">
                                    <h4><i class="fa fa-bolt"></i> Server Load <a href="javascript:;"><i class="fa fa-refresh pull-right"></i></a>
                                    </h4>
                                    <p class="small text-faded">
                                        <strong>130 GB </strong>of
                                        <strong>1024 GB </strong>used
                                    </p>
                                    <div class="flot-chart flot-chart-dashboard">
                                        <div class="flot-chart-content" id="flot-chart-moving-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile orange dash-demo-tile">
                                    <h4><i class="fa fa-cloud fa-fw"></i> Data Usage</h4>
                                    <div id="easy-pie-1" class="easy-pie-chart" data-percent="86">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile blue dash-demo-tile">
                                    <h4><i class="fa fa-check fa-fw"></i> Satisfaction Score</h4>
                                    <div id="easy-pie-2" class="easy-pie-chart" data-percent="92">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile red dash-demo-tile">
                                    <h4><i class="fa fa-arrow-circle-down fa-fw"></i> Bounce Rate</h4>
                                    <div id="easy-pie-3" class="easy-pie-chart" data-percent="27">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile purple dash-demo-tile">
                                    <h4><i class="fa fa-shopping-cart fa-fw"></i> Abandoned Carts</h4>
                                    <div id="easy-pie-4" class="easy-pie-chart" data-percent="35">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-map-marker fa-fw"></i> Traffic Breakdown by Region</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <!-- Button Dropdown -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    Export
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-left" style="margin-left: -90px" role="menu">
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> CSV</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> TSV</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> TSV for Excel</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> Excel (XLSX)</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> PDF</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="map"></div>
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover table-green" id="map-table-example">
                                                <thead>
                                                    <tr>
                                                        <th>Rank</th>
                                                        <th>Country</th>
                                                        <th>Total Visits</th>
                                                        <th>Page Views</th>
                                                        <th>Orders</th>
                                                        <th>Bounce Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>01</strong></td>
                                                        <td>United States</td>
                                                        <td>14,624</td>
                                                        <td>28,981</td>
                                                        <td>281</td>
                                                        <td>30.43%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>02</strong></td>
                                                        <td>China</td>
                                                        <td>5,745</td>
                                                        <td>10,491</td>
                                                        <td>121</td>
                                                        <td>36.73%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>03</strong></td>
                                                        <td>Japan</td>
                                                        <td>5,390</td>
                                                        <td>11,165</td>
                                                        <td>102</td>
                                                        <td>35.52%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>04</strong></td>
                                                        <td>Germany</td>
                                                        <td>3,305</td>
                                                        <td>7,651</td>
                                                        <td>71</td>
                                                        <td>36.24%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>05</strong></td>
                                                        <td>France</td>
                                                        <td>2,555</td>
                                                        <td>5,615</td>
                                                        <td>56</td>
                                                        <td>34.83%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>06</strong></td>
                                                        <td>United Kingdom</td>
                                                        <td>2,258</td>
                                                        <td>4,651</td>
                                                        <td>42</td>
                                                        <td>32.73%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>07</strong></td>
                                                        <td>Italy</td>
                                                        <td>2,036</td>
                                                        <td>4,498</td>
                                                        <td>44</td>
                                                        <td>32.54%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>08</strong></td>
                                                        <td>Brazil</td>
                                                        <td>2,023</td>
                                                        <td>4,948</td>
                                                        <td>43</td>
                                                        <td>33.97%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>09</strong></td>
                                                        <td>Canada</td>
                                                        <td>1,563</td>
                                                        <td>3,961</td>
                                                        <td>38</td>
                                                        <td>33.35%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>10</strong></td>
                                                        <td>Russia</td>
                                                        <td>1,476</td>
                                                        <td>3,261</td>
                                                        <td>35</td>
                                                        <td>35.27%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>11</strong></td>
                                                        <td>Spain</td>
                                                        <td>1,374</td>
                                                        <td>2,841</td>
                                                        <td>28</td>
                                                        <td>34.56%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>12</strong></td>
                                                        <td>Australia</td>
                                                        <td>1,219</td>
                                                        <td>2,753</td>
                                                        <td>25</td>
                                                        <td>31.50%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>13</strong></td>
                                                        <td>Mexico</td>
                                                        <td>1,004</td>
                                                        <td>2,091</td>
                                                        <td>19</td>
                                                        <td>35.17%</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portlet portlet-default">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-circle text-green"></i> Jane Smith</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-white dropdown-toggle btn-xs" data-toggle="dropdown">
                                                    <i class="fa fa-circle text-green"></i> Status
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="chat" class="panel-collapse collapse in">
                                        <div class="portlet-body chat-widget">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle" src="img/user-profile-1.jpg" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Jane Smith
                                                                <span class="small pull-right">12:23 PM</span>
                                                            </h4>
                                                            <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle" src="<?php echo base_url();?>resources/img/profile-pic-small.jpg" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">John Smith
                                                                <span class="small pull-right">12:28 PM</span>
                                                            </h4>
                                                            <p>Yeah I did. Everything looks good.</p>
                                                            <p>Did you have an update on purchase order #302?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle" src="<?php echo base_url();?>resources/img/user-profile-1.jpg" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Jane Smith
                                                                <span class="small pull-right">12:39 PM</span>
                                                            </h4>
                                                            <p>No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="portlet-footer">
                                            <form role="form">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Enter message..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default pull-right">Send</button>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-exchange fa-fw"></i> Recent Transactions</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="transactionsPortlet" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="table-responsive dashboard-demo-table">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>6:14 PM</td>
                                                            <td>$12.07</td>
                                                            <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>6:02 PM</td>
                                                            <td>$5.32</td>
                                                            <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>5:56 PM</td>
                                                            <td>$6.58</td>
                                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>5:12 PM</td>
                                                            <td>$15.61</td>
                                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>5:02 PM</td>
                                                            <td>$9.89</td>
                                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>4:47 PM</td>
                                                            <td>$2.21</td>
                                                            <td><a class="btn btn-xs btn-red"><i class="fa fa-warning"></i> Error</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>4:32 PM</td>
                                                            <td>$5.17</td>
                                                            <td><a class="btn btn-xs btn-default"><i class="fa fa-arrow-circle-right"></i> Special Order</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class="btn btn-green">View All Transactions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->

    </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();?>resources/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/popupoverlay/defaults.js"></script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="<?php echo base_url();?>images/<?php echo $_SESSION['photo'];?>" alt="">
            <h3>
                <i class="fa fa-sign-out text-green"></i> Ready to go?
            </h3>
            <p>Select "Logout" below if you are ready<br> to end your current session.</p>
            <ul class="list-inline">
                <li>
                    <a href="<?php echo base_url();?>index.php/admin/logout" class="btn btn-green">
                        <strong>Logout</strong>
                    </a>
                </li>
                <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="<?php echo base_url();?>resources/js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="<?php echo base_url();?>resources/js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="<?php echo base_url();?>resources/js/plugins/messenger/messenger.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/messenger/messenger-theme-flat.js"></script>
    <!-- Date Range Picker -->
    <script src="<?php echo base_url();?>resources/js/plugins/daterangepicker/moment.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Morris Charts -->
    <script src="<?php echo base_url();?>resources/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/morris/morris.js"></script>
    <!-- Flot Charts -->
    <script src="<?php echo base_url();?>resources/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/flot/jquery.flot.resize.js"></script>
    <!-- Sparkline Charts -->
    <script src="<?php echo base_url();?>resources/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Moment.js -->
    <script src="<?php echo base_url();?>resources/js/plugins/moment/moment.min.js"></script>
    <!-- jQuery Vector Map -->
    <script src="<?php echo base_url();?>resources/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url();?>resources/js/demo/map-demo-data.js"></script>
    <!-- Easy Pie Chart -->
    <script src="<?php echo base_url();?>resources/js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url();?>resources/js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="<?php echo base_url();?>resources/js/flex.js"></script>
    <script src="<?php echo base_url();?>resources/js/demo/dashboard-demo.js"></script>

</body>


</html>
