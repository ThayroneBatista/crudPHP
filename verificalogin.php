<?php
require_once('db.class.php');

session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "select * from tb_usuario where ds_usuario='$usuario' and nm_senha='$senha'";

$objDb = new db();
$linq = $objDb->conecta_mysql();

$resultado_id = mysqli_query($linq, $sql);

if($resultado_id){
   $dados_usuario = mysqli_fetch_array($resultado_id);
    if(!is_null($dados_usuario)){
        $_SESSION['nomeusu'] = $dados_usuario['ds_usuario'];
        header('location:principal.php');
    }  
    else{
        header('location:index.php');
    }

}else{
    echo 'Erro na conexão com o BD';
}