<?php
	file_put_contents('rate.txt', "{$_POST['estrelas']}");
	$retorno = ['status'=>1];
	echo json_encode($retorno);