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
