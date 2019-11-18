<?php
include 'header.php';
?>

<br>
<form method="POST" action="verificalogin.php" id="formEntrar">
	<div class="card text-center col-md-4">
		<div class="card-body">
			<div class="form-group">
				<input type="email" class="form-control" id="usuario" name="usuario" placeholder="Digite seu email">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
			</div>
		</div>
		<div class="card-footer text-muted">
			<button type="submit" class="btn btn-primary">Entrar</button>
		</div>
	</div>
</form>

<?php
include 'footer.php';
?>