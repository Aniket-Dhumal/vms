</div>
</div><!-- FOOTER -->

<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="row">
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="Name">Name</label>
							<input type="text" id="Name" class="form-control" <?=((@$edit)?'value="'.$edit->Name.'"':'');?> required name="Name" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="DOB">DOB</label>
							<input type="date" id="DOB" class="form-control" <?=((@$edit)?'value="'.$edit->DOB.'"':'value="'.date('Y-m-d').'"');?> required name="DOB" placeholder="Enter Here">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                        <label for="marathi_name">Gender</label>
						<select name="Gender" class="form-control">
							<option value="MALE">MALE</option>
							<option value="FEMALE">FEMALE</option>
							</select>
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="PAN">PAN No</label>
							<input type="text" id="PAN" class="form-control" <?=((@$edit)?'value="'.$edit->PAN.'"':'');?> required name="PAN" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="Aadhar">Aadhar</label>
							<input type="text" id="Aadhar" class="form-control" <?=((@$edit)?'value="'.$edit->Aadhar.'"':'');?> required name="Aadhar" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="Mobile">Mobile Number</label>
							<input type="number" id="Mobile" class="form-control" <?=((@$edit)?'value="'.$edit->Mobile.'"':'');?> required name="Mobile" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="Pincode">Pincode</label>
							<input type="number" id="Pincode" class="form-control" <?=((@$edit)?'value="'.$edit->Pincode.'"':'');?> required name="Pincode" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="Address">Address</label>
							<input type="number" id="Address" class="form-control" <?=((@$edit)?'value="'.$edit->Address.'"':'');?> required name="Address" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="Documents">Documents</label>
							<input type="file" id="Documents" class="form-control" <?=((@$edit)?'value="'.$edit->Address.'"':'');?> required name="Address" placeholder="Enter Here">
						</div>
					</div>


                  
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2019 <a href="<?=base_url();?>">Matrubhumi</a>. Designed by <a href="https://dktechs.in">DK Technos</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY SCRIPTS -->
		<script src="<?=base_url();?>template/assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="<?=base_url();?>template/assets/js/vendors/bootstrap.bundle.min.js"></script>

		<!-- SPARKLINE -->
		<script src="<?=base_url();?>template/assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE -->
		<script src="<?=base_url();?>template/assets/js/vendors/circle-progress.min.js"></script>

		<!-- RATING STAR -->
		<script src="<?=base_url();?>template/assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- C3.JS CHART PLUGIN -->
		<script src="<?=base_url();?>template/assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="<?=base_url();?>template/assets/plugins/charts-c3/c3-chart.js"></script>

		<!-- INPUT MASK PLUGIN-->
		<script src="<?=base_url();?>template/assets/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- SIDE-MENU JS -->
		<script src="<?=base_url();?>template/assets/plugins/toggle-menu/sidemenu.js"></script>

		<!-- CHARTJS CHART -->
		<script src="<?=base_url();?>template/assets/plugins/chart/Chart.bundle.js"></script>
		<script src="<?=base_url();?>template/assets/plugins/chart/utils.js"></script>

		<!-- PIETYCHART -->
		<script src="<?=base_url();?>template/assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="<?=base_url();?>template/assets/plugins/peitychart/peitychart.init.js"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="<?=base_url();?>template/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- CHARTS PLUGIN -->
		<script src="<?=base_url();?>template/assets/plugins/highcharts/highcharts.js"></script>

		<!-- SIDEBAR JS -->
		<script src="<?=base_url();?>template/assets/plugins/sidebar/sidebar.js"></script>

		<!-- INDEX-SCRIPTS -->
		<script src="<?=base_url();?>template/assets/js/index.js?3"></script>
		<script src="<?=base_url();?>template/assets/js/index1.js?3"></script>

		<!-- CUSTOM JS-->
		<script src="<?=base_url();?>template/assets/js/custom.js"></script>
		
		<!-- DATA TABLE -->
		<script src="<?=base_url();?>template/assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="<?=base_url();?>template/assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="<?=base_url();?>template/assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="<?=base_url();?>template/assets/js/tech.js?3"></script>
		  <!--Export table buttons-->
		  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
		<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
		<script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
<script>

</script>
	
	</body>
</html>