<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Developement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Development_Model');
    }
    public function index()
    {
        $data['supplier'] = $this->Development_Model->supplier();
        $data['DevType'] = $this->Development_Model->DevType();
        $data['DevComplete'] = $this->Development_Model->DevComplete();
        $data['DevIP'] = $this->Development_Model->DevIP();
        $data['DevTodayActivities'] = $this->Development_Model->DevTodayActivities();
        $data['Activities'] = $this->Development_Model->Activities();
          $data['FactoryWise'] = $this->Development_Model->FactoryWise();
           $data['Graphs'] = $this->Development_Model->Graphs();
            $data['RDate'] = $this->Development_Model->ProcessDate();
            $data['GetArticles']= $this->Development_Model->GetArticles();
//print_r($data['RDate']);

       $data['CallData']= $this->Development_Model->CallData();
        $this->load->view('MIS/Development/Developmnent', $data);
    }

    public function load()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];

        $data = $this->Development_Model->load();

        echo json_encode($data);
    }

    public function loadArticle()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];

        $data = $this->Development_Model->loadArticle($c_date,$e_date);

        echo json_encode($data);
    }

    public function loadArticleAll()
    {

        $data = $this->Development_Model->loadArticleAll();

        echo json_encode($data);
    }

    public function getGantCurrentDateData()
    {
        $currentDate = $_POST['currentDate'];
    
         $data = $this->Development_Model->getGantCurrentDateData($currentDate);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallDataDefault()
    {
        $currentDate = $_POST['currentDate'];
    
         $data = $this->Development_Model->CallDataDefault($currentDate);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallDataRangeData()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

         $data = $this->Development_Model->CallDataRangeData($startDate,$endDate);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallAllData()
    {

         $data = $this->Development_Model->CallAllData();
         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallDataRangeDataArticleCode()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $articleCode = $_POST['article_code'];
         $data = $this->Development_Model->CallDataRangeDataArticleCode($startDate,$endDate,$articleCode);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallSpecificDataArticleCode()
    {
        $articleCode = $_POST['article_code'];
         $data = $this->Development_Model->CallSpecificDataArticleCode($articleCode);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallDataRangeDataType()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $type = $_POST['type'];
         $data = $this->Development_Model->CallDataRangeDataType($startDate,$endDate,$type);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallSpecificDataType()
    {
        $type = $_POST['type'];
         $data = $this->Development_Model->CallSpecificDataType($type);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function CallDataRangeDataTypeArticleCode()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $type = $_POST['type'];
        $artCode = $_POST['art_code'];
         $data = $this->Development_Model->CallDataRangeDataTypeArticleCode($startDate,$endDate,$type,$artCode);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    
    

    public function getGantDateRangeData()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

         $data = $this->Development_Model->getGantDateRangeData($startDate,$endDate);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getGantAllData()
    {

         $data = $this->Development_Model->getGantAllData();

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getGantDateRangeDataArticleCode()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $artCode = $_POST['article_code'];
         $data = $this->Development_Model->getGantDateRangeDataArticleCode($startDate,$endDate,$artCode);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getGantSpecificDataArticleCode()
    {
        $artCode = $_POST['article_code'];
         $data = $this->Development_Model->getGantSpecificDataArticleCode($artCode);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getGantDateRangeDataType()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $type = $_POST['type'];
         $data = $this->Development_Model->getGantDateRangeDataType($startDate,$endDate,$type);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getGantSpecificDataType()
    {
        $type = $_POST['type'];
         $data = $this->Development_Model->getGantSpecificDataType($type);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getGantDateRangeDataTypeArticleCode()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $type = $_POST['type'];
        $art_code = $_POST['art_code'];
         $data = $this->Development_Model->getGantDateRangeDataTypeArticleCode($startDate,$endDate,$type,$art_code);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    

  
    public function getCustomTableData()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

         $data = $this->Development_Model->getCustomTableData($startDate,$endDate);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getCustomTableAllData()
    {
  
         $data = $this->Development_Model->getCustomTableAllData();

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getCustomTableDataArticleCode()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $artCode = $_POST['article_code'];
         $data = $this->Development_Model->getCustomTableDataArticleCode($startDate,$endDate,$artCode);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getCustomTableDataSpecificArticleCode()
    {
        $artCode = $_POST['article_code'];
         $data = $this->Development_Model->getCustomTableDataSpecificArticleCode($artCode);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getCustomTableDataType()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $type = $_POST['type'];
         $data = $this->Development_Model->getCustomTableDataType($startDate,$endDate,$type);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getCustomTableDataSpecificType()
    {
        $type = $_POST['type'];
         $data = $this->Development_Model->getCustomTableDataSpecificType($type);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getCustomTableDataTypeArticleCode()
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $type = $_POST['type'];
        $art_code = $_POST['art_code'];
         $data = $this->Development_Model->getCustomTableDataTypeArticleCode($startDate,$endDate,$type,$art_code);

         return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }


    public function customload()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];
        
        $data['DevType'] = $this->Development_Model->DevTypeCustom($c_date,$e_date);
        $data['DevComplete'] = $this->Development_Model->DevCompleteCustom($c_date,$e_date);
     
        $data['DevIP'] = $this->Development_Model->DevIPCustom($c_date,$e_date);
        $data['DevTodayActivities'] = $this->Development_Model->DevTodayActivitiesCustom($c_date,$e_date);
        $data['Activities'] = $this->Development_Model->ActivitiesCustom($c_date,$e_date);
          $data['FactoryWise'] = $this->Development_Model->FactoryWiseCustom($c_date,$e_date);
           $data['Graphs'] = $this->Development_Model->GraphsCustom($c_date,$e_date);
            $data['RDate'] = $this->Development_Model->ProcessDateCustom($c_date,$e_date);
            $data['NoOfBalls'] = $this->Development_Model->NoofBallsCustom($c_date,$e_date);
           

     
        echo json_encode($data);
    }
    public function custompie()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];

        $data['pass'] = $this->Development_Model->custompiePass(
            $c_date,
            $e_date
        );
        $data['fail'] = $this->Development_Model->custompieFail(
            $c_date,
            $e_date
        );

        echo json_encode($data);
    }

    public function pie()
    {
        $data = $this->Development_Model->pie();
        $data['fail'] = $this->Development_Model->failBall();
        $data['pass'] = $this->Development_Model->passBall();

        echo json_encode($data);
    }

    public function customtable()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];

        $data = $this->Development_Model->customTable($c_date, $e_date);
        echo json_encode($data);
    }

    public function customtableArticleCode()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];
        $articleCode = $_GET['article_code'];
        $data = $this->Development_Model->customtableArticleCode($c_date, $e_date,$articleCode);
        echo json_encode($data);
    }

    

    public function loadtable()
    {
        $data = $this->Development_Model->loadTable();
        echo json_encode($data);
    }
}
