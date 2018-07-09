<?php
    $acao= $_GET['acao'];
    include("funcoes/json.php");
    $arrayUsuarios= arrayUsuarios();
    $dadosEnviados= $_POST;

    switch ($acao) {
        case 'cadastro':
            
            $foto_perfil= $_FILES['foto_perfil'];
            $destinoFoto= './imagens/avatares/';
            

            if($_POST['senha']==$_POST['confirmacaoSenha']) {

                $novoUsuario= [

                "idUsuario"=> uniqid(),
                "permissao"=> "usuario",
                "nome"=> $_POST['nome'],
                "email"=> $_POST['email'],
                "senha"=> hash('sha384',$_POST['senha']),
                "nascimento"=> $_POST['data_nasc'],

                ];

                if(verificaExtensao($foto_perfil['type']) == true) {


                    $data= date('dmYHis');
                    $nomeExplodido= explode('.', $foto_perfil['name']);
                    $extensao= end($nomeExplodido);
                    $nomeSemEspaco= str_replace(' ','',$nomeExplodido[0]);
                    $nomeFoto= $nomeSemEspaco.$data.".".$extensao;
                    $arquivoFinal= $destinoFoto.$nomeFoto;
                    $origem= $foto_perfil['tmp_name'];
                    $enviada= move_uploaded_file($origem, $arquivoFinal);
                    $novoUsuario['imagemPerfil']= $nomeFoto;

                } else {
                    erroUsuario('naoImagem');
                }

                $arrayUsuarios[]= $novoUsuario;
                $jsonAtualizado= json_encode($arrayUsuarios, JSON_PRETTY_PRINT);
                file_put_contents('dados/usuarios.json', $jsonAtualizado);
            } else {
                erroUsuario('confirmaSenhaErrado');
            }

            break;

        case 'login':
            $usernameEnviado= $dadosEnviados['login'];
            $usuario= buscaNome($usernameEnviado);
            $senhaEnviadaCriptografada= hash('sha384',$dadosEnviados['senha']);

            if ($senhaEnviadaCriptografada==$usuario['senha']) {
                session_start();
                $_SESSION= $usuario;
                header('Location: loginAprovado.php');
            } else {
                erroUsuario('senhaErrada');
            }

            break;

        case 'sair':
            session_start();
            session_destroy();
            break;

    }
