<?php
class Registro{
    function insertar(){
        try {
              
            $conet=new Db();
            $sql="INSERT INTO `login`(`usuario`, `nombre`, `contrasena`) VALUES ('yohnyspedroza@gmail.com','yohnys pedroza','1234')";   
            $conet->query($sql);
            $rs=mysqli_affected_rows($conet);
            return $rs;
              //code...
          } catch (\Throwable $th) {
              //throw $th;
          }
    }  
}
?>