
        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Registered Users
                               
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>index.php/welcome">Dashboard</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin ADVANCED TABLES ROW -->
                <div class="row">

                    <div class="col-lg-12">

                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Activate Users</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-bordered table-hover table-green">
                                        <thead>
                                            <tr>
                                                <th>Member Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
												<th>Telephone No</th>
												<th>Edit</th>
												<th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody id="view">
											

									<?php
								foreach($members as $result)
							
									{
											
									?>
								<tr id="records">
						<td><?php 
						if($result->photo==''){
											$file='';
									}else{
									$file=base_url().'images/'.$result->photo;
									?>
									<img src="<?php echo $file;?>" height="50" width="50"
									/>
									<?php }
						?>
						
						<?php echo $result->fname." ".$result->lname; ?></td>
						<td><?php echo $result->email; ?></td>
						<td><?php echo $result->address; ?></td>
						<td><?php echo $result->phone; ?></td>
						<td><?php $id=$result->member_no;?>
						<a href="<?php echo base_url("membereditview?id=$id") ; ?>" class="edit" onclick="editrecord('<?php echo $id;?>')" style="color:blue"> Edit</a></td>
						 <td><?php $id=$result->member_no;?>
							<a  href="#" class="delete" onclick="deleterecord('<?php echo $id; ?>')" style="color:red">Delete</a></td>
								
						</tr>
						<?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.portlet-body -->
                        </div>
                        <!-- /.portlet -->

                    </div>
                    <!-- /.col-lg-12 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->

    </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();?>resources/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="<?php echo base_url();?>resources/js/plugins/popupoverlay/defaults.js"></script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="img/profile-pic.jpg" alt="">
            <h3>
                <i class="fa fa-sign-out text-green"></i> Ready to go?
            </h3>
            <p>Select "Logout" below if you are ready<br> to end your current session.</p>
            <ul class="list-inline">
                <li>
                    <a href="login.html" class="btn btn-green">
                        <strong>Logout</strong>
                    </a>
                </li>
                <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#logout -->
