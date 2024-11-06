<?php

function cadastrarAluno($conexao, $nome, $sobrenome, $email, $cpf, $celular, $avatar, $senha) {

//comando sql
$query = "INSERT INTO alunos (nome,sobrenome,email,cpf,celular,avatar,senha) values ('{$nome}', '{$sobrenome}', '{$email}', '{$cpf}', '{$celular}', '{$avatar}' ,'{$senha}')";
                

return mysqli_query($conexao, $query);
                
}
    

 function retornarNomeAluno($conexao, $email){

        $resultado = mysqli_query($conexao,"select * from alunos where email='{$email}'");
    	return mysqli_fetch_assoc($resultado);

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


function excluirAula($conexao,$id) {

//comando sql
$query = "delete from aulas where idaulas = $id";                

return mysqli_query($conexao, $query);
                
}
    

//Consultar todos os usuarios

//FunÃ§ao para listar aulas para tumb
function listarNomeThumbAulas($conexao){ 
    
    $aulas = array();
    $resultado = mysqli_query($conexao,"select * from aulas");

    while($aula = mysqli_fetch_assoc($resultado)){
        array_push($aulas, $aula);         
    }   

    return $aulas;
    
}


//FunÃ§ao para listar aulas para tumb
function listarAulaPorId($conexao, $id){ 
    
 
         $resultado = mysqli_query($conexao,"select * from aulas where idaulas={$id}");
    	return mysqli_fetch_assoc($resultado);
}



