<?php 
    switch (@$_REQUEST['acao']) {
        case 'logar':
                $email = $conn->real_escape_string($_POST['email']);
                $senha = $conn->real_escape_string($_POST['senha_login']);

                $sql = "SELECT * FROM cadastro";
                $res = $conn-> query($sql) or die ($conn->errno);
                $qtd = $res->num_rows;
                $row = $res -> fetch_object();

                if(($qtd > 0)||($res == True)){
                
                    if (!isset($_SESSION)){
                        session_start();
                    }

                    $_SESSION['nome']   = $row -> nome;
                    $_SESSION['email']  = $row -> email;
                    $_SESSION['senha']  = $row -> senha;

                    print  "Te encontrei: ".$_SESSION['nome'];
                    print '<script>location.href = "sistema.php";</script>';
                }
            else{ 
                    print   "<div id='alert' class='alert bg-danger bg-opacity-75 text-light position-fixed end-0 start-0 bottom-0 m-auto w-25'>
                                Usuário ou senha incorreta
                                <button type='button' class='btn-close end-0 position-absolute me-3' data-bs-dismiss='alert' aria-label='Close'>
                                    <span type='hidden' class='invisible'>botao de fechar</span>
                                </button>
                            </div>";
                }
            break;

        case 'cadastrar':
            $nome_completo  = $_POST['nome_completo'];
            $email          = $_POST['email_login'];
            $telefone       = $_POST['telefone'];
            $data_nasc      = $_POST['data_nasc'];
            $genero         = $_POST['genero'];
            $senha          = $_POST['senha_user'];
            $senha_confirm  = $_POST['confirm_senha'];
            $endereco       = $_POST['endereco'];
            
            if ($senha != $senha_confirm) {
                print   "<div class='alert bg-danger bg-opacity-75 text-light position-fixed end-0 start-0 bottom-0 m-auto w-25'>
                            As senhas não coincidem
                            <button class='btn-close end-0 position-absolute me-3' data-bs-dismiss='alert' aria-label='Close'>
                                <span type='hidden' class='invisible'>botao de fechar</span>
                            </button>
                        </div>" ;
            }else {
                $sql1 = "SELECT * FROM cadastro";
                $res1 = $conn -> query($sql1) or die ($conn->error); 
                $row1 = $res1->fetch_object();
                if (($res1 == true) && ($nome_completo == $row1 -> nome)|| ($email == $row1 -> email)) {
                    print   "<div class='alert bg-danger bg-opacity-75 text-light position-fixed end-0 start-0 bottom-0 m-auto w-25'>
                                Email ou usuário já cadsatrado
                                <button class='btn-close end-0 position-absolute me-3' data-bs-dismiss='alert' aria-label='Close'>
                                </button>
                            </div>" ;
                }else{
                    switch ($genero) {
                        case 1:
                            $sexo = "masculino";
                            break;
                        case 2:
                            $sexo = "feminino";
                            break;
                        case 3:
                            $sexo = "outro";
                            break;
                        default:
                            $sexo = "Não informado";
                            break;
                    }
                    $sql = "INSERT INTO cadastro (nome,email,telefone,data_nasc,genero,endereco,senha) VALUES ('$nome_completo','$email','$telefone','$data_nasc','$sexo','$endereco','$senha')";        
                    $res = $conn->query($sql) or die ($conn->errno);

                    if ($res == true) {

                        print '<script>location.href = "index.php";</script>';
                    }
                }
            }
            break;
    }
