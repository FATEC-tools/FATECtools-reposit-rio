<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/STYLE_PAGE_PESQUISA.css" />
    <link rel="stylesheet" href="css/STYLE_PAGE_INICIAL.css">
    <link rel="stylesheet" href="css/STYLE_TOP_CABEÇALHO.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="png" href="img/ICON_SITE_FATECTOOLS.png">

    <!-- ICON PESQUISA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />


    <title>FATEC tools - Pesquisa</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>
    <!-- INICIO TOPO SITE -->
    <?php require_once 'header.php'; ?>
    <!-- FIM TOPO SITE -->

    <!-- PESQUISAR -->
    <main>
        <form class="form-pesquisar" style="background-color: #1c2957;" action="/fatec-tools/pesquisar" method="post">

            <input type="text" style="margin: 0;" placeholder="Pesquisar..." name="search">

            <button type="submit"><i class="fa fa-search"></i></button>

        </form>


        <article class="inicio-aplicativos-relevantes estilo-fonte">

            <?php
            if (isset($_GET)) {
            ?>

                <h2>Sugestões para você</h2>

                <div class="app-relevante flex-lado-quebra">

                    <div class="btn-app">
                        <a href="PAGE_APP_VSCODE.html"><img src="img/ICONES_APP/visualcode.png" alt="imagem do site ou app">
                            <h3>Visual Studios <br>Code</h3>
                        </a>
                    </div>

                    <div class="btn-app">
                        <a href="PAGE_APP_VISUALG.html"><img src="img/ICONES_APP/visualg.webp" alt="imagem do site ou app">
                            <h3>VisuALG</h3>
                        </a>
                    </div>

                    <div class="btn-app">
                        <a href="PAGE_APP_BRMODELO.html"><img src="img/ICONES_APP/brmodelo.jpg" alt="imagem do site ou app">
                            <h3>brModelo</h3>
                        </a>
                    </div>

                    <div class="btn-app">
                        <a href="PAGE_APP_FIGMA.html"><img src="img/ICONES_APP/figma.webp" alt="imagem do site ou app">
                            <h3>Figma</h3>
                        </a>
                    </div>

                    <div class="btn-app">
                        <a href="PAGE_APP_ORACLE.html"><img src="img/ICONES_APP/oracle.png" alt="imagem do site ou app">
                            <h3>Oracle</h3>
                        </a>
                    </div>

                    <div class="btn-app">
                        <img src="img/ICONES_APP/git.png" alt="imagem do site ou app">
                        <h3>Git</h3>
                    </div>

                    <div class="btn-app">
                        <a href="PAGE_APP_ORACLE.html"><img src="img/ICONES_APP/oracle.png" alt="imagem do site ou app">
                            <h3>Oracle</h3>
                        </a>
                    </div>

                    <div class="btn-app">
                        <img src="img/ICONES_APP/aobe color.png" alt="imagem do site ou app">
                        <h3>Adobe Color</h3>
                    </div>
                    <div class="btn-app">
                        <img src="img/ICONES_APP/grid calculator.png" alt="imagem do site ou app">
                        <h3>Grid Calculator</h3>
                    </div>
                    <div class="btn-app">
                        <img src="img/ICONES_APP/Shape Type.png" alt="imagem do site ou app">
                        <h3>Shape Type</h3>
                    </div>
                    <div class="btn-app">
                        <img src="img/ICONES_APP/Kern Type.png" alt="imagem do site ou app">
                        <h3>Kern Type</h3>
                    </div>
                    <div class="btn-app">
                        <img src="img/ICONES_APP/the bezier game.png" alt="imagem do site ou app">
                        <h3>The Bézier Game</h3>
                    </div>

                </div>

            <?php
            }

            if ($_POST) {
            ?>



            <?php }
            ?>

        </article>

    </main>

    <!-- RODAPE -->
    <?php require_once 'footer.html'; ?>

</body>

<script src="js/menu-sanduiche.js"></script>

</html>