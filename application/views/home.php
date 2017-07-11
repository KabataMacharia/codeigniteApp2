
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
                                                                       <?php if (isset($_SESSION['userid']) && $_SESSION['userrole']=='admin' ){echo $membersNo; }?>
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
					
              				 <?php echo form_open('admin/activateMember', 'id="form"  data-parsley-validate');?>
                                  	 <div hidden class="alert alert-success" id='load'>
						     </div>
							  <div hidden class="alert alert-danger" id='load1'>
						     </div>
									<table id="example2" class="table table-striped table-bordered table-hover table-green" >
                                        <thead>
                                            <tr>
                                                <th>Member Name</th>
												<th>User Role</th>
                                                <th>Email</th>
                                                <th>Address</th>
												<th>Telephone No</th>
												<th>Activate</th>
												
                                            </tr>
                                        </thead>
                                        <tbody id="view">
											

									<?php
									if($members!="")
									{
								$data['members'] = $members;
		
								foreach($members as $result)
							
									{
											
									?>
								<tr id="records">
						<td><?php 
						if($result->photo==''){
											$file='';
									}else{
									$file=base_url().'images/'.$result->photo;
									?>
									<img src="<?php echo $file;?>" height="50" width="50"
									/>
									<?php }
						?>
						
						<?php echo $result->fname." ".$result->lname; ?></td>
						<td><?php echo $result->userrole; ?></td>
						<td><?php echo $result->email; ?></td>
						<td><?php echo $result->address; ?></td>
						<td><?php echo $result->phone; ?></td>
						<td><?php $id=$result->member_no;?>
						<a href="#" onclick="activate('<?php echo $id;?>')" style="color:red">Activate</a>
						</td>
							 
						</tr>
						<?php } }?>
                                            
                                        </tbody>
                                    </table>
									
									</form>

                                        </div>
                                        <!-- /.table-responsive -->
										<div id="question" style="display:none; cursor: default"> 
							<h4>Are you sure you want to continue?</h4> 
							<input type="button" id="yes" value="Yes" /> 
							<input type="button" id="no" value="No" /> 
							 </div>
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
                                                            <img class="media-object img-circle" src="<?php echo base_url();?>resources/img/user-profile-1.jpg" alt="">
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
   
	 				<script src="<?php echo base_url();?>resources/js/blockUI.js" type="text/javascript" charset="utf-8"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.2/parsley.min.js"></script>
<script type="text/javascript">
	function getCookie(name) {
    	var cookieValue = null;
    	if (document.cookie && document.cookie !== '') {
    		var cookies = document.cookie.split(';');
    		for (var i = 0; i < cookies.length; i++) {
    			var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) === (name + '=')) {
                	cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                	break;
                }
            }
        }
        return cookieValue;
    }
    
    function csrfSafeMethod(method) {
        // these HTTP methods do not require CSRF protection
        return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
    } 
 function activate(id){
	 alert(id);
	// if ( $(this).parsley().isValid() ) {
	var csrftoken = getCookie('csrf_cookie_name');
			
	var formdata = $('#form').serializeArray();
	
	formdata.push({name: "id",
	value: id});	
	formdata.push({
	name: "csrf_cookie_name",
	value: csrftoken
	});
   $.blockUI({ message: $('#question'), css: { width: '300px' } }); 
 $('#yes').click(function() { 

            // update the block message 
            $.blockUI({ message: "<h3><font color='red'>Activating...</h3></font>" }); 
 			$.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/admin/activateMember",
            data: formdata,
            beforeSend: function(xhr, settings) {
				
                if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
      			
            },
            cache: false,
            success: function(data) {
			
			$.blockUI();
		   if(data=='1'){
			 $("#load").html("Member successfully activated").show();
			$("#load1").html(data).hide();
			}
			else{
			$("#load").html(data).hide();
			$("#load1").html(data).show();
			}
			setTimeout($.unblockUI, 2000);
						

					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { // on error..
						
						
					}
				});
    
        }); 
		   $('#no').click(function() { 
            $.unblockUI(); 
            return false; 
        }); 
	 //}
 }

 </script> 