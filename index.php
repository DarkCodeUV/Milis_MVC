<?php

$controlador="paginas";
$accion="inicio";

  switch ($_GET['controlador']) {
    case 'paginas':

      if($_GET['accion']=="inicio"){
        
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template.php");

      }else if($_GET['accion']=="error"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template_no_login.php");

      }else{
        $_GET['controlador']="paginas";
        $_GET['accion']="error";
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template_no_login.php");
      }
    break;

    case 'pedidos':

      if($_GET['accion']=="inicio"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/pedidos/template.php");

      }else if($_GET['accion']=="borrar"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/pedidos/template.php");

      }else if($_GET['accion']=="editar"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/pedidos/template.php");

      }else if($_GET['accion']=="crear"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/pedidos/template.php");

      }else{
        $_GET['controlador']="paginas";
        $_GET['accion']="error";
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template_no_login.php");
      }

      break;
    case 'usuarios':
      if($_GET['accion']=="ingresar"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template_no_login.php");

      }else if($_GET['accion']=="registrar"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template_no_login.php");

      }else if($_GET['accion']=="logueado"){
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template_registrado.php");

      }else{
        $_GET['controlador']="paginas";
        $_GET['accion']="error";
        $controlador = $_GET['controlador'];
        $accion = $_GET['accion'];
        require_once("vistas/usuarios/template_no_login.php");
      }
      break;

      case '':
          $_GET['controlador']="paginas";
          $_GET['accion']="inicio";
          $controlador = $_GET['controlador'];
          $accion = $_GET['accion'];
          require_once("vistas/usuarios/template.php");
        
      break;

      default:
          $_GET['controlador']="paginas";
          $_GET['accion']="error";
          $controlador = $_GET['controlador'];
          $accion = $_GET['accion'];
          require_once("vistas/usuarios/template_no_login.php");
        
      break;
  
   
    }
    
      





?> 