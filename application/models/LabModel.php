<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("./application/views/includes/Exception.php");
include("./application/views/includes/PHPMailer.php");
include("./application/views/includes/SMTP.php");
include("phpqrcode/qrlib.php");

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
        $child,
        $CSSValueAdd
    ) {

        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,Size
              ,PO
              ,CSSNO
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
              ,'$CSSValueAdd'
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

        if ($Result == 'Fail' || $Result == 'fail') {
            $mail = new PHPMailer(true);
            try {


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
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
    <div style="margin-left:40%;">
    <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
    Carton Test Report Result Alert</th></tr>
    <tr><th>PO NO.</th><td>' . $PONo . '</td></tr>
    <tr><th>Material Name:</th><td>' . $ItemName . '</td></tr>
    <tr><th>Supplier Name.</th><td>' . $SupplierName . '</td></tr>
    <tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
    <tr><th>Click on the Link to see Details</th><td>http://192.168.10.4:2000/sports/LabController/ShowDetails?id=' . $Id . '</td></tr>
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
            if ($iterCotton == 0) {
                $testNo = $value[0];
                $PONo = $value[1];
                $Requirement = $value[2];
                $Test = $value[3];
                $Results = $value[4];
                $Value = $value[5];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
            } else {
                $testNo = $value[1];
                $PONo = $value[2];
                $Requirement = $value[3];
                $Test = $value[4];
                $Results = $value[5];
                $Value = $value[6];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
        $child,
        $CSSValueAdd
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,PO
              ,CSSNO
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
              ,'$CSSValueAdd'
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
            if ($iterFoam == 0) {
                $testNo = $value[0];
                $PONo = $value[1];
                $Test = $value[3];
                $Standard = $value[4];
                $Unit = $value[5];
                $Results = $value[6];


                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $iterFoam += 1;
            } else {
                $testNo = $value[1];
                $PONo = $value[2];
                $Test = $value[3];
                $Standard = $value[4];
                $Unit = $value[5];
                $Results = $value[6];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $iterFoam += 1;
            }
        }
    }

    public function AddHeaderFabric(
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
    ) {


        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (LabNo
              ,Date
              ,Receiving_Date
              ,TestingDate
              ,TestingDateE
              ,EnvironmentalC
              ,Supplier_Name
              ,Sender
              ,MaterialName
              ,CSSNO
              ,IssueDate
              ,LotReference
              ,UserID
              ,Result
              ,performedBy
              ,ItemType
              ,TestType

              ,testGroup
              ,image,
              EntryDate
              )
        VALUES
              ('$LabNo'
              ,'$Date'
              ,'$RecevingDate'
              ,'$TestingDateS'
              ,'$TestingDateE'
              ,'$EnvironmentalC'
              ,'$Supplier_Name'
              ,'$Sender'
              ,'$MaterialName'
              ,'$CSSNO'
              ,'$IssueDate'
              ,'$LotReference'
              ,'$user_id'
              ,'$Result'
              ,'$performedBy'
              ,'Fabric'
              ,'Fabric'

              ,'$testGroup'
              ,'$picture'
              ,'$Date'
              )");
        $Id = $this->db->insert_id();

        if ($Result == 'Fail' || $Result == 'fail') {
            $mail = new PHPMailer(true);
            try {


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
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
            <div style="margin-left:40%;">
            <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
            Material Test Report Result Alert</th></tr>
            <tr><th>CSS NO.</th><td>' . $CSSNO . '</td></tr>
            <tr><th>Material Name:</th><td>' . $MaterialName . '</td></tr>
            <tr><th>Supplier Name.</th><td>' . $Supplier_Name . '</td></tr>
            <tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
            <tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetails?id=' . $Id . '</td></tr>
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

        // echo $Id;
        $i = 0;
        foreach ($childArray as $key => $value) {
            if ($i == 0) {
                print_r($value[0]);
                print_r($value[1]);
                print_r($value[2]);
                print_r($value[3]);
                print_r($value[4]);
                $Test = $value[0];
                $Method = $value[1];
                $Requirement = $value[2];
                $Results = $value[3];
                $Remarks = $value[4];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
                    (TID
                    ,Test
                    ,Method
                    ,Requirments
                    ,result
                    ,ReMarks
                    ,EntryDate
                    ,user_ID)
                VALUES
                    ('$Id'
                    ,'$Test'
                    ,'$Method'
                    ,'$Requirement'
                    ,'$Results'
                    ,'$Remarks'
                    ,'$Date'
                    ,'$user_id')");
                $i += 1;
            } else {
                print_r($value[1]);
                print_r($value[2]);
                print_r($value[3]);
                print_r($value[4]);
                print_r($value[5]);
                
                    $Test = $value[1];
                    $Method = $value[2];
                    $Requirement = $value[3];
                    $Results = $value[4];
                    $Remarks = $value[5];

                    $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
                    (TID
                    ,Test
                    ,Method
                    ,Requirments
                    ,result
                    ,ReMarks
                    ,EntryDate
                    ,user_ID)
                VALUES
                    ('$Id'
                    ,'$Test'
                    ,'$Method'
                    ,'$Requirement'
                    ,'$Results'
                    ,'$Remarks'
                    ,'$Date'
                    ,'$user_id')");
                            $i += 1;
            }
        }
    }

    public function AddHeaderMaterial(
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
    ) {


        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (LabNo
              ,Date
              ,Receiving_Date
              ,TestingDate
              ,TestingDateE
              ,EnvironmentalC
              ,Supplier_Name
              ,Sender
              ,MaterialName
              ,CSSNO
              ,IssueDate
              ,LotReference
              ,UserID
              ,Result
              ,performedBy
              ,ItemType
              ,TestType

              ,testGroup
              ,image,
              EntryDate
              )
        VALUES
              ('$LabNo'
              ,'$Date'
              ,'$RecevingDate'
              ,'$TestingDateS'
              ,'$TestingDateE'
              ,'$EnvironmentalC'
              ,'$Supplier_Name'
              ,'$Sender'
              ,'$MaterialName'
              ,'$CSSNO'
              ,'$IssueDate'
              ,'$LotReference'
              ,'$user_id'
              ,'$Result'
              ,'$performedBy'
              ,'Material'
              ,'Material'

              ,'$testGroup'
              ,'$picture'
              ,'$Date'
              )");
        $Id = $this->db->insert_id();

        if ($Result == 'Fail' || $Result == 'fail') {
            $mail = new PHPMailer(true);
            try {


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
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
            <div style="margin-left:40%;">
            <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
            Material Test Report Result Alert</th></tr>
            <tr><th>CSS NO.</th><td>' . $CSSNO . '</td></tr>
            <tr><th>Material Name:</th><td>' . $MaterialName . '</td></tr>
            <tr><th>Supplier Name.</th><td>' . $Supplier_Name . '</td></tr>
            <tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
            <tr><th>Click on the Link to see Details</th><td>http://192.168.10.3:2000/sports/LabController/ShowDetails?id=' . $Id . '</td></tr>
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

        // echo $Id;
        $i = 0;
        foreach ($childArray as $key => $value) {
            if ($i == 0) {
                
                $Requirement = $value[1];
                $Test = $value[0];
                $Results = $value[2];
                $Uncertainity = $value[3];
                $Remarks = $value[4];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                    ,'$Uncertainity'
                    ,'$Remarks'
                    ,'$Date'
                    ,'$user_id')");
                            $i += 1;
                        } else {

                            $Requirement = $value[2];
                            $Test = $value[1];
                            $Results = $value[3];
                            $Uncertainity = $value[4];
                            $Remarks = $value[5];

                            $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                    ,'$Uncertainity'
                    ,'$Remarks'
                    ,'$Date'
                    ,'$user_id')");
                            $i += 1;
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
        $child,
        $thickness,
        $LinearDensity,
        $twisrPerInch,
        $Result,
        $CSSValueAdd

    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,PO
              ,CSSNO
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
              ,'$CSSValueAdd'
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
        if ($Result == 'Fail' || $Result == 'fail') {
            $mail = new PHPMailer(true);
            try {


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
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
<div style="margin-left:40%;">
<table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
Thread Test Report Result Alert</th></tr>
<tr><th>PO NO.</th><td>' . $PONo . '</td></tr>
<tr><th>Material Name:</th><td>' . $SupplierRef . '</td></tr>
<tr><th>Supplier Name.</th><td>' . $SupplierName . '</td></tr>
<tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
<tr><th>Click on the Link to see Details</th><td>http://192.168.10.4:2000/sports/LabController/ShowDetails?id=' . $Id . '</td></tr>
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
            if ($iter == 0) {
                $testNo = $value[0];
                $PONo = $value[1];
                $TDate = $value[2];
                $time = strtotime($TDate);
                $newformat = date('Y-m-d', $time);
                $ExtatMax = $value[3];
                $MaxLoad = $value[4];
                $Ext = $value[5];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $iter += 1;
            } else {
                $testNo = $value[1];
                $PONo = $value[2];
                $TDate = $value[3];
                $time = strtotime($TDate);
                $newformat = date('Y-m-d', $time);
                $ExtatMax = $value[4];
                $MaxLoad = $value[5];
                $Ext = $value[6];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $iter += 1;
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
        $child,
        $Result,
        $MaterialName,
        $CSSValueAdd
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $time = strtotime($TestDate);
        $TDate = date('Y-m-d', $time);

        $time2 = strtotime($ReceivingDate);
        $RDate = date('Y-m-d', $time2);
        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,PO
              ,CSSNO
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
              ,'$CSSValueAdd'
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
        if ($Result == 'Fail' || $Result == 'fail') {
            $mail = new PHPMailer(true);
            try {


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
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
<div style="margin-left:40%;">
<table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
MS Thread Test Report Result Alert</th></tr>
<tr><th>PO NO.</th><td>' . $PONo . '</td></tr>
<tr><th>Material Name:</th><td>' . $SupplierRef . '</td></tr>
<tr><th>Supplier Name.</th><td>' . $SupplierName . '</td></tr>
<tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
<tr><th>Click on the Link to see Details</th><td>http://192.168.10.4:2000/sports/LabController/ShowDetails?id=' . $Id . '</td></tr>
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
            if ($iter == 0) {
                $testNo = $value[0];
                $PONo = $value[1];
                $Test = $value[2];
                // $time = strtotime($TDate);
                // $newformat = date('Y-m-d',$time);
                $Method = $value[3];
                $Unit = $value[4];
                $Requirement = $value[5];
                $Result = $value[6];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $iter += 1;
            } else {
                $testNo = $value[0];
                $PONo = $value[1];
                $Test = $value[2];
                $Method = $value[3];
                $Unit = $value[4];
                $Requirement = $value[5];
                $Result = $value[6];
                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $iter += 1;
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
        $material,
        $hardness,
        $remarks,
        $CSSValueAdd
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,Size
              ,PO
              ,CSSNO
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
              ,'$CSSValueAdd'
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
            if ($bladerIter == 0) {
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

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $bladerIter += 1;
            } else {
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

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $bladerIter += 1;
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
        $childArray,
        $size,
        $Testedfor,
        $Note,
        $CSSValueAdd
    ) {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
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
              ,'$CSSValueAdd'
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
            if ($bladerIter == 0) {
                $Weight = $value[0];
                $CircumferenceMin = $value[1];
                $CircumferenceMax = $value[2];
                $Deviation = $value[3];
                $ReboundTest = $value[4];
                $Remarks = $value[5];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $bladerIter += 1;
            } else {
                $Weight = $value[2];
                $CircumferenceMin = $value[3];
                $CircumferenceMax = $value[4];
                $Deviation = $value[5];
                $ReboundTest = $value[6];
                $Remarks = $value[7];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
                $bladerIter += 1;
            }
        }
    }

    public function AddDetails($testNo, $PONo, $Requirement, $Test, $IdOfHead)
    {
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
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
    public function labtest()
    {
        $Date = date('Y-m-d');
        //$Date  = date('d/m/Y');
        $query = $this->db
            ->query(" SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Entrydate BETWEEN CONVERT(DATETIME, '$Date 00:00:00', 102) AND CONVERT(DATETIME, '$Date 00:00:00', 102))");


        return $query->result_array();
    }
    public function labtestD($TestNO)
    {
        $Date  = date('d/m/Y');
        $query = $this->db
            ->query(" SELECT        dbo.view_lab_test_D.*
FROM            dbo.view_lab_test_D
WHERE        (TestNO ='$TestNO')");

        return $query->result_array();
    }
    public function Vendors()
    {

        $query = $this->db
            ->query("SELECT        VendorName, Status, VendorId
   FROM            dbo.tbl_Pro_Vendor");

        return $query->result_array();
    }
    public function AddActivity($FC, $name, $status, $testtype)
    {
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
        if ($query) {
            $this->session->set_flashdata('info', 'Activity Saved Successfully');
            redirect('DevelopmentController/master_form');
        } else {
            $this->session->set_flashdata('danger', 'Activity Not  Saved');
            redirect('DevelopmentController/master_form');
        }
    }
    public function Activities()
    {
        $query = $this->db->query(" SELECT        dbo.view_Dev_Activity.*
FROM            dbo.view_Dev_Activity");

        return $query->result_array();
    }
    public function updateActivity($TID, $name, $status, $testtype)
    {
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

    public function GetPOM()
    {
        $query = $this->db->query("SELECT        dbo.view_Dev_POM.*
FROM            dbo.view_Dev_POM");

        return $query->result_array();
    }

    public function undoFGT($TID)
    {

        $query = $this->db->query("DELETE    FROM  tbl_FGT_D
      WHERE TID=$TID");
        if ($query) {
            $query = $this->db->query("DELETE FROM tbl_FGT_H
      WHERE TID=$TID");
            if ($query) {
                $this->session->set_flashdata('danger', 'Data Deleted Successfully');
                redirect('FGT/index');
            }
        }
    }
    public function undo($TID)
    {

        $query = $this->db->query("DELETE  FROM Tbl_Lab_Test_D
      WHERE TID=$TID");
        if ($query) {
            $query = $this->db->query("DELETE FROM Tbl_Lab_Test_H
      WHERE TID=$TID");
            if ($query) {
                $this->session->set_flashdata('danger', 'Data Deleted Successfully');
                redirect('LabController/master_form');
            }
        }
    }

    public function undoTestType($TID)
    {

        $query = $this->db->query("DELETE  FROM dbo.tbl_test_types
       WHERE TestID=$TID");
    }
    public function CallData($ArtCode)
    {
        $query = $this->db->query(" SELECT        dbo.view_Dev_Articles.*
FROM            dbo.view_Dev_Articles Where ArtCode='$ArtCode'");

        return $query->result_array();
    }
    public function LoadData($FactoryCode)
    {
        $query = $this->db->query("SELECT        dbo.view_Dev_Activity.*
FROM            dbo.view_Dev_Activity
WHERE        (VendorName = '$FactoryCode')");

        return $query->result_array();
    }
    public function insertion($ActivityID, $VendorID, $Balls, $ArticleID, $CID, $MID, $Size, $Type)
    {
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
    public function getData($css)
    {
        $query = $this->db
            ->query("SELECT      dbo.view_FGT_Css_Data.*
        FROM            dbo.view_FGT_Css_Data
        WHERE        (CSSNo = '$css')
        ");
        return $query->result_array();
    }
    public function gettableCssData($css)
    {
        $query = $this->db
            ->query("Select view_FGT_CSS_test.* 
        From view_FGT_CSS_test 
        WHERE        (CSSNo = '$css')
        ");
        return $query->result_array();
    }


    public function Process($article)
    {
        $query = $this->db->query("SELECT        dbo.view_Dev_Process.*
FROM            dbo.view_Dev_Process
WHERE        (ArtCode = '$article')");

        return $query->result_array();
    }
    public function updateprocess($TID, $Balls, $Status, $date_make, $ProcessEndDate, $percentageComplete)
    {
        $Status = str_replace("%20", " ", $Status);
        // Echo $ProcessEndDate;
        //         die;
        if ($Status == 'Complete') {
            $Date = date('Y-m-d H:i:s');
            $query = $this->db->query("UPDATE    dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status' ,CompleteDate='$Date' ,ProcessEndDate='$ProcessEndDate',percentageComplete = $percentageComplete 
          WHERE  TID='$TID'");
        } else {
            $query = $this->db->query("UPDATE   dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status',ProcessEndDate='$ProcessEndDate',percentageComplete = $percentageComplete 
          WHERE  TID='$TID'");
        }
    }
    public function  updatecprocess($TID, $Balls, $Status, $date_make, $ProcessEndDate, $rootcasuse, $action, $percentageComplete)
    {
        $Date = date('Y-m-d H:i:s');
        $query = $this->db->query("UPDATE    dbo .tbl_Dev_Process 
            SET   NoOfBalls  =  '$Balls',RDate  =  '$date_make',Status  =  '$Status' ,CompleteDate='$Date' ,ProcessEndDate='$ProcessEndDate' ,rootcasue='$rootcasuse',
            action='$action',percentageComplete = $percentageComplete
          WHERE  TID='$TID'");
    }
    public function undoActivity($TID)
    {
        $query = $this->db->query("DELETE  FROM tbl_Dev_Activities
      WHERE ActivityID=$TID");
    }
    public function GetArticles()
    {
        $query = $this->db->query("SELECT        dbo.view_Dev_Articles.*
FROM            dbo.view_Dev_Articles");

        return $query->result_array();
    }
    public function getSize($ArtCode)
    {
        $query = $this->db->query("SELECT        dbo.view_Article_Size.*
FROM            dbo.view_Article_Size
Where ArtCode='$ArtCode' ");

        return $query->result_array();
    }
    public function updatedStatus($reviewStatus, $approvedStatus, $TID)
    {
        if ($reviewStatus == 1) {
            $user_id = $this->session->userdata('user_id');
        } else {
            $user_id = 0;
        }
        if ($approvedStatus == 1) {
            $user_id1 = $this->session->userdata('user_id');
        } else {
            $user_id1 = 0;
        }


        $query = $this->db->query("UPDATE   dbo .Tbl_Lab_Test_H 
    SET   ApprovedStatus  =  '$approvedStatus',ReviewStatus  =  '$reviewStatus',ReviewBy=$user_id,ApproveBy=$user_id1
  WHERE  TID='$TID'");
    }
    public function updatedStatusFGT($reviewStatus, $approvedStatus, $TID)
    {
        if ($reviewStatus == 1) {
            $user_id = $this->session->userdata('user_id');
        } else {
            $user_id = 0;
        }
        if ($approvedStatus == 1) {
            $user_id1 = $this->session->userdata('user_id');
        } else {
            $user_id1 = 0;
        }


        $query = $this->db->query("UPDATE   dbo .tbl_FGT_H 
    SET   ApprovedStatus  =  '$approvedStatus',ReviewStatus  =  '$reviewStatus',Reviewby=$user_id,ApprovedBy=$user_id1
  WHERE  TID='$TID'");
    }

    public function getDetails($Id)
    {
        $query = $this->db->query("SELECT        TID, dbo.view_Lab_test_Details.*
        FROM            dbo.view_Lab_test_Details
        WHERE        (TID = '$Id')");

        return $query->result_array();
    }

    public function getHead($Id)
    {
        $query = $this->db->query("SELECT        dbo.view_Lab_Test_H.*, TID
        FROM            dbo.view_Lab_Test_H
        WHERE        (TID = '$Id')");

        return $query->result_array();
    }

    public function getTestId($CssNo)
    {
        $query = $this->db->query("SELECT        dbo.view_Lab_Test_H.*, TID,CSSNO
        FROM            dbo.view_Lab_Test_H
        WHERE        (CSSNO = '$CssNo')");

        return $query->result_array();
    }

    public function getTableDatalab($sDate, $eDate)
    {
        ini_set('memory_limit', '256M'); // This also needs to be increased in some cases. Can be changed to a higher value as per need)
        ini_set('sqlsrv.ClientBufferMaxKBSize', '524288'); // Setting to 512M
        ini_set('pdo_sqlsrv.client_buffer_max_kb_size', '524288'); // Setting to 512M - for pdo_sqlsrv
        // echo ini_get('memory_limit');
        // echo ini_get('sqlsrv.ClientBufferMaxKBSize');
        // echo ini_get('pdo_sqlsrv.client_buffer_max_kb_size');

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102))");

        return $query->result_array();
    }
    public function getTableDatalab1($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
        FROM            dbo.view_lab_test
        WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
        AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (ItemType='Adhesion Material')");


        return $query->result_array();
    }
    public function getTableDatalab2($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (ItemType='Blader')");

        return $query->result_array();
    }
    public function getTableDatalab3($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='Carton')");

        return $query->result_array();
    }
    public function getTableDatalab4($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (ItemType='CSM Material')");

        return $query->result_array();
    }
    public function getTableDatalab5($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='Fabric')");

        return $query->result_array();
    }
    public function getTableDatalab6($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='FGT')");

        return $query->result_array();
    }
    public function getTableDatalab7($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='Foam')");

        return $query->result_array();
    }
    public function getTableDatalab8($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='Material')");

        return $query->result_array();
    }
    public function getTableDatalab9($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='MS Material')");

        return $query->result_array();
    }
    public function getTableDatalab10($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='MS Thread')");

        return $query->result_array();
    }
    public function getTableDatalab11($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='PolyBag Material')");

        return $query->result_array();
    }
    public function getTableDatalab12($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='SR Bladder')");

        return $query->result_array();
    }
    public function getTableDatalab13($sDate, $eDate)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
    FROM            dbo.view_lab_test
     WHERE       (Entrydate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102)
      AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) and (ItemType='Thread')");

        return $query->result_array();
    }

    public function getFGTTestCircumference($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT  *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'Circumference')");

        return $query->result_array();
    }
    public function getFGTTestReboundAt($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT   *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'Rebound at 5°C')");

        return $query->result_array();
    }

    public function getFGTDrumTest($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT       *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'Drum Test')");

        return $query->result_array();
    }

    public function getFGTAdhesionTest($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT   *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'Adhesion test')");

        return $query->result_array();
    }
    public function getFGTHydrolysisShooter($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT      *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'After hydrolysis Shooter test') OR (TestType = 'After Hyd Shooter test')");

        return $query->result_array();
    }
    public function getFGTCSMRebound($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT      *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'CSM Rebound')");

        return $query->result_array();
    }

    public function getFGTFGTTest($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT       *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'FGT')");

        return $query->result_array();
    }


    public function getFGTAfterHydroDrum($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT       *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'After Hydrolysis Drum test') OR (TestType = 'After Hyd Drum test')");

        return $query->result_array();
    }
    public function getFGTShooter($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'Shooter test')");

        return $query->result_array();
    }

    public function getFGTAfterHydrolysisCSMRebound($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'After Hydrolysis CSM Rebound test') OR (TestType = 'After Hyd CSM Rebound test')");

        return $query->result_array();
    }

    public function getFGTHydrolysis($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'Hydrolysis Test')");

        return $query->result_array();
    }

    public function getFGTReboundAtRoomTemp($sDate, $eDate, $factoryCode)
    {

        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT *
FROM            dbo.View_Lab_FGT_TestType
WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102)) AND (factoryCode = '$factoryCode') AND (TestType = 'Rebound at room Temprature test') OR (TestType = 'Rebound at room Temprature')");

        return $query->result_array();
    }

    public function getalltest()
    {

        $query = $this->db->query("SELECT * 
    FROM            dbo.tbl_test_types");

        return $query->result_array();
    }
    public function getTestTypematerial()
    {

        $query = $this->db->query("SELECT * 
    FROM            dbo.tbl_test_types  WHERE        (testCatagoty = 'Material Test')");

        return $query->result_array();
    }
    public function getTestTypeFGT()
    {

        $query = $this->db->query("SELECT * 
    FROM            dbo.tbl_test_types  WHERE        (testCatagoty = 'FGT Test')");

        return $query->result_array();
    }

    /*SELECT        CSSNo
FROM            dbo.tbl_lab_test_request
WHERE        (Status = 'Send to Lab') AND (TestType = 'FGT Test') */
    public function GetCssNo()
    {
        $query = $this->db->query("SELECT        CSSNo
FROM            dbo.tbl_lab_test_request
WHERE  (TestType = 'FGT Test')");

        return $query->result_array();
    }
    public function getTestRequests()
    {

        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '/' . $Month . '/' . $Day;

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Pending.*     
        FROM    dbo.View_Test_Request_Pending
        WHERE (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
        ");

        return $query->result_array();
    }

    public function getTestRequestsByDate($date1, $date2)
    {


        $query = $this->db->query("SELECT  *   
        FROM    dbo.View_Test_Request_Pending
        WHERE (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$date1 00:00:00', 111) AND CONVERT(DATETIME, '$date2 00:00:00', 111))
        ORDER BY Sample_RequestDate ASC
        ");

        return $query->result_array();
    }

    public function getTestRequestsSendToLab()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '/' . $Month . '/' . $Day;

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Send_to_Lab.*     
        FROM    dbo.View_Test_Request_Send_to_Lab
        WHERE (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
        ");

        return $query->result_array();
    }

    public function getTestRequestsSendToLabByDate($date1, $date2)
    {

        $query = $this->db->query("SELECT *     
        FROM    dbo.View_Test_Request_Send_to_Lab
        WHERE (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$date1 00:00:00', 102) AND CONVERT(DATETIME, '$date2 00:00:00', 102))
        ORDER BY Sample_RequestDate ASC
        ");

        return $query->result_array();
    }

    public function getTestRequestsSendToRequester()
    {

        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '/' . $Month . '/' . $Day;

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Send_to_Requester.*     
        FROM    dbo.View_Test_Request_Send_to_Requester
        WHERE (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
        ");

        return $query->result_array();
    }

    public function getTestRequestsSendToRequesterByDate($date1, $date2)
    {

        $query = $this->db->query("SELECT *     
        FROM    dbo.View_Test_Request_Send_to_Requester
        WHERE (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$date1 00:00:00', 102) AND CONVERT(DATETIME, '$date2 00:00:00', 102))
       ORDER BY Sample_RequestDate DESC
        ");

        return $query->result_array();
    }
    public function TestRequestsOverAll($date1, $date2)
    {

        $query = $this->db->query("Select  * 
		From view_Lab_All_Request
		WHERE        (view_Lab_All_Request.Sample_RequestDate BETWEEN '$date1' AND '$date2')
        ");

        return $query->result_array();
    }

    public function GETTestRequestsOverAll()
    {

        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;




        $query = $this->db->query("Select * From view_Lab_All_Request
WHERE   (view_Lab_All_Request.Sample_RequestDate BETWEEN '$CurrentDate' AND '$CurrentDate')
    
        ");

        return $query->result_array();
    }


    public function TestTypeById($id)
    {

        $query = $this->db->query("SELECT * 
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

    public function getTestByLabPendingByTID()
    {

        $query = $this->db->query("SELECT  TID   
        FROM    dbo.View_Test_Request_Pending_Lab

    ");


        return $query->result_array();
    }


    public function EditTestRequestLabAcknowledgeBulk($leaveArray)
    {
        foreach ($leaveArray as $key => $value) {
            $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
            SET LabAcknowledgementStatus = 'Acknowledged'
           
            WHERE TID='$value'
            ");
        }


        if ($query) {
            return true;
        } else {
            return false;
        }
    }


    public function getTestByLabAcknowledge()
    {

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Acknowledge_Lab.*     
        FROM    dbo.View_Test_Request_Acknowledge_Lab

    ");


        return $query->result_array();
    }

    // AND (Type = 'Material')


    public function getmateialCssNO()
    {

        $query = $this->db->query("SELECT        CSSNo
FROM            dbo.tbl_lab_test_request
WHERE        (Status = 'Send to Lab') OR (Status = 'Result Uploaded') AND (LabAcknowledgementStatus = 'Acknowledged')");


        return $query->result_array();
    }

    // AND (Type = 'Material')

    public function getmateialCssNoMisTests()
    {

        $query = $this->db->query("SELECT        CSSNos,mislaneous_status
FROM            View_get_css_data_test_type
WHERE        (Status = 'Send to Lab') OR (Status = 'Result Uploaded') AND (LabAcknowledgementStatus = 'Acknowledged')");


        return $query->result_array();
    }



    public function FGT_H_Test_Type_View()
    {

        $query = $this->db->query("SELECT * FROM tbl_FGT_Test_Types");

        return $query->result_array();
    }



    public function getrawCss($Css)
    {

        $query = $this->db->query("SELECT        view_get_Css_Data.*
FROM            dbo.view_get_Css_Data
WHERE        (CSSNo = '$Css')");


        return $query->result_array();
    }

    public function getTestByRequester()
    {
        $day = Date('d');
        $month = Date('m');
        $year = Date('Y');
        $user = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT        TID, Type, Sample_RequestDate, Factory_Code, Quantity_Issued, Status, Expr1, Quantity_Received, Quantity_Retained, Quantity_Returned, Due_Date, CompletationDate, Remarks, SRETSenderID, SRETReceiverID, EntryDate, 
        SRSenderIDName, SRReceiverID, senderSignatureRec, finalStatus, Article, TestType, MaterialType, Expr2, Code, SRSenderID, CSSNo111, CSSNo
FROM            dbo.View_Test_Request_By_Sender_Id
WHERE        (SRSenderID = $user) AND (Sample_RequestDate = CONVERT(DATETIME, '$year-$month-$day 00:00:00', 102))
    ");

        return $query->result_array();
    }
    public function getTestByRequesterDate($sDate, $eDate)
    {
        $date = Date('d-m-Y');
        $user = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT   dbo.View_Test_Request_By_Sender_Id.*     
        FROM    dbo.View_Test_Request_By_Sender_Id
        WHERE SRSenderID = $user AND (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$sDate 00:00:00', 102) AND CONVERT(DATETIME, '$eDate 00:00:00', 102))
    ");

        return $query->result_array();
    }


    public function TestRequestById($id)
    {

        $query = $this->db->query("SELECT * 
    FROM            dbo.tbl_lab_test_request
    WHERE TID='$id'
    ");

        return $query->result_array();
    }

    public function TestRequestByIdByAll($leavesArray)
    {

        foreach ($leavesArray as $key => $value) {
            $query = $this->db->query("SELECT * 
   
    FROM            dbo.tbl_lab_test_request
    WHERE TID= '$value'
    ");
        }
        return $query->result_array();
    }




    //     public function EditTestRequestByAll($leavesArray,$Sample_Receiving_Date,$CSSNo,$Quantity_Received,$Quantity_Retained, $Due_Date,$CompletationDate,$Remarks,$senderSignature)
    //     {

    //  foreach ($leavesArray as $key => $value) {
    //         $user = $this->session->userdata('user_id');
    //         $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
    //         SET Sample_Receiving_Date = '$Sample_Receiving_Date',CSSNo = '$CSSNo',Quantity_Received = '$Quantity_Received',Quantity_Retained = '$Quantity_Retained',Due_Date = '$Due_Date',CompletationDate = '$CompletationDate',Remarks = '$Remarks',Status='Send to Lab',LabAcknowledgementStatus='Pending',senderSignatureRec = '$senderSignature'

    //         WHERE TID='$value'
    //         ");

    //  }

    //         if($query){
    //             return true;
    //         }
    //         else{
    //             return false;
    //         }

    //     }


    public function LoadDatacatagory($testCatagoty)
    {
        $query = $this->db->query("SELECT        dbo.tbl_test_types.*
FROM            dbo.tbl_test_types
WHERE        (testCatagoty = '$testCatagoty')");

        return $query->result_array();
    }
    public function getTestType()
    {

        $query = $this->db->query("SELECT * 
    FROM            dbo.tbl_test_types");

        return $query->result_array();
    }
    public function getTestTypeforFGT()
    {

        $query = $this->db->query("SELECT * 
    FROM            dbo.tbl_test_types Where testCatagoty='FGT Test' AND Status = 'True'");

        return $query->result_array();
    }
    public function AddTestType($name, $status, $testtype, $mislaneous_status)
    {

        $query = $this->db->query("INSERT  INTO dbo.tbl_test_types 
        (Name,Status,testCatagoty,mislaneous_status)
        VALUES
        ('$name','$status', '$testtype', '$mislaneous_status')");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function AddRequest($testtype, $Type, $Sample_RequestDate, $Factory_Code, $Quantity_Issued, $Status, $po, $supplier, $MaterialType)
    {
        $user = $this->session->userdata('user_id');
        $userReceiver = 388;
        $query = $this->db->query("INSERT  INTO dbo.tbl_lab_test_request 
      (Type,Sample_RequestDate,Factory_Code,Quantity_Issued,Status,SRSenderID,SRReceiverID,finalStatus,TestType,PONo,SupplierName,MaterialType)
        VALUES
        ('$Type','$Sample_RequestDate','$Factory_Code',$Quantity_Issued,'$Status',$user,$userReceiver,'Pending','$testtype', '$po', '$supplier','$MaterialType')");
        $RID = $this->db->insert_id();


        $this->session->set_userdata('MAXID', $RID);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function getmaxID()
    {
        $user = $this->session->userdata('user_id');
        $query = $this->db->query("SELECT        MAX(TID) AS MaXID
FROM            dbo.tbl_lab_test_request
WHERE        (SRSenderID = $user)");

        return $query->result_array();
    }
    public function GetItems()
    {

        $query = $this->db->query("SELECT        L4Name, Code
FROM            dbo.tbl_Inv_L4
WHERE        (Status = 1)");

        return $query->result_array();
    }
    public function getRequestData($ID)
    {

        $query = $this->db->query("SELECT        TID, Type, TestType, CONVERT(Varchar, Sample_RequestDate, 103) AS Sample_RequestDate, Factory_Code, PONo, SupplierName, Quantity_Issued,MaterialType
FROM            dbo.tbl_lab_test_request ORDER BY TID DESC
");

        return $query->result_array();
    }
    public function
    AddRdetailsTest($RID,  $TestID, $testtype)
    {
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
    public function getrequesttest($Requestid)
    {
        $query = $this->db->query("SELECT * 
    FROM            dbo.view_get_test_name
    WHERE RequestID='$Requestid'");

        return $query->result_array();
    }

    public function getrequesttestById($Requestid)
    {
        $query = $this->db->query(" SELECT * 
    FROM            dbo.view_get_test_name
    WHERE RequestID='$Requestid'");

        return $query->result_array();
    }


    public function requesttestYpe($RID)
    {

        $query = $this->db->query("SELECT * 
    FROM            dbo.view_lab_test_Types
    WHERE RequestID='$RID'");

        return $query->result_array();
    }
    public function AddRdetails($RID, $Code, $Article)
    {
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
    public function undotestTypeDetails($TID)
    {
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

    public function EditTestType($id, $name, $status, $testtype, $mislaneous_status)
    {

        $query = $this->db->query("UPDATE dbo.tbl_test_types 
        SET Name = '$name',Status = '$status', testCatagoty = '$testtype', mislaneous_status = '$mislaneous_status'
        WHERE TestID='$id'
        ");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function EditTestRequest($TID, $Sample_Receiving_Date, $CSSNo, $Quantity_Received, $Quantity_Retained, $Due_Date, $CompletationDate, $Remarks, $senderSignature)
    {
        $user = $this->session->userdata('user_id');
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET Sample_Receiving_Date = '$Sample_Receiving_Date',CSSNo = '$CSSNo',Quantity_Received = '$Quantity_Received',Quantity_Retained = '$Quantity_Retained',Due_Date = '$Due_Date',CompletationDate = '$CompletationDate',Remarks = '$Remarks',Status='Send to Lab',LabAcknowledgementStatus='Pending',senderSignatureRec = '$senderSignature'
        
        WHERE TID='$TID'
        ");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }


    public function EditTestRequestByAll($leavesArray, $Sample_Receiving_Date, $CSSNo, $Quantity_Received, $Quantity_Retained, $Due_Date, $CompletationDate, $Remarks, $senderSignature)
    {

        foreach ($leavesArray as $key => $value) {
            $user = $this->session->userdata('user_id');
            $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET Sample_Receiving_Date = '$Sample_Receiving_Date',CSSNo = '$CSSNo',Quantity_Received = '$Quantity_Received',Quantity_Retained = '$Quantity_Retained',Due_Date = '$Due_Date',CompletationDate = '$CompletationDate',Remarks = '$Remarks',Status='Result Uploaded',LabAcknowledgementStatus='Pending',senderSignatureRec = '$senderSignature'
        
        WHERE TID=$value
        ");
        }

        if ($query) {
            return true;
        } else {
            return false;
        }
    }


    public function EditTestRequestBackToSender($TID, $Quantity, $senderId, $ReceiverId)
    {


        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET SRETSenderID = '$senderId',SRETReceiverID = '$ReceiverId',Quantity_Returned = $Quantity,Status='Result Uploaded'
       
        WHERE TID='$TID'
        ");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function EditTestRequestBackToSenderByAll($leavesArray)
    {


        foreach ($leavesArray as $value) {

            $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET Status='Result Uploaded'
       
        WHERE TID= '$value'
        ");
        }

        if ($query) {
            return true;
        } else {
            return false;
        }
    }



    // public function EditTestRequestBackToSenderByAll($leavesArray,$Quantity,$senderId ,$ReceiverId)
    // {
    //     foreach ($leavesArray as $key => $value) {
    //     $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
    //     SET SRETSenderID = '$senderId',SRETReceiverID = '$ReceiverId', Quantity_Returned = $Quantity,Status='Send Back to Requester'


    //     WHERE TID= $value 
    //     ");

    //     }

    //     if($query){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }

    // }


    public function EditTestRequestLabAcknowledge($TID)
    {
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET LabAcknowledgementStatus = 'Acknowledged'
       
        WHERE TID='$TID'
        ");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function AcknowledgeResult($TID)
    {
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET finalStatus='Acknowledged'
       
        WHERE TID='$TID'
        ");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getTableData($sDate, $eDate)
    {


        $newSDate = strtotime($sDate);
        $newEDate = strtotime($eDate);
        $newSDateObj = date('Y-m-d', $newSDate);
        $newEDateObj = date('Y-m-d', $newEDate);

        $query = $this->db->query("SELECT        dbo.view_FGT_H.*
    FROM            dbo.view_FGT_H
    WHERE       (moosadate BETWEEN CONVERT(DATETIME, '$newSDateObj 00:00:00', 102) AND CONVERT(DATETIME, '$newEDateObj 00:00:00', 102))");

        return $query->result_array();
    }
    public function FGT_H_insertion(
        $fgttype,
        $lbno,
        $tdate,
        $testcat,
        $fifastump,
        $pmonth,
        $cmat,
        $backing,
        $fgbladderttype,
        $btype,
        $ttype,
        $cssCode,
        $mmcolor,
        $pcolors,
        $result,
        $fn,
        $m,
        $pshape,
        $rem,
        $testperformedby,
        $note,
        $pictureFresh,
        $pictureShooter,
        $pictureHydro,
        $pictureDrum,
        $article,
        $size,
        $tetype,
        $department,
        $fgttest
    ) {
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

        if ($result == 'Fail' || $result == 'fail') {
            $mail = new PHPMailer(true);
            try {


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
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
    <div style="margin-left:40%;">
    <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
    ' . $fgttype . ' Test Report Result Alert</th></tr>
    <tr><th>Test Date:</th><td>' . $tdate . '</td></tr>
    <tr><th>FGT Type.</th><td>' . $fgttype . '</td></tr>
    <tr><th>Lab No.</th><td>' . $lbno . '</td></tr>
    <tr><th>Test Category.</th><td>' . $testcat . '</td></tr>
    <tr><th>Article.</th><td>' . $article . '</td></tr>
    <tr><th>Size.</th><td>' . $size . '</td></tr>
    <tr><th>Test Performed By.</th><td>' . trim($testperformedby, " ") . '</td></tr>
    <tr><th>Click on the Link to see Details</th><td>http://192.168.10.4:2000/sports/LabController/ShowDetailsFGT?id=' . $Id . '</td></tr>
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
    public function getFGRH()
    {
        $Date = date('Y-m-d');

        $query = $this->db
            ->query("SELECT        dbo.view_FGT_H.*
    FROM            dbo.view_FGT_H
    WHERE         (moosadate BETWEEN CONVERT(DATETIME, '$Date 00:00:00', 102) AND CONVERT(DATETIME, '$Date 00:00:00', 102))");
        return $query->result_array();
    }

    public function getFGRHL()
    {
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT   dbo.view_FGT_H_L.*
    FROM            dbo.view_FGT_H_L
    WHERE         (moosadate BETWEEN '$Date' AND '$Date')");
        return $query->result_array();
    }
    public function FGT_D_insertion($TID, $w1, $w2, $c1_sp, $c2_sp, $sp1_sp, $sp2_sp, $lp1, $lp2, $rrt1, $rrt2, $rrt51, $rrt52, $rrt01, $rrt02, $c1_dp, $c2_dp, $sp_dp1, $sp_dp2, $lp_dp1, $lp_dp2, $m1, $m2, $wup1, $wup2, $c1_wrt, $c2_wrt, $sp1_wrt, $sp2_wrt, $dt1, $dt2, $abr1, $abr2, $uvlf1, $uvlf2, $otr1, $otr2, $hl1, $hl2, $hcc1, $hcc2)
    {
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
    public function FGT_PRINT_Head($id)
    {
        $query = $this->db
            ->query("SELECT        dbo.view_FGT_H.*
FROM            dbo.view_FGT_H Where TID=$id");
        return $query->result_array();
    }

    public function FGT_PRINT_Details($id)
    {
        $query = $this->db
            ->query("SELECT        dbo.view_FGT_D.*
FROM            dbo.view_FGT_D Where TID=$id");
        return $query->result_array();
    }

    public function FGT_PRINT_Head_CSSNO($CSSNO)
    {
        $query = $this->db
            ->query("SELECT        dbo.view_FGT_H.*
FROM            dbo.view_FGT_H Where cssCode='$CSSNO'");
        return $query->result_array();
    }

    public function FGT_PRINT_Details_CSSNO($CSSNO)
    {
        $query = $this->db
            ->query("SELECT        dbo.view_FGT_D.*
FROM            dbo.view_FGT_D Where cssCode='$CSSNO'");
        return $query->result_array();
    }

    public function Get_Comparison_Data($lotNo, $StartDate)
    {

        $query = $this->db
            ->query("SELECT    SuplierID, LotNo, lengthOntage, lengthactual, widthOntage, widthactual, Def1, Def2, Def3, Def4, Def11, Def21, Def31, Def41, Def12, Def22, Def32, Def42, Def13, Def23, Def33, Def43, Hole1, Hole2, Name, Name2, Name3, Name4, 
        TID, Date, SupplierName, fabric, Color, CONVERT(varchar, Date, 103) AS Datee
FROM            dbo.view_store_transaction
WHERE      (LotNo = '$lotNo') AND (Date = CONVERT(DATETIME, '$StartDate 00:00:00', 102))");
        return $query->result_array();
    }

    public function addHeadDataMSMaterial(
        $TestNo,
        $DateGet,
        $MaterialRef,
        $PoNo,
        $Status,
        $Remarks,
        $picture,
        $testGroup,
        $testPerformer,
        $childArray,
        $CSSValueAdd
    ) {

        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query(" INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,PO
              ,Result
              ,Remarks
              ,CSSNO
              ,MaterialRef
              ,Entrydate
              ,UserID
              ,image
              ,TestType
              ,testGroup
              ,performedBy)
        VALUES
              ('$TestNo'
              ,'$DateGet'
              ,'$PoNo'
              ,'$Status'
              ,'$Remarks'
              ,'$CSSValueAdd'
              ,'$MaterialRef'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'MS Material'
              ,'$testGroup'
              ,'$testPerformer')");
        $Id = $this->db->insert_id();
        echo $Id;
        $bladerIter = 0;

        foreach ($childArray as $key => $value) {
            // $testNo = $value[0];
            // $PONo = $value[1];
            if ($bladerIter == 0) {
                $TEST = $value[2];
                $METHOD = $value[3];
                $UNIT = $value[4];
                $Requirement = $value[5];
                $RESULTS = $value[6];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
                 (TID
           ,Test
           ,Method
           ,Unit
           ,Requirments
           ,result
          )
     VALUES
           ('$Id'
           ,'$TEST'
           ,'$METHOD'
           ,'$UNIT'
           ,'$Requirement'
           ,'$RESULTS'
         )");
                $bladerIter += 1;
            } else {
                $TEST = $value[3];
                $METHOD = $value[4];
                $UNIT = $value[5];
                $Requirement = $value[6];
                $RESULTS = $value[7];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
            (TID
           ,Test
           ,Method
           ,Unit
           ,Requirments
           ,result
          )
     VALUES
     ('$Id'
           ,'$TEST'
           ,'$METHOD'
           ,'$UNIT'
           ,'$Requirement'
           ,'$RESULTS'
         )");
                $bladerIter += 1;
            }
        }
    }

    public function addHeadDataPolyBag(
        $TestNo,
        $PO,
        $Receiveddate,
        $DateGet,
        $PolyBag,
        $VenderName,
        $result,
        $picture,
        $testGroup,
        $testPerformer,
        $childArray,
        $CSSValueAdd
    ) {



        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,PO
              ,CSSNO
              ,Receiving_Date
              ,PolyBag
              ,VenderName
              ,Result
              ,Entrydate
              ,UserID
              ,image
              ,TestType
              ,testGroup
              ,performedBy)
        VALUES
              ('$TestNo'
              ,'$DateGet'
              ,'$PO'
              ,'$CSSValueAdd'
              ,'$Receiveddate'
              ,'$PolyBag'
              ,'$VenderName'
              ,'$result'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'PolyBag Material'
              ,'$testGroup'
              ,'$testPerformer')");
        $Id = $this->db->insert_id();
        echo $Id;
        if ($result == 'Fail' || $result == 'fail') {
            $mail = new PHPMailer(true);
            try {


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
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
    <div style="margin-left:40%;">
    <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
    ' . $PolyBag . ' Test Report Result Alert</th></tr>
    <tr><th>Test Date:</th><td>' . $DateGet . '</td></tr>
    <tr><th>PolyBag.</th><td>' . $PolyBag . '</td></tr>
    <tr><th>Test No.</th><td>' . $TestNo . '</td></tr>
    <tr><th>PO.</th><td>' . $PO . '</td></tr>
    <tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
    <tr><th>Click on the Link to see Details</th><td>http://192.168.10.4:2000/sports/LabController/ShowDetailsPolyBag?id=' . $Id . '</td></tr>
    <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This PolyBag Material has Been Failed</th></tr>
    </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


                //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
                //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        $bladerIter = 0;


        foreach ($childArray as $key => $value) {
            // $testNo = $value[0];
            // $PONo = $value[1];
            if ($bladerIter == 0) {
                $srno = $value[1];
                $TEST = $value[2];
                $UNIT = $value[3];
                $standard = $value[4];
                $RESULTS = $value[5];
                $Remarks = $value[6];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
                 (TID,
                 srno
           ,Test
           ,Unit
           ,Standard
           ,result
           ,ReMarks
          )
     VALUES
           ('$Id'
           ,'$srno'
           ,'$TEST'
           ,'$UNIT'
           ,'$standard'
           ,'$RESULTS'
           ,'$Remarks'
         )");
                $bladerIter += 1;
            } else {
                $srno = $value[1];
                $TEST = $value[2];
                $UNIT = $value[3];
                $standard = $value[4];
                $RESULTS = $value[5];
                $Remarks = $value[6];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
            (TID,
                 srno
           ,Test
           ,Unit
           ,Standard
           ,result
           ,ReMarks
          )
     VALUES
     ('$Id'
           ,'$srno'
           ,'$TEST'
           ,'$UNIT'
           ,'$standard'
           ,'$RESULTS'
           ,'$Remarks'
         )");
                $bladerIter += 1;
            }
        }
    }

    public function addHeadDataAdhesion(
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
    ) {



        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,Receiving_Date
              ,RecevingCode
              ,PO
              ,CSSNO
              ,ArticleNo
              ,Article
              ,Result
              ,Entrydate
              ,UserID
              ,image
              ,TestType
              ,testGroup
              ,performedBy)
        VALUES
              ('$TestNo'
              ,'$TestDate'
              ,'$ReceivingDate'
              ,'$RecevingCode'
              ,'$PONo'
              ,'$CSSValueAdd'
              ,'$ArticleNo'
              ,'$ArticleName'
              ,'$Result'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'Adhesion Material'
              ,'$testGroup'
              ,'$testPerformer')");


        $Id = $this->db->insert_id();
        echo $Id;
        if ($Result == 'Fail' || $Result == 'fail') {
            $mail = new PHPMailer(true);
            try {
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
                $mail->Subject = "Adhesion Material Failure";
                $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
                <div style="margin-left:40%;">
                <table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
                ' . $ArticleName . ' Test Report Result Alert</th></tr>
                <tr><th>Test Date:</th><td>' . $TestDate . '</td></tr>
                <tr><th>Article No.</th><td>' . $ArticleNo . '</td></tr>
                <tr><th>Article Name.</th><td>' . $ArticleName . '</td></tr>
                <tr><th>Test No.</th><td>' . $TestNo . '</td></tr>
                <tr><th>PO.</th><td>' . $PONo . '</td></tr>
                <tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
                <tr><th>Click on the Link to see Details</th><td>http://192.168.10.4:2000/sports/LabController/ShowDetailsPolyBag?id=' . $Id . '</td></tr>
                <tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This PolyBag Material has Been Failed</th></tr>
                </table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


                //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
                //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        $bladerIter = 0;


        foreach ($childArray as $key => $value) {
            // $testNo = $value[0];
            // $PONo = $value[1];
            if ($bladerIter == 0) {
                $Date = $value[2];
                $BatchReference = $value[3];
                $Articleno = $value[4];
                $Standard = $value[5];
                $MaximumForce = $value[6];
                $AverageForce = $value[7];
                $Comments = $value[8];
                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
         (TID,
         TDate
   ,BatchReference
   ,Articleno
   ,Standard
   ,MaximumForce
   ,AverageForce
   ,Comments
  )
VALUES
   ('$Id'
   ,'$Date'
   ,'$BatchReference'
   ,'$Articleno'
   ,'$Standard'
   ,'$MaximumForce'
   ,'$AverageForce'
   ,'$Comments'
 )");
                $bladerIter += 1;
            } else {
                $Date = $value[3];
                $BatchReference = $value[4];
                $Articleno = $value[5];
                $Standard = $value[6];
                $MaximumForce = $value[7];
                $AverageForce = $value[8];
                $Comments = $value[9];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
    (TID,
         TDate
   ,BatchReference
   ,Articleno
   ,Standard
   ,MaximumForce
   ,AverageForce
   ,Comments
  )
VALUES
('$Id'
,'$Date'
   ,'$BatchReference'
   ,'$Articleno'
   ,'$Standard'
   ,'$MaximumForce'
   ,'$AverageForce'
   ,'$Comments'
 )");
                $bladerIter += 1;
            }
        }
    }


    public function addHeadDataCSM(


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
    ) {


        date_default_timezone_set('Asia/Karachi');
        // $Date = date('Y-m-d H:i:s');
        $user_id = $this->session->userdata('user_id');

        $user_id;
        $query = $this->db->query("INSERT INTO Tbl_Lab_Test_H
              (TestNO
              ,Date
              ,ModelName
              ,CSSNO
              ,Pressure
              ,TempHumidity
              ,Article
              ,Category
              ,Size
              ,Testedfor
              ,Note
              ,Result
              ,Entrydate
              ,UserID
              ,image
              ,TestType
              ,testGroup
              ,performedBy)
        VALUES
              ('$TestNo'
              ,'$Date'
              ,'$ModelName'
              ,'$CSSCode'
              ,'$Pressure'
              ,'$TempHumidity'
              ,'$Article'
              ,'$Category'
              ,'$size'
              ,'$Testedfor'
              ,'$Note'
              ,'$Result'
              ,'$Date'
              ,'$user_id'
              ,'$picture'
              ,'CSM Material'
              ,'$testGroup'
              ,'$testPerformer')");


        $Id = $this->db->insert_id();
        echo $Id;

        $mail = new PHPMailer(true);
        try {


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
            $mail->Body = '<div><p style="text-align:center;background-color:black;color:white;font-size:large;width:100%;padding:20px;">Forward Sports Pvt. Ltd</p></div>
<div style="margin-left:40%;">
<table style="border:1px solid black;margin-left:40%;padding:5px"><tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:green;padding:10px">
' . $PolyBag . ' Test Report Result Alert</th></tr>
<tr><th>Test Date:</th><td>' . $DateGet . '</td></tr>
<tr><th>PolyBag.</th><td>' . $PolyBag . '</td></tr>
<tr><th>Test No.</th><td>' . $TestNo . '</td></tr>
<tr><th>PO.</th><td>' . $PO . '</td></tr>
<tr><th>Test Performed By.</th><td>' . trim($testPerformer, " ") . '</td></tr>
<tr><th>Click on the Link to see Details</th><td>http://192.168.10.4:2000/sports/LabController/ShowDetailsPolyBag?id=' . $Id . '</td></tr>
<tr><th colspan="2" style="font-size:large;color:white;text-align:center;background-color:red;padding:10px">This PolyBag Material has Been Failed</th></tr>
</table></div><div style="back"><p style="text-align:left;background-color:black;color:white;font-size:small;width:100%;padding:20px;">if you have any Problem Contact to Lab Manager At sohail@forward.pk</p></div>';


            //  $mail->Body = "PO No ".$PONo .",<br />Test Performed Against ". $ItemName ." Supplier Name: ". $SupplierName ."  has Been Failed <br /> This Test is Performed By  ". $testPerformer ."<br /> if you have any Problem Contact to Lab Manager At sohail@forward.pk This is an test Email";
            //$mail->AltBody = 'if you have any Problem Contact to IT Team At Shoaib@Forward.pk';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        $csmIter = 0;


        foreach ($childArray as $key => $value) {
            // $testNo = $value[0];
            // $PONo = $value[1];
            if ($csmIter == 0) {
                $Weight = $value[2];
                $CircumferenceMin = $value[3];
                $CircumferenceMax = $value[4];
                $Deviation = $value[5];
                $ReboundTest = $value[6];
                $Remarks = $value[7];
                $Result =  $value[8];


                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
    (TID
   ,Weight
   ,CircumferenceMin
   ,CircumferenceMax
   ,Deviation
   ,ReboundTest
   ,ReMarks
   ,result
  
  )
VALUES
   (
    '$Id'
   ,'$Weight'
   ,'$CircumferenceMin'
   ,'$CircumferenceMax'
   ,'$Deviation'
   ,'$ReboundTest'
   ,'$Remarks'
   ,'$Result'
 )");
                $csmIter += 1;
            } else {
                $Weight = $value[2];
                $CircumferenceMin = $value[3];
                $CircumferenceMax = $value[4];
                $Deviation = $value[5];
                $ReboundTest = $value[6];
                $Remarks = $value[7];
                $Result =  $value[8];

                $query = $this->db->query("INSERT INTO Tbl_Lab_Test_D
    (TID
    ,Weight
   ,CircumferenceMin
   ,CircumferenceMax
   ,Deviation
   ,ReboundTest
   ,ReMarks
   ,result

  )
VALUES
('$Id'
,'$Weight'
   ,'$CircumferenceMin'
   ,'$CircumferenceMax'
   ,'$Deviation'
   ,'$ReboundTest'
   ,'$Remarks'
   ,'$Result'
  
 )");
                $csmIter += 1;
            }
        }
    }



    public function GetTypeConter($c_date, $e_date, $Type) //1
    {

        $query = $this->db->query("SELECT        Type, Result
FROM            dbo.view_test_Type_Counter
WHERE        (Type = '$Type') AND (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))");

        return $query->result_array();
    }
    public function GetArticlesData($c_date, $e_date, $Article) //2
    {
        $query = $this->db->query("SELECT        Type, Result
FROM            dbo.view_Article_Wise_COunter
WHERE         (Type = '$Article') AND (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))");
        return $query->result_array();
    }
    //     public function ($Article)
    //     {

    //         $query = $this->db->query("SELECT        Type, Result
    // FROM            dbo.view_Article_Wise_COunter
    // WHERE         (Type = '$Article') AND (Sample_RequestDate BETWEEN CONVERT(DATETIME, '2022-03-31 00:00:00', 102) AND CONVERT(DATETIME, '2022-03-31 00:00:00', 102))");

    //         return $query->result_array();
    //     }
    public function gettestCounter($c_date, $e_date, $Name) //3
    {

        $query = $this->db->query("SELECT        Type, Result
        FROM            dbo.view_test_types_Counter
        WHERE        (Name = '$Name') AND (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))");

        return $query->result_array();
    }
    public function supplier() //3
    {

        $query = $this->db->query("SELECT        CompanyName
        FROM            tbl_Inv_Supplier");

        return $query->result_array();
    }

    public function getRequestsStatus()
    {

        $query = $this->db->query("SELECT * FROM dbo.tbl_lab_test_request");
        return $query->result_array();
    }
    public function fgtRequestArticleNo()
    {

        $query = $this->db->query("SELECT        ArtCode
        FROM            tbl_Pro_Article
        WHERE        (ClientID = 1)
        ORDER BY ArtCode
        ");
        return $query->result_array();
    }
    public function getFgtRequestFormData($articleNo)
    {

        $query = $this->db->query("SELECT        dbo.view_Article_Wise_Details.*
        FROM            dbo.view_Article_Wise_Details
        WHERE        ArtCode = '$articleNo'");
        return $query->result_array();
    }

    public function addFGTRequest($wNo, $aNo, $mName, $size, $ballType, $mainMatColor, $coverMat, $backing, $bladderD, $prodMonth, $printColor, $panelShape, $testType, $dQuantity, $anyInfo)
    {

        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y/m/d');
        $user_id = $this->session->userdata('user_id');

        $query = $this->db->query("INSERT INTO dbo.tbl_FGT_Request
              (factoryCode
              ,Date
              ,WorkingNo
              ,Articleno
              ,ModelName
              ,Size
              ,BallType
              ,mainmaterialColor
              ,Covermat
              ,backing
              ,Bladderdetail
              ,ProductionMonth
              ,Printingcolor
              ,panelShape
              ,testype
              ,deliverqty
              ,additionalinfo
              ,userid)
            VALUES
              ('$ballType'
              ,'$Date'
              ,'$wNo'
              ,'$aNo'
              ,'$mName'
              ,'$size'
              ,'$ballType'
              ,'$mainMatColor'
              ,'$coverMat'
              ,'$backing'
              ,'$bladderD'
              ,'$prodMonth'
              ,'$printColor'
              ,'$panelShape'
              ,'$testType'
              ,'$dQuantity'
              ,'$anyInfo'
              ,$user_id)");
        if ($query) {
            return $query;
        }
    }
    public function updateFGTRequest($tid, $wNo, $aNo, $mName, $size, $ballType, $mainMatColor, $coverMat, $backing, $bladderD, $prodMonth, $printColor, $panelShape, $testType, $dQuantity, $anyInfo)
    {

        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y/m/d');
        $user_id = $this->session->userdata('user_id');

        $query = $this->db->query("UPDATE   dbo.tbl_FGT_Request 
            SET Date  =  '$Date', factoryCode = '$ballType', WorkingNo = '$wNo', Articleno = '$aNo', ModelName = '$mName', Size = '$size', BallType = '$ballType', mainmaterialColor = '$mainMatColor', Covermat = '$coverMat', backing = '$backing', Bladderdetail = '$bladderD', ProductionMonth = '$prodMonth', Printingcolor = '$printColor', panelShape = '$panelShape', testype = '$testType', deliverqty = '$dQuantity', additionalinfo = '$anyInfo', userid = $user_id
          WHERE  TID=$tid");
        if ($query) {
            return $query;
        }
    }

    public function loadFGTRequests()
    {
        $query = $this->db->query(" SELECT *
        FROM  dbo.tbl_FGT_Request");

        return $query->result_array();
    }

    public function editFGTRequest($TID)
    {
        $query = $this->db->query("SELECT * 
        FROM  dbo.tbl_FGT_Request WHERE TID=$TID");

        return $query->result_array();
    }
    public function deleteFGTRequest($TID)
    {
        $query = $this->db->query("DELETE  FROM dbo.tbl_FGT_Request
        WHERE TID=$TID");
        if ($query) {
            return $query;
        }
    }
    public function FGTRequestwithoutCssNo()
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT * 
        FROM  dbo.View_FGT_Request WHERE CssNO IS NULL");
        if ($query) {
            return $query->result_array();
        }
    }


    public function FGTRequestwithCssNo()
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT * 
        FROM  dbo.View_FGT_Request WHERE CssNO !=''");
        if ($query) {
            return $query->result_array();
        }
    }

    public function FGTRequestwithAknowledge()
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');



        $query = $this->db->query("SELECT       *
FROM            dbo.View_FGT_Request
WHERE        (userid = $user_id) AND (LabStatus IS NULL)");
        if ($query) {
            return $query->result_array();
        }
    }
    public function FGTRequestwithCssNowithAknowledge()
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT       *
FROM            dbo.View_FGT_Request
WHERE        (userid = $user_id) AND (CssNO <> '') AND (RequestStatus = 'Acknowledge By Lab')");
        if ($query) {
            return $query->result_array();
        }
    }

    public function addCssNoToFGTRequest($TID, $cssNo)
    {
        $item = $cssNo;
        $url = 'http://125.209.66.227:2000/sports/GetCssNo?cssno=';
        // Combine the text and URL with a separator
        $text_with_url = $url . '' . $item;

        // Set the directory where QR code images will be saved
        $directory = "assets/img/qrcode/";

        // Set the filename for the QR code image
        $filename = $directory . time() . ".png";
        //other parameters
        $ecc = 'H';
        $pixel_size = 20;
        $frame_size = 5;

        // Generates QR Code and Save as PNG
        QRcode::png($text_with_url, $filename, $ecc, $pixel_size, $frame_size);

        $orig_name = basename($filename);
        // echo $orig_name;

        // Displaying the stored QR code if you want
        // echo "<div><h3>Generated QR Code for {" . $item . "} </h3><br><img src='" . base_url($filename) . "' width='150'></div>";


        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y/m/d');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("UPDATE   dbo.tbl_FGT_Request 
        SET   CssNO = '$cssNo', CssDate = '$Date', CsStatus = 1, RequestStatus = 'Send to Lab', CssNoQrCode = '$orig_name' WHERE  TID=$TID");
        if ($query) {
            return $query;
        }
    }
    public function updateCssNoFGTRequest($TID, $cssno){
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y/m/d');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("UPDATE   dbo.tbl_FGT_Request 
        SET   CssNO = '$cssno' WHERE  TID=$TID");
        if ($query) {
            return $query;
        }
    }
    public function FGTRequestSendToLab()
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT * 
        FROM  dbo.View_FGT_Request WHERE CssNO != '' AND CsStatus = 1 AND LabStatus IS NULL AND RequestStatus = 'Send to Lab'");
        if ($query) {
            return $query->result_array();
        }
    }
    public function fgtRequestaddAknowledgeCssNo($TID)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y/m/d');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("UPDATE   dbo.tbl_FGT_Request 
        SET   LabStatus = 1, labAcceptDate = '$Date', RequestStatus = 'Acknowledge By Lab'
        WHERE  TID=$TID");
        if ($query) {
            return $query;
        }
    }
    public function fgtRequestaddAknowledgeCssNoBulk($selectedRows)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y/m/d');
        $user_id = $this->session->userdata('user_id');
        $query = false;
        foreach ($selectedRows as $key => $value) {
            // print_r($value['tid']);die;

            $query = $this->db->query("UPDATE   dbo.tbl_FGT_Request 
            SET   LabStatus = 1, labAcceptDate = '$Date', RequestStatus = 'Acknowledge By Lab'
            WHERE  TID={$value['tid']}");
            
        }
        if ($query) {
            return $query;
        }
    }
    public function FGTRequestAknowledgedByLab()
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT * 
        FROM  dbo.View_FGT_Request WHERE LabStatus = 1 AND RequestStatus = 'Acknowledge By Lab'");
        if ($query) {
            return $query->result_array();
        }
    }
    public function FGTRequestDateRange($date1, $date2, $factoryCode)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('Username');
        
        if ($username == 'Wajid Ali') {
            $query = $this->db->query("SELECT *
            FROM            dbo.View_FGT_Request
            WHERE        (Date BETWEEN CONVERT(DATETIME, '$date1 00:00:00', 102) AND CONVERT(DATETIME, '$date2 00:00:00', 102)) AND FactoryCode='$factoryCode'");
            if ($query) {
                return $query->result_array();
            }
        } else {
            $query = $this->db->query("SELECT *
            FROM            dbo.View_FGT_Request
            WHERE        (Date BETWEEN CONVERT(DATETIME, '$date1 00:00:00', 102) AND CONVERT(DATETIME, '$date2 00:00:00', 102)) AND FactoryCode='$factoryCode' AND (userid = $user_id)");
            if ($query) {
                return $query->result_array();
            }
        }
    }


    // FGT LAB FILE
    public function uploadFgtFileData($fgtH, $fgtD)
    {
        $user_id = $this->session->userdata('user_id');
        $query1 = $this->db->insert('dbo.Tbl_Lab_FGT_Test_H', $fgtH);
        $head_id = $this->db->insert_id();
        $query2 = false;
        $i = 0;
        foreach ($fgtD as $f1) {
            if ($i == 0) {
                $fgtDetails = [
                    'TID' => $head_id,
                    'Test' => $f1[0],
                    'Method' => $f1[1],
                    'Condition' => $f1[2],
                    'Unit' => $f1[3],
                    'Cat1' => $f1[4],
                    'Cat2' => $f1[5],
                    'Cat3' => $f1[6],
                    'Min' => $f1[7],
                    'Max' => $f1[8],
                    'Remarks' => $f1[9],
                    'UserID' => $user_id
                ];
                $query2 = $this->db->insert('dbo.Tbl_Lab_FGT_Test_D', $fgtDetails);
                $i += 1;
            } else {
                $fgtDetails = [
                    'TID' => $head_id,
                    'Test' => $f1[1],
                    'Method' => $f1[2],
                    'Condition' => $f1[3],
                    'Unit' => $f1[4],
                    'Cat1' => $f1[5],
                    'Cat2' => $f1[6],
                    'Cat3' => $f1[7],
                    'Min' => $f1[8],
                    'Max' => $f1[9],
                    'Remarks' => $f1[10],
                    'UserID' => $user_id
                ];
                $query2 = $this->db->insert('dbo.Tbl_Lab_FGT_Test_D', $fgtDetails);
                $i += 1;
            }
        };


        if ($query1 && $query2) {
            $this->session->set_flashdata('info', 'File data uploaded successfully');
            return true;
        } else {
            $this->session->set_flashdata('error', 'File data could not be uploaded. Something went wrong!');
            return false;
        }
    }

    // FGT Airless Mini LAB FILE
    public function uploadFgtAirlessMini($fgtH, $fgtD)
    {

        $user_id = $this->session->userdata('user_id');
        $query1 = $this->db->insert('dbo.Tbl_Lab_FGT_Test_H', $fgtH);
        $head_id = $this->db->insert_id();
        $query2 = false;
        $i = 0;
        foreach ($fgtD as $f1) {
            if ($i == 0) {
                $fgtDetails = [
                    'TID' => $head_id,
                    'Test' => $f1[0],
                    'Method' => $f1[1],
                    'Condition' => $f1[2],
                    'Unit' => $f1[3],
                    'AirlessMiniSoccerball' => $f1[4],
                    'Ball1' => $f1[5],
                    'Ball2' => $f1[6],
                    'Ball3' => $f1[7],
                    'Ball4' => $f1[8],
                    'Ball5' => $f1[9],
                    'UserID' => $user_id
                ];
                $query2 = $this->db->insert('dbo.Tbl_Lab_FGT_Test_D', $fgtDetails);
                $i += 1;
            } else {
                $fgtDetails = [
                    'TID' => $head_id,
                    'Test' => $f1[1],
                    'Method' => $f1[2],
                    'Condition' => $f1[3],
                    'Unit' => $f1[4],
                    'AirlessMiniSoccerball' => $f1[5],
                    'BALL1' => $f1[6],
                    'BALL2' => $f1[7],
                    'BALL3' => $f1[8],
                    'BALL4' => $f1[9],
                    'BALL5' => $f1[10],
                    'UserID' => $user_id
                ];
                $query2 = $this->db->insert('dbo.Tbl_Lab_FGT_Test_D', $fgtDetails);
                $i += 1;
            }
        };


        if ($query1 && $query2) {
            $this->session->set_flashdata('info', 'File data uploaded successfully');
            return true;
        } else {
            $this->session->set_flashdata('error', 'File data could not be uploaded. Something went wrong!');
            return false;
        }
    }

    public function getFGTTestDataForView($date1, $date2)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT  *
    FROM            dbo.View_Lab_FGT_Test_H
    WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$date1', 102) AND CONVERT(DATETIME, '$date2', 102)) AND (FC IS NULL)");
        if ($query) {
            return $query->result_array();
        }
    }
    public function getFGTTestDataForViewAirlessMini($date1, $date2)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT  *
    FROM            dbo.View_Lab_FGT_Test_H
    WHERE        (Testing_DateS BETWEEN CONVERT(DATETIME, '$date1', 102) AND CONVERT(DATETIME, '$date2', 102)) AND (FC = 'B34006')");
        if ($query) {
            return $query->result_array();
        }
    }



    public function getFGTTestHead($TID)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT *
FROM            dbo.View_Lab_FGT_Test_H
WHERE        (TID = $TID)");
        if ($query) {
            return $query->result_array();
        }
    }


    public function getFGTTestDetails($TID)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT   *
        FROM            dbo.View_Lab_FGT_Test_D
        WHERE        (TID = $TID)");
        if ($query) {
            return $query->result_array();
        }
    }
    public function getFGTTestHeadAirlessMini($TID)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT *
FROM            dbo.View_Lab_FGT_Test_H
WHERE        (TID = $TID) AND (FC = 'B34006')");
        if ($query) {
            return $query->result_array();
        }
    }


    public function getFGTTestDetailsAirlessMini($TID)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT   *
        FROM            dbo.View_Lab_FGT_Test_D
        WHERE        (TID = $TID)");
        if ($query) {
            return $query->result_array();
        }
    }


    public function getFGTTestReqHead($CssNo)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT *
FROM            dbo.View_Lab_FGT_Req_H
WHERE        (CssNo = '$CssNo')");
        if ($query) {
            return $query->result_array();
        }
    }
    public function getFGTTestReqDetails($TID)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');

        $query = $this->db->query("SELECT *
        FROM            dbo.View_Lab_FGT_Req_D
        WHERE        (TID = '$TID')");
        if ($query) {
            return $query->result_array();
        }
    }

    public function deleteFGTTestHeadDetails($TID)
    {
        date_default_timezone_set('Asia/Karachi');

        $headData = $this->getFGTTestHead($TID);
        if ($headData) {
            if ($headData[0]['freshImage']) {
                $path1 = 'assets/img/Fgt/' . $headData[0]['freshImage'];
                if (file_exists($path1)) {
                    unlink($path1);
                }
            }
            if ($headData[0]['afterShooterImage']) {
                $path1 = 'assets/img/Fgt/' . $headData[0]['afterShooterImage'];
                if (file_exists($path1)) {
                    unlink($path1);
                }
            }
            if ($headData[0]['hydrolysisImage']) {
                $path1 = 'assets/img/Fgt/' . $headData[0]['hydrolysisImage'];
                if (file_exists($path1)) {
                    unlink($path1);
                }
            }
            if ($headData[0]['drumImage']) {
                $path1 = 'assets/img/Fgt/' . $headData[0]['drumImage'];
                if (file_exists($path1)) {
                    unlink($path1);
                }
            }
        }

        $query1 = $this->db->query("DELETE FROM  dbo.Tbl_Lab_FGT_Test_H
        WHERE TID=$TID");
        $query2 = $this->db->query("DELETE FROM  dbo.Tbl_Lab_FGT_Test_D
        WHERE TID=$TID");
        if ($query1 && $query2) {
            return true;
        } else {
            return false;
        }
    }

    public function FGTRequestwithCssNowithQrCode($cssno)
    {
        date_default_timezone_set('Asia/Karachi');
        $Date = date('d/m/Y');
        $user_id = $this->session->userdata('user_id');


        $query = $this->db->query("SELECT * 
        FROM  dbo.View_FGT_Request WHERE CssNO = '$cssno'");
        if ($query) {
            return $query->result_array();
        }
    }



    public function EditAddRaw_MatHead($testName, $RNO)
    {


        $name = null;

        $name = implode(', ', $testName);

        $this->db->query("UPDATE tbl_Raw_material_H
        SET testName = '$name'
        WHERE Requestid=$RNO;");
    }


    public function EditItemName($ItemNameP, $RNO)
    {



        $this->db->query("UPDATE tbl_Raw_material_H
        SET itemName = '$ItemNameP'
        WHERE Requestid=$RNO;");
    }


    public function getSuppliers()
    {
        $query = $this->db->query("SELECT DISTINCT SupplierName FROM dbo.tbl_lab_test_request");
        return $query->result_array();
    }



    public function getTestName($RNO)
    {


        $query = $this->db->query("SELECT testName FROM tbl_Raw_material_H
          
        WHERE Requestid=$RNO;");


        return $query->result_array();
    }


    public function getItemName($RNO)
    {


        $query = $this->db->query("SELECT itemName FROM tbl_Raw_material_H
          
        WHERE Requestid=$RNO;");


        return $query->result_array();
    }






    public function Raw_MatHead()
    {

        $query = $this->db->query("SELECT * FROM tbl_Raw_material_H ");
        return $query->result_array();
    }

    public function getRawMatReqT()
    {

        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;

        $query = $this->db->query("SELECT   *     
        FROM   dbo.View_RawMatReqT
        ");

        return $query->result_array();
    }

    public function getRawMatReqByCss(){



        $query = $this->db->query("SELECT   *  
        FROM   dbo.View_RawMatReqT  WHERE  status='Locked'
        ");

        return $query->result_array();

    }

    public function getDataAfterRequest($TID){



        $query = $this->db->query("SELECT   *  
        FROM   dbo.tbl_lab_test_request WHERE TID=$TID
        ");

        return $query->result_array();

    }
    


    public function getRawMatReqTByPending()
    {

        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;

        $query = $this->db->query("SELECT   *     
        FROM   dbo.View_RawMatReqT WHERE status='Pending'
        ");

        return $query->result_array();
    }

    public function getRawMatReqByCss1($cssNo){


        $query = $this->db->query("SELECT   *  
        FROM   dbo.View_RawMatReqT  WHERE CSSNo='$cssNo'
        ");

        return $query->result_array();

    }
   

    public function AddRaw_MatHead($DateP, $Type, $factoryCode, $quantityIssued, $supplierN, $testType, $ItemNameD, $testCategory, $po1)
    {


        $user = $this->session->userdata('user_id');
        $userReceiver = 388;



        $date = date('Y-m-d');

        $this->db->query("INSERT INTO tbl_Raw_material_H (Date, Type, FactoryCode, Quantity, SupplierNam ,TestType, SRSenderID, userid, EntryDate, itemName, receSign, status, testCateogry, Po)
               VALUES ('$DateP', '$Type', '$factoryCode', $quantityIssued, '$supplierN', '$testType', '$user', '$user', '$date', '$ItemNameD', 'Ahmed', 'Pending', '$testCategory', '$po1');");
    }


    public function EditRaw_MatHead($IdValue1,$cssNo1,$qReceived1,$qRetained1,$dueDate1,$compDate1,$sSignature1,$Remarks1)
    {


        $this->db->query("UPDATE dbo.tbl_Raw_material_H SET remarks = '$Remarks1', CSSNo='$cssNo1', qtyRece='$qReceived1',
        qtyRetain=$qRetained1, dueDate='$dueDate1', comDate='$compDate1', senderSign='$sSignature1', status='Send to Lab', LabStatus=1
         WHERE Requestid = $IdValue1");
    }

    
    public function RawMatRequestAknowledgedByLab()
    {
      
        $query = $this->db->query("SELECT   *     
        FROM   dbo.View_RawMatReqT WHERE status='Send to Lab'");
        if ($query) {
            return $query->result_array();
        }
    }


    public function TestRequestRawMatById($id)
    {

        $query = $this->db->query("SELECT * 
    FROM           dbo.tbl_Raw_material_H
    WHERE Requestid='$id'
    ");

        return $query->result_array();
    }


    
    public function EditTestRequestRawMatLabAcknowledge($TID)
    {
        $query = $this->db->query("UPDATE dbo.tbl_Raw_material_H 
        SET LabAcknowledge = 'Acknowledged', status='Locked'
       
        WHERE Requestid='$TID'
        ");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

        public function getOldCssNo()
    {

        $query = $this->db->query("SELECT        CSSNo
        FROM            dbo.tbl_lab_test_request
        WHERE        (Status = 'Send to Lab') OR (Status = 'Result Uploaded') AND (LabAcknowledgementStatus = 'Acknowledged')");
        return $query->result_array();
    }

    
    public function allFGTRequests(){
        
        $query = $this->db->query("SELECT       *
        FROM            dbo.View_FGT_Request");
        return $query->result_array();
    }

    public function allRawMaterialRequests(){
        
        $query = $this->db->query("SELECT * FROM dbo.tbl_lab_test_request");
        return $query->result_array();
    }
    


}
