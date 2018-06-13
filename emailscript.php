<?php

$to= "basavarajucm.1rn15mca13@gmail.com";
$subject= "confirmation message";
$message= "Thank you for Contacting";
$headers= "From: basu44567@gmail.com";

if(mail($to, $subject, $message, $headers))
{
  echo "your message has been sent";
}
else
{
	echo "error";
}
?>