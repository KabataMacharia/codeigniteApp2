
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Country List
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="index-2.html">Dashboard</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row">

                    <!-- begin LEFT COLUMN -->
                    <div class="col-lg-4">

                        <div class="row">

                            <!-- Basic Form Example -->
                            <div class="col-lg-12">

                                <div class="portlet portlet-default">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Userrole Form</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#basicFormExample"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="basicFormExample" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                             <?php echo form_open('admin/adduserrole', 'id="form"  data-parsley-validate');?>
                                                <div hidden class="alert alert-success" id='load'>
												 </div>
												  <div hidden class="alert alert-danger" id='load1'>
												 </div>
												<div class="form-group">
                                                  <label>Userrole</label>
                                                  <input type="text" name="name" id="name" required data-parsley-error-message="<font color='red'>Please enter user role</font>" class="form-control">
                                                </div>
                                   
                                                
                                               <button type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portlet -->
                            </div>
                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Basic Form Example -->
                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.col-lg-6 -->
                    <!-- end LEFT COLUMN -->

                    <!-- begin RIGHT COLUMN -->
                    <div class="col-lg-8">

                        <div class="row">

                          

                            <!-- Input Sizing -->
                            <div class="col-lg-12">
                                       <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Registered Userroles</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
							     <div hidden class="alert alert-success" id='load2'>
								 </div>
								 <div hidden class="alert alert-danger" id='load3'>
								</div>
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-bordered table-hover table-green">
                                        <thead>
                                            <tr>
                                                <th>Userrole</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="view">
                                      
					<?php
									if($userroles!="")
									{
								$data['userroles'] = $userroles;
		
								foreach($userroles as $result)
							
									{
											
									?>
						<tr id="records">
						<td><?php echo $result->userrole; ?></td>
						<td><?php $id=$result->id;?>
			           <a href="<?php echo base_url("index.php/admin/editUserrole?id=$id") ; ?>" class="edit" onclick="editrecord('<?php echo $id;?>')" style="color:red"> Edit</a></td>
						</td>
						<td><?php $id=$result->id;?>
						<a href="#" onclick="deleteuserrole('<?php echo $id;?>')" style="color:red">Delete</a>
						</td>	 
						</tr>
						<?php } }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
							<div id="question" style="display:none; cursor: default"> 
							<h4>Are you sure you want to continue?</h4> 
							<input type="button" id="yes" value="Yes" /> 
							<input type="button" id="no" value="No" /> 
							 </div>
                            <!-- /.portlet-body -->
                        </div>
                                <!-- /.portlet -->
                            </div>
                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Form Controls -->

                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.col-lg-6 -->
                    <!-- end RIGHT COLUMN -->

                </div>
                <!-- /.row -->
                <!-- end MAIN PAGE ROW -->

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

$('#form').submit(function(e) {
	if ( $(this).parsley().isValid() ) {
var csrftoken = getCookie('csrf_cookie_name');
			
var formdata = $('#form').serializeArray();
					
				formdata.push({
					name: "csrf_cookie_name",
					value: csrftoken
				});
			$.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/admin/adduserrole",
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
			
			$("#load").html("Userrole Saved Successfuly.").show();
			$("#load1").html(data).hide();
			location.reload();
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
e.preventDefault();
});

 function deleteuserrole(id){
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
            $.blockUI({ message: "<h3><font color='red'>Deleting...</h3></font>" }); 
 			$.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "index.php/admin/deleteUserrole",
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
			  
			 $("#load2").html("Userrole successfully deleted").show();
			$("#load3").html(data).hide();
			location.reload();
			}
			else{
			$("#load2").html(data).hide();
			$("#load3").html(data).show();
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

 function editrecord(id){
	var csrftoken = getCookie('csrf_cookie_name');
			
	var formdata = $('#form').serializeArray();
	formdata.push({name: "id",
	value: id});	
	formdata.push({
	name: "csrf_cookie_name",
	value: csrftoken
	});
	 
	  var href = "<?php echo base_url("index.php/admin/editUserrole") ; ?>"
      $.ajax({
        type: 'POST',
        url: href,
		data:formdata,
        success: function(data) {
				 
        }
      });
	 
 }
 </script> 
    