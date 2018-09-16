<?php
    include "elementosSecundarios/cabecalho.php";# cabecalho do site

    $array_jogos= arrayJogos(); # pega o arquivo jogos.json e coloca como um array php
    $cont=0;
    $anCont=0;
    $fim= sizeof($array_jogos);
    
    organizaJSONalfabetica('dados/jogos.json','titulo');

    if (isset($_GET['org'])) {
        if ($_GET['org'] == 1) {
            organizaJSONdecresce('dados/jogos.json','id');

        }elseif ($_GET['org'] == 2) {
            $nota = array();
    
            foreach ($array_jogos as $dado => $row) {
                $nota[$dado] = $row['classificacaoMedia'];
            }
            array_multisort($nota, SORT_DESC, $array_jogos);
        }    
    }
    

?>
<!-- fundo animado -->
    <div class="gradient">
        <h1>raterev</h1>
        <div class="clear"></div>
        <h2 class="slogan">por ventura, ação e aventura</h2>
    </div>
<!-- fim fundo animado -->

    <div class="clear"></div>

<!-- seleção da organização das resenhas -->

    <h2 class="ui horizontal divider header tituloSegmento">

<?php

        if(empty($_GET)==true){
            print('<a href="index.php"><button class="ui large button">Ordem Alfabética</button></a>');
        } else {
            print('<a href="index.php"><button class="ui grey basic large button">Ordem Alfabética</button></a>');
        }

        if(isset($_GET['org'])==true and $_GET['org']==1) {
            print('<a href="?org=1"><button class="ui large button">Recentemente Resenhados</button></a>');
        } else{
            print('<a href="?org=1"><button class="ui grey basic large button">Recentemente Resenhados</button></a>');
        }

        if(isset($_GET['org'])==true and $_GET['org']==2){
            print('<a href="?org=2"><button class="ui large button">Melhores Avaliados</button></a>');
        } else {
            print('<a href="?org=2"><button class="ui grey basic large button">Melhores Avaliados</button></a>');
        }
            
    


?>
    </h2>
<!-- seleção da organização das resenhas -->

<!-- lista do jogos -->
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
                    if($cont==3 && $anCont!=$fim){
                
                        echo '</div>
                        <div class="three column row espacoSlide">';
                
                        $cont=0; 
                    }
             endforeach; 
                ?>

        </div>
    </div>  
<!-- fim da lista de jogos -->

    <div class="espacoAntesRodapeIndex">.</div>

<?php
   
    include("elementosSecundarios/rodape.html");# rodape do site
?>