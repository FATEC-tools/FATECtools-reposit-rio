<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_pagina_cadastro.css">

    <title>FATEC tools - Cadastro</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>
    <main>
        <div class="flex-center">

            <div class="card_login">

                <h1>Cadastro</h1>

                <div class="fielholder">

                    <form action="/fatec-tools/inserir_usuario" method="post">

                        <label for="nome_usuario">Usuario</label>
                        <input type="text" name="nome_usuario" placeholder="Usuario" required value="<?php echo isset($_POST['nome_usuario'])?$_POST['nome_usuario']:''?>">
                        

                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail" required value="<?php echo isset($_POST['email'])?$_POST['email']:''?>">
                        

                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required value="<?php echo isset($_POST['senha'])?$_POST['senha']:''?>">
                        

                        <label for="ConfirmeSenha">Confirme sua senha</label>
                        <input type="password" name="ConfirmeSenha" placeholder="Senha" required value="<?php echo isset($_POST['ConfirmeSenha'])?$_POST['ConfirmeSenha']:''?>">
                        

                        <input class="btn-vermelho" type="submit" value="Registrar">

                    </form>

                    <p>Já tem uma conta? faça o Login <a id="fazer-login" href="/fatec-tools/login">Aqui</a></p>

                </div>

            </div>

        </div>
        </div>
    </main>
</body>

</html>