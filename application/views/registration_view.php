
		   <body class="login">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-banner text-center">
                    <h1><i class="fa fa-gears"></i>Login App</h1>
                </div>
                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title">
                            <h4><strong>Register with Login App</strong>
                            </h4>
							 <p id='load'></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                            <?php echo form_open('admin/registermember', 'class="form"  data-parsley-validate');?>
                            <fieldset>
                                <div class="form-group">
								 <input type="text" name="fname" id="fname" required class="form-control" placeholder="First Name ">
                                </div>
                                <div class="form-group">
								<input type="text" name="lname" id="lname" required class="form-control" placeholder="Last Name ">
                                </div>
								<div class="form-group">
								<input type="text" name="email" id="email" required data-parsley-type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
								<input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                                </div>
								<div class="form-group">
								<input type="password" name="cpassword" id="cpassword" required data-parsley-equalto="#password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <br>
                             <button type="submit" id="submit" class="btn btn-success btn-block btn-flat">Register</button>
		
                            </fieldset>
                            <br>
                            <p class="small">
                                <a href="<?php echo base_url();?>index.php/admin">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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

$('.form').submit(function(e) {

document.getElementById('load').innerHTML = "<img src='<?php echo base_url();?>SmallLoading.gif' />Loading...";

$.ajax({
url: "<?php echo base_url(); ?>" + "index.php/admin/registermember",
type: 'POST',
data: $('.form').serialize(),
success: function(data) {
	$.blockUI();
if(data=='1'){
	alert('f');
		$("#load").hide();
	window.location.href = '<?php echo base_url(); ?>index.php/login' 
	}
	else{
		
	$("#load").html(data);
    }
	setTimeout($.unblockUI, 2000);
}
});
e.preventDefault();
});


</script> 
