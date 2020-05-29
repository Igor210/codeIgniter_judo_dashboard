
	<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row"></div>
    
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020  </span><span class="right hide-on-small-only">Developed by <a href="http://viktoria.22web.org/">Viktoria</a></span></div>
      </div>
    </footer>
    <!-- END: Footer-->

    <script type="text/javascript"> var base_url = "<?php echo base_url(); ?>";</script>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url('app-assets') ?>/js/vendors.min.js"></script>
    
    <script src="<?php echo base_url('app-assets') ?>/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/vendors/data-tables/js/dataTables.select.min.js"></script>
    
    <?php if($pageaction == "dashboard"){
        ?>
    <script src="<?php echo base_url('app-assets') ?>/vendors/chartjs/chart.min.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/vendors/chartist-js/chartist.min.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
    <?php
    } ?>

    <script src="<?php echo base_url('app-assets') ?>/js/Angular/angular.min.js"></script>
    <!-- END VENDOR JS-->

    <!-- BEGIN THEME  JS-->
    <script src="<?php echo base_url('app-assets') ?>/js/plugins.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/js/search.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/js/custom/custom-script.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/js/scripts/customizer.js"></script>
    <!-- END THEME  JS-->

    <!-- BEGIN PAGE LEVEL JS-->
    <?php if($pageaction == "dashboard"){
    ?>
    <script src="<?php echo base_url('app-assets') ?>/js/scripts/dashboard-modern.js"></script>
    <?php } ?>
    <script src="<?php echo base_url('app-assets') ?>/js/scripts/intro.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/js/scripts/data-tables.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>