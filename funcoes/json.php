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

    function reqURL(){
        $aux = explode("/", $_SERVER['REQUEST_URI']);
        $aux_two = explode(".", end($aux));
        $paginaAtual = $aux_two[0];
        return$paginaAtual;
    }

    function acessoNegado() {
        if(empty($_SESSION)==true){
            header('Location: resposta.php?cod=acessoNegado');
        }
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

    function pesquisar($palavraPesquisada){

    	$generos= array('ação','aventura','simulação','estratégia','construção','rpg','sobrevivência','guerra','luta','corrida','tiro','ação-aventura');
    	$jogosSistema= arrayJogos();

    	foreach ($jogosSistema as $jogo) {
    		if ($jogo['titulo']==$palavraPesquisada) {
    			header('Location: detalhaJogo.php?jogo='.$jogo['id']);
    			exit(); 
    		}
    	}

    	foreach ($generos as $genero) {
    		if ($palavraPesquisada=='ação-aventura') {
                header('Location: listaJogos.php');
                exit();
    		} else {
                print('Não possuímos o gênero "'.$palavraPesquisada.'" em nosso site.');
                exit();
            }
    	}

    }

    function verificaPesquisa(){
        if (isset($_GET['pesquisa'])==true) {
            $palavraPesquisada= $_GET['pesquisa'];
            pesquisar($palavraPesquisada);
        }
    }

    function organizaJSONalfabetica($arquivo,$chaveId){
    #funcao para organizar um json em ordem alfabetica
        $json= file_get_contents($arquivo);
        $dadosBrutos= json_decode($json, true);

        $dados = array();
        foreach ($dadosBrutos as $pos => $dado) {
            $dados[] = $dado[$chaveId];   
        }
        array_multisort($dados, SORT_STRING, $dadosBrutos);
        

        $json = json_encode($dadosBrutos, JSON_PRETTY_PRINT);
        file_put_contents($arquivo, $json);
    }

    function organizaJSONdata(){
        $json= file_get_contents('../dados/resenhas.json');# abre o json
        $dadosBrutos= json_decode($json, true); # decodifica o json num array

        foreach ($dadosBrutos as $key => $value) {
            echo $value['dataPostagem'];
            echo "<br>";
            $partes[] = explode('/', $value['dataPostagem']);
        }
        echo "<br>";
        print_r($partes);
        foreach ($partes as $parte => $valor) {
           $parte[] = $parte[$valor][0]+$parte[$valor][1]+$parte[$valor][2];
        }
        echo "<br>"; echo "<br>";
        print_r($partes);
    }
    organizaJSONdata();
