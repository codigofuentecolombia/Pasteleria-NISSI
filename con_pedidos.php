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
                                                            <label for="emailAddress1">Email Address :</label>
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
                                                            <label for="phoneNumber1">Phone Number :</label>
                                                            <input type="tel" class="form-control" id="phoneNumber1">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="date1">Date of Birth :</label>
                                                            <input type="date" class="form-control" id="date1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6>Step 2</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle1">Proposal Title :</label>
                                                            <input type="text" class="form-control" id="proposalTitle1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="emailAddress2">Email Address :</label>
                                                            <input type="email" class="form-control" id="emailAddress2">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="videoUrl1">Video URL :</label>
                                                            <input type="url" class="form-control" id="videoUrl1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="jobTitle1">Job Title :</label>
                                                            <input type="text" class="form-control" id="jobTitle1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shortDescription1">Short Description :</label>
                                                            <textarea name="shortDescription" id="shortDescription1" rows="4" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Step 3</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventName1">Event Name :</label>
                                                            <input type="text" class="form-control" id="eventName1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventType1">Event Type :</label>
                                                            <select class="custom-select form-control" id="eventType1" data-placeholder="Type to search cities" name="eventType1">
                                                                <option value="Banquet">Banquet</option>
                                                                <option value="Fund Raiser">Fund Raiser</option>
                                                                <option value="Dinner Party">Dinner Party</option>
                                                                <option value="Wedding">Wedding</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventLocation1">Event Location :</label>
                                                            <select class="custom-select form-control" id="eventLocation1" name="location">
                                                                <option value="">Select City</option>
                                                                <option value="Amsterdam">Amsterdam</option>
                                                                <option value="Berlin">Berlin</option>
                                                                <option value="Frankfurt">Frankfurt</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="jobTitle2">Event Date - Time :</label>
                                                            <div class='input-group'>
                                                                <input type='text' class="form-control datetime" id="jobTitle2" />
                                                                <span class="input-group-addon">
                                                                    <span class="ft-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventStatus1">Event Status :</label>
                                                            <select class="custom-select form-control" id="eventStatus1" name="eventStatus">
                                                                <option value="Planning">Planning</option>
                                                                <option value="In Progress">In Progress</option>
                                                                <option value="Finished">Finished</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Requirements :</label>
                                                            <div class="c-inputs-stacked">
                                                                <div class="d-inline-block custom-control custom-checkbox">
                                                                    <input type="checkbox" name="status1" class="custom-control-input" id="staffing1">
                                                                    <label class="custom-control-label" for="staffing1">Staffing</label>
                                                                </div>
                                                                <div class="d-inline-block custom-control custom-checkbox">
                                                                    <input type="checkbox" name="status1" class="custom-control-input" id="catering1">
                                                                    <label class="custom-control-label" for="catering1">Catering</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 4 -->
                                            <h6>Step 4</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="meetingName1">Name of Meeting :</label>
                                                            <input type="text" class="form-control" id="meetingName1">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="meetingLocation1">Location :</label>
                                                            <input type="text" class="form-control" id="meetingLocation1">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="participants1">Names of Participants</label>
                                                            <textarea name="participants" id="participants1" rows="4" class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="decisions1">Decisions Reached</label>
                                                            <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agenda Items :</label>
                                                            <div class="c-inputs-stacked">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="agenda1" class="custom-control-input" id="item11">
                                                                    <label class="custom-control-label" for="item11">1st item</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="agenda1" class="custom-control-input" id="item12">
                                                                    <label class="custom-control-label" for="item12">2nd item</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="agenda1" class="custom-control-input" id="item13">
                                                                    <label class="custom-control-label" for="item13">3rd item</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="agenda1" class="custom-control-input" id="item14">
                                                                    <label class="custom-control-label" for="item14">4th item</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="agenda1" class="custom-control-input" id="item15">
                                                                    <label class="custom-control-label" for="item15">5th item</label>
                                                                </div>
                                                            </div>
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