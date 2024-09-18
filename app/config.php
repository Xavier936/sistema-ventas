<?php

define('SERVIDOR','localhost');
define('USUARIO', 'root');
define('PASSWORD', 'Abj931214lp');
define('BD','bd_ventas');


$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexion con la base de datos fue exitosa";
}
catch(PDOException $e){
    //print_r($e);
    echo"No se puede Conectar a la base de datos";
}

$URL = "http://localhost/sistema-ventas";

date_default_timezone_set("America/Guayaquil");
$fechaHora = date('Y-m-d H:i:s');

if(isset($_SESSION['mensaje'])){
    $respuesta = $_SESSION['mensaje'];
  
  ?>
  <script>
    Swal.fire({
            icon: "error",
            title: '<?php echo $respuesta; ?>',
            showConfirmButton: false,
            timer: 2500
          });
  </script>
  <?php
    unset($_SESSION['mensaje']);
  }

?>