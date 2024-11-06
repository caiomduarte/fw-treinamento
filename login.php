

<?php
 include("conecta.php");
 include("topo.php");
 include("banco/banco-alunos.php");

 include("upload.php");


?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Entrar!</h1>
                        <hr class="small">
                        <span class="subheading">Faça o login e comece agora a aprender!.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Efetue seu login:</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
             

              
         
                <form name="sentMessage" id="contactForm" method="POST" action="efetua-login.php">
                   
                    

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Seu Melhor E-mail:</label>
                            <input type="email" class="form-control" placeholder="E-mail" name="email" required data-validation-required-message="Por favor digite seu melhor email.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Senha:</label>
                            <input type="password" class="form-control" placeholder="Senha" name="senha" required data-validation-required-message="Por favor digite sua senha.">
                              <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                          <center>
                            <input type="submit" value="Entrar" class="btn btn-success">
                            <a href="recuperar-senha.php" class="btn btn-danger">Esqueci minha senha</a>
                        </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

<?php include("rodape.php"); ?>