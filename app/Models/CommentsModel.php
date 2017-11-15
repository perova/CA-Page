<?php

class CommentsModel{

	private $db;

	public function __construct($db){

		$this->db = $db;
	}

	public function getAll(): array
	{
		return $this->db->select("SELECT * FROM comments");
	}

	public function getSingle(int $id){
		return $this->db->select("SELECT *FROM comments WHERE id = :id", ["id" =>$id])[0];
	}

}