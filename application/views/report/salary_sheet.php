<style>
td{
    padding:0px !important;
}
.form-control{
    padding: 2px;
}
</style>


<div class="row">
	<div class="col-md-12 col-lg-12">
     <form action="<?=base_url();?>Admin/salary_sheet" method="post">
		<div class="card">
			<div class="card-header">
           
                    <div class="col-md-4">
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

                    <div class="col-md-3">
						<div class="form-group">
                        <label for="Filter">Select Date</label>
							<input type="date" value="<?=date('Y-m-d');?>"  class=" form-control" id="selected_date" name="date">
                        </div>
					</div>
                   
                    
                    <div class="col-md-3">
						<div class="form-group">
                        <label for="Filter">&nbsp;&nbsp;</label>
							<input type="submit" value="Filter"  class=" form-control btn btn-danger text-white" text="Filter">
                        </div>
					</div>
                   
			</div>
            <input type="hidden" id="noofdays" value="<?=@$noofdays;?>">
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable" class="table table-striped table-bordered text-nowrap w-100">
						<thead>
							<tr>
								<th class="wd-15p">Emp Id</th>
								<th class="wd-10p">Name</th>
                                <th class="wd-10p">Salary</th>
                                <th class="wd-10p">Basic </th>
                                <th class="wd-10p">Present </th>
                                <th class="wd-10p">Paid Holi</th>
                                <th class="wd-10p">Paid Leave</th>
                                <th class="wd-10p">PT&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th class="wd-10p">PF&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th class="wd-10p">ESI&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th class="wd-10p">LWF&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th class="wd-10p">Advance</th>
								<th class="wd-25p">Net Salary</th>
							</tr>
						</thead>
						<tbody>
                             <?php
                                if(@$emp)
                                foreach ($emp as $row) {
                                    echo '<tr>
                                            <td class="wd-15p">
                                            <input type="hidden" id="ispt_'.$row->empid.'" class="form-control" value="'.$row->isPt.'"/>
                                            <input type="hidden" id="ispf_'.$row->empid.'" class="form-control" value="'.$row->isPf.'"/>
                                            <input type="hidden" id="gender_'.$row->empid.'" class="form-control" value="'.$row->gender.'"/>
                                            
                                            '.$row->empid.'</td>
                                            <td class="wd-15p">'.$row->name.'</td>
                                            <td class="wd-15p"><input type="number" id="salary_'.$row->empid.'" class="form-control" onchange="calculate('.$row->empid.')" value="'.$row->salary.'"/></td>
                                            <td class="wd-15p"><input type="number" id="basic_'.$row->empid.'" class="form-control" onchange="calculate('.$row->empid.')" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="presnt_days_'.$row->empid.'" class="form-control" onchange="calculate('.$row->empid.')" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="paidH_days_'.$row->empid.'" class="form-control"  onchange="calculate('.$row->empid.')" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="paidL_days_'.$row->empid.'" class="form-control"  onchange="calculate('.$row->empid.')" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="pt_'.$row->empid.'" class="form-control" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="pf_'.$row->empid.'" class="form-control" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="esi_'.$row->empid.'" class="form-control" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="lwf_'.$row->empid.'" class="form-control" value="0"/></td>
                                            <td class="wd-15p"><input type="number" id="advance_'.$row->empid.'" class="form-control" value="0"/></td>


                                            <td class="wd-15p"><input type="number" id="net_salary_'.$row->empid.'" class="form-control" value="0"/></td>

                                        </tr>';
                                }
                             ?>
						</tbody>
					</table>
				</div>
               
			</div>
			<!-- TABLE WRAPPER -->
		</div>
		<!-- SECTION WRAPPER -->
        </form>
	</div>
</div>