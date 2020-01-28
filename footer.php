
    <div class="sidenav-overlay"></div> 
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://codigofuentecolombia.com" target="_blank">Codigo Fuente Colombia S.A.S</a></span><span class="float-md-right d-none d-lg-block">Hacemos las cosas con el <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <script type="text/javascript">
          $(document).ready(function() {
              $('#NIT').on('blur', function() {
                  var NIT = $(this).val();		
              var dataString = 'NIT='+NIT;
            $.ajax({
                      type: "POST",
                      url: "ajax.php",
                      data: dataString,
                      success: function(data) {
                          //Escribimos las sugerencias que nos manda la consulta
                          $('#suggestions').fadeIn(1000).html(data);
                          //Al hacer click en alguna de las sugerencias
                          $('.suggest-element').on('click', function(){
                                  //Obtenemos la id unica de la sugerencia pulsada
                                  var id = $(this).attr('id');
                                  //Editamos el valor del input con data de la sugerencia pulsada
                                  $('#NIT').val($('#'+id).attr('data'));
                                  //Hacemos desaparecer el resto de sugerencias
                                  $('#suggestions').fadeOut(1000);
                                  swal('Has seleccionado el '+id+' ');
                                  return false;
                          });
                      }
                  });
              });
          }); 
        </script>

        <script type="text/javascript">
          $(document).ready(function() {
              $('#codigo_producto').on('blur', function() {
                  var codigo_producto = $(this).val();		
              var dataString = 'codigo_producto='+codigo_producto;
            $.ajax({
                      type: "POST",
                      url: "ajax2.php",
                      data: dataString,
                      success: function(data) {
                          //Escribimos las sugerencias que nos manda la consulta
                          $('#suggestions').fadeIn(1000).html(data);
                          //Al hacer click en alguna de las sugerencias
                          $('.suggest-element').on('click', function(){
                                  //Obtenemos la id unica de la sugerencia pulsada
                                  var id = $(this).attr('id');
                                  //Editamos el valor del input con data de la sugerencia pulsada
                                  $('#codigo_producto').val($('#'+id).attr('data'));
                                  //Hacemos desaparecer el resto de sugerencias
                                  $('#suggestions').fadeOut(1000);
                                  swal('Has seleccionado el '+id+' ');
                                  return false;
                          });
                      }
                  });
              });
          }); 
        </script>

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script> 
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="app-assets/data/jvector/visitor-data.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js"></script>
    <script src="app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js"></script>
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script> 
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/vendors/js/ui/prism.min.js"></script>  
    <script src="app-assets/js/scripts/forms/select/form-selectize.js"></script>
    <script src="app-assets/vendors/js/forms/select/selectize.min.js"></script>
    <script src="app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-sales.js"></script>
    <script src="app-assets/js/scripts/tables/datatables-extensions/datatable-select.js"></script>
    <script src="app-assets/js/scripts/forms/select/form-select2.js"></script>
    <script src="app-assets/js/scripts/modal/components-modal.js"></script>
    <script src="app-assets/js/scripts/ui/jquery-ui/buttons-selects.js"></script>
    <script src="app-assets/js/scripts/forms/switch.js"></script>
    <script src="app-assets/js/scripts/forms/wizard-steps.js"></script>
    <script src="app-assets/js/scripts/forms/select/form-selectize.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>