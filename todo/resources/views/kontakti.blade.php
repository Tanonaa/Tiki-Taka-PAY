<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="../img/TIKI TAKA Logo_red.png" />

    <title>Tiki Taka Pay</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/md-cover-css-edijstest.css" rel="stylesheet" />

    <link href="../css/kontakti.css" rel="stylesheet" />

    <style>
      html,
      body {
        background-size: cover;
        background-color: #fff;
        overflow-x: scroll;
        scroll-behavior: smooth;
      }
    </style>
  </head>

  <body class="text-center">
    <div class="cover-container d-flex  w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="header">
          <img src="../img/TIKI TAKA Logo_red.png" alt="logo" />
        </div>
        <div class="inner">
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="home">Par mums</a>
            <a class="nav-link" href="tikitaka">Iespējas</a>
            <a class="nav-link" href="kontakti">Kontakti</a>
          </nav>
        </div>
      </header>

      <div class="container">
        <div style="text-align:center">
          <h2>Kontakti:</h2>
          <p></p>
          <p></p>
          <p>Telefons: 29197313</p>
          <p>Epasts: info@datakom.lv</p>
          <p>Adrese: Vienības gatve 109, Rīga, Latvija</p>
        </div>
        <div class="row">
          <div class="column">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2178.339469999896!2d24.081192015848597!3d56.90871028087822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eed05334021283%3A0x4ddb1826a2c74a1c!2sDatakom%2C+SIA!5e0!3m2!1sen!2slv!4v1543669754654"
              width="450"
              height="350"
              frameborder="0"
              style="border:0"
              allowfullscreen
            ></iframe>
          </div>
          <div class="column">
          @include('partials.contactform')
            
          </div>
        </div>
      </div>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="float-right"><a href="#">Atpakaļ</a></p>
          <p>
            Cover template for <a href="#">Datakom</a>, by
            <a href="#">Alise Tanona</a>.
          </p>
           @include('partials.datums')
        </div>
      </footer>
    </div>

    <!--
      Bootstrap core JavaScript
      ==================================================
    -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>'
        );
    </script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  </body>
</html>
