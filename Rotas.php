<?php

class Rotas
{

    public array $rotas = array();

    public function get(string $nome_rota, array $dados)
    {

        $this->rotas["GET"][$nome_rota] = $dados;

    }

    public function post(string $nome_rota, array $dados)
    {

        $this->rotas["POST"][$nome_rota] = $dados;

    }

    public function verificar_rota($metodo, $nome_rota)
    {

        if (isset($this->rotas[$metodo][$nome_rota])) {

            $dados = $this->rotas[$metodo][$nome_rota];

            $method = $dados[1];

            $obj = new $dados[0]();

            return $obj->$method();

        }

        exit("Rota Invalida");

    }

}//fim classe

//instaciar um obj da classe Rotas
$route = new Rotas();

//pode ser qlqr nome para esse controller
$route->get("/",                    [InicioController::class, "inicio"]);
//define um nome para a rota        //chama o controller     //chama um metodo



$route->get("/desenvolvimento-web", [DesenvolvimentoWebController::class, "inicio"]);
$route->get("/design-web", [DesignWebController::class, "inicio"]);
$route->get("/EM_BREVE", [EmBreveController::class, "inicio"]);

$route->get("/pesquisar", [PesquisarController::class, "inicio"]);
$route->post("/pesquisar", [PesquisarController::class, "inicio"]);


$route->get("/login", [LoginController::class, "login"]);
$route->get("/cadastro", [LoginController::class, "cadastrar"]);
$route->get("/redefinir-senha", [LoginController::class, "redefinir"]);

$route->get("/sobre-nos", [SobreNosController::class, "inicio"]);


$route->get("/pagina-aplicativo", [PaginaAppController::class, "inicio"]);
$route->get("/pagina-perfil", [PerfilController::class, "inicio"]);


$route->get("/cadastrar-ferramenta", [FerramentaController::class, "inserir"]);
$route->post("/cadastrar-ferramenta", [FerramentaController::class, "inserir"]);

?>