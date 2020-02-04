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
                    <h1 class="content-header-title mb-12 text-center">Registro de empleados nuevos</h1>
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
                                                <div class="col-sm-2 col-md-2 col-lg-2">
                                                    <div class="form-group">
                                                        <label for="nombre_empleado" >Nombres:</label><br>
                                                        <input type="text" name="nombre_empleado">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lugar_nacimiento" >Lugar de nacimiento:</label><br>
                                                        <input type="text" name="lugar_nacimiento">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="sexo_empleado" >Sexo:</label><br>
                                                        <select name="sexo_empleado" style='width:160px; height:30px' >
                                                            <option >femenino</option>
                                                            <option >masculino</option>
                                                        </select>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-md-2 col-lg-2">
                                                    <div class="form-group">
                                                        <label for="apellido_empleado" >Apellidos:</label><br>
                                                        <input type="text" name="apellido_empleado">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fecha_nacimiento" >Fecha de nacimiento:</label><br>
                                                        <input type="date" name="fecha_nacimiento"> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="estado_civil" >Estado civil:</label><br>
                                                        <select name="estado_civil" style='width:160px; height:30px' >
                                                            <option >soltero(a)</option>
                                                            <option >casado(a)</option>
                                                            <option >union libre</option>
                                                            <option >viudo(a)</option>
                                                        </select>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-md-2 col-lg-2">
                                                    <div class="form-group">
                                                        <label for="telefono_empleado" >Telefono:</label><br>
                                                        <input type="text" name="telefono_empleado">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cedula_empleado" >Numero de cedula:</label><br>
                                                        <input type="text" name="cedula_empleado">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="correo_electronico" >Correo electronico:</label><br>
                                                        <input type="text" name="correo_electronico">
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 col-md-1 col-lg-1">
                                                    <div class="form-group">
                                                        
                                                    </div>
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
                                                <div class="col-md-2 col-sm-2 col-lg-2">
                                                    <div class="form-group">
                                                        <label for="direccion_empleado" >Direccion de vivienda:</label><br>
                                                        <input type="text" name="direccion_empleado">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-lg-2">
                                                    <div class="form-group">
                                                        <label for="numero_id" >Numero de id:</label><br>
                                                        <input type="text" name="numero_id">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-lg-2">
                                                    <div class="form-group">
                                                        <label for="fecha_ingreso" >Fecha de ingreso</label><br>
                                                        <input type="date" name="fecha_ingreso">
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