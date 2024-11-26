<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/STYLE_TOP_CABEÇALHO.css">
    <link rel="stylesheet" href="css/STYLE_PAGE_INICIAL.css">
    <link rel="stylesheet" href="css/STYLE_SLIDES_IMAGEM_PAGA_INICIAL.css">

    <!-- ICON PESQUISA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />


    <title>FATEC tools - Inicial</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>
    <!-- INICIO TOPO SITE -->

    <?php require_once 'header.html'; ?>
    <!-- FIM TOPO SITE -->
        <main class="estilo-fonte">
        <div>
            <h1>Meu perfil</h1>
            <form id="formPerfil">
                <label for="nome_usuario">Usuário</label>
                <input type="text" name="nome_usuario" readonly><br>

                <label for="email">Email</label>
                <input type="text" name="email" readonly><br>

                <label for="senha">Senha</label>
                <input type="password" name="senha" readonly><br>

                <button type="button" id="editarBtn">Editar Perfil</button>
                <button type="button" id="finalizarBtn" disabled>Finalizar Edição</button>
            </form>
            <script>
        
                document.getElementById("editarBtn").addEventListener("click", function() {
        
                var fields = document.querySelectorAll("#formPerfil input");
        
        
                fields.forEach(function(field) {
                field.readOnly = false;
                
                });

        
            this.disabled = true;
            this.textContent = "Agora você pode editar"; 
                });

                document.getElementById("finalizarBtn").addEventListener("click", function() {
             var fields = document.querySelectorAll("#formPerfil input");

        
                fields.forEach(function(field) {
                field.readOnly = true;
                field.style.backgroundColor = "#e0e0e0"; 
                
            });

        
            this.disabled = true;
            document.getElementById("editarBtn").disabled = false;
            document.getElementById("editarBtn").textContent = "Editar Perfil"; 
            });
            </script>
        </div>
    </main>
    <!-- RODAPE -->
    <?php require_once 'footer.html'; ?>
    <!-- FIM RODAPE -->
</body>

<script src="js/menu-sanduiche.js"></script>

</html>