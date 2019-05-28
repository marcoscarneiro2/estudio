<?php
include_once'coneccao.php';
session_start();
$id = $_GET["id"];

$sql = "DELETE from usuario where id = '".$id."';";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
 $row = mysqli_affected_rows($con);
if( $row == 1){
    $_SESSION['msg'] ="<div class='alert alert-success' role='alert'>"
                     . "Usuário deletado com sucesso!!"
                         . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"
                             . "<span aria-hidden='true'>&times;</span>"
                         . "</button>"
                     . "</div>";
      header("location:log.php?msg");	
}else{
    $_SESSION['msg'] ="<div class='alert alert-danger' role='alert'>"
                     . "Usuário não pode ser deletado!!"
                         . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"
                             . "<span aria-hidden='true'>&times;</span>"
                         . "</button>"
                     . "</div>";
      header("location:log.php?msg");
   
}



