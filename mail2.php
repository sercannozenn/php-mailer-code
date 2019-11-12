<?

require("class.phpmailer.php");
 
error_reporting(E_STRICT);

date_default_timezone_set('europe/istanbul');

$mail=new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "acilnot@retailindesit.com";  // GMAIL username
$mail->Password   = "27071980";            // GMAIL password
$mail->CharSet="iso-8859-9";

$mail->SetFrom('acilnot@retailindesit.com', 'Alper Güleken');
$mail->AddReplyTo("acilnot@retailindesit.com","Alper Güleken");
$mail->Subject    = "Subject Kýsmý";
//$mail->Body="Body içerik kýsmý<b>bold</b>";

$mail->MsgHTML("Body içerik kýsmý<b>bold</b>");

$address = "acilnot@retailindesit.com";
$mail->AddAddress($address);

  if($mail->Send()) return true;

  else echo $mail->ErrorInfo; 

?>