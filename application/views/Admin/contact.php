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
			                  <h4 class="card-title">Contact Details over Website</h4>
			                  <p class="card-description">
			                    Please fill the contact details for the about at various places.
			                  </p>
			                  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="<?= base_url();?>index.php/Admin/update_contact">
			                    <?php foreach($contacts as $contact):?>
				                    <div class="form-group">
				                      <label for="<?= $contact['item'];?>"><?= $contact['item'];?></label>
				                      <input type="text" name="<?= $contact['item'];?>" class="form-control" id="<?= $contact['item'];?>" placeholder="Enter the <?= $contact['item'];?>" value="<?= $contact['data'];?>">
				                      <small class="text-danger"><?= form_error($contact['item']);?></small>
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