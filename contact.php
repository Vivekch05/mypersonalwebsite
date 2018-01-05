<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'vivek.kch05@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status==true) {
	/*?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php*/
echo "Thanq for the message .we will contact you shortly.";
}
 else {
	 /*?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to vivek.kch05@gmail.com');
		window.location = 'index.html';
	</script>
<?php*/
echo "Message failed,please send an email to vivek.ece18@gmail.com";
}
?>
