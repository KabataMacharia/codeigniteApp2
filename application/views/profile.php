        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>
                                User Profile
                                <small> User Information</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="index-2.html">Dashboard</a>
                                </li>
                                <li class="active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <div class="row">
                    <div class="col-lg-12">

                        <div class="portlet portlet-default">
                            <div class="portlet-body">
                                <ul id="userTab" class="nav nav-tabs">
                                    <li class="active"><a href="#overview" data-toggle="tab">Overview</a>
                                    </li>
                                    <li><a href="#profile-settings" data-toggle="tab">Update Profile</a>
                                    </li>
                                </ul>
                                <div id="userTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="overview">

                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <a href="#">
                                                    <span class="profile-edit">Edit</span>
                                                </a>
                                                <img class="img-responsive img-profile" src="<?php echo base_url();?>images/<?php echo $photo;?>" alt="">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item active">Overview</a>
                                                    <a href="#" class="list-group-item">Messages<span class="badge green">4</span></a>
                                                    <a href="#" class="list-group-item">Alerts<span class="badge orange">9</span></a>
                                                    <a href="#" class="list-group-item">Tasks<span class="badge blue">10</span></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-5">
                                                <h1><?php echo  $_SESSION['username']; ?></h1>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis.</p>
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-map-marker fa-muted"></i> Bayville, FL</li>
                                                    <li><i class="fa fa-user fa-muted"></i> Administrator</li>
                                                    <li><i class="fa fa-group fa-muted"></i> Sales, Marketing, Management</li>
                                                    <li><i class="fa fa-trophy fa-muted"></i> Top Seller</li>
                                                    <li><i class="fa fa-calendar fa-muted"></i> Member Since: 5/13/11</li>
                                                </ul>
                                                <h3>Recent Sales</h3>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered table-striped">
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
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <h3>Contact Details</h3>
                                                <p><i class="fa fa-globe fa-muted fa-fw"></i>  <a href="#">http://www.website.com</a>
                                                </p>
                                                <p><i class="fa fa-phone fa-muted fa-fw"></i> 1+(234) 555-2039</p>
                                                <p><i class="fa fa-building-o fa-muted fa-fw"></i> 8516 Market St.
                                                    <br>Bayville, FL 55555</p>
                                                <p><i class="fa fa-envelope-o fa-muted fa-fw"></i>  <a href="#">j.smith@website.com</a>
                                                </p>
                                                <ul class="list-inline">
                                                    <li><a class="facebook-link" href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                                    </li>
                                                    <li><a class="twitter-link" href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                                    </li>
                                                    <li><a class="linkedin-link" href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                                    </li>
                                                    <li><a class="google-plus-link" href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="profile-settings">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <ul id="userSettings" class="nav nav-pills nav-stacked">
                                                    <li class="active"><a href="#basicInformation" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Basic Information</a>
                                                    </li>
                                                    <li><a href="#profilePicture" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i> Profile Picture</a>
                                                    </li>
                                                    <li><a href="#changePassword" data-toggle="tab"><i class="fa fa-lock fa-fw"></i> Change Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-9">
                                                <div id="userSettingsContent" class="tab-content">
                                                    <div class="tab-pane fade in active" id="basicInformation">
                                                       <?php echo form_open('admin/updateMember', 'class="form"  data-parsley-validate');?>
													   <div class="form-group">
													   	 <div hidden class="alert alert-success" id='load'>
														 </div>
														  <div hidden class="alert alert-danger" id='load1'>
														 </div>
														</div>
                                                            <h4 class="page-header">Personal Information:</h4>
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                       
																<input type="text" name="fname" id="fname" required data-parsley-validate-if-empty data-parsley-error-message="<font color='red'>Please enter your First Name</font>" class="form-control" value="<?php echo $fname; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                 <input type="text" name="lname" id="lname" data-parsley-minlength="6" required data-parsley-error-message="<font color='red'>Please enter your Last Name</font>" class="form-control" value="<?php echo $lname; ?>">
                                                            </div>
														
                                                             <div class="form-group">
                                                                <label>Telephone No</label>
                                                       
																<input type="text" name="phone" id="phone" required data-parsley-type="integer" data-parsley-length="[6, 13]" data-parsley-error-message="<font color='red'>Telephone No must be 9 characters long without special characters using the format provided</font>" parsley-rangelength-message="Telephone no should be exactly 9 characters long" class="form-control" value="<?php echo $phone; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                 <input type="text" name="address" id="address" required data-parsley-error-message="<font color='red'>Please enter your Address</font>" class="form-control" value="<?php echo $address; ?>">
                                                            </div>
                                                            <h4 class="page-header">Contact Details:</h4>
                                                            <div class="form-group">
                                                                <label><i class="fa fa-envelope-o fa-fw"></i> Email Address</label>
                                                              <input type="text" name="email" id="email" required data-parsley-type="email" data-parsley-error-message="<font color='red'>Please enter a valid Email</font>" class="form-control" class="form-control" value="<?php echo $email; ?>">
                                                            </div>
     
                                        
															 <button type="submit" id="submit"  class="btn btn-default">Update Profile</button>
                                                            <button type="submit" id="delete"  class="btn btn-red">Delete Profile</button>
																	<div id="question" style="display:none; cursor: default"> 
																<h4>Are you sure you want to delete?</h4> 
																<input type="button" id="yes" value="Yes" /> 
																<input type="button" id="no" value="No" /> 
																 </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="profilePicture">
                                                        <h3>Current Picture:</h3>
			
                                                        <img class="img-responsive img-profile" src="<?php echo base_url();?>images/<?php echo $photo;?>" alt="">
                                                        <br>
                                                        <?php echo form_open_multipart('admin/updateMemberPic', 'id="form1"  data-parsley-validate');?>
														 <div class="form-group">
														 <div hidden class="alert alert-success" id='load20'>
														 </div>
														  <div hidden class="alert alert-danger" id='load21'>
														 </div>
														 
                                                            <div class="form-group">
                                                                <label>Choose a New Image</label>
                                                                <input type="file" name="file" required data-parsley-error-message="<font color='red'>Please upload a photo</font>" id="file">
                                                                <p class="help-block"><i class="fa fa-warning"></i> Image must be no larger than 500x500 pixels. Supported formats: JPG, GIF, PNG</p>
                                                                <button type="submit"  class="btn btn-default">Update Profile Picture</button>
                                                                <button class="btn btn-green">Cancel</button>
																</div>
                                                            </div>
                                                        </form>
														
                                                    </div>
                                                    <div class="tab-pane fade in" id="changePassword">
                                                        <h3>Change Password:</h3>
														
															 <?php echo form_open('admin/changePassword', 'id="form2"  data-parsley-validate');?>
														  <div class="form-group">
														 <div hidden class="alert alert-success" id='load10'>
														 </div>
														  <div hidden class="alert alert-danger" id='load11'>
														 </div>
															<div class="form-group">
                                                                <label>Old Password</label>
																<input type="password" name="oldpassword" id="oldpassword" required data-parsley-error-message="<font color='red'>Please enter your old password</font>"class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                              <input type="password" name="newpassword" id="newpassword" required data-parsley-error-message="<font color='red'>Please enter your new password</font>" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Re-Type New Password</label>
                                                               <input type="password" name="retypepassword" id="retypepassword" required data-parsley-equalto="#newpassword" data-parsley-error-message="<font color='red'>Please confirm your new password</font>" class="form-control">
                                                            </div>
                                                            <button type="submit" id="changePass" class="btn btn-default">Update Password</button>
                                                         
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.portlet-body -->
                        </div>
                        <!-- /.portlet -->


                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

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

    <!-- THEME SCRIPTS -->
    <script src="<?php echo base_url();?>resources/js/flex.js"></script>
 <script src="<?php echo base_url();?>resources/js/blockUI.js" type="text/javascript" charset="utf-8"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.2/parsley.min.js"></script>

