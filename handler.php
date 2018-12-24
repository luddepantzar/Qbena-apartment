<?php
if(isset( $_POST['name']))
  $name = $_POST['name'];
if(isset( $_POST['email']))
  $email = $_POST['email'];
if(isset( $_POST['message']))
  $message = $_POST['message'];
if(isset( $_POST['subject']))
  $subject = $_POST['subject'];

  if ($name === ''){
    echo "Du måste skriva in ditt namn.";
    die();
  }
  if ($email === ''){
    echo "Du måste skriva in din email.";
    die();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "Inte en giltig email";
      die();
    }
  }
  if ($subject === ''){
    echo "Du måste ha med ett ämne.";
    die();
  }
  if ($message === ''){
    echo "Ett meddelande krävs om du önskar att få hjälp av oss.";
    die();
  }

$content= utf8_decode("
Hej!

Ditt kontakt formulär har blivit besvarat av:

Namn: $name

E-mail: $email

Kundens meddelande:
$message

Meddelande slut.
");
$recipient = "thomas@qbena.se";
$mailheader = "From: $email \r\n";

if(mail($recipient, $subject, $content, $mailheader) or die("Error!"))
{
    header("Location:ThanksForMailing.html"); 
}
?>