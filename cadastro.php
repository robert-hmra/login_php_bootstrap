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

    <title>cadastro</title>
    <style></style>
</head>
<body>
    <main id="cadastrar" class="text-center">
        <div class="container-fluid justify-content-center py-5 gx-1">
            <h1 class="mb-5">Cadastro</h1>
            <div class="row center px-3 py-4 mb-5">
                <div class="col-12 p-0">
                    <form action="?envio=cadastro" method="POST">
                        <input type="hidden" name="acao" value="cadastrar">
                        <div class="form-floating mb-4">
                            <input name="nome_completo" title="Nome obrigatório" id="nome-completo" type="text" name="user_login" class="form-control" placeholder="Nome completo"  required>
                            <label class="floating-label" for="nome-completo" >Nome completo</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input name="email_login" title="Exemplo: ana21abc@gmail.com" type="email" class="form-control form-input" id="email" placeholder="Melhor Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" required>
                            <label class="floating-label" for="email">Melhor Email</label>
                        </div>                        
                        <div class="form-floating mb-5">
                            <input name="telefone" title="DDD X XXXX-XXXX" id="telefone" type="tel" class="form-control" placeholder="Telefone" required>
                            <label class="floating-label" for="telefone">Telefone</label>
                        </div>
                        <div class="row form-floating gy-5 mb-5 w-auto">
                            <div class="col text-start">
                                <div class="btn-group dropdown">
                                    <button class="btn btn-light form-control w-100 p-3 m-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                                        Gênero
                                    </button>
                                    <ul class="dropdown-menu bg-light ps-3 form-check-group" id="dropdown">
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
                                <input name="data_nasc" min="1990-01-01" max="2010-12-31" id="data-nascimento" type="date" name="user_login" class="form-control py-3" aria-autocomplete="list" required>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="senha_user" id="senha" class="form-control" placeholder="Sua senha" minlength="8" maxlength="20" aria-autocomplete="list" required>
                            <label for="senha" class="floating-label">Sua senha</label>
                            <div for="senha" class="form-text text-light">
                                Mínimo 8 caracteres, máximo 20, use caracteres especiais
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="confirm_senha" id="confirm_senha" class="form-control" placeholder="Confirme sua senha" minlength="8" maxlength="20" aria-autocomplete="list" required>
                            <label for="confirm_senha" class="floating-label">Confirme sua senha</label>
                            <div for="confirm_senha" class="form-text text-light">
                                Mínimo 8 caracteres, máximo 20, use caracteres especiais
                            </div>
                        </div>
                        <div class="form-floating mb-5">
                            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Seu endereço">
                            <label for="endereco" class="floating-label">Seu endereco</label>
                        </div>
                        <div class="row  mx-auto text-center justify-content-center">
                            <div class="col-12 col-sm-6 ">
                                <button  type="submit" title="Cadastrar" class="btn w-100 py-3">Cadastrar</button>
                            </div>
                            <a href="index.php" title="cadastrar_usuario" class="next_option mt-2">Já sou cadastrado</a>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
            <?php
                switch(@$_REQUEST['envio']){
                    case 'cadastro':
                        include ('validacao.php');
                        break;
                }
            ?>
</body>
</html>