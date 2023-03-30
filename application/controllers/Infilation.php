<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infilation extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
      $this->load->model('Infilation1','inf');
    }
    public function index(){

        $Month = date('m'); 
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $data['getData'] = $this->inf->getData();
        $data['Stationwise'] = $this->inf->Stationwise($CurrentDate, $CurrentDate);
        $this->load->view("Infilation/Infilation", $data);
        // $this->load->view("Infilation/Infilation.php");

    }
    
    public function insertRecord(){
   $data = $this->mbb->insertRecord($_POST['ballname'],$_POST['ballstatus']);
    }
    
    public function UpdateBall(){
        
        $data= $this->mbb->UpdateBall($_POST['id'],$_POST['name'],$_POST['status']);
        return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }
 

}
?>
