<?php
defined('BASEPATH') or exit('No direct script access allowed');



function link_file($file)
{
  echo base_url($file);
}

function get_current_date(){
  $year = date('Y');
  $month = date('m');
  $day = date('d');
  $currentDate = $year."-".$month."-".$day;

  return $currentDate;
}

function current_date(){
  echo get_current_date();
}

//round values
function r($value)
{
  echo round($value);
}

//format date

function format($date, $format = ''){
  if($format == ''){
    $format = 'd/m/Y';
  }
  $date=date_create($date);
  echo date_format($date, $format);
}

function percent($val, $total)
{
    if($total == 0 || $val ==0){
        echo  "0%";
    }else {
        echo r($val / $total * 100)."%";
    }
}


