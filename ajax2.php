<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'divideo_nissi');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'divideo_nissi');

$connexion = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

$html = '';
$codigo_producto = $_POST['codigo_producto'];


$result = $connexion->query(
    'SELECT * FROM productos  
    WHERE reg_eli=0 AND CONCAT (codigo_producto, nombre_producto)  LIKE "%'.strip_tags($codigo_producto).'%"
    ORDER BY codigo_producto DESC LIMIT 0,512'
);
if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) {                
        $html .= '<div><a class="suggest-element" data="'.utf8_encode($row['codigo_producto']).'" id="codigo_producto'.$row['codigo_producto'].'"><table><tr><td>'.utf8_encode($row['nombre_producto']).'</td><td></td></tr></table></a></div><script>alert("No se puede crear este proveedor, ya existe");</script>';
    }
} 
echo $html;
?>  
