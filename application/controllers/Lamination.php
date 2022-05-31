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
        $CurrentDate = $Day . '/' . $Month . '/' . $Year;


        $data['TotalReading'] = $this->Lamination->TotalReading($CurrentDate, $CurrentDate);
        $data['IndividualReading'] = $this->Lamination->IndividualReading($CurrentDate, $CurrentDate);
        
        $data['HourllyReading'] = $this->Lamination->HourllyReading($CurrentDate, $CurrentDate);
        $data['Lamination'] = $this->Lamination->getData($CurrentDate);
        $data['getData'] = $this->Lamination->getData($CurrentDate);

        $total = 0;


        foreach ($data['TotalReading'] as $totalreading) {

            $total = $total + $totalreading['TotalReading'];
        }



        $data['total']=$total;


        $this->load->view('Lamination/lamination', $data);

    


    }


    public function searchData()
    {

     $startDate = date("d/m/Y", strtotime($_POST['Sdate']));
     $endDate = date("d/m/Y", strtotime($_POST['Edate']));

     $data['getData'] = $this->Lamination->getData($startDate, $endDate);
     $data['TotalReading'] = $this->Lamination->TotalReading($startDate, $endDate);
     $data['IndividualReading'] = $this->Lamination->IndividualReading($startDate, $endDate);
        $data['HourllyReading'] = $this->Lamination->HourllyReading($startDate, $endDate);
     $total = 0;
     

   
     foreach ($data['TotalReading'] as $reading) {

        $total = $total + $reading['TotalReading'];

       }


    


    $data['total']=$total;
    $data['startDate'] = $_POST['Sdate'];
    $data['endDate'] = $_POST['Edate'];
     
     // echo "<pre>";
     //   print_r($data['articleCounter']);
     //   echo "</pre>";
     // // // die;
     $this->load->view("Lamination/laminationDateWise", $data);
    }

   }



 