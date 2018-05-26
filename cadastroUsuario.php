<?php
    include 'html/cabecalho.html';
?>
        <div class="central-container" id="espacoLogin">
	        <h1 id="tituloLogin">Cadastro de Usuário</h1>
	        <form class="ui form" action="#" method="POST">
	            <div class="field" id="primeiroCampo">
	                <h3><label class="labelLogin">Username</label></h3>
	                <input type="text" name="username" placeholder="Ex.: manelson">
	            </div>
                <div class="field">
	                <h3><label class="labelLogin">E-mail</label></h3>
	                <input type="email" name="email" placeholder="Ex.: pedrinho123@gg.com">
	            </div>
	            <div class="field">
	                <h3><label class="labelLogin">Senha</label></h3>
	                <input type="password" name="senha" placeholder="Digite sua senha">
	            </div>

                <div class="field">
                    <h3><label class="labelLogin">Nascimento</label></h3>
                    <div class="three fields">
                        <div class="field">
                            <input type="number" name="dia" min="1" max="31" placeholder="dia">
                        </div>
                        <div class="field">
                            <input type="number" name="mes" min="1" max="12" placeholder="mes">
                        </div>
                        <div class="field">
                            <input type="number" name="ano" min="1920" max="2018" placeholder="ano">
                        </div>
                    </div>
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


<?php
    include 'html/rodape.html';
?>