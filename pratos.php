<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pratos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
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


   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Ki-Sabor</a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="admin.php">Clientes Registados</a></li>
          <li><a class="nav-link scrollto" href="reservas.php">Reservas</a></li>
          <li><a class="nav-link scrollto" href="#">Pratos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
        <!-- <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button class="btn btn-outline-success" type="submit" href="admin.html">Log in</button> -->
        <a href="index.html" class="book-a-table-btn scrollto d-none d-lg-flex">Log off</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
    
    <section class="inner-page">
      <div class="container">
        <p>
  
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
    include("conexao.php");

    $query = "SELECT * FROM pratos";
    $result = mysqli_query($conexao, $query);


    if(mysqli_num_rows($result)>0){
        echo "<table class='table table-striped table-dark'><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Imagem</th><th>Categoria</th></tr>" ;
        while($fila = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $fila['id']. "</td><td>" . $fila['nome']. "</td><td>" . $fila['preco']. "</td><td>" . $fila['imagem']."</td></tr>";
            echo "<br>";
        } 
        echo"</table>";
    }
    else{
        echo "A tabela ainda não tem qualquer resultado";
    }

   ?>
    <!-- <table style="width:50%">
            <tr>
              <th>Entradas</th>
              <th>Saladas</th>
              <th>Especialidades</th><br>
            </tr>
            <tr>
              <td>Sopa de Lagosta (5.95€)</td>
              <td>Seleções de César (8.95€)</td>
              <td>Barril de Pão (6.95€)</td><br>
            </tr>
            <tr>
              <td>Palito de Mussarela (4.95€)</td>
              <td>Salada grega (9.95€)</td>
              <td>Rolo de Lagosta (12.95€)</td>
            </tr>
            <tr>
              <td>Bolo de caranguejo (7.95€)</td>
              <td>Salada de espinafre (9.95€)</td>
              <td>Toscana Grelhada (9.95€)</td>
            </tr>
        </table>
 -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KI-SABOR</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>