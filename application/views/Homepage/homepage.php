<?php $this->view('main_layout/header');?>
	<div class="super_container">
		<?php $this->view('components/navbar');?>
		<?php $this->view('Homepage/components/caurosel');?>
		<?php $this->view('Homepage/components/intro');?>
		<?php $this->view('Homepage/components/team');?>
		<?php $this->view('Homepage/components/testimonials');?>
		<?php $this->view('components/footer');?>
	</div>
<?php $this->view('main_layout/footer');?>