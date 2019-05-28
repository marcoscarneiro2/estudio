<?php

include_once'coneccao.php';
session_start();
$usuario = $_SESSION['email'];

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);        

    $sql = "UPDATE usuario SET nome = '$nome', telefone = '$telefone', email = '$email' WHERE id = '$id'";

    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

$row = mysqli_affected_rows($con);    
if( $row == 1){

    $_SESSION['msg'] ="<div class='alert alert-success' role='alert'>"
                     . "Dados editados com sucesso! Faça o login novamente para atualizar as alterações"
                         . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"
                             . "<span aria-hidden='true'>&times;</span>"
                         . "</button>"
                     . "</div>";
      header("location:altera.php");
      	
}else{

    $_SESSION['msg'] ="<div class='alert alert-danger' role='alert'>"
                     . "Erro ao editar dados!"
                         . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"
                             . "<span aria-hidden='true'>&times;</span>"
                         . "</button>"
                     . "</div>";
      header("location:altera.php");
    
    
    	
    }
     
?>
