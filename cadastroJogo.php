<?php
    session_start();
    include "elementosSecundarios/cabecalho.php";
?>

    <h2 class="ui horizontal divider header tituloJogo">
    	<i class="gamepad icon"></i>
        Cadastro de Jogo
    </h2>

    <div class="clear"></div>

    <div class="ui grid">
        <div class="ui four wide column">

        </div>
        <div class="ui eight wide column espacoRodapeForm">
            <form class="ui form">
                <h3 class="labelCadastraResenha">Nome do Jogo:</h3>
                <div class="field">
                    <input type="text" placeholder="Ex.: God of War">
                </div>
                <div class="field">
                    <h2 class="tituloLabelResenha">Sinopse</h2>
                    <textarea rows="16" class="cadastroResenha" placeholder="Neste campo, escreva a sinopse OFICIAL do jogo."></textarea>
                </div>

                <div class="two fields">
                	<div class="field">
                		<div class="ui checkbox">
							<input type="checkbox" name="example">
							<label>As informações publicadas são reais e ainda não constam na base de dados do RateRev.</label>
						</div>
					</div>

					<div class="field">
						<button class="ui small animated fade green right floated button" tabindex="0">
				  			<div class="visible content">Enviar Jogo</div>
				  			<div class="hidden content">
				    			<i class="check icon"></i>
				  			</div>
						</button>
                	</div>
                </div>

            </form>
        </div>
        <div class="clear"></div>
        <div class="ui four wide column">
        
        </div>
    </div>

<?php
    include("elementosSecundarios/rodape.html");
?>