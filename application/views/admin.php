 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
		 
            <div class="col-md-8" id="left">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Product List</h3>
				      <?php if(!isset($product)){ ?>
					    <p style="color:red"><?php echo $error; ?></p>
				  <?php } ?>
					  <p id='load'></p>
                </div><!-- /.box-header -->
                <div class="box-body">
                <table id="credit" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>Product</th>
						<th>Quantity</th>
						<th>Subtotal</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody id="view">
                     	<?php
						if(isset($product)){
					  $q=$this->db->query("SELECT receipt.id,receipt.credit_id,receipt.quantity,receipt.subtotal,product.product_name FROM receipt 
					  INNER JOIN product ON receipt.product_id=product.product_id WHERE receipt.deleted='N' AND receipt.bill_id='system' 
					  AND receipt.credit_id ='{$creditid}' AND receipt.firstapproval='N' AND receipt.secondapproval='N'");
					$showData=$q->result();
					$s = array();
					foreach($showData as $row)
				
						{
							$s[] = $row->subtotal;
							?>
					<tr id="records">

			<td><?php echo $row->product_name; ?></td>
			<td><?php echo number_format($row->quantity,0,'.',''); ?></td>
			<td><?php echo number_format($row->subtotal,2,'.',''); ?></td>
			<td><?php $id=$row->id;?>
			<a  href="#" class="delete" onclick="deleterecord('<?php echo $id; ?>')">Delete</a></td>
			</tr>
			<?php }
						}
			?>		
       </tbody>
        </table>

	<?php echo form_open('adminapprove/ajax_approve',array('class'=>'billform'));?>
	<div class="box-body">
	<div class="form-group">
	<label for="total">Total:</label>
	<input type="text" value="<?php if(isset($product)){ echo number_format(array_sum($s),2,'.',''); } ?>" id="total" name="total" value=" " readonly="readonly">
	</div>
	<div class="form-group">
	<input type="hidden" value="<?php if(isset($product)){ echo $creditid; } ?>" id="creditid" name="credit"/>
	</div>
	<!-- textarea -->
     <div class="form-group">
     <label>Comment</label>
     <textarea class="form-control" rows="3" placeholder="Comment" id='comment'></textarea>
     </div>
	</div>
<div class="box-footer">
<div class="col-xs-3">
  <button type="button" id="btn" class="btn btn-success">Approve</button>
   </div>
   <div class="col-xs-9">
	 <button type="button" id="btn1" class="btn btn-warning">Reject</button>
	</div><!-- /.col -->
	</div>
</form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
				    <div class="col-md-4" id="left">
				<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Products Instock</h3>
				   <div id="message" style="color:red"></div>
                </div><!-- /.box-header -->
                <div class="box-body">
				      <table id="product" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>Product</th>
						<th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody id="view">
                     	<?php
					if(isset($product)){
					foreach($product as $row)
				
						{
							
							?>
					<tr id="records">

			<td><?php echo $row->product_name; ?></td>
			<td><?php echo number_format($row->quantity,0,'.',''); ?></td>
			</tr>
			<?php }
					}
			?>		
       </tbody>
        </table>
 </div><!-- /.box-body -->
              </div><!-- /.box -->

          </div><!-- /.row -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	    <script type="text/javascript">
$('#btn').click(function() {
	var form_data = {
		total:$("#total").val(),
		credit:$("#creditid").val(),
		comment:$("#comment").val(),
		ajax:'1'
	};
	document.getElementById('load').innerHTML = "<img src='<?php echo base_url();?>SmallLoading.gif' />Loading...";
$.ajax({
url: "<?php echo base_url(); ?>" + "adminapprove/ajax_approve",
type: 'POST',
data: form_data,
success: function(data) {
		$("#load").html(data);
		  window.location="<?php echo base_url(); ?>";
	}

	
});
return false;
});
$('#btn1').click(function() {
	var form_data = {
		total:$("#total").val(),
		credit:$("#creditid").val(),
		comment:$("#comment").val(),
		ajax:'1'
	};
document.getElementById('load').innerHTML = "<img src='<?php echo base_url();?>SmallLoading.gif' />Loading...";
$.ajax({
url: "<?php echo base_url(); ?>" + "adminapprove/ajax_reject",
type: 'POST',
data: form_data,
success: function(data) {
	$("#load").html(data);
	  window.location="<?php echo base_url(); ?>";	 
	}

	
});
return false;
});
  function deleterecord(id){
	 var x= confirm("Are you sure you want to delete?");
	 if(x){
      var href = "<?php echo base_url("adminapprove/delete?id") ; ?>"
       $.ajax({
        type: 'POST',
        url: href,
		data:{id:id},
        success: function(data) {
			alert('Record deleted Successfully');
		   location.reload();
        }
      });
	}else{
		var url='<?php echo base_url(); ?>adminapprove/index';
	}
 }



 </script>


