<?php
 
 include("conecta.php");
 include("topo.php");
 include("banco/banco-aulas.php");
 include("banco/banco-comentario.php");
 
$id = $_GET['id'];
$aula = listarAulaPorId($conexao,$id);

$listadecomentarios = listarComentariosPorAula($conexao,$id);

//listar comentaraios desta aula

//vericando se o usuario ta logado
$email = usuariologado();
$usuariologado = retornarNomeAluno($conexao, $email);


if(usuarioEstaLogado()) { ?>



 
?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2><?= $aula['nome_aula'];?> </h2>
                        <hr class="small">
                        <span class="subheading">#boraaprender #boraprogramar #borapraticar</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    
                    <!-- Video do Viemo -->     
                            <?= $aula['video'];?> 
                       
                    <!-- Descricao do video -->     
                         <p class="post-meta">
                            <?= $aula['descricao'];?>

                         </p>
                    
                    <p class="post-meta">Postado por <a href="#">Caio Malheiros</a></p>
              </div>
                <hr>
                
                </div>
                <hr>
                <!-- Pager -->
                <div id="comecar">
                <ul class="pager">
                    
                   <li class="next">
                        <a href="#">&rarr; PRÓXIMA AULA &rarr;</a>
                    </li>

                </ul>
            </div>
            </div>
        </div>
    </div>

    <hr>

    <div id="comentarios">
        <center>
            <h3 class="post-subtitle">OLÁ <?= $usuariologado['nome']?>, DEIXE SEU COMENTÁRIO PARA</h3>
            <p class="post-meta"><b><?= $aula['nome_aula'];?></b></p>
            <hr>
        </center>   

  <?php foreach($listadecomentarios as $comentario): ?>
   

    <div id="bloco-comentario">
    
        <div id="foto-usuario">
            <img src="<?= $comentario['avatar'];?>" width="80" height="80">
        </div>


         <div id="usuario-comentario">
             <p class="post-meta"><b><?= $comentario['nome'];?></b></p>
         </div>


        <div id="texto-comentario">

         <p class="post-meta">
             <?= $comentario['comentario'];?>
         </p>

        </div>


        <div id="data-comentario">
            <p class="post-meta"><i><?= $comentario['data'];?></i></p>
        </div>
        
        <div id="linha">

        </div> 
    </div>

  <?php endforeach;?>

  

    </div>

    <div id="form-comentario">



       <form method="POST" action="cadastrar-comentario.php">
         <p class="post-meta"><b>Comentário:</b></p>
         <textarea name="txtcomentario" cols="100" rows="5"></textarea><br>
         <input type="hidden" name="aula_id" value="<?=$aula['idaulas'];?>">
         <input type="hidden" name="aluno_id" value="<?=$usuariologado['idalunos'];?>">
         <input type="hidden" name="curso_id" value="1">         
   
         <input type="submit" value="ENVIAR" class="btn btn-default" name="btnenviar">
     </form>
    </div>
<?php }else{


 header("Location: erro.php");

}?>


   <?php include("rodape.php"); ?>