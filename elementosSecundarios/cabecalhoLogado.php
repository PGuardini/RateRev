<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    include("head.html");
    //echo $_SERVER ['REQUEST_URI'];
    function reqURL(){
        $aux = explode("/", $_SERVER['REQUEST_URI']);
        $aux_two = explode(".", end($aux));
        $paginaAtual = $aux_two[0];
        return$paginaAtual;
    }
    $paginaAtual = reqURL();
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
            <div class="ui search campoPesquisar">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Pesquise">
                    <i class="search icon"></i>
                </div>
            </div>
        <?php
            if ($paginaAtual=="paginaUsuario"){
               echo '<a class="ui active item" href="paginaUsuario.php">';
            } else {
                echo '<a class="ui item" href="paginaUsuario.php">';
            }
        ?>
                <i class="user icon"></i>Minhas Resenhas
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
