<div class="testimonials">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<div class="section_subtitle"></div>
					<div class="section_title"><h2>What our Patient Says???</h2></div>
				</div>
			</div>
		</div>
		<div class="row testimonials_row">
			<div class="col">
				<div class="quote d-flex flex-column align-items-center justify-content-center ml-auto mr-auto"><img src="<?= base_url();?>assets/site/images/quote.png" alt=""></div>

				<!-- Testimonials Slider -->
				<div class="test_slider_container">
					<div class="owl-carousel owl-theme home_slider">
						<?php foreach($testimonials as $t):?>
						<!-- Slide -->
						<div class="owl-item">
							<div class="test_item text-center">
								<div class="test_text">
									<p><?= $t['comment'];?></p>
								</div>
								<div class="test_info d-flex flex-row align-items-center justify-content-center">
									<div class="test_image"><img src="<?= $t['link'];?>" alt=""></div>
									<div class="test_text"><?= $t['name'];?>, <span><?= $t['designation'];?></span></div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>