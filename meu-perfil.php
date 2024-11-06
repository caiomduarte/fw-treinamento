

<?php
 include("conecta.php");
 include("topo.php");
 include("banco/banco-alunos.php");
 include("upload.php");

//vericando se o usuario ta logado




if(usuarioEstaLogado()) { 

    //vericando se o usuario ta logado
$email = usuariologado();
$usuariologado = retornarNomeAluno($conexao, $email);?>


?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Meu Perfil</h1>
                        <hr class="small">
                        <span class="subheading">Conte para nós um pouco sobre você.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Mantenha sempre seus dados atualizados, assim você fica por dentro de todas as novidades!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
             

                <img src="<?= $usuariologado['avatar']?>"  width="221" heigth="220"><br>
              
              <div id="area-usuario">
                ID: <b>123</b><br>
                Nome:   <b><?= $usuariologado['nome']?></b> <br>
                Sobrenome: <b><?= $usuariologado['sobrenome']?></b><br>
                E-mail: <b><?= $usuariologado['email']?></b><br>
                CPF: <b><?= $usuariologado['cpf']?></b><br>   
                Celular: <b><?= $usuariologado['celular']?> </b><br> 

                <br>
              

                <div class="row">
                   <div class="form-group col-xs-12">
                              
                       <a href="atualizar-perfil.php?id=2" class="btn btn-default">Atualizar dados</a>
                    
                    </div>

            
                    
                </div>

                     </div>
                
            </div>
        </div>
    </div>

    <hr>


<?php } else {


    header("Location: erro.php");

}

?>

<?php include("rodape.php"); ?>