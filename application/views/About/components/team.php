<div class="team mt-4 pt-4">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<div class="section_subtitle"></div>
					<div class="section_title"><h2>Meet Our Qualified Doctors</h2></div>
				</div>
			</div>
		</div>
		<div class="row team_row">
			<?php foreach($doctors as $doctor):?>
			<!-- Team Item -->
			<div class="col-lg-6 team_col">
				<div class="team_item text-center d-flex flex-column aling-items-center justify-content-end">
					<div class="team_image"><img src="<?= $doctor['dplink'];?>" alt=""></div>
					<div class="team_content text-center">
						<div class="team_name"><a href="#"><?= $doctor['name'];?></a></div>
						<div class="team_title"><?= $doctor['speciality'];?></div>
						<div class="team_text">
							<p><?= $doctor['bio'];?></p>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>