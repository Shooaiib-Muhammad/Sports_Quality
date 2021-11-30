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
        $picture,
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
              ,ItemType
              ,image
              ,TestType)
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
              ,'$ItemType'
              ,'$picture',
              'Cotton')");
        $Id = $this->db->insert_id();
        echo $Id;
        $iterCotton = 0;
        foreach ($child as $key => $value) {
            if($iterCotton == 0){
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
               $iterCotton += 1;
            }
            else{
                $testNo = $value[1];
            $PONo = $value[2];
            $Requirement = $value[3];
            $Test = $value[4];
              $Results = $value[5];
                 $Value = $value[6];
          
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
           $iterCotton += 1;
            }
            
        }
    }

    public function AddHeaderFoam(
        $TestDate,
        $PONo,
        $ReceivingDate,
        $testNo,
        $SupplierRef,
        $picture,
        $child
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,PO
              ,Receiving_Date
              ,Supplier_Ref
              ,Entrydate
              ,UserID
              ,image
              ,TestType)
        VALUES
              ('$testNo'
              ,'$TestDate'
              ,'$PONo'
              ,'$ReceivingDate'
              ,'$SupplierRef'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'Foam')");
        $Id = $this->db->insert_id();
        echo $Id;
        $iterFoam = 0;
        foreach ($child as $key => $value) {
           if($iterFoam == 0){
            $testNo = $value[0];
            $PONo = $value[1];
            $Test = $value[2];
            $Standard = $value[3];
            $Unit = $value[4];
            $Results = $value[5];
        
          
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
           ,Standard
           ,Unit
           ,result
           ,EntryDate
           ,user_ID)
     VALUES
           ('$Id'
           ,'$Test'
           ,'$Standard'
           ,'Unit'
           ,'$Results'
           ,'$Date'
           ,'$user_id')");
           $iterFoam +=1;
           }
           else
           {
            $testNo = $value[1];
            $PONo = $value[2];
            $Test = $value[3];
            $Standard = $value[4];
            $Unit = $value[5];
            $Results = $value[6];
        
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
           ,Standard
           ,Unit
           ,result
           ,EntryDate
           ,user_ID)
     VALUES
           ('$Id'
           ,'$Test'
           ,'$Standard'
           ,'Unit'
           ,'$Results'
           ,'$Date'
           ,'$user_id')");
           $iterFoam +=1;
           }

        }
    }

    public function AddHeaderFabric(
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
              ,ItemType
              ,image
              ,CSSNO
              ,TestType
              )
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
              ,'$ItemType'
              ,'$picture'
              , '$CSSNO'
              ,'Fabric'
              )");
        $Id = $this->db->insert_id();
        echo $Id;
        $i=0;
        foreach ($child as $key => $value) {
           if($i==0){
            $Requirement = $value[1];
            $Test = $value[0];
            $Results = $value[2];
            $Uncertainity = $value[3];
            $Remarks = $value[4];
          
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
           ,Requirments
           ,result,Uncertainty,ReMarks
           ,EntryDate
           ,user_ID)
     VALUES
           ('$Id'
           ,'$Test'
           ,'$Requirement'
           ,'$Results'
           ,'$Uncertainity',
           '$Remarks'
           ,'$Date'
           ,'$user_id')");
           $i +=1;
           }
           else{
    
            $Requirement = $value[2];
            $Test = $value[1];
            $Results = $value[3];
            $Uncertainity = $value[4];
            $Remarks = $value[5];
          
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
           ,Requirments
           ,result,Uncertainty,ReMarks
           ,EntryDate
           ,user_ID)
     VALUES
           ('$Id'
           ,'$Test'
           ,'$Requirement'
           ,'$Results'
           ,'$Uncertainity',
           '$Remarks'
           ,'$Date'
           ,'$user_id')");
           $i +=1;
           }
            
        }
    }


    public function AddHeaderThread(
        $TestDate,
        $PONo,
        $ReceivingDate,
        $SupplierName,
        $testNo,
        $SupplierRef,
        $picture,
        $child
        ,$thickness
        , $LinearDensity
        ,$twisrPerInch

    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,PO
              ,Receiving_Date
              ,Supplier_Name
              ,Supplier_Ref
              ,Entrydate
              ,UserID
              ,image
              ,Thickness
              ,LinearDensity
              ,TwistPerInch
              ,TestType
              )
        VALUES
              ('$testNo'
              ,'$TestDate'
              ,'$PONo'
              ,'$ReceivingDate'
              ,'$SupplierName'
              ,'$SupplierRef'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'$thickness'
              ,'$LinearDensity'
              ,'$twisrPerInch'
              ,'Thread'
              )");
        $Id = $this->db->insert_id();
        echo $Id;
        $iter = 0;

        foreach ($child as $key => $value) {
            if($iter == 0){
                $testNo = $value[0];
                $PONo = $value[1];
                $TDate = $value[2];
                $time = strtotime($TDate);
                $newformat = date('Y-m-d',$time);
                $ExtatMax = $value[3];
                  $MaxLoad = $value[4];
                     $Ext = $value[5];
              
                $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
               (TID
               ,TDate
               ,ExtatMax
               ,MaxLoad,Ext
               ,EntryDate
               ,user_ID)
         VALUES
               ('$Id'
               ,'$newformat'
               ,'$ExtatMax'
               ,'$MaxLoad'
               ,'$Ext'
               ,'$Date'
               ,'$user_id')");
        $iter +=1;    
        }
        else{
            $testNo = $value[1];
            $PONo = $value[2];
            $TDate = $value[3];
            $time = strtotime($TDate);
            $newformat = date('Y-m-d',$time);
            $ExtatMax = $value[4];
              $MaxLoad = $value[5];
                 $Ext = $value[6];
          
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,TDate
           ,ExtatMax
           ,MaxLoad,Ext
           ,EntryDate
           ,user_ID)
     VALUES
           ('$Id'
           ,'$newformat'
           ,'$ExtatMax'
           ,'$MaxLoad'
           ,'$Ext'
           ,'$Date'
           ,'$user_id')");
           $iter +=1;
        }
        }
            
    }

    public function AddHeaderBlader(
        $TestDate,
        $PONo,
        $ReceivingDate,
        $Size,
        $SupplierName,
        $testNo,
        $SupplierRef,
        $picture,
        $child,
        $material
        ,$hardness
        ,$remarks
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
              ,Entrydate
              ,UserID
              ,image
              ,material
              ,Hardness,
              Remarks,
              TestType)
        VALUES
              ('$testNo'
              ,'$TestDate'
              ,'$Size'
              ,'$PONo'
              ,'$ReceivingDate'
              ,'$SupplierName'
              ,'$SupplierRef'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'$material'
              ,'$hardness'
              ,'$remarks',
              'Blader')");
        $Id = $this->db->insert_id();
        echo $Id;
        $bladerIter = 0;
        foreach ($child as $key => $value) {
            // $testNo = $value[0];
            // $PONo = $value[1];
        if($bladerIter == 0){
            $Test = $value[2];
            $Unit = $value[3];
                $Results1 = $value[4];
                $Results2 = $value[5];
                $Results3 = $value[6];
                $Results4 = $value[7];
                $ValveTest = $value[8];
                $SpecificGravity = $value[9];
                $ResilienceTest = $value[10];
                $AbrasionLossOfWt = $value[11];
                $StabilityTest = $value[12];
                $MigrationTest = $value[13];
                $AirDate = $value[14];
                $Day = $value[15];
                $DecreaseInPr = $value[16];
                $TPressure = $value[17];
                $PercentageLeakage = $value[18];
                
                    $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
                   (TID
                   ,Test
                   ,EntryDate
                   ,user_ID
                   ,result1
                   ,result2
                   ,result3
                   ,result4
                   ,ValveTest
                   ,SpecificGravity,Resilience,
                   Abrasion,
                   StabilityTest,
                   MigrationTest,
                   AirDate,
                   Day
                   ,Decrease
                   ,TPressure
                   ,Leakage
                   ,Unit
                  )
             VALUES
                   ('$Id'
                   ,'$Test'
                   ,'$Date'
                   ,'$user_id'
                   ,'$Results1'
                   ,'$Results2'
                   ,'$Results3'
                   ,'$Results4'
        
                   ,'$ValveTest'
                   ,'$SpecificGravity'
                   ,'$ResilienceTest'
                   ,'$AbrasionLossOfWt'
                   ,'$StabilityTest'
                   ,'$MigrationTest'
                   ,'$AirDate'
        
                   ,'$Day'
                   ,'$DecreaseInPr'
                   ,'$TPressure'
                   ,'$PercentageLeakage'
        
                   ,'$Unit')");
                   $bladerIter +=1;
        }    
        else{
            $Test = $value[3];
    $Unit = $value[4];
        $Results1 = $value[5];
        $Results2 = $value[6];
        $Results3 = $value[7];
        $Results4 = $value[8];
        $ValveTest = $value[9];
        $SpecificGravity = $value[10];
        $ResilienceTest = $value[11];
        $AbrasionLossOfWt = $value[12];
        $StabilityTest = $value[13];
        $MigrationTest = $value[14];
        $AirDate = $value[15];
        $Day = $value[16];
        $DecreaseInPr = $value[17];
        $TPressure = $value[18];
        $PercentageLeakage = $value[19];
        
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
           ,EntryDate
           ,user_ID
           ,result1
           ,result2
           ,result3
           ,result4
           ,ValveTest
           ,SpecificGravity,Resilience,
           Abrasion,
           StabilityTest,
           MigrationTest,
           AirDate,
           Day
           ,Decrease
           ,TPressure
           ,Leakage
           ,Unit
          )
     VALUES
           ('$Id'
           ,'$Test'
           ,'$Date'
           ,'$user_id'
           ,'$Results1'
           ,'$Results2'
           ,'$Results3'
           ,'$Results4'

           ,'$ValveTest'
           ,'$SpecificGravity'
           ,'$ResilienceTest'
           ,'$AbrasionLossOfWt'
           ,'$StabilityTest'
           ,'$MigrationTest'
           ,'$AirDate'

           ,'$Day'
           ,'$DecreaseInPr'
           ,'$TPressure'
           ,'$PercentageLeakage'

           ,'$Unit')");
           $bladerIter +=1;
        }
        
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
    public function CallData($ArtCode){
            $query = $this->db->query(" SELECT        dbo.view_Dev_Articles.*
FROM            dbo.view_Dev_Articles Where ArtCode='$ArtCode'" );

        return $query->result_array();
}
public function LoadData($FactoryCode){
       $query = $this->db->query("SELECT        dbo.view_Dev_Activity.*
FROM            dbo.view_Dev_Activity
WHERE        (VendorName = '$FactoryCode')" );

        return $query->result_array();

}
public function insertion($ActivityID,$VendorID,$Balls,$ArticleID,$CID,$MID,$Size,$Type){
    $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');
     $query = $this->db->query("INSERT INTO tbl_Dev_Process
           (ActivityID
           ,VendorID
           
           ,UserID
           ,EntryDate
           ,NoOfBalls
           ,ArtID
           ,ModelID
           ,ClientID
           ,Size
,Type,
Status
           )
     VALUES
           ('$ActivityID'
           ,'$VendorID'
                   , $user_id
           ,'$Date'
           ,$Balls
           ,$ArticleID
           , $MID
           ,'$CID'
           ,'$Size'
           ,'$Type'
           ,'In Process')");
//         if($query ){
//  $this->session->set_flashdata('info', 'Activity Saved Successfully');
//         redirect('DevelopmentController/master_form');
//             } else {
//                 $this->session->set_flashdata('danger', 'Activity Not  Saved');
//                 redirect('DevelopmentController/master_form');
//             }
}

public function Process($article){
       $query = $this->db->query("SELECT        dbo.view_Dev_Process.*
FROM            dbo.view_Dev_Process
WHERE        (ArtCode = '$article')" );

        return $query->result_array();

}
public function updateprocess($TID ,$Balls,$Status,$date_make){
$Status=str_replace("%20"," ", $Status);
    if($Status=='Complete'){
         $Date = date('Y-m-d H:i:s');
                $query = $this->db->query("UPDATE   dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status' ,CompleteDate='$Date'
          WHERE  TID='$TID'");  
            }else{
                  $query = $this->db->query("UPDATE   dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status'
          WHERE  TID='$TID'");
            }
   
}
public function undoActivity($TID){
        $query = $this->db->query("DELETE  FROM tbl_Dev_Activities
      WHERE ActivityID=$TID");
}
public function GetArticles(){
     $query = $this->db->query(" SELECT        dbo.view_Dev_Articles.*
FROM            dbo.view_Dev_Articles");

        return $query->result_array();
}
public function getSize($ArtCode){
      $query = $this->db->query(" SELECT        dbo.view_Article_Size.*
FROM            dbo.view_Article_Size
Where ArtCode='$ArtCode' ");

        return $query->result_array();
}
}
