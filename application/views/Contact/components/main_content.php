<div class="contact">
	<div class="container">
		<div class="row">

			<!-- Contact Form -->
			<div class="col-lg-6">
				<div class="contact_form_container">
					<div class="contact_form_title">Make an Appointment</div>
					<form action="<?= base_url();?>index.php/Contact_Us/map" class="contact_form" id="contact_form" method="POST">
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

			<!-- Contact Content -->
			<div class="col-lg-5 offset-lg-1 contact_col">
				<div class="contact_content">
					<div class="contact_content_title">Get in touch with us</div>
					<div class="contact_content_text">
						<p><?= $abouts[2]['data'];?></p>
					</div>
					<div class="direct_line d-flex flex-row align-items-center justify-content-start">
						<div class="direct_line_title text-center">Direct Line</div>
						<div class="direct_line_num text-center"><?= $contacts[0]['data'];?></div>
					</div>
					<div class="contact_info">
						<ul>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Address</div>
								<div><?= $contacts[2]['data'];?></div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Mobile</div>
								<div>+91 <?= $contacts[1]['data'];?></div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>E-mail</div>
								<div><?= $contacts[3]['data'];?></div>
							</li>
						</ul>
					</div>
					<div class="contact_social">
						<ul class="d-flex flex-row align-items-center justify-content-start">
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>