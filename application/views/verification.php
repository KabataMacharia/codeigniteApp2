
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
                            <h4><strong>Enter Verification Code</strong>
                            </h4>
							<p id='load'></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <?php echo form_open('verify/verifycode', 'class="form"  data-parsley-validate');?>
                            <fieldset>
                                <div class="form-group">
                 
								 <input type="text" name="code" id="code" required class="form-control" placeholder="Enter code">
                                </div>

                                <br>
                             <button type="submit" id="submit" class="btn btn-success btn-block btn-flat">Verify</button>
                            </fieldset>
                            <br>
                            <p class="small">
                                <a href="<?php echo base_url();?>index.php/admin/password">Forgot your password?</a>
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
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.2/parsley.min.js"></script>
              <script src="<?php echo base_url();?>resources/js/blockUI.js" type="text/javascript" charset="utf-8"></script>
    <!-- Bootstrap 3.3.5 -->
	<script src="<?php echo base_url();?>resources/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- iCheck -->
	<script src="<?php echo base_url();?>resources/plugins/iCheck/icheck.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

<script type="text/javascript">

$('.form').submit(function(e) {
$.ajax({
url: "<?php echo base_url(); ?>" + "index.php/verify/verifycode",
type: 'POST',
data: $('.form').serialize(),
success: function(data) {
$.blockUI();

if(data=='1'){
	window.location.href = '<?php echo base_url(); ?>index.php/welcome' 
	}else{
	$("#load").html(data);
    }
	setTimeout($.unblockUI, 2000);
}
});
e.preventDefault();
});

</script> 
</html>