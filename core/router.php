<?php
/*
	Class router content the routing login of website| THE SOURCE OF WEBSITE
*/

class Router
{
	// @var $actionName | url action
	public $actionName;

	// @var $controllerName | url controller
	public $controllerName;

	// @var $class_Name | name of executing class
	public $class_Name;

	// @var $action_Name | name of executing action(function)
	public $action_Name;

/*
*Function wich start site
*/

	public function start()
	{
		// Get contoller and action names
		$this->getControllerName();
		$this->getActionName();

		// Set Names of executing class and action names
		$this->class_Name = ucfirst($this->controllerName);
		$this->action_Name = ucfirst($this->actionName);

		// Set globals variable
		$this->setGlobalsData();

		// Run action
		$this->getControllerAction();
	}

/*
*Run controller action function
*
*/
	public function getControllerAction()
	{
		if (file_exists('Controller/' . $this->class_Name . 'Controller.php')) {
			include_once 'Controller/' . $this->class_Name . 'Controller.php';
			$executeClass = new $this->class_Name;
			$executeAction = $this->action_Name;
		} else {

			$this->pageDontExist();
		}
		if (method_exists($executeClass, $executeAction)) {
			$executeClass->$executeAction();
			}

		die();
	}

/*
*Redirect to 404 Page not found
*
*/
	public function pageDontExist()
	{
		header("Location: core/pages/404.php");

		return (bool)false;
	}

/*
*Get action name
*
*/
	public function getActionName()
	{
		$explodedArray = explode('/', $_SERVER['REQUEST_URI']);

		if(array_key_exists(2, $explodedArray) && !empty($explodedArray[2])){

			if (strpos($explodedArray[2], '?')) {
				$localAction = explode('?', $explodedArray[2]);
				$this->actionName = $localAction[0];
			} else $this->actionName = $explodedArray[2];

		} else
			$this->actionName = 'index';
	}
/*
*Get controller name
*
*/
	public function getControllerName()
	{
		$explodedArray = explode('/', $_SERVER['REQUEST_URI']);
		if (array_key_exists(1, $explodedArray) && !empty($explodedArray[1]) && !strstr($explodedArray[1], '?')) {
			$this->controllerName = $explodedArray[1];
		}else
			$this->controllerName = 'main';
	}

/*
* Get view cookies
*	Set name of action && controller for template && page view
*/

	public function setGlobalsData()
	{
		$GLOBALS['controller'] = $this->class_Name;
		$GLOBALS['action'] = $this->action_Name;
	}
}
