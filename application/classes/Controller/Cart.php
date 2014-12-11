<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Cart extends Controller {

	public function action_getCart()
	{
		//$this->response->body('hello, world!');
		$view=View::Factory("cart/cart");
		//$view->name="Parametre"; bind d'une valeur pour la vue, $name dans la vue
		$this->response->body($view);
	}
	public function action_saveCart()
	{
		
	}
	
	
	
	
	
} // End class