<?php

    class Pedido{

        public $id;
        public $nombre;
        public $apellido;
        public $telefono;
        public $direccion;
        public $orden;
        public $precio;
        public $fecha_entrega;
        public $situacion;

        public function __construct($id, $nombre, $apellido, $telefono, $direccion, $orden, $precio,$fecha_entrega,$situacion){

            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->telefono=$telefono;
            $this->direccion=$direccion;
            $this->orden=$orden;
            $this->precio=$precio;
            $this->fecha_entrega=$fecha_entrega;
            $this->situacion=$situacion;
        }

        public static function consultar(){
    
            $listaPedidos=[];
            $conexionBD=BD::crearInstancia();
            $sql= $conexionBD->query("SELECT * FROM pedidos");

            foreach ($sql->fetchAll() as $pedido){
                //LOS VALORES EN LAS CASILLAS SON PERTENECIENTES A LA BASE DE DATOS
                $listaPedidos[] = new Pedido($pedido['id'], $pedido['nombre'], $pedido['apellido'], $pedido['telefono'], $pedido['direccion'], $pedido['orden'], $pedido['precio'], $pedido['fecha_entrega'], $pedido['situacion'] );
            }
            return $listaPedidos;
        }

        public static function crear($nombre, $apellido, $telefono, $direccion, $orden, $precio,$fecha_entrega,$situacion){

            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("INSERT INTO pedidos(nombre,apellido,telefono,direccion,orden,precio,fecha_entrega,situacion) values (?,?,?,?,?,?,?,?)");
            $sql -> execute(array($nombre, $apellido, $telefono, $direccion, $orden, $precio,$fecha_entrega,$situacion));

        }

        public static function borrar($id){
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare(' DELETE FROM pedidos WHERE id=? ');
            $sql -> execute(array($id));
        }


        public static function buscar($id){
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare(' SELECT * FROM pedidos WHERE id=? ');
            $sql -> execute(array($id));

            $pedido = $sql->fetch();
            return new Pedido($pedido['id'], $pedido['nombre'], $pedido['apellido'], $pedido['telefono'], $pedido['direccion'], $pedido['orden'], $pedido['precio'], $pedido['fecha_entrega'], $pedido['situacion']);
        }
 

        public static function editar($id,$nombre, $apellido, $telefono, $direccion, $orden, $precio,$fecha_entrega,$situacion){

            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("UPDATE pedidos SET nombre=? ,apellido=? ,telefono=? ,direccion=? ,orden=? ,precio=? ,fecha_entrega=?, situacion=? WHERE id=?");
            $sql -> execute(array($nombre, $apellido, $telefono, $direccion, $orden, $precio,$fecha_entrega,$situacion,$id));

        }
    }

?>