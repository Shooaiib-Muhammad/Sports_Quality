<?php
if (!$this->session->has_userdata('user_id')) {
  redirect('');
} else {
  // print_r($pivot005);
?>

  <?php $this->load->view('includes/new_header');
  ?>

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
        <?php

          // printing 002
          $printingSeries002 = array();
          $printingDrillDown002 = array();

          foreach ($printingData002 as $key => $value) {
            $points1 = [
              'name' => substr($value['DailyDate'], 0, 11),
              'y' => $value['FailQty'],
              'drilldown' => substr($value['DailyDate'], 0, 11),
            ];
            array_push($printingSeries002, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'PanelChecked' || $k == 'FailQty') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DailyDate'], 0, 11),
              'id' => substr($value['DailyDate'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($printingDrillDown002, $drilldownSerie);
          }


          // panel Shapping 002
          $panelShappingSeries002 = array();
          $panelShappingDrillDown002 = array();
          foreach ($panelShappingData002 as $key => $value) {
            $points1 = [
              'name' => substr($value['DailyDate'], 0, 11),
              'y' => $value['Fail'],
              'drilldown' => substr($value['DailyDate'], 0, 11),
            ];
            array_push($panelShappingSeries002, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'Pass' || $k == 'TotalCheck' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DailyDate'], 0, 11),
              'id' => substr($value['DailyDate'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($panelShappingDrillDown002, $drilldownSerie);
          }
          // forming 002
          $formingSeries002 = array();
          $formingDrillDown002 = array();
          foreach ($datasum002 as $key => $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['Fail'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($formingSeries002, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DateName' || $k == 'factoryCode' || $k == 'TotalChecked' || $k == 'TotalPass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($formingDrillDown002, $drilldownSerie);
          }

          // End Line QC B34002
          $endLineQC002 = array();
          foreach ($data2sum002 as $key => $value) {
            foreach ($value as $k => $v) {
              if ($k == 'Checked' || $k == 'Pass' || $k == 'FailQty') {
                continue;
              }
              $points = [
                'name' => $k,
                'y' => $v,
              ];
              array_push($endLineQC002, $points);
            }
          }





          // printing 003
          $printingSeries003 = array();
          $printingDrillDown003 = array();
          foreach ($printingData003 as $key => $value) {
            $points1 = [
              'name' => substr($value['DailyDate'], 0, 11),
              'y' => $value['FailQty'],
              'drilldown' => substr($value['DailyDate'], 0, 11),
            ];
            array_push($printingSeries003, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'PanelChecked'  || $k == 'FailQty') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DailyDate'], 0, 11),
              'id' => substr($value['DailyDate'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($printingDrillDown003, $drilldownSerie);
          }

          // panel Shapping 003
          $panelShappingSeries003 = array();
          $panelShappingDrillDown003 = array();
          foreach ($panelShappingData003 as $key => $value) {
            $points1 = [
              'name' => substr($value['DailyDate'], 0, 11),
              'y' => $value['Fail'],
              'drilldown' => substr($value['DailyDate'], 0, 11),
            ];
            array_push($panelShappingSeries003, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'Pass' || $k == 'TotalCheck' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DailyDate'], 0, 11),
              'id' => substr($value['DailyDate'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($panelShappingDrillDown003, $drilldownSerie);
          }
          // forming 003
          $formingSeries003 = array();
          $formingDrillDown003 = array();
          foreach ($datasum003 as $key => $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['Fail'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($formingSeries003, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DateName' || $k == 'factoryCode' || $k == 'TotalChecked' || $k == 'TotalPass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($formingDrillDown003, $drilldownSerie);
          }
          // End Line QC B34003
          $endLineQC003 = array();
          foreach ($data2sum003 as $key => $value) {
            foreach ($value as $k => $v) {
              if ($k == 'Checked' || $k == 'Pass' || $k == 'FailQty') {
                continue;
              }
              $points = [
                'name' => $k,
                'y' => $v,
              ];
              array_push($endLineQC003, $points);
            }
          }






          // printing 004
          $printingSeries004 = array();
          $printingDrillDown004 = array();
          foreach ($printingData004 as $key => $value) {
            $points1 = [
              'name' => substr($value['DailyDate'], 0, 11),
              'y' => $value['FailQty'],
              'drilldown' => substr($value['DailyDate'], 0, 11),
            ];
            array_push($printingSeries004, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'PanelChecked'  || $k == 'FailQty') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DailyDate'], 0, 11),
              'id' => substr($value['DailyDate'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($printingDrillDown004, $drilldownSerie);
          }

          // panel Shapping 004
          $panelShappingSeries004 = array();
          $panelShappingDrillDown004 = array();
          foreach ($panelShappingData004 as $key => $value) {
            $points1 = [
              'name' => substr($value['DailyDate'], 0, 11),
              'y' => $value['Fail'],
              'drilldown' => substr($value['DailyDate'], 0, 11),
            ];
            array_push($panelShappingSeries004, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'Pass' || $k == 'TotalCheck' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DailyDate'], 0, 11),
              'id' => substr($value['DailyDate'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($panelShappingDrillDown004, $drilldownSerie);
          }
          // forming 004
          $formingSeries004 = array();
          $formingDrillDown004 = array();
          foreach ($datasum004 as $key => $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['Fail'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($formingSeries004, $points1);


            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DateName' || $k == 'factoryCode' || $k == 'TotalChecked' || $k == 'TotalPass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($formingDrillDown004, $drilldownSerie);
          }
          // End Line QC B34004
          $endLineQC004 = array();
          foreach ($data2sum004 as $key => $value) {
            foreach ($value as $k => $v) {
              if ($k == 'Checked' || $k == 'Pass' || $k == 'FailQty') {
                continue;
              }
              $points = [
                'name' => $k,
                'y' => $v,
              ];
              array_push($endLineQC004, $points);
            }
          }





          //Printing B34005
          $printingDateName005 = array();
          $drilldownDataPrinting005 = array();
          foreach ($printing005 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['FailQuantity'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($printingDateName005, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k == 'DateName' || $k == 'TSheetsChecked' || $k == 'PassQuantity' || $k == 'FailQuantity') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataPrinting005, $drilldownSerie);
          }
          //Bladder Winding B34005
          $bladderWindingDateName005 = array();
          $drilldownDataBW005 = array();
          foreach ($bladderWinding as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['Inspected'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($bladderWindingDateName005, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k == 'DateName' || $k == 'Inspected' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataBW005, $drilldownSerie);
          }

          //Bladder UnWinding B34005
          $bladderUnWindingDateName005 = array();
          $drilldownDataBUW005 = array();
          foreach ($bladderUnWinding as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['Inspected'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($bladderUnWindingDateName005, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k == 'DateName' || $k == 'Inspected' || $k == 'Pass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataBUW005, $drilldownSerie);
          }
          //Sheet Inspection B34005
          $sheetInspectionDateName005 = array();
          $drilldownDataSI005 = array();
          foreach ($sheetInspection005 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['TotalDefected'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($sheetInspectionDateName005, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k == 'DateName' || $k == 'TotalCheck' || $k == 'TotalPass' || $k == 'TotalDefected') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataSI005, $drilldownSerie);
          }

          // RWPD(Pivot) B34005
          $pivotDateName005 = array();
          $drillDownDataPivot005 = array();
          foreach ($pivot005 as $value) {
            if ($value == "Date") {
              continue;
            }
            $points1 = [
              'name' => $value['label'],
              'y' => intval($value['defects']),
              // 'drilldown' => intval($value['defects']),
            ];
            array_push($pivotDateName005, $points1);

            // $drilldownPoints = array();
            // foreach ($value as $k => $v) {
            //   if($k == 'Date'){
            //     continue;
            //   }
            //   $drilldownPoint = [
            //     'name' => $k,
            //     'y' => $v
            //   ];
            //   array_push($drilldownPoints, $drilldownPoint);
            // }

            // $drilldownSerie = [
            //   'name' => intval($value['defects']),
            //   'id' => intval($value['defects']),
            //   'data' => $drilldownPoints
            // ];
            // array_push($drillDownDataPivot005, $drilldownSerie);
          }
          //End Line B34005
          $endLineDateName005 = array();
          $drilldownDataEL005 = array();
          foreach ($dataEndLineQC as $value) {
            $points1 = [
              'name' => $value['LineName'],
              'y' => $value['Fail'],
              'drilldown' => $value['LineName'],
            ];
            array_push($endLineDateName005, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'DateName' || $k == 'OpenComposit' || $k == 'DailyComposit' || $k == 'CompositCornersEdges' || $k == 'LineName' || $k == 'LineID' || $k == 'TotalChecked' || $k == 'Pass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => $value['LineName'],
              'id' => $value['LineName'],
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataEL005, $drilldownSerie);
          }










          // Core B34006
          $coreName006 = array();
          $drilldownDataCore006 = array();
          foreach ($core006 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['FailQuantity'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($coreName006, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k == 'DateName' || $k == 'TotalChecked' || $k == 'PassQuantity' || $k == 'FailQuantity') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataCore006, $drilldownSerie);
          }
          // BHFCUtting B34006
          $BHFCuttingName006 = array();
          $drilldownDataBHFCutting006 = array();
          foreach ($BHFCutting006 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['FailQuantity'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($BHFCuttingName006, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k == 'DateName' || $k == 'TotalChecked' || $k == 'PassQuantity' || $k == 'FailQuantity') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataBHFCutting006, $drilldownSerie);
          }
          // AHFCUtting B34006
          $AHFCuttingName006 = array();
          $drilldownDataAHFCutting006 = array();
          foreach ($AHFCutting006 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => $value['FailQuantity'],
              'drilldown' => substr($value['DateName'], 0, 11),
            ];
            array_push($AHFCuttingName006, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k == 'DateName' || $k == 'TotalChecked' || $k == 'PassQuantity' || $k == 'FailQuantity') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataAHFCutting006, $drilldownSerie);
          }
          // Forming B34006
          $formingDateName006 = array();
          $drilldownDataForming006 = array();
          foreach ($forming006 as $value) {
            $points1 = [
              'name' => $value['LineName'],
              'y' => $value['Fail'],
              'drilldown' => $value['LineName'],
            ];
            array_push($formingDateName006, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'LineName' || $k == 'DateName' || $k == 'TotalChecked' || $k == 'pass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => $value['LineName'],
              'id' => $value['LineName'],
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataForming006, $drilldownSerie);
          }
          // packing/End Line QC B34006
          $endLineDateName006 = array();
          $drilldownDataELQC006 = array();
          foreach ($data2 as $value) {
            $points1 = [
              'name' => substr($value['LineName'], 0, 11),
              'y' => $value['Fail'],
              'drilldown' => substr($value['LineName'], 0, 11),
            ];
            array_push($endLineDateName006, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              if ($k  == 'LineName' || $k == 'DateName' || $k == 'userID' || $k == 'TotalChecked' || $k == 'pass' || $k == 'Pass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }
            $drilldownSerie = [
              'name' => substr($value['LineName'], 0, 11),
              'id' => substr($value['LineName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drilldownDataELQC006, $drilldownSerie);
          }







          // Printing B34007
          $printingDateName007 = array();
          $drillDownDataPrinting007 = array();
          foreach ($printing007 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => intval($value['TotalFail']),
              'drilldown' => substr($value['DateName'], 0, 11)
            ];
            array_push($printingDateName007, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              // print_r($k);echo "<br>";
              // print_r($v);
              if ($k == 'DateName' || $k == 'SheetsChecked' || $k == 'TotalPass' || $k == 'TotalFail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }

            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drillDownDataPrinting007, $drilldownSerie);
          }
          // Carcass B34007
          $carcassDateName007 = array();
          $drillDownDataCarcass007 = array();
          foreach ($carcass007 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => intval($value['TotalFail']),
              'drilldown' => substr($value['DateName'], 0, 11)
            ];
            array_push($carcassDateName007, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              // print_r($k);echo "<br>";
              // print_r($v);
              if ($k == 'DateName' || $k == 'TotalCheck' || $k == 'TotalPass' || $k == 'TotalFail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }

            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drillDownDataCarcass007, $drilldownSerie);
          }
          // AHFCutting B34007
          $AHFCuttingDateName007 = array();
          $drillDownAHFCutting007 = array();
          foreach ($AHFCutting007 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => intval($value['FailSheets']),
              'drilldown' => substr($value['DateName'], 0, 11)
            ];
            array_push($AHFCuttingDateName007, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              // print_r($k);echo "<br>";
              // print_r($v);
              if ($k == 'DateName' || $k == 'SheetsChecked' || $k == 'PassSheets' || $k == 'FailSheets') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }

            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drillDownAHFCutting007, $drilldownSerie);
          }
          // forming 007
          $formingDateName007 = array();
          $drillDownDataForming007 = array();
          foreach ($datasum007 as $value) {
            $points1 = [
              'name' => substr($value['DateName'], 0, 11),
              'y' => intval($value['Fail']),
              'drilldown' => substr($value['DateName'], 0, 11)
            ];
            array_push($formingDateName007, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              // print_r($k);echo "<br>";
              // print_r($v);
              if ($k == 'DateName' || $k == 'TotalChecked' || $k == 'TotalPass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }

            $drilldownSerie = [
              'name' => substr($value['DateName'], 0, 11),
              'id' => substr($value['DateName'], 0, 11),
              'data' => $drilldownPoints
            ];
            array_push($drillDownDataForming007, $drilldownSerie);
          }
          // End Line QC B34007
          $endLineQCDateName007 = array();
          $drillDownDataEndLineQC007 = array();
          foreach ($endLineQC007 as $value) {

            $points1 = [
              'name' => $value['LineName'],
              'y' => $value['Fail'],
              'drilldown' => $value['LineName']
            ];
            array_push($endLineQCDateName007, $points1);

            $drilldownPoints = array();
            foreach ($value as $k => $v) {
              // print_r($k);echo "<br>";
              // print_r($v);
              if ($k == 'DateName' || $k == 'TotalChecked' || $k == 'TotalPass' || $k == 'Fail') {
                continue;
              }
              $drilldownPoint = [
                'name' => $k,
                'y' => $v
              ];
              array_push($drilldownPoints, $drilldownPoint);
            }

            $drilldownSerie = [
              'name' => $value['LineName'],
              'id' => $value['LineName'],
              'data' => $drilldownPoints
            ];
            array_push($drillDownDataEndLineQC007, $drilldownSerie);
          }




          ?>

          <div class="row mb-2">
            <div class="col-md-12">
              <div id="panel-11" class="panel">
                <div class="panel-hdr">
                  <h2>
                    Date Filteration</span>
                  </h2>

                </div>
                <div class="panel-container show">
                  <div class="panel-content">
                    <div class="row">

                      <div class="col-md-3">
                        <input type="date" name="start_date" id="start_date" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <input type="date" name="end_date" id="end_date" class="form-control">
                      </div>

                      <div class="col-md-3">
                        <button class="btn btn-primary" name="search" id="search">Search</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="loadingShow" style="display: none;">
                <img src="<?php echo base_url('/') ?>Assets/img/loader4.gif" alt="Loading..." style="margin-left: 100%">
              </div>
            </div>
          </div>
          <div id="allRows">

            <div class="row">
              <div class="col-xl-6">
                <div id="panel-11" class="panel">
                  <div class="panel-hdr">
                    <h2>
                      B34002</span>
                    </h2>

                  </div>
                  <div class="panel-container show">
                    <div class="panel-content">
                      <div class="border px-3 pt-3 pb-0 rounded">
                        <ul class="nav nav-pills" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabPrinting002" role="tab"><i class="fal fa-home mr-1"></i>Printing </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabPanelShapping002" role="tab">Panel Shapping </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabForming002" role="tab">Forming </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabEndLineQC002" role="tab">End Line QC </a>
                          </li>
                        </ul>

                        <div class="tab-content py-3">

                          <div class="tab-pane fade show active" id="tabPrinting002" role="tabpanel">
                            <div id="printing002"></div>
                          </div>

                          <div class="tab-pane fade " id="tabPanelShapping002" role="tabpanel">
                            <div id="panelShapping002">
                            </div>
                          </div>

                          <div class="tab-pane fade" id="tabForming002" role="tabpanel">
                            <div id="forming002"></div>
                          </div>

                          <div class="tab-pane fade" id="tabEndLineQC002" role="tabpanel">
                            <div id="endLineQC002"></div>
                          </div>

                        </div>


                      </div>

                    </div>

                  </div>

                </div>

              </div>
              <div class="col-xl-6">
                <div id="panel-11" class="panel">
                  <div class="panel-hdr">
                    <h2>
                      B34003</span>
                    </h2>

                  </div>
                  <div class="panel-container show">
                    <div class="panel-content">
                      <div class="border px-3 pt-3 pb-0 rounded">
                        <ul class="nav nav-pills" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabPrinting003" role="tab"><i class="fal fa-home mr-1"></i>Printing </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabPanelShapping003" role="tab">Panel Shapping </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabForming003" role="tab">Forming </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabEndLineQC003" role="tab">End Line QC </a>
                          </li>
                        </ul>

                        <div class="tab-content py-3">

                          <div class="tab-pane fade show active" id="tabPrinting003" role="tabpanel">
                            <div id="printing003"></div>
                          </div>

                          <div class="tab-pane fade " id="tabPanelShapping003" role="tabpanel">
                            <div id="panelShapping003">
                            </div>
                          </div>

                          <div class="tab-pane fade" id="tabForming003" role="tabpanel">
                            <div id="forming003"></div>
                          </div>

                          <div class="tab-pane fade" id="tabEndLineQC003" role="tabpanel">
                            <div id="endLineQC003"></div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-6">
                <div id="panel-11" class="panel">
                  <div class="panel-hdr">
                    <h2>
                      B34004</span>
                    </h2>

                  </div>
                  <div class="panel-container show">
                    <div class="panel-content">
                      <div class="border px-3 pt-3 pb-0 rounded">
                        <ul class="nav nav-pills" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabPrinting004" role="tab"><i class="fal fa-home mr-1"></i>Printing </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabPanelShapping004" role="tab">Panel Shapping </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabForming004" role="tab">Forming </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabEndLineQC004" role="tab">End Line QC </a>
                          </li>
                        </ul>

                        <div class="tab-content py-3">

                          <div class="tab-pane fade show active" id="tabPrinting004" role="tabpanel">
                            <div id="printing004"></div>
                          </div>

                          <div class="tab-pane fade " id="tabPanelShapping004" role="tabpanel">
                            <div id="panelShapping004">
                            </div>
                          </div>

                          <div class="tab-pane fade" id="tabForming004" role="tabpanel">
                            <div id="forming004"></div>
                          </div>

                          <div class="tab-pane fade" id="tabEndLineQC004" role="tabpanel">
                            <div id="endLineQC004"></div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
              <div class="col-xl-6">
                <div id="panel-11" class="panel">
                  <div class="panel-hdr">
                    <h2>
                      B34005</span>
                    </h2>

                  </div>
                  <div class="panel-container show">
                    <div class="panel-content">
                      <div class="border px-3 pt-3 pb-0 rounded">
                        <ul class="nav nav-pills" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabPrinting005" role="tab"> <i class="fal fa-home mr-1"></i>Printing </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabBladderWinding005" role="tab">Bladder Winding </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabBladderUnwinding005" role="tab">Bladder Unwinding </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabSheetInspection005" role="tab">Sheet Inspection </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabPivot005" role="tab">RWPD(Pivot) </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabEndLineQC005" role="tab">End Line QC </a>
                          </li>
                        </ul>

                        <div class="tab-content py-3">

                          <div class="tab-pane fade show active" id="tabPrinting005" role="tabpanel">
                            <div id="printing005"></div>
                          </div>

                          <div class="tab-pane fade " id="tabBladderWinding005" role="tabpanel">
                            <div id="bladderWinding005">
                            </div>
                          </div>

                          <div class="tab-pane fade" id="tabBladderUnwinding005" role="tabpanel">
                            <div id="bladderUnwinding005"></div>
                          </div>

                          <div class="tab-pane fade" id="tabSheetInspection005" role="tabpanel">
                            <div id="sheetInspection005"></div>
                          </div>

                          <div class="tab-pane fade" id="tabPivot005" role="tabpanel">
                            <div id="pivot005"></div>
                          </div>

                          <div class="tab-pane fade" id="tabEndLineQC005" role="tabpanel">
                            <div id="endLineQC005"></div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>

            <div class="row">
              <div class="col-xl-6">
                <div id="panel-11" class="panel">
                  <div class="panel-hdr">
                    <h2>
                      B34006</span>
                    </h2>

                  </div>
                  <div class="panel-container show">
                    <div class="panel-content">
                      <div class="border px-3 pt-3 pb-0 rounded">
                        <ul class="nav nav-pills" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabCore006" role="tab"><i class="fal fa-home mr-1"></i> Core</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabBHFCutting006" role="tab">BHF Cutting </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabAHFCutting006" role="tab">AHF Cutting </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabForming006" role="tab">Forming </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabEndLineQC006" role="tab">End Line QC </a>
                          </li>

                        </ul>
                        <div class="tab-content py-3">

                          <div class="tab-pane fade show active" id="tabCore006" role="tabpanel">
                            <div id="core006"> </div>
                          </div>

                          <div class="tab-pane fade" id="tabBHFCutting006" role="tabpanel">
                            <div id="BHFCutting006"> </div>
                          </div>

                          <div class="tab-pane fade" id="tabAHFCutting006" role="tabpanel">
                            <div id="AHFCutting006"> </div>
                          </div>

                          <div class="tab-pane fade" id="tabForming006" role="tabpanel">
                            <div id="forming006"> </div>
                          </div>

                          <div class="tab-pane fade" id="tabEndLineQC006" role="tabpanel">
                            <div id="endLineQC006"> </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>

              <div class="col-xl-6">
                <div id="panel-11" class="panel">
                  <div class="panel-hdr">
                    <h2>
                      B34007</span>
                    </h2>

                  </div>

                  <div class="panel-container show">
                    <div class="panel-content">
                      <div class="border px-3 pt-3 pb-0 rounded">
                        <ul class="nav nav-pills" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabPrinting007" role="tab">Printing </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabCarcass007" role="tab">Carcass </a>
                          </li>

                          <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabBHFCutting007" role="tab">BHF Cutting </a>
                          </li> -->
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabAHFCutting007" role="tab">AHF Cutting </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabForming007" role="tab">Forming </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabFinalQC007" role="tab">Final QC </a>
                          </li>

                        </ul>
                        <div class="tab-content py-3">
                        <div class="tab-pane fade show active" id="tabPrinting007" role="tabpanel">
                            <div id="printing007"> </div>
                          </div>
                          <div class="tab-pane fade" id="tabCarcass007" role="tabpanel">
                            <div id="carcass007"> </div>
                          </div>

                          <!-- <div class="tab-pane fade" id="tabBHFCutting007" role="tabpanel">
                            <div id="BHFCutting007"> </div>
                          </div> -->

                          <div class="tab-pane fade" id="tabAHFCutting007" role="tabpanel">
                            <div id="AHFCutting007"> </div>
                          </div>

                          <div class="tab-pane fade" id="tabForming007" role="tabpanel">

                            <div id="forming007"> </div>
                          </div>

                          <div class="tab-pane fade" id="tabFinalQC007" role="tabpanel">
                            <div id="endLineQC007"> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>


            </div>
        </main>
      </div>
    </div>
  </div>

  <!-- this overlay is activated only when mobile menu is triggered -->
  <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
  <!-- BEGIN Page Footer -->


  <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
  <!-- BEGIN Page Footer -->
  <!-- <footer class="page-footer" role="contentinfo" style="position: absolute; bottom: 0px">
    <div class="d-flex align-items-center flex-1 text-muted">
      <span class="hidden-md-down fw-700">2023 © Forward Sports by &nbsp; <b> IT Dept Forward Sports</b></span>
    </div>
    <div>

    </div>
  </footer> -->
  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>

  <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
  <!-- <script src="<?php echo base_url(); ?>/assets/js/data.js"></script> -->
  <script src="<?php echo base_url(); ?>/assets/js/series-label.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/drilldown.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/export-data.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/accessibility.js"></script>

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
  </main>
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
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  <script>
    $(document).ready(function() {
      let date = new Date().toJSON().substr(0, 10);
      $("#start_date").val(date);
      $("#end_date").val(date);
    })

    $("#search").on("click", function() {
      let start_date = $("#start_date").val();
      let end_date = $("#end_date").val();

      url = '<?php echo base_url('MIS/FactoryCodes/getDateRangeData'); ?>'

      $("#loadingShow").css('display', 'inline-block');
      $("#allRows").html("");

      $.post(url, {
          'start_date': start_date,
          'end_date': end_date
        },
        function(data) {
          if (data) {
            $("#loadingShow").css('display', 'none')
            console.log("date range data is ", data);
            $("#allRows").html(data);
          }
        });
    });

    // START GRAPH B34002
    Highcharts.chart('printing002', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Printing'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Printing',
        colorByPoint: true,
        data: <?php echo json_encode($printingSeries002, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($printingDrillDown002, JSON_NUMERIC_CHECK); ?>
      }
    });

    Highcharts.chart('panelShapping002', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Panel Shapping'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Panel Shapping',
        colorByPoint: true,
        data: <?php echo json_encode($panelShappingSeries002, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($panelShappingDrillDown002, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('forming002', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Forming'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Forming',
        colorByPoint: true,
        data: <?php echo json_encode($formingSeries002, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($formingDrillDown002, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('endLineQC002', {
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      xAxis: {
        type: 'category',
        categories: ''
      },
      yAxis: {
        title: {
          text: 'End Line QC'
        }
      },
      tooltip: {
        valueSuffix: '',
        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        type: 'column',
        name: 'End Line QC',
        colorByPoint: true,
        data: <?php echo json_encode($endLineQC002, JSON_NUMERIC_CHECK); ?>

      }]
    });

    // END GRAPH B34002

    // START GRAPH B34003
    Highcharts.chart('printing003', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Printing'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Printing',
        colorByPoint: true,
        data: <?php echo json_encode($printingSeries003, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($printingDrillDown003, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('panelShapping003', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Panel Shapping'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Panel Shapping',
        colorByPoint: true,
        data: <?php echo json_encode($panelShappingSeries003, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($panelShappingDrillDown003, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('forming003', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Forming'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Forming',
        colorByPoint: true,
        data: <?php echo json_encode($formingSeries003, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($formingDrillDown003, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('endLineQC003', {
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      xAxis: {
        type: 'category',
        categories: ''
      },
      yAxis: {
        title: {
          text: 'End Line QC'
        }
      },
      tooltip: {
        valueSuffix: '',
        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        type: 'column',
        name: 'End Line QC',
        colorByPoint: true,
        data: <?php echo json_encode($endLineQC003, JSON_NUMERIC_CHECK); ?>

      }]
    });
    // END GRAPH B34003





    // START GRAPH B34004
    Highcharts.chart('printing004', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Printing'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Printing',
        colorByPoint: true,
        data: <?php echo json_encode($printingSeries004, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($printingDrillDown004, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('panelShapping004', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Panel Shapping'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Panel Shapping',
        colorByPoint: true,
        data: <?php echo json_encode($panelShappingSeries004, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($panelShappingDrillDown004, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('forming004', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Forming'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Forming',
        colorByPoint: true,
        data: <?php echo json_encode($formingSeries004, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($formingDrillDown004, JSON_NUMERIC_CHECK); ?>
      }
    });

    Highcharts.chart('endLineQC004', {
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      xAxis: {
        type: 'category',
        categories: ''
      },
      yAxis: {
        title: {
          text: 'End Line QC'
        }
      },
      tooltip: {
        valueSuffix: '',
        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        type: 'column',
        name: 'End Line QC',
        colorByPoint: true,
        data: <?php echo json_encode($endLineQC004, JSON_NUMERIC_CHECK); ?>

      }]
    });
    // START GRAPH B34004


    // START GRAPH B34005
    Highcharts.chart('printing005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Printing'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Printing',
        colorByPoint: true,
        data: <?php echo json_encode($printingDateName005, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataPrinting005, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('bladderWinding005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Bladder Winding'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Bladder Winding',
        colorByPoint: true,
        data: <?php echo json_encode($bladderWindingDateName005, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataBW005, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('bladderUnwinding005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Bladder UnWinding'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Bladder UnWinding',
        colorByPoint: true,
        data: <?php echo json_encode($bladderUnWindingDateName005, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataBUW005, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('sheetInspection005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Sheet Inspection'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Sheet Inspection',
        colorByPoint: true,
        data: <?php echo json_encode($sheetInspectionDateName005, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataSI005, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('pivot005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Pivot'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Pivot',
        colorByPoint: true,
        data: <?php echo json_encode($pivotDateName005, JSON_NUMERIC_CHECK); ?>

      }]
    });
    Highcharts.chart('endLineQC005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'End Line QC'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'End Line QC',
        colorByPoint: true,
        data: <?php echo json_encode($endLineDateName005, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataEL005, JSON_NUMERIC_CHECK); ?>
      }
    });


    // END GRAPH B34005


    // START GRAPH B34006
    Highcharts.chart('core006', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Core'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Core',
        colorByPoint: true,
        data: <?php echo json_encode($coreName006, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataCore006, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('BHFCutting006', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'BHF Cutting'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'BHF Cutting',
        colorByPoint: true,
        data: <?php echo json_encode($BHFCuttingName006, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataBHFCutting006, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('AHFCutting006', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'AHF Cutting'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'AHF Cutting',
        colorByPoint: true,
        data: <?php echo json_encode($AHFCuttingName006, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataAHFCutting006, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('forming006', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Forming'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Forming',
        colorByPoint: true,
        data: <?php echo json_encode($formingDateName006, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataForming006, JSON_NUMERIC_CHECK); ?>
      }
    });

    Highcharts.chart('endLineQC006', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'End Line QC'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'End Line QC',
        colorByPoint: true,
        data: <?php echo json_encode($endLineDateName006, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataELQC006, JSON_NUMERIC_CHECK); ?>
      }
    });

    // END GRAPH B34006

    // START GRAPH B34007
    Highcharts.chart('printing007', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Printing'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Printing',
        colorByPoint: true,
        data: <?php echo json_encode($printingDateName007, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drillDownDataPrinting007, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('carcass007', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Carcass'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Carcass',
        colorByPoint: true,
        data: <?php echo json_encode($carcassDateName007, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drillDownDataCarcass007, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('AHFCutting007', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'AHF Cutting'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'AHF Cutting',
        colorByPoint: true,
        data: <?php echo json_encode($AHFCuttingDateName007, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drillDownAHFCutting007, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('forming007', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'Forming'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'Forming',
        colorByPoint: true,
        data: <?php echo json_encode($formingDateName007, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drillDownDataForming007, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('endLineQC007', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
              if($start_date == $end_date){
                echo json_encode("Today");
              }else{
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
              }
              } ?>,
        align: 'center'
      },
      subtitle: {
        text: ''
      },
      xAxis: {
        type: 'category'

      },
      yAxis: {
        title: {
          text: 'End Line QC'
        }
      },
      tooltip: {

        headerFormat: '<span style="font-size:11px">{point.y:.2f}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>:<br/>'
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
      legend: {
        enabled: true
      },
      series: [{
        name: 'End Line QC',
        colorByPoint: true,
        data: <?php echo json_encode($endLineQCDateName007, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drillDownDataEndLineQC007, JSON_NUMERIC_CHECK); ?>
      }
    });
    // END GRAPH B34007
  </script>

  </body>

  </html>


<?php
} ?>