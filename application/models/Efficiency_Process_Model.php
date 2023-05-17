<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Efficiency_Process_Model extends CI_Model
{
    public function getProcess(){
        $query = $this->db->query("SELECT *
        FROM [dbo].[tbl_process]
        ");
          return  $query->result_array();
    }
    public function insertProcess($processSelect,$etarget,$fc,$samval){

        $query = $this->db->query(" INSERT INTO dbo.tbl_Efficiency_process
        (Name
        
        ,Efftarget,
        FactoryCode
        ,SMV)
  VALUES
        ('$processSelect'
        ,$etarget
        ,'$fc'
        ,$samval)
        ");
          return true;   
    }

    public function getEfficiencyData(){
        $query = $this->db->query("SELECT *
        FROM dbo.tbl_Efficiency_process
        ");
          return  $query->result_array();
    }

    public function editEfficiencyData($PID){
      $query = $this->db->query("SELECT *
      FROM dbo.tbl_Efficiency_process
      WHERE PID = $PID
      ");
        return  $query->result_array();
  }
  

  public function updateEfficiencyData($PID,$emptarget,$fc,$sam){
    $query =  $this->db->query("UPDATE  tbl_Efficiency_process SET
    Efftarget = $emptarget,
    FactoryCode = '$fc',
    SMV = $sam
    WHERE PID = $PID 

    ");
    
    return  true;
}
public function DeletData($PID){
  $query1 = $this->db->query("DELETE FROM  dbo.tbl_Efficiency_process
  WHERE PID=$PID");
  if ($query1) {
      return true;
  } else {
      return false;
  }
}
}