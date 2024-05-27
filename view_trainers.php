<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
							<?php
		if(isset($_GET['view_trainers'])) { 
	?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
										<th>Trainer No</th>
										<th>Trainer Name</th>
										<th>Trainer Class</th>
										<th>Trainer Contact</th>
										<th>Edit</th>
										<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
										<th>Trainer No</th>
										<th>Trainer Name</th>
										<th>Trainer Class</th>
										<th>Trainer Contact</th>
										<th>Edit</th>
										<th>Delete</th>
                                        </tr>
                                    </tfoot>
							
                                    <tbody>
                                        
									<?php 
										$i=0;
											$sel_trainer="SELECT * FROM trainer";
											$run_trainer=mysqli_query($con, $sel_trainer);
											while ($row_trainer=mysqli_fetch_array($run_trainer)) {
												$tran_id=$row_trainer['tran_id'];
												$tran_name=$row_trainer['tran_name'];
												$tran_class=$row_trainer['tran_class'];
												$tran_contact=$row_trainer['tran_contact'];

												$i++;
											
										?>
										<tr align="">
			<td><?php echo $i; ?></td>
			<td><?php echo $tran_name; ?></td>
			<td><?php echo $tran_class; ?></td>
			<td><?php echo $tran_contact; ?></td>
			<td><a href="index.php?edit_tran=<?php echo $tran_id; ?>">Edit</a></td>
			<td><a href="index.php?delete_tran=<?php echo $tran_id; ?>">Delete</a></td>
		</tr>
		<?php } ?>
                                           
                                  
                                    </tbody>
                                </table>
								<?php }
	    							?>
                            </div>
                        </div>
                    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

