<?php
if(!isset($_SESSION)) {
    session_start();
}

?>

<header class="topo-site">

    <nav class="topo-nav">

        <div class="topo-direita">

            <a class="ancora-fatectools" href="/fatec-tools">
                <h4>Fatec <span>tools</span></h4>
            </a>

            <h4 class="traco-header">|</h4>

            <div class="menu-toggle" id="menu-toggle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

            <ul class="nav-links ativo" id="nav-links">
                <div class="opcoes">
                    <ul>
                        <li><a class="text-ancora" href="/fatec-tools">Início</a></li>
                        <li><a class="text-ancora" href="/fatec-tools/sobre-nos">Sobre nós</a></li>
                        <li><a class="text-ancora" href="#Cursos-disciplinas">Cursos</a></li>
                        <li><a class="text-ancora" href="#Cursos-disciplinas">Disciplinas</a></li>
                        <li><a class="text-ancora" href="#entrar-contato">Contato</a></li>
                        <li><a class="text-ancora" href="/fatec-tools/pesquisar">Pesquisar</a></li>

                        <?php if (isset($_SESSION["id_usuario"])): ?>
                            <li class="perfil-div">
                                <a href="/fatec-tools/perfil"><button class="btn-vermelho">Perfil</button></a>
                                <a href="/fatec-tools/logout"><button class="btn-vermelho">Sair</button></a>
                            </li>

                        <?php else: ?>
                            <li class="perfil-div">
                                <a href="/fatec-tools/login"><button class="btn-vermelho">Entrar</button></a>
                            </li>
                        <?php endif; ?>
                    </ul>

                </div>

            </ul>

        </div>

    </nav>
</header> 