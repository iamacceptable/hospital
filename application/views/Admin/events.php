<?php $this->view('Admin/main_layout/header');?>
	<body>
  		<div class="container-scroller">
  			<?php $this->view('Admin/components/navbar');?>
    		<div class="container-fluid page-body-wrapper">
  				<?php $this->view('Admin/components/sidebar');?>
	  			<div class="main-panel">
	        		<div class="content-wrapper">
  						<?php $this->view('Admin/components/header');?>
  						<div class="col-12 grid-margin stretch-card">
			              <div class="card">
			                <div class="card-body">
			                  <h4 class="card-title">Events</h4>
			                  <p class="card-description">
			                    Please fill the details for the events.
			                  </p>
			                  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="<?= base_url();?>index.php/Admin/update_events">
			                    <div class="form-group">
			                      <label for="hashtag">Date</label>
			                      <input type="date" name="edate" class="form-control" id="hashtag" placeholder="Enter the Hashtag" value="<?= set_value('hashtag');?>">
			                      <small class="text-danger"><?= form_error('hashtag');?></small>
			                    </div>
			                    <div class="form-group">
			                      <label for="title">Title</label>
			                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter the Title" value="<?= set_value('title');?>">
			                      <small class="text-danger"><?= form_error('title');?></small>
			                    </div>
			                    <div class="form-group">
			                      <label for="description">Description</label>
			                      <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter the Description"><?= set_value('description');?></textarea>
			                      <small class="text-danger"><?= form_error('description');?></small>
			                    </div>
			                    <div class="form-group">
			                      <label>Image upload</label>
			                      <input type="file" name="eimg" class="file-upload-default">
			                      <div class="input-group col-xs-12">
			                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Display Image">
			                        <span class="input-group-append">
			                          <button class="file-upload-browse btn btn-primary" type="button">Choose Image</button>
			                        </span>
			                      </div>
			                      <small class="text-danger"><?php if(isset($error)) echo $error;?></small>
			                    </div>
			                    <button type="submit" class="btn btn-primary mr-2">Update Events</button>
			                  </form>
			                </div>
			              </div>
			            </div>
			            <div class="col-lg-12 grid-margin stretch-card">
			              <div class="card">
			                <div class="card-body">
			                  <h4 class="card-title">Current Services</h4>
			                  <p class="card-description">Please Click on Title to view event Image</p>
			                  <div class="table-responsive">
			                    <table class="table table-hover">
			                      <thead>
			                        <tr>
			                          <th>S.No.</th>
			                          <th>Title</th>
			                          <th>Date</th>
			                          <th>Description</th>
			                          <th>Action</th>
			                        </tr>
			                      </thead>
			                      <tbody>
			                      	<?php $count=1; foreach($events as $slider):?>
				                        <tr>
				                          <td><?= $count++; ?></td>
				                          <td><a href="<?= $slider['link'];?>"><?= $slider['title'];?></a></td>
				                          <td><?= $slider['edate'];?></td>
				                          <td><?= $slider['description'];?></td>
				                          <td><a href="<?= base_url();?>index.php/Admin/delete_events/<?= $slider['id'];?>" class="text-danger"><i class="ti-close"></i> Delete</a></td>
				                        </tr>
			                    	<?php 
			                    		endforeach;
			                    		if($count == 1){
			                    	?>
				                        <tr>
				                        	<td colspan="5" class="text-center">No Events Yet!!</td>
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

<?php $this->view('Admin/main_layout/footer');?>