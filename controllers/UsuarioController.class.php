<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	class UsuarioController
	{
		public function verificar_login()
		{
			$msg = array("","");
			$erro = false;
			$mensagem = "";
			if($_POST)
			{
				if(empty($_POST["email"]))
				{
					$msg[0] = "Informe o E-mail";
					$erro = true;
				}
				if(empty($_POST["senha"]))
				{
					$msg[1] = "Informe a senha";
					$erro = true;
				}
				if(!$erro)
				{
					//verificar no BD
					$usuario = new Usuario(email:$_POST["email"]);
					
					$usuarioDAO = new UsuarioDAO();
					$retorno = $usuarioDAO->login($usuario);
					
					if(count($retorno) == 1)
					{
						//encontrou
						if(password_verify($_POST['senha'], $retorno[0]->senha))
						{
							$_SESSION["id_usuario"] = $retorno[0]->id_usuario;
							$_SESSION["nome_usuario"] = $retorno[0]->nome_usuario;
							$_SESSION["nivel_usuario"] = $retorno[0]->nivel_usuario;

							header("location: /fatec-tools/");
							die();
						}
					}
						//não encontrou
						$mensagem = "Verifique os dados informados";
				}
				
			}
			require_once "views/pagina_login.php";
		}
		public function logout()
		{
			
			$_SESSION = array();
			session_destroy();
			header("Location:/fatec-tools/");
			die();
		}
		public function inserir()
		{
			$msg = array("","","","","");
			$erro = false;
			if($_POST)
			{
				if(empty($_POST["nome_usuario"]))
				{
					$msg[0] = "Preencha o seu nome";
					$erro = true;
				}
				if(empty($_POST["email"]))
				{
					$msg[1] = "Preencha o seu e-mail";
					$erro = true;
				}
				else
				{
					$usuario = new Usuario(email:$_POST["email"]);
					$usuarioDAO = new UsuarioDAO();
					$retorno = $usuarioDAO->login($usuario);
					
					if(count($retorno) > 0)
					{
						$msg[1] = "E-mail já cadastrado";
						$erro = true;
					}
				}
				if(empty($_POST["senha"]))
				{
					$msg[2] = "Preencha a senha";
					$erro = true;
				}
				if(empty($_POST["ConfirmeSenha"]))
				{
					$msg[3] = "Confirme a senha";
					$erro = true;
				}
				if($_POST["senha"]!= "" && $_POST["ConfirmeSenha"] != "")
				{
					if($_POST["senha"] != $_POST["ConfirmeSenha"])
					{
						$msg[3] = "Senhas não conferem";
						$erro = true;
					}
				}
				if(!$erro)
				{
					
					$usuario = new Usuario(nome_usuario:$_POST["nome_usuario"], email:$_POST["email"], senha:password_hash($_POST["senha"], PASSWORD_DEFAULT), nivel_usuario:"Aluno");
					$usuarioDAO = new UsuarioDAO();
					$usuarioDAO->inserir($usuario);
					$msg[4] = "Inserido com sucesso";

                    header("Location: /fatec-tools/login");
                    exit();
				}
			}
			require_once "views/pagina_cadastro.php";
		}
	}//fim da classe
	
?>
	