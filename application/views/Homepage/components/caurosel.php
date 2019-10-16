<div class="home">
	<div class="home_slider_container">
		<div class="owl-carousel owl-theme home_slider">
			<?php $count=1; foreach($sliders as $slider):?>
				<div class="owl-item">
					<div class="background_image" style="background-image:url(<?= $slider['link'];?>)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_subtitle">#<?= $count++;?> <?= $slider['hashtag'];?></div>
										<div class="home_title"><?= $slider['title'];?></div>
										<div class="home_text">
											<p><?= $slider['description'];?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
		<!-- <div class="home_slider_dots">
			<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
				<li class="home_slider_custom_dot trans_200 active"></li>
				<li class="home_slider_custom_dot trans_200"></li>
				<li class="home_slider_custom_dot trans_200"></li>
			</ul>
		</div> -->
	</div>
</div>
