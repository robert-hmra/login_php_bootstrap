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

    <title>cadastro</title>
    <style></style>
</head>
<body>
    <main id="cadastrar" >
        <div class="container-fluid justify-content-center" >
            <div class="row center py-3 justify-centent-center">
                <div class="col-12">
                    <form action="?envio=cadastro" method="POST">
                        <input type="hidden" name="acao" value="cadastrar">
                        <div class="form-floating mb-3">
                            <input name="nome_completo" title="Nome obrigatório" id="nome-completo" type="text" name="user_login" class="form-control" placeholder="Nome completo"  required>
                            <label class="floating-label" for="nome-completo" >Nome completo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="email_login" title="Exemplo: ana21abc@gmail.com" type="email" class="form-control form-input" id="email" placeholder="Melhor Email" required>
                            <label class="floating-label" for="email">Melhor Email</label>
                        </div>                        
                        <div class="form-floating mb-3">
                            <input name="telefone" title="DDD X XXXX-XXXX" id="telefone" type="tel" class="form-control" placeholder="Telefone" required>
                            <label class="floating-label" for="telefone">Telefone</label>
                        </div>
                        <div class="form-floating row mb-3">
                            <div class="col">
                                <div class="btn-group dropdown">
                                    <button class="btn btn-dark form-control w-100 m-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                                        Gênero
                                    </button>
                                    <ul class="dropdown-menu bg-dark text-light ps-3 form-check-group" id="dropdown">
                                        <li for="genero1">
                                            <input class="form-check-input" type="radio" name="genero" id="genero1" value="1" required>
                                            <label class="form-check-label" for="genero1">
                                                Masculino
                                            </label>
                                        </li>
                                        <li for="genero2">
                                            <input class="form-check-input" type="radio" name="genero" id="genero2" value="2" required>
                                            <label class="form-check-label" for="genero2">
                                                Feminino
                                            </label>
                                        </li>
                                        <li for="genero3">
                                            <input class="form-check-input" type="radio" name="genero" id="genero3" value="3" required>
                                            <label class="form-check-label" for="genero3">
                                                Outro
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <input name="data_nasc" min="1990-01-01" max="2010-12-31" id="data-nascimento" type="date" name="user_login" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="senha_user" id="senha" class="form-control" placeholder="Sua senha" minlength="8" maxlength="20" required>
                            <label for="senha" class="floating-label">Sua senha</label>
                            <div for="senha" class="form-text text-danger">
                                Mínimo 8 caracteres, máximo 20, use caracteres especiais
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="confirm_senha" id="confirm_senha" class="form-control" placeholder="Confirme sua senha" minlength="8" maxlength="20" required>
                            <label for="confirm_senha" class="floating-label">Confirme sua senha</label>
                            <div for="confirm_senha" class="form-text text-danger">
                                Mínimo 8 caracteres, máximo 20, use caracteres especiais
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Seu endereço">
                            <label for="endereco" class="floating-label">Seu endereco</label>
                        </div>
                        <div class="row  mx-auto text-center justify-content-center">
                            <div class="col-12 col-sm-6 ">
                                <button  type="submit" title="Cadastrar" class="btn w-100 py-3">Cadastrar</button>
                            </div>
                            <a href="login.php" title="cadastrar_usuario" class="next_option mt-2">Já sou cadastrado</a>   
                        </div>
                    </form>
                </div>
            </div>
            <?
                switch(@$_REQUEST['envio']){
                    case 'cadastro':
                        
                        break;
                }
            ?>
        </div>
    </main>
</body>
</html>