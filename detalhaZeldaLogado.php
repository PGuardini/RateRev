<?php
    include("html/cabecalhoLogado.html");
?>
	<div class="clear"></div>

    <div class="ui grid">

        <h2 class="ui horizontal divider header tituloJogo">
            The Legend Of Zelda: Breath of the Wild
        </h2>

        <div class="clear"></div>

        <div class="ui container">
            <div class="ui grid">
                <div class="ui five wide column">
                    <div class="ui card">
                        <div class="ui centered image">
                            <img src="imagens/jogos/zelda.jpg">
                        </div>
                        <div class="content">
                            <a class="header classificacaoBox">Classificação Média</a>
                            <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                        </div>
                    </div>                
                </div>
                <div class="ten wide column justificado">
                	<p>Você é Link, o herói silencioso, e o game faz questão de que você sinta e entenda as coisas como se fosse ele. A história começa com um renascimento, um despertar de um longo sono de 100 anos, sem roupas, armas, memória ou propósito. Não há indicação do que fazer, para onde ir, com quem falar, além de frases enigmáticas que soam mais como alucinações do que instruções. Estamos por nossa conta e só nos resta seguir. Para onde mesmo?</p>
                	<p>Em suas primeiras horas, Breath of the Wild reproduz de modo brilhante a noção da solidão, de ser arremessado forçadamente a um mundo novo que não nos pertence. Link não sabe o porquê de estar ali, nem qual é seu propósito no universo, então tudo parece um tipo de aprendizado. São mais questões do que conclusões, que levam a uma sensação frequente de ignorância, como se a verdade nos fosse proibida. O que devemos fazer em Hyrule? Por que não há nenhum habitante ocupando os gramados, nenhuma cidade parece habitada? O que são todas essas ruínas? E esses porcos selvagens, por que me atacam? Qual é o real tamanho desse mundo? Aliás, uma das grandes emoções de toda experiência se dá logo quando escalamos a primeira torre e percebemos que o mapa de Hyrule é muito, muito maior do que parecia de início.</p>
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
                <img class="ui circular big image" src="imagens/detalhaJogo/avatares/avatar1.png">
            </div>
            <section class="username">@violeta</section>
        </div>
        <div class="ten wide column">
            <div class="talk-bubble tri-right left-in">
                <div class="talktext">
                    <h3 class="tituloResenha">Tudo o que você faz, é por conta própria!</h3>
                    <div class="ui divider"></div>
                    <div class="espacoComecoPost"></div>
                    <p>Sou um grande fã da franquia The Legend of Zelda e, como tal, há vários anos tenho me decepcionado com os jogos da série. Não por serem ruins – muito longe disso – mas por terem se limitado sempre às mesmas experiências e caído nas mesmas armadilhas que outros games da indústria têm tido há muito tempo.</p>
                    <p>O jogo original, de 1986, quebrou paradigmas na época, trazendo diversas novidades para o mercado. Nele, você era colocado em um mundo totalmente aberto, sem um caminho certo. Bastava escolher um lado e começar a explorar. Sem tutorial, sem roteiros pré-definidos. Apenas você, sua curiosidade e sua coragem.</p>
                    <p>O primeiro jogo é um dos meus preferidos da série, então naturalmente fiquei interessado quando The Legend of Zelda: Breath of the Wild foi anunciado, já que a Nintendo prometeu retornar às origens da franquia ao mesmo tempo que quebraria suas amarras estabelecidas desde A Link to The Past.</p>
                    <p>Propor é fácil, mas fugir de padrões de game design estabelecidos há mais de 20 anos na franquia e até mesmo de toda uma indústria não é um trabalho simples. Sempre fiquei com um pé atrás com essa promessa… No entanto, depois de jogar, surpreendentemente descobri que a Nintendo realmente conseguiu.</p>
                    <div class="espacoFimPost"></div>
                    <div class="ui divider"></div>
                
                    <!--//botoes comuns-->
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs down icon"></i>
                            4
                    </button>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs up icon"></i>
                            19
                    </button>
                    <button class="ui button label corLabelAzul">
                        <i class="comments icon"></i>
                            4 comentários
                    </button>
                    <button class="ui button label corLabelAzul">
                        <i class="calendar alternate icon"></i>
                            Postado há 3 dias
                    </button>
                
                    <!--//botoes de excluir e editar-->

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
                    <h2 class="modalNome" >Tudo o que você faz, é por conta própria!</h2>
                    <div class="clear">.</div>
                    <h3 class="modalAutor">Resenha por: @violet</h3>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="clear">.</div>
            <div class="ui grid"> 
                <div class="ui one wide column"></div>
                <div class="ui fourteen wide column">
                    <p class="modalResenha">Sou um grande fã da franquia The Legend of Zelda e, como tal, há vários anos tenho me decepcionado com os jogos da série. Não por serem ruins – muito longe disso – mas por terem se limitado sempre às mesmas experiências e caído nas mesmas armadilhas que outros games da indústria têm tido há muito tempo.</p>
                    <p class="modalResenha">O jogo original, de 1986, quebrou paradigmas na época, trazendo diversas novidades para o mercado. Nele, você era colocado em um mundo totalmente aberto, sem um caminho certo. Bastava escolher um lado e começar a explorar. Sem tutorial, sem roteiros pré-definidos. Apenas você, sua curiosidade e sua coragem.</p>
                    <p class="modalResenha">O primeiro jogo é um dos meus preferidos da série, então naturalmente fiquei interessado quando The Legend of Zelda: Breath of the Wild foi anunciado, já que a Nintendo prometeu retornar às origens da franquia ao mesmo tempo que quebraria suas amarras estabelecidas desde A Link to The Past.</p>
                    <p class="modalResenha">Propor é fácil, mas fugir de padrões de game design estabelecidos há mais de 20 anos na franquia e até mesmo de toda uma indústria não é um trabalho simples. Sempre fiquei com um pé atrás com essa promessa… No entanto, depois de jogar, surpreendentemente descobri que a Nintendo realmente conseguiu.</p>
                </div>
                <div class="ui one wide column"></div>
                <div class="ui one wide column"></div>
                <div class="ui fourteen wide column">
                    <div id="botoesModalEsquerda">
                        <button class="ui button label corLabelLaranja">
                            <i class="thumbs down icon"></i>
                                4
                        </button>
                        <button class="ui button label corLabelLaranja">
                            <i class="thumbs up icon"></i>
                                19
                        </button>
                    </div>
                    <div id="botoesModalDireita">
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
                    </div> 
                </div>
                <div class="ui one wide column"></div>
            </div>
            
            <h3 class="ui horizontal divider header" id="tituloModalComentarios">Comentários</h3>
            <div class="ui grid">
                <div class="two wide column"></div>
                <div class="twelve wide column">
                    <div class="ui comments espacoComentario">
                        <div class="comment">
                            <a class="avatar">
                            <img src="imagens/detalhaJogo/avatares/avatar2.jpg">
                            </a>
                            <div class="content">
                            <a class="author">Matt</a>
                            <div class="metadata">
                                <span class="date">Today at 5:42PM</span>
                            </div>
                            <div class="text">
                                que bela bosta!
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                            </div>
                        </div>
                        <div class="comment">
                            <a class="avatar">
                            <img src="imagens/detalhaJogo/avatares/avatar6.png">
                            </a>
                            <div class="content">
                            <a class="author">Elliot Fu</a>
                            <div class="metadata">
                                <span class="date">Yesterday at 12:30AM</span>
                            </div>
                            <div class="text">
                                <p>top</p>
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
                                    legal, mas pode melhorar :)
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
                                o.o
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
        </div>
    </div>
    
        <!-- fim-->
    </div>
</div>
<?php
    include("html/rodape.html");
?>