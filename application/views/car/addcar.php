<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<?=@$this->session->flashdata('result');?>
			</div>
			<div class="card-body">
			<form action="<?=base_url();?>Admin/addcar<?=((@$edit)?'/'.$edit->id:'');?>" method="post">
				<div class="row">
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="marathi_name">Loan Number</label>
							<input type="text" id="empid" class="form-control" <?=((@$edit)?'value="'.$edit->empid.'"':'');?> required name="empid" placeholder="Enter Here">
						</div>
					</div>


                    <div class="col-md-6">
						<div class="form-group">
                        <label for="marathi_name">Loan Type</label>
						<select name="loantypes" class="form-control">
							<?php
								foreach ($loantypes as $row) {
									echo '<option value="'.$row->id.'">'.$row->name.'</option>';
								}
							?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                        <label for="loandate">Loan Date</label>
							<input type="date" id="loandate" class="form-control" value="<?=((@$edit)?''.$edit->loandate.'':date('Y-m-d'));?>"   name="loandate" >
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                        <label for="Maturitydate">Maturity Date</label>
							<input type="date" id="Maturitydate" class="form-control" value="<?=((@$edit)?''.$edit->maturitydate.'':date('Y-m-d'));?>"   name="maturitydate" >
						</div>
					</div>
					
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="totainsta">Total Installment</label>
							<input type="number" id="totainsta" class="form-control" <?=((@$edit)?'value="'.$edit->totainsta.'"':'');?> required name="totainsta" placeholder="Enter Here">
						</div>
					</div>
					
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="dueinsta">Due Installment</label>
							<input type="number" id="dueinsta" class="form-control" <?=((@$edit)?'value="'.$edit->dueinsta.'"':'');?> required name="dueinsta" placeholder="Enter Here">
						</div>
					</div>
                    
					<div class="col-md-6">
						<div class="form-group">
                        <label for="marathi_name">Select Status</label>
						<select name="gender" class="form-control">
								<option value="ACTIVE">ACTIVE</option>
								<option value="CLOSED">CLOSED</option>
								<option value="REGULAR">REGULAR</option>
								<option value="OVER DUE">OVER DUE</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                        <label for="recdate">Recovery Date</label>
							<input type="date" id="recdate" class="form-control" value="<?=((@$edit)?''.$edit->recdate.'':date('Y-m-d'));?>"   name="recdate" >
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
                        <label for="marathi_name">Ownership Status</label>
						<select name="gender" class="form-control">
								<option value="INDIVIDUAL">INDIVIDUAL</option>
								<option value="JOINT">JOINT</option>
								<option value="GAURANTEER">GAURANTEER</option>
							</select>
						</div>
					</div>
                    <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Members
                    </button></div>


                    <br><br><br><br><br>
					<div class="col-md-12">
						<div class="form-group">
							<button class="btn btn-primary" type="submit" name="save">Save Record</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	</div>