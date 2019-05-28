<?php
session_start();//Inicia ou recupera uma sessão que está em aberto
?>
  <head>
   <meta charset="UTF-8">
    <title>ESTÚDIO ESPAÇO ABERTO </title>
    <link rel="stylesheet" href="STYLE.css">
    <link rel="icon" href="IMAGENS/logo/SELO.png">
    <link rel="stylesheet" type="text/css" href="piano.css" />
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    
    
   <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
  .modal-header, h4, .close {
    background-color: black;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>

<!-----------------------BOOTSTRAP------------------------------------------------->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--------------------------------------------------------------------------------->   
   
<!-----------------------SCRIPT---------------------------------------------------->     
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
 <script>
  $(window).bind('scroll', function() {
			
            if ($(this).scrollTop() > 180) { /* quando a página descer 100 pixels */
	
                $('nav').css({ /* a sua div */
                    position: 'fixed', 
                    top: '0px' /* vai ficar fixa a 0 pixels do topo */
                });
				

            } else {
	
                $('nav').css({
                    position: 'relative', 
                    top: '0px'
                });

            }
        });    
     
     
     $(document).ready(function () {
    $('a').click(function () {
        $('#menu').find('li.active').removeClass('active');
        $(this).parents("li").addClass('active');
    });
});
</script>
        
   

<!--------------------------------------------------------------------------------->    
</head>
   
       <header>
           <img id="LOGO" src="IMAGENS/logo/1VERSAOCOMLUZES%20(1).gif" alt="Logo">
           
<!-- ====================================================================================================================================-->                   
             <form action="" method="post" id="ACESSO">
              
              <?php
              if(!isset($_SESSION['email'])):   
              ?>
               <img id="char" src="IMAGENS/ICONES/USERBRACK.png" alt=""> <br>
               <button style="color:white;font-size: 16px;text-shadow: 2px 1px black; 
              " type="button" class="btn btn-default" id="myBtn">Entrar</button> 
                
               <?php
             endif;
            ?> 
              
        
        
 <!--===============================================================================================-->
                      
            <?php
            if(isset($_SESSION['email'])): 
            include('verifica_login.php');
            ?>
           <img id="char2" src="IMAGENS/ICONES/USERVERDE.png" alt=""> <br>
                 
            <ul class="nav nav-pills" >

      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <h2 style="color:white;font-size:13px">Olá, <?php echo $_SESSION["nome"];?></h2> <span class="caret"></span>
        </a>
        <ul id="cxPerfil2" class="dropdown-menu col-md-2" >
         
          <li>  <button style="font-size: 16px;margin-left:26% 
              " type="button" class="btn btn-default" id="btnPerfil"><b>Perfil</b></button> </li>
                    <div class="border3"></div>

              <?php 
            if($_SESSION['nivel'] == 2){ 
            ?>
              <li><a style="font-size: 16px;margin-left:13%" class="btn btn-default" target="_blank" id="" href="log.php"><b>Registros</b></a> </li>
                 <?php }
            ?>
                      <div class="border3"></div>

              
          <li><a style="font-size: 16px;margin-left:26%" class="btn btn-default" id="" href="logout.php"><b>Sair</b></a> </li>
        </ul>
      </li>
     
    </ul>           
            <?php
             endif;
            ?>          
            
           </form>
           
           
           
           
<!-- ====================================================================================================================================-->           
                                       
       </header>
              
              <!------------------------------------------------------------>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button style="margin-left:-8px" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:10px 40px;">
           
           <?php
            if(isset($_SESSION['nao_autenticado'])):  
           ?>
         <div class="notification is-danger">
             <p style="color:red">ERRO: Usuário ou senha inválidos.</p>
         </div>
            <?php
             endif;
             unset($_SESSION['nao_autenticado']);
            ?>
         
          <form role="form" action="login.php" method="POST">
            <div class="form-group">
             
              <label for="email"><span class="glyphicon glyphicon-user"></span>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Insira seu email" required>
              
            </div>
            <div class="form-group">
             
              <label><span class="glyphicon glyphicon-eye-open"></span> Senha</label>
              <input type="password" class="form-control" name="senha" placeholder="Insira a Senha" required>
              <br>
            </div>
             
              <button type="submit" class="btn btn-dark btn-block"><span class="glyphicon glyphicon-off"></span>Entrar</button>
          </form>
        </div>
        <div class="modal-footer">
         
          <p><a href="cadastro.php">Cadastre-se</a></p><p> ou</p>
            <p><button style="font-size: 14px;color:#007bff 
              " type="button" class="btn btn-default" id="btnsenha">Esqueceu a senha ?</button> </p>
        </div>
      </div>
      
    </div>
  </div> 
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
             
            
              <!------------------------------------------------------------>
              
              <!--------------------------TELA DE PERFIL---------------------------------->
  <!-- Modal -->
  <div class="modal fade" id="myModalPerfil" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div  class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button style="margin-left:-8px" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Informações Pessoais</h4>
        </div>
        <div class="modal-body" style="padding:10px 40px;">
         
          <form role="form" action="perfil.php" method="POST">
            <div class="form-group">
             <br>
            
             <ul class="nav nav-pills" id="cxPerfil">
              <li><h2 style="color:black;font-size:18px"><b>Nome:</b> <?php echo $_SESSION["nome"]; ?></h2> <span class="caret"></span></li>
             </ul><br>
             <ul class="nav nav-pills" id="cxPerfil">
              <li><h2 style="color:black;font-size:18px"><b>Email:</b> <?php echo $_SESSION["email"]; ?></h2> <span class="caret"></span></li>
             </ul><br>
             <ul class="nav nav-pills" id="cxPerfil">
              <li><h2 style="color:black;font-size:18px"><b>Telefone: </b> <?php echo $_SESSION["telefone"]; ?></h2> <span class="caret"></span></li>
             </ul><br>
             <ul class="nav nav-pills" id="cxPerfil">
              <li><h2 style="color:black;font-size:18px"><b>Cadastro criado:</b> <?php echo $_SESSION["cadastro"]; ?></h2> <span class="caret"></span></li>
             </ul><br>
             <a  class="btn btn-success col-12 pull-right" href="altera.php?id=<?php echo $_SESSION["id"]; ?>" style="color:white">Alterar Informações</a>
        </div>
                        </form><br>
        <p>Gostaria de ter suas músicas em nosso site ?</p>
        <p>Envie sua música para que possamos avaliar</p>
        <div class="modal-footer">
         <form action="envia_musica.php" method="post" enctype="multipart/form-data">
         <input style="border-radius:0;height:3%;width:101%;margin-left:-17%" type="file" name="Arquivo" id="Arquivo" accept="audio/mp3">
         <br><br>
         <input style="color:white;height:3%;width:25%;background:red" type="reset" value="Apagar">
         <input style="color:white;height:3%;width:25%;background:brown" type="submit" value="Enviar"></form>

        </div>
      </div>
      
    </div>
  </div> 
       </div>
<script>
$(document).ready(function(){
  $("#btnPerfil").click(function(){
    $("#myModalPerfil").modal();
  });
});
</script>
             
   
              <!------------------------------------------------------------>
              <!-- Modal -->
  <div class="modal fade" id="myModalsenha" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div  class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button style="margin-left:-8px" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-family: 'Caviar Dreams';">RECUPERAÇÃO DE SENHA</h4></div>
       <div class="container">  
     <form style="margin-top:8%;">
                     
                     <p style="color:black">ESQUECEU SUA SENHA ?</p>
               <p style="color:gray;font-size:12px"><b>Preencha seu e-mail e enviaremos um link de recuperação de senha para você.</b></p>
                       <br><br> 
                                                                        
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control col-12" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
  </div>
  <br>
      <button style="margin-bottom:6%;" type="submit" class="btn btn-primary col-3">Enviar</button>

</form>
     </div> 
      </div>
      
    </div>
  </div> 
  
<script>
$(document).ready(function(){
  $("#btnsenha").click(function(){
    $("#myModalsenha").modal();
  });
});
</script>
              <!------------------------------------------------------------>
                                              
                        <nav style="background:black" class="navbar  navbar-expand-lg navbar-dark">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span style="margin-top:-10px" class="navbar-toggler-icon"></span>
                          </button>

                          <!-- Collapsible content -->
                          <div id="menu" class="collapse navbar-collapse" id="basicExampleNav">
                            <div class="container">
                            <!-- Links -->
                            <ul style="background:black" class="linq navbar-nav mr-auto">
                                  <li class="nav-item">
                                      <a  href="HOME.php"><b>HOME</b></a>
                                  </li>
                                   <li class="nav-item">
                                      <a  href="O_ESTUDIO.php"><b>O ESTÚDIO</b></a>
                                  </li>
                                  <li class="nav-item">
                                      <a  href="SERVICOS.php"><b>SERVIÇOS</b></a>
                                  </li>
                                  <li class="nav-item">
                                      <a  href="MUSICA.php"><b>MÚSICAS</b></a>
                                  </li>
                              
                              
                                  <li class="nav-item"><a  href="FOTOS.php"><b>GALERIA DE FOTOS</b></a></li>
                             
                            
                                  <li class="nav-item">
                                      <a  href="EVENTOS.php"><b>EVENTOS</b></a>
                                  </li>
                                  <li class="nav-item">
                                      <a  href="CONTATO.php"><b>CONTATOS</b></a>
                                  </li>

                              <!-- Dropdown -->
                             <!--  <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </li> -->

                            </ul>
                            </div>
                            <!-- Links -->
                          </div>
                          <!-- Collapsible content -->
                        </nav>
                        <!--/.Navbar-->