<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap JavaScript -->
    <script src="bootstrap-5.3.0/js/bootstrap.js" crossorigin="anonymous" defer></script>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.3.0/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
   <!-- Css Local -->    
    <link rel="stylesheet" href="css/style.css"> 

    <title>Document</title>
</head>
<body >
<main id="login">
    <div class="container-fluid px-1">
        <div class="center-componentes px-sm-4 py-4 px-2">
            <div class="logo">
            </div>
            <div class="row mx-0 px-2 px-sm-4 justify-content-center">
                <div class="col-xs-12 px-0 text-center">
                    <form action="?envio=login" method="POST">
                        <input type="hidden" name="acao" value="logar">
                        <div class="form-floating mb-3">
                            <input title="Email de cadastro" name="email" type="email" class="form-control" id="email_user" placeholder="Melhor Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" required>
                            <label class="floating-label" for="email_user">Melhor Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input title="Senha de usuário" name="senha_login" type="password" class="form-control" id="senha" placeholder="Sua senha" required>
                            <label class="floating-label" for="senha">Sua senha</label>
                        </div>
                        <div class="row mx-auto justify-content-center">
                            <div class="col-10 px-0 col-sm-6 mt-4">
                                <button  type="submit" title="verificar login" class="btn w-100 py-3">Entrar</button>
                            </div>
                            <a href="cadastro.php" title="cadastrar_usuario" class="next_option mt-2">Realizar cadastro</a>   
                        </div>
                    </form>
                                     
                </div>
            </div>
        </div>
        <footer class="w-100 position-absolute bottom-0 start-0"> 
            <p>
                
            </p>
        </footer>
    </div>
</main>
    <?php 
        switch (@$_REQUEST['envio']) {
            case 'login':
                include("validacao.php");
                break;
            
            default:
                # code...
                break;
        }
    ?>
</body>
</html>