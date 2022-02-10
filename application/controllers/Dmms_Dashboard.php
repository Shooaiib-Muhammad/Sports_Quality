<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AMS', 'ID');
		$this->load->library('session');
	}

    public function index()
	{

        $this->load->view('page_dashboard');

		
    }
  

}