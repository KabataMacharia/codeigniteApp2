	
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Application</title>

    <!-- GLOBAL STYLES -->
    <link href="<?php echo base_url();?>resources/css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>resources/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->

    <!-- THEME STYLES -->
    <link href="<?php echo base_url();?>resources/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>resources/css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES -->
    <link href="<?php echo base_url();?>resources/css/demo.css" rel="stylesheet">
	<!-- parsely style -->
	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/parsely.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>  
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
                            <h4><strong>Login!</strong>
                            </h4>
							<p id='load'></p>
                        </div>
                        <div class="portlet-widgets">
                          
							<a href="<?php echo base_url();?>index.php/admin/registration"><i class="fa fa-plus-circle"></i>New User</a>
							 
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                         <?php echo form_open('admin/login', 'class="form"  data-parsley-validate');?>
                            <fieldset>
                                <div class="form-group">
                 
									<input type="text" name="email_address" id="email_address" required data-parsley-type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                                <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <br>
                             <button type="submit" id="submit" class="btn btn-success btn-block btn-flat">Login</button>
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
$.ajax({
url: "<?php echo base_url(); ?>" + "index.php/admin/login",
type: 'POST',
data: $('.form').serialize(),
success: function(data) {
	$.blockUI();
if(data=='1'){
	window.location.href = '<?php echo base_url(); ?>index.php/verify' 
	}
	else{
	$("#load").html(data);
    }
	setTimeout($.unblockUI, 2000);
},error: function(XMLHttpRequest, textStatus, errorThrown) {
console.log(XMLHttpRequest);

	   }
});
e.preventDefault();
});

</script> 

</html>
