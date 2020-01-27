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
                    <h3 class="content-header-title mb-0">Configuración</h3>
                    <div class="row breadcrumbs-top">
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-6 col-12">
                    <div class="btn-group">
                    <a class="btn btn-float btn-float-lg btn-success" style="color:#fff;"><i class="la la-industry"  data-toggle="modal" data-target="#iconProveedor"></i><span>Crear Proveedor</span></a>
                    <a class="btn btn-float btn-float-lg btn-pink" style="color:#fff;"><i class="la la-server"  data-toggle="modal" data-target="#iconCategoria"></i><span>Crear Categoria</span></a>
                    <a class="btn btn-float btn-float-lg btn-blue" style="color:#fff;"><i class="la la-tachometer"  data-toggle="modal" data-target="#iconUnidad"></i><span>Crear Unidad M</span></a>
                </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Description --> 
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <section id="description" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Proveedores</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body card-dashboard dataTables_wrapper">
                                        <!-- Evento 
                                        <div class="dt-events-log">
                                            Event summary - new events added at the top
                                        </div> -->
                                        <table class="table table-striped table-bordered responsive dataex-select-events">
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>NIT</th>
                                                    <th>Nombre Proveedor</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                        <?php   
                                                            $proveedores="SELECT * FROM proveedores WHERE reg_eli=0 ORDER BY id_proveedor ASC";
                                                            $resultado=$mysqli->query($proveedores);
                                                        ?>
                                            </thead>
                                            <tbody>
                                                        <?php
                                                                while ($listadoproveedores=$resultado->fetch_assoc()) {
                                                        ?>    
                                                <tr>
                                                    <td><?php echo ($listadoproveedores["id_proveedor"]);?></td>
                                                    <td><?php echo ($listadoproveedores["NIT"]);?></td>
                                                    <td><?php echo ($listadoproveedores["nombre_proveedor"]);?></td>
                                                    <td><a href="#" class="btn btn-blue"><i class="la la-edit"></i>&nbsp; Editar</a>&nbsp;&nbsp;<a href="#" class="btn btn-pink"><i class="la la-trash"></i>&nbsp; Borrar</a></td>
                                                </tr>
                                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                    <section id="description" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Categorias</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body card-dashboard dataTables_wrapper">
                                        <!-- Evento 
                                        <div class="dt-events-log">
                                            Event summary - new events added at the top
                                        </div> -->
                                        <table class="table table-striped table-bordered responsive dataex-select-events">
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Nombre Categoria</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                        <?php   
                                                            $categorias="SELECT * FROM categorias WHERE reg_eli=0 ORDER BY id_categoria ASC";
                                                            $resultado=$mysqli->query($categorias);
                                                        ?>
                                            </thead>
                                            <tbody>
                                                        <?php
                                                                while ($listadocategorias=$resultado->fetch_assoc()) {
                                                        ?>    
                                                <tr>
                                                    <td><?php echo ($listadocategorias["id_categoria"]);?></td>
                                                    <td><?php echo ($listadocategorias["nombre_categoria"]);?></td>
                                                    <td><a href="#" class="btn btn-blue"><i class="la la-edit"></i>&nbsp; Editar</a>&nbsp;&nbsp;<a href="#" class="btn btn-pink"><i class="la la-trash"></i>&nbsp; Borrar</a></td>
                                                </tr>
                                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </section>
                    </div>                    
                </div>          
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                    <section id="description" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Unidades de Medida</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body card-dashboard dataTables_wrapper">
                                        <!-- Evento 
                                        <div class="dt-events-log">
                                            Event summary - new events added at the top
                                        </div> -->
                                        <table class="table table-striped table-bordered responsive dataex-select-events">
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Abreviatura</th>                                                    
                                                    <th>Acciones</th>
                                                </tr>
                                                        <?php   
                                                            $unidades="SELECT * FROM unidades_medida WHERE reg_eli=0 ORDER BY id_unidad ASC";
                                                            $resultado=$mysqli->query($unidades);
                                                        ?>
                                            </thead>
                                            <tbody>
                                                        <?php
                                                                while ($listadounidades=$resultado->fetch_assoc()) {
                                                        ?>    
                                                <tr>
                                                    <td><?php echo ($listadounidades["id_unidad"]);?></td>
                                                    <td><?php echo ($listadounidades["abrev_unidad"]);?></td>
                                                    <td><?php echo ($listadounidades["nombre_unidad"]);?></td>                                                    
                                                    <td><a href="#" class="btn btn-blue"><i class="la la-edit"></i>&nbsp; Editar</a>&nbsp;&nbsp;<a href="#" class="btn btn-pink"><i class="la la-trash"></i>&nbsp; Borrar</a></td>
                                                </tr>
                                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </section>
                    </div>
                                       
                </div>  <?php $usuario=$_SESSION['usuario']; ?>        
                <!--/ Description -->
                <!-- CSS Classes --> 

    <!-- Modal Proveedor-->
    <div class="modal fade text-left" id="iconProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h3 class="modal-title" id="myModalLabel34" style="color:#fff;">Crear Proveedor</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="controllers/crear_elemento.php">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="NIT">NIT</label>
                                    <input type="text" id="NIT" class="form-control" placeholder="ingrese con - y digito de verificacion" name="NIT" required>
                                    <div id="suggestions"></div> 
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">     
                                <div class="form-group">
                                    <label for="nombre_proveedor">Nombre o Razon Social</label>
                                    <input type="text" id="nombre_proveedor" class="form-control" placeholder="Digite aqui el nombre o razon social" name="nombre_proveedor" required>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="direccion_proveedor">Direccion</label>
                                    <input type="text" id="direccion_proveedor" class="form-control" placeholder="Digite la direccion" name="direccion_proveedor" required>
                                </div> 
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="telefono_proveedor">Teléfono Contacto</label>
                                    <input type="text" id="telefono_proveedor" class="form-control" placeholder="ingrese preferiblemente un numero celular" name="telefono_proveedor" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">     
                                <div class="form-group">
                                    <label for="email_proveedor">Correo Electrónico</label>
                                    <input type="email" id="email_proveedor" class="form-control" placeholder="escriba el email" name="email_proveedor" required>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="contacto_proveedor">Persona de contacto</label>
                                    <input type="text" id="contacto_proveedor" class="form-control" placeholder="Escriba el nombre del comercial o persona de contacto" name="contacto_proveedor" required>
                                </div> 
                            </div>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <input type="text" value="crea_proveedor" style="display:none;" name="origen">
                        <input type="text" value="<?php echo $usuario; ?>" name="usuario" style="display:none;" >
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Cancelar" onClick="location.reload();" >
                        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
                    </div>
                </form>
            </div>   
            </div>
        </div>
    </div>                                      
        <!--/ Modal Proveedor-->

    <!-- Modal Categorias-->
    <div class="modal fade text-left" id="iconCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h3 class="modal-title" id="myModalLabel34" style="color:#fff;">Crear Categorias</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="controllers/crear_elemento.php">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="form-group">
                                    <label for="nombre_categoria">Nombre Nueva Categoria</label>
                                    <input type="text" id="nombre_categoria" class="form-control" placeholder="escriba lo mas detallado posible" name="nombre_categoria" required>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <input type="text" value="crea_categoria" style="display:none;" name="origen">
                        <input type="text" value="<?php echo $usuario; ?>" name="usuario" style="display:none;" >
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Cancelar" onClick="location.reload();" >
                        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
                    </div>
                </form>
            </div> 
            </div>
        </div>
    </div>                                        
        <!--/ Modal Categorias-->

    <!-- Modal Unidades de Medida-->
    <div class="modal fade text-left" id="iconUnidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel36" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h3 class="modal-title" id="myModalLabel34" style="color:#fff;">Crear Unidades de Medida</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="controllers/crear_elemento.php">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="form-group">
                                    <label for="abrev_unidad">Nombre Unidad de Medida</label>
                                    <input type="text" id="abrev_unidad" class="form-control" placeholder="escriba el nombre de la unidad de medida" name="abrev_unidad" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12"> 
                                <div class="form-group">
                                    <label for="nombre_unidad">Abreviatura Unidad de Medida</label>
                                    <input type="text" id="nombre_unidad" class="form-control" placeholder="escriba la abreviatura de la unidad de medida" name="nombre_unidad" required>
                                </div>
                            </div>
                        </div>                        
                    </div> 
                    <div class="modal-footer">
                        <input type="text" value="crea_unidad" style="display:none;" name="origen">
                        <input type="text" value="<?php echo $usuario; ?>" name="usuario" style="display:none;" >
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Cancelar" onClick="location.reload();" >
                        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
                    </div>
                </form>
            </div> 
            </div>
        </div>
    </div>                                        
        <!--/ Modal Unidades de Medida-->

    <!-- END: Content-->


    <?php include('footer.php'); ?>