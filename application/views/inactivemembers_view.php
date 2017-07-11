
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Registered Users
                               
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>index.php/welcome">Dashboard</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin ADVANCED TABLES ROW -->
                <div class="row">

                    <div class="col-lg-12">

                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Inactive Users</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
							<div class="form-group">
							 <div hidden class="alert alert-success" id='load'>
						     </div>
							  <div hidden class="alert alert-danger" id='load1'>
						     </div>
                                <div class="table-responsive">
								 <?php echo form_open('admin/activateMember', 'id="form"  data-parsley-validate');?>
                                    <table id="example2" class="table table-striped table-bordered table-hover table-green">
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
                            </div>
                            <!-- /.portlet-body -->
							<div id="question" style="display:none; cursor: default"> 
							<h4>Are you sure you want to continue?</h4> 
							<input type="button" id="yes" value="Yes" /> 
							<input type="button" id="no" value="No" /> 
							 </div>
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
	 
 }

 </script> 