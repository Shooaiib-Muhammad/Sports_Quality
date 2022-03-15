<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Traning extends CI_Controller
{
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
  if ($id) {
   $sections = $this->model->findByDept($id);
  } else {
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
  if ($this->input->method() == 'post') {
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

   if ($this->form_validation->run() == FALSE) {
    $data['title'] = "New Section";
    $data['q'] = $this->input->get('q');
    $this->load->view('DMMS/sections', $data);
   } else {
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
 public function GetSection($id)
 {
  $OnMachine = $this->model->getOnMachine($id);
  $OFFMachine = $this->model->getOffMachine($id);
  $Section = $this->model->getSections($id);
  $data['Sections'] = $Section;
  $data['ON'] = $OnMachine;
  $data['OFF'] = $OFFMachine;
  $data['title'] = $data['Sections'][0]['DeptName'];
  $data['Deptid'] = $id;

  $this->load->view('DMMS/getSection', $data);
 }
 public function OEE_Sections($id)
 {
  $OnMachine = $this->model->machinedetils($id);

  $data['OnMachine'] = $OnMachine;
  $Section = $this->model->getOEESections($id);

  $data['Sections'] = $Section;

  $data['title'] = $data['Sections'][0]['DeptName'];
  $data['Deptid'] = $id;
  $data['Activemachines'] = $this->model->getActivemachines($id);

  $data['getAvgounter'] = $this->model->getAvgounter($id);

  $data['DaywiseDowntme'] = $this->model->DaywiseDowntme($id);
  $this->load->view('DMMS/OEE_Section', $data);
 }

 public function update()
 {
  $Status = $this->input->post('onoffswitch');
  if ($Status == 'on') {
   $Status = 1;
  } else {
   $Status = 0;
  }
  $SecName = $this->input->post('SecName');
  $SecID = $this->input->post('SecID');
  $deptID = $this->input->post('department');
  $this->model->update($Status, $SecID, $deptID, $SecName);
 }
 public function NewTraning()
 {
  $Tdate = $this->input->post('Tdate');
  $section = $this->input->post('section');
  $traninggiven = $this->input->post('traninggiven');
  $points = $this->input->post('points');
  $topic = $this->input->post('topic');
  $Deptid = $this->input->post('Deptid');

  $this->model->NewTraning($Deptid, $Tdate, $section, $topic, $traninggiven, $points);
 }
 public function Addmembers()
 {
  $Deptid = $this->input->post('Deptid');
  $TID = $this->input->post('TID');
  $Card = $this->input->post('card');
  $this->model->Addmembers($TID, $Card, $Deptid);
 }
 public function Deletemember($TID){
   $data = $this->model->Deletemember($TID);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
}
public function updatetraining($TID,$TDate ,$Topic ,$PointDiscuss ,$TraningGiven){
  $Topic = str_replace("%20", " ", $Topic);
  $PointDiscuss = str_replace("%20", " ", $PointDiscuss);
  $TraningGiven = str_replace("%20", " ", $TraningGiven);
  $data = $this->model->updatetraining($TID, $TDate, $Topic, $PointDiscuss, $TraningGiven);
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
}
 public function updatetrn($TID, $mintsifmetting)
 {
  $mintsifmetting = str_replace("%20", " ", $mintsifmetting);
 
  $data = $this->model->updatetrn($TID, $mintsifmetting);
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }
 
}

