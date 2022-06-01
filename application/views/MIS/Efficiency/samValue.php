<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>

    <div id="panel-1" class="panel">

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

                        <div class="col-lg-12" style="margin-bottom:20px">
                            <ol class="breadcrumb page-breadcrumb">

                                <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                            </ol>
                            <div class="subheader">
                                <h1 class="subheader-title">
                                    <i class='subheader-icon fal fa-chart-area'></i>SMV</span>

                                </h1>
                            </div>
                            <!doctype html>
                            <?php if ($this->session->userdata('userStus') == 1) { ?>
                                <html class="no-js" lang="en">
                                <!--<![endif]-->
                                <link href="<?php link_file('assets/qa_assets/main.css'); ?>" rel="stylesheet">
                                <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

                                <!-- <link href="https://cdn.datatables.net/rowgroup/1.1.1/css/rowGroup.dataTables.min.css" rel="stylesheet"> -->
                                <style>
                                    .loader-container {
                                        background: #000;
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        background: #000;
                                        opacity: 0.5;
                                        width: 100%;
                                        height: 100%;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        z-index: 10000;
                                    }

                                    .loader {

                                        opacity: 0.5;
                                        border: 16px solid #f3f3f3;
                                        border-radius: 50%;
                                        border-top: 16px solid blue;
                                        border-bottom: 16px solid blue;
                                        width: 120px;
                                        height: 120px;
                                        -webkit-animation: spin 2s linear infinite;
                                        animation: spin 2s linear infinite;

                                    }

                                    @-webkit-keyframes spin {
                                        0% {
                                            -webkit-transform: rotate(0deg);
                                        }

                                        100% {
                                            -webkit-transform: rotate(360deg);
                                        }
                                    }

                                    @keyframes spin {
                                        0% {
                                            transform: rotate(0deg);
                                        }

                                        100% {
                                            transform: rotate(360deg);
                                        }
                                    }

                                    table.dataTable tr.dtrg-group td {
                                        background-color: #e0e0e0;
                                        text-align: left;
                                    }

                                    table.dataTable tr.dtrg-group.dtrg-level-0 td {
                                        font-weight: bold
                                    }

                                    table.dataTable tr.dtrg-group.dtrg-level-1 td,
                                    table.dataTable tr.dtrg-group.dtrg-level-2 td {
                                        background-color: #f0f0f0;
                                        padding-top: 0.25em;
                                        padding-bottom: 0.25em;
                                        padding-left: 2em;
                                        font-size: 0.9em
                                    }

                                    table.dataTable tr.dtrg-group.dtrg-level-2 td {
                                        background-color: #f3f3f3
                                    }

                                    a.w-link {
                                        text-decoration: none;
                                    }
                                </style>

                                <body>
                                    <div id="right-panel" class="right-panel">

                                        <div class="container-fluid">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="form-row">

                                                        <div class="col-md-2" style="display:none">
                                                            <div class="position-relative form-group">
                                                                <input name="clientID" id="clientID" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2" style="display:none">
                                                            <div class="position-relative form-group">
                                                                <input name="modelID" id="modelID" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2" style="display:none">
                                                            <div class="position-relative form-group">
                                                                <input name="articleID" id="articleID" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label for="factory" class="">Article</label>
                                                                <select name="factory" id="factory" class="form-control" onchange="loadData()">
                                                                    <option value="">Select Article Code</option>


                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">Model Name</label>
                                                                <input name="model" id="model" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">Factory Code</label>
                                                                <input name="factoryCode" id="factoryCode" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">SAM Forming </label>
                                                                <input name="forming" id="forming" type="number" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">SAM Packing</label>
                                                                <input name="packing" id="packing" type="number" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">Working No</label>
                                                                <input name="workno" id="workno" type="text" class="form-control" readonly value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <button class="btn btn-success btn-block" id="update" style="margin-top:1.75rem; font-size:1.05rem;">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="row ml-2 mt-2">
                                                    <div class="col-md-2">


                                    <a href="javascript:void(0)" onclick="showForm('<?php echo "B34001" ?>')">
                                                            <div style="background-color:grey" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34001" class="m-0 l-h-n">B34001</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34002" ?>')">
                                                            <div style="background-color:rgba(204, 197, 181, 1)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34002"  class="m-0 l-h-n">B34002</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34003" ?>')">
                                                            <div style="background-color:rgba(188, 136, 147, 0.6)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34003"  class="m-0 l-h-n">B34003</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34004" ?>')">
                                                            <div style="background-color:rgba(26, 132, 145, 0.7)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34004"  class="m-0 l-h-n">B34004</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <a href="javascript:void(0)" onclick="showForm('<?php echo "B34005" ?>')">
                                                            <div style="background-color:rgba(26, 132, 145, 0.7)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34005"class="m-0 l-h-n">B34005</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <a href="javascript:void(0)" onclick="showForm('<?php echo "B34006" ?>')">
                                                            <div style="background-color:rgba(26, 132, 145, 0.7)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34006" class="m-0 l-h-n">B34006</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <a href="javascript:void(0)" onclick="showForm('<?php echo "B34007" ?>')">
                                                            <div style="background-color:rgba(26, 132, 145, 0.7)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34007" class="m-0 l-h-n">B34007</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            
                                            <div class="form-row mb-2 ml-2" id="showForm" style="overflow-x:auto;">

                                              
                                               
                                                <!-- <div class="col-md-2">
                                                    <div class="position-relative form-group">
                                                        <label class="">SAM Forming </label>
                                                        <input name="forming" id="forming" type="number" class="form-control" value="">
                                                    </div>
                                                </div>
                                               -->
                                               
                                                
                                            </div>
                               
                                            </div>

                                       
                                        </div>


                                        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
                                        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
                                        <script type="text/javascript">
                                            /* Activate smart panels */
                                            $('#js-page-content').smartPanel();
                                        </script>
                                        <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
                                        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
                                        <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
                                        <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
                                        <script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>

                                        <script src="<?php echo base_url(); ?>Assets/select/select2.min.js"></script>
                                        <script>

                                            function showForm(factorCode){
                                                 $("#showForm").html(' ');
                                                 value=document.getElementById("showValue"+factorCode).innerText;
                                                 url="<?php echo base_url('MIS/Efficiency/getFactoryCode') ?>"
                                              
                                                $.post(url,{"factory_code":value},function(data){
                                                    console.log(data)

                                                    var table='';
                                                    table+=` <table class="table table-responsive" id="ActivityData">
                        <thead>
                          <tr>
                            
                            <th>SesonalRange</th>
                            <th>WorkNo</th>
                            <th>ArtCode</th>
                            <th>ModelName</th>
                            <th>PanelShape</th>
                            <th>Core_Gluing</th>
                            <th>HF_Cutting</th>
                            <th>Sheet_Sizing</th>
                            <th>Panel_Preparation</th>
                            <th>Assembly_SAM</th>
                            <th>Final_cleaning</th>
                            <th>Labelling_packaging</th>
                            <th>FactoryCode</th>
                           
                            
                            
                            
                            <th>ModelNo</th>
                            
                           
                            
                            
                            
                            <th>bladder_winding</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>`

                          
                         
                
                       data.forEach(e => {
                        table+=`<tr>
                             
                              <td> ${e.SesonalRange}</td>
                              <td>  ${e.WorkNo}</td>
                              <td>${e.ArtCode} </td>
                              <td>  ${e.ModelName}</td>
                              <td> ${e.PanelShape}</td>
                              <td id="Core_Gluing" contentEditable="true"> ${e.Core_Gluing}</td>
                              <td id="HF_Cutting" contentEditable="true"> ${e.HF_Cutting}</td>
                              <td id="Sheet_Sizing" contentEditable="true">  ${e.Sheet_Sizing}</td>
                              <td id="Panel_Preparation" contentEditable="true">  ${e.Panel_Preparation}</td>
                              <td id="Assembly_SAM" contentEditable="true"> ${e.Assembly_SAM}</td>
                              <td id="Final_cleaning" contentEditable="true"> ${e.Final_cleaning} </td>
                              <td id="Labelling_packaging" contentEditable="true">  ${e.Labelling_packaging}</td>
                              <td>  ${e.FactoryCode}</td>
                             
                              
                           
                             
                              <td> ${e.ModelNo} </td>
                              
                              
                            
                             
                            
                              <td id="bladder_winding" contentEditable="true">  ${e.bladder_winding}</td>
                              <td>
                                <button type="button" style="display: inline-block;" class="btn btn-info btn-xs " id="btn" onclick="updateArt(${e.ClientID},${e.ModelID},${e.ArtID})"><i class="fal fa-edit" aria-hidden="true"></i></button>
                              </td>
                            </tr>`
});
                           
                        



                        table+=`</tbody>
                      </table>`

                      $("#showForm").append(table)

                      $(document).ready(function() {
            // LoadData(stDate, enDate);

            $('#ActivityData').dataTable({
                responsive: false,
                lengthChange: false,
                dom:
                    /*	--- Layout Structure 
                    	--- Options
                    	l	-	length changing input control
                    	f	-	filtering input
                    	t	-	The table!
                    	i	-	Table information summary
                    	p	-	pagination control
                    	r	-	processing display element
                    	B	-	buttons
                    	R	-	ColReorder
                    	S	-	Select

                    	--- Markup
                    	< and >				- div element
                    	<"class" and >		- div with a class
                    	<"#id" and >		- div with an ID
                    	<"#id.class" and >	- div with an ID and a class

                    	--- Further reading
                    	https://datatables.net/reference/option/dom
                    	--------------------------------------
                     */
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [
                    /*{
                    	extend:    'colvis',
                    	text:      'Column Visibility',
                    	titleAttr: 'Col visibility',
                    	className: 'mr-sm-3'
                    },*/
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        titleAttr: 'Generate PDF',
                        className: 'btn-outline-danger btn-sm mr-1'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        titleAttr: 'Generate Excel',
                        className: 'btn-outline-success btn-sm mr-1'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        titleAttr: 'Print Table',
                        className: 'btn-outline-primary btn-sm'
                    }
                ]
            });


        });
                                                })
                                            }
                                            $(document).ready(function() {
                                                //alert("Heloo");
                                                // 

                                                loadarticle();
                                            });

                                            function loadarticle() {
                                                //alert("load");
                                                $('#factory').select2();
                                                url = "<?php echo base_url('MIS/Efficiency/samValue1/'); ?>";

                                                $.get(url, function(data) {
                                                    let parsed = JSON.parse(data);
                                                    var appendArticle = '';
                                                    console.log(parsed);
                                                    parsed.forEach(element => {

                                                        appendArticle += `
                 
                  <option value='${element.ArtCode}'>${element.ArtCode}</option>`
                                                    })
                                                    $("#factory").append(appendArticle)
                                                });
                                            }

                                            function loadData() {

                                                let article = $("#factory").val();

                                                url = "<?php echo base_url('MIS/Efficiency/loadArticleStuff/'); ?>";
                                                // alert(url);
                                                $.get(url, {
                                                    article
                                                }, function(data) {
                                                    let parsed = JSON.parse(data);
                                                    console.log("pasrsed data", parsed);
                                                    document.getElementById("model").value = parsed[0].ModelName
                                                    document.getElementById("factoryCode").value = parsed[0].FactoryCode
                                                    document.getElementById("forming").value = parsed[0].SAMForming
                                                    document.getElementById("packing").value = parsed[0].SAMPacking
                                                    document.getElementById("clientID").value = parsed[0].ClientID
                                                    document.getElementById("articleID").value = parsed[0].ArtID
                                                    document.getElementById("modelID").value = parsed[0].ModelID
                                                    document.getElementById("workno").value = parsed[0].WorkNo
                                                })
                                            }

                                            $("#update").on("click", function() {

                                                let articleID = $("#articleID").val();
                                                let clientID = $("#clientID").val();
                                                let modelID = $("#modelID").val();
                                                let forming = $("#forming").val();
                                                let packing = $("#packing").val();
                                                let workno = $("#workno").val();
                                                url = "<?php echo base_url('MIS/Efficiency/updateSam/'); ?>";


                                                $.post(url, {
                                                    articleID,
                                                    clientID,
                                                    modelID,
                                                    forming,
                                                    packing,
                                                    workno
                                                }, function(data) {
                                                    console.log(data);
                                                    alert('Updated Successfully');
                                                    window.location.reload();

                                                })
                                            })
                                        </script>

                                    <?php } else {
                                    redirect('Welcome/index');
                                }
                                    ?>

                                    </div>
                                    <script>
                                        
                                        function updateArt(client,model,article){
 
                                             Assembly_SAM=$("#Assembly_SAM").text()
                                             Core_Gluing=$("#Core_Gluing").text()
                                             Final_cleaning=$("#Final_cleaning").text()
                                             HF_Cutting=$("#HF_Cutting").text()
                                             Labelling_packaging=$("#Labelling_packaging").text()
                                             Panel_Preparation=$("#Panel_Preparation").text()
                                             Sheet_Sizing=$("#Sheet_Sizing").text()
                                             bladder_winding=$("#bladder_winding").text()
                                             
                                            //  hey=art.parseInt();
//                                             if (Number(art).toString() !== art){
//     alert("leading 0 detected")
// }
// else{
//     alert("false")
// }
                                            
                                            
                                             url="<?php echo base_url('MIS/Efficiency/updateArt') ?>"
                                            
                                              $.post(url,{"client":client,"model":model,"article":article,"Assembly_SAM":Assembly_SAM,"Core_Gluing":Core_Gluing,"Final_cleaning":Final_cleaning,"HF_Cutting":HF_Cutting,"Labelling_packaging":Labelling_packaging,"Panel_Preparation":Panel_Preparation,"Sheet_Sizing":Sheet_Sizing,"bladder_winding":bladder_winding},function(data){

                                                console.log(data);
                                                alert("Data Updated Successfully!")
                                                // location.reload();
                                              })
                                        }
                                    </script>
                    </main>
                </div>
            </div>
        </div>
    </div>

<?php

}
?>