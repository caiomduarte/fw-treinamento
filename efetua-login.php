  <?php 

include("conecta.php");
include("banco/banco-alunos.php");
include("banco/logica-alunos.php");

                 if($_POST){
                                    
                  
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                  
                  
                  //1 passo verificar se o usuario existe
                   if(efetuaLogin($conexao, $email, $senha)){
                       
                       logaUsuario($email);
                    
                       header("Location: index.php");
                       
                   }else{
                          $email = $_POST['txtemail'];
                          echo "Dados incorretos ou usuário desativado. Contate o suporte";
                   }
                 
                  
                  
              }
              
              
              ?>

