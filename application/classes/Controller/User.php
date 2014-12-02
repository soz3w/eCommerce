<?php defined('SYSPATH') or die('No direct script access.');


class Controller_User extends Controller {

	public function action_index()
	{
		//$this->response->body('hello, world!');
		$view=View::Factory("index");
		$view->name="Parametre";
		$this->response->body($view);
	}
	
	public function action_login()
	{
		
		session_start();
		$view=View::Factory("users/login");
		if ($_POST)
		{	 
			  try
			  {
			  	 $username = $_POST["username"];
			  	 $password = $_POST["password"];

			  	if (empty($username))
			  		throw new Exception("empty login");
			  	if (empty($password))
			  		throw new Exception("empty password");

			    $account = new Model_Account();	   
			    $userKnown  =  $account->authenf($username);

				if ($userKnown==null)
						throw new Exception("unknown user");
					
				  if(!password_verify($password,$userKnown->password))
				  		throw new Exception("Invalid login or password");

				  	$this->request->redirect("index");

			  }
			  catch(Exception $e)
			  {
			
			  	$_SESSION["errorMessage"]= $e->getMessage();
			  	$this->response->body($view);
			  }

		}
		else
		{
			$this->response->body($view);
			
		}
	}
	
	public function action_register()
	{
		session_start();
		$view=View::Factory("users/register");

		if ($_POST)
		{	 
			  try
			  {
			  	 $username = $_POST["username"];
			  	 $email = $_POST["email"];
			  	 $password = $_POST["password"];

			  	if (empty($username))
			  		throw new Exception("empty login");
			  	if (empty($password))
			  		throw new Exception("empty password");
			  	if (strlen($password)<8)
			  		throw new Exception("password must have at least 8 character");
			  	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
			  		throw new Exception("Invalid email");
			  	
			  	 $password = password_hash($_POST["password"],PASSWORD_DEFAULT);	

			    $account = new Model_User();
			    $_POST['password']=$password;
			    $accountId=$account->save($_POST);
			    $this->redirect("login");

			  }
			  catch(Exception $e)
			  {
			
			  	$_SESSION["errorMessage"]= $e->getMessage();
			  	$this->response->body($view);
			  }

		}
		else
		{
			$this->response->body($view);
		}

		
	}

	public function action_find()
	{
		$view=View::Factory("contact");
		$this->response->body($view);
	}
		

} // End class