<?php require('includes/conexion.php');
	
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		header("Location: aplicacion.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$error = '';
		
		$sha1_pass = sha1($password);
		
		$sql = "SELECT id, id_tipo, usuario, nombre, imguser FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['tipo_usuario'] = $row['id_tipo'];
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['imguser'] = $row['imguser'];			

			header("location: aplicacion.php");
			} else {
			$error = "Usuario o Password incorrecr";
		}
	}
?>




<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php include('head.php'); ?>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-compact-menu 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-compact-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="app-assets/images/logo/logo.png" alt="Pasteleria Nissi" style="width:80%;">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Inicie Sesión</span></p>
                                    <div class="card-body">
                                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="signin-form">
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="email" class="form-control" id="usuario" name="usuario" placeholder="email" required>
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Recuerdame</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Olvido Su Contraseña?</a></div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Iniciar Sesión</button>
                                        </form>
                                    </div>
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Necesitas acceder?</span></p>
                                    <div class="card-body">
                                        <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="la la-user"></i>
                                            Registrate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->




</body>
<!-- END: Body-->

</html>