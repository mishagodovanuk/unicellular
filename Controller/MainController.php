<?php
include_once 'core/Controller.php';
include_once 'Model/Test.php';

// Simple Main controller | must extends Controller class
class Main extends Controller
{
	// Index page action
	public function Index()
	{
		$this->setTitle('Index page of site');
		$data = 'user';
		$this->render('index', $data);
	}

	// About page action
	public function About()
	{
		$this->setTitle('About us');
		$this->render('about');
	}

	// Countact page action
	public function Contact()
	{
		$data = $this->getRequestPost();
		$data = $this->sendMail($data['email'], 'Contact site', $data['content']);
		$this->setTitle('Contact us');
		$this->render('contact', $data);
	}
}
