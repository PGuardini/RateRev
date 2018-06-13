<?php
    include("html/cabecalho.html");
?>
	<div class="clear"></div>

    <div class="ui grid">

        <h2 class="ui horizontal divider header tituloJogo">
            Tomb Raider
        </h2>

        <div class="clear"></div>

        <div class="ui container">
            <div class="ui grid">
                <div class="ui five wide column">
                    <div class="ui card">
                        <div class="ui centered image">
                            <img src="imagens/jogos/tombraider.jpg">
                        </div>
                        <div class="content">
                            <a class="header classificacaoBox">Classificação Média</a>
                            <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                        </div>
                    </div>                
                </div>
                <div class="ten wide column justificado">
                	<p>Armada com nada além de instintos se sobrevivência, Lara encontrou seu caminho para as costas misteriosas do Linux.</p>
                    <p>Tomb Raider explora a intensa história de origem de Lara Croft, e sua ascensão de uma jovem mulher a uma sobrevivente experiente. Armada apenas com os seus instintos e a capacidade de ir além dos limites da resistência humana, Lara precisa lutar para desvendar a história sombria de uma ilha esquecida para fugir das suas garras.</p>
                    <p>“Após uma violenta tempestade destruir o barco que ela estava viajando, uma jovem e amedrontada mulher é deixada encharcada em uma praia desconhecida. Por conta própria, mas não sozinha, ela só tem um objetivo, sobreviver”</p>
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
                <img class="ui circular big image" src="imagens/detalhaJogo/avatares/julia.jpg">
            </div>
            <section class="username">@juliagamer</section>
        </div>
        <div class="ten wide column">
            <div class="talk-bubble tri-right left-in">
                <div class="talktext">
                    <h3 class="tituloResenha">Um recomeço?!</h3>
                    <div class="ui divider"></div>
                    <div class="espacoComecoPost"></div>
                    <p>17 anos depois de sua criação, a série Tomb Raider parecia fadada ao gradual esquecimento, com suas instâncias cada vez atraindo menos jogadores. Ícone das heroínas nos videogames, Lara Croft originalmente conquistou seu espaço como aventureira em território ocupado quase que exclusivamente por homens, ganhou filme e status de sex symbol, mas envelheceu mal na mesma proporção em que seu número de polígonos aumentou.</p>
                    <p>Visando reinventar a franquia, a Square-Enix e a Eidos tomaram a rota do "Begins", criando um prelúdio que funciona ao mesmo tempo como um reinício para a combalida série. A mulher durona e curvilínea foi reinventada no jogo, intitulado simplesmente Tomb Raider, como uma jovem frágil, recém-saída da adolescência, ainda longe de adquirir as habilidades pelas quais ficou conhecida.</p>
                    <p>A trama envolve uma expedição arqueológica em busca de ruínas de uma antiga civilização japonesa que, misteriosamente, naufraga depois de uma tempestade. Isolada de seus amigos, a jovem Lara vê-se lutando para sobreviver em minutos, fazendo valer cada lição que teve com seu mentor, Roth, também um integrante da expedição. Em um ambiente inóspito, lá vai a futura Tomb Raider aprender a caçar, enfrentar cultistas, escalar, melhorar nas armas e aperfeiçoar suas ferramentas.</p>
                    <div class="espacoFimPost"></div>
                    <div class="ui divider"></div>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs down icon"></i>
                            2
                    </button>
                    <button class="ui button label corLabelLaranja">
                        <i class="thumbs up icon"></i>
                            21
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
                <h2 class="modalNome" >Tomb Raider</h2>
                <div class="clear">.</div>
                <h3 class="modalAutor">Resenha por: @juliagamer</h3>
            </div>
        </div>
        <div class="ui divider"></div>
        <div class="clear">.</div>
        <div class="ui grid"> 
            <div class="ui one wide column"></div>
            <div class="ui fourteen wide column">
                <p class="modalResenha">17 anos depois de sua criação, a série Tomb Raider parecia fadada ao gradual esquecimento, com suas instâncias cada vez atraindo menos jogadores. Ícone das heroínas nos videogames, Lara Croft originalmente conquistou seu espaço como aventureira em território ocupado quase que exclusivamente por homens, ganhou filme e status de sex symbol, mas envelheceu mal na mesma proporção em que seu número de polígonos aumentou.</p>
                <p class="modalResenha">Visando reinventar a franquia, a Square-Enix e a Eidos tomaram a rota do "Begins", criando um prelúdio que funciona ao mesmo tempo como um reinício para a combalida série. A mulher durona e curvilínea foi reinventada no jogo, intitulado simplesmente Tomb Raider, como uma jovem frágil, recém-saída da adolescência, ainda longe de adquirir as habilidades pelas quais ficou conhecida.</p>
                <p class="modalResenha">A trama envolve uma expedição arqueológica em busca de ruínas de uma antiga civilização japonesa que, misteriosamente, naufraga depois de uma tempestade. Isolada de seus amigos, a jovem Lara vê-se lutando para sobreviver em minutos, fazendo valer cada lição que teve com seu mentor, Roth, também um integrante da expedição. Em um ambiente inóspito, lá vai a futura Tomb Raider aprender a caçar, enfrentar cultistas, escalar, melhorar nas armas e aperfeiçoar suas ferramentas.</p>
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
                            amei esta continuação! Já estava perdendo as esperanças...
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
                            <p>Acho que ainda não se compara com os outros jogos</p>
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
                                desnecessário certas cenas do jogo.
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
                            Concordo com suas opiniões!
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