<?php

if(eregi("\.mp3$", $_FILES)){
    
    $nome_temporario=$_FILES["Arquivo"]["tmp_name"]; 
    $nome_real=$_FILES["Arquivo"]["name"]; 
    copy($nome_temporario,"songs/Musica_enviada/$nome_real"); 
    
    echo "<script language='javascript' type='text/javascript'>alert('Música enviada com sucesso');window.location.href='HOME.php'</script>";
    exit();
    
}else{
    echo "<script language='javascript' type='text/javascript'>alert('Arquivo não suportado');window.location.href='HOME.php'</script>";
    exit();
}
?>