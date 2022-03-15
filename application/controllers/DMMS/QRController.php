<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QRController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('DMMS/Department_model', 'd');
        $this->load->model('DMMS/Machine_model', 'm');
        $this->load->model('DMMS/Team_model', 't');
    }

	public function index()
	{
        $this->load->view('DMMS/QRForm');
	}

	public function getId()
	{
        $data['machineId'] =  $this->uri->segment(3);
        //Echo $data['machineId'];
       
        $DMID= $data['machineId'];
      
        $data['getdata']=$this->m->getdata($DMID);
       if($data['getdata']){
     
          $TID=$data['getdata'][0]['ID'];
        $data['getcounter']=$this->m->getcounter($TID);
        $counter=$data['getcounter'][0]['Counter'];
// Echo $counter;
// die;
           if($counter=='1'){
            //    $TID=$data['getdata'][0]['ID'];
            // $data['machineissue'] =  $this->m->getissueDetails($TID);
            // $this->load->view('QRFormVerification',$data);
            	redirect('index.php/Main/loginPage');
           }else if($counter=='2'){
                $TID=$data['getdata'][0]['ID'];
            $data['machineissue'] =  $this->m->getissueDetails($TID);
          
            $this->load->view('DMMS/QRFormVerificationissue',$data);
            
           }else if($counter=='3'){
           
                $data['machineDetails'] =  $this->m->findbyMid($DMID);
           $this->load->view('DMMS/QRForm',$data);
           }
          
        }else{
         //Echo "Helll";
     
             $data['machineDetails'] =  $this->m->findbyMid($DMID);
            
           $this->load->view('DMMS/QRForm',$data);
        }
  
        
	}
  public function getIds()
	{
        $data['machineId'] =  $this->uri->segment(3);
        //Echo $data['machineId'];
       
        $DMID= $data['machineId'];
      
        $data['getdata']=$this->m->getdata($DMID);
       if($data['getdata']){
     
          $TID=$data['getdata'][0]['ID'];
        $data['getcounter']=$this->m->getcounter($TID);
        $counter=$data['getcounter'][0]['Counter'];
 
           if($counter=='1'){
            //    $TID=$data['getdata'][0]['ID'];
            // $data['machineissue'] =  $this->m->getissueDetails($TID);
            // $this->load->view('QRFormVerification',$data);
            	redirect('index.php/Main/loginPage');
           }else if($counter=='2'){
                $TID=$data['getdata'][0]['ID'];
            $data['machineissue'] =  $this->m->getissueDetails($TID);
          
            $this->load->view('DMMS/QRFormVerificationissue1',$data);
            
           }else if($counter=='3'){
           
                $data['machineDetails'] =  $this->m->findbyMid($DMID);
           $this->load->view('DMMS/QRForm1',$data);
           }
          
        }else{
         //Echo "Helll";
     
             $data['machineDetails'] =  $this->m->findbyMid($DMID);
            
           $this->load->view('DMMS/QRForm1',$data);
        }
  
        
	}

    public function addData(){
        $machinId = $_POST['machinId'];
        $workDes = $_POST['workDes'];
        $this->m->addDataSchedule($machinId,$workDes);    
      }

      public function addSol($transaction_Id,$solDes,$sol,$PID){
        $transactionId =  $transaction_Id;

        $solDes = $solDes;
        $sol =  $sol;
         $prbm =  $PID;
 
        $this->m->addDataTransaction($transactionId,str_replace("%20"," ",$solDes), $sol,$prbm);    
      }
       public function Approval(){
          
         $transactionId = $_POST['transaction_Id'];
       
        $Status = $_POST['sol'];
      
        $this->m->Approval($transactionId,$Status);    
      }
      
      public function getissueId()
      { 
          $data['machineIssueId'] =  $this->uri->segment(3);
        $data['machineissue'] =  $this->m->getissueDetails($data['machineIssueId']);
        print_r($data['machineissue']);
     
        $this->load->view('DMMS/QRFormVerification',$data);
         
      }
  public function GetIssued($id){
           $TID=$id;
            $data['machineissue'] =  $this->m->getissueDetails($TID);
            $data['Allproblems'] =  $this->m->getproblems();
            $this->load->view('DMMS/QRFormVerification',$data);
  }
   public function Addproblem($Problem,$machineID){
           //$TID=$id;
            $data['Data'] =  $this->m->Addproblem(str_replace("%20"," ",$Problem),$machineID);
            //$this->load->view('QRFormVerification',$data);
  }
  
}
