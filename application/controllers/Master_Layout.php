<?php

class Master_Layout extends CI_Controller
{

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('master_layout', ['content' => 'home', 'footer_js' => 'home_js']);
	}
	public function system()
	{
		$this->load->view('master_layout', ['content' => 'system', 'footer_js' => 'system_js']);
	}
	public function about()
	{
		$this->load->view('master_layout', ['content' => 'about', 'footer_js' => 'about_js']);
	}
	public function contact()
	{
		$this->load->view('master_layout', ['content' => 'contact', 'footer_js' => 'contact_js']);
	}
	public function subscribe()
	{
		$this->load->view('master_layout', ['content' => 'subscribe', 'footer_js' => 'subscribe_js']);
	}
	public function login()
	{
		$this->load->view('master_layout', ['content' => 'login', 'footer_js' => 'login_js']);
	}
}