<?php
$dbhost = "137.184.137.130";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("No hay conexion: " . mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '" . $nombre . "' and password = '" . $pass . "'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
    echo "Bienvenido: " . $nombre;
} else if ($nr == 0) {
    $com = '<img src = "space-error.svg" width= "100%" height="100%" />';
    echo $com;
}
?>
