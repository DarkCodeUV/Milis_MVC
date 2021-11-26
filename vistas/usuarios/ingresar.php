<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mili's</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="../lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href="../assets/css/style.css" rel="stylesheet" media="screen">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rampart+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="col-lg-12 text-lg-center p-5">
        <h1 id="title-login">INICIAR SESIÓN EN MILI'S</h1>
        
            <img src="../assets/images/icono.jpg" alt="" width="64" height="64"
                class="d-inline-block align-text-top border border-secondary border-3 rounded-circle">

      
    </div>
    <br>

    <div class="container d-flex align-items-center justify-content-center wh-100 shadow p-lg-5">
        <div class="col-lg-6 ">
            <h3 class="subtitle-login"> Iniciar sección con:</h3>
            <div class="col-lg-12 d-flex align-items-center justify-content-center wh-100 shadow p-lg-5 ">
                <div class="col-lg-12">
                    <div class="d-grid gap-3">
                        <button class="btn btn-primary" type="button"><img src="../assets/images/facebook.png" width="32"
                                height="32" alt=""> Facebook</button>
                        <button class="btn btn-primary" type="button"><img src="../assets/images/google.png" width="32"
                                height="32" alt=""> Google</button>
                        <button class="btn btn-primary" type="button"><img src="../assets/images/instagram.png" width="32"
                                height="32" alt=""> Instagram</button>
                        <button class="btn btn-primary" type="button"><img src="../assets/images/twitter.png" width="32"
                                height="32" alt=""> Twitter</button>
                    </div>
                    <div class="text-center p-4">
                        <h6>¿No tienes una cuenta?</h6>
                        <a class="btn btn-link" type="button"  href="?controlador=usuarios&&accion=registrar">Registrarse</a>
                    </div>
                </div>
            </div>

        </div>


        <div class="container d-flex align-items-center justify-content-center wh-100 shadow p-lg-5">

        <form  action="" method="post">
            <div class="mb-3">
            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="example@mail.com">
            </div>

            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="contraseña" id="contraseña" aria-describedby="passwordHelpId" placeholder="**********">
            </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mantenerse conectado</label>
                </div>
                <div class="d-grid gap-3">

                
                <div class="col-lg-12"> 
               
                <div class="d-grid gap-3">
                        <button class="btn btn-primary" name="ingresar" value="ingresar" type="submit">INICIAR SESIÓN</button>
                                </div>
            </div>
            
                </div>
                <div class="text-center p-lg-5">
                    <a href="#">Olvidé mi contraseña</a>
                </div>
            </form>
        </div>
    </div>
<br><br><br><br>


</body>

</html>