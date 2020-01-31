<?php include('includes/conexion.php'); ?>
<?php include('includes/sesion.php'); 

?>

<!DOCTYPE html>
    <html class="loading" lang="en" data-textdirection="ltr"> 
        <?php include('head.php'); ?>
            <body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
            <?php include('header.php'); ?>
            <?php include('menu.php'); ?> 

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Hagamos un Pedido</h3>
                    <div class="row breadcrumbs-top">

                    </div>
                </div>
           
            </div>
            <div class="content-body"> 
            <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Datos del Cliente</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>

                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="#" class="number-tab-steps wizard-circle">

                                            <!-- Step 1 -->
                                            <h6>Cliente</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Nombres :</label>
                                                            <input type="text" class="form-control" id="firstName1">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Apellidos :</label>
                                                            <input type="text" class="form-control" id="lastName1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress1">Correo electronico :</label>
                                                            <input type="email" class="form-control" id="emailAddress1">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cedula">Cedula :</label>
                                                            <input type="number" class="form-control" id="cedula">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber1">Numero :</label>
                                                            <input type="tel" class="form-control" id="phoneNumber1">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="date1">Fecha de nacimiento:</label>
                                                            <input type="date" class="form-control" id="date1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                           
                                            

                                            <!-- Step 2 -->
                                            <h6>Evento</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventName1">datos del Evento :</label>
                                                            <input type="text" class="form-control" id="eventName1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventType1">Tipo del Evento</label>:</label>
                                                            <select class="custom-select form-control" id="eventType1" data-placeholder="Type to search cities" name="eventType1">
                                                                <option value="Banquet">Banquete</option>
                                                                <option value="Fund Raiser">Recaudacion de fondos</option>
                                                                <option value="Wedding">boda</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventLocation1">Direccion del evento :</label>
                                                            <input type="text" class="form-control" id="eventName1"> 
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="jobTitle2">Fecha y hora del evento:</label>
                                                            <div class='input-group'>
                                                                <input type='text' class="form-control datetime" id="jobTitle2" />
                                                                <span class="input-group-addon">
                                                                    <span class="ft-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventStatus1">estado del evento:</label>
                                                            <select class="custom-select form-control" id="eventStatus1" name="eventStatus">
                                                                <option value="Planning">Planeacion</option>
                                                                <option value="In Progress">En progreso</option>
                                                                <option value="Finished">Finalisado</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Requisitos :</label>
                                                            <div class="c-inputs-stacked">
                                                                <div class="d-inline-block custom-control custom-checkbox">
                                                                    <input type="checkbox" name="status1" class="custom-control-input" id="staffing1">
                                                                    <label class="custom-control-label" for="staffing1">Dotación de personal</label>
                                                                </div>
                                                                <div class="d-inline-block custom-control custom-checkbox">
                                                                    <input type="checkbox" name="status1" class="custom-control-input" id="catering1">
                                                                    <label class="custom-control-label" for="catering1">Abastecimiento</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Datos del pedido</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                                        <div class="form-group">
                                                               <label  for="cantidad">Cantidad</label>
                                                               <input type="text" id="cantidad" class="form-control"  name="nombre_producto" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                                        <div class="form-group">
                                                               <label  for="nombre_producto">Producto</label>
                                                               <input type="text" id="nombre_producto" class="form-control"  name="nombre_producto" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                                        <div class="form-group">
                                                               <label  for="precio_venta">Precio de venta</label>
                                                               <input type="text" id="precio_venta" class="form-control"  name="nombre_producto" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                                        <div class="form-group">
                                                               <label  for="%_descuento">% de _descuento</label>
                                                               <input type="text" id="%_descuento" class="form-control"  name="nombre_producto" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                                        <div class="form-group">
                                                               <label  for="sub_total">sub total</label>
                                                               <input type="text" id="sub_total" class="form-control"  name="nombre_producto" required>

                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                                        <div class="form-group">
                                                               <label  for="total" >Total</label>
                                                               <input type="text" id="total" class="form-control"  name="nombre_producto" required>

                                                        </div>
                                                        

                                                    </div>

                                                </div>
                                                <div class="row">
                                                <table class="table table-striped table-bordered responsive ">
                                            <thead>
                                                <tr>
                                                    <th>cantidad</th>
                                                    <th>productos</th>
                                                    <th>precio de venta</th>
                                                    <th>% de descuento</th>
                                                    <th>sub total</th>
                                                    <th>total</th>
                                                    
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
                                                      
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    
                                                   
                                                </tr>
                                            </tfoot>
                                        </table>

                                                </div>
                                                
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->












            </div>
        </div>
    </div>                                        


    <!-- END: Content-->



<!-- Form wizard with number tabs section start -->
    <!-- Modal -->

    



    <?php include('footer.php'); ?>