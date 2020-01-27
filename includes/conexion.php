<?php
$mysqli = new mysqli('localhost', 'divideo_nissi', 'D05m4y4n1t05!', 'divideo_nissi');
mysqli_set_charset($mysqli,'utf8');
if ($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>