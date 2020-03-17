<!doctype html>
<html lang="en">

<head>
	<?php readfile('partials/my_header.html') ?>
	<link rel="stylesheet" href="css/index.css">
</head>

<body>
	<?php readfile('partials/my_navbar.html') ?>

		<div id="newParallaxTarget">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="website_title_container col-md-8 text-center">
					<img id="logo_img" src="imgs/mindful-healing-cw_logo.png" class="rounded-circle img-thumbnail">
				</div>
			</div>
			<div id="triggerHack"></div> <!-- NOTE: this is VERY IMPORTANT; must exist on each page! -->
		</div>

	</div> <!-- NOTE: this "dangling /div, it is important (due to the dynamic parallax) to have this on each page! -->

	<div class="section container">

		<div class="row align-items-center">

			<div class="col-lg-8">
				<h4 class="section_title">
					Online Therapy <span class="section_subtitle">from the comfort of your home</span>
				</h4>
				<p class="section_text">
					Mindful Living Counseling &amp; Wellness brings therapy to the comfort of your home. We have
					effortlessly
					taken our practice online with seamless access to private and secure video sessions.
					No need to worry about taking time out of your day
					to travel miles or navigate through traffic. Our therapist provides flexible scheduling
					times to fit your busy schedule, morning, noon, and night. If you would like to try it out
					prior to scheduling your initial intake session, we are happy to offer a complementary
					15-minute video or phone session. We are taking on new clients who currently reside in
					Florida, Georgia, and Internationally.
				</p>
			</div>

			<div class="col-lg-1"></div>

			<div class="col-lg-3 text-center text-lg-left">
				<h6>Schedule Appointment</h6>
				<p>(opens portal to SimplePractice)</p>
				<div class="spwidget-button-wrapper"><a href="https://mindful-living.clientsecure.me"
						class="btn btn-primary spwidget-button"
						data-spwidget-scope-id="0b356898-90e0-4b97-b77c-cd359a92ea5f"
						data-spwidget-scope-uri="mindful-living"
						data-spwidget-application-id="7c72cb9f9a9b913654bb89d6c7b4e71a77911b30192051da35384b4d0c6d505b"
						data-spwidget-scope-global data-spwidget-autobind>Schedule Now</a>
				</div>
			</div>
		</div>
	</div>

	<div class="parallax_mid"></div>

	<div class="section container">

		<div class="row align-items-center">
			<div class="d-none d-sm-block col-lg-6 order-2 order-lg-1">
				<img class="img-fluid mx-auto" src="imgs/eric-muhr-6G_fAiRv64E-unsplash.jpg">
			</div>

			<div class="col-lg-6 text-center order-1 order-lg-2">
				<div class="mb-5 mb-lg-0">
					<div class="section_title">
						<h4>Treatment Focus &</h4>
						<h4>Therapeutic Approach
					</div>
					<p class="section_text text-left text-lg-center">
						Our intention is to help our clients to create healing in place of tension.
						At Mindful Living Counseling &amp; Wellness we strive to provide a warm and calming environment
						for you to feel at
						ease in processing through whatever challenges life may present.
						Our therapist’s intuitive nurturing style allows them to quickly and easily build a strong
						therapeutic relationship with their clients.
						By using an underpinning of Mindfulness, we can begin to re-center the mind,
						creating greater joy, freedom from worry and decreased stress.
						We incorporate an eclectic approach providing clients with a specialized style tailored to
						their individualized needs.
						Our approaches include: Meditation & Guided Imagery, Cognitive Behavioral Therapy,
						Dialectical Behavioral Therapy and Existential Therapy, just to name a few.
					</p>

					<a href="specialities.php"><div class="btn btn-primary">Specialties</div></a>

				</div>
			</div>
		</div>

		<hr class="page_divider d-none d-sm-block">
		<div class="parallax_bottom d-sm-none"></div>

		<div class="row align-items-center">
			<div class="d-none d-sm-block col-lg-6 order-2 order-lg-2">
				<img class="img-fluid mx-auto" src="imgs/ddp-x5x-XyoojxA-unsplash.jpg">
			</div>

			<div class="col-lg-6 text-center order-1 order-lg-1">
				<div class="mb-5 mb-lg-0">
					<div class="section_title">
						<h4>Why Therapy?</h4>
					</div>
					<p class="section_text text-left text-lg-center">
						Throughout our journey at Mindful Living Counseling &amp; Wellness, we have discovered that
						mindfulness in
						combination with treatment has the ability to connect our body and mind as one. When the
						healing begins, we enable ourselves to awaken a greater understanding of 'the self' within
						our ecological system. By focusing on our awareness, we may be able to calmly and
						intentionally accept and process through thoughts, feelings, behaviors, and bodily
						sensations. By acknowledging and relieving ourselves of shame, guilt, and control we can
						begin to let go of what does not serve us. In this act, we can process though our hurt and
						allow it to create healing in place of tension. At Mindful Living Counseling &amp; Wellness we
						find great honor in
						walking beside you to help you develop strategies for coping and positive change.
					</p>

					<!-- <a type="button" class="btn btn-primary" href="about.php">About</a> -->
					<a href="about.php"><div class="btn btn-primary">About</div></a>

				</div>
			</div>
		</div>
	</div>

	<?php readfile('partials/my_footer.html') ?>

	<script src="js/index.js"></script>

</body>

</html>