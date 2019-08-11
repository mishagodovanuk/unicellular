<?php
include_once 'core/Controller.php';

class Main extends Controller
{
	public function Index()
	{
		$this->setTitle('Index page of site');
		$data = 'user';
		$this->render('index', $data);
	}

	public function Say()
	{
		echo "second controller";
		var_dump($_GET);
		die();
	}
}
