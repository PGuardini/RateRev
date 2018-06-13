<?php
    include("html/cabecalho.html");
?>
	<div class="clear"></div>

    <div class="ui grid">

        <h2 class="ui horizontal divider header tituloJogo">
            Uncharted 4
        </h2>

        <div class="clear"></div>

        <div class="ui container">
            <div class="ui grid">
                <div class="ui five wide column">
                    <div class="ui card">
                        <div class="ui centered image">
                            <img src="imagens/jogos/assassinscreed.jpg">
                        </div>
                        <div class="content">
                            <a class="header classificacaoBox">Classificação Média</a>
                            <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                        </div>
                    </div>                
                </div>
                <div class="ten wide column justificado">
                	<p>Vários anos após sua última aventura, o aposentado caçador de tesouros, Nathan Drake, é forçado a voltar para o mundo dos ladrões. Agora com sua vida pessoal em jogo, Drake embarca em uma jornada pelo mundo em busca de uma conspiração histórica por trás de um famoso tesouro pirata. Sua maior aventura testará seus limites físicos, sua determinação e, finalmente, o que ele está disposto a sacrificar para salvar quem ama. </p>
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
                <img class="ui circular big image" src="imagens/detalhaJogo/avatares/adam.jpg">
            </div>
            <section class="username">@adam</section>
        </div>
        <div class="ten wide column">
            <div class="talk-bubble tri-right left-in">
                <div class="talktext">
                    <h3 class="tituloResenha">É...Bom?</h3>
                    <div class="ui divider"></div>
                    <div class="espacoComecoPost"></div>
                    <p>Sem entregar as surpresas, pode-se dizer que a história de A Thief's End começa com um Drake aposentado. Longe de cidades perdidas ou tesouros escondidos, ele está casado com Elena e com um emprego burocrático. Fica claro que aquela não é a vida que ele gostaria de levar, mas por questões de prioridades decide seguir a rotina. O ressurgimento do irmão de Nathan altera o cenário por completo. Para se salvar das mãos de alguns mafiosos, Sam Drake precisa encontrar o gigantesco tesouro do pirata Henry Avery e pede ajuda ao caçula.</p>
                    <p>A Thief's End entrega todas as promessas. O carisma dos personagens, os diálogos rápidos e inteligentes, as sequências de ação de tirar o fôlego e uma narrativa digna dos melhores blockbusters de Hollywood. Se comparado a qualquer outro game da atual geração, o título parece estar alguns anos à frente em termos gráficos. Nada é tão bonito quanto ele.</p>
                    <div class="espacoFimPost"></div>
                    <div class="ui divider"></div>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs down icon"></i>
                            42
                    </button>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs up icon"></i>
                            15
                    </button>
                    <button class="ui button label corLabelAzul">
                        <i class="comments icon"></i>
                            4 comentários
                    </button>
                    <button class="ui button label corLabelAzul">
                        <i class="calendar alternate icon"></i>
                            Postado há 7 dias
                    </button>
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
                <div class="ui huge star rating modalAlinhamento" data-rating="5" data-max-rating="5"></div>
            </div>
            <div class="ui twelve wide column">
                <h2 class="modalNome" >Uncharted 4</h2>
                <div class="clear">.</div>
                <h3 class="modalAutor">Resenha por: @adam</h3>
            </div>
        </div>
        <div class="ui divider"></div>
        <div class="clear">.</div>
        <div class="ui grid"> 
            <div class="ui one wide column"></div>
            <div class="ui fourteen wide column">
                <p class="modalResenha">Sem entregar as surpresas, pode-se dizer que a história de A Thief's End começa com um Drake aposentado. Longe de cidades perdidas ou tesouros escondidos, ele está casado com Elena e com um emprego burocrático. Fica claro que aquela não é a vida que ele gostaria de levar, mas por questões de prioridades decide seguir a rotina. O ressurgimento do irmão de Nathan altera o cenário por completo. Para se salvar das mãos de alguns mafiosos, Sam Drake precisa encontrar o gigantesco tesouro do pirata Henry Avery e pede ajuda ao caçula.</p>
                <p class="modalResenha">A Thief's End entrega todas as promessas. O carisma dos personagens, os diálogos rápidos e inteligentes, as sequências de ação de tirar o fôlego e uma narrativa digna dos melhores blockbusters de Hollywood. Se comparado a qualquer outro game da atual geração, o título parece estar alguns anos à frente em termos gráficos. Nada é tão bonito quanto ele.</p>
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
                            prevísivel.
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
                            <p>Esse personagem principal abala minhas estruturas.</p>
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
                                verdade kkk
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
                            meu gostei muitoo
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