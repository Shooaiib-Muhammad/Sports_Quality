<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cutting_Model extends CI_Model {

 public function machineCounter($s_date, $e_date)
 {

  $query = $this->db->query("SELECT      SUM(Counter) AS BallCounter, MachineName
  FROM            dbo.view_PC_Cutting_Process
  WHERE       (Date BETWEEN '$s_date' AND '$e_date')
  GROUP BY MachineName ORDER BY MachineName
  ");
  
return  $query->result_array();
 }




}


// $data['poCounter'] = $this->RWPD->poCounter($_POST['Sdate'], $_POST['Edate']);


?>






<!-- // SELECT        MachineName, Counter, Date
// FROM            dbo.view_PC_Cutting_Process
// WHERE        (Date BETWEEN '17/05/2022' AND '17/05/2022') -->