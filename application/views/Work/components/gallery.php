<div class="prices">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<div class="section_subtitle"></div>
					<div class="section_title"><h2>Our Works</h2></div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<?php $count=0; foreach($works as $service):?>
			<!-- Price -->
			<div class="col-lg-6 price_col">
				<div class="price">
					<img src="<?= $service['link'];?>">
					<div class="price_title"><?= $service['title'];?></div>
					<div class="price_text">
						<p><?= $service['description'];?></p>
					</div>
				</div>
			</div>
		<?php endforeach; 
		?>
		</div>
	</div>
</div>