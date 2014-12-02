<?php
class Model_Model{
	
	public $db;
	public $table;

	public function __construct($db)
	{
		$this->db=$db;
	}
 
	public function read($fields=null)
	{
		
		if ($fields==null)
			{
				$fields="*";
			}		
		
		$sql="select $fields from ".$this->table." where id=".$this->id;
		$req=$this->db->prepare($sql);
		if (!$req->execute())
		    	print_r($this->db->errorInfo());		
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		foreach ($data as $k => $v) {
			foreach ($v as $k1 => $v1) {
				$this->$k1=$v1;
			}			
		}

	}
	public function save($data){
		
		if (isset($data["id"]) && !empty($data["id"])){
			$sql="update ".$this->table." set ";
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
			$sql="insert into ".$this->table."(";
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
	
	public function find($data)
	{
		$conditions="1=1";
		$fields="*";
		$limit="";
		$order="id DESC";
		$d=null;
		
		if (isset($data["conditions"])) {$conditions=$data["conditions"];}
		if (isset($data["fields"])) {$fields=$data["fields"];}
		if (isset($data["limit"])) {$limit=$data["limit"];}
		if (isset($data["order"])) {$order=$data["order"];}
		$sql="select $fields from ".$this->table." where $conditions order by $order $limit";
		 try { 
        			$req=$this->db->prepare($sql);
		   			 $req->execute();
		    		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		    		$d=$data;
		    		
    			} 
    		catch(PDOExecption $e) {         
        		print "Error!: " . $e->getMessage() . "</br>"; 
        		
    		} 
    		return $d;
	}


    function delete($id=null){
    	global $db;
    	if($id==null)
    		{$id=$this->id;}
    	$sql="delete from ".$this->table." where id=$id";
    	 try { 
        			$req=$this->db->prepare($sql);
		   			 $req->execute();
		   			
		   	  }
    		catch(PDOExecption $e) {         
        		print "Error!: " . $e->getMessage() . "</br>"; 
        		
    		} 


    }

	static function load($name,$db)
	{		
		return new $name($db);
	}
	
}

