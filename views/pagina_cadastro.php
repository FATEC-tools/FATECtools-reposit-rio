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

                    <form action="index.html" method="get">

                        <label for="e-mail">E-mail</label>
                        <input type="email" name="e-mail" placeholder="E-mail" required>


                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" placeholder="Usuario" required>


                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required>

                        <label for="ConfirmeSenha">Confirme sua senha</label>
                        <input type="password" name="ConfirmeSenha" placeholder="Senha" required>

                        <input class="btn-vermelho" type="submit" value="Registrar">

                    </form>

                    <p>Já tem uma conta? faça o Login <a id="fazer-login" href="pagina_login.html">Aqui</a></p>

                </div>

            </div>

        </div>
        </div>
    </main>
</body>

</html>