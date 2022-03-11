
<?php
if ($this->session->userdata('userStus')==1) {
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;    
?>
<?php
$this->load->View('Adminheader');
?>
<body>
<style>
body {
background-image:url('<?php echo base_url();?>assets/css/2.jpg');
opacity:1;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;

}


</style> 
<div id="right-panel" class="right-panel">
<?php
$this->load->View('Setting');
?>
<br>
<br>
<br>
<div class="col-md-12">
<div class="col-md-3">
  <a href="<?php echo base_url();?>Welcome"><img src='<?php echo base_url();?>assets/css/Dashborad.png'  style="width:40% ;border-radius: 60%;">
 <div class="card-body" style="color: #FFF;">Dashborad
 </div></a>
</div>
<div class="col-md-3">
  <a href="<?php echo base_url();?>Trends"> <img src='<?php echo base_url();?>assets/css/Report.png'  style="width:40% ;border-radius: 100%;">
  <div class="card-body" style="color: #FFF;">Production
 </div></a>
</div>
<div class="col-md-3">
  <a href="<?php echo base_url();?>Quality"> <img src='<?php echo base_url();?>assets/css/Quality.png'  style="width:40% ;border-radius: 100%;">
  <div class="card-body" style="color: #FFF;">Quality
 </div></a>
</div>
<div class="col-md-3">
  <a href="<?php echo base_url();?>Orders"> <img src='<?php echo base_url();?>assets/css/Trend.png'  style="width:40% ;border-radius: 60%;">
  <div class="card-body" style="color: #FFF;">Trends
 </div></a>
</div>
</div>
<!-- <div class="col-md-12">
<div class="col-md-3">
  <a href="<?php echo base_url();?>Welcome"><img src='<?php echo base_url();?>assets/css/Dashborad.png'  style="width:40% ;border-radius: 60%;">
 <div class="card-body" style="color: #FFF;">Dashborad
 </div></a>
</div>
<div class="col-md-3">
  <a href="<?php echo base_url();?>Trends"> <img src='<?php echo base_url();?>assets/css/Trend.png'  style="width:40% ;border-radius: 60%;">
  <div class="card-body" style="color: #FFF;">Trends
 </div></a>
</div>
<div class="col-md-3">
  <a href="<?php echo base_url();?>DW"> <img src='<?php echo base_url();?>assets/css/Report.png'  style="width:40% ;border-radius: 60%;">
  <div class="card-body" style="color: #FFF;">Reports
 </div></a>
</div>
<div class="col-md-3">
 
</div>
</div> -->
<?php
$this->load->View('AdminFooter');
    ?>  

<?php
}else{
    redirect('Welcome/index');
}
?>
