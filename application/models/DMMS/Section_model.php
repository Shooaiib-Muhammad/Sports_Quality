<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Section_model extends CI_Model
{

  public $SecName;
  public $DeptID;
  public $status;

  public function findByDept($id = null)
  {
    $this->db->select("dbo.tbl_DMMS_Sections.SecID, dbo.tbl_DMMS_Sections.SecName, dbo.tbl_DMMS_Sections.Status, dbo.tbl_DMMS_Sections.DeptID, dbo.tbl_DMMS_Dept.DeptName")
      ->from('tbl_DMMS_Sections')
      ->join('tbl_DMMS_Dept', 'tbl_DMMS_Sections.DeptID = tbl_DMMS_Dept.DeptID');
    $this->db->where("tbl_DMMS_Dept.Status", 1);
    if ($id) {
      $this->db->where("tbl_DMMS_Sections.DeptID", $id);
    }


    $query = $this->db->get();

    return $query->result();
  }

  public function insert($data)
  {
    $this->DeptID = $data['department'];
    $this->SecName = $data['name'];
    $this->status = $data['status'];
    $DeptID = $this->DeptID;
    $Query = $this->db->insert("tbl_DMMS_Sections", $this);
    if ($Query) {
      $this->session->set_flashdata('info', 'Record Has Been Updates');
      redirect("index.php/Sections/Dept_Sections/$DeptID");
    } else {
      $this->session->set_flashdata('danger', 'Record Has Not Been Updates');
      redirect("index.php/Sections/Dept_Sections/$DeptID");
    }
  }

  public function delete($id)
  {
    $this->db->where('SecID', $id);
    $this->db->delete('tbl_DMMS_Sections');
  }
  public function getOEESections($id)
  {


    $query = $this->db->query( "SELECT        dbo.view_DMMS_Dept_Sections.*
FROM            dbo.view_DMMS_Dept_Sections
WHERE        (DeptID = $id) AND (OEEStatus = 1)");
    return $query->result_array();
  }
  
  public function getSections($id)
  {


    $query = $this->db->query(
      "SELECT        dbo.tbl_DMMS_Dept.DeptName, dbo.tbl_DMMS_Sections.SecName, dbo.tbl_DMMS_Sections.DeptID, dbo.tbl_DMMS_Sections.Status, dbo.tbl_DMMS_Sections.SecID
FROM            dbo.tbl_DMMS_Sections INNER JOIN
                         dbo.tbl_DMMS_Dept ON dbo.tbl_DMMS_Sections.DeptID = dbo.tbl_DMMS_Dept.DeptID
WHERE        (dbo.tbl_DMMS_Sections.DeptID = $id) and (dbo.tbl_DMMS_Sections.Status=1)
        "
    );
    return $query->result_array();
  }


  public function getOEEmachines($id)
  {

    $query = $this->db->query(
      "SELECT        COUNT(MID) AS Count
FROM            dbo.tbl_DMMS_Dept_Machine
WHERE        (Status = 1) AND (SectionID = $id)"
    );
    return $query->result_array();
  }
  public function getActivemachines($id)
  {

    $query = $this->db->query(
      "SELECT        COUNT(MID) AS Count
FROM            dbo.tbl_DMMS_Dept_Machine
WHERE        (Status = 1) AND (DeptID = $id)"
    );
    return $query->result_array();
  }
  public function getSectionCOunter($id)
  {

    $query = $this->db->query(
      "SELECT        COUNT(MID) AS Count
FROM            dbo.tbl_DMMS_Dept_Machine
WHERE        (SectionID = $id) and (Status=1)"
    );
    return $query->result_array();
  }
  public function update($Status, $SecID, $deptID, $SecName)
  {
    $query = $this->db->query("UPDATE tbl_DMMS_Sections
        Set SecName='$SecName', Status=$Status,DeptID=$deptID
        WHERE
        SecID=$SecID");

    if ($query) {

      $this->session->set_flashdata('info', 'Record Has Been Updates');
      redirect('index.php/Sections');
    } else {
      $this->session->set_flashdata('danger', 'Record Has Not Been Updates');
      redirect('index.php/Sections');
    }
  }
  
  public function updateSec($Status, $SecID, $SecName, $DeptID)
  {
    $query = $this->db->query("UPDATE tbl_DMMS_Sections
        Set SecName='$SecName', Status=$Status
        WHERE
        SecID=$SecID");

    if ($query) {

      $this->session->set_flashdata('info', 'Record Has Been Updates');
      redirect("index.php/Sections/Dept_Sections/$DeptID");
    } else {
      $this->session->set_flashdata('danger', 'Record Has Not Been Updates');
      redirect("index.php/Sections/Dept_Sections/$DeptID");
    }
  }
  public function getOnMachine($id)
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');


    $query = $this->db->query("SELECT        COUNT(TID) AS ID
FROM            dbo.view_DMMS_machineStatus
WHERE        (DeptID =$id) AND (Datee = '$Day/$Month/$Year')");
    return $query->result_array();
  }
  public function getOffMachine($id)
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $query = $this->db->query("SELECT        view_DMMS_machineStatus.*
FROM            dbo.view_DMMS_machineStatus
WHERE       (Datee = '$Day/$Month/$Year') And (DeptID = $id)");
    return $query->result_array();
  }
  public function machinedetils($id)
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');

    $query = $this->db->query("SELECT        DeptName, SecName, Name, Datee, Status, DeptID, Teammember,Solution
FROM            dbo.view_DMMS_machineStatus
GROUP BY DeptName, SecName, Name, Datee, Status, DeptID, Teammember,Solution
HAVING        (Datee = '$Day/$Month/$Year') AND (DeptID = $id)");
    return $query->result_array();
  }

  public function Offmachinedetils($id)
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $query = $this->db->query("SELECT        view_DMMS_machineStatus.*
FROM            dbo.view_DMMS_machineStatus
WHERE        (Datee = '$Day/$Month/$Year') AND (DeptID = $id)");
    return $query->result_array();
  }

  public function DaywiseDowntme($id)
  {
    $Date = date('d/m/Y');

    $query = $this->db->query("SELECT        SUM(Mints) AS Mints, DeptName
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date') And (DeptId= $id)
GROUP BY DeptName");
    return $query->result_array();
  }
  public function DaySectionWiseDowntme($SectionID)
  {
    $Date = date('d/m/Y');

    $query = $this->db->query("SELECT        SUM(Mints) AS Mints
FROM            dbo.view_Dmms_History
WHERE        (Datee BETWEEN '$Date' AND '$Date') AND (SectionID = $SectionID)");
    return $query->result_array();
  }

  public function DaySectionWiseDowntmeDateWise($SectionID,$sDate,$eDate)
  {
    $Date = date('d/m/Y');

    
    if ($SectionID == 22) {
      $query = $this->db->query("SELECT        SUM(Mints) AS Mints, Datee, DeptName, DowntimeDate,Name,SecName
FROM            dbo.view_Dmms_History1
WHERE        (DDate BETWEEN CONVERT(DATETIME, '$sDate 00:00:00', 102) AND CONVERT(DATETIME, '$eDate 00:00:00', 102))
GROUP BY Datee, DeptName, DowntimeDate,Name,SecName");
      return $query->result_array();
    } else if ($SectionID == 49) {
      $SYear = substr($sDate, 0, 4);
      $SMonth = substr($sDate, 5, 2);
      $SDay = substr($sDate, -2, 2);
      $StartDate = $SDay . '/' . $SMonth . '/' . $SYear;
      $EYear = substr($eDate, 0, 4);
      $EMonth = substr($eDate, 5, 2);
      $EDay = substr($eDate, -2, 2);
      $EndDate = $EDay . '/' . $EMonth . '/' . $EYear;
      $query = $this->db->query("SELECT        SUM(Mints) AS Mints, Datee, DeptName, DowntimeDate,Name,SecName
FROM            dbo.view_DMMS_History2

GROUP BY Datee, DeptName, DowntimeDate,Name,SecName
HAVING        (Datee BETWEEN '$StartDate' AND '$EndDate')");
      return $query->result_array();
    } else {
      $query = $this->db->query("SELECT        SUM(Mints) AS Mints, Datee, DeptName, DowntimeDate,Name,SecName
FROM            dbo.view_Dmms_History
WHERE        (SectionID = $SectionID) AND (DDate BETWEEN CONVERT(DATETIME, '$sDate 00:00:00', 102) AND CONVERT(DATETIME, '$eDate 00:00:00', 102))
GROUP BY Datee, DeptName, DowntimeDate,Name, SecName");
      return $query->result_array();
    }

  
  }
  public function getMintsandtagte($SectionID)
  {

    $query = $this->db->query("SELECT        IdealMints, Target, SectionID
FROM            dbo.tbl_DMMS_Ideal_Mints
WHERE        (SectionID = $SectionID)");
    return $query->result_array();
  }
  public function getAvgounter($id)
  {
    $Date = date('d/m/Y');
    return $this->db
      ->where('DeptId', $id)
      ->where('DowntimeDate ', $Date)
      ->get('view_Dmms_History')
      ->num_rows();
  }
  public function getSectionwiseCounter($SectionID)
  {
    $Date = date('d/m/Y');
    return $this->db
      ->where('SectionID', $SectionID)
      ->where('DowntimeDate', $Date)
      ->get('view_Dmms_History')
      ->num_rows();
  }

  public function getSectionwiseCounterDateWise($SectionID,$sDate,$eDate)
  {
    // $Date = date('d/m/Y');
    // return $this->db
    //   ->where('SectionID', $SectionID)
    //   ->where('DowntimeDate', $Date)
    //   ->get('view_Dmms_History')
    //   ->num_rows();
if($SectionID==22){
      $query = $this->db->query("SELECT     view_Dmms_History1.*
      FROM          view_Dmms_History1 
      WHERE        (DDate BETWEEN CONVERT(DATETIME, '$sDate 00:00:00', 102) AND CONVERT(DATETIME, '$eDate 00:00:00', 102)) ");
      return $query->result_array();
} elseif ($SectionID == 49) {
      $SYear = substr($sDate, 0, 4);
      $SMonth = substr($sDate, 5, 2);
      $SDay = substr($sDate, -2, 2);
      $StartDate = $SDay . '/' . $SMonth . '/' . $SYear;
      $EYear = substr($eDate, 0, 4);
      $EMonth = substr($eDate, 5, 2);
      $EDay = substr($eDate, -2, 2);
      $EndDate = $EDay . '/' . $EMonth . '/' . $EYear;
      $query = $this->db->query("SELECT     view_Dmms_History2.*
      FROM          view_Dmms_History2 
     
      WHERE        (Datee BETWEEN '$StartDate' AND '$EndDate') ");
      return $query->result_array();
    }{
      $query = $this->db->query("SELECT     view_Dmms_History.*
      FROM          view_Dmms_History 
      WHERE        (SectionID = $SectionID) AND (DDate BETWEEN CONVERT(DATETIME, '$sDate 00:00:00', 102) AND CONVERT(DATETIME, '$eDate 00:00:00', 102)) ");
      return $query->result_array();
}
    
     
  }

  public function IdealMachines()
  {

    $query = $this->db->query("SELECT       view_DMMS_Dept_Sections.*
FROM            dbo.view_DMMS_Dept_Sections");
    return $query->result_array();
  }
  public function NewTraning($Deptid, $Tdate, $section, $topic, $traninggiven, $points){
    $user_id = $this->session->userdata('user_id');
    $query = $this->db->query("INSERT   INTO dbo.DMMS_Traning_Head 
    (Topic,PointDiscuss,TraningGiven,Status,TDate,userid,deptid,sectionid)
        VALUES
         ('$topic','$points','$traninggiven','In Process','$Tdate',$user_id,$Deptid,$section)");

    if ($query) {
      $this->session->set_flashdata('success', 'Traning Head generated Successfully');
      redirect("index.php/BEC_Section/Add_Traning/$Deptid");
    } else {
      $this->session->set_flashdata(
        'danger',
        'Record Has Not Been Updates'
      );
      redirect("index.phpBEC_Section/Add_Traning/$Deptid");
    }
  }
  public function CallTopic($id){
    
    $query = $this->db->query("SELECT        Topic, TID, Status
FROM            dbo.DMMS_Traning_Head
WHERE        (Status = 'In Process') And (deptid=$id)");
    return $query->result_array();
  }
  public function Addmembers($TID, $Card,$Deptid)
  {
    //$user_id = $this->session->userdata('user_id');
    $query = $this->db->query("INSERT   INTO dbo.DMMS_Traning_Members 
    (CardNo,TID,Status)
        VALUES
         ('$Card',$TID,1)");

    if ($query) {
      $this->session->set_flashdata('success', 'New Member Add Successfully');
      redirect("index.php/BEC_Section/Add_Traning/$Deptid");
    } else {
      $this->session->set_flashdata(
        'danger',
        'Record Has Not Been Updates'
      );
      redirect("index.phpBEC_Section/Add_Traning/$Deptid");
    }
  }
  
  public function getHRMember($CardNo)
  {
    $HRDB = $this->load->database('HRMS', TRUE);
    $query = $HRDB->query("SELECT      view_DMMS_Traning_members.*
FROM            dbo.view_DMMS_Traning_members
where (CardNo=$CardNo)");
    return $query->result_array();
  }
  
  public function getmembers($id)
  {

    $query = $this->db->query("SELECT      view_DMMS_Traning_Member.*
FROM            dbo.view_DMMS_Traning_Member
where (deptid=$id)");
    return $query->result_array();
  }
  public function Deletemember($TID)
  {

    $this->db->where('DID', $TID);
    $this->db->delete('DMMS_Traning_Members');
  }
  public function Trainings($id)
  {

    $query = $this->db->query("SELECT      view_DMMS_Tranings.*
FROM            dbo.view_DMMS_Tranings 
where (deptid=$id) and (Status='In Process')");
    return $query->result_array();

  }
  public function TrainingsAll($id)
  {

    $query = $this->db->query("SELECT      view_DMMS_Tranings.*
FROM            dbo.view_DMMS_Tranings 
where (deptid=$id)");
    return $query->result_array();
  }
  public function updatetraining($TID, $TDate, $Topic, $PointDiscuss, $TraningGiven){
    $query = $this->db->query("UPDATE DMMS_Traning_Head
        Set TDate='$TDate', Topic='$Topic',PointDiscuss='$PointDiscuss',TraningGiven='$TraningGiven'
        WHERE (TID=$TID) and (Status='In Process')");

    
  }
  public function updatetrn($TID, $mintofmeeting)
  {
    $query = $this->db->query("UPDATE DMMS_Traning_Head
        Set mintofmeeting='$mintofmeeting',Status='Complete'
        WHERE (TID=$TID) and (Status='In Process')");
  }

  public function getStitchingmachine($DeptID)
  {

    $query = $this->db->query("SELECT        COUNT(DMID) AS Count
FROM            dbo.tbl_DMMS_Dept_Machine
WHERE        (Status = 1) AND (SectionID BETWEEN 115 AND 136) AND(deptid=$DeptID) OR
                         (SectionID = 151) OR
                         (SectionID = 152)");
    return $query->result_array();
  }

  public function Trainingsget($id){
    $query = $this->db->query("SELECT        Topic, PointDiscuss, TraningGiven, Status, TDate, deptid, sectionid, userid, Name, SecID, SecName, DeptName, TID, mintofmeeting, TDate1
    FROM            dbo.view_DMMS_Tranings
    WHERE        (Status = 'In Process') AND (TID = $id)");
    return $query->result_array();

  }
  public function viewMeeting($id){
    $query = $this->db->query("SELECT        TID, Topic, PointDiscuss, TraningGiven, Status, TDate, userid, deptid, sectionid, mintofmeeting, image, image1, image2, Agenda
    FROM            dbo.DMMS_Traning_Head
    WHERE        (TID = $id) AND (Status = 'Complete')");
    return $query->result_array();

  }

  public function NewTraning1($id,$pic,$mins,$agenda,$pic2,$pic3){

    
    $query = $this->db->query("UPDATE DMMS_Traning_Head
    Set mintofmeeting='$mins',Status='Complete',image='$pic',Agenda='$agenda',image1='$pic2',image2='$pic3'
    WHERE (TID=$id) and (Status='In Process')");
  }
}