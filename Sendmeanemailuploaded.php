<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	function sanitize_my_email($field) {
		$field = filter_var($field, FILTER_SANITIZE_EMAIL);
		if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
			return true;
		} else {
			return false;
		}
	}	
 
$msg = 'hey there emily';
$subject = 'Someone Contacted you Emily.';
$to_email = 'emilywright026@gmail.com';
$header = 'From: noreply@emilythewright.com';
$secure_check = sanitize_my_email($to_email);
	if ($secure_check == false) {
		echo "Invalid Input";
	} else {
		mail($to_email, $subject, $msg, $header);
		echo "Thanks, your message  was sent to Emily.";
	}
?>

</body>
</html>