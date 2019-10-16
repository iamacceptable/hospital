<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item <?php if($sidebar == 'HC') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/homepage_caurosel">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Homepage Slider</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'About') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/about">
        <i class="ti-comment menu-icon"></i>
        <span class="menu-title">About Introduction</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Contact') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/contact">
        <i class="ti-mobile menu-icon"></i>
        <span class="menu-title">Contact Details</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Doctors') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/doctors">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Doctors</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Services') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/services">
        <i class="ti-pulse menu-icon"></i>
        <span class="menu-title">Services</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Testimonials') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/testimonials">
        <i class="ti-comment-alt menu-icon"></i>
        <span class="menu-title">Testimonials</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Blogs') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/blogs">
        <i class="ti-thought menu-icon"></i>
        <span class="menu-title">Blogs</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Map') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/map">
        <i class="ti-import menu-icon"></i>
        <span class="menu-title">Appointments</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Events') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/events">
        <i class="ti-gear menu-icon"></i>
        <span class="menu-title">Events</span>
      </a>
    </li>
    <li class="nav-item <?php if($sidebar == 'Works') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/work">
        <i class="ti-gear menu-icon"></i>
        <span class="menu-title">Our Works</span>
      </a>
    </li>
  </ul>
</nav>