<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':			
			$nome = $_POST["nome"];
			$usuario = $_POST["usuario"];
			$senha = $_POST["senha"];

			$sqlLogin = "INSERT INTO usuarios (
						nome,
						usuario,
						senha)
					VALUES(
						'{$nome}',
						'{$usuario}',
						'{$senha}')";

				$res = $connLogin->query($sqlLogin);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='?page=listar-usuario';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-usuario';</script>";
				}

			break;
		
            case 'editar':
                $nome = $_POST['nome'];
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];

                $sqlLogin = "UPDATE usuarios SET
                            nome='{$nome}', 
                            usuario='{$usuario}', 
                            senha='{$senha}' 
                        WHERE id=".$_REQUEST["id"];
    
                $res = $connLogin->query($sqlLogin);
    
                if($res==true){
                    print "<script>alert('Editou com sucesso!');</script>";
                    print "<script>location.href='?page=listar-usuario';</script>";
                }else{
                    print "<script>alert('Deu errado');</script>";
                    print "<script>location.href='?page=listar-usuario';</script>";
                }
                break;

		case 'excluir':
			$sqlLogin = "DELETE FROM usuarios
					WHERE id=".$_REQUEST["id"];

				$res = $connLogin->query($sqlLogin);

				if($res==true){
					print "<script>alert('Excluiu com sucesso!');</script>";
					print "<script>location.href='?page=listar-usuario';</script>";
				}else{
					print "<script>alert('Deu errado!');</script>";
					print "<script>location.href='?page=listar-usuario';</script>";
				}
			break;
	}

	?>