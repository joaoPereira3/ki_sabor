<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ki-Sabor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Ficheiros CSS -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Cabeçalho ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="index.php">Ki-Sabor</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Quem somos?</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefe</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- Barra de Navegação -->
      
      <form method="POST" class="d-flex align-items-center">
        <input type="text" name="utilizador" placeholder="Utilizador" required>
        <input type="password" name="password" placeholder="Password" required>
        <div>
          <button type="submit" class="book-a-table-btn scrollto d-none d-lg-flex">Admin</button>
        </div>
          <!-- $usr = "admin";
          $psw = "password";
          $utilizador=$_POST["utilizador"];
          $pass=$_POST["password"];
          if($utilizador=="staff" && $pass=="12345"){
          header('Location: '.$uri.'/admin.php');
          }
          else
            echo "Username ou pass errada"; -->
      </form>
      
      <?php
            
            $user_introduzido = $_POST["utilizador"] ?? "";
            $password_introduzida = $_POST["password"] ?? "";
    
            $user = "admin";
            $password = "admin";
    
            if($user_introduzido != "" && $password_introduzida != ""){
            
                if($user_introduzido == $user && $password_introduzida == $password){
                    header('Location: '.$uri.'/ki_sabor/admin.php');
                }
                else{
                    echo "<script>alert('Dados incorretos!');</script>";
                }
            }
       ?>
    </div>
  </header>
  <!-- Fim Cabeçalho -->
  <!-- ======= Secção Apresentação ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bem-vindo ao <span>Ki-Sabor</span></h1>
          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Registe-se</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fim da Apresentação -->
  <main id="main">
    <!-- ======= Secção Sobre Nós ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Quem somos?</h2><br>
            <ul>
              <li><i class="bi bi-check-circle"></i> O Ki-Sabor Restaurante & Lounge é um espaço que privilegia a partilha de sabores e momentos, a qualquer hora do dia, num ambiente acolhedor e confortável.</li>
              <li><i class="bi bi-check-circle"></i> Localizado na Avenida da Liberdade, pretendemos ser uma referência nesta zona nobre da cidade.</li>
            </ul>
            <p>
              Além do restaurante, o Ki-Sabor conta ainda com um lounge, o espaço perfeito para saborear uma refeição leve, tomar uma bebida descontraída no final da tarde, assistir a jogos com os amigos ou começar uma noite alegre ao som de uma boa música e com um delicioso cocktail na mão.
            </p>
          </div>
        </div>

      </div>
    </section><!-- Fim Secção Sobre nós -->

    <!-- ======= Secção Menú ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Veja o nosso Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-salads">Saladas</li>
              <li data-filter=".filter-starters">Entradas</li>
              <li data-filter=".filter-specialty">Especialidades</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <?php
            include("conexao.php");
            $query = "SELECT * FROM `pratos`";
            $resultado = mysqli_query($conexao, $query);
            if (mysqli_num_rows($resultado) > 0){
              while ($row = mysqli_fetch_assoc($resultado)){
                if ($row['cat_id'] == 1){
                  echo ('
                      <div class="col-lg-6 menu-item filter-salads">
                          <img class="media-object" src="data:image/jpeg;base64, ' . base64_encode($row['imagem']) .
                          '" alt="img" style="object-fit:cover; width:110px;height:110px;">
                          <div class="menu-content">
                              <a href="#">' . $row['nome'] . '</a><span>' . $row['preco'] . '€</span>
                          </div><br>
                          <div class="menu-ingredients">
                              Salada
          
                          </div>
                      </div>
                  ');
                } else if($row['cat_id'] == 2) {
                  echo ('
                    <div class="col-lg-6 menu-item filter-starters">
                        <img class="media-object" src="data:image/jpeg;base64, ' . base64_encode($row['imagem']) .
                        '" alt="img" style="object-fit:cover; width:110px;height:110px;">
                        <div class="menu-content">
                            <a href="#">' . $row['nome'] . '</a><span>' . $row['preco'] . '€</span>
                        </div><br>
                        <div class="menu-ingredients">
                            Entrada
        
                        </div>
                    </div>
                 ');
                } else if($row['cat_id'] == 3) {
                  echo ('
                    <div class="col-lg-6 menu-item filter-specialty">
                        <img class="media-object" src="data:image/jpeg;base64, ' . base64_encode($row['imagem']) .
                        '" alt="img" style="object-fit:cover; width:110px;height:110px;">
                        <div class="menu-content">
                            <a href="#">' . $row['nome'] . '</a><span>' . $row['preco'] . '€</span>
                        </div><br>
                        <div class="menu-ingredients">
                            Especialidade
        
                        </div>
                    </div>
                 ');
                }
              }
            } else {
              echo "Sem resultados.";
            }
          ?>
        </div>
      </div>
    </section>
    <!-- Fim Secção Menu -->

    <!-- ======= Registo ======= -->
    <section id="book-a-table">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Registo</h2>
          <p>Insira os seus dados</p>
        </div>
        <form method="post">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="nome" placeholder="Nome" data-rule="minlen:4" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="telemovel" placeholder="Telemóvel" data-rule="minlen:4" required>
              <div class="validate"></div>
            </div>
            <br><br>
            <div class="text-center">
              <button type="submit" class="book-a-table-btn scrollto d-none d-lg-flex" id="botao">Registar</button>
            </div>
        <br>
        </form>
      </div>
    </section>
<!-- ======= Código PHP Registo ======= -->
    <?php
       include("conexao.php");
         if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone'])){
           $nome = $_POST['name'];
           $email = $_POST['email'];
           $telemovel = $_POST['phone'];
           $query = "INSERT INTO clientes (nome, email, telemovel)
           VALUES ('$nome', '$email', '$telemovel')";
           if(mysqli_query($conexao, $query)){
           echo "<script>alert('Registo feito com sucesso!');</script>";
            }
          else {
          echo "<script>alert('Registo inválido!');</script>";
          }
         }  
  
      ?>
       <!-- Fim Secção de Registo -->


    <!-- ======= Reservas ======= -->
    <section id="book-a-table">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Reservar</h2>
          <p>Insira os seus dados</p>
        </div>
        <form method="post">
          <div class="row">
           
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" required>
              <div class="validate"></div>
            </div>
            
             <div class="col-lg-4 col-md-6 form-group">
              <input type="date" name="date" class="form-control" id="calendario" min="2021-02-01" max="2100-04-30" placeholder="data" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-md-0">
              <input type="text" class="form-control" name="refeicao" id="refeicao" placeholder="Almoço/Jantar" data-rule="" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="pessoas" id="pessoas" placeholder="Numero de Pessoas" data-rule="minlen:1" required>
              <div class="validate"></div>
            </div>
          <br><br><br>
        
          <div class="text-center"><button type="submit" class="book-a-table-btn scrollto d-none d-lg-flex" id="botao">Reservar</button></div>

        </form>
      </div>
    </section>
    <!-- ======= Código PHP Reservas ======= -->
    <?php

      include("conexao.php");
          if(isset($_POST["email"]) && isset($_POST["date"]) && isset($_POST["refeicao"]) && isset($_POST["pessoas"])){
            $email = $_POST['email'];
            $data = $_POST['date'];
            $refeicao = $_POST['refeicao'];
            $pessoas = $_POST['pessoas'];
            $query_confirm = "SELECT * FROM clientes WHERE email='$email'";
            $resultado = mysqli_query($conexao,$query_confirm);

              if(mysqli_num_rows($resultado)>0){
                $cliente_row = mysqli_fetch_assoc($resultado);
                $id = $cliente_row['id'];
                $query = "INSERT INTO reservas (data_ref, refeicao, lugares, cliente_id) VALUES ('$data', '$refeicao', '$pessoas', '$id')";

                  if(mysqli_query($conexao,$query)){
                      echo "<script>alert('A sua reserva para a data $data foi efetuada com sucesso!');</script>";
                  }
                    else{
                          echo "<script>alert('Registe-se primeiro!');</script>";
                        }
              }
          }    

      ?>
    <!-- Fim Secção de Reservas -->

    <!-- ======= Secção Chefe ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Chefe</h2>
          <p>O nosso Chefe</p>
        </div>
        <div class="row">  
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/gordon.jpg" class="img-fluid" alt="">
              <div class="member-info">
                  <div class="member-info-content">
                    <h4>Gordon Ramsay</h4>
                    <span>Master Chef</span>
                  </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
                <h5>Gordon James Ramsay é um chef britânico, é uma personalidade de televisão e escritor. <br><br>Seu grupo global de restaurantes, Gordon Ramsay Restaurants, foi fundado em 1997 e foi premiado com 16 estrelas Michelin no total.<br><br> Atualmente detém um total de sete restaurantes.</h5>
          </div>
        </div>
      </div>
    </section><!-- Fim Secção Chefe -->
    <!-- ======= Secção dos Contactos ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contactos</h2>
          <p>Ligue-nos</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.881163010645!2d-9.148090984654841!3d38.72053727959827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd193382100b6609%3A0xc8fdf6ca0edb5fc7!2sAv.%20da%20Liberdade%2C%201250-096%20Lisboa!5e0!3m2!1sen!2spt!4v1643744106788!5m2!1sen!2spt" allowfullscreen></iframe>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p>Av. da Liberdade, 1250-096 Lisboa</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Horário:</h4>
                <p>
                  Segunda-Sábado:<br>
                  11h00 - 23h00
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kisabor@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Ligue:</h4>
                <p>215558145</p>
                <p>924208448</p>
                <p>967710105</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          </div>
        </div>
      </div>
    </section><!-- Fim Secção dos Contactos -->
  </main><!-- Fim da Secção Main -->
  <!-- ======= Rodapé ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h2>Ki-Sabor</h2>
              <p>
                Av. da Liberdade<br>
                1250-096 Lisboa<br><br>
                <strong>Telefone: 215558145</strong><br>
                <strong>Telemóvel: 924208448</strong><br>
                <strong>Telemóvel: 967710105</strong><br>
                <strong>Email: kisabor@gmail.com</strong><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ki-Sabor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- Fim Rodapé -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Ficheiros JS -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Ficheiro JS Principal -->
  <script src="assets/js/main.js"></script>

</body>
</html>