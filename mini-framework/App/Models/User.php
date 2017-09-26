<?php

namespace App\Models;
use \App\Core\Database as Database;

class User
{
	private $_db;
	public $firstname, $lastname, $email;

	public function __construct()
	{
		$this->_db = Database::getInstance();
	}
	public function insert()
	{
		$insert = $this->_db->insert('name',[
			"firstname" => $this->firstname, 
			'lastname' => $this->lastname, 
			'email' => $this->email
		]);

		return $insert;
	}
	public function index(){
		$index = $this->_db->selectAll('name') ;
		return $index;
	}
	public function delete($id)
	{
		$delete = $this->_db->delete('name',[
			'WHERE' => "id='{$id}'"
		]);
		return $delete;
	}
	public function edit($id)
	{
		$edit = $this->_db->selectAll('name',[
			'WHERE' => "id='{$id}'"
		]);
		return $edit;
	}
	public function update($id)
	{
		$update = $this->_db->update('name',[
			"firstname" => $this->firstname, 
			'lastname' => $this->lastname, 
			'email' => $this->email
		], "id='$id'");

		return $update;
	}
}