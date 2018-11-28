<?php
    session_start();
    include("elementosSecundarios/cabecalho.php");
    $arrayReacoes= arrayReacoes();
    $array_jogos= arrayJogos();
    $jogoEncontrado= array();
    $estaCurtido= array();
    $estaDescurtido= array();

    if (isset($_GET['jogo'])) {

        $idJogo= $_GET['jogo'];

        foreach ($array_jogos as $jogo) {
            if ($jogo['id']==$idJogo) {
                $jogoEncontrado= $jogo;
            }
        }
    }

    $resenhasJogo= buscaResenhaJogo($idJogo);

        if(!empty($_SESSION) && isset($_GET['reacao'])) {
            switch ($_GET['reacao']) {

            case "curtir":
                    curtir();                
                break;
            
            case 'tirarCurtir':
                    tirarCurtir();
                break;

            case 'descurtir':
                    descurtir();
                break;

            case 'tirarDescurtir':
                    tirarDescurtir();
                break;
            }
        }
    


?>
        <h2 class="ui horizontal divider header tituloJogo">
            <?=$jogoEncontrado['titulo'];?>
        </h2>

    <div class="ui grid">

        <div class="clear"></div>

<div class="ui container">
    <div class="ui grid">
        <div class="ui five wide column">
            <div class="ui card">
                <div class="ui centered image">
                    <img src="imagens/jogos/<?=$jogoEncontrado['imagem'];?>">
                </div>
                <div class="content">
                    <a class="header classificacaoBox">Classificação Média</a>
                    <div class="ui star rating naoAlteravel" data-rating="<?=$jogoEncontrado['classificacaoMedia'];?>" data-max-rating="5"></div>
                </div>
            </div>                
        </div>
        <div class="ten wide column justificado">
            <p><?=$jogoEncontrado['sinopse'];?></p>
        </div>
    </div>
</div>
</div>

<h2 class="ui horizontal divider header tituloSegmento">
Resenhas
</h2>

