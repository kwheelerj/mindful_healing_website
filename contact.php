<!doctype html>
<html lang="en">

<head>
	<?php readfile('partials/my_header.html') ?>
	<link rel="stylesheet" href="css/contact.css">
</head>

<body>
	<?php readfile('partials/my_navbar.html') ?>

	</div> <!-- NOTE: this "dangling /div, it is important (due to the dynamic parallax) to have this on each page! -->
	<div id="triggerHack"></div> <!-- NOTE: this is VERY IMPORTANT; must exist on each page! -->

	<div class="section container">
		<div id="sending_message" class="alert_message d-none">
			<p>Sending message, please wait...</p>
		</div>
		<div id="success_message" class="alert_message d-none">
			Message has been sent successfully. You will be hearing from us soon
		</div>
		<div id="fail_message" class="alert_message d-none">
			Sorry, but the message was unable to send. Please try again. You can also call or email us directly.
		</div>
		<div id="consult_message" class="alert_message d-none">
			You have opted to do a consultation call with us. Please expect us to contact you
			within the next 48 hours to set up the consultation. :)
		</div>

		<h4 class="section_title">Contact <span class="section_subtitle">We are here to help.</span>
		</h4>

		<div class="section_text">
			<hr>
			<p>If you are interested in getting started, feel free to call or email us at:</p>
		</div>
	</div>
	<div class="contact_info row">
		<div class="text-center mx-auto">
			<h4>Phone: (470) 387-1878</h4>
			<h4>Email: MindfulLivingCW@gmail.com</h4>
		</div>
	</div>
	<div class="section container">
		<hr>
		<p>If you would like to schedule your first appointment immediately, please click:</p>
		<div class="d-flex">
			<div class="spwidget-button-wrapper mx-auto"><a href="https://mindful-living.clientsecure.me"
					class="btn btn-primary spwidget-button"
					data-spwidget-scope-id="0b356898-90e0-4b97-b77c-cd359a92ea5f"
					data-spwidget-scope-uri="mindful-living"
					data-spwidget-application-id="7c72cb9f9a9b913654bb89d6c7b4e71a77911b30192051da35384b4d0c6d505b"
					data-spwidget-scope-global data-spwidget-autobind>Schedule Now</a>
			</div>
		</div>
		<hr class="page_divider">
		<h6>Contact Form:</h6>

		<form action="#" onsubmit="validate(); return false">

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="firstName">First Name</label>
					<input type="text" class="form-control" id="firstName" placeholder="First Name" required
						pattern="[a-zA-Z]{1,1}[a-zA-Z-']+(\s?[a-zA-Z-']+)?"
						title="At least 2 characters.  First letter cannot be - or '.  No numbers.  No special characters.">
				</div>
				<div class="form-group col-md-6">
					<label for="lastName">Last Name</label>
					<input type="text" class="form-control" id="lastName" placeholder="Last Name" required
						pattern="[a-zA-Z]{1,1}[a-zA-Z-']+(\s?[a-zA-Z-']+)?"
						title="At least 2 characters.  First letter cannot be - or '.  No numbers.  No special characters.">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="emailAddress">Email</label>
					<input type="email" class="form-control" id="emailAddress" placeholder="email" required
						pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+(\.[a-zA-Z]{2,4})" title="example: test_123@email.com">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="phoneNumber">Phone Number</label>
					<input type="tel" class="form-control" id="phoneNumber" placeholder="123-456-7890" required
						pattern="(\d{3}|\(\d{3}\))?(\s|-|\.)?\d{3}(\s|-|\.)\d{4}(\s*(ext|x|ext.)\s*\d{2,5})?"
						title="Examples:123 456 7890  |  123-456-7890  |  123.456.7890  |  (123) 456-7890  |  123 456 7890 x12345">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="location">Location</label>
					<select id="location" class="form-control" required>
						<option disabled value="" selected hidden>Choose...</option>
						<option>FL</option>
						<option>GA</option>
						<option>International</option>
					</select>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-12">
					<label for="what">What brings you in to therapy?</label>
					<textarea class="form-control" id="what" rows="3" required title="This cannot be empty."></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="form-check">
					<input id="phoneConsult" class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Would you like to set up a 15-minute consultation call? (Check box for "yes")
					</label>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-9">
					<label for="how">How did you hear about Mindful Living Counseling & Wellness?</label>
					<select id="how" class="form-control" required>
						<option disabled value="" selected hidden>Choose...</option>
						<option>Google</option>
						<option>Psychology Today</option>
						<option>A Friend</option>
						<option>A Wellness Provider</option>
						<option>Instagram</option>
						<option>Facebook</option>
						<option>Other</option>
					</select>
				</div>
			</div>


			<button id="submit_button" type="submit" class="btn btn-primary">Submit Message to
				Mindful Living Counseling & Wellness</button>
		</form>

		<hr class="page_divider">
		<h3>Please Note:</h3>
		<p>If your inquiry is not about making an appointment or a
			question about our services, you will most likely not get a response.</p>
		<p>We cannot legally or ethically give advice online to
			people with whom we have not established a therapeutic
			relationship.</p>
		<p><strong>If you are experiencing a mental health emergency and
				need an immediate response, please:</strong></p>
		<ul>
			<li>
				<p>Call <strong>911</strong></p>
			</li>
			<li>
				<p>Go to your nearest <strong>emergency room.</strong></p>
			</li>
			<li>
				<p>Call the National Suicide Prevention lifeline at <strong>1-800-273-TALK (8255)</strong></p>
			</li>
		</ul>
		<p>Thank you for your understanding. - Mindful Living Counseling & Wellness
		</p>

	</div>

	<?php readfile('partials/my_footer.html') ?>

	<script src="js/pages.js"></script>
	<script src="https://smtpjs.com/v3/smtp.js"></script>
	<script src="js/contact.js"></script>

</body>
</html>