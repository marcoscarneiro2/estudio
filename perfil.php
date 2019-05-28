<?php
session_start();
include('coneccao.php');
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = ("select id,nome,telefone from usuario where email = '{$email}' and senha = md5('{$senha}')");

$result = mysqli_query($con,$query);

$numrow = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

echo $row["nome"];

if($numrow == 1){
    $_SESSION['nome'] = $row["nome"];
    echo $_SESSION['nome'];
    
    $_SESSION['email'] = $email;
}

?>