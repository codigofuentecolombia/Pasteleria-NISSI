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
                                                   
                                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                                        <div class="form-group">
                                                            <h2 > nissi postres y ponques</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                            <h4 > Telefono: 3116695499</h4>
                                                        </div>
                                                    </div><div class="col-sm-3 col-md-3 col-lg-3">
                                                        <div class="form-group">
                                                            <h4> Direccion: calle 8 # 10b-103</h4>
                                                        </div> 
                                                    </div>
                                                </div><label >Datos del cliente:</label> <br> <br>
                                                <div class="row">
                                                    <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                                                        <div class="form-group">
                                                               <label  for="nombre">Nombre:</label>
                                                               <input type="text" id="nombre" class="form-control"  name="nombre" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                                                        <div class="form-group">
                                                               <label  for="direccion">Direccion:</label>
                                                               <input type="text" id="direccion" class="form-control"  name="direccion" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                                                        <div class="form-group">
                                                               <label  for="telefono_c">telefono:</label>
                                                               <input type="text" id="telefono_c" class="form-control"  name="telefono_c" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                                                        <div class="form-group">
                                                               <label  for="numero_factura">Numero de factura:</label>
                                                               <input type="text" id="numero_factura" class="form-control"  name="numero_factura" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                                                        <div class="form-group">
                                                               <label  for="numero_pedido">Numero de pedido:</label>
                                                               <input type="text" id="numero_pedido" class="form-control"  name="numero_pedido" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                                                        <div class="form-group ">
                                                               <label  for="vendedor" >Vendedor:</label>
                                                               <input type="text" id="vendedor" class="form-control"  name="vendedor" required>

                                                        </div>
                                                        

                                                    </div>

                                                </div>
                                                <div class="row">
                                                <table class="table table-striped table-bordered responsive ">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Numero de articulo</th>
                                                    <th class="text-center">Descripcion/comentarios</th>
                                                    <th class="text-center">Precio unitario</th>
                                                    <th class="text-center">cantidad</th>
                                                    <th class="text-center">Importe</th>
                                                
                                                    
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
                                                <th></th>
                                                <th class="text-center"> Sub-total: </th>
                                                <th></th>
                                                <th class="text-center"> Total: </th>
                                                <th></th>
                                                   
                                                </tr>
                                            </tfoot>
                                        </table>

                                                </div> <br> <br>
                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-12 col-md-12">
                                                        <label class="numero_factura" >Razon para el credito: </label>
                                                        <input type="text" id="numero_factura" class="form-control"  name="numero_factura" required>

                                                    </div>

                                                </div> <br>
                                                <div class="row">
                                                    <div class="col-sm-3 col-lg-3 col-md-3">
                                                        <label class="numero_factura_i" >Numero de factura interno: </label>
                                                        <input type="text" id="numero_factura_i" class="form-control"  name="numero_factura_i" required>

                                                    </div>
                                                    <div class="col-sm-3 col-lg-3 col-md-3">
                                                        <label class="apropabor_por" >Aprobado por: </label>
                                                        <input type="text" id="aprobado_por" class="form-control"  name="aprobado_por" required>

                                                    </div>

                                                </div>
                                                
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