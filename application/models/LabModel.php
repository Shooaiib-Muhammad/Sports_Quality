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
        $testGroup,
        $testPerformer,
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
              ,TestType
              ,testGroup
              ,performedBy)
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
              'Carton'
              ,'$testGroup'
              ,'$testPerformer')");
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
        $testGroup,
        $testPerformer,
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
              ,TestType
              ,testGroup
              ,performedBy)
        VALUES
              ('$testNo'
              ,'$TestDate'
              ,'$PONo'
              ,'$ReceivingDate'
              ,'$SupplierRef'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'Foam'
              ,'$testGroup'
              ,'$testPerformer')");
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
           ,'$Unit'
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
           ,'$Unit'
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
        $testGroup,
        $testPerformer,
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
              ,testGroup
              ,performedBy
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
              ,'$testGroup'
              ,'$testPerformer'
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

    public function AddHeaderMaterial(
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
              ,testGroup
              ,performedBy
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
              ,'Material'
              ,'$testGroup'
              ,'$testPerformer'
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
        $testGroup,
        $testPerformer,
        $child
        ,$thickness
        , $LinearDensity
        ,$twisrPerInch
        ,$Result

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
              ,testGroup
              ,performedBy,Result
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
              ,'$testGroup'
              ,'$testPerformer',$Result
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
        $testGroup,
        $testPerformer,
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
              TestType
              ,testGroup
              ,performedBy)
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
              'Blader'
              ,'$testGroup'
              ,'$testPerformer')");
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
    
       public function undoFGT($TID){
         
       $query = $this->db->query("DELETE    FROM  tbl_FGT_D
      WHERE TID=$TID");
      if($query){
            $query = $this->db->query("DELETE FROM tbl_FGT_H
      WHERE TID=$TID");
       if($query){
           $this->session->set_flashdata('danger', 'Data Deleted Successfully');
           redirect('FGT/index');
       }
      }
        
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
public function updateprocess($TID ,$Balls,$Status,$date_make,$ProcessEndDate){
$Status=str_replace("%20"," ", $Status);
	// Echo $ProcessEndDate;
    //         die;
    if($Status=='Complete'){
         $Date = date('Y-m-d H:i:s');
                $query = $this->db->query("UPDATE    dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status' ,CompleteDate='$Date' ,ProcessEndDate='$ProcessEndDate' 
          WHERE  TID='$TID'");  
            }else{
                  $query = $this->db->query("UPDATE   dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status',ProcessEndDate='$ProcessEndDate' 
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
public function updatedStatus($reviewStatus,$approvedStatus,$TID){
    if($reviewStatus==1){
 $user_id = $this->session->userdata('user_id');
    }else{
 $user_id = 0;
    }
   if($approvedStatus==1){
 $user_id1 = $this->session->userdata('user_id');
    }else{
 $user_id1 = 0;
    }
    

    $query = $this->db->query("UPDATE   dbo .Tbl_Lab_Test_H 
    SET   ApprovedStatus  =  '$approvedStatus',ReviewStatus  =  '$reviewStatus',ReviewBy=$user_id,ApproveBy=$user_id1
  WHERE  TID='$TID'");
}
public function updatedStatusFGT($reviewStatus,$approvedStatus,$TID){
    if($reviewStatus==1){
 $user_id = $this->session->userdata('user_id');
    }else{
 $user_id = 0;
    }
   if($approvedStatus==1){
 $user_id1 = $this->session->userdata('user_id');
    }else{
 $user_id1 = 0;
    }
    
  
      $query = $this->db->query("UPDATE   dbo .tbl_FGT_H 
    SET   ApprovedStatus  =  '$approvedStatus',ReviewStatus  =  '$reviewStatus',Reviewby=$user_id,ApprovedBy=$user_id1
  WHERE  TID='$TID'");
}

  public function getDetails($Id){
        $query = $this->db->query(" SELECT        TID, dbo.view_Lab_test_Details.*
        FROM            dbo.view_Lab_test_Details
        WHERE        (TID = '$Id')");

        return $query->result_array();
    }

    public function getHead($Id){
        $query = $this->db->query(" SELECT        dbo.view_Lab_Test_H.*, TID
        FROM            dbo.view_Lab_Test_H
        WHERE        (TID = '$Id')");

        return $query->result_array();
    }
public function getTableData($sDate,$eDate){

    $newSDate = strtotime($sDate);
    $newEDate = strtotime($eDate);
    $newSDateObj = date('d/m/Y',$newSDate);
    $newEDateObj = date('d/m/Y',$newEDate);
    
    $query = $this->db->query(" SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
    WHERE        (Entrydate BETWEEN '$newSDateObj' AND '$newEDateObj')");

       return $query->result_array();
}
public function FGT_H_insertion($fgttype,$lbno,$tdate,$testcat,$fifastump,$pmonth,$cmat,$backing,$fgbladderttype,
    $btype,$ttype,$mmcolor,$pcolors,$result,$fn,$m,$inn,$pshape,$rem,$testperformedby,$note) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO tbl_FGT_H
              (FGTType
              ,labno
              ,testdate
              ,tastcat
              ,fifiastemp
              ,productionmonth
              ,covermat
              ,backing
              ,bladder
              ,balltype
              ,testtype
              ,mainmatcolor
              ,printngscolors
              ,result
              ,userid,entrydate
              ,factory_name
              ,modal
              ,Innervalue
              ,panel_shape
              ,remark,Performedby,Note
              )
        VALUES
              ('$fgttype'
              ,'$lbno'
              ,'$tdate'
              ,'$testcat'
              ,'$fifastump'
              ,'$pmonth'
              ,'$cmat'
              ,'$backing'
              ,'$fgbladderttype'
              ,'$btype'
              ,'$ttype'
              ,'$mmcolor'
              ,'$pcolors',
              '$result'
              ,$user_id,'$Date'
              ,'$fn'
              ,'$m'
              ,'$inn'
              ,'$pshape',
              '$rem'
              ,'$testperformedby',
              '$note'
              )");
        
    }
    public function getFGRH(){
        $query = $this->db
        ->query("SELECT        dbo.view_FGT_H.*
FROM            dbo.view_FGT_H");
return $query->result_array();
    }
    public function FGT_D_insertion($TID,$w1,$w2,$c1_sp,$c2_sp,$sp1_sp,$sp2_sp,$lp1,$lp2,$rrt1,$rrt2,$rrt51,$rrt52,$rrt01,$rrt02,$c1_dp,$c2_dp,$sp_dp1,$sp_dp2,$lp_dp1,$lp_dp2,$m1,$m2,$wup1,$wup2,$c1_wrt,$c2_wrt,$sp1_wrt,$sp2_wrt,$dt1,$dt2,$abr1,$abr2,$uvlf1,$uvlf2,$otr1,$otr2,$hl1,$hl2,$hcc1,$hcc2){
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO tbl_FGT_D  
              (TID,weight1
              ,weight2
              ,cir1
              ,cir2
              ,sphericity_sp1
              ,sphericity_sp2
              ,loss_of_pressure1
              ,loss_of_pressure2
              ,rebound_rt1
              ,rebound_rt2
              ,rebound_5_1
              ,rebound_5_2
              ,rebound_0_1
              ,rebound_0_2
              ,cir_st_1
              ,cir_st_2
              ,sphericity_st1
              ,sphericity_st2
              ,ch_of_pressure_st1
              ,ch_of_pressure_st2
              ,material_st1
              ,material_st2
              ,water_uptake_wrt1
              ,water_uptake_wrt2
              ,cir1_wrt
              ,cir2_wrt
              ,sphericity_wrt1
              ,sphericity_wrt2
              ,drum_test_pd1
              ,drum_test_pd2
              ,abraison_resistance_pd1
              ,abraison_resistance_pd2
              ,uv_light_fast_cst1
              ,uv_light_fast_cst2
              ,ozon_test_cst1
              ,ozon_test_cst2
              ,hydrolysis_lam1
              ,hydrolysis_lam2
              ,hydrolysis_color1
              ,hydrolysis_color2
              ,userid,entrydate)
        VALUES
              ($TID,'$w1'
              ,'$w2'
              ,'$c1_sp'
              ,'$c2_sp'
              ,'$sp1_sp'
              ,'$sp2_sp'
              ,'$lp1'
              ,'$lp2'
              ,'$rrt1'
              ,'$rrt2'
              ,'$rrt51'
              ,'$rrt52'
              ,'$rrt01'
              ,'$rrt02'
              ,'$c1_dp'
              ,'$c2_dp'
              ,'$sp_dp1'
              ,'$sp_dp2'
              ,'$lp_dp1'
              ,'$lp_dp2'
              ,'$m1'
              ,'$m2'
              ,'$wup1'
              ,'$wup2'
              ,'$c1_wrt'
              ,'$c2_wrt'
              ,'$sp1_wrt'
              ,'$sp2_wrt'
              ,'$dt1'
              ,'$dt2'
              ,'$abr1'
              ,'$abr2'
              ,'$uvlf1'
              ,'$uvlf2'
              ,'$otr1'
              ,'$otr2'
              ,'$hl1'
              ,'$hl2'
              ,'$hcc1'
              ,'$hcc2'
              ,$user_id,'$Date')");
    }
    public function FGT_PRINT_Head($id){
        $query = $this->db
        ->query("SELECT        dbo.view_FGT_H.*
FROM            dbo.view_FGT_H Where TID=$id");
return $query->result_array();
    }
    
    public function FGT_PRINT_Details($id){
        $query = $this->db
        ->query("SELECT        dbo.view_FGT_D.*
FROM            dbo.view_FGT_D Where TID=$id");
return $query->result_array();
    }
}
