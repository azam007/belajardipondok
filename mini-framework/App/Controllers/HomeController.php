<?php

namespace App\Controllers;
use \App\Core\Controller as Controller;
use \App\Core\Config as Config;

class HomeController extends Controller
{
	
	private $user;

	public function __construct()
	{
		session_start();
		$this->user = $this->model('User');
	}
	public function index()
	{
		$data = $this->user->index();
		return $this->view('Home',['users' => $data]);
	}
	public function tambah()
	{
		$this->user->firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
		$this->user->lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
		$this->user->email = isset($_POST['email']) ? $_POST['email'] : "";
		
		if(isset($_POST['submit'])){
			$insert = $this->user->insert();
			$alert  = $insert ? ['success' => Config::NOTIF_INPUT_SUCCESS] : ['danger' => Config::NOTIF_INPUT_FAILED];
		}
 	
		return $this->view('Tambah',isset($alert) ? ['alert' => $alert] : NULL);	
	}
	public function delete($id)
	{
		$delete = $this->user->delete($id);
		if($delete){
			$_SESSION['message'] = ['success' => "Data Berhasil dihapus"];
		}else{
			$_SESSION['message'] = ['danger' => 'Data Gagal dihapus'];
		}
		header('location:'.PATH_GLOBALS.'home');
	}
	public function edit($id)
	{
		$user = $this->user->edit($id);
		$this->user->firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
		$this->user->lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
		$this->user->email = isset($_POST['email']) ? $_POST['email'] : "";
		
		if(isset($_POST['update'])){
			$update = $this->user->update($id);
			$_SESSION['message']  = $update ? ['success' => Config::NOTIF_UPDATE_SUCCESS] : ['danger' => Config::NOTIF_UPDATE_FAILED];
			header('location:'.PATH_GLOBALS.'home');
		}

		$this->view('Edit',$user);
	}
}