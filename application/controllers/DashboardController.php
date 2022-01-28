<?php

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DashboardModel', 'ID');
		$this->load->library('session');
	}

    public function index()
	{
		
	$data['TM'] = $this->ID->TM();
	$data['B34005'] = $this->ID->B34005();
	$data['B34006'] = $this->ID->B34006();
	$data['B34007'] = $this->ID->B34007();
	$this->load->view('Dashboard', $data);	
		
    }


}