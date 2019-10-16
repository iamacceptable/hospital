<?php $this->view('main_layout/header');?>
	<div class="super_container">
		<?php $this->view('components/navbar');?>
		<?php $this->view('Gallery/components/intro');?>
		<?php $this->view('Gallery/components/gallery');?>
		<?php $this->view('components/footer');?>
	</div>
<?php $this->view('main_layout/footer');?>