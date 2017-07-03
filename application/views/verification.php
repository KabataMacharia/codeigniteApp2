<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?> </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>resources/dist/css/AdminLTE.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- iCheck -->
     <link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/iCheck/square/blue.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
		<!-- parsely style -->
	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/parsely.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <h4>Verification</h4>
       <p id='load'></p>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Enter code for verification</p>
		 <?php echo form_open('verify/verifycode', 'class="form"  data-parsley-validate');?>
         <?php echo form_hidden('ajax', '1');?>
          <div class="form-group has-feedback">
            <input type="text" name="code" id="code" required class="form-control" placeholder="Enter code">
			
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
           <div class="row">
            <div class="col-xs-4">
             <button type="submit" id="submit" class="btn btn-success btn-block btn-flat">Verify</button>
            </div><!-- /.col -->
          </div>
       <?php form_close();?>
      </div><!-- /.login-box-body -->
	   </div><!-- /.login-box -->
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