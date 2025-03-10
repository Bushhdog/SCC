<h1>Cadastrar Usuário</h1>
<form action="?page=salvar-usuario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Usuario</label>
		<input type="text" name="usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="text" name="senha" class="form-control">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>