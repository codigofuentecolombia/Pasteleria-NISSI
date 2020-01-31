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
                    <h1 class="content-header-title mb-6">PUNTO DE VENTA</h1>
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
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;"><br><h3 align="center">item 1</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" > <h3 align="center">item 2</h3></a>

        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;" > <h3 align="center">item 3</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" > <br><h3 align="center">item 4</h3></a>
        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;"><br><h3 align="center">item 6</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" > <br><h3 align="center">item 7</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;" > <br> <h3 align="center">item 8</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" > <h3 align="center">item 9</h3></a>
        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;"><h3 align="center">item 11</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" > <h3 align="center">item 12</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;" > <h3 align="center">item 13</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" > <h3 align="center">item 14</h3></a>
        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;"><h3 align="center">item 16</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" > <h3 align="center">item 17</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="http://localhost/dashboard/app-assets/images/logo/logo.png" style="width:80%;height:auto;" > <h3 align="center">item 18</h3></a>
        </div>
        <div class="col-sm-2 co-md-2 col-lg-2">
            <a href="#" class="button"><img src="bebida.jpg" style="width:80%;height:auto;" tipe="radio" > <br>  <h3 align="center">item 19</h3></a>
        </div>
        
    </div>
    <br><br>
    <div class="row"> 
            <div class="col-sm-7 co-md-7 col-lg-7">

            </div>
            <div class="col-sm-2 co-md-2 col-lg-2">
                <button type="button" class="btn mb-1 btn-secondary btn-lg btn-block">Elimiar item</button>
            </div> 
              <div  class="col-sm-3 co-md-3 col-lg-3 text-right">
                  <button type="button" class="btn mb-1 btn-primary btn-lg btn-block">Finalizar compra</button>
              </div>


    </div>
     
                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>









    
    <!-- Fin: Content-->
        </div>
    </div>
</div>
    <?php include('footer.php'); ?>