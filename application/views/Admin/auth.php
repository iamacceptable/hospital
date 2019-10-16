<?php
	$this->view('Admin/main_layout/header');
?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper content-wrapper-auth d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url();?>assets/admin/images/logo.png" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to Admin Panel.</h6>
              <?php if($cmap > 0){?>
              <h6 class="font-weight-light"><?= 'You have '.$cmap.' New Appointments!!';?></h6>
            <?php }?>
              <form class="pt-3" action="<?= base_url();?>index.php/Admin/authentication" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username" value="<?= set_value('username');?>">
                  <small class="text-danger"><?= form_error('username');?></small>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" value="<?= set_value('password');?>">
                  <small class="text-danger"><?= form_error('password');?></small>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-rounded btn-inverse-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                <small class="text-danger text-center"><?php if(isset($error)) echo $error;?></small>
                  <br>Forgot Username and Password?? <span class="text-danger">Contact Owner</span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
<?php 
	$this->view('Admin/main_layout/footer');
?>