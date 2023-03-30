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


        $data['TotalReading'] = $this->Lamination->TotalReading($CurrentDate, $CurrentDate);
        $data['IndividualReading'] = $this->Lamination->IndividualReading($CurrentDate, $CurrentDate);
        
        
        $data['HourllyReading'] = $this->Lamination->HourllyReading($CurrentDate, $CurrentDate);
        // $data['Lamination'] = $this->Lamination->getData($CurrentDate);
        // $data['getData'] = $this->Lamination->getData($CurrentDate);
  
        $total = 0;


        foreach ($data['TotalReading'] as $totalreading) {

            $total = $total + $totalreading['Reading'];
        }
        $data['total']=$total;

        $data['energy_C'] = $this->Energy->energy_C(); //for ms lamination machine total 
		$data['energy_C_Drill'] = $this->Energy->energy_C_Drill(); //for ms lamination machine drilldown
    

        $this->load->view('Lamination_Slide/Lamination_Slide', $data);

    


    }


    



   }



 