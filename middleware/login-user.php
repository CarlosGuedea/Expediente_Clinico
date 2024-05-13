<?php
session_start();

error_reporting(0);

$db = new Base;

$conn=$db->ConexionBD();

$correo=htmlspecialchars($_POST['correo']);
$contrasena=htmlspecialchars($_POST['contrasena']);

try{
    if(isset($_POST['correo'])){
        $stmt = $conn->prepare("SELECT * FROM entrevistador WHERE email = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        $truecontrasena=$row['contrasena'];
    
        if($contrasena===$truecontrasena){
            $id = $_SESSION['ID']=$row['id_entrevistador'];
            $usuario = $_SESSION['Usuario']=$row['email'];
            $campo_salud = $_SESSION['Campo_salud'] = $row['campo_salud_id'];
            $_SESSION['contrasena']=$truecontrasena;
            header('Location: /historias');
    
        }
    }
}catch(PDOException $ex){
    echo $ex;
}
