<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESTUDIO CREATIVO PÁGINAS WEB CARACAS-VENEZUELA - Desarrollo y Diseño Páginas Web Guayaquil.</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--NavBar-->
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary text-white">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img src="img/isotipo.svg" class="img-fluid" width="35" alt="Nestor"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quienesomos.html">Nosotros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SERVICIOS
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="disenografico.html">Diseño Gráfico</a></li> 
                  <li><a class="dropdown-item" href="desarrolloweb.html">Desarrollo Web</a></li>
                  <li><a class="dropdown-item" href="designtresd.html">Diseño 3D</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contacto.html">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hosting.html">Hosting</a>
              </li>
            </ul>
            <!-- Right elements -->
    <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class=" me-3 text-reset" href="https://nestoralvarado.github.io/index.html" target="_blank">
          <i class="fa-brands fa-github-alt"></i>
        </a>
        <a href="https://www.linkedin.com/in/nestor-alvarado-a1a0ab27/" target="_blank" class="me-3 text-reset">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCgmYLjgchMcw6tM7NU7QDNQ?view_as=subscriber" target="_blank"
          class="me-3 text-reset">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
      <!-- Right elements -->
          </div>
        </div>
      </nav>
    <!--Navbar/-->
 <!--Nosotros-->
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);
    $captcha = trim($_POST["captcha"]);

    if ($name == "" || $email == "" || $phone == "" || $message == "" || $captcha != "5") {
        http_response_code(400);
        echo "Por favor completa el formulario correctamente.";
        exit;
    }

    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        http_response_code(400);
        echo "Por favor ingresa un número de teléfono válido.";
        exit;
    }

    $recipient = "technographicca@gmail.com";
    $subject = "Nuevo mensaje de $name";
    $email_content = "Nombre: $name\n";
    $email_content .= "Correo Electrónico: $email\n";
    $email_content .= "Teléfono: $phone\n\n";
    $email_content .= "Mensaje:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Gracias! Tu mensaje ha sido enviado.";
    } else {
        http_response_code(500);
        echo "Oops! Algo salió mal y no pudimos enviar tu mensaje.";
    }

} else {
    http_response_code(403);
    echo "Hay un problema con tu envío, por favor intenta de nuevo.";
}
?>
    <div class="container-fluid nosotg">
      <div class="container">
        <div class="text-center">
          <h1 class="display-2 overkill"><i class="fa-solid fa-6x fa-circle-dot"></i><i class="fa-solid fa-2x fa-circle"></i></h1>
          <h3 class="slogan">Gracias por su mail ...</h3>
        </div>
      </div>
    </div>
<!---Nosotros/-->
       <!--Center Web-->
   <div class="container-fluid king">
    <div class="container-fluid van">
      <span class="gracias" style="font-size:2rem;color:#ffffff">Su mensaje fue enviado con éxito...</span>
    </div>
    <div class="container diamond">
      <img src="img/idea.svg" class="img-fluid" alt="" style="border:0.6rem solid rgb(50, 46, 34); border-radius: 1.5rem;">
      <button class="btn btn-lg btngracias" type="button" onclick="window.location.href='index.html'">Volver a la página principal</button>
    </div>
   </div>
   <!--Center Web/-->

   <!-- Footer -->
<footer class="text-center text-lg-start footpata">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

     <!-- Right -->
     <div>
      <a href="https://github.com/nestoralvarado" target="_blank" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
      <a href="mailto:technographicca@gmail.com" class="me-4 text-reset">
        <i class="fas fa-envelope-open-text"></i>
      </a>
      <a href="https://www.instagram.com/technographicca" target="_blank" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/in/nestor-alvarado-a1a0ab27/" target="_blank" class="me-4 text-reset">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCgmYLjgchMcw6tM7NU7QDNQ?view_as=subscriber" target="_blank"
        class="me-4 text-reset">
        <i class="fab fa-youtube"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
   <!-- Section: Social media -->
    <!--consejo-->
    <!--intro footer-->
    <div class="container pt-5 pb-5">
      <div class="jumbotron">
        <i class="fas fa-palette fa-8x mb-3"></i>
        <h2 class="display-3" style="font-family:Montserrat;font-weight:700">Diseño Gráfico!</h2>
        <p class="lead">El diseño gráfico es la base de una buena estrategia global de comunicación e identidad
          corporativa.</p>
        <hr class="my-4">
        <p class="lead upk">Gracias por visitarnos...</p>
      </div>
    </div>
    <!--intro footer end-->
    <!--consejo end-->

    <!-- Section: Links  -->
    <section class="">
      <div class="container-fluid text-center text-md-start mt-5 p-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4" style="font-family:'Montserrat', sans-serif;font-size:1.6rem">
              <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor" class="bi bi-circle"
                viewBox="-160 0 348 348">
                <path
                  d="M 0,0
                  C 88.183,0 160.307,72.124 160.307,160.307 160.307,248.49 88.183,320.614 0,320.614 -88.183,320.614 -160.307,248.49 -160.307,160.307 -160.307,72.124 -88.183,0 0,0
                  
                  m 0,80.550327
                  c -45.155351,0 -79.756673,36.095663 -79.756673,79.756673 0,43.66188 34.601322,79.75667 79.756673,79.75667 45.155351,0 79.756673,-36.09479 79.756673,-79.75667
                  C 79.756673,116.64599 45.155351,80.550327 0,80.550327" />
              </svg></i>T-GRÁFICO
            </h6>
            <p class="lead">
              ESTUDIO CREATIVO: <br>
              Desarrollo Web, Diseño Gráfico y 3D
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase mb-4">
              Productos
            </h6>
            <p>
              <a href="#!" class="text-reset">Diseño Web</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Diseño Gráfico</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Edición de Videos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Dominios y Hosting</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase mb-4">
              Papelería
            </h6>

            <p>
              <a href="#!" class="text-reset">Tarjetas-Presentación</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Membrete</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Brochure</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Volantes</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="text-align: right">
            <!-- Links -->
            <h6 class="text-uppercase mb-4">
              Contacto
            </h6>
            <p><i class="fas fa-2x fa-home me-3"></i>Avenina Francisco de Miranda, Caracas, Venezuela | Guayaquil, Los Ceibos, Ecuador</p>
            <p>
              <i class="fas fa-2x fa-envelope me-3"></i>
              technographicca@gmail.com
            </p>
            <p><i class="fas fa-2x fa-phone me-3"></i>...</p>
            <p><i class="fab fa-3x fa-whatsapp"></i> +593 096 298 8811</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center py-5" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2026 Copyright:
      <a class="text-reset fw-bold" href="https://tgrafico.com/" target="_blank">T-GRÁFICO.COM</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!--footer end-->

    <script src="https://kit.fontawesome.com/1b3801ed41.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>