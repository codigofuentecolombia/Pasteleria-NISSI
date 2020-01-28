<?php
$mysqli = new mysqli('localhost', 'root', '', 'divideo_nissi');
mysqli_set_charset($mysqli,'utf8');
if ($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>