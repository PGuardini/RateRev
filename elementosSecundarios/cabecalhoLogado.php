
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RateRev- Resenha de jogos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--IMPORTANDO O SEMANTIC-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/semantic/semantic.min.css" />
    <!--CSS DOS DESENVOLVEDORES-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/canteli.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/victor.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/guardini.css" />

    <!--OUTROS-->
    <link rel="shortcut icon" href="imagens/favicon.png" />
</head>
<body>

<div class="ui sticky colado">
    <div class="ui inverted menu stkMenu">
        <h2 class="tituloMenu">rv</h2>
        <a class="active item" href="index.php">
            Home
        </a>
        <div class="right menu">
            <div class="ui search campoPesquisar">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Pesquise">
                    <i class="search icon"></i>
                </div>
            </div>
            <a class="ui item" href="paginaUsuario.php">
                <i class="user icon"></i>Minhas Resenhas
            </a>
<?php
    if($_SESSION['permissao']=='administrador') {
?>
            <a class="ui item" href="cadastroResenhaAdmin.php">
                <i class="pencil icon"></i>Cadastrar Resenha
            </a>
<?php
    } else {
?>
            <a class="ui item" href="cadastroResenha.php">
                <i class="pencil icon"></i>Cadastrar Resenha
            </a>
<?php
    }
?>
            <a class="ui item" href="processaUsuario.php?acao=sair">
                <i class="sign out icon"></i>Sair
            </a>
        </div>
    </div>
</div>
