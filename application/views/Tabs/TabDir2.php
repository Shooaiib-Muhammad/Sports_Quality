


    <body>


    

        <?php $this->load->view('includes/new_header'); ?>

        <div class="row mt-5">
                        <div class="col-md-12">
                            <h1 class="display-4 font-weight-bold text-center">Today RFT</h1>
                        </div>
        </div>

        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <main id="js-page-content" role="main" class="page-content">

            

                    
                                                <div class="row mb-5" >

                                                    <div class="col-md-12">
                                                        <h1 style="display:none" class="text-start">Filter Criteria : </h1>
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
                                                            <div class="col-md-12">
                                                            <div id="AllPrdrft"></div>
                                                            </div>
                                                        </div>
                                                        <div id="weeklyrftDisplay" class="row">
                                                            <div class="col-md-12">
                                                                <h3 class="text-center font-weight-bold mb-5">Weekly RFT</h3>
                                                            <div id="weeklyrft"></div>
                                                            </div>
                                                        </div>
                                                        <div id="monthlyrftDisplay" class="row">
                                                            <div class="col-md-12">
                                                            <h3 class="text-center font-weight-bold mb-5">Monthly RFT</h3>

                                                            <div id="monthlyrft"></div>

                                                            </div>
                                                        </div>
                                                        <div id="yearlyrftDisplay" class="row">
                                                            <div class="col-md-12">
                                                            <h3 class="text-center font-weight-bold mb-5">Monthly RFT</h3>

                                                            <div id="yearlyrft"></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                         

        </main>

        </div>

        </div>

        </div>

        </body>

        <?php


                        //    print_r($YearData);
                        //    die;
                        // $MonthlyOrders = [];
                        // //Print_r($last5dayProduction);
                        // foreach ($monthlyOrder as $key) {
                        //     $FactoryCode=  $key['FactoryCode'];
                        //     $OrderQty= $key['OrderQty'];
                        //         [$FactoryCode,$OrderQty],
                        // }
                        //     array_push($lastCheck, $Checklast);
                        //     ['factoryCode', 24.8],


$data_pointsorderqty = array();
$lineNamesorderqty = array();
$Monthsorderqty = array();
$Monthsplanqty = array();

foreach($OrdersandPlanning as $key) {
$point1 = array("label" => $key['OrderQty'] , "x" => Round($key['OrderQty'],0), "y" => $key['Month'], "z" => Round($key['PlanQty'],0));
array_push($data_pointsorderqty, $point1); 
array_push($lineNamesorderqty, $key['OrderQty']);
array_push($Monthsorderqty, $key['Month']);
array_push($Monthsplanqty, $key['PlanQty']);

}



                        $MonthlyOrders = array();
                        foreach ($monthlyOrder as $key) {
                            $FactoryCode =  $key['FactoryCode'];
                            //     $OrderQty= $key['OrderQty'];

                            // $point2 = array($FactoryCode , $OrderQty);

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
                        if ($Produced == 0) {
                            $RFT = 0;
                        } else {
                            $RFT = ($RFTTop / $Produced);
                        }

                        $FinalRF =(($Produced/$Checked)* 100);
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
                        // print_r($monthlyOrderall);
                        // print_r($B43002Order);

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
                                $B43001Pass= 0;
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

                        // echo $B43001Per;
                        // echo "<br>";
                        // echo $B43002Per;
                        // echo "<br>";
                        // echo $B43003Per;
                        // echo "<br>";
                        // echo $B43004Per;
                        // echo "<br>";
                        // echo $B43005Per;
                        // echo "<br>";
                        // echo $B43006Per;
                        // echo "<br>";
                        // echo $B43007Per;






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
                $yearllyData= [];
                
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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js" type="text/javascript">
        </script>
                <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
                <!-- <script src="<?php echo base_url(); ?>/assets/js/data.js"></script> -->
                <script src="<?php echo base_url(); ?>/assets/js/series-label.js"></script>
                <script src="<?php echo base_url(); ?>/assets/js/drilldown.js"></script>
                <script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>
                <script src="<?php echo base_url(); ?>/assets/js/export-data.js"></script>
                <script src="<?php echo base_url(); ?>/assets/js/accessibility.js"></script>






        <script>


$(document).ready(function(){


    Highcharts.chart('weeklyrft', {

title: {
    text: ''
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


Highcharts.chart('AllPrdrft', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: ''
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

                    
                    Highcharts.chart('monthlyrft', {

title: {
    text: ''
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
    text: ''
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

})
                    
        </script>


<script>
            $(document).ready(function() {
                //alert("Datatables");
                $("#DailyGraph").show();
                $("#weeklygraph").hide();
                $("#monthlygraph").hide();
                $("#Yearlygraph").hide();

                $("#weeklyrft").hide();
                $("#weeklyrftDisplay").hide();
                $("#monthlyrft").hide();
                $("#monthlyrftDisplay").hide();
                $("#yearlyrft").hide();
                $("#yearlyrftDisplay").hide();



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
                    $("#weeklyrftDisplay").hide();
                    $("#monthlyrft").hide();
                    $("#monthlyrftDisplay").hide();

                    $("#yearlyrft").hide();
                    $("#yearlyrftDisplay").hide();

                    $("#AllPrdrft").show();
                });
                $("#defaultInline6Radio").click(function() {
                    $("#weeklyrft").show();
                    $("#weeklyrftDisplay").show();
                    $("#monthlyrft").hide();
                    $("#monthlyrftDisplay").hide();

                    $("#yearlyrft").hide();
                    $("#AllPrdrft").hide();
                });
                $("#defaultInline7Radio").click(function() {
                    $("#weeklyrft").hide();
                    $("#weeklyrftDisplay").hide();
                    $("#monthlyrft").show();
                    $("#monthlyrftDisplay").show();

                    $("#yearlyrft").hide();
                    $("#yearlyrftDisplay").hide();

                    $("#AllPrdrft").hide();
                });
                $("#defaultInline8Radio").click(function() {
                    $("#weeklyrft").hide();
                    $("#weeklyrftDisplay").hide();
                    $("#monthlyrft").hide();
                    $("#monthlyrftDisplay").hide();
                    $("#yearlyrft").show();
                    $("#yearlyrftDisplay").show();

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
            $(document).ready(function() {
                //alert("Datatables");
              
            });

        
            setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= "http://192.168.40.4:2000/sports/DASH3";
}, 20000);


        </script>



