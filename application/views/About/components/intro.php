<div class="home d-flex flex-column align-items-start justify-content-end">
	<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url();?>assets/site/images/about.jpg" data-speed="0.8"></div>
	<div class="home_overlay"><img src="<?= base_url();?>assets/site/images/home_overlay.png" alt=""></div>
	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title"><?= $header;?></div>
						<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="intro">
	<div class="container">
		<div class="row">

			<!-- Intro Content -->
			<div class="col-lg-8">
				<div class="intro_content">
					<div class="section_title_container">
						<div class="section_subtitle">This is Dr Pro</div>
						<div class="section_title"><h2>Welcome to our Clinic</h2></div>
					</div>
					<div class="intro_text">
						<p><?= $abouts[1]['data'];?></p>
					</div>

					<!-- Milestones -->
					<div class="milestones">
						<div class="row milestones_row">
						
							<!-- Milestone -->
							<div class="col-md-3 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
									<div class="milestone_text">Satisfied Patients</div>
								</div>
							</div>


						</div>
					</div>

				</div>
			</div>

			<!-- Intro Image -->
			<div class="col-lg-3 offset-lg-1">
				<div class="intro_image"><img src="<?= base_url();?>assets/site/images/intro_1.jpg" alt=""></div>
			</div>
		</div>
	</div>
</div>