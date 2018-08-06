<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RateRev- Recuperação de senha</title>
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
                    <a class="ui item" href="login.php">
                        <i class="user outline icon"></i>Login
                    </a>
                    <a class="ui item" href="cadastroUsuario.php">
                        <i class="sign in icon"></i>Cadastre-se
                    </a>
                </div>
              </div>
        </div>

	    <div id="centralContainerLogin">
	        <h1 id="tituloLogin">Recupere sua senha</h1>
	        <form class="ui form" action="#" method="POST">
	            <div class="field" id="primeiroCampo">
	                <h3><i class="envelope open icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Insira o código enviado por e-mail</label></h3>
	                <input type="text" name="codVerificacao" placeholder="Ex: A12BC3">
	            </div>

	            <div class="clear"></div>

	            <div class="field">
                <a href="#">
	                <button class="fluid ui large centered inverted standard button logarSe" type="submit">Enviar</button>
                </a>
	            </div>
	        </form>
    	</div>

    	<div class="clear"></div>

	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="css/semantic/semantic.min.js"></script>
	    <script src="js/main.js"></script>
    </body>	
</html>
