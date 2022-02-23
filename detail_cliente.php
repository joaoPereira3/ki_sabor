<!DOCTYPE html>
<html lang="pt">

<head>
  <script src="https://kit.fontawesome.com/eebc17c0bc.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Reservas</title>
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

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Ki-Sabor</a></h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="admin.php">Clientes Registados</a></li>
          <li><a class="nav-link scrollto" href="#">Reservas</a></li>
          <li><a class="nav-link scrollto" href="pratos.php">Pratos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
        <a href="index.php" class="book-a-table-btn scrollto d-none d-lg-flex">Log off</a>

    </div>
  </header><!-- Fim Cabeçalho -->

  <main id="main">
    
    <section class="inner-page">
      <div class="container">
        <p></p>
      </div>
    </section>

  </main>
  <!-- Fim Main -->

<!-- Inicio Ficheiro PHP -->

<?php
include("conexao.php");

$id = $_POST['id'] ?? "";

$query = mysqli_query($conexao, "SELECT * FROM reservas WHERE id=$id");
while($result = mysqli_fetch_array($query))
{
    $data = $result['data_ref'];
    $ref = $result['refeicao'];
    $lugares = $result['lugares'];
    $cliente = $result['cliente_id'];
}
echo "<h2><a href='#'>Reserva</a></h2><br>". "<h4>Data: ". $data . "</h4><br><h4>Refeição: " . $ref . "</h4><br><h4>Lugares: " . $lugares . "</h4><br><h4>Cliente ID: " . $cliente . "</h4>";


?>

  <!-- ======= Rodapé ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KI-SABOR</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- Fim Rodapé -->

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
       