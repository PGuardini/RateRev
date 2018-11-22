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

    function arrayReacoes(){
        $json= file_get_contents('./dados/reacoes.json');
        $arrayReacoes= json_decode($json, true);
        return $arrayReacoes;
    }

    function reqURL(){
        $aux = explode("/", $_SERVER['REQUEST_URI']);
        $aux_two = explode(".", end($aux));
        $paginaAtual = $aux_two[0];
        return $paginaAtual;
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



    function buscaJogoResenha($resenha){
	    $jogos=arrayJogos();
	    foreach ($jogos as $jogo) {
            if ($jogo["id"]==$resenha["idJogo"]){
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
                if(in_array($palavraPesquisada,$generos)){
                    header('Location: resposta.php?cod=pesquisaNaoEncontrada&pesquisado=genero&termo='.$palavraPesquisada);
                    exit();
                } else {
                    header('Location: resposta.php?cod=pesquisaNaoEncontrada&pesquisado=termo&termo='.$palavraPesquisada);
                    exit();
                }
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

    function organizaJSONdecresce($arquivo,$chaveId){
    #funcao para organizar um json em ordem decrescente 
        $json= file_get_contents($arquivo);
        $dadosBrutos= json_decode($json, true);

        $dados = array();
        foreach ($dadosBrutos as $pos => $dado) {
            $dados[] = $dado[$chaveId];   
        }
        array_multisort($dados, SORT_DESC, $dadosBrutos);
        

        $json = json_encode($dadosBrutos, JSON_PRETTY_PRINT);
        file_put_contents($arquivo, $json);
    }

    function contaReacoes($idResenha){
        $arrayReacoes= arrayReacoes();
        $curtidas= 0;
        $descurtidas= 0;

        foreach ($arrayReacoes as $reacao) {
            if ($reacao['tipo']=='curtida' and $reacao['ativo']==true and $reacao['idResenha']==$idResenha) {
                $curtidas++;
            }

            if($reacao['tipo']=='descurtida' and $reacao['ativo']==true and $reacao['idResenha']==$idResenha) {
                $descurtidas++;
            }
        }

        $arrayEnviado= [

                    'curtidas'=> $curtidas,
                    'descurtidas'=> $descurtidas

                ];

        return $arrayEnviado;
    }

    function estaReagido($idUsuario,$idResenha,$tipoReacao) {
        $arrayReacoes= arrayReacoes();

        foreach ($arrayReacoes as $reacao) {
            if ($reacao['tipo']==$tipoReacao and $reacao['idUsuario']==$idUsuario and $reacao['idResenha']==$idResenha and $reacao['ativo']== true) {
                $reagido= true;
                break;
            } else {
                $reagido= false;
            }
        }

        return $reagido;
    }

    function curtir(){

        $arrayReacoes= arrayReacoes();

        foreach ($arrayReacoes as $key => $reacao) {
            if($reacao['idUsuario']==$_SESSION['idUsuario'] and $reacao['tipo']=='curtida' and $reacao['idResenha']==$_GET['resenha'] and $reacao['ativo']==false) {
                unset($arrayReacoes,$key);
                break;
            }

            if($reacao['idUsuario']==$_SESSION['idUsuario'] and $reacao['tipo']=='descurtida' and $reacao['idResenha']==$_GET['resenha'] and $reacao['ativo']==true) {
               tirarDescurtir();
            }
        }

        $novaReacao= [
            "idUsuario"=> $_SESSION['idUsuario'],
            "idResenha"=> $_GET['resenha'],
            "ativo"=> true,
            "tipo"=> "curtida"
        ];

        $arrayReacoes[]= $novaReacao;
        $reacoesJSON= json_encode($arrayReacoes, JSON_PRETTY_PRINT);
        file_put_contents("dados/reacoes.json",$reacoesJSON);

    }

    function tirarCurtir() {
        $arrayReacoes= arrayReacoes();
        
        foreach ($arrayReacoes as $key => $reacao) {
            if($reacao['idUsuario']==$_SESSION['idUsuario'] and $reacao['tipo']=='curtida' and $reacao['idResenha']==$_GET['resenha'] and $reacao['ativo']==true) {
                unset($arrayReacoes,$key);

                $novaReacao= [
                    "idUsuario"=> $_SESSION['idUsuario'],
                    "idResenha"=> $_GET['resenha'],
                    "ativo"=> false,
                    "tipo"=> "curtida"
                ];

                $arrayReacoes[]= $novaReacao;
                break;
            }
        }


        $reacoesJSON= json_encode($arrayReacoes, JSON_PRETTY_PRINT);
        file_put_contents("dados/reacoes.json",$reacoesJSON);

    }

    function descurtir(){
        
        $arrayReacoes= arrayReacoes();

        foreach ($arrayReacoes as $key => $reacao) {
            if($reacao['idUsuario']==$_SESSION['idUsuario'] and $reacao['tipo']=='curtida' and $reacao['idResenha']==$_GET['resenha'] and $reacao['ativo']==true) {
                tirarCurtir();
            }

            
            if($reacao['idUsuario']==$_SESSION['idUsuario'] and $reacao['tipo']=='descurtida' and $reacao['idResenha']==$_GET['resenha'] and $reacao['ativo']==false) {
                unset($arrayReacoes,$key);
                break;
            }

        }

        $novaReacao= [
            "idUsuario"=> $_SESSION['idUsuario'],
            "idResenha"=> $_GET['resenha'],
            "ativo"=> true,
            "tipo"=> "descurtida"
        ];

        $arrayReacoes[]= $novaReacao;
        $reacoesJSON= json_encode($arrayReacoes, JSON_PRETTY_PRINT);
        file_put_contents("dados/reacoes.json",$reacoesJSON);

    }

    function tirarDescurtir(){


        foreach ($arrayReacoes as $key => $reacao) {
            if($reacao['idUsuario']==$_SESSION['idUsuario'] and $reacao['tipo']=='descurtida' and $reacao['idResenha']==$_GET['resenha'] and $reacao['ativo']==true) {
                        unset($arrayReacoes,$key);

                $novaReacao= [
                    "idUsuario"=> $_SESSION['idUsuario'],
                    "idResenha"=> $_GET['resenha'],
                    "ativo"=> false,
                    "tipo"=> "descurtida"
                ];

                $arrayReacoes[]= $novaReacao;
                break;
            }
        }

        $reacoesJSON= json_encode($arrayReacoes, JSON_PRETTY_PRINT);
        file_put_contents("dados/reacoes.json",$reacoesJSON);

    }

    function excluiResenha($idResenha){
        $resenhas = arrayResenhas();
        foreach ($resenhas as $key => $resenha) {
            if ($resenha['idResenha']==$idResenha) {
                array_splice($resenhas,$key,1);
            }
            break;
        }
        file_put_contents("dados/resenhas.json",json_encode($resenhas,JSON_PRETTY_PRINT));
    }
    
    
    /*function organizaJSONdata($arquivo1, $arquivo2){
        $json = file_get_contents($arquivo1);# abre o json
        $dados = json_decode($json, true); # decodifica o json num array

        $json2 = file_get_contents($arquivo2);# abre o json
        $dados2 = json_decode($json, true); # decodifica o json num array

        foreach ($dados as $resenhas) {
            $data = $resenhas['dataPostagem'];
            $exp_data = explode('/', $data);
            $somas[] = (int)$exp_data[0]+(int)$exp_data[1]+(int)$exp_data[2];    
        }
        arsort($somas);
        $somas = array_flip($somas);
        $somas = array_values($somas); 
        
        $dados2 = uksort($dados2, cmp_function);

        //$dados2 = array_replace($dados2, $somas);
        print_r($dados2);

        //$json = json_encode($dados2, JSON_PRETTY_PRINT);
        //file_put_contents($arquivo2, $json);
    }
    //organizaJSONdata('../dados/resenhas.json', '../dados/jogos.json');

    ***  em nome das horas em que gastei escrevendo este código ele ficará aqui        ***
    ***  sem motivo algum, apenas como um comentário, para honrar todas as horas que   ***
    ***  dediquei a ele e que agora foram inúteis, descanse em paz nobre função        ***
    */