<?php
session_start();
include('coneccao.php');


$id = mysqli_real_escape_string($con, $_POST['id']);
$nome = mysqli_real_escape_string($con, $_POST['nome']);
$telefone = mysqli_real_escape_string($con, $_POST['telefone']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);
$nivel = mysqli_real_escape_string($con, $_POST['nivel']);
$ativo = mysqli_real_escape_string($con, $_POST['ativo']);
$cadastro = mysqli_real_escape_string($con, $_POST['cadastro']);

$query = ("select id,nome,telefone,email,senha,nivel,ativo,cadastro from usuario");

$result = mysqli_query($con,$query);

$numrow = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

echo $row["id"];
echo $row["nome"];
echo $row["telefone"];
echo $row["email"];
echo $row["senha"];
echo $row["nivel"];
echo $row["ativo"];
echo $row["cadastro"];

if($numrow == 1){
    $_SESSION['id'] = $row["id"];
    echo $_SESSION['id'];
    
    $_SESSION['nome'] = $row["nome"];
    echo $_SESSION['nome'];
    
    $_SESSION['telefone'] = $row["telefone"];
    echo $_SESSION['telefone'];
    
    $_SESSION['email'] = $email;
    $_SESSION['telefone'] = $telefone;
    
    $_SESSION['nivel'] = $row["nivel"];
    echo $_SESSION['nivel'];
    
    $_SESSION['ativo'] = $row["ativo"];
    echo $_SESSION['ativo'];
    
    $_SESSION['cadastro'] = $row["cadastro"];
    echo $_SESSION['cadastro'];
    
    header('Location: HOME.php');
    exit();
}
?>