<?php
	// Configuração da base de dados do sistema clinico
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'clinicah');

	// Configuração da base de dados do sistema de login
	define('HOST_LOGIN', 'localhost');
	define('USER_LOGIN', 'root');
	define('PASS_LOGIN', '');
	define('BASE_LOGIN', 'sislogin'); 


	$conn = new Mysqli(HOST,USER,PASS,BASE);

	$connLogin = new Mysqli(HOST_LOGIN, USER_LOGIN, PASS_LOGIN, BASE_LOGIN);
	if ($connLogin->connect_error) {
    die("Erro de conexão com o sistema de login: " . $connLogin->connect_error);
}




	?>