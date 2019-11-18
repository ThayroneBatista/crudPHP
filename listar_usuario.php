<?php
require_once('verifica_sessao.php');
require_once('db.class.php');
include("header.php");
include("menu.php");

$sql = "select * from tb_usuario";

$objDb = new db();
$linq = $objDb->conecta_mysql();

$resultado_id = mysqli_query($linq, $sql);
?>

<br>
<br>

<div class="row">
    <div class="col-lg-6">
        <a class="btn btn-md float-left btn-primary" href="cadastrar_usuario.php">Novo</a>
    </div>
    <div class="col-lg-6">
        <a class="btn btn-md float-right btn-primary" href="cadastrar_usuario.php">Novo</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col" class="text-center" >Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados_usuarios = mysqli_fetch_array($resultado_id)) { ?>
                    <tr>
                        <th scope="row"><?= $dados_usuarios["id"] ?></th>
                        <td><?= $dados_usuarios["ds_usuario"] ?></td>
                        <td><?= $dados_usuarios["ds_email"] ?></td>
                        <td title="<?= $dados_usuarios["nm_senha"] ?>">****</td>
                        <td class="text-center"><a class="btn btn-sm btn-info" href="cadastrar_usuario.php?id=<?= $dados_usuarios["id"] ?>&acao=editar">Editar</a>
                        <a class="btn btn-sm btn-danger" href="cadastrar_usuario.php?id=<?= $dados_usuarios["id"] ?>&acao=excluir">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <a class="btn btn-md float-left btn-primary" href="cadastrar_usuario.php">Novo</a>
    </div>
    <div class="col-lg-6">
        <a class="btn btn-md float-right btn-primary" href="cadastrar_usuario.php">Novo</a>
    </div>
</div>
<?php
include("footer.php");
?>