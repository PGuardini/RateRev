<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    include "head.html";

    if(!empty($_SESSION) && $_SESSION['status']) {
        include 'cabecalhoLogado.php';
        //print_r($_SESSION);
    }else{
        include "funcoes/json.php";
        $paginaAtual = reqURL();
        verificaPesquisa();
?>

<body
<?php
    if($paginaAtual=='resposta'){
        print(' class="resposta"');
    }
?>
>
    
        <div class="ui sticky colado">
            <div class="ui inverted menu stkMenu">
                <h2 class="tituloMenu">rv</h2>
        <?php
            if ($paginaAtual=='index' || empty($paginaAtual)){
                echo '<a class="active item" href="index.php">';
            }else{
                echo '<a class="item" href="index.php">';
            }
        ?>
                  Home
                </a>
                <div class="right menu">
                    <form method="get" class="ui search campoPesquisar" action="">
                        <div class="ui icon input">
                            <input name="pesquisa" class="prompt" type="search" placeholder="Pesquise">
                            <i type class="search icon"></i>
                        </div>
                    </form>
                    <a class="ui item" href="login.php">
                        <i class="user outline icon"></i>Login
                    </a>
                    <a class="ui item" href="cadastroUsuario.php">
                        <i class="sign in icon"></i>Cadastre-se
                    </a>
                </div>
              </div>
        </div>

<?php
    }

?>
