<?php

class BlogModel{

	private $db;

	public function __construct($db){

		$this->db = $db;
	}

	public function getAll(): array
	{
		return $this->db->select("SELECT * FROM posts");
	}

	public function getSingle(int $id){
		return $this->db->select("SELECT *FROM posts WHERE id = :id", ["id" =>$id])[0];
	}

}