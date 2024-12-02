<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/style_pagina_cadastro_ferramenta.css">


    <title>Cadastrar Ferramenta</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">


</head>

<body>


    <?php // HEADER
    require_once "header.php";

    if (isset($_SESSION["id_usuario"])) {

        if ($_SESSION["nivel_usuario"] == 'Admin' || $_SESSION["nivel_usuario"] == 'Professor') {
            ?>

            <main class="estilo-fonte">

                <div class="container flex-center">

                    <form class="form-cadastrar-ferramenta" action="/fatec-tools/alterar-ferramenta" method="post"
                        enctype="multipart/form-data">

                        <h2>Editar Ferramenta</h2>
                        <br>

                        <div class="campos flex-lado-a-lado">
                            <div class="container-left container-left-right">

                                <div class="img-logo-ferramenta">
                                    <img class="img-cadastrar-ferramenta"
                                        src="img/ICONES_APP/<?php echo $retorno[0]->logoFerramenta; ?>" id="img">
                                    <input type="file" name="logoFerramenta" onchange="mostrar(this)">
                                </div>

                                <?php echo $msg[4]; ?>

                            </div>

                            <div class="container-right container-left-right">

                                <input type="hidden" name="id_ferramenta" value="<?php echo $retorno[0]->id_ferramenta; ?>">

                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" name="nome" value="<?php echo $retorno[0]->nome; ?>">

                                <?php echo $msg[0]; ?>

                                <label for="link">Link para download:</label>
                                <input type="url" id="link" name="link" value="<?php echo $retorno[0]->link_download; ?>">

                                <?php echo $msg[1]; ?>

                                <label for="descricao">Descrição:</label>
                                <textarea id="descricao" name="descricao" rows="7"
                                    cols="50"> <?php echo $retorno[0]->descricao; ?></textarea>

                                <?php echo $msg[2]; ?>

                                <label for="categoria">Categoria:</label>


                                <select id="categoria" name="categoria">
                                    <option value="<?php echo $retorno[0]->id_cat_ferramenta; ?>">
                                        <?php echo "{$retorno[0]->descritivo}"; ?>
                                    </option>

                                    <?php //Listar as Categorias
                                            foreach ($categorias as $dado) {

                                                echo "<option value='{$dado->id_cat_ferramenta}'>{$dado->descricao}</option>";

                                            }
                                            ?>
                                </select>

                                <?php echo $msg[3]; ?>

                            </div>

                        </div>

                        <div class="flex-lado-a-lado">
                            <input class="btn-vermelho btn-lado-a-lado" type="submit" value="Salvar Alterações">
                            <input class="btn-vermelho btn-lado-a-lado" type="reset" value="Cancelar Alterações">
                        </div>

                    </form>
                </div>
            </main>


        <?php // FOOTER
    
        } else {

            header("Location: /fatec-tools");
        }
    } else {

        header("Location: /fatec-tools/login");
    }
    require_once "footer.html";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        function mostrar(img) {
            if (img.files && img.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(300);
                };
                reader.readAsDataURL(img.files[0]);
            }
        }
    </script>

</body>

</html>