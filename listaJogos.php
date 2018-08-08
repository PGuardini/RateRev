<?php
    session_start();
    include "elementosSecundarios/cabecalho.php";
    $jogos= arrayJogos();
?>

    <h2 class="ui horizontal divider header tituloJogo">
    	<i class="search icon"></i>
        Jogos de ação-aventura
    </h2>
    <div class="ui grid">
        <div class="ui three wide column"></div>
        <div class="ui ten wide column">
            <div class="ui segment items">
<?php

    foreach($jogos as $jogo){
        $sinopseReduzida= mb_strimwidth($jogo['sinopse'], 0, 350,'...');
?>
                <div class="item">
                    <div class="image">
                        <img src="imagens/jogos/<?=$jogo['imagem']?>">
                    </div>
                    <div class="content">
                        <a class="header" href="detalhaJogo.php?jogo=<?=$jogo['id']?>"><?=$jogo['titulo']?></a>
                        <div class="meta">
                            <span><div class="ui star rating naoAlteravel" data-rating="<?=$jogo['classificacaoMedia'];?>" data-max-rating="5"></div></span>
                        </div>
                        <div class="description">
                            <p><?=$sinopseReduzida?></p>
                        </div>
                    </div>
                </div>
                <div class="ui divider"></div>
<?php
    }
?>
            </div>
        </div>
        <div class="ui three wide column"></div>
        </div>

<?php
    include("elementosSecundarios/rodape.html");
?>