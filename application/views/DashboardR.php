<?php

if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>

    <body>

        <!-- All javascript libraries starts from here  -->



        <!-- All libraries ends here -->

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

                        <!-- Css styling starts from here  -->
                        <style>
                            * {
                                margin: 0;
                                padding: 0;
                                box-sizing: border-box;
                            }

                            .highcharts-figureMachine,
                            .highcharts-data-table table {
                                min-width: 310px;
                                max-width: 800px;
                                margin: 1em auto;
                            }

                            #container {
                                height: 400px;
                            }

                            .highcharts-data-table table {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #ebebeb;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            .highcharts-data-table caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            .highcharts-data-table th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            .highcharts-data-table td,
                            .highcharts-data-table th,
                            .highcharts-data-table caption {
                                padding: 0.5em;
                            }

                            .highcharts-data-table thead tr,
                            .highcharts-data-table tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            .highcharts-data-table tr:hover {
                                background: #f1f7ff;
                            }

                            .panelAlign {
                                padding: 5%;
                                height: 75vh;
                            }

                            /* set default zoom property of a page  */
                            /* body
                            {zoom: 67%;}  */

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

                            /* mine highchart css here  */

                            .highcharts-figureMine,
                            .highcharts-data-table table {

                                width: 1800px;
                                margin: 1em auto;
                            }

                            /* #containerMine {
                                height: 75vh;
                                width: 100%;

                            } */

                            .highcharts-data-table table {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #ebebeb;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            .highcharts-data-table caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            .highcharts-data-table th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            .highcharts-data-table td,
                            .highcharts-data-table th,
                            .highcharts-data-table caption {
                                padding: 0.5em;
                            }

                            .highcharts-data-table thead tr,
                            .highcharts-data-table tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            .highcharts-data-table tr:hover {
                                background: #f1f7ff;
                            }

                            /* highchart year wise start here */

                            .highcharts-figureYear,
                            .highcharts-data-table table {
                                width: 900px;
                                margin: 1em auto;
                            }

                            #containerYear {
                                height: 400px;
                            }

                            .highcharts-data-table table {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #ebebeb;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            .highcharts-data-table caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            .highcharts-data-table th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            .highcharts-data-table td,
                            .highcharts-data-table th,
                            .highcharts-data-table caption {
                                padding: 0.5em;
                            }

                            .highcharts-data-table thead tr,
                            .highcharts-data-table tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            .highcharts-data-table tr:hover {
                                background: #f1f7ff;
                            }

                            /* year wise highchart ends here  */




                            .highcharts-figureOrder,
                            .highcharts-data-table table {
                                width: 900px;
                                margin: 1rem 0;
                            }

                            #containerOrder {
                                height: 400px;
                            }


                            #datatable {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #ebebeb;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            #datatable caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            #datatable th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            #datatable td,
                            #datatable th,
                            #datatable caption {
                                padding: 0.5em;
                            }

                            #datatable thead tr,
                            #datatable tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            #datatable tr:hover {
                                background: #f1f7ff;
                            }

                            /*Ends here mineHighchart  */

                            /* order produce css starts here  */
                            .highcharts-figureOP,
                            .highcharts-data-table table {
                                width: 1000px;
                                margin: 1em auto;
                            }

                            #orderProduce {
                                height: 400px;
                            }

                            .highcharts-data-table table {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #ebebeb;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            .highcharts-data-table caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            .highcharts-data-table th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            .highcharts-data-table td,
                            .highcharts-data-table th,
                            .highcharts-data-table caption {
                                padding: 0.5em;
                            }

                            .highcharts-data-table thead tr,
                            .highcharts-data-table tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            .highcharts-data-table tr:hover {
                                background: #f1f7ff;
                            }

                            /* order produce ends here */

                            /* Produce orders starts from here  */


                            .highcharts-figurePO,
                            .highcharts-data-table table {
                                width: 1800px;
                                margin: 1em auto;
                            }

                            #datatable {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #ebebeb;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            #datatable caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            #datatable th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            #datatable td,
                            #datatable th,
                            #datatable caption {
                                padding: 0.5em;
                            }

                            #datatable thead tr,
                            #datatable tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            #datatable tr:hover {
                                background: #f1f7ff;
                            }

                            /* Produce orders css ends here */


                            .highcharts-figurePO1,
                            .highcharts-data-table table {
                                width: 1800px;
                                margin: 1em auto;
                            }

                            #datatable1 {
                                font-family: Verdana, sans-serif;
                                border-collapse: collapse;
                                border: 1px solid #ebebeb;
                                margin: 10px auto;
                                text-align: center;
                                width: 100%;
                                max-width: 500px;
                            }

                            #datatable1 caption {
                                padding: 1em 0;
                                font-size: 1.2em;
                                color: #555;
                            }

                            #datatable1 th {
                                font-weight: 600;
                                padding: 0.5em;
                            }

                            #datatable1 td,
                            #datatable1 th,
                            #datatable1 caption {
                                padding: 0.5em;
                            }

                            #datatable1 thead tr,
                            #datatable1 tr:nth-child(even) {
                                background: #f8f8f8;
                            }

                            #datatable1 tr:hover {
                                background: #f1f7ff;
                            }





                            .machinecolor {
                                background-color: #FF9999;
                            }

                            .lfbcolor {
                                background-color: #99CC66;
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
                        <!-- css styling ends here  -->

                        <!-- php starts from here  -->
                        <?php
                        $data_pointsorderqty = array();
                        $lineNamesorderqty = array();
                        $Monthsorderqty = array();
                        $Monthsplanqty = array();

                        foreach ($OrdersandPlanning as $key) {
                            $point1 = array("label" => $key['OrderQty'], "x" => Round($key['OrderQty'], 0), "y" => $key['Month'], "z" => Round($key['PlanQty'], 0));
                            array_push($data_pointsorderqty, $point1);
                            array_push($lineNamesorderqty, $key['OrderQty']);
                            array_push($Monthsorderqty, $key['Month']);
                            array_push($Monthsplanqty, $key['PlanQty']);
                        }
                        $MonthlyOrders = array();
                        foreach ($monthlyOrder as $key) {
                            $FactoryCode =  $key['FactoryCode'];
                            $point2 = [
                                'name' => $key['FactoryCode'],
                                'y' => $key['OrderQty'],
                                'drilldown' => $key['FactoryCode'],
                            ];


                            if ($FactoryCode == 'B34001') {
                                $B34001Mnonth = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34002') {
                                $B34002Mnonth = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34003') {
                                $B34003Mnonth = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34004') {
                                $B34004Mnonth = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34005') {
                                $B34005Mnonth = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34006') {
                                $B34006Mnonth = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34007') {
                                $B34007Mnonth = $key['OrderQty'];
                            }
                            array_push($MonthlyOrders, $point2);
                        }
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
                                array_push($b34001RFT, $RFT);
                            }
                            if ($key['FactoryCode'] == 'B34002') {
                                array_push($b34002, $key['pass']);
                                array_push($b34002Check, $key['TotalChecked']);
                                array_push($b34002Fail, $key['Fail']);
                                $Check = $key['TotalChecked'];
                                $PassQty = $key['pass'];
                                $RFT = ($PassQty / $Check) * 100;
                                array_push($b34002RFT, $RFT);
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

                        $Fail = $Checked - $Produced;
                        $RFTTop = $Produced - $Fail;
                        if ($Produced == 0) {
                            $RFT = 0;
                        } else {
                            $RFT = ($RFTTop / $Produced);
                        }

                        $FinalRF = (($Produced / $Checked) * 100);
                        if ($Checked == 0) {
                            $Precentage = 0;
                        } else {
                            $Precentage = (($Checked - $Fail) / $Checked) * 100;
                        }

                        $Finalprenentage = 100 - $Precentage;
                        $B34001data_points2 = [];
                        $B34001data_order = [];
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
                        $B34001Artorder = [];
                        $B34002Artorder = [];
                        $B34003Artorder = [];
                        $B34004Artorder = [];
                        $B34005Artorder = [];
                        $B34006Artorder = [];
                        $B34007Artorder = [];
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




                        foreach ($monthlyOrderall as $key) {
                            $FactoryCode = $key['FactoryCode'];

                            if ($FactoryCode == 'B34007') {
                                $OrderB43007 = [
                                    $key['ArtCode'],
                                    Round($key['OrderQty']),
                                ];
                                array_push($B34007Artorder, $OrderB43007);
                                $B43007Order = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34006') {
                                $OrderB43006 = [
                                    $key['ArtCode'],
                                    Round($key['OrderQty']),
                                ];
                                array_push($B34006Artorder, $OrderB43006);
                                $B43006Order = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34005') {
                                $OrderB43005 = [
                                    $key['ArtCode'],
                                    Round($key['OrderQty']),
                                ];
                                array_push($B34005Artorder, $OrderB43005);
                                $B43005Order = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34004') {
                                $OrderB43004 = [
                                    $key['ArtCode'],
                                    Round($key['OrderQty']),
                                ];
                                array_push($B34004Artorder, $OrderB43004);
                                $B43004Order = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34003') {
                                $OrderB43003 = [
                                    $key['ArtCode'],
                                    Round($key['OrderQty']),
                                ];
                                array_push($B34003Artorder, $OrderB43003);
                                $B43003Order = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34002') {
                                $OrderB43002 = [
                                    $key['ArtCode'],
                                    Round($key['OrderQty']),
                                ];
                                array_push($B34002Artorder, $OrderB43002);
                                $B43002Order = $key['OrderQty'];
                            }
                            if ($FactoryCode == 'B34001') {
                                $OrderB43001 = [
                                    $key['ArtCode'],
                                    Round($key['OrderQty']),
                                ];
                                array_push($B34001Artorder, $OrderB43001);
                                $B43001Order = $key['OrderQty'];
                            }
                        }


                        foreach ($FactoryWiseProductionmonthly as $Keys) {
                            $FactoryCode = $Keys['FactoryCode'];
                            if ($FactoryCode == 'B34007') {
                                $B43007Pass = $Keys['TotalChecked'];
                                if ($B43007Pass) {
                                    $B43007Pass = $Keys['TotalChecked'];
                                } else {
                                    $B43007Pass = 0;
                                }
                            } else if ($FactoryCode == 'B34006') {
                                $B43006Pass = $Keys['TotalChecked'];
                                if ($B43006Pass) {
                                    $B43006Pass = $Keys['TotalChecked'];
                                } else {
                                    $B43005Pass = 0;
                                }
                            } else if ($FactoryCode == 'B34005') {
                                $B43005Pass = $Keys['TotalChecked'];
                                if ($B43005Pass) {
                                    $B43005Pass = $Keys['TotalChecked'];
                                } else {
                                    $B43005Pass = 0;
                                }
                            } else if ($FactoryCode == 'B34004') {
                                $B43004Pass = $Keys['TotalChecked'];
                                if ($B43004Pass) {
                                    $B43004Pass = $Keys['TotalChecked'];
                                } else {
                                    $B43004Pass = 0;
                                }
                            } else if ($FactoryCode == 'B34003') {
                                $B43003Pass = $Keys['TotalChecked'];
                                if ($B43003Pass) {
                                    $B43003Pass = $Keys['TotalChecked'];
                                } else {
                                    $B43003Pass = 0;
                                }
                            } else if ($FactoryCode == 'B34002') {
                                $B43002Pass = $Keys['TotalChecked'];
                                if ($B43002Pass) {
                                    $B43002Pass = $Keys['TotalChecked'];
                                } else {
                                    $B43002Pass = 0;
                                }
                            } else if ($FactoryCode == 'B34001') {
                                $B43001Pass = $Keys['TotalChecked'];
                                if ($B43001Pass) {
                                    $B43001Pass = $Keys['TotalChecked'];
                                } else {
                                    $B43001Pass = 0;
                                }
                            } else {
                                $B43002Pass = 0;
                                $B43003Pass = 0;
                                $B43004Pass = 0;
                                $B43001Pass = 0;
                            }
                        }

                        // Total percentage of the Production 
                        $totalProduction = $B43001Pass + $B43002Pass + $B43003Pass + $B43004Pass + $B43005Pass + $B43006Pass + $B43007Pass;
                        $B43001Per = ($B43001Pass / $totalProduction) * 100;
                        $B43002Per = ($B43002Pass / $totalProduction) * 100;
                        $B43003Per = ($B43003Pass / $totalProduction) * 100;
                        $B43004Per = ($B43004Pass / $totalProduction) * 100;
                        $B43005Per = ($B43005Pass / $totalProduction) * 100;
                        $B43006Per = ($B43006Pass / $totalProduction) * 100;
                        $B43007Per = ($B43007Pass / $totalProduction) * 100;

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
                            array_push($B34004data_points2, $pointB43004);

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
                        $yearllyData = [];

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
                        // print_r($getmonthly);
                        foreach ($Yearandmonth as $key) {
                            $Month =  $key['Month'];
                            $Year =  $key['Year'];

                            array_push($Yearly, $Month . ',' . $Year);
                            //array_push($Yearly, $Month);
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

                        <!-- php ends here -->

                        <!-- Dashboard starts from here  -->
                        <ul class="nav nav-pills justify-content-center mb-1  p-3" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_direction-1">Production</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-2">RFT</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-3">Defects</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-4">Orders/Planning</a></li>
                        </ul>
                        <!-- <h1 class="text-center">Dashboard</h1> -->
                        <!-- container starts from here  -->
                        <div class="container-fluid bg-light " style="height: 1400px;width:100%;">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_direction-1" role="tabpanel" style="margin: 0;">
                                    <div class="row  mt-2 p-3" style="height: 1200px; width:100%;margin-left:0px;">

                                        <div class="col-md-6  p-3">

                                            <div class="card  h-30 mb-4 p-2 ">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12 mt-5 ">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="subheader-block  align-items-center">
                                                                        <div class=" justify-content-center mr-3">
                                                                            <span class="fw-300 fs-xs d-block opacity-50">
                                                                                <h4 style="color: #FF9999;font-weight:bold">Total Prod</h4>
                                                                            </span>
                                                                            <span class="mh-100 fs-xl d-block color-primary-500" style="font-weight:bold">
                                                                                <?php echo $Produced; ?>
                                                                            </span>
                                                                        </div>
                                                                        <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#886ab5" sparkHeight="50px" sparkBarWidth="10px" values="<?php echo $last5pass; ?>"></span>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="subheader-block  align-items-center">
                                                                        <div class="justify-content-center mr-3">
                                                                            <span class="fw-300 fs-xs d-block opacity-50">
                                                                                <h4 style="color: #FF9999;font-weight:bold">Total Check</h4>
                                                                            </span>
                                                                            <span class="mh-100 fs-xl d-block color-primary-500 " style="font-weight:bold">
                                                                                <?php echo $Checked; ?>
                                                                            </span>
                                                                        </div>
                                                                        <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#8FBC8F" sparkHeight="50px" sparkBarWidth="10px" values="<?php echo $last5check; ?>"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="subheader-block  align-items-center">
                                                                        <div class=" justify-content-center mr-3">
                                                                            <span class="fw-300 fs-xs d-block opacity-50">
                                                                                <h4 style="color: #FF9999;font-weight:bold">Total Pass</h4>
                                                                            </span>
                                                                            <span class="mh-100 fs-xl d-block color-primary-500" style="font-weight:bold">
                                                                                <?php echo $Produced; ?>
                                                                            </span>
                                                                        </div>
                                                                        <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#778899" sparkHeight="50px" sparkBarWidth="10px" values="<?php echo $last5pass; ?>"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="subheader-block  align-items-center">
                                                                        <div class=" justify-content-center mr-3">
                                                                            <span class="fw-300 fs-xs d-block opacity-50">
                                                                                <h4 style="color: #FF9999;font-weight:bold">Total Fail</h4>
                                                                            </span>
                                                                            <span class="mh-100 fs-xl d-block color-primary-500" style="font-weight:bold">
                                                                                <?php echo $Fail; ?>
                                                                            </span>
                                                                        </div>
                                                                        <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#696969" sparkHeight="50px" sparkBarWidth="10px" values="<?php echo $last5fail; ?>"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 ">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div>
                                                                                <?php
                                                                                $FinalRF;
                                                                                $Finalprenentage;
                                                                                $RFTVALUE = $FinalRF / 10;
                                                                                ?>
                                                                                <h4 class="  mb-0 mt-md-0">Avg RFT</h4>
                                                                                <h4 class="font-weight-bold mb-0"><?php echo Round($FinalRF, 2) ?>%</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div>
                                                                                <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#967bbd&quot;, &quot;#ccbfdf&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }"><?php echo Round($RFTVALUE, 0);  ?>/10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="col-md-2 ">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div>
                                                                                <h4 class="mb-0 mt-md-0 ">Def Percentage </h4>
                                                                                <h4 class="font-weight-bold mb-0"><?php echo Round($Finalprenentage, 2); ?>%</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div>
                                                                                <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#2196F3&quot;, &quot;#9acffa&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }"><?php echo Round($Finalprenentage, 0); ?>/10</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12  mt-5">

                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <div type="button" class="btn w-100" data-toggle="modal" data-target="#exampleModal01">
                                                                        <div class=" p-3  bg-primary-300 rounded overflow-hidden position-relative text-white w-100">
                                                                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                                                <?php echo Round($b34001 ? $b34001[0] : 0, 0) ?>
                                                                                <small class="m-0 l-h-n">Hand Stich Ball (B34001)</small>
                                                                            </h3>

                                                                            <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade bd-example-modal-xl " id="exampleModal01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">

                                                                            <div class="modal-content " style="width:1200px;">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title " id="exampleModalLabel">Hand Stich Ball Graph</h5>
                                                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-3">
                                                                                            <div id="AllPrd01"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-3">

                                                                    <div type="button" class="btn w-100" data-toggle="modal" data-target="#exampleModal02">
                                                                        <div class=" p-3  bg-warning-400 rounded overflow-hidden position-relative text-white w-100">

                                                                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                                                <?php echo Round($b34002 ? $b34002[0] : 0, 0) ?>
                                                                                <small class="m-0 l-h-n">Competition &nbsp;&nbsp;&nbsp; Ball (B34002)</small>
                                                                            </h3>


                                                                            <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade  bd-example-modal-xl " id="exampleModal02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">

                                                                            <div class="modal-content " style="width:1200px;">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title " id="exampleModalLabel">Competition Ball Graph</h5>
                                                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body ">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-3">
                                                                                            <div id="AllPrd02"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div type="button" class="btn w-100 " data-toggle="modal" data-target="#exampleModal03">
                                                                        <div class=" p-3  bg-success-200 rounded overflow-hidden position-relative text-white w-100">


                                                                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                                                <?php echo Round($b34003 ? $b34003[0] : 0, 0) ?>
                                                                                <small class="m-0 l-h-n">Finale Ball (B34003)</small>
                                                                            </h3>

                                                                            <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade  bd-example-modal-xl" id="exampleModal03" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">

                                                                            <div class="modal-content " style="width:1200px;">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title " id="exampleModalLabel">Finale Ball Graph</h5>
                                                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-3">
                                                                                            <div id="AllPrd03"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                </div>



                                                                <div class="col-md-3">

                                                                    <div type="button" class="btn w-100 " data-toggle="modal" data-target="#exampleModal04">
                                                                        <div class=" p-3  bg-info-200 rounded overflow-hidden position-relative text-white w-100 ">


                                                                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                                                <?php echo Round($b34004 ? $b34004[0] : 0, 0) ?>
                                                                                <small class="m-0 l-h-n">Urban Ball (B34004)</small>
                                                                            </h3>


                                                                            <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade bd-example-modal-xl " id="exampleModal04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">

                                                                            <div class="modal-content " style="width:1200px;">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title " id="exampleModalLabel">Urban Ball Graph</h5>
                                                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-3">
                                                                                            <div id="AllPrd04"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-3">

                                                                    <div type="button" class="btn w-100 " data-toggle="modal" data-target="#exampleModal">
                                                                        <div class=" p-3  machinecolor rounded overflow-hidden position-relative text-white w-100 ">


                                                                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                                                <?php echo Round($b34005 ? $b34005[0] : 0, 0) ?>
                                                                                <small class="m-0 l-h-n">Machine Stich Ball (B34005)</small>
                                                                            </h3>


                                                                            <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade bd-example-modal-xl " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">

                                                                            <div class="modal-content " style="width:1200px;">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title " id="exampleModalLabel">Machine Stich Graph</h5>
                                                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-3">
                                                                                            <div id="AllPrd05"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div type="button" class="btn w-100 " data-toggle="modal" data-target="#exampleModal06">
                                                                        <div class=" p-3 bg-info  machinecolor rounded overflow-hidden position-relative text-white w-100 ">


                                                                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                                                <?php echo Round($b34006 ? $b34006[0] : 0, 0) ?>
                                                                                <small class="m-0 l-h-n">Airless Mini Ball (B34006)</small>
                                                                            </h3>


                                                                            <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade bd-example-modal-xl " id="exampleModal06" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">

                                                                            <div class="modal-content " style="width:1200px;">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title " id="exampleModalLabel">Airless Mini Ball Graph</h5>
                                                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-3">
                                                                                            <div id="AllPrd06"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div type="button" class="btn w-100 " data-toggle="modal" data-target="#exampleModal07">
                                                                        <div class=" p-3 lfbcolor   rounded overflow-hidden position-relative text-white w-100 ">


                                                                            <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                                                <?php echo Round($b34007 ? $b34007[0] : 0, 0) ?>
                                                                                <small class="m-0 l-h-n">LFB Ball (B34007)</small>
                                                                            </h3>


                                                                            <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal fade bd-example-modal-xl" id="exampleModal07" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-xl" role="document">

                                                                            <div class="modal-content ">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title " id="exampleModalLabel">LFB Ball Graph</h5>
                                                                                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-3">
                                                                                            <div id="AllPrd07"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card h-50 ">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="monthlydata"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6  p-3 ">

                                            <div class="card  h-30 mb-4 ">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="AllPrd"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card  h-50 ">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="containerYear"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div> <!-- Row ends here  -->
                                </div> <!-- first tabdirection-1 ends here -->

                                <div class="tab-pane fade mx-5 p-5 panelAlign" id="tab_direction-2" role="tabpanel">
                                    <div class="row">

                                        <div class="col-lg-12 ">
                                            <h1 class="text-start">Filter Criteria : </h1>
                                            <div class="row ">
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
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="AllPrdrft"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="weeklyrft"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="monthlyrft"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="yearlyrft"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div> <!-- tab direction 2 ends here  -->

                                <div class="tab-pane fade mx-5 p-5 panelAlign" id="tab_direction-3" role="tabpanel">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <h1 class=" text-start">Filter Criteria : </h1>
                                            <div class="row">


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
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="AllPrddef"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="weeklydef"> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="monthlydef"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-3">
                                                <div id="yearlydef"></div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div> <!-- tab direction 3 ends here  -->

                                <div class="tab-pane fade p-5 m-5" id="tab_direction-4" role="tabpanel" >
                                    <figure class="highcharts-figureMine">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-3">
                                            <div id="containerMine"></div>
                                            </div>
                                        </div>
                                    </figure>
                                    <br>


                                </div><!-- tab direction 4 ends here  -->

                            </div> <!-- end of tab content -->


                        </div>
                        <!-- container Ends from here  -->

                        <!-- BEGIN Page Footer -->
                        <footer class="page-footer" role="contentinfo">
                            <div class="d-flex align-items-center flex-1 text-muted">
                                <span class="hidden-md-down fw-700">2021 © Forward Sports by&nbsp;IT Dept Forward Sports</span>
                            </div>
                            <div>

                            </div>
                        </footer>
                        <!-- ENd Page Footer -->



                        <!-- JAVASCRIPT Starts  HERE  -->
                        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
                        <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
                
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
                        <script src="<?php echo base_url(); ?>/assets/js/miscellaneous/jqvmap/jqvmap.bundle.js"></script>

                        <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/data.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/series-label.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/drilldown.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/export-data.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/accessibility.js"></script>
                        <script src="https://code.highcharts.com/highcharts-more.js"></script>
                        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/data.js"></script>
                        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
            
                        <script type="text/javascript">
                            window.onload = function() {
                                //  All highcharts grapghs comes here 


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
                                                color: '#346CDD',
                                                data: <?php echo json_encode(
                                                            $B34001data_points2,
                                                            JSON_NUMERIC_CHECK
                                                        ); ?>,
                                            },
                                            {
                                                name: "B34002",
                                                id: "B34002",
                                                color: '#346CDD',
                                                data: <?php echo json_encode(
                                                            $B34002data_points2,
                                                            JSON_NUMERIC_CHECK
                                                        ); ?>,
                                            },
                                            {
                                                name: "B34003",
                                                id: "B34003",
                                                color: '#346CDD',
                                                data: <?php echo json_encode(
                                                            $B34003data_points2,
                                                            JSON_NUMERIC_CHECK
                                                        ); ?>,
                                            },
                                            {
                                                name: "B34004",
                                                id: "B34004",
                                                color: '#346CDD',
                                                data: <?php echo json_encode(
                                                            $B34004data_points2,
                                                            JSON_NUMERIC_CHECK
                                                        ); ?>,
                                            },
                                            {
                                                name: "B34005",
                                                id: "B34005",
                                                color: '#F88379',
                                                data: <?php echo json_encode(
                                                            $B34005data_points2,
                                                            JSON_NUMERIC_CHECK
                                                        ); ?>,
                                            },
                                            {
                                                name: "B34006",
                                                id: "B34006",
                                                color: '#346CDD',
                                                data: <?php echo json_encode(
                                                            $B34006data_points2,
                                                            JSON_NUMERIC_CHECK
                                                        ); ?>,
                                            },
                                            {
                                                name: "B34007",
                                                id: "B34007",
                                                color: '#93C572',
                                                data: <?php echo json_encode(
                                                            $B34007data_points2,
                                                            JSON_NUMERIC_CHECK
                                                        ); ?>,

                                            }
                                        ]
                                    }
                                });
                                Highcharts.chart('containerYear', {
                                    chart: {
                                        type: 'area'
                                    },
                                    accessibility: {
                                        description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
                                    },
                                    title: {
                                        text: 'Yearly Production'
                                    },
                                    // subtitle: {
                                    //     text: 'Sources: <a href="https://thebulletin.org/2006/july/global-nuclear-stockpiles-1945-2006">' +
                                    //     'thebulletin.org</a> & <a href="https://www.armscontrol.org/factsheets/Nuclearweaponswhohaswhat">' +
                                    //     'armscontrol.org</a>'
                                    // },
                                    yAxis: {
                                        title: {
                                            text: 'Number of Balls'
                                        }
                                    },

                                    xAxis: {
                                        categories: <?php echo json_encode($Yearly, JSON_NUMERIC_CHECK); ?>,
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
                                });

                                Highcharts.chart('AllPrd01', {
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
                                        color: '#F88379',
                                        data: <?php echo json_encode(
                                                    $B34001data_points2,
                                                    JSON_NUMERIC_CHECK
                                                ); ?>,

                                    }],

                                });

                                Highcharts.chart('AllPrd02', {
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
                                        color: '#346CDD',
                                        data: <?php echo json_encode(
                                                    $B34002data_points2,
                                                    JSON_NUMERIC_CHECK
                                                ); ?>,

                                    }],

                                });

                                Highcharts.chart('AllPrd03', {
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
                                        color: '#346CDD',
                                        data: <?php echo json_encode(
                                                    $B34003data_points2,
                                                    JSON_NUMERIC_CHECK
                                                ); ?>,

                                    }],

                                });

                                Highcharts.chart('AllPrd04', {
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
                                        color: '#346CDD',
                                        data: <?php echo json_encode(
                                                    $B34004data_points2,
                                                    JSON_NUMERIC_CHECK
                                                ); ?>,

                                    }],

                                });


                                Highcharts.chart('AllPrd05', {
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
                                        color: '#F88379',
                                        data: <?php echo json_encode(
                                                    $B34005data_points2,
                                                    JSON_NUMERIC_CHECK
                                                ); ?>,

                                    }],

                                });

                                Highcharts.chart('AllPrd06', {
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
                                        color: '#346CDD',
                                        data: <?php echo json_encode(
                                                    $B34006data_points2,
                                                    JSON_NUMERIC_CHECK
                                                ); ?>,

                                    }],

                                });

                                Highcharts.chart('AllPrd07', {
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
                                        color: '#93C572',
                                        data: <?php echo json_encode(
                                                    $B34007data_points2,
                                                    JSON_NUMERIC_CHECK
                                                ); ?>,

                                    }],

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
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34001ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34002",
                                id: "B34002",
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34002ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34003",
                                id: "B34003",
                                ccolor: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34003ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34004",
                                id: "B34004",
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34004ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34005",
                                id: "B34005",
                                color: '#F88379',
                                data: <?php echo json_encode(
                                            $B34005ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34006",
                                id: "B34006",
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34006ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34007",
                                id: "B34007",
                                color: '#93C572',
                                data: <?php echo json_encode(
                                            $B34007ArtRFT,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,

                            }
                        ]
                    }
                });

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

