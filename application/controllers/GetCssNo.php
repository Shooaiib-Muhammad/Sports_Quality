<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GetCssNo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LabModel', 'l');
	}

	public function index(){
        if(!isset($_GET['cssno'])){
            echo "You have to provide a CssNo. Go Scan again or write css no if you know.</br>
			For example: '192.168.10.4/sports/getCssNo?cssno=252P-32'." ;
        }else{
            echo $_GET['cssno'];

			//Get FGT Request table data with matched Css No
			$fgtReqData = $this->l->FGTRequestwithCssNowithQrCode($_GET['cssno']);
			if(!$fgtReqData){
				echo  "<div class='alert alert-info'>
					<h2 class='text-center'>Qr Code does not exist. </br>Please write correct css no or go scan QrCode again.</h2>
				</div>";
				return;
			}


			// Get FGT excel File Head Data with matched css No
			$excelData = $this->l->getFGTTestReqHead($fgtReqData[0]['CssNO']);  
			
			if($fgtReqData[0]['LabStatus'] != 1){

				// echo "lab not aknowledge";
				$data['TID'] = $fgtReqData[0]['TID'];
				$this->load->view('getCssnoFGT', $data);

			}else if($excelData){
				// echo "excel file uploaded";
				// $data['fgtH'] = $this->l->getFGTTestReqHead($fgtReqData[0]['CssNO']);  
				// $data['fgtD'] = $this->l->getFGTTestReqDetails($data['fgtH'][0]['TID']); 
				$data['cssNo'] = $fgtReqData[0]['CssNO'];
				
				$this->load->view('getCssnoFGT', $data);
				
			}else{
				// echo "not uploaded excel file"; 
				$data['fgtReqData'] = $fgtReqData;
				$this->load->view('getCssnoFGT', $data);
					
			}

        }
    }
	

}
