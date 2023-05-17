<div id="panel-1" class="panel">



	<?php $this->load->view('includes/new_header'); ?>

	<?php
	// print_r($MaterialTestTypes);
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

					<div class="col-lg-12" style="margin-bottom:20px">

						<?php if ($this->session->flashdata('info')) { ?>
							<div class="alert alert-success alert-dismissible show fade" id="msgbox">
								<div class="alert-body">
									<button class="close" data-dismiss="alert">
										<span>&times;</span>
									</button>
									<?php echo $this->session->flashdata('info'); ?>
								</div>
							</div>
						<?php } ?>
						<?php if ($this->session->flashdata('danger')) { ?>
							<div class="alert alert-danger alert-dismissible show fade" id="msgbox">
								<div class="alert-body">
									<button class="close" data-dismiss="alert">
										<span>&times;</span>
									</button>
									<?php echo $this->session->flashdata('danger'); ?>
								</div>
							</div>
						<?php } ?>

						<ol class="breadcrumb page-breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url(
																		'index.php/DashboardController'
																	); ?>">Dashboard</a></li>
							<li class="breadcrumb-item">Supplier Wise Test</li>


							<li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
						</ol>

						<div class="subheader">
							<h1 class="subheader-title">
								<i class='subheader-icon fal fa-chart-area'></i>Supplier Wise Test</span>

							</h1>
						</div>
						<?php if ($this->session->userdata('userStus') == 1) { ?>

							<style>
								section#counter-stats {
									display: flex;
									justify-content: center;
									margin-top: 100px;
								}

								.stats {
									text-align: center;
									font-size: 35px;
									font-weight: 700;
									font-family: 'Montserrat', sans-serif;
								}

								.stats .fa {
									color: #008080;
									font-size: 60px;
								}
							</style>

							<body>

								<div id="right-panel" class="right-panel">

									<style>



									</style>
									<link href="<?php link_file(
													'assets/qa_assets/main.css'
												); ?>" rel="stylesheet">



									<div class="row">
										<div class="col-md-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><b>Supplier Test </b></h5>
													<form method="POST" action="<?php echo base_url('supplierWiseTestController/submitSupplierTest') ?>" enctype="multipart/form-data">
														<div class="row">
															<div class="col-md-3">
																<select class="browser-default custom-select" id="customFileType" name="customFileType">
																	<option selected>Select Test Type</option>
																	<?php
																	foreach ($MaterialTestTypes as $key) {

																	?>
																		<option value="<?php echo $key['Name'] ?>"><?php echo $key['Name'] ?></option>

																	<?php } ?>
																</select>
															</div>
															<div class="col-md-3">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="customFileimage" name="customFileimage">
																	<label class="custom-file-label" for="customFileimage">Choose Image</label>
																</div>
															</div>
															<div class="col-md-2">
																<button type="submit" name="submitImage" class="btn btn-primary">Submit</button>
															</div>
														</div>
													</form>

												</div>
											</div>

										</div>
									</div>
									<!-- modal for edit image -->
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Supplier Update</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form method="POST" action="<?php echo base_url('supplierWiseTestController/updateSupplierData') ?>" enctype="multipart/form-data">
												<div class="modal-body">
													<div class="row d-flex flex-row">
														<div class="col-md-3">
															<img src="" alt="" id="updateImage" name="updateImage" width="100px" height="100px">
														</div>

														<input type="hidden" name="updateid" id="updateid">
														
														<div class="col-md-9">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="updateFileImage" name="updateFileImage">
																<label class="custom-file-label" for="updateFileImage">Choose Image</label>
															</div>	
														</div>
													</div>
												</div>
												<div class="modal-footer">
												
													<button type="submit" class="btn btn-primary" >Update</button>
												</div>
												</form>
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">

											<div class="card">
												<div class="card-body">
													<h5 class="card-title"><b>Supplier Test Data </b></h5>
													<div class="row">
														<div class="col-md-12">
															<div id="supplierData">

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>

									<script src="<?php echo base_url(); ?>assets/js/chart.js"></script>
									<script src="<?php echo base_url(); ?>/assets/charts/highcharts.js"></script>
									<script src="<?php echo base_url(); ?>/assets/charts/data.js"></script>
									<script src="<?php echo base_url(); ?>/assets/charts/drilldown.js"></script>
									<script src="<?php echo base_url(); ?>/assets/charts/exporting.js"></script>
									<script src="<?php echo base_url(); ?>/assets/charts/export-data.js"></script>
									<script src="<?php echo base_url(); ?>/assets/charts/accessibility.js"></script>
									<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
									<script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
									<script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
									<script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
									<script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
									<script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
									<script type="text/javascript">
										/* Activate smart panels */
										$('#js-page-content').smartPanel();
									</script>


									<script>
										$(document).ready(function() {
											console.log("ready!");
											getSupplierData();
										});

										function editSupplier(tid) {
											url = '<?php echo base_url('supplierWiseTestController/getsignleSupplier') ?>';
											$.post(url,{
												'tid': tid,
											},function(data){
												$("#updateImage").attr('src',`<?php echo base_url('assets/img/supplier/')?>${data[0].image}`)
												$('#updateid').val(data[0].TID)
												console.log("edit  data is ",data[0]);
												
											})

										}
										

										function getSupplierData() {
											url = '<?php echo base_url('supplierWiseTestController/getSupplierTest') ?>';
											$('#supplierData').html('');
											$.post(url, {}, function(data) {
												console.log("Data is ", data);
												html = `<table id="table1" class="table table-bordered table-hover table-responsive-lg table-striped ">
                                                <thead class="bg-primary-200">
                                                    <tr style="color:white;">
                                                      <th>Test Name</th>
                                                        <th>Image </th>
                                                        <th>Action </th>

                                  
                                                    </tr>
                                                </thead>
                                                <tbody>`;
												data.forEach(element => {
													html += `
													<tr>
													<td>${element.testName}</td>
                                                    <td> <img src="<?php echo base_url('assets/img/supplier/') ?>${element.image}" width="100px" height="60px" alt=""> </td>
                                                    <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal" value="${element.TID}" onclick="editSupplier(${element.TID})" ><i class="fal fa-edit" aria-hidden="true"></i></button></td>

													</tr>
													`
												});
												html += `</tbody> </table>`;

												$("#supplierData").append(html);

												$('#table1').dataTable({
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

										}
									</script>



								<?php } else {
								redirect('Welcome/index');
							}
								?>

								</div>
				</main>
			</div>
		</div>
	</div>
</div>
