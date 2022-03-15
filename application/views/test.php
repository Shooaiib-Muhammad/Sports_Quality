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

 public function ShowDetails()
 {
  $data['headData'] = $this->l->getHead($_GET['id']);
  $data['detailsData'] = $this->l->getDetails($_GET['id']);

  $this->load->view('FailDetails', $data);
 }

 public function TestType()
 {
  $data['TestTypes'] = $this->l->getTestType();
  // $data['detailsData'] = $this->l->getDetails($_GET['id']);

  $this->load->view('LabTestType', $data);
 }

 public function TestRequest()
 {
  // $data['TestTypes'] = $this->l->getTestType();
  // $data['detailsData'] = $this->l->getDetails($_GET['id']);
  $data['Articles'] = $this->l->GetArticles();
  $data['getTestTypes'] = $this->l->getTestType();
  $data['getRequesterRequests'] = $this->l->getTestByRequester();
  $this->load->view('TestRequest', $data);
 }

 public function TestRequestLab()
 {

  $data['getTestByLabPending'] = $this->l->getTestByLabPending();
  $data['getTestByLabAcknowledge'] = $this->l->getTestByLabAcknowledge();
  $this->load->view('TestRequestLab', $data);
 }

 public function TestReceive()
 {
  // $data['TestTypes'] = $this->l->getTestType();
  // $data['detailsData'] = $this->l->getDetails($_GET['id']);
  $data['getTestRequests'] = $this->l->getTestRequests();
  $data['getTestRequestsSendToLab'] = $this->l->getTestRequestsSendToLab();
  $data['getTestRequestsSendToRequester'] = $this->l->getTestRequestsSendToRequester();
  $this->load->view('TestReceive', $data);
 }

 public function TestTypeById()
 {
  $idGet = $_POST['Id'];
  $data = $this->l->TestTypeById($idGet);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }



 public function TestRequestById()
 {
  $idGet = $_POST['Id'];
  $data = $this->l->TestRequestById($idGet);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function AddTestType()
 {
  $Name = $_POST['Name'];
  $Status = $_POST['Status'];
  // $data['detailsData'] = $this->l->getDetails($_GET['id']);
  $data = $this->l->AddTestType($Name, $Status);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function AddRequest()
 {
  $testtype = $_POST['testtype'];
  $Type = $_POST['Type'];
  $Sample_RequestDate = $_POST['Sample_RequestDate'];
  $Factory_Code = $_POST['Factory_Code'];
  // $Article = $_POST['Article'];
  // $TestID = $_POST['TestID'];
  $Quantity_Issued = $_POST['Quantity_Issued'];
  $Status = $_POST['Status'];
  $po = $_POST['po'];
  $supplier = $_POST['supplier'];
  if ($po) {
   $po = $_POST['po'];
  } else {
   $po = 0;
  }
  if ($supplier) {
   $supplier = $_POST['supplier'];
  } else {
   $supplier = 'Null';
  }


  // $data['detailsData'] = $this->l->getDetails($_GET['id']);
  $data = $this->l->AddRequest($testtype, $Type, $Sample_RequestDate, $Factory_Code, $Quantity_Issued, $Status, $po, $supplier);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function EditTestType()
 {

  $Id = $_POST['Id'];
  $Name = $_POST['Name'];
  $Status = $_POST['Status'];
  // $data['detailsData'] = $this->l->getDetails($_GET['id']);
  $data = $this->l->EditTestType($Id, $Name, $Status);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function EditTestRequest()
 {

  $TID = $_POST['TID'];
  $Sample_Receiving_Date = $_POST['Sample_Receiving_Date'];
  $CSSNo = $_POST['CSSNo'];
  $Quantity_Received = $_POST['Quantity_Received'];
  $Quantity_Retained = $_POST['Quantity_Retained'];
  // $Quantity_Returned = $_POST['Quantity_Returned'];
  $Due_Date = $_POST['Due_Date'];
  $senderSignature = $_POST['senderSignature'];
  $CompletationDate = $_POST['CompletationDate'];
  $Remarks = $_POST['Remarks'];
  $data = $this->l->EditTestRequest($TID, $Sample_Receiving_Date, $CSSNo, $Quantity_Received, $Quantity_Retained, $Due_Date, $CompletationDate, $Remarks, $senderSignature);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function AcknowledgeResult()
 {

  $TID = $_POST['Id'];
  $data = $this->l->AcknowledgeResult($TID);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }


 public function EditTestRequestBackToSender()
 {

  $TID = $_POST['Id'];
  $Quantity = $_POST['Quantity'];
  $senderId = $_POST['senderId'];
  $ReceiverId = $_POST['receiverId'];

  $data = $this->l->EditTestRequestBackToSender($TID, $Quantity, $senderId, $ReceiverId);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function EditTestRequestLabAcknowledge()
 {

  $TID = $_POST['Id'];

  $data = $this->l->EditTestRequestLabAcknowledge($TID);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function ShowDetailsFGT()
 {
  $data['head'] = $this->l->FGT_PRINT_Head($_GET['id']);
  $data['detail'] = $this->l->FGT_PRINT_Details($_GET['id']);

  $this->load->view('FailDetailsFGT', $data);
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
  $this->load->view('LabMasterForm', $data);
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

 public function Get_Comparison_Data()
 {

  $data = $this->l->Get_Comparison_Data($_POST['LotNo'], $_POST['date']);
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

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
   array_push($childArray, $arraySplit);
  }
  array_pop($childArray);
  $testGroup = $_POST['testGroup'];
  $testPerformer = $_POST['testPerformer'];
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
   $testPerformer,
   $childArray
  );
 }

 public function addHeadDataFoam()
 {

  ////////////////////////////////////// Ajax Call ///////////////////////////////

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
   array_push($childArray, $arraySplit);
  }

  array_pop($childArray);
  $TestDate = $header[1];
  $PONo = $header[3];
  $ReceivingDate = $header[2];
  $testNo = $header[0];
  $SupplierRef = $header[4];
  $testGroup = $_POST['testGroup'];
  $testPerformer = $_POST['testPerformer'];
  $this->l->AddHeaderFoam(
   $TestDate,
   $PONo,
   $ReceivingDate,
   $testNo,
   $SupplierRef,
   $picture,
   $testGroup,
   $testPerformer,
   $childArray
  );
 }

 public function addHeadDataFabric()
 {

  ////////////////////////////////////// Ajax Call ///////////////////////////////

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
   array_push($childArray, $arraySplit);
  }
  array_pop($childArray);

  $testNo = $header[0];
  $CSSNO = $header[1];
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
  $testPerformer = $_POST['testPerformer'];

  //     if($Result=='Fail' || $Result=='fail'){
  //         $mail = new PHPMailer(true);
  // try{


  //   //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  // $mail->isSMTP();                                            //Send using SMTP
  // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  // $mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
  // $mail->Password   = 'Forward123';                               //SMTP password
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  // $mail->IsHTML(true);
  // //Recipients
  // $mail->setFrom('from@example.com', "Lab Test Failure Alert ");
  // $mail->addAddress("hufsa@forward.pk"); 
  // $mail->addAddress("sohail@forward.pk"); 
  // $mail->addAddress("store@forward.pk"); 
  // $mail->AddCC('abaid@forward.pk');
  // $mail->AddCC('imran@forward.pk');

  //  $mail->AddCC('waseembutt@forward.pk');
  //  $mail->AddCC('tafseer@forward.pk');
  //     $mail->AddCC('shoaib@forward.pk');
  //     $mail->AddCC('fsqa@forward.pk');
  //           $mail->AddCC('oman@forward.pk');
  //              $mail->AddCC('abdulhaseeb@forward.pk');
  // $mail->AddCC('zainabbas@forward.pk');

  // $mail->AddCC('yaseen@forward.pk');
  // $mail->Subject = "Raw Material Failure";
  // $mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
  // <div style="margin-left:40%;">
  // <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
  // Fabric Test Report Result Alert</th></tr>
  // <tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
  // <tr><th>Material Name:</th><td>'.$ItemName .'</td></tr>
  // <tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
  // <tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>

  // <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
  // </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


  // //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
  // //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
  // $mail->send();
  // echo 'Message has been sent';
  // } catch (Exception $e) {
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  // }
  // }
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
   $testPerformer,
   $childArray
  );
 }

 public function addHeadDataMaterial()
 {

  ////////////////////////////////////// Ajax Call ///////////////////////////////

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
   array_push($childArray, $arraySplit);
  }
  array_pop($childArray);

  $testNo = $header[0];
  $CSSNO = $header[1];
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
  $testPerformer = $_POST['testPerformer'];
  //     if($Result=='Fail' || $Result=='fail'){
  //         $mail = new PHPMailer(true);
  // try{


  //   //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  // $mail->isSMTP();                                            //Send using SMTP
  // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  // $mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
  // $mail->Password   = 'Forward123';                               //SMTP password
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  // $mail->IsHTML(true);
  // //Recipients
  // $mail->setFrom('from@example.com', "Lab Test Failure Alert ");
  // $mail->addAddress("hufsa@forward.pk"); 
  // $mail->addAddress("sohail@forward.pk"); 
  // $mail->addAddress("store@forward.pk"); 
  // $mail->AddCC('abaid@forward.pk');
  // $mail->AddCC('imran@forward.pk');

  //  $mail->AddCC('waseembutt@forward.pk');
  //  $mail->AddCC('tafseer@forward.pk');
  //     $mail->AddCC('shoaib@forward.pk');
  //     $mail->AddCC('fsqa@forward.pk');
  //           $mail->AddCC('oman@forward.pk');
  //              $mail->AddCC('abdulhaseeb@forward.pk');
  //              $mail->AddCC('yaseen@forward.pk');
  // $mail->AddCC('zainabbas@forward.pk');
  // $mail->Subject = "Raw Material Failure";
  // $mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
  // <div style="margin-left:40%;">
  // <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
  // Material Test Report Result Alert</th></tr>
  // <tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
  // <tr><th>Material Name:</th><td>'.$ItemName .'</td></tr>
  // <tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
  // <tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>

  // <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
  // </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


  // //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
  // //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
  // $mail->send();
  // echo 'Message has been sent';
  // } catch (Exception $e) {
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  // }
  // }

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
   $testPerformer,
   $childArray
  );
 }


 public function addHeadDataThread()
 {

  ////////////////////////////////////// Ajax Call ///////////////////////////////

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
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
  $Result = $header[9];
  $testGroup = $_POST['testGroup'];
  $testPerformer = $_POST['testPerformer'];
  //     if($Result=='Fail' || $Result=='fail'){
  //         $mail = new PHPMailer(true);
  // try{


  //   //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  // $mail->isSMTP();                                            //Send using SMTP
  // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  // $mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
  // $mail->Password   = 'Forward123';                               //SMTP password
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  // $mail->IsHTML(true);
  // //Recipients
  // $mail->setFrom('from@example.com', "Lab Test Failure Alert ");
  // $mail->addAddress("hufsa@forward.pk"); 
  // $mail->addAddress("sohail@forward.pk"); 
  // $mail->addAddress("store@forward.pk"); 
  // $mail->AddCC('abaid@forward.pk');
  // $mail->AddCC('imran@forward.pk');

  //  $mail->AddCC('waseembutt@forward.pk');
  //  $mail->AddCC('tafseer@forward.pk');
  //     $mail->AddCC('shoaib@forward.pk');
  //     $mail->AddCC('fsqa@forward.pk');
  //           $mail->AddCC('oman@forward.pk');
  //              $mail->AddCC('abdulhaseeb@forward.pk');
  //              $mail->AddCC('yaseen@forward.pk');
  //              $mail->AddCC('zainabbas@forward.pk');
  // $mail->Subject = "Raw Material Failure";
  // $mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
  // <div style="margin-left:40%;">
  // <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
  // Thread Test Report Result Alert</th></tr>
  // <tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
  // <tr><th>Material Name:</th><td>'.$SupplierRef .'</td></tr>
  // <tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
  // <tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>

  // <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
  // </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


  // //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
  // //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
  // $mail->send();
  // echo 'Message has been sent';
  // } catch (Exception $e) {
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  // }
  // }
  $this->l->AddHeaderThread(
   $TestDate,
   $PONo,
   $ReceivingDate,
   $SupplierName,
   $testNo,
   $SupplierRef,
   $picture,
   $testGroup,
   $testPerformer,
   $childArray,
   $Thickness,
   $LinearDensity,
   $TwistPerInch,
   $Result
  );
 }

 public function addHeadDataMSThread()
 {

  ////////////////////////////////////// Ajax Call ///////////////////////////////

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
   array_push($childArray, $arraySplit);
  }

  array_pop($childArray);
  $testNo = $header[0];
  $TestDate = $header[1];
  $ReceivingDate = $header[2];
  $PONo = $header[3];
  $SupplierRef = $header[4];
  $SupplierName = $header[5];
  $Result = $header[6];

  $MaterialName = $header[7];

  $testGroup = $_POST['testGroup'];
  $testPerformer = $_POST['testPerformer'];
  //     if($Result=='Fail' || $Result=='fail'){
  //         $mail = new PHPMailer(true);
  // try{


  //   //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  // $mail->isSMTP();                                            //Send using SMTP
  // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  // $mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
  // $mail->Password   = 'Forward123';                               //SMTP password
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  // $mail->IsHTML(true);
  // //Recipients
  // $mail->setFrom('from@example.com', "Lab Test Failure Alert ");
  // $mail->addAddress("hufsa@forward.pk"); 
  // $mail->addAddress("sohail@forward.pk"); 
  // $mail->addAddress("store@forward.pk"); 
  // $mail->AddCC('abaid@forward.pk');
  // $mail->AddCC('imran@forward.pk');

  //  $mail->AddCC('waseembutt@forward.pk');
  //  $mail->AddCC('tafseer@forward.pk');
  //     $mail->AddCC('shoaib@forward.pk');
  //     $mail->AddCC('fsqa@forward.pk');
  //           $mail->AddCC('oman@forward.pk');
  //              $mail->AddCC('abdulhaseeb@forward.pk');
  //              $mail->AddCC('yaseen@forward.pk');
  //              $mail->AddCC('zainabbas@forward.pk');
  // $mail->Subject = "Raw Material Failure";
  // $mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
  // <div style="margin-left:40%;">
  // <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
  // MS Thread Test Report Result Alert</th></tr>
  // <tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
  // <tr><th>Material Name:</th><td>'.$SupplierRef .'</td></tr>
  // <tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
  // <tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>

  // <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
  // </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


  // //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
  // //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
  // $mail->send();
  // echo 'Message has been sent';
  // } catch (Exception $e) {
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  // }
  // }
  $this->l->AddHeaderMSThread(
   $TestDate,
   $PONo,
   $ReceivingDate,
   $SupplierName,
   $testNo,
   $SupplierRef,
   $picture,
   $testGroup,
   $testPerformer,
   $childArray,
   $Result,
   $MaterialName
  );
 }

 public function addHeadDataBlader()
 {

  ////////////////////////////////////// Ajax Call ///////////////////////////////

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
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
  $testPerformer = $_POST['testPerformer'];
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
   $testPerformer,
   $childArray,
   $Material,
   $Hardness,
   $Remarks
  );
 }

 public function addHeadDataFGT()
 {

  ////////////////////////////////////// Ajax Call ///////////////////////////////

  if (!empty($_FILES['file']['name'])) {

   $config['upload_path'] = 'assets\img\img';
   $config['allowed_types'] = 'jpg|jpeg|png|gif';
   $config['file_name'] = basename($_FILES["file"]["name"]);

   //Load upload library and initialize configuration
   $this->load->library('upload', $config);
   $this->upload->initialize($config);

   if ($this->upload->do_upload('file')) {
    $uploadData = $this->upload->data();
    $picture = $uploadData['file_name'];
    $config['image_library'] = 'gd2';
    $config['source_image'] = 'assets/img/img/' . $picture;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['quality'] = '60%';
    $config['width'] = 800;
    $config['height'] = 600;
    $config['new_image'] = 'assets/img/img/' . $picture;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();
   } else {
    echo "helll";

    $picture = '';
   }
  } else {

   $picture = '';
  }


  $headerValue = $_POST['HeaderArray'];
  $header = explode(",", $headerValue);

  $childValue = $_POST['ChildArray'];
  $child = explode("]", $childValue);
  $childArray = [];
  foreach ($child as $key => $value) {
   $arraySplit = explode(',', $value);
   array_push($childArray, $arraySplit);
  }
  array_pop($childArray);
  $TestNo = $header[0];
  $Date = $header[1];
  $ModelName = $header[2];
  $CSSCode = $header[3];
  $Pressure = $header[4];
  $TempHumidity = $header[5];
  $Article = $header[6];
  $Category = $header[7];
  $size = $header[8];
  $Testedfor = $header[9];
  $Note = $header[10];
  $testGroup = $_POST['testGroup'];
  $testPerformer = $_POST['testPerformer'];
  $this->l->AddHeaderFGT(
   $TestNo,
   $Date,
   $ModelName,
   $CSSCode,
   $Pressure,
   $TempHumidity,
   $Article,
   $Category,
   $picture,
   $testGroup,
   $testPerformer,
   $childArray,
   $size,
   $Testedfor,
   $Note
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
 public function undo($TID)
 {
  $data['undo'] = $this->l->undo($TID);
 }
 public function undoTestType($TID)
 {
  $data['undoTestType'] = $this->l->undoTestType($TID);
 }
 public function updated($reviewStatus, $approvedStatus, $TID)
 {
  //$data['Labtest'] 
  $data = $this->l->updatedStatus($reviewStatus, $approvedStatus, $TID);
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function getTableDatalab()
 {

  $sDate = $_POST["startDate"];
  $eDate = $_POST["endDate"];
  $data = $this->l->getTableDatalab($sDate, $eDate);

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }
}
