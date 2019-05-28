<?php
define('localhost','127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB','estudio');

$con = mysqli_connect("localhost","root","","estudio") or die('Não foi possível conectar');
mysqli_set_charset($con, "utf-8")
?>