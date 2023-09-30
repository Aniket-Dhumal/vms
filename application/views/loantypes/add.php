<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<?=@$this->session->flashdata('result');?>
			</div>
			<div class="card-body">
			<form action="<?=base_url();?>Admin/loantypes<?=((@$edit)?'/'.$edit->id:'');?>" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
                        <label for="name">Name</label>
							<input type="text" id="name" class="form-control" <?=((@$edit)?'value="'.$edit->name.'"':'');?> required name="name" placeholder="Enter Here">
						</div>
                    </div>
					<div class="col-md-12">
						<div class="form-group">
							<button class="btn btn-primary" type="submit" name="save">Save Record</button>
						</div>
					</div>
					</form>
				</div>
		
		<div class="card-body">
				<div class="table-responsive">
					<table id="datatable" class="table table-striped table-bordered text-nowrap w-100">
						<thead>
							<tr>
								<th class="wd-15p">ID</th>
								
								<th class="wd-15p">Name</th>
								<th class="wd-25p">Operation</th>
							</tr>
						</thead>
						<tbody>
                             <?php
                                foreach ($loantypes as $row) {
                                    echo '<tr>
									<td class="wd-15p">'.$row->id.'</td>
									<td class="wd-15p">'.$row->name.'</td>
                                    <td class="wd-25p"><a href="'.base_url().'Admin/loantypes/'.$row->id.'">Edit</a></td>
                                        </tr>';
                                }
                             ?>
						</tbody>
					</table>
				</div>
			</div>
	</div>	</div>
		</div>
	</div>