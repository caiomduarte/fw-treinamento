<?php

include("conecta.php");
include("banco/banco-comentario.php");


$curso_id = $_POST['curso_id'];
$aluno_id = $_POST['aluno_id'];
$aula_id = $_POST['aula_id'];
$comentario = $_POST['txtcomentario'];
$data = date('Y-m-d H:i:s');

if(cadastrarComentario($conexao, $curso_id, $aluno_id, $aula_id, $comentario, $data)){

   header("Location: aula.php?id=$aula_id");



}else {

	$msg = mysqli_error();
	echo $msg;

}