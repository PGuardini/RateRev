<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    include "head.html";

    if(!empty($_SESSION) && $_SESSION['status']) {
        include 'cabecalhoLogado.php';
        //print_r($_SESSION);
    }else{
        function reqURL(){
            $aux = explode("/", $_SERVER['REQUEST_URI']);
            $aux_two = explode(".", end($aux));
            $paginaAtual = $aux_two[0];
            return$paginaAtual;
        }
        $paginaAtual = reqURL();
?>

<body>
    
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
                    <form method="get" class="ui search campoPesquisar">
                        <div class="ui icon input">
                            <input class="prompt" type="text" placeholder="Pesquise">
                            <i class="search icon"></i>
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
