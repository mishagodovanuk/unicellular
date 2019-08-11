<?php
class Main 
{
	public function Index()
	{
		echo "say all work";
		die();
	}

	public function Say()
	{
		echo "second controller";
		var_dump($_GET);
		die();
	}
}