<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/style_pagina_listar_ferramentas.css">


    <title>Listar Ferramentas</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">


</head>

<body>


    <?php // HEADER
    require_once "header.php";
    ?>

    <main class="estilo-fonte">

        <div class="container flex-center">

            <h2>Lista de Ferramentas adicionadas</h2>

            <table class="table-listar-ferramentas">

                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Situação</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($retorno as $dado) {
                        echo
                            "
                        <tr>
                        <td><img src='img/ICONES_APP/{$dado->logoFerramenta}' alt='Logo da Ferramenta' width='70px'></td>
                        <td>{$dado->nome}</td>
                        <td>{$dado->descritivo}</td>
                        <td>{$dado->situacao}</td>
                        <td>
                        <a href='/fatec-tools/alterar_ferramenta?id={$dado->id_ferramenta}' class='btn'>Editar</a>";

                        if ($dado->situacao == "Ativa") {
                            //inativar
                            echo "<a href='/fatec-tools/alterar-situacao?idferramenta={$dado->id_ferramenta}&situacao=Inativa' class='btn btn-inativar'>Inativar</a>";
                        } else {
                            //ativar
                            echo "<a href='/fatec-tools/alterar-situacao?idferramenta={$dado->id_ferramenta}&situacao=Ativa' class='btn btn-ativar'>Ativar</a>";
                        }

                        echo "</td></tr>";

                    }
                    ?>

                </tbody>

            </table>

        </div>

    </main>

    <?php // footer
    require_once "footer.html";
    ?>


</body>

</html>