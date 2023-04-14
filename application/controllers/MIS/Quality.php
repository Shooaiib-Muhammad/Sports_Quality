<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quality extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MIS/Quality_Modal');

    }
    public function index()
    {
        $Date1 = date('Y-m-01', strtotime(date('Y-m') . " -10 month"));
        $Date2 = date('Y-m-t', strtotime(date('Y-m') . " +2 month"));
        $Process = 2;
        if ($Process == 1) {
            $data['table'] = 1;
        } else {
            $data['table'] = 3;
        }
        $Year = date('Y');
        $FactoryCode1 = "B34001";
        $FactoryCode2 = "B34002";
        $FactoryCode3 = "B34003";
        $FactoryCode4 = "B34004";
        $FactoryCode5 = "B34005";
        $FactoryCode6 = "B34006";
        $data['Date1'] = $Date1;
        $data['Date2'] = $Date2;
        $data['record1'] = $this->Quality_Modal->Get001Fail($Date1, $Date2, $FactoryCode1);
        $data['record2'] = $this->Quality_Modal->Get002Fail($Date1, $Date2, $FactoryCode2);
        $data['record3'] = $this->Quality_Modal->Get003Fail($Date1, $Date2, $FactoryCode3);
        $data['record4'] = $this->Quality_Modal->Get004Fail($Date1, $Date2, $FactoryCode4);
        $data['record5'] = $this->Quality_Modal->Get005Fail($Date1, $Date2, $FactoryCode5);
        $data['record6'] = $this->Quality_Modal->Get006Fail($Date1, $Date2, $FactoryCode6);
        $data['recordSum1'] = $this->Quality_Modal->Get001FailSum($Date1, $Date2);
        $data['recordSum2'] = $this->Quality_Modal->Get002FailSum($Date1, $Date2);
        $data['recordSum3'] = $this->Quality_Modal->Get003FailSum($Date1, $Date2);
        $data['recordSum4'] = $this->Quality_Modal->Get004FailSum($Date1, $Date2);
        $data['recordSum5'] = $this->Quality_Modal->Get005FailSum($Date1, $Date2);
        $data['recordSum6'] = $this->Quality_Modal->Get006FailSum($Date1, $Date2);
        $data['record'] = null;

        $this->load->view('MIS/Quality', $data);
    }

    public function GetQCData()
    {
        $FactoryCode1 = "B34001";
        $FactoryCode2 = "B34002";
        $FactoryCode3 = "B34003";
        $FactoryCode4 = "B34004";
        $FactoryCode5 = "B34005";
        $FactoryCode6 = "B34006";

        $Date1 = $this->input->post('Date1');
        $Date2 = $this->input->post('Date2');
        $Process = $this->input->post('FC');

        $data['FC'] = $Process;

        if ($Process == 1) {
            $data['Date1'] = $Date1;
            $data['Date2'] = $Date2;
            $data['table'] = 1;
            $data['record1'] = $this->Quality_Modal->Get001Fail($Date1, $Date2, $FactoryCode1);
            $data['record2'] = $this->Quality_Modal->Get002Fail($Date1, $Date2, $FactoryCode2);
            $data['record3'] = $this->Quality_Modal->Get003Fail($Date1, $Date2, $FactoryCode3);
            $data['record4'] = $this->Quality_Modal->Get004Fail($Date1, $Date2, $FactoryCode4);
            $data['record5'] = $this->Quality_Modal->Get005Fail($Date1, $Date2, $FactoryCode5);
            $data['record6'] = $this->Quality_Modal->Get006Fail($Date1, $Date2, $FactoryCode6);
            $data['recordSum1'] = $this->Quality_Modal->Get001FailSum($Date1, $Date2);
            $data['recordSum2'] = $this->Quality_Modal->Get002FailSum($Date1, $Date2);
            $data['recordSum3'] = $this->Quality_Modal->Get003FailSum($Date1, $Date2);
            $data['recordSum4'] = $this->Quality_Modal->Get004FailSum($Date1, $Date2);
            $data['recordSum5'] = $this->Quality_Modal->Get005FailSum($Date1, $Date2);
            $data['recordSum6'] = $this->Quality_Modal->Get006FailSum($Date1, $Date2);
            $data['record'] = $this->Quality_Modal->GetB34001Fail($Date1, $Date2, $Process);
            $this->load->view('MIS/Quality', $data);
        } else {
            $data['Date1'] = $Date1;
            $data['Date2'] = $Date2;
            $data['FC'] = $Process;
            $data['table'] = 2;
            $data['record'] = $this->Quality_Modal->GetB34001Fail($Date1, $Date2, $Process);
            $data['record1'] = $this->Quality_Modal->Get001Fail($Date1, $Date2, $Process);
            $data['record2'] = $this->Quality_Modal->Get002Fail($Date1, $Date2, $Process);
            $data['record3'] = $this->Quality_Modal->Get003Fail($Date1, $Date2, $Process);
            $data['record4'] = $this->Quality_Modal->Get004Fail($Date1, $Date2, $Process);
            $data['record5'] = $this->Quality_Modal->Get005Fail($Date1, $Date2, $Process);
            $data['record6'] = $this->Quality_Modal->Get006Fail($Date1, $Date2, $Process);

            $this->load->view('MIS/Quality', $data);
        }
    }

    public function Dashboard()
    {
        $this->load->view("MIS/QualityDash");
    }

    public function hs()
    {
        $code = 'B34001';
        $data['code'] = $code;
        $data['title'] = "Hand Stitch Ball";
        $result = $this->getData(get_current_date(), get_current_date(), $code);
        $data['data'] = $result;
        $this->load->view('MIS/quality/hsquality', $data);
    }

    public function competition()
    {
        $code = 'B34002';
        $data['code'] = $code;
        $data['title'] = "Competition Ball";
        $result = $this->getData(get_current_date(), get_current_date(), $code);
        $data['data'] = $result;
        $this->load->view('MIS/quality/quality', $data);
    }

    public function finale()
    {
        $code = 'B34003';
        $data['code'] = $code;
        $data['title'] = "Finale Ball";
        $result = $this->getData(get_current_date(), get_current_date(), $code);
        $data['data'] = $result;
        $this->load->view('MIS/quality/quality', $data);
    }

    public function urban()
    {
        $code = 'B34004';
        $data['code'] = $code;
        $data['title'] = "Urban Ball";
        $result = $this->getData(get_current_date(), get_current_date(), $code);
        $data['data'] = $result;
        $this->load->view('MIS/quality/quality', $data);
    }

    public function ms()
    {
        $code = 'B34005';
        $data['code'] = $code;
        $data['title'] = "Machine Stitch Ball";
        $result = $this->getData(get_current_date(), get_current_date(), $code);
        $data['data'] = $result;
        $this->load->view('MIS/quality/msquality', $data);
    }

    public function amb()
    {
        $code = 'B34006';
        $data['code'] = $code;
        $data['title'] = "Airless Mini Ball";
        $result = $this->getData(get_current_date(), get_current_date(), $code);
        $data['data'] = $result;
        $this->load->view('MIS/quality/ambquality', $data);
	}
	
	public function getLines($fc)
	{
		$data = $this->Quality_Modal->getLines($fc);

		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode(array(
			'data' => $data,
			)));
	}

    public function get_errors()
    {
        $startDate = $this->input->post('start_date');
        $endDate = $this->input->post('end_date');
        $code = $this->input->post('code');
        $data = $this->getData($startDate, $endDate, $code);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'data' => $data,
            )));
    }

    public function Articles($fc)
    {
        $data = $this->Quality_Modal->getArticles($fc);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'data' => $data,
            )));
    }
	public function getLfb()
	{

		$data = $this->Quality_Modal->getLFB();
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));

	}
    public function reports()
    {
        $this->load->view('MIS/quality/quality_reports');
    }

    public function AmbReportAll($start_date, $end_date)
    {
        $data['data'] = $this->Quality_Modal->rpt_amb_detail($start_date, $end_date, 1);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_detail_RP($start_date, $end_date);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_RF($start_date, $end_date);
    //print_r($data['data']);
        $data['data2'] = $this->Quality_Modal->rpt_amb_detail_Packing($start_date, $end_date);
        
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_Packing_RP($start_date, $end_date);
   
        $data['StationwiseOutput'] = $this->Quality_Modal->rpt_amb_detail_Packing_Station($start_date, $end_date);
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/amb_all', $data, false);
    }

    public function AmbReportLineWise($start_date, $end_date, $lineID)
    {

        $data['data'] = $this->Quality_Modal->rpt_amb_line_data($start_date, $end_date, $lineID, 1);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_detail_LineWise_RP($start_date, $end_date,$lineID);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_LineWise_RF($start_date, $end_date,$lineID);
    //print_r($data['data']);
        $data['data2'] = $this->Quality_Modal->rpt_amb_detail_Packing_LineWise($start_date, $end_date,$lineID);
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_Packing_RP_lineWise($start_date, $end_date,$lineID);
        $data['StationwiseOutput'] = $this->Quality_Modal->rpt_amb_detail_Packing_Station_LineWise($start_date, $end_date,$lineID);
        
       
        
      
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/amb_all', $data, false);
    }

    public function AmbArticleWiseDateWise($start_date, $end_date, $code)
    {
        $data['data'] = $this->Quality_Modal->rpt_amb_datewise_article($start_date, $end_date, 1, $code);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_datewise_article_Art_RP($start_date, $end_date, $code);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_article_Art_RF($start_date, $end_date, $code);
        $data['data2'] = $this->Quality_Modal->rpt_amb_datewise_article($start_date, $end_date, 2, $code);
        
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_Art_Packing_RP($start_date, $end_date, $code);
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/amb_datewise_articlewise', $data, false);
    }

    public function AmbArticleWiseDateWiseAll($start_date, $end_date)
    {
        $data['data'] = $this->Quality_Modal->rpt_amb_datewise_all_articles($start_date, $end_date, 1);
        $data['data_overall'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_OverAll($start_date, $end_date, 1);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_RP($start_date, $end_date);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_RF($start_date, $end_date);
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_Packing_RP($start_date, $end_date);
        
        $data['data2'] = $this->Quality_Modal->rpt_amb_datewise_all_articles($start_date, $end_date, 2);
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/amb_datewise_articlewise', $data, false);
    }

    public function TMSummary($start_date, $end_date, $fc)
    {
        $sum = $this->Quality_Modal->get_tm_ball_forming_sum($start_date, $end_date, $fc);
        $sum2 = $this->Quality_Modal->get_tm_final_qc_sum($start_date, $end_date, $fc);

        $data['POSum'] = $this->Quality_Modal->get_TM_Po_Sum($start_date, $end_date, $fc);
        $data['data'] = $this->Quality_Modal->get_tm_ball_forming($start_date, $end_date, $fc);
        $data['datasum'] = $sum;
        $data['data2'] = $this->Quality_Modal->get_tm_final_qc($start_date, $end_date, $fc);
        $data['data2sum'] = $sum2;

        $data['chart1'] = json_encode($sum);
        $data['chart2'] = json_encode($sum2);
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        if ($fc == 'B34002') {
            $title = "Competition Ball";
        } else if ($fc == 'B34003') {
            $title = 'Finale Ball';
        } else if ($fc == 'B34004') {
            $title = "Urban Ball";
        } else {
            $title = 'Invalid Factory Code selected';
        }
        $data['title'] = $title;

        return $this->load->view('MIS/quality/tm_all', $data, false);
    }

    public function TMArticleDateWise($start_date, $end_date, $fc, $art)
    {
        $data['data'] = $this->Quality_Modal->get_tm_ball_forming_article_datewise($start_date, $end_date, $fc, $art);
        $data['datasum'] = $this->Quality_Modal->get_tm_ball_forming_article_datewise_sum($start_date, $end_date, $fc, $art);
        $data['data2'] = $this->Quality_Modal->get_tm_final_qc_article_datewise($start_date, $end_date, $fc, $art);
        $data['data2sum'] = $this->Quality_Modal->get_tm_final_qc_article_datewise_sum($start_date, $end_date, $fc, $art);
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        if ($fc == 'B34002') {
            $title = "Competition Ball";
        } else if ($fc == 'B34003') {
            $title = 'Finale Ball';
        } else if ($fc == 'B34004') {
            $title = "Urban Ball";
        } else {
            $title = 'Invalid Factory Code selected';
        }
        $data['title'] = $title;

        return $this->load->view('MIS/quality/tm_datewise', $data, false);
	}
	
	public function get_ms_summary($line, $start_date, $end_date)
	{
		$data['data'] = $this->Quality_Modal->get_ms_summary($line, $start_date, $end_date);
        $data['datasum'] = $this->Quality_Modal->get_ms_summary_sum($line, $start_date, $end_date);
        //$data['Graph'] = $this->Quality_Modal->get_ms_summary_sum_All($line, $start_date, $end_date);
		$data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/ms_all', $data, false);
	}

	public function get_ms_artwise($start_date, $end_date, $art)
	{
		$data['data'] = $this->Quality_Modal->get_ms_articlewise($art, $start_date, $end_date);
		$data['datasum'] = $this->Quality_Modal->get_ms_articlewise_sum($art, $start_date, $end_date);
		$data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/ms_articlewise', $data, false);
	}

	public function get_hs_artwise($start_date, $end_date, $art)
	{
		$data['data'] = $this->Quality_Modal->get_hs_articlewise($art, $start_date, $end_date);
		$data['datasum'] = $this->Quality_Modal->get_hs_articlewise_sum($art, $start_date, $end_date);
		$data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/hs_articlewise', $data, false);
	}

	public function get_hs_summary($start_date, $end_date, $art)
	{
		$data['data'] = $this->Quality_Modal->get_hs_summary($art, $start_date, $end_date);
		$data['datasum'] = $this->Quality_Modal->get_hs_summary_sum($art, $start_date, $end_date);
		$data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return $this->load->view('MIS/quality/hs_all', $data, false);
	}

    private function getData($StartDate, $EndDate, $FactoryCode)
    {
        if ($FactoryCode == 'B34002' || $FactoryCode == 'B34003' || $FactoryCode == 'B34004') {

            return $this->db->select('TOP (100) PERCENT tbl_Inv_Tran_Date.DateName, SUM(tbl_TM_Final_QC.DShape) AS DShape, tbl_TM_Final_QC.FactoryCode, SUM(tbl_TM_Final_QC.OverSize) AS OverSize, SUM(tbl_TM_Final_QC.UnderSize) AS UnderSize,
      SUM(tbl_TM_Final_QC.OverWeight) AS OverWeight, SUM(tbl_TM_Final_QC.UnderWeight) AS UnderWeight, tbl_TM_Final_QC.ArtSize, SUM(tbl_TM_Final_QC.PrintingAlligment) AS PrintingAlligment,
      SUM(tbl_TM_Final_QC.Inspected) AS Inspected, SUM(tbl_TM_Final_QC.PanelDefect) AS PanelDefect, SUM(tbl_TM_Final_QC.Touching) AS Touching, SUM(tbl_TM_Final_QC.Dull) AS Dull, SUM(tbl_TM_Final_QC.ArtWork)
      AS ArtWork, SUM(tbl_TM_Final_QC.BGrade) AS BGrade, SUM(tbl_TM_Final_QC.SeamAlligment) AS SeamAlligment, SUM(tbl_TM_Final_QC.Printing) AS Printing, SUM(tbl_TM_Final_QC.Indent) AS Indent,
      SUM(tbl_TM_Final_QC.Wrinkle) AS Wrinkle, SUM(tbl_TM_Final_QC.Moldmark) AS Moldmark, SUM(tbl_TM_Final_QC.LeakPuncture) AS LeakPuncture, SUM(tbl_TM_Final_QC.Puncture) AS Puncture, SUM(tbl_TM_Final_QC.Cavity)
      AS Cavity, SUM(tbl_TM_Final_QC.AirBubble) AS AirBubble, SUM(tbl_TM_Final_QC.Overlaping) AS Overlaping, SUM(tbl_TM_Final_QC.Dirty) AS Dirty, SUM(tbl_TM_Final_QC.Pass) AS Pass, SUM(tbl_TM_Final_QC.FailQty) AS Fail')
                ->from('dbo.tbl_Inv_Tran_Date')
                ->join('dbo.tbl_TM_Final_QC', 'dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Final_QC.DayNo', 'inner')
                ->where('DateName >=', $StartDate)
                ->where('DateName <=', $EndDate)
                ->where('FactoryCode', $FactoryCode)
                ->group_by('dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_TM_Final_QC.FactoryCode, dbo.tbl_TM_Final_QC.ArtSize')
                ->get()
                ->result();
            // For MS Errors
        } else if ($FactoryCode == 'B34005') {
            return $this->db->select('SUM(Pass) AS Pass, SUM(TotalChecked) AS TotalChecked, ArtCode, SUM(OpenComposit) AS OpenComposit, SUM(DailyComposit) AS DailyComposit, SUM(CompositCornersEdges) AS CompositCornersEdges, SUM(LooseStitch)
      AS LooseStitch, SUM(TornStitch) AS TornStitch, SUM(MissStitch) AS MissStitch, SUM(CornersOut) AS CornersOut, SUM(ZigZagStitch) AS ZigZagStitch, SUM(WrongArtWork) AS WrongArtWork, SUM(WrongSewingMargin)
      AS WrongSewingMargin, SUM(MaterialTorn) AS MaterialTorn, SUM(DisColor) AS DisColor, SUM(LamProblem) AS LamProblem, SUM(TreatOff) AS TreatOff, SUM(MissPrinting) AS MissPrinting, SUM(Smearing) AS Smearing,
      SUM(NozleMove) AS NozleMove, SUM(LeakPuncture) AS LeakPuncture, SUM(Unroundness) AS Unroundness, SUM(CutMark) AS CutMark, SUM(Dirty) AS Dirty, SUM(DevInCircum) AS DevInCircum, SUM(UnderWght)
      AS UnderWght, SUM(OverWeight) AS OverWeight, SUM(internalAirPresure) AS internalAirPresure, SUM(BGrade) AS BGrade, SUM(UnHold) AS UnHold, SUM(NeedleMark) AS NeedleMark, SUM(VolPanelAlligment)
      AS VolPanelAlligment,SUM(CompoitMissPrint) AS CompoitMissPrint, ArtSize, DateName')
                ->from('dbo.View_MS_Article_Wise_Sum')
                ->where('DateName >=', $StartDate)
                ->where('DateName <=', $EndDate)
                ->group_by('ArtCode, ArtSize, DateName')
                ->get()
                ->result();
        } else if ($FactoryCode == 'B34001') {
            return $this->db->select('ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS Pass, SUM(FailQty) AS FailQty, SUM(ZigZag) AS ZigZag, SUM(ArtWork) AS ArtWork, SUM(TornStitch) AS TornStitch, SUM(LooseStitch) AS LooseStitch,
      SUM(UnStitched) AS UnStitched, SUM(OverStitch) AS OverStitch, SUM(LPS) AS LPS, SUM(FullPuncture) AS FullPuncture, SUM(MissPanel) AS MissPanel, SUM(NozzleMove) AS NozzleMove, SUM(NeedleMark) AS NeedleMark,
      SUM(MakerDirty) AS MakerDirty, SUM(BladderDrop) AS BladderDrop, SUM(LatexBladder) AS LatexBladder, SUM(NozzleMoveInSalaBladder) AS NozzleMoveInSalaBladder, SUM(LaminationProb) AS LaminationProb,
      SUM(PUBladder) AS PUBladder, SUM(DisColor) AS DisColor, SUM(ColorMark) AS ColorMark, SUM(CutMark) AS CutMark, SUM(ThreadDiscolor) AS ThreadDiscolor, SUM(PrintingCrack) AS PrintingCrack, SUM(Smearing)
      AS Smearing, SUM(SettingOut) AS SettingOut, SUM(FabricImpression) AS FabricImpression, SUM(ShadeDiff) AS ShadeDiff, SUM(FactoryFaultDirty) AS FactoryFaultDirty, SUM(FactoryFaultBladderDrop)
      AS FactoryFaultBladderDrop, SUM(MatTorn) AS MatTorn, SUM(Others) AS Others, SUM(JointProblem) AS JointProblem, SUM(Lamination) AS Lamination, SUM(Dirty) AS Dirty, SUM(Puncture) AS Puncture, SUM(NozzelDrop)
      AS NozzelDrop,SUM(UnMold) AS UnMold, ArtSize, DateName')
                ->from('View_HS_FinalOutPut')
                ->where('DateName >=', $StartDate)
                ->where('DateName <=', $EndDate)
                ->group_by('ArtCode, ArtSize, DateName')
                ->get()
                ->result();
        } else if ($FactoryCode == 'B34006') {
            return $this->db->select('*')
                ->from('View_PC_AMB_Packing_Sum')
                ->where('DateName >=', $StartDate)
                ->where('DateName <=', $EndDate)
                ->get()
                ->result();
        }

    }

    public function details()
    {
        if (empty($_POST)) {
            redirect('/Quality/Dashboard');
        }
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $option = $this->input->post('type');
        $code = $this->input->post('code');
        $total = $this->input->post('total');
        $title = $this->input->post('title');
        $size = $this->input->post('size');
        $src = $this->input->post('src');
        $detail = $this->input->post('detail');
        $detail2 = $this->input->post('detail2');
		$quantity = $this->input->post('quantity');
		$check = $this->input->post("totalchecked");

        $temp = explode(" : ", $title)[0];

        if (strpos($temp, 'Machine') == 1) {
            $link = "ms";
        } else if (strpos($temp, 'Hand') == 1) {
            $link = "hs";
        } else if (strpos($temp, 'Urban') == 1) {
            $link = "urban";
        } else if (strpos($temp, 'Competition') == 1) {
            $link = "competition";
        } else if (strpos($temp, 'Airless') == 1) {
            $link = "amb";
        } else if (strpos($temp, 'Finale') == 1) {
            $link = "finale";
        }

        $data["data"] = $this->getDetails($start_date, $end_date, $code, $option);
        $data['code'] = $code;
        $data['total'] = $total;
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        $data['title'] = $title;
        $data['link'] = $link;
        $data['size'] = $size;
        $data['type'] = $option;
        $data['src'] = $src;
        $data['detail'] = $detail;
        $data['detail2'] = $detail2;
        $data['quantity'] = $quantity;
		$data['check'] = $check;

        $this->load->view('MIS/quality/detail', $data);

    }

    private function getDetails($startDate, $endDate, $factoryCode, $option)
    {

        if ($factoryCode == 'B34002' || $factoryCode == 'B34003' || $factoryCode == 'B34004') {
            return $this->db->select('TOP (100) PERCENT tbl_Inv_Tran_Date.DateName, SUM(tbl_TM_Final_QC.DShape) AS DShape, tbl_TM_Final_QC.FactoryCode, SUM(tbl_TM_Final_QC.OverSize) AS OverSize, SUM(tbl_TM_Final_QC.UnderSize) AS UnderSize,
    SUM(tbl_TM_Final_QC.OverWeight) AS OverWeight, SUM(tbl_TM_Final_QC.UnderWeight) AS UnderWeight, tbl_TM_Final_QC.ArtSize, SUM(tbl_TM_Final_QC.PrintingAlligment) AS PrintingAlligment,
    SUM(tbl_TM_Final_QC.Inspected) AS Inspected, SUM(tbl_TM_Final_QC.PanelDefect) AS PanelDefect, SUM(tbl_TM_Final_QC.Touching) AS Touching, SUM(tbl_TM_Final_QC.Dull) AS Dull, SUM(tbl_TM_Final_QC.ArtWork)
    AS ArtWork, SUM(tbl_TM_Final_QC.BGrade) AS Santiago, SUM(tbl_TM_Final_QC.BGrade) AS BGrade, SUM(tbl_TM_Final_QC.SeamAlligment) AS SeamAlligment, SUM(tbl_TM_Final_QC.Printing) AS Printing, SUM(tbl_TM_Final_QC.Indent) AS Indent,
    SUM(tbl_TM_Final_QC.Wrinkle) AS Wrinkle, SUM(tbl_TM_Final_QC.Moldmark) AS Moldmark, SUM(tbl_TM_Final_QC.LeakPuncture) AS LeakPuncture, SUM(tbl_TM_Final_QC.Puncture) AS Puncture, SUM(tbl_TM_Final_QC.Cavity)
    AS Cavity, SUM(tbl_TM_Final_QC.AirBubble) AS AirBubble, SUM(tbl_TM_Final_QC.Overlaping) AS Overlaping, SUM(tbl_TM_Final_QC.Dirty) AS Dirty, SUM(tbl_TM_Final_QC.Pass) AS Pass, SUM(tbl_TM_Final_QC.FailQty) AS Fail,
    tbl_Pro_Article.ArtCode')
                ->from('dbo.tbl_Inv_Tran_Date')
                ->join('dbo.tbl_TM_Final_QC', 'dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Final_QC.DayNo', 'inner')
                ->join('dbo.tbl_Pro_Article', 'tbl_TM_Final_QC.ClientID = tbl_Pro_Article.ClientID AND tbl_TM_Final_QC.ModelID = tbl_Pro_Article.ModelID AND tbl_TM_Final_QC.ArtID = tbl_Pro_Article.ArtID', 'inner')
                ->where('DateName >=', $startDate)
                ->where('DateName <=', $endDate)
                ->where('FactoryCode', $factoryCode)
                ->where($option . ' >', 0)
                ->group_by('tbl_Inv_Tran_Date.DateName, tbl_TM_Final_QC.FactoryCode, tbl_TM_Final_QC.ArtSize, tbl_Pro_Article.ArtCode, tbl_TM_Final_QC.ClientID, tbl_TM_Final_QC.ModelID, tbl_TM_Final_QC.ArtID')
                ->get()
                ->result();
        } else if ($factoryCode == 'B34005') {
            return $this->db->select('Pass, TotalChecked, OpenComposit, DailyComposit, CompositCornersEdges, LooseStitch, TornStitch, MissStitch, CornersOut, ZigZagStitch, WrongArtWork, WrongSewingMargin, MaterialTorn, DisColor, LamProblem,
        TreatOff, MissPrinting, Smearing, NozleMove, LeakPuncture, Unroundness, CutMark, Dirty, DevInCircum, UnderWght, OverWeight, internalAirPresure, BGrade, DateName, UnHold, NeedleMark, VolPanelAlligment, ArtSize,
        CompoitMissPrint, LineName, ArtCode')
                ->from('dbo.View_MS_Article_Wise_Sum')
                ->where('DateName >=', $startDate)
                ->where('DateName <=', $endDate)
                ->order_by('Line')
                ->where($option . ' >', 0)
                ->get()
                ->result();
        } else if ($factoryCode == 'B34001') {
            return $this->db->select('ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS Pass, SUM(FailQty) AS FailQty, SUM(ZigZag) AS ZigZag, SUM(ArtWork) AS ArtWork, SUM(TornStitch) AS TornStitch, SUM(LooseStitch) AS LooseStitch,
        SUM(UnStitched) AS UnStitched, SUM(OverStitch) AS OverStitch, SUM(LPS) AS LPS, SUM(FullPuncture) AS FullPuncture, SUM(MissPanel) AS MissPanel, SUM(NozzleMove) AS NozzleMove, SUM(NeedleMark) AS NeedleMark,
        SUM(MakerDirty) AS MakerDirty, SUM(BladderDrop) AS BladderDrop, SUM(LatexBladder) AS LatexBladder, SUM(NozzleMoveInSalaBladder) AS NozzleMoveInSalaBladder, SUM(LaminationProb) AS LaminationProb,
        SUM(PUBladder) AS PUBladder, SUM(DisColor) AS DisColor, SUM(ColorMark) AS ColorMark, SUM(CutMark) AS CutMark, SUM(ThreadDiscolor) AS ThreadDiscolor, SUM(PrintingCrack) AS PrintingCrack, SUM(Smearing)
        AS Smearing, SUM(SettingOut) AS SettingOut, SUM(FabricImpression) AS FabricImpression, SUM(ShadeDiff) AS ShadeDiff, SUM(FactoryFaultDirty) AS FactoryFaultDirty, SUM(FactoryFaultBladderDrop)
        AS FactoryFaultBladderDrop, SUM(MatTorn) AS MatTorn, SUM(Others) AS Others, SUM(JointProblem) AS JointProblem, SUM(Lamination) AS Lamination, SUM(Dirty) AS Dirty, SUM(Puncture) AS Puncture, SUM(NozzelDrop)
        AS NozzelDrop, SUM(UnMold) AS UnMold, ArtSize, DateName')
                ->from('View_HS_FinalOutPut')
                ->where('DateName >=', $startDate)
                ->where('DateName <=', $endDate)
                ->group_by('ArtCode, ArtSize, DateName')
                ->get()
                ->result();
        } else if ($factoryCode == 'B34006') {
            return $this->db->select('*')
                ->from('View_PC_AMB_Packing_Sum')
                ->where('DateName >=', $startDate)
                ->where('DateName <=', $endDate)
                ->order_by('LineID')
                ->where($option . ' >', 0)
                ->get()
                ->result();
        }
	}
	
	public function get_ms_bladder($startDate, $endDate){

         $data["data"] =$this->Quality_Modal->get_ms_bladder($startDate, $endDate);
          $data["mlprejection"] =$this->Quality_Modal->get_mlp_rejection($startDate, $endDate);
         
        //print_r($data["data"]);
      	$data['start_date1'] = $startDate;
		$data['end_date1'] = $endDate;
		return $this->load->view('MIS/Bladder', $data, false);
        
     
    }

    public function MsEmployeeWiseSum(){

        $data =$this->Quality_Modal->MsEmployeeWiseSum($_POST['start_date'], $_POST['end_date']);  
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    
   }

}
