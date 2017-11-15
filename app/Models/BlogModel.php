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

	public function search( string $query): array{

		return $this->db->select("SELECT * from posts WHERE title LIKE ? or body LIKE ?" , ["%$query%", "%$query%"]);

	}

}