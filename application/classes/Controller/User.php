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
			  	 $myData= json_decode($_POST['myData']);		
			  	 $myData =  (array) $myData;
			  	 $useremail = $myData["email"];
			  	 $password = $myData["password"];

			  	if (empty($useremail))
			  		throw new Exception("empty email");
			  	if (empty($password))
			  		throw new Exception("empty password");

			    $account = new Model_User();	   
			    $userKnown  =  $account->authenf($useremail);
			   
				if ($userKnown==null)
						throw new Exception("unknown user");
					
				  if(!password_verify($password,$userKnown->UserPassword))
				  		throw new Exception("Invalid login or password");	

				  	$_SESSION["UserEmail"]=	$useremail;		  	

			  }
			  catch(Exception $e)
			  {			
			  	header('Content-type: application/json');
			  	echo '{"msgError":"'.$e->getMessage().'"}';
			  }

		}
		else
		{
			
			$this->response->body($view);
			
		}
	}
	public function action_getSession()
	{
		session_start();
		$session = json_encode($_SESSION);
		header('Content-type: application/json');
		echo $session ;
	}
	public function action_payment()
	{
		session_start();
		$view=View::Factory("payment/payment");
		$this->response->body($view);

	}
	
	public function action_register()
	{
		session_start();
		
		if ($_POST)
		{	 
			$myData= json_decode($_POST['myData']);		
			  $myData =  (array) $myData;
			  unset($myData["UserPassword2"]);
			 
			  try
			  {
			  	 $UserPassword = $myData["UserPassword"];
			  	 $UserFirstName = $myData["UserFirstName"];
			  	 $UserLastName = $myData["UserLastName"];
			  	 $UserEmail = $myData["UserEmail"];

			  	if (empty($UserLastName))
			  		throw new Exception("empty LastName");
			  	if (empty($UserFirstName))
			  		throw new Exception("empty FirstName");
			  	if (empty($UserPassword))
			  		throw new Exception("empty password");
			  	if (strlen($UserPassword)<8)
			  		throw new Exception("password must have at least 8 character");
			  	if (!filter_var($UserEmail,FILTER_VALIDATE_EMAIL))
			  		throw new Exception("Invalid email");
			  	
			  	 $UserPassword = password_hash($UserPassword,PASSWORD_DEFAULT);	

			    $account = new Model_User();
			   $myData["UserPassword"]=$UserPassword;
			    $accountId=$account->save($myData);
			   // $this->redirect("index");

			  }
			  catch(Exception $e)
			  {
			
			  	//$_SESSION["errorMessage"]= $e->getMessage();
			  	//$view=View::Factory("users/register");
			  	//$this->response->body($view);
			  	
			  	//header('Cache-Control: no-cache, must-revalidate');
				//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
				header('Content-type: application/json');
			  	echo '{"msgError":"'.$e->getMessage().'"}';
			  }

		}
		else
		{
			$view=View::Factory("users/register");
			$this->response->body($view);
		}

		
	}

	public function action_find()
	{
		$view=View::Factory("contact");
		$this->response->body($view);
	}
		

} // End class