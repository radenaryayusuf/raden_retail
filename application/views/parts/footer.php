 <footer class="footer">
        <span class="footer-brand">
          <strong class="text-danger">Simplify</strong> Admin
        </span>
        <p class="no-margin">
          &copy; 2014 <strong>Simplify Admin</strong>. ALL Rights Reserved. 
        </p>  
      </footer>
    </div><!-- /wrapper -->

    <a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>

    <!-- Delete Widget Confirmation -->
  

    
      <!-- Le javascript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- Jquery -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
    
    <!-- Bootstrap -->
      <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Flot -->


    <!-- Slimscroll -->
    <script src='<?php echo base_url()?>assets/js/jquery.slimscroll.min.js'></script>
    
    <!-- Morris -->
    <script src='<?php echo base_url()?>assets/js/rapheal.min.js'></script> 
    <script src='<?php echo base_url()?>assets/js/morris.min.js'></script>  

    <!-- Datepicker -->
    <script src='<?php echo base_url()?>assets/js/uncompressed/datepicker.js'></script>
  
    <!-- Sparkline -->
    <script src='<?php echo base_url()?>assets/js/sparkline.min.js'></script>

    <!-- Skycons -->
    <script src='<?php echo base_url()?>assets/js/uncompressed/skycons.js'></script>
    
    <!-- Popup Overlay -->
    <script src='<?php echo base_url()?>assets/js/jquery.popupoverlay.min.js'></script>
    <!-- Noty -->
    <script src='<?php echo base_url()?>assets/js/jquery.noty.packaged.min.js'></script>

    <!-- Gritter -->
    <script src="<?php echo base_url()?>assets/js/jquery.gritter.min.js"></script>
    <!-- Easy Pie Chart -->
    <script src='<?php echo base_url()?>assets/js/jquery.easypiechart.min.js'></script>

    <!-- Sortable -->
    <script src='<?php echo base_url()?>assets/js/uncompressed/jquery.sortable.js'></script>

    <!-- Owl Carousel -->
    <script src='<?php echo base_url()?>assets/js/owl.carousel.min.js'></script>

    <!-- Modernizr -->
    <script src='<?php echo base_url()?>assets/js/modernizr.min.js'></script>
    
    <!-- Simplify -->
    <script src="<?php echo base_url()?>assets/js/simplify/simplify.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.number.js"></script>
    <!-- Datatable -->
    <script src='<?php echo base_url()?>assets/js/jquery.dataTables.min.js'></script>
    <script src='<?php echo base_url()?>assets/js/uncompressed/dataTables.bootstrap.js'></script>  
   <script src='<?php echo base_url()?>assets/js/select2.min.js'></script>
    <script>
      $(function()  {
        $('.chart').easyPieChart({
          easing: 'easeOutBounce',
          size: '140',
          lineWidth: '7',
          barColor: '#7266ba',
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });

        $('.sortable-list').sortable();

        $('.todo-checkbox').click(function()  {
          
          var _activeCheckbox = $(this).find('input[type="checkbox"]');

          if(_activeCheckbox.is(':checked'))  {
            $(this).parent().addClass('selected');          
          }
          else  {
            $(this).parent().removeClass('selected');
          }
        
        });

        //Delete Widget Confirmation
        $('#deleteWidgetConfirm').popup({
          vertical: 'top',
          pagecontainer: '.container',
          transition: 'all 0.3s'
        });
      });
      
    
    </script>

    </body>

<!-- Mirrored from endlesstheme.com/simplify1.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2017 14:52:35 GMT -->
</html>
