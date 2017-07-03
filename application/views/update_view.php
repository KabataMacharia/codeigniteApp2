   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <h3><?php echo 'welcome '.$_SESSION['username']; ?></h3>
 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
	   <div class="login-box">
      <div class="login-logo">
        <h4>Edit Your Profile</h4>
       <p id='load'></p>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
	   <?php echo form_open('admin/updateMember', 'class="form"  data-parsley-validate');?>
         <?php echo form_hidden('ajax', '1');?>
		  <div class="form-group has-feedback">
            <input type="text" name="fname" id="fname" required class="form-control" value="<?php echo $fname; ?>" placeholder="First Name ">
          </div>
		  <div class="form-group has-feedback">
            <input type="text" name="lname" id="lname" required class="form-control" value="<?php echo $lname; ?>" placeholder="Last Name ">
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="email" id="email" required data-parsley-type="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email">

          </div>
           <div class="row">
            <div class="col-xs-6">
             <button type="submit" id="submit" class="btn btn-success btn-block btn-flat">Edit Profile</button><br>
            </div><!-- /.col -->
	         <div class="col-xs-6">
             <button type="submit" id="delete" class="btn btn-success btn-block btn-flat">Delete Profile</button><br>
            </div><!-- /.col -->
			<div id="question" style="display:none; cursor: default"> 
        <h4>Are you sure you want to delete?</h4> 
        <input type="button" id="yes" value="Yes" /> 
        <input type="button" id="no" value="No" /> 
         </div>
          </div>
       <?php form_close();?>
      </div><!-- /.login-box-body -->
	       </div><!-- /.login-box -->
 <!-- work space -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
		<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>   
			    <script src="<?php echo base_url();?>resources/js/blockUI.js" type="text/javascript" charset="utf-8"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.2/parsley.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
	<script src="<?php echo base_url();?>resources/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- iCheck -->
	<script src="<?php echo base_url();?>resources/plugins/iCheck/icheck.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$('#submit').click(function() {
	var form_data = {
		fname:$("#fname").val(),
		lname:$("#lname").val(),
		email:$("#email").val()
	};
$.ajax({
url: "<?php echo base_url(); ?>" + "index.php/admin/updateMember",
type: 'POST',
data: form_data,
success: function(data) {
	$.blockUI();
if(data=='1'){
  $("#load").hide();
	window.location.href = '<?php echo base_url(); ?>index.php/welcome' 
	}
	else{
		
	$("#load").html(data);
    }
	setTimeout($.unblockUI, 2000);
	}

	
});
return false;
});
$('#delete').click(function() {
$.blockUI({ message: $('#question'), css: { width: '300px' } }); 

 $('#yes').click(function() { 
            // update the block message 
            $.blockUI({ message: "<h3><font color='red'>Deleting...</h3></font>" }); 
 
            $.ajax({ 
                url: "<?php echo base_url(); ?>" + "index.php/admin/deleteMember",
				type: 'POST',
                cache: false, 
                complete: function() { 
                  
                    $.unblockUI(); 
                } 
            }); 
        }); 
		   $('#no').click(function() { 
            $.unblockUI(); 
            return false; 
        }); 

return false;
});
</script> 
