<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/STYLE_TOP_CABEÇALHO.css">
    <link rel="stylesheet" href="css/style_pagina_sobre_nos.css">

    <!-- ICON PESQUISA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />


    <title>FATEC tools - Sobre Nós</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>
    <!-- INICIO TOPO SITE -->
    <?php require_once 'header.html'; ?>
    <!-- FIM TOPO SITE -->


    <!-- CONTEUDO PRINCIPAR -->
    <main>
        <!-- ARTIGO DO OBJETIVO DO FATEC TOOLS -->
        <article class="section-red objetivo">
            <div class="left-objetivo">
                <img src="img/FOTO-COLABS/Group 11.png" alt="Logo FATEC tools">
            </div>

            <div class="right-objetivo">
                <h1>Objetivo Fatec <span>tools</span></h1>
                <p>
                    o FATEC tools tem a finalidade de ser um site para primeiros contatos com as ferramentas que os
                    alunos da fatec usarão ao longo do curso, o FATEC tools não fica preso somente para os alunos como
                    também para qualquer pessoa não aluno.
                </p>
            </div>
        </article>

        <!-- ARTIGO DOS CARDS DOS COLABORADORES -->
        <article class="colaboradores">
            <h1>Colaboradores</h1>

            <div class="card-colabs">
                <div class="colab-red colabs">
                    <div class="left-colab">
                        <img src="img/FOTO-COLABS/LOGO_FATECTOOLS.png" alt="">
                    </div>

                    <div class="right-colab">

                        <h1>Amauri Barbieri</h1>

                        <p><a href="https://github.com/Flaritos1" target="_blank">GitHub</a>
                            |
                            <a href="" target="_blank">LinkedIn</a>
                        </p>
                    </div>
                </div>

                <div class="colab-blue colabs">
                    <div class="left-colab">
                        <img src="img/FOTO-COLABS/CALABS-FOTO(4).jfif" alt="">
                    </div>
                    <div class="right-colab">

                        <h1>Lucas Nono</h1>

                        <p>
                            <a href="https://github.com/LucassEduardoBragaNono" target="_blank">GitHub</a>
                            |
                            <a href="https://www.linkedin.com/in/lucas-nono-44b6282b5/" target="_blank">LinkedIn</a>
                        </p>
                    </div>
                </div>

                <div class="colab-blue colabs .colab-red-alternar">
                    <div class="left-colab">
                        <img src="img/FOTO-COLABS/CALBAS-FOTO (1).jpg" alt="">
                    </div>
                    <div class="right-colab">

                        <h1>Vinicius Gimenes</h1>

                        <p>
                            <a href="https://github.com/ViniciusGimenesdosSantos" target="_blank">GitHub</a>
                            |
                            <a href="" target="_blank">LinkedIn</a>
                        </p>
                    </div>
                </div>

                <div class="colab-red colabs">

                    <div class="left-colab">
                        <img src="img/FOTO-COLABS/CALBAS-FOTO (3).jpg" alt="">
                    </div>
                    <div class="right-colab">

                        <h1>Vinicius Nascimento</h1>

                        <p>
                            <a href="https://github.com/vnicus" target="_blank">GitHub</a>
                            |
                            <a href="https://www.linkedin.com/in/viniciussilvanascimento/" target="_blank">LinkedIn</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <!-- RODAPE -->
    <?php require_once 'footer.html'; ?>
    
</body>

<script src="js/menu-sanduiche.js"></script>

<script type="text/javascript">
    function Define_Colabs_Colors() {

        if (window.innerWidth < 1550) {
            let indice = 0;

            const cores_mobile = [
                "linear-gradient(-90deg, #840C15 10%, #BA2221 40%)",
                "linear-gradient(-90deg, #1c2957 10%, #2c4ab6 40%)"
            ];

            document.querySelectorAll(".colabs").forEach(item => {

                item.style.background = cores_mobile[indice];
                indice = (indice > 0) ? 0 : 1;

            });

        } else {

            let contador = 0;

            const cores_desktop = [
                "linear-gradient(-90deg, #840C15 10%, #BA2221 40%)",
                "linear-gradient(-90deg, #1c2957 10%, #2c4ab6 40%)",
                "linear-gradient(-90deg, #1c2957 10%, #2c4ab6 40%)",
                "linear-gradient(-90deg, #840C15 10%, #BA2221 40%)",
                "linear-gradient(-90deg, #840C15 10%, #BA2221 40%)",
                "linear-gradient(-90deg, #1c2957 10%, #2c4ab6 40%)",
                "linear-gradient(-90deg, #840C15 10%, #BA2221 40%)"
            ];

            document.querySelectorAll(".colabs").forEach(item => {

                item.style.background = cores_desktop[contador];
                contador++;

            });
        }
    }

    window.addEventListener("load", Define_Colabs_Colors);
    window.addEventListener("resize", Define_Colabs_Colors);    
</script>



</html>