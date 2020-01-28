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
                    <h3 class="content-header-title mb-0">Inventario General</h3>
                    <div class="row breadcrumbs-top">

                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-6 col-12">
                    <div class="btn-group">
                    <a class="btn btn-float btn-float-lg btn-success" style="color:#fff;"><i class="la la-birthday-cake"  data-toggle="modal" data-target="#iconForm"></i><span>Crear Producto</span></a>
                    <a class="btn btn-float btn-float-lg btn-pink" style="color:#fff;"><i class="la la-plus"  data-toggle="modal" data-target="#iconEntrada"></i><span>Entrada Inventario</span></a>
                    <a class="btn btn-float btn-float-lg btn-warning" style="color:#fff;"><i class="la la-minus"  data-toggle="modal" data-target="#iconSalida"></i><span>Salida Inventario</span></a>
                    </div>
                </div>
            </div>
            <div class="content-body"> 

                <!-- Events table -->
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
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Descripcion</th>
                                                    <th>Unidad</th>
                                                    <th>Categoria</th>
                                                    <th>Proveedor</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio und</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                        <?php   
                                                            $inventarios="SELECT * FROM productos INNER JOIN unidades_medida ON productos.medida_producto=unidades_medida.id_unidad INNER JOIN proveedores on productos.proveedor=proveedores.NIT INNER JOIN categorias ON productos.categoria=categorias.id_categoria WHERE productos.reg_eli=0 ORDER BY productos.id_producto ASC";
                                                            $resultado=$mysqli->query($inventarios);
                                                        ?>
                                            </thead>
                                            <tbody>
                                                        <?php
                                                                while ($listadoinventarios=$resultado->fetch_assoc()) {
                                                        ?>   
                                                <tr>
                                                    <td><?php echo ($listadoinventarios["id_producto"]);?></td>
                                                    <td><?php echo ($listadoinventarios["nombre_producto"]);?></td>
                                                    <td><?php echo ($listadoinventarios["abrev_unidad"]);?></td>
                                                    <td><?php echo ($listadoinventarios["nombre_categoria"]);?></td>
                                                    <td><?php echo ($listadoinventarios["nombre_proveedor"]);?></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="#" class="btn btn-float btn-float-lg btn-pink"><i class="la la-cloud-download"></i><span>Downloads</span></a></td>
                                                </tr>
                                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Descripcion</th>
                                                    <th>Unidad</th>
                                                    <th>Categoria</th>
                                                    <th>Proveedor</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio und</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Events table -->

            </div>
        </div>
    </div>


       <!-- Modal -->
       <div class="modal fade text-left" id="iconForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h3 class="modal-title" id="myModalLabel34" style="color:#fff;">Crear Producto</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="controllers/crear_elemento.php">
                    <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label for="id_producto">codigo</label>
                                <input type="text" id="id_producto" class="form-control" placeholder="id Item" name="id_producto" >
                            </div> 
                            <div class="form-group">
                                <label for="nombre_producto">Nombre</label>
                                <input type="text" id="nombre_producto" class="form-control" placeholder="Nombre Item" name="nombre_producto" required>
                            </div>  
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">
                            <label for="medida_producto">Unidad de Medida</label>
                            <select id="medida_producto" name="medida_producto" class="jui-select-default form-control" required>
                                <option value="none" selected="" disabled="">Unidad de Medida</option>
                                                            <?php   
                                                                $unindades="SELECT * FROM unidades_medida WHERE reg_eli=0";
                                                                $resultado1=$mysqli->query($unindades);
                                                                while ($listadounidades=$resultado1->fetch_assoc()) {
                                                            ?>                            
                                <option value="<?php echo ($listadounidades["id_unidad"]);?>"><?php echo ($listadounidades["abrev_unidad"]);?></option>
                                                                <?php } ?>
                            </select>                                                                   
                            </div>      
                            <!-- SELECT CONECTADO A LA BD -->                                                       
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-6">                           
                        <div class="media">
                            <a href="javascript: void(0);">
                                <img src="app-assets/images/logo/logo.png" class="rounded mr-75" alt="profile image" height="200" width="200">
                            </a>
                            <div class="media-body mt-75">
                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start"></div>
                            </div>
                        </div>
                        <div>
                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Subir Imagen</label>
                            <input type="file" id="account-upload" hidden>
                            <button class="btn btn-sm btn-secondary ml-50">Borrar</button>
                        </div>    
                    </div>    
                    </div>        

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">   
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">                                            
                                <label for="categoria">Categoria</label>
                                <select id="categoria" name="categoria" class="form-control" required>
                                    <option value="none" selected="" disabled="">Categoria</option>
                                                                <?php   
                                                                    $categorias="SELECT * FROM categorias WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($categorias);
                                                                    while ($listadocategorias=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadocategorias["id_categoria"]);?>"><?php echo ($listadocategorias["nombre_categoria"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                        </div> 
                        <!-- SELECT CONECTADO A LA BD -->                         
                        <div class="col-md-6 col-sm-6 col-lg-6">         
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">                                            
                                <label for="proveedor">Proveedor</label>
                                <select id="proveedor" name="proveedor" class="form-control" required>
                                    <option value="none" selected="" disabled="">Proveedor</option>
                                                                <?php   
                                                                    $proveedores="SELECT * FROM proveedores WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($proveedores);
                                                                    while ($listadoproveedores=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadoproveedores["NIT"]);?>"><?php echo ($listadoproveedores["nombre_proveedor"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                          
                            <!-- SELECT CONECTADO A LA BD -->  
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="elaborado">Fabricado por la Empresa?</label>
                                    <input type="checkbox" class="switch" id="switch1" checked="checked" name="elaborado" />
                                </div>  
                            </div>
                        </div>                      
                    </div></div> 
                    <div class="modal-footer"><?php $usuario=$_SESSION['usuario']; ?>
                        <input type="text" value="crea_producto" style="display:none;" name="origen">
                        <input type="text" value="<?php echo $usuario; ?>" name="usuario" style="display:none;">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div></div> 

    <!-- Modal -->
    <div class="modal fade text-left" id="iconEntrada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h3   class="modal-title" id="myModalLabel34" style="color:#fff;"  >Entrada de Inventario</h3 >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="controllers/crear_elemento.php">
                    <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="form-group">
                            <label for="proveedor">Proveedor</label>
                                <select id="proveedor" name="proveedor" class="form-control" required>
                                    <option value="none" selected="" disabled="">Proveedor</option>
                                                                <?php   
                                                                    $proveedores="SELECT * FROM proveedores WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($proveedores);
                                                                    while ($listadoproveedores=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadoproveedores["NIT"]);?>"><?php echo ($listadoproveedores["nombre_proveedor"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                        </div> 
                        <!-- Lista de Productos con Busqueda en la BD -->
                        <div class="form-group">
                                            <h5>Basic Selectize input</h5>
                                            <p>Add <code>.input-selectize</code> class to input field and add value comma saperated. </p>
                                            <input type="text" class="input-selectize" value="pretty,awesome">
                                        </div>
                                        <div class="form-group">
                                            <h5>Basic Selectize select with Placeholder</h5>
                                            <p>Add <code>.selectize-select</code> class to select for basic Selectize select field</p>
                                            <select class="selectize-select">
                                                <option value="" selected>No city selected</option>
                                                <option value="1">Amsterdam</option>
                                                <option value="2">Antwerp</option>
                                                <option value="3">Athens</option>
                                                <option value="4">Barcelona</option>
                                                <option value="5">Berlin</option>
                                                <option value="6">Birmingham</option>
                                                <option value="7">Bradford</option>
                                                <option value="8">Bremen</option>
                                                <option value="9">Brussels</option>
                                                <option value="10">Bucharest</option>
                                                <option value="11">Budapest</option>
                                                <option value="12">Cologne</option>
                                                <option value="13">Copenhagen</option>
                                                <option value="14">Dortmund</option>
                                                <option value="15">Dresden</option>
                                                <option value="16">Dublin</option>
                                                <option value="17">Düsseldorf</option>
                                                <option value="18">Essen</option>
                                                <option value="19">Frankfurt</option>
                                                <option value="20">Genoa</option>
                                                <option value="21">Glasgow</option>
                                                <option value="22">Gothenburg</option>
                                                <option value="23">Hamburg</option>
                                                <option value="24">Hannover</option>
                                                <option value="25">Helsinki</option>
                                                <option value="26">Leeds</option>
                                                <option value="27">Leipzig</option>
                                                <option value="28">Lisbon</option>
                                                <option value="29">Łódź</option>
                                                <option value="30">London</option>
                                                <option value="31">Kraków</option>
                                                <option value="32">Madrid</option>
                                                <option value="33">Málaga</option>
                                                <option value="34">Manchester</option>
                                                <option value="35">Marseille</option>
                                                <option value="36">Milan</option>
                                                <option value="37">Munich</option>
                                                <option value="38">Naples</option>
                                                <option value="39">Palermo</option>
                                                <option value="40">Paris</option>
                                                <option value="41">Poznań</option>
                                                <option value="42">Prague</option>
                                                <option value="43">Riga</option>
                                                <option value="44">Rome</option>
                                                <option value="45">Rotterdam</option>
                                                <option value="46">Seville</option>
                                                <option value="47">Sheffield</option>
                                                <option value="48">Sofia</option>
                                                <option value="49">Stockholm</option>
                                                <option value="50">Stuttgart</option>
                                                <option value="51">The Hague</option>
                                                <option value="52">Turin</option>
                                                <option value="53">Valencia</option>
                                                <option value="54">Vienna</option>
                                                <option value="55">Vilnius</option>
                                                <option value="56">Warsaw</option>
                                                <option value="57">Wrocław</option>
                                                <option value="58">Zagreb</option>
                                                <option value="59">Zaragoza</option>
                                            </select>
                                        </div>
                        <!-- Lista de Productos con Busqueda en la BD -->
                            <div class="form-group">
                                <label for="nombre_producto">Factura</label>
                                <input type="text" id="nombre_producto" class="form-control" placeholder="numero de factura" name="nombre_producto" required>
                            </div>  
                        
                            
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">
                            <label for="producto">Producto</label>
                            <select id="producto" name="producto" class="jui-select-default form-control" required>
                                <option value="none" selected="" disabled="">producto</option>
                                                            <?php   
                                                                $unindades="SELECT * FROM unidades_medida WHERE reg_eli=0";
                                                                $resultado1=$mysqli->query($unindades);
                                                                while ($listadounidades=$resultado1->fetch_assoc()) {
                                                            ?>                            
                                <option value="<?php echo ($listadounidades["id_unidad"]);?>"><?php echo ($listadounidades["abrev_unidad"]);?></option>
                                                                <?php } ?>
                            </select> 
                                                                                              
                            </div>      
                            <!-- SELECT CONECTADO A LA BD -->                                                       
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-6">                           
                        <div class="media">
                            <a href="javascript: void(0);">
                                <img src="app-assets/images/logo/logo.png" class="rounded mr-75" alt="profile image" height="200" width="200">
                            </a>
                            <div class="media-body mt-75">
                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start"></div>
                            </div>
                        </div>
                        <div>
                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Subir Imagen</label>
                            <input type="file" id="account-upload" hidden>
                            <button class="btn btn-sm btn-secondary ml-50">Borrar</button>
                        </div>    
                    </div>    
                    </div>        

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">   
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">                                            
                                <label for="Unidad_medida">unidad de medida</label>
                                <select id="Unidad_medida" name="categoria" class="form-control" required>
                                    <option value="none" selected="" disabled="">Unidad de medida</option>
                                                                <?php   
                                                                    $categorias="SELECT * FROM categorias WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($categorias);
                                                                    while ($listadocategorias=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadocategorias["id_categoria"]);?>"><?php echo ($listadocategorias["nombre_categoria"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                                     <div class="form-group">
                                           <label  for="nombre_producto">Cantidad</label>
                                           <input type="text" id="nombre_producto" class="form-control"  name="nombre_producto" required>
                                      </div>
                                          <div class="col-md-4 col-md-offset-4" > 
                                                 <div class="form-group">
                                                          <label for="nombre_producto">Precio</label>
                                                         <input type="text" id="nombre_producto" class="form-control"  name="nombre_producto" required>
                                                 </div>
                                             </div>
                        </div>          
                        <!-- SELECT CONECTADO A LA BD -->                         
                           
                          
                         <!-- SELECT CONECTADO A LA BD -->  
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="nombre_producto">Responsable</label>
                                           <select id="Unidad_medida" name="categoria" class="form-control" required>
                                                  <option value="none" selected="" disabled="">Responsable</option>
                                                                <?php   
                                                                    $categorias="SELECT * FROM categorias WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($categorias);
                                                                    while ($listadocategorias=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                                      <option value="<?php echo ($listadocategorias["id_categoria"]);?>"><?php echo ($listadocategorias["nombre_categoria"]);?></option>
                                                                    <?php } ?>
                                             </select>
                                </div> 
                               
                                 
                                 
                                   
                            </div>
                        </div>                      
                    </div></div> 
                    <div class="modal-footer" ><?php $usuario=$_SESSION['usuario']; ?>
                        <input type="text" value="crea_producto" style="display:none;" name="origen">
                        <input type="text" value="<?php echo $usuario; ?>" name="usuario" style="display:none;">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div></div> 


       <!-- Modal -->
    <div class="modal fade text-left" id="iconSalida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h3 class="modal-title" id="myModalLabel34" style="color:#fff;">Baja de Inventario</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="controllers/crear_elemento.php">
                    <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label for="id_producto">codigo</label>
                                <input type="text" id="id_producto" class="form-control" placeholder="id Item" name="id_producto" >
                            </div> 
                            <div class="form-group">
                                <label for="nombre_producto">Nombre</label>
                                <input type="text" id="nombre_producto" class="form-control" placeholder="Nombre Item" name="nombre_producto" required>
                            </div>  
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">
                            <label for="medida_producto">Unidad de Medida</label>
                            <select id="medida_producto" name="medida_producto" class="jui-select-default form-control" required>
                                <option value="none" selected="" disabled="">Unidad de Medida</option>
                                                            <?php   
                                                                $unindades="SELECT * FROM unidades_medida WHERE reg_eli=0";
                                                                $resultado1=$mysqli->query($unindades);
                                                                while ($listadounidades=$resultado1->fetch_assoc()) {
                                                            ?>                            
                                <option value="<?php echo ($listadounidades["id_unidad"]);?>"><?php echo ($listadounidades["abrev_unidad"]);?></option>
                                                                <?php } ?>
                            </select>                                                                   
                            </div>      
                            <!-- SELECT CONECTADO A LA BD -->                                                       
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-6">                           
                        <div class="media">
                            <a href="javascript: void(0);">
                                <img src="app-assets/images/logo/logo.png" class="rounded mr-75" alt="profile image" height="200" width="200">
                            </a>
                            <div class="media-body mt-75">
                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start"></div>
                            </div>
                        </div>
                        <div>
                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Subir Imagen</label>
                            <input type="file" id="account-upload" hidden>
                            <button class="btn btn-sm btn-secondary ml-50">Borrar</button>
                        </div>    
                    </div>    
                    </div>        

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">   
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">                                            
                                <label for="categoria">Categoria</label>
                                <select id="categoria" name="categoria" class="form-control" required>
                                    <option value="none" selected="" disabled="">Categoria</option>
                                                                <?php   
                                                                    $categorias="SELECT * FROM categorias WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($categorias);
                                                                    while ($listadocategorias=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadocategorias["id_categoria"]);?>"><?php echo ($listadocategorias["nombre_categoria"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                        </div> 
                        <!-- SELECT CONECTADO A LA BD -->                         
                        <div class="col-md-6 col-sm-6 col-lg-6">         
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">                                            
                                <label for="proveedor">Proveedor</label>
                                <select id="proveedor" name="proveedor" class="form-control" required>
                                    <option value="none" selected="" disabled="">Proveedor</option>
                                                                <?php   
                                                                    $proveedores="SELECT * FROM proveedores WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($proveedores);
                                                                    while ($listadoproveedores=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadoproveedores["NIT"]);?>"><?php echo ($listadoproveedores["nombre_proveedor"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                          
                            <!-- SELECT CONECTADO A LA BD -->  
                                           
                    </div></div> 
                    <div class="modal-footer"><?php $usuario=$_SESSION['usuario']; ?>
                        <input type="text" value="crea_producto" style="display:none;" name="origen">
                        <input type="text" value="<?php echo $usuario; ?>" name="usuario" style="display:none;">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div></div>    

       <!-- Modal -->
       <div class="modal fade text-left" id="iconForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h3 class="modal-title" id="myModalLabel34" style="color:#fff;">Crear Producto</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="controllers/crear_elemento.php">
                    <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label for="id_producto">codigo</label>
                                <input type="text" id="id_producto" class="form-control" placeholder="id Item" name="id_producto" >
                            </div> 
                            <div class="form-group">
                                <label for="nombre_producto">Nombre</label>
                                <input type="text" id="nombre_producto" class="form-control" placeholder="Nombre Item" name="nombre_producto" required>
                            </div>  
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">
                            <label for="medida_producto">Unidad de Medida</label>
                            <select id="medida_producto" name="medida_producto" class="jui-select-default form-control" required>
                                <option value="none" selected="" disabled="">Unidad de Medida</option>
                                                            <?php   
                                                                $unindades="SELECT * FROM unidades_medida WHERE reg_eli=0";
                                                                $resultado1=$mysqli->query($unindades);
                                                                while ($listadounidades=$resultado1->fetch_assoc()) {
                                                            ?>                            
                                <option value="<?php echo ($listadounidades["id_unidad"]);?>"><?php echo ($listadounidades["abrev_unidad"]);?></option>
                                                                <?php } ?>
                            </select>                                                                   
                            </div>      
                            <!-- SELECT CONECTADO A LA BD -->                                                       
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-6">                           
                        <div class="media">
                            <a href="javascript: void(0);">
                                <img src="app-assets/images/logo/logo.png" class="rounded mr-75" alt="profile image" height="200" width="200">
                            </a>
                            <div class="media-body mt-75">
                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start"></div>
                            </div>
                        </div>
                        <div>
                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Subir Imagen</label>
                            <input type="file" id="account-upload" hidden>
                            <button class="btn btn-sm btn-secondary ml-50">Borrar</button>
                        </div>    
                    </div>    
                    </div>        

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">   
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">                                            
                                <label for="categoria">Categoria</label>
                                <select id="categoria" name="categoria" class="form-control" required>
                                    <option value="none" selected="" disabled="">Categoria</option>
                                                                <?php   
                                                                    $categorias="SELECT * FROM categorias WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($categorias);
                                                                    while ($listadocategorias=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadocategorias["id_categoria"]);?>"><?php echo ($listadocategorias["nombre_categoria"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                        </div> 
                        <!-- SELECT CONECTADO A LA BD -->                         
                        <div class="col-md-6 col-sm-6 col-lg-6">         
                            <!-- SELECT CONECTADO A LA BD -->
                            <div class="form-group">                                            
                                <label for="proveedor">Proveedor</label>
                                <select id="proveedor" name="proveedor" class="form-control" required>
                                    <option value="none" selected="" disabled="">Proveedor</option>
                                                                <?php   
                                                                    $proveedores="SELECT * FROM proveedores WHERE reg_eli=0";
                                                                    $resultado2=$mysqli->query($proveedores);
                                                                    while ($listadoproveedores=$resultado2->fetch_assoc()) {
                                                                ?>                            
                                    <option value="<?php echo ($listadoproveedores["NIT"]);?>"><?php echo ($listadoproveedores["nombre_proveedor"]);?></option>
                                                                    <?php } ?>
                                </select>
                            </div> 
                          
                            <!-- SELECT CONECTADO A LA BD -->  
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="elaborado">Fabricado por la Empresa?</label>
                                    <input type="checkbox" class="switch" id="switch1" checked="checked" name="elaborado" />
                                </div>  
                            </div>
                        </div>                      
                    </div></div> 
                    <div class="modal-footer"><?php $usuario=$_SESSION['usuario']; ?>
                        <input type="text" value="crea_producto" style="display:none;" name="origen">
                        <input type="text" value="<?php echo $usuario; ?>" name="usuario" style="display:none;">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div></div> 
    <!-- END: Content-->
    <?php include('footer.php'); ?>