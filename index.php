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
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
<<<<<<< HEAD
      <h1 class="logo me-auto me-lg-0"><a href="index.php">Ki-Sabor</a></h1>
=======
      <h1 class="logo me-auto me-lg-0"><a href="index.html">Ki-Sabor</a></h1>
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf
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
<<<<<<< HEAD
      <?php
            session_start();
            $user = "u1";
            $password = "p1";
            if (($_POST['utilizador'] == $user ) && ($_POST['password'] == $password)){
              header('Location: '.$uri.'/admin.php');
            }
            // else echo "you have entered the wrong credentials";
            ?>
      <form>
        <input type="text" id="utlizador" placeholder="Utilizador" required="true">
        <input type="password" id="password" placeholder="Password" required="true">
        <button type="submit" class="book-a-table-btn scrollto d-none d-lg-flex">Admin</button>
        
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
=======
        <input type="text" placeholder="Utilizador">
        <input type="password" placeholder="Password">
        <a href="admin.html" type="submit" class="book-a-table-btn scrollto d-none d-lg-flex">Admin</a>
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf
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
              <li data-filter=".filter-starters">Entradas</li>
              <li data-filter=".filter-salads">Saladas</li>
              <li data-filter=".filter-specialty">Especialidades</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sopa de Lagosta</a><span>5.95€</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada

            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Barril de Pão</a><span>6.95€</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bolo de caranguejo</a><span>7.95€</span>
            </div>
            <div class="menu-ingredients">
              Delicioso bolo de caranguejo servido em pão torrado com alface e molho tártaro
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Seleções de César</a><span>8.95€</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Toscana Grelhada</a><span>9.95€</span>
            </div>
            <div class="menu-ingredients">
              Frango grelhado com provolone, coração de alcachofra e pesto vermelho assado
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Palito de Mussarela</a><span>4.95€</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salada grega</a><span>9.95€</span>
            </div>
            <div class="menu-ingredients">
              Espinafre fresco, alface romana, tomate e azeitonas gregas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salada de espinafre</a><span>9.95€</span>
            </div>
            <div class="menu-ingredients">
              Espinafre fresco com cogumelos, ovo cozido e vinagrete de bacon quente
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Rolo de Lagosta</a><span>12.95€</span>
            </div>
            <div class="menu-ingredients">
              Carne de lagosta rechonchuda, maionese e alface crocante em um pão volumoso torrado
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fim Secção Menu -->

    <!-- ======= Registo ======= -->
<<<<<<< HEAD
    <section id="book-a-table">
=======
    <section id="book-a-table" class="book-a-table">
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Registo</h2>
          <p>Insira os seus dados</p>
        </div>
<<<<<<< HEAD
        <form method="post">
=======
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf
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
<<<<<<< HEAD
            <!-- <div class="col-lg-4 col-md-6 form-group mt-3">
=======
            <div class="col-lg-4 col-md-6 form-group mt-3">
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf
              <input type="date" name="date" class="form-control" id="calendario" min="2021-02-01" max="2100-04-30" placeholder="data" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
<<<<<<< HEAD
              <input type="text" class="form-control" name="refeicao" id="refeicao" placeholder="Almoço/Jantar" data-rule="" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="pessoas" id="pessoas" placeholder="Numero Pessoas" data-rule="minlen:1" required>
              <div class="validate"></div>
            </div> -->
          <!-- <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Registo feito. Obrigado pela preferência!</div>
          </div> -->
          <div class="text-center"><button type="submit">Registar</button></div>
          <br>
        </form>
      </div>
    </section>
    <?php

       include("conexao.php");
         if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone'])){
           $nome = $_POST['name'];
           $email = $_POST['email'];
           $telemovel = $_POST['phone'];
          //  $data = $_POST['date'];
          //  $refeicao = $_POST['refeicao'];
          //  $pessoas = $_POST['pessoas'];
          
           $query = "INSERT INTO clientes (nome, email, telemovel)
           VALUES ('$nome', '$email', '$telemovel')";
           mysqli_query($conexao, $query);
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
             <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="calendario" min="2021-02-01" max="2100-04-30" placeholder="data" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="refeicao" id="refeicao" placeholder="Almoço/Jantar" data-rule="" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="pessoas" id="pessoas" placeholder="Numero de Pessoas" data-rule="minlen:1" required>
              <div class="validate"></div>
            </div>
          <br>
          <div class="text-center"><button type="submit">Reservar</button></div>

        </form>
      </div>
    </section>
    <!-- Fim Secção de Reservas -->
=======
              <input type="text" class="form-control" name="time" id="refeicao" placeholder="Almoço/Jantar" data-rule="" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="pessoas" placeholder="Numero Pessoas" data-rule="minlen:1" required>
              <div class="validate"></div>
            </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Registo feito. Obrigado pela preferência!</div>
          </div>
          <div class="text-center"><button type="submit">Registar</button></div>
        </form>
      </div>
    </section>

    <!-- Secção Adicionada , a ser confirmada depois -->
      <?php
         if(isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['telemovel'])and isset($_POST['calendario']and isset($_POST['refeicao']and isset($_POST['pessoas'])){
           $nome = $_POST['nome'];
           $email = $_POST['email'];
           $telemovel = $_POST['telemovel'];
           $data = $_POST['calendario'];
           $refeicao = $_POST['refeicao'];
           $pessoas = $_POST['pessoas'];
            # A confirmar com o Fábio
           $query = "INSERT INTO registos (nome, email, telemovel, calendario, refeicao, pessoas ) VALUES ('$nome', '$email', '$telemovel', '$data', '$refeicao', '$pessoas')";
        }
      ?>
    <!-- Fim Secção de Registo -->
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf

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