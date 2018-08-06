<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
    include "funcoes/json.php";
    include "head.html";

    //echo $_SERVER ['REQUEST_URI'];
    $paginaAtual = reqURL();
    verificaPesquisa();
    //echo $paginaAtual;

?>

<div class="ui sticky colado">
    <div class="ui inverted menu stkMenu">
        <h2 class="tituloMenu">rv</h2>
        <?php
            if ($paginaAtual=="index" || empty($paginaAtual)){
                echo '<a class="active item" href="index.php">';
            } else {
                echo '<a class="item" href="index.php">';
            }
        ?>

            Home
        </a>
        <div class="right menu">
            <form method="get" class="ui search campoPesquisarLogado" action="">
                <div class="ui icon input">
                    <input name="pesquisa" class="prompt" type="search" placeholder="Pesquise">
                    <i type class="search icon"></i>
                </div>
            </form>
            <?php

            if ($paginaAtual=="paginaUsuario"){

            echo '<a class="ui active item" href="paginaUsuario.php">';
            } else {

                echo '<a class="ui item" href="paginaUsuario.php">';
            }

            ?>
                <img id="imagemPerfilCabecalho" src="imagens/avatares/<?=$_SESSION['imagemPerfil']?>">
                <div id="espacoFotoPerfilLogado"></div>
                <div id="nomeUsuarioLogado">
                    <?=$_SESSION['nome']?>
                    <br>
                    (<?=$_SESSION['permissao']?>)
                </div>
                
            </a>
<?php
    if($_SESSION['permissao']=='administrador') {
        if ($paginaAtual=="cadastroResenhaAdmin"){
            echo '<a class="ui active item" href="cadastroResenhaAdmin.php">';
        }else{
            echo '<a class="ui item" href="cadastroResenhaAdmin.php">';
        }
?>
                <i class="pencil icon"></i>
                Cadastrar Resenha
            </a>
<?php
    } else {
        if ($paginaAtual=="cadastroResenha"){
            echo '<a class="ui active item" href="cadastroResenha.php">';
        }else{
            echo '<a class="ui item" href="cadastroResenha.php">';
        }
?>

                <i class="pencil icon"></i>
                Cadastrar Resenha
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
