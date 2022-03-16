<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("./application/views/includes/Exception.php");
include("./application/views/includes/PHPMailer.php");
include("./application/views/includes/SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
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

        if($Result=='Fail' || $Result=='fail'){
            $mail = new PHPMailer(true);
    try{
    
    
      //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
    $mail->Password   = 'Forward123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->IsHTML(true);
    //Recipients
    $mail->setFrom('from@example.com', "Lab Test Failure Alert ");
    // $mail->addAddress("itdev@forward.pk"); 
    $mail->addAddress("hufsa@forward.pk"); 
    $mail->addAddress("sohail@forward.pk"); 
    $mail->addAddress("store@forward.pk"); 
    $mail->AddCC('abaid@forward.pk');
    $mail->AddCC('imran@forward.pk');
    
     $mail->AddCC('waseembutt@forward.pk');
     $mail->AddCC('tafseer@forward.pk');
        $mail->AddCC('shoaib@forward.pk');
        $mail->AddCC('fsqa@forward.pk');
              $mail->AddCC('oman@forward.pk');
                 $mail->AddCC('abdulhaseeb@forward.pk');
                   $mail->AddCC('zainabbas@forward.pk');
    $mail->AddCC('yaseen@forward.pk');
    $mail->Subject = "Raw Material Failure";
    $mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
    <div style="margin-left:40%;">
    <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
    Carton Test Report Result Alert</th></tr>
    <tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
    <tr><th>Material Name:</th><td>'.$ItemName .'</td></tr>
    <tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
    <tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>
    <tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetails?id='.$Id.'</td></tr>
    <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
    </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';
    
    
    //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
    //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }
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

if($Result=='Fail' || $Result=='fail'){
        $mail = new PHPMailer(true);
try{


  //Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
$mail->Password   = 'Forward123';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->IsHTML(true);
//Recipients
$mail->setFrom('from@example.com', "Lab Test Failure Alert ");
// $mail->addAddress("itdev@forward.pk"); 
$mail->addAddress("hufsa@forward.pk"); 
$mail->addAddress("sohail@forward.pk"); 
$mail->addAddress("store@forward.pk"); 
$mail->AddCC('abaid@forward.pk');
$mail->AddCC('imran@forward.pk');

 $mail->AddCC('waseembutt@forward.pk');
 $mail->AddCC('tafseer@forward.pk');
    $mail->AddCC('shoaib@forward.pk');
    $mail->AddCC('fsqa@forward.pk');
          $mail->AddCC('oman@forward.pk');
             $mail->AddCC('abdulhaseeb@forward.pk');
             $mail->AddCC('yaseen@forward.pk');
             $mail->AddCC('zainabbas@forward.pk');
$mail->Subject = "Raw Material Failure";
$mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
<div style="margin-left:40%;">
<table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
Fabric Test Report Result Alert</th></tr>
<tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
<tr><th>Material Name:</th><td>'.$ItemName .'</td></tr>
<tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
<tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>
<tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetails?id='.$Id.'</td></tr>
<tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
</table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


//  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
//$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
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

            if($Result=='Fail' || $Result=='fail'){
        $mail = new PHPMailer(true);
try{


  //Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
$mail->Password   = 'Forward123';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->IsHTML(true);
//Recipients
$mail->setFrom('from@example.com', "Lab Test Failure Alert ");
// $mail->addAddress("itdev@forward.pk"); 
$mail->addAddress("hufsa@forward.pk"); 
$mail->addAddress("sohail@forward.pk"); 
$mail->addAddress("store@forward.pk"); 
$mail->AddCC('abaid@forward.pk');
$mail->AddCC('imran@forward.pk');

 $mail->AddCC('waseembutt@forward.pk');
 $mail->AddCC('tafseer@forward.pk');
    $mail->AddCC('shoaib@forward.pk');
    $mail->AddCC('fsqa@forward.pk');
          $mail->AddCC('oman@forward.pk');
             $mail->AddCC('abdulhaseeb@forward.pk');
             $mail->AddCC('yaseen@forward.pk');
             $mail->AddCC('zainabbas@forward.pk');
$mail->Subject = "Raw Material Failure";
$mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
<div style="margin-left:40%;">
<table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
Material Test Report Result Alert</th></tr>
<tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
<tr><th>Material Name:</th><td>'.$ItemName .'</td></tr>
<tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
<tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>
<tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetails?id='.$Id.'</td></tr>
<tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
</table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


//  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
//$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

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
              ,performedBy
              ,Result
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
              ,'$testPerformer'
              ,'$Result'
              )");
        $Id = $this->db->insert_id();
            if($Result=='Fail' || $Result=='fail'){
        $mail = new PHPMailer(true);
try{


  //Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
$mail->Password   = 'Forward123';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->IsHTML(true);
//Recipients
$mail->setFrom('from@example.com', "Lab Test Failure Alert ");
// $mail->addAddress("itdev@forward.pk"); 
$mail->addAddress("hufsa@forward.pk"); 
$mail->addAddress("sohail@forward.pk"); 
$mail->addAddress("store@forward.pk"); 
$mail->AddCC('abaid@forward.pk');
$mail->AddCC('imran@forward.pk');

 $mail->AddCC('waseembutt@forward.pk');
 $mail->AddCC('tafseer@forward.pk');
    $mail->AddCC('shoaib@forward.pk');
    $mail->AddCC('fsqa@forward.pk');
          $mail->AddCC('oman@forward.pk');
             $mail->AddCC('abdulhaseeb@forward.pk');
             $mail->AddCC('yaseen@forward.pk');
             $mail->AddCC('zainabbas@forward.pk');
$mail->Subject = "Raw Material Failure";
$mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
<div style="margin-left:40%;">
<table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
Thread Test Report Result Alert</th></tr>
<tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
<tr><th>Material Name:</th><td>'.$SupplierRef .'</td></tr>
<tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
<tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>
<tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetails?id='.$Id.'</td></tr>
<tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
</table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


//  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
//$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
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

    public function AddHeaderMSThread(
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
        ,$Result
        ,$MaterialName
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

    $time = strtotime($TestDate);
    $TDate = date('Y-m-d',$time);

    $time2 = strtotime($ReceivingDate);
    $RDate = date('Y-m-d',$time2);
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
              ,TestType
              ,testGroup
              ,performedBy
              ,Result
              ,material
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
              ,'MS Thread'
              ,'$testGroup'
              ,'$testPerformer'
              ,'$Result'
              ,'$MaterialName'
              )");
        $Id = $this->db->insert_id();
            if($Result=='Fail' || $Result=='fail'){
        $mail = new PHPMailer(true);
try{


  //Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
$mail->Password   = 'Forward123';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->IsHTML(true);
//Recipients
$mail->setFrom('from@example.com', "Lab Test Failure Alert ");
// $mail->addAddress("itdev@forward.pk"); 
$mail->addAddress("hufsa@forward.pk"); 
$mail->addAddress("sohail@forward.pk"); 
$mail->addAddress("store@forward.pk"); 
$mail->AddCC('abaid@forward.pk');
$mail->AddCC('imran@forward.pk');

 $mail->AddCC('waseembutt@forward.pk');
 $mail->AddCC('tafseer@forward.pk');
    $mail->AddCC('shoaib@forward.pk');
    $mail->AddCC('fsqa@forward.pk');
          $mail->AddCC('oman@forward.pk');
             $mail->AddCC('abdulhaseeb@forward.pk');
             $mail->AddCC('yaseen@forward.pk');
             $mail->AddCC('zainabbas@forward.pk');
$mail->Subject = "Raw Material Failure";
$mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
<div style="margin-left:40%;">
<table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
MS Thread Test Report Result Alert</th></tr>
<tr><th>PO NO.</th><td>'.$PONo .'</td></tr>
<tr><th>Material Name:</th><td>'.$SupplierRef .'</td></tr>
<tr><th>Supplier Name.</th><td>'.$SupplierName .'</td></tr>
<tr><th>Test Performed By.</th><td>'. trim($testPerformer," ") .'</td></tr>
<tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetails?id='.$Id.'</td></tr>
<tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This Material has Been Failed</th></tr>
</table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


//  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
//$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
        echo $Id;
        $iter = 0;

        foreach ($child as $key => $value) {
            if($iter == 0){
                $testNo = $value[0];
                $PONo = $value[1];
                $Test = $value[2];
                // $time = strtotime($TDate);
                // $newformat = date('Y-m-d',$time);
                $Method = $value[3];
                  $Unit = $value[4];
                     $Requirement = $value[5];
                     $Result = $value[6];
                     
                $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
               (TID
               ,Test
               ,Method
               ,Unit,Requirments
               ,result
               ,EntryDate
               ,user_ID)
         VALUES
               ('$Id'
               ,'$Test'
               ,'$Method'
               ,'$Unit'
               ,'$Requirement'
               ,'$Result'
               ,'$Date'
               ,'$user_id')");
        $iter +=1;    
        }
        else{
            $testNo = $value[1];
            $PONo = $value[2];
            $Test = $value[3];
            $Method = $value[4];
            $Unit = $value[5];
            $Requirement = $value[6];
            $Result = $value[7];
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Test
            ,Method
            ,Unit,Requirments
            ,result
            ,EntryDate
            ,user_ID)
     VALUES
     ('$Id'
        ,'$Test'
        ,'$Method'
        ,'$Unit'
        ,'$Requirement'
        ,'$Result'
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


    public function AddHeaderFGT(
        $TestNo,
        $DateGet,
        $ModelName,
        $CSSCode,
        $Pressure,
        $TempHumidity,
        $Article,
        $Category,
        $picture,
        $testGroup,
        $testPerformer,
        $childArray ,
        $size,
        $Testedfor
        ,$Note
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,ModelName
              ,CSSNO
              ,Pressure
              ,TempHumidity
              ,Article
              ,Category
              ,Entrydate
              ,UserID
              ,image
              ,size
              ,Testedfor,
              TestType
              ,testGroup
              ,performedBy
              ,Note)
        VALUES
              ('$TestNo'
              ,'$DateGet'
              ,'$ModelName'
              ,'$CSSCode'
              ,'$Pressure'
              ,'$TempHumidity'
              ,'$Article'
              ,'$Category'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'$size'
              ,'$Testedfor'
              ,'FGT'
              ,'$testGroup'
              ,'$testPerformer'
              ,'$Note')");
        $Id = $this->db->insert_id();
        echo $Id;
        $bladerIter = 0;
  
        foreach ($childArray as $key => $value) {
            // $testNo = $value[0];
            // $PONo = $value[1];
        if($bladerIter == 0){
            $Weight = $value[0];
            $CircumferenceMin = $value[1];
                $CircumferenceMax = $value[2];
                $Deviation = $value[3];
                $ReboundTest = $value[4];
                $Remarks = $value[5];
                
                    $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
                 (TID
           ,Weight
           ,CircumferenceMin
           ,CircumferenceMax
           ,Deviation
           ,ReboundTest
           ,Remarks
          )
     VALUES
           ('$Id'
           ,'$Weight'
           ,'$CircumferenceMin'
           ,'$CircumferenceMax'
           ,'$Deviation'
           ,'$ReboundTest'
           ,'$Remarks'
         )");
                   $bladerIter +=1;
        }    
        else{
            $Weight = $value[2];
            $CircumferenceMin = $value[3];
                $CircumferenceMax = $value[4];
                $Deviation = $value[5];
                $ReboundTest = $value[6];
                $Remarks = $value[7];
        
            $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_D
           (TID
           ,Weight
           ,CircumferenceMin
           ,CircumferenceMax
           ,Deviation
           ,ReboundTest
           ,Remarks
          )
     VALUES
           ('$Id'
           ,'$Weight'
           ,'$CircumferenceMin'
           ,'$CircumferenceMax'
           ,'$Deviation'
           ,'$ReboundTest'
           ,'$Remarks'
         )");
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
        $Date = date('Y-m-d');
      //$Date  = date('d/m/Y');
 $query = $this->db
            ->query(" SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Entrydate BETWEEN CONVERT(DATETIME, '$Date 00:00:00', 102) AND CONVERT(DATETIME, '$Date 00:00:00', 102))");


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
    public function AddActivity($FC,$name,$status, $testtype){
 $query = $this->db->query("INSERT INTO tbl_Dev_Activities
           (VendorID
           ,Name
           ,Status
           ,testCatagoty
           )
     VALUES
           ('$FC'
           ,'$name',
           $status,
           '$testtype' )");
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
    public function updateActivity($TID,$name,$status,$testtype){
         $query = $this->db->query("UPDATE   dbo .tbl_Dev_Activities 
            SET   Name  =  '$name',Status  =  '$status', testCatagoty = '$testtype'
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

    public function undoTestType($TID){
        
        $query = $this->db->query("DELETE  FROM dbo.tbl_test_types
       WHERE TestID=$TID");
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
public function updateprocess($TID ,$Balls,$Status,$date_make,$ProcessEndDate,$percentageComplete){
$Status=str_replace("%20"," ", $Status);
	// Echo $ProcessEndDate;
    //         die;
    if($Status=='Complete'){
         $Date = date('Y-m-d H:i:s');
                $query = $this->db->query("UPDATE    dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status' ,CompleteDate='$Date' ,ProcessEndDate='$ProcessEndDate',percentageComplete = $percentageComplete 
          WHERE  TID='$TID'");  
            }else{
                  $query = $this->db->query("UPDATE   dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status',ProcessEndDate='$ProcessEndDate',percentageComplete = $percentageComplete 
          WHERE  TID='$TID'");
            }
   
}
public function  updatecprocess($TID ,$Balls,$Status,$date_make,$ProcessEndDate,$rootcasuse,$action,$percentageComplete){
 $Date = date('Y-m-d H:i:s');
                $query = $this->db->query("UPDATE    dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status' ,CompleteDate='$Date' ,ProcessEndDate='$ProcessEndDate' ,rootcasue='$rootcasuse',
            action='$action',percentageComplete = $percentageComplete
          WHERE  TID='$TID'");  
    
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
    public function getTableDatalab($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query(" SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102))");

        return $query->result_array();
   
    }

    public function getTestTypematerial()
    {

        $query = $this->db->query(" SELECT * 
    FROM            dbo.tbl_test_types  WHERE        (testCatagoty = 'Material Test')");

        return $query->result_array();
   
    }
     public function getTestTypeFGT()
    {

        $query = $this->db->query(" SELECT * 
    FROM            dbo.tbl_test_types  WHERE        (testCatagoty = 'FGT Test')");

        return $query->result_array();
   
    }

public function GetCssNo(){
        $query = $this->db->query("SELECT        CSSNo
FROM            dbo.tbl_lab_test_request
WHERE        (Status = 'Send to Lab') AND (Type = 'FGT Test')");

        return $query->result_array();
    
}
    public function getTestRequests()
    {

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Pending.*     
        FROM    dbo.View_Test_Request_Pending");

        return $query->result_array();
   
    }

    public function getTestRequestsSendToLab()
    {

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Send_to_Lab.*     
        FROM    dbo.View_Test_Request_Send_to_Lab");

        return $query->result_array();
   
    }

    public function getTestRequestsSendToRequester()
    {

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Send_to_Requester.*     
        FROM    dbo.View_Test_Request_Send_to_Requester");

        return $query->result_array();
   
    }

    public function TestTypeById($id)
    {

        $query = $this->db->query(" SELECT * 
    FROM            dbo.tbl_test_types
    WHERE TestID='$id'
    ");

        return $query->result_array();
   
    }

    public function getTestByLabPending()
    {
     
        $query = $this->db->query("SELECT   dbo.View_Test_Request_Pending_Lab.*     
        FROM    dbo.View_Test_Request_Pending_Lab

    ");
    

        return $query->result_array();
   
    }

    public function getTestByLabAcknowledge()
    {
     
        $query = $this->db->query("SELECT   dbo.View_Test_Request_Acknowledge_Lab.*     
        FROM    dbo.View_Test_Request_Acknowledge_Lab

    ");
    

        return $query->result_array();
   
    }

    public function getTestByRequester()
    {
        $user = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT   dbo.View_Test_Request_By_Sender_Id.*     
        FROM    dbo.View_Test_Request_By_Sender_Id
        WHERE SRSenderID = $user 
    ");

        return $query->result_array();
   
    }

    public function TestRequestById($id)
    {

        $query = $this->db->query(" SELECT * 
    FROM            dbo.tbl_lab_test_request
    WHERE TID='$id'
    ");

        return $query->result_array();
   
    }
    public function LoadDatacatagory($testCatagoty){
        $query = $this->db->query("SELECT        dbo.tbl_test_types.*
FROM            dbo.tbl_test_types
WHERE        (testCatagoty = '$testCatagoty')");

        return $query->result_array();
    }
    public function getTestType()
    {

        $query = $this->db->query(" SELECT * 
    FROM            dbo.tbl_test_types");

        return $query->result_array();
    }
    public function AddTestType($name, $status, $testtype)
    {

        $query = $this->db->query("INSERT  INTO dbo.tbl_test_types 
        (Name,Status,testCatagoty)
        VALUES
        ('$name','$status', '$testtype')");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function AddRequest($testtype, $Type, $Sample_RequestDate, $Factory_Code, $Quantity_Issued, $Status, $po, $supplier)
    {
        $user = $this->session->userdata('user_id');
        $userReceiver = 388;
        $query = $this->db->query("INSERT  INTO dbo.tbl_lab_test_request 
      (Type,Sample_RequestDate,Factory_Code,Quantity_Issued,Status,SRSenderID,SRReceiverID,finalStatus,TestType,PONo,SupplierName)
        VALUES
        ('$Type','$Sample_RequestDate','$Factory_Code',$Quantity_Issued,'$Status',$user,$userReceiver,'Pending','$testtype', '$po', '$supplier')");
        $RID = $this->db->insert_id();


        $this->session->set_userdata('MAXID', $RID);
        if($query){
            return true;
        }
        else{
            return false;
        }

    }
    public function getmaxID(){
        $user = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT        MAX(TID) AS MaXID
FROM            dbo.tbl_lab_test_request
WHERE        (SRSenderID = $user)");

        return $query->result_array();
    }
    public function GetItems(){
        
        $query = $this->db->query("SELECT        L4Name, Code
FROM            dbo.tbl_Inv_L4
WHERE        (Status = 1)");

        return $query->result_array();
    }
    public function getRequestData($ID)
    {
        
        $query = $this->db->query("SELECT        TID, Type, TestType, CONVERT(Varchar, Sample_RequestDate, 103) AS Sample_RequestDate, Factory_Code, PONo, SupplierName, Quantity_Issued
FROM            dbo.tbl_lab_test_request
WHERE        (TID = $ID)");

        return $query->result_array();
    }
    public function
    AddRdetailsTest($RID,  $TestID, $testtype){
        $user = $this->session->userdata('user_id');
        $Date = date('Y-m-d H:i:s');
        $query = $this->db->query("INSERT  INTO dbo.Tbl_Test_Type_Details 
      (RequestID,TestType,TestID)
        VALUES
        ($RID,'$testtype',$TestID)");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function requesttestYpe($RID){
        
        $query = $this->db->query(" SELECT * 
    FROM            dbo.view_lab_test_Types
    WHERE RequestID='$RID'");

        return $query->result_array();
    }
    public function AddRdetails($RID, $Code, $Article){
        $user = $this->session->userdata('user_id');
        $Date = date('Y-m-d H:i:s');
        $query = $this->db->query("INSERT  INTO dbo.Tbl_Test_Request_Details 
      (RequestID,Code,Article,UserID,EntryDate)
        VALUES
        ('$RID','$Code','$Article',$user,'$Date')");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function undotestTypeDetails($TID){
        $this->db->where('TID', $TID);
        $this->db->delete('Tbl_Test_Type_Details');
    }
    public function undotestitems($TID)
    {
        $this->db->where('TID', $TID);
        $this->db->delete('Tbl_Test_Request_Details');
    }
    
    public function getRequestdetails($ID)
    {

        $query = $this->db->query("SELECT      view_lab_request_Details.*
FROM            dbo.view_lab_request_Details
WHERE        (TID = $ID)");

        return $query->result_array();
    }
    
    public function EditTestType($id,$name,$status,$testtype)
    {
        
        $query = $this->db->query("UPDATE dbo.tbl_test_types 
        SET Name = '$name',Status = '$status', testCatagoty = '$testtype'
        WHERE TestID='$id'
        ");

        if($query){
            return true;
        }
        else{
            return false;
        }
   
    }

    public function EditTestRequest($TID,$Sample_Receiving_Date,$CSSNo,$Quantity_Received,$Quantity_Retained, $Due_Date,$CompletationDate,$Remarks,$senderSignature)
    {
        $user = $this->session->userdata('user_id');
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET Sample_Receiving_Date = '$Sample_Receiving_Date',CSSNo = '$CSSNo',Quantity_Received = '$Quantity_Received',Quantity_Retained = '$Quantity_Retained',Due_Date = '$Due_Date',CompletationDate = '$CompletationDate',Remarks = '$Remarks',Status='Send to Lab',LabAcknowledgementStatus='Pending',senderSignatureRec = '$senderSignature'
        
        WHERE TID='$TID'
        ");

        if($query){
            return true;
        }
        else{
            return false;
        }
   
    }

    public function EditTestRequestBackToSender($TID,$Quantity,$senderId ,$ReceiverId)
    {
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET SRETSenderID = '$senderId',SRETReceiverID = '$ReceiverId',Quantity_Returned = $Quantity,Status='Send Back to Requester'
       
        WHERE TID='$TID'
        ");

        if($query){
            return true;
        }
        else{
            return false;
        }
   
    }

    public function EditTestRequestLabAcknowledge($TID)
    {
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET LabAcknowledgementStatus = 'Acknowledged'
       
        WHERE TID='$TID'
        ");

        if($query){
            return true;
        }
        else{
            return false;
        }
   
    }

    public function AcknowledgeResult($TID)
    {
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET finalStatus='Acknowledged'
       
        WHERE TID='$TID'
        ");

        if($query){
            return true;
        }
        else{
            return false;
        }
   
    }

public function getTableData($sDate,$eDate){

   
    $newSDate = strtotime($sDate);
    $newEDate = strtotime($eDate);
    $newSDateObj = date('Y-m-d',$newSDate);
    $newEDateObj = date('Y-m-d',$newEDate);
    
    $query = $this->db->query("SELECT        dbo.view_FGT_H.*
    FROM            dbo.view_FGT_H
    WHERE       (moosadate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102))");

       return $query->result_array();
}
public function FGT_H_insertion($fgttype,$lbno,$tdate,$testcat,$fifastump,$pmonth,$cmat,$backing,$fgbladderttype,
    $btype,$ttype,$cssCode,$mmcolor,$pcolors,$result,$fn,$m,$pshape,$rem,$testperformedby,$note,$pictureFresh,$pictureShooter,$pictureHydro,$pictureDrum,$article,$size,$tetype,$department, $fgttest) {
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
              ,cssCode
              ,mainmatcolor
              ,printngscolors
              ,result
              ,userid,entrydate
              ,factory_name
              ,modal
              ,panel_shape
              ,remark,Performedby
              ,Note
              ,pictureFresh
              ,pictureShooter
              ,pictureHydro
              ,pictureDrum
              ,Article
              ,Size
              ,TType
              ,Department
              ,FGTTEST
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
              ,'$cssCode'
              ,'$mmcolor'
              ,'$pcolors',
              '$result'
              ,$user_id,'$Date'
              ,'$fn'
              ,'$m'
              ,'$pshape',
              '$rem'
              ,'$testperformedby',
              '$note'
              ,'$pictureFresh'
              ,'$pictureShooter'
              ,'$pictureHydro'
              ,'$pictureDrum'
              ,'$article'
              ,'$size'
              ,'$tetype'
              ,'$department'
              ,'$fgttest'
              )");

        $Id = $this->db->insert_id();
        
        if($result=='Fail' || $result=='fail'){
            $mail = new PHPMailer(true);
    try{
    
    
      //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'forwardsportssialkot@gmail.com';                     //SMTP username
    $mail->Password   = 'Forward123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->IsHTML(true);
    //Recipients
    $mail->setFrom('from@example.com', "Lab Test Failure Alert ");
    // $mail->addAddress("itdev@forward.pk"); 
    $mail->addAddress("hufsa@forward.pk"); 
    $mail->addAddress("sohail@forward.pk"); 
    $mail->addAddress("store@forward.pk"); 
    $mail->AddCC('abaid@forward.pk');
    $mail->AddCC('imran@forward.pk');
    
     $mail->AddCC('waseembutt@forward.pk');
     $mail->AddCC('tafseer@forward.pk');
        $mail->AddCC('shoaib@forward.pk');
        $mail->AddCC('fsqa@forward.pk');
              $mail->AddCC('oman@forward.pk');
                 $mail->AddCC('abdulhaseeb@forward.pk');
                 $mail->AddCC('yaseen@forward.pk');
                 $mail->AddCC('zainabbas@forward.pk');
    $mail->Subject = "FGT Failure";
    $mail->Body ='<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
    <div style="margin-left:40%;">
    <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
    '.$fgttype . ' Test Report Result Alert</th></tr>
    <tr><th>Test Date:</th><td>'.$tdate .'</td></tr>
    <tr><th>FGT Type.</th><td>'.$fgttype .'</td></tr>
    <tr><th>Lab No.</th><td>'.$lbno .'</td></tr>
    <tr><th>Test Category.</th><td>'.$testcat .'</td></tr>
    <tr><th>Article.</th><td>'.$article .'</td></tr>
    <tr><th>Size.</th><td>'.$size .'</td></tr>
    <tr><th>Test Performed By.</th><td>'. trim($testperformedby," ") .'</td></tr>
    <tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetailsFGT?id='.$Id.'</td></tr>
    <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This FGT has Been Failed</th></tr>
    </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';
    
    
    //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
    //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }

    }
    public function getFGRH(){
        $Date = date('Y-m-d');
     
        $query = $this->db
        ->query("SELECT        dbo.view_FGT_H.*
    FROM            dbo.view_FGT_H
    WHERE         (moosadate BETWEEN CONVERT(DATETIME, '$Date 00:00:00', 102) AND CONVERT(DATETIME, '$Date 00:00:00', 102))");
return $query->result_array();
    }

    public function getFGRHL(){
        $Date = date('d/m/Y');
     
        $query = $this->db
        ->query("SELECT   dbo.view_FGT_H_L.*
    FROM            dbo.view_FGT_H_L
    WHERE         (moosadate BETWEEN '$Date' AND '$Date')");
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

    public function Get_Comparison_Data($lotNo,$StartDate){
    
        $query = $this->db
        ->query("SELECT    SuplierID, LotNo, lengthOntage, lengthactual, widthOntage, widthactual, Def1, Def2, Def3, Def4, Def11, Def21, Def31, Def41, Def12, Def22, Def32, Def42, Def13, Def23, Def33, Def43, Hole1, Hole2, Name, Name2, Name3, Name4, 
        TID, Date, SupplierName, fabric, Color, CONVERT(varchar, Date, 103) AS Datee
FROM            dbo.view_store_transaction
WHERE      (LotNo = '$lotNo') AND (Date = CONVERT(DATETIME, '$StartDate 00:00:00', 102))");
return $query->result_array();
    }
   
}
