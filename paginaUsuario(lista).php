<?php
	include 'html/cabecalhoLogado.html';
?>
	<img class="userPageImg" src="https://solitonsystems.com/wp-content/uploads/2016/03/Secure-access-to-your-enterprise-network-1600x600.jpg" >
    <div class="userHeader">
        <img id="imagemPerfilPagUsuario" class="ui centered small circular image" src="http://www.themes-lab.com/conbis/assets/images/avatars/avatar6_big@2x.png">
    </div>
    <h2 class= "ui center aligned header">@usuarioRateRev</h2>
    <h3 class="ui center aligned header" id="biografiaUsuario">
        (BIO) Look the sky tonight, all of stars have a reason, a reason to shine, a reason like mine and i'm falling in pieces
    </h3>

    <div class="clear">.</div>
    <h2 class="ui horizontal divider header tituloSegmento">
        Resenhas Publicadas
    </h2>
    <div class="clear">.</div>

    
    <div class="ui  grid">
        <div class="eight two column"></div>
        <div class="fourteen wide column ui relaxed divided list">
            <div class="item">
                <img src="imagens/jogos/zelda.jpg" class="ui tiny image">
                <div class="content">
                    <a  class="header">Tudo o que você faz, é por conta própria!</a>
                    <div class="description">The Legend of Zelda: Breath of the Wild</div>
                </div>
                <button class="ui red button label modalFechar">
                        <i class="trash icon"></i>
                            Excluir
                    </button>
                    <button class="ui blue button label modalFechar">
                        <i class="edit icon"></i>
                            Editar
                    </button>
            </div>
            <div class="item">
                <img src="imagens/jogos/watchdogs.jpg" class="ui tiny image">
                <div class="content">
                    <a class="header">Assistindo Cachorros</a>
                    <div class="description">WatchDogs 2</div>
                </div>
                <button class="ui red button label modalFechar">
                        <i class="trash icon"></i>
                            Excluir
                    </button>
                    <button class="ui blue button label modalFechar">
                        <i class="edit icon"></i>
                            Editar
                    </button>
            </div>
            <div class="item">
                <img src="imagens/jogos/farcry.jpg" class="ui tiny image">
                <div class="content">
                    <a class="header">Kyrat e suas aventuras</a>
                    <div class="description">Far Cry 4</div>
                </div>
                    <button class="ui red button label modalFechar">
                        <i class="trash icon"></i>
                            Excluir
                    </button>
                    <button class="ui blue button label modalFechar">
                        <i class="edit icon"></i>
                            Editar
                    </button>
            </div>
        </div>
    </div>
    <!-- modal-->

    <div class="ui modal">
        <div class="scrolling content">
            <div class="ui grid">
                <div class="ui four wide column">
                    <h5 class="modalNotaAutor">Nota dada pelo autor</h5>
                    <div class="ui huge star rating modalAlinhamento" data-rating="5" data-max-rating="5"></div>
                </div>
                <div class="ui twelve wide column">
                    <h2 class="modalNome" >The Legend of Zelda: Breath of the wild</h2>
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
	                            7
	                    </button>
	                    <button class="ui button label corLabelLaranja">
	                        <i class="thumbs up icon"></i>
	                            10
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


    <div id="espacoRodapePagUsuario"></div>


<?php
	include 'html/rodape.html';
?>