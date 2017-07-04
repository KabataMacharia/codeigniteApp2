	
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
                            <h4><strong>Register with Login App</strong>
                            </h4>
							 <p id='load'></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                            <?php echo form_open_multipart('admin/registermember', 'class="form"  data-parsley-validate');?>
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
                                </div><br>
								<div class="form-group">
								<label>Upload Profile Pic</label>
								<input type="file" name="file" id="file" class="">
                                </div>
                                <br>
                             <button type="submit" id="submit" onclick="saveMember()" class="btn btn-success btn-block btn-flat">Register</button>
		
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
 function saveMember() {
var	_file = document.getElementById('file'); 
var fname = document.getElementById("fname").value;
var lname = document.getElementById("lname").value;
var	email = document.getElementById('email').value; 
var password= document.getElementById("password").value;
var cpassword= document.getElementById("cpassword").value;
		if(_file.files.length === 0){
    var data = new FormData();

	}else{
		var data = new FormData();
		
		data.append('file', _file.files[0]);
		var file = _file.files[0];	
	}
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
    document.getElementById("load").innerHTML= xmlhttp.responseText;
    }
  }
$.blockUI();
xmlhttp.open("POST","<?php echo base_url(); ?>" + "index.php/admin/registermember?fname="+fname+"&lname="+lname+"&email="+email+"&password="+password+"&cpassword="+cpassword,true);
xmlhttp.send(data);
setTimeout($.unblockUI, 2000);
}

</script> 
