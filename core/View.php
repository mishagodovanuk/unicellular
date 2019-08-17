<?php
/*
	Clas which contain a login to renderer page
*/

class View 
{

	// @var string $title
	public $title;

	// @var name of page view
	public $page_content;

	// @var page data
	public $page_data;

/*
	This function set title to current page
*/
	public function setTitle($title)
	{
		$this->title = $title;
	}

/*
	This function get title for a page
*/
	public function getTitle()
	{
		if (!empty($this->title)) {
			return $this->title;
		} else 
			return $GLOBALS['action'];
	}

		/*
		render function constuct page 

		@params string $page | name of page is nessasary and it is the same as page.php file !!only without fileextension!!
		@param mixed $data | set data to page 
		@param string $layout | set name of layout file which will render, as default it will include file which if named as controller
	*/
	public function render($page, $data = null, $layout = null)
	{
		$this->page_content = $page;
		$data != NULL ? $this->page_data = $data : 0; 
		
		if ($layout == null) {
			$layout = strtolower($GLOBALS['controller']);
		}
			include_once 'View/Templates/' . $layout .'.php';
	}

/*
	Get body content for template
	
*/
	public function getBodyContent()
	{
		include_once 'View/Pages/' . $GLOBALS['controller']. '/' . $this->page_content . '.php';
	}
}
