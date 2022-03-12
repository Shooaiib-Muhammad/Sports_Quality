
<script src="<?php echo base_url();?>assets/Admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/assets/js/main.js"></script>


    <script src="<?php echo base_url();?>assets/Admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/assets/js/widgets.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
 <script src="<?php echo base_url();?>assets/Css/Testcode.js"></script>
     <script src="<?php echo base_url();?>assets/Admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/assets/js/init-scripts/chart-js/chartjs-init.js"></script>
       <!-- <script src="<?php echo base_url();?>assets/Admin/vendors/jquery/dist/jquery.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/datatables.min.js"></script>


<script src="<?php echo base_url();?>assets/Admin/vendors/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/Datatable/buttons.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/Datatable/jszip.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/Datatable/pdfmake.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/Datatable/vfs_fonts.js');?>"></script>
        <script src="<?php echo base_url('assets/js/Datatable/buttons.html5.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/Datatable/buttons.print.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/Datatable/dataTables.rowGroup.min.js');?>"></script>
</html>
