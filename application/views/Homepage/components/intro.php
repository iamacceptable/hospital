<div class="intro">
	<div class="container">
		<div class="row">

			<!-- Intro Content -->
			<div class="col-lg-6 intro_col">
				<div class="intro_content">
					<div class="section_title_container">
						<div class="section_subtitle"></div>
						<div class="section_title"><h2>Welcome to our Clinic</h2></div>
					</div>
					<div class="intro_text">
						<p><?= $abouts[0]['data'];?></p>
					</div>
					<div class="milestones">
						<div class="row milestones_row">
						
							<!-- Milestone -->
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="600" data-sign-before="+">0</div>
									<div class="milestone_text">Satisfied Patients</div>
								</div>
							</div>

<!-- 
							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="352">0</div>
									<div class="milestone_text">Liftings</div>
								</div>
							</div>


							<div class="col-md-4 milestone_col">
								<div class="milestone">
									<div class="milestone_counter" data-end-value="718">0</div>
									<div class="milestone_text">Injectibles</div>
								</div>
							</div>
 -->
						</div>
					</div>
				</div>
			</div>

			<!-- Intro Form -->
			<div class="col-lg-6 intro_col">
				<div class="intro_form_container">
					<div class="intro_form_title">Make an Appointment</div>
					<form action="<?= base_url();?>index.php/Homepage/map" class="contact_form" id="contact_form" method="POST">
						<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
							<input type="text" class="contact_input" placeholder="Your Name" name="name" required>
							<input type="number" class="contact_input" placeholder="Your Phone" name="phone">
							<select class="contact_select contact_input"required="required" name="doctor">
									<option disabled="" selected="">Doctor</option>
									<?php foreach($doctors as $d):?>
										<option value="<?= $d['name'];?>"><?= $d['name'];?></option>
									<?php endforeach;?>
								</select>
							<input type="text" name="date" id="datepicker" class="contact_input datepicker" placeholder="Date" required="required">
						</div>
						<button class="button button_1 contact_button trans_200">make an appointment</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="cta">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
					<div class="cta_content">
						<div class="cta_title">Make your appointment today!</div>
						<div class="cta_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
					</div>
					<div class="cta_phone ml-lg-auto">+91 <?= $contacts[1]['data'];?></div>
				</div>
			</div>
		</div>
	</div>
</div>