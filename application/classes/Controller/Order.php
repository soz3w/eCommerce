<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Order extends Controller {

	public function action_index()
	{
		//$this->response->body('hello, world!');
		$view=View::Factory("orders/order");
		//$view->name="Parametre"; bind d'une valeur pour la vue, $name dans la vue
		$this->response->body($view);
	}
	public function action_getSessionId()
	{
		session_start();
		$sessionId = session_id();
		header('Content-type: application/json');
		echo '{"sessionId":"'.$sessionId.'"}';
	}
	
	public function action_getOrdersCount()
	{
		session_start();
		$prodModel = new Model_Product();
		$prodCount = $prodModel->getRowsCount();
		header('Content-type: application/json');
		echo json_encode($prodCount);
	}
	public function action_getOrders()
	{
		session_start();
		//output results from database

		$prodModel = new Model_Product();

		if ($_POST)
		{	 
			$myData= json_decode($_POST['myData']);		
			$myData =  (array) $myData;
			$page = filter_var($myData["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);			
			if(!is_numeric($page))
				die('Invalid page number!');
			
			$item_per_page = filter_var($myData["item_per_page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
			if(!is_numeric($item_per_page))
				die('Invalid item per page value!');	  	
			
			$position = ($page * $item_per_page);
			$products=$prodModel->getProducts($position,$item_per_page);
		}
		else
		{
			$products=$prodModel->getProducts(0,10);
		}
		unset($prodModel);
		// JSON-encode the response
		header('Content-type: application/json');
		$json_response = json_encode($products);
		echo $json_response;
		
				
	}
	
	
} // End class