var colors = ['#3B97B2', '#67BC42', '#FF56DE', '#E6D605', '#BC36FE', '#000'];

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
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34001ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34002",
                                id: "B34002",
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34002ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34003",
                                id: "B34003",
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34003ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34004",
                                id: "B34004",
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34004ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34005",
                                id: "B34005",
                                color: '#F88379',
                                data: <?php echo json_encode(
                                            $B34005ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34006",
                                id: "B34006",
                                color: '#346CDD',
                                data: <?php echo json_encode(
                                            $B34006ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,
                            },
                            {
                                name: "B34007",
                                id: "B34007",
                                color: '#93C572',
                                data: <?php echo json_encode(
                                            $B34007ArtFail,
                                            JSON_NUMERIC_CHECK
                                        ); ?>,

                            }
                        ]
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

Highcharts.chart('containerMine', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Orders & Planning'
                },
                subtitle: {

                },
                xAxis: {
                    categories: <?php echo json_encode($Monthsorderqty, JSON_NUMERIC_CHECK); ?>,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: ''
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0">{point.y:.1f}</td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
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
                series: [{
                    color: "#33cccc",
                    name: 'Orders',
                    data: <?php echo json_encode($lineNamesorderqty, JSON_NUMERIC_CHECK); ?>
                }, {
                    color: "#1a8cff",
                    name: 'Planning',
                    data: <?php echo json_encode($Monthsplanqty, JSON_NUMERIC_CHECK); ?>
                }]

            });



                            }
                        </script>

                        <!-- JAVASCRIPT ENDS HERE -->



                        <script>
                            $(document).ready(function() {

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
                        <script>
                            $(".pie").peity("pie");
                            $(".donut").peity("donut");
                            $(".line").peity("line");
                            $(".bar").peity("bar");
                        </script>
    </body>


    </html>


<?php
} ?>