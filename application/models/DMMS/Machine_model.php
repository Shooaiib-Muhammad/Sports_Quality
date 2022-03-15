<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Machine_model extends CI_Model
{
    public $MachineName;
    public $Status;

    public function loginn($username, $password)
    {
        $query = $this->db->query("SELECT  *
      FROM           tbl_DMMS_Team
      WHERE        (Username = '$username') AND (Password = '$password') ");

        if ($query->num_rows() > 0) {
            $result = $query->row();
            $session_data = [
                'user_id' => $result->ID,
                'Username' => $result->Username,
                'DeptID' => $result->DeptID,
                'userStus' => 1,
                'Status' => $result->Status,
                'isAdmin' => $result->isAdmin,
                'Email' => $result->Email,
            ];

            $Status = $result->Status;

            //echo $Status;
            // Die;

            if ($Status == 0) {
                $this->session->set_flashdata(
                    'info',
                    'Your Account Has Been Disable'
                );
                redirect('index.php/main');
            } else {
                if ($password == '123') {
                    $this->session->set_flashdata(
                        'info',
                        'Please Change Your Password First'
                    );
                } else {
                    $this->session->set_flashdata('info', 'Welcome in AMS');
                }

                $this->session->set_userdata($session_data);
            }
        } else {
            //echo "Hello";
            //Die;

            $this->session->set_flashdata(
                'info',
                'Your User Name OR Password is In Correct '
            );
            redirect('');
        }
    }

    public function findall()
    {
        return $this->db->get('tbl_DMMS_Machine')->result();
    }

    public function findbyid()
    {
        return $this->db->get('tbl_DMMS_Machine')->row();
    }

    public function findbyMid($id)
    {
        $query = $this->db
            ->query("SELECT        dbo.tbl_DMMS_Dept.DeptName, dbo.tbl_DMMS_Sections.SecName, dbo.tbl_DMMS_Dept_Machine.DMID, dbo.tbl_DMMS_Dept_Machine.Name
FROM            dbo.tbl_DMMS_Dept INNER JOIN
                         dbo.tbl_DMMS_Dept_Machine ON dbo.tbl_DMMS_Dept.DeptID = dbo.tbl_DMMS_Dept_Machine.DeptID INNER JOIN
                         dbo.tbl_DMMS_Sections ON dbo.tbl_DMMS_Dept_Machine.SectionID = dbo.tbl_DMMS_Sections.SecID
WHERE        (dbo.tbl_DMMS_Dept_Machine.DMID = '$id')");

        return $query->result_array();
    }
    public function getAllmachines()
    {
        $query = $this->db->query("SELECT      *
FROM            tbl_DMMS_Machine 
WHERE        (dbo.tbl_DMMS_Machine.Status = 1)
        ");
        return $query->result_array();
    }

    public function insert($data)
    {
        $this->MachineName = $data['name'];
        $this->Status = $data['status'];

        $this->db->insert('tbl_DMMS_Machine', $this);
    }

    public function delete($id)
    {
        $this->db->where('MID', $id)->delete('tbl_DMMS_Machine');
    }

    // public function update($data, $id)
    // {
    // $this->MachineName = $data['name'];
    // $this->Status = $data['status'];

    //     $this->db->where('MID', $id)->update("tbl_DMMS_Machine", $this);
    // }

    public function Checkmaintance($DMID)
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DMID, CONVERT(varchar, Date, 103) AS Expr1
FROM            dbo.view_DMMS_maintance_Done
WHERE        (DMID = $DMID) AND (CONVERT(varchar, Date, 103) = '$Date')");
        return $query->result_array();
    }
    public function install_machines($data, $id)
    {
        $dept = $data['department'];
        $sec = $data['section'];
        $mno = $this->get_next_machine_no($id, $dept, $sec);
        $array = [];
        for ($i = 1; $i <= $data['quantity']; $i++) {
            array_push($array, [
                'MNO' => $mno,
                'DeptID' => $dept,
                'SectionID' => $sec,
                'MID' => $id,
                'Status' => true,
            ]);

            $mno = $mno + 1;
        }

        if (count($array) > 0) {
            $this->db->insert_batch('tbl_DMMS_Dept_Machine', $array);
        }
    }

    public function countpackingInstalledMachines($id)
    {
        return $this->db
            ->where('DeptId', $id)
            ->where('Status', 1)
            ->get('View_DMMS_DeptWise_Sections')
            ->num_rows();
    }

    public function countambInstalledMachines($id)
    {
        return $this->db
            ->where('DeptId', $id)
            ->where('Status', 1)
            ->get('View_DMMS_DeptWise_Sections')
            ->num_rows();
    }

    public function countms1InstalledMachines($id)
    {
        return $this->db
            ->where('DeptId', $id)
            ->where('Status', 1)
            ->get('View_DMMS_DeptWise_Sections')
            ->num_rows();
    }

    public function countms2InstalledMachines($id)
    {
        return $this->db
            ->where('DeptId', $id)
            ->where('Status', 1)
            ->get('View_DMMS_DeptWise_Sections')
            ->num_rows();
    }

    public function counttmInstalledMachines($id)
    {
        return $this->db
            ->where('DeptId', $id)
            ->where('Status', 1)
            ->get('View_DMMS_DeptWise_Sections')
            ->num_rows();
    }

    public function countlfbInstalledMachines($id)
    {
        return $this->db
            ->where('DeptId', $id)
            ->where('Status', 1)
            ->get('View_DMMS_DeptWise_Sections')
            ->num_rows();
    }
    public function countrndInstalledMachines($id)
    {
        return $this->db
            ->where('DeptId', $id)
            ->where('Status', 1)
            ->get('View_DMMS_DeptWise_Sections')
            ->num_rows();
    }

    public function department_machines($dept = null, $sec = null)
    {
        $this->db
            ->select(
                "TOP (100) PERCENT dbo.tbl_DMMS_Dept_Machine.MID, dbo.tbl_DMMS_Dept_Machine.DMID, dbo.tbl_DMMS_Dept_Machine.DeptID, dbo.tbl_DMMS_Dept_Machine.SectionID, dbo.tbl_DMMS_Dept_Machine.Status, 
                         dbo.tbl_DMMS_Dept_Machine.MNO, dbo.tbl_DMMS_Machine.MachineName, dbo.tbl_DMMS_Dept.DeptName, dbo.tbl_DMMS_Sections.SecName"
            )
            ->from('tbl_DMMS_Dept_Machine');
        if ($dept) {
            $this->db->where('tbl_DMMS_Dept_Machine.DeptID', $dept);
        }

        if ($sec) {
            $this->db->where('tbl_DMMS_Dept_Machine.SectionID', $sec);
        }

        $this->db->join(
            'tbl_DMMS_Machine',
            'tbl_DMMS_Machine.MID = tbl_DMMS_Dept_Machine.MID'
        );
        $this->db->join(
            'tbl_DMMS_Dept',
            'tbl_DMMS_Dept.DeptID = tbl_DMMS_Dept_Machine.DeptID'
        );
        $this->db->join(
            'tbl_DMMS_Sections',
            'tbl_DMMS_Sections.SecID = tbl_DMMS_Dept_Machine.SectionID'
        );
        // $this->db->where("tbl_DMMS_Dept_Machine.Status", 1);
        $this->db->where('tbl_DMMS_Dept_Machine.MNO', null);
        return $this->db->get()->result();
    }

    public function get_next_machine_no($mid, $dept, $sec)
    {
        $row = $this->db
            ->select('MNO')
            ->where('DeptId', $dept)
            ->where('SectionID', $sec)
            ->where('MID', $mid)
            ->get('tbl_DMMS_Dept_Machine')
            ->row();

        if ($row) {
            return $row->MNO + 1;
        } else {
            return 1;
        }
    }

    public function get_installed_machine($dept, $sec, $MID)
    {
        $this->db->select('*')->from('View_DMMS_Install_Machine');
        $this->db->where('DeptID', $dept);
        $this->db->where('SectionID', $sec);
        $this->db->where('MID', $MID);
        return $this->db->get()->result();
    }

    public function DMMS_Dept($id)
    {

        $this->db->select('SecID, DeptID')->from('tbl_DMMS_Sections');
        $this->db->where('tbl_DMMS_Sections.SecID', $id);


        //$this->db->where('View_DMMS_Install_Machine.MachineStatus', 1);
        return $this->db->get()->result();
    }
    
    public function DMMS_Stitching($DeptID){
        
        $this->db->select('*')->from('View_DMMS_Install_Machine');
        $this->db->where('View_DMMS_Install_Machine.SectionID', $DeptID);
        

        //$this->db->where('View_DMMS_Install_Machine.MachineStatus', 1);
        return $this->db->get()->result();
    }

    public function getOEEmachineBydept($id)
    {
        $this->db->select('*')->from('View_DMMS_Install_Machine');
        $this->db->where('View_DMMS_Install_Machine.SectionID', $id);

        $this->db->where('View_DMMS_Install_Machine.MachineStatus', 1);
        return $this->db->get()->result();
    }
    public function getmachineBydept($id)
    {
        $this->db->select('*')->from('View_DMMS_Install_Machine');
        $this->db->where('View_DMMS_Install_Machine.SectionID', $id);

        $this->db->where('View_DMMS_Install_Machine.MachineStatus', 1);
        return $this->db->get()->result();
    }
    public function update($Status, $MID, $MachineName)
    {
        $query = $this->db->query("UPDATE tbl_DMMS_Machine
        Set MachineName='$MachineName', Status=$Status
        WHERE
        MID=$MID");

        if ($query) {
            $this->session->set_flashdata('info', 'Record Has Been Updates');
            redirect('index.php/machines');
        } else {
            $this->session->set_flashdata(
                'danger',
                'Record Has Not Been Updates'
            );
            redirect('index.php/machines');
        }
    }

    public function updatemac($Status, $DMID, $MachineName, $SecID)
    {
        $query = $this->db->query("UPDATE tbl_DMMS_Dept_Machine 
        Set Name='$MachineName', Status=$Status
        WHERE
        DMID=$DMID");

        if ($query) {
            $this->session->set_flashdata('info', 'Record Has Been Updates');
            redirect("index.php/machines/machinebysections/$SecID");
        } else {
            $this->session->set_flashdata(
                'danger',
                'Record Has Not Been Updates'
            );
            redirect("index.php/machines/machinebysections/$SecID");
        }
    }
    public function insertion($department, $MID, $section, $Status)
    {
        $query = $this->db->query("INSERT  INTO dbo.tbl_DMMS_Dept_Machine 
        (MID,DeptID,SectionID,Status)
        VALUES
        ($MID,$department,$section,$Status)");

        if ($query) {
            $this->session->set_flashdata('info', 'Record Has Been inserted');
            redirect('index.php/machines/department');
        } else {
            $this->session->set_flashdata(
                'danger',
                'Record Has Not Been Updates'
            );
            redirect('index.php/machines/department');
        }
    }
    public function machineLocations($id)
    {
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT dbo.tbl_DMMS_Dept_Machine.MID, dbo.tbl_DMMS_Dept_Machine.DMID, dbo.tbl_DMMS_Dept_Machine.DeptID, dbo.tbl_DMMS_Dept_Machine.SectionID, dbo.tbl_DMMS_Dept_Machine.Status, 
                         dbo.tbl_DMMS_Dept_Machine.MNO, dbo.tbl_DMMS_Machine.MachineName, dbo.tbl_DMMS_Dept.DeptName, dbo.tbl_DMMS_Sections.SecName, dbo.tbl_DMMS_Dept_Machine.Name

FROM            dbo.tbl_DMMS_Dept_Machine INNER JOIN
                         dbo.tbl_DMMS_Machine ON dbo.tbl_DMMS_Dept_Machine.MID = dbo.tbl_DMMS_Machine.MID INNER JOIN
                         dbo.tbl_DMMS_Dept ON dbo.tbl_DMMS_Dept_Machine.DeptID = dbo.tbl_DMMS_Dept.DeptID INNER JOIN
                         dbo.tbl_DMMS_Sections ON dbo.tbl_DMMS_Dept_Machine.SectionID = dbo.tbl_DMMS_Sections.SecID
WHERE        (dbo.tbl_DMMS_Dept_Machine.DMID = $id)");
        return $query->result_array();
    }
    public function updatelocation($Status, $MID, $DMID, $department, $section)
    {
        $query = $this->db->query("UPDATE tbl_DMMS_Dept_Machine
        Set DeptID='$department',SectionID= $section,Status=$Status,MID=$MID
        WHERE
        DMID=$DMID");

        if ($query) {
            $this->session->set_flashdata('info', 'Record Has Been Updates');
            redirect('index.php/machines/department');
        } else {
            $this->session->set_flashdata(
                'danger',
                'Record Has Not Been Updates'
            );
            redirect('index.php/machines/department');
        }
    }
    public function insertionmac($DeptiD, $MID, $SecID, $machienname)
    {
        $query = $this->db->query("INSERT  INTO dbo.tbl_DMMS_Dept_Machine 
        (MID,DeptID,SectionID,Status,Name)
        VALUES 
        ($MID,$DeptiD,$SecID,1,'$machienname')");

        if ($query) {
            $this->session->set_flashdata('info', 'Record Has Been inserted');
            redirect("index.php/machines/machinebysections/$SecID");
        } else {
            $this->session->set_flashdata(
                'danger',
                'Record Has Not Been Updates'
            );
            redirect("index.php/machines/machinebysections/$SecID");
        }
    }
    public function getmachienname($MID)
    {
        $this->db->select('*')->from('tbl_DMMS_Machine');
        $this->db->where('MID', $MID);

        return $this->db->get()->result();
    }
    public function machienperemters($SectionID)
    {
        $user_id = $this->session->userdata('user_id');
        $user_id = $user_id;
        $this->db->select('*')->from('View_DMMS_machine_peremeters');
        $this->db->where('SectionID', $SectionID);
        $this->db->where('UserID', $user_id);

        return $this->db->get()->result();
    }

    function addDataSchedule($machinId, $workDes)
    {
        date_default_timezone_set('Asia/Karachi');
        $ST = date('Y-m-d h:i:s');
        $status = 0;
        $query = $this->db->query(" INSERT INTO  dbo.tbl_DMMS_QRCode 
    ( machine_id
    , des_work_required 
    , WorkStatus
    ,StartTime
,Counter
    )
VALUES
    ('$machinId',
     '$workDes',
     '$status',  
     '$ST','1')");
    }

    function addDataTransaction($transactionId, $solDes, $sol, $prbm)
    {
        date_default_timezone_set('Asia/Karachi');
        $ET = date('Y-m-d h:i:s');
        $status = 1;
        $date = date('Y-m-d');
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->query("UPDATE  tbl_DMMS_QRCode
    Set WorkStatus='$status',
    EndTime='$ET',
    Solution='$sol',
    SOultionDescption='$solDes',
    tbl_DMMS_QRCode.Date='$date',Counter='2'
    ,tbl_DMMS_QRCode.user_id=$user_id
    ,tbl_DMMS_QRCode.ProblemID='$prbm'
    WHERE
    ID='$transactionId'     
     ");
    }

    function Approval($transactionId, $Status)
    {
        //date_default_timezone_set("Asia/Karachi");
        if ($Status == '1') {
            $counter = 3;
        } else {
            $counter = 1;
        }
        $query = $this->db->query("UPDATE  tbl_DMMS_QRCode 
    Set Counter='$counter',Approved='$Status'
    WHERE ID='$transactionId'");
    }
    public function getcounter($TID)
    {
        $query = $this->db->query("SELECT        ID, Counter
FROM            dbo.tbl_DMMS_QRCode
WHERE        (ID = '$TID')");
        return $query->result_array();
    }
    public function getdata($DMID)
    {
        $query = $this->db
            ->query("SELECT        ISNULL(WorkStatus, 0) AS WorkStatus, MAX(ID) AS ID, MAX(Counter) AS Counter
FROM            dbo.tbl_DMMS_QRCode
WHERE        (machine_id = $DMID)
GROUP BY ISNULL(WorkStatus, 0)");
        return $query->result_array();
    }
    public function checkissue($id)
    {
        $query = $this->db->query("  SELECT  *   
        From view_DMMS_Check_issue Where (machine_id=$id)  and (EndTime IS NULL) 
        ");
        return $query->result_array();
    }
    public function checkSolution($id)
    {
        $query = $this->db
            ->query("SELECT        Counter,    machine_id, ISNULL(WorkStatus, 0) AS WorkStatus, MAX(ID) AS ID, EndTime
        FROM            dbo.tbl_DMMS_QRCode
        GROUP BY machine_id, EndTime, ISNULL(WorkStatus, 0) ,Counter
        HAVING        (machine_id = $id) AND (EndTime IS NULL) and  (Counter=1)
        ");
        return $query->result_array();
    }
    public function Verifyissue($id)
    {
        $query = $this->db
            ->query("SELECT     Counter,   machine_id, ISNULL(WorkStatus, 0) AS WorkStatus, MAX(ID) AS ID, EndTime
        FROM            dbo.tbl_DMMS_QRCode
        GROUP BY machine_id, EndTime, ISNULL(WorkStatus, 0) ,Counter
        HAVING        (machine_id = $id) AND (EndTime IS NULL) and  (Counter=2)
        ");
        return $query->result_array();
    }
    function getissueDetails($id)
    {
        $query = $this->db->query(" SELECT   *
    FROM            dbo.View_DMMS_issue 
    where        (ID = '$id')");

        return $query->result_array();
    }

    function getissued()
    {
        $query = $this->db->query(" SELECT   *
    FROM            dbo.View_DMMS_issued");

        return $query->result_array();
    }

    public function issuedCounter()
    {
        return $this->db->get('View_DMMS_issued')->num_rows();
    }
    public function historyCounter()
    {
        return $this->db->get('view_Dmms_History')->num_rows();
    }

    function gethistory()
    {
        $query = $this->db->query(" SELECT   *
    FROM            dbo.view_Dmms_History");

        return $query->result_array();
    }
    public function Addproblem($Problem, $machineID)
    {
        $query = $this->db->query(" INSERT INTO  dbo.tbl_DMMS_Problem 
    ( ProblemName
    , MID  )
VALUES
    ('$Problem',
     '$machineID')");
    }
    function getproblems()
    {
        $query = $this->db->query("SELECT        ProblemName, MID, TID
FROM            dbo.tbl_DMMS_Problem");
        return $query->result_array();
    }
    public function MDone()
    {
        $Date = date('d/m/Y');
        $query = $this->db
            ->query("SELECT        dbo.tbl_DMMS_Maintance.Date, dbo.tbl_DMMS_Schedule.DMID, dbo.tbl_DMMS_Schedule.WorkStatus
FROM            dbo.tbl_DMMS_Maintance INNER JOIN
                         dbo.tbl_DMMS_Schedule ON dbo.tbl_DMMS_Maintance.SID = dbo.tbl_DMMS_Schedule.SID
GROUP BY dbo.tbl_DMMS_Maintance.Date, dbo.tbl_DMMS_Schedule.DMID, dbo.tbl_DMMS_Schedule.WorkStatus
HAVING        (dbo.tbl_DMMS_Maintance.Date = CONVERT(DATE, '$Date', 103)) AND (dbo.tbl_DMMS_Schedule.WorkStatus = 1)
");
        return $query->result_array();
    }
    public function MDone1($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        dbo.tbl_DMMS_Maintance.Date, dbo.tbl_DMMS_Schedule.DMID, dbo.tbl_DMMS_Schedule.WorkStatus, CONVERT(Varchar, dbo.tbl_DMMS_Maintance.Date, 103) AS Dateee
FROM            dbo.tbl_DMMS_Maintance INNER JOIN
                         dbo.tbl_DMMS_Schedule ON dbo.tbl_DMMS_Maintance.SID = dbo.tbl_DMMS_Schedule.SID
GROUP BY dbo.tbl_DMMS_Maintance.Date, dbo.tbl_DMMS_Schedule.DMID, dbo.tbl_DMMS_Schedule.WorkStatus, CONVERT(Varchar, dbo.tbl_DMMS_Maintance.Date, 103)
HAVING        (dbo.tbl_DMMS_Schedule.WorkStatus = 1) AND (CONVERT(Varchar, dbo.tbl_DMMS_Maintance.Date, 103) BETWEEN '$newformat' AND '$newformat1')
");
        return $query->result_array();
    }

    public function MPending()
    {
        $Date = date('d/m/Y');
        $query = $this->db->query("SELECT        DMID, WorkStatus, SDate
FROM            dbo.tbl_DMMS_Schedule
GROUP BY DMID, WorkStatus, SDate
HAVING        (WorkStatus = 0) AND (SDate = CONVERT(DATE, '$Date', 103))
");
        return $query->result_array();
    }

    public function MPending1($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db->query("SELECT        DMID, WorkStatus, SDate
FROM            dbo.tbl_DMMS_Schedule
GROUP BY DMID, WorkStatus, SDate
HAVING        (WorkStatus = 0) AND (SDate BETWEEN CONVERT(DATETIME, '$newformat', 103) AND CONVERT(DATETIME, '$newformat1', 103))
");
        return $query->result_array();
    }
    public function downtime()
    {
        $Date = date('d/m/Y');

        $query = $this->db->query("SELECT        SUM(Mints) AS Mints
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date')
");
        return $query->result_array();
    }
    public function downtime1($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);

        $query = $this->db->query("SELECT        SUM(Mints) AS Mints
FROM            dbo.view_Dmms_History
WHERE        (Datee BETWEEN '$newformat' AND '$newformat1')
");
        return $query->result_array();
    }
    public function DeptwiseDowntime()
    {
        $Date = date('d/m/Y');

        $query = $this->db->query("SELECT        SUM(Mints) AS Mints, DeptName
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date')
GROUP BY DeptName");
        return $query->result_array();
    }
    public function DeptwiseDowntime1($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);

        $query = $this->db->query("SELECT        SUM(Mints) AS Mints, DeptName
FROM            dbo.view_Dmms_History
WHERE        (Datee BETWEEN '$newformat' AND '$newformat1')
GROUP BY DeptName");
        return $query->result_array();
    }

    public function MachineDowntime()
    {
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date')and (DeptID=6)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntime1($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee BETWEEN '$newformat' AND '$newformat1')and (DeptID=6)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntime3()
    {
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date') and (DeptID=7)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntimeCustom3($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE         (Datee BETWEEN '$newformat' AND '$newformat1') and (DeptID=7)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function Groundproduction()
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_Ground_FLOOR
WHERE        (DateName = '$Date')");
        return $query->result_array();
    }

    public function GroundproductionDateWise($sDate,$eDate)
    {
        $SYear = substr($sDate, 0, 4);
        $SMonth = substr($sDate, 5, 2);
        $SDay = substr($sDate, -2, 2);
        $StartDate = $SDay . '/' . $SMonth . '/' . $SYear;
        $EYear = substr($eDate, 0, 4);
        $EMonth = substr($eDate, 5, 2);
        $EDay = substr($eDate, -2, 2);
        $EndDate = $EDay . '/' . $EMonth . '/' . $EYear;
        //$Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_Ground_FLOOR
WHERE        (DateName BETWEEN '$StartDate' AND '$EndDate')");
        return $query->result_array();
    }

    public function Firstproduction()
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_frst_FLOOR
WHERE        (DateName = '$Date')");
        return $query->result_array();
    }

    public function FirstproductionDateWise($sDate,$eDate)
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_frst_FLOOR
WHERE        (DateName Between '$sDate' AND '$eDate')");
        return $query->result_array();
    }
    public function AMBproduction()
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_AMb_production
WHERE        (DateName = '$Date')");
        return $query->result_array();
    }

    public function AMBproductionDateWise($sDate,$eDate)
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_AMb_production
WHERE        (DateName Between '$sDate' AND '$eDate')");
        return $query->result_array();
    }
    public function TMproduction()
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_TMProduction
WHERE        (DateName = '$Date')");
        return $query->result_array();
    }

    public function TMproductionDateWise($sDate,$eDate)
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_TMProduction
WHERE        (DateName Between '$sDate' AND '$eDate')");
        return $query->result_array();
    }
    public function LFBproduction()
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_LFB_Production
WHERE        (DateName = '$Date')");
        return $query->result_array();
    }

    public function LFBproductionDateWise($sDate,$eDate)
    {

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        DateName, TotalChecked, Pass, Fail
FROM            dbo.view_DMMS_LFB_Production
WHERE        (DateName Between '$sDate' AND '$eDate')");
        return $query->result_array();
    }
    public function getidelmints()
    {
        $query = $this->db
            ->query("SELECT        view_DMM_IdealMints.*
FROM            dbo.view_DMM_IdealMints");
        return $query->result_array();
    }
    public function undoidealmints($TID)
    {
        $this->db->where('TID', $TID)->delete('tbl_DMMS_Ideal_Mints');
        $query = $this->db->query("DELETE FROM tbl_DMMS_Ideal_Mints
      WHERE (TID=$TID)");

        if ($query) {
            $this->session->set_flashdata('info', 'Record Has Been inserted');
            redirect('index.php/main/Ideamints');
        } else {
            $this->session->set_flashdata(
                'danger',
                'Record Has Not Been Updates'
            );
            redirect('index.php/main/Ideamints');
        }
    }
    public function Assignidealmnts($Dept, $section, $idealmints, $Oeetarget)
    {
        $query = $this->db->query("INSERT  INTO dbo.tbl_DMMS_Ideal_Mints 
        (DeptID,SectionID,idealmints,Target)
        VALUES
        ($Dept,$section,$idealmints,$Oeetarget)");

        if ($query) {
            $this->session->set_flashdata('info', 'Record Has Been inserted');
            redirect('index.php/main/Ideamints');
        } else {
            $this->session->set_flashdata(
                'danger',
                'Record Has Not Been Updates'
            );
            redirect('index.php/main/Ideamints');
        }
    }
    public function MachineDowntime4()
    {
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date')and (DeptID=1)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntimeCustom4($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE       (Datee BETWEEN '$newformat' AND '$newformat1')and (DeptID=1)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntime5()
    {
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date')and (DeptID=3)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }

    public function MachineDowntimeCustom5($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee BETWEEN '$newformat' AND '$newformat1')and (DeptID=3)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntime6()
    {
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date')and (DeptID=24)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntimeCustom6($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE       (Datee BETWEEN '$newformat' AND '$newformat1')and (DeptID=24)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }
    public function MachineDowntime7()
    {
        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        SUM(Mints) AS Mints, DeptName, SecName + '  /  ' + Name AS Name
FROM            dbo.view_Dmms_History
WHERE        (Datee = '$Date')and (DeptID=25)
GROUP BY DeptName, SecName + '  /  ' + Name");
        return $query->result_array();
    }

    public function GetMS1WeekData()
    {
        $lastweekDate = date_create('2021-11-16')
            ->modify('-10 days')
            ->format('Y-m-d');
        $SYear = substr($lastweekDate, 0, 4);
        $SMonth = substr($lastweekDate, 5, 2);
        $SDay = substr($lastweekDate, -2, 2);

        $weekDate = $SDay . '/' . $SMonth . '/' . $SYear;

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT SUM(Mints) AS Mints, DeptName, Datee
FROM            dbo.view_Dmms_History
GROUP BY DeptName, Datee
HAVING        (Datee BETWEEN '$weekDate' AND '$Date')
ORDER BY Datee");
        return $query->result_array();
    }
    public function MSWeek()
    {
        $lastweekDate = date_create('2021-11-16')
            ->modify('-10 days')
            ->format('Y-m-d');
        $SYear = substr($lastweekDate, 0, 4);
        $SMonth = substr($lastweekDate, 5, 2);
        $SDay = substr($lastweekDate, -2, 2);

        $weekDate = $SDay . '/' . $SMonth . '/' . $SYear;

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT SUM(Mints) AS Mints, DeptName, Datee
FROM            dbo.view_Dmms_History
WHERE        (DeptID = 6)
GROUP BY DeptName, Datee
HAVING        (Datee BETWEEN '$weekDate' AND '$Date')
ORDER BY Datee");
        return $query->result_array();
    }
    public function MS2Week()
    {
        $lastweekDate = date_create('2021-11-16')
            ->modify('-10 days')
            ->format('Y-m-d');
        $SYear = substr($lastweekDate, 0, 4);
        $SMonth = substr($lastweekDate, 5, 2);
        $SDay = substr($lastweekDate, -2, 2);

        $weekDate = $SDay . '/' . $SMonth . '/' . $SYear;

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT SUM(Mints) AS Mints, DeptName, Datee
FROM            dbo.view_Dmms_History
WHERE        (DeptID = 7)
GROUP BY DeptName, Datee
HAVING        (Datee BETWEEN '$weekDate' AND '$Date')
ORDER BY Datee");
        return $query->result_array();
    }
    public function AMBWeek()
    {
        $lastweekDate = date_create('2021-11-16')
            ->modify('-10 days')
            ->format('Y-m-d');
        $SYear = substr($lastweekDate, 0, 4);
        $SMonth = substr($lastweekDate, 5, 2);
        $SDay = substr($lastweekDate, -2, 2);

        $weekDate = $SDay . '/' . $SMonth . '/' . $SYear;

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT SUM(Mints) AS Mints, DeptName, Datee
FROM            dbo.view_Dmms_History
WHERE        (DeptID = 1)
GROUP BY DeptName, Datee
HAVING        (Datee BETWEEN '$weekDate' AND '$Date')
ORDER BY Datee");
        return $query->result_array();
    }
    public function TMWeek()
    {
        $lastweekDate = date_create('2021-11-16')
            ->modify('-10 days')
            ->format('Y-m-d');
        $SYear = substr($lastweekDate, 0, 4);
        $SMonth = substr($lastweekDate, 5, 2);
        $SDay = substr($lastweekDate, -2, 2);

        $weekDate = $SDay . '/' . $SMonth . '/' . $SYear;

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT SUM(Mints) AS Mints, DeptName, Datee
FROM            dbo.view_Dmms_History
WHERE        (DeptID = 3)
GROUP BY DeptName, Datee
HAVING        (Datee BETWEEN '$weekDate' AND '$Date')
ORDER BY Datee");
        return $query->result_array();
    }
    public function LFBWeek()
    {
        $lastweekDate = date_create('2021-11-16')
            ->modify('-10 days')
            ->format('Y-m-d');
        $SYear = substr($lastweekDate, 0, 4);
        $SMonth = substr($lastweekDate, 5, 2);
        $SDay = substr($lastweekDate, -2, 2);

        $weekDate = $SDay . '/' . $SMonth . '/' . $SYear;

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT SUM(Mints) AS Mints, DeptName, Datee
FROM            dbo.view_Dmms_History
WHERE        (DeptID = 25)
GROUP BY DeptName, Datee
HAVING        (Datee BETWEEN '$weekDate' AND '$Date')
ORDER BY Datee");
        return $query->result_array();
    }
    public function PCWeek()
    {
        $lastweekDate = date_create('2021-11-16')
            ->modify('-10 days')
            ->format('Y-m-d');
        $SYear = substr($lastweekDate, 0, 4);
        $SMonth = substr($lastweekDate, 5, 2);
        $SDay = substr($lastweekDate, -2, 2);

        $weekDate = $SDay . '/' . $SMonth . '/' . $SYear;

        $Date = date('d/m/Y');

        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT SUM(Mints) AS Mints, DeptName, Datee
FROM            dbo.view_Dmms_History
WHERE        (DeptID = 25)
GROUP BY DeptName, Datee
HAVING        (Datee BETWEEN '$weekDate' AND '$Date')
ORDER BY Datee");
        return $query->result_array();
    }
    public function barChart($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db->query(" SELECT        SUM(Mints) AS Mints, DeptName
FROM            dbo.view_Dmms_History
WHERE        (Datee BETWEEN '$newformat' AND '$newformat1')
GROUP BY DeptName");
        return $query->result_array();
    }
    public function updatemachine($TID, $OEEStatus, $BECStatus){
        $query = $this->db->query("UPDATE   dbo .tbl_DMMS_Sections 
            SET   OEEStatus  =  '$OEEStatus',BECStatus  =  '$BECStatus' 
          WHERE  SecID='$TID'");
    }
    public function getStitchingmachine($DeptID){
        
                          $query = $this->db->query("SELECT        COUNT(DMID) AS Count
FROM            dbo.tbl_DMMS_Dept_Machine
WHERE        (Status = 1) AND (SectionID BETWEEN 115 AND 136) AND (deptid=$DeptID)  OR
                         (SectionID = 151) OR
                         (SectionID = 152)");
        return $query->result_array();
    }
}