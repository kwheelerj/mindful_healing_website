<!doctype html>
<html lang="en">

<head>
	<?php readfile('partials/my_header.html') ?>
	<link rel="stylesheet" href="css/faq.css">
</head>

<body>
	<?php readfile('partials/my_navbar.html') ?>

	</div> <!-- NOTE: this "dangling /div, it is important (due to the dynamic parallax) to have this on each page! -->
	<div id="triggerHack"></div> <!-- NOTE: this is VERY IMPORTANT; must exist on each page! -->

	<div class="section container">
		<div class="row align-items-center">
			<div class="col-md-1"></div>

			<div class="col-md-10">
				<h4 class="section_title">FAQ <span class="section_subtitle">It is okay to ask.</span></h4>

				<div id="faq_accordion">
					<div class="card">
						<button class="card-header" id="question01_heading" role="button" data-toggle="collapse"
							data-target="#question01_collapse" aria-expanded="true" aria-controls="question01_collapse">
							<h5>What kind of therapy do you do and with what population?</h5>
						</button>
						<div id="question01_collapse" class="collapse show" aria-labelledby="question01_heading"
							data-parent="#faq_accordion">
							<div class="card-body section_text">
								Mindful Living specializes in working with individuals across the lifespan, serving ages
								16
								and up. Please see our ‘Specialties’ page for more information.
								At Mindful Living we work with dynamic and otherwise capable people who find
								themselves struggling trying to navigate the myriad ways life can challenge us and make
								it hard to cope. We work with people who are motivated to develop a deeper
								understanding of themselves so that they can be more actively engaged in their lives.
								Therapy can provide individuals an opportunity to manage a very specific problem, or it
								can be an ongoing tool to consistently increase self awareness, the establishment of
								goals,
								to remain productive, and to feel more confident in yourself, your relationships and
								your
								choices.
							</div>
						</div>
					</div>

					<div class="card">
						<button class="card-header collapsed" id="question05_heading" role="button" data-toggle="collapse"
							data-target="#question05_collapse" aria-expanded="false"
							aria-controls="question05_collapse">
							<h5>How do I schedule an appointment?</h5>
						</button>
						<div id="question05_collapse" class="collapse" aria-labelledby="question05_heading"
							data-parent="#faq_accordion">
							<div class="card-body section_text">
								If you are a new patient and interested in scheduling an appointment or would like a 15
								minute
								consultation call, please visit our ‘contact’ page. If you prefer talking it out before
								scheduling
								online, feel free to email us at MindfulLivingCW@gmail.com or give us a call at
								(470) 387-1878.
								Appointments are typically scheduled as standing weekly appointments at the same time
								every
								session, as this helps build consistency and helps to build our work together.
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="question06_heading" role="button" data-toggle="collapse"
							data-target="#question06_collapse" aria-expanded="false"
							aria-controls="question06_collapse">
							<h5>What are your hours and days of availability?</h5>
						</button>
						<div id="question06_collapse" class="collapse" aria-labelledby="question06_heading"
							data-parent="#faq_accordion">
							<div class="card-body section_text">
								Our practice caters to the needs of our busy clients’ schedule. We provide early
								morning,
								afternoon, and evening sessions, as well as weekends. You let us know what time works
								best and
								we’ll be sure to find a time that fits your busy schedule.
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="question07_heading" role="button" data-toggle="collapse"
							data-target="#question07_collapse" aria-expanded="false"
							aria-controls="question07_collapse">
							<h5>Can I set up a free consultation call?</h5>
						</button>
						<div id="question07_collapse" class="collapse" aria-labelledby="question07_heading"
							data-parent="#faq_accordion">
							<div class="card-body section_text">
								<p>Yes! We know that starting therapy can be anxiety provoking, so to mitigate any
									initial anxiety
									we offer a free 15-minute consult visit to talk about any initial questions or
									concerns. Typically,
									clients who are curious about online therapy like to give this a go, before jumping
									in.
									The call is for you to tell me about your situation and ask me questions about how I
									work and
									what methods I would use to help you. It also gives you a sense of my personality
									and what it’s
									like talking to me.</p>
								<p>By the end of 15 minutes, you should have a good idea of whether or not you want to
									work with
									me. The call also gives me information on how I can best meet your needs; if I feel
									that I’m not
									the right therapist for you, I will give you an appropriate referral to someone else
									I think could
									help you.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="question08_heading" role="button" data-toggle="collapse"
							data-target="#question08_collapse" aria-expanded="false"
							aria-controls="question08_collapse">
							<h5>How often and for how long do I need therapy?</h5>
						</button>
						<div id="question08_collapse" class="collapse" aria-labelledby="question08_heading"
							data-parent="#faq_accordion">
							<div class="card-body section_text">
								Most people attend weekly sessions, the same day and time each week. For certain
								clients, more than once a week can be beneficial, but this is something that we would
								discuss together to find what would be most beneficial for you. When first entering into
								therapy, it is essential to meet at least once a week, as this is crucial in generating
								a
								sustainable therapeutic process. Meeting weekly allows us to deepen our work together,
								build trust, and establish a sense of safety, while providing consistency to your
								therapeutic progress which allows for a more productive outcome. As far as amount of
								time, it depends on your particular situation and what you are wanting out of therapy.
								Generally, though, change takes time.
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="question02_heading" role="button" data-toggle="collapse"
							data-target="#question02_collapse" aria-expanded="false"
							aria-controls="question02_collapse">
							<h5>What is your primary theoretical approach to therapy?</h5>
						</button>
						<div id="question02_collapse" class="collapse" aria-labelledby="question02_heading"
							data-parent="#faq_accordion">
							<div class="card-body section_text">
								At Mindful Living our therapeutic alignment is psychodynamic, providing clients with a
								specialized approach tailored to their individualized needs. We use Mindfulness-based
								CBT, Trauma-Informed Therapy, Meditation &amp; Guided Imagery, Somatic Experiencing,
								Dialectical Behavioral Therapy, Motivational Interviewing, and Existential Therapy. We
								incorporate a holistic mind-body-spirit framework and use neurobiological,
								psychological, and social principals.
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="question03_heading" role="button" data-toggle="collapse"
							data-target="#question03_collapse" aria-expanded="false"
							aria-controls="question03_collapse">
							<h5>Can therapy really help me?</h5>
						</button>
						<div id="question03_collapse" class="collapse" aria-labelledby="question03_heading"
							data-parent="#faq_accordion">
							<div class="card-body section_text">
								<p>Therapy can give you support, validation, coping skills, and strategies to change
									your
									perspective and your behaviors. It can give you greater peace of mind and help you
									tolerate difficult feelings and situations. It can give you a “corrective emotional
									experience:” your therapist creates a safe, non-judgmental space for you to express
									yourself authentically and may “get” you in a way that no one else has. When this
									happens, it is extremely powerful and transformative.</p>
								<p>Therapy cannot change other people or external circumstances. Therapists provide
									psychoeducation, feedback, and guidance, but they don’t give advice or answers. If
									you’re new to therapy, or are exploring unprocessed trauma, therapy may make you
									feel a
									bit worse before you feel better.</p>
								<p>I can’t tell you how long it will take for you to feel better. But, generally, the
									more
									you
									put into therapy, the more you’ll get out of it.A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	<?php readfile('partials/my_footer.html') ?>

	<script src="js/pages.js"></script>

</body>
</html>