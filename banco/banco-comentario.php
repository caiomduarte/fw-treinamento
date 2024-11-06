<?php

function cadastrarComentario($conexao, $curso_id, $aluno_id, $aula_id, $comentario, $data) {

//comando sql
$query = "INSERT INTO comentarios (curso_id,aluno_id,aula_id,comentario,data) 
values ({$curso_id}, {$aluno_id}, {$aula_id}, '{$comentario}', '{$data}')";
                

return mysqli_query($conexao, $query);
                
}
   


//Consultar todos os usuarios

//Funçao para listar comentarios de uma aulas pelo id da aula
function listarComentariosPorAula($conexao,$id){ 
    
    $aulas = array();
    $resultado = mysqli_query($conexao,"select aula.idaulas, a.avatar, a.nome, c.comentario, c.data from comentarios as c
                                        inner join alunos as a on (c.aluno_id = a.idalunos)
                                        inner join aulas as aula on (c.aula_id = aula.idaulas)
                                        where aula.idaulas = {$id}");

    while($aula = mysqli_fetch_assoc($resultado)){
        array_push($aulas, $aula);         
    }   

    return $aulas;
    
}




