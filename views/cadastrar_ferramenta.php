<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/fatec-tools/cadastrar-ferramenta" method="post" enctype="multipart/form-data">

        <label for="nomeFerramenta">Nome:</label>
        <input type="text" id="nomeFerramenta" name="nome" required><br><br>

        <label for="linkDonwload">Link para download:</label>
        <input type="url" id="linkDonwload" name="link" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4" cols="50" required></textarea><br><br>

        <label for="categoria">Categoria:</label>

        <select id="categoria" name="categoria">
            <option value="0">Escolha uma categoria</option>

            <?php

            foreach ($retorno as $dado) {

                echo "<option value='{$dado->id_cat_ferramenta}'>{$dado->descricao}</option>";
            }
            ?>

        </select><br><br>

        <input type="file" name="logoFerramenta"  onchange="mostrar(this)">

        <br>

        <img src="" id="img">

        <br>

        <input type="submit" value="Adicionar Ferramenta">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        function mostrar(img) {
            if (img.files && img.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img')
                        .attr('src', e.target.result)
                        .width(170)
                        .height(100);
                };
                reader.readAsDataURL(img.files[0]);
            }
        }
    </script>

</body>

</html>