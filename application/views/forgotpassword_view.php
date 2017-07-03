 
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
                            <h4><strong>Retrieve your Password</strong>
                            </h4>
							 <p id='load'></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                          <?php echo form_open('admin/forgotPassword', 'class="form"  data-parsley-validate');?>
                            <fieldset>
                                <div class="form-group">
									<input type="text" name="email" id="email" required data-parsley-type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                     <input type="password" name="password" id="password" required class="form-control" placeholder="New Password">
                                </div>
								<div class="form-group">
									<input type="password" name="cpassword" id="cpassword" required data-parsley-equalto="#password" class="form-control" placeholder="Confirm Password">
                                </div>
              
                                <br>
                             <button type="submit" id="submit" class="btn btn-success btn-block btn-flat">Recover Password</button>
		
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
    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();?>resources/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- HISRC Retina Images -->
    <script src="<?php echo base_url();?>resources/js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="<?php echo base_url();?>resources/js/flex.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>   
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.2/parsley.min.js"></script>
              <script src="<?php echo base_url();?>resources/js/blockUI.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

$('.form').submit(function(e) {

document.getElementById('load').innerHTML = "<img src='<?php echo base_url();?>SmallLoading.gif' />Loading...";

$.ajax({
url: "<?php echo base_url(); ?>" + "index.php/admin/forgotPassword",
type: 'POST',
data: $('.form').serialize(),
success: function(data) {
if(data=='1'){
	$("#load").hide();
	window.location.href = '<?php echo base_url(); ?>index.php/login' 

	}
	else{
	$("#load").html(data);
    }
}
});
e.preventDefault();
});


</script> 
</html>