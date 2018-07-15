<?php 

	$acao= $_GET['acao'];
    include("funcoes/json.php");
    $arrayComentarios= arrayComentarios();
    $dadosEnviados= $_POST;

    switch ($acao) {
    	case 'cadastrar':
    		$novoComentario= [

    			"idComentario"=> uniqid(),
    			"idResenha"=> $_POST['idResenha'],
    			"idUsuario"=> $_POST['idUsuario'],
    			"dataPostagem"=> date("d/m/Y"),
    			"comentario"=> $_POST['comentario'],

    		];

    		$arrayComentarios[]= $novoComentario;

    		$jsonAtualizado= json_encode($arrayComentarios, JSON_PRETTY_PRINT);
            file_put_contents('dados/comentarios.json', $jsonAtualizado);
    		break;
    	
    	
    }