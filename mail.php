<?php

/*
** FICHIER application/classes/Helper/Mail.php
*/

require_once Kohana::find_file('vendor','swiftmailer/lib/swift_required');

class Helper_Mail
{
	private $config;
	private $mailer;

	public function __construct()
	{
		$this->config = new Helper_Config("config.ini");

		$host = $this->config->get('host', 'mail');
		$username = $this->config->get('username', 'mail');
		$password = $this->config->get('password', 'mail');
		$port = $this->config->get('port', 'mail');
		

		$transport = Swift_SmtpTransport::newInstance($host, $port, 'ssl')->setusername($username)->setPassword($password);

		$this->mailer = Swift_Mailer::newInstance($transport);
	}

	public function send($to, $subject, $body, $isHTML = true)
	{
		$message = Swift_Message::newInstance();

		$from = $this->config->get('from', 'mail');
		$message->setFrom($from);

		if (!is_array($to))
			$to = array($to);
		$message->setTo($to);
		
		$message->setSubject($subject);
		$message->setBody($body);

		return $this->mailer->send($message);
	}

}

/*
** S'UTILISE DE LA MANIERE SUIVANTE :
*/

$mail = new Helper_Mail();
$subject = "Sujet du mail";
$body = "Contenu du mail"
$address = "destinataire@mail.com" // Il est possible d'utiliser un tableau : array("roger@gmail.com", "bryan@yahoo.fr")
$mail->send($address, $subject, $mail);


/*
** PENSER A RAJOUTER LA SEQUENCE SUIVANTE DANS LE FICHIER config.ini
*/

[mail]
username="xxxxx@gmail.com"
password="xxxxx"
host="smtp.gmail.com"
port=465
from="xxxxx@gmail.com"
	
	
