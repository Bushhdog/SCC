<h1>Editar Usuário</h1>
<?php
	$sqlLogin = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id'];

	$res = $connLogin->query($sqlLogin);

	$row = $res->fetch_object();
?>

<form action="?page=salvar-usuario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
	</div>
	<div class="mb-3">
		<label>Usuario</label>
		<input type="text" name="usuario" class="form-control" value="<?php print $row->usuario; ?>">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="text" name="senha" class="form-control" value="<?php print $row->senha; ?>">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>