<?php
session_start();
include('coneccao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: HOME.php');
    exit();

}


$email = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);
$nivel = mysqli_real_escape_string($con, $_POST['nivel']);

$query = ("select id,nome,telefone,email,senha,nivel,ativo,cadastro from usuario where email = '{$email}' and senha = md5('{$senha}')");

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
    
    $_SESSION['senha'] = $row["senha"];
    echo $_SESSION['senha'];
    
    $_SESSION['nivel'] = $row["nivel"];
    echo $_SESSION['nivel'];
    
    $_SESSION['ativo'] = $row["ativo"];
    echo $_SESSION['ativo'];
    
    $_SESSION['cadastro'] = $row["cadastro"];
    echo $_SESSION['cadastro'];
    header('Location: HOME.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: HOME.php');
    exit();
}

?>