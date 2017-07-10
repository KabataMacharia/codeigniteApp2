
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Userrole List
                                
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
                                             <?php echo form_open('admin/updateUserrole', 'id="form"  data-parsley-validate');?>
                                                <div hidden class="alert alert-success" id='load'>
												 </div>
												  <div hidden class="alert alert-danger" id='load1'>
												 </div>
												 <?php if($userrole==""){?>
													<p style="color:red"><?php echo "The userrole record does not exists"; ?></p>
											     <?php } ?>
												<div class="form-group">
                                                  <label>User role</label>
												  	<input type="hidden" class="form-control" id="id" name="id" 
													value=" <?php if($userrole!=""){ echo $userrole->id; } ?>">
                                                  <input type="text" name="name" id="name" required data-parsley-error-message="<font color='red'>Please enter Country Name</font>" class="form-control"  value=" <?php if($userrole!=""){ echo $userrole->userrole; } ?>">
                                                </div>
                 
                                                <button type="submit" class="btn btn-default">Edit</button>
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
            url: "<?php echo base_url(); ?>" + "index.php/admin/updateUserrole",
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
			
			$("#load").html("userrole Edited Successfuly.").show();
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

 </script> 
    