<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LabModel extends CI_Model
{
    public $skillName;
    public $Status;

    public function AddHeader(
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
        $child
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,Size
              ,PO
              ,Receiving_Date
              ,Supplier_Name
              ,Supplier_Ref
              ,Quantity_Carton
              ,Entrydate
              ,UserID
              ,Result
              ,ItemType)
        VALUES
              ('$testNo'
              ,'$TestDate'
              ,'$ItemName'
              ,'$PONo'
              ,'$ReceivingDate'
              ,'$SupplierName'
              ,'$SupplierRef'
              ,'$Quantity'
              ,'$Date'
              ,'$user_id'
              ,'$Result'
              ,'$ItemType')");
        $Id = $this->db->insert_id();
        echo $Id;

        foreach ($child as $key => $value) {
            $testNo = $value[0];
            $PONo = $value[1];
            $Requirement = $value[2];
            $Test = $value[3];
              $Results = $value[4];
                 $Value = $value[5];
          
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
           ,Requirments
           ,result,Value
           ,EntryDate
           ,user_ID)
     VALUES
           ('$Id'
           ,'$Test'
           ,'$Requirement'
           ,'$Results'
           ,'$Value'
           ,'$Date'
           ,'$user_id')");
        }
    }

    public function AddDetails($testNo, $PONo, $Requirement, $Test, $IdOfHead)
    {
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
           ,Requirments
           ,result
           ,EntryDate
           ,user_ID)
     VALUES
           ('$IdOfHead'
           ,'$Test'
           ,'$Requirement'
           ,'null'
           ,'$Date'
           ,'$user_id')");
        $Id = $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where('SkillID', $id);
        $this->db->delete('tbl_DMMS_Skills');
    }
    public function labtest(){
      $Date  = date('d/m/Y');
 $query = $this->db
            ->query(" SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Entrydate ='$Date')");

        return $query->result_array();
    }
      public function labtestD($TestNO){
      $Date  = date('d/m/Y');
 $query = $this->db
            ->query(" SELECT        dbo.view_lab_test_D.*
FROM            dbo.view_lab_test_D
WHERE        (TestNO ='$TestNO')");

        return $query->result_array();
    }
    public function Vendors(){
        
$query = $this->db
            ->query("SELECT        VendorName, Status, VendorId
FROM            dbo.tbl_Pro_Vendor");

        return $query->result_array();
    }
    public function AddActivity($FC,$name,$status){
 $query = $this->db->query("INSERT INTO tbl_Dev_Activities
           (VendorID
           ,Name
           ,Status
           )
     VALUES
           ('$FC'
           ,'$name',
           $status )");
        if($query ){
 $this->session->set_flashdata('info', 'Activity Saved Successfully');
        redirect('DevelopmentController/master_form');
            } else {
                $this->session->set_flashdata('danger', 'Activity Not  Saved');
                redirect('DevelopmentController/master_form');
            }
    }
    public function Activities(){
        $query = $this->db->query(" SELECT        dbo.view_Dev_Activity.*
FROM            dbo.view_Dev_Activity");

        return $query->result_array();
    }
    public function updateActivity($TID,$name,$status){
         $query = $this->db->query("UPDATE   dbo .tbl_Dev_Activities 
            SET   Name  =  '$name',Status  =  '$status'
          WHERE  ActivityID='$TID'");
            
//             if($query ){
//  $this->session->set_flashdata('info', 'Activity Updated Successfully');
//         redirect('DevelopmentController/master_form');
//             } else {
//                 $this->session->set_flashdata('danger', 'Activity Not Updated ');
//                 redirect('DevelopmentController/master_form');
//             }
            
    }
    
     public function GetPOM(){
        $query = $this->db->query(" SELECT        dbo.view_Dev_POM.*
FROM            dbo.view_Dev_POM");

        return $query->result_array();
    }
    
    public function undo($TID){
        
       $query = $this->db->query("DELETE  FROM Tbl_Lab_Test_D
      WHERE TID=$TID");
      if($query){
            $query = $this->db->query("DELETE FROM Tbl_Lab_Test_H
      WHERE TID=$TID");
       if($query){
           $this->session->set_flashdata('danger', 'Data Deleted Successfully');
           redirect('LabController/master_form');
       }
      }
    }
    public function CallData($PO){
            $query = $this->db->query(" SELECT        dbo.view_Dev_POM.*
FROM            dbo.view_Dev_POM Where PO='$PO'" );

        return $query->result_array();
}
public function LoadData($FactoryCode){
       $query = $this->db->query("SELECT        dbo.view_Dev_Activity.*
FROM            dbo.view_Dev_Activity
WHERE        (VendorName = '$FactoryCode')" );

        return $query->result_array();

}
public function insertion($ActivityID,$VendorID,$POCode,$Balls){
    $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');
     $query = $this->db->query("INSERT INTO tbl_Dev_Process
           (ActivityID
           ,VendorID
           ,PO
           ,UserID
           ,EntryDate
           ,NoOfBalls
           )
     VALUES
           ('$ActivityID'
           ,'$VendorID'
           ,'$POCode'
           , $user_id
           ,'$Date'
           ,$Balls)");
//         if($query ){
//  $this->session->set_flashdata('info', 'Activity Saved Successfully');
//         redirect('DevelopmentController/master_form');
//             } else {
//                 $this->session->set_flashdata('danger', 'Activity Not  Saved');
//                 redirect('DevelopmentController/master_form');
//             }
}

public function Process($PO){
       $query = $this->db->query("SELECT        dbo.view_Dev_Process.*
FROM            dbo.view_Dev_Process
WHERE        (PO = '$PO')" );

        return $query->result_array();

}
public function updateprocess($TID ,$Balls,$date_make){
     $query = $this->db->query("UPDATE   dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make'
          WHERE  TID='$TID'");
}
public function undoActivity($TID){
        $query = $this->db->query("DELETE  FROM tbl_Dev_Activities
      WHERE ActivityID=$TID");
}
}
