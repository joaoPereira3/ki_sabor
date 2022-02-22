<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clientes Registados</title>
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
<<<<<<< HEAD

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Ki-Sabor</a></h1>
      

=======
      <h1 class="logo me-auto me-lg-0"><a href="index.html">Ki-Sabor</a></h1>
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#">Clientes Registados</a></li>
          <li><a class="nav-link scrollto" href="reservas.php">Reservas</a></li>
          <li><a class="nav-link scrollto" href="pratos.php">Pratos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
<<<<<<< HEAD
        <!-- <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button class="btn btn-outline-success" type="submit" href="admin.html">Log in</button> -->
        <a href="index.php" class="book-a-table-btn scrollto d-none d-lg-flex">Log off</a>

=======
        <a href="index.html" class="book-a-table-btn scrollto d-none d-lg-flex">Log off</a>
>>>>>>> 277949674a5fac8229a36f0a419317e7e99161bf
    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="inner-page">
      <div class="container">
        <p>
  
        </p>
      </div>
    </section>

  </main><!-- Fim Secção Main -->
  <!-- ======= Ficheiro PHP ======= -->
  <?php
    include("conexao.php");

    $query = "SELECT * FROM clientes";
    $result = mysqli_query($conexao, $query);

    if(mysqli_num_rows($result)>0){
        echo "<table class='table table-striped table-dark'><tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Telemóvel</th></tr>" ;
        while($fila = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $fila['id']. "</td><td>" . $fila['nome']. "</td><td>" . $fila['email']. "</td><td>" . $fila['telemovel'] . "</td></tr>";
            echo "<br>";
        } 
        echo"</table>";
    }
    else{
        echo "A tabela ainda não tem qualquer resultado";
    }
   ?>
   <!-- Fim Ficheiro PHP -->
   <!-- Esboço de Tabela previamente usada -->
     <!--  <table style="width:50%">
          <tr>
            <th>Nº de Cliente</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telemóvel</th><br>
          </tr>
          <tr>
            <td>1</td>
            <td>Paulo Santos</td>
            <td>paulosantos@hotmail.com</td>
            <td>927837645</td><br>
          </tr>
          <tr>
            <td>2</td>
            <td>Anabela Henriques</td>
            <td>anabelahenriques@hotmail.com</td>
            <td>927837634</td>
          </tr>
          <tr>
            <td>3</td>
            <td>António Damas</td>
            <td>antoniodamas@hotmail.com</td>
            <td>927837632</td>
          </tr>
      </table> -->
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

  <!-- Ficheiro Principal JS -->
  <script src="assets/js/main.js"></script>

</body>
</html>
