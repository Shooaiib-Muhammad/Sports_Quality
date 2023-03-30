<?php

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DashboardModel', 'ID');
        $this->load->model('MIS/AMB_Model');
		$this->load->model('MIS/MS_Model');


		$this->load->library('session');
	}

    public function index()
	{
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');
		$nextDate = date("Y/m/28", strtotime(" +1 months"));
		$previousDate = date("Y/m/1", strtotime(" 0 months"));
		// print_r($previousDate);
	
		// print_r($nextDate);
		// die;
		$data['OrdersandPlanning'] = $this->ID->OrdersandPlanning($nextDate, $previousDate);
		// print_r($data);
		// die;

		// amb data 
		$LineNo =1;
		$CurrentDate=$Year.'-'.$Month.'-'.$Day;
		$data['record']=Null;
		if ($LineNo==1) {
		$data['table']=1;
		}else{
		$data['table']=2;
		}
		$data['Date1']=$CurrentDate;
		$data['Date2']=$CurrentDate;
		$data['LineNo']=$LineNo;
		$data['line_data'] = $this->AMB_Model->getlinedata();
		$data['record']= $this->AMB_Model->getAllData($CurrentDate, $CurrentDate,$LineNo);
		$data['Sum']=  $this->AMB_Model->getAllSum($CurrentDate, $CurrentDate,$LineNo);

		// MS line wise data
		
		// $data['Date1']=$CurrentDate;
		// $data['Date2']=$CurrentDate;
		$data['LineNo1']=1;
		$LineNo1=1;
		$data['MSLinesinfo'] = $this->MS_Model->MSLinesinfo();
		$data['record1']= $this->MS_Model->GetMsData($Day, $Month,$Year);
		$data['Sum1']=  $this->MS_Model->GetMsLineWiseSum($CurrentDate, $CurrentDate,$LineNo1);
 		$data['Line_Wise_record']=Null;

		

		$data['FactoryWiseProduction'] = $this->ID->FactoryWiseProduction($Day, $Month, $Year);
		// print_r($data['FactoryWiseProduction']);
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

		$data['lfbLineWise'] = $this->ID->lfbLineWise($Day, $Month, $Year);
	
		$data['last5dayProduction'] = $this->ID->last5dayProduction();	
		$data['getweeklydata'] = $this->ID->getweeklydata();
		$data['getmonthly'] = $this->ID->getmonthly();
		$data['getYearly'] = $this->ID->getYear();
		$data['weekDate'] = $this->ID->weekDates();
		$data['monthlydate'] = $this->ID->monthlydate();
		$data['monthlyOrder'] = $this->ID->monthlyOrder();
		$data['Yearandmonth'] = $this->ID->YearData();
		// $data['monthlyOrder001'] = $this->ID->getMonthtlyOrder_Article_Wise();
		// $data['monthlyOrder002'] = $this->ID->getMonthtlyOrder_Article_Wise02();
		// $data['monthlyOrder003'] = $this->ID->getMonthtlyOrder_Article_Wise03();
		// $data['monthlyOrder004'] = $this->ID->getMonthtlyOrder_Article_Wise04();
		// $data['monthlyOrder005'] = $this->ID->getMonthtlyOrder_Article_Wise05();
		// $data['monthlyOrder006'] = $this->ID->getMonthtlyOrder_Article_Wise06();
		$data['monthlyOrderall'] = $this->ID->getMonthtlyOrder_Article_WiseAll();
		$data['FactoryWiseProductionmonthly'] = $this->ID->FactoryWiseProductionmonthly();
		
		$data['Year'] = $this->ID->Year();
		$data['YearData'] = $this->ID->yearllyData();
		
	   $this->load->view('Dashboard', $data);	

		// $this->load->view('DashboardR', $data);	
		
    }
	public function getMonthss(){
		
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');
		$data['MSProd'] = $this->ID->GetMsproduction($Day, $Month, $Year);
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
		// print_r($data['MSProd']);
        // die();
	}
	public function B34001(){
		$Month = date('m');
			$Year = date('Y');
			$Day = date('d');
			$data['CodeB34001'] = $this->ID->B34001($Day, $Month, $Year);
		$this->load->view('HSArticles', $data);
	}
	public function B34002(){
		$Month = date('m');
			$Year = date('Y');
			$Day = date('d');
			$data['CodeB34002'] = $this->ID->B34002($Day, $Month, $Year);
		$this->load->view('TM002Articles', $data);
	}
	public function B34003(){
		$Month = date('m');
			$Year = date('Y');
			$Day = date('d');
			$data['CodeB34003'] = $this->ID->B34003($Day, $Month, $Year);
		$this->load->view('TM003Articles', $data);
	}
	public function B34004(){
		$Month = date('m');
			$Year = date('Y');
			$Day = date('d');
			$data['CodeB34004'] = $this->ID->B34004($Day, $Month, $Year);
			// print_r($data);
			// die;
		$this->load->view('TM004Articles', $data);
	}
	public function B34005(){
		$Month = date('m');
			$Year = date('Y');
			$Day = date('d');
		//$data['CodeB34005'] = $this->ID->B34005($Day, $Month, $Year);
		$data['CodeB34005'] = $this->ID->GetMsproduction($Day, $Month, $Year);
		$this->load->view('MSArticles', $data);
	}
	public function B34006(){
		$Month = date('m');
			$Year = date('Y');
			$Day = date('d');
			$data['CodeB34006'] = $this->ID->B34006($Day, $Month, $Year);

		$this->load->view('AMbArticles', $data);
	}
	public function B34007(){
		$Month = date('m');
			$Year = date('Y');
			$Day = date('d');
			$data['CodeB34007'] = $this->ID->B34007($Day, $Month, $Year);
		$this->load->view('LFBArticles', $data);
	}

	// public function lfbLineWise(){
	// 	    $Month = date('m');
	// 		$Year = date('Y');
	// 		$Day = date('d');
	// 		$data['lfbLineWise'] = $this->ID->lfbLineWise($Day, $Month, $Year);
	// 	   $this->load->view('Dashboard', $data);
	// }


}