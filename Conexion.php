<?php
    class Conexion{
      private $con;

      function getCon(){
        $server="mysql:host=localhost;dbname=Eventos";
        $user="root";
        $pass="";

          try{
            return $con = new PDO($server, $user, $pass);
          }

          catch (PDOException $e){
            return $e->getMessage();
          }
        }
    }
?>