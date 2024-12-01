<?php
class UsuarioDAO extends Conexao
{
	public function __construct()
	{
		parent::__construct();
	}

	public function inserir($usuario)
	{
		$sql = "INSERT INTO usuarios (nome_usuario, email, senha, nivel_usuario) VALUES(?,?,?,?)";
		try {


			$stm = $this->db->prepare($sql);

			$stm->bindValue(1, $usuario->getNomeUsuario());
			$stm->bindValue(2, $usuario->getEmail());
			$stm->bindValue(3, $usuario->getSenha());
			$stm->bindValue(4, $usuario->getNivelUsuario());


			$stm->execute();
			$this->db = null;

			return "Usuário inserido com sucesso";

		} catch (PDOException $e) {
			echo $e->getCode();
			echo $e->getMessage();
			die();
		}
	}
	public function login($usuario)
	{
		$sql = "SELECT * FROM usuarios WHERE email = ?";
		try {
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $usuario->getEmail());

			$stm->execute();
			$this->db = null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			$this->db = null;
			echo $e->getMessage();
			echo $e->getCode();
			die();
		}
	}

	public function usuario_por_id($id_usuario)
	{
		$sql = "SELECT * FROM usuarios WHERE id_usuario = ?";

		try {

			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $id_usuario);

			$stm->execute();
			$this->db = null;

			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (PDOException $e) {
			$this->db = null;
			echo $e->getMessage();
			echo $e->getCode();
			die();
		}
	}
}
?>