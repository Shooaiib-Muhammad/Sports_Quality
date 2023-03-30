<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamination extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lamination_Model/Lamination_Model', 'Lamination');
		$this->load->model('energyModel/EnergyModel', 'Energy');

        
    }

    public function index()
    {

        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $CurrentDate1 = $Day . '/' . $Month . '/' . $Year;


        $data['TotalReading'] = $this->Lamination->TotalReading($CurrentDate, $CurrentDate);
        $data['IndividualReading'] = $this->Lamination->IndividualReading($CurrentDate1, $CurrentDate1);
        
        
        $data['HourllyReading'] = $this->Lamination->HourllyReading($CurrentDate, $CurrentDate);
        // $data['Lamination'] = $this->Lamination->getData($CurrentDate);
        // $data['getData'] = $this->Lamination->getData($CurrentDate);
  
        $total = 0;

//print_r($data['TotalReading']);
        foreach ($data['TotalReading'] as $totalreading) {

            $total = $total + $totalreading['Reading'];
        }
        $data['total']=$total;

        $data['energy_C'] = $this->Energy->energy_C(); //for ms lamination machine total 
		$data['energy_C_Drill'] = $this->Energy->energy_C_Drill(); //for ms lamination machine drilldown
    
    
        $this->load->view('Lamination/lamination', $data);

    


    }

    public function getEnergyByHourly(){

        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        $data['datesByHourly'] = $this->Lamination->getEnergyByHourly($startDate,$endDate);

        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }



    public function getEnergy(){

        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        $data['dates'] = $this->Lamination->getEnergy($startDate,$endDate);

        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }


    public function searchData()
    {

     $startDate = date("d/m/Y", strtotime($_POST['startDate']));
     $endDate = date("d/m/Y", strtotime($_POST['endDate']));

    //  $data['getData'] = $this->Lamination->getData($startDate, $endDate);
     $data['TotalReading'] = $this->Lamination->TotalReadingDateRange($startDate, $endDate);
     $data['IndividualReading'] = $this->Lamination->IndividualReadingDateRange($startDate, $endDate);
    // $data['HourllyReading'] = $this->Lamination->HourllyReading($startDate, $endDate);
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    }




   }
   



 