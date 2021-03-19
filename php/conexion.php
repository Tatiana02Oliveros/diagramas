<?php
require_once "./Index.php";


class conexion{
        private $cadenaConexion;
        private $conexion;

        public function __constructor() {
            try{
                $this->cadenaConexion ="mysql:host=".BD_SERVIDOR. ";charset=".BD_CHARSET;
                $this->conexion = new PDO($this->cadenaConexion, usuario, contraseña);
                echo "conexion Exitosa";
            } catch (Excepcion $ex){
                echo $ex->getMessage();

            }

        }

}

$conexion = new conenexion();




?>