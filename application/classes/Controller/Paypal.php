<?php

<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Paypal extends Controller {
	public function action_send()
	{
		$paypal = new Helper_Paypal();

		$paypal->addItem('Ground Coffee 40 oz', 'Ground Coffee 40 oz', 1, 7.5, 0.3);
		$paypal->addItem('Granola bars', 'Granola Bars with Peanuts', 5, 2, 0.2);

		$paypal->setCard("visa", "4417119669820331", "11", "2019", "012", "Joe", "Shopper");

		$paypal->setTotal(1.2, 1.3, 17.5, 20);

		$payment = $paypal->send();
		var_dump($payment);
		//if $payment['status']='success' payment ok
	}

}