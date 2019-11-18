<?php
require_once('db.class.php');
$id = $_REQUEST['id'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$objDb = new db();
$linq = $objDb->conecta_mysql();

if(isset($id)){
    $sql = "UPDATE tb_usuario SET 
                    ds_usuario='$usuario',
                    ds_email = '$email',
                    nm_senha = '$senha'
                    where id = $id";
}
else{
    $sql = "INSERT INTO tb_usuario (ds_usuario, ds_email, nm_senha) values ('$usuario', '$email', '$senha')";
}

if(mysqli_query($linq, $sql)){
    header('location:listar_usuario.php');
}
