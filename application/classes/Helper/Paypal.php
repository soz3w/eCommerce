/*
* FICHIER application/classes/model/Paypal.php
*/

<?php

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\CreditCard;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Transaction;

require_once Kohana::find_file('vendor','paypal/autoload');


class Helper_Paypal
{
	private $config;
	private $accessToken;
	private $fundingInstrument;
	private $items;
	private $transaction;
	

	public function __construct()
	{
		$this->config = new Helper_Config("config.ini");
		$id = $this->config->get("id", "paypal");
		$secret = $this->config->get("secret", "paypal");
		$this->items = array();

		$oauthCredential = new OAuthTokenCredential($id, $secret);
		$this->apiContext = new ApiContext(new OAuthTokenCredential(
		$id, $secret));
		$this->apiContext->setConfig(
	        array(
	            'mode' => 'sandbox',
	            'http.ConnectionTimeOut' => 30,
	            'log.LogEnabled' => true,
	            'log.FileName' => 'application/logs/PayPal.log',
	            'log.LogLevel' => 'FINE',
	            'validation.level' => 'log',
	            'cache.enabled' => 'true'
	        )
	    );
	}

	public function setCard($type, $number, $month, $year, $cvv, $firstname, $lastname)
	{
		$card = new CreditCard();
		$card->setType($type)
		    ->setNumber($number)
		    ->setExpireMonth($month)
		    ->setExpireYear($year)
		    ->setCvv2($cvv)
		    ->setFirstName($firstname)
		    ->setLastName($lastname);

	    $this->fundingInstrument = new FundingInstrument();
		$this->fundingInstrument->setCreditCard($card);
	}

	public function addItem($name, $description, $quantity, $price, $tax, $currency = "EUR")
	{
		$item = new Item();
		$item->setName($name)
		    ->setDescription($description)
		    ->setCurrency($currency)
		    ->setQuantity($quantity)
		    ->setTax($tax)
		    ->setPrice($price);
		    array_push($this->items, $item);
	}

	public function setTotal($shipping, $tax, $subtotal, $total, $currency = "EUR")
	{
		$details = new Details();
		$details->setShipping($shipping)
		    ->setTax($tax)
		    ->setSubtotal($subtotal);

		$amount = new Amount();
		$amount->setCurrency($currency)
		    ->setTotal($total)
		    ->setDetails($details);

		$itemList = new ItemList();
		$itemList->setItems($this->items);

		$this->transaction = new Transaction();
		$this->transaction->setAmount($amount)
		    ->setItemList($itemList)
		    ->setDescription("Payment description")
		    ->setInvoiceNumber(uniqid());
	}

	public function send()
	{
		$payer = new Payer();
		$payer->setPaymentMethod("credit_card")
		    ->setFundingInstruments(array($this->fundingInstrument));

		$payment = new Payment();
		$payment->setIntent("sale")
		    ->setPayer($payer)
		    ->setTransactions(array($this->transaction));

   		 $request = clone $payment;

	    try {
		    $payment->create($this->apiContext);
		} catch (Exception $ex) {
		    return array(
		    	"status" => "error",
		    	"error" => $ex->getMessage(),
		    	"exception" => $ex
		    	);
		}
		return array(
			"status" => "success", 
			"paymentId" => $payment->getId()
			);
	}

}

/*
** Exemple d'utilisation
*/




/*
** A RAJOUTER DANS config.ini
*/
