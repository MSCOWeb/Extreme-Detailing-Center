<?php
// November 6, 2014
// Catch-all form submission with Anti-spam shizz
// Make sure the HTML form inputs use the names "Name" and "Email" or change all instances here.
// USE AJAX TO SUBMIT - THERE ARE die()'s EVERYWHERE!!

// Settings:
$to = "valhalladetailing00@gmail.com"; // Where this form submission will be sent
$subject = strip_tags($_POST['subject']); // Subject of generated e-mail
//$bcc = "stephen@msmdesignz.com"; // BCC, if you feel so inclined
$from = "info@valhalladetailing.com"; // Where the e-mail is coming from - to both parties
$required = array("Name","Email"); // All required field names
// End settings

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If contact form was submitted
	// Start spam stuff - make sure you have the appropriate javascript - or ya done son. Or, just comment this section out.
	if(empty($_POST['timer'])) {
		dieSpam($_POST['Email']);
	} else {
		$timer = $_POST['timer'];
		if(!is_numeric($timer) || $timer < 3 || $timer > 9999) dieSpam($_POST['Email']);
	}
	unset($_POST['timer']);
	// End spam stuff

	$missing = array();
	foreach ($_POST as $key => &$value){
		$value = strip_tags(trim($value));
		if($value == ''){
			if(in_array($key,$required)) $missing[] = $key;
		}
		unset($value);
	}

    if(!empty($missing)){ // If a required field is missing
    	die("Please complete the $missing[0] field.");
    } else { // If everything checks out
    	extract($_POST);
    	if (!filter_var($Email,FILTER_VALIDATE_EMAIL)) die("Please provide a valid e-mail address.");

        // Set parameters/preferences/arguments for e-mail to company
        $headers = "From: $from" . "\r\n";
        if(!empty($bcc)) $headers .= "Bcc: $bcc" . "\r\n";
        $message = "";
        foreach ($_POST as $key => $value) {
        	if($key != "subject") $message .= str_replace('_',' ',ucfirst($key)) . ": $value\r\n\r\n";
        }

        // E-mail to company
        if(!mail($to,$subject,$message,$headers)) die("We've encountered an error. Please try again."); // Error sending mail

        if($subject == "Valhalla Appointment Request"){
       
	        // E-mail to client
	        @mail($Email,"Thank You From Valhalla Detailing","Thanks for scheduling an appointment with us! We look forward to taking care of your detailing needs.\r\n\r\nOne of our Customer Service professionals will be contacting you shortly to confirm your appointment.\r\n\r\nPlease feel free to call us at (908) 623-7676 for immediate assistance during regular business hours.\r\n\r\nSincerely,\r\nGuy DiTommaso","From: $from");
	    } else {
	    	@mail($Email,"Thank You From Valhalla Detailing","Thanks for filling out more our contact form. We look forward to taking care of your detailing needs.\r\n\r\nOne of our Customer Service professionals will be contacting you shortly regarding your message.\r\n\r\nPlease feel free to call us at (908) 623-7676 for immediate assistance during regular business hours.\r\n\r\nSincerely,\r\nGuy DiTommaso","From: $from");
	    }

        die("success"); // Success!
    }

} else {
	die("No direct access allowed.");
}

function dieSpam($Email = "No e-mail"){
	$file = "spam-log.txt";
	date_default_timezone_set('America/New_York');
	$date = date('m/d/Y h:i:s a');
	file_put_contents($file,"$date: $Email\r", FILE_APPEND | LOCK_EX);
	die("There was an error with your attempt to contact us."); // Nice try, spam-bro
} ?>