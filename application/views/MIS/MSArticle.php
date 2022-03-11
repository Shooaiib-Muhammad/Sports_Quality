<!doctype html>
<?php
if ($this->session->userdata('userStus') == 1) {
?>
    <html class="no-js" lang="en">
    <!--<![endif]-->
    <script src="<?php echo base_url();?>assets/js/jquery.js"  crossorigin="anonymous"></script>
    <!-- <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  
  crossorigin="anonymous"></script> -->
    
    <?php
    $this->load->View('Adminheader');
    ?>
    <style type="text/css">
        .CHKbg {
            text-align: center;
            color: #619aff;


        }

        .Passbg {
            text-align: center;
            color: #35cdf6;

        }

        .Rftbg {
            text-align: center;
            color: #00cc99;

        }

        .blnce {
            color: red;
        }

        .Eff {
            color: #3399ff;
        }

        .pph {
            color: #ffa31a;
        }

        th {
            font-size: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            //alert('helooo');
            $('#ByLineandArticle').hide();
            $('#ByLines').hide();
            $('#ByArticle').hide();


        });

        function GotCombox() {
            var Domain = $("#SelectBox").val();
            //alert(Domain);
            if (Domain == 1) {
                $('#All').show();
                $('#ByLineandArticle').hide();
                $('#ByLines').hide();
                $('#ByArticle').hide();
            } else if (Domain == 2) {
                $('#All').hide();
                $('#ByLineandArticle').hide();
                $('#ByLines').show();
                $('#ByArticle').hide();
            } else if (Domain == 3) {
                $('#All').hide();
                $('#ByLineandArticle').hide();
                $('#ByLines').hide();
                $('#ByArticle').show();
            } else if (Domain == 4) {
                $('#All').hide();
                $('#ByLineandArticle').show();
                $('#ByLines').hide();
                $('#ByArticle').hide();
            } else {
                $('#All').hide();
                $('#ByLineandArticle').hide();
                $('#ByLines').hide();
                $('#ByArticle').hide();
            }
        }

        function CallSize() {
            ArticleCode = $("#ArtCode").val();
            // alert(ArticleCode);
            url = "<?php echo base_url('DW/Get_Size/') ?>" + ArticleCode
            //alert(url);
            $.get(url, function(res) {

                data = res.data
                options = "<option value=''>All</option>"
                for (i = 0; i < data.length; i++) {
                    options += "<option>" + data[i].ArtSize + "</option>"
                }

                $("#ArtSize").html(options)

            });
        }

        function GetSize() {
            ArtCode = $("#ArtCodeee").val();
            //alert(ArtCode);
            url = "<?php echo base_url('DW/Get_Size/') ?>" + ArtCode
            //alert(url);
            $.get(url, function(res) {
                data = res.data
                options = "<option value=''>All</option>"
                for (i = 0; i < data.length; i++) {
                    options += "<option>" + data[i].ArtSize + "</option>"
                }

                $("#Size").html(options)

            });
        }
    </script>

    <body>
        <?php
        $this->load->View('menu');
        ?>
        <div id="right-panel" class="right-panel">

            <?php
            $this->load->View('Setting');
            $this->load->View('Submenu');

            $Month = date('m');
            $Year = date('Y');
            $Day = date('d');
            $CurrentDate = $Year . '-' . $Month . '-' . $Day;
            ?>
            <form action="<?php echo base_url('DW/GetMSSummary'); ?>" method="POST">
                <div class="col-md-2">
                    <label class="form-control-label">Report Selection :</label>
                    <div>
                        <select id="SelectBox" class="form-control show-tick" data-live-search="true" name="SelectBox" style="width: 100%;" onchange="GotCombox()" style="width: 100%">
                            <option value="1">All</option>
                            <option value="2">By Article</option>
                            <option value="3">By Lines</option>
                            <option value="4">By Article and Line</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-2" id="All">
                    <label class="form-control-label">Option Selection :</label>

                    <select class="form-control show-tick" data-live-search="true" name="All" style="width: 100%;" onchange="GotCombox()" style="width: 100%">
                        <option value="1">All</option>
                    </select>

                </div>
                <div class="col-md-2" id="ByArticle">

                    <label class="form-control-label">Start Line :</label>
                    <select class="form-control show-tick" data-live-search="true" name="SLine" style="width: 100%;" style="width: 100%">
                        <?php
                        foreach ($Lines as $Keys) {
                        ?>
                            <option value="<?php echo $Keys['LineID']; ?>"><?php echo $Keys['LineName']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label class="form-control-label">End Line :</label>
                    <select class="form-control show-tick" data-live-search="true" name="Eline" style="width: 100%;" style="width: 100%">
                        <?php
                        foreach ($Lines as $Keys) {
                        ?> <option value="<?php echo $Keys['LineID']; ?>"><?php echo $Keys['LineName']; ?></option>
                        <?php
                        }
                        ?>
                    </select>

                </div>
                <div class="col-md-2" id="ByLines">
                    <label class="form-control-label">Select Article:</label>
                    <select class="form-control show-tick" data-live-search="true" name="ArtCode" style="width: 100%;" onchange="CallSize()" style="width: 100%" id="ArtCode">
                        <?php
                        foreach ($Article as $Keys) {
                        ?> <option value="<?php echo $Keys['ArtCode']; ?>"><?php echo $Keys['ArtCode']; ?></option>
                        <?php
                        }
                        ?>
                    </select>

                    <br>
                    <label class="form-control-label">Size:</label>
                    <select id="ArtSize" class="form-control show-tick" data-live-search="true" name="ArtSize" style="width: 100%;" style="width: 100%">

                    </select>

                </div>
                <div class="col-md-2" id="ByLineandArticle">
                    <label class="form-control-label">Start Line :</label>
                    <select class="form-control show-tick" data-live-search="true" name="bySLine" style="width: 100%;" style="width: 100%">
                        <?php
                        foreach ($Lines as $Keys) {
                        ?>

                            <option value="<?php echo $Keys['LineID']; ?>"><?php echo $Keys['LineName']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label class="form-control-label">End Line :</label>
                    <select class="form-control show-tick" data-live-search="true" name="byEline" style="width: 100%;" style="width: 100%">
                        <?php
                        foreach ($Lines as $Keys) {
                        ?>

                            <option value="<?php echo $Keys['LineID']; ?>"><?php echo $Keys['LineName']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label class="form-control-label">Select Article:</label>
                    <select class="form-control show-tick" data-live-search="true" name="ArtCode" style="width: 100%;" onchange="GetSize()" style="width: 100%" id="ArtCodeee">
                        <?php
                        foreach ($Article as $Keys) {
                        ?> <option value="<?php echo $Keys['ArtCode']; ?>"><?php echo $Keys['ArtCode']; ?></option>
                        <?php
                        }
                        ?>
                    </select>

                    <br>
                    <label class="form-control-label">Size:</label>
                    <select id="Size" class="form-control show-tick" data-live-search="true" name="ArtSize" style="width: 100%;" style="width: 100%">

                    </select>

                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="form-control-label">From Date:</label>
                        <div class="input-group">
                            <input class="form-control" type="Date" name="Sdate" value="<?php echo $CurrentDate; ?>" style="width: 110%">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="form-control-label">To Date:</label>
                        <div class="input-group">
                            <input class="form-control" type="Date" name="Edate" value="<?php echo $CurrentDate; ?>" style="width: 110%">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class=" form-control-label"></label>
                        <div class="input-group">
                            <br>
                            <br>
                            <button type="submit" id="submit" name="submit" class="btn btn-primary "><i class=" fa fa-search"></i> Search</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="container">
                <div class="row">

                    <?php

                    if (isset($Reports)) {
                       
                        if ($SelectionBox == 1) {
                            $Sdate;
                        $Edate;
                        $SYear = substr($Sdate, 0, 4);
                        $SMonth = substr($Sdate, 5, 2);
                        $SDay = substr($Sdate, -2, 2);
                        $Sdate = $SDay . '/' . $SMonth . '/' . $SYear;
                        $EYear = substr($Edate, 0, 4);
                        $EMonth = substr($Edate, 5, 2);
                        $EDay = substr($Edate, -2, 2);
                        $Edate = $EDay . '/' . $EMonth . '/' . $EYear;
                    ?>
                            <div class="table-responsive">
                                <table class="table table-hover " style="border: 1px gray solid; width:100%;">
                                    <thead style="background-color: #202020; color: #fff;">
                                        <th style="text-align: center">Machine Stitch Between From (<?php echo $Sdate; ?>) To (<?php echo $Edate; ?>) </th>
                                    </thead>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <table id="table" class="display responsive nowrap" style="width: 100%;">


                                    <thead style="background-color: #80dfff;  color:#282828;">
                                        <th style="text-align: left;width:13%;">Article No </th>
                                        <th style="text-align: center;">Size</th>
                                        <th style="text-align: center;">Opening</th>
                                        <th style="text-align: center;">Fresh Issue</th>
                                        <th style="text-align: center;">WIP</th>
                                        <th style="text-align: center;">Checked</th>
                                        <th style="text-align: center;">Pass</th>
                                        <th style="text-align: center;">Repair Return</th>
                                        <th style="text-align: center;">OutPut</th>
                                        <th style="text-align: center;">Balance</th>
                                        <th style="text-align: center;">RFT</th>
                                        <th style="text-align: center;">DEfects</th>
                                        <th style="text-align: center; ">Swing RFT</th>
                                        <th style="text-align: center;">Total Worker</th>
                                        <th style="text-align: center;">SMV</th>

                                        <th style="text-align: center;">Mints</th>
                                        <th style="text-align: center;">Efficiency</th>
                                        <!-- <th style="text-align: center;">Change Over Downtime</th> -->
                                        <th style="text-align: center;"> Dowtime</th>

                                        <th style="text-align: center;">B Grade</th>
                                        <th style="text-align: center;">C Grade </th>
                                    </thead>
                                    <tr>
                                        <?php

                                        $OpenQty1 = 0;
                                        $FreshIssue1 = 0;
                                        $Pass1 = 0;
                                        $TotalChecked1 = 0;
                                        $RepairReturn1 = 0;
                                        $OtherDowntime1 = 0;
                                        $PresentWorkers1 = 0;
                                        $WIP1 = 0;
                                        $OutPut1 = 0;
                                        $Balance1 = 0;
                                        $DEFECTS1 = 0;
                                        $BGradeBall1 = 0;
                                        $CGradeBall1 = 0;
                                        $SwingPass1 = 0;
                                        foreach ($Reports as $keys) {

                                            $ArtCode = $keys['ArtCode'];
                                            $ArtSize = $keys['ArtSize'];
                                            $OpenQty = $keys['OpeningQty'];
                                            $FreshIssue = $keys['FreshIssue'];
                                            $Pass = $keys['Pass'];
                                            $TotalChecked = $keys['TotalChecked'];
                                            $RepairReturn = $keys['RepairReturn'];
                                            $OutPut = $Pass + $RepairReturn;

                                            $OtherDowntime = $keys['OtherDowntime'];
                                            $SAMValue = $keys['SAMValue'];
                                            $PresentWorkers = $keys['PresentWorkers'];

                                            $WIP = $OpenQty + $FreshIssue;
                                            $OutPut = $Pass + $RepairReturn;
                                            $Balance = $WIP - $OutPut;

                                            $DEFECTS = $keys['DEFECTS'];
                                            $SwingPass = $TotalChecked - $DEFECTS;

                                            if ($SwingPass == 0 or $TotalChecked == 0) {
                                                $SwingRFT = 0;
                                            } else {
                                                $SwingRFT = ($SwingPass / $TotalChecked) * 100;
                                            }

                                            if ($Pass == 0 or $TotalChecked == 0) {
                                                $RFT = 0;
                                            } else {
                                                $RFT = ($Pass / $TotalChecked) * 100;
                                            }


                                            $BGradeBall = $keys['BGradeBall'];
                                            $CGradeBall = $keys['CGradeBall'];
                                            foreach ($GetEfficiency as $Efficiency) {
                                                $WorkingTime = $Efficiency['WorkingTime'];
                                            }
                                            if ($SAMValue == 0 or $OutPut == 0 or $PresentWorkers == 0 or $WorkingTime == 0) {
                                                $Efficiency = 0;
                                            } else {
                                                $Efficiency = ($OutPut * $SAMValue) / ($PresentWorkers * $WorkingTime) * 100;
                                            }

                                        ?>
                                            <td style="text-align: left;"><?php echo $ArtCode; ?></td>
                                            <td style="text-align: center;"><?php echo $ArtSize; ?>""</td>
                                            <td style="text-align: center;"><?php echo Round($OpenQty); ?></td>
                                            <td style="text-align: center;"><?php echo Round($FreshIssue); ?></td>
                                            <td style="text-align: center;"><?php echo Round($WIP); ?></td>
                                            <td style="text-align: center;" class="CHKbg"><?php echo Round($TotalChecked); ?></td>
                                            <td style="text-align: center;" class="Passbg"><?php echo Round($Pass); ?></td>
                                            <td style="text-align: center;"><?php echo Round($RepairReturn); ?></td>
                                            <td style="text-align: center;"><?php echo Round($OutPut); ?></td>
                                            <td style="text-align: center;" class="blnce"><?php echo Round($Balance); ?></td>
                                            <td style="text-align: center;" class="Rftbg"><?php echo Round($RFT, 2); ?>%</td>
                                            <td style="text-align: center;" class="Rftbg"><?php echo Round($DEFECTS); ?></td>
                                            <td style="text-align: center;" class="Rftbg"><?php echo Round($SwingRFT, 2); ?>%</td>
                                            <td style="text-align: center;"><?php echo Round($PresentWorkers); ?></td>
                                            <td style="text-align: center;"><?php echo Round($SAMValue, 2); ?></td>
                                            <td style="text-align: center;"><?php echo Round($WorkingTime); ?></td>
                                            <td style="text-align: center;" class="Eff"><?php echo Round($Efficiency, 2); ?> %</td>
                                            <td style="text-align: center;"><?php echo Round($OtherDowntime); ?></td>
                                            <td style="text-align: center;"><?php echo Round($BGradeBall); ?></td>
                                            <td style="text-align: center;"><?php echo Round($CGradeBall); ?></td>

                                    </tr>
                                <?php


                                            $OpenQty1 += $OpenQty;
                                            $FreshIssue1 += $FreshIssue;
                                            $Pass1 += $Pass;
                                            $TotalChecked1 += $TotalChecked;
                                            $RepairReturn1 += $RepairReturn;
                                            $OtherDowntime1 += $OtherDowntime;
                                            $PresentWorkers1 += $PresentWorkers;
                                            $WIP1 = $FreshIssue1 + $OpenQty1;
                                            $OutPut1 = $RepairReturn1 + $Pass1;
                                            $Balance1 = $WIP1 - $OutPut1;
                                            $DEFECTS1 += $DEFECTS;
                                            $BGradeBall1 += $BGradeBall;
                                            $CGradeBall1 += $CGradeBall1;
                                            $SwingPass1 = $TotalChecked1 - $DEFECTS1;
                                            if ($SwingPass1 == 0 or $TotalChecked1 == 0) {
                                                $SwingRFT1 = 0;
                                            } else {
                                                $SwingRFT1 = ($SwingPass1 / $TotalChecked1) * 100;
                                            }

                                            if ($Pass1 == 0 or $TotalChecked1 == 0) {
                                                $RFT1 = 0;
                                            } else {
                                                $RFT1 = ($Pass1 / $TotalChecked1) * 100;
                                            }
                                        }

                                ?>
                                <tr style="background-color: #202020; color:#fff;">
                                    <td style="text-align: left;"></td>
                                    <td style="text-align: left;">Total</td>
                                    <td style="text-align: center;"><?php echo Round($OpenQty1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($FreshIssue1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($WIP1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($TotalChecked1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($Pass1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($RepairReturn1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($OutPut1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($Balance1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($RFT1, 2); ?> %</td>
                                    <td style="text-align: center;"><?php echo Round($DEFECTS1); ?> </td>
                                    <td style="text-align: center;"><?php echo Round($SwingRFT1, 2); ?> %</td>
                                    <td style="text-align: center;"><?php echo Round($PresentWorkers1); ?></td>
                                    <td style="text-align: center;"></td>
                                    <td style="text-align: center;"></td>
                                    <td style="text-align: center;"></td>
                                    <td style="text-align: center;"><?php echo Round($OtherDowntime1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($BGradeBall1); ?></td>
                                    <td style="text-align: center;"><?php echo Round($CGradeBall1); ?></td>
                                </tr>

                                </table>
                            <?php
                        } elseif ($SelectionBox == 2) {
                            $Sdate;
                            $Edate;
                            $SYear = substr($Sdate, 0, 4);
                            $SMonth = substr($Sdate, 5, 2);
                            $SDay = substr($Sdate, -2, 2);
                            $Sdate = $SDay . '/' . $SMonth . '/' . $SYear;
                            $EYear = substr($Edate, 0, 4);
                            $EMonth = substr($Edate, 5, 2);
                            $EDay = substr($Edate, -2, 2);
                            $Edate = $EDay . '/' . $EMonth . '/' . $EYear;
                            ?>
                                <table class="table table-hover " style="border: 1px gray solid; width:100%;">
                                    <thead style="background-color: #202020; color: #fff;">
                                        <th style="text-align: center">Machine Stitch Article Wise Between From (<?php echo $Sdate; ?>) To (<?php echo $Edate; ?>) </th>
                                    </thead>
                                </table>
                                <?php


                                foreach ($Reports as $row) {
                                    $ArtCode = $row['ArtCode'];
                                    $ArtSize = $row['ArtSize'];
                                    $InQty = $row['InQty'];
                                    $OutQty = $row['OutPut'];
                                    $Total = $row['Total'];
                                    $bal = $Total - $InQty;
                                    $openingBal = $bal + $OutQty;
                                }

                                ?>


                                <div class="table-responsive" style="margin-top: -20px;">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 100%;">

                                        <tr style="background-color: #202020; color:#fff;">

                                            <td colspan="3">Opening Balance</td>
                                            <td style="text-align: center;"><?php echo Round($openingBal); ?></td>
                                            <td colspan="3">Article Code</td>
                                            <td style="text-align: center;"><?php echo $ArtCode; ?> / <?php echo $ArtSize; ?></td>
                                        </tr>

                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table id="table" class="display responsive nowrap" style="width: 100%;">
                                        <thead style="background-color: #80dfff;  color:#282828;">
                                            <th style="text-align: left;width:13%;">Date</th>
                                            <th style="text-align: left;width:13%;">Line Name</th>
                                            <th style="text-align: left;width:8%;">Article No</th>
                                            <th style="text-align: center;width:5%;">Size</th>

                                            <th style="text-align: center;">IN</th>
                                            <th style="text-align: center;">OUT</th>
                                            <th style="text-align: center;">Balance</th>
                                            <th style="text-align: center;">Legder Balance</th>


                                        </thead>
                                        <tr>
                                            <?php

                                            foreach ($GetArticle as $row) {

                                                $TranDate = $row['Date'];
                                                $ArtCode = $row['ArtCode'];
                                                $ArtSize = $row['ArtSize'];
                                                $InQty = $row['InQty'];
                                                $OutQty = $row['OutPut'];
                                                $Total = $row['Total'];
                                                $Balance = $InQty - $OutQty;
                                                // $OpeningQty=$row['OpeningQty'];
                                                $LineName = $row['LineName'];
                                            ?>
                                                <td style="text-align: left;"><?php echo $TranDate; ?></td>
                                                <td style="text-align: left;"><?php echo $LineName; ?></td>
                                                <td style="text-align: left;"><?php echo $ArtCode; ?></td>
                                                <td style="text-align: center;"><?php echo $ArtSize; ?></td>
                                                <!-- <td style="text-align: center;"><?php echo  Round($OpeningQty); ?></td> -->
                                                <td style="text-align: center;"><?php echo Round($InQty); ?></td>
                                                <td style="text-align: center;"><?php echo Round($OutQty); ?></td>
                                                <td style="text-align: center;"><?php echo Round($Balance); ?></td>

                                                <td style="text-align: center;"><?php echo Round($Total); ?></td>
                                        </tr>
                                    <?php
                                            }
                                    ?>
                                    </table>
                                <?php
                            } elseif ($SelectionBox == 3) {
                                $Sdate;
                                $Edate;
                                $SYear = substr($Sdate, 0, 4);
                                $SMonth = substr($Sdate, 5, 2);
                                $SDay = substr($Sdate, -2, 2);
                                $SSdate = $SDay . '/' . $SMonth . '/' . $SYear;
                                $EYear = substr($Edate, 0, 4);
                                $EMonth = substr($Edate, 5, 2);
                                $EDay = substr($Edate, -2, 2);
                                $EEdate = $EDay . '/' . $EMonth . '/' . $EYear;
                                ?>
                                    <table class="table table-hover " style="border: 1px gray solid; width:100%;">
                                        <thead style="background-color: #202020; color: #fff;">
                                            <th style="text-align: center">Machine Stitch Between Line Wise From
                                                (<?php echo $SSdate; ?>) To (<?php echo $EEdate; ?>) </th>
                                        </thead>
                                    </table>
                                    <div class="table-responsive">
                                        <table id="table" class="display responsive nowrap" style="width: 100%;">
                                            <thead style="background-color: #80dfff;  color:#282828;">
                                                <th style="text-align: left;width:13%;">Article No</th>
                                                <th style="text-align: center;">Size</th>
                                                <th style="text-align: center;">Opening</th>
                                                <th style="text-align: center;">Fresh Issue</th>
                                                <th style="text-align: center;">WIP</th>
                                                <th style="text-align: center;">Checked</th>
                                                <th style="text-align: center;">Pass</th>
                                                <th style="text-align: center;">Repair Return</th>
                                                <th style="text-align: center;">OutPut</th>
                                                <th style="text-align: center;">Balance</th>
                                                <th style="text-align: center; width: 10%;">RFT</th>
                                                <th style="text-align: center; width: 10%;">Defects</th>
                                                <th style="text-align: center; width: 10%;">Swing RFT</th>
                                                <th style="text-align: center;">Total Worker</th>
                                                <th style="text-align: center;">SMV</th>
                                                <th style="text-align: center;">Mints</th>
                                                <th style="text-align: center;">Efficiency</th>
                                                <th style="text-align: center;"> Dowtime</th>
                                                <th style="text-align: center;">B Grade</th>
                                                <th style="text-align: center;">C Grade </th>
                                            </thead>

                                            <?php
                                            foreach ($MSlines as $keys) {
                                                $Lineid = $keys['LineID'];
                                                $linewiseData = $this->DW_Model->MS_linewiseData($Lineid, $Sdate, $Edate);

                                            ?>
                                                <tr>

                                                    <td style="background-color:#ccd9ff; color: #202020; ">Line Name :
                                                    </td>
                                                    <td><?php echo $keys['LineName']; ?></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <?php

                                                    foreach ($linewiseData as $PIorming1) {

                                                        $Line = $PIorming1['LineID'];

                                                        $HourName = $PIorming1['LineName'];
                                                        $ArtCode = $PIorming1['ArtCode'];
                                                        $ArtSize = $PIorming1['ArtSize'];
                                                        $OpenQty = $PIorming1['OpeningQty'];
                                                        $FreshIssue = $PIorming1['FreshIssue'];
                                                        $Pass = $PIorming1['Pass'];
                                                        $TotalChecked = $PIorming1['TotalChecked'];
                                                        $RepairReturn = $PIorming1['RepairReturn'];
                                                        $OutPut = $Pass + $RepairReturn;
                                                        $OtherDowntime = $PIorming1['OtherDowntime'];
                                                        $SAMValue = $PIorming1['SAMValue'];
                                                        $PresentWorkers = $PIorming1['PresentWorkers'];
                                                        $WIP = $OpenQty + $FreshIssue;
                                                        $Balance = $OpenQty + $FreshIssue - $Pass - $RepairReturn;
                                                        $DEFECTS = $PIorming1['DEFECTS'];
                                                        $SwingPass = $TotalChecked - $DEFECTS;
                                                        if ($SwingPass == 0 or $TotalChecked == 0) {
                                                            $SwingRFT = 0;
                                                        } else {
                                                            $SwingRFT = ($SwingPass / $TotalChecked) * 100;
                                                        }
                                                        if ($Pass == 0 or $TotalChecked == 0) {
                                                            $RFT = 0;
                                                        } else {
                                                            $RFT = ($Pass / $TotalChecked) * 100;
                                                        }
                                                        $BGradeBall = $PIorming1['BGradeBall'];
                                                        $CGradeBall = $PIorming1['CGradeBall'];
                                                        foreach ($GetEfficiency as $Efficiency) {
                                                            $WorkingTime = $Efficiency['WorkingTime'];
                                                        }
                                                        if ($SAMValue == 0 or $OutPut == 0 or $PresentWorkers == 0 or $WorkingTime == 0) {
                                                            $Efficiency = 0;
                                                        } else {
                                                            $Efficiency = ($OutPut * $SAMValue) / ($PresentWorkers * $WorkingTime) * 100;
                                                        }
                                                        if ($Line = Null) {
                                                        } else {


                                                    ?>

                                                            <td style="text-align: left;"><?php echo $ArtCode; ?></td>
                                                            <td style="text-align: left;"><?php echo $ArtSize; ?>""</td>
                                                            <td style="text-align: center;"><?php echo Round($OpenQty); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($FreshIssue); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($WIP); ?></td>
                                                            <td style="text-align: center;" class="CHKbg"><?php echo Round($TotalChecked); ?></td>
                                                            <td style="text-align: center;" class="Passbg"><?php echo Round($Pass); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($RepairReturn); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($OutPut); ?></td>
                                                            <td style="text-align: center;" class="blnce"><?php echo Round($Balance); ?></td>
                                                            <td style="text-align: center;" class="Rftbg"><?php echo Round($RFT, 2); ?>%</td>
                                                            <td style="text-align: center;"><?php echo Round($DEFECTS); ?></td>
                                                            <td style="text-align: center;" class="Rftbg"><?php echo Round($SwingRFT, 2); ?>%</td>
                                                            <td style="text-align: center;"><?php echo Round($PresentWorkers); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($SAMValue, 2); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($WorkingTime); ?></td>
                                                            <td style="text-align: center;" class="Eff"><?php echo Round($Efficiency, 2); ?>%</td>
                                                            <td style="text-align: center;"><?php echo Round($OtherDowntime); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($BGradeBall); ?></td>
                                                            <td style="text-align: center;"><?php echo Round($CGradeBall); ?></td>
                                                        <?php

                                                        }
                                                        ?>
                                                </tr>
                                            <?php

                                                    }
                                                    $Sum = $this->DW_Model->MS_Lines_sum($Lineid, $Sdate, $Edate);
                                                    foreach ($Sum as $PIorming1) {

                                                        $OpenQty = $PIorming1['OpeningQty'];
                                                        $FreshIssue = $PIorming1['FreshIssue'];
                                                        $Pass = $PIorming1['Pass'];
                                                        $TotalChecked = $PIorming1['TotalChecked'];
                                                        $RepairReturn = $PIorming1['RepairReturn'];
                                                        $OutPut = $Pass + $RepairReturn;

                                                        $OtherDowntime = $PIorming1['OtherDowntime'];
                                                        $SAMValue = $PIorming1['SAMValue'];
                                                        $PresentWorkers = $PIorming1['PresentWorkers'];

                                                        $WIP = $OpenQty + $FreshIssue;
                                                        $Balance = $OpenQty + $FreshIssue - $Pass - $RepairReturn;

                                                        $DEFECTS = $PIorming1['DEFECTS'];
                                                        $SwingPass = $TotalChecked - $DEFECTS;

                                                        if ($SwingPass == 0 or $TotalChecked == 0) {
                                                            $SwingRFT = 0;
                                                        } else {
                                                            $SwingRFT = ($SwingPass / $TotalChecked) * 100;
                                                        }

                                                        if ($Pass == 0 or $TotalChecked == 0) {
                                                            $RFT = 0;
                                                        } else {
                                                            $RFT = ($Pass / $TotalChecked) * 100;
                                                        }


                                                        $BGradeBall = $PIorming1['BGradeBall'];
                                                        $CGradeBall = $PIorming1['CGradeBall'];

                                                        foreach ($GetEfficiency as $Efficiency) {
                                                            $WorkingTime = $Efficiency['WorkingTime'];
                                                        }
                                                        if ($SAMValue == 0 or $OutPut == 0 or $PresentWorkers == 0 or $WorkingTime == 0) {
                                                            $Efficiency = 0;
                                                        } else {
                                                            $Efficiency = ($OutPut * $SAMValue) / ($PresentWorkers * $WorkingTime) * 100;
                                                        }
                                            ?>
                                                <tr style="background-color: #202020; color:ghostwhite">
                                                    <td style="text-align: left;"></td>
                                                    <td style="text-align: left;">Total</td>
                                                    <td style="text-align: center;"><?php echo Round($OpenQty); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($FreshIssue); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($WIP); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($TotalChecked); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($Pass); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($RepairReturn); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($OutPut); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($Balance); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($RFT, 2); ?> %</td>
                                                    <td style="text-align: center;"><?php echo Round($DEFECTS); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($SwingRFT, 2); ?> %</td>
                                                    <td style="text-align: center;"><?php echo Round($PresentWorkers); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($SAMValue, 2); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($WorkingTime); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($Efficiency, 2); ?> %</td>
                                                    <td style="text-align: center;"><?php echo Round($OtherDowntime); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($BGradeBall); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($CGradeBall); ?></td>
                                                </tr>
                                        <?php
                                                    }
                                                }
                                        ?>

                                        </table>
                                    </div>
                                <?php
                            } elseif ($SelectionBox == 4) {
                                $Sdate;
                                $Edate;
                                $SYear = substr($Sdate, 0, 4);
                                $SMonth = substr($Sdate, 5, 2);
                                $SDay = substr($Sdate, -2, 2);
                                $Sdate = $SDay . '/' . $SMonth . '/' . $SYear;
                                $EYear = substr($Edate, 0, 4);
                                $EMonth = substr($Edate, 5, 2);
                                $EDay = substr($Edate, -2, 2);
                                $Edate = $EDay . '/' . $EMonth . '/' . $EYear;
                                ?>
                                    <table class="table table-hover " style="border: 1px gray solid; width:100%;">
                                        <thead style="background-color: #202020; color: #fff;">
                                            <th style="text-align: center">Machine Stitch Customized Between From (<?php echo $Sdate; ?>) To (<?php echo $Edate; ?>) </th>
                                        </thead>
                                    </table>



                                    <div class="table-responsive">
                                        <table id="table" class="display responsive nowrap" style="width: 100%;">
                                            <thead style="background-color: #80dfff;  color:#282828;">
                                                <th style="text-align: left;width:13%;">Line Name</th>

                                                <th style="text-align: left;width:13%;">Article No</th>
                                                <th style="text-align: center;">Size</th>
                                                <th style="text-align: center;">Opening</th>
                                                <th style="text-align: center;">Fresh Issue</th>
                                                <th style="text-align: center;">WIP</th>
                                                <th style="text-align: center;">Checked</th>
                                                <th style="text-align: center;">Pass</th>
                                                <th style="text-align: center;">Repair Return</th>
                                                <th style="text-align: center;">OutPut</th>
                                                <th style="text-align: center;">Balance</th>
                                                <th style="text-align: center; width: 10%;">RFT</th>
                                                <th style="text-align: center; width: 10%;">Swing RFT</th>
                                                <th style="text-align: center;">Total Worker</th>
                                                <th style="text-align: center;">SMV</th>

                                                <th style="text-align: center;">Mints</th>
                                                <th style="text-align: center;">Efficiency</th>
                                                <!-- <th style="text-align: center;">Change Over Downtime</th> -->
                                                <th style="text-align: center;"> Dowtime</th>

                                                <th style="text-align: center;">B Grade</th>
                                                <th style="text-align: center;">C Grade </th>
                                            </thead>
                                            <tr>
                                                <?php
                                                $OpenQty1 = 0;
                                                $FreshIssue1 = 0;
                                                $Pass1 = 0;
                                                $TotalChecked1 = 0;
                                                $RepairReturn1 = 0;
                                                $OtherDowntime1 = 0;
                                                $PresentWorkers1 = 0;
                                                $WIP1 = 0;
                                                $OutPut1 = 0;
                                                $Balance1 = 0;
                                                $DEFECTS1 = 0;
                                                $BGradeBall1 = 0;
                                                $CGradeBall1 = 0;
                                                $SwingPass1 = 0;

                                                foreach ($MSlinesandarticle as $PIorming1) {
                                                    $LineName = $PIorming1['LineName'];
                                                    $ArtCode = $PIorming1['ArtCode'];
                                                    $ArtSize = $PIorming1['ArtSize'];
                                                    $OpenQty = $PIorming1['OpeningQty'];
                                                    $FreshIssue = $PIorming1['FreshIssue'];
                                                    $Pass = $PIorming1['Pass'];
                                                    $TotalChecked = $PIorming1['TotalChecked'];
                                                    $RepairReturn = $PIorming1['RepairReturn'];
                                                    $OutPut = $Pass + $RepairReturn;

                                                    $OtherDowntime = $PIorming1['OtherDowntime'];
                                                    $SAMValue = $PIorming1['SAMValue'];
                                                    $PresentWorkers = $PIorming1['PresentWorkers'];

                                                    $WIP = $OpenQty + $FreshIssue;
                                                    $Balance = $OpenQty + $FreshIssue - $Pass - $RepairReturn;

                                                    $DEFECTS = $PIorming1['DEFECTS'];
                                                    $SwingPass = $TotalChecked - $DEFECTS;

                                                    if ($SwingPass == 0 or $TotalChecked == 0) {
                                                        $SwingRFT = 0;
                                                    } else {
                                                        $SwingRFT = ($SwingPass / $TotalChecked) * 100;
                                                    }

                                                    if ($Pass == 0 or $TotalChecked == 0) {
                                                        $RFT = 0;
                                                    } else {
                                                        $RFT = ($Pass / $TotalChecked) * 100;
                                                    }


                                                    $BGradeBall = $PIorming1['BGradeBall'];
                                                    $CGradeBall = $PIorming1['CGradeBall'];
                                                    foreach ($GetEfficiency as $Efficiency) {
                                                        $WorkingTime = $Efficiency['WorkingTime'];
                                                    }
                                                    if ($SAMValue == 0 or $OutPut == 0 or $PresentWorkers == 0 or $WorkingTime == 0) {
                                                        $Efficiency = 0;
                                                    } else {
                                                        $Efficiency = ($OutPut * $SAMValue) / ($PresentWorkers * $WorkingTime) * 100;
                                                    }
                                                ?>
                                                    <td style="text-align: left;"><?php echo $LineName; ?></td>

                                                    <td style="text-align: left;"><?php echo $ArtCode; ?></td>
                                                    <td style="text-align: left;"><?php echo $ArtSize; ?></td>

                                                    <td style="text-align: center;"><?php echo Round($OpenQty); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($FreshIssue); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($WIP); ?></td>
                                                    <td style="text-align: center;" class="CHKbg"><?php echo Round($TotalChecked); ?></td>
                                                    <td style="text-align: center;" class="Passbg"><?php echo Round($Pass); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($RepairReturn); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($OutPut); ?></td>
                                                    <td style="text-align: center;" class="blnce"><?php echo Round($Balance); ?></td>
                                                    <td style="text-align: center;" class="Rftbg"><?php echo Round($RFT, 2); ?>%</td>
                                                    <td style="text-align: center;" class="Rftbg"><?php echo Round($SwingRFT, 2); ?>%</td>
                                                    <td style="text-align: center;"><?php echo Round($PresentWorkers); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($SAMValue, 2); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($WorkingTime); ?></td>
                                                    <td style="text-align: center;" class="Eff"><?php echo Round($Efficiency, 2); ?>%</td>
                                                    <td style="text-align: center;"><?php echo Round($OtherDowntime); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($BGradeBall); ?></td>
                                                    <td style="text-align: center;"><?php echo Round($CGradeBall); ?></td>
                                            </tr>
                                        <?php
                                                    $OpenQty1 += $OpenQty;
                                                    $FreshIssue1 += $FreshIssue;
                                                    $Pass1 += $Pass;
                                                    $TotalChecked1 += $TotalChecked;
                                                    $RepairReturn1 += $RepairReturn;
                                                    $OtherDowntime1 += $OtherDowntime;
                                                    $PresentWorkers1 += $PresentWorkers;
                                                    $WIP1 = $FreshIssue1 + $OpenQty1;
                                                    $OutPut1 = $RepairReturn1 + $Pass1;
                                                    $Balance1 = $WIP1 - $OutPut1;
                                                    $DEFECTS1 += $DEFECTS;
                                                    $BGradeBall1 += $BGradeBall;
                                                    $CGradeBall1 += $CGradeBall1;
                                                    $SwingPass1 = $TotalChecked1 - $DEFECTS1;
                                                }
                                                if ($SwingPass1 == 0 or $TotalChecked1 == 0) {
                                                    $SwingRFT1 = 0;
                                                } else {
                                                    $SwingRFT1 = ($SwingPass1 / $TotalChecked1) * 100;
                                                }

                                                if ($Pass1 == 0 or $TotalChecked1 == 0) {
                                                    $RFT1 = 0;
                                                } else {
                                                    $RFT1 = ($Pass1 / $TotalChecked1) * 100;
                                                }
                                        ?>
                                        <tr style="background-color: #202020; color:#fff;">
                                            <td style="text-align: left;">Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="text-align: center;"><?php echo Round($OpenQty1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($FreshIssue1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($WIP1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($TotalChecked1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($Pass1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($RepairReturn1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($OutPut1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($Balance1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($RFT1, 2); ?>%</td>
                                            <td style="text-align: center;"><?php echo Round($SwingRFT1, 2); ?>%</td>
                                            <td style="text-align: center;"><?php echo Round($PresentWorkers1); ?></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><?php echo Round($OtherDowntime1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($BGradeBall1); ?></td>
                                            <td style="text-align: center;"><?php echo Round($CGradeBall1); ?></td>
                                        </tr>


                                        </tbody>
                                        </table>
                                <?php
                            }
                        }
                                ?>
                                    </div>

                                </div>
                            </div>



    </body>
    <?php
    $this->load->View('AdminFooter');
    ?>
    <script>
        $(document).ready(function() {
            //alert('heloo');
            $('#table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy',
                        {
                            extend: 'excel',
                            messageTop: 'The information in this table is Base in real Time Data'
                        },
                        {
                            extend: 'pdf',
                            messageBottom: null
                        },

                    ],
                    "ordering": false,
                    "pageLength": 10,
                    "searching": true,
                    "LengthChange": true,
                    "oLanguage": {
                        "sEmptyTable": "Data Is Not Available Yet!"
                    },


                }


            );


        });
    </script>
<?php
} else {
    redirect('Welcome/index');
}
?>