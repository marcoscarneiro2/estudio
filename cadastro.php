<!DOCTYPE html>
<html lang="pt-br">
<head>
  
     <?php
     include_once 'head.php';
     ?> 
    
</head>

<body>
   <main class="totalCadastro">
  
  
 <!--===================================CADASTRO=============================================-->       <div class="container col-3">   
                     <br>   

                     <form id="f1" style="margin-top:11%;color:white" action="gravar.php" method="post">
                     <h2>TELA DE CADASTRO</h2><br>
             
 <?php if(isset($_SESSION["mensagem"])):
   print $_SESSION["mensagem"];
   unset($_SESSION["mensagem"]);
endif; ?>        
                     
    <div class="form-group">
    <label for="exampleInputEmail1">Nome completo</label>
    <input maxlength="20" type="name" class="form-control" id="exampleInputName" aria-describedby="NameHelp" placeholder="Seu nome" name="nome" required>
    </div> 

    <div class="form-group">
    <label for="telefone">Celular</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00)00000-0000" required>           
    </div>                                                                               
                     
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="usuario@gmail.com" name="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senha1" placeholder="Senha" name="senha" minlength="6" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmar Senha</label>
    <input type="password" class="form-control" id="senha22" placeholder="Confirmar Senha" name="senha2" minlength="6" >
  </div>
  
  <br><br>  
  <button  type="submit" class="btn btn-secondary col-3"><a id="fd" href="HOME.php">Cancelar</a></button>
  <button style="margin-left: 3%" type="submit" class="btn col-3 btn-primary" href="cadastro.php">Cadastrar</button>

</form>


</div> 
 
   
   </main>
    
      <?php
     include_once 'footer.php';
     ?>  
</body>
</html>