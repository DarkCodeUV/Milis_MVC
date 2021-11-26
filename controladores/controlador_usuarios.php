<?php

include_once("modelos/usuarios.php");
include_once("conexion.php");

BD::crearInstancia();

    class ControladorUsuarios{

        public function ingresar(){
            
              
            if($_POST){
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];
                
                //Usuario::logueado($correo, $contraseña);
                $usuario=(Usuario:: buscarUsuario($correo,$contraseña));
               
                if (!$usuario) {
                    echo '<p class="error">Username password combination is wrong!</p>';
                }  else {
                    if( ($correo == $usuario->correo) && ($contraseña == $usuario->contraseña) ){
                         header("Location:./?controlador=usuarios&&accion=logueado");
                    }else{
                        echo'<script type="text/javascript">
                            alert("¡Datos erroneos!");
                            
                            </script>';
                    }

                         
                }
            }
            
            include_once("vistas/usuarios/ingresar.php");
        }

        public function logueado(){
          //  $correo= $_GET['correo'];
          // $contraseña= $_GET['contraseña'];

            

            
            if($_POST){
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];
                
                //Usuario::logueado($correo, $contraseña);
                $usuario=(Usuario:: buscarUsuario($correo,$contraseña));
               
                if (!$usuario) {
                    echo '<p class="error">Username password combination is wrong!</p>';
                } else {
                  
                        header("Location:./?controlador=usuarios&&accion=logueado");  
                }
            }
            

            include_once("vistas/usuarios/logueado.php");
           
        }
        
        public function registrar(){
            if($_POST){//Validamos que llegue la info del formulario
                //print_r($_POST);

                $nombre = $_POST['nombre'];
                $apellidoP = $_POST['apellidoP'];
                $apellidoM = $_POST['apellidoM'];
                $correo =$_POST['correo'];
                $contraseña =$_POST['contraseña'];
                $telefono =$_POST['telefono'];

                Usuario::registrar($nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono);
                
            }
            include_once("vistas/usuarios/registrar.php");
        }
         
        public function editar(){
            //print_r($_GET);

            $id= $_GET['id'];
            $usuario=(Usuario::buscar($id));

            if($_POST){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $apellidoP=$_POST['apellidoP'];
                $apellidoM=$_POST['apellidoM'];
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];
                $telefono=$_POST['telefono'];
        
                
    
                Usuario::editar($id, $nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono);
                header("Location:./?controlador=usuarios&&accion=inicio");
                //print_r($_POST);
            }
            include_once("vistas/usuarios/logueado.php");
        }


        public function borrar(){
            //print_r($_GET);
            $id= $_GET['id'];
            
            Usuario::borrar($id);
            //Redericcionamos
            header("Location:./?controlador=usuarios&&accion=inicio");

        }

    }

?>