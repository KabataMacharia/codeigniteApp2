<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>

<style>label {
	display:block;

}
</style>
<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
</head>
<body>
  <p id='load'></p>
<?php  echo form_open('verify/verifycode',array('class'=>'form'));?>
<?php echo form_hidden('ajax', '1');?>
<p>

<?php
echo form_label('Code:','code');
echo form_input('code','','id="code"');
?>
</p>

<p>
<?php
echo form_submit('submit','Verify','id="submit"');?><p/>
<?php echo form_close();?>


</body>
<script type="text/javascript">

$('.form').submit(function(e) {
document.getElementById('load').innerHTML = "<img src='<?php echo base_url();?>SmallLoading.gif' />Loading...";
console.log($('.form').serialize());
$.ajax({
url: "<?php echo base_url(); ?>" + "index.php/verify/verifycode",
type: 'POST',
data: $('.form').serialize(),
success: function(data) {
	
if(data=='1'){
		$("#load").hide();
	window.location.href = '<?php echo base_url(); ?>index.php/welcome' 

	}else{
	$("#load").html(data);
    }
}
});
e.preventDefault();
});

</script> 
</html>