<?php 

    foreach($resenhasJogo as $resenha){ 
        $dadosAutor= buscaUsuario($resenha['idUsuario']);
        $comentariosResenha= buscaComentariosResenha($resenha['idResenha']);
        $numeroReacoes[$resenha['idResenha']]= contaReacoes($resenha['idResenha']);

        if(isset($_SESSION['idUsuario'])){
            $estaCurtido[$resenha['idResenha']]= estaReagido($_SESSION['idUsuario'],$resenha['idResenha'],'curtida');
            $estaDescurtido[$resenha['idResenha']]= estaReagido($_SESSION['idUsuario'], $resenha['idResenha'],'descurtida');
        }

?>

<div class="ui grid">
<div class="three wide column"></div>
<div class="one wide column">
    <div class="espacoUsuario">
        <img class="ui circular big image" src="imagens/avatares/<?=$dadosAutor['imagemPerfil']?>">
    </div>

    <section class="username">@<?=$dadosAutor['nome']?></section>
</div>
<div class="ten wide column">
    <div class="talk-bubble tri-right left-in">
        <div class="talktext">
            <h3 class="tituloResenha"><?= $resenha['titulo']?></h3>
            <div class="ui divider"></div>
            <div class="espacoComecoPost"></div>
            <p><?= $resenha['resenha']?></p>
            <div class="espacoFimPost"></div>
            <div class="ui divider"></div>

<?php 
        if (empty($_SESSION)) {
?>
<button class="ui disabled button label corLabelLaranja naoClicavel">
    <i class="thumbs down icon"></i>
    <?= $numeroReacoes[$resenha['idResenha']]['descurtidas']?>
</button></a>
<button class="ui disabled button label corLabelLaranja naoClicavel">
    <i class="thumbs up icon"></i>
    <?= $numeroReacoes[$resenha['idResenha']]['curtidas']?>
</button>

<?php
        } else{ 
            if($estaDescurtido[$resenha['idResenha']]==false) {
?>
            <a href="?jogo=<?=$idJogo?>&reacao=descurtir&resenha=<?=$resenha['idResenha']?>"><button class="ui button label corLabelLaranja">
                <i class="thumbs down icon"></i>
                    <?= $numeroReacoes[$resenha['idResenha']]['descurtidas']?>
            </button></a>
<?php
            } if($estaDescurtido[$resenha['idResenha']]== true) {
?>

            <a href="?jogo=<?=$idJogo?>&reacao=tirarDescurtir&resenha=<?=$resenha['idResenha']?>"><button class="ui button label corLabelLaranja">
                <i class="thumbs down icon"></i>
                    <?= $numeroReacoes[$resenha['idResenha']]['descurtidas']?>
            </button></a>
<?php
            } if($estaCurtido[$resenha['idResenha']]==false) {
?>

            <a href="?jogo=<?=$idJogo?>&reacao=curtir&resenha=<?=$resenha['idResenha']?>"><button class="ui button label corLabelLaranja">
                <i class="thumbs up icon"></i>
                    <?= $numeroReacoes[$resenha['idResenha']]['curtidas']?>
            </button></a>

<?php
            } if($estaCurtido[$resenha['idResenha']]==true) {

?>
            <a href="?jogo=<?=$idJogo?>&reacao=tirarCurtir&resenha=<?=$resenha['idResenha']?>"><button class="ui button label corLabelLaranja">
                <i class="thumbs up icon"></i>
                    <?= $numeroReacoes[$resenha['idResenha']]['curtidas']?>
            </button></a>

<?php
    }
}

?>
            <button class="ui button label corLabelAzul">
                <i class="comments icon"></i>
                    <?php
                        if($comentariosResenha=='semComentarios') {
                            print("0 comentários");
                        } else {
                            $numeroComentarios= sizeof($comentariosResenha);
                            print($numeroComentarios.' comentários');
                        }
                    ?>
            </button>
            <button class="ui button label corLabelAzul">
                <i class="calendar alternate icon"></i>
                    Postado em <?= $resenha['dataPostagem']?>
            </button>
<?php
    if(empty($_SESSION)== false and $dadosAutor['idUsuario']== $_SESSION['idUsuario']) {
?>
            <a target="_blank" href="editarResenha.php">
                <button class="ui blue button label">
                    <i class="edit icon"></i>
                        Editar
                </button>
            </a>

            <button class="ui red button label">
                <i class="trash icon"></i>
                    Excluir
            </button>
<?php

    }

?>
            <button class="ui button label corLabelLaranja aDireita modalAbrir">
                <i class="search plus icon"></i>
                    Ver post completo
            </button>
        </div>
    </div>
</div>
<div class="one wide column"></div>
</div>

<div class="espacoAntesRodape">.</div>

<!-- modal-->

<div class="ui modal">
<div class="scrolling content">
    <div class="ui grid">
        <div class="ui four wide column">
            <h5 class="modalNotaAutor">Nota dada pelo autor</h5>
            <div class="ui huge star rating naoAlteravel modalAlinhamento" data-rating="<?=$resenha['classificacaoAutor']?>" data-max-rating="5"></div>
        </div>
        <div class="ui twelve wide column">
            <h2 class="modalNome" ><?=$resenha['titulo']?></h2>
            <div class="clear">.</div>
            <h3 class="modalAutor">Resenha por: @<?=$dadosAutor['nome']?></h3>
        </div>
    </div>
    <div class="ui divider"></div>
    <div class="clear">.</div>
    <div class="ui grid"> 
        <div class="ui one wide column"></div>
        <div class="ui fourteen wide column">
            <p class="modalResenha"><?=$resenha['resenha']?></p>
        </div>
        <div class="ui one wide column"></div>
        <div class="ui one wide column"></div>
            <div class="ui fourteen wide column">
                <div id="botoesModalEsquerda">
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs down icon"></i>
                            <?=$resenha['descurtidas']?>
                    </button>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs up icon"></i>
                            <?=$resenha['curtidas']?>
                    </button>
                </div> 
            </div>
            <div class="ui one wide column"></div>
    </div>
    <div class="clear"></div>
    
    <h3 class="ui horizontal divider header" id="tituloModalComentarios">Comentários</h3>
    <div class="ui grid">
        <div class="two wide column"></div>
        <div class="twelve wide column">
            <div class="ui comments espacoComentario">
<?php
if($comentariosResenha!='semComentarios') {
foreach($comentariosResenha as $comentario){
    $usuarioQueComentou= buscaUsuario($comentario['idUsuario']);
?>
                <div class="comment espacoEntreComentarios">
                    <a class="avatar">
                        <img src="imagens/avatares/<?=$usuarioQueComentou['imagemPerfil']?>">
                    </a>
                    <div class="content">
                        <a class="author"><?=$usuarioQueComentou['nome']?></a>
                        <div class="metadata">
                            <span class="date"><?=$comentario['dataPostagem']?></span>
                        </div>
                        <div class="text">
                            <?=$comentario['comentario']?>
                        </div>

<?php
    if(empty($_SESSION)==false) {
        if($usuarioQueComentou['idUsuario']!= $_SESSION['idUsuario']) {
?>
                        <div class="actions">
                            <a class="reply"><i class="exclamation triangle icon"></i>Denunciar</a>
                        </div> 

<?php                  
        } else {

?>

                        <div class="actions">
                            <a class="editarComentario"><i class="edit icon"></i>Editar</a>
                        </div> 
                        <div class="actions">
                            <a class="deletarComentario"><i class="trash alternate icon"></i>Excluir</a>
                        </div> 
<?php
        }
    }
?>
                    </div>
                </div>
<?php

}
                
} else {
print('<h4 id="semComentarios">Ainda não há comentários para esta resenha</h4>');
} if(empty($_SESSION)==false) {
            
?>      
                <form action="processaComentario.php?acao=cadastrar" class="ui reply form" method="post">
                    <input type="hidden" name="idResenha" value="<?=$resenha['idResenha']?>">
                    <input type="hidden" name="idUsuario" value="<?=$_SESSION['idUsuario']?>">
                    <div class="field">
                        <textarea name="comentario"></textarea>
                    </div>
                    <button type="submit" class="ui blue labeled submit icon button">
                        <i class="icon edit"></i> Add Reply
                    </button>
                </form>
<?php

} else {
print('<a href="login.php"><h4 id="logueSe">Logue-se para comentar esta resenha</h4></a>');
}
?>
</div>
                <div class="two wide column"></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
<!-- fim modal -->

<?php
include("elementosSecundarios/rodape.html");
?>