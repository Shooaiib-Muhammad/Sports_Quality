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
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');


		$data['FactoryWiseProduction'] = $this->ID->FactoryWiseProduction($Day, $Month, $Year);
		$data['targets'] = $this->ID->targets($Day, $Month, $Year);
		$data['CodeB34001'] = $this->ID->B34001($Day, $Month, $Year);
		$data['CodeB34002'] = $this->ID->B34002($Day, $Month, $Year);
		$data['CodeB34003'] = $this->ID->B34003($Day, $Month, $Year);
		$data['CodeB34004'] = $this->ID->B34004($Day, $Month, $Year);
		$data['CodeB34005'] = $this->ID->B34005($Day, $Month, $Year);
		$data['CodeB34006'] = $this->ID->B34006($Day, $Month, $Year);
		$data['CodeB34007'] = $this->ID->B34007($Day, $Month, $Year);
		$data['TmProduction'] = $this->ID->TmProduction($Day, $Month, $Year);
		$data['MSProd'] = $this->ID->GetMsproduction($Day, $Month, $Year);
		$data['AMBproduction'] = $this->ID->GetAMBproduction($Day, $Month, $Year);
		
		$data['last5dayProduction'] = $this->ID->last5dayProduction();
		
		$data['getweeklydata'] = $this->ID->getweeklydata();
		$data['getmonthly'] = $this->ID->getmonthly();
		$data['getYearly'] = $this->ID->getYear();
		
	$this->load->view('Dashboard', $data);	
		
    }


}