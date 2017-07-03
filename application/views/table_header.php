
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login App</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
 <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	
    <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo base_url();?>resources/dist/css/AdminLTE.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
	  <link rel="stylesheet" href="<?php echo base_url();?>resources/css/select2.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	 <link rel="stylesheet" href="<?php echo base_url();?>resources/dist/css/skins/_all-skins.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/iCheck/flat/blue.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- Morris chart -->
      
		<link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/morris/morris.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- jvectormap -->
		<link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/jvectormap/jquery-jvectormap-1.2.2.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- Date Picker -->
   
		<link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/datepicker/datepicker3.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- Daterange picker -->
		<link rel="stylesheet" href="<?php echo base_url();?>resources/daterangepicker/daterangepicker-bs3.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<!-- jQuery 2.1.4 -->

	<script src="<?php echo base_url();?>resources/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- jQuery UI 1.11.4 -->
	 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
	<script src="<?php echo base_url();?>resources/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>resources/js/jquery.filtertable.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>resources/js/jquery.blockUI.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>resources/js/select2.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Morris.js charts -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="<?php echo base_url();?>resources/plugins/morris/morris.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Sparkline -->
	<script src="<?php echo base_url();?>resources/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- jvectormap -->
	<script src="<?php echo base_url();?>resources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>resources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript" charset="utf-8"></script>
    <!-- jQuery Knob Chart -->
	<script src="<?php echo base_url();?>resources/plugins/knob/jquery.knob.js" type="text/javascript" charset="utf-8"></script>
    <!-- daterangepicker -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
	<script src="<?php echo base_url();?>resources/plugins/daterangepicker/daterangepicker.js" type="text/javascript" charset="utf-8"></script>
    <!-- datepicker -->
	<script src="<?php echo base_url();?>resources/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript" charset="utf-8"></script>
    <!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url();?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Slimscroll -->
	<script src="<?php echo base_url();?>resources/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- FastClick -->
	<script src="<?php echo base_url();?>resources/plugins/fastclick/fastclick.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- AdminLTE App -->
	<script src="<?php echo base_url();?>resources/dist/js/app.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url();?>resources/dist/js/pages/dashboard.js" type="text/javascript" charset="utf-8"></script>
    <!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url();?>resources/dist/js/demo.js" type="text/javascript" charset="utf-8"></script>
  </head>
   <body class="hold-transition skin-blue sidebar-mini" onload="pload()">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Login App</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
			    <li><a href="<?php echo base_url(); ?>index.php/admin/logout">Sign out</a></li>
			 
			
            
            </ul>
          </div>
        </nav>
      </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
   


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
