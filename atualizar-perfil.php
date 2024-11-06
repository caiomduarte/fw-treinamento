

<?php
 include("conecta.php");
      include("topo.php");
      include("banco/banco-alunos.php");
    include("upload.php");


//vericando se o usuario ta logado
$email = usuariologado();
$usuariologado = retornarNomeAluno($conexao, $email);


$id = $usuariologado['idalunos'];




if(usuarioEstaLogado()) { ?>

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
             

                <?php 

                    
                 if($_POST){
                  

                    $nome = $_POST['nome'];
                    $sobrenome = $_POST['sobrenome'];
                    $email = $_POST['email'];
                    $cpf = $_POST['cpf'];
                    $celular = $_POST['celular'];
                    $senha = $_POST['senha'];
                    $avatar = $_FILES['avatar'];

                    //Nome do arquivo
                    $imagemCaminho = $_FILES['avatar']['name'];

            
                    $caminho = "img/perfil/" . $imagemCaminho;

                    if(tratar_anexo($avatar)){


                          if(alterarAluno($conexao, $nome, $sobrenome, $email, $cpf, $celular, $caminho, $senha,$id)){  ?>  

                          <br><center>
                             <h4>Parabéns <b><?= $nome; ?></b> seu cadastro foi ALTERADO com sucesso!</h4>
                              <a href="index.php"> Clique aqui para ir ao Painel de Aulas </a>
                          </center>

               <?php } else {

                    //pega o erro
                    $msg = mysqli_error($conexao);
                ?>
                     <center>
                        <h4>Erro ao ALTERAR DADOS!<br>Preencha todo os campos corretamente</h4>
                    
                    </center>

            <?php  }

             }} ?>


         
                <form name="sentMessage" id="contactForm" method="POST" enctype="multipart/form-data">
                   
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            Escolha uma Foto para o Perfil
                            <label>Avatar:</label>
                            <input type="file" class="form-control" placeholder="Escolha uma foto" name="avatar" required data-validation-required-message="Por favor escolha uma foto">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nome:</label>
                            <input type="text" class="form-control" value="<?= $usuariologado['nome']?>" placeholder="Nome" name="nome" required data-validation-required-message="Por favor digite seu nome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Sobrenome:</label>
                            <input type="text" class="form-control" value="<?= $usuariologado['sobrenome']?>" placeholder="Sobrenome" name="sobrenome" required data-validation-required-message="Por favor digite seu sobrenome.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>                    



                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Seu Melhor E-mail:</label>
                            <input type="email" class="form-control" value="<?= $usuariologado['email']?>" placeholder="E-mail" name="email" required data-validation-required-message="Por favor digite seu melhor email.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>CPF: </label>
                            <input type="text" class="form-control" value="<?= $usuariologado['cpf']?>" placeholder="Cpf" name="cpf" required data-validation-required-message="Por favor digite seu CPF.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Celular:</label>
                            <input type="tel" class="form-control" value="<?= $usuariologado['celular']?>" placeholder="Celular" name="celular" required data-validation-required-message="Por favor digite seu Celular.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Senha:</label>
                            <input type="password" class="form-control" value="<?= $usuariologado['senha']?>" placeholder="Senha" name="senha" required data-validation-required-message="Por favor digite sua senha.">
                              <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" value="Atualizar" class="btn btn-default">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

<?php }else {

    header("Location: erro.php");
}

?>



<?php include("rodape.php"); ?>