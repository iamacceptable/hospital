<?php $this->view('main_layout/header');?>
	<div class="super_container">
		<?php $this->view('components/navbar');?>
		<?php $this->view('About/components/intro');?>
		<?php $this->view('About/components/team');?>
		<?php $this->view('About/components/testimonials');?>
		<?php $this->view('components/footer');?>
	</div>
<?php $this->view('main_layout/footer');?>