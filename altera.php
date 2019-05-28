
    <?php
include_once 'head.php';
include_once'coneccao.php';

$id = $_SESSION['id'];
//Mostra os dados da tabela usuario
$sql = "SELECT *FROM usuario  WHERE id = '".$id."'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

     ?> 
     
                        <script>
                        $(document).ready(function(){
                        $(".ativ").click(function(){
                        $("#attsenha2").modal();
                        });
                        });
                        </script>
     
<main class="totalaltera">
   
   <div class="container col-3">   
                        
       <br><br>
                     <form style="margin-top:11%;color:white" action="alterardados.php" method="post">
                     <h2>Alteração de dados</h2><br><br>
                     
                     <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
                     
    <input type="hidden" class="form-control" id="exampleInputName" aria-describedby="NameHelp" name="id" value="<?php echo $row['id']; ?>">
                                     
    <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input maxlength="20" type="name" class="form-control" id="exampleInputName" aria-describedby="NameHelp" placeholder="Seu nome" name="nome" value="<?php echo $row['nome']; ?>">
    </div> 

    <div class="form-group">
    <label for="exampleInputEmail1">Telefone</label>
    <input maxlength="15" type="tel" class="form-control" id="exampleInputtel" aria-describedby="telHelp" placeholder="Telefone" name="telefone" value="<?php echo $row['telefone']; ?>">
    </div>                                                                             
                     
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="email" value="<?php echo $row['email']; ?>">
    
  </div><br>
   <p>Deseja alterar a senha ?</p>
  <div id="attsenha">
   <input class="ativ" type="radio" name="altsenha" value=""> Sim
   <input class="ativ2" type="radio" name="altsenha" value="" checked> Não
  </div><br>
  <br>  
  <button  type="submit" class="btn col-3 btn-primary" href="altera.php">Alterar</button>

</form>
 <div>
     
     
 </div>
  <!--=========================================MODAL SENHA===================================-->
    <div class="modal fade" id="attsenha2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div  class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button style="margin-left:-8px" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-family: 'Caviar Dreams';">Alterar senha</h4></div>
       <div class="container">  
     <form action="alteraSenhaPerfil.php" method="post" style="margin-top:8%;">
                     
                                                                        
  <div class="form-group">
   <label for="exampleInputEmail1">Digite a nova senha</label>
   <br><br>
   <input type="password" class="form-control" id="senha" placeholder="Nova senha" name="senha" minlength="6"><br>
   <input type="password" class="form-control" id="senha2" placeholder="Confirmar senha" name="senha2" minlength="6">
  </div>
  <br>
   <button style="margin-bottom:6%;" type="submit" class="btn btn-primary col-3">Enviar</button>

</form>
     </div> 
      </div>
      
    </div>
  </div>
  
  <!--=======================================================================================-->
  


</div> 
     
</main>    
   
   <?php
     include_once 'footer.php';
     ?> 