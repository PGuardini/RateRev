<?php
    include "elementosSecundarios/head.html";
?>
<body id="fundoCadastroUsuario">
    
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
                    <a class="ui item" href="login.php">
                        <i class="user outline icon"></i>Login
                    </a>
                    <a class="ui active item" href="cadastroUsuario.php">
                        <i class="sign in icon"></i>Cadastre-se
                    </a>
                </div>
              </div>
        </div>

        <div id="centralContainerCadUsuario">
	        <h1 id="tituloLogin">Cadastro de Usuário</h1>
	        <form class="ui form usuario" action="processaUsuario.php?acao=cadastro" method="POST" enctype="multipart/form-data">
	            <div class="two fields" id="primeiroCampo">
                    <div class="field">
	                   <h3><i class="user icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Username</label></h3>
	                   <input type="text" name="nome" placeholder="Ex.: manelson" required>
                    </div>

                    <div class="field">
	                   <h3><i class="at icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">E-mail</label></h3>
	                   <input type="email" name="email" placeholder="Ex.: pedrinho123@gg.com" required>
	               </div>
                </div>
	            <div class="two fields espacoCadUsuario">

                    <div class="field">
	                   <h3><i class="lock icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Senha</label></h3>
	                   <input type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="field">
                        <h3><i class="check icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Confirmação de Senha</label></h3>
                        <input type="password" name="confirmacaoSenha" placeholder="Digite novamente sua senha" required>
                    </div>
				</div>
				

                <div class="two fields espacoCadUsuario">
                    <div class="field">
                        <h3><i class="calendar alternate outline icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Nascimento</label></h3>
                        <input type="date" name="data_nasc" required>
                    </div>
                    <div class="field">
                        <h3><i class="camera icon iconLoginCadUsuario"></i><label class="labelLoginCadUsuario">Foto de Perfil</label></h3>
                        <input type="file" name="foto_perfil">
                    </div>
                </div>

	            <div class="two inline field campoEspacoSuperior">
	                <div class="field" id="manterEsquerda">
	                    <div class="ui slider checkbox">
	                        <input type="checkbox" tabindex="0" class="hidden" required>
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
