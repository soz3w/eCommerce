<?php
class Helper_database
{
	private $db;
	public function __construct()
	{
		
		try
		{
			$config= new Helper_config();
			$config->loadFile("config.ini");
			$user = $config->get("dbuser","database");
			$password = $config->get("dbpassword","database");
			$dns = $config->get("dbdns","database");
			$this->db = new PDO($dns,$user,$password);			
			$this->db->exec("SET NAMES UTF8");
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOExecption $e) {         
        		print "Error!: " . $e->getMessage() . "</br>"; 
        		die();
    	} 
		

	}
	public function query($queryString)
	{
		$req=$this->db->prepare($queryString);

		if (!$req->execute())
		    {
		    	var_dump($this->db->errorInfo());
		    	die();

		    }
		    		
	
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	public function queryAll($queryString,$cond=null)
	{
		$req=$this->db->prepare($queryString);

		if (!is_null($cond))
		{
			if (!$req->execute($cond))
			{
				var_dump($this->db->errorInfo());
				die();
			}
		}
		else
		{
			if (!$req->execute())
		    {
		    	var_dump($this->db->errorInfo());
		    	die();
		    }
		}
			
	
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	public function queryOne($queryString,$cond)
	{
		$req=$this->db->prepare($queryString);

		if (!$req->execute($cond))
		    	print_r($this->db->errorInfo());	
	
		$result = $req->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	public function execute($queryString,$cond)
	{
		$req=$this->db->prepare($queryString);

		if (!$req->execute($cond))
		    	print_r($db->errorInfo());	

		   return $this->db->lastInsertId();
	}

	public function save($data,$table){
		
		if (isset($data["id"]) && !empty($data["id"])){
			$sql="update ".$table." set ";
			foreach($data as $k=>$v) {
	           if($k!="id")
		           {
		           	$sql.="$k='$v',";
		           }				
			}
			$sql=substr($sql,0,-1);
			$sql.=" where id=".$data["id"];

		}
		else
		{
			$sql="insert into ".$table."(";
			foreach($data as $k=>$v) {
	           if($k!="id")
		           {
		           	$sql.="$k,";
		           }				
			}
			  $sql=substr($sql,0,-1);
			  $sql.=") values(";
			 foreach($data as $k=>$v) {
	           if($k!="id")
		           {
		           	$sql.="'$v',";
		           }				
			}
			 $sql=substr($sql,0,-1);
			
			 $sql.=")";
			
		}
			//echo $sql;
			

		    try { 
        			$req=$this->db->prepare($sql);
		   			 $req->execute();
		    		//print_r($db->errorInfo());
    			} 
    		catch(PDOExecption $e) {         
        		print "Error!: " . $e->getMessage() . "</br>"; 
    		} 


		    //cas insert
		    if (!isset($data["id"]) || empty($data["id"])){
				$this->id=$this->db->lastInsertId();
		    }
			else
			{
				$this->id=$data["id"];
			}
	}

	function delete($id,$table){
    	
    	$sql="delete from ".$table." where id=$id";
    	 try { 
        			$req=$this->db->prepare($sql);
		   			 $req->execute();
		   			
		   	  }
    		catch(PDOExecption $e) {         
        		print "Error!: " . $e->getMessage() . "</br>"; 
        		
    		} 


    }
	
}