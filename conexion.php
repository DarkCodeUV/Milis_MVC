<?php

    class BD{

        private static $instancia=NULL;

        public static function crearInstancia(){
            //Si no existe una conexion la creamos
            if(!isset( self::$instancia )){
                $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
                //self::$instancia=new PDO('mysql:host=localhost;dbname=milis','root','password',$opcionesPDO);
                self::$instancia=new PDO('mysql:host=35.227.188.178;dbname=milis','root','',$opcionesPDO);
                //echo "conexión realizada";
            }
            // Si ya existe una conexion solo la retornamos
            return self::$instancia;

        }

    }

?>