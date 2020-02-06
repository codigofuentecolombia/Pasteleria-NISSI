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
                <div class="content-header-right text-md-right col-md-12 col-12">
                    <h1 class="content-header-title mb-12 text-center">Informacion de empleados</h1>
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
                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                        <div class="form-group">
                                                            <label for="nombre" > Nombre:</label>
                                                            <input type="text" name="nombre">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2 col-lg-2 col-md-2">
                                                        <label for="id_empleado"> id empleado</label>
                                                        <input type="text" name="id_empleado">
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-sm-2">

                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-lg-4">                           
                                                    <div class="media">
                                                        <a href="javascript: void(0);">
                                                            <img src="app-assets/images/logo/logo.png" class="rounded mr-75" alt="profile image" height="200" width="auto">
                                                        </a>
                                                        <div class="media-body mt-75">
                                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-10 col-sm-10">
                                                   <div class="table-responsive">
                                                   <table class="table table-striped table-bordered responsive table-hover ">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">fecha de ingreso</th>
                                                    <th class="text-center">N. de empleado</th>
                                                    <th class="text-center">nombre </th>
                                                    <th class="text-center">apellido</th>
                                                    <th class="text-center">Fecha de nacimiento</th>
                                                    <th class="text-center">lugar de nacimiento</th>
                                                    <th class="text-center">cedula </th>
                                                    <th class="text-center">sexo </th>
                                                    <th class="text-center">estado civil </th>
                                                    <th class="text-center">correo electronico</th>
                                                    <th class="text-center">telefono </th>
                                                
                                                    
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
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                     
                                                      
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                <th></th>
                                                <th ></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                                   
                                                </tr>
                                            </tfoot>
                                        </table> 

                                                   </div>

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