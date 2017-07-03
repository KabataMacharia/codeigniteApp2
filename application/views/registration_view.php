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
	<!-- parsely style -->
	<link rel="stylesheet" href="<?php echo base_url();?>resources/css/parsely.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url();?>resources/dist/css/AdminLTE.min.css" type="text/css" media="screen" title="no title" 
    charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url();?>resources/css/parsely.css" type="text/css" media="screen" title="no title" 
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
        <h4>Register with Login App</h4>
       <p id='load'></p>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
	   <?php echo form_open('admin/registermember', 'class="form"  data-parsley-validate');?>
         <?php echo form_hidden('ajax', '1');?>
		  <div class="form-group has-feedback">
            <input type="text" name="fname" id="fname" required class="form-control" placeholder="First Name ">
          </div>
		  <div class="form-group has-feedback">
            <input type="text" name="lname" id="lname" required class="form-control" placeholder="Last Name ">
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="email" id="email" required data-parsley-type="email" class="form-control" placeholder="Email">

          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
        
          </div>
		  <div class="form-group has-feedback">
            <input type="password" name="cpassword" id="cpassword" required data-parsley-equalto="#password" class="form-control" placeholder="Confirm Password">
        
          </div>
           <div class="row">
            <div class="col-xs-8">
             <button type="submit" id="submit" class="btn btn-success btn-block btn-flat">Register</button><br>
            </div><!-- /.col -->
			    <div class="col-xs-4">
              <a href="<?php echo base_url();?>index.php/admin">Login</a><br>
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
if(data=='1'){
	alert('f');
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
