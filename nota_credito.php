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
                    <h1 class="content-header-title mb-6">Nota de credito</h1>
                    <div class="row breadcrumbs-top">

                    </div>
                </div>
                
            </div>
            <div class="content-body"> <br> <br>
            <section id="events">
            <fieldset>
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                  <label >POSTRES Y PONQUES NISSI</label>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                  <label >Telefono</label>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">
                  <label >direccion</label>
                </div>

            </div>  <br> <br>  
            <div class="row">
                <div class="col-sm-3col-md-3col-lg-3text-centertxt-center">
                    <div class="form-group">
                            <label  for="numero_de_factura">Numero de factura</label>
                            <input type="text" id="numero_de_factura" class="form-control"  name="numero_de_factura" required>

                    </div>
                    

                </div>
                <div class="col-sm-3col-md-3col-lg-3text-center">
                    <div class="form-group">
                            <label  for="numero_de_pedido">Numero de pedido</label>
                            <input type="text" id="numero_de_pedido" class="form-control"  name="numero_de_pedido" required>

                    </div>
                    

                </div>
                <div class="col-sm-3col-md-3col-lg-3text-center">
                    <div class="form-group">
                            <label  for="vendedor">Vendedor</label>
                            <input type="text" id="vendedor" class="form-control"  name="vendedor" required>

                    </div>
                    

                

            </div>
            <div class="row">
            <table class="table table-striped table-bordered responsive ">
        <thead>
            <tr>
                <br><br>
                <th>numero de articulo</th>
                <th>descripcion</th>
                <th>precio unitario</th>
                <th>cantidad </th>
                <th>importe</th>
                
                
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
                    
                    
        </tbody>
        <tfoot>
            <tr>
                
                
            </tr>
        </tfoot>
    </table>

            </div>
            <div class="row">
                <div class="col-sm-3col-md-3col-lg-3">
                    <div class="form-group">
                            <label  for="numero_de_factura">Numero de factura</label>
                            <input type="text" id="numero_de_factura" class="form-control"  name="numero_de_factura" required>

                    </div>
                    

                </div>
                <div class="col-sm-3col-md-3col-lg-3text-center">
                    <div class="form-group">
                            <label  for="numero_de_pedido">Numero de pedido</label>
                            <input type="text" id="numero_de_pedido" class="form-control"  name="numero_de_pedido" required>

                    </div>
                    

                </div>
                <div class="col-sm-3col-md-3col-lg-3text-center">
                    <div class="form-group">
                            <label  for="vendedor">Vendedor</label>
                            <input type="text" id="vendedor" class="form-control"  name="vendedor" required>

                    </div>
                    

                

            </div>
            
        </fieldset>
                                        
    <!-- Fin: Content-->
        </div> <br>
    </div>
</div>
    <?php include('footer.php'); ?>