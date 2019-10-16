<?php $this->view('Admin/main_layout/header');?>
	<body>
  		<div class="container-scroller">
  			<?php $this->view('Admin/components/navbar');?>
    		<div class="container-fluid page-body-wrapper">
  				<?php $this->view('Admin/components/sidebar');?>
	  			<div class="main-panel">
	        		<div class="content-wrapper">
  						<?php $this->view('Admin/components/header');?>
			            <div class="col-lg-12 grid-margin stretch-card">
			              <div class="card">
			                <div class="card-body">
			                  <h4 class="card-title">Appointments</h4>
			                  <div class="table-responsive">
			                    <table class="table table-hover">
			                      <thead>
			                        <tr>
			                          <th>S.No.</th>
			                          <th>Name</th>
			                          <th>Phone</th>
			                          <th>Doctor</th>
			                          <th>Date</th>
			                          <th>Timestamp</th>
			                          <th>Action</th>
			                        </tr>
			                      </thead>
			                      <tbody>
			                      	<?php $count=1; foreach($map as $slider):?>
				                        <tr>
				                          <td><?= $count++; ?></td>
				                          <td><?= $slider['name'];?></td>
				                          <td><?= $slider['phone'];?></td>
				                          <td><?= $slider['doctor'];?></td>
				                          <td><?= $slider['date'];?></td>
				                          <td><?= $slider['dtou'];?></td>
				                          <?php if($slider['flag'] == '0'){ ?>
				                          <td><a href="<?= base_url();?>index.php/Admin/map_mar/<?= $slider['id'];?>" class="text-success"><i class="ti-check"></i> Mark As Read</a></td>
				                      	<?php } else{ ?>
				                          <td>Already Readed</td>
				                          <?php }?>
				                        </tr>
			                    	<?php 
			                    		endforeach;
			                    		if($count == 1){
			                    	?>
				                        <tr>
				                        	<td colspan="5" class="text-center">No Sliders Yet!!</td>
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