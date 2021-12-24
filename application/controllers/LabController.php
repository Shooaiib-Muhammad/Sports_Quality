<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LabController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Section_model', 's');
        $this->load->model('Department_model', 'd');
        $this->load->model('Machine_model', 'm');
        $this->load->model('Team_model', 't');
        $this->load->model('LabModel', 'l');
    }

    public function index()
    {
        $this->load->view('LabDashboard');
    }


    public function dashboard()
    {
        $data['amb_count'] = $this->m->countambInstalledMachines(1);
        $data['amb_team'] = $this->t->countamb(1);
        $data['ms1_count'] = $this->m->countms1InstalledMachines(7);
        $data['ms1_team'] = $this->t->countms1(7);
        $data['ms2_count'] = $this->m->countms2InstalledMachines(6);
        $data['ms2_team'] = $this->t->countms2(6);
        $data['tm_count'] = $this->m->counttmInstalledMachines(3);
        $data['tm_team'] = $this->t->counttm(3);
        $data['lfb_count'] = $this->m->countlfbInstalledMachines(24);
        $data['lfb_team'] = $this->t->countlfb(24);
        $data['packing_count'] = $this->m->countpackingInstalledMachines(25);

        $this->load->view('LabDashboard', $data);
    }

    public function master_form()
    {
         $data['Labtest'] = $this->l->labtest();
        $this->load->view('LabMasterForm',$data);
      
    }

    public function main_form()
    {
        $this->load->view('LabMainForm');
    }

    public function getDetails()
    {
        $TID = $_POST['TID'];
       $data = $this->l->getDetails($TID);
       return $this->output
       ->set_content_type('application/json')
       ->set_status_header(200)
       ->set_output(json_encode($data));

       
    }

    public function getHead()
    {
        $TID = $_POST['TID'];
       $data = $this->l->getHead($TID);
       return $this->output
       ->set_content_type('application/json')
       ->set_status_header(200)
       ->set_output(json_encode($data));
       
    }

    

    public function addHeadData()
    { 
   ////////////////////////////////// Simple Form Send /////////////////////////////////
    //     print_r($_FILES['file']);
    //     die();
    //      if(!empty($_FILES['img']['name'])){

    //         $config['upload_path'] = 'assets\img\img';
    //         $config['allowed_types'] = 'jpg|jpeg|png|gif';
    //         $config['file_name'] = basename($_FILES["img"]["name"]) ;
            
    //         //Load upload library and initialize configuration
    //         $this->load->library('upload',$config);
    //        $this->upload->initialize($config);
             
    //         if($this->upload->do_upload('img')){
    //        $uploadData = $this->upload->data();
    //        $picture = $uploadData['file_name'];
    //        $config['image_library'] = 'gd2';  
    //        $config['source_image'] = 'assets/img/img/'.$picture;
    //        $config['create_thumb'] = FALSE;  
    //        $config['maintain_ratio'] = FALSE;  
    //        $config['quality'] = '60%';  
    //        $config['width'] = 800;  
    //        $config['height'] = 600;  
    //        $config['new_image'] = 'assets/img/img/'.$picture;
    //        $this->load->library('image_lib', $config);  
    //        $this->image_lib->resize(); 
    //         }else{
    //         Echo "helll";
        
    //          $picture = '';
    //         }
    //        }else{
            
    //         $picture = '';
    //        }
        
     
    //   $headerValue = $_POST['HeaderData'];
    //   $header = explode(",",$headerValue[0]);
  
    //     $childValue = $_POST['ChildData'];
    //     $child = explode("]",$childValue[0][0]);
    //     $childArray = [];
    //     foreach ($child as $key => $value) {
    //         $arraySplit = explode(',',$value);
    //         array_push($childArray, $arraySplit);
           
    //     }
     
    //     $TestDate = $header[0];
    //     $PONo = $header[1];
    //     $Quantity = $header[2];
    //     $ReceivingDate = $header[3];
    //     $ItemName = $header[4];
    //     $SupplierName = $header[5];
    //     $testNo = $header[6];
    //     $SupplierRef = $header[7];
    //     $Result = $header[8];
    //     $ItemType = $header[9];
    //     $this->l->AddHeader(
    //         $TestDate,
    //         $PONo,
    //         $Quantity,
    //         $ReceivingDate,
    //         $ItemName,
    //         $SupplierName,
    //         $testNo,
    //         $SupplierRef,
    //         $Result,
    //         $ItemType,
    //         $picture,
    //         $childArray 
    //     );


    ////////////////////////////////////// Ajax Call ///////////////////////////////

     if(!empty($_FILES['file']['name'])){

        $config['upload_path'] = 'assets\img\img';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["file"]["name"]) ;
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
       $this->upload->initialize($config);
         
        if($this->upload->do_upload('file')){
       $uploadData = $this->upload->data();
       $picture = $uploadData['file_name'];
       $config['image_library'] = 'gd2';  
       $config['source_image'] = 'assets/img/img/'.$picture;
       $config['create_thumb'] = FALSE;  
       $config['maintain_ratio'] = FALSE;  
       $config['quality'] = '60%';  
       $config['width'] = 800;  
       $config['height'] = 600;  
       $config['new_image'] = 'assets/img/img/'.$picture;
       $this->load->library('image_lib', $config);  
       $this->image_lib->resize(); 
        }else{
        Echo "helll";
    
         $picture = '';
        }
       }else{
        
        $picture = '';
       }
    
 
  $headerValue = $_POST['HeaderArray'];
  $header = explode(",",$headerValue);

    $childValue = $_POST['ChildArray'];
    $child = explode("]",$childValue);
    $childArray = [];
    foreach ($child as $key => $value) {
        $arraySplit = explode(',',$value);
        array_push($childArray, $arraySplit);
       
    }
    array_pop($childArray);
    $testGroup = $_POST['testGroup'];
    $TestDate = $header[0];
    $PONo = $header[1];
    $Quantity = $header[2];
    $ReceivingDate = $header[3];
    $ItemName = $header[4];
    $SupplierName = $header[5];
    $testNo = $header[6];
    $SupplierRef = $header[7];
    $Result = $header[8];
    $ItemType = $header[9];
    $this->l->AddHeader(
        $TestDate,
        $PONo,
        $Quantity,
        $ReceivingDate,
        $ItemName,
        $SupplierName,
        $testNo,
        $SupplierRef,
        $Result,
        $ItemType,
        $picture,
        $testGroup,
        $childArray 
    );
    }

    public function addHeadDataFoam()
    { 

    ////////////////////////////////////// Ajax Call ///////////////////////////////

     if(!empty($_FILES['file']['name'])){

        $config['upload_path'] = 'assets\img\img';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["file"]["name"]) ;
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
       $this->upload->initialize($config);
         
        if($this->upload->do_upload('file')){
       $uploadData = $this->upload->data();
       $picture = $uploadData['file_name'];
       $config['image_library'] = 'gd2';  
       $config['source_image'] = 'assets/img/img/'.$picture;
       $config['create_thumb'] = FALSE;  
       $config['maintain_ratio'] = FALSE;  
       $config['quality'] = '60%';  
       $config['width'] = 800;  
       $config['height'] = 600;  
       $config['new_image'] = 'assets/img/img/'.$picture;
       $this->load->library('image_lib', $config);  
       $this->image_lib->resize(); 
        }else{
        Echo "helll";
    
         $picture = '';
        }
       }else{
        
        $picture = '';
       }
    
 
  $headerValue = $_POST['HeaderArray'];
  $header = explode(",",$headerValue);

    $childValue = $_POST['ChildArray'];
    $child = explode("]",$childValue);
    $childArray = [];
    foreach ($child as $key => $value) {
        $arraySplit = explode(',',$value);
        array_push($childArray, $arraySplit);
       
    }
 
     array_pop($childArray);
    $TestDate = $header[1];
    $PONo = $header[3];
    $ReceivingDate = $header[2];
    $testNo = $header[0];
    $SupplierRef = $header[4];
    $testGroup = $_POST['testGroup'];
    $this->l->AddHeaderFoam(
        $TestDate,
        $PONo,
        $ReceivingDate,
        $testNo,
        $SupplierRef,
        $picture,
        $testGroup,
        $childArray 
    );
    }

    public function addHeadDataFabric()
    { 

    ////////////////////////////////////// Ajax Call ///////////////////////////////

     if(!empty($_FILES['file']['name'])){

        $config['upload_path'] = 'assets\img\img';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["file"]["name"]) ;
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
       $this->upload->initialize($config);
         
        if($this->upload->do_upload('file')){
       $uploadData = $this->upload->data();
       $picture = $uploadData['file_name'];
       $config['image_library'] = 'gd2';  
       $config['source_image'] = 'assets/img/img/'.$picture;
       $config['create_thumb'] = FALSE;  
       $config['maintain_ratio'] = FALSE;  
       $config['quality'] = '60%';  
       $config['width'] = 800;  
       $config['height'] = 600;  
       $config['new_image'] = 'assets/img/img/'.$picture;
       $this->load->library('image_lib', $config);  
       $this->image_lib->resize(); 
        }else{
        Echo "helll";
    
         $picture = '';
        }
       }else{
        
        $picture = '';
       }
    
 
  $headerValue = $_POST['HeaderArray'];
  $header = explode(",",$headerValue);

    $childValue = $_POST['ChildArray'];
    $child = explode("]",$childValue);
    $childArray = [];
    foreach ($child as $key => $value) {
        $arraySplit = explode(',',$value);
        array_push($childArray, $arraySplit);
       
    }
    array_pop($childArray);
  
    $testNo = $header[0];
    $CSSNO=$header[1];
    $TestDate = $header[2];
    $ItemName = $header[3];
    $PONo = $header[4];
    $ReceivingDate = $header[5];
    $SupplierName = $header[6];
  
    $SupplierRef = $header[7];
    $Quantity = $header[8];

   
  
    $Result = $header[9];
    $ItemType = $header[10];
    $testGroup = $_POST['testGroup'];
    $this->l->AddHeaderFabric(
        $TestDate,
        $CSSNO,
        $PONo,
        $Quantity,
        $ReceivingDate,
        $ItemName,
        $SupplierName,
        $testNo,
        $SupplierRef,
        $Result,
        $ItemType,
        $picture,
        $testGroup,
        $childArray 
    );
    }

    public function addHeadDataMaterial()
    { 

    ////////////////////////////////////// Ajax Call ///////////////////////////////

     if(!empty($_FILES['file']['name'])){

        $config['upload_path'] = 'assets\img\img';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["file"]["name"]) ;
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
       $this->upload->initialize($config);
         
        if($this->upload->do_upload('file')){
       $uploadData = $this->upload->data();
       $picture = $uploadData['file_name'];
       $config['image_library'] = 'gd2';  
       $config['source_image'] = 'assets/img/img/'.$picture;
       $config['create_thumb'] = FALSE;  
       $config['maintain_ratio'] = FALSE;  
       $config['quality'] = '60%';  
       $config['width'] = 800;  
       $config['height'] = 600;  
       $config['new_image'] = 'assets/img/img/'.$picture;
       $this->load->library('image_lib', $config);  
       $this->image_lib->resize(); 
        }else{
        Echo "helll";
    
         $picture = '';
        }
       }else{
        
        $picture = '';
       }
    
 
  $headerValue = $_POST['HeaderArray'];
  $header = explode(",",$headerValue);

    $childValue = $_POST['ChildArray'];
    $child = explode("]",$childValue);
    $childArray = [];
    foreach ($child as $key => $value) {
        $arraySplit = explode(',',$value);
        array_push($childArray, $arraySplit);
       
    }
    array_pop($childArray);
  
    $testNo = $header[0];
    $CSSNO=$header[1];
    $TestDate = $header[2];
    $ItemName = $header[3];
    $PONo = $header[4];
    $ReceivingDate = $header[5];
    $SupplierName = $header[6];
  
    $SupplierRef = $header[7];
    $Quantity = $header[8];

   
  
    $Result = $header[9];
    $ItemType = $header[10];
    $testGroup = $_POST['testGroup'];
    $this->l->AddHeaderMaterial(
        $TestDate,
        $CSSNO,
        $PONo,
        $Quantity,
        $ReceivingDate,
        $ItemName,
        $SupplierName,
        $testNo,
        $SupplierRef,
        $Result,
        $ItemType,
        $picture,
        $testGroup,
        $childArray 
    );
    }
    

    public function addHeadDataThread()
    { 

    ////////////////////////////////////// Ajax Call ///////////////////////////////

     if(!empty($_FILES['file']['name'])){

        $config['upload_path'] = 'assets\img\img';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["file"]["name"]) ;
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
       $this->upload->initialize($config);
         
        if($this->upload->do_upload('file')){
       $uploadData = $this->upload->data();
       $picture = $uploadData['file_name'];
       $config['image_library'] = 'gd2';  
       $config['source_image'] = 'assets/img/img/'.$picture;
       $config['create_thumb'] = FALSE;  
       $config['maintain_ratio'] = FALSE;  
       $config['quality'] = '60%';  
       $config['width'] = 800;  
       $config['height'] = 600;  
       $config['new_image'] = 'assets/img/img/'.$picture;
       $this->load->library('image_lib', $config);  
       $this->image_lib->resize(); 
        }else{
        Echo "helll";
    
         $picture = '';
        }
       }else{
        
        $picture = '';
       }
    
 
  $headerValue = $_POST['HeaderArray'];
  $header = explode(",",$headerValue);

    $childValue = $_POST['ChildArray'];
    $child = explode("]",$childValue);
    $childArray = [];
    foreach ($child as $key => $value) {
        $arraySplit = explode(',',$value);
        array_push($childArray, $arraySplit);
       
    }
    array_pop($childArray);
    $testNo = $header[0];
    $TestDate = $header[1];
    $ReceivingDate = $header[2];
    $PONo = $header[3];
    $SupplierRef = $header[4];
    $SupplierName = $header[5];
    $Thickness = $header[6];
   
    $LinearDensity = $header[7];

 
    $TwistPerInch = $header[8];
    $testGroup = $_POST['testGroup'];
    $this->l->AddHeaderThread(
        $TestDate,
        $PONo,
        $ReceivingDate,
        $SupplierName,
        $testNo,
        $SupplierRef,
        $picture,
        $testGroup,
        $childArray 
        ,$Thickness
        ,$LinearDensity
        ,$TwistPerInch

    );
    }

    public function addHeadDataBlader()
    { 

    ////////////////////////////////////// Ajax Call ///////////////////////////////

     if(!empty($_FILES['file']['name'])){

        $config['upload_path'] = 'assets\img\img';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["file"]["name"]) ;
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
       $this->upload->initialize($config);
         
        if($this->upload->do_upload('file')){
       $uploadData = $this->upload->data();
       $picture = $uploadData['file_name'];
       $config['image_library'] = 'gd2';  
       $config['source_image'] = 'assets/img/img/'.$picture;
       $config['create_thumb'] = FALSE;  
       $config['maintain_ratio'] = FALSE;  
       $config['quality'] = '60%';  
       $config['width'] = 800;  
       $config['height'] = 600;  
       $config['new_image'] = 'assets/img/img/'.$picture;
       $this->load->library('image_lib', $config);  
       $this->image_lib->resize(); 
        }else{
        Echo "helll";
    
         $picture = '';
        }
       }else{
        
        $picture = '';
       }
    
 
  $headerValue = $_POST['HeaderArray'];
  $header = explode(",",$headerValue);

    $childValue = $_POST['ChildArray'];
    $child = explode("]",$childValue);
    $childArray = [];
    foreach ($child as $key => $value) {
        $arraySplit = explode(',',$value);
        array_push($childArray, $arraySplit);
       
    }
    array_pop($childArray);
    $TestDate = $header[1];
    $PONo = $header[3];
    $Material = $header[6];
    $ReceivingDate = $header[2];
    $Size = $header[7];
    $SupplierName = $header[4];
    $testNo = $header[0];
    $SupplierRef = $header[5];
    $Hardness = $header[8];
    $Remarks =  $header[9];
    $testGroup = $_POST['testGroup'];
    $this->l->AddHeaderBlader(
        $TestDate,
        $PONo,
        $ReceivingDate,
        $Size,
        $SupplierName,
        $testNo,
        $SupplierRef,
        $picture,
        $testGroup,
        $childArray ,
        $Material,
        $Hardness,
        $Remarks
    );
    }



    public function addBodyData()
    {
        $child = $_POST['ChildArray'];
        $IdOfHead = $_POST['IdOfNewlyEnteredRecord'];
        foreach ($child as $key => $value) {
            $testNo = $value[0];
            $PONo = $value[1];
            $Requirement = $value[2];
            $Test = $value[3];
            $Results = $value[4];
            $this->l->AddDetails(
                $testNo,
                $PONo,
                $Requirement,
                $Test,
                $Results,
                $IdOfHead
            );
        }
    }
    public function undo($TID){
        $data['undo'] = $this->l->undo($TID);
    }
     public function updated($reviewStatus,$approvedStatus,$TID){
        //$data['Labtest'] 
        $data = $this->l->updatedStatus($reviewStatus,$approvedStatus,$TID);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function getTableData(){
 
        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];
        $data = $this->l->getTableData($sDate,$eDate);

        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }


    
}
