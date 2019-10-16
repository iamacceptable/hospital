<header class="header trans_400">
	<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

		<!-- Logo -->
		<div class="logo">
			<a href="#">
				<div>Hosp<span>ITAL</span></div>
				<div>TagLine</div>
			</a>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li class="<?php if($navbar == 'Home') echo 'active';?>"><a href="<?= base_url();?>">Home</a></li>
				<li class="<?php if($navbar == 'About') echo 'active';?>"><a href="<?= base_url();?>index.php/About_Us">About us</a></li>
				<li class="<?php if($navbar == 'Gallery') echo 'active';?>"><a href="<?= base_url();?>index.php/Gallery">Services</a></li>
				<li class="<?php if($navbar == 'Events') echo 'active';?>"><a href="<?= base_url();?>index.php/Events">Events</a></li>
				<li class="<?php if($navbar == 'Works') echo 'active';?>"><a href="<?= base_url();?>index.php/Events/our_works">Our Works</a></li>
				<li class="<?php if($navbar == 'Diaries') echo 'active';?>"><a href="<?= base_url();?>index.php/Diaries">Blogs</a></li>
				<li class="<?php if($navbar == 'Contact') echo 'active';?>"><a href="<?= base_url();?>index.php/Contact_Us">Contact Us</a></li>
			</ul>
		</nav>
		<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
			<!-- Header Social -->
			<div class="social header_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<!-- Hamburger -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>
	</div>
</header>

<!-- Menu -->

<div class="menu_overlay trans_400"></div>
<div class="menu trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
	<nav class="menu_nav">
		<ul>
			<li class="<?php if($navbar == 'Home') echo 'active';?>"><a href="<?= base_url();?>">Home</a></li>
				<li class="<?php if($navbar == 'About') echo 'active';?>"><a href="<?= base_url();?>index.php/About_Us">About us</a></li>
				<li class="<?php if($navbar == 'Gallery') echo 'active';?>"><a href="<?= base_url();?>index.php/Gallery">Gallery</a></li>
				<li class="<?php if($navbar == 'Events') echo 'active';?>"><a href="<?= base_url();?>index.php/Events">Events</a></li>
				<li class="<?php if($navbar == 'Works') echo 'active';?>"><a href="<?= base_url();?>index.php/Events/our_works">Our Works</a></li>
				<li class="<?php if($navbar == 'Diaries') echo 'active';?>"><a href="<?= base_url();?>index.php/Diaries">Diaries</a></li>
				<li class="<?php if($navbar == 'Contact') echo 'active';?>"><a href="<?= base_url();?>index.php/Contact_Us">Contact Us</a></li>
		</ul>
	</nav>
	<div class="social menu_social">
		<ul class="d-flex flex-row align-items-center justify-content-start">
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>
</div>