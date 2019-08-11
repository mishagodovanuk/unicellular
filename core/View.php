<?php
/*
	Clas which contain a login to renderer page
*/

class View 
{

	// @var string $title
	public $title;

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
			echo $this->title;
		} else 
			echo $_COOKIE['action'];
	}
}
