<?php
    include("html/cabecalho.html");
?>
	<div class="clear"></div>

    <div class="ui grid">

        <h2 class="ui horizontal divider header tituloJogo">
            Life is Strange
        </h2>

        <div class="clear"></div>

        <div class="ui container">
            <div class="ui grid">
                <div class="ui five wide column">
                    <div class="ui card">
                        <div class="ui centered image">
                            <img src="imagens/jogos/lifeisstrange.png">
                        </div>
                        <div class="content">
                            <a class="header classificacaoBox">Classificação Média</a>
                            <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                        </div>
                    </div>                
                </div>
                <div class="ten wide column justificado">
                    <p>Life is Strange é uma premiada aventura em episódios, aclamada pela crítica, que permite ao jogador voltar no tempo e alterar passado, presente e futuro.</p>
                    <p>Siga a história de Max Caulfield, uma estudante de fotografia que descobre ser capaz de rebobinar o tempo ao salvar a melhor amiga, Chloe Price.</p>
                    <p>As duas logo começam a investigar o desaparecimento misterioso da amiga e também estudante Rachel Amber, e desvendam o lado sombrio da vida em Arcadia Bay. Ao mesmo tempo, Max aprende rápido que alterar o passado pode por vezes levar a um futuro devastador.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="ui horizontal divider header tituloSegmento">
        Resenhas
    </h2>

    <div class="ui grid">
        <div class="three wide column"></div>
        <div class="one wide column">
            <div class="espacoUsuario">
                <img class="ui circular big image" src="imagens/detalhaJogo/avatares/juca.jpg">
            </div>
            <section class="username">@juca</section>
        </div>
        <div class="ten wide column">
            <div class="talk-bubble tri-right left-in">
                <div class="talktext">
                    <h3 class="tituloResenha">Inovador</h3>
                    <div class="ui divider"></div>
                    <div class="espacoComecoPost"></div>
                    <p>Você já teve aquela curiosidade terrível de querer fazer alguma coisa só pra ver o que aconteceria? Quer dizer, fazer ou dizer alguma coisa bizarra, drástica, idiota ou sei-lá-o-quê e voltar no tempo antes de ter que lidar com as consequências? Então, Life is Strange vai acalentar seu coração.</p>
                    <p>No jogo, somos Max Caulfield, uma nerd, hispter e aspirante à fotógrafa ( e como isso soa nada original) que descobre um poder de voltar no tempo e alterar o destino. Ao se envolver com uma série de acontecimentos macabros, violentos, sentimentais e meio inexplicáveis, o superpoder vai sendo cada vez mais requisitado e você vai jogar com ela para resolver a história.</p>
                    <p>Com uma melancolia e suspense amáveis, Life is Strange é sobretudo uma história de amizade. Uma outra personagem, Chloe, vai te acompanhar o tempo todo e acredite: você, pessoa com o controle, vai se apegar e fazer de tudo para mantê-la a salvo. E esse é o primeiro ponto positivo: você se importa muito com a história e com as personagens. Esse é um jogo de escolhas e é bem executado o trabalho de fazer você pensar nas opções e se preocupar com o que vai acontecer. Tipo a vida real, só que dá pra voltar no tempo.</p>
                    <div class="espacoFimPost"></div>
                    <div class="ui divider"></div>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs down icon"></i>
                            7
                    </button>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs up icon"></i>
                            35
                    </button>
                    <button class="ui button label corLabelAzul">
                        <i class="comments icon"></i>
                            4 comentários
                    </button>
                    <button class="ui button label corLabelAzul">
                        <i class="calendar alternate icon"></i>
                            Postado há 10 dias
                    </button>
                    <button class="ui button label corLabelLaranja modalAbrir">
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
                <div class="ui huge star rating modalAlinhamento" data-rating="5" data-max-rating="5"></div>
            </div>
            <div class="ui twelve wide column">
                <h2 class="modalNome" >Life is Strange</h2>
                <div class="clear">.</div>
                <h3 class="modalAutor">Resenha por: @juca</h3>
            </div>
        </div>
        <div class="ui divider"></div>
        <div class="clear">.</div>
        <div class="ui grid"> 
            <div class="ui one wide column"></div>
            <div class="ui fourteen wide column">
                <p class="modalResenha">Você já teve aquela curiosidade terrível de querer fazer alguma coisa só pra ver o que aconteceria? Quer dizer, fazer ou dizer alguma coisa bizarra, drástica, idiota ou sei-lá-o-quê e voltar no tempo antes de ter que lidar com as consequências? Então, Life is Strange vai acalentar seu coração.</p>
                <p class="modalResenha">No jogo, somos Max Caulfield, uma nerd, hispter e aspirante à fotógrafa ( e como isso soa nada original) que descobre um poder de voltar no tempo e alterar o destino. Ao se envolver com uma série de acontecimentos macabros, violentos, sentimentais e meio inexplicáveis, o superpoder vai sendo cada vez mais requisitado e você vai jogar com ela para resolver a história.</p>
                <p class="modalResenha">Com uma melancolia e suspense amáveis, Life is Strange é sobretudo uma história de amizade. Uma outra personagem, Chloe, vai te acompanhar o tempo todo e acredite: você, pessoa com o controle, vai se apegar e fazer de tudo para mantê-la a salvo. E esse é o primeiro ponto positivo: você se importa muito com a história e com as personagens. Esse é um jogo de escolhas e é bem executado o trabalho de fazer você pensar nas opções e se preocupar com o que vai acontecer. Tipo a vida real, só que dá pra voltar no tempo.</p>
            </div>
            <div class="ui one wide column"></div>
        </div>
        <div class="clear"></div>
        
        <h3 class="ui horizontal divider header" id="tituloModalComentarios">Comentários</h3>
        <div class="ui grid">
            <div class="two wide column"></div>
            <div class="twelve wide column">
                <div class="ui comments espacoComentario">
                    <div class="comment">
                        <a class="avatar">
                        <img src="imagens/jogos/uncharted.jpg">
                        </a>
                        <div class="content">
                        <a class="author">Matt</a>
                        <div class="metadata">
                            <span class="date">Today at 5:42PM</span>
                        </div>
                        <div class="text">
                            revolucionário!
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                        <img src="imagens/jogos/farcry.jpg">
                        </a>
                        <div class="content">
                        <a class="author">Elliot Fu</a>
                        <div class="metadata">
                            <span class="date">Yesterday at 12:30AM</span>
                        </div>
                        <div class="text">
                            <p>Gostei da perspectiva</p>
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                        </div>
                        <div class="comments">
                        <div class="comment">
                            <a class="avatar">
                            <img src="imagens/jogos/gtav.jpg">
                            </a>
                            <div class="content">
                            <a class="author">Jenny Hess</a>
                            <div class="metadata">
                                <span class="date">Just now</span>
                            </div>
                            <div class="text">
                                simm, concordo! Muito legal.
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a class="avatar">
                        <img src="imagens/jogos/zelda.jpg">
                        </a>
                        <div class="content">
                        <a class="author">Joe Henderson</a>
                        <div class="metadata">
                            <span class="date">5 days ago</span>
                        </div>
                        <div class="text">
                            Aguardo a continuação!
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                        </div>
                    </div>
                    <form class="ui reply form">
                        <div class="field">
                        <textarea></textarea>
                        </div>
                        <div class="ui blue labeled submit icon button">
                        <i class="icon edit"></i> Add Reply
                        </div>
                    </form>
                </div>
            </div>
            <div class="two wide column"></div>
        </div>
    
        <!-- caso alguem esteja lendo isso e saiba como fazer para o textarea nao ser selecionado automaticamente agradeço a colaboração-->
        <!-- fim-->
    </div>
</div>
<?php
    include("html/rodape.html");
?>