</body>

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
			$('#submit').click(function() {
				if ( $(this).parsley().isValid() ) {
			var csrftoken = getCookie('csrf_cookie_name');
			
				var $formdata = $('.form').serializeArray();
					
				$formdata.push({
					name: "csrf_cookie_name",
					value: csrftoken
				});
			$.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/admin/updateMember",
            data: $formdata,
            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
      			
            },
            cache: false,
            success: function(data) {
			$.blockUI();
		   if(data=='1'){
			$("#load").html("Profile successfully edited").show();
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
				}
return false;
});
$('#delete').click(function() {
	if ( $(this).parsley().isValid() ) {
	var csrftoken = getCookie('csrf_cookie_name');
			
	var $formdata = $('.form').serializeArray();
					
	$formdata.push({
	name: "csrf_cookie_name",
	value: csrftoken
	});
$.blockUI({ message: $('#question'), css: { width: '300px' } }); 

 $('#yes').click(function() { 
            // update the block message 
            $.blockUI({ message: "<h3><font color='red'>Deleting...</h3></font>" }); 
 			$.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/admin/deleteMember",
            data: $formdata,
            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
      			
            },
            cache: false,
            success: function(data) {
			$.blockUI();
		   if(data=='1'){
			$("#load").html("Profile successfully deleted").show();
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
	}
return false;
});

 $('#form1').submit(function() {
	if ( $(this).parsley().isValid() ) {
         var csrftoken = getCookie('csrf_cookie_name');
    
		
		var	_file = document.getElementById('file'); 
		if(_file.files.length === 0){
		var data = new FormData(this);

		}else{
			var data = new FormData(this);
			
			data.append('file', _file.files[0]);
			var file = _file.files[0];	
		}

		   $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/admin/updateMemberPic"+ "?csrf_cookie_name=" +  csrftoken,
            data: data,
            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
      			
            },
            cache: false,
			 contentType: false,
             processData: false,
            success: function(data) {
			$.blockUI();
		   if(data=='1'){
			  
			$("#load20").html("Profile Picture successfully edited").show();
			$("#load21").html(data).hide();
			}
			else{
			$("#load20").html(data).hide();
			$("#load21").html(data).show();
			}
			setTimeout($.unblockUI, 2000);
						

					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { // on error..
						
						
					}
				});
	}
return false;
});

$('#form2').submit(function(e) {
	if ( $(this).parsley().isValid() ) {
var csrftoken = getCookie('csrf_cookie_name');
			
var $formdata = $('#form2').serializeArray();
					
				$formdata.push({
					name: "csrf_cookie_name",
					value: csrftoken
				});
			$.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/admin/changePassword",
            data: $formdata,
            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && !this.crossDomain) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
      			
            },
            cache: false,
            success: function(data) {
			$.blockUI();
		   if(data=='1'){
			
			$("#load10").html("Your Password has Changed.").show();
			$("#load11").html(data).hide();
			}
			else{
			$("#load10").html(data).hide();
			$("#load11").html(data).show();
			}
			setTimeout($.unblockUI, 2000);
						

					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { // on error..
						
						
					}
				});
	}
e.preventDefault();
});

</script> 
</html>
