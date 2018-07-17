<?php
require("model.php");

class Controlleur
{
	private $model;
	public function __construct()
	{
		$this->model=new Model();
		$this->index();
	}
	public function index()
	{
		require("vue.php");
	}
	/*
	*	appel de la méthode insert du modèle
	*/
	public function addhello()
	{
		if($_POST['hello']=$this->check($_POST['hello']))
			$this->model->insert($_POST);
	}
	public function check($val)
	{
		return isset($val)&&!empty($val)?strip_tags($val):false;
	}
}

$a=new Controlleur();

?>