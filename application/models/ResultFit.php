<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ResultFit extends CI_Model
{
    public function trequest()
    {
        $query = $this->db->query("SELECT        Invoice_ID, RequestDate, TestName, Amount, Supplier, Country
        FROM            dbo.view_request_invoice");
        return $result = $query->result_array();
    }
    public function auser()
    {
        $query = $this->db->query("SELECT        fullname, Email, Supplier, Country, Contactno, City, state, postalcode
        FROM            dbo.tbl_Outward_Users");
        return $result = $query->result_array();
    }
    public function arequest()
    {
        $query = $this->db->query("SELECT        Invoice_ID, RequestDate, TestName, Amount, Supplier, AccountsStatus, CONVERT(Varchar, AccountsverfiyDate, 103) AS AccountsverfiyDate
        FROM            dbo.view_Outward_transaction
        WHERE        (AccountsStatus = 1)");
        return $result = $query->result_array();
    }
    public function again()
    {
        $query = $this->db->query("SELECT        Invoice_ID, RequestDate, TestName, Amount, Supplier, Country
        FROM            dbo.view_request_invoice");
        return $result = $query->result_array();
    }

}
