<div class="prices">
	<div class="container">
		<div class="row">
			<?php foreach($services as $service):?>
			<!-- Price -->
			<div class="col-lg-6 price_col">
				<div class="price">
					<div class="price_title"><?= $service['title'];?></div>
					<div class="price_text">
						<p><?= $service['description'];?></p>
					</div>
					<?php if($service['hashtag'] != ''){ ?>
						<div class="price_panel">#<?= $service['hashtag'];?></div>
					<?php } ?>
				</div>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</div>