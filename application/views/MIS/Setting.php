
 <header id="header" class="header">

            <div class="header-menu">
  <div class="col-sm-7">
   <a id="menuToggle" class="menutoggle pull-left">
   <i class="fa fa fa-tasks"></i></a>
    </div>
<div class="user-area dropdown float-right">
  <div class="user-area dropdown float-left">
  <a href="<?php echo base_url();?>Welcome/Dashboard" class="dropdown-toggle"  aria-haspopup="true" >
  <img class="user-avatar rounded-circle" src="<?php echo base_url();?>assets/css/Home11.png" >
</a>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" 
                            src="<?php echo base_url();?>assets/Admin/images/admin.png" alt="User Avatar">
                        </a>
                        <?php
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$H=date('h');

?>
<script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */

var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
<script type="text/javascript">
  function pad2(number) {
  number = '0' + number;
  return number.substr(number.length - 2);
}

function showtime () {
        var now = new Date();
        var year = now.getFullYear();
        var month = now.getMonth();
        var day = now.getDate();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds()

        var hourVal = (hours >12) ? hours -12 :hours;
        if (hourVal == "0") hourVal = 12;

        var timeValue = day +"/" +month +"/" + year +" " + hourVal
        timeValue += ((minutes < 10) ? ":0" : ":") + minutes
        timeValue += ((seconds < 10) ? ":0" : ":") + seconds
        timeValue += (hours >= 12) ? " P.M." : " A.M."
        $('#output').text(timeValue)
        }

        setInterval(function(){
          showtime();
          },1000);

// setInterval(function() {
//   var ticks = $.now();

//   // Assume milliseconds for now
//   var seconds = Math.floor(ticks / 1000);
//   var hour = Math.floor((seconds / 3600) % 24);
//   var minute = Math.floor((seconds / 60) % 60);
//   var second = seconds % 60;

//   var result =  pad2(minute) + ':' + pad2(second)
//   $('#output').html(result);
// }, 1000);

</script>

&nbsp;&nbsp;&nbsp;
<strong style="font-size: 20px; color: #202020; ">Date: <Span id="output"></Span></strong>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="user-menu dropdown-menu">

                           <a class="nav-link" href="#"><i class="fa fa-user"></i> <?php
Echo $LoginName=$this->session->userdata('user_name');
?></a>
                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="<?php Echo base_url('Login/Logout') ?>">
                            <i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>



                </div>
            </div>

        </header>
