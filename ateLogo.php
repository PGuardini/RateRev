<?php
    session_start();
    include "elementosSecundarios/head.html";
?>

<body id="bemVindo">

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
                <a class="ui item" href="login.php">
                    <i class="user outline icon"></i>Login
                </a>
                <a class="ui item" href="cadastroUsuario.php">
                    <i class="sign in icon"></i>Cadastre-se
                </a>
            </div>
        </div>
    </div>

    <div class="centralContainerMensagem">
        <h1 class="tituloMensagem">Até logo!</h1>
        <center><i class="massive frown icon iconMensagem"></i></center>
    </div>

        <meta http-equiv="refresh" content="2; url=index.php">
    	<div class="clear"></div>

	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="css/semantic/semantic.min.js"></script>
	    <script src="js/main.js"></script>
    </body>	
</html>
