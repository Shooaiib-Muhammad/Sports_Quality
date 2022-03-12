<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Development_Model extends CI_Model
{
    public function supplier()
    {
        $query = $this->db->query('SELECT Supplier_Name
FROM            dbo.Tbl_Lab_Test_H
GROUP BY Supplier_Name');
        return $query->result_array();
    }

    public function load()
    {
        $today = date('Y-m-d');
        $query = $this->db
            ->query("SELECT        Supplier_Name, SUM(Pass) AS pass, SUM(Fail) AS fail
FROM            dbo.view_Lab_test_Supplier
WHERE        (Date BETWEEN CONVERT(DATETIME, '$today 00:00:00', 102) AND CONVERT(DATETIME, '$today 00:00:00', 102))
GROUP BY Supplier_Name");
        return $query->result_array();
    }
    public function getDatewiseSupplier($c_date, $e_date, $Supplier_Name)
    {
        $query = $this->db
            ->query("SELECT        TestType + ' / ' + Date AS Supplier_Name, Date, Fail, Pass
FROM            dbo.view_Lab_test_Supplier
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102)) AND (Supplier_Name = '$Supplier_Name')");
        return $query->result_array();
    }
    public function getDatewisematSupplier($c_date, $e_date, $material)
    {
        $query = $this->db
            ->query("SELECT        Supplier_Name + ' / ' + Date AS Supplier_Name, Fail, Pass
FROM            dbo.view_lab_Material
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102)) AND (Size = '$material')");
        return $query->result_array();
    }
    public function getDatewisematerial($c_date, $e_date, $Supplier_Name)
    {
        $query = $this->db
            ->query("SELECT        Size, SUM(Fail) AS Fail, SUM(Pass) AS Pass
FROM            dbo.view_lab_Material
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102)) AND (Supplier_Name = '$Supplier_Name')
GROUP BY Size");
        return $query->result_array();
    }
    public function getDatemat($c_date, $e_date, $material)
    {
        $query = $this->db
            ->query("SELECT        Size + ' / ' + Date AS Size, Fail, Pass
FROM            dbo.view_lab_Material
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102)) AND (Size = '$material')");
        return $query->result_array();
    }

    public function loadfail()
    {
        $today = date('Y-m-d');
        $query = $this->db
            ->query("SELECT     Supplier_Name, COUNT(Result) AS Fail
FROM            dbo.Tbl_Lab_Test_H
WHERE        (Date BETWEEN CONVERT(DATETIME, '$today  00:00:00', 102) AND CONVERT(DATETIME, '$today  00:00:00', 102))
GROUP BY Supplier_Name, Result
HAVING        (Result = 'Fail')");
        return $query->result_array();
    }
    public function pie()
    {
        $today = date('Y-m-d');
        $query = $this->db
            ->query("SELECT        Size, SUM(Pass) AS pass, SUM(Fail) AS fail
FROM            dbo.view_lab_Material
WHERE        (Date BETWEEN CONVERT(DATETIME, '$today 00:00:00', 102) AND CONVERT(DATETIME, '$today 00:00:00', 102))
GROUP BY Size");
        return $query->result_array();
    }
    public function customLoad($c_date, $e_date, $testtype)
    {
        $query = $this->db
            ->query("SELECT       TestType, Supplier_Name, SUM(Pass) AS pass, SUM(Fail) AS fail
FROM            dbo.view_Lab_test_Supplier
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102) AND TestType='$testtype')
GROUP BY Supplier_Name,TestType");
        return $query->result_array();
    }
    public function customLoadFail($c_date, $e_date, $testtype)
    {
        $query = $this->db
            ->query("SELECT      TestType,  Supplier_Name, COUNT(Result) AS Pass
FROM            dbo.Tbl_Lab_Test_H
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102)) AND TestType='$testtype')
GROUP BY Supplier_Name, Result,TestType
HAVING        (Result = 'fail')");
        return $query->result_array();
    }

    public function failBall()
    {
        $today = date('Y-m-d');
        $query = $this->db->query("SELECT       Size, COUNT(Result) AS Pass
FROM            dbo.Tbl_Lab_Test_H
WHERE        (Date BETWEEN CONVERT(DATETIME, '$today 00:00:00', 102) AND CONVERT(DATETIME, '$today 00:00:00', 102)) 
GROUP BY Result, Size
HAVING        (Result = 'Fail')");
        return $query->result_array();
    }

    public function passBall()
    {
        $today = date('Y-m-d');
        $query = $this->db->query("SELECT     Size, COUNT(Result) AS Pass
FROM            dbo.Tbl_Lab_Test_H
WHERE        (Date BETWEEN CONVERT(DATETIME, '$today 00:00:00', 102) AND CONVERT(DATETIME, '$today 00:00:00', 102)) 
GROUP BY Result, Size
HAVING        (Result = 'pass')");
        return $query->result_array();
    }
    public function custompie($c_date, $e_date, $testtype)
    {
        $query = $this->db
            ->query("SELECT    TestType, Size, SUM(Pass) AS pass, SUM(Fail) AS fail
FROM            dbo.view_lab_Material
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102) AND TestType='$testtype')
GROUP BY Size,TestType");
        return $query->result_array();
    }
    public function custompieFail($c_date, $e_date, $testtype)
    {
        $query = $this->db
            ->query("SELECT    TestType,Size, COUNT(Result) AS Pass
FROM            dbo.Tbl_Lab_Test_H
WHERE        (Date BETWEEN CONVERT(DATETIME, '$c_date 00:00:00', 102) AND CONVERT(DATETIME, '$c_date 00:00:00', 102) AND TestType='$testtype')
GROUP BY Result, Size,TestType
HAVING        (Result = 'Fail')");
        return $query->result_array();
    }

    public function customTable($c_date, $e_date, $testtype)
    {
        $SYear = substr($c_date, 0, 4);
        $SMonth = substr($c_date, 5, 2);
        $SDay = substr($c_date, -2, 2);
        $EYear = substr($e_date, 0, 4);
        $EMonth = substr($e_date, 5, 2);
        $EDay = substr($e_date, -2, 2);
        $StartDateeee = $SDay . '/' . $SMonth . '/' . $SYear;
        $EndDateeee = $EDay . '/' . $EMonth . '/' . $EYear;

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Entrydate BETWEEN '$StartDateeee' AND '$EndDateeee') AND ItemType='$testtype'");
        return $query->result_array();
    }
    public function customTable1($c_date, $e_date)
    {
        $SYear = substr($c_date, 0, 4);
        $SMonth = substr($c_date, 5, 2);
        $SDay = substr($c_date, -2, 2);
        $EYear = substr($e_date, 0, 4);
        //echo "<br>";
        $EMonth = substr($e_date, 5, 2);
        //echo "<br>";
        $EDay = substr($e_date, -2, 2);
        $StartDateeee = $SDay . '/' . $SMonth . '/' . $SYear;
        $EndDateeee = $EDay . '/' . $EMonth . '/' . $EYear;

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Entrydate BETWEEN '$StartDateeee' AND '$EndDateeee')");
        return $query->result_array();
    }
    public function customTablemat($c_date, $e_date, $Size)
    {
        $SYear = substr($c_date, 0, 4);
        $SMonth = substr($c_date, 5, 2);
        $SDay = substr($c_date, -2, 2);
        $EYear = substr($e_date, 0, 4);
        //echo "<br>";
        $EMonth = substr($e_date, 5, 2);
        //echo "<br>";
        $EDay = substr($e_date, -2, 2);
        $StartDateeee = $SDay . '/' . $SMonth . '/' . $SYear;
        $EndDateeee = $EDay . '/' . $EMonth . '/' . $EYear;

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Entrydate BETWEEN '$StartDateeee' AND '$EndDateeee') AND Size='$Size'");
        return $query->result_array();
    }
    public function customTablesuplier($c_date, $e_date, $Supplier_Name)
    {
        $SYear = substr($c_date, 0, 4);
        $SMonth = substr($c_date, 5, 2);
        $SDay = substr($c_date, -2, 2);
        $EYear = substr($e_date, 0, 4);
        //echo "<br>";
        $EMonth = substr($e_date, 5, 2);
        //echo "<br>";
        $EDay = substr($e_date, -2, 2);
        $StartDateeee = $SDay . '/' . $SMonth . '/' . $SYear;
        $EndDateeee = $EDay . '/' . $EMonth . '/' . $EYear;

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Entrydate BETWEEN '$StartDateeee' AND '$EndDateeee') AND Supplier_Name='$Supplier_Name'");
        return $query->result_array();
    }
    public function customtableArticleCode($c_date, $e_date, $artCode)
    {
        $SYear = substr($c_date, 0, 4);
        $SMonth = substr($c_date, 5, 2);
        $SDay = substr($c_date, -2, 2);
        $EYear = substr($e_date, 0, 4);
        //echo "<br>";
        $EMonth = substr($e_date, 5, 2);
        //echo "<br>";
        $EDay = substr($e_date, -2, 2);
        $StartDateeee = $SDay . '/' . $SMonth . '/' . $SYear;
        $EndDateeee = $EDay . '/' . $EMonth . '/' . $EYear;

        $query = $this->db->query("SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Date BETWEEN '$StartDateeee' AND '$EndDateeee')");
        return $query->result_array();
    }

    public function loadTable()
    {
        $today = date('Y-m-d');
        $SYear = substr($today, 0, 4);
        $SMonth = substr($today, 5, 2);
        $SDay = substr($today, -2, 2);

        $CurrentDate = $SDay . '/' . $SMonth . '/' . $SYear;
        $query = $this->db->query("SELECT        dbo.view_lab_test.*
FROM            dbo.view_lab_test
WHERE        (Date BETWEEN '$CurrentDate' AND '$CurrentDate')");
        return $query->result_array();
    }

    public function DevType()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db->query("SELECT        COUNT(Type) AS Counter, Type
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
GROUP BY Type");
        return $query->result_array();
    }

    public function DevTypeCustom($c_date, $e_date)
    {
        $query = $this->db->query("SELECT        COUNT(Type) AS Counter, Type
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102))
GROUP BY Type");
        return $query->result_array();
    }
    public function DevComplete()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db->query("SELECT        COUNT(Status) AS Counter
FROM            dbo.View_Dev_Deshbaord

WHERE        (RDate >= CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (Status = 'Complete') AND (ProcessEndDate <= CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))");
        return $query->result_array();
    }

    public function DevCompleteCustom($c_date, $e_date)
    {
        $query = $this->db->query("SELECT        COUNT(Status) AS Counter
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate >= CONVERT(DATETIME, '$c_date 00:00:00', 102)) AND (Status = 'Complete') AND (ProcessEndDate <= CONVERT(DATETIME, '$e_date 00:00:00', 102))");

        return $query->result_array();
    }
    public function DevIP()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db->query("SELECT        COUNT(Status) AS Counter
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate >= CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (ProcessEndDate <= CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (Status = 'In Process')");
        return $query->result_array();
    }

    public function DevIPCustom($c_date, $e_date)
    {
        $query = $this->db->query("SELECT        COUNT(Status) AS Counter
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate >= CONVERT(DATETIME, '$c_date 00:00:00', 102)) AND (ProcessEndDate <= CONVERT(DATETIME, '$e_date 00:00:00', 102)) AND (Status = 'In Process')");
        return $query->result_array();
    }
    public function DevTodayActivities()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db
            ->query("SELECT    ProcessEndDate,    RDate, ArtCode, Name
FROM            dbo.View_Dev_Deshbaord
GROUP BY RDate, ArtCode, Name,ProcessEndDate
HAVING         (RDate >= CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (ProcessEndDate <= CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))");
        return $query->num_rows();
    }

    public function DevTodayActivitiesCustom($c_date, $e_date)
    {
        $query = $this->db
            ->query("SELECT      ProcessEndDate,  RDate, ArtCode, Name
FROM            dbo.View_Dev_Deshbaord
GROUP BY RDate, ArtCode, Name,ProcessEndDate
HAVING        (RDate >= CONVERT(DATETIME, '$c_date 00:00:00', 102)) AND (ProcessEndDate <= CONVERT(DATETIME, '$e_date 00:00:00', 102))");
        return $query->num_rows();
    }
    public function Activities()
    {
        $currentDate = date('Y/m/d');
        $query = $this->db->query("SELECT        RDate, ArtCode, Name
FROM            dbo.View_Dev_Deshbaord
GROUP BY RDate, ArtCode, Name
HAVING        (RDate = CONVERT(DATETIME, '$currentDate', 102))");
        return $query->result_array();
    }

    public function ActivitiesCustom($c_date, $e_date)
    {
        $query = $this->db->query("SELECT        RDate, ArtCode, Name
FROM            dbo.View_Dev_Deshbaord
GROUP BY RDate, ArtCode, Name
HAVING        (RDate BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102))");
        return $query->result_array();
    }
    public function FactoryWise()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db
            ->query("SELECT        COUNT(Name) AS Counter, VendorName
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
GROUP BY VendorName");
        return $query->result_array();
    }

    public function FactoryWiseCustom($c_date, $e_date)
    {
        $query = $this->db
            ->query("SELECT        COUNT(Name) AS Counter, VendorName
      FROM            dbo.View_Dev_Deshbaord
      WHERE        (RDate BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102))
      GROUP BY VendorName");
        return $query->result_array();
    }
    public function Graphs()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db
            ->query("SELECT        CONVERT(Varchar, RDate, 103) AS Datee, ArtCode, NoOfBalls, Name
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
GROUP BY CONVERT(Varchar, RDate, 103), ArtCode, NoOfBalls, Name");
        return $query->result_array();
    }
    public function GraphsCustom($c_date, $e_date)
    {
        $query = $this->db
            ->query("SELECT        CONVERT(Varchar, RDate, 103) AS Datee, ArtCode, NoOfBalls, Name
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102))
GROUP BY CONVERT(Varchar, RDate, 103), ArtCode, NoOfBalls, Name");
        return $query->result_array();
    }
    public function NoofBalls($ArtCode)
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db
            ->query("SELECT        CONVERT(Varchar, RDate, 103) AS Datee, ArtCode, NoOfBalls
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
GROUP BY CONVERT(Varchar, RDate, 103), ArtCode, NoOfBalls
HAVING        (ArtCode = '$ArtCode')");
        return $query->result_array();
    }
    public function NoofBallsCustom($sDate, $eDate)
    {
        $query = $this->db
            ->query("SELECT        CONVERT(Varchar, RDate, 103) AS Datee, ArtCode, NoOfBalls
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$sDate', 102) AND CONVERT(DATETIME, '$eDate', 102))
GROUP BY CONVERT(Varchar, RDate, 103), ArtCode, NoOfBalls
");
        return $query->result_array();
    }

    public function ProcessDate()
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $query = $this->db
            ->query("SELECT        CONVERT(Varchar, RDate, 103) AS Datee
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
GROUP BY CONVERT(Varchar, RDate, 103)");
        return $query->result_array();
    }

    public function loadArticle($sDate, $eDate)
    {
        $query = $this->db->query("    SELECT        ArtCode
        FROM            dbo.View_Dev_Deshbaord
        WHERE        (RDate BETWEEN CONVERT(DATETIME, '$sDate', 102) AND CONVERT(DATETIME, '$eDate', 102))
        GROUP BY ArtCode");
        return $query->result_array();
    }

    public function loadArticleAll()
    {
        $query = $this->db->query("    SELECT        ArtCode
    FROM            dbo.View_PC_Articles
  
    GROUP BY ArtCode");
        return $query->result_array();
    }

    public function ProcessDateCustom($c_date, $e_date)
    {
        $query = $this->db
            ->query("SELECT        CONVERT(Varchar, RDate, 103) AS Datee
FROM            dbo.View_Dev_Deshbaord
WHERE        (RDate BETWEEN CONVERT(DATETIME, '$c_date', 102) AND CONVERT(DATETIME, '$e_date', 102))
GROUP BY CONVERT(Varchar, RDate, 103)");
        return $query->result_array();
    }
    public function GetArticles()
    {
        $query = $this->db
            ->query("SELECT   rootcasue,action,NoOfBalls,    StartDate, ArtCode, Name, PSDate, PEDate, Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY rootcasue,action,ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END
HAVING        (PSDate >= '01/11/2021') AND (PEDate <= '04/12/2021')");
        return $query->result_array();
    }
    public function CallData()
    {
        $query = $this->db
            ->query("SELECT   rootcasue,action,NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY rootcasue,action,ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END
HAVING        (PSDate >= '01/11/2021') AND (PEDate <= '10/12/2021')");
        return $query->result_array();
    }

    public function getGantCurrentDateData($currentDate)
    {
        $curr = strtotime($currentDate);
        $newformat = date('d/m/Y', $curr);

        $query = $this->db
            ->query("SELECT        ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED
    WHERE        (PSDate >= '$currentDate') AND (PEDate <= '$currentDate')");
        return $query->result_array();
    }

    public function getGantDateRangeData($startDate, $endDate)
    {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT        ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED
    WHERE        (PSDate >= '$startDate') AND (PEDate <= '$endDate')");
        return $query->result_array();
    }

    public function getGantAllData()
    {

        $query = $this->db
            ->query("SELECT        ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED");
        return $query->result_array();
    }

    public function getGantDateRangeDataArticleCode(
        $startDate,
        $endDate,
        $artCode
    ) {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT       Article, ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED
    WHERE        (PSDate >= '$startDate') AND (PEDate <= '$endDate') AND Article='$artCode'");
        return $query->result_array();
    }

    public function getGantSpecificDataArticleCode(
        $artCode
    ) {
        $query = $this->db
            ->query("SELECT       Article, ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED
    WHERE        (Article='$artCode')");
        return $query->result_array();
    }

    public function getGantDateRangeDataType($startDate, $endDate, $type)
    {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT  Type, Article, ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED
    WHERE        (PSDate >= '$startDate') AND (PEDate <= '$endDate') AND Type='$type'");
        return $query->result_array();
    }

    public function getGantSpecificDataType( $type)
    {

        $query = $this->db
            ->query("SELECT  Type, Article, ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED
    WHERE  Type='$type'");
        return $query->result_array();
    }

    public function getGantDateRangeDataTypeArticleCode(
        $startDate,
        $endDate,
        $type,
        $code
    ) {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT  Type, Article, ArtCode, Name, PSDate, PEDate, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays, CONVERT(Varchar, PSDate, 103) AS PSDate1, CONVERT(Varchar, PEDate, 103) AS PEDate1
FROM            dbo.view_Dev_Articles_PSD_PED
    WHERE        (PSDate >= '$startDate') AND (PEDate <= '$endDate') AND Type='$type' AND Article='$code'");
        return $query->result_array();
    }

    public function getCustomTableData($startDate, $endDate)
    {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT   NoOfBalls,  ArtCode1,  StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
    FROM            dbo.view_Dev_Articles_PSD_PED
    GROUP BY ArtCode, Name, Type, Status, Size, PSDate,ArtCode1, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1
    HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate')");
        return $query->result_array();
    }

    public function getCustomTableAllData()
    {
        $query = $this->db
            ->query("SELECT   NoOfBalls,  ArtCode1,  StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
    FROM            dbo.view_Dev_Articles_PSD_PED
    GROUP BY ArtCode, Name, Type, Status, Size, PSDate,ArtCode1, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1");
        return $query->result_array();
    }

    public function getCustomTableDataArticleCode(
        $startDate,
        $endDate,
        $artCode
    ) {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT Article,  NoOfBalls, ArtCode1,   StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
    FROM            dbo.view_Dev_Articles_PSD_PED
    GROUP BY ArtCode, Name, Type, Status, Size, PSDate, ArtCode1, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
    HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate') AND Article='$artCode'");
        return $query->result_array();
    }

    public function getCustomTableDataSpecificArticleCode(
        $artCode
    ) {
        $query = $this->db
            ->query("SELECT Article, NoOfBalls, ArtCode1,   StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
    FROM            dbo.view_Dev_Articles_PSD_PED
    GROUP BY ArtCode, Name, Type, Status, Size, PSDate, ArtCode1, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
    HAVING        (Article='$artCode')");
        return $query->result_array();
    }

    public function getCustomTableDataType($startDate, $endDate, $type)
    {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT Article,  NoOfBalls, ArtCode1,   StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
    FROM            dbo.view_Dev_Articles_PSD_PED
    GROUP BY ArtCode, Name, Type, Status, Size, PSDate, ArtCode1, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
    HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate') AND Type='$type'");
        return $query->result_array();
    }

    public function getCustomTableDataSpecificType($type)
    {
        $query = $this->db
            ->query("SELECT Article,  NoOfBalls, ArtCode1,   StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
    FROM            dbo.view_Dev_Articles_PSD_PED
    GROUP BY ArtCode, Name, Type, Status, Size, PSDate, ArtCode1, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
    HAVING   Type='$type'");
        return $query->result_array();
    }

    public function getCustomTableDataTypeArticleCode(
        $startDate,
        $endDate,
        $type,
        $code
    ) {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT Article,  NoOfBalls, ArtCode1,   StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
    FROM            dbo.view_Dev_Articles_PSD_PED
    GROUP BY ArtCode, Name, Type, Status, Size, PSDate, ArtCode1, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
    HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate') AND Type='$type' AND Article='$code'");
        return $query->result_array();
    }

    public function CallDataDefault($currentDate)
    {
        $curr = strtotime($currentDate);
        $newformat = date('d/m/Y', $curr);
        $query = $this->db
            ->query("SELECT   NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate,PSDate1, PEDate1, Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1
HAVING        (PSDate >= '$currentDate') AND (PEDate <= '$currentDate')");
        return $query->result_array();
    }

    public function CallDataRangeData($startDate, $endDate)
    {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT   NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1
HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate')");
        return $query->result_array();
    }

    public function CallAllData()
    {
        $query = $this->db
            ->query("SELECT   NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1");
        return $query->result_array();
    }

    public function CallDataRangeDataArticleCode($startDate, $endDate, $artCode)
    {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT  Article, NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate') And Article='$artCode'");
        return $query->result_array();
    }

    public function CallSpecificDataArticleCode( $artCode)
    {
        $query = $this->db
            ->query("SELECT  Article, NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
HAVING        (Article='$artCode')");
        return $query->result_array();
    }

    public function CallDataRangeDataType($startDate, $endDate, $type)
    {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT Article, NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate') And Type='$type'");
        return $query->result_array();
    }

    public function CallSpecificDataType($type)
    {
        $query = $this->db
            ->query("SELECT Article, NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
HAVING   Type='$type'");
        return $query->result_array();
    }

    public function CallDataRangeDataTypeArticleCode(
        $startDate,
        $endDate,
        $type,
        $code
    ) {
        $currS = strtotime($startDate);
        $currE = strtotime($endDate);
        $newformatS = date('d/m/Y', $currS);
        $newformatE = date('d/m/Y', $currE);
        $query = $this->db
            ->query("SELECT Article, NoOfBalls,StartDate, ArtCode, Name, PSDate, PEDate, PSDate1, PEDate1,Type, Status, Size, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END AS NoofDays
FROM            dbo.view_Dev_Articles_PSD_PED
GROUP BY ArtCode, Name, Type, Status, Size, PSDate, PEDate,StartDate,NoOfBalls, CASE WHEN NoofDays = 0 THEN 1 ELSE NoofDays END,PSDate1, PEDate1,Article
HAVING        (PSDate >= '$startDate') AND (PEDate <= '$endDate') And Type='$type' AND Article='$code'");
        return $query->result_array();
    }

    public function loadSupplier()
    {
        $query = $this->db->query("SELECT        Supplier_Name
    FROM            dbo.Tbl_Lab_Test_H
    GROUP BY Supplier_Name
    HAVING        (Supplier_Name IS NOT NULL)");
        return $query->result_array();
    }

    public function loadMaterial()
    {
        $query = $this->db->query("SELECT        Size
    FROM            dbo.Tbl_Lab_Test_H
    GROUP BY Size
    HAVING        (Size IS NOT NULL)");
        return $query->result_array();
    }
}
