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

				<p class="section_text">We work with
					a wide range of mental health concerns including depression,
					anxiety, grief &amp; loss, self-esteem &amp; self-image, stress
					management, life transitions, shame &amp; guilt, trauma, finding
					purpose and meaning, caregiver support, older adult challenges,
					professional workplace stress, anger management, addiction,
					and LGBTQ+ concerns.
				</p>

				<div id="specialties_accordion">
					<div class="card">
						<button class="card-header" id="anxiety_heading" role="button" data-toggle="collapse"
							data-target="#anxiety_collapse" aria-expanded="true" aria-controls="anxiety_collapse">
							<h5>Anxiety</h5>
						</button>

						<div id="anxiety_collapse" class="collapse show" aria-labelledby="anxiety_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								TODO
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
						<button class="card-header collapsed" id="stress_management_heading" role="button"
							data-toggle="collapse" data-target="#stress_management_collapse" aria-expanded="false"
							aria-controls="stress_management_collapse">
							<h5>Stress Management</h5>
						</button>

						<div id="stress_management_collapse" class="collapse"
							aria-labelledby="stress_management_heading" data-parent="#specialties_accordion">
							<div class="card-body section_text">
								TODO
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="coping_skills_heading" role="button"
							data-toggle="collapse" data-target="#coping_skills_collapse" aria-expanded="false"
							aria-controls="coping_skills_collapse">
							<h5>Coping Skills</h5>
						</button>

						<div id="coping_skills_collapse" class="collapse" aria-labelledby="coping_skills_heading"
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
									Feel free to reach out to us via phone or email to set up an initial intake
									appointment and get
									started today!</p>
								<p>Here are some ways that therapy can help:</p>
								<ul>
									<li>To learn how to be present in the moment</li>
									<li>To connect better and have meaningful intimate relationships</li>
									<li>To work through anger and aggression</li>
									<li>To improve communication in relationships</li>
									<li>To find solutions to deal with stressors at work and home</li>
									<li>To better emotional connectedness to self &amp; others</li>
									<li>To connect with other men while keeping ‘manhood’</li>
									<li>To learn about power &amp; control</li>
									<li>To participate in self-care</li>
									<li>To find a sense of direction and purpose in life</li>
									<li>To engage in and express sexuality in a helpful way</li>
									<li>To be the best family member and support</li>
								</ul>
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
						<button class="card-header collapsed" id="trauma_heading" role="button" data-toggle="collapse"
							data-target="#trauma_collapse" aria-expanded="false" aria-controls="trauma_collapse">
							<h5>Trauma</h5>
						</button>

						<div id="trauma_collapse" class="collapse" aria-labelledby="trauma_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								TODO
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
									knowledge, is quite distinct. It is a rare and exceptional attainment that cannot be
									realized merely
									from text. Some believe that it is acquired as time passes, involving insight and
									deeper
									understanding of human existence. Individuals in late life often have a collection
									of stories and
									tales that fill the chapters of their own existence. Therapy is complementary to
									these mature
									experiences and life events. By uniting therapy with wisdom, healing of the past can
									begin to
									take shape.</p>
								<p>Navigating late life transitions can be challenging and quite complex. Holding on to
									the past and
									living in regret can hold us back from our full potential. Therapy unlocks the door
									to the past by
									exploring memories. As an older adult, you truly deserve fully healing from the past
									by letting go
									of regret.</p>
								<p>Words by Aristotle, “Wisdom cannot be misused. To act wisely, is to act well; even as
									to have
									wisdom is to use it.”</p>
								<p>Lindsey offers individual counseling for mature adults who want to continue to live a
									full
									and vibrant life. She can assist in processing grief, purpose, and memories and
									experiences from the past are the threads that create the beautiful tapestry that we
									call
									life. Although the body and brain may develop ailments, the mind and spirit still
									are
									alive! Therapy is a wonderful tool that can help one continue experiencing all that
									life
									has to offer. She will sit beside you as you regain the treasure to live in the
									moment,
									while cherishing the past and arriving at peace with the future.</p>
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
								Lindsey is specially trained to understand and know how to work with age related
								cognitive decline. As we know, life is ever changing, as we get older if we misplace our
								keys or forget to turn the stove off, we work to adapt. She will help you to accommodate
								age related cognitive impairment. By bringing mindfulness and guided imagery into
								session, we help to illumine your memories while activating your working memory. By
								restoring hobbies, interest, and coping skills from the past you will find yourself
								reflecting on the beauty before you, while enjoying every moment that is now.
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
								<p>Physical and cognitive impairments affect not only the individual, but also family
									members and
									loved ones. Caregivers may face high stress, frustration, and guilt. Through
									extensive work with
									older adults, I’m aware of these stressors and specialize in helping caregivers
									create coping
									strategies to decrease stress and caregiver fatigue. I take pride in helping my
									clients find peace
									with their decisions throughout the late life process.</p>
								<p>It’s important to know when to ask for help, counseling and support to caregivers can
									be
									crucial in supporting your loved one. Cognitive decline and physical ailments can
									impact
									the family system greatly. We know that navigating late life transitions can be
									challenging, not only for the individual, but also for family members and their
									loved
									ones. Caregivers may face high stress, frustration, and guilt. Lindsey helps to
									bring
									awareness to these stressors and specializes in helping caregivers create coping
									strategies to decrease stress and caregiver fatigue. Moreover, she understands that
									navigating senior care and the healthcare system, can be extremely challenging. She
									can help you to find peace, with your decisions throughout the process.</p>
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
								Lindsey is here to support, care, and assist you when you lose someone special and
								dear. The stages of grief are not as rigid as one may think, in that they flow with the
								currents of the sea. Some days may be more taxing than other, all the while we are
								passionate to help you find peace. Our safe and healing space allows for contemplation
								of life and death. We will help you find peace and healing throughout your journey.
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
						<button class="card-header collapsed" id="self_esteem_issues_heading" role="button"
							data-toggle="collapse" data-target="#self_esteem_issues_collapse" aria-expanded="false"
							aria-controls="self_esteem_issues_collapse">
							<h5>Self Esteem</h5>
						</button>

						<div id="self_esteem_issues_collapse" class="collapse"
							aria-labelledby="self_esteem_issues_heading" data-parent="#specialties_accordion">
							<div class="card-body section_text">
								TODO
							</div>
						</div>
					</div>
					<div class="card">
						<button class="card-header collapsed" id="anger_management_heading" role="button"
							data-toggle="collapse" data-target="#anger_management_collapse" aria-expanded="false"
							aria-controls="anger_management_collapse">
							<h5>Anger Management</h5>
						</button>

						<div id="anger_management_collapse" class="collapse" aria-labelledby="anger_management_heading"
							data-parent="#specialties_accordion">
							<div class="card-body section_text">
								TODO
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