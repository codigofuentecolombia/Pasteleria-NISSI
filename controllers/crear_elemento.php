<?php
    include('../includes/conexion.php');
    //include('../includes/sesion.php');

    $origen=$_REQUEST['origen'];
    $usuario=$_REQUEST['usuario'];

    if ($origen=='crea_producto'):
        $id_producto=$_REQUEST['id_producto'];
        $nombre_producto=$_REQUEST['nombre_producto'];
        $medida_producto=$_REQUEST['medida_producto'];
        $categoria=$_REQUEST['categoria'];
        $proveedor=$_REQUEST['proveedor'];
        $elaborado=$_REQUEST['elaborado'];

        if(empty($_id_producto))
	    {
        $id_producto=rand(5, 65536);
        $sql="INSERT INTO productos (id_producto, nombre_producto, medida_producto, categoria, proveedor, elaborado) VALUES('$id_producto', '$nombre_producto', '$medida_producto', '$categoria', '$proveedor', '$elaborado')";
        $resultado2=$mysqli->query($sql);
        $auditoria="INSERT INTO auditoria (usuario_auditoria, accion_auditoria, referencia) VALUES('$usuario', 'Ingresa Producto', '$id_producto')";
        $resultado3=$mysqli->query($auditoria);
        header("Location:../con_inventarios.php");
        } else {    
        $sql="INSERT INTO productos (id_producto, nombre_producto, medida_producto, categoria, proveedor, elaborado) VALUES('$id_producto', '$nombre_producto', '$medida_producto', '$categoria', '$proveedor', '$elaborado')";
        $resultado2=$mysqli->query($sql);
        $auditoria="INSERT INTO auditoria (usuario_auditoria, accion_auditoria, referencia) VALUES('$usuario', 'Ingresa Producto', '$id_producto')";
        $resultado3=$mysqli->query($auditoria);
        header("Location:../con_inventarios.php");
        }
    else:
        if ($origen=='crea_proveedor'):
            $NIT=$_REQUEST['NIT'];
            $nombre_proveedor=$_REQUEST['nombre_proveedor'];
            $direccion_proveedor=$_REQUEST['direccion_proveedor'];
            $telefono_proveedor=$_REQUEST['telefono_proveedor'];
            $email_proveedor=$_REQUEST['email_proveedor'];
            $contacto_proveedor=$_REQUEST['contacto_proveedor'];
            $sql="INSERT INTO proveedores (NIT, nombre_proveedor, direccion_proveedor, telefono_proveedor, email_proveedor, contacto_proveedor) VALUES('$NIT', '$nombre_proveedor', '$direccion_proveedor', '$telefono_proveedor', '$email_proveedor', '$contacto_proveedor')";
            $resultado2=$mysqli->query($sql);
            $auditoria="INSERT INTO auditoria (usuario_auditoria, accion_auditoria, referencia) VALUES('$usuario', 'Ingresa Proveedor', '$NIT')";
            $resultado3=$mysqli->query($auditoria);
            header("Location:../con_configuracion.php");
        else:
            if ($origen=='crea_categoria'):   
                $nombre_categoria=$_REQUEST['nombre_categoria'];
                $sql="INSERT INTO categorias (nombre_categoria) VALUES('$nombre_categoria')";
                $resultado2=$mysqli->query($sql);
                $auditoria="INSERT INTO auditoria (usuario_auditoria, accion_auditoria, referencia) VALUES('$usuario', 'Ingresa Categoria', '$nombre_categoria')";
                $resultado3=$mysqli->query($auditoria);
                header("Location:../con_configuracion.php"); 
            else:
                if ($origen=='crea_unidad'):   
                    $nombre_unidad=$_REQUEST['nombre_unidad'];
                    $abrev_unidad=$_REQUEST['abrev_unidad'];
                    $sql="INSERT INTO unidades_medida (nombre_unidad, abrev_unidad) VALUES('$nombre_unidad', '$abrev_unidad')";
                    $resultado2=$mysqli->query($sql);
                    $auditoria="INSERT INTO auditoria (usuario_auditoria, accion_auditoria, referencia) VALUES('$usuario', 'Ingresa Unidad de Medida', '$abrev_unidad')";
                    $resultado3=$mysqli->query($auditoria);
                    header("Location:../con_configuracion.php");     
                else:
            $origen;
        endif;
    endif;
endif;
endif;

?>