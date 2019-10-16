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
			                  <h4 class="card-title">About Website</h4>
			                  <p class="card-description">
			                    Please fill the details for the about at various places.
			                  </p>
			                  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="<?= base_url();?>index.php/Admin/update_about">
			                    <?php foreach($abouts as $about):?>
				                    <div class="form-group">
				                      <label for="<?= $about['item'];?>"><?= $about['item'];?> Introduction</label>
				                      <textarea class="form-control" name="<?= $about['item'];?>" id="<?= $about['item'];?>" rows="4" placeholder="Write Introduction for <?= $about['item'];?>"><?= $about['data'];?></textarea>
				                      <small class="text-danger"><?= form_error($about['item']);?></small>
				                    </div>
			                	<?php endforeach;?>
			                    <button type="submit" class="btn btn-primary mr-2">Update About</button>
			                  </form>
			                </div>
			              </div>
			            </div>
	      			</div>
	      		</div>
			</div>
  		</div>

<?php $this->view('Admin/main_layout/footer');?>