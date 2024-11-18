<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_pagina_cadastro.css">

    <title>FATEC tools - Recuperação de senha</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>

    <main>

        <div class="flex-center">

            <div class="card_login">

                <h1>Recuperação de senha</h1>

                <div class="fielholder">

                    <form action="pagina_login.html" method="get">

                        <label for="e-mail">E-mail</label>
                        <input type="email" name="e-mail" placeholder="E-mail" required>

                        <label for="senha">Digite sua nova senha</label>
                        <input type="password" name="senha" placeholder="Senha" required>

                        <label for="ConfirmeSenha">Confirme sua senha</label>
                        <input type="password" name="ConfirmeSenha" placeholder="Senha" required>

                        <input class="btn-vermelho" type="submit" value="Mudar senha">

                    </form>

                </div>

                <p>voltar para tela de <a id="fazer-login" href="pagina_login.html">Login</a></p>

            </div>

        </div>

    </main>

</body>

</html>