
<?php 
    include("config.php");
    switch (@$_REQUEST['acao']) {
        case 'logar':
            $nome = $_POST["nome_login"];
            $senha = $_POST["senha_login"];

            $sql = "SELECT email, senha FROM cadastro";
            $res = $conn-> query($sql) or die ($conn->errno);
            $qtd = $res->num_rows;
            if($qtd > 0){
                    $row = $res -> fetch_object();
                        if (($nome == $row -> email)&($senha == $row ->senha)){

                            print '<script>location.href = "login.php";</script>';
                            print '<div class="alert alert-success bg-opacity-20">';
                        }
                        elseif (($nome != $row -> email) | ($senha != $row -> senha)) {
                            print '<div class="col-8 col-sm-6 col-md-5 col-lg-4 alert bg-danger bg-opacity-75 text-center bottom-0 end-0 start-0 m-auto py-2 position-fixed">Usuário ou senha incorreta</div>';
                        }

            }else {
                print '<div class="col-8 col-sm-6 col-md-5 col-lg-4 alert bg-danger bg-opacity-75 text-center bottom-0 end-0 start-0 m-auto py-2 position-fixed">Não há cadastros!</div>';
            }
            break;
            case 'cadastrar':
                $nome_completo  = $_POST["nome_completo"];
                $email          = $_POST["email_login"];
                $telefone       = $_POST["telefone"];
                $data_nasc      = $_POST["data_nasc"];
                $genero         = $_POST["genero"];
                $senha          = $_POST['senha_user'];
                $senha_confirm  = $_POST['confirm_senha'];
                $endereco       = $_POST["endereco"];
                if ($senha != $senha_confirm) {
                    echo '<><script> location.href = "";</script>'
                }

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
                        $sql = "INSERT INTO cadastro (nome,email,telefone,data_nasc,genero,endereco) VALUES ('$nome_completo','$email',$telefone,'$data_nasc','$sexo','$endereco')";        
                        $res = $conn->query($sql) or die ($conn->errno);
        
                        if ($res == true) {
                            echo '<div class="alert alert-success">Cadastrado com sucesso faça login!<a class="link-danger" href="login.php">Aqui</a></div>';
                        }
                        break;

        
        default:
            
            break;
    }
?>
