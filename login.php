<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RateRev- Resenha de jogos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--IMPORTANDO O SEMANTIC-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/semantic/semantic.min.css" />
    <!--CSS DOS DESENVOLVEDORES-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/canteli.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/victor.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/guardini.css" />
    
    <!--OUTROS-->
    <link rel="shortcut icon" href="imagens/favicon.png" />
</head>
<body id="fundoLogin">
    
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
                    <a class="ui item" href="login.php">Login</a>
                    <a class="ui item" href="cadastroUsuario.php">
                        Cadastre-se
                    </a>
                </div>
              </div>
        </div>

	    <div class="central-container" id="espacoLogin">
	        <h1 id="tituloLogin">login</h1>
	        <form class="ui form" action="#" method="POST">
	            <div class="field" id="primeiroCampo">
	                <h3><label class="labelLogin">Username</label></h3>
	                <input type="text" name="login" placeholder="Ex: ana_silva">
	            </div>
	            <div class="field">
	                <h3><label class="labelLogin">Senha</label></h3>
	                <input type="password" name="senha" placeholder="Digite sua senha">
	            </div>

	            <div class="two inline field campoEspacoSuperior">
	                <div class="field" id="manterEsquerda">
	                    <div class="ui slider checkbox">
	                        <input type="checkbox" tabindex="0" class="hidden">
	                        <label>Permanecer Logado</label>
	                    </div>
	                </div>
	                <div class="field" id="esqueciDireita">
	                    <a href="" id="linkEsqueciSenha">Esqueci minha senha</a>
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
