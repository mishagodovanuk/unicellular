<?php
include_once 'core/View.php';

/*
	Core class which connect view and use controller class
	also contain render function
*/
class Controller extends View
{
	
	/*
		render function constuct page 

		@params string $page | name of page is nessasary and it is the same as page.php file !!only without fileextension!!
		@param mixed $data | set data to page 
		@param string $layout | set name of layout file which will render, as default it will include file which if named as controller
	*/
	public function render($page, $data = null, $layout = null)
	{
		if ($layout == null) {
			$layout = strtolower($_COOKIE['controller']);
		}
			include_once 'View/Templates/' . $layout .'.php';
	}
}
