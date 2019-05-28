<?php
session_start();
include_once 'coneccao.php';
$usuario = $_SESSION['email'];

    $senha = md5($_POST["senha"]);
    $senha2 = md5($_POST["senha2"]);
  
  if ($senha!= $senha2){
    $_SESSION['msg'] ="<div style='background:Tomato;color:white' class='alert alert-secondary' role='alert'>"
                     . "Senha não confere!!"
                         . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"
                             . "<span aria-hidden='true'>&times;</span>"
                         . "</button>"
                     . "</div>";
                       header("location:altera.php");
    
  }else{
    $id = $_SESSION["id"];
    
    $sql = "UPDATE usuario SET senha='".$senha."' WHERE id='".$id."';";      

    $result = mysqli_query($con, $sql)  or die(mysqli_error($con));

    $row = mysqli_affected_rows($con);
        if ($row == 1){
        $_SESSION['msg'] ="<div class='alert alert-success' role='alert'>"
                     . "Senha alterada com sucesso!"
                         . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"
                             . "<span aria-hidden='true'>&times;</span>"
                         . "</button>"
                     . "</div>";
      header("location:altera.php");
        }else{
            echo 'erro';
        $_SESSION['msg'] ="<div class='alert alert-danger' role='alert'>"
             . "ERRO ao alterar senha!"
                 . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"
                     . "<span aria-hidden='true'>&times;</span>"
                 . "</button>"
             . "</div>";
      header("location:altera.php");
         
         
         
        }
    }

                 

mysqli_close($con);
?>   