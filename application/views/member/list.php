<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
		
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable" class="table table-striped table-bordered text-nowrap w-100">
						<thead>
							<tr>
								<th class="wd-15p">ID</th>
								<th class="wd-15p">empid</th>
								<th class="wd-15p">Name</th>
								<th class="wd-15p">Email</th>
								<th class="wd-20p">Contact</th>
								<th class="wd-15p">Address</th>
								<th class="wd-10p">Education</th>
								<th class="wd-10p">Design</th>
								<th class="wd-10p">DOB</th>
								<th class="wd-10p">Joining</th>
								<th class="wd-10p">Salary</th>
								<th class="wd-10p">Remark</th>
								<th class="wd-25p">Operation</th>
							</tr>
						</thead>
						<tbody>
                             <?php
                                foreach ($emp as $row) {
									echo '<tr>
									<td class="wd-15p">'.$row->id.'</td>
									<td class="wd-15p">'.$row->empid.'</td>
									<td class="wd-15p">'.$row->name.'</td>
									<td class="wd-15p">'.$row->email.'</td>
									<td class="wd-15p">'.$row->cell.'</td>
									<td class="wd-15p">'.$row->address.'</td>
									<td class="wd-15p">'.$row->edu.'</td>
									<td class="wd-15p">'.$row->design.'</td>
									<td class="wd-15p">'.date('d M y',strtotime($row->dob)).'</td>
									<td class="wd-15p">'.date('d M y',strtotime($row->joining_date)).'</td>
									<td class="wd-15p">'.$row->salary.'</td>
									<td class="wd-15p">'.$row->remark.'</td>
									<td class="wd-25p"><a href="'.base_url().'Admin/employee/'.$row->id.'">Edit</a></td>
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
	</div>
</div>