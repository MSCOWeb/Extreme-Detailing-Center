<?php

// Settings:
$to = "valhalladetailing00@gmail.com"; // Where this form submission will be sent
$subject = "Valhalla Dealership Inquiry"; // Subject of generated e-mail
$email = htmlspecialchars(strip_tags($_POST['email']));
$message = "Email: $email"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If contact form was submitted


		$headers = "From: Valhalla Detailing <info@valhalladetailing.com>";

        // E-mail to company
        mail($to,$subject,$message,$headers);

        // E-mail to client
        mail($email,"Thank You From Valhalla Detailing","Thanks for requesting more information on our dealership services. We look forward to taking care of your detailing needs.\r\n\r\nOne of our Customer Service professionals will be contacting you shortly to set up a time for us to meet.\r\n\r\nPlease feel free to call us at (908) 623-7676 for immediate assistance during regular business hours.\r\n\r\nSincerely,\r\nGuy DiTommaso",$headers);


} else {
	die("No direct access allowed.");
} ?>