<!doctype html>
<html lang="en">

<head>
	<?php readfile('partials/my_header.html') ?>
	<link rel="stylesheet" href="css/specialities.css">
</head>

<body>
	<?php readfile('partials/my_navbar.html') ?>

	</div> <!-- NOTE: this "dangling /div, it is important (due to the dynamic parallax) to have this on each page! -->
	<div id="triggerHack"></div> <!-- NOTE: this is VERY IMPORTANT; must exist on each page! -->

	<div class="section container">
		<div class="row align-items-center">
			<div class="col-md-1"></div>

			<div class="col-md-10">
				<h4 class="section_title">Specialities <span class="section_subtitle">Your Needs</span></h4>

				<div class="section_text">
					<p>
						At Mindful Living Counseling & Wellness, we offer therapy to individuals across the lifespan and
						assist in helping our clients work through a myriad of mental health related concerns. Please
						see
						our extensive list below.
						If you don’t see your current concern listed below, feel free to reach out to our team, as we’re
						happy to help you find the right fit regardless if it’s at Mindful Living or with another
						provider!
					</p>
				</div>
				<div id="specialties_accordion">
					<div class="card">
						<button class="card-header" id="anxiety_heading" role="button" data-toggle="collapse"
							data-target="#anxiety_collapse" aria-expanded="true" aria-controls="anxiety_collapse">
							<h5>Anxiety / Stress Management</h5>
						</button>

						<div id="anxiety_collapse" class="collapse show" aria-labelledby="anxiety_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								In this day and age, fear and worry are around us everywhere we turn. From reaching the
								social standards that are set before us on social media - to living up to the
								expectations of the generations before us, we have big shoes to fill. Many of these
								expectations are simply not feasible and can feel nearly impossible to reach. At mindful
								living we strive to help our clients break free from the social standards and feel
								grounded in who they are today. We can begin to let go of worry by finding strength in
								who we are, regardless of external expectations. By practicing mindfulness via deep
								breathing, connection with the five senses, and meditation, our worries will begin to
								melt away. At Mindful Living, we strive to help our clients bring awareness to what does
								not serve us and aid in finding momentum for change and inner peace.
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="depression_heading" role="button"
							data-toggle="collapse" data-target="#depression_collapse" aria-expanded="false"
							aria-controls="depression_collapse">
							<h5>Depression</h5>
						</button>

						<div id="depression_collapse" class="collapse" aria-labelledby="depression_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								The darkness of depression can be all consuming. It engulfs us and tries our will
								in so many ways. Climbing out of this dark space, takes great courage. Understanding
								‘the self’ and our multi facets nature of being can aid in bringing in the yang, the
								lightness, the balance. By casting light on these dark areas, we can get to know our
								friend depression. Seeing it as an old friend and sharing compassion, we can see the
								lightness and appreciate it in greater form. Although many moments may be shown to
								try us in ways unimaginable, the lightness is there if we welcome it. Keeping an
								openness to our being lets the light shine in, keep on through this muddy water and
								eventually things will turn to shards of yellow, green, and gold.
							</div>
						</div>
					</div>

					<div class="card">
						<button class="card-header collapsed" id="social_anxiety_heading" role="button"
							data-toggle="collapse" data-target="#social_anxiety_collapse" aria-expanded="false"
							aria-controls="social_anxiety_collapse">
							<h5>Social Anxiety</h5>
						</button>

						<div id="social_anxiety_collapse" class="collapse" aria-labelledby="social_anxiety_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								The worry of what others will think of our appearance, speech, or unique quirks can
								consume us from time to time. The stress of interacting with others can be overwhelming
								and create fear, limiting our ability to pursue our dreams and aspirations. Often times
								if we let go of external judgments and find contentment in who we are today, we can
								arrive at internal confidence. If you feel uncomfortable in relating with others,
								whether it’s coworkers, peers, family or friends, therapy can help you grow from this
								space and find new ways to communicate and connect.
							</div>
						</div>
					</div>


					<div class="card">
						<button class="card-header collapsed" id="professionals_heading" role="button"
							data-toggle="collapse" data-target="#professionals_collapse" aria-expanded="false"
							aria-controls="professionals_collapse">
							<h5>Professionals</h5>
						</button>

						<div id="professionals_collapse" class="collapse" aria-labelledby="professionals_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								Often times we hear the phrase work/life balance, yet for many it seems hardly
								attainable. Between navigating the stressors that present at work with our co-workers to
								managing expectations of a large company, the pressure can get overwhelming. At Mindful
								Living we have helped numerous individuals to thrive within a professional environment
								for years. If you’re looking for help in sharpening workplace communication skills,
								setting professional boundaries, or managing organizational expectation, amongst others,
								you’ve come to the right place. It’s okay to get help, especially when managing the
								stress of a challenging organization!
							</div>
						</div>
					</div>


					<div class="card">
						<button class="card-header collapsed" id="relationship_issues_heading" role="button"
							data-toggle="collapse" data-target="#relationship_issues_collapse" aria-expanded="false"
							aria-controls="relationship_issues_collapse">
							<h5>Relationship Issues</h5>
						</button>

						<div id="relationship_issues_collapse" class="collapse"
							aria-labelledby="relationship_issues_heading" data-parent="#specialties_accordion">
							<div class="card-body section_text">
								TODO
							</div>
						</div>
					</div>

					<div class="card">
						<button class="card-header collapsed" id="womens_health_heading" role="button"
							data-toggle="collapse" data-target="#womens_health_collapse" aria-expanded="false"
							aria-controls="womens_health_collapse">
							<h5>Women's Health</h5>
						</button>

						<div id="womens_health_collapse" class="collapse" aria-labelledby="womens_health_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								TODO
							</div>
						</div>
					</div>

					<div class="card">
						<button class="card-header collapsed" id="mens_counseling_heading" role="button"
							data-toggle="collapse" data-target="#mens_counseling_collapse" aria-expanded="false"
							aria-controls="mens_counseling_collapse">
							<h5>Men's Counseling</h5>
						</button>

						<div id="mens_counseling_collapse" class="collapse" aria-labelledby="mens_counseling_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								<p>You shouldn’t have to feel ashamed to ask for help too.
									Relationships, communication, feelings of isolation, and anger often challenge us
									throughout our
									journey. These are some of the common issues that men deal with, and sometimes deal
									with
									differently then women. Societal roles and expectations can create a more complex
									emotional
									state, yet less connection to deeper emotions. Often times, men believe that they
									should just put
									their heads down and power through life’s difficulties. How many times have you
									heard the
									phrase, “stop crying and be a man”, or “toughen up”? The truth is, you shouldn’t
									have to feel
									ashamed to ask for help too! In the long run, these emotional barriers will cause us
									to isolate or
									explode externally.</p>
								<p>Traditionally and societally, men are told to be strong and hold it together for
									their family or
									partner, but honestly, we are all human and most definitely can all benefit from a
									helping hand.
									No matter what gender or sexual identity, we all go through life’s challenges, so
									it’s okay to ask
									for help. Neurobiologically all genders, including men, have an area in the brain
									called the
									amygdala, which is the main powerhouse for emotional processing. It’s no question
									that this area
									in the brain is working for men too, therefore, there’s no need to struggle alone.
									Whether you’re
									dealing with work stress or facing a tough decision, if you need someone to talk to
									were here to
									help!</p>
								<p>Our counselors have studied the psychology of societal expectations and masculinities
									for years.
									We bring this study to our work with men on issues and challenges specific to men.
									No matter
									what your struggling with: a life transition, divorce, trauma, loss for a partner or
									friend, anger,
									stress from work or home, etc, we can help you through this challenging time.
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="binge_eating_disorder_heading" role="button"
							data-toggle="collapse" data-target="#binge_eating_disorder_collapse" aria-expanded="false"
							aria-controls="binge_eating_disorder_collapse">
							<h5>Binge Eating Disorder</h5>
						</button>

						<div id="binge_eating_disorder_collapse" class="collapse"
							aria-labelledby="binge_eating_disorder_heading" data-parent="#specialties_accordion">
							<div class="card-body section_text">
								The vicious cycle of addiction does not only come in the form of drugs &amp; alcohol.
								Getting caught between what is good for our health and what we should be doing,
								When we crave to lose weight, yet we continue to eat out of control, we harm ourselves
								long term and out actions constantly contradict itself.
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="aging_mature_adults_heading" role="button"
							data-toggle="collapse" data-target="#aging_mature_adults_collapse" aria-expanded="false"
							aria-controls="aging_mature_adults_collapse">
							<h5>Aging &amp; Mature Adults</h5>
						</button>

						<div id="aging_mature_adults_collapse" class="collapse"
							aria-labelledby="aging_mature_adults_heading" data-parent="#specialties_accordion">
							<div class="card-body section_text">
								<p>Through experience and knowledge comes great wisdom. Wisdom, although related to
									knowledge, is quite distinct. It is a rare and exceptional attainment that cannot
									be realized merely from text. Some believe that it is acquired as time passes,
									involving insight and deeper understanding of human existence.
									Individuals in late life often have a collection of stories and tales that fill the
									chapters of their own existence. Therapy is complementary to these mature
									experiences and life events. By uniting therapy with wisdom, healing of the past can
									begin to take shape.
								</p>
								<p>Navigating late life transitions can be challenging and quite complex. Holding on to
									the past and living in regret can hold us back from our full potential.
									Therapy unlocks the door to the past by exploring memories. As an older adult, you
									truly deserve fully healing from the past by letting go of regret.
								</p>
								<p>Words by Aristotle, “Wisdom cannot be misused. To act wisely, is to act well; even as
									to have wisdom is to use it.”
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="cognitive_decline_heading" role="button"
							data-toggle="collapse" data-target="#cognitive_decline_collapse" aria-expanded="false"
							aria-controls="cognitive_decline_collapse">
							<h5>Cognitive Decline</h5>
						</button>

						<div id="cognitive_decline_collapse" class="collapse"
							aria-labelledby="cognitive_decline_heading" data-parent="#specialties_accordion">
							<div class="card-body section_text">
								At Mindful Living we are specially trained to understand and know how to work with age
								related cognitive decline. As we know, life is ever changing, as we get older if we
								misplace our keys or forget to turn the stove off, we work to adapt. We will help you
								to accommodate age related cognitive impairment. By bringing mindfulness and guided
								imagery into session, we help to illumine your memories while activating your working
								memory. By restoring hobbies, interest, and coping skills from the past you will find
								yourself reflecting on the beauty before you, while enjoying every moment that is now.
							</div>
						</div>
					</div>

					<div class="card">
						<button class="card-header collapsed" id="caretaker_support_heading" role="button"
							data-toggle="collapse" data-target="#caretaker_support_collapse" aria-expanded="false"
							aria-controls="caretaker_support_collapse">
							<h5>Caretaker Support</h5>
						</button>

						<div id="caretaker_support_collapse" class="collapse"
							aria-labelledby="caretaker_support_heading" data-parent="#specialties_accordion">
							<div class="card-body section_text">
								<p>It’s important to know when to ask for help, counseling and support to caregivers can
									be crucial in supporting your loved one. Cognitive decline and physical ailments can
									impact the family system greatly. We know that navigating late life transitions can
									be
									challenging, not only for the individual, but also for family members and their
									loved
									ones. Caregivers may face high stress, frustration, and guilt. Our threapists help
									to
									bring awareness to these stressors and specializes in helping caregivers create
									coping
									strategies to decrease stress and caregiver fatigue. Moreover, we understand that
									navigating senior care and the healthcare system, can be extremely challenging.
									We can help you to find peace, with your decisions throughout the process.
								</p>
								<p>Physical and cognitive impairments affect not only the individual, but also family
									members and loved ones. Caregivers may face high stress, frustration, and guilt.
									Through extensive work with older adults, We are aware of these stressors and
									specialize
									in helping caregivers create coping strategies to decrease stress and caregiver
									fatigue.
									At Mindful Living we take pride in helping my
									clients find peace with their decisions throughout the late life process.
								</p>
							</div>
						</div>
					</div>

					<div class="card">
						<button class="card-header collapsed" id="grief_loss_heading" role="button"
							data-toggle="collapse" data-target="#grief_loss_collapse" aria-expanded="false"
							aria-controls="grief_loss_collapse">
							<h5>Grief &amp; Loss</h5>
						</button>

						<div id="grief_loss_collapse" class="collapse" aria-labelledby="grief_loss_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								Mindful Living is here to support, care, and assist you when you lose someone special
								and
								dear. The stages of grief are not as rigid as one may think, in that they flow with the
								currents of the sea. Some days may be more taxing than other, all the while we are
								passionate to help you find peace. Our safe and healing space allows for contemplation
								of life and death. We will help you find peace and healing throughout your journey.
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