<?php
    session_start();
    include "elementosSecundarios/cabecalhoLogado.php";
    acessoNegado();
    $jogos = arrayJogos();
?>

    <h2 class="ui horizontal divider header tituloJogo">
        <i class="pencil alternate icon"></i>
        Cadastro de Resenha
    </h2>

    <div class="clear"></div>

    <div class="ui grid">
        <div class="ui four wide column">

        </div>
        <div class="ui eight wide column espacoRodapeForm">
            <form class="ui form" action="processaResenha.php" method="POST">
                <h3 class="labelCadastraResenha">Jogo:</h3>
                <div class="two fields">
                    <div class="fifteen wide field">
                        <select class="ui fluid search dropdown" name="jogo">
                            <option value="">Jogo</option>
                            <?php foreach ($jogos as $jogo): ?>
                                <option value=<?=$jogo['id']?>><?= $jogo['titulo']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="two wide field">
                        <button class="ui animated button botaoCriar" tabindex="0">
                            <div class="visible content">Criar</div>
                            <div class="hidden content">
                                <i class="plus icon"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="sixteen wide field">
                    <h3 class="labelCadastraResenha labelEspacoAcima">Título da Resenha:</h3>
                    <input type="text" placeholder="Escolha um título que chame a atenção dos leitores!" name="titulo">
                </div>
                  <div class="field">
                      <h3 class="labelCadastraResenha labelEspacoAcima">Avaliação:</h3>
                      <div class="ui massive star rating formStar"  data-rating="0" data-max-rating="5"></div>
                  </div>
                  <div class="field">
                      <div class="inline field">
                          <div class="ui toggle checkbox">
                              <input type="checkbox" name="checkAdmin" class="hidden">
                              <label id="postarUser">Postar como usuário</label>
                          </div>
                      </div>
                  </div>

                <div class="field">
                    <h2 class="tituloLabelResenha">Resenha</h2>
                    <textarea rows="22" class="cadastroResenha" name="resenha"></textarea>
                </div>

                <div class="two fields">
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="example">
                            <label>A resenha foi criada por mim e não insulta outras pessoas.</label>
                        </div>
                    </div>

                    <div class="field">
                        <button class="ui small animated fade green right floated button" tabindex="0">
                            <div class="visible content">Enviar Resenha</div>
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
include "elementosSecundarios/rodape.html";
?>