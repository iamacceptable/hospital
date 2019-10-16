<?php $this->view('Admin/main_layout/header');?>
	<body>
  		<div class="container-scroller">
  			<?php $this->view('Admin/components/navbar');?>
    		<div class="container-fluid page-body-wrapper">
  				<?php $this->view('Admin/components/sidebar');?>
	  			<div class="main-panel">
	        		<div class="content-wrapper">
  						<?php $this->view('Admin/components/header');?>
  						<div class="row">
	  						<div class="col-md-12 grid-margin stretch-card">
				              <div class="card">
				                <div class="card-body">
				                  <h4 class="card-title">About Doctor 1</h4>
				                  <p class="card-description">
				                    Please fill the details for the about at various places.
				                  </p>
				                  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="<?= base_url();?>index.php/Admin/update_doctor_one">
					                    <div class="form-group">
					                      <label for="doctor1Name">Doctor Name</label>
					                      <input type="text" name="dnone" class="form-control" id="doctor1Name" placeholder="Enter the Doctor Name">
					                      <small class="text-danger"><?= form_error('dnone');?></small>
					                    </div>
					                    <div class="form-group">
					                      <label for="doctor1speaciality">Doctor Speciality</label>
					                      <input type="text" name="dsone" class="form-control" id="doctor1speaciality" placeholder="Enter the Doctor Speciality">
					                      <small class="text-danger"><?= form_error('dsone');?></small>
					                    </div>
					                    <div class="form-group">
					                      <label for="doctor1bio">Doctor Bio</label>
					                      <input type="text" name="dbone" class="form-control" id="doctor1bio" placeholder="Enter the Doctor Bio" >
					                      <small class="text-danger"><?= form_error('dbone');?></small>
					                    </div>

					                    <div class="form-group">
					                      <label>DP upload</label>
					                      <input type="file" name="dpone" class="file-upload-default">
					                      <div class="input-group col-xs-12">
					                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Display Image">
					                        <span class="input-group-append">
					                          <button class="file-upload-browse btn btn-primary" type="button">Choose DP</button>
					                        </span>
					                      </div>
					                      <small class="text-danger"><?php if(isset($error)) echo $error;?></small>
					                    </div>
				                    <button type="submit" class="btn btn-primary mr-2">Update Doctor</button>
				                  </form>
				                </div>
				              </div>
				            </div>

				            <div class="col-lg-12 grid-margin stretch-card">
				              <div class="card">
				                <div class="card-body">
				                  <h4 class="card-title">Current Doctors</h4>
				                  <p class="card-description">
				                    Please click on <code>Name</code> to view the display picture.
				                  </p>
				                  <div class="table-responsive">
				                    <table class="table table-hover">
				                      <thead>
				                        <tr>
				                          <th>S.No.</th>
				                          <th>Name</th>
				                          <th>Speciality</th>
				                          <th>Bio</th>
				                          <th>Action</th>
				                        </tr>
				                      </thead>
				                      <tbody>
				                      	<?php $count=1; foreach($doctors as $slider):?>
					                        <tr>
					                          <td><?= $count++; ?></td>
					                          <td class="text-danger"><a href="<?= $slider['dplink'];?>"><?= $slider['name'];?></a></td>
					                          <td><?= $slider['speciality'];?></td>
					                          <td><?= $slider['bio'];?></td>
					                          <td><a href="<?= base_url();?>index.php/Admin/delete_doctor/<?= $slider['id'];?>" class="text-danger"><i class="ti-close"></i> Delete</a></td>
					                        </tr>
				                    	<?php 
				                    		endforeach;
				                    		if($count == 1){
				                    	?>
					                        <tr>
					                        	<td colspan="4" class="text-center">No Sliders Yet!!</td>
					                        </tr>
				                    	<?php } ?>
				                      </tbody>
				                    </table>
				                  </div>
				                </div>
				              </div>
				            </div>
			        	</div>
	      			</div>
	      		</div>
			</div>
  		</div>

<?php $this->view('Admin/main_layout/footer');?>