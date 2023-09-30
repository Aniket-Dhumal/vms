<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<?=@$this->session->flashdata('result');?>
			</div>
			<div class="card-body">
			<form action="<?=base_url();?>Admin/employee<?=((@$edit)?'/'.$edit->id:'');?>" method="post">
				<div class="row">


                    <div class="col-md-6">
						<div class="form-group">
                        <label for="marathi_name">Select Company</label>
						<select name="company" class="form-control">
							<?php
								foreach ($companies as $row) {
									echo '<option value="'.$row->id.'">'.$row->name.'</option>';
								}
							?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                        <label for="marathi_name">Select Gender</label>
						<select name="gender" class="form-control">
								<option value="MALE">MALE</option>
								<option value="FEMALE">FEMALE</option>
							</select>
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="marathi_name">Employee Id</label>
							<input type="text" id="empid" class="form-control" <?=((@$edit)?'value="'.$edit->empid.'"':'');?> required name="empid" placeholder="Enter Here">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                        <label for="name">Name</label>
							<input type="text" id="name" class="form-control" <?=((@$edit)?'value="'.$edit->name.'"':'');?> required name="name" placeholder="Enter Here">
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="email">email</label>
							<input type="text" id="email" class="form-control" <?=((@$edit)?'value="'.$edit->email.'"':'');?> required name="email" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="cell">Contact</label>
							<input type="text" id="cell" class="form-control" <?=((@$edit)?'value="'.$edit->cell.'"':'');?> required name="cell" placeholder="Enter Here">
						</div>
					</div>
					
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="address">address</label>
							<input type="text" id="address" class="form-control" <?=((@$edit)?'value="'.$edit->address.'"':'');?> required name="address" placeholder="Enter Here">
						</div>
					</div>
					
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="edu">edu</label>
							<input type="text" id="edu" class="form-control" <?=((@$edit)?'value="'.$edit->edu.'"':'');?> required name="edu" placeholder="Enter Here">
						</div>
					</div>

                    <div class="col-md-6">
						<div class="form-group">
                        <label for="design">design</label>
							<input type="text" id="design" class="form-control" <?=((@$edit)?'value="'.$edit->design.'"':'');?> required name="design" placeholder="Enter Here">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                        <label for="dob">DOB</label>
							<input type="date" id="dob" class="form-control" value="<?=((@$edit)?''.$edit->dob.'':date('Y-m-d'));?>"   name="dob" >
						</div>
					</div>
				
					<div class="col-md-6">
						<div class="form-group">
                        <label for="joining_date">Joining Date</label>
							<input type="date" id="joining_date" class="form-control" value="<?=((@$edit)?''.$edit->joining_date.'':date('Y-m-d'));?>"   name="joining_date" >
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="Salary">Salary</label>
							<input type="number" id="Salary" class="form-control" <?=((@$edit)?'value="'.$edit->salary.'"':'');?> required name="salary" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="pl">Paid Leave</label>
							<input type="number" id="pl" class="form-control" <?=((@$edit)?'value="'.$edit->pl.'"':'');?> required name="pl" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="ph">Paid Holiday</label>
							<input type="number" id="ph" class="form-control" <?=((@$edit)?'value="'.$edit->ph.'"':'');?> required name="ph" placeholder="Enter Here">
						</div>
					</div>
                    <div class="col-md-6">
						<div class="form-group">
                        <label for="remark">Remark</label>
							<input type="text" id="remark" class="form-control" <?=((@$edit)?'value="'.$edit->remark.'"':'');?> required name="remark" placeholder="Enter Here">
						</div>
					</div>
                    
                    <div class="col-md-6">
						<div class="form-group row">
                        <label for="isPt"><input id="isPt" <?=((@$edit && $edit->isPt)?' CHECKED':'');?> type="checkbox" class="form-control" name="isPt" value="1">PT</label>
						<label for="isPf"><input id="isPf" <?=((@$edit && $edit->isPf)?' CHECKED':'');?> type="checkbox" class="form-control" name="isPf" value="1">PF</label>
						</div>
					</div>
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