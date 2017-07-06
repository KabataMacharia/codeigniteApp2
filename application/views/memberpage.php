
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
            <img class="img-circle img-logout" src="<?php echo base_url();?>images/<?php echo $photo;?>" alt="">
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
