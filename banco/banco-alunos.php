<?php

function cadastrarAluno($conexao, $nome, $sobrenome, $email, $cpf, $celular, $avatar, $senha) {

//comando sql
$query = "INSERT INTO alunos (nome,sobrenome,email,cpf,celular,avatar,senha)
               values ('{$nome}', '{$sobrenome}', '{$email}', '{$cpf}', '{$celular}', '{$avatar}' ,'{$senha}')";
                

return mysqli_query($conexao, $query);
                
}
    

//Editar dados de um aluno

function alterarAluno($conexao, $nome, $sobrenome, $email, $cpf, $celular, $avatar, $senha, $id) {

//comando sql
$query = "update alunos set nome='{$nome}', sobrenome= '{$sobrenome}', email='{$email}', cpf='{$cpf}',
                 celular='{$celular}', avatar='{$avatar}', senha='{$senha}' where idalunos={$id}";
                             

return mysqli_query($conexao, $query);
                
}

//Desativar aluno do sistema 

function desativarAluno($conexao, $id) {

//comando sql
$query = "update aluno set status='DESATIVADO' where idalunos={$id}";
                             

return mysqli_query($conexao, $query);
                
}


//metodo excluir aluno sistema


function excluirAluno($conexao,$id) {

//comando sql
$query = "delete from alunos where idalunos = $id";                

return mysqli_query($conexao, $query);
                
}
    

//Consultar todos os usuarios

//FunÃ§ao para listar todos alunos
function listarAlunos($conexao){ 
    
    $usuarios = array();
    $resultado = mysqli_query($conexao,"select * from alunos");

    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);         
    }   

    return $usuarios;
    
}

//Busca aluno por id
function buscaAlunoPorId($conexao, $id) {
	$query = "select * from alunos where idalunos = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

//Busca por email
function buscaEmailSistemaPorEmail($conexao, $email) {
	$query = "select * from alunos where email = {'$email'}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}




function recuperarSenha($conexao,$resposta){
    
   
    $query = "select * from usuarios_sistema where resposta = {'$resposta'}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
    
}

//Metodo de login

function efetuaLogin($conexao, $email, $senha){

	//$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from alunos where email='{$email}' and senha='{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}
    
    

 function retornarNomeAluno($conexao, $email){

        $resultado = mysqli_query($conexao,"select * from alunos where email='{$email}'");
    	return mysqli_fetch_assoc($resultado);

}