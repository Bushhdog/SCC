<h1>Listar Usuários</h1>
<?php
	$sqlLogin = "SELECT * FROM usuarios";

	$res = $connLogin->query($sqlLogin);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Usuário</th>";
		print "<th>Senha</th>";
        print "<th>Tipo</th>";
        print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->usuario."</td>";
			print "<td>".$row->senha."</td>";
            print "<td>".$row->tipo."</td>";
            

			print "<td>
						<button class='btn  btn-success' onclick=\"location.href='?page=editar-usuario&id=".$row->id."';\">Editar</button>
						<button class='btn  btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-usuario&acao=excluir&id=".$row->id."';}else{false;}\">Excluir</button>

			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}