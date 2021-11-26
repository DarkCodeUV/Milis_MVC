<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
            
                <a class="btn btn-link" type="button"  href="?controlador=usuarios&&accion=ingresar">Iniciar Sessión</a>
              </button>
              <a class="btn btn-primary" type="button"  href="?controlador=usuarios&&accion=registrar">Registrarse</a>
              
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