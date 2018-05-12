<?php
    include "html/cabecalho.html";
?>
    <div class="central-container">
        <h2>Login</h2>
        <form class="ui form" action="#" method="POST">
            <div class="field">
                <label>Login</label>
                <input type="text" name="login" placeholder="Login">
            </div>
            <div class="field">
                <label>Senha</label>
                <input type="text" name="senha" placeholder="Senha">
            </div>
            <div class="inline field">
                <div class="ui slider checkbox">
                <input type="checkbox" tabindex="0" class="hidden">
                <label>Permanecer Logado</label>
                </div>
                <label></label>
            </div>
            <div class="ui three fields grid">
                <div class="field"></div>
                <div class="field">
                    <button class="large ui inverted standard button" type="submit">Logar</button>
                </div>
                <div class="field"></div>    
            </div>
        </form>
    </div>

<?php
    include "html/rodape.html";
?>