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
                    <h1 class="content-header-title mb-6">Pago a proveedores</h1>
                    <div class="row breadcrumbs-top">

                    </div>
                </div>
                
            </div>
            <div class="content-body"> <br> <br>
            <section id="events">

    <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>

                                </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                            <fieldset>
                                               
                                            <div class="row">
                                                <table class="table table-striped table-bordered responsive ">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">proveedores</th>
                                                    <th class="text-center">Productos contratados </th>
                                                    <th class="text-center">Precio de los productos</th>
                                                    <th class="text-center">Numero de pedidos </th>
                                                    <th class="text-center">Plazo de entrega</th>
                                                    <th class="text-center">Metodo de pago</th>
                                                    <th class="text-center">Cuenta corriente</th>
                                                
                                                    
                                                </tr>
                                                        <?php   
                                                            $inventarios="SELECT * FROM productos INNER JOIN unidades_medida ON productos.medida_producto=unidades_medida.id_unidad INNER JOIN proveedores on productos.proveedor=proveedores.NIT INNER JOIN categorias ON productos.categoria=categorias.id_categoria WHERE productos.reg_eli=0 ORDER BY productos.id_producto ASC";
                                                            $resultado=$mysqli->query($inventarios);
                                                        ?>
                                            </thead>
                                            <tbody>
                                                      <th></th>
                                                      
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                     
                                                      
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                
                                                <th ></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                   
                                                </tr>
                                            </tfoot>
                                        </table>  
                                                
                                            </fieldset>
                                                   

                                            </div> 
                                        </div>

                                </div>
                            </div> 
                        </div>
                    </div>
                    
        </div> <br>
    </div>
</div>
    <?php include('footer.php'); ?>