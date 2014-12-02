<?php
//require_once("Model.php");

class Model_User {
	private $db;
	public function __construct()
	{
		$this->db = new Helper_database();
	}
	public function authenf($login)
	{
		$sql =  "select *";
		$sql.=  " from account ";
		$sql.= " where username = ?";
		return $this->db->queryOne($sql, array($login));
	}
	public function getUsers($limit1=0, $limit2=100)
	{
		$sql =  " select *";
		$sql.=  " from account ";
		$sql.= " limit $limit1,$limit2";
		return $this->db->query($sql);
	}
	public function getRowsCount()
	{
		$sql =  "select count(*) as totalRows from account";
		return $this->db->queryAll($sql);
	}

	public function save($data)
	{
		$this->db->save($data,"account");
	}	
	public function delete($id)
	{
		$this->db->save($id,"account");
	}
	
}




