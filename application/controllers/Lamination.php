<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamination extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lamination_Model/Lamination_Model', 'Lamination');
        
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


        $this->load->view('Lamination/lamination', $data);

    


    }


    public function searchData()
    {

     $startDate = date("Y-m-d", strtotime($_POST['startDate']));
     $endDate = date("Y-m-d", strtotime($_POST['endDate']));

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



 