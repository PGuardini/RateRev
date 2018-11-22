<?php
	include 'elementosSecundarios/cabecalhoLogado.php';

	$idUser=$_SESSION['idUsuario'];
	$idJogo=$_POST['jogo'];
	$titulo=$_POST['titulo'];
	$resenha = str_replace(array("\r\n", "\r", "\n"), "<br/>", $_POST['resenha']);
	$star=file_get_contents("rate.txt");
	if (!isset($_POST['checkAdmin'])){
	    $wasUser = FALSE;
    } else{
	    $wasUser = TRUE;
    }

	function saveResenha($idJogo,$idUser,$titulo,$resenha,$star,$wasUser=TRUE){
	    $novaResenha = [
			"idJogo"=>(int) $idJogo,
			"idResenha"=>uniqid(),
			"idUsuario"=>$idUser,
			"titulo"=>$titulo,
			"curtidas"=>0,
			"descurtidas"=>0,
			"dataPostagem"=>date("d/m/Y"),
			"classificacaoAutor"=>$star,
			"resenha"=>$resenha,
            "foiUsuario"=>$wasUser
		];
		$resenhas=json_decode(file_get_contents("dados/resenhas.json"),TRUE);
		$resenhas[] = $novaResenha;
		file_put_contents("dados/resenhas.json", json_encode($resenhas,JSON_PRETTY_PRINT));
	}

	saveResenha($idJogo,$idUser,$titulo,$resenha,$star,$wasUser);

	header("Location: paginaUsuario.php");