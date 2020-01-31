<?php include('includes/conexion.php'); ?>
<?php include('includes/sesion.php'); 
?>


<!DOCTYPE html>
    <html class="loading" lang="en" data-textdirection="ltr"> 
        <?php include('head.php'); ?>
            <body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
            <?php include('header.php'); ?>
            <?php include('menu.php'); ?> 
    <!-- INICIO: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-right text-md-right col-md-7 col-12">
                    <h1 class="content-header-title mb-6">Nota debito</h1>
                    <div class="row breadcrumbs-top">

                    </div>
                </div>
                
            </div>
            <div class="content-body"> <br> <br>
            <section id="events">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper">
                                        <!-- Evento 
                                        <div class="dt-events-log">
                                            Event summary - new events added at the top
                                        </div> -->
                                        <table class="table table-striped table-bordered responsive dataex-select-events">
                                        <div class="row"> 
                                              <div class="col-sm-2 co-md-2 col-lg-2 text-center">
                                              <label  for="numero_consecutivo">Numero consecutivo</label>
                                                    <input type="text" id="numero_consecutivo" class="form-control"  name="numero_consecutivo" required>
                                              </div>
                                              <div class="col-sm-7 co-md-7 col-lg-7">
                                                   
                                              </div> 
                                              <div  class="col-sm-3 co-md-3 col-lg-3 text-center">
                                                    <label  for="nombre_-empresa">Nombre empresa</label>
                                                    
                                                    
                                              </div>


                                        </div>
                                        <br> <br>
                                        <div class="row">
                                            <div class="col-sm-12 co-md-12 col-lg-12 text-center">
                                                 <label ></label>Razon de la modificacion</label>
                                                 <input type="text" id="razon_modificacion" class="form-control"  name="razon_modificacion" required>


                                                </div>

                                            </div>

                                        

                                        </div> <br> 
                                        <div class="row"> 
                                              <div class="col-sm-2 co-md-2 col-lg-2 text-center">
                                                    <label  for="valor_no_grabado">Valor no grabado</label>
                                                    <input type="text" id="valor_no_grabado" class="form-control"  name="valor_no_grabado" required>
                                              </div>
                                              <div class="col-sm-2 co-md-2 col-lg-2 text-center">
                                                     <label  for="valor_grabado">Valor grabado</label>
                                                     <input type="text" id="valor_grabado" class="form-control"  name="valor_grabado" required>
                                                   
                                              </div> 
                                              <div  class="col-sm-2 co-md-2 col-lg-2 text-center">
                                                    <label  for="sub_total">Sub total</label>
                                                    <input type="text" id="sub_total" class="form-control"  name="sub_total" required>    
                                              </div>
                                              <div  class="col-sm-2 co-md-2 col-lg-2 text-center">
                                                    <label  for="fletes">Fletes</label>
                                                    <input type="text" id="fletes" class="form-control"  name="fletes" required>    
                                              </div>
                                              <div  class="col-sm-2 co-md-2 col-lg-2 text-center">
                                                    <label  for="sub_total_1">Sub total</label>
                                                    <input type="text" id="sub_total_1" class="form-control"  name="sub_total_1" required>    
                                              </div>
                                              <div  class="col-sm-2 co-md-2 col-lg-2 text-center">
                                                    <label  for="iva">iva</label>
                                                    <input type="text" id="iva" class="form-control"  name="iva" required>    
                                              </div>

                                        </div><br> 
                                        <div class="row">
                                           <div class="col-sm-2 co-md-2 col-lg-2 text-center">
                                              <label  for="sub_total_iva">Subtotal iva</label>
                                              <input type="text" id="sub_total_iva" class="form-control"  name="sub_total_iva" required>    
                                           </div>
                                           <div class="col-sm-3 co-md-3 col-lg-3 text-center">
                                              <label  for="rete_fuente_iva">Retencion en la fuente por iva</label>
                                              <input type="text" id="rete_fuente_iva" class="form-control"  name="rete_fuente_iva" required>    
                                           </div>
                                           <div class="col-sm-4 co-md-4 col-lg-4 text-center">
                                              <label  for="rete_fuente_ica">Retencion en la fuente por ica</label>
                                              <input type="text" id="rete_fuente_ica" class="form-control"  name="rete_fuente_ica" required>    
                                           </div>
                                           <div class="col-sm-3 co-md-3 col-lg-3 text-center">
                                              <label  for="rete_fuente_renta">Retencion en la fuente por renta </label>
                                              <input type="text" id="rete_fuente_renta" class="form-control"  name="rete_fuente_renta" required>    
                                           </div>
                                           
                                          
                                        </div> <br> 
                                        <div class="row">
                                        <div class="col-sm-9 co-md-9 col-lg-9 text-center">
                                              <label  for="espa1"></label>
                                                 
                                           </div>
                                           <div class="col-sm-3 co-md-3 col-lg-3 text-center">
                                              <label  for="total">Total</label>
                                              <input type="text" id="total" class="form-control"  name="total" required>    
                                           </div>
                                           

                                        </div>

                                        
     
                                        




                                        
    <!-- Fin: Content-->
        </div> <br>
    </div>
</div>
    <?php include('footer.php'); ?>