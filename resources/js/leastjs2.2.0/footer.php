    <script src="<?php echo base_url()?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()?>bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url()?>bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url()?>js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>
	 <script src="<?php echo base_url()?>dist/js/app.js"></script>
	 <script src="<?php echo base_url()?>dist/js/select2/select2.full.min.js" type="text/javascript"></script>
	  <script src="<?php echo base_url()?>dist/js/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	  <script src="<?php echo base_url()?>dist/js/jquery.filtertable.min.js"></script>
	  <script src="<?php echo base_url()?>dist/js/tinymce/tinymce.min.js"></script>
	  <script type="text/javascript" src="<?php echo base_url()?>dist/js/tinymce/tinymce.min.js"></script>
	   <script src="<?php echo base_url()?>dist/js/jquery.blockUI.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
		tinymce.init({
	
    selector: "textarea",
    theme: "modern",
	editor_selector : "mceEditor",

    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
    toolbar2: "preview  | forecolor  ",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
        $('table').filterTable({ // apply filterTable to all tables on this page
            inputSelector: '#input-filter' // use the existing input instead of creating a new one
        });
    });
	 </script>
	 	     <script type="text/javascript">
 $(".select2").select2();  
    </script>
		 <script>
    $(document).ready(function() {
		 $('#reservation2').datepicker();
		 $('#reservation3').datepicker();
		 
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    });

    </script>
	<script>

  $("#saveScannedEmployers").click(function () {
    var EmployeeNos = $('input[name="EmployeeNos"]:checked').map(function() {
    return this.value;
}).get();
var JobCode =  $("#JobCode").val();
var EmployerNo =  $("#EmployerNo").val();
	   document.getElementById("loading2").innerHTML="<img src='<?php echo base_url().'SmallLoading.gif'?>'> Please Wait....";
            $.ajax({
                type: "POST",
                url: '<?php echo base_url()?>'+"Home/saveScannedEmployers"+"?EmployeeNos="+EmployeeNos+"&JobCode="+JobCode+"&EmployerNo="+EmployerNo,
                data: EmployeeNos,
                timeout: 6000,
                error: function (request, error) {
				document.getElementById("loading2").innerHTML=request.status;
                },
                success: function (response) 
				{	
					
				if(response=="Record Saved Successfully.")
				{
				
					    $.blockUI({message: '<h3>Record Saved Successfully.</h3>'}); 
						setTimeout(function() { 
						$.unblockUI({ 
						onUnblock: function(){ 
						window.location="<?php echo base_url()?>Home/admin";
						} 
						}); 
						}, 2000); 
				}else{
					document.getElementById("loading2").innerHTML=response;
				}
				
                }
			
            });
			
			
	  return false;
});

 $("#loginbtn").click(function () {
	
  var dataString = $('#login').serialize();
   document.getElementById("loading2").innerHTML="<img src='<?php echo base_url().'SmallLoading.gif'?>'> Loading...";
            $.ajax({
                type: "POST",
                url: '<?php echo base_url()?>'+$('#login').attr('action'),
                data: dataString,
                timeout: 6000,
                error: function (request, error) {
				document.getElementById("loading2").innerHTML=request.status;
                },
                success: function (response) 
				{	
				
						if(response==1)
						{
					    $.blockUI({message: '<h3>You are now Logged in. Access Granted.</h3>'}); 
						setTimeout(function() { 
						$.unblockUI({ 
						onUnblock: function(){ 
						window.location="<?php echo base_url()?>Home/admin";
						} 
						}); 
						}, 2000); 
						}else{
						document.getElementById("loading2").innerHTML=response;
						}
                }
			
            });
			
			
	  return false;
});
		</script>