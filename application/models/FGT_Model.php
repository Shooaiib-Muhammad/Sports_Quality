<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FGT_Model extends CI_Model
{
    public $skillName;
    public $Status;

    public function FGT_H_insertion($fgttype,$lbno,$tdate,$testcat,$fifastump,$pmonth,$cmat,$backing,$fgbladderttype,
    $btype,$ttype,$mmcolor,$pcolors,$result,$fn,$m,$inn,$pshape,$rem,$article,$size) {
       
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
              ,TestType
              ,userid
              ,entrydate
              ,factory_name
              ,modal
              ,Innervalue
              ,panel_shape
              ,remark
              ,Article
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
              ,'$pcolors'
              '$result'
              ,$user_id,'$Date',
              ,'$fn'
              ,'$m'
              ,'$inn'
              ,'$pshape'
              ,'$rem'
              ,'$article',
              ,

              )");
        
    }

}
