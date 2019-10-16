<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="<?= base_url();?>index.php/Admin"><img src="<?= base_url();?>assets/admin/images/logo.svg" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="<?= base_url();?>index.php/Admin"><img src="<?= base_url();?>assets/admin/images/logo-mini.svg" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="ti-bell mx-0"></i>
          <?php if($cmap > 0){ ?>
          <span class="count"></span>
          <?php }?>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
          <?php if($cmap > 0){ ?>
            <p class="mb-0 font-weight-normal float-left dropdown-header">New Appointments</p>
          <?php }
          else{?>
            <p class="mb-0 font-weight-normal float-left dropdown-header">No New Appointments!!</p>
          <?php }?>
            <?php $count=0; foreach($umap as $map): $count++;?>
          <a href="<?= base_url();?>index.php/Admin/map" class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal"><?= $map['name'];?></h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                <?= $map['dtou'];?>
              </p>
            </div>
          </a>
          <?php endforeach;?>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="<?= base_url();?>assets/admin/images/faces/face28.jpg" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <!-- <a class="dropdown-item">
            <i class="ti-settings text-primary"></i>
            Change Password
          </a> -->
          <a href="<?= base_url();?>index.php/Admin/logout" class="dropdown-item">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-view-list"></span>
    </button>
  </div>
</nav>