<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$date = $_POST['date'];
	$time = $_POST['time'];
    $message = $_POST['service'];

    // Set the recipient email address
    $to = "richa.hospitalityminds@gmail.com , dhobeellc@gmail.com, support@dhobeeuae.com, jagdeep@hospitalityminds.com";
	

    // Set the email subject
    $subject = "Contact Form of Dhobee";

    // Set the email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Build the email content
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Phone: $phone\n";
	$emailContent .= "Date: $date\n";
	$emailContent .= "Time: $time\n";
    $emailContent .= "Service: $message\n";

    // Send the email
    $mailSent = mail($to, $subject, $emailContent, $headers);

    // Check if the email was sent successfully
    // if ($mailSent) {
    //     echo "Thank you for your message. We will get back to you soon!";
    // } else {
    //     echo "Sorry, there was an error sending your message. Please try again later.";
    // }
    if ($mailSent) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}
?>