<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mili's</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="./lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="./lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href="./assets/css/style.css" rel="stylesheet" media="screen">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&family=Parisienne&display=swap" rel="stylesheet">

    
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]> 
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

 
  <nav>
      <div class="container-fluid p-4">
        <div class="row">

          <div class="col-9 d-flex ">

            <div class="row container-fluid">

              <div class="col-9 text-end">
                <a class="navbar-brand" href="#" id="title">
                  <img src="./assets/images/icono.jpg" alt="" width="60" height="60"
                    class="d-inline-block align-text-top border border-secondary border-3 rounded-circle">
                  Mili's
                </a>
              </div>

              <div class="col-10 text-end">
                <h2 id="subtitle-index-header">
                  Pasteleria
                </h2>
              </div>

            </div>




          </div>

          <div class="col-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            

            </div>

          </div>
        </div>

      </div>
      </div>


      <div class="mx-auto" style="width: 60%;">
        <div class="center-block">
          <form class="d-flex">
            <input class="form-control me-2 " type="search" placeholder="Buscar postre" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
          </form>
        </div>
      </div>


      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pasteles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gelatinas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reposteria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Especial de temporada</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pedido especial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contáctanos</a>
        </li>
      </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php include_once("ruteador.php"); ?>
            </div>
            
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>