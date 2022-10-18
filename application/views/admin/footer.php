            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved &copy CopyRight <?php echo DATE('Y');?> Builders
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>AdminDash/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>AdminDash/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>AdminDash/dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>AdminDash/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>AdminDash/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>AdminDash/dist/js/custom.js"></script>
    <!-- DATATABLES -->
    <script>
       $(document).ready(function() {
      $('#data').DataTable({
        scrollY: 400, 
        //scrollX: 400,
        processing: true,
        searching: true,
        responsive: true,
        scrollCollapse: true,
        paging: true,
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        stateSave: true,
        // Buttons to save data 
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?php echo base_url();?>AdminDash/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url();?>AdminDash/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url();?>AdminDash/dist/js/pages/dashboards/dashboard1.js"></script>