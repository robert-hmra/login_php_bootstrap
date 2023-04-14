
<html lang="pt-BR">
  <?php ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Css Local -->    
    <link rel="stylesheet" href="css/style.css">

    <title>Advocacia e Consultoria Jurídica</title>
</head>

<body>

  <!-- topo/header -->
  <div id="topo" class="pt-4">
    
    <!-- Barra de navegação -->   
    <nav class="navbar navbar-expand-md fixed-top py-2" id="scrollspy">      
      <div class="container-fluid m-0 p-0">

        <!-- HOME -->
        <div class="ms-3">
            <a title="realizar_login" class="nav-link item link-formated" href="../login.php">
              <i class="bi bi-house-fill"></i>
            </a>
        </div>
        <button class="navbar-toggler custom-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-center navbar-collapse " id="navbarSupportedContent">          
          
          <!-- Links das páginas -->
          <ul class="navbar-nav mx-auto pt-1 my-2 my-md-0 ">
            <li class="nav-item">
              <a class="nav-link item link-formated" href="#escritorio">Escritório</a>
            </li>
            <li class="nav-item px-md-5">
              <a class="nav-link item link-formated" href="#atuacoes">Áreas de atuação</a>
            </li>
            <li class="nav-item">
              <a class="nav-link item link-formated" href="#about-us">Sobre Nós</a>
            </li>
          </ul>
          
          <!-- Icons on the left of navbar -->
          <ul class="navbar-nav nav-icons me-2">
            <li class="nav-item icon-bar">
              <a rel="noopener" title="link_email_glaucia" class="nav-link link-formated" target="_blank" href="mailto:username@domain.com"><i class="i bi bi-envelope-fill"></i></a>
            </li>
            <li class="nav-item icon-bar">
              <a rel="noopener" title="link_wahtsapp_glaucia" class="nav-link link-formated" target="_blank" href="https://wa.me/5561999999999"><i class="i bi bi-whatsapp"></i></a>
            </li>
            <li class="nav-item icon-bar">
              <a rel="noopener" title="link_instagram_glaucia" class="nav-link link-formated" target="_blank" href="https://www.instagram.com/username"><i class="i bi bi-instagram"></i></a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    
    <!-- Carrousel -->
    <div id="banner" class="row container mx-auto px-0 justify-content-center pt-5">
      <div class="col-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators m-0">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner mx-0">
            <div class="carousel-item item-1 h-100 active">
              <!-- <img src="imagens/pexels-cottonbro-studio-4753993.jpg" class="d-block img-fluid mx-auto h-75" alt="..."> -->
              <div class="carousel-caption d-none d-md-block">
                <h5 class="">Saúde</h5>
                <p>Cuide da sua saúde em primeiro lugar.</p>
              </div>
            </div>
            <div class="carousel-item h-100 item-2">
              <!-- <img src="imagens/pexels-agung-pandit-wiguna-1128318.jpg" class="d-block img-fluid mx-auto h-75" alt="..."> -->
              <div class="carousel-caption d-none d-md-block">
                <h5 class="">LifeStyle</h5>
                <p>Já tirou um tempo para brincar com seu filho hoje?</p>
              </div>
            </div>
            <div class="carousel-item h-100 item-3">
              <!-- <img src="imagens/pexels-pixabay-237272 (1).jpg" class="d-block img-fluid h-75 mx-auto" alt="..."> -->
              <div class="carousel-caption d-none d-md-block">
                <h5>Esporte</h5>
                <p>Comece com uma caminhada e depois uma maratona.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Parte principal do site -->
  <main id="main" class="pt-3 mb-5 container-fluid justify-content-center p-0 pb-5" data-bs-target="#scrollspy" data-bs-spy="scroll" data-bs-offset="0" tabindex="0">
    
    <!-- O escritório -->
    <div id="escritorio" class=" px-0 mx-0 pb-1">
      <div class="main-escritorio container-fluid container-xxl px-0 mt-md-5">
        <div class="py-0 py-sm-3  fundo-escritorio justify-content-center">
          <div class="row gx-0 py-0 pb-4 py-sm-3 justify-content-center">
            <div  class="col-12 col-sm-10 col-md-8 col-lg-6 p-0 pt-md-3">
              <h1 class="text-md-start text-center mt-2 pt-3 pt-md-5">Escritório:</h1>
              <p class="mt-2 px-1 px-md-0">
                Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.
              </p>
              <p class=" px-1 px-md-0">
                Se hoje é o dia das crianças... Ontem eu disse: o dia da criança é o dia da mãe, dos pais, das professoras, mas também é o dia dos animais, sempre que você olha uma criança, há sempre uma figura oculta, que é um cachorro atrás. O que é algo muito importante!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Areas de atuação -->
    <div class="py-md-5 " id="atuacoes">
      <div class="container px-md-auto">
        <div class="row  px-lg-5 my-md-2 justify-content-center">
  
          <!-- Card direito trabalhista --> 
          <div class="col-11 col-sm-8 col-md-6 col-lg-4 order-3 order-md-1 order-lg-3 order-xl-1 order-xxl-1 mb-5">
            <div class="card card-blur">
              <div class="card-header">
                <h2>Direito Trabalhista</h2>
              </div>
              <div class="card-body">
                <P>
                  No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                </P>
              </div>
              <button class="btn btn-dark border-0 border-radius-0" data-bs-toggle="modal" data-bs-target="#modal-trabalhista">Saber mais</button>
            </div>
          </div>
  
          <!-- Card direito Penal --> 
          <div class="col-11 col-sm-8 col-md-6 col-lg-4 order-1 order-md-3 order-lg-2 order-xl-3 order-xxl-2 mb-5">
            <div class="card card-blur">
              <div class="card-header">
                <h2>Direito Penal</h2>
              </div>
              <div class="card-body">
                <P>
                  No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                </P>
              </div>
              <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#modal-penal">Saber mais</button>
            </div>
          </div>
  
          <!-- Card direito Empresarial --> 
          <div class="col-11 col-sm-8 col-md-6 col-lg-4 order-2 order-md-3 order-lg-1 order-xl-2 order-xxl-3 mb-5">
            <div class="card">
              <div class="card-header">
                <h2>Direito Empresarial</h2>
              </div>
              <div class="card-body">
                <P>
                  No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                </P>
              </div>
              <button class="btn btn-dark border-0 border-radius-0" data-bs-toggle="modal" data-bs-target="#modal-empresarial">Saber mais</button>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>

    <!-- Modais Areas de atuacao -->
    <div id="modal-de-atuacao" type="aria-hidden">
      <!-- Modal Direito Trabalhista -->
      <div class="modal " id="modal-trabalhista" tabindex="-1" aria-labelledby="ataucao_trabalhistaLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="ataucao_trabalhista">Direito Trabalhista</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <P>
                No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </P>
              <P>
                No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
              </P>
            </div>
            <div class="modal-footer justify-content-start ps-3">
              <p>Aqui um rodapé legal</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Direito penal -->
      <div class="modal" id="modal-penal" tabindex="-1" aria-labelledby="atuacao_penalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="atuacao_penal">Direito Penal</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body disabled">
              <p>
                Um pouco sobre direito Penal, e suas especificações serão disponíveis após clique no botão, para ser defendido seu bandido.
              </p>
              <p>
                Um pouco sobre direito Penal, e suas especificações serão disponíveis após clique no botão, para ser defendido seu bandido.
              </p>
              <p>
                Um pouco sobre direito Penal, e suas especificações serão disponíveis após clique no botão, para ser defendido seu bandido.
              </p>
              <p>
                Um pouco sobre direito Penal, e suas especificações serão disponíveis após clique no botão, para ser defendido seu bandido.
              </p>
            </div>
            <div class="modal-footer justify-content-start ps-3">
              <p>Aqui um rodapé legal</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Direito Empresarial -->
      <div class="modal " id="modal-empresarial" tabindex="-1" aria-labelledby="atuacao_empresarialLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="atuacao_empresarial">Direito Penal</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <P>
                Um pouco sobre direito Empresarial, e suas especificações serão disponíveis após clique no botão para ser defendido seu dono de empresa de fachada.
                Um pouco sobre direito Empresarial, e suas especificações serão disponíveis após clique no botão para ser defendido seu dono de empresa de fachada.
              </P>
            </div>
            <div class="modal-footer justify-content-start ps-3">
              <p>Aqui um rodapé legal</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sobre nós -->
    <div id="about-us" class="pt-1 mt-3">
      <div class="container pt-1 my-5">
        <div class="row px-1">
          <div class="col-12 px-0">
            <h2>Sobre Nós:</h2>
          </div>
        </div>
        <div class="row align-items-md-center px-0 mx-0">
          <div class="col-12 ps-sm-4 col-md-7 mt-5 pt-md-4">
            
            <p>
              Tá okay? A quinta eu dei uma fraquejada e veio uma mulher. Que é como a gente fala né, um veadinho. Nono seminário LGBT infantil. CANALHAS! Tá okay? 
            </p>
            <p>
              Vamos fuzilar a petralhada aqui do Acre. Que é como a gente fala né, um veadinho. Tem que mudar isso aí. Se vão morrer alguns inocentes, tudo bem! Se vão morrer alguns inocentes, tudo bem! Brasil e Estados Unidos acima de tudo. Brasil acima de todos! 
            </p>
            <p>
              Nono seminário LGBT infantil. CANALHAS! Vai queimar tua rosquinha como tu bem entender, porra! A quinta eu dei uma fraquejada e veio uma mulher.
            </p> 
            <p>
              Se nosso filho começa a andar com quem cheira, ele tem tudo pra cheirar também. Se nosso filho começa a andar com quem cheira, ele tem tudo pra cheirar também. Que é como a gente fala né, um veadinho. Tá okay? Vamos fuzilar a petralhada aqui do Acre. Tem que mudar isso aí. 
            </p>
          </div>
          <div class="col-12 col-md-5 mt-1 pt-1">
            <img src="imagens/escritório/undraw_co-working_re_w93t.svg" class="img-fluid" alt="">
          </div>
        </div>
        
      </div>
    </div>

  </main>
  

  <!-- Rodapé -->
  <footer class="container-fluid" id="footer">
    <p class="text-center pt-5">Fale conosco através de:</p>
    <div class="row text-center">
      <div class="col-12 text-center pt-1 pb-4">
        <a title="link_email_glaucia" rel="noopener" class="icons-footer ms-1" href="https://mailto:adv.glauciasoares@gmail.com" target="_blank">
          <i class="bi bi-envelope"></i>
        </a>
        <a title="link_wahtsapp_glaucia" rel="noopener" class="icons-footer ms-1" href="https://wa.me/5561993387701" target="_blank" rel="noopener noreferrer">
          <i class="bi bi-whatsapp"></i>
        </a>
        <a title="link_instagram_glaucia" rel="noopener" class="icons-footer ms-1" href="https://www.instagram.com/glauciasag" target="_blank">
          <i class="bi bi-instagram"></i>
        </a>
      </div>
      <p class="text-center mb-0 pt-2">
        <a rel="noopener" class="link-me text-center" href="https://wa.me/61994107771" target="_blank">Robert Henrique</a>
      </p>
      <p class="mb-0 pt-1">&copy; GS Advocacia.</p>
    </div>
  </footer>
  

</body>
</html>