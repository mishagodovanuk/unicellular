<?php
class Router
{
	public $actionName;

	public $controllerName;

	public $class_Name;

	public $action_Name;

/*
*Function wich start site
*
*/
	public function start()
	{
		$this->getControllerName();
		$this->getActionName();
		
		$this->class_Name = ucfirst($this->controllerName);
		$this->action_Name = ucfirst($this->actionName);

		$this->getControllerAction();
		
		die();
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
		if(array_key_exists(2, $explodedArray)){
					
					if (strpos($explodedArray[2], '?')) {
						$localAction = explode('?', $explodedArray[2]);
						$this->actionName = $localAction[0];
					}
					else $this->actionName = $explodedArray[2];
				}
	}
/*
*Get controller name
*
*/
	public function getControllerName()
	{
		$explodedArray = explode('/', $_SERVER['REQUEST_URI']);
		if (array_key_exists(1, $explodedArray)) {
			$this->controllerName = $explodedArray[1];
		}else
			$this->controllerName = 'index';
	}

}