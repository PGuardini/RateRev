<?php
    include "elementosSecundarios/head.html";
?>
<body id="fundoLogin">
    
        <div class="ui sticky colado">
            <div class="ui inverted menu stkMenu">
                <h2 class="tituloMenu">rv</h2>
                <a class="ui item" href="index.php">
                  Home
                </a>
                <div class="right menu">
                	<div class="ui search campoPesquisar">
                        <div class="ui icon input">
                            <input class="prompt" type="text" placeholder="Pesquise">
                            <i class="search icon"></i>
                        </div>
                    </div>
                    <a class="ui active item" href="login.php">
                        <i class="user outline icon"></i>Login
                    </a>
                    <a class="ui item" href="cadastroUsuario.php">
                        <i class="sign in icon"></i>Cadastre-se
                    </a>
                </div>
              </div>
        </div>

	    <div id="centralContainerLogin">
	        <h1 id="tituloLogin">login</h1>
	        <form class="ui form" action="processaUsuario.php?acao=login" method="POST">
	            <div class="field" id="primeiroCampo">
	                <h3><i class="user icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Username</label></h3>
	                <input type="text" name="login" placeholder="Ex: ana_silva" required>
	            </div>
	            <div class="field">
	                <h3><i class="lock icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Senha</label></h3>
	                <input type="password" name="senha" placeholder="Digite sua senha" required>
	            </div>

	            <div class="two inline field campoEspacoSuperior">
	                <div class="field" id="manterEsquerda">
	                    <div class="ui slider checkbox">
	                        <input type="checkbox" tabindex="0" class="hidden">
	                        <label>Permanecer Logado</label>
	                    </div>
	                </div>
	                <div class="field" id="esqueciDireita">
	                    <a href="recuperaSenhaEmail.php" id="linkEsqueciSenha">Esqueci minha senha</a>
	                </div>
	            </div>

	            <div class="clear"></div>

	            <div class="field">
	                <button class="fluid ui large centered inverted standard button logarSe" type="submit">Logar-se</button>
	            </div>
	        </form>
    	</div>

    	<div class="clear"></div>

	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="css/semantic/semantic.min.js"></script>
	    <script src="js/main.js"></script>
    </body>	
</html>
