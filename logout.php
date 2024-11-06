<?php

include("banco/logica-alunos.php");

logout();
$_SESSION["success"] = "Deslogado com sucesso.";
header("Location: login.php");
die();