
<body>

<div class="ui sticky colado">
    <div class="ui inverted menu stkMenu">
        <h2 class="tituloMenu">rv</h2>
        <a class="active item" href="index.php">
            Home
        </a>
        <div class="right menu">
            <div class="ui search campoPesquisar">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Pesquise">
                    <i class="search icon"></i>
                </div>
            </div>
            <a class="ui item" href="paginaUsuario.php">
                <i class="user icon"></i>Minhas Resenhas
            </a>
<?php
    if($_SESSION['permissao']=='administrador') {
?>
            <a class="ui item" href="cadastroResenhaAdmin.php">
                <i class="pencil icon"></i>Cadastrar Resenha
            </a>
<?php
    } else {
?>
            <a class="ui item" href="cadastroResenha.php">
                <i class="pencil icon"></i>Cadastrar Resenha
            </a>
<?php
    }
?>
            <a class="ui item" href="processaUsuario.php?acao=sair">
                <i class="sign out icon"></i>Sair
            </a>
        </div>
    </div>
</div>
