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
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'Pass' || $k == 'TotalChecked' || $k == 'Fail') {
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
          $forming002 = array();
          foreach ($datasum002 as $key => $value) {
            foreach ($value as $k => $v) {
              if ($k == 'Pass' || $k == 'Fail') {
                continue;
              }
              $points1 = [
                'name' => $k,
                'y' => $v
              ];
              array_push($forming002, $points1);
            }
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
          $forming003 = array();
          foreach ($datasum003 as $key => $value) {
            foreach ($value as $k => $v) {
              if ($k == 'Pass' || $k == 'Fail') {
                continue;
              }
              $points1 = [
                'name' => $k,
                'y' => $v
              ];
              array_push($forming003, $points1);
            }
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
              if ($k  == 'DailyDate' || $k == 'FactoryCode' || $k == 'PassQty' || $k == 'Pass' || $k == 'TotalChecked' || $k == 'Fail') {
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
          // forming 003
          $forming004 = array();
          foreach ($datasum004 as $key => $value) {
            foreach ($value as $k => $v) {
              if ($k == 'Checked' || $k == 'Pass' || $k == 'FailQty') {
                continue;
              }
              $points1 = [
                'name' => $k,
                'y' => $v
              ];
              array_push($forming004, $points1);
            }
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
          foreach ($data as $value) {
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
                <a class="nav-link" data-toggle="tab" href="#tabCutting006" role="tab">BHF & AHF Cutting </a>
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

              <div class="tab-pane fade" id="tabCutting006" role="tabpanel">
                <div id="cutting006"> </div>
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
                <a class="nav-link active" data-toggle="tab" href="#tabCarcass007" role="tab">Carcass </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCutting007" role="tab">BHF & AHF Cutting </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabForming007" role="tab">Forming </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabFinalQC007" role="tab">Final QC </a>
              </li>

            </ul>
            <div class="tab-content py-3">
              <div class="tab-pane fade show active" id="tabCarcass007" role="tabpanel">
                <div id="carcass007"> </div>
              </div>

              <div class="tab-pane fade" id="tabCutting007" role="tabpanel">
                <div id="cutting007"> </div>
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
<script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
<!-- <script src="<?php echo base_url(); ?>/assets/js/data.js"></script> -->
<script src="<?php echo base_url(); ?>/assets/js/series-label.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/drilldown.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/export-data.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/accessibility.js"></script>
<script>
 // START GRAPH B34002
 Highcharts.chart('printing002', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($forming002, JSON_NUMERIC_CHECK); ?>

      }]
    });
    Highcharts.chart('endLineQC002', {
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($forming003, JSON_NUMERIC_CHECK); ?>

      }]
    });
    Highcharts.chart('endLineQC003', {
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($forming004, JSON_NUMERIC_CHECK); ?>

      }]
    });

    Highcharts.chart('endLineQC004', {
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
    Highcharts.chart('bladderWinding005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($bladderUnWindingDateName005, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataBUW005, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('endLineQC005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($endLineDateName005, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataEL005, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('pivot005', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($pivotDateName005, JSON_NUMERIC_CHECK); ?>

      }]
    });

    // END GRAPH B34005


    // START GRAPH B34006
    Highcharts.chart('forming006', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($endLineDateName006, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drilldownDataELQC006, JSON_NUMERIC_CHECK); ?>
      }
    });

    // END GRAPH B34006

    // START GRAPH B34007
    Highcharts.chart('carcass007', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($carcassDateName007, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drillDownDataCarcass007, JSON_NUMERIC_CHECK); ?>
      }
    });
    Highcharts.chart('forming007', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php if (isset($start_date) && isset($end_date)) {
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
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
                echo json_encode("From " . $start_date . "  To  " . $end_date, JSON_NUMERIC_CHECK);
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
        colorByPoints: true,
        data: <?php echo json_encode($endLineQCDateName007, JSON_NUMERIC_CHECK); ?>

      }],
      drilldown: {
        series: <?php echo json_encode($drillDownDataEndLineQC007, JSON_NUMERIC_CHECK); ?>
      }
    });
    // END GRAPH B34007

</script>