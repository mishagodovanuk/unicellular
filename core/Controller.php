<?php
include_once 'core/View.php';

/*
	Core class which connect view and use controller class
	also contain render function
*/
class Controller extends View
{

	//Function get post request
	protected function getRequestPost($key = null)
	{
		if ($key == null) {
			
			return $_POST;
		}

		return $_POST[$key];
	}

	// Funtion get $_GET request
	protected function getRequestGet($key = null)
	{
		if ($key == null) {

			return $_GET;
		}

		return $_GET[$key];
	}

	// Redirect function 
	protected function redirectTo($path)
	{
		header("Location: http://{$_SERVER['HTTP_HOST']}/{$path}");
	}
}
