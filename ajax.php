<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'divideo_nissi');
define('DB_SERVER_PASSWORD', 'D05m4y4n1t05!');
define('DB_DATABASE', 'divideo_nissi');

$connexion = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);

$html = '';
$NIT = $_POST['NIT'];


$result = $connexion->query(
    'SELECT * FROM proveedores  
    WHERE reg_eli=0 AND CONCAT (NIT, nombre_proveedor, telefono_proveedor)  LIKE "%'.strip_tags($NIT).'%"
    ORDER BY NIT DESC LIMIT 0,512'
);
if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) {                
        $html .= '<div><a class="suggest-element" data="'.utf8_encode($row['misshap']).'" id="NIT'.$row['NIT'].'"><table><tr><td>'.utf8_encode($row['nombre_proveedor']).'</td><td></td><td>'.utf8_encode($row['NIT']).'</td><td></td><td>'.utf8_encode($row['direccion_proveedor']).'</td></tr></table></a></div><script>alert("No se puede crear este proveedor, ya existe");</script>';
    }
} 
echo $html;
?>  
