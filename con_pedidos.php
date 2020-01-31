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
            <!--<div class="content-header-right text-md-right col-md-6 col-12">
                    <div class="btn-group">
                    <a class="btn btn-float btn-float-lg btn-pink" style="color:#fff;"><i class="la la-birthday-cake"  data-toggle="modal" data-target="#iconForm"></i><span>Crear</span></a>
                    </div>
                </div> -->
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
                                            <h6>Datos del Evento</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="meetingName1">nombre del evento:</label>
                                                            <input type="text" class="form-control" id="meetingName1">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meetingLocation1">Localización:</label>
                                                            <input type="text" class="form-control" id="meetingLocation1">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="participants1">nombres de los participantes</label>
                                                            <textarea name="participants" id="participants1" rows="4" class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="decisions1">decisiones alcanzadas </label>
                                                            <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                        </div>
                                                      
                                                    </div>
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