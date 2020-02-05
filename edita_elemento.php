<?php
    include('../includes/conexion.php'); 
    $origen=$_REQUEST['origen'];
    if ($origen=='contratos'):
        $cid=$_REQUEST['cid'];
        $direccion=$_REQUEST['direccion'];
        $barrio=$_REQUEST['barrio'];
        $mac=$_REQUEST['mac'];
        $ipaddr=$_REQUEST['ipaddr'];
        $plan=$_REQUEST['plan'];
        $velocidad_subida=$_REQUEST['velocidad_subida'];
        $tecnico=$_REQUEST['tecnico'];
        $fecha_aprovisionamiento=$_REQUEST['fecha_aprovisionamiento'];
        $fecha_instalacion=$_REQUEST['fecha_instalacion'];
        $status_instalacion=$_REQUEST['status_instalacion'];
        $valor_plan=$_REQUEST['valor_plan'];
        $ciclo=$_REQUEST['ciclo'];
        $observaciones_contrato=$_REQUEST['observaciones_contrato'];
        $estado=$_REQUEST['estado_contrato'];
        $id_contrato=$_REQUEST['id_contrato']; 
        $tipo_contrato=$_REQUEST['tipo_contrato']; 
        $velocidad_bajada=$_REQUEST['velocidad_bajada']; 
        $nodo=$_REQUEST['nodo'];      
        $sql = "UPDATE contratos SET cid='$cid', direccion='$direccion', barrio='$barrio', mac='$mac', ipaddr='$ipaddr', plan='$plan', velocidad_subida='$velocidad_subida', tecnico='$tecnico', fecha_aprovisionamiento='$fecha_aprovisionamiento', fecha_instalacion='$fecha_instalacion', valor_plan='$valor_plan', ciclo='$ciclo', tipo_contrato='$tipo_contrato', estado_contrato='$estado', observaciones_contrato='$observaciones_contrato', velocidad_bajada='$velocidad_bajada', nodo='$nodo' WHERE id_contrato=$id_contrato";
        $resultado=$mysqli->query($sql);
        echo $sql;
        header('Location:../man_contratos.php?id='.$id_contrato);
else:
    if ($origen=='editar_clientes'):
        $id_cliente=$_REQUEST['id_cliente'];
        $nombres=$_REQUEST['nombres'];    
        $cod_cliente=$_REQUEST['cod_cliente']; 
        $email=$_REQUEST['email'];
        $direccion_visita=$_REQUEST['direccion_visita'];   
        $telefono1=$_REQUEST['telefono1'];    
        $telefono2=$_REQUEST['telefono2'];
        $validador=$_REQUEST['validador'];
        $estado=$_REQUEST['estado'];       
        $sql = "UPDATE clientes SET nombres='$nombres', cod_cliente='$cod_cliente', email='$email', telefono1='$telefono1', telefono2='$telefono2', direccion_visita='$direccion_visita', estado='$estado' WHERE id_cliente=$id_cliente";
        $resultado=$mysqli->query($sql);
        echo $sql;
      header('Location:../con_clientes.php');     
    else:
        if ($origen=='editar_planes'):
            $id_plan=$_REQUEST['id_plan'];
            $nombre_plan=$_REQUEST['nombre_plan']; 
            $velocidad=$_REQUEST['velocidad'];
            $kb=$_REQUEST['kb'];     
            $sql = "UPDATE planes SET nombre_plan='$nombre_plan', velocidad='$velocidad', kb='$kb' WHERE id_plan=$id_plan";
            $resultado=$mysqli->query($sql);
            echo $sql;
            header('Location:../con_planes.php');                       
else:
    if ($origen=='instalaciones'):
        $id_contrato=$_REQUEST['id_contrato'];
        $id_equipo=$_REQUEST['id_equipo'];          
        $sql = "UPDATE equipos SET cliente='$id_contrato' WHERE id_equipo=$id_equipo";
        $resultado=$mysqli->query($sql);
        echo $sql;
        header('Location:../man_contratos.php?id='.$id_contrato);                      
else:
    if ($origen=='cambiavalor'):
        $id=$_REQUEST['id'];
        $id_factura=$_REQUEST['id_factura'];    
        $valor=$_REQUEST['valor'];      
        $sql = "UPDATE facturas SET valor='$valor' WHERE id_factura=$id_factura";
        $resultado=$mysqli->query($sql);

        $sql6="UPDATE wp_wc_product_meta_lookup SET min_price='$valor', max_price='$valor' WHERE product_id=$id_factura";
        $resultado6=$mysqli->query($sql6);

        $sql7="UPDATE wp_postmeta SET meta_value='$valor' WHERE post_id=$id_factura";
        $resultado7=$mysqli->query($sql7);
        
        $sql8="UPDATE wp_postmeta SET meta_value='$valor' WHERE post_id=$id_factura";
        $resultado8=$mysqli->query($sql8);
        echo $sql;
        $comillas="'";
        header('Location:../con_facturacion.php?id='.$comillas.''.$id.''.$comillas);  
    else:
        if ($origen=='cambiaemail'):
            $id=$_REQUEST['id'];
            $id_factura=$_REQUEST['id_factura'];    
            $email=$_REQUEST['email'];      
            $sql = "UPDATE facturas SET email='$email' WHERE id_factura=$id_factura";
            $resultado=$mysqli->query($sql);
            echo $sql;
            $comillas="'";
            header('Location:../con_facturacion.php?id='.$comillas.''.$id.''.$comillas);                     
else:
echo $nombres;
endif;
endif;
endif;
endif;
endif;
endif;
?>
   