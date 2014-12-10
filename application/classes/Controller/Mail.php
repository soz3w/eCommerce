<?php

<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Mail extends Controller {
	public function action_send()
	{
		$mail = new Helper_Mail();
		$subject = "Sujet du mail";
		$body = "Contenu du mail"
		$address = "destinataire@mail.com" // Il est possible d'utiliser un tableau : array("roger@gmail.com", "bryan@yahoo.fr")
		$mail->send($address, $subject, $mail);
	}

}
