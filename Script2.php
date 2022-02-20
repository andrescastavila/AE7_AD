<?php
if(isset($_POST["raza"])){
$raza = $_POST["raza"];
$nombre = $_POST["nombre"];
$servidor = "localhost";
$usuario = "root";
$password = "";
$dbname = "perros";
$conexion = mysqli_connect($servidor, $usuario, $password, $dbname);
if (!$conexion) {
echo "Error en la conexion a MySQL: ".mysqli_connect_error();
exit();
}
$sql = "INSERT INTO perro (raza,nombre) VALUES ('".$raza."','".$nombre."')";
if (mysqli_query($conexion, $sql)) {
echo "Registro insertado correctamente.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
}
?>