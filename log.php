<?php
session_start()
?>
<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="UTF-8">
    <title>ESTÚDIO ESPAÇO ABERTO </title>
    <link rel="stylesheet" href="STYLE.css">
    <link rel="icon" href="IMAGENS/logo/SELO.png">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-----------------------BOOTSTRAP------------------------------------------------->  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--------------------------------------------------------------------------------->   
   
<!-----------------------SCRIPT---------------------------------------------------->     
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<script>
$(document).ready(function(){
  $("#dadousuario").click(function(){
    $("#mymodal2").modal();
  });
});
    
    function checkDelete(){
    return confirm('Tem certeza que deseja excluir o usuário?');
}
</script>   
   
    
</head>
<main class="totalLog">
<!--======================LOG DE USUÁRIOS===========================================-->
<?php 
            if($_SESSION['nivel'] == 2){ 
            ?>
<div id="totaltab" class="container col-11 table-responsive">
<br><br>
       <h2>Registro de Usuários</h2>
        <div class="border2"></div>
            <form style="width:300px;margin-bottom:1%;color:white">
             Buscar:
            <input type="text" name="nome" placeholder="Digite um nome" class="form-control"><br>
            <input  style="height:40px;background:#8b4513;color:white" type="submit"  value="Buscar" class="btn btn-default">
        </form>
        
         <!--Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina--> 
          <?php
            
            if(isset($_GET["nome"]))
            {
                $nome = $_GET["nome"];
                include_once 'coneccao.php';
                $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
                //Selecionar todos os clientes da tabela
                $sql = "SELECT * FROM usuario where nivel = 1 and nome like '%$nome%' order by nome";
                $result = mysqli_query($con, $sql);
                //Contar o total de clientes
                $total = mysqli_num_rows($result);
                
                //Seta a quantidade de usuário por pagina
                $quantidade_pg = 10;
                //calcular o número de pagina necessárias para apresentar os clientes
                $num_pagina = ceil($total/$quantidade_pg);
                //Calcular o inicio da visualizacao
                $incio = ($quantidade_pg*$pagina)-$quantidade_pg;
                
                
                if($total > 0){
                    echo "<table class='table table-condensed' id='tabela' style='width:100%;border-radius: 15px 15px 15px 15px';
                         <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Nivel</th>
                            <th>Ativo</th>
                            <th>Cadastrado</th>
                            <th></th>
                         </tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['nome']}</td>";
                        echo "<td>{$row['telefone']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['nivel']}</td>";
                        echo "<td>{$row['ativo']}</td>";
                        echo "<td>{$row['cadastro']}</td>";
                        
                        echo "<td><button title='Exluir' class='btn btn-default'><a style='color:red' href='delete.php? id=" . $row['id'] . "'onclick='return checkDelete()'><i class='fas fa-user-times'></i></a></button>";
                        echo "</tr>";
                    }
                    echo"</table>";
                    echo"<b style='color:white'>Total de Registros encontrados: ".$total."</b>";
                }else{
                    echo "<b style='color:white'>Não há pessoas com esse nome</b>";
                }
            }
            if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            }                    
            ?>
            
   
                
                                    
       </div>
        
        
    <?php }
            ?>
            
<!--==========================================================================-->

</main>

</body>
</html>