var validate = function () {
	$("#sending_message").toggleClass("d-none");
	$("#submit_button").attr('disabled', NaN);

	var first_name = $("#firstName").val();
	var last_name = $("#lastName").val();
	var email = $("#emailAddress").val();
	var phone = $("#phoneNumber").val();
	var loc = $("#location").val();
	var what = $("#what").val();
	var phone_consult = $("#phoneConsult").is(":checked");
	var how = $("#how").val();

	while (what.indexOf('\n') != -1)
		what = what.replace('\n', "<br>");

	var subject = "[MindfulLivingCW] " + first_name + " " + last_name + " [request]";
	var body = "<p>[First Name] : " + first_name + "</p>\n" +
		"<p>[Last Name] : " + last_name + "</p>\n" +
		"<p>[Email] : " + email + "</p>\n" +
		"<p>[Phone] : " + phone + "</p>\n" +
		"<p>[Location] : " + loc + "</p>\n\n" +
		"<p>[What brings you to therapy?] :\n<br>" + what + "<br>\n\n" +
		"<p>[Phone Consult Requested?] : " + phone_consult + "</p>\n" +
		"<p>[How did you hear about us?] : " + how + "</p>\n"

	Email.send({
		Host: "mail.mindful-living.org",
		Username: "noreply@mindful-living.org",
		Password: "Pdrezsek@54PoE!3",
		To: 'MindfulLivingCW@gmail.com',
		From: "noreply@mindful-living.org",
		Subject: subject,
		Body: body
	}).then(
		message => {
			$("#sending_message").toggleClass("d-none");
			if (message === "OK") {
				$("#success_message").toggleClass("d-none")
				if (phone_consult) {
					$("#consult_message").toggleClass("d-none")
				}

				Email.send({
					Host: "mail.mindful-living.org",
					Username: "noreply@mindful-living.org",
					Password: "Pdrezsek@54PoE!3",
					To: email,
					From: "noreply@mindful-living.org",
					Subject: subject,
					Body: "<p>Thank you for your message.  We will contact you within 48 hours.</p>\n" + "<p>---</p>\n<p>Your message:</p>\n" + body
				}).then(
					message => { }
				);
			} else {
				$("#fail_message").toggleClass("d-none")
			}
		}
	);
}
