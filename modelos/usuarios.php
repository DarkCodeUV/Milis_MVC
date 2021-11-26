<?php

    class Usuario{

        public $id;
        public $nombre;
        public $apellidoP;
        public $apellidoM;
        public $correo;
        public $contraseña;
        public $telefono;

        public function __construct($id, $nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono){

            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellidoP=$apellidoP;
            $this->apellidoM=$apellidoM;
            $this->correo=$correo;
            $this->contraseña=$contraseña;
            $this->telefono=$telefono;

        }

        public static function consultar(){
    
            $listaUsuario=[];
            $conexionBD=BD::crearInstancia();
            $sql= $conexionBD->query("SELECT * FROM cliente");

            foreach ($sql->fetchAll() as $usuario){
                //LOS VALORES EN LAS CASILLAS SON PERTENECIENTES A LA BASE DE DATOS
                $listaUsuario[] = new Usuario($usuario['id'], $usuario['Nombre'], $usuario['ApellidoP'], $usuario['ApellidoM'], $usuario['Correo'], $usuario['Contraseña'], $usuario['Telefono'] );
            }
            return $listaUsuario;
        }

        public static function registrar($nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono){

            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("INSERT INTO cliente(Nombre,ApellidoP,ApellidoM,Correo,Contraseña,Telefono) values (?,?,?,?,?,?)");
            $sql -> execute(array($nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono));

        }

        public static function borrar($id){
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare(' DELETE FROM cliente WHERE id=? ');
            $sql -> execute(array($id));
        }


        public static function logueado($correo,$contraseña){
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare(' SELECT * FROM cliente WHERE Correo=?  AND Contraseña=?');
            $sql -> execute(array($correo,$contraseña));

            $usuario = $sql->fetch();
            return new Usuario($usuario['id'], $usuario['Nombre'], $usuario['ApellidoP'], $usuario['ApellidoM'], $usuario['Correo'], $usuario['Contraseña'], $usuario['Telefono'] );
 
        }

        public static function buscarUsuario($correo,$contraseña){
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare(' SELECT * FROM cliente WHERE Correo=?  AND Contraseña=?');
            $sql -> execute(array($correo,$contraseña));

            $usuario = $sql->fetch();
            return new Usuario($usuario['id'], $usuario['Nombre'], $usuario['ApellidoP'], $usuario['ApellidoM'], $usuario['Correo'], $usuario['Contraseña'], $usuario['Telefono'] );
        }
 
        public static function buscar($id){
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare(' SELECT * FROM cliente WHERE id=?');
            $sql -> execute(array($id));

            $usuario = $sql->fetch();
            return new Usuario($usuario['id'], $usuario['Nombre'], $usuario['ApellidoP'], $usuario['ApellidoM'], $usuario['Correo'], $usuario['Contraseña'], $usuario['Telefono'] );
        }

        public static function editar($id, $nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono){

            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD->prepare("UPDATE cliente SET Nombre=?, ApellidoP=? ,ApellidoM=? ,Correo=? ,Contraseña=? ,Telefono=? WHERE id=?");
            $sql -> execute(array($nombre, $apellidoP, $apellidoM, $correo, $contraseña, $telefono,$id));

        }
    }

?>