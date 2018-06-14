<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RateRev- Cadastro de Usuário</title>
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
<body id="fundoCadastroUsuario">
    
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

        <div id="centralContainerCadUsuario">
	        <h1 id="tituloLogin">Cadastro de Usuário</h1>
	        <form class="ui form" action="#" method="POST">
	            <div class="required field" id="primeiroCampo">
	                <h3><i class="user icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Username</label></h3>
	                <input type="text" name="username" placeholder="Ex.: manelson">
	            </div>
                <div class="field">
	                <h3><i class="at icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">E-mail</label></h3>
	                <input type="email" name="email" placeholder="Ex.: pedrinho123@gg.com">
	            </div>
	            <div class="field espacoCadUsuario">
	                <h3><i class="lock icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Senha</label></h3>
	                <input type="password" name="senha" placeholder="Digite sua senha">
				</div>
				<div class="field espacoCadUsuario">
	                <h3><i class="check icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Confirmação de Senha</label></h3>
	                <input type="password" name="senha" placeholder="Digite novamente sua senha">
	            </div>

                <div class="field espacoCadUsuario">
                    <h3><i class="calendar alternate outline icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Nascimento</label></h3>
                    <input type="date" name="data_nasc">
                </div>

	            <div class="two inline field campoEspacoSuperior">
	                <div class="field" id="manterEsquerda">
	                    <div class="ui slider checkbox">
	                        <input type="checkbox" tabindex="0" class="hidden">
	                        <label>Aceito os termos</label>
	                    </div>
	                </div>
	            </div>

	            <div class="clear"></div>

	            <div class="field">
	                <button class="fluid ui large centered inverted standard button logarSe" type="submit">Cadastrar</button>
	            </div>
	        </form>
    	</div>

        <div class="clear"></div>
        
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="css/semantic/semantic.min.js"></script>
	<script src="js/main.js"></script>
