<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use phpDocumentor\Reflection\PseudoTypes\True_;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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


    public function EditRaw_MatHead()
    {
    
        $IdValue1 = $_POST['IdValue1'];
        $cssNo1 = $_POST['cssNo1'];
        $qReceived1 = $_POST['qReceived1'];
        $qRetained1 = $_POST['qRetained1'];
        $dueDate1 = $_POST['dueDate1'];
        $compDate1 = $_POST['compDate1'];
        $sSignature1 = $_POST['sSignature1'];
        $Remarks1 = $_POST['Remarks1'];



        $data = $this->l->EditRaw_MatHead($IdValue1,$cssNo1,$qReceived1,$qRetained1,$dueDate1,$compDate1,$sSignature1,$Remarks1);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function RawMatRequestAknowledgedByLab()
    {
        $data = $this->l->RawMatRequestAknowledgedByLab();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

       
    public function TestRequestRawMatById()
    {
        $idGet = $_POST['Id'];
        $data = $this->l->TestRequestRawMatById($idGet);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function EditTestRequestRawMatLabAcknowledge()
    {

        $TID = $_POST['Id'];

        $data = $this->l->EditTestRequestRawMatLabAcknowledge($TID);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }



    public function TestRequest()
    {

        $data['MAXID'] = $this->l->getmaxID();
        $RID = $data['MAXID'][0]['MaXID'];

        if ($this->session->has_userdata('MAXID')) {
            $data['RData'] = $this->l->getRequestData($RID);
        } else {
            $data['RData'] = null;
        }
        $data['GetItems'] = $this->l->GetItems();
        $data['supplier'] = $this->l->supplier();

        if ($this->session->has_userdata('MAXID')) {

            $data['TypeDetails'] = $this->l->requesttestYpe($RID);
            $data['getDetails'] = $this->l->getRequestdetails($RID);
        } else {
            $data['getDetails'] = null;
            $data['TypeDetails'] = null;
        }
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        $data['Articles'] = $this->l->GetArticles();
        //print_r($data['RData']);
        // print_r($data['RData'][0]['TestType']);
        $materiaType = $data['RData'][0]['TestType'];
        // Echo $materiaType;
        if ($materiaType == 'Material Test') {
            // print_r($data['RData']);
            //echo "I am Material";
            $data['getTestTypes'] = $this->l->getTestTypematerial();
        } elseif ($materiaType == 'FGT Test') {
            // print_r($data['RData']);
            // Echo "I am FGT";
            $data['getTestTypes'] = $this->l->getTestTypeFGT();
        }

        $data['getTestTypes'] = $this->l->getTestTypematerial();



   
        


        $data['getRequesterRequests'] = $this->l->getTestByRequester();

        $data['RData'] = $this->l->getRequestData($RID);



    

        $this->load->view('TestRequest', $data);
    }



    public function getSuppliers()
    {
       

         $data = $this->l->getSuppliers();
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function getTestName()
    {

        $RNO = $_POST['RNO'];

       

         $data = $this->l->getTestName($RNO);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    


    public function getItemName()
    {

        $RNO = $_POST['RNO'];

       

         $data = $this->l->getItemName($RNO);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }



    public function getLabRawMatHead()
    {
       

        $data['Raw_MatHead'] = $this->l->Raw_MatHead();


        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function EditAddRaw_MatHead()
    {

        $testNameList = [];

        $TtypeP = $_POST['TtypeP'];
        $RNO = $_POST['RNO'];
        
    


        $data = $this->l->EditAddRaw_MatHead($TtypeP,$RNO);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));

    }


    

    public function EditAddItemName()
    {

        $ItemNameP = $_POST['ItemNameP'];
        $RNO = $_POST['RNO'];
    

        $data = $this->l->EditItemName($ItemNameP,$RNO);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));

    }

    


    public function getRawMatReqTByPending()
    {
        

        $data = $this->l->getRawMatReqTByPending();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function getDataAfterRequest(){

        $TID = $_POST['TID'];

        

        $data = $this->l->getDataAfterRequest($TID);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));

    }

    public function getRawMatReqByCss()
    {


        $data = $this->l->getRawMatReqByCss();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function getRawMatReqByCss1()
    {

        $cssNo = $_POST['cssNo1'];

        $data = $this->l->getRawMatReqByCss1($cssNo);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


   
    public function AddRaw_MatHead()
    {
    
        $DateP = $_POST['Date'];

        $Type = $_POST['Type'];
        $testCategory = $_POST['testCategory'];
        $factoryCode = $_POST['factoryCode'];
        $quantityIssued = $_POST['quantityIssued'];
        $supplierN = $_POST['supplier'];
        $testType = $_POST['testType'];
        // $tTypeP = $_POST['tTypeP'];
        $ItemName = $_POST['ItemName'];
        $po1 = $_POST['po1'];

        // $tTypeP,

        $data = $this->l->AddRaw_MatHead($DateP, $Type, $factoryCode, $quantityIssued, $supplierN, $testType, $ItemName, $testCategory, $po1);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }



    public function getRequestOverAllData()
    {
        $data['getTestByRequesterDate'] = $this->l->getTestByRequesterDate($_POST['startDate'], $_POST['endDate']);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }





    public function Gettest()
    {

        $data = $this->l->getalltest();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function requestArticles()
    {
        $data = $this->l->GetArticles();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function NewRequest()
    {
        $this->session->unset_userdata("MAXID");
    }
    public function TestRequestLab()
    {

        $data['getTestByLabPending'] = $this->l->getTestByLabPending();
        $data['getTestByLabAcknowledge'] = $this->l->getTestByLabAcknowledge();

        $data['TID'] = $this->l->getTestByLabPendingByTID();

        $data['getTestTypes'] = $this->l->getTestTypematerial();
        // print_r($data['getTestTypes']);

        $this->load->view('TestRequestLab', $data);
    }
    public function TestType()
    {

        $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);

        $this->load->view('LabTestType', $data);
    }
    public function loadAlltest($typeCatagory, $RID)
    {
        $typeCatagory = str_replace("%20", " ", $typeCatagory);


        $data['LoadData'] = $this->l->LoadDatacatagory($typeCatagory);

        foreach ($data['LoadData'] as $keys) {
            $TestID = $keys['TestID'];
            $testtype = $keys['typeCatagory'];
            $RID = $RID;
            $data = $this->l->AddRdetailsTest($RID,  $TestID, $testtype);
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function TestReceive()
    {
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        $data['getTestRequests'] = $this->l->getTestRequests();
        $data['getTestRequestsSendToLab'] = $this->l->getTestRequestsSendToLab();
        $data['getTestRequestsSendToRequester'] = $this->l->getTestRequestsSendToRequester();
        $data['GETTestRequestsOverAll'] = $this->l->GETTestRequestsOverAll();

        $this->load->view('TestReceive', $data);
    }

    public function getTestRequestsByData($date1, $date2)
    {


        $data['getTestRequestsByData'] = $this->l->getTestRequestsByData($date1, $date2);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getrequesttestByDate2($id)
    {


        $data['getrequesttestByDate2'] = $this->l->getrequesttestByDate2($id);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }



    public function TestReceiveBySendBackToRequester($date1, $date2)
    {
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        $UserID = $this->session->userdata('user_id');
        $DeptID = $this->session->userdata('deptID');

        $data['getTestRequestSendBackToRequesterByDate'] = $this->l->getTestRequestsSendToRequesterByDate($date1, $date2);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function TestRequestsOverAll($date1, $date2)
    {
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        $UserID = $this->session->userdata('user_id');
        $DeptID = $this->session->userdata('deptID');

        $data['TestRequestsOverAll'] = $this->l->TestRequestsOverAll($date1, $date2);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getRequestTestById($RequestID)
    {

        $data['getRequestTestById'] = $this->l->getrequesttestById($RequestID);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }



    public function TestReceiveByDate($date1, $date2)
    {
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);


        $data['getTestRequestByDate'] = $this->l->getTestRequestsByDate($date1, $date2);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getrequesttestByDate($id)
    {
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);


        $data['getrequesttestByDate'] = $this->l->getTestRequestsByDate($id);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }



    public function TestReceiveByDateSendToLab($date1, $date2)
    {
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);


        $data['getTestRequestsSendToLabByDate'] = $this->l->getTestRequestsSendToLabByDate($date1, $date2);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function RDashbaord()
    {
        // $data['TestTypes'] = $this->l->getTestType();
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        // $data['getTestRequests'] = $this->l->getTestRequests();
        // $data['getTestRequestsSendToLab'] = $this->l->getTestRequestsSendToLab();
        // $data['getTestRequestsSendToRequester'] = $this->l->getTestRequestsSendToRequester();
        $this->load->view('RDashbaord');
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

    public function TestRequestByIdByAll()
    {
        $leavesArray = $_POST['data']['leaves'];
        $data = $this->l->TestRequestByIdByAll($leavesArray);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }




    public function AddTestType()
    {
        $Name = $_POST['Name'];
        $Status = $_POST['Status'];
        $testtype = $_POST['testCatagoty'];
        $mislaneous_status = $_POST['mislaneous_status'];
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        $data = $this->l->AddTestType($Name, $Status, $testtype, $mislaneous_status);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function AddRequest()
    {
        //  print_r($_POST);
        //  die;
        // Echo $_POST;
        // die;
        $testtype = $_POST['testType'];
        $Type = $_POST['Type'];
        $Sample_RequestDate = $_POST['Sample_RequestDate'];
        $Factory_Code = $_POST['Factory_Code'];
        // $Article = $_POST['Article'];
        // $TestID = $_POST['TestID'];

        $MaterialType = $_POST['MaterialType'];
        $Quantity_Issued = $_POST['Quantity_Issued'];
        $Status = $_POST['Status'];
        $po = $_POST['po'];
        $supplier = $_POST['suppliername'];
        if ($po) {
            $po = $_POST['po'];
        } else {
            $po = 0;
        }
        if ($supplier) {
            $supplier = $_POST['suppliername'];
        } else {
            $supplier = 'Null';
        }
        if ($MaterialType) {
            $MaterialType = $_POST['MaterialType'];
        } else {
            $MaterialType = 'Null';
        }
        // Echo $testtype;
        //         echo $supplier;
        // die;

        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        $data = $this->l->AddRequest($testtype, $Type, $Sample_RequestDate, $Factory_Code, $Quantity_Issued, $Status, $po, $supplier, $MaterialType);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function AddRdetails()
    {

        $RID = $_POST['RID'];

        $Code = $_POST['Code'];
        $ArtCodeAuto = $_POST['ArtCodeAuto'];

        $Article = $_POST['Article'];

        if ($Article) {
            $Article = $_POST['Article'];
        } else if ($ArtCodeAuto) {
            $Article = $_POST['ArtCodeAuto'];
        } else {
            $Article = 'Null';
        }
        if ($Code) {
            $Code = $_POST['Code'];
        } else {
            $Code = 'Null';
        }

        $data = $this->l->AddRdetails($RID,  $Code, $Article);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function AddRdetailsTest()
    {

        $RID = $_POST['RID'];

        $TestID = $_POST['TestID'];
        $testtype = $_POST['testtype'];
        $data = $this->l->AddRdetailsTest($RID,  $TestID, $testtype);

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
        $testtype = $_POST['testCatagoty'];
        $mislaneous_status = $_POST['mislaneous_status'];
        // $data['detailsData'] = $this->l->getDetails($_GET['id']);
        $data = $this->l->EditTestType($Id, $Name, $Status, $testtype, $mislaneous_status);

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


    public function EditTestRequestByAll()
    {

        // print_r($_POST['TID']['leaves']);
        // die;
        $leavesArray = $_POST['TID']['leaves'];

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
        $data = $this->l->EditTestRequestByAll($leavesArray, $Sample_Receiving_Date, $CSSNo, $Quantity_Received, $Quantity_Retained, $Due_Date, $CompletationDate, $Remarks, $senderSignature);

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

        print_r($TID);
        die;

        $data = $this->l->EditTestRequestBackToSender($TID, $Quantity, $senderId, $ReceiverId);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function EditTestRequestBackToSenderByAll()
    {

        $leavesArray = $_POST['data']['leaves'];

        $data = $this->l->EditTestRequestBackToSenderByAll($leavesArray);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }



    // public function EditTestRequestBackToSenderByAll()
    // {

    //     $leavesArray = $_POST['data']['leaves'];

    //     $TID = $_POST['TID'];
    //     $Quantity = $_POST['Quantity'];
    //     $senderId = $_POST['senderId'];
    //     $ReceiverId = $_POST['receiverId'];

    //     $data = $this->l->EditTestRequestBackToSenderByAll($leavesArray, $Quantity, $senderId, $ReceiverId);

    //     return $this->output
    //         ->set_content_type('application/json')
    //         ->set_status_header(200)
    //         ->set_output(json_encode($data));
    // }

    public function EditTestRequestLabAcknowledge()
    {

        $TID = $_POST['Id'];
        // $testTypeID = $_POST['testTypeID'];
        // print_r($testTypeID);

        $data = $this->l->EditTestRequestLabAcknowledge($TID);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    // public function EditTestRequestLabAcknowledgeBulk()
    // {
    //     print_r($_POST);
    //     die;
    //     $TID = $_POST['Id'];

    //     $data = $this->l->EditTestRequestLabAcknowledge($TID);

    //     return $this->output
    //         ->set_content_type('application/json')
    //         ->set_status_header(200)
    //         ->set_output(json_encode($data));
    // }


    public function EditTestRequestLabAcknowledgeBulk()
    {
        $leavesArray = $_POST['data']['leaves'];

        $data = $this->l->EditTestRequestLabAcknowledgeBulk($leavesArray);


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
        $data['getCssNo'] = $this->l->getmateialCssNO();
        $data['getmateialCssNoMisTests'] = $this->l->getmateialCssNoMisTests();


        $this->load->view('LabMasterForm', $data);
    }


    

    public function getCssRaw()
    {
        //$data['getCssNo'] =
        $data = $this->l->getrawCss($_POST['css']);
        // print_r($data);
        // die;
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    
    public function getRawMatReqTests()
    {
        

        $data = $this->l->getRawMatReqT();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
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

    public function getTestId()
    {
        $CssNo = $_POST['CssNo'];
        $data = $this->l->getTestId($CssNo);
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

        $headerValue = $_POST['HeaderArray'];
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
            $childArray,
            $CSSValueAdd
        );
    }


    public function addHeadDataAdhesion()
    {

        // print_r($_POST['HeaderArray']);
        // die;
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
        $header = explode(",", $headerValue);

        $childValue = $_POST['ChildArray'];
        $child = explode("]", $childValue);
        $childArray = [];
        foreach ($child as $key => $value) {
            $arraySplit = explode(',', $value);
            array_push($childArray, $arraySplit);
        }

        // echo "<pre>";
        // print_r($header);
        // die;
        // echo "</pre>";
        array_pop($childArray);
        $testGroup = $_POST['testGroup'];
        $testPerformer = $_POST['testPerformer'];
        $TestNo = $header[0];
        $TestDate = $header[1];
        $ReceivingDate = $header[2];
        $RecevingCode = $header[3];
        $PONo = $header[4];
        $ArticleNo = $header[5];
        $ArticleName = $header[6];
        $Result = $header[7];

        $this->l->addHeadDataAdhesion(
            $TestNo,
            $TestDate,
            $ReceivingDate,
            $RecevingCode,
            $PONo,
            $ArticleNo,
            $ArticleName,
            $Result,
            $picture,
            $testGroup,
            $testPerformer,
            $childArray,
            $CSSValueAdd
        );
    }



    public function addHeadDataCSM()
    {


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
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
        $Result = $header[11];




        $this->l->addHeadDataCSM(
            $TestNo,
            $Date,
            $ModelName,
            $CSSCode,
            $Pressure,
            $TempHumidity,
            $Article,
            $Category,
            $size,
            $Testedfor,
            $Note,
            $Result,
            $picture,
            $testGroup,
            $testPerformer,
            $childArray,
            $CSSValueAdd
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
            $childArray,
            $CSSValueAdd
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
        $testGroup = $_POST['testGroup'];
        $testPerformer = $_POST['testPerformer'];

        $header = explode(",", $headerValue);

        $childValue = $_POST['ChildArray'];
        $child = explode("]", $childValue);
        $childArray = [];
        foreach ($child as $key => $value) {
            $arraySplit = explode(',', $value);
            array_push($childArray, $arraySplit);
        }
        array_pop($childArray);
        

        $LabNo = $header[0];
        $RecevingDate = $header[1];
        $TestingDateS = $header[2];
        $TestingDateE = $header[3];
        $EnvironmentalC = $header[4];
        $Supplier_Name = $header[5];
        $Sender = $header[6];
        $MaterialName = $header[7];
        $CSSNO = $header[8];
        $IssueDate = $header[9];
        $LotReference = $header[10];
        $Result = $header[11];
        $performedBy = $header[12];
        $ItemType = $header[13];
       
        $this->l->AddHeaderFabric(
            $LabNo,
            $RecevingDate,
            $TestingDateS,
            $TestingDateE,
            $EnvironmentalC,
            $Supplier_Name,
            $Sender,
            $MaterialName,
            $CSSNO,
            $IssueDate,
            $LotReference,
            $Result,
            $performedBy,
            $ItemType,

            $childArray,

            $CSSValueAdd,
            $testGroup,
            $testPerformer,
            $picture
        );
    }

    public function addHeadDataMaterial()
    {
        

        ////////////////////////////////////// Ajax Call ///////////////////////////////
        $picture = '';
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
        $testGroup = $_POST['testGroup'];
        $testPerformer = $_POST['testPerformer'];

        $header = explode(",", $headerValue);

        $childValue = $_POST['ChildArray'];
        $child = explode("]", $childValue);
        $childArray = [];
        foreach ($child as $key => $value) {
            $arraySplit = explode(',', $value);
            array_push($childArray, $arraySplit);
        }
        array_pop($childArray);

        $LabNo = $header[0];
        $RecevingDate = $header[1];
        $TestingDateS = $header[2];
        $TestingDateE = $header[3];
        $EnvironmentalC = $header[4];
        $Supplier_Name = $header[5];
        $Sender = $header[6];
        $MaterialName = $header[7];
        $CSSNO = $header[8];
        $IssueDate = $header[9];
        $LotReference = $header[10];
        $Result = $header[11];
        $performedBy = $header[12];
        $ItemType = $header[13];

        $this->l->AddHeaderMaterial(
            $LabNo,
            $RecevingDate,
            $TestingDateS,
            $TestingDateE,
            $EnvironmentalC,
            $Supplier_Name,
            $Sender,
            $MaterialName,
            $CSSNO,
            $IssueDate,
            $LotReference,
            $Result,
            $performedBy,
            $ItemType,

            $childArray,

            $CSSValueAdd,
            $testGroup,
            $testPerformer,
            $picture
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
            $Result,
            $CSSValueAdd
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
            $MaterialName,
            $CSSValueAdd
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
            $Remarks,
            $CSSValueAdd
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
            $Note,
            $CSSValueAdd
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
    public function undotest($TID)
    {
        $data = $this->l->undotestTypeDetails($TID);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function undo($TID)
    {
        $data = $this->l->undo($TID);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function undotestitems($DTID)
    {
        $data = $this->l->undotestitems($DTID);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
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

    public function adhesionView()
    {
        $this->load->view('adhesionView');
    }
    public function getTableDatalab1()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab1($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function bladerView()
    {
        $this->load->view('bladerView');
    }
    public function getTableDatalab2()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab2($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function cartonView()
    {
        $this->load->view('cartonView');
    }
    public function getTableDatalab3()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab3($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    
    public function CSMMaterialView()
    {
        $this->load->view('CsmMaterialView');
    }
    public function getTableDatalab4()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab4($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function fabricView()
    {
        $this->load->view('fabricView');
    }
    public function getTableDatalab5()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab5($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    
    public function FgtView()
    {
        $this->load->view('fgtView');
    }
    public function getTableDatalab6()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab6($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function foamView()
    {
        $this->load->view('foamView');
    }
    public function getTableDatalab7()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab7($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function materialView()
    {
        $this->load->view('materialView');
    }
    public function getTableDatalab8()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab8($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function MsMaterialView()
    {
        $this->load->view('MsMaterialView');
    }
    public function getTableDatalab9()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab9($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function MsThreadView()
    {
        $this->load->view('MsThreadView');
    }
    public function getTableDatalab10()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab10($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function polyBagView()
    {
        $this->load->view('polyBagView');
    }
    public function getTableDatalab11()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab11($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function SrbladderView()
    {
        $this->load->view('SrbladderView');
    }
    public function getTableDatalab12()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab12($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function threadView()
    {
        $this->load->view('threadView');
    }
    public function getTableDatalab13()
    {

        $sDate = $_POST["startDate"];
        $eDate = $_POST["endDate"];

        $data = $this->l->getTableDatalab13($sDate, $eDate);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTCircumference()
    {
        $this->load->view('FgtCircumference');
    }

    public function getFGTTestCircumference()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTTestCircumference($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTReboundAt()
    {
        $this->load->view('FgtReboundAt');
    }

    public function getFGTTestReboundAt()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTTestReboundAt($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function FGTDrum()
    {
        $this->load->view('FgtDrumTest');
    }

    public function getFGTDrumTest()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTDrumTest($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTAdhesion()
    {
        $this->load->view('FgtAdhesionTest');
    }

    public function getFGTAdhesionTest()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTAdhesionTest($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTHydrolysisShooter()
    {
        $this->load->view('FgtAfterHydrolysisShooter');
    }

    public function getFGTHydrolysisShooter()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTHydrolysisShooter($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTCSMRebound()
    {
        $this->load->view('FgtCSMRebound');
    }

    public function getFGTCSMRebound()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTCSMRebound($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTFGTTest()
    {
        $this->load->view('FgtFGTTest');
    }

    public function getFGTFGTTest()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTFGTTest($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function FGTAfterHydroDrum()
    {
        $this->load->view('FgtAfterHydroDrumTest');
    }

    public function getFGTAfterHydroDrum()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTAfterHydroDrum($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTShooter()
    {
        $this->load->view('FgtShooter');
    }

    public function getFGTShooter()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTShooter($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function FgtAfterHydrolysisCSMRebound()
    {
        $this->load->view('FgtAfterHydrolysisCSMRebound');
    }

    public function getFGTAfterHydrolysisCSMRebound()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTAfterHydrolysisCSMRebound($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FgtHydrolysis()
    {
        $this->load->view('FgtHydrolysisTest');
    }

    public function getFGTHydrolysis()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTHydrolysis($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTReboundAtRoomTemp()
    {
        $this->load->view('FgtReboundAtRoomTemp');
    }

    public function getFGTReboundAtRoomTemp()
    {

        $sDate = $_POST["date1"];
        $eDate = $_POST["date2"];

        $data = $this->l->getFGTReboundAtRoomTemp($sDate, $eDate, $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function addHeadDataMSMaterial()
    {
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
        $CSSValueAdd = $_POST['CSSCodeValue'];
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
        $MaterialRef = $header[2];
        $PoNo = $header[3];
        $Status = $header[4];
        $Remarks = $header[5];
        $testGroup = $_POST['testGroup'];
        $testPerformer = $_POST['testPerformer'];



        $this->l->addHeadDataMSMaterial(
            $TestNo,
            $Date,
            $MaterialRef,
            $PoNo,
            $Status,
            $Remarks,
            $picture,
            $testGroup,
            $testPerformer,
            $childArray,
            $CSSValueAdd
        );
    }

    public function addHeadDataPolyBag()
    {


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
        $CSSValueAdd = $_POST['CSSCodeValue'];
        $header = explode(",", $headerValue);

        $childValue = $_POST['ChildArray'];
        $child = explode("]", $childValue);
        $childArray = [];
        foreach ($child as $key => $value) {
            $arraySplit = explode(',', $value);
            array_push($childArray, $arraySplit);
        }

        // echo "<pre>";
        // print_r($header);
        // die;
        // echo "</pre>";
        array_pop($childArray);
        $TestNo = $header[0];
        $PO = $header[1];
        $Receiveddate = $header[2];
        $Date = $header[3];
        $PolyBag = $header[4];
        $VenderName = $header[5];
        $result = $header[6];
        $testGroup = $_POST['testGroup'];
        $testPerformer = $_POST['testPerformer'];
        $this->l->addHeadDataPolyBag(
            $TestNo,
            $PO,
            $Receiveddate,
            $Date,
            $PolyBag,
            $VenderName,
            $result,
            $picture,
            $testGroup,
            $testPerformer,
            $childArray,
            $CSSValueAdd
        );
    }
    public function GetArticlesData()
    {
        $data['supplier'] = $this->l->getDatewiseSupplier(
            $_GET['c_date'],
            $_GET['e_date'],
            $_GET['ArticleName']
        );
        // $data['suppliermaterial'] = $this->Development_Model->getDatewisematerial(
        //     $_GET['c_date'],
        //     $_GET['e_date'],
        //     $_GET['supplierName']
        // );
        // $data['suppliertable'] = $this->Development_Model->customTablesuplier(
        //     $_GET['c_date'],
        //     $_GET['e_date'],
        //     $_GET['supplierName']
        // );
        // return $this->output
        //     ->set_content_type('application/json')
        //     ->set_status_header(200)
        //     ->set_output(json_encode($data));
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function getRequestsStatus()
    {
        $data['getRequests'] = $this->l->getRequestsStatus();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function loadFGTRequests()
    {
        $data = $this->l->loadFGTRequests();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTRequestwithoutCssNo()
    {
        $data = $this->l->FGTRequestwithoutCssNo();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTRequestwithCssNo()
    {
        $data = $this->l->FGTRequestwithCssNo();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTRequestwithCssNowithAknowledge()
    {
        $data = $this->l->FGTRequestwithCssNowithAknowledge();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTRequestwithAknowledge()
    {
        $data = $this->l->FGTRequestwithAknowledge();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function FGTRequest()
    {
        $data['articleNo'] = $this->l->fgtRequestArticleNo();
        $data['TestTypes'] = $this->l->getTestTypeforFGT();
        $this->load->view('fgtRequestView', $data);
    }
    public function getFgtRequestFormData(){
        $data = $this->l->getFgtRequestFormData($_POST['articleNo']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function addFGTRequest()
    {
        $data = $this->l->addFGTRequest($_POST['workingNo'], $_POST['articleNo'], $_POST['modelName'], $_POST['size'], $_POST['ballType'], $_POST['mainMatCol'], $_POST['coverMat'], $_POST['backing'], $_POST['bladderDetails'], $_POST['prodMonth'], $_POST['printColor'], $_POST['panelShape'], $_POST['testType'], $_POST['dQuantity'], $_POST['anyInfo']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function editFGTRequest()
    {
        $data = $this->l->editFGTRequest($_POST['TID']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function updateFGTRequest()
    {
        $data = $this->l->updateFGTRequest($_POST['TID'], $_POST['workingNo'], $_POST['articleNo'], $_POST['modelName'], $_POST['size'], $_POST['ballType'], $_POST['mainMatCol'], $_POST['coverMat'], $_POST['backing'], $_POST['bladderDetails'], $_POST['prodMonth'], $_POST['printColor'], $_POST['panelShape'], $_POST['testType'], $_POST['dQuantity'], $_POST['anyInfo']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function deleteFGTRequest()
    {
        $data = $this->l->deleteFGTRequest($_POST['TID']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function addCssNoToFGTRequest()
    {
        $data = $this->l->addCssNoToFGTRequest($_POST['TID'], $_POST['cssNo']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function updateCssNoFGTRequest()
    {
        $data = $this->l->updateCssNoFGTRequest($_POST['TID'], $_POST['cssNo']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTRequestSendToLab()
    {
        $data = $this->l->FGTRequestSendToLab();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function fgtRequestaddAknowledgeCssNo()
    {
        $data = $this->l->fgtRequestaddAknowledgeCssNo($_POST['TID']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function fgtRequestaddAknowledgeCssNoBulk()
    {
        $data = $this->l->fgtRequestaddAknowledgeCssNoBulk($_POST['selectedRows']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTRequestAknowledgedByLab()
    {
        $data = $this->l->FGTRequestAknowledgedByLab();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTRequestDateRange()
    {
        $data = $this->l->FGTRequestDateRange($_POST['date1'], $_POST['date2'], $_POST['factoryCode']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getFGTTestDataForView(){
        $result = $this->l->getFGTTestDataForView($_POST['date1'], $_POST['date2']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }
    public function getFGTTestDataForViewAirlessMini(){
        $result = $this->l->getFGTTestDataForViewAirlessMini($_POST['date1'], $_POST['date2']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function getFGTTestHead(){
        $result = $this->l->getFGTTestHead($_POST['TID']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }
    public function getFGTTestDetails(){
        $result = $this->l->getFGTTestDetails($_POST['TID']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }
    public function getFGTTestHeadAirlessMini(){
        $result = $this->l->getFGTTestHeadAirlessMini($_POST['TID']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }
    public function getFGTTestDetailsAirlessMini(){
        $result = $this->l->getFGTTestDetailsAirlessMini($_POST['TID']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function getFGTTestReqHead(){
        $result = $this->l->getFGTTestReqHead($_POST['CssNo']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }
    public function getFGTTestReqDetails(){
        $result = $this->l->getFGTTestReqDetails($_POST['TID']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($result));
    }

    public function FgtTesting()
    {
        return $this->load->view('FgtTesting', array('error' => ' '));
    }

    public function uploadFgtFile()
    {
        $picture1 = '';
        $picture2 = '';
        $picture3 = '';
        $picture4 = '';
        if (!empty($_FILES['freshImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["freshImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('freshImage')) {
				$uploadData = $this->upload->data();
				$picture1 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture1;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture1 = '';
			}
		} else {
            $picture1 = '';
		}
        if (!empty($_FILES['afterShooterImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["afterShooterImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('afterShooterImage')) {
				$uploadData = $this->upload->data();
				$picture2 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture2;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture2 = '';
			}
		} else {
            $picture2 = '';
		}
        if (!empty($_FILES['hydrolysisImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["hydrolysisImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('hydrolysisImage')) {
				$uploadData = $this->upload->data();
				$picture3 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture3;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture3 = '';
			}
		} else {
            $picture3 = '';
		}
        if (!empty($_FILES['drumImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["drumImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('drumImage')) {
				$uploadData = $this->upload->data();
				$picture4 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture4;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture4 = '';
			}
		} else {
            $picture4 = '';
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

        $fgtH = [
            'LabNo' => $header[0],
            'CssNo' => $header[1],
            'Receiving_Date' => $header[2],
            'Testing_DateS' => $header[3],
            'Testing_DateE' => $header[4],
            'Issue_Date' => $header[5],
            'EnvironmentalC' => $header[6],
            'TestAccToCat' => $header[7],

            'CoverMat' => $header[8],
            'Backing' => $header[9],
            'Bladder' => $header[10],
            'BallType' => $header[11],
            'Fifa_stump' => $header[12],
            'ProductionMon' => $header[13],

            'TestType' => $header[14],
            'MainMatColor' => $header[15],
            'PrintingColor' => $header[16],
            'Article' => $header[17],
            'Working' => $header[18],
            'Result' => $header[19],
            'TestedBy' => $header[20],
            'freshImage' => $picture1,
            'afterShooterImage' => $picture2,
            'hydrolysisImage' => $picture3,
            'drumImage' => $picture4,
            'UserID' => $this->session->userdata('user_id')
        ];


        $data = $this->l->uploadFgtFileData($fgtH, $childArray);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
        
    }

    public function deleteFGTTestHeadDetails(){
        $data = $this->l->deleteFGTTestHeadDetails($_POST['TID']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function labReportWareHouse(){
        $this->load->view('labReportWareHouse');
    }
    public function labReportFGT(){
        $this->load->view('labReportFGT');
    }


    
    public function FgtTestingAirlessMini(){

        $this->load->view('FgtTestingAirlessMini');

    }

    public function uploadFgtAirlessMini()
    {
        $picture1 = '';
        $picture2 = '';
        $picture3 = '';
        $picture4 = '';
        if (!empty($_FILES['freshImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["freshImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('freshImage')) {
				$uploadData = $this->upload->data();
				$picture1 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture1;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture1 = '';
			}
		} else {
            $picture1 = '';
		}
        if (!empty($_FILES['afterShooterImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["afterShooterImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('afterShooterImage')) {
				$uploadData = $this->upload->data();
				$picture2 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture2;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture2 = '';
			}
		} else {
            $picture2 = '';
		}
        if (!empty($_FILES['hydrolysisImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["hydrolysisImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('hydrolysisImage')) {
				$uploadData = $this->upload->data();
				$picture3 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture3;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture3 = '';
			}
		} else {
            $picture3 = '';
		}
        if (!empty($_FILES['drumImage']['name'])) {
			$config['upload_path'] = 'assets\img\Fgt';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["drumImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('drumImage')) {
				$uploadData = $this->upload->data();
				$picture4 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/Fgt/' . $picture4;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture4 = '';
			}
		} else {
            $picture4 = '';
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

        $fgtH = [
            'LabNo' => $header[0],
            'CssNo' => $header[1],
            'Receiving_Date' => $header[2],
            'Testing_DateS' => $header[3],
            'Testing_DateE' => $header[4],
            'Issue_Date' => $header[5],
            'EnvironmentalC' => $header[6],
            'TestAccToCat' => $header[7],

            'CoverMat' => $header[8],
            'Backing' => $header[9],
            'Bladder' => $header[10],
            'BallType' => $header[11],
            'Fifa_stump' => $header[12],
            'ProductionMon' => $header[13],

            'TestType' => $header[14],
            'MainMatColor' => $header[15],
            'PrintingColor' => $header[16],
            'ModelName' => $header[17],
            'Article' => $header[18],
            'Working' => $header[19],
            'Result' => $header[20],
            'TestedBy' => $header[21],

            'freshImage' => $picture1,
            'afterShooterImage' => $picture2,
            'hydrolysisImage' => $picture3,
            'drumImage' => $picture4,
            'UserID' => $this->session->userdata('user_id'),
            
            'FC' => 'B34006'
        ];


        $data = $this->l->uploadFgtAirlessMini($fgtH, $childArray);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
        
    }   
    

    public function getOldCssNo(){
        
        $data = $this->l->getOldCssNo();      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function dashboardMini(){
        return $this->load->view('dashboardMini');
    }

    public function allFGTRequests()
    {
        $data['allFGTRequests'] = $this->l->allFGTRequests();
        $data['allRawMaterialRequests'] = $this->l->allRawMaterialRequests();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

}

