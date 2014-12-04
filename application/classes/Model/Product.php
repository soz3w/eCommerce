<?php
//require_once("Model.php");

class Model_Product {
	private $db;
	public function __construct()
	{
		$this->db = new Helper_database();
	}
	public function getProduct($id)
	{
		$sql =  " select * ";
		$sql.=  " from products ";
		$sql.= " where products.id = ? ";
		return $this->db->queryOne($sql, array($id));
	}
	
	public function getProducts($limit1=0, $limit2=100)
	{
		$sql =  " select *";
		$sql.=  " from products ";
		$sql.= " limit $limit1,$limit2";
		return $this->db->query($sql);
	}
	public function getRowsCount()
	{
		$sql =  "select count(*) as totalRows from products";
		return $this->db->queryAll($sql);
	}
	

	public function save($data)
	{
		$this->db->save($data,"products");
	}	
	public function delete($id)
	{
		$this->db->save($id,"products");
	}	
}




