<?php
    include "elementosSecundarios/cabecalho.php";
    include "funcoes/json.php";

    $array_jogos= arrayJogos();
    $cont=0;
    $anCont=0;
    $fim= sizeof($array_jogos);

?>

    <div class="gradient">
        <h1>raterev</h1>
        <div class="clear"></div>
        <h2 class="slogan">por ventura, ação e aventura</h2>
    </div>

    <div class="clear"></div>

    <div class="ui stackable grid">

        <div class="three column row espacoSlide">

            <?php foreach($array_jogos as $pos => $jogo): ?>

            <div class="column EspacoInferiorGaleria+">
                <div class="dezPorcento">.</div>
                <div class="parado zoom">
                    <a href="detalhaJogo.php?jogo=<?=$jogo['id'] ?>">
                        <img class="indexImg" src="imagens/jogos/<?= $jogo['imagem'] ?>">
                        <div class="text-item">
                            <h2><?= $jogo['titulo'] ?></h2>
                            <div class="ui divider"></div>
                            <div class="ui star rating naoAlteravel estrelas" data-rating="<?= $jogo['classificacaoMedia'] ?>" data-max-rating="5"></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php 
                $cont++; 
                $anCont++;
                if($cont==3 && $anCont!=$fim):
            ?>
                </div>
                <div class="three column row espacoSlide">
            <?php
                $cont=0; 
                endif;
            ?>
            <?php endforeach; ?>

        </div>
    </div>  


    <div class="espacoAntesRodapeIndex">.</div>

<?php
    include("elementosSecundarios/rodape.html");
?>