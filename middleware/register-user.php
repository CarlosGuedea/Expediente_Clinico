<?php

use Stripe\Terminal\Location;

$db = new Base;
$con = $db->ConexionBD();

   if(isset($_POST['nombre'])){

      //Comprobar que sea único el usuario
      // Obtener el nombre de usuario y correo electrónico del formulario de registro
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];

      // Comprobar si el nombre de usuario o correo electrónico ya existen en la base de datos
      $stmt = $con->prepare("SELECT * FROM entrevistador WHERE nombre = ? OR email = ?");
      $stmt->bindParam(1, $nombre);
      $stmt->bindParam(2, $correo);
      $stmt->execute();
      $usuario_existente = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($usuario_existente) {
      // Si ya existe un usuario con el mismo nombre de usuario o correo electrónico,
      // mostrar un mensaje de error al usuario y no hacer la inserción en la base de datos
      $error = "El Usuario ya está registrado. Por favor, ingrese otro.";

      } else {
         try {
         
         // preparación de la consulta SQL
         $stmt = $con->prepare("INSERT INTO entrevistador (nombre, contrasena, email, campo_salud_id, create_time, update_time) VALUES (?, ?, ?, ?, NOW(), NOW())");
         //Recuperar los valores del POST
         $nombre = $_POST['nombre'];
         $correo = $_POST['correo'];
         $campo_salud = $_POST['campo_salud'];
         $contrasena = $_POST['contrasena'];

         if($campo_salud === "Medicina"){
            $campo_salud = 1;
         } else if ($campo_salud === "Nutrición"){
            $campo_salud = 2;
         }else if ($campo_salud === "Psicología"){
            $campo_salud = 3;
         }

         // asignación de valores a la consulta SQL
         $stmt->bindParam(1, $nombre);
         $stmt->bindParam(2, $contrasena);
         $stmt->bindParam(3, $correo);
         $stmt->bindParam(4, $campo_salud);
      
         // ejecución de la consulta SQL
         $stmt->execute();

         $exito = "Usuario registrado con exíto";

         //Redirigir a la pagina de login
         header('Location: /login');
         
         } catch(PDOException $ex){
            echo $ex;
         }
      }
   }   

?>