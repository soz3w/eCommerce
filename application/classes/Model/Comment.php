<?php
//require_once("Model.php");

class Model_Comment {
	private $db;
	public function __construct()
	{
		$this->db = new Helper_database();
	}
	
	public function getComments($limit1=0, $limit2=100)
	{
		$sql =  " select id,content,user_id,post_id,created";
		$sql.=  " from comments ";
		$sql.= " limit $limit1,$limit2";
		return $this->db->query($sql);
	}
	public function getRowsCount()
	{
		$sql =  "select count(*) as totalRows from comments";
		return $this->db->queryAll($sql);
	}

	public function save($data)
	{
		$this->db->save($data,"comments");
	}	
	public function delete($id)
	{
		$this->db->save($id,"comments");
	}
	
}




