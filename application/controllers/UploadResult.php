<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadResult extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Upload');
     $this->load->model('Approved');
    //  $this->load->library('session');
    }

    // public function pendingRequest(){

    //     $data['getpending']=$this->Upload->getPending();
    //     $data['getApproved']=$this->Approved->getApproved();
    //     $this->load->view('FIT/pendingRequest',$data);
    // }
    
    public function getimage()
 {
  $TID = $_POST['TID'];
  $data = $this->Upload->getimage($TID);
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }
    public function AddCssNo(){
        $ID=$_POST['TID'];
        $CssNo=$_POST['CSSNo'];
        $data =$this->Pending->AddCSSNo($ID,$CssNo);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));

    }

    public function upload(){
        $data['getpending']=$this->Upload->getUpload();
        $data['getApproved']=$this->Upload->getApproved();
        $this->load->view('FIT/uploadResult',$data);
    }


    public function Submit()
    {
    $TID=$_POST['ID'];
  if (!empty($_FILES['avatar']['name'])) {
      
    $config['upload_path'] = 'assets\img\img';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['file_name'] = basename($_FILES['avatar']['name']);

    //Load upload library and initialize configuration
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if ($this->upload->do_upload('avatar')) {
     
        $uploadData = $this->upload->data();
        $pictureFresh = $uploadData['file_name'];
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/img/img/' . $pictureFresh;
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = 800;
        $config['height'] = 600;
        $config['new_image'] = 'assets/img/img/' . $pictureFresh;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    } else {
        echo 'nothing';

        $pictureFresh = '';
    }
} else {
  
    $pictureFresh = '';
}


// die;
  $data = $this->Upload->Submit($pictureFresh,$TID);


 
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

}