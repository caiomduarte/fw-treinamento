<?php


function tratar_anexo($anexo) {
	$padrao = '/^.+(\.jpg|\.png|\.jpeg)$/';
	$resultado = preg_match($padrao, $anexo['name']);
	
	if (! $resultado) {
		return false;
	}
	
	move_uploaded_file($anexo['tmp_name'],"img/perfil/{$anexo['name']}");
        
	return true;
}


?>