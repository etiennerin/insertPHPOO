<?php

class Model
{
	private $bdd;
	public function __construct()
	{
		try
		{
			$this->bdd = new PDO('mysql:host=localhost;port=3306;dbname=mabase;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
				die('Erreur : '.$e->getMessage());
		}
	}
	
	public function insert($datas)
	{
		$req = $this->bdd->prepare("INSERT INTO tab VALUES(?)");
		$req->execute(array($datas['hello']));
	}
}
?>