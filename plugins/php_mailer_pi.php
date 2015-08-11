<?php //if (!defined('BASEPATH ')) exit('No direct script access allowed ');

function mailer_to($to,$subject,$body)
{
	require_once("class.phpmailer.php");
	$mail3 = new PHPMailer();
	
	$mail3->IsSMTP();  // telling the class to use SMTP
	$mail3->Host     = "mail.pp3.co.id"; // SMTP server
	$mail3->SMTPAuth = true; // enable SMTP authentication
	$mail3->SMTPSecure = "ntlm"; // sets the prefix to the servier
	$mail3->IsHTML(true);

	$mail3->Username = "support.si@pp3.co.id"; // GMAIL username
	$mail3->Password = "pelindo3pusat"; // GMAIL password 
	
	$mail3->SetFrom('support_si@pp3.co.id','Subdit. Sistem Informasi Kantor Pusat Pelindo III');
	$mail3->AddAddress($to);
	
	$headers	= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: support_si@pp3.co.id <Subdit. Sistem Informasi Kantor Pusat Pelindo III>\r\n";
	
	
    $mail3->Subject  = $subject;
	$mail3->Body     = $body;
	$mail3->AddCustomHeader( $headers);
	$mail3->WordWrap = 100;

	if(!$mail3->Send()) {
	  echo 'Email tidak terkirim.';
	  echo 'Mailer error: ' . $mail3->ErrorInfo;
	} else {
	  echo 'Email Terkirim.<br>';
	}
}
?>