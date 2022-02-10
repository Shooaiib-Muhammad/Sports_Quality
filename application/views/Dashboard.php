<?php

if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?><script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "100%"
        }
    </script>

    <body onload="zoom()">

        <?php $this->load->view('includes/new_header'); ?>

        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <?php $this->load->view('includes/new_aside'); ?>
                <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <?php $this->load->view('includes/top_header.php'); ?>
                    <main id="js-page-content" role="main" class="page-content">
                        <!-- 
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> Dashboard</span>

                        </h1>
                    </div> -->

                        <style>
                            .highcharts-figure .chart-container {
                                width: 300px;
                                height: 50px;
                                /* display: flex; */
                            }

                            .highcharts-figure {
                                height: 250px;
                                display: flex;
                                flex-direction: column;
                                flex-wrap: wrap;
                            }

                            .highcharts-figure>* {
                                flex: 1 1 80px;
                            }

                            .highcharts-figurerft .chart-containerrft {
                                width: 900px;
                                height: 2500px;
                                /* display: flex; */
                            }

                            .highcharts-figurerft {
                                height: 450px;
                                display: flex;
                                flex-direction: column;
                                flex-wrap: wrap;
                            }

                            .highcharts-figure1 {
                                height: 250px;
                                display: flex;
                                flex-direction: column;
                                flex-wrap: wrap;
                            }

                            .highcharts-figure1 .chart-container1 {
                                width: 300px;
                                height: 50px;
                                /* display: flex; */
                            }

                            .highcharts-figure1 {
                                height: 250px;
                                display: flex;
                                flex-direction: column;
                                flex-wrap: wrap;
                            }

                            .highcharts-figure1>* {
                                flex: 1 1 80px;
                            }

                            .highcharts-figure2 .chart-container2 {
                                width: 300px;
                                height: 50px;
                                /* display: flex; */
                            }

                            .highcharts-figure2 {
                                height: 250px;
                                display: flex;
                                flex-direction: column;
                                flex-wrap: wrap;
                            }

                            .highcharts-figure2>* {
                                flex: 1 1 80px;
                            }

                            .highcharts-figure3 .chart-container3 {
                                width: 300px;
                                height: 50px;
                                /* display: flex; */
                            }

                            .highcharts-figure3 {
                                height: 250px;
                                display: flex;
                                flex-direction: column;
                                flex-wrap: wrap;
                            }

                            .highcharts-figure3>* {
                                flex: 1 1 80px;
                            }

                            .highcharts-figure4 .chart-container4 {
                                width: 300px;
                                height: 50px;
                                /* display: flex; */
                            }

                            .highcharts-figure4 {
                                height: 250px;
                                display: flex;
                                flex-direction: column;
                                flex-wrap: wrap;
                            }

                            .highcharts-figure4>* {
                                flex: 1 1 80px;
                            }
                        </style>
                        <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/data.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/drilldown.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/export-data.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/accessibility.js"></script>
                        <?php

                        $data_points1 = [];
                        $data_pointsRFT = [];
                        $data_pointsFail = [];
                        $b34001 = [];
                        $b34002 = [];
                        $b34003 = [];
                        $b34004 = [];
                        $b34005 = [];
                        $b34006 = [];
                        $b34007 = [];
                        $b34001RFT = [];
                        $b34002RFT = [];
                        $b34003RFT = [];
                        $b34004RFT = [];
                        $b34005RFT = [];
                        $b34006RFT = [];
                        $b34007RFT = [];
                        $b34001Fail = [];
                        $b34002Fail = [];
                        $b34003Fail = [];
                        $b34004Fail = [];
                        $b34005Fail = [];
                        $b34006Fail = [];
                        $b34007Fail = [];
                        $b34001Check = [];
                        $b34002Check = [];
                        $b34003Check = [];
                        $b34004Check = [];
                        $b34005Check = [];
                        $b34006Check = [];
                        $b34007Check = [];
                        $lastCheck = [];
                        $lastpass = [];
                        $lastfail = [];
                        $lastRFT = [];
                        $lastDefetpercentage = [];
                        //Print_r($last5dayProduction);
                        foreach ($last5dayProduction as $key) {
                            $Checklast = [
                                $key['TotalChecked'],
                            ];
                            array_push($lastCheck, $Checklast);
                            $passlast = [
                                $key['pass'],
                            ];
                            array_push($lastpass, $passlast);
                            $Faillast = [
                                $key['Fail'],
                            ];
                            array_push($lastfail, $Faillast);
                            $Check = $key['TotalChecked'];
                            $PassQtylast = $key['pass'];
                            $RFTlast = ($PassQtylast / $Check) * 100;
                            $lastRFTfinal = [
                                $RFTlast,
                            ];
                            array_push($lastRFT, $lastRFTfinal);
                            $Check = $key['TotalChecked'];
                            $Fail = $key['Fail'];
                            $DefectedBalls = $Check - $Fail;
                            $Defected = ($DefectedBalls / $Check) * 100;
                            $lastdefct = 100 - $Defected;
                            $defctlast = [

                                $lastdefct,
                            ];
                            array_push($lastDefetpercentage, $defctlast);
                        }


                        $last5pass = implode(',', array_column($lastpass, '0'));
                        $last5check = implode(',', array_column($lastCheck, '0'));
                        $last5fail = implode(',', array_column($lastfail, '0'));
                        $last5rft = implode(',', array_column($lastRFT, '0'));
                        $last5def = implode(',', array_column($lastDefetpercentage, '0'));


                        foreach ($FactoryWiseProduction as $key) {
                            $point1 = [
                                'name' => $key['FactoryCode'],
                                'y' => $key['pass'],
                                'drilldown' => $key['FactoryCode'],
                            ];
                            $Check = $key['TotalChecked'];
                            $PassQty = $key['pass'];
                            $RFT = ($PassQty / $Check) * 100;
                            $MainRFT = [

                                'name' => $key['FactoryCode'],
                                'y' => $RFT,
                                'drilldown' => $key['FactoryCode'],
                            ];
                            $pointFail = [
                                'name' => $key['FactoryCode'],
                                'y' => $key['Fail'],
                                'drilldown' => $key['FactoryCode'],
                            ];
                            array_push($data_points1, $point1);
                            array_push($data_pointsRFT, $MainRFT);
                            array_push($data_pointsFail, $pointFail);
                            $B34001target = Round($targets[0]['Target01'], 2);
                            $B34002target = Round($targets[0]['Target02'], 2);
                            $B34003target = Round($targets[0]['Target03'], 2);
                            $B34004target = Round($targets[0]['Target04'], 2);
                            $B34005target = Round($targets[0]['Target05'], 2);
                            $B34006target = Round($targets[0]['Target06'], 2);
                            $B34007target = Round($targets[0]['Target07'], 2);

                            if ($key['FactoryCode'] == 'B34001') {
                                array_push($b34001, $key['pass']);
                                array_push($b34001Check, $key['TotalChecked']);
                                array_push($b34001Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34001RFT, $key['RFT']);
                            }
                            if ($key['FactoryCode'] == 'B34002') {
                                array_push($b34002, $key['pass']);
                                array_push($b34002Check, $key['TotalChecked']);
                                array_push($b34002Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34002RFT, $key['RFT']);
                            }
                            if ($key['FactoryCode'] == 'B34003') {
                                array_push($b34003, $key['pass']);
                                array_push($b34003Check, $key['TotalChecked']);
                                array_push($b34003Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34003RFT, $RFT);
                            }
                            if ($key['FactoryCode'] == 'B34004') {
                                array_push($b34004, $key['pass']);
                                array_push($b34004Check, $key['TotalChecked']);
                                array_push($b34004Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34004RFT, $RFT);
                            }
                            if ($key['FactoryCode'] == 'B34005') {
                                array_push($b34005, $key['pass']);
                                array_push($b34005Check, $key['TotalChecked']);
                                array_push($b34005Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34005RFT, $RFT);
                            }
                            if ($key['FactoryCode'] == 'B34006') {
                                array_push($b34006, $key['pass']);
                                array_push($b34006Check, $key['TotalChecked']);
                                array_push($b34006Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34006RFT, $RFT);
                            }
                            if ($key['FactoryCode'] == 'B34007') {
                                array_push($b34007, $key['pass']);
                                array_push($b34007Check, $key['TotalChecked']);
                                array_push($b34007Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34007RFT, $RFT);
                            }
                            // $Achieved1 = Round($FactoryWiseProduction[0]['pass'], 2);
                            // $Achieved2 = Round($targets[0]['Target02'], 2);
                            // $B34003target = Round($targets[0]['Target03'], 2);
                            // $B34004target = Round($targets[0]['Target04'], 2);
                            // $B34005target = Round($targets[0]['Target05'], 2);
                            // $B34006target = Round($targets[0]['Target06'], 2);
                            // $Achieved7 = Round($FactoryWiseProduction[3]['pass'], 2);

                        }
                        $Sum01 = $b34001 ? $b34001[0] : 0;
                        $Sum02 = $b34002 ? $b34002[0] : 0;
                        $Sum03 = $b34003 ? $b34003[0] : 0;
                        $Sum04 = $b34004 ? $b34004[0] : 0;
                        $Sum05 = $b34005 ? $b34005[0] : 0;
                        $Sum06 = $b34006 ? $b34006[0] : 0;
                        $Sum07 = $b34007 ? $b34007[0] : 0;
                        $Produced = $Sum01 + $Sum02 + $Sum03 + $Sum04 + $Sum05 + $Sum06 + $Sum07;

                        $SumCheck01 = $b34001Check ? $b34001Check[0] : 0;
                        $SumCheck02 = $b34002Check ? $b34002Check[0] : 0;
                        $SumCheck03 = $b34003Check ? $b34003Check[0] : 0;
                        $SumCheck04 = $b34004Check ? $b34004Check[0] : 0;
                        $SumCheck05 = $b34005Check ? $b34005Check[0] : 0;
                        $SumCheck06 = $b34006Check ? $b34006Check[0] : 0;
                        $SumCheck07 = $b34007Check ? $b34007Check[0] : 0;
                        $Checked = $SumCheck01 + $SumCheck02 + $SumCheck03 + $SumCheck04 + $SumCheck05 + $SumCheck06 + $SumCheck07;
                        $b34001RFTMain = $b34001RFT ? $b34001RFT[0] : 0;
                        $b34002RFTMain = $b34002RFT ? $b34002RFT[0] : 0;
                        $b34003RFTMain = $b34003RFT ? $b34003RFT[0] : 0;
                        $b34004RFTMain = $b34004RFT ? $b34004RFT[0] : 0;
                        $b34005RFTMain = $b34005RFT ? $b34005RFT[0] : 0;
                        $b34006RFTMain = $b34006RFT ? $b34006RFT[0] : 0;
                        $b34007RFTMain = $b34007RFT ? $b34007RFT[0] : 0;
                        $ProducedRFT = ($b34001RFTMain + $b34002RFTMain + $b34003RFTMain + $b34004RFTMain + $b34005RFTMain + $b34006RFTMain + $b34007RFTMain) / 4;
                        // $SumFail01 = $b34001Fail ? $b34001Fail[0] : 0;
                        // $SumFail02 = $b34002Fail ? $b34002Fail[0] : 0;
                        // $SumFail03 = $b34003Fail ? $b34003Fail[0] : 0;
                        // $SumFail04 = $b34004Fail ? $b34004Fail[0] : 0;
                        // $SumFail05 = $b34005Fail ? $b34005Fail[0] : 0;
                        // $SumFail06 = $b34006Fail ? $b34006Fail[0] : 0;
                        // $SumFail07 = $b34007Fail ? $b34007Fail[0] : 0;
                        $Fail = $Checked - $Produced;
                        // echo '<pre>';
                        // print_r($Produced);
                        // echo '</pre>';

                        $RFTTop = $Produced - $Fail;

                        $RFT = ($RFTTop / $Produced);
                        $FinalRF = ($RFT * 100);

                        $Precentage = (($Checked - $Fail) / $Checked) * 100;
                        $Finalprenentage = 100 - $Precentage;
                        $B34001data_points2 = [];
                        $graph001 = [];
                        $graph001RFT = [];
                        $B34001ArtRFT = [];
                        $B34002ArtRFT = [];
                        $B34003ArtRFT = [];
                        $B34004ArtRFT = [];
                        $B34005ArtRFT = [];
                        $B34006ArtRFT = [];
                        $B34007ArtRFT = [];
                        $B34001ArtFail = [];
                        $B34002ArtFail = [];
                        $B34003ArtFail = [];
                        $B34004ArtFail = [];
                        $B34005ArtFail = [];
                        $B34006ArtFail = [];
                        $B34007ArtFail = [];
                        foreach ($CodeB34001 as $key) {

                            $pointB43001 = [
                                $key['ArtCode'],
                                Round($key['PassQty']),
                            ];

                            array_push($B34001data_points2, $pointB43001);
                            $Data001 = [
                                $key['ArtCode'],
                                $key['PassQty'],
                            ];
                            //array_push($B34001data_points2, $pointB43001);

                            array_push($graph001, $Data001);


                            $Check = $key['TotalChecked'];
                            $PassQty = $key['pass'];
                            $RFT001 = ($PassQty / $Check) * 100;
                            $MainRFT01 = [

                                $key['ArtCode'],
                                $RFT001,
                            ];
                            array_push($B34001ArtRFT, $MainRFT01);
                            $MainFail01 = [

                                $key['ArtCode'],
                                $key['Fail'],
                            ];
                            array_push($B34001ArtFail, $MainFail01);
                        }


                        $B34002data_points2 = [];
                        foreach ($CodeB34002 as $key) {

                            $pointB43002 = [
                                $key['ArtCode'],
                                Round($key['pass']),
                            ];
                            array_push($B34002data_points2, $pointB43002);
                            $Check = $key['TotalChecked'];
                            $PassQty = $key['pass'];
                            $RFT002 = ($PassQty / $Check) * 100;
                            $MainRFT02 = [

                                $key['ArtCode'],
                                $RFT002,
                            ];
                            array_push($B34002ArtRFT, $MainRFT02);
                            $MainFail02 = [

                                $key['ArtCode'],
                                $key['Fail'],
                            ];
                            array_push($B34002ArtFail, $MainFail02);
                        }
                        $B34003data_points2 = [];
                        foreach ($CodeB34003 as $key) {

                            $pointB43003 = [
                                $key['ArtCode'],
                                Round($key['pass']),
                            ];
                            array_push($B34003data_points2, $pointB43003);
                            $Check = $key['TotalChecked'];
                            $PassQty = $key['pass'];
                            $RFT003 = ($PassQty / $Check) * 100;
                            $MainRFT03 = [

                                $key['ArtCode'],
                                $RFT003,
                            ];
                            array_push($B34003ArtRFT, $MainRFT03);
                            $MainFail03 = [

                                $key['ArtCode'],
                                $key['Fail'],
                            ];
                            array_push($B34003ArtFail, $MainFail03);
                        }
                        $B34004data_points2 = [];
                        foreach ($CodeB34004 as $key) {

                            $pointB43004 = [
                                $key['ArtCode'],
                                Round($key['pass']),
                            ];
                            array_push($B34007data_points4, $pointB43004);

                            $Check = $key['TotalChecked'];
                            $PassQty = $key['pass'];
                            $RFT004 = ($PassQty / $Check) * 100;
                            $MainRFT04 = [

                                $key['ArtCode'],
                                $RFT004,
                            ];
                            array_push($B34004ArtRFT, $MainRFT04);
                            $MainFail04 = [

                                $key['ArtCode'],
                                $key['Fail'],
                            ];
                            array_push($B34004ArtFail, $MainFail04);
                        }
                        $B34005data_points2 = [];
                        foreach ($CodeB34005 as $key) {

                            $pointB43005 = [
                                $key['ArtCode'],
                                Round($key['Pass']),
                            ];
                            array_push($B34005data_points2, $pointB43005);
                            $Check = $key['TotalChecked'];
                            $PassQty = $key['Pass'];
                            $RFT005 = ($PassQty / $Check) * 100;
                            $MainRFT05 = [

                                $key['ArtCode'],
                                $RFT005,
                            ];
                            array_push($B34005ArtRFT, $MainRFT05);
                            $MainFail05 = [

                                $key['ArtCode'],
                                $key['Fail'],
                            ];
                            array_push($B34005ArtFail, $MainFail05);
                        }
                        $B34006data_points2 = [];
                        foreach ($CodeB34006 as $key) {

                            $pointB43006 = [
                                $key['ArtCode'],
                                Round($key['Pass']),
                            ];
                            array_push($B34006data_points2, $pointB43006);
                            $Check = $key['TotalChecked'];
                            $PassQty = $key['Pass'];
                            $RFT006 = ($PassQty / $Check) * 100;
                            $MainRFT06 = [

                                $key['ArtCode'],
                                $RFT006,
                            ];
                            array_push($B34006ArtRFT, $MainRFT06);
                            $MainFail06 = [

                                $key['ArtCode'],
                                $key['Fail'],
                            ];
                            array_push($B34006ArtFail, $MainFail06);
                        }

                        $B34007data_points2 = [];
                        foreach ($CodeB34007 as $key) {

                            $pointB43007 = [
                                $key['ArtCode'],
                                Round($key['TotalPass']),
                            ];
                            array_push($B34007data_points2, $pointB43007);
                            $Check = $key['TotalChecked'];
                            $PassQty = $key['TotalPass'];
                            $RFT007 = ($PassQty / $Check) * 100;
                            $MainRFT07 = [

                                $key['ArtCode'],
                                $RFT007,
                            ];
                            array_push($B34007ArtRFT, $MainRFT07);
                            $MainFail07 = [

                                $key['ArtCode'],
                                $key['Fail'],
                            ];
                            array_push($B34007ArtFail, $MainFail07);
                        }
                        ?>
                        <div class="row">
                            <div id="panel-3" class="panel">

                                <div class="panel-container show">

                                    <div class="panel-content nav nav-pills justify-content-center">

                                        <!-- <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item btn btn-success"><a class="nav-link active" data-toggle="tab" href="#tab_direction-1" role="tab">Production</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-2" role="tab">RFT</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-3" role="tab">Defects</a></li>
                                        </ul> -->
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_direction-1">Production</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-2">RFT</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-3">Defects</a></li>
                                        </ul>
                                        <div class="tab-content py-3">

                                            <div class="tab-pane fade show active" id="tab_direction-1" role="tabpanel">
                                                <div class="col-lg-12">
                                                    <div class="panel-container show">
                                                        <div class="panel-content poisition-relative">
                                                            <div class="pb-5 pt-3">
                                                                <div class="row">
                                                                    <div class="col-lg-2">
                                                                        <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3 mb-12">
                                                                            <div class="d-inline-flex flex-column justify-content-center">
                                                                                <span class="fw-300 fs-xs d-block">
                                                                                    <label class="fs-lg mb-3">Total Manufactured</label>
                                                                                </span>
                                                                                <span class="fw-500 fs-xl d-block color-danger-500 count">
                                                                                    <h1> <?php echo $Produced; ?></h1>
                                                                                </span>
                                                                            </div>
                                                                            <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#cff02b" sparkHeight="32px" sparkBarWidth="5px" values=" <?php echo $last5pass; ?>"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3 mb-12">
                                                                            <div class="d-inline-flex flex-column justify-content-center mr-3">
                                                                                <span class="fw-300 fs-xs d-block">
                                                                                    <label class="fs-lg mb-3">Total Checked</label>
                                                                                </span>
                                                                                <span class="fw-500 fs-xl d-block color-danger-500 count">
                                                                                    <h1><?php echo $Checked; ?></h1>
                                                                                </span>
                                                                            </div>
                                                                            <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#fc8c03" sparkHeight="32px" sparkBarWidth="5px" values="<?php echo $last5check; ?>"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                                                                            <div class="d-inline-flex flex-column justify-content-center mr-3">
                                                                                <span class="fw-300 fs-xs d-block">
                                                                                    <label class="fs-lg mb-3">Total Pass</label>
                                                                                </span>
                                                                                <span class="fw-500 fs-xl d-block color-danger-500 count">
                                                                                    <h1> <?php echo $Produced; ?></h1>
                                                                                </span>
                                                                            </div>
                                                                            <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#03fce3" sparkHeight="32px" sparkBarWidth="5px" values="<?php echo $last5pass; ?>"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                                                                            <div class="d-inline-flex flex-column justify-content-center mr-3">
                                                                                <span class="fw-300 fs-xs d-block">
                                                                                    <label class="fs-lg mb-3">Total Fail</label>
                                                                                </span>
                                                                                <span class="fw-500 fs-xl d-block color-danger-500 count">
                                                                                    <h1> <?php echo $Fail; ?></h1>
                                                                                </span>
                                                                            </div>
                                                                            <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#fe6bb0" sparkHeight="32px" sparkBarWidth="5px" values="<?php echo $last5fail; ?>"></span>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                                                                            <div class="d-inline-flex flex-column justify-content-center mr-3">
                                                                                <span class="fw-300 fs-xs d-block">
                                                                                    <label class="fs-lg mb-3">Avg. RFT</label>
                                                                                </span>
                                                                                <span class="fw-500 fs-xl d-block color-danger-500 ">
                                                                                    <h1> <i class="count"> <?php echo Round($FinalRF, 2) ?> </i> %</h1>
                                                                                </span>
                                                                            </div>
                                                                            <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#03cafc" sparkHeight="32px" sparkBarWidth="5px" values="<?php echo $last5rft; ?>"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                                                                            <div class="d-inline-flex flex-column justify-content-center mr-3">
                                                                                <span class="fw-300 fs-xs d-block">
                                                                                    <label class="fs-lg mb-3">Defected Precentage </label>
                                                                                </span>
                                                                                <span class="fw-300 fs-xl d-block color-danger-500">
                                                                                    <h1> <i class="count"><?php echo Round($Finalprenentage, 2); ?></i> % </h1>
                                                                                </span>
                                                                            </div>
                                                                            <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#c203fc" sparkHeight="32px" sparkBarWidth="5px" values="<?php echo $last5def; ?>"></span>
                                                                        </div>
                                                                    </div>









                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <center>
                                                    <div class="row">
                                                        <figure class="highcharts-figure">
                                                            <div id="container-speed0" class="chart-container"></div>

                                                        </figure>
                                                        <figure class="highcharts-figure">
                                                            <div id="container-speed" class="chart-container"></div>

                                                        </figure>
                                                        <figure class="highcharts-figure1">
                                                            <div id="container-speed1" class="chart-container1"></div>



                                                        </figure>
                                                        <figure class="highcharts-figure2">
                                                            <div id="container-speed2" class="chart-container2"></div>



                                                        </figure>
                                                        <figure class="highcharts-figure3">
                                                            <div id="container-speed3" class="chart-container3"></div>



                                                        </figure>
                                                        <figure class="highcharts-figure4">
                                                            <div id="container-speed4" class="chart-container4"></div>



                                                        </figure>
                                                        <figure class="highcharts-figure4">
                                                            <div id="container-speed5" class="chart-container4"></div>



                                                        </figure>
                                                    </div>
                                                </center>
                                                <br>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-4 ml-10">
                                                        <!-- <h1 class="frame-heading">Filter Criteria :</h1> -->

                                                        <div class="frame-wrap">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample1" checked="">
                                                                <label class="custom-control-label" for="defaultInline1Radio">1D</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample1">
                                                                <label class="custom-control-label" for="defaultInline2Radio">7D</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" id="defaultInline3Radio" name="inlineDefaultRadiosExample1">
                                                                <label class="custom-control-label" for="defaultInline3Radio">1M</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample1">
                                                                <label class="custom-control-label" for="defaultInline4Radio">IY</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" id="DailyGraph">
                                                        <div id="AllPrd"></div>
                                                    </div>
                                                    <div class="col-md-12" id="weeklygraph">
                                                        <div id="container1"></div>
                                                    </div>
                                                    <div class="col-md-12" id="monthlygraph">
                                                        <div id="monthlydata"></div>
                                                    </div>
                                                    <div class="col-md-12" id="Yearlygraph">
                                                        <div id="yearlydata"></div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div id="msprd"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="ambprd"></div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div id="hsprd"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="tmprd"></div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div id="lfbprd"></div>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="row ml-10">

                                                            <!-- <h1 class="frame-heading">Filter Criteria :</h1> -->

                                                            <div class="frame-wrap">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline5Radio" name="inlineDefaultRadiosExample2" checked="">
                                                                    <label class="custom-control-label" for="defaultInline5Radio">1D</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline6Radio" name="inlineDefaultRadiosExample2">
                                                                    <label class="custom-control-label" for="defaultInline6Radio">7D</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline7Radio" name="inlineDefaultRadiosExample2">
                                                                    <label class="custom-control-label" for="defaultInline7Radio">1M</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline8Radio" name="inlineDefaultRadiosExample2">
                                                                    <label class="custom-control-label" for="defaultInline8Radio">1Y</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div id="AllPrdrft"></div>
                                                        <div id="weeklyrft"></div>
                                                        <div id="monthlyrft"></div>
                                                        <div id="yearlyrft"></div>
                                                    </div>
                                                    <figure class="highcharts-figurerft">
                                                        <div id="container-speedrft" class="chart-containerrft"></div>

                                                    </figure>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div id="hsprdrft"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="tmprdrft"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="msprdrft"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="ambprdrft"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="lfbprdrft"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_direction-3" role="tabpanel">

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="row">

                                                            <!-- <h1 class="frame-heading">Filter Criteria :</h1> -->
                                                            <br>
                                                            <div class="frame-wrap">
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline9Radio" name="inlineDefaultRadiosExample3" checked="">
                                                                    <label class="custom-control-label" for="defaultInline9Radio">1D</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline10Radio" name="inlineDefaultRadiosExample3">
                                                                    <label class="custom-control-label" for="defaultInline10Radio">7D</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline11Radio" name="inlineDefaultRadiosExample3">
                                                                    <label class="custom-control-label" for="defaultInline11Radio">1M</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" class="custom-control-input" id="defaultInline12Radio" name="inlineDefaultRadiosExample3">
                                                                    <label class="custom-control-label" for="defaultInline12Radio">1Y</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div id="AllPrddef"></div>
                                                        <div id="weeklydef"></div>
                                                        <div id="monthlydef"></div>
                                                        <div id="yearlydef"></div>

                                                    </div>
                                                    <figure class="highcharts-figurerft">
                                                        <div id="container-speeddef" class="chart-containerrft"></div>

                                                    </figure>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="hsprddef"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="tmprddef"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="msprddef"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="ambprddef"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="lfbprddef"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                </div>
            </div>

            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/highcharts-more.js"></script>
            <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <?php
            $Datess = [];
            $WEEKLYRFT001 = [];
            $WEEKLYRFT002 = [];
            $WEEKLYRFT003 = [];
            $WEEKLYRFT004 = [];
            $WEEKLYRFT005 = [];
            $WEEKLYRFT006 = [];
            $WEEKLYRFT007 = [];

            $WEEKLY001 = [];
            $WEEKLY002 = [];
            $WEEKLY003 = [];
            $WEEKLY004 = [];
            $WEEKLY005 = [];
            $WEEKLY006 = [];
            $WEEKLY007 = [];
            $WEEKLYDefects001 = [];
            $WEEKLYDefects002 = [];
            $WEEKLYDefects003 = [];
            $WEEKLYDefects004 = [];
            $WEEKLYDefects005 = [];
            $WEEKLYDefects006 = [];
            $WEEKLYDefects007 = [];
            $MonthlyDefects001 = [];
            $MonthlyDefects002 = [];
            $MonthlyDefects003 = [];
            $MonthlyDefects004 = [];
            $MonthlyDefects005 = [];
            $MonthlyDefects006 = [];
            $MonthlyDefects007 = [];
            $YearlyDefects001 = [];
            $YearlyDefects002 = [];
            $YearlyDefects003 = [];
            $YearlyDefects004 = [];
            $YearlyDefects005 = [];
            $YearlyDefects006 = [];
            $YearlyDefects007 = [];
            $Yearfinal = [];

            foreach ($Year as $key) {
                $Year = $key['Year'];
                $Month = $key['Month'];
                array_push($Yearfinal, $Month . '.' . $Year);
                //print_r('Updated');

            }
            // print_r($weekDate);
            foreach ($weekDate as $key) {

                array_push($Datess, $key['TranDate']);
                //print_r('Updated');

            }

            //         echo '<pre>';
            //         print_r($Datess);
            // echo '</pre>';
            foreach ($getweeklydata as $key) {
                if ($key['FactoryCode'] == 'B34001') {
                    array_push($WEEKLY001, $key['pass']);
                    array_push($WEEKLYDefects001, $key['Fail']);
                    $Weekly1RFT = $key['pass'] / $key['TotalChecked'];
                    $WeeklyFinalRFT =  ($Weekly1RFT * 100);
                    array_push($WEEKLYRFT001, Round($WeeklyFinalRFT, 2));
                }
            }
            foreach ($getweeklydata as $key) {
                if ($key['FactoryCode'] == 'B34002') {
                    array_push($WEEKLY002, $key['pass']);
                    array_push($WEEKLYDefects002, $key['Fail']);
                    $Weekly2RFT =
                        $key['pass'] / $key['TotalChecked'];
                    $WeeklyFinal2RFT =  ($Weekly2RFT * 100);
                    array_push($WEEKLYRFT002, Round($WeeklyFinal2RFT, 2));
                }
            }
            foreach ($getweeklydata as $key) {
                if ($key['FactoryCode'] == 'B34003') {
                    array_push($WEEKLY003, $key['pass']);
                    array_push($WEEKLYDefects003, $key['Fail']);
                    $Weekly3RFT = $key['pass'] / $key['TotalChecked'];
                    $WeeklyFinal3RFT =  ($Weekly3RFT * 100);
                    array_push($WEEKLYRFT003, Round($WeeklyFinal3RFT, 2));
                }
            }
            foreach ($getweeklydata as $key) {
                if ($key['FactoryCode'] == 'B34004') {
                    array_push($WEEKLY004, $key['pass']);
                    array_push($WEEKLYDefects004, $key['Fail']);
                    $Weekly4RFT = $key['pass'] / $key['TotalChecked'];
                    $WeeklyFinal4RFT =  ($Weekly4RFT * 100);
                    array_push($WEEKLYRFT004, Round($WeeklyFinal4RFT, 2));
                }
            }
            foreach ($getweeklydata as $key) {
                if ($key['FactoryCode'] == 'B34005') {
                    array_push($WEEKLY005, $key['pass']);
                    array_push($WEEKLYDefects005, $key['Fail']);
                    $Weekly5RFT = $key['pass'] / $key['TotalChecked'];
                    $WeeklyFinal5RFT =  ($Weekly5RFT * 100);
                    array_push($WEEKLYRFT005, Round($WeeklyFinal5RFT, 2));

                    //array_push($, $key['pass']);
                    //print_r('Updated');
                }
            }
            foreach ($getweeklydata as $key) {
                if ($key['FactoryCode'] == 'B34006') {
                    array_push($WEEKLY006, $key['pass']);
                    array_push($WEEKLYDefects006, $key['Fail']);
                    $Weekly6RFT = $key['pass'] / $key['TotalChecked'];
                    $WeeklyFinal6RFT =  ($Weekly6RFT * 100);
                    array_push($WEEKLYRFT006, Round($WeeklyFinal6RFT, 2));
                }
            }
            foreach ($getweeklydata as $key) {
                if ($key['FactoryCode'] == 'B34007') {
                    array_push($WEEKLY007, $key['pass']);
                    array_push($WEEKLYDefects007, $key['Fail']);
                    $Weekly7RFT = $key['pass'] / $key['TotalChecked'];
                    $WeeklyFinal7RFT =  ($Weekly7RFT * 100);
                    array_push($WEEKLYRFT007, Round($WeeklyFinal7RFT, 2));
                }
            }
            $MonthlyRFT001 = [];
            $MonthlyRFT002 = [];
            $MonthlyRFT003 = [];
            $MonthlyRFT004 = [];
            $MonthlyRFT005 = [];
            $MonthlyRFT006 = [];
            $MonthlyRFT007 = [];


            $YearlyRFTRFT001 = [];
            $YearlyRFTRFT002 = [];
            $YearlyRFTRFT003 = [];
            $YearlyRFTRFT004 = [];
            $YearlyRFTRFT005 = [];
            $YearlyRFTRFT006 = [];
            $YearlyRFTRFT007 = [];

            $MONTHLY001 = [];
            $MONTHLY002 = [];
            $MONTHLY003 = [];
            $MONTHLY004 = [];
            $MONTHLY005 = [];
            $MONTHLY006 = [];
            $MONTHLY007 = [];
            $Datess = [];
            $WeekDatefinal = [];
            $monthlydateFinal = [];
            foreach ($weekDate as $key) {

                array_push($WeekDatefinal, $key['TranDate']);
                //print_r('Updated');

            }
            foreach ($monthlydate as $key) {

                array_push($monthlydateFinal, $key['TranDate']);
                //print_r('Updated');

            }
            foreach ($getmonthly as $key) {
                if ($key['FactoryCode'] == 'B34001') {
                    array_push($MONTHLY001, $key['pass']);
                    array_push($MonthlyDefects001, $key['Fail']);

                    $Monthly1RFT = $key['pass'] / $key['TotalChecked'];
                    $MonthlyFinalRFT =  ($Monthly1RFT * 100);
                    array_push($MonthlyRFT001, Round($MonthlyFinalRFT, 2));
                    //print_r('Updated');
                }
            }
            foreach ($getmonthly as $key) {
                if ($key['FactoryCode'] == 'B34002') {
                    array_push($MONTHLY002, $key['pass']);
                    array_push($MonthlyDefects002, $key['Fail']);
                    $Monthly2RFT = $key['pass'] / $key['TotalChecked'];
                    $MonthlyFinal2RFT =  ($Monthly2RFT * 100);
                    array_push($MonthlyRFT002, Round($MonthlyFinal2RFT, 2));
                }
            }
            foreach ($getmonthly as $key) {
                if ($key['FactoryCode'] == 'B34003') {
                    array_push($MONTHLY003, $key['pass']);
                    array_push($MonthlyDefects003, $key['Fail']);
                    $Monthly3RFT = $key['pass'] / $key['TotalChecked'];
                    $MonthlyFinal3RFT =  ($Monthly3RFT * 100);
                    array_push($MonthlyRFT003, Round($MonthlyFinal3RFT, 2));
                }
            }
            foreach ($getmonthly as $key) {
                if ($key['FactoryCode'] == 'B34004') {
                    array_push($MONTHLY004, $key['pass']);
                    array_push($MonthlyDefects004, $key['Fail']);
                    $Monthly4RFT = $key['pass'] / $key['TotalChecked'];
                    $MonthlyFinal4RFT =  ($Monthly4RFT * 100);
                    array_push($MonthlyRFT004, Round($MonthlyFinal4RFT, 2));
                }
            }
            foreach ($getmonthly as $key) {
                if ($key['FactoryCode'] == 'B34005') {
                    array_push($MONTHLY005, $key['pass']);
                    array_push($MonthlyDefects005, $key['Fail']);
                    $Monthly5RFT = $key['pass'] / $key['TotalChecked'];
                    $MonthlyFinal5RFT =  ($Monthly5RFT * 100);
                    array_push($MonthlyRFT005, Round($MonthlyFinal5RFT, 2));
                    //print_r('Updated');
                }
            }
            foreach ($getmonthly as $key) {
                if ($key['FactoryCode'] == 'B34006') {
                    array_push($MONTHLY006, $key['pass']);
                    array_push($MonthlyDefects006, $key['Fail']);
                    $Monthly6RFT = $key['pass'] / $key['TotalChecked'];
                    $MonthlyFinal6RFT =  ($Monthly6RFT * 100);
                    array_push($MonthlyRFT006, Round($MonthlyFinal6RFT, 2));
                }
            }
            foreach ($getmonthly as $key) {
                if ($key['FactoryCode'] == 'B34007') {
                    array_push($MONTHLY007, $key['pass']);
                    array_push($MonthlyDefects007, $key['Fail']);
                    $Monthly7RFT = $key['pass'] / $key['TotalChecked'];
                    $MonthlyFinal7RFT =  ($Monthly7RFT * 100);
                    array_push($MonthlyRFT007, Round($MonthlyFinal7RFT, 2));
                }
            }

            $Yearly001 = [];
            $Yearly002 = [];
            $Yearly003 = [];
            $Yearly004 = [];
            $Yearly005 = [];
            $Yearly006 = [];
            $Yearly007 = [];
            $Yearly = [];
            $Datess = [];
            foreach ($getYearly as $key) {
                $Month =  $key['Month'];
                $Year =  $key['Year'];

                array_push($Yearly, $Month . '-' . $Year);
                //print_r('Updated');

            }
            foreach ($getYearly as $key) {
                if ($key['FactoryCode'] == 'B34001') {
                    array_push($Yearly001, $key['pass']);
                    array_push($YearlyDefects001, $key['Fail']);
                    $YearlyRFT1RFT = $key['pass'] / $key['TotalChecked'];
                    $YearlyRFTFinalRFT =  ($YearlyRFT1RFT * 100);
                    array_push($YearlyRFTRFT001, Round($YearlyRFTFinalRFT, 2));
                    //print_r('Updated');
                }
            }
            foreach ($getYearly as $key) {
                if ($key['FactoryCode'] == 'B34002') {
                    array_push($Yearly002, $key['pass']);
                    array_push($YearlyDefects002, $key['Fail']);
                    $YearlyRFT2RFT = $key['pass'] / $key['TotalChecked'];
                    $YearlyRFTFinal2RFT =  ($YearlyRFT2RFT * 100);
                    array_push($YearlyRFTRFT002, Round($YearlyRFTFinal2RFT, 2));
                }
            }
            foreach ($getYearly as $key) {
                if ($key['FactoryCode'] == 'B34003') {
                    array_push($Yearly003, $key['pass']);
                    array_push($YearlyDefects003, $key['Fail']);
                    $YearlyRFT3RFT = $key['pass'] / $key['TotalChecked'];
                    $YearlyRFTFinal3RFT =  ($YearlyRFT3RFT * 100);
                    array_push($YearlyRFTRFT003, Round($YearlyRFTFinal3RFT, 2));
                }
            }
            foreach ($getYearly as $key) {
                if ($key['FactoryCode'] == 'B34004') {
                    array_push($Yearly004, $key['pass']);

                    array_push($YearlyDefects004, $key['Fail']);
                    $YearlyRFT4RFT = $key['pass'] / $key['TotalChecked'];
                    $YearlyRFTFinal4RFT =  ($YearlyRFT4RFT * 100);
                    array_push($YearlyRFTRFT004, Round($YearlyRFTFinal4RFT, 2));
                }
            }
            foreach ($getYearly as $key) {
                if ($key['FactoryCode'] == 'B34005') {
                    array_push($Yearly005, $key['pass']);
                    array_push($YearlyDefects005, $key['Fail']);
                    $YearlyRFT5RFT = $key['pass'] / $key['TotalChecked'];
                    $YearlyRFTFinal5RFT =  ($YearlyRFT5RFT * 100);
                    array_push($YearlyRFTRFT005, Round($YearlyRFTFinal5RFT, 2));
                    //print_r('Updated');
                }
            }
            foreach ($getYearly as $key) {
                if ($key['FactoryCode'] == 'B34006') {
                    array_push($Yearly006, $key['pass']);
                    array_push($YearlyDefects006, $key['Fail']);
                    $YearlyRFT6RFT = $key['pass'] / $key['TotalChecked'];
                    $YearlyRFTFinal6RFT =  ($YearlyRFT6RFT * 100);
                    array_push($YearlyRFTRFT006, Round($YearlyRFTFinal6RFT, 2));
                }
            }
            foreach ($getYearly as $key) {
                if ($key['FactoryCode'] == 'B34007') {
                    array_push($Yearly007, $key['pass']);
                    array_push($YearlyDefects007, $key['Fail']);


                    $YearlyRFT7RFT = $key['pass'] / $key['TotalChecked'];
                    $YearlyRFTFinal7RFT =  ($YearlyRFT7RFT * 100);
                    array_push($YearlyRFTRFT007, Round($YearlyRFTFinal7RFT, 2));
                }
            }


            ?>
            <script>
                Highcharts.chart('weeklyrft', {

                    title: {
                        text: 'Weekly RFT'
                    },



                    yAxis: {
                        title: {
                            text: 'RFT %'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($WeekDatefinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($WEEKLYRFT001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($WEEKLYRFT002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($WEEKLYRFT003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($WEEKLYRFT004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($WEEKLYRFT005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($WEEKLYRFT006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($WEEKLYRFT007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                Highcharts.chart('monthlyrft', {

                    title: {
                        text: 'Monthly RFT'
                    },



                    yAxis: {
                        title: {
                            text: 'RFT %'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($monthlydateFinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($MonthlyRFT001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($MonthlyRFT002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($MonthlyRFT003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($MonthlyRFT004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($MonthlyRFT005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($MonthlyRFT006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($MonthlyRFT007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                Highcharts.chart('yearlyrft', {

                    title: {
                        text: 'Monthly RFT'
                    },



                    yAxis: {
                        title: {
                            text: 'RFT %'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($Yearfinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($YearlyRFTRFT001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($YearlyRFTRFT002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($YearlyRFTRFT003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($YearlyRFTRFT004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($YearlyRFTRFT005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($YearlyRFTRFT006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($YearlyRFTRFT007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                Highcharts.chart('weeklydef', {

                    title: {
                        text: 'Weekly Defectes'
                    },



                    yAxis: {
                        title: {
                            text: 'Defects'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($WeekDatefinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($WEEKLYDefects001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($WEEKLYDefects002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($WEEKLYDefects003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($WEEKLYDefects004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($WEEKLYDefects005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($WEEKLYDefects006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($WEEKLYDefects007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                Highcharts.chart('monthlydef', {

                    title: {
                        text: 'Monthly Defects'
                    },



                    yAxis: {
                        title: {
                            text: 'Defects'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($monthlydateFinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($MonthlyDefects001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($MonthlyDefects002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($MonthlyDefects003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($MonthlyDefects004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($MonthlyDefects005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($MonthlyDefects006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($MonthlyDefects007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                Highcharts.chart('yearlydef', {

                    title: {
                        text: 'Yearly Defects'
                    },



                    yAxis: {
                        title: {
                            text: 'Defects'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($Yearfinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($YearlyDefects001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($YearlyDefects002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($YearlyDefects003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($YearlyDefects004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($YearlyDefects005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($YearlyDefects006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($YearlyDefects007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                Highcharts.chart('monthlydata', {

                    title: {
                        text: 'Monthly Production'
                    },



                    yAxis: {
                        title: {
                            text: 'Number of Balls'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($monthlydateFinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($MONTHLY001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($MONTHLY002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($MONTHLY003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($MONTHLY004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($MONTHLY005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($MONTHLY006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($MONTHLY007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });


                Highcharts.chart('yearlydata', {

                    title: {
                        text: 'Yearly Production'
                    },



                    yAxis: {
                        title: {
                            text: 'Number of Balls'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($Yearfinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($Yearly001, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($Yearly002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($Yearly003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($Yearly004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($Yearly005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($Yearly006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($Yearly007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });

                Highcharts.chart('container1', {

                    title: {
                        text: 'Weekly Production'
                    },



                    yAxis: {
                        title: {
                            text: 'Number of Balls'
                        }
                    },

                    xAxis: {
                        categories: <?php echo json_encode($WeekDatefinal, JSON_NUMERIC_CHECK); ?>,
                        // accessibility: {
                        //     rangeDescription: 'Range: 2010 to 2017'
                        // }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },

                        }
                    },

                    series: [{
                        name: 'B34001',
                        data: <?php echo json_encode($WEEKLY001, JSON_NUMERIC_CHECK); ?>

                    }, {
                        name: 'B34002',
                        data: <?php echo json_encode($WEEKLY002, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34003',
                        data: <?php echo json_encode($WEEKLY003, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34004',
                        data: <?php echo json_encode($WEEKLY004, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34005',
                        data: <?php echo json_encode($WEEKLY005, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34006',
                        data: <?php echo json_encode($WEEKLY006, JSON_NUMERIC_CHECK); ?>
                    }, {
                        name: 'B34007',
                        data: <?php echo json_encode($WEEKLY007, JSON_NUMERIC_CHECK); ?>
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                var gaugeOptions = {
                    chart: {
                        type: 'solidgauge'
                    },

                    title: null,

                    pane: {
                        center: ['50%', '85%'],
                        size: '110%',
                        startAngle: -90,
                        endAngle: 90,
                        background: {
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                            innerRadius: '60%',
                            outerRadius: '100%',
                            shape: 'arc'
                        }
                    },

                    exporting: {
                        enabled: false
                    },

                    tooltip: {
                        enabled: false
                    },

                    // the value axis
                    yAxis: {
                        stops: [
                            [0.1, '#55BF3B'], // green
                            [0.5, '#DDDF0D'], // yellow
                            [0.9, '#DF5353'] // red
                        ],
                        lineWidth: 0,
                        tickWidth: 0,
                        minorTickInterval: null,
                        tickAmount: 2,
                        title: {
                            y: -70
                        },
                        labels: {
                            y: 16
                        }
                    },

                    plotOptions: {
                        solidgauge: {
                            dataLabels: {
                                y: 5,
                                borderWidth: 0,
                                useHTML: true
                            }
                        }
                    }
                };
                var gaugeOptions = {
                    chart: {
                        type: 'solidgauge'
                    },

                    title: null,

                    pane: {
                        center: ['50%', '85%'],
                        size: '110%',
                        startAngle: -90,
                        endAngle: 90,
                        background: {
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                            innerRadius: '60%',
                            outerRadius: '100%',
                            shape: 'arc'
                        }
                    },

                    exporting: {
                        enabled: false
                    },

                    tooltip: {
                        enabled: false
                    },

                    // the value axis
                    yAxis: {
                        stops: [
                            [0.1, '#55BF3B'], // green
                            [0.5, '#DDDF0D'], // yellow
                            [0.9, '#DF5353'] // red
                        ],
                        lineWidth: 0,
                        tickWidth: 0,
                        minorTickInterval: null,
                        tickAmount: 2,
                        title: {
                            y: -70
                        },
                        labels: {
                            y: 16
                        }
                    },

                    plotOptions: {
                        solidgauge: {
                            dataLabels: {
                                y: 5,
                                borderWidth: 0,
                                useHTML: true
                            }
                        }
                    }
                };
                // The speed gauge
                var chartSpeed = Highcharts.chart('container-speed0', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: <?php echo $B34001target; ?>,
                        title: {
                            text: 'Hand Stitched'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Hand Stitched',
                        data: [<?php echo $b34001 ? $b34001[0] : 0 ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5">Live Production</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                var chartSpeed = Highcharts.chart('container-speedrft', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: 100,
                        title: {
                            text: 'Over All RFT'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Over All RFT',
                        data: [<?php echo Round($FinalRF, 2) ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5"> Over All RFT %</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                var chartSpeed = Highcharts.chart('container-speeddef', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: 100,
                        title: {
                            text: 'Over All Defects Percentage'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Defects Percentage',
                        data: [<?php echo Round($Finalprenentage, 2) ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5"> Defects Percentage %</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                // The speed gauge

                // The speed gauge
                var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: <?php echo $B34002target; ?>,
                        title: {
                            text: 'Competition'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Competiton',
                        data: [<?php echo $b34002 ? $b34002[0] : 0 ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5">Live Production</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                // The speed gauge
                var chartSpeed = Highcharts.chart('container-speed1', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: <?php echo $B34003target; ?>,
                        title: {
                            text: 'Urban'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Urban',
                        data: [<?php echo $b34003 ? $b34003[0] : 0 ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5">Live Production</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                var chartSpeed = Highcharts.chart('container-speed2', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: <?php echo $B34004target; ?>,
                        title: {
                            text: 'Finale'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Finale',
                        data: [<?php echo $b34004 ? $b34004[0] : 0 ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5">Live Production</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                var gaugeOptions = {
                    chart: {
                        type: 'solidgauge'
                    },

                    title: null,

                    pane: {
                        center: ['50%', '85%'],
                        size: '110%',
                        startAngle: -90,
                        endAngle: 90,
                        background: {
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                            innerRadius: '60%',
                            outerRadius: '100%',
                            shape: 'arc'
                        }
                    },

                    exporting: {
                        enabled: false
                    },

                    tooltip: {
                        enabled: false
                    },

                    // the value axis
                    yAxis: {
                        stops: [
                            [0.1, '#55BF3B'], // green
                            [0.5, '#DDDF0D'], // yellow
                            [0.9, '#DF5353'] // red
                        ],
                        lineWidth: 0,
                        tickWidth: 0,
                        minorTickInterval: null,
                        tickAmount: 2,
                        title: {
                            y: -70
                        },
                        labels: {
                            y: 16
                        }
                    },

                    plotOptions: {
                        solidgauge: {
                            dataLabels: {
                                y: 5,
                                borderWidth: 0,
                                useHTML: true
                            }
                        }
                    }
                };

                // The speed gauge
                var chartSpeed = Highcharts.chart('container-speed3', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: <?php echo $B34005target; ?>,
                        title: {
                            text: 'Machine Stitch'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Machine Stitch',
                        data: [<?php echo $b34005 ? $b34005[0] : 0 ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5">Live Production</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                var gaugeOptions = {
                    chart: {
                        type: 'solidgauge'
                    },

                    title: null,

                    pane: {
                        center: ['50%', '85%'],
                        size: '110%',
                        startAngle: -90,
                        endAngle: 90,
                        background: {
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                            innerRadius: '60%',
                            outerRadius: '100%',
                            shape: 'arc'
                        }
                    },

                    exporting: {
                        enabled: false
                    },

                    tooltip: {
                        enabled: false
                    },

                    // the value axis
                    yAxis: {
                        stops: [
                            [0.1, '#55BF3B'], // green
                            [0.5, '#DDDF0D'], // yellow
                            [0.9, '#DF5353'] // red
                        ],
                        lineWidth: 0,
                        tickWidth: 0,
                        minorTickInterval: null,
                        tickAmount: 2,
                        title: {
                            y: -70
                        },
                        labels: {
                            y: 16
                        }
                    },

                    plotOptions: {
                        solidgauge: {
                            dataLabels: {
                                y: 5,
                                borderWidth: 0,
                                useHTML: true
                            }
                        }
                    }
                };

                // The speed gauge
                var chartSpeed = Highcharts.chart('container-speed4', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: <?php echo $B34006target; ?>,
                        title: {
                            text: 'Airless Mini'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Airless Mini',
                        data: [<?php echo $b34006 ? $b34006[0] : 0 ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5">Live Production</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                var gaugeOptions = {
                    chart: {
                        type: 'solidgauge'
                    },

                    title: null,

                    pane: {
                        center: ['50%', '85%'],
                        size: '110%',
                        startAngle: -90,
                        endAngle: 90,
                        background: {
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                            innerRadius: '60%',
                            outerRadius: '100%',
                            shape: 'arc'
                        }
                    },

                    exporting: {
                        enabled: false
                    },

                    tooltip: {
                        enabled: false
                    },

                    // the value axis
                    yAxis: {
                        stops: [
                            [0.1, '#55BF3B'], // green
                            [0.5, '#DDDF0D'], // yellow
                            [0.9, '#DF5353'] // red
                        ],
                        lineWidth: 0,
                        tickWidth: 0,
                        minorTickInterval: null,
                        tickAmount: 2,
                        title: {
                            y: -70
                        },
                        labels: {
                            y: 16
                        }
                    },

                    plotOptions: {
                        solidgauge: {
                            dataLabels: {
                                y: 5,
                                borderWidth: 0,
                                useHTML: true
                            }
                        }
                    }
                };

                // The speed gauge
                var chartSpeed = Highcharts.chart('container-speed5', Highcharts.merge(gaugeOptions, {
                    yAxis: {
                        min: 0,
                        max: <?php echo $B34007target; ?>,
                        title: {
                            text: 'Laminated'
                        }
                    },

                    credits: {
                        enabled: false
                    },

                    series: [{
                        name: 'Laminated',
                        data: [<?php echo $b34007 ? $b34007[0] : 0 ?>],
                        dataLabels: {
                            format: '<div style="text-align:center">' +
                                '<span style="font-size:25px">{y}</span><br/>' +
                                '<span style="font-size:12px;opacity:5">Live Production</span>' +
                                '</div>'
                        },
                        tooltip: {
                            valueSuffix: ' km/h'
                        }
                    }]

                }));
                $('.count').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            </script>

            <?php

            $TMProductiongraph = [];
            //print_r($CodeB34001);
            $TMRFTFinal = [];
            $TMFinal = [];
            $MSRFTFinal = [];
            $MSFinal = [];
            foreach ($TmProduction as $key) {

                $Data002 = [
                    $key['FactoryCode'],
                    $key['pass'],
                ];
                //array_push($B34001data_points2, $pointB43001);

                array_push($TMProductiongraph, $Data002);
                $Check = $key['TotalChecked'];
                $PassQty = $key['pass'];
                $FailQty = $key['Fail'];
                $TMRFT = ($PassQty / $Check) * 100;
                $MainTMRFT = [

                    $key['FactoryCode'],
                    Round($TMRFT, 2),
                ];
                array_push($TMRFTFinal, $MainTMRFT);

                $MainTMFail = [
                    $key['FactoryCode'],
                    $FailQty,
                ];
                array_push($TMFinal, $MainTMFail);
            }
            $MSProductiongraph = [];
            foreach ($MSProd  as $key) {
                $Data005 = [
                    //$key['LineName'],
                    $key['Pass'],
                ];
                array_push($MSProductiongraph, $Data005);
            }
            $MSLines = [];
            foreach ($MSProd  as $key) {

                $LinesData = [
                    $key['LineName'],
                    //$key['Pass'],
                ];

                array_push($MSLines, $LinesData);
                $Check = $key['TotalChecked'];
                $PassQty = $key['Pass'];
                $TMRFT = ($PassQty / $Check) * 100;
                $MainMSRFT = [

                    $key['LineName'],
                    Round($TMRFT, 2),

                ];
                array_push($MSRFTFinal, $MainMSRFT);
                $MainMSFail = [

                    $key['LineName'],
                    $key['Fail'],

                ];
                array_push($MSFinal, $MainMSFail);
            }
            $MSLinesFail = [];
            foreach ($MSProd  as $key) {

                $LinesDataFail = [
                    // $key['LineName'],
                    $key['Fail'],
                ];

                array_push($MSLinesFail, $LinesDataFail);
            }
            $AMbProductiongraph = [];
            //print_r($CodeB34001);
            $AMBRFTFinal = [];
            $AMBFinal = [];
            foreach ($AMBproduction  as $key) {

                $Data006 = [
                    $key['LineName'],
                    $key['Pass'],
                ];
                //array_push($B34001data_points2, $pointB43001);

                array_push($AMbProductiongraph, $Data006);
                $Check = $key['TotalChecked'];
                $PassQty = $key['Pass'];
                $AMBRFT = ($PassQty / $Check) * 100;
                $MainAMBRFT = [

                    $key['LineName'],
                    Round($AMBRFT, 2),

                ];
                array_push($AMBRFTFinal, $MainAMBRFT);
                $MainAMBFail = [

                    $key['LineName'],
                    $key['Fail'],

                ];
                array_push($AMBFinal, $MainAMBFail);
            }

            ?>
            <script>
                Highcharts.chart('hsprd', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Hand Stitched (B34001)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Production'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,
                        data: <?php echo json_encode($graph001, JSON_NUMERIC_CHECK); ?>


                    }]
                });
                Highcharts.chart('tmprd', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Thermo Bounded (B34002,B34003,B34004)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Production'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Total: <b>{point.y:.1f} Pass Quantity</b>'
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,
                        data: <?php echo json_encode($TMProductiongraph, JSON_NUMERIC_CHECK); ?>
                    }]
                });


                Highcharts.chart('msprd', {
                    chart: {
                        zoomType: 'xy'
                    },
                    title: {
                        text: 'Machine Stitched Hall Production'
                    },
                    subtitle: {
                        text: 'Total Output'
                    },
                    xAxis: [{
                        categories: <?php echo json_encode($MSLines, JSON_NUMERIC_CHECK); ?>,


                        crosshair: true
                    }],
                    yAxis: [{ // Primary yAxis
                        labels: {
                            format: '{value}',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        },
                        title: {
                            text: 'Fail Quantity',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        }
                    }, { // Secondary yAxis
                        title: {
                            text: 'Pass Quantity ',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        labels: {
                            format: '{value} ',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        opposite: true
                    }],
                    tooltip: {
                        shared: true
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'left',
                        x: 120,
                        verticalAlign: 'top',
                        y: 100,
                        floating: true,
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                            'rgba(255,255,255,0.25)'
                    },
                    series: [{
                        name: 'Pass Quantity',
                        type: 'column',
                        colorByPoint: true,
                        yAxis: 1,
                        data: <?php echo json_encode($MSProductiongraph, JSON_NUMERIC_CHECK); ?>,
                        // tooltip: {
                        //     valueSuffix: ''
                        // }

                    }, {
                        name: 'Fail Quantity',
                        type: 'spline',
                        color: 'red',
                        data: <?php echo json_encode($MSLinesFail, JSON_NUMERIC_CHECK); ?>,
                        // tooltip: {
                        //     valueSuffix: ''
                        // }
                    }]
                });

                Highcharts.chart('ambprd', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Airless Mini (B34006)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Production'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Total: <b>{point.y:.1f} Pass Quantity</b>'
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,
                        data: <?php echo json_encode($AMbProductiongraph, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                Highcharts.chart('lfbprd', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Laminated (B34007)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Production'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Total: <b>{point.y:.1f} Pass Quantity</b>'
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,

                        data: <?php echo json_encode($B34007data_points2, JSON_NUMERIC_CHECK); ?>
                    }]
                });

                Highcharts.chart('AllPrd', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Today Production'
                    },

                    accessibility: {
                        announceNewData: {
                            enabled: true
                        }
                    },
                    xAxis: {
                        type: 'category'
                    },
                    yAxis: {
                        title: {
                            text: 'Total Production'
                        }

                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y:.1f}'
                            }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
                    },

                    series: [{
                        name: "Production",
                        colorByPoint: true,
                        data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>,

                    }],
                    drilldown: {
                        series: [{
                                name: "B34001",
                                id: "B34001",
                                data: <?php echo json_encode(
                                            $B34001data_points2,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34002",
                                id: "B34002",
                                data: <?php echo json_encode(
                                            $B34002data_points2,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34003",
                                id: "B34003",
                                data: <?php echo json_encode(
                                            $B34003data_points2,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34004",
                                id: "B34004",
                                data: <?php echo json_encode(
                                            $B34004data_points2,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34005",
                                id: "B34005",
                                data: <?php echo json_encode(
                                            $B34005data_points2,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34006",
                                id: "B34006",
                                data: <?php echo json_encode(
                                            $B34006data_points2,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34007",
                                id: "B34007",
                                data: <?php echo json_encode(
                                            $B34007data_points2,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,

                            }
                        ]
                    }
                });
                Highcharts.chart('AllPrdrft', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Today RFT'
                    },

                    accessibility: {
                        announceNewData: {
                            enabled: true
                        }
                    },
                    xAxis: {
                        type: 'category'
                    },
                    yAxis: {
                        title: {
                            text: 'RFT '
                        }

                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y:.1f} %'
                            }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: % <br/>'
                    },

                    series: [{
                        name: "Production",
                        colorByPoint: true,
                        data: <?php echo json_encode($data_pointsRFT, JSON_NUMERIC_CHECK); ?>,

                    }],
                    drilldown: {
                        series: [{
                                name: "B34001",
                                id: "B34001",
                                data: <?php echo json_encode(
                                            $B34001ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34002",
                                id: "B34002",
                                data: <?php echo json_encode(
                                            $B34002ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34003",
                                id: "B34003",
                                data: <?php echo json_encode(
                                            $B34003ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34004",
                                id: "B34004",
                                data: <?php echo json_encode(
                                            $B34004ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34005",
                                id: "B34005",
                                data: <?php echo json_encode(
                                            $B34005ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34006",
                                id: "B34006",
                                data: <?php echo json_encode(
                                            $B34006ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34007",
                                id: "B34007",
                                data: <?php echo json_encode(
                                            $B34007ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,

                            }
                        ]
                    }
                });


                Highcharts.chart('hsprdrft', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Hand Stitched (B34001)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Production'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,
                        data: <?php echo json_encode($B34001ArtRFT, JSON_NUMERIC_CHECK); ?>


                    }]
                });
                Highcharts.chart('tmprdrft', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Thermo Bounded (B34002,B34003,B34004)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total RFT'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Total: <b>{point.y:.1f} RFT %</b>'
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,
                        data: <?php echo json_encode($TMRFTFinal, JSON_NUMERIC_CHECK); ?>
                    }]
                });


                Highcharts.chart('msprdrft', {
                    chart: {
                        zoomType: 'xy'
                    },
                    title: {
                        text: 'Machine Stitched Hall Production'
                    },
                    subtitle: {
                        text: 'Today RFT'
                    },
                    xAxis: [{
                        categories: <?php echo json_encode($MSLines, JSON_NUMERIC_CHECK); ?>,


                        crosshair: true
                    }],
                    yAxis: [{ // Primary yAxis
                        labels: {
                            format: '{value} %',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        },
                        title: {
                            text: 'RFT',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        }
                    }, { // Secondary yAxis
                        title: {
                            //text: 'Fail ',
                            // style: {
                            //     color: Highcharts.getOptions().colors[0]
                            // }
                        },
                        labels: {
                            format: '{value} ',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        opposite: true
                    }],
                    tooltip: {
                        shared: true
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'left',
                        x: 120,
                        verticalAlign: 'top',
                        y: 100,
                        floating: true,
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                            'rgba(255,255,255,0.25)'
                    },
                    series: [{
                        name: 'Line Wise RFT ',
                        type: 'column',
                        colorByPoint: true,
                        yAxis: 1,
                        data: <?php echo json_encode($MSRFTFinal, JSON_NUMERIC_CHECK); ?>,
                        tooltip: {
                            valueSuffix: ' %'
                        }

                    }]
                });

                Highcharts.chart('ambprdrft', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Airless Mini (B34006)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total RFT'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Line wise  <b>{point.y:.1f} %</b>'
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,
                        data: <?php echo json_encode($AMBRFTFinal, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                Highcharts.chart('lfbprdrft', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Laminated (B34007)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total RFT'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Article Wise: <b>{point.y:.1f}  RFT </b>'
                    },
                    series: [{
                        name: 'Production',
                        colorByPoint: true,

                        data: <?php echo json_encode($B34007ArtRFT, JSON_NUMERIC_CHECK); ?>
                    }]
                });



                Highcharts.chart('AllPrddef', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Today Defects'
                    },

                    accessibility: {
                        announceNewData: {
                            enabled: true
                        }
                    },
                    xAxis: {
                        type: 'category'
                    },
                    yAxis: {
                        title: {
                            text: 'Defects '
                        }

                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y:.1f} '
                            }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>:  <br/>'
                    },

                    series: [{
                        name: "Defects",
                        colorByPoint: true,
                        data: <?php echo json_encode($data_pointsFail, JSON_NUMERIC_CHECK); ?>,

                    }],
                    drilldown: {
                        series: [{
                                name: "B34001",
                                id: "B34001",
                                data: <?php echo json_encode(
                                            $B34001ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34002",
                                id: "B34002",
                                data: <?php echo json_encode(
                                            $B34002ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34003",
                                id: "B34003",
                                data: <?php echo json_encode(
                                            $B34003ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34004",
                                id: "B34004",
                                data: <?php echo json_encode(
                                            $B34004ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34005",
                                id: "B34005",
                                data: <?php echo json_encode(
                                            $B34005ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34006",
                                id: "B34006",
                                data: <?php echo json_encode(
                                            $B34006ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34007",
                                id: "B34007",
                                data: <?php echo json_encode(
                                            $B34007ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,

                            }
                        ]
                    }
                });


                Highcharts.chart('hsprddef', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Hand Stitched (B34001)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Defects'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    series: [{
                        name: 'Defects',
                        colorByPoint: true,
                        data: <?php echo json_encode($B34001ArtFail, JSON_NUMERIC_CHECK); ?>


                    }]
                });
                Highcharts.chart('tmprddef', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Thermo Bounded (B34002,B34003,B34004)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Defects'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Total Defects: <b>{point.y:.1f} </b>'
                    },
                    series: [{
                        name: 'Defects',
                        colorByPoint: true,
                        data: <?php echo json_encode($TMFinal, JSON_NUMERIC_CHECK); ?>
                    }]
                });


                Highcharts.chart('msprddef', {
                    chart: {
                        zoomType: 'xy'
                    },
                    title: {
                        text: 'Machine Stitched Hall Production'
                    },
                    subtitle: {
                        text: 'Total Defects'
                    },
                    xAxis: [{
                        categories: <?php echo json_encode($MSLines, JSON_NUMERIC_CHECK); ?>,


                        crosshair: true
                    }],
                    yAxis: [{ // Primary yAxis
                        labels: {
                            format: '{value}',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        },
                        title: {
                            text: 'Defects',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        }
                    }, { // Secondary yAxis
                        title: {
                            //text: 'Fail ',
                            // style: {
                            //     color: Highcharts.getOptions().colors[0]
                            // }
                        },
                        labels: {
                            format: '{value} ',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        opposite: true
                    }],
                    tooltip: {
                        shared: true
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'left',
                        x: 120,
                        verticalAlign: 'top',
                        y: 100,
                        floating: true,
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                            'rgba(255,255,255,0.25)'
                    },
                    series: [{
                        name: 'Line Wise Defects ',
                        type: 'column',
                        colorByPoint: true,
                        yAxis: 1,
                        data: <?php echo json_encode($MSFinal, JSON_NUMERIC_CHECK); ?>,
                        tooltip: {
                            valueSuffix: ''
                        }

                    }]
                });

                Highcharts.chart('ambprddef', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Airless Mini (B34006)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Defects'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Line wise Defects <b>{point.y:.1f} </b>'
                    },
                    series: [{
                        name: 'Defects',
                        colorByPoint: true,
                        data: <?php echo json_encode($AMBFinal, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                Highcharts.chart('lfbprddef', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Laminated (B34007)'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total Defects'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: 'Article Wise Defects: <b>{point.y:.1f}   </b>'
                    },
                    series: [{
                        name: 'Defects',
                        colorByPoint: true,

                        data: <?php echo json_encode($B34007ArtFail, JSON_NUMERIC_CHECK); ?>
                    }]
                });
            </script>
            <script src="<?php echo base_url(); ?>/assets/js//jquery.min.js" type="text/javascript">
            </script>
            <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
            <script src="js/statistics/sparkline/sparkline.bundle.js"></script>
            <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2021 © Forward Sports by&nbsp;IT Dept Forward Sports</span>
                </div>
                <div>

                </div>
            </footer>
            <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>



            <!-- END Page Footer -->
            <!-- BEGIN Shortcuts -->
            <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <ul class="app-list w-auto h-auto p-0 text-left">
                                <li>
                                    <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                            <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                            <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                            <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                            Inbox
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                        <div class="icon-stack">
                                            <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                            <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                        </div>
                                        <span class="app-list-name">
                                            Add More
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- END Shortcuts -->
            <!-- BEGIN Color profile -->
            <!-- this area is hidden and will not be seen on screens or screen readers -->
            <!-- we use this only for CSS color refernce for JS stuff -->
            <p id="js-color-profile" class="d-none">
                <span class="color-primary-50"></span>
                <span class="color-primary-100"></span>
                <span class="color-primary-200"></span>
                <span class="color-primary-300"></span>
                <span class="color-primary-400"></span>
                <span class="color-primary-500"></span>
                <span class="color-primary-600"></span>
                <span class="color-primary-700"></span>
                <span class="color-primary-800"></span>
                <span class="color-primary-900"></span>
                <span class="color-info-50"></span>
                <span class="color-info-100"></span>
                <span class="color-info-200"></span>
                <span class="color-info-300"></span>
                <span class="color-info-400"></span>
                <span class="color-info-500"></span>
                <span class="color-info-600"></span>
                <span class="color-info-700"></span>
                <span class="color-info-800"></span>
                <span class="color-info-900"></span>
                <span class="color-danger-50"></span>
                <span class="color-danger-100"></span>
                <span class="color-danger-200"></span>
                <span class="color-danger-300"></span>
                <span class="color-danger-400"></span>
                <span class="color-danger-500"></span>
                <span class="color-danger-600"></span>
                <span class="color-danger-700"></span>
                <span class="color-danger-800"></span>
                <span class="color-danger-900"></span>
                <span class="color-warning-50"></span>
                <span class="color-warning-100"></span>
                <span class="color-warning-200"></span>
                <span class="color-warning-300"></span>
                <span class="color-warning-400"></span>
                <span class="color-warning-500"></span>
                <span class="color-warning-600"></span>
                <span class="color-warning-700"></span>
                <span class="color-warning-800"></span>
                <span class="color-warning-900"></span>
                <span class="color-success-50"></span>
                <span class="color-success-100"></span>
                <span class="color-success-200"></span>
                <span class="color-success-300"></span>
                <span class="color-success-400"></span>
                <span class="color-success-500"></span>
                <span class="color-success-600"></span>
                <span class="color-success-700"></span>
                <span class="color-success-800"></span>
                <span class="color-success-900"></span>
                <span class="color-fusion-50"></span>
                <span class="color-fusion-100"></span>
                <span class="color-fusion-200"></span>
                <span class="color-fusion-300"></span>
                <span class="color-fusion-400"></span>
                <span class="color-fusion-500"></span>
                <span class="color-fusion-600"></span>
                <span class="color-fusion-700"></span>
                <span class="color-fusion-800"></span>
                <span class="color-fusion-900"></span>
            </p>
            <!-- END Color profile -->
        </div>
        </div>
        </div>
        <!-- END Page Wrapper -->
        <!-- BEGIN Quick Menu -->
        <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
        <nav class="shortcut-menu d-none d-sm-block">
            <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
            <label for="menu_open" class="menu-open-button ">
                <span class="app-shortcut-icon d-block"></span>
            </label>
            <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
                <i class="fal fa-arrow-up"></i>
            </a>
            <a href="page_login_alt.html" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
                <i class="fal fa-sign-out"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
                <i class="fal fa-expand"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="Print page">
                <i class="fal fa-print"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left" title="Voice command">
                <i class="fal fa-microphone"></i>
            </a>
        </nav>




        <!-- END Quick Menu -->
        <!-- BEGIN Messenger -->
        <div class="modal fade js-modal-messenger modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right">
                <div class="modal-content h-100">
                    <div class="dropdown-header bg-trans-gradient d-flex align-items-center w-100">
                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                            <span class="mr-2">
                                <span class="rounded-circle profile-image d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                            </span>
                            <div class="info-card-text">
                                <a href="javascript:void(0);" class="fs-lg text-truncate text-truncate-lg text-white" data-toggle="dropdown" aria-expanded="false">
                                    Tracey Chang
                                    <i class="fal fa-angle-down d-inline-block ml-1 text-white fs-md"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Send Email</a>
                                    <a class="dropdown-item" href="#">Create Appointment</a>
                                    <a class="dropdown-item" href="#">Block User</a>
                                </div>
                                <span class="text-truncate text-truncate-md opacity-80">IT Director</span>
                            </div>
                        </div>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0 h-100 d-flex">
                        <!-- BEGIN msgr-list -->
                        <div class="msgr-list d-flex flex-column bg-faded border-faded border-top-0 border-right-0 border-bottom-0 position-absolute pos-top pos-bottom">
                            <div>
                                <div class="height-4 width-3 h3 m-0 d-flex justify-content-center flex-column color-primary-500 pl-3 mt-2">
                                    <i class="fal fa-search"></i>
                                </div>
                                <input type="text" class="form-control bg-white" id="msgr_listfilter_input" placeholder="Filter contacts" aria-label="FriendSearch" data-listfilter="#js-msgr-listfilter">
                            </div>
                            <div class="flex-1 h-100 custom-scroll">
                                <div class="w-100">
                                    <ul id="js-msgr-listfilter" class="list-unstyled m-0">
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="tracey chang online">
                                                <div class="d-table-cell align-middle status status-success status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Tracey Chang
                                                        <small class="d-block font-italic text-success fs-xs">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="oliver kopyuv online">
                                                <div class="d-table-cell align-middle status status-success status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Oliver Kopyuv
                                                        <small class="d-block font-italic text-success fs-xs">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="dr john cook phd away">
                                                <div class="d-table-cell align-middle status status-warning status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Dr. John Cook PhD
                                                        <small class="d-block font-italic fs-xs">
                                                            Away
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney online">
                                                <div class="d-table-cell align-middle status status-success status-sm ">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Ali Amdaney
                                                        <small class="d-block font-italic fs-xs text-success">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="sarah mcbrook online">
                                                <div class="d-table-cell align-middle status status-success status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        Sarah McBrook
                                                        <small class="d-block font-italic fs-xs text-success">
                                                            Online
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                                <div class="d-table-cell align-middle status status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        oliver.kopyuv@gotbootstrap.com
                                                        <small class="d-block font-italic fs-xs">
                                                            Offline
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney busy">
                                                <div class="d-table-cell align-middle status status-danger status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        oliver.kopyuv@gotbootstrap.com
                                                        <small class="d-block font-italic fs-xs text-danger">
                                                            Busy
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                                <div class="d-table-cell align-middle status status-sm">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        oliver.kopyuv@gotbootstrap.com
                                                        <small class="d-block font-italic fs-xs">
                                                            Offline
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney inactive">
                                                <div class="d-table-cell align-middle">
                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-m.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                    <div class="text-truncate text-truncate-md">
                                                        +714651347790
                                                        <small class="d-block font-italic fs-xs opacity-50">
                                                            Missed Call
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="filter-message js-filter-message"></div>
                                </div>
                            </div>
                            <div>
                                <a class="fs-xl d-flex align-items-center p-3">
                                    <i class="fal fa-cogs"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END msgr-list -->
                        <!-- BEGIN msgr -->
                        <div class="msgr d-flex h-100 flex-column bg-white">
                            <!-- BEGIN custom-scroll -->
                            <div class="custom-scroll flex-1 h-100">
                                <div id="chat_container" class="w-100 p-4">
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment">
                                        <div class="time-stamp text-center mb-2 fw-400">
                                            Jun 19
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-sent">
                                        <div class="chat-message">
                                            <p>
                                                Hey Tracey, did you get my files?
                                            </p>
                                        </div>
                                        <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                            3:00 pm
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get">
                                        <div class="chat-message">
                                            <p>
                                                Hi
                                            </p>
                                            <p>
                                                Sorry going through a busy time in office. Yes I analyzed the solution.
                                            </p>
                                            <p>
                                                It will require some resource, which I could not manage.
                                            </p>
                                        </div>
                                        <div class="fw-300 text-muted mt-1 fs-xs">
                                            3:24 pm
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-sent chat-start">
                                        <div class="chat-message">
                                            <p>
                                                Okay
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-sent chat-end">
                                        <div class="chat-message">
                                            <p>
                                                Sending you some dough today, you can allocate the resources to this project.
                                            </p>
                                        </div>
                                        <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                            3:26 pm
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get chat-start">
                                        <div class="chat-message">
                                            <p>
                                                Perfect. Thanks a lot!
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get">
                                        <div class="chat-message">
                                            <p>
                                                I will have them ready by tonight.
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <div class="chat-segment chat-segment-get chat-end">
                                        <div class="chat-message">
                                            <p>
                                                Cheers
                                            </p>
                                        </div>
                                    </div>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment for timestamp -->
                                    <div class="chat-segment">
                                        <div class="time-stamp text-center mb-2 fw-400">
                                            Jun 20
                                        </div>
                                    </div>
                                    <!--  end .chat-segment for timestamp -->
                                </div>
                            </div>
                            <!-- END custom-scroll  -->
                            <!-- BEGIN msgr__chatinput -->
                            <div class="d-flex flex-column">
                                <div class="border-faded border-right-0 border-bottom-0 border-left-0 flex-1 mr-3 ml-3 position-relative shadow-top">
                                    <div class="pt-3 pb-1 pr-0 pl-0 rounded-0" tabindex="-1">
                                        <div id="msgr_input" contenteditable="true" data-placeholder="Type your message here..." class="height-10 form-content-editable"></div>
                                    </div>
                                </div>
                                <div class="height-8 px-3 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                        <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">
                                        <i class="fal fa-paperclip color-fusion-300"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">
                                        <i class="fal fa-camera color-fusion-300"></i>
                                    </a>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0);" class="btn btn-info">Send</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END msgr__chatinput -->
                        </div>
                        <!-- END msgr -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Messenger -->
        <!-- BEGIN Page Settings -->
        <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-md">
                <div class="modal-content">
                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                        <h4 class="m-0 text-center color-white">
                            Layout Settings
                            <small class="mb-0 opacity-80">User Interface Settings</small>
                        </h4>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="settings-panel">
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        App Layout
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="fh">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                                <span class="onoffswitch-title">Fixed Header</span>
                                <span class="onoffswitch-title-desc">header is in a fixed at all times</span>
                            </div>
                            <div class="list" id="nff">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-fixed"></a>
                                <span class="onoffswitch-title">Fixed Navigation</span>
                                <span class="onoffswitch-title-desc">left panel is fixed</span>
                            </div>
                            <div class="list" id="nfm">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-minify"></a>
                                <span class="onoffswitch-title">Minify Navigation</span>
                                <span class="onoffswitch-title-desc">Skew nav to maximize space</span>
                            </div>
                            <div class="list" id="nfh">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-hidden"></a>
                                <span class="onoffswitch-title">Hide Navigation</span>
                                <span class="onoffswitch-title-desc">roll mouse on edge to reveal</span>
                            </div>
                            <div class="list" id="nft">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-top"></a>
                                <span class="onoffswitch-title">Top Navigation</span>
                                <span class="onoffswitch-title-desc">Relocate left pane to top</span>
                            </div>
                            <div class="list" id="mmb">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-main-boxed"></a>
                                <span class="onoffswitch-title">Boxed Layout</span>
                                <span class="onoffswitch-title-desc">Encapsulates to a container</span>
                            </div>
                            <div class="expanded">
                                <ul class="">
                                    <li>
                                        <div class="bg-fusion-50" data-action="toggle" data-class="mod-bg-1"></div>
                                    </li>
                                    <li>
                                        <div class="bg-warning-200" data-action="toggle" data-class="mod-bg-2"></div>
                                    </li>
                                    <li>
                                        <div class="bg-primary-200" data-action="toggle" data-class="mod-bg-3"></div>
                                    </li>
                                    <li>
                                        <div class="bg-success-300" data-action="toggle" data-class="mod-bg-4"></div>
                                    </li>
                                </ul>
                                <div class="list" id="mbgf">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-fixed-bg"></a>
                                    <span class="onoffswitch-title">Fixed Background</span>
                                </div>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Mobile Menu
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="nmp">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-push"></a>
                                <span class="onoffswitch-title">Push Content</span>
                                <span class="onoffswitch-title-desc">Content pushed on menu reveal</span>
                            </div>
                            <div class="list" id="nmno">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-no-overlay"></a>
                                <span class="onoffswitch-title">No Overlay</span>
                                <span class="onoffswitch-title-desc">Removes mesh on menu reveal</span>
                            </div>
                            <div class="list" id="sldo">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-slide-out"></a>
                                <span class="onoffswitch-title">Off-Canvas <sup>(beta)</sup></span>
                                <span class="onoffswitch-title-desc">Content overlaps menu</span>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Accessibility
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="mbf">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-bigger-font"></a>
                                <span class="onoffswitch-title">Bigger Content Font</span>
                                <span class="onoffswitch-title-desc">content fonts are bigger for readability</span>
                            </div>
                            <div class="list" id="mhc">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-high-contrast"></a>
                                <span class="onoffswitch-title">High Contrast Text (WCAG 2 AA)</span>
                                <span class="onoffswitch-title-desc">4.5:1 text contrast ratio</span>
                            </div>
                            <div class="list" id="mcb">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-color-blind"></a>
                                <span class="onoffswitch-title">Daltonism <sup>(beta)</sup> </span>
                                <span class="onoffswitch-title-desc">color vision deficiency</span>
                            </div>
                            <div class="list" id="mpc">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-pace-custom"></a>
                                <span class="onoffswitch-title">Preloader Inside</span>
                                <span class="onoffswitch-title-desc">preloader will be inside content</span>
                            </div>
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Global Modifications
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="mcbg">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-clean-page-bg"></a>
                                <span class="onoffswitch-title">Clean Page Background</span>
                                <span class="onoffswitch-title-desc">adds more whitespace</span>
                            </div>
                            <div class="list" id="mhni">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                                <span class="onoffswitch-title">Hide Navigation Icons</span>
                                <span class="onoffswitch-title-desc">invisible navigation icons</span>
                            </div>
                            <div class="list" id="dan">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-disable-animation"></a>
                                <span class="onoffswitch-title">Disable CSS Animation</span>
                                <span class="onoffswitch-title-desc">Disables CSS based animations</span>
                            </div>
                            <div class="list" id="mhic">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                                <span class="onoffswitch-title">Hide Info Card</span>
                                <span class="onoffswitch-title-desc">Hides info card from left panel</span>
                            </div>
                            <div class="list" id="mlph">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-lean-subheader"></a>
                                <span class="onoffswitch-title">Lean Subheader</span>
                                <span class="onoffswitch-title-desc">distinguished page header</span>
                            </div>
                            <div class="list" id="mnl">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-link"></a>
                                <span class="onoffswitch-title">Hierarchical Navigation</span>
                                <span class="onoffswitch-title-desc">Clear breakdown of nav links</span>
                            </div>
                            <div class="list mt-1">
                                <span class="onoffswitch-title">Global Font Size <small>(RESETS ON REFRESH)</small> </span>
                                <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                        <input type="radio" name="changeFrontSize"> SM
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text" data-target="html">
                                        <input type="radio" name="changeFrontSize" checked=""> MD
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                        <input type="radio" name="changeFrontSize"> LG
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-xl" data-target="html">
                                        <input type="radio" name="changeFrontSize"> XL
                                    </label>
                                </div>
                                <span class="onoffswitch-title-desc d-block mb-0">Change <strong>root</strong> font size to effect rem
                                    values</span>
                            </div>
                            <hr class="mb-0 mt-4">
                            <div class="mt-2 d-table w-100 pl-5 pr-3">
                                <div class="fs-xs text-muted p-2 alert alert-warning mt-3 mb-2">
                                    <i class="fal fa-exclamation-triangle text-warning mr-2"></i>The settings below uses localStorage to load
                                    the external CSS file as an overlap to the base css. Due to network latency and CPU utilization, you may
                                    experience a brief flickering effect on page load which may show the intial applied theme for a split
                                    second. Setting the prefered style/theme in the header will prevent this from happening.
                                </div>
                            </div>
                            <div class="mt-2 d-table w-100 pl-5 pr-3">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Theme colors
                                    </h5>
                                </div>
                            </div>
                            <div class="expanded theme-colors pl-5 pr-3">
                                <ul class="m-0">
                                    <li>
                                        <a href="#" id="myapp-0" data-action="theme-update" data-themesave data-theme="" data-toggle="tooltip" data-placement="top" title="Wisteria (base css)" data-original-title="Wisteria (base css)"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-1" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-1.css" data-toggle="tooltip" data-placement="top" title="Tapestry" data-original-title="Tapestry"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-2" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-2.css" data-toggle="tooltip" data-placement="top" title="Atlantis" data-original-title="Atlantis"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-3" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-3.css" data-toggle="tooltip" data-placement="top" title="Indigo" data-original-title="Indigo"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-4" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-4.css" data-toggle="tooltip" data-placement="top" title="Dodger Blue" data-original-title="Dodger Blue"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-5" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-5.css" data-toggle="tooltip" data-placement="top" title="Tradewind" data-original-title="Tradewind"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-6" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-6.css" data-toggle="tooltip" data-placement="top" title="Cranberry" data-original-title="Cranberry"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-7" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-7.css" data-toggle="tooltip" data-placement="top" title="Oslo Gray" data-original-title="Oslo Gray"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-8" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-8.css" data-toggle="tooltip" data-placement="top" title="Chetwode Blue" data-original-title="Chetwode Blue"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-9" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-9.css" data-toggle="tooltip" data-placement="top" title="Apricot" data-original-title="Apricot"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-10" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-10.css" data-toggle="tooltip" data-placement="top" title="Blue Smoke" data-original-title="Blue Smoke"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-11" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-11.css" data-toggle="tooltip" data-placement="top" title="Green Smoke" data-original-title="Green Smoke"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-12" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-12.css" data-toggle="tooltip" data-placement="top" title="Wild Blue Yonder" data-original-title="Wild Blue Yonder"></a>
                                    </li>
                                    <li>
                                        <a href="#" id="myapp-13" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-13.css" data-toggle="tooltip" data-placement="top" title="Emerald" data-original-title="Emerald"></a>
                                    </li>
                                </ul>
                            </div>
                            <hr class="mb-0 mt-4">
                            <div class="pl-5 pr-3 py-3 bg-faded">
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <a href="#" class="btn btn-outline-danger fw-500 btn-block" data-action="app-reset">Reset Settings</a>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <a href="#" class="btn btn-danger fw-500 btn-block" data-action="factory-reset">Factory Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div> <span id="saving"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Settings -->
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
        <script type="text/javascript">
            /* Activate smart panels */
            $('#js-page-content').smartPanel();
        </script>
        <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
        <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script type="text/javascript">
            /* Activate smart panels */
            $('#js-page-content').smartPanel();
        </script>
        <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
        <script src="<?php echo base_url(); ?>/assets/js/dependency/moment/moment.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/miscellaneous/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/sparkline/sparkline.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/miscellaneous/jqvmap/jqvmap.bundle.js"></script>
        <script>
            $(document).ready(function() {
                //alert("Datatables");
                $("#DailyGraph").show();
                $("#weeklygraph").hide();
                $("#monthlygraph").hide();
                $("#Yearlygraph").hide();

                $("#weeklyrft").hide();
                $("#monthlyrft").hide();
                $("#yearlyrft").hide();



                $("#weeklydef").hide();
                $("#monthlydef").hide();
                $("#yearlydef").hide();

                $("#defaultInline1Radio").click(function() {
                    $("#weeklygraph").hide();
                    $("#DailyGraph").show();
                    $("#monthlygraph").hide();
                    $("#Yearlygraph").hide();
                });
                $("#defaultInline2Radio").click(function() {
                    $("#weeklygraph").show();
                    $("#DailyGraph").hide();
                    $("#monthlygraph").hide();
                    $("#Yearlygraph").hide();
                });
                $("#defaultInline3Radio").click(function() {
                    $("#weeklygraph").hide();
                    $("#DailyGraph").hide();
                    $("#monthlygraph").show();
                    $("#Yearlygraph").hide();
                });
                $("#defaultInline4Radio").click(function() {
                    $("#weeklygraph").hide();
                    $("#DailyGraph").hide();
                    $("#monthlygraph").hide();
                    $("#Yearlygraph").show();
                });
                $("#defaultInline5Radio").click(function() {
                    $("#weeklyrft").hide();
                    $("#monthlyrft").hide();
                    $("#yearlyrft").hide();
                    $("#AllPrdrft").show();
                });
                $("#defaultInline6Radio").click(function() {
                    $("#weeklyrft").show();
                    $("#monthlyrft").hide();
                    $("#yearlyrft").hide();
                    $("#AllPrdrft").hide();
                });
                $("#defaultInline7Radio").click(function() {
                    $("#weeklyrft").hide();
                    $("#monthlyrft").show();
                    $("#yearlyrft").hide();
                    $("#AllPrdrft").hide();
                });
                $("#defaultInline8Radio").click(function() {
                    $("#weeklyrft").hide();
                    $("#monthlyrft").hide();
                    $("#yearlyrft").show();
                    $("#AllPrdrft").hide();
                });
                $("#defaultInline9Radio").click(function() {
                    $("#weeklydef").hide();
                    $("#monthlydef").hide();
                    $("#yearlydef").hide();
                    $("#AllPrddef").show();

                });
                $("#defaultInline10Radio").click(function() {
                    $("#weeklydef").show();
                    $("#monthlydef").hide();
                    $("#yearlydef").hide();
                    $("#AllPrddef").hide();

                });
                $("#defaultInline11Radio").click(function() {
                    $("#weeklydef").hide();
                    $("#monthlydef").show();
                    $("#yearlydef").hide();
                    $("#AllPrddef").hide();

                });
                $("#defaultInline12Radio").click(function() {
                    $("#weeklydef").hide();
                    $("#monthlydef").hide();
                    $("#yearlydef").show();
                    $("#AllPrddef").hide();

                });
            });
        </script>
    </body>

    </html>


<?php
} ?>