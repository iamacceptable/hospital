<div class="prices">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<div class="section_subtitle"></div>
					<div class="section_title"><h2>Upcoming Events</h2></div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<?php $count=0; foreach($events as $service):?>
			<!-- Price -->
					<?php if(date('Y-m-d',strtotime($service['edate'])) > date('Y-m-d')){ $count++; ?>
			<div class="col-lg-6 price_col">
				<div class="price">
					<img src="<?= $service['link'];?>">
					<div class="price_title"><?= $service['title'];?></div>
					<div class="price_text">
						<p><?= $service['description'];?></p>
					</div>
						<div class="price_panel"><?= $service['edate'];?></div>
				</div>
			</div>
					<?php } ?>
		<?php endforeach; 
			if($count <1){
		?>
			<div class="col-lg-12 text-center">
				<h6>No Upcoming Events</h6>
			</div>
		<?php }?>
		</div>
	</div>
</div>
<div class="prices">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<div class="section_subtitle"></div>
					<div class="section_title"><h2>Past Events</h2></div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<?php $count=0; foreach($events as $service): ?>
			<!-- Price -->
			<?php if(date('Y-m-d',strtotime($service['edate'])) <= date('Y-m-d')){ $count++;?>
				<div class="col-lg-6 price_col">
					<div class="price">
					<img src="<?= $service['link'];?>">
						<div class="price_title"><?= $service['title'];?></div>
						<div class="price_text">
							<p><?= $service['description'];?></p>
						</div>
							<div class="price_panel"><?= $service['edate'];?></div>
					</div>
				</div>
			<?php } ?>
		<?php endforeach; 
			if($count <1){
		?>
			<div class="col-lg-12 text-center">
				<h6>No Past Events</h6>
			</div>
		<?php }?>
		</div>
	</div>
</div>