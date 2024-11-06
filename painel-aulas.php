<?php
 
 include("conecta.php");
 include("topo.php");
 include("banco/banco-aulas.php");

 $listaaulas = listarNomeThumbAulas($conexao);
 
//vericando se o usuario ta logado
if(usuarioEstaLogado()) { ?>
       
           

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2>Curso: Criando um Sistema de OS em Java</h2>
                        <hr class="small">
                        <span class="subheading">Seja muito bem vindo ao curso jovem gafanhoto!</span>
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
                    <a href="post.html">
                                          
                        <h3 class="post-subtitle">
                            Painel de aulas do curso
                        </h3>
                    </a>
                    <p class="post-meta">Assista todas as aulas quantas vezes forem necessário!</p>
              </div>
                <hr>
                
                <!-- Divs painel aulas -->
                <div id="painel-aulas">
                    
          

            <?php foreach($listaaulas as $aula): ?>
                    <div class="aula">
                        <img src="img/tim.jpg">
                      
                        <span class="nome"><a href="aula.php?id=<?= $aula['idaulas'];?>"><?= $aula['nome_aula'];?></a> </span>
                    </div>
             <?php endforeach;?>            



                </div>
            
                                
                </div>
                <hr>
                <!-- Pager -->
                <div id="comecar">
                <ul class="pager">
                    <li class="next">
                        <a href="#">&rarr; Solicitar Atendimento &rarr;</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>

    <hr>



<?php }else {


   header("Location: erro.php"); 

}

?>

<?php include("rodape.php"); ?>