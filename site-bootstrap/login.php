<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                            <input title="Email de cadastro" name="nome_login" type="email" class="form-control" id="floatingInput" placeholder="Melhor Email" required>
                            <label class="floating-label" for="floatingInput">Melhor Email</label>
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
        switch ($_REQUEST['envio']) {
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