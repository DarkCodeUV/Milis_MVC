<?php

include_once("modelos/pedidos.php");
include_once("conexion.php");

BD::crearInstancia();

    class ControladorPedidos{

        public function inicio(){

            $pedidos = Pedido::consultar();

            include_once("vistas/pedidos/inicio.php");
        }

        public function crear(){
            if($_POST){//Validamos que llegue la info del formulario
                //print_r($_POST);

                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $telefono =$_POST['telefono'];
                $direccion =$_POST['direccion'];
                $orden =$_POST['orden'];
                $precio =$_POST['precio'];
                $fecha_entrega =$_POST['fecha_entrega'];
                $situacion =$_POST['situacion'];


                Pedido::crear($nombre, $apellido, $telefono, $direccion, $orden, $precio,$fecha_entrega,$situacion);
                
            }

            include_once("vistas/pedidos/crear.php");
        }
         
        public function editar(){
            print_r($_GET);
           
            $id= $_GET['id'];
            $pedido=(Pedido::buscar($id));

            if($_POST){
                $id=$_POST['id'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $telefono =$_POST['telefono'];
                $direccion =$_POST['direccion'];
                $orden =$_POST['orden'];
                $precio =$_POST['precio'];
                $fecha_entrega =$_POST['fecha_entrega'];
                $situacion =$_POST['situacion'];
                
                
    
                Pedido::editar($id,$nombre, $apellido, $telefono, $direccion, $orden, $precio,$fecha_entrega,$situacion);
                header("Location:./?controlador=pedidos&&accion=inicio");
                print_r($_POST);
            }
            include_once("vistas/pedidos/editar.php");
        }


        public function borrar(){
            //print_r($_GET);
            $id= $_GET['id'];
            
            Pedido::borrar($id);
            //Redericcionamos
            header("Location:./?controlador=pedidos&&accion=inicio");

        }

    }

?>