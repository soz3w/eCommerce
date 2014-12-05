<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Product extends Controller {

	public function action_index()
	{
		//$this->response->body('hello, world!');
		$view=View::Factory("products/products");
		$view->name="Parametre";
		$this->response->body($view);
	}
	
	public function action_getProductsCount()
	{
		$prodModel = new Model_Product();
		$prodCount = $prodModel->getRowsCount();
		header('Content-type: application/json');
		echo json_encode($prodCount);
	}
	public function action_getProducts()
	{
		//output results from database
		$prodModel = new Model_Product();
		$products=$prodModel->getProducts(0,10);
		// JSON-encode the response
		header('Content-type: application/json');
		$json_response = json_encode($products);
		echo $json_response;
		
				
	}
	
	
} // End class