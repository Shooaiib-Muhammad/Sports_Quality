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
                    <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<link href="<?php link_file('assets/qa_assets/main.css')?>" rel="stylesheet">
<style>
    .loader-container{
        background: #000;
        position: absolute;
        top:0;
        left:0;
        background: #000;
        opacity: 0.5;
        width: 100%;
        height:100%;
        display: flex;
        align-items:center;
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
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }

    </style>
<style>
    a.w-link{
        text-decoration: none;
    }
</style>

<body>


<div class="container-fluid">
<div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                        <h1 class="mb-4 col-12 text-white bg-primary p-2"> <?php echo explode(" : ",$title)[1] ?></h1>
                        <div class="col-md-6">
                                <h1 class="mb-4">Checked: <b class="text-success"> <?php if($check == '') echo 0; else echo $check; ?> </b></h1>
                            </div>

                        <h1 class="mb-4 col-md-6">Defective: <b class="text-danger"> <?php if($quantity == '') echo 0; else echo $quantity; ?> </b></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <tr>
                                        <td>From: </td>
                                        <td><h3 class="text-primary"> <?php format($start_date); ?> </h4 ></td>
                                    </tr>
                                    <tr>
                                        <td>To :</td>
                                        <td><h3 class="text-primary"> <?php format($end_date); ?> </h3></td>
                                    </tr>
                                </table>
                            </div>
                            <h1 class="mb-4 col-md-6">Percent: <b class="text-danger"> <?php if($total == '') echo 0; else echo $total; ?> </b></h1>
                        </div>

                        <h4 class="mt-5">Defect Criteria</h4>
                        <p class="text-success" style="font-size:20px" id="detail"><?php echo $detail; ?></p>

                    </div>
                    <div class="col-md-6 text-right">
                        <img src="<?php echo $src; ?>" class="img-fluid img-round" style="width:600px; height:400px" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12">
                <div class="mb-3 card">
                    <div class="card-body">

                        <table class="table table-hover" style="width:100%" id="table1">
                            <thead class="bg-dark text-white text-center">
                                <tr>
                                    <th>Date</th>
                                    <?php if($code == 'B34005' || $code == 'B34006'){; ?>
                                    <th>Line #</th>
                                    <?php }; ?>
                                    <th>Article Code</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php $total = 0; ?>
                                <?php foreach($data as $d){

                                    $total += $d->$type;
                                    ; ?>
                                    <tr>
                                        <td><?php format($d->DateName); ?></td>
                                        <?php if($code == 'B34005' || $code == 'B34006'){; ?>
                                        <td><?php echo $d->LineName; ?></td>
                                        <?php }; ?>
                                        <td><?php echo $d->ArtCode; ?></td>
                                        <td><?php echo $d->ArtSize; ?></td>
                                        <td><?php r($d->$type) ; ?></td>
                                    </tr>

                                <?php }; ?>
                                <tr class="bg-dark text-white">
                                        <td></td>
                                        <?php if($code == 'B34005' || $code == 'B34006'){; ?>
                                        <td></td>
                                        <?php }; ?>
                                        <td></td>
                                        <td class="text-warning" style="font-size:20px">Total</td>
                                        <td class="text-warning" style="font-size:20px"><strong><?php echo $total ; ?></strong></td>
                                    </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
</div>



<script src="<?php echo base_url();?>assets/Admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script>
        $(document).ready(function(){
            $('#table1').dataTable({
                dom: 'Bfrtip',
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
                    ],
                "ordering":false,
                "pageLength":10,
                "searching":false,
                "LengthChange":true,
                "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

            });
        })

</script>

<?php
}else{
    redirect('Welcome/index');
}
?>

                    </div>
                </main>
            </div>
        </div>
    </div>
</div>