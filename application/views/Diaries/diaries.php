<?php $this->view('main_layout/header');?>
	<div class="super_container">
		<?php $this->view('components/navbar');?>
		<?php $this->view('Diaries/components/intro');?>
		<?php $this->view('Diaries/components/notes');?>
		<?php $this->view('components/footer');?>
	</div>
<?php $this->view('main_layout/footer');?>