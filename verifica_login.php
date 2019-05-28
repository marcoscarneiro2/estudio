 <?php
if(!$_SESSION['email']){
    header('Location: HOME.php');
    exit();
}
?>