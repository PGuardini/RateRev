<?php


	function arrayJogos(){
		$json= file_get_contents('dados/jogos.json');
    	$arrayJogos= json_decode($json, true);
    	return $arrayJogos;
	}

	function arrayUsuarios(){
		$json= file_get_contents('dados/usuarios.json');
    	$arrayUsuarios= json_decode($json, true);
    	return $arrayUsuarios;
	}

    function arrayResenhas(){
        $json= file_get_contents('dados/resenhas.json');
        $arrayResenhas= json_decode($json, true);
        return $arrayResenhas;
    }

    function arrayComentarios(){
        $json= file_get_contents('./dados/comentarios.json');
        $arrayComentarios= json_decode($json, true);
        return $arrayComentarios;
    }


    function buscaResenhaJogo($idJogo){
		$resenhasEncontradas= array();

    	$arrayResenhas= arrayResenhas();

    	foreach ($arrayResenhas as $resenha) {
    		if ($resenha['idJogo']== $idJogo) {
    			$resenhasEncontradas[]= $resenha;
    		}
    	}

    	return $resenhasEncontradas;
	}

	function buscaUsuario($idUsuario) {
		$arrayUsuarios= arrayUsuarios();

    	foreach ($arrayUsuarios as $usuario) {
    		if ($usuario['idUsuario']== $idUsuario) {
    			$usuarioEncontrado= $usuario;
    			break;
    		}
    	}

    	return $usuarioEncontrado;
	}

    function verificaExtensao($tipoEnviado){
        $tipoExplodido= explode('/', $tipoEnviado);
        $tipo= $tipoExplodido[0];
        if ($tipo=='image') {
        	return true;
        } else {
        	return false;
        }
        
    }

    function erroUsuario($tipoErro) {
    	$erros= ['confirmaSenhaErrado','naoImagem','usuarioNaoExiste','senhaErrada'];
    	$mensagens= ['As senhas digitas não correspondem!','O arquivo enviado não é uma imagem','O username enviado não existe','A senha não corresponde'];

    	foreach ($erros as $chave => $erro) {
    		if ($erro==$tipoErro) {
    			print($mensagens[$chave]);
    		}
    	}
    }

    function buscaNome($nomeEnviado) {
    	$arrayUsuarios= arrayUsuarios();
    	$usuarioEncontrado= array();

    	foreach ($arrayUsuarios as $usuario) {
    		if ($usuario['nome']==$nomeEnviado) {
    			$usuarioEncontrado= $usuario;
    			return $usuarioEncontrado;
    			break;
    		}	
    	} 

    	if (empty($usuarioEncontrado)==true) {
    		erroUsuario('usuarioNaoExiste');
    		exit;
    	}

    }

    function buscaComentariosResenha($idResenha) {
        $arrayComentarios= arrayComentarios();

        $comentariosEncontrados= array();
        foreach ($arrayComentarios as $comentario) {
            if ($comentario['idResenha']==$idResenha) {
                $comentariosEncontrados[]= $comentario;
            }
        }

        if (empty($comentariosEncontrados)==true) {
            return 'semComentarios';
        } else{
            return $comentariosEncontrados;
        }
    }

    function buscaResenhaUser($idUser){
        $resenhas = arrayResenhas();
        $resenhasUser = [];
        foreach ($resenhas as $resenha) {
            if ($idUser==$resenha['idUsuario']) {
                $resenhasUser[] = $resenha;
            }
        }
        return $resenhasUser;
    }



    function buscaJogoResenha($idResenha){
        $resenhas=arrayResenhas();
        $resenhaAtual=null;
	    foreach ($resenhas as $resenha) {
            if ($resenha["idResenha"] == $idResenha) {
                $resenhaAtual = $resenha;
                break;
            }
        }
	    $jogos=arrayJogos();
	    foreach ($jogos as $jogo) {
            if ($jogo["id"]==$resenhaAtual["idJogo"]){
                return $jogo;
                break;
            }
	    }
    }