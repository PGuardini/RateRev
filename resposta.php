<?php

    session_start();
    include "elementosSecundarios/cabecalho.php";

    $resposta= $_GET['cod'];


?>

    <div class="centralContainerMensagem">

<?php

    switch ($resposta) {
        case 'acessoNegado':
?>
        <h1 class="tituloMensagem">Acesso Negado!</h1>
        <center><i class="massive exclamation triangle icon iconMensagem"></i></center>
        <meta http-equiv="refresh" content="2; url=index.php">
<?php
            break;

        case 'loginAprovado':
            acessoNegado();
?>
        <h1 class="tituloMensagem">Bem vindo, <?=$_SESSION['nome']?>!</h1>
        <h2 class="subMensagem">Sua permissão é: <?=$_SESSION['permissao']?></h2>
        <center><i class="massive thumbs up outline icon iconMensagem"></i></center>
        <meta http-equiv="refresh" content="2; url=index.php">
<?php
            break;

        case 'ateLogo':
?>
        <h1 class="tituloMensagem">Até logo!</h1>
        <center><i class="massive handshake outline icon iconMensagem"></i></center>
        <meta http-equiv="refresh" content="2; url=index.php">
<?php
            break;

        case 'pesquisaNaoEncontrada';

            $palavraPesquisada= $_GET['termo'];
            if($_GET['pesquisado']=='genero'){
?>
        <h1 class="tituloMensagem">Não possuímos o gênero "<?=$palavraPesquisada?>" em nosso site.</h1>
        <center><i class="massive times icon iconMensagem"></i></center>
        <meta http-equiv="refresh" content="2; url=index.php">
<?php

            } else {
?>
        <h1 class="tituloMensagem">Não encontramos o termo "<?=$palavraPesquisada?>" em nosso site.</h1>
        <center><i class="massive times icon iconMensagem"></i></center>
        <meta http-equiv="refresh" content="2; url=index.php">
<?php    
            }

            break;

        
        default:
            acessoNegado();
            break;
    }

?>

    </div>
    <div class="clear"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="css/semantic/semantic.min.js"></script>
	<script src="js/main.js"></script>
