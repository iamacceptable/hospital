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
			                  <h4 class="card-title">Testimonials</h4>
			                  <p class="card-description">
			                    Please upload the image for the commenter with the following details.
			                  </p>
			                  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="<?= base_url();?>index.php/Admin/upload_blogs">
			                    <div class="form-group">
			                      <label for="title">Title</label>
			                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter the title" value="<?= set_value('title');?>">
			                      <small class="text-danger"><?= form_error('title');?></small>
			                    </div>
			                    <div class="form-group">
			                      <label for="comment">Comment</label>
			                      <textarea class="form-control" name="comment" id="comment" rows="4" placeholder="Enter the Comment"><?= set_value('comment');?></textarea>
			                      <small class="text-danger"><?= form_error('comment');?></small>
			                    </div>
			                    <div class="form-group">
			                      <label>Image upload</label>
			                      <input type="file" name="bimg" class="file-upload-default">
			                      <div class="input-group col-xs-12">
			                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Blog Image">
			                        <span class="input-group-append">
			                          <button class="file-upload-browse btn btn-primary" type="button">Choose Image</button>
			                        </span>
			                      </div>
			                      <small class="text-danger"><?php if(isset($error)) echo $error;?></small>
			                    </div>
			                    <button type="submit" class="btn btn-primary mr-2">Update Blogs</button>
			                  </form>
			                </div>
			              </div>
			            </div>
			            <div class="col-lg-12 grid-margin stretch-card">
			              <div class="card">
			                <div class="card-body">
			                  <h4 class="card-title">Current Blogs</h4>
			                  <p class="card-description">
			                    Please click on <code>Title</code> to view the blog image.
			                  </p>
			                  <div class="table-responsive">
			                    <table class="table table-hover">
			                      <thead>
			                        <tr>
			                          <th>S.No.</th>
			                          <th>Title</th>
			                          <th>Comment</th>
			                          <th>Timestamp</th>
			                          <th>Action</th>
			                        </tr>
			                      </thead>
			                      <tbody>
			                      	<?php $count=1; foreach($blogs as $slider):?>
				                        <tr>
				                          <td><?= $count++; ?></td>
				                          <td class="text-danger"><a target="blank" href="<?= $slider['link'];?>"><?= $slider['title'];?></a></td>
				                          <td><?= $slider['comment'];?></td>
				                          <td><?= $slider['dtou'];?></td>
				                          <td><a href="<?= base_url();?>index.php/Admin/delete_blogs/<?= $slider['id'];?>" class="text-danger"><i class="ti-close"></i> Delete</a></td>
				                        </tr>
			                    	<?php 
			                    		endforeach;
			                    		if($count == 1){
			                    	?>
				                        <tr>
				                        	<td colspan="5" class="text-center">No Blogs Yet!!</td>
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