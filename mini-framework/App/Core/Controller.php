<?php
namespace App\Core;

class Controller
{
	public function view($filename, $data = [])
	{
		$locFile = '../'.Config::PATH_VIEWS.$filename.'.php';
		if(file_exists($locFile)){
			require $locFile;
			return $data;
		}
	}
	public function model($filename)
	{
		$locFile = '../'.Config::PATH_MODELS.$filename.'.php';
		if(file_exists($locFile)){
			$model = "\App\Models\\".$filename;
			return new $model;
		}
	}
}