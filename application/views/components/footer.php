<footer class="footer">
	<div class="footer_content">
		<div class="container">
			<div class="row">

				<!-- Footer About -->
				<div class="col-lg-3 footer_col">
					<div class="footer_about">
						<div class="footer_logo">
							<a href="#">
								<div>Hosp<span>ITAL</span></div>
								<div>Tagline</div>
							</a>
						</div>
						<div class="footer_about_text">
							<p><?= $abouts[2]['data'];?></p>
						</div>
					</div>
				</div>

				<!-- Footer Contact Info -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contact Info</div>
						<ul class="contact_list">
							<li>+91 <?= $contacts[1]['data'];?></li>
							<li><?= $contacts[0]['data'];?></li>
							<li><?= $contacts[3]['data'];?></li>
						</ul>
					</div>
				</div>

				<!-- Footer Locations -->
				<div class="col-lg-3 footer_col">
					<div class="footer_location">
						<div class="footer_title">Our Locations</div>
						<ul class="locations_list">
							<li>
								<div class="location_title"><?= $contacts[2]['data'];?></div>
							</li>
						</ul>
					</div>
				</div>

				<!-- Footer Opening Hours -->
				<div class="col-lg-3 footer_col">
					<div class="opening_hours">
						<div class="footer_title">Opening Hours</div>
						<ul class="opening_hours_list">
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Monday:</div>
								<div class="ml-auto">8:00am - 9:00pm</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Thuesday:</div>
								<div class="ml-auto">8:00am - 9:00pm</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Wednesday:</div>
								<div class="ml-auto">8:00am - 9:00pm</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Thursday:</div>
								<div class="ml-auto">8:00am - 9:00pm</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div>Friday:</div>
								<div class="ml-auto">8:00am - 7:00pm</div>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer_bar">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-center">
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> | HOSPITAL | All rights reserved | Developed with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="http://vgeekers.com" target="_blank">V-Geekers Technologies</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
</footer>