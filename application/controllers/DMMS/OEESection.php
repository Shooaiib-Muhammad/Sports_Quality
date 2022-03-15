<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OEESection extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('DMMS/Section_model', 'model');
        $this->load->model('DMMS/Department_model', 'd');
         $this->load->model('DMMS/Machine_model', 'm');
    }

    public function index()
    {
        $id = $this->input->get("department");
        if($id){
            $sections = $this->model->findByDept($id);
        }else{
            $sections = $this->model->findByDept();
        }
       
        $data['dept'] = $this->d->findall();
        $data['sections'] = $sections;
        $data['department'] = $id;
        $data['title'] = "Sections";
        $this->load->view("DMMS/OEE_Section", $data);
    }

    public function newsection()
    {
        if($this->input->method() == 'post'){
			$rules = array(
				array(
					'field' => 'name',
					'label' => 'Name',
					'rules' => 'required'
				),
				array(
					'field' => 'department',
					'label' => 'Department',
					'rules' => 'required'
				),
			);

			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() == FALSE){
				$data['title'] = "New Section";
				$data['q'] = $this->input->get('q');
				$this->load->view('DMMS/sections', $data);
			}else{
				$this->model->insert($this->input->post());
                 $this->session->set_flashdata('success', 'New Section  Saved Successfully');
                  
			}

			

		}
		$data['title'] = "New Section";
		$data['q'] = $this->input->get('q');
		$data['dept'] = $this->d->findall();
		$this->load->view('DMMS/new_section', $data);
    }

    public function delete($id)
	{
        $this->model->delete($id);
        $q = $this->input->get('q');
		redirect("/index.php/sections?q=$q");
    }
    
    public function json_sections($dept)
    {
        $data = $this->model->findByDept($dept);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function GetSection($id){
        $OnMachine = $this->model->getOnMachine($id);
         $OFFMachine = $this->model->getOffMachine($id);
         $Section = $this->model->getSections($id);
           $data['Sections'] = $Section;
             $data['ON'] = $OnMachine;
               $data['OFF'] = $OFFMachine;
        $data['title'] = $data['Sections'][0]['DeptName'];
$data['Deptid'] =$id;

$this->load->view('DMMS/etSection', $data);
    }
     public function OEE_Sections($id){
     				$OnMachine = $this->model->machinedetils($id);
  
             $data['OnMachine'] = $OnMachine;
         $Section = $this->model->getOEESections($id);
      
           $data['Sections'] = $Section;
           
        $data['title'] = $data['Sections'][0]['DeptName'];
    $data['Deptid'] =$id;
    $data['Activemachines'] = $this->model->getActivemachines($id);

     $data['getAvgounter'] =$this->model->getAvgounter($id);

   $data['DaywiseDowntme'] = $this->model->DaywiseDowntme($id);
$this->load->view('DMMS/OEE_Section', $data);
    }

    public function update(){
         $Status = $this->input->post('onoffswitch');
           if($Status=='on'){
$Status=1;
           }else{
               $Status=0;
            }
                $SecName = $this->input->post('SecName');
                 $SecID = $this->input->post('SecID');
                 $deptID = $this->input->post('department');
                 $this->model->update($Status,$SecID,$deptID,$SecName);
    } 
    public function updatesec(){
        
         $Status = $this->input->post('onoffswitch');
           if($Status=='on'){
$Status=1;
           }else{
               $Status=0;
            }
                $SecName = $this->input->post('SecName');
                 $SecID = $this->input->post('SecID');
                  $DeptID = $this->input->post('DeptID');
                 $this->model->updateSec($Status,$SecID,$SecName,$DeptID);
    }
    
}