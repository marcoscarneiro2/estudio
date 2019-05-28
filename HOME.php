<!DOCTYPE html>
<html lang="pt-br">
<head>
  
     <?php
     include_once 'head.php';
     ?> 
       
        <script>
            
            $(document).ready(function(){
            $('.center').on('click',function() {
            $('.piano').fadeToggle('active');
            });
            });
            
            
              
            $(document).ready(function(){
            $('.center').on('click',function() {
            $('.carousel').fadeToggle('active');
            });
            }); 
            
            
            $(document).ready(function(){
            $('#boxchat').on('click',function() {
            $('#boxchat').fadeToggle('active');
            });
            });
            
            $(document).ready(function(){
            $('.center').on('click',function() {
            $('#boxchat').hide('active');
            });
            });
</script>  

               
                      
</head>
                
 <?php
              if(isset($_SESSION['email']) == 'HOME.php'):   
              ?>
                    <div class="center">
                    <input type="checkbox" name="">
                    </div>
            <?php
             endif;
            ?> 
          

<body>
  
   <main class="total">
           
 <!---------------------------------------------------------------------------------------------------------->
                    <?php if(isset($_SESSION["mensagem"])):
   print $_SESSION["mensagem"];
   unset($_SESSION["mensagem"]);
endif; ?>
           
   
    <!---------------------------------PIANO------------------------------------------------->
 <br>

    
    <div style="display:none; margin-top:4%;visiblity:" div="#MeuPiano" class="piano">
     <div id="content">
            <div id="content-inner">
                <div id="piano">
                    <div class="help show" tabindex="1">
                        <div class="help-inner">
                            <div id="synth-settings"></div>
                                <div class="opts">
                                <p>Extras:</p>
                                <p >Cor do Teclado - c &nbsp; /</p>
                                <p >Demonstração - m &nbsp; /</p>
                                <p >Animação - 8 &nbsp; /</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script src="audio.js"></script>
        <script src="piano.js"></script>
 
 </div>
                 
   <!-------------------------------------------------------------------------------->
   
    <!--=================================CARROSEL=======================================================--> 
        
                
                <div class="col-13">
          <div id="carouselSite" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                   <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                   
                   <li data-target="#carouselSite" data-slide-to="1"></li>
                   
                   <li data-target="#carouselSite" data-slide-to="2"></li>
               </ol>
                
                <div class="carousel-inner">
                 
                
                  
                  <div class="carousel-item active">
                    
                     <img src="IMAGENS/img/banner%20site.jpg" class="img-fluid d-block " alt="">
                     
                     <!-- <div class="carousel-caption d-none d-md-block text container col-5">
                     <h1 style="background:white;color:black;border-radius:10px 10px 10px 10px">1° cd de Carlos Silva</h1>
                     <p class="lead" style="background:black;color:white;border-radius:10px 10px 10px 10px"><b>Inauguração do cd Filho Meu do cantor Carlos Silva no dia 12/02</b></p>
                                          </div> -->
                     
                  </div>
                  
                  <div class="carousel-item">
                     <img src="IMAGENS/img/music2.jpg" class="img-fluid d-block" alt="">
                     
                     <div class="carousel-caption d-none d-md-block text container col-3">
                         <!-- <h1 style="background:white;color:black;border-radius:10px 10px 10px 10px">Frase do dia</h1>
                         <p class="lead" style="background:black;color:white;border-radius:10px 10px 10px 10px"><b>Sem a música, a vida seria um erro.</b></p> -->
                     </div>
                     
                  </div>
                  
                   <div class="carousel-item">
                     <img src="IMAGENS/img/bannerpromocao.jpg" class="img-fluid d-block" alt="">
                     
                     <div class="carousel-caption d-none d-md-block text container col-3">
                         
                     </div>
                     
                  </div>
                   
               </div>
               <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                   
                   <span class="carousel-control-prev-icon"></span>
                   <span class="sr-only">Anterior</span>
             </a>
             <a class="carousel-control-next" href="#carouselSite" role="buton" data-slide="next">
                 
                 <span class="carousel-control-next-icon"></span>
                 <span class="sr-only">Avançar</span>
             </a>
           </div>
        
        
      
 <!---==========================================================================================-->   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 <!---==========================================================================================-->   
   
   </div>
    
    
   <div id="boxchat">
          
         <img src="IMAGENS/ICONES/mulherviolao.png" alt="">
           <?php
              if(!isset($_SESSION['email'])):   
              ?>
               <p>Olá visitante, nosso site tem uma grande surpresa para você...faça o login e  se surpreenda !</p> 
               <?php 
             endif;
            ?> 
              
            <?php
            if(isset($_SESSION['email'])): 
            include('verifica_login.php');
            ?>
           <p>Muito bem <?php echo $_SESSION["nome"];?>, agora no menu clique no botão e venha tocar comigo</p>
   <?php
             endif;
            ?> <!--===============================================================================================-->
            
            
           
     </div>
   
   
   </main>
      <?php
     include_once 'footer.php';
     ?> 
 
</body>
</html>