<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style_pagina_perfil.css">

    <!-- ICON PESQUISA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />


    <title>FATEC tools - Inicial</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>
    <!-- INICIO TOPO SITE -->

    <?php

    require_once 'header.php';

    //verificar se o usuario esta logado - sempre apos ao header
    if (!isset($_SESSION["id_usuario"])) {
        header("Location: /fatec-tools/login");
    }

    $usuarioDAO = new UsuarioDAO();

    $usuario = $usuarioDAO->usuario_por_id($_SESSION["id_usuario"]);
    ?>


    <main class="estilo-fonte">

        <div class="container flex-center">

            <form class="form-perfil" action="" method="" enctype="multipart/form-data">

                <h2>Perfil Usuario</h2>
                <br>

                <label for="nome_usuario">Usuário</label>
                <input type="text" name="nome_usuario" id="nome_usuario" <?php echo "value='{$usuario->nome_usuario}'" ?> readonly><br>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" <?php echo "value='{$usuario->email}'" ?> readonly><br>

                <div class="flex-lado-a-lado">

                    <div class="flex-collum container-left">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" readonly><br>
                    </div>

                    <div class="flex-collum container-right">
                        <label for="nivelUsuario">Nivel Usuario</label>
                        <input type="text" name="nivelUsuario" id="nivelUsuario" <?php echo "value='{$usuario->nivel_usuario}'" ?>readonly><br>
                    </div>
                </div>


                <button type="button" class="btn btn-vermelho" id="editarBtn">Editar Perfil</button>
                <button type="button" class="btn btn-vermelho" id="salvarBtn" style="display: none;">Salvar
                    Alterações</button>




            </form>

        </div>



        <script>

            document.getElementById('editarBtn').addEventListener('click', function () {

                document.getElementById('nome_usuario').removeAttribute('readonly');
                document.getElementById('email').removeAttribute('readonly');
                document.getElementById('senha').removeAttribute('readonly');


                document.getElementById('salvarBtn').style.display = 'inline-block';
                document.getElementById('editarBtn').style.display = 'none';
            });


            document.getElementById('salvarBtn').addEventListener('click', function () {

                document.getElementById('nome_usuario').setAttribute('readonly', true);
                document.getElementById('email').setAttribute('readonly', true);
                document.getElementById('senha').setAttribute('readonly', true);


                this.style.display = 'none';
                document.getElementById('editarBtn').style.display = 'inline-block';

            });
        </script>

    </main>
    <div style="height: 80px;"></div>
    <!-- RODAPE -->
    <?php require_once 'footer.html'; ?>
    <!-- FIM RODAPE -->
</body>

<script src="js/menu-sanduiche.js"></script>

</html>