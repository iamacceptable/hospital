<?php $this->view('main_layout/header');?>
	<div class="super_container">
		<?php $this->view('components/navbar');?>
		<?php $this->view('Contact/components/intro');?>
		<?php $this->view('Contact/components/main_content');?>
		<?php $this->view('components/footer');?>
	</div>
<?php $this->view('main_layout/footer');?>