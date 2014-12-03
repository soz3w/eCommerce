<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Product extends Controller {

	public function action_index()
	{
		//$this->response->body('hello, world!');
		$view=View::Factory("index");
		$view->name="Parametre";
		$this->response->body($view);
	}
	
	public function action_getProductsCount()
	{
		$prodModel = new Model_Product();
		$prodCount = $prodModel->getRowsCount();
		header('Content-type: application/json');
		echo '{"total":"'.$prodCount.'"}';
	}
	public function action_getProducts()
	{
		
		/*$item_per_page=6;


		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
		if(!is_numeric($page_number)){die('Invalid page number!');}

		$position = ($page_number * $item_per_page);


		$prodModel = new Model_Product();
		$prodCount = $prodModel->getRowsCount();
		$total_rows = $prodCount [0]["totalRows"];
		$pages = ceil($total_rows/$item_per_page); 

		//create pagination
		$pagination = '';
		if($pages > 1)
		{

		    $pagination .= '<ul class="paginate pagination pagination-sm"><li><a href="#">&larr; Previous</a></li>';
		    for($i = 1; $i<$pages; $i++)
		    {
		           if ($i==$page_number+1)    	
		        		$pagination .= '<li class=active id='.$i.'-li><a href="#" onclick="return false;" class="paginate_click" id="'.$i.'-page">'.$i.'</a></li>';
		        	else
		        		$pagination .= '<li id='.$i.'-li><a href="#" onclick="return false;" class="paginate_click" id="'.$i.'-page">'.$i.'</a></li>';
		       

		    }
		    $j=$i+1;
		    $pagination .= '<li id='.$j.'-linext><a href="#" onclick="return false;" class="paginate_click" id="'.$j.'-page">'.$j.'</a></li></ul>';
		}
			*/


		//output results from database
		$prodModel = new Model_Product();
		$products=$prodModel->getProducts(0,1000);
		/*foreach ($posts as $k=>$p) {
			echo "<article class='col-sm-6'>
			       <div class='panel panel-warning'>
					  <div class='panel-heading'>
					    <h3 class='panel-title'>".$p["title"]."---".$p["id"]."</h3>
					  </div>
					  <div class='panel-body'><p><img class='img-thumbnail' src='images/actu.jpg' class='col-sm-3'>".substr($p["content"],0,500)."...</p>
					  <p class='text-right'><a href='#' onclick='return false;' class='continueReading pull-right' id=".$p["id"].">continue reading...</a></p></div>".
				   	"<div class='panel-footer'><small><p class='created'><span class='glyphicon glyphicon-time'></span> ".$p["created"].
				   	"<span class='pull-right'>by ".$p["login"]." <span class='glyphicon glyphicon-user'></span></span></p></small></div>
				   </div>
				 </article>";
		}

		echo $pagination;*/
			    

		// JSON-encode the response
		echo $json_response = json_encode($products);
				
	}
	
	
} // End class