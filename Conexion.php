<?php
    class Conexion{
      private $con;

      function getCon(){
        $server="mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_c18eb06516dd369";
        $user="b0431b37593849";
        $pass="d798acab";

          try{
            return $con = new PDO($server, $user, $pass);
          }

          catch (PDOException $e){
            return $e->getMessage();
          }
        }
    }
?>
