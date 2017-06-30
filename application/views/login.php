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
        <h2>Login</h2>
       <p id='load'></p>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php echo form_open('login/ajax_check',array('class'=>'jsform'));?>
          <div class="form-group has-feedback">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
			
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
           <div class="row">
            <div class="col-xs-4">
              <button type="button" id="submit" class="btn btn-success btn-block btn-flat">Login</button>
            </div><!-- /.col -->
          </div>
       <?php form_close();?>
        <a href="<?php echo base_url();?>resetpassword/index">I forgot my password</a><br>
      </div><!-- /.login-box-body -->
	       </div><!-- /.login-box -->
		   
	    <!-- jQuery 2.1.4 -->
	<script src="<?php echo base_url();?>resources/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Bootstrap 3.3.5 -->
	<script src="<?php echo base_url();?>resources/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- iCheck -->
	<script src="<?php echo base_url();?>resources/plugins/iCheck/icheck.min.js" type="text/javascript" charset="utf-8"></script>
	
<script type="text/javascript">

$('#submit').click(function() {
var form_data = {
email : $('#email').val(),
password : $('#password').val(),
ajax : '1'
};
document.getElementById('load').innerHTML = "<img src='<?php echo base_url();?>SmallLoading.gif' />Loading...";
$.ajax({
url: "<?php echo base_url(); ?>" + "login/ajax_check",
type: 'POST',
data: form_data,
success: function(data) {
	if(data=='1'){
		$("#load").hide();
		    window.location.href = '<?php echo base_url(); ?>home/index'    

	}else{
	$("#load").html(data);
}
}
});
return false;
});

</script> 

