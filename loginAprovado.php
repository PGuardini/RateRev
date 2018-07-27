<?php
    session_start();
    if(empty($_SESSION)==true && $_SESSION['status']){
        header('Location: acessoNegado.php');
    } else {
        include "elementosSecundarios/head.html";

?>

<body id="bemVindo">

    <div class="ui sticky colado">
        <div class="ui inverted menu stkMenu">
            <h2 class="tituloMenu">rv</h2>
            <a class="item" href="index.php">
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
                <a class="ui item" href="cadastroResenha.php">
                    <i class="pencil icon"></i>Cadastrar Resenha
                </a>
                <a class="ui item" href="processaUsuario.php?acao=sair">
                    <i class="sign out icon"></i>Sair
                </a>
            </div>
        </div>
    </div>

    <div class="centralContainerMensagem">
        <h1 class="tituloMensagem">Bem vindo, <?=$_SESSION['nome']?>!</h1>
        <center><i class="huge heart icon  iconMensagem"></i></center>
        <h2 class="subMensagem">Sua permissão é: <?=$_SESSION['permissao']?></h2>
    </div>

        <meta http-equiv="refresh" content="2; url=index.php">
    	<div class="clear"></div>

	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="css/semantic/semantic.min.js"></script>
	    <script src="js/main.js"></script>
    </body>	
</html>
<?php
    }
?>