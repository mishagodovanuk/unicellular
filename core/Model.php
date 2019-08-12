<?php

/**
 * 
 */
class Model
{

	public $model;
	
	function __construct($host, $user, $password, $db)
	{
		$this->model = msql_connect($host, $user, $password, $db);
	}